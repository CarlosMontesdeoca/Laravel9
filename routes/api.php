<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("download/{file_name}", 'App\Http\Controllers\FileController@download');
Route::post("upload", 'App\Http\Controllers\FileController@upload');
