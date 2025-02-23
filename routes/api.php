<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('/products', ProductController::class);

Route::get('/products', [ProductController::class, 'index']);        // Получить список товаров
Route::get('/products/{id}', [ProductController::class, 'show']);    // Получить один товар
Route::post('/products', [ProductController::class, 'store']);       // Создать товар
Route::patch('/products/{id}', [ProductController::class, 'update']);  // Обновить товар
Route::delete('/products/{id}', [ProductController::class, 'destroy']); // Удалить товар