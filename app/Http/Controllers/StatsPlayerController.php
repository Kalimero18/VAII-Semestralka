<?php


namespace App\Http\Controllers;

use App\Models\StatsPlayer;
use Illuminate\Http\Request;

class StatsPlayerController extends Controller
{
    public function index()
    {
        $players = StatsPlayer::all();
        return view('stats_players.index', compact('players'));
    }

    public function create()
    {
        return view('stats_players.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:50',
            'matches' => 'required|integer',
            'goals' => 'nullable|integer',
            'assists' => 'nullable|integer',
            'market_value' => 'nullable|numeric',
        ]);

        StatsPlayer::create($validated);

        return redirect()->route('stats_players.index')->with('success', 'Hráč bol pridaný!');
    }

    public function show($id)
    {
        $statistic = StatsPlayer::find($id);

        if (!$statistic) {
            return redirect()->route('stats_players.index')->with('error', 'Hráč  sa nenašiel');
        }
        return view('stats_players.show', compact('statistic'));
    }

    public function edit($id)
    {
        $statistic = StatsPlayer::findOrFail($id);
        return view('stats_players.edit', compact('statistic'));
    }

    public function update(Request $request, $id)
    {
        $statistic = StatsPlayer::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:50',
            'matches' => 'required|integer',
            'goals' => 'nullable|integer',
            'assists' => 'nullable|integer',
            'market_value' => 'nullable|numeric',
        ]);

        $statistic->update($validated);
        return redirect()->route('stats_players.index');
    }

    public function destroy($id)
    {
        $statistic = StatsPlayer::findOrFail($id);
        $statistic->delete();
        return redirect()->route('stats_players.index');
    }
}


