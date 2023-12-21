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

        // Should probably be salting this as well, but I don't think there's enough time to figure out how to do that.
        

        $user = User::create($request->only('email','name','password'));


    }

}
