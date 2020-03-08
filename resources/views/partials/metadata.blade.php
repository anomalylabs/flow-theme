<head>
<meta charset="utf-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="Content-Language" content="{{ config('app.locale') }}">

<meta name="generator" content="{{ config('streams::distribution.name') }}"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

<meta name="description" content="{{ trans($metaDescription ?? config('app.name')) }}"/>

{!! app(\Anomaly\Streams\Platform\Support\Includes::class)->render('meta') !!}

<title>
    {{ config('app.name') }}
    @if (isset($metaTitle))
        &#8250;
        {{ $metaTitle }}
    @endif
</title>

{{-- { favicons("public::vendor/anomaly/theme/flow/img/favicon.png") } --}}

{{ constants() }}

{!! assets()->style('public::vendor/anomaly/theme/flow/css/theme.css') !!}

{!! app(\Anomaly\Streams\Platform\Support\Includes::class)->render('head') !!}
