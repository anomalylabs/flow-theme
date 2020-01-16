@extends('theme::layouts.blank')

@section('content')

    @php
        assets('styles.css', 'public::vendor/anomaly/theme/flow/css/login.css');
        assets('scripts.js', 'public::vendor/anomaly/theme/flow/js/form/form.js');
        $form = form('login')->redirect('admin')->get();
    @endphp


    <div class="o-form">
        {!! $form->open(['class' => 'o-form__form']) !!}
        {{-- <div class="relative border rounded mb-4 shadow appearance-none label-floating">
            <input class="w-full py-2 px-3 text-green-darker leading-normal rounded" id="username" type="text" placeholder="Username">
            <label class="absolute block text-green-darker top-0 left-0 w-full px-3 py-2 leading-normal" for="username">
              Username
            </label>
          </div> --}}
       
            @if (config('anomaly.module.users::login', 'email') == 'username')
            a
                {!! $form->fields->username->setPlaceholder('username').addAttribute('autofocus', 1)->render() !!}
            @else
            no
                {!! $form->fields->email->setPlaceholder('email')->addAttribute('autofocus', 1)->render() !!}
            @endif
       

       
            {!! $form->fields->password->setPlaceholder('password')->render() !!}
       
            <button class="bg-teal-500 hover:bg-teal-600 focus:outline-none focus:shadow-outline" type="submit">
                {{ trans('anomaly.module.users::button.login') }}
            </button>
       

        {!! $form->close() !!}
    </div>
    {{-- <div class="login__wrapper">
        <div class="login__left">

            <div class="form__wrapper">
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
                        <button class="bg-teal-500 hover:bg-teal-600 focus:outline-none focus:shadow-outline" type="submit">
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
                {{--!! img('anomaly.theme.flow::img/logo.svg')->data() !!
            </div>
        </div>
    </div> --}}

@endsection
