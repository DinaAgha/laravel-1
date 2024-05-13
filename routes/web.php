<?php

use App\Http\Controllers\MyController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use APP\Http\Controllers\FrontController;
use App\Http\Controllers\students2Controller;


Route::Post('insertStudent',[students2Controller::class,'store'])->name('insertStudent');
Route::get('addStudent',[students2Controller::class,'create'])->name('addStudent');
Route::get('students',[students2Controller::class,'index'])->name('students');

Route::Post('insertClients',[ClientController::class,'store'])->name('insertClient');
Route::get('addClient',[ClientController::class,'create'])->name('addClient');
Route::get('clients',[ClientController::class,'index'])->name('clients');

use App\Http\Controllers\StudentController;

// Route::get('/students', [StudentController::class, 'create'])->name('students.create');
// Route::post('/students', [StudentController::class, 'store'])->name('students.store');
// Route::get('/students', [StudentController::class, 'index'])->name('students.index');

Route::get('/car/{name?}', function ($name=null) {
    return 'The name is: ' . $name;
    })->whereAlpha('name');

Route::get('Dina/',function() {
return 'welcome to my first website';
});

Route::get('Ali/{id?}',function($id=0){
    return 'welcome'.$id;
})->whereNumber('id');

// Route::get('course/{name}', function($name){
//     return $name.' course';
// }) ->whereIn('name',['max','cad','photoshop']);


// Route::namespace('Front')->group(function(){

// }
// Route::controller(FrontController::class)
// ->group(function(){
//     Route::get('my_data');
// });
Route::prefix('course')->group(function (){ 
    Route::get('max', function(){
        return 'Course you have rolled in is 3DsMAX';
});

Route::get('cad',function(){
    return 'Cpurse you have rolled in is CAD';
});
});

Route::fallback(function(){
    return redirect('/Dina');
});

Route::get('ex', function(){
    return view('cars');
    });

Route::post('ex',function(){
    return'Data recieved';
})->name('recieveForm');