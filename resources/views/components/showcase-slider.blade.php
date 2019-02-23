<div class="showcase-slider-container">
    @if (isset($properties['cta']))
        <a
            class="button center"
            href="{!! $properties['cta']['link'] !!}"
            target="_blank"
            rel="noopener"
            title="{!! $properties['cta']['title'] !!}"
        >{!! $properties['cta']['text'] !!}</a>
    @endif
    <ul class="showcase-slider">
        @foreach ($properties['list'] as $key => $listItem)
        <li class="slide">
            <img src="{!! $listItem['src'] !!}" alt="{!! $listItem['alt'] !!}" />
        </li>
        @endforeach
    </ul>
</div>
