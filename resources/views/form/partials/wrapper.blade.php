<form-field :form="{{ isset($form) ? $form->toJson() : '{}' }}" :field="{{ $fieldType->toJson() }}">
    {!! $fieldType->getInput(['form' => isset($form) ? $form : null]) !!}
</form-field>
