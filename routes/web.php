<?php

use App\Models\Asset;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        'categories' => Category::all(),
        'products' => Product::all(),
        'assets' => Asset::all()
    ]);
});

Route::get('/products/{slug}', function ($slug) {
    return view('product', [
        'slug' => $slug,
        'title' => Product::where('product_slug', $slug)->first()->product_name,
        'product' => Product::where('product_slug', $slug)->first()
    ]);
});
