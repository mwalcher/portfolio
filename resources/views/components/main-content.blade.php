<section id="{!! __($page.'.main-content.id') !!}" class="main-content light-section section">
    <h2>{!! __($page.'.main-content.main-title') !!}</h2>

    @if ($featuredContent)
        @component(
            'components/featured-content',
            [
                'list' => $featuredContent,
                'cta' => $featuredCTA,
            ]
        )@endcomponent
    @endif

</section>
