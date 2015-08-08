<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') </title>
    {{--standard meta tags--}}
    <meta name="description"
          content="XXXX">
    <meta name="keywords" content="XXXX">
    <link rel="author" href="XXXX"/>
    <meta name="application-name" content="XXXX"/>
    <!-- for Facebook -->
    <meta property="og:title" content="@yield('title')"/>
    <meta property="og:type" content="website"/>
    <meta property="og:image" content="{{ URL::asset('/img/ogp/facebook.png') }}"/>
    <meta property="og:url" content="{{ Request::url() }}"/>
    <meta property="og:description"
          content="XXXX"/>
    <!-- for Twitter -->
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:title" content="@yield('title')"/>
    <meta name="twitter:description"
          content="XXXX"/>
    <meta name="twitter:image" content="{{ URL::asset('/img/ogp/twitter.png') }}"/>
    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="57x57" href="{{ URL::asset('/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ URL::asset('/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ URL::asset('/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ URL::asset('/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ URL::asset('/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ URL::asset('/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ URL::asset('/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ URL::asset('/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ URL::asset('/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ URL::asset('/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ URL::asset('/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ URL::asset('/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ URL::asset('/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ URL::asset('/manifest.json') }}">
    <meta name="msapplication-TileColor" content="#333333">
    <meta name="msapplication-TileImage" content="{{ URL::asset('/ms-icon-144x144.png') }}">
    <meta name="theme-color" content="#333333">
    <link rel="shortcut icon" href="{{ URL::asset('/favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ URL::asset('/favicon.ico') }}" type="image/x-icon">


    <link rel="stylesheet" href="{{ URL::asset('/css/app.css') }}"/>
    <link href='http://fonts.googleapis.com/css?family=Roboto:500,400,300' rel='stylesheet' type='text/css'>
</head>

<body>

@yield('content')


@include('partials.footer')

@include('partials.ga')


<link rel="stylesheet" href="{{ URL::asset('/css/fontawesome.min.css') }}">


<script src="{{ URL::asset('/js/jquery.js') }}"></script>
<script src="{{ URL::asset('/js/bootstrap.min.js') }}"></script>


@yield('body_includes')


</body>
</html>