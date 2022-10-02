<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>

    <title>@yield('page_title')</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content=""/>
    <meta http-equiv="content-language" content="{{ app()->getLocale() }}">
    <link rel="stylesheet" href="{{ asset('vendor/webkul/ui/assets/css/ui.css') }}">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-xVVam1KS4+Qt2OrFa+VdRUoXygyKIuNWUUUBZYv+n27STsJ7oDOHJgfF0bNKLMJF" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ bagisto_asset('css/shop.css') }}">
    <link rel="icon" sizes="16x16" href="{{ bagisto_asset('images/favicon.ico') }}" />



    @yield('head')

    @section('seo')

    @show

    @stack('css')



</head>


<body >



    <div id="app">
        @include('shop::layouts.header.index')
        <div class="main-content-wrapper">
            @include('shop::layouts.header.category-nav')

            @yield('content-wrapper')

        </div>
        @include('shop::layouts.footer.index')
    </div>

    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"
            integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <!-- END jquery -->
    <!-- flexslider -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.7.2/jquery.flexslider-min.js"
            integrity="sha512-BmoWLYENsSaAfQfHszJM7cLiy9Ml4I0n1YtBQKfx8PaYpZ3SoTXfj3YiDNn0GAdveOCNbK8WqQQYaSb0CMjTHQ=="
            crossorigin="anonymous"></script>
    <!-- Bootstrap js -->
    <script src="{{asset('js/vendors/bootstrap.bundle.min.js')}}"></script>
    <!-- End Bootstrap js -->
    <!-- custom js scripts -->
    <script src="{{ asset('js/main.js') }}"></script>
    <!-- custom js scripts -->
    <script type="text/javascript" src="{{ bagisto_asset('js/shop.js') }}"></script>

    @stack('scripts')




</body>

</html>