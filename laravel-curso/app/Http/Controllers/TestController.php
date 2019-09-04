<?php

namespace Curso\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(){
        return view('student.profile');
    }
}
