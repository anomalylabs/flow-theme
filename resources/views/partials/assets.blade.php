{!! assets()->script('public::vendor/anomaly/core/js/cp.js') !!}
{!! assets()->script('public::vendor/anomaly/theme/flow/js/theme.js') !!}

@foreach (assets()->scripts("scripts.js", ["min"]) as $script)
    {!! $script !!}
@endforeach

{!! $template->includes->render('scripts') !!}

@foreach (assets()->styles("styles.css", ["min"]) as $style)
    {!! $style !!}
@endforeach
