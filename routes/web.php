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

use App\Models\Page;
use App\Models\Product;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('pages/{slug}', function ($slug) {
    $record = Page::query()->where('slug', '=', $slug)->firstOrFail();
    return view('default', ['content' => $record['content']]);
});

Route::get('/categories/{slug}', function ($slug) {
    $category = View::shared('categories')[$slug] ?? [];

    $categories = array_map(function ($item) {
        return $item['id'];
    }, $category['children'] ?? []);
    if (isset($category['id'])) array_push($categories, $category['id']);

    $records = Product::query()->whereIn('catalog_id', $categories)->get();

    return view('pages.catalog', [
        'category' => $category,
        'records' => $records
    ]);
})->name('categories.show');

Route::get('/products/{id}', function ($id) {
    $record = Product::query()->with('category')->find($id);
    return view('pages.card', [
        'category' => $record->category,
        'record' => $record
    ]);
})->name('products.show');
