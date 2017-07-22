<section id="{!! __($page.'.hero.id') !!}" class="hero section">
    <div class="hero-content">
        <h1>{!! __($page.'.hero.main-title') !!}</h1>
        <h2>{!! __($page.'.hero.sub-title') !!}</h2>
        <p>{!! __($page.'.hero.content') !!}</p>
    </div>

    <div class="tab-content">
        <div class="tab-container">
            <h2 class="tab active" data-toggle="skills" title="Skills">Skills</h2>
            <h2 class="tab" data-toggle="tools" title="Tools">Tools</h2>
        </div>

        <div class="tab-content-container">
            <div class="content-container active" data-toggle-content="skills">
                <div class="interactive-icon-block">
                    <div class="icon-container">
                        <div class="shape">
                            <div class="icon">
                                <div class="image" style="background-image:url('{!! asset('images') !!}/icon-laravel.svg');"></div>
                            </div>
                            <div class="label">
                                <h3>Laravel</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content-container" data-toggle-content="tools">
                <div class="interactive-icon-block">

                </div>
            </div>
        </div>
    </div>
</section>
