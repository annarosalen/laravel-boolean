<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/helloAll', function(){

    return view('helloAll');
});

Route::get('/helloYou', function(){

    $name = 'Mario';

    return view('helloyou',
        [
            'name' => $name
        ]
    );
});

Route::get('/helloYou2', function(){

    $name = 'Anna';

    return view('helloyou',
        [
            'name' => $name
        ]
    );
});

Route::get('/holatodos', 'MainController@hola');

Route::get('/holatu', 'MainController@holatu');

Route::get('/holatu2', 'MainController@holatu2');