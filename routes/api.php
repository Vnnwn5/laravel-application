<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
//Tags
Route::get('/tags', \App\Http\Controllers\TagController::class);

//Offices
Route::get('/offices', [\App\Http\Controllers\OfficeController::class, 'index']);
