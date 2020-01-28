{{ assets('scripts.js', 'public::vendor/anomaly/core/js/form.js') }}

@section('content')
<code style='padding:.5rem 1rem; background:red; color:#fff'>~/Development/Web/streams/vendor/anomaly/flow-theme/resources/views/form/form.blade.php</code>
    <div class="form__wrapper">
aaaaa
        {!! $form->open() !!}
        @include('admin::form/partials/controls')
        @include('admin::form/partials/heading')
        @include('admin::form/partials/layout')
        @include('admin::form/partials/controls')
        {!! $form->close() !!}
x
    </div>
@endsection
