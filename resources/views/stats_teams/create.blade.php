@extends('layouts.app')

@section('title', 'Pridaj Tím - Futbal v Londýne')

@section('kontent')
    <div class="container">
        <h1 class="text-center">Pridaj Štatistiky tímu</h1>

        <form action="{{ route('stats_teams.store') }}" method="POST" class="row g-3">
            @csrf

            <div class="col-md-6">
                <label for="name" class="form-label">Názov Tímu</label>
                <input type="text" name="name" id="name" class="formular-kontrola" value="{{ old('name') }}" required>
            </div>

            <div class="col-md-6">
                <label for="matches" class="form-label">Odohrané zápasy</label>
                <input type="number" name="matches" id="matches" class="formular-kontrola" value="{{ old('matches') }}" required>
            </div>

            <div class="col-md-4">
                <label for="wins" class="form-label">Výhry</label>
                <input type="number" name="wins" id="matches" class="formular-kontrola" value="{{ old('matches') }}" required>
            </div>

            <div class="col-md-4">
                <label for="draws" class="form-label">Remízy</label>
                <input type="number" name="draws" id="draws" class="formular-kontrola" value="{{ old('draws') }}" required>
            </div>

            <div class="col-md-4">
                <label for="losses" class="form-label">Prehry</label>
                <input type="number" name="losses" id="losses" class="formular-kontrola" value="{{ old('losses') }}" required>
            </div>

            <div class="col-12">
                <label for="points" class="form-label">Body</label>
                <input type="number" name="points" id="points" class="formular-kontrola" value="{{ old('points') }}" required>
            </div>

            <div class="col-12 d-flex justify-content-between">
                <button type="submit" class="btn btn-hlavny">Uložiť</button>
                <a href="{{ route('stats_teams.index') }}" class="btn btn-secondary">Zrušiť</a>
            </div>
        </form>
    </div>
@endsection
