<!doctype html>
<html lang="{{ config('app.locale') }}">

<head>
    @include('anomaly.theme.flow::partials.metadata')
</head>

<body>

<v-app id="app">

    @include('anomaly.theme.flow::partials.header')

    <div id="main">

        @include('anomaly.theme.flow::partials.sidebar')

        <div id="content">

            @include('anomaly.theme.flow::partials.actions')

            @yield('content')

        </div>

    </div>

</v-app>

@include('anomaly.theme.flow::partials.assets')
@include('anomaly.theme.flow::partials.messages')

</body>
</html>
