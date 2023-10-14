<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/master-motor/{unique_id}', [App\Http\Controllers\MotorController::class, "get_unique_id"]);
Route::get('/motor/{funcloc}', [App\Http\Controllers\MotorController::class, "get"]);
Route::post('/motor', [App\Http\Controllers\MotorController::class, "search"]);

Route::get('/checking-motor/{funcloc}', [App\Http\Controllers\CheckingMotorController::class, "data"]);
Route::post('/checking-motor/{funcloc}', [App\Http\Controllers\CheckingMotorController::class, "input"]);
