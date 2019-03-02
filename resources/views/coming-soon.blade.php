@extends('layouts.simple')

@section('content')
    <section class="hero section">
        <div class="hero-content">
            <div class="logo-container">
                <img src="{!! __('coming-soon.hero.logo.src') !!}" alt="{!! __('coming-soon.hero.logo.alt') !!}" />
            </div>
            <h1>{!! __('coming-soon.hero.main-title') !!}</h1>
            <p class="content">{!! __('coming-soon.hero.content') !!}</p>
            <a href="{!! __('coming-soon.hero.button.link') !!}" class="button center" title="{!! __('coming-soon.hero.button.title') !!}">
                {!! __('coming-soon.hero.button.text') !!}
            </a>
            <div class="contact-links">
                @foreach (__('global.contact-links') as $contactLink)
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
        </div>
    </section>
@endsection
