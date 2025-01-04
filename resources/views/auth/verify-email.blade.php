@extends('layouts.app')

@section('title', 'Over Email - Futbal v Londýne')

@section('kontent')
<!-- Email Verification Form -->
<div class="login-body">
    <h1>Overenie E-mailu</h1>
    <div class="login-container">
        <div class="mb-4 text-sm text-gray-600">
            {{ __('Ďakujeme za registráciu! Predtým, ako začneme, overte svoju e-mailovú adresu kliknutím na odkaz, ktorý sme vám práve poslali. Ak ste e-mail neobdržali, radi vám pošleme nový.') }}
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ __('Nový overovací odkaz bol zaslaný na e-mailovú adresu, ktorú ste poskytli pri registrácii.') }}
            </div>
        @endif

        <div class="mt-4 flex items-center justify-between">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf
                <div>
                    <x-primary-button>
                        {{ __('Zaslať overovací e-mail znova') }}
                    </x-primary-button>
                </div>
            </form>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    {{ __('Odhlásiť sa') }}
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
