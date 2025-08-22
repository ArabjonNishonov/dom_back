<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::prefix('admin')->group(function () {
   Route::prefix('auth')->group(function () {
       Route::get('login', );
   });
});

Route::prefix('agent')->group(function () {
    Route::prefix('auth')->group(function () {
        Route::get('login', );
    });
});

Route::prefix('customer')->group(function () {
    Route::prefix('auth')->group(function () {
        Route::get('login', );
    });
});
