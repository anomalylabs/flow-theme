<input autocomplete="off" {!! html_attributes($fieldType->attributes([
    'type' => $fieldType->config('type', 'text'),
    'value' => $fieldType->value,
])) !!}>
