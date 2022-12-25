<?php

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

use App\Models\Product;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/catalog', function () {
    return view('pages.catalog');
});

Route::get('/solutions', function () {
    return view('pages.catalog');
});

Route::get('/textures', function () {
    return view('pages.catalog');
});


Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/contacts', function () {
    return view('pages.contacts');
});

Route::get('/card/{id}', function ($id) {
    return view('pages.card', ['record' => Product::query()->find($id)]);
});

