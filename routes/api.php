<?php

use App\Http\Controllers\AudioController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\VideoController;
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

//Route::post('files/upload', [\App\Http\Controllers\UploadController::class, 'upload']);
//Route::delete('files/{file}', [\App\Http\Controllers\UploadController::class, 'destroy']);
//Route::get('files/{file}', [\App\Http\Controllers\UploadController::class, 'show']);
//Route::get('files', [\App\Http\Controllers\UploadController::class, 'all']);

Route::controller(ImageController::class)->group(function () {
 Route::get('images', 'all');
 Route::get('images/{image}', 'show');
 Route::post('images/upload', 'upload');
 Route::get('images/{image}', 'destroy');
});
//Route::apiResource('images', ImageController::class)->except('update');
Route::apiResource('files', FileController::class)->except('update');
Route::apiResource('videos', VideoController::class)->except('update');
Route::apiResource('audios', AudioController::class)->except('update');
