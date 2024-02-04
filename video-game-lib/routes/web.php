<?php

use App\Http\Controllers\ThemeController;
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

Route::get('/theme', [ThemeController::class, 'showTheme'])->name('showTheme');

Route::get('/', [GameController::class, 'showIndex'])->name('showIndex');
Route::get('/games/{id}', [GameController::class, 'showGame'])->name('showGame');

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

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/games', [UserController::class, 'showGames'])->name('admin.showGames');
    Route::get('/admin/categories', [UserController::class, 'showCategories'])->name('admin.showCategories');
    Route::get('/admin/games/add', [UserController::class, 'showAddGameForm'])->name('admin.showAddGameForm');
    Route::post('/admin/games/add', [UserController::class, 'addGame'])->name('admin.addGame');
    Route::get('/admin/games/edit/{id}', [UserController::class, 'editGame'])->name('admin.editGame');
    Route::post('/admin/games/update/{id}', [UserController::class, 'updateGame'])->name('admin.updateGame');
    Route::post('/admin/games/delete/{id}', [UserController::class, 'deleteGame'])->name('admin.deleteGame');
    Route::get('/admin/categories/add', [UserController::class, 'showAddCategoryForm'])->name('admin.showAddCategoryForm');
    Route::post('/admin/categories/add', [UserController::class, 'addCategory'])->name('admin.addCategory');
});
