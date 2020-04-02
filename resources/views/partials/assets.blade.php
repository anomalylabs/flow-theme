{{--!! assets()->script('public::vendor/anomaly/core/js/app.js') !!--}
{--!! assets()->script('public::vendor/anomaly/core/js/cp.js') !!--}}
{!! assets()->script('public::vendor/anomaly/core/js/index.js') !!}
{!! assets()->script('public::vendor/anomaly/theme/flow/js/index.js') !!}

{!! assets('scripts.js')->tags() !!}

<script>
    streams.app.boot({
        providers: streams.app.providers,
    }).then(() => streams.app.start('#app'));
</script>

{!! assets('styles.css')->tags() !!}

{!! assets('footer')->tags() !!}

{!! View::includes('footer') !!}
