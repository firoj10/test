<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\catController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('catshow/',[fristcontroller::class,'show']);
Route::get('catshow/',[catController::class,'show']);
Route::post('add_cat/',[catController::class,'insert']);
Route::get('edit/',[catController::class,'edit']);