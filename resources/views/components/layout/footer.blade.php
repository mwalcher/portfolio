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
                >{!! $contactLink['text'] !!}</a>
                @endforeach
            </div>
        </div>

        <form class="recaptcha" name="{!! __('footer.form.name') !!}" action="{{ route('submit-form') }}" method="post">
            {{ csrf_field() }}
            @foreach (__('footer.form.fields') as $field)
                @php
                    $containerClasses = ['input-container'];

                    if(isset($field['required']) && $field['required'] === true){
                        array_push($containerClasses, 'required');
                    }

                    if(old($field['name'])){
                        array_push($containerClasses, 'active');
                    }

                    if($errors->has($field['name'])){
                        array_push($containerClasses, 'error');
                    }
                @endphp
                <div class="{{ implode(' ', $containerClasses) }}">
                    <label for="{!! __('footer.form.name') !!}-{!! $field['name'] !!}">
                        {!! $field['label'] !!}
                    </label>
                    @if ($field['type'] === 'textarea')
                        <textarea
                            id="{!! __('footer.form.name') !!}-{!! $field['name'] !!}"
                            name="{!! $field['name'] !!}"
                            @if (isset($field['required']) && $field['required'] === true)
                            required
                            @endif
                            @if (isset($field['autocomplete']) && $field['autocomplete'] !== false)
                            autocomplete="{!! $field['autocomplete'] !!}"
                            @endif
                        >{{ old($field['name']) }}</textarea>
                    @else
                    <input
                        id="{!! __('footer.form.name') !!}-{!! $field['name'] !!}"
                        type="{!! $field['type'] !!}"
                        name="{!! $field['name'] !!}"
                        value="{{ old($field['name']) }}"
                        @if (isset($field['required']) && $field['required'] === true)
                        required
                        @endif
                        @if (isset($field['autocomplete']) && $field['autocomplete'] !== false)
                        autocomplete="{!! $field['autocomplete'] !!}"
                        @endif
                    />
                    @endif
                    @if (isset($field['disclaimer']) && $field['disclaimer'] !== false)
                        <small class="disclaimer">{!! $field['disclaimer'] !!}</small>
                    @endif
                    @if ($errors->has($field['name']))
                        <small class="error-message">{{ $errors->first($field['name']) }}</small>
                    @endif
                </div>
            @endforeach
            <button type="submit">{!! __('form.actions.submit') !!}</button>
            @component('components/recaptcha')@endcomponent
        </form>
    </div>
</footer>
