<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="description" content="">
    <!-- Twitter meta-->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@raisulhridoy">
    <meta property="twitter:creator" content="@raisulhridoy">
    <!-- Open Graph Meta-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Admin Panel">
    <meta property="og:title" content="Admin Panel BoilerPlate">
    <meta property="og:url" content="{{url('/')}}">
    <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
    <meta property="og:description" content="">
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/main.css')}}">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    @yield('style')
</head>
<body class="app sidebar-mini">
<!-- Header-->
@include('layouts.header')
<!-- Sidebar menu-->
@include('layouts.sidebar')
<!-- Body content-->
@yield('content')
<!-- Essential javascripts for application to work-->
<script src="{{asset('assets/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>
<!-- The javascript plugin to display page loading on top-->
<script src="{{asset('assets/js/plugins/pace.min.js')}}"></script>
<!-- Extra JS-->
@yield('script')
</body>
</html>
