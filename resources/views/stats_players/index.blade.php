<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Štatistiky hráčov</title>
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
    <h1>Štatistiky hráčov</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="addbtn">
        <a href="{{ route('stats_players.create') }}" class="btn">Pridaj nového hráča</a>
    </div>

    <table>
        <thead>
        <tr>
            <th>#</th>
            <th>Meno</th>
            <th>Pozícia</th>
            <th>Odohrané zápasy</th>
            <th>Góly</th>
            <th>Asistencie</th>
            <th>Trhová Hodnota</th>
            <th>Akcie</th>
        </tr>
        </thead>
        <tbody>
        @forelse($players as $player)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $player->name }}</td>
                <td>{{ $player->position }}</td>
                <td>{{ $player->matches }}</td>
                <td>{{ $player->goals }}</td>
                <td>{{ $player->assists }}</td>
                <td>${{ number_format($player->market_value, 2) }}</td>
                <td>
                    <a href="{{ route('stats_players.show', $player->id) }}" class="btn btn-info">Zobraziť</a>

                    <a href="{{ route('stats_players.edit', $player->id) }}" class="btn btn-warning">Upraviť</a>

                    <form action="{{ route('stats_players.destroy', $player->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"
                                onclick="return confirm('Are you sure you want to delete this player?');">
                            Zmazať
                        </button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="8" class="text-center">Žiadní hráči neboli nájdení.</td>
            </tr>
        @endforelse
        </tbody>
    </table>
</div>
</body>
</html>

