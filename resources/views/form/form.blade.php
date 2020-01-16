{{ assets('scripts.js', 'public::vendor/anomaly/core/js/form.js') }}

@section('content')
<code style='padding:.5rem 1rem; background:red; color:#fff'>~/Development/Web/streams/vendor/anomaly/flow-theme/resources/views/form/form.blade.php</code>
    <div class="form__wrapper">
aaaaa
        {!! $form->open() !!}
        @include('theme::form/partials/controls')
        @include('theme::form/partials/heading')
        @include('theme::form/partials/layout')
        @include('theme::form/partials/controls')
        {!! $form->close() !!}
x
    </div>
@endsection
