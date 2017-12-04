<div class="preview-slider-container">
    <ul class="preview-slider">
        @foreach ($properties['list'] as $key => $listItem)
        <li class="slide">
            <img src="{{$listItem['src']}}" alt="{{$listItem['alt']}}" />
        </li>
        @endforeach
    </ul>
</div>
