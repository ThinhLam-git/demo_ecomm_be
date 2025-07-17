<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

Route::post('/register', [UserController::class, 'register']);
Route::post('/login', [UserController::class, 'login']);
Route::post('/add-product', [ProductController::class, 'addProduct']);
Route::get('/get-products', [ProductController::class, 'getProducts']);
Route::delete('/delete/{id}', [ProductController::class, 'delete']);
Route::get('/get-product/{id}', [ProductController::class, 'getSingleProduct']);
Route::put('/update-product/{id}', [ProductController::class, 'updateProduct']);
Route::get('/search/{key}', [ProductController::class, 'searchProduct']);
