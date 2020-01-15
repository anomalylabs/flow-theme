{{ assets('scripts.js', 'public::vendor/anomaly/core/js/form.js') }}

@section('content')
    <div class="form__wrapper">

        {!! $form->open() !!}
        @include('theme::form/partials/controls')
        @include('theme::form/partials/heading')
        @include('theme::form/partials/layout')
        @include('theme::form/partials/controls')
        {!! $form->close() !!}

    </div>
@endsection
