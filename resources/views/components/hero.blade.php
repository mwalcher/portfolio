<section
    @if (issetLang($page.'.hero.id')) id="{!! __($page.'.hero.id') !!}" @endif
    class="hero section @if ($tabContentList)hero-tab-content @endif">

    <div class="hero-content">
        @if (issetLang($page.'.hero.main-title'))
            <h1>{!! __($page.'.hero.main-title') !!}</h1>
        @endif

        @if (issetLang($page.'.hero.sub-title'))
            <h2>{!! __($page.'.hero.sub-title') !!}</h2>
        @endif

        @if (issetLang($page.'.hero.content'))
            <p>{!! __($page.'.hero.content') !!}</p>
        @endif

        @if (issetLang($page.'.hero.button'))
            <a href="{!! __($page.'.hero.button.link') !!}" class="button center" title="{!! __($page.'.hero.button.title') !!}">
                {!! __($page.'.hero.button.text') !!}
            </a>
        @endif
    </div>

    @if ($tabContentList)
        @component(
            'components/tab-content',
            [
                'list' => $tabContentList
            ]
        )@endcomponent
    @endif

</section>
