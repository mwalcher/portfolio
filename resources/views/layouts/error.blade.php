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

    <title>{!! __('404.title') !!}</title>
    <meta name="description" content="{!! __('404.description') !!}">

    <meta property="og:title" content="{!! __('404.title') !!}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{!! __('meta.url') !!}" />
    <meta property="og:image" content="{{ __('404.meta-image.src') }}" />
    <meta property="og:image:width" content="{!! __('404.meta-image.width') !!}" />
    <meta property="og:image:height" content="{!! __('404.meta-image.height') !!}" />
    <meta property="og:description" content="{!! __('404.description') !!}" />
    <meta property="og:site_name" content="{!! __('404.title') !!}" />

    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="{!! __('404.title') !!}">
    <meta name="twitter:description" content="{!! __('404.description') !!}">
    <meta name="twitter:image" content="{{ __('404.meta-image.src') }}">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:900|Poppins:300,400" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <noscript>
        <link rel="stylesheet" href="{{ asset('css/noscript.css') }}">
    </noscript>

    <script src="https://use.fontawesome.com/9cc2906ee2.js"></script>
</head>
<body class="error">
    <div class="fixed-background" style="background-image: url({{ __('404.background') }})"></div>

    @component(
        'components/header',
        [
            'page' => '404'
        ]
    )@endcomponent

    <main>
        @component(
            'components/hero',
            [
                'page' => '404',
                'tabContentList' => FALSE
            ]
        )@endcomponent
    </main>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
