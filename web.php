<?php

use Illuminate\support\Facades\Route;
Route::get('/',function() {
    return view ('welcome');
});

Route::get('dina1', function(){
    return 'welcoem to my site';
});