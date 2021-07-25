<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImportexportController;
use App\Http\Controllers\KontrakController;


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
Route::get('export', [ImportexportController::class,'export'])->name('export');
Route::get('import-export-view', [ImportexportController::class,'index']);
Route::post('import', [ImportexportController::class,'import'])->name('import');


Route::get('kontrak', [KontrakController::class,'index']);
Route::post('/importkontrak', [KontrakController::class,'importkontrak'])->name('importkontrak');



