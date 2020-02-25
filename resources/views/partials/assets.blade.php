{{--!! assets()->script('public::vendor/anomaly/core/js/app.js') !!--}
{--!! assets()->script('public::vendor/anomaly/core/js/cp.js') !!--}}
{!! assets()->script('public::vendor/anomaly/theme/flow/js/app.js') !!}

@foreach (assets()->scripts("scripts.js", ["min"]) as $script)
    {!! $script !!}
@endforeach

{!! app(\Anomaly\Streams\Platform\Support\Includes::class)->render('scripts') !!}

@foreach (assets()->styles("styles.css", ["min"]) as $style)
    {!! $style !!}
@endforeach
