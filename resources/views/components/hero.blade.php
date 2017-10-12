<section
    @if(__($page.'.hero.id') !== $page.'.hero.id') id="{!! __($page.'.hero.id') !!}" @endif
    class="hero section @if ($tabContentList)hero-tab-content @endif">

    <div class="hero-content">
        <h1>{!! __($page.'.hero.main-title') !!}</h1>

        @if(__($page.'.hero.sub-title') !== $page.'.hero.sub-title')
            <h2>{!! __($page.'.hero.sub-title') !!}</h2>
        @endif

        @if(__($page.'.hero.content') !== $page.'.hero.content')
            <p>{!! __($page.'.hero.content') !!}</p>
        @endif

        @if(__($page.'.hero.button') !== $page.'.hero.button')
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
