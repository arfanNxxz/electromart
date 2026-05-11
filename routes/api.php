<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ProductController;

Route::apiResource('brands', BrandController::class);
Route::apiResource('products', ProductController::class);