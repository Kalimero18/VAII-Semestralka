<!-- Súbory pre autentifikáciu a login boli vytvorené pomocou Laravel Breeze, tieto kódy boli potom upravené aby sedeli štýlu webstránky -->
@extends('layouts.app')

@section('title', 'Potvrd Heslo - Futbal v Londýne')

@section('kontent')
<!-- Password Confirmation Form -->
<div class="login-body">
    <h1>Potvrdenie hesla</h1>
    <div class="login-container">
        <div class="mb-4 text-sm text-gray-600">
            {{ __('Toto je zabezpečená časť aplikácie. Prosím, potvrďte svoje heslo pred pokračovaním.') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf

            <!-- Password -->
            <div>
                <x-input-label for="password" :value="__('Heslo')" />
                <x-text-input id="password" class="custom-input block mt-1 w-full"
                              type="password"
                              name="password"
                              required autocomplete="current-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <div class="flex justify-end mt-4">
                <x-primary-button>
                    {{ __('Potvrdiť') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</div>
@endsection
