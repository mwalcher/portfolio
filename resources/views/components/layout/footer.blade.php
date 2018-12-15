<footer id="{!! __('footer.id') !!}" class="section">
    <div class="footer-content">
        <div class="contact-content">
            <h2>{!! __('footer.title') !!}</h2>
            <p>{!! __('footer.description') !!}</p>
            <div class="contact-links">
                @foreach (__('global.contact-links') as $contactLink)
                <a class="button" href="{!! $contactLink['link'] !!}" target="_blank" rel="noopener" title="{!! $contactLink['title'] !!}">
                    {!! $contactLink['text'] !!}
                </a>
                @endforeach
            </div>
        </div>
        <form name="{!! __('footer.form') !!}" method="post" action="" novalidate>
            <div class="input-container">
                <label for="{!! __('footer.form') !!}-{!! __('form.fields.name.name') !!}">
                    {!! __('form.fields.name.label') !!}
                </label>
                <input id="{!! __('footer.form') !!}-{!! __('form.fields.name.name') !!}" title="{!! __('form.fields.name.label') !!}" type="text" name="{!! __('form.fields.name.name') !!}" required autocomplete="name" />
            </div>
            <div class="input-container">
                <label for="{!! __('footer.form') !!}-{!! __('form.fields.email.name') !!}">
                    {!! __('form.fields.email.label') !!}
                </label>
                <input id="{!! __('footer.form') !!}-{!! __('form.fields.email.name') !!}" title="{!! __('form.fields.email.label') !!}" type="text" name="{!! __('form.fields.email.name') !!}" required autocomplete="email" />
            </div>
            <div class="input-container">
                <label for="{!! __('footer.form') !!}-{!! __('form.fields.message.name') !!}">
                    {!! __('form.fields.message.label') !!}
                </label>
                <textarea id="{!! __('footer.form') !!}-{!! __('form.fields.message.name') !!}" title="{!! __('form.fields.message.label') !!}" name="{!! __('form.fields.message.name') !!}" required></textarea>
            </div>
            <button type="submit">{!! __('form.actions.submit') !!}</button>
        </form>
    </div>
</footer>
