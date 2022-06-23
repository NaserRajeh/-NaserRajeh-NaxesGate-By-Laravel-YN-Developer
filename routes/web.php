<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\DoctorController;



Auth::routes();
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group([ 'middleware' => 'auth'], function()
{
    Route::resource('User', UserController::class);
    Route::resource('Student', StudentController::class);
    Route::resource('Subject', SubjectController::class);
    Route::resource('Doctor', DoctorController::class);

    Route::get('/', function () {
        return view('home');
    });
});


