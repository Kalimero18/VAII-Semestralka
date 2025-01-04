@extends('layouts.app')

@section('title', 'Registrácia - Futbal v Londýne')

@section('kontent')
<div class="login-body">
    <h1>Futbal v Londýne</h1>
    <div class="login-container">
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Meno')" />
                <x-text-input id="name" class="custom-input block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="custom-input block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Heslo')" />
                <x-text-input id="password" class="custom-input block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Potvrď Heslo')" />
                <x-text-input id="password_confirmation" class="custom-input block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <!-- Register Button -->
            <div class="flex items-center justify-end mt-4">
                <a href="{{ route('login') }}" class="login-link">
                    {{ __('Už si registrovaný?') }}
                </a>

                <x-primary-button class="ms-4">
                    {{ __('Registruj sa') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</div>
@endsection
