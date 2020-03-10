<div class="c-form-row c-form__row--input">
    
    <label for="{{ $fieldType->getInputName() }}">
        
        {!! $fieldType->getLabel() !!}

        @if ($fieldType->isRequired())
            <span class="field__required">*</span>
        @endif

        {{-- @if ($fieldType->locale)
            @include('admin::form/partials/translations')
        @endif --}}
    </label>

    @if ($fieldType->getInstructions())
        <div class="field__instructions">{{ $fieldType->getInstructions() }}</div>
    @endif
        
    @if ($fieldType->getWarning())
        <div class="field__warning">
            {!! icon('warning') !!}
            {{ $fieldType->getWarning() }}
        </div>
    @endif

    {!! $fieldType->getInput(['form' => isset($form) ? $form : null]) !!}

</div>
