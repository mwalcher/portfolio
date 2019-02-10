@php $view = substr($view, strlen('errors::')); @endphp
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    @component('components/head/meta-tags')@endcomponent

    @component('components/head/gtm-head')@endcomponent

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
<body class="error error-{!! $view !!}">
    @component('components/head/gtm-body')@endcomponent

    <div class="fixed-background" style="background-image: url({{ __($view.'.background') }})"></div>

    @component(
        'components/layout/header',
        [
            'page' => $view
        ]
    )@endcomponent

    <main>
        @component(
            'components/layout/hero',
            [
                'page' => $view,
                'tabContentList' => FALSE
            ]
        )@endcomponent
    </main>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
