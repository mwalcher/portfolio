@if($properties['title'])
<h2>{{$properties['title']}}</h2>
@endif

<ul class="option-list">
    @foreach ($properties['list'] as $key => $listItem)
    <li class="option {{ $key }} @if($properties['toggle'] && $loop->index == 0)active @endif"
        @if($properties['toggle'])
        data-toggle="{{ $key }}"
        data-parent="{{ $properties['toggle'] }}"
        data-scroll="true"
        @endif>

        @if(!$properties['toggle'])
        <a href="{{route($key)}}" class="option-link no-hover" title="{!! $listItem['name'] !!}">
            <span class="invisible">{!! $listItem['name'] !!}</span>
        </a>
        @endif

        <div class="absolute-background" style="background-image: url({{ $listItem['image'] }})"></div>
        <div class="content">
            <h3>{!! $listItem['name'] !!}</h3>
        </div>

    </li>
    @endforeach
</ul>
