<!doctype html>
<html lang="{{ config('app.locale') }}">

<head>
    @include('anomaly.theme.flow::partials/metadata')
</head>

<body>

<div id="app">

    @include('anomaly.theme.flow::partials/messages')

    @yield('content')

</div>

@include('anomaly.theme.flow::partials/assets')

</body>
</html>
