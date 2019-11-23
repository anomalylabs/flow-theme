@extends('theme::layouts/blank')

@section('content')
    
    @php
        assets('styles.css', 'anomaly.theme.flow::css/login.css');
        
        assets('scripts.js', 'streams::js/form/form.js');

        $form = form('login')->redirect('admin')->get();
    @endphp

    @include('anomaly.theme.flow::partials/messages')

    <div class="login__wrapper">
        <div class="login__left">

            <div class="form__wrapper">
                {!! $form->open(['class' => 'fadeIn fast animated']) !!}
                <div class="mb-4">

                    @if (config('anomaly.module.users::login', 'email') == 'username')
                        {!! $form->fields->username->setPlaceholder($form->fields->username->label).addAttribute('autofocus', 1)->render() !!}
                    @else
                        {!! $form->fields->email->setPlaceholder($form->fields->email->label)->addAttribute('autofocus', 1)->render() !!}
                    @endif

                </div>
                <div class="mb-6">
                    {!! $form->fields->password->setPlaceholder($form->fields->password->label)->render() !!}
                </div>
                <div class="form__actions">
                    <button class="btn btn-block btn-success" type="submit">
                        {{ trans('anomaly.module.users::button.login') }}
                    </button>
                </div>
                {!! $form->close() !!}

                <a class="login__link" href="#">
                    {{ trans('anomaly.module.users::message.forgot_password') }}
                </a>

            </div>

            <div class="login__version">
                {{ config('streams::distribution.name') }}
                <span>{{ config('streams::distribution.version') }}</span>
            </div>

        </div>
        <div class="login__right">
            <div class="login__brand">
                {!! img('anomaly.theme.flow::img/logo.svg')->data() !!}
            </div>
        </div>
    </div>

@endsection
