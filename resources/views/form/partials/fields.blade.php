@foreach ($fields as $field)
<code style='padding:.5rem 1rem; background:red; color:#fff'>~/Development/Web/streams/vendor/anomaly/flow-theme/resources/views/form/partials/fields.blade.php</code>
    @if ($form->fields->translations($field)->isNotEmpty())
    a    
    <div id="{{ $form->prefix('field-' . $field) }}" class="form__fieldset">
      b
        @foreach ($form->fields->translations($field) as $field)
c            
                {!! $field->render(['form' => $form]) !!}
            @endforeach        
        </div>
    @endif
@endforeach
