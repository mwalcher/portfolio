<div id="featured-content">
    @foreach ($properties['list'] as $key => $listItem)
    <div class="featured-container {{ $key }} @if($loop->index == 0)active @endif" data-toggle-content="{{ $key }}" data-parent="featured-content">
        <div class="absolute-background" style="background-image: url({{ $listItem['image'] }})"></div>
        <div class="content">
            <p class="title">{!! $listItem['name'] !!}</p>
            <p class="description">{!! $listItem['description'] !!}</p>
            <a
                href="{!! $listItem['link'] !!}"
                class="button"
                title="View {!! $listItem['name'] !!}"
                @if (isset($listItem['disabled']) && $listItem['disabled'] === true)
                disabled
                @endif
            >
                @if (isset($listItem['disabled']) && $listItem['disabled'] === true)
                {!! $properties['cta-disabled'] !!}
                @else
                {!! $properties['cta'] !!}
                @endif
            </a>
        </div>
    </div>
    @endforeach
</div>

@component(
    'components/option-list',
    [
        'properties' => [
            'title' => false,
            'list' => $properties['list'],
            'toggle' => 'featured-content',
            'disabled-text' => $properties['cta-disabled']
        ]
    ]
)@endcomponent
