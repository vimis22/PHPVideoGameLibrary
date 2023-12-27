<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;

class GameController extends Controller
{
    public function showGamePage($linkPath) {
        //The first() is to fix a query builder instance error. Without the first it's and instance of a query builder instead of the actual model instance.
        $game = Game::where('link_path', $linkPath)->first();
        $categories = $game->categories;

        return view('games.gamepage', ['game' => $game, 'categories' => $categories]);
    }

    public function showIndex() {
        return view('index');
    }

    public function showAccount() {
        return view ('accounts.account');
    }

    public function showSignup() {
        return view ('accounts.signup');
    }

    public function showNews() {
        return view ('accounts.news');
    }

    public function showStrategy() {
        return view('games.strategy');
    }

    public function showDrivingRacing() {
        return view('games.driving&racing');
    }

    public function showAction() {
        return view('games.action');
    }

    public function showShooting() {
        return view('games.shooting');
    }

    public function showPuzzle() {
        return view('games.puzzle');
    }
}
