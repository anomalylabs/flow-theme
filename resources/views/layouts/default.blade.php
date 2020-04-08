<!doctype html>
<html lang="{{ config('app.locale') }}">

<head>
    @include('anomaly.theme.flow::partials.metadata')
</head>

<body>

<v-app id="app" dark>

    @include('anomaly.theme.flow::partials.header')
    @include('anomaly.theme.flow::partials.sidebar')

    <v-content id="content">

        @include('anomaly.theme.flow::partials.actions')

        @yield('content')

    </v-content>

    @include('anomaly.theme.flow::partials.footer')

</v-app>

@include('anomaly.theme.flow::partials.assets')
@include('anomaly.theme.flow::partials.messages')

</body>
</html>
