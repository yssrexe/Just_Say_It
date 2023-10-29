<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\MyController;
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

route::get('/', [MyController::class,'Welcome']);
Route::get('/signup', [MyController::class,'sign']);
Route::get('/login', [MyController::class,'login']);
Route::get('/off', [MyController::class,'offpage']);


Route::post('/submit-form', [FormController::class,'login']);
