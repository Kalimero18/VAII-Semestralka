@extends('layouts.app')

@section('title', 'Štatistiky - Futbal v Londýne')

@section('kontent')

    <div class="container">
        <h1 class="text-center">Štatistiky hráčov</h1>

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
                            <a href="{{ route('stats_players.show', $player->id) }}" class="btn btn-info btn-sm">Zobraziť</a>

                            <a href="{{ route('stats_players.edit', $player->id) }}" class="btn btn-varovanie btn-sm">Upraviť</a>

                            <form action="{{ route('stats_players.destroy', $player->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-pozor btn-sm"
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

        <div class="text-end mb-3">
            <a href="{{ route('stats_players.create') }}" class="btn btn-hlavny">Pridaj nového hráča</a>
        </div>
    </div>

@endsection



