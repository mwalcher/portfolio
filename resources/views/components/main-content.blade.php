<section id="{!! __($page.'.main-content.id') !!}" class="main-content light-section section">
    <h2>{!! __($page.'.main-content.main-title') !!}</h2>

    @if(__($page.'.main-content.featured-content'))
    <div class="featured-content">
        @foreach (__($page.'.main-content.featured-content') as $project)
            {!! $project['name'] !!}
        @endforeach
    </div>
    @endif
</section>
