<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClassificationController;

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
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/products', function(){
    return view('products');
});

Route::get('/customers', function(){
    return view('customers');
});

Route::get('/products/classification', function(){
    return view('products.classification');
});

Route::post('/products/classification/new', "ClassificationController@insert");

Route::get('/products/new', function(){
    return view('products.new');
});
