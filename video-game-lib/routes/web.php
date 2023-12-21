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
Route::get('/account', [GameController::class, 'showAccount'])->name('showAccount');
Route::get('/signup', [GameController::class, 'showSignup'])->name('showSignup');
Route::get('/news', [GameController::class, 'showNews'])->name('showNews');


// User stuff

Route::get('/user', [UserController::class, 'index'])->name('user.index');
Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
Route::post('/user/create', [UserController::class, 'addUser'])->name('user.addUser');
route::get('/user/login', [UserController::class, 'serveLogin'])->name('user.serveLogin');
Route::post('/user/login', [UserController::class, 'handleLogin'])->name('user.handleLogin');


//Games
Route::get('/game/strategy', [GameController::class, 'showStrategy'])->name('showStrategy');
Route::get('/game/racing', [GameController::class, 'showDrivingRacing'])->name('showDrivingRacing');
Route::get('/game/action', [GameController::class, 'showAction'])->name('showAction');
Route::get('/game/shooting', [GameController::class, 'showShooting'])->name('showShooting');
Route::get('/game/puzzle', [GameController::class, 'showPuzzle'])->name('showPuzzle');
Route::get('/game/{linkPath}', [GameController::class, 'showGamePage'])->name('showGamePage');
