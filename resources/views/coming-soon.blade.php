@extends('layouts.simple')

@section('content')
    <section class="hero section">
        <div class="hero-content">
            <div class="logo-container">
                <img src="{!! __('coming-soon.hero.logo.src') !!}" alt="{!! __('coming-soon.hero.logo.alt') !!}" />
            </div>
            <h1>{!! __('coming-soon.hero.main-title') !!}</h1>
            <p>{!! __('coming-soon.hero.content') !!}</p>
            <a href="{!! __('global.email.link') !!}" class="button center" title="{!! __('global.email.title') !!}">
                {!! __('global.email.text') !!}
            </a>
            <div class="contact-links">
                <a href="{!! __('global.contact-links.linkedin.link') !!}" target="_blank" rel="noopener" class="no-hover" title="{!! __('global.contact-links.linkedin.title') !!}">
                    <span class="icon fa {!! __('global.contact-links.linkedin.icon') !!}" aria-hidden="true"></span>
                    {!! __('global.contact-links.linkedin.text') !!}
                </a>
                <a href="{!! __('global.contact-links.github.link') !!}" target="_blank" rel="noopener" class="no-hover" title="{!! __('global.contact-links.github.title') !!}">
                    <span class="icon fa {!! __('global.contact-links.github.icon') !!}" aria-hidden="true"></span>
                    {!! __('global.contact-links.github.text') !!}
                </a>
            </div>
        </div>
    </section>
@endsection
