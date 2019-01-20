<footer id="{!! __('footer.id') !!}" class="section">
    <div class="footer-content">
        <div class="contact-content">
            <h2>{!! __('footer.title') !!}</h2>
            <p>{!! __('footer.description') !!}</p>
            <div class="contact-links">
                @foreach (__('global.contact-links') as $contactLink)
                <a
                    class="button"
                    href="{!! $contactLink['link'] !!}"
                    target="_blank"
                    rel="noopener"
                    title="{!! $contactLink['title'] !!}"
                    @if (isset($contactLink['disabled']) && $contactLink['disabled'] === true)
                    disabled
                    @endif
                >
                    {!! $contactLink['text'] !!}
                </a>
                @endforeach
            </div>
        </div>
        <form name="{!! __('footer.form.name') !!}" action="{{ route('submit-form') }}" method="post">
            {{ csrf_field() }}
            @foreach (__('footer.form.fields') as $field)
                <div class="input-container @if (old($field['name']))active @endif @if ($errors->has($field['name']))error @endif">
                    <label for="{!! __('footer.form.name') !!}-{!! $field['name'] !!}">
                        {!! $field['label'] !!}
                    </label>
                    @if ($field['type'] === 'textarea')
                        <textarea
                            id="{!! __('footer.form.name') !!}-{!! $field['name'] !!}"
                            name="{!! $field['name'] !!}"
                            @if ($field['required'])
                            required
                            @endif
                            @if ($field['autocomplete'])
                            autocomplete="{!! $field['autocomplete'] !!}"
                            @endif
                        >{{ old($field['name']) }}</textarea>
                    @else
                    <input
                        id="{!! __('footer.form.name') !!}-{!! $field['name'] !!}"
                        type="{!! $field['type'] !!}"
                        name="{!! $field['name'] !!}"
                        value="{{ old($field['name']) }}"
                        @if ($field['required'])
                        required
                        @endif
                        @if ($field['autocomplete'])
                        autocomplete="{!! $field['autocomplete'] !!}"
                        @endif
                    />
                    @endif
                    @if ($errors->has($field['name']))
                        <small class="error-message">{{ $errors->first($field['name']) }}</small>
                    @endif
                </div>
            @endforeach
            <button type="submit">{!! __('form.actions.submit') !!}</button>
        </form>
    </div>
</footer>
