<!-- Súbory pre autentifikáciu a login boli vytvorené pomocou Laravel Breeze, tieto kódy boli potom upravené aby sedeli štýlu webstránky -->
@extends('layouts.app')

@section('title', 'Zabudnute Heslo - Futbal v Londýne')

@section('kontent')
<div class="login-body">
    <h1>Obnova hesla</h1>
    <div class="login-container">
        <div class="mb-4 text-sm text-gray-600">
            {{ __('Zabudol(a) si svoje heslo? Žiadny problém. Stačí, ak nám poskytneš svoju e-mailovú adresu a pošleme ti odkaz na obnovenie hesla, ktorý ti umožní vybrať si nové.') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('E-mailová adresa')" />
                <x-text-input id="email" class="custom-input block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-primary-button>
                    {{ __('Poslať odkaz na obnovu hesla') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</div>
@endsection
