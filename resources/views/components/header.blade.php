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
                <a href="https://www.linkedin.com/in/mwalcher/" target="_blank" class="no-hover" title="Matthew Walcher on LinkedIn">
                    <span class="icon fa fa-linkedin" aria-hidden="true"></span>
                    LinkedIn
                </a>
            </li>
            <li>
                <a href="https://github.com/mwalcher" target="_blank" class="no-hover" title="Matthew Walcher on Github">
                    <span class="icon fa fa-github" aria-hidden="true"></span>
                    Github
                </a>
            </li>
            <li>
                <a href="{{ asset('images') }}/mwalcher-resume.pdf" target="_blank" class="no-hover" title="Matthew Walcher's Resume">
                    <span class="icon fa fa-file-text" aria-hidden="true"></span>
                    Resume
                </a>
            </li>
        </ul>
    </nav>
</header>
