{!! assets()->style('public::vendor/anomaly/core/js/cp.js') !!}

@foreach (assets()->scripts("scripts.js", ["min"]) as $script)
    {!! $script !!}
@endforeach

{!! $template->includes->render('scripts') !!}

@foreach (assets()->styles("styles.css", ["min"]) as $style)
    {!! $style !!}
@endforeach
