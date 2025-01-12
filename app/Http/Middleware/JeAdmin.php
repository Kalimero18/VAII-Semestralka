<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JeAdmin
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check() && Auth::user()->hasRole('admin')) {
            return $next($request);
        }

        if ($request->is('stats_players*')) {
            return redirect()->route('stats_players.index')->withErrors('Nemáte oprávnenie upravovať hráčov.');
        }

        if ($request->is('stats_teams*')) {
            return redirect()->route('stats_teams.index')->withErrors('Nemáte oprávnenie upravovať tímy.');
        }
    }
}

