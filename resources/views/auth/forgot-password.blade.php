@extends('auth.auth-layout')
@section('form')
    <!-- Account Logo -->
    <div class="account-logo">
        <a href="index.html"><img src="{{ asset('assets/back/img/logo2.jpg') }}" alt="Dreamguy's Technologies"></a>
    </div>
    <!-- /Account Logo -->
    <div class="account-box">
        <div class="account-wrapper">
            <h3 class="account-title">Reunitialisation de passe</h3>
            <p class="account-subtitle">Entrez votre mail pour reunitialiser votre mot de passe</p>
            <!-- Account Form -->
            <form method="POST" action="{{ route('password.email') }}">
                @csrf
                <div class="form-group">
                    <label>Adresse email</label>
                    <input class="form-control" type="text" name="email" required autofocus>
                </div>

                <div class="form-group text-center">
                    <button class="btn btn-primary account-btn" type="submit">Reunitialiser mot de passe</button>
                </div>
            </form>
            <!-- /Account Form -->
        </div>
    </div>
@endsection

{{--<x-guest-layout>--}}
{{--    <div class="mb-4 text-sm text-gray-600">--}}
{{--        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}--}}
{{--    </div>--}}

{{--    <!-- Session Status -->--}}
{{--    <x-auth-session-status class="mb-4" :status="session('status')" />--}}

{{--    <form method="POST" action="{{ route('password.email') }}">--}}
{{--        @csrf--}}

{{--        <!-- Email Address -->--}}
{{--        <div>--}}
{{--            <x-input-label for="email" :value="__('Email')" />--}}
{{--            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />--}}
{{--            <x-input-error :messages="$errors->get('email')" class="mt-2" />--}}
{{--        </div>--}}

{{--        <div class="flex items-center justify-end mt-4">--}}
{{--            <x-primary-button>--}}
{{--                {{ __('Email Password Reset Link') }}--}}
{{--            </x-primary-button>--}}
{{--        </div>--}}
{{--    </form>--}}
{{--</x-guest-layout>--}}
