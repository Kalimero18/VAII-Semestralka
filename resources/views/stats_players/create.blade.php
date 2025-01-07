@extends('layouts.app')

@section('title', 'Pridaj Hráča - Futbal v Londýne')

@section('kontent')
    <div class="container">
        <h1 class="text-center">Pridaj Štatistiky hráča</h1>

        @if ($errors->any())
            <div class="upozornenie alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('stats_players.store') }}" method="POST" class="row g-3">
            @csrf

            <div class="col-md-6">
                <label for="player_name" class="form-label">Meno</label>
                <input type="text" name="name" id="name" class="formular-kontrola" value="{{ old('player_name') }}" required>
            </div>

            <div class="col-md-6">
                <label for="team" class="form-label">Tím</label>
                <input type="text" name="team" id="team" class="formular-kontrola" value="{{ old('team') }}" required>
            </div>

            <div class="col-md-6">
                <label for="position" class="form-label">Pozícia</label>
                <input type="text" name="position" id="position" class="formular-kontrola" value="{{ old('position') }}" required>
            </div>

            <div class="col-md-4">
                <label for="matches" class="form-label">Odohrané zápasy</label>
                <input type="number" name="matches" id="matches" class="formular-kontrola" value="{{ old('matches') }}" required>
            </div>

            <div class="col-md-4">
                <label for="goals" class="form-label">Góly</label>
                <input type="number" name="goals" id="goals" class="formular-kontrola" value="{{ old('goals') }}" required>
            </div>

            <div class="col-md-4">
                <label for="assists" class="form-label">Asistencie</label>
                <input type="number" name="assists" id="assists" class="formular-kontrola" value="{{ old('assists') }}" required>
            </div>

            <div class="col-12">
                <label for="market_value" class="form-label">Trhová hodnota</label>
                <input type="number" step="0.01" name="market_value" id="market_value" class="formular-kontrola" value="{{ old('market_value') }}" required>
            </div>

            <div class="col-12 d-flex justify-content-between">
                <button type="submit" class="btn btn-hlavny">Uložiť</button>
                <a href="{{ route('stats_players.index') }}" class="btn btn-secondary">Zrušiť</a>
            </div>
        </form>
    </div>
@endsection



