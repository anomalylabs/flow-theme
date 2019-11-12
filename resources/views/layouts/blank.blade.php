<html lang="{{ config('app.locale') }}">

<head>
    @include('anomaly.theme.flow::partials/metadata')
</head>

<body>

<main id="app">

    @include('anomaly.theme.flow::partials/messages')

    @yield('content')

</main>

@include('anomaly.theme.flow::partials/assets')

</body>
</html>
