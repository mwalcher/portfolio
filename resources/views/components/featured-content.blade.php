<div id="featured-content">
    @foreach ($list as $key => $listItem)
    <div class="featured-container {{ $key }} @if($loop->index == 0)active @endif" data-toggle-content="{{ $key }}" data-parent="featured-content">
        <div class="absolute-background" style="background-image: url({{ $listItem['image'] }})"></div>
        <div class="content">
            <p class="title">{!! $listItem['name'] !!}</p>
            <p class="description">{!! $listItem['description'] !!}</p>
            <a href="{!! $listItem['link'] !!}" class="button" title="View {!! $listItem['name'] !!}">{!! $cta !!}</a>
        </div>
    </div>
    @endforeach
</div>

<ul class="option-list">
    @foreach ($list as $key => $listItem)
    <li class="option {{ $key }} @if($loop->index == 0)active @endif" data-toggle="{{ $key }}" data-parent="featured-content" data-scroll="true">
        <div class="absolute-background" style="background-image: url({{ $listItem['image'] }})"></div>
        <div class="content">
            <h3>{!! $listItem['name'] !!}</h3>
        </div>
    </li>
    @endforeach
</ul>
