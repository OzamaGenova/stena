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

function getSidebar($key): array
{
    $root = View::shared('catalogs')[$key] ?? [];
    return $root['children'] ?? [];
}

function getCatalogIds($key): array
{
    $root = View::shared('catalogs')[$key] ?? [];
    $catalogs = array_map(function ($item) {
        return $item['id'];
    }, $root['children'] ?? []);
    if (isset($root['id']))
        array_push($catalogs, $root['id']);
    return $catalogs;
}

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/catalog', function () {
    $sidebar = getSidebar('catalog');
    $catalogs = getCatalogIds('catalog');
    $records = Product::query()->whereIn('catalog_id', $catalogs)->get();
    return view('pages.catalog', [
        'title' => 'Каталог продукции',
        'sidebar' => $sidebar,
        'records' => $records
    ]);
})->name('catalog');

Route::get('/solutions', function () {
    $sidebar = getSidebar('solutions');
    $catalogs = getCatalogIds('solutions');
    $records = Product::query()->whereIn('catalog_id', $catalogs)->get();
    return view('pages.catalog', [
        'title' => 'Решения',
        'sidebar' => $sidebar,
        'records' => $records
    ]);
});

Route::get('/textures', function () {
    $sidebar = getSidebar('solutions');
    $catalogs = getCatalogIds('textures');
    $records = Product::query()->whereIn('catalog_id', $catalogs)->get();
    return view('pages.catalog', [
        'title' => 'Текстуры продукции',
        'sidebar' => $sidebar,
        'records' => $records
    ]);
});

Route::get('/products/{id}', function ($id) {
    $record = Product::query()->find($id);
    return view('pages.card', ['record' => $record]);
})->name('products');

Route::get('pages/{slug}', function ($slug) {
    $record = Page::query()->where('slug', '=', $slug)->firstOrFail();
    return view('default', ['content' => $record['content']]);
});
