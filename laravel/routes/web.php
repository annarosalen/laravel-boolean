<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/helloAll', function(){

    return view('home');
});

Route::get('/helloYou', function(){

    $name = 'Mario';

    return view('hello',
        [
            'name' => $name
        ]
    );
});

Route::get('/helloYou2', function(){

    $name = 'Anna';

    return view('hello',
        [
            'name' => $name
        ]
    );
});