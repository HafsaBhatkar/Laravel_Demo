<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});


Route::view('add-student','add-student');

Route::post('add-student',[StudentController::class,'add']);
Route::get('read-student',[StudentController::class,'read']);
Route::get('delete/{id}',[StudentController::class,'delete']);
Route::get('edit/{id}',[StudentController::class,'edit']);
Route::put('edit-student/{id}',[StudentController::class,'editStudent']);
// Route::get('search',[StudentController::class,'read']);

Route::post('search-student',[StudentController::class,'search']);

Route::post('deleteMultiple',[StudentController::class,'deleteMultiple']);
