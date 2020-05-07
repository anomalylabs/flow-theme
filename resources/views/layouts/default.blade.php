<!doctype html>
<html lang="{{ config('app.locale') }}">

<head>
    @include('anomaly.theme.flow::partials.metadata')
</head>

<body>

<div id="app" dark>

    @include('anomaly.theme.flow::partials.header')
    @include('anomaly.theme.flow::partials.sidebar')

    <main id="content">

        @include('anomaly.theme.flow::partials.actions')

        @yield('content')

    </main>

    @include('anomaly.theme.flow::partials.footer')

</div>

@include('anomaly.theme.flow::partials.assets')
@include('anomaly.theme.flow::partials.messages')

</body>
</html>
