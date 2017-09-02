<header>
    <a href="{{ route('home') }}" class="logo no-hover" title="Home">
        <span class="logoContainer">
            @include('logos/mwalcher-logo')
        </span>
    </a>

    @if (__($page.'.navigation') !== $page.'.navigation')
    <button id="mobile-menu">
        <span class="invisible">Menu</span>
        <span class="icon">
            <span></span>
            <span></span>
            <span></span>
        </span>
    </button>

    <nav class="main-navigation">
        <h2>Navigation</h2>
        <ul class="page-navigation">
            @foreach (__($page.'.navigation') as $navItem)
            <li>
                <a href="{!! $navItem['link'] !!}" class="no-hover" title="{!! $navItem['title'] !!}">
                    <span class="icon fa {!! $navItem['icon'] !!}" aria-hidden="true"></span>
                    {!! $navItem['text'] !!}
                </a>
            </li>
            @endforeach
        </ul>
        <ul class="links-navigation">
            <li>
                <a href="{!! __('global.linkedin.link') !!}" target="_blank" class="no-hover" title="{!! __('global.linkedin.title') !!}">
                    <span class="icon fa {!! __('global.linkedin.icon') !!}" aria-hidden="true"></span>
                    {!! __('global.linkedin.text') !!}
                </a>
            </li>
            <li>
                <a href="{!! __('global.github.link') !!}" target="_blank" class="no-hover" title="{!! __('global.github.title') !!}">
                    <span class="icon fa {!! __('global.github.icon') !!}" aria-hidden="true"></span>
                    {!! __('global.github.text') !!}
                </a>
            </li>
            <li>
                <a href="{!! __('global.resume.link') !!}" target="_blank" class="no-hover" title="{!! __('global.resume.title') !!}">
                    <span class="icon fa {!! __('global.resume.icon') !!}" aria-hidden="true"></span>
                    {!! __('global.resume.text') !!}
                </a>
            </li>
        </ul>
    </nav>
    @endif

</header>
