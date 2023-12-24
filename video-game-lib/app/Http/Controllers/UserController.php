<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //

    public function index() {
        return view('accounts.myprofile');
    }

    public function serveLogin() {
        return view('accounts.account');
    }

    public function create() {
        return view('accounts.signup');
    }

    public function addUser(Request $request) {

        

        $user = User::create($request->only('email','name','password'));



    }

}
