<?php

use App\Http\Controllers\MyController;
use Illuminate\Support\Facades\Route;

Route::get('test20',[MyController::class,'my_data']);

Route::get('/', function () {
    return view('welcome');
});



Route::get('Dina/{id?}', function($id=0){
    return'Welcome to my first website'. $id;
})->whereNumber('id');

Route::get('course/{name}', function($name){
    return 'My name is: '. $name;
})->whereIn('name',['Peter','Tony','Ahmed']);
Route::prefix('cars')->group(function(){
    Route::get('bmw',function(){
        return'Category is BMW';
    });
    Route::get('mercedes',function(){
        return 'Category is Mercedes';
    });
});
// 
// Route::get('test20',function(){
//     return view ('test');
// });


 Route::get('form1',function(){
     return view('form1');
 });
// Route::post('recForm1',function(){
//     return 'Data Recieved';
// })->name('receiveForm1');


//Route::fallback(function(){
    //return redirect('/');
//});
// Route::get('/Sign/{name}', function($name){
//     return view('Welcome').$name;
// });


use App\Http\Controllers\FormController;

Route::post('/receiveForm1', [FormController::class, 'receiveForm1'])->name('receiveForm1');

