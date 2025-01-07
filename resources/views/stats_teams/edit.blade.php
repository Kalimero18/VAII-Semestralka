@extends('layouts.app')

@section('title', 'Uprav Tím - Futbal v Londýne')

@section('kontent')
    <div class="container">
        <h1 class="text-center">Uprav Štatistiky Tímu</h1>

        @if ($errors->any())
            <div class="upozornenie alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('stats_teams.update', $statistic->id) }}" method="POST" class="row g-3">
            @csrf
            @method('PUT')

            <div class="col-md-6">
                <label for="name" class="form-label">Názov Tímu</label>
                <input type="text" name="name" id="name" class="formular-kontrola" value="{{ old('name', $statistic->name) }}" required>
            </div>

            <div class="col-md-6">
                <label for="matches" class="form-label">Odohrané zápasy</label>
                <input type="number" name="matches" id="matches" class="formular-kontrola" value="{{ old('matches', $statistic->matches) }}" required>
            </div>

            <div class="col-md-4">
                <label for="wins" class="form-label">Výhry</label>
                <input type="number" name="wins" id="wins" class="formular-kontrola" value="{{ old('wins', $statistic->wins) }}" required>
            </div>

            <div class="col-md-4">
                <label for="draws" class="form-label">Remízy</label>
                <input type="number" name="draws" id="draws" class="formular-kontrola" value="{{ old('draws', $statistic->draws) }}" required>
            </div>

            <div class="col-md-4">
                <label for="losses" class="form-label">Prehry</label>
                <input type="number" name="losses" id="losses" class="formular-kontrola" value="{{ old('losses', $statistic->losses) }}" required>
            </div>

            <div class="col-12 d-flex justify-content-between">
                <button type="submit" class="btn btn-hlavny">Aktualizuj</button>
                <a href="{{ route('stats_teams.index') }}" class="btn btn-secondary">Zrušiť</a>
            </div>
        </form>
    </div>
@endsection
