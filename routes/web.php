<?php

use App\Http\Controllers\MasterController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

Route::get('/' , [StudentController::class ,'index'])->name('student.index');
Route::get('/users/create' , [StudentController::class , 'create'])->name('student.create');
Route::post('/users' , [StudentController::class , 'store'])->name('student.store');
Route::get('/users/{student}/edit' , [StudentController::class , 'edit'])->name('student.edit');
Route::post('/users/{student}' , [StudentController::class , 'update'])->name('student.update');
Route::get('/ussers/{student}/destroy' , [StudentController::class , 'destroy'])->name('student.destroy');
Route::get('/test' , [TeacherController::class , 'store']);
Route::get('/many' , [MasterController::class , 'create']);