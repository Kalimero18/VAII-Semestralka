@extends('layouts.app')

@section('title', 'Hráči - Futbal v Londýne')

@section('kontent')
    <div class="container">
        <h1>Štatistiky Hráča: {{ $statistic->player_name }}</h1>

        <table class="table table-bordered">
            <tr>
                <th>Meno</th>
                <td>{{ $statistic->name }}</td>
            </tr>
            <tr>
                <th>Pozícia</th>
                <td>{{ $statistic->position }}</td>
            </tr>
            <tr>
                <th>Odohrané zápasy</th>
                <td>{{ $statistic->matches }}</td>
            </tr>
            <tr>
                <th>Góly</th>
                <td>{{ $statistic->goals }}</td>
            </tr>
            <tr>
                <th>Asistencie</th>
                <td>{{ $statistic->assists }}</td>
            </tr>
            <tr>
                <th>Trhová hodnota</th>
                <td>{{ $statistic->market_value }}</td>
            </tr>
        </table>

        <a href="{{ route('stats_players.index') }}" class="btn btn-primary">Späť na zoznam</a>
    </div>
@endsection
