<div class="form__section">

    @include('admin::form/partials/header')

    @include('admin::form/partials/fields', ['fields' => $form->fields->base()->pluck('field_name')->all()])
    
</div>
