@extends('theme::layouts.blank')

@section('content')

    @php
        assets('styles.css', 'public::vendor/anomaly/theme/flow/css/login.css');
        assets('scripts.js', 'public::vendor/anomaly/theme/flow/js/form/form.js');
        $form = form('login')->redirect('admin')->get();
    @endphp


    <div class="o-form">
        
        {!! $form->open(['class' => 'o-form__form']) !!}

        <div class="o-form__fields-wrapper">
       
       
            @if (config('anomaly.module.users::login', 'email') == 'username')
           
                {!! $form->fields->username->setPlaceholder('username').addAttribute('autofocus', 1)->render() !!}
            @else
           
                {!! $form->fields->email->setPlaceholder('email')->addAttribute('autofocus', 1)->render() !!}
            @endif
       
            {!! $form->fields->password->setPlaceholder('password')->render() !!}
        </div>
            <div class="o-form__actions o-form__footer">
                <button type="submit">
                    {{ trans('anomaly.module.users::button.login') }}
                </button>
                <a href="#">
                    {{ trans('anomaly.module.users::message.forgot_password') }}
                </a>
                
              </div>
       
            
       

        {!! $form->close() !!}
    </div>
   
    {{-- <svg class="c-brand" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 182.44 182.45"><title>Streams - the sexist non-cms of cmf you have ever seen</title><path d="M59.09,107.22l16.13,16.13,48.12-48.13L107.22,59.1ZM139.22,91.1,70.33,160h32.24l52.77-52.77ZM35.35,163.22l24-24L3.29,83.16a11.23,11.23,0,0,1,0-15.87L67.15,3.42A11.2,11.2,0,0,1,75.22,0h64a11.22,11.22,0,0,1,7.62,19.47h0L123.1,43.23l56.06,56.06a11.23,11.23,0,0,1,0,15.87l-64,64a11.19,11.19,0,0,1-7.94,3.29h-64a11.22,11.22,0,0,1-7.87-19.23Zm7.86-71.88L112.1,22.45H79.86L27.09,75.22Z" transform="translate(0)" style="fill-rule: evenodd;"></path></svg> --}}
   
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
