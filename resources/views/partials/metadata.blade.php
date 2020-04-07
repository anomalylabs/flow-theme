<head>
<meta charset="utf-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="Content-Language" content="{{ config('app.locale') }}">

<meta name="generator" content="{{ config('streams.distribution.name') }}"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">

<meta name="description" content="{{ trans($metaDescription ?? config('app.name')) }}"/>

{!! View::includes('meta') !!}

<title>
    {{ config('app.name') }}
    @if (isset($metaTitle))
        &#8250;
        {{ $metaTitle }}
    @endif
</title>

{{-- { favicons("public::vendor/anomaly/theme/flow/img/favicon.png") } --}}

<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/@mdi/font@4.x/css/materialdesignicons.min.css" rel="stylesheet">

{{ constants() }}

{!! assets()->style('public::vendor/anomaly/theme/flow/css/theme.css') !!}

{!! View::includes('head') !!}
