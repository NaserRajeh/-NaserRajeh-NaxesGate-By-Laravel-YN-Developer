<?php

use App\Http\Controllers\UnversityController;
use App\Http\Controllers\CollageController;
use App\Http\Controllers\SpecializationController;



Auth::routes();         
Route::group([ 'middleware' => 'auth'], function()
{
    Route::resource('Unversity', UnversityController::class);
    Route::resource('Collage', CollageController::class);
    Route::resource('specialization', SpecializationController::class);

});
