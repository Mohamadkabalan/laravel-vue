<?php

namespace Webkul\Customer\Http\Controllers;

use Cookie;
use Illuminate\Support\Facades\Event;
use Webkul\Customer\Http\Requests\CustomerLoginRequest;

class SessionController extends Controller
{
    /**
     * Contains route related configuration.
     *
     * @var array
     */
    protected $_config;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('customer')->except(['show', 'create']);

        $this->_config = request('_config');
    }

    /**
     * Display the resource.
     *
     * @return \Illuminate\View\View
     */
    public function show()
    {
        return auth()->guard('customer')->check()
            ? redirect()->route('customer.profile.index')
            : view($this->_config['view']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \Webkul\Customer\Http\Requests\CustomerLoginRequest $request
     * @return \Illuminate\Http\Response
     */
    public function create(CustomerLoginRequest $request)
    {
      $request->validated();

      if (! auth()->guard('customer')->attempt($request->only(['email', 'password']))) {
        return response()->json(['status'=>'failed','message'=>'Credentials Error','redirect' => route('customer.session.index')],200);
      }

      if (auth()->guard('customer')->user()->status == 0) {
        auth()->guard('customer')->logout();

        return response()->json(['status'=>'failed','message'=>'User is not active','redirect' => route('customer.session.index')],200);
      }

      if (auth()->guard('customer')->user()->is_verified == 0) {


        Cookie::queue(Cookie::make('enable-resend', 'true', 1));

        Cookie::queue(Cookie::make('email-for-resend', $request->get('email'), 1));

        auth()->guard('customer')->logout();

        return response()->json(['status'=>'failed','message'=>'User is not verified','redirect' => route('customer.session.index')],200);
      }

      /**
       * Event passed to prepare cart after login.
       */
      Event::dispatch('customer.after.login', $request->get('email'));

      return response()->json(['status'=>'success','message'=>'You have logged in successfully','redirect' => route('shop.home.index')],200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        auth()->guard('customer')->logout();

        Event::dispatch('customer.after.logout', $id);

        return redirect()->route($this->_config['redirect']);
    }
}
