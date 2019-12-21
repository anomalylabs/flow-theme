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

</div>

@include('anomaly.theme.flow::partials.assets')
@include('anomaly.theme.flow::partials.messages')

{!!  assets()->script('public::assets/js/vue.js')  !!}
{!!  assets()->script('public::assets/js/anomaly__streams_platform.chunk.vendors.js')  !!}
{!!  assets()->script('public::assets/js/anomaly__streams_platform.js')  !!}
{!!  assets()->script('public::assets/js/anomaly__slug_field_type.js')  !!}

<script>
(function () {

    var app = window.pyro.anomaly__streams_platform.app;

    app.bootstrap({
            providers: [
                window.pyro.anomaly__streams_platform.PlatformServiceProvider,
                window.pyro.anomaly__slug_field_type.SlugFieldTypeServiceProvider,
            ],
            config   : {},
            data     : {},
        })
        .then(app.boot)
        .then(function (app) {
            console.log('App Start')
            return app.start('#app');
        })
        .catch(app.error);
}());
</script>


</body>
</html>
