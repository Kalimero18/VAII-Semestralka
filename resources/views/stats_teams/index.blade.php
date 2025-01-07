@extends('layouts.app')

@section('title', 'Štatistiky Tímov - Futbal v Londýne')

@section('kontent')

    <div class="container">

        <h1 class="text-center">Štatistiky tímov</h1>

        @if(session('success'))
            <div class="upozornenie uspech">
                {{ session('success') }}
            </div>
        @endif

        <div class="table-respozivita">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Klub</th>
                    <th>Odohrané zápasy</th>
                    <th>Výhry</th>
                    <th>Remízi</th>
                    <th>Prehry</th>
                    <th>Získné body</th>
                    <th>Akcie</th>
                </tr>
                </thead>
                <tbody>
                @forelse($teams as $team)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $team->name }}</td>
                        <td>{{ $team->matches }}</td>
                        <td>{{ $team->wins }}</td>
                        <td>{{ $team->draws }}</td>
                        <td>{{ $team->losses }}</td>
                        <td>{{ $team->points }}</td>
                        <td>
                            <a href="{{ route('stats_teams.show', $team->id) }}" class="btn btn-info btn-sm">Zobraziť</a>

                            <a href="{{ route('stats_teams.edit', $team->id) }}" class="btn btn-varovanie btn-sm">Upraviť</a>

                            <form action="{{ route('stats_teams.destroy', $team->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-pozor btn-sm"
                                        onclick="return confirm('Určite chceš zmazať tento tím?');">
                                    Zmazať
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="8" class="text-center">Žiadne tímy neboli nájdené.</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>

        <div class="text-end mb-3">
            <a href="{{ route('stats_teams.create') }}" class="btn btn-hlavny">Pridaj nový tím</a>
        </div>
    </div>

@endsection
