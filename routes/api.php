<?php

use App\Http\Controllers\ApprenticeController;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\ComputerController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\TrainingCenterController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::apiResource('computers', ComputerController::class)->names('api.v1.computers');

Route::apiResource('apprentices', ApprenticeController::class)->names('api.v1.apprentices');

Route::apiResource('areas',AreaController::class)->names('api.v1.areas');

route::apiResource('trainingCenters',TrainingCenterController::class)->names('api.v1.trainingCenters');

route::apiResource('teachers',TeacherController::class)->names('api.v1.teachers');

route::apiResource('courses',CourseController::class)->names('api.v1.courses');
