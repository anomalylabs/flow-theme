<!doctype html>
<html lang="{{ config('app.locale') }}">

<head>
    @include('anomaly.theme.flow::partials/metadata')
</head>

<body>

<div id="app">

    @include('anomaly.theme.flow::partials/top')

    <div id="main" class="flex">

        @include('anomaly.theme.flow::partials/sidebar')
        @include('anomaly.theme.flow::partials/menu')

        <div id="content" class="flex-grow bg-gray-100">

            @include('anomaly.theme.flow::partials/messages')
            @include('anomaly.theme.flow::partials/buttons')

            @yield('content')

        </div>

    </div>

</div>

{{-- {% include "anomaly.theme.flow::partials/footer" %} --}}
@include('anomaly.theme.flow::partials/assets')

</body>
</html>
