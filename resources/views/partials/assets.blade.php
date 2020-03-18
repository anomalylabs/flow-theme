{{--!! assets()->script('public::vendor/anomaly/core/js/app.js') !!--}
{--!! assets()->script('public::vendor/anomaly/core/js/cp.js') !!--}}
{!! assets()->script('public::vendor/anomaly/core/js/app.js') !!}

{!! assets('scripts.js')->tags() !!}

{!! app(\Anomaly\Streams\Platform\Support\Includes::class)->render('scripts') !!}

<script>
    streams.app.boot({
        providers: streams.providers,
    }).then(() => streams.app.start('#app'));
</script>

{!! assets('styles.css')->tags() !!}
