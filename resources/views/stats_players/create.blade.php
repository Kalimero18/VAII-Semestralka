@extends('layouts.app')

@section('title', 'Pridaj Hráča - Futbal v Londýne')

@section('kontent')
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
@endsection
