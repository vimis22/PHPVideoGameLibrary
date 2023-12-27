<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Startpage
Route::get('/game/index', [GameController::class, 'showIndex'])->name('showIndex');

//Signup stuff



//Games
Route::get('/game/strategy', [GameController::class, 'showStrategy'])->name('showStrategy');
Route::get('/game/racing', [GameController::class, 'showDrivingRacing'])->name('showDrivingRacing');
Route::get('/game/action', [GameController::class, 'showAction'])->name('showAction');
Route::get('/game/shooting', [GameController::class, 'showShooting'])->name('showShooting');
Route::get('/game/puzzle', [GameController::class, 'showPuzzle'])->name('showPuzzle');
Route::get('/game/{linkPath}', [GameController::class, 'showGamePage'])->name('showGamePage');

Route::get('/account', [UserController::class, 'showAccount'])->name('showAccount');
Route::post('/account/login', [UserController::class, 'login']);
Route::post('/account/logout', [UserController::class, 'logout'])->middleware('auth');
Route::post('/account/change-password', [UserController::class, 'changePassword'])->middleware('auth');
