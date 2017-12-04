<div class="preview-slider-container">
    <a class="button center" href="{!! $properties['cta']['link'] !!}" target="_blank" title="{!! $properties['cta']['title'] !!}">
        {!! $properties['cta']['text'] !!}
    </a>
    <ul class="preview-slider">
        @foreach ($properties['list'] as $key => $listItem)
        <li class="slide">
            <img src="{!! $listItem['src'] !!}" alt="{!! $listItem['alt'] !!}" />
        </li>
        @endforeach
    </ul>
</div>