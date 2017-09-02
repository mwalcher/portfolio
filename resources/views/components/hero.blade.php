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
            <a href="/" class="button center" title="{!! __($page.'.hero.button') !!}">{!! __($page.'.hero.button') !!}</a>
        @endif
    </div>

    @if ($tabContentList)
    <div class="tab-content">
        <div class="tab-container">
            @foreach ($tabContentList as $tabContent)
            <button class="tab @if($loop->index == 0)active @endif" data-toggle="{!! $tabContent['title'] !!}" data-parent="tab-content" title="{!! $tabContent['title'] !!}">{!! $tabContent['title'] !!}</button>
            @endforeach
        </div>

        <div class="tab-content-container">
            @foreach ($tabContentList as $tabContent)
            <div class="content-container @if($loop->index == 0)active @endif" data-toggle-content="{!! $tabContent['title'] !!}"  data-parent="tab-content">
                <h2 class="invisible">{!! $tabContent['title'] !!}</h2>
                @if (isset($tabContent['list']))
                <div class="interactive-icon-block">
                    @foreach ($tabContent['list'] as $listItem)
                    <div class="icon-container">
                        <div class="shape">
                            <div class="icon">
                                <div class="image" style="background-image:url('{!! asset('images') !!}/icon-{!! $listItem['icon'] !!}.svg');"></div>
                            </div>
                            <div class="label">
                                <h3>{!! $listItem['label'] !!}</h3>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                @endif
            </div>
            @endforeach
        </div>
    </div>
    @endif

</section>
