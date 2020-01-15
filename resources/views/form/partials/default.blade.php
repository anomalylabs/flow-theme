<div class="form__section">

    @include('theme::form/partials/header')

    @include('theme::form/partials/fields', ['fields' => $form->fields->base()->pluck('field_name')->all()])
    
</div>
