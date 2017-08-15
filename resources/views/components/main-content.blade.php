<section id="{!! __($page.'.main-content.id') !!}" class="main-content light-section section">
    <h2>{!! __($page.'.main-content.main-title') !!}</h2>

    @if(__($page.'.main-content.featured-content'))
    <?php
    $projects = __($page.'.main-content.featured-content');
    $default = reset($projects);
    ?>
    <div class="featured-content">
        <div class="absolute-background" style="background-image: url({{ $default['image'] }})"></div>
        <div class="content">
            <p class="title">{!! $default['name'] !!}</p>
            <p class="description">{!! $default['description'] !!}</p>
            <a href="{!! $default['link'] !!}" class="button" title="View {!! $default['name'] !!}">View Project</a>
        </div>
    </div>

    <ul class="project-list">
        @foreach (__($page.'.main-content.featured-content') as $project)
        <li>
            {!! $project['name'] !!}
        </li>
        @endforeach
    </ul>
    @endif
</section>
