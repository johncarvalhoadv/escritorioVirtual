{{--<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ms-4">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>--}}


@extends('admin.layouts.empty', ['paceTop' => true, 'bodyExtraClass' => 'bg-white'])

@section('title', 'Login Page')

@section('content')
    <!-- begin login -->
    <div class="login login-with-news-feed">
        <!-- begin news-feed -->
        <div class="news-feed">
            <div class="news-image" style="background-image: url({{ asset('admin/img/login-bg/login-bg-3.jpg') }}"></div>
            <div class="news-caption">
                <h4 class="caption-title"><b>R & J</b> Advogados Associados</h4>
                <p>
                    ...
                </p>
            </div>
        </div>
        <!-- end news-feed -->
        <!-- begin right-content -->
        <div class="right-content">
            <!-- begin login-header -->
            <div class="login-header">
                <div class="brand">
                    <span class="logo"></span> <b>Software</b> Jurídico
                    <small>Gestão de Escritório Jurídico</small>
                </div>
                <div class="icon">
                    <i class="fa fa-sign-in"></i>
                </div>
                @if (session('status'))
                    <div class="">
                        {{ session('status') }}
                    </div>
                @endif
            </div>
            <!-- end login-header -->
            <!-- begin login-content -->
            <div class="login-content">
                <form action="{{ route('login') }}" method="POST" class="margin-bottom-0">
                    @csrf
                    <div class="form-group m-b-15">
                        <input type="text" id="email" class="form-control form-control-lg" placeholder="Endereço  de Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus />


                    </div>
                    <div class="form-group m-b-15">
                        <input id="password" type="password" class="form-control form-control-lg" placeholder="Sua Senha" name="password" required autocomplete="current-password" />

                    </div>
                    <div class="m-b-30">
                            @if (Route::has('password.request'))
                                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                                    {{ __('Forgot your password?') }}
                                </a>
                            @endif
                    </div>
                    <div class="login-buttons">
                        <button type="submit" class="btn btn-danger btn-lg">
                            {{ __('Acessar') }}
                        </button>
                    </div>
                    <div class="m-t-20 m-b-40 p-b-40 text-inverse">
                        Não têm cadastro? Clique <a href="{{ route('register') }}" class="text-danger">Aqui</a> para se registrar.
                    </div>


                    <hr />
                    <p class="text-center text-grey-darker">
                        &copy; Dr. John Carvalho All Right Reserved {{ date('Y') }}
                    </p>
                </form>
            </div>
            <!-- end login-content -->
        </div>
        <!-- end right-container -->
    </div>
    <!-- end login -->
@endsection
