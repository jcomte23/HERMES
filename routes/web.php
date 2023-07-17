<?php

use App\Http\Controllers\GeneralController;
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

Route::get('/',[GeneralController::class,'index'])->name('index');
Route::get("locale/{locale}",[GeneralController::class,'setLang'])->name('lang');
Route::post("email",[GeneralController::class,'setEmail'])->name('setEmail');
