<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\MyController;
use App\Http\Controllers\PostController;
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


Route::post('/submit', [FormController::class,'signin'])->name('submit');

Route::get('/check', [FormController::class, 'check'])->name('check');
Route::post('/check', [FormController::class, 'check']);


#for posting

Route::post('/post', [PostController::class,'post'])->name('post');
