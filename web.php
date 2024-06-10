<?php

use Illuminate\support\Facades\Route;
Route::get('/',function() {
    return view ('stacked');
});

Route::get('dina1', function(){
    return 'welcoem to my site';
});