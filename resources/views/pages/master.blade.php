<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield('title','Home Page')</title>
    <link href="{{ asset('pages/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('pages/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('pages/css/prettyPhoto.css') }}" rel="stylesheet">
    <link href="{{ asset('pages/css/price-range.css') }}" rel="stylesheet">
    <link href="{{ asset('pages/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('pages/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('pages/css/responsive.css') }}" rel="stylesheet">
    <!--[if lt IE 9]>
    <![endif]-->
    <link rel="shortcut icon" href="{{ asset('pages/images/ico/favicon.ico') }}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144"
        href="{{ asset('pages/images/ico/apple-touch-icon-144-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114"
        href="{{ asset('pages/images/ico/apple-touch-icon-114-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72"
        href="{{ asset('pages/images/ico/apple-touch-icon-72-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('pages/images/ico/apple-touch-icon-57-precomposed.png') }}">
</head>
<!--/head-->

<body>
    @include('pages.header')
    @include('pages.slider')
    @include('pages.sidebar')
    @include('pages.footer')

    <script src="{{ asset('pages/js/jquery.js') }}"></script>
    <script src="{{ asset('pages/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('pages/js/jquery.scrollUp.min.js') }}"></script>
    <script src="{{ asset('pages/js/price-range.js') }}"></script>
    <script src="{{ asset('pages/js/jquery.prettyPhoto.js') }}"></script>
    <script src="{{ asset('pages/js/main.js') }}"></script>
</body>

</html>