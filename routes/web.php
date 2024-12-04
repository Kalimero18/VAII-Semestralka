<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StatsPlayerController;

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

Route::resource('stats_players', StatsPlayerController::class);
Route::post('/stats_players', [StatsPlayerController::class, 'store'])->name('stats_players.store');


require __DIR__.'/auth.php';
