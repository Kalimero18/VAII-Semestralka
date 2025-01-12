<!-- Súbory pre autentifikáciu a login boli vytvorené pomocou Laravel Breeze, tieto kódy boli potom upravené aby sedeli štýlu webstránky -->
@extends('layouts.app')

@section('title', 'Resetuj Heslo - Futbal v Londýne')

@section('kontent')
<!-- Password Reset Form -->
<div class="login-body">
    <h1>Obnovenie hesla</h1>
    <div class="login-container">
        <div class="mb-4 text-sm text-gray-600">
            {{ __('Zabudol si svoje heslo? Žiadny problém. Zadaj svoju emailovú adresu a pošleme ti odkaz na obnovenie hesla, pomocou ktorého si môžeš nastaviť nové.') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('password.store') }}">
            @csrf

            <!-- Password Reset Token -->
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="custom-input block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" />
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
                <x-input-label for="password_confirmation" :value="__('Potvrďte heslo')" />
                <x-text-input id="password_confirmation" class="custom-input block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-primary-button>
                    {{ __('Obnoviť heslo') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</div>
@endsection
