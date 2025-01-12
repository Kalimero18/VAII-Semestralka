@extends('layouts.app')

@section('title', 'Prihlasenie - Futbal v Londýne')

@section('kontent')
<div class="dashboard-body">
    <div class="dashboard-container">
        <div class="header">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Vitaj v spoločenstve fanúšíkov Londýnskeho futbalu!') }}
            </h2>
        </div>

        <div class="content py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        {{ __("Si prihlásený!") }}
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-6 flex justify-center">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="ms-4">
                    {{ __('Odhlásiť sa') }}
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
