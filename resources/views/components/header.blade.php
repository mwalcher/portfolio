<header>
    <a href="/" class="logo no-hover" title="Home">
        <img src="images/mwalcher-logo-light.svg" alt="mwalcher logo" />
    </a>

    <button id="mobile-menu">
        <span class="invisible">Menu</span>
        <span class="icon">
            <span></span>
            <span></span>
            <span></span>
        </span>
    </button>

    <nav>
        <ul class="page-navigation">
            @foreach (__($page.'.navigation') as $navItem)
            <li>
                <a href="{!! $navItem['link'] !!}" title="{!! $navItem['title'] !!}">{!! $navItem['text'] !!}</a>
            </li>
            @endforeach
        </ul>
        <ul class="links-navigation">
            <li>
                <a href="https://www.linkedin.com/in/mwalcher/" target="_blank" title="Matthew Walcher on LinkedIn">LinkedIn</a>
            </li>
            <li>
                <a href="https://github.com/mwalcher" target="_blank" title="Matthew Walcher on Github">Github</a>
            </li>
            <li>
                <a href="{{ asset('images') }}/mwalcher-resume.pdf" target="_blank" title="Matthew Walcher's Resume">Resume</a>
            </li>
        </ul>
    </nav>
</header>
