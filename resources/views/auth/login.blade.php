<!-- Súbory pre autentifikáciu a login boli vytvorené pomocou Laravel Breeze, tieto kódy boli potom upravené aby sedeli štýlu webstránky -->
@extends('layouts.app')

@section('title', 'Prihlásenie - Futbal v Londýne')

@section('kontent')

<div class="login-body">
    <h1>Futbal v Londýne</h1>
    <div class="login-container">
        <!-- Session Status -->
        <x-auth-session-status :status="session('status')" />

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="custom-input block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Heslo')" />
                <x-text-input id="password" class="custom-input block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Remember Me -->
            <div class="mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" name="remember">
                    <span>{{ __('Zapamätaj si ma') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}">
                        {{ __('Zabudol si heslo?') }}
                    </a>
                @endif

                <x-primary-button class="ms-3">
                    {{ __('Log in') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</div>
@endsection

