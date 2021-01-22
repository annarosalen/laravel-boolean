<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function hola(){
        return 'hola a todos!';
    }

    public function holatu(){

        $name = 'Pedro';

        return view('holatu', 
            [
                'name' => $name
            ]
        );
    }

    public function holatu2(){

        $name = 'Rosalìa';

        return view('holatu', 
            [
                'name' => $name
            ]
        );
    }
}
