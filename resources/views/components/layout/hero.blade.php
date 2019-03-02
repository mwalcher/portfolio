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
            @if (issetLang($page.'.hero.logo.link'))
            <a
                class="logo logo-link"
                href="{!! __($page.'.hero.logo.link.link') !!}"
                title="{!! __($page.'.hero.logo.link.title') !!}"
            >
            @else
            <div class="logo">
            @endif
                <span class="logo-container">
                    @include('logos/mwalcher-logo')
                </span>
            @if (issetLang($page.'.hero.logo.link'))
            </a>
            @else
            </div>
            @endif
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
                class="button center"
                href="{!! __($page.'.hero.button.link') !!}"
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
                        <span>{!! $contactLink['text'] !!}</span>
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
