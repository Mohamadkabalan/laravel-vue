
@extends('shop::layouts.master')

@section('seo')
@stop

@section('content-wrapper')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9 col-lg-6 box-section-wrapper">
                <div class="box-section">
                    <div class="box-section__head heading">
                        <h3>Sign In</h3>
                    </div>
                    <login></login>
                </div>
                <div class="text-center">
                    <p>New to 2AGunShow?</p>
                    <a href="sign-up.html" class="btn btn-outline-primary">Create an account</a>
                </div>
            </div>
        </div>
    </div>

@stop
