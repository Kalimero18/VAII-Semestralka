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

        <div class="mb-3">
            <label for="teamFilter" class="form-label">Filtrovať podľa tímu:</label>
            <input type="text" id="teamFilter" class="form-control" placeholder="Zadaj názov tímu">
        </div>

        <div class="table-respozivita">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Meno</th>
                    <th>Tím</th>
                    <th>Pozícia</th>
                    <th>Odohrané zápasy</th>
                    <th>Góly</th>
                    <th>Asistencie</th>
                    <th>Trhová Hodnota</th>
                    <th>Akcie</th>
                </tr>
                </thead>
                <tbody id="playersTableBody">
                @forelse($players as $player)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $player->name }}</td>
                        <td>{{ $player->team }}</td>
                        <td>{{ $player->position }}</td>
                        <td>{{ $player->matches }}</td>
                        <td>{{ $player->goals }}</td>
                        <td>{{ $player->assists }}</td>
                        <td>${{ number_format($player->market_value, 2) }}</td>
                        <td>
                            <a href="{{ route('stats_players.edit', $player->id) }}" class="btn btn-varovanie btn-sm">Upraviť</a>
                            <form action="{{ route('stats_players.destroy', $player->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-pozor btn-sm"
                                        onclick="return confirm('Určite chceš zmazať tohto hráča?');">
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

    <script>
        document.getElementById('teamFilter').addEventListener('input', async function () {
            const team = this.value;

            const response = await fetch(`{{ route('stats_players.filter') }}?team=${team}`, {
                method: 'GET',
                headers: { 'X-CSRF-TOKEN': '{{ csrf_token() }}' },
            });

            if (response.ok) {
                const players = await response.json();
                const tbody = document.getElementById('playersTableBody');
                tbody.innerHTML = '';

                if (players.length > 0) {
                    players.forEach(player => {
                        const row = `<tr>
                        <td>${player.id}</td>
                        <td>${player.name}</td>
                        <td>${player.team}</td>
                        <td>${player.position}</td>
                        <td>${player.matches}</td>
                        <td>${player.goals}</td>
                        <td>${player.assists}</td>
                        <td>$${parseFloat(player.market_value).toFixed(2)}</td>
                        <td>
                            <a href="/stats_players/${player.id}/edit" class="btn btn-varovanie btn-sm">Upraviť</a>
                            <form action="/stats_players/${player.id}" method="POST" class="d-inline">
                                @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-pozor btn-sm"
                                onclick="return confirm('Určite chceš zmazať tohto hráča?');">
                            Zmazať
                        </button>
                    </form>
                </td>
            </tr>`;
                        tbody.insertAdjacentHTML('beforeend', row);
                    });
                } else {
                    tbody.innerHTML = `<tr>
                    <td colspan="8" class="text-center">Žiadní hráči neboli nájdení.</td>
                </tr>`;
                }
            } else {
                alert('Chyba pri načítavaní hráčov!');
            }
        });
    </script>
@endsection



