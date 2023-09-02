<?php

use App\Http\Controllers\beliController;
use Illuminate\Support\Facades\Route;


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
    return view('index');
});
Route::get('beli', function () {
    return view('beli');});

Route::get('/prosesBeli',[beliController::class,'beli']);
Route::post('/prosesBeli_cekout',[beliController::class,'store']);
