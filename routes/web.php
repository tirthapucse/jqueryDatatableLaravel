<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/datatable', [Controller::class,'datatable']);
Route::get('/admin', [Controller::class,'admin']);
Route::get('/teacher', [Controller::class,'teacher']);
Route::get('/student', [Controller::class,'student']);



