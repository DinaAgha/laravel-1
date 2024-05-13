<?php

use App\Http\Controllers\MyController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;

use App\Http\Controllers\StudentController;

Route::get('/students', [StudentController::class, 'create'])->name('students.create');
Route::post('/students', [StudentController::class, 'store'])->name('students.store');
Route::get('/students', [StudentController::class, 'index'])->name('students.index');