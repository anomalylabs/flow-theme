<!doctype html>
<html lang="{{ config('app.locale') }}">

<head>
    @include('anomaly.theme.flow::partials.metadata')
</head>

<body>

<div id="app">

    @include('anomaly.theme.flow::partials.header')

    <div id="main">

        @include('anomaly.theme.flow::partials.sidebar')

        <div id="content">

            @include('anomaly.theme.flow::partials.actions')

            @yield('content')

        </div>

    </div>

    @include('anomaly.theme.flow::partials.footer')
    @include('anomaly.theme.flow::partials.messages')
</div>


@include('anomaly.theme.flow::partials.assets')


</body>
</html>
