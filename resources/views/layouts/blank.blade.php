<!doctype html>
<html lang="{{ config('app.locale') }}">

<head>
    @include('anomaly.theme.flow::partials.metadata')
</head>

<body>

<div id="app">
    @yield('content')
    @include('anomaly.theme.flow::partials.messages')
</div>


@include('anomaly.theme.flow::partials.assets')


</body>
</html>
