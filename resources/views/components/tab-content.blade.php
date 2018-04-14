<div class="tab-content">
    <div class="tab-container">
        @foreach ($list as $listItem)
        <button class="tab @if($loop->index == 0)active @endif" data-toggle="{!! $listItem['title'] !!}" data-parent="tab-content" title="{!! $listItem['title'] !!}">{!! $listItem['title'] !!}</button>
        @endforeach
    </div>

    <div class="tab-content-container">
        @foreach ($list as $listItem)
        <div class="content-container @if($loop->index == 0)active @endif" data-toggle-content="{!! $listItem['title'] !!}"  data-parent="tab-content">
            <h2 class="invisible">{!! $listItem['title'] !!}</h2>
            @if (isset($listItem['list']))
            <div class="interactive-icon-block">
                @foreach ($listItem['list'] as $listItem)
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
