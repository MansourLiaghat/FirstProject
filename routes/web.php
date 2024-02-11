<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/' , [StudentController::class ,'index'])->name('student.index');
Route::post('/users' , [StudentController::class , 'store'])->name('student.store');
Route::get('/users/{id}/edit' , [StudentController::class , 'edit'])->name('student.edit');
Route::get('/users/{user}' , [StudentController::class , 'update'])->name('student.update');