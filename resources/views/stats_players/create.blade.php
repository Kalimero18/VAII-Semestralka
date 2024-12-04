<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pridaj štatistiky hráča</title>
    <link rel="stylesheet" href="{{ asset('css/stylesStats.css') }}">
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
                    <a class="nav-link" href="{{ route('login') }}">Štatistiky</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>
    <div class="container">
        <h1>Pridaj Štatistiky hráča</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('stats_players.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="player_name" class="form-label">Meno</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ old('player_name') }}" required>
            </div>

            <div class="mb-3">
                <label for="position" class="form-label">Pozícia</label>
                <input type="text" name="position" id="position" class="form-control" value="{{ old('position') }}" required>
            </div>

            <div class="mb-3">
                <label for="matches" class="form-label">Odohrané zápasy</label>
                <input type="number" name="matches" id="matches" class="form-control" value="{{ old('matches') }}" required>
            </div>

            <div class="mb-3">
                <label for="goals" class="form-label">Góly</label>
                <input type="number" name="goals" id="goals" class="form-control" value="{{ old('goals') }}" required>
            </div>

            <div class="mb-3">
                <label for="assists" class="form-label">Asistencie</label>
                <input type="number" name="assists" id="assists" class="form-control" value="{{ old('assists') }}" required>
            </div>

            <div class="mb-3">
                <label for="market_value" class="form-label">Trhová hodnota</label>
                <input type="number" step="0.01" name="market_value" id="market_value" class="form-control" value="{{ old('market_value') }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Uložiť</button>
            <a href="{{ route('stats_players.index') }}" class="btn btn-secondary">Zrušiť</a>
        </form>
    </div>
