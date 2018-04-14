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
    @component('components/head/styles')@endcomponent
    @component('components/head/scripts')@endcomponent
</head>
<body class="{!! $view !!}">
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
                'tabContentList' => issetLang($view.'.tab-content') ? __($view.'.tab-content') : FALSE
            ]
        )@endcomponent

        @component(
            'components/layout/main-content',
            [
                'page' => $view,
                'components' => issetLang($view.'.main-content.components') ? __($view.'.main-content.components') : FALSE
            ]
        )@endcomponent
    </main>

    @component(
        'components/layout/footer',
        [
            'page' => $view
        ]
    )@endcomponent

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
