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
            <p>{!! __('thank-you.hero.content') !!}</p>
            <a href="{!! __('thank-you.hero.button.link') !!}" class="button center" title="{!! __('thank-you.hero.button.title') !!}">
                {!! __('thank-you.hero.button.text') !!}
            </a>
            <div class="contact-links">
                <a href="{!! __('global.contact-links.linkedin.link') !!}" target="_blank" rel="noopener" title="{!! __('global.contact-links.linkedin.title') !!}">
                    <span class="icon fa {!! __('global.contact-links.linkedin.icon') !!}" aria-hidden="true"></span>
                    {!! __('global.contact-links.linkedin.text') !!}
                </a>
                <a href="{!! __('global.contact-links.github.link') !!}" target="_blank" rel="noopener" title="{!! __('global.contact-links.github.title') !!}">
                    <span class="icon fa {!! __('global.contact-links.github.icon') !!}" aria-hidden="true"></span>
                    {!! __('global.contact-links.github.text') !!}
                </a>
            </div>
        </div>
    </section>
@endsection
