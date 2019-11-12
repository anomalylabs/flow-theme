@extends('theme::layouts/blank')

@section('content')
    
    @php
        assets('styles.css', 'anomaly.theme.flow::css/login.css');

        $form = form('login')->redirect('admin')->get();
    @endphp

    <div class="login__wrapper">
        <div class="login__left">

            <div class="form__wrapper">
                {{ $form->open(['class' => 'fadeIn fast animated']) }}
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
                {{ $form->close() }}

                <a class="inline-block align-baseline font-bold text-xs text-bold text-gray-500 hover:text-gray-800 py-2 px-4 rounded focus:outline-none focus:shadow-outline" href="#">
                    {{ trans('anomaly.module.users::message.forgot_password') }}
                </a>

            </div>

            <div class="absolute bottom-0 left-0 ml-2 mb-2 text-gray-500 text-xs fadeInUp animated delay-1s">
                PYRO
                <span>{{ config('streams::distribution.version') }}</span>
            </div>

            {{-- <div class="absolute bottom-0 right-0 mb-2 mr-2">
        <a href="https://pyrocms.com/" class="p-2 bg-green-800 hover:bg-green-700 transition-bg items-center text-green-100 leading-none lg:rounded-full flex lg:inline-flex" target="_blank">
            <span class="flex rounded-full bg-green-500 uppercase px-2 py-1 text-xs font-bold mr-3">New</span>
            <span class="font-semibold mr-2 text-left flex-auto">v3.7 Released</span>
            <svg class="fill-current opacity-75 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z"/></svg>
            </a>
            </div> --}}

        </div>
        <div class="w-1/2 flex justify-center align-center items-center bg-green-500">
            <div class="svg-fill-white login-icon fadeIn fast animated">
                {!! img('anomaly.theme.flow::img/logo.svg')->data() !!}
            </div>
        </div>
    </div>

@endsection
