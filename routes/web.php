<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::get('Dina/{id}', function($id){
    return'Welcome to my first website'. $id;
});