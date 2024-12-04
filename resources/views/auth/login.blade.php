<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - VAIIKO</title>
    <link rel="stylesheet" href="{{ asset('css/stylesLogin.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('register') }}">Futbal v Londýne</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Domov</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('oprojekte') }}">O Projekte</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="{{ route('kluby') }}" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Kluby
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('arsenal') }}">Arsenal</a></li>
                        <li><a class="dropdown-item" href="{{ route('brentford') }}">Brentford</a></li>
                        <li><a class="dropdown-item" href="{{ route('chelsea') }}">Chelsea</a></li>
                        <li><a class="dropdown-item" href="{{ route('crystal_palace') }}">Crystal Palace</a></li>
                        <li><a class="dropdown-item" href="{{ route('fulham') }}">Fulham</a></li>
                        <li><a class="dropdown-item" href="{{ route('tottenham') }}">Tottenham</a></li>
                        <li><a class="dropdown-item" href="{{ route('west_ham') }}">West Ham</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Prihlásenie</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>

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
</body>
</html>
