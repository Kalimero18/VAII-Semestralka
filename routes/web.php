<?php

use App\Http\Controllers\ProfileController;
use App\Http\Middleware\JeAdmin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StatsPlayerController;
use App\Http\Controllers\StatsTeamController;
use App\Http\Controllers\NavrhyController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/oprojekte', function () {
    return view('oProjekte');
})->name('oprojekte');

Route::get('/kluby', function () {
    return view('kluby');
})->name('kluby');

Route::get('/arsenal', function () {
    return view('arsenal');
})->name('arsenal');

Route::get('/brentford', function () {
    return view('brentford');
})->name('brentford');

Route::get('/chelsea', function () {
    return view('chelsea');
})->name('chelsea');

Route::get('/crystal_palace', function () {
    return view('crystal_palace');
})->name('crystal_palace');

Route::get('/fulham', function () {
    return view('fulham');
})->name('fulham');

Route::get('/tottenham', function () {
    return view('tottenham');
})->name('tottenham');

Route::get('/west-ham', function () {
    return view('west-ham');
})->name('west_ham');

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/stats_players', [StatsPlayerController::class, 'index'])
    ->middleware('auth')
    ->name('stats_players.index');

Route::get('/stats_players/create', [StatsPlayerController::class, 'create'])
    ->middleware(['auth', JeAdmin::class])
    ->name('stats_players.create');

Route::post('/stats_players', [StatsPlayerController::class, 'store'])
    ->middleware(['auth', JeAdmin::class])
    ->name('stats_players.store');

Route::get('/stats_players/{id}/edit', [StatsPlayerController::class, 'edit'])
    ->middleware(['auth', JeAdmin::class])
    ->name('stats_players.edit');

Route::put('/stats_players/{id}', [StatsPlayerController::class, 'update'])
    ->middleware(['auth', JeAdmin::class])
    ->name('stats_players.update');

Route::delete('/stats_players/{id}', [StatsPlayerController::class, 'destroy'])
    ->middleware(['auth', JeAdmin::class])
    ->name('stats_players.destroy');

Route::get('/stats_teams', [StatsTeamController::class, 'index'])
    ->middleware('auth')
    ->name('stats_teams.index');

Route::get('/stats_teams/create', [StatsTeamController::class, 'create'])
    ->middleware(['auth', JeAdmin::class])
    ->name('stats_teams.create');

Route::post('/stats_teams', [StatsTeamController::class, 'store'])
    ->middleware(['auth', JeAdmin::class])
    ->name('stats_teams.store');

Route::get('/stats_teams/{id}/edit', [StatsTeamController::class, 'edit'])
    ->middleware(['auth', JeAdmin::class])
    ->name('stats_teams.edit');

Route::put('/stats_teams/{id}', [StatsTeamController::class, 'update'])
    ->middleware(['auth', JeAdmin::class])
    ->name('stats_teams.update');

Route::delete('/stats_teams/{id}', [StatsTeamController::class, 'destroy'])
    ->middleware(['auth', JeAdmin::class])
    ->name('stats_teams.destroy');


Route::middleware(['auth'])->group(function () {
    Route::get('/navrhy', [NavrhyController::class, 'index'])->name('navrhy');
    Route::post('/navrhy', [NavrhyController::class, 'store'])->name('navrhy.store');
});

require __DIR__.'/auth.php';
