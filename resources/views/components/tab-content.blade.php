<div class="tab-content">
    <div class="tab-container">
        @foreach ($list as $listItem)
        @php
            $buttonClasses = ['tab'];
            if($loop->index == 0){
                array_push($buttonClasses, 'active');
            }
        @endphp
        <button
            class="{{ implode(' ', $buttonClasses) }}"
            data-toggle="{!! $listItem['title'] !!}"
            data-parent="tab-content"
            title="{!! $listItem['title'] !!}"
        >{!! $listItem['title'] !!}</button>
        @endforeach
    </div>

    <div class="tab-content-container">
        @foreach ($list as $listItem)
        @php
            $containerClasses = ['content-container'];
            $contentClasses = ['content'];
            if($loop->index == 0){
                array_push($containerClasses, 'active');
            }
            if(isset($listItem['list'])){
                array_push($contentClasses, 'no-scroll');
            }
        @endphp
        <div
            class="{{ implode(' ', $containerClasses) }}"
            data-toggle-content="{!! $listItem['title'] !!}"
            data-parent="tab-content"
        >
            <div class="{{ implode(' ', $contentClasses) }}">
                <h2 class="invisible">{!! $listItem['title'] !!}</h2>

                @if (isset($listItem['content']))
                    @foreach ($listItem['content'] as $key => $content)
                    <p>{!! $content !!}</p>
                    @endforeach
                @endif

                @if (isset($listItem['list']))
                <div class="interactive-icon-block">
                    @foreach ($listItem['list'] as $key => $content)
                    <div class="icon-container">
                        <div class="shape">
                            <div class="icon">
                                <div
                                    class="image"
                                    style="background-image:url('{!! asset('images') !!}/icon-{!! $key !!}.svg');"
                                ></div>
                            </div>
                            <div class="label">
                                <h3>{!! $content['label'] !!}</h3>
                            </div>
                        </div>
                        @if (isset($content['link']))
                        <a
                            class="icon-link"
                            href="{!! $content['link'] !!}"
                            target="_blank"
                            rel="noopener"
                            title="{!! $content['label'] !!}"
                            aria-label="{!! $content['label'] !!}"
                        >
                            <span class="invisible">{!! $content['label'] !!}</span>
                        </a>
                        @endif
                    </div>
                    @endforeach
                </div>
                @endif
            </div>
        </div>
        @endforeach
    </div>
</div>
