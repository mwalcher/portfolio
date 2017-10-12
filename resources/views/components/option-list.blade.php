@if($title)
<h2>{{$title}}</h2>
@endif

<ul class="option-list">
    @foreach ($list as $key => $listItem)
    <li class="option {{ $key }} @if($toggle && $loop->index == 0)active @endif"
        @if($toggle)
        data-toggle="{{ $key }}"
        data-parent="{{ $toggle }}"
        data-scroll="true"
        @endif>

        @if(!$toggle)
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
