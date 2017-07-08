<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

    <title>{!! __('meta.title') !!}</title>
    <meta name="description" content="{!! __('meta.description') !!}">

    <meta property="og:title" content="{!! __('meta.title') !!}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://www.mwalcher.com" />
    <meta property="og:image" content="{!! __('meta.image.src') !!}" />
    <meta property="og:image:width" content="{!! __('meta.image.width') !!}" />
    <meta property="og:image:height" content="{!! __('meta.image.height') !!}" />
    <meta property="og:description" content="{!! __('meta.description') !!}" />
    <meta property="og:site_name" content="{!! __('meta.title') !!}" />

    <meta name="twitter:card" content="summary">
    <meta name="twitter:creator" content="@mrwalcher">
    <meta name="twitter:title" content="{!! __('meta.title') !!}">
    <meta name="twitter:description" content="{!! __('meta.description') !!}">
    <meta name="twitter:image" content="{!! __('meta.image.src') !!}">
</head>
<body>
    <h1>{!! __('meta.title') !!}</h1>
</body>
</html>
