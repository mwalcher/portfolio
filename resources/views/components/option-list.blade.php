@if($properties['title'])
<h2>{{$properties['title']}}</h2>
@endif

<ul class="option-list">
    @foreach ($properties['list'] as $key => $listItem)
    <li
        class="option {{ $key }}@if($properties['toggle'] && $loop->index == 0) active @endif"
        @if($properties['toggle'])
        data-toggle="{{ $key }}"
        data-parent="{{ $properties['toggle'] }}"
        data-scroll="true"
        @endif
        @if (isset($listItem['disabled']) && $listItem['disabled'] === true)
        disabled
        @endif
    >

        @if(!$properties['toggle'])
        <a href="{{__('global.projects.'.$key.'.link')}}" class="option-link" title="{!! $listItem['name'] !!}">
            <span class="invisible">{!! $listItem['name'] !!}</span>
        </a>
        @endif

        <div class="absolute-background" style="background-image: url({{ $listItem['image'] }})"></div>
        <div class="content">
            @if (isset($listItem['disabled']) && $listItem['disabled'] === true)
            <h3><span class="invisible">{!! $listItem['name'] !!} </span>({!! $properties['disabled-text'] !!})</h3>
            @else
            <h3>{!! $listItem['name'] !!}</h3>
            @endif
        </div>

    </li>
    @endforeach
</ul>
