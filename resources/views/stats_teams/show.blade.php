@extends('layouts.app')

@section('title', 'Hráči - Futbal v Londýne')

@section('kontent')
    <div class="container">
        <h1 class="text-center">Štatistiky Hráča: {{ $statistic->player_name }}</h1>

        <div class="table-respozivita">
            <table class="table table-bordered">
                <tr>
                    <th>Meno</th>
                    <td>{{ $statistic->name }}</td>
                </tr>
                <tr>
                    <th>Odohrané zápasy</th>
                    <td>{{ $statistic->matches }}</td>
                </tr>
                <tr>
                    <th>Výhry</th>
                    <td>{{ $statistic->wins }}</td>
                </tr>
                <tr>
                    <th>Remízy</th>
                    <td>{{ $statistic->draws }}</td>
                </tr>
                <tr>
                    <th>Prehry</th>
                    <td>{{ $statistic->losses }}</td>
                </tr>
                <tr>
                    <th>Body</th>
                    <td>{{ $statistic->points }}</td>
                </tr>
            </table>
        </div>

        <a href="{{ route('stats_teams.index') }}" class="btn btn-hlavny">Späť na zoznam</a>
    </div>
@endsection
