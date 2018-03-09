<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <!--[if lt IE 9]>
    <script type="text/javascript" src="{{asset('lib/es5/es5-sham.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('lib/es5/es5-shim.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('lib/respond/respond.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('lib/html5shiv/html5.min.js')}}"></script>
    <![endif]-->
    <link rel="stylesheet" href="{!! asset('lib/slick/slick.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('lib/slick/slick-theme.min.css') !!}">
    <link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    @yield('css')
</head>
@yield('content')
</html>