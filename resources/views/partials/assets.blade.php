{{--!! assets()->script('public::vendor/anomaly/core/js/app.js') !!--}
{--!! assets()->script('public::vendor/anomaly/core/js/cp.js') !!--}}
{!! assets()->script('public::vendor/anomaly/core/js/app.js') !!}

{!! assets('scripts.js')->tags() !!}

<script>
    streams
        .boot({});
</script>

{!! app(\Anomaly\Streams\Platform\Support\Includes::class)->render('scripts') !!}

{!! assets('styles.css')->tags() !!}
