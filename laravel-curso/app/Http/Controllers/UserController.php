<?php

namespace Curso\Http\Controllers;
use Curso\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show($user){
        $usr = User::find($user);
        // dd($usr->name);
        return view('user', compact('usr'));
    }
}
