<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

    <link rel="apple-touch-icon" sizes="180x180" href="/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicons/favicon-16x16.png">
    <link rel="manifest" href="/favicons/manifest.json">
    <link rel="mask-icon" href="/favicons/safari-pinned-tab.svg" color="#339933">
    <link rel="shortcut icon" href="/favicons/favicon.ico">
    <meta name="apple-mobile-web-app-title" content="mwalcher">
    <meta name="application-name" content="mwalcher">
    <meta name="msapplication-TileColor" content="#339933">
    <meta name="msapplication-TileImage" content="/favicons/mstile-144x144.png">
    <meta name="msapplication-config" content="/favicons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">

    <title>{!! __('meta.title') !!}</title>
    <meta name="description" content="{!! __('meta.description') !!}">

    <meta property="og:title" content="{!! __('meta.title') !!}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://www.mwalcher.com" />
    <meta property="og:image" content="{{ asset('images/') }}{{ __('meta.image.src') }}" />
    <meta property="og:image:width" content="{!! __('meta.image.width') !!}" />
    <meta property="og:image:height" content="{!! __('meta.image.height') !!}" />
    <meta property="og:description" content="{!! __('meta.description') !!}" />
    <meta property="og:site_name" content="{!! __('meta.title') !!}" />

    <meta name="twitter:card" content="summary">
    <meta name="twitter:creator" content="@mrwalcher">
    <meta name="twitter:title" content="{!! __('meta.title') !!}">
    <meta name="twitter:description" content="{!! __('meta.description') !!}">
    <meta name="twitter:image" content="{{ asset('images/') }}{{ __('meta.image.src') }}">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:900|Poppins:300,400" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    @component('components/header')@endcomponent

    @yield('hero')

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
