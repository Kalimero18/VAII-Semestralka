@extends('layouts.app')

@section('title', 'Uprav Hráča - Futbal v Londýne')

@section('kontent')
    <div class="container">
        <h1 class="text-center">Uprav Štatistiky Hráča</h1>

        @if ($errors->any())
            <div class="upozornenie alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('stats_players.update', $statistic->id) }}" method="POST" class="row g-3">
            @csrf
            @method('PUT')

            <div class="col-md-6">
                <label for="name" class="form-label">Meno</label>
                <input type="text" name="name" id="name" class="formular-kontrola" value="{{ old('name', $statistic->name) }}" required>
            </div>

            <div class="col-md-6">
                <label for="name" class="form-label">Tím</label>
                <input type="text" name="team" id="team" class="formular-kontrola" value="{{ old('team', $statistic->team) }}" required>
            </div>

            <div class="col-md-6">
                <label for="position" class="form-label">Pozícia</label>
                <input type="text" name="position" id="position" class="formular-kontrola" value="{{ old('position', $statistic->position) }}" required>
            </div>

            <div class="col-md-4">
                <label for="matches" class="form-label">Odohrané zápasy</label>
                <input type="number" name="matches" id="matches" class="formular-kontrola" value="{{ old('matches', $statistic->matches) }}" required>
            </div>

            <div class="col-md-4">
                <label for="goals" class="form-label">Góly</label>
                <input type="number" name="goals" id="goals" class="formular-kontrola" value="{{ old('goals', $statistic->goals) }}" required>
            </div>

            <div class="col-md-4">
                <label for="assists" class="form-label">Asistencie</label>
                <input type="number" name="assists" id="assists" class="formular-kontrola" value="{{ old('assists', $statistic->assists) }}" required>
            </div>

            <div class="col-12">
                <label for="market_value" class="form-label">Trhová hodnota</label>
                <input type="number" step="0.01" name="market_value" id="market_value" class="formular-kontrola" value="{{ old('market_value', $statistic->market_value) }}" required>
            </div>

            <div class="col-12 d-flex justify-content-between">
                <button type="submit" class="btn btn-hlavny">Aktualizuj</button>
                <a href="{{ route('stats_players.index') }}" class="btn btn-secondary">Zrušiť</a>
            </div>
        </form>
    </div>
@endsection

