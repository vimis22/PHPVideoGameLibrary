<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GameController extends Controller
{
    public function getGames() {
        return view('layouts.dbgames');
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
