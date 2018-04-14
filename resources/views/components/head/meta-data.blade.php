<title>{!! __($page.'.title') !!}</title>
<meta name="description" content="{!! __($page.'.description') !!}">

<meta property="og:title" content="{!! __($page.'.title') !!}" />
<meta property="og:type" content="website" />
<meta property="og:url" content="{!! __('meta.url') !!}" />
<meta property="og:image" content="{{ __($page.'.meta-image.src') }}" />
<meta property="og:image:width" content="{!! __($page.'.meta-image.width') !!}" />
<meta property="og:image:height" content="{!! __($page.'.meta-image.height') !!}" />
<meta property="og:description" content="{!! __($page.'.description') !!}" />
<meta property="og:site_name" content="{!! __($page.'.title') !!}" />

<meta name="twitter:card" content="summary">
<meta name="twitter:title" content="{!! __($page.'.title') !!}">
<meta name="twitter:description" content="{!! __($page.'.description') !!}">
<meta name="twitter:image" content="{{ __($page.'.meta-image.src') }}">
