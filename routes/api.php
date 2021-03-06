<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\MentorController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::resource('mentors', MentorController::class);

Route::prefix('courses')->group(function () {
    Route::post('/', [CourseController::class, 'create']);
});
