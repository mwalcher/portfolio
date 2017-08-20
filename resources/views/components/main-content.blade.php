<section id="{!! __($page.'.main-content.id') !!}" class="main-content light-section section">
    <h2>{!! __($page.'.main-content.main-title') !!}</h2>

    @if(__($page.'.main-content.featured-content'))
    <?php $projects = __($page.'.main-content.featured-content'); ?>
    <div id="featured-content">
        @foreach ($projects as $key => $project)
        <div class="featured-container {{ $key }} @if($loop->index == 0)active @endif" data-toggle-content="{{ $key }}" data-parent="featured-content">
            <div class="absolute-background" style="background-image: url({{ $project['image'] }})"></div>
            <div class="content">
                <p class="title">{!! $project['name'] !!}</p>
                <p class="description">{!! $project['description'] !!}</p>
                <a href="{!! $project['link'] !!}" class="button" title="View {!! $project['name'] !!}">View Project</a>
            </div>
        </div>
        @endforeach
    </div>

    <ul class="project-list">
        @foreach ($projects as $key => $project)
        <li class="project {{ $key }} @if($loop->index == 0)active @endif" data-toggle="{{ $key }}" data-parent="featured-content" data-scroll="true">
            <div class="absolute-background" style="background-image: url({{ $project['image'] }})"></div>
            <div class="content">
                <h3>{!! $project['name'] !!}</h3>
            </div>
        </li>
        @endforeach
    </ul>
    @endif
</section>
