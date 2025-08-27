<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::prefix('auth')->group(function () {
    Route::get('login', ['AuthController', 'login']);
});

Route::prefix('user')->group(function () {
    Route::get('profile', ['UserController', 'profile']);
    Route::put('update', ['UserController', 'update']);
    Route::post('change-password', ['UserController', 'changePassword']);
    Route::post('logout', ['AuthController', 'logout']);
});

Route::prefix('admin')->group(function () {

    Route::prefix('profile')->group(function () {
        Route::get('/', ['AdminController', 'index']);
        Route::post('change-password', ['AdminController', 'store']);
        Route::put('update', ['AdminController', 'update']);
    });
   Route::prefix('agents')->group(function () {
       Route::get('list', ['AgentController', 'index']);
       Route::post('create', ['AgentController', 'store']);
       Route::get('{id}', ['AgentController', 'show']);
       Route::put('{id}', ['AgentController', 'update']);
       Route::delete('{id}', ['AgentController', 'destroy']);
   });

   Route::prefix('categories')->group(function () {
       Route::get('list', ['CategoryController', 'index']);
       Route::post('create', ['CategoryController', 'store']);
       Route::get('{id}', ['CategoryController', 'show']);
       Route::put('{id}', ['CategoryController', 'update']);
       Route::delete('{id}', ['CategoryController', 'destroy']);
   });

   Route::prefix('customers')->group(function () {
       Route::get('list', ['CustomerController', 'index']);
       Route::get('{id}', ['CustomerController', 'show']);
       Route::put('{id}', ['CustomerController', 'update']);
       Route::delete('{id}', ['CustomerController', 'destroy']);
   });
});

Route::prefix('agent')->group(function () {
        Route::prefix('profile')->group(function () {
        Route::get('/', ['AdminController', 'index']);
        Route::post('change-password', ['AdminController', 'store']);
        Route::put('update', ['AdminController', 'update']);
    });
    Route::prefix('product')->group(function () {
        Route::get('list', ['ProductController', 'index']);
        Route::post('create', ['ProductController', 'store']);
        Route::get('{id}', ['ProductController', 'show']);
        Route::put('{id}', ['ProductController', 'update']);
        Route::delete('{id}', ['ProductController', 'destroy']);
    });
});

Route::prefix('customer')->group(function () {
    Route::prefix('profile')->group(function () {
        Route::get('/', ['AdminController', 'index']);
        Route::post('change-password', ['AdminController', 'store']);
        Route::put('update', ['AdminController', 'update']);
    });
    Route::prefix('orders')->group(function () {
        Route::get('list', ['OrderController', 'index']);
        Route::post('create', ['OrderController', 'store']);
        Route::get('{id}', ['OrderController', 'show']);
        Route::put('{id}', ['OrderController', 'update']);
        Route::delete('{id}', ['OrderController', 'destroy']);
    });

    Route::prefix('reviews')->group(function () {
        Route::get('list', ['ReviewController', 'index']);
        Route::post('create', ['ReviewController', 'store']);
        Route::get('{id}', ['ReviewController', 'show']);
        Route::put('{id}', ['ReviewController', 'update']);
        Route::delete('{id}', ['ReviewController', 'destroy']);
    });

    Route::prefix('follows')->group(function () {
        Route::get('list', ['FollowController', 'index']);
        Route::post('create', ['FollowController', 'store']);
        Route::get('{id}', ['FollowController', 'show']);
        Route::put('{id}', ['FollowController', 'update']);
        Route::delete('{id}', ['FollowController', 'destroy']);
    });
});
