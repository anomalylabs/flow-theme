<!doctype html>
<html lang="{{ config('app.locale') }}">

<head>
    @include('anomaly.theme.flow::partials/metadata')
</head>

<body>

<div id="app">
    <div id="content">
        @yield('content')
    </div>
</div>

@include('anomaly.theme.flow::partials/assets')

</body>
</html>
