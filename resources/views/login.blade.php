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
    style="background: url(https://source.unsplash.com/pEgsWN0kwbQ/1000) no-repeat; background-size: cover;"
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
        <v-toolbar
            color="deep-purple accent-3"
            dark
            flat
        >
            <v-toolbar-title>Login</v-toolbar-title>
            {{-- <v-spacer /> --}}
            {{-- <v-tooltip right>
            <template v-slot:activator="{ on }">
                <v-btn
                icon
                large
                href="https://codepen.io/johnjleider/pen/pMvGQO"
                target="_blank"
                v-on="on"
                >
                <v-icon>mdi-codepen</v-icon>
                </v-btn>
            </template>
            <span>Codepen</span>
            </v-tooltip> --}}
        </v-toolbar>
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
                    <v-btn type="submit" color="deep-purple accent-3" dark block>
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
