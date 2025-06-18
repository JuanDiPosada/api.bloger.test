<?php

use App\Http\Controllers\ApprenticeController;
use App\Http\Controllers\ComputerController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::apiResource('computers', ComputerController::class)->names('api.v1.computers');

Route::apiResource('apprentices', ApprenticeController::class)->names('api.v1.apprentices');
