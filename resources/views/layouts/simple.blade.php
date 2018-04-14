<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    @component('components/head/meta-tags')@endcomponent
    @component('components/head/favicons')@endcomponent
    @component(
        'components/head/meta-data',
        [
            'page' => $view
        ]
    )@endcomponent
    @component('components/head/scripts')@endcomponent
    @component('components/head/styles')@endcomponent
</head>
<body class="simple {!! $view !!}">
    <div class="fixed-background" style="background-image: url({{ __($view.'.background') }})"></div>

    <main>
        @yield('content')
    </main>

</body>
</html>
