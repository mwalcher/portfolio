<footer id="{!! __('footer.id') !!}" class="section">
    <div class="footer-content">
        <div class="contact-content">
            <h2>{!! __('footer.title') !!}</h2>
            <p>{!! __('footer.description') !!}</p>
            <div class="contact-links">
                <a class="button" href="{!! __('global.linkedin.link') !!}" target="_blank" title="{!! __('global.linkedin.title') !!}">
                    {!! __('global.linkedin.text') !!}
                </a>
                <a class="button" href="{!! __('global.github.link') !!}" target="_blank" title="{!! __('global.github.title') !!}">
                    {!! __('global.github.text') !!}
                </a>
                <a class="button" href="{!! __('global.resume.link') !!}" target="_blank" title="{!! __('global.resume.title') !!}">
                    {!! __('global.resume.text') !!}
                </a>
            </div>
        </div>
        <form name="{!! __('footer.form') !!}" method="post" action="" novalidate>
            <div class="input-container">
                <label for="{!! __('footer.form') !!}-{!! __('form.fields.name.name') !!}">
                    {!! __('form.fields.name.label') !!}
                </label>
                <input id="{!! __('footer.form') !!}-{!! __('form.fields.name.name') !!}" title="{!! __('form.fields.name.label') !!}" type="text" name="{!! __('form.fields.name.name') !!}" required />
            </div>
            <div class="input-container">
                <label for="{!! __('footer.form') !!}-{!! __('form.fields.email.name') !!}">
                    {!! __('form.fields.email.label') !!}
                </label>
                <input id="{!! __('footer.form') !!}-{!! __('form.fields.email.name') !!}" title="{!! __('form.fields.email.label') !!}" type="text" name="{!! __('form.fields.email.name') !!}" required />
            </div>
            <div class="input-container">
                <label for="{!! __('footer.form') !!}-{!! __('form.fields.message.name') !!}">
                    {!! __('form.fields.message.label') !!}
                </label>
                <textarea id="{!! __('footer.form') !!}-{!! __('form.fields.message.name') !!}" title="{!! __('form.fields.message.label') !!}" name="{!! __('form.fields.message.name') !!}" required></textarea>
            </div>
            <input class="button full-width" type="submit" value="{!! __('form.actions.submit') !!}" />
        </form>
    </div>
</footer>
