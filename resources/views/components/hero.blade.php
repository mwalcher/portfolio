<section id="{!! __($page.'.hero.id') !!}" class="hero section">
    <div class="hero-content">
        <h1>{!! __($page.'.hero.main-title') !!}</h1>
        <h2>{!! __($page.'.hero.sub-title') !!}</h2>
        <p>{!! __($page.'.hero.content') !!}</p>
    </div>

    <div class="tab-content">
        <div class="tab-container">
            @foreach (__($page.'.tab-content') as $tabContent)
            <button class="tab @if($loop->index == 0)active @endif" data-toggle="{!! $tabContent['title'] !!}" title="{!! $tabContent['title'] !!}">{!! $tabContent['title'] !!}</button>
            @endforeach
        </div>

        <div class="tab-content-container">
            @foreach (__($page.'.tab-content') as $tabContent)
            <div class="content-container @if($loop->index == 0)active @endif" data-toggle-content="{!! $tabContent['title'] !!}">
                <h2 class="invisible">{!! $tabContent['title'] !!}</h2>
                @if ($tabContent['list'])
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
</section>
