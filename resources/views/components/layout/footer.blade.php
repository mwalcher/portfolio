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
        <form name="{!! __('footer.form') !!}" action="{{ route('submit-form') }}" method="post">
            {{ csrf_field() }}
            <div class="input-container @if (old(__('form.fields.name.name')))active @endif @if ($errors->has(__('form.fields.name.name')))error @endif">
                <label for="{!! __('footer.form') !!}-{!! __('form.fields.name.name') !!}">
                    {!! __('form.fields.name.label') !!}
                </label>
                <input id="{!! __('footer.form') !!}-{!! __('form.fields.name.name') !!}" type="text" name="{!! __('form.fields.name.name') !!}" value="{{ old(__('form.fields.name.name')) }}" required autocomplete="name" />
                @if ($errors->has(__('form.fields.name.name')))
                    <small class="error-message">{{ $errors->first(__('form.fields.name.name')) }}</small>
                @endif
            </div>
            <div class="input-container @if (old(__('form.fields.email.name')))active @endif @if ($errors->has(__('form.fields.email.name')))error @endif">
                <label for="{!! __('footer.form') !!}-{!! __('form.fields.email.name') !!}">
                    {!! __('form.fields.email.label') !!}
                </label>
                <input id="{!! __('footer.form') !!}-{!! __('form.fields.email.name') !!}" type="email" name="{!! __('form.fields.email.name') !!}" value="{{ old(__('form.fields.email.name')) }}" required autocomplete="email" />
                @if ($errors->has(__('form.fields.email.name')))
                    <small class="error-message">{{ $errors->first(__('form.fields.email.name')) }}</small>
                @endif
            </div>
            <div class="input-container @if (old(__('form.fields.message.name')))active @endif @if ($errors->has(__('form.fields.message.name')))error @endif">
                <label for="{!! __('footer.form') !!}-{!! __('form.fields.message.name') !!}">
                    {!! __('form.fields.message.label') !!}
                </label>
                <textarea id="{!! __('footer.form') !!}-{!! __('form.fields.message.name') !!}" name="{!! __('form.fields.message.name') !!}" required>{{ old(__('form.fields.message.name')) }}</textarea>
                @if ($errors->has(__('form.fields.message.name')))
                    <small class="error-message">{{ $errors->first(__('form.fields.message.name')) }}</small>
                @endif
            </div>
            <button type="submit">{!! __('form.actions.submit') !!}</button>
        </form>
    </div>
</footer>
