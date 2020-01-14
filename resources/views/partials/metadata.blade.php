<head>
<meta charset="utf-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="Content-Language" content="{{ config('app.locale') }}">

<meta name="generator" content="{{ config('streams::distribution.name') }}"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

<meta name="description" content="{{ trans($template->get('meta_description') ?: config('app.name')) }}"/>

{{ $template->includes->render('meta') }}

<title>
    {{ config('app.name') }}
    @if ($template->meta_title)
        &#8250;
        {{ $template->meta_title }}
    @endif
</title>

{{-- { favicons("public::vendor/anomaly/theme/flow/img/favicon.png") } --}}

{{ constants() }}

{!! assets()->style('public::css/theme.css') !!}


{{ $template->includes->render('head') }}
