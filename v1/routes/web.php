<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\EasyLevelController;
use App\Http\Controllers\MediumLevelController;
use App\Http\Controllers\HardLevelController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [QuizController::class,'QuizHome']);

// for Easy Level
Route::get('/easy_level_start', [EasyLevelController::class,'create_user']);
Route::get('/easy/{id}', [EasyLevelController::class,'EasyLevel']);
Route::post('/easy/submitques', [EasyLevelController::class,'SubmitQuestion']);

// for Medium Level
Route::get('/medium_level_start', [MediumLevelController::class,'create_user']);
Route::get('/medium/{id}', [MediumLevelController::class,'MediumLevel']);
Route::post('/medium/submitques', [MediumLevelController::class,'SubmitQuestion']);

// for Hard Level

Route::get('/hard_level_start', [HardLevelController::class,'create_user']);
Route::get('/hard/{id}', [HardLevelController::class,'HardLevel']);
Route::post('/hard/submitques', [HardLevelController::class,'SubmitQuestion']);






