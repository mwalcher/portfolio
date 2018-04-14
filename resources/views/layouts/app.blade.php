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

    <title>{!! __($view.'.title') !!}</title>
    <meta name="description" content="{!! __($view.'.description') !!}">

    <meta property="og:title" content="{!! __($view.'.title') !!}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{!! __('meta.url') !!}" />
    <meta property="og:image" content="{{ __($view.'.meta-image.src') }}" />
    <meta property="og:image:width" content="{!! __($view.'.meta-image.width') !!}" />
    <meta property="og:image:height" content="{!! __($view.'.meta-image.height') !!}" />
    <meta property="og:description" content="{!! __($view.'.description') !!}" />
    <meta property="og:site_name" content="{!! __($view.'.title') !!}" />

    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="{!! __($view.'.title') !!}">
    <meta name="twitter:description" content="{!! __($view.'.description') !!}">
    <meta name="twitter:image" content="{{ __($view.'.meta-image.src') }}">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:900|Poppins:300,400" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <noscript>
        <link rel="stylesheet" href="{{ asset('css/noscript.css') }}">
    </noscript>

    <script src="https://use.fontawesome.com/9cc2906ee2.js"></script>
</head>
<body class="{!! $view !!}">
    <div class="fixed-background" style="background-image: url({{ __($view.'.background') }})"></div>

    @component(
        'components/header',
        [
            'page' => $view
        ]
    )@endcomponent

    <main>
        @component(
            'components/hero',
            [
                'page' => $view,
                'tabContentList' => issetLang($view.'.tab-content') ? __($view.'.tab-content') : FALSE
            ]
        )@endcomponent

        @component(
            'components/main-content',
            [
                'page' => $view,
                'components' => issetLang($view.'.main-content.components') ? __($view.'.main-content.components') : FALSE
            ]
        )@endcomponent
    </main>

    @component(
        'components/footer',
        [
            'page' => $view
        ]
    )@endcomponent

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
