<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $title = 'Hello World ';
    $city = [
        'Milano',
        'Roma',
        'Napoli',
    ];
    $stampa = false;


    return view('home',compact('title','city','stampa'));
});
