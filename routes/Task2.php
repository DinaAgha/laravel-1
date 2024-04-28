<?php

use App\Http\Controllers\MyController;
use Illuminate\Support\Facades\Route;

Route::get('SignIn',[MyController::class,'my_data']);

Route::get('Sign', function () {
    return view('Welcome');
});


Route::get('form1',function(){
    return view('form1');
});
Route::post('recForm1',function(){
    return 'Data Recieved';
})->name('receiveForm1');

