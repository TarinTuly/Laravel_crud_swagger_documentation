<?php

use Illuminate\Support\Facades\Route;
use App\Models\Product;
use App\Http\Controllers\ProductsController;

Route::get('/', function () {
    //ydd(Product::all());
    return view('welcome');
});

