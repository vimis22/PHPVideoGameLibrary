<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Game;

class GameController extends Controller
{
    public function showIndex()
    {
        $categories = Game::distinct()->pluck('category')->toArray();

        $gamesByCategory = [];
        foreach ($categories as $category) {
            $gamesByCategory[$category] = Game::where('category', $category)->orderBy('name')->get();
        }

        return view('index', compact('categories', 'gamesByCategory'));
    }

    public function showGame($id)
    {
        $game = Game::findOrFail($id);
        return view('games.show', compact('game'));
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
