<?php

namespace App\Http\Controllers;

use App\Models\StatsPlayer;
use App\Models\StatsTeam;
use Illuminate\Http\Request;

class StatsTeamController extends Controller
{
    public function index() {
        $teams = StatsTeam::all();
        return view('stats_teams.index', compact('teams'));
    }

    public function create() {
        return view('stats_teams.create');
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'matches' => 'required|integer',
            'wins' => 'required|integer',
            'draws' => 'required|integer',
            'losses' => 'required|integer',
            'points' => 'required|integer',
        ]);

        StatsTeam::create($validated);

        return redirect()->route('stats_teams.index')->with('success', 'Tím bol pridaný!');
    }

    public function show($id) {
        $statistic = StatsPlayer::find($id);

        if (!$statistic) {
            return redirect()->route('stats_teams.index')->with('error','Tím sa nenašiel');
        }
        return view('stats_teams.show', compact('statistic'));
    }

    public function edit($id) {
        $statistic = StatsTeam::findOrFail($id);
        return view('stats_teams.edit', compact('statistic'));
    }

    public function update(Request $request, $id) {
        $statistic = StatsTeam::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'matches' => 'required|integer',
            'wins' => 'required|integer',
            'draws' => 'required|integer',
            'losses' => 'required|integer',
            'points' => 'required|integer',
        ]);

        $statistic->update($validated);
        return redirect()->route('stats_teams.index');
    }

    public function destroy($id) {
        $statistic = StatsTeam::findOrFail($id);
        $statistic->delete();
        return redirect()->route('stats_teams.index');
    }
}
