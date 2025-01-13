<?php

use App\Http\Middleware\JeAdmin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StatsPlayerController;
use App\Http\Controllers\StatsTeamController;
use App\Http\Controllers\NavrhyController;

Route::get('register', function () {
    return view('auth.register');
})->name('register');

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

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

Route::middleware('auth')->group(function () {
    Route::get('/navrhy', [NavrhyController::class, 'index'])->name('navrhy');
    Route::post('/navrhy', [NavrhyController::class, 'store'])->name('navrhy.store');
    Route::patch('/navrhy/{id}/update-inline', [NavrhyController::class, 'updateInline'])->name('navrhy.update-inline');

    Route::get('/stats_players', [StatsPlayerController::class, 'index'])->name('stats_players.index');
    Route::get('/stats_teams', [StatsTeamController::class, 'index'])->name('stats_teams.index');

    Route::get('/stats_players/filter', [StatsPlayerController::class, 'filter'])
        ->name('stats_players.filter');
});

Route::middleware(['auth', JeAdmin::class])->group(function () {
    Route::resource('stats_players', StatsPlayerController::class)
        ->only(['create', 'store', 'edit', 'update', 'destroy'])
        ->names([
            'create' => 'stats_players.create',
            'store' => 'stats_players.store',
            'edit' => 'stats_players.edit',
            'update' => 'stats_players.update',
            'destroy' => 'stats_players.destroy',
        ]);
    Route::resource('stats_teams', StatsTeamController::class)
        ->only(['create', 'store', 'edit', 'update', 'destroy'])
        ->names([
            'create' => 'stats_teams.create',
            'store' => 'stats_teams.store',
            'edit' => 'stats_teams.edit',
            'update' => 'stats_teams.update',
            'destroy' => 'stats_teams.destroy',
        ]);
});


require __DIR__.'/auth.php';

