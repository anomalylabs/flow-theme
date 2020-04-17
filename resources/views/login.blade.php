@extends('anomaly.theme.flow::layouts.blank')

@section('content')

@php
    assets('styles.css')->add('public::vendor/anomaly/theme/flow/css/login.css');
    assets('scripts.js')->add('public::vendor/anomaly/theme/flow/js/form/form.js');
    
    $form = form('login')->redirect('admin')->get();
@endphp

<v-container
    class="fill-height"
    fluid
    style="background: url({{ img('unsplash::random/1000')->url() }}) no-repeat; background-size: cover;"
>
    <v-row
    align="center"
    justify="center"
    >
    <v-col
        cols="12"
        sm="8"
        md="4"
    >
        <v-card class="elevation-12">
        {{-- <v-toolbar
            color="white"
            flat
            dense
        >
            <v-toolbar-title>Login</v-toolbar-title>
        </v-toolbar> --}}
        <v-card-text>
            
            {!! $form->open(['class' => 'fadeIn fast animated']) !!}

                <div class="form__fieldset">
                    @if (config('anomaly.module.users::login', 'email') == 'username')
                        {!! $form->fields->username->setPlaceholder($form->fields->username->label).addAttribute('autofocus', 1)->render() !!}
                    @else
                        {!! $form->fields->email->setPlaceholder($form->fields->email->label)->addAttribute('autofocus', 1)->render() !!}
                    @endif
                </div>

                <div class="form__fieldset">
                    {!! $form->fields->password->setPlaceholder($form->fields->password->label)->render() !!}
                </div>

                <div class="form__actions">
                    <v-btn type="submit" color="gray accent-3" dark block outline large>
                        {{ trans('anomaly.module.users::button.login') }}
                    </v-btn>
                </div>

            {!! $form->close() !!}

        </v-card-text>
        </v-card>
    </v-col>
    </v-row>
</v-container>

{{-- {{ trans('anomaly.module.users::message.forgot_password') }} --}}

{{-- {{ config('streams.distribution.name') }}
            <span>{{ config('streams.distribution.version') }}</span> --}}
            
{{-- {!! img('anomaly.theme.flow::img/logo.svg')->data() !!} --}}

@endsection('content')
