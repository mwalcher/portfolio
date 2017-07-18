<section id="{!! __($page.'.hero.id') !!}" class="hero section">
    <div class="hero-content">
        <h1>{!! __($page.'.hero.main-title') !!}</h1>
        <h2>{!! __($page.'.hero.sub-title') !!}</h2>
        <p>{!! __($page.'.hero.content') !!}</p>
    </div>

    <div class="tab-content">
        <div class="tab-container">
            <button class="tab active" data-toggle="skills" title="Skills">Skills</button>
            <button class="tab" data-toggle="tools" title="Tools">Tools</button>
        </div>

        <div class="tab-content-container">
            <div class="content-container active" data-toggle-content="skills">
                <p>
                    Skills
                </p>
            </div>

            <div class="content-container" data-toggle-content="tools">
                <p>
                    Tools
                </p>
            </div>
        </div>
    </div>
</section>
