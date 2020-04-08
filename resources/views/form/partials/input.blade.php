<v-input autocomplete="off" {!! html_attributes([
    'value'       => $fieldType->getValue(),
    'name'        => $fieldType->getInputName(),
    'placeholder' => $fieldType->getPlaceholder(),

    'readonly' => $fieldType->isReadonly() ? 'readonly' : '',
    'disabled' => $fieldType->isDisabled() ? 'disabled' : '',

    'data-field'      => $fieldType->getField(),
    'data-provides'   => $fieldType->getNamespace(),
    'data-field_name' => $fieldType->getFieldName(),

    'class' => $fieldType->getClass() ?: 'input',
    'id'    => $fieldType->getInputName(),
]) !!}/>
