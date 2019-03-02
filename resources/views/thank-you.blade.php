@extends('layouts.simple')

@section('content')
    <section class="hero section">
        <div class="hero-content">
            <div class="logo-container">
                <a href="{!! __('global.home.link') !!}" class="logo" title="{!! __('global.home.title') !!}">
                    <img src="{!! __('thank-you.hero.logo.src') !!}" alt="{!! __('thank-you.hero.logo.alt') !!}" />
                </a>
            </div>
            <h1>{!! __('thank-you.hero.main-title') !!}</h1>
            <p class="content">{!! __('thank-you.hero.content') !!}</p>
            <a href="{!! __('thank-you.hero.button.link') !!}" class="button center" title="{!! __('thank-you.hero.button.title') !!}">
                {!! __('thank-you.hero.button.text') !!}
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
