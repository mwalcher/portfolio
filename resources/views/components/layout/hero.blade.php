@php
    $sectionClasses = ['hero', 'section'];
    if($tabContentList){
        array_push($sectionClasses, 'hero-tab-content');
    }
@endphp
<section
    @if (issetLang($page.'.hero.id')) id="{!! __($page.'.hero.id') !!}" @endif
    class="{{ implode(' ', $sectionClasses) }}"
>

    <div class="hero-content">
        @if (issetLang($page.'.hero.logo'))
            <div class="logo-container">
                @if (issetLang($page.'.hero.logo.link'))
                <a
                    href="{!! __($page.'.home.link') !!}"
                    class="logo"
                    title="{!! __($page.'.home.title') !!}"
                >
                @endif
                <img
                    src="{!! __($page.'.hero.logo.src') !!}"
                    alt="{!! __($page.'.hero.logo.alt') !!}"
                />
                @if (issetLang($page.'.hero.logo.link'))
                </a>
                @endif
            </div>
        @endif

        @if (issetLang($page.'.hero.main-title'))
            <h1>{!! __($page.'.hero.main-title') !!}</h1>
        @endif

        @if (issetLang($page.'.hero.sub-title'))
            <p class="sub-title">{!! __($page.'.hero.sub-title') !!}</p>
        @endif

        @if (issetLang($page.'.hero.content'))
            <p class="content">{!! __($page.'.hero.content') !!}</p>
        @endif

        @if (issetLang($page.'.hero.button'))
            <a
                href="{!! __($page.'.hero.button.link') !!}"
                class="button center"
                title="{!! __($page.'.hero.button.title') !!}"
            >{!! __($page.'.hero.button.text') !!}</a>
        @endif

        @if (issetLang($page.'.hero.contact-links'))
            <div class="contact-links">
                @foreach (__($page.'.hero.contact-links') as $contactLink)
                    @if (!isset($contactLink['disabled']) || $contactLink['disabled'] === false)
                    <a
                        href="{!! $contactLink['link'] !!}"
                        target="_blank"
                        rel="noopener"
                        title="{!! $contactLink['title'] !!}"
                    >
                        <span class="icon fa {!! $contactLink['icon'] !!}" aria-hidden="true"></span>
                        {!! $contactLink['text'] !!}
                    </a>
                    @endif
                @endforeach
            </div>
        @endif
    </div>

    @if ($tabContentList)
        @component(
            'components/tab-content',
            [
                'list' => $tabContentList
            ]
        )@endcomponent
    @endif

</section>
