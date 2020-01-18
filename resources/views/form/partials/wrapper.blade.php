{{-- <code style='padding:.5rem 1rem; background:hsl(0, 100%, 87%); color: hsla(0, 100%, 66%, 1);'>~/Development/Web/streams/vendor/anomaly/flow-theme/resources/views/form/partials/wrapper.blade.php</code> --}}

<div class="c-form-row c-form__row--input">
    
    <label for="{{ $fieldType->getInputName() }}">
        {{ $fieldType->getLabel() }}
    </label>
    {!! $fieldType->getInput(['form' => isset($form) ? $form : null]) !!}
        
    
</div>
    {{-- <label for="{{ $fieldType->getInputName() }}">
        
            
            <span>{{ $fieldType->getLabel() }}</span>
    
    </label> --}}


{{-- <div {!! html_attributes($fieldType->wrapperAttributes()) !!}>

    <label for="{{ $fieldType->getInputName() }}">
        {{ $fieldType->getLabel() }}

        @if ($fieldType->required)
            <span class="field__required">*</span>
        @endif

        @if ($fieldType->locale)
            @include('theme::form/partials/translations')
        @endif
    </label>

    @if ($fieldType->instructions)
        <div class="field__instructions">{{ $fieldType->instructions }}</div>
    @endif
        
    @if ($fieldType->warning)
        <div class="field__warning">
            {!! icon('warning') !!}
            {{ $fieldType->warning }}
        </p>
    @endif

    <div class="field__input">
        {!! $fieldType->getInput(['form' => isset($form) ? $form : null]) !!}
    </div>

</div> --}}
