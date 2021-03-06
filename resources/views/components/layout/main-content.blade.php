<section id="{!! __($page.'.main-content.id') !!}" class="main-content light-section section">

    @if (issetLang($page.'.main-content.main-title'))
        <h2>{!! __($page.'.main-content.main-title') !!}</h2>
    @endif

    @if ($components)
        @foreach ($components as $name => $properties)
            @component(
                'components/'.$name,
                [
                    'properties' => $properties,
                ]
            )@endcomponent
        @endforeach
    @endif

</section>
