{{--!! assets()->script('public::vendor/anomaly/core/js/app.js') !!--}
{--!! assets()->script('public::vendor/anomaly/core/js/cp.js') !!--}}
{!! assets()->script('public::vendor/anomaly/core/js/app.js') !!}

@foreach (assets('scripts.js')->scripts() as $script)
    {!! $script !!}
@endforeach

<script>
    streams
        .boot({});
</script>

{!! app(\Anomaly\Streams\Platform\Support\Includes::class)->render('scripts') !!}

@foreach (assets('styles.css')->styles() as $style)
    {!! $style !!}
@endforeach
