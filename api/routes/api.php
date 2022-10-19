<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Product;
use App\Models\Category;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/products', function () {
    return Product::all();
});

Route::get('/products/{product}', function ($product) {
    return Product::find($product);
});


Route::get('/products/category/{category_id}', function ($category_id) {
    $products = Product::where('category_id', $category_id)->get();
    return response()->json($products);
});

Route::post('/products', function (Request $request) {
    return Product::create($request->all());
});

Route::put('/products/{product}', function (Request $request, $product) {
    $product = Product::findOrFail($product);
    $product->update($request->all());
    return $product;
});

Route::delete('/products/{product}', function ($product) {
    Product::find($product)->delete();

    return 204;
});

Route::get('/categories', function () {
    return Category::all();
});
