<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('files/upload', [\App\Http\Controllers\UploadController::class, 'upload']);
Route::delete('files/{file}', [\App\Http\Controllers\UploadController::class, 'destroy']);
Route::get('files/{file}', [\App\Http\Controllers\UploadController::class, 'show']);
Route::get('files', [\App\Http\Controllers\UploadController::class, 'all']);

