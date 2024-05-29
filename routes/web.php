<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BiriyaniController;
use App\Http\Controllers\Controller;
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
Route::get('/biriyani',[BiriyaniController::class, 'index']);
Route::get('/about',[Controller::class, 'index']);
Route::get('/', function () {
    return view('welcome');
});
