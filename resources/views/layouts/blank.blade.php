<!doctype html>
<html lang="{{ config('app.locale') }}">

<head>
    @include('anomaly.theme.flow::partials.metadata')
</head>

<body>

<v-app id="app" dark>

    <v-content id="content">
        @yield('content')
    </v-content>

</v-app>

@include('anomaly.theme.flow::partials.assets')
@include('anomaly.theme.flow::partials.messages')

</body>
</html>
