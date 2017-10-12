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

@component(
    'components/option-list',
    [
        'list' => $list,
        'toggle' => false,
    ]
)@endcomponent
