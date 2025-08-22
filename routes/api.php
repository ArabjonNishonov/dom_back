<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/favorite', function (Request $request) {
    $data = [
        'title' => 'Favorite Products',
        'body' => 'Favorite Products',
        'price' => 400,
        'quantity' => 3,
    ];
    return response()->json(['message' => 'salom', 'data' => $data]);
});
