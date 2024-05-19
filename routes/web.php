<?php
namespace App\Http\Controllers;
use App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\MyController;

use App\Http\Controllers\ClientController;






Route::get('student',[StudentController::class,'index'])->name('student');
Route::get('addStudent',[StudentController::class,'create'])->name('addStudent');
Route::get('student',[StudentController::class,'index'])->name('student');
Route::get('editStudent/{id}',[StudentController::class,'edit'])->name('editStudent');
Route::put('updateStudent/{id}',[StudentController::class,'update'])->name('updateStudent');
Route::get('showStudent',[StudentController::class,'show'])->name('showStudent');
Route::delete('delStudent',[StudentController::class,'destroy'])->name('delStudent');
Route::delete('forceDelete',[StudentController::class,'forceDelete'])->name('forceDelete');
Route::get('trashStudent',[StudentController::class,'trash'])->name('trashStudent');
Route::get('restoreStudent/{id}',[StudentController::class,'restore'])->name('restoreStudent');

Route::post('insertClients',[ClientController::class,'store'])->name('insertClient');
Route::get('addClient',[ClientController::class,'create'])->name('addClient');
Route::get('client',[ClientController::class,'index'])->name('client');
Route::get('editClient/{id}',[ClientController::class,'edit'])->name('editClient');
Route::put('updateClient/{id}',[ClientController::class,'update'])->name('updateClient');
Route::get('showClient/{id}',[ClientController::class,'show'])->name('showClient');
Route::delete('delClient',[ClientController::class,'destroy'])->name('delClient');
Route::delete('forceDelete',[ClientController::class,'forceDelete'])->name('forceDelete');
Route::get('trashClient',[ClientController::class,'trash'])->name('trashClient');
Route::get('restoreClient/{id}',[ClientController::class,'restore'])->name('restoreClient');

// Route::get('/students', [StudentController::class, 'create'])->name('students.create');
// Route::post('/students', [StudentController::class, 'store'])->name('students.store');
// Route::get('/students', [StudentController::class, 'index'])->name('students.index');

// Route::get('/car/{name?}', function ($name=null) {
//     return 'The name is: ' . $name;
//     })->whereAlpha('name');

// Route::get('Dina/',function() {
// return 'welcome to my first website';
// });

// Route::get('Ali/{id?}',function($id=0){
//     return 'welcome'.$id;
// })->whereNumber('id');

// Route::get('course/{name}', function($name){
//     return $name.' course';
// }) ->whereIn('name',['max','cad','photoshop']);


// Route::namespace('Front')->group(function(){

// }
// Route::controller(FrontController::class)
// ->group(function(){
//     Route::get('my_data');
// });
// Route::prefix('course')->group(function (){ 
//     Route::get('max', function(){
//         return 'Course you have rolled in is 3DsMAX';
// });

// Route::get('cad',function(){
//     return 'Cpurse you have rolled in is CAD';
// });
// });

// Route::fallback(function(){
//     return redirect('/Dina');
// });

// Route::get('ex', function(){
//     return view('cars');
//     });

Route::post('ex',function(){
    return'Data recieved';
})->name('recieveForm');