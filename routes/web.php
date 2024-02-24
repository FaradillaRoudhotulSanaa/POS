<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

use Illuminate\Support\Facades\Route;

// Home
Route::get('/hello', function () {
    return view('hello');
});

// Products
Route::prefix('category-products')->group(function () {
    Route::get('/food-beverage', function() {
        return view('category-products.foodBeverage');
    });

    Route::get('/beauty-health', function() {
        return view('category-products.beautyHealth');
    });

    Route::get('/home-care', function () {
        return view('category-products.homeCare');
    });

    Route::get('/baby-kid', function () {
        return view('category-products.babyKid');
    });
});

// User
Route::get('/user/{id}/name/{name}', function($id, $name) {
    return view('user', ['id' => $id, 'name' => $name]);
});

// Penjualan
Route::get('/penjualan', function () {
    return view('penjualan');
});