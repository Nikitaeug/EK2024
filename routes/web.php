<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;
use App\Http\Controllers\Teamcontroller;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StandingsController;

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

Route::get('/teams', [Teamcontroller::class, 'index'])->name('teams.index');
Route::get('/games', [GameController::class, 'index'])->name('games.index');
Route::get('/games/{game}/edit', [GameController::class, 'edit'])->name('games.edit');
ROute::get('/games/show/{game}', [GameController::class, 'show'])->name('games.show');

Route::get('/team/{id}', [Teamcontroller::class, 'show'])->name('team.show');

require __DIR__.'/auth.php';

Route::put('/games/{game}/edit', [GameController::class, 'update'])->name('games.update');

Route::get('/standings', [StandingsController::class, 'index'])->name('standings.index');