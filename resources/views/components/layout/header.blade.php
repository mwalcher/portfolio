<header>
    <a href="{!! __('global.home.link') !!}" class="logo" title="{!! __('global.home.title') !!}">
        <span class="logo-container">
            @include('logos/mwalcher-logo')
        </span>
    </a>

    @if (issetLang($page.'.navigation'))
    <button id="mobile-menu" type="button" title="Mobile Navigation Toggle">
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
            <li @if ($navItem['icon'] === 'hidden')class="{!! $navItem['icon'] !!}" @endif>
                <a href="{!! $navItem['link'] !!}" title="{!! $navItem['title'] !!}">
                    <span class="icon fa {!! $navItem['icon'] !!}" aria-hidden="true"></span>
                    {!! $navItem['text'] !!}
                </a>
            </li>
            @endforeach
        </ul>
        <ul class="links-navigation">
            @foreach (__('global.contact-links') as $contactLink)
            <li>
                <a
                    href="{!! $contactLink['link'] !!}"
                    target="_blank"
                    rel="noopener"
                    title="{!! $contactLink['title'] !!}"
                    @if (isset($contactLink['disabled']) && $contactLink['disabled'] === true)
                    disabled
                    @endif
                >
                    <span class="icon fa {!! $contactLink['icon'] !!}" aria-hidden="true"></span>
                    {!! $contactLink['text'] !!}
                </a>
            </li>
            @endforeach
        </ul>
        @if ($page !== 'home')
        <a href="{!! __('global.home.link') !!}" class="button" title="{!! __('global.home.title') !!}">
            {!! __('global.home.text') !!}
        </a>
        @endif
    </nav>
    @endif

</header>
