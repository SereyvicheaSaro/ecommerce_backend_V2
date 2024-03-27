<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:api')->get('/test', function () {
    return "Hello";
});

// Category routes group
Route::middleware('auth:api')->get('/categories', [CategoryController::class, 'getCategories']);
Route::middleware('auth:api')->middleware('isAdmin')->post('/categories', [CategoryController::class, 'createCategory']);
Route::middleware('auth:api')->get('/categories/{categoryId}', [CategoryController::class, 'getCategory']);
Route::middleware('auth:api')->patch('/categories/{categoryId}', [CategoryController::class, 'updateCategory']);
Route::middleware('auth:api')->delete('/categories/{categoryId}', [CategoryController::class, 'deleteCategory']);
Route::middleware('auth:api')->get('/categories/{categoryId}/products', [CategoryController::class, 'getProductsOfCategory']);

// Product routes group
Route::middleware('auth:api')->get('/products', [ProductController::class, 'getProducts']);
Route::middleware('auth:api')->post('/products', [ProductController::class, 'createProduct']);
Route::middleware('auth:api')->get('/products/{productId}', [ProductController::class, 'getProduct']);
Route::middleware('auth:api')->patch('/products/{productId}', [ProductController::class, 'updateProduct']);
Route::middleware('auth:api')->delete('/products/{productId}', [ProductController::class, 'deleteProduct']);

// -- Authentication api urls
Route::post('/register', [AuthenticationController::class, 'register']);