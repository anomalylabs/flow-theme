<div {{ html_attributes(array_get($section, 'attributes', [])) }} class="form__section">

    @include('theme::form/partials/header')

    @include('theme::form/partials/fields', ['fields' => $section['fields']])

</div>
