{!! assets()->script("anomaly.theme.flow::js/theme.js", ["min", "watch@anomaly.theme.flow::js/"]) !!}

@foreach (assets()->scripts("scripts.js", ["min"]) as $script)
    {!! $script !!}
@endforeach

{!! $template->includes->render('scripts') !!}

@foreach (assets()->styles("styles.css", ["min"]) as $style)
    {!! $style !!}
@endforeach
