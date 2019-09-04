<?php

namespace Curso\Http\Controllers;

use Illuminate\Http\Request;

class TestController2 extends Controller
{
    public function index($name, $age){
        // return 'Hola '.$name.', tienes '.$age.' años';
        if($age >= 18)
        {
            return 'Puedes ingresar al sitio';
            die();
        }
        if($age <=17 && $age >=1)
        {
            return 'No puedes ingresar al sitio';
            die();
        }
        if($age <= 0)
        {
            return 'Esa edad no existe travieso';
            die();
        }
    }
}
