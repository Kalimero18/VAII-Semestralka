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
<!-- Dashboard Content -->
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
            <!-- Logout Button -->
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="ms-4">
                    {{ __('Odhlásiť sa') }}
                </button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
