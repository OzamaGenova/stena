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

use App\Models\Event;
use App\Models\Page;
use App\Models\Product;
use App\Models\ProductCatalog;
use App\Models\Project;
use App\Models\ProjectCatalog;
use App\Models\Solution;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('pages/{slug}', function ($slug) {
    $record = Page::query()->where('slug', '=', $slug)->firstOrFail();
    return view('default', ['banner1' => 'images/company.png', 'banner2' => 'images/contacs.png','content' => $record['content']]);
});

Route::get('/products', function () {
    $product_catalogs = ProductCatalog::query()
        ->where('parent_id', '=', 0)
        ->orderBy('order')
        ->with(['children'])
        ->get();

    $query = Product::query()->orderBy('created_at');
    $product_catalog_id = request()->query('catalog_id');
    if ($product_catalog_id) {
        $product_catalog = ProductCatalog::with('children')->find($product_catalog_id);
        $product_catalog_ids = [$product_catalog->id];
        foreach ($product_catalog->children as $child) array_push($product_catalog_ids, $child->id);
        $query->whereIn('catalog_id', $product_catalog_ids);
    }
    $records = $query->get();

    return view('pages.products', ['catalogs' => $product_catalogs, 'records' => $records]);
})->name('products.index');

Route::get('/products/{id}', function ($id) {
    return view('pages.product', ['record' => Product::query()->find($id)]);
})->name('products.show');

Route::get('/solutions', function () {
    $records = Solution::query()
        ->orderBy('created_at')
        ->get();

    return view('pages.solutions', ['records' => $records]);
})->name('solutions.index');

Route::get('/solutions/{id}', function ($id) {
    return view('pages.solution', ['record' => Solution::query()->find($id)]);
})->name('solutions.show');

Route::get('/partners', function () {
    return view('pages.partners');
})->name('partners.index');

Route::get('/projects', function () {
    $project_catalogs = ProjectCatalog::query()
        ->where('parent_id', '=', 0)
        ->orderBy('order')
        ->get();

    $query = Project::query()->orderBy('created_at');
    $project_catalog_id = request()->query('catalog_id');
    if ($project_catalog_id) {
        $project_catalog = ProductCatalog::with('children')->find($project_catalog_id);
        $query->whereIn('catalog_id', [$project_catalog->id]);
    }
    $records = $query->get();

    return view('pages.projects', ['catalogs' => $project_catalogs, 'records' => $records]);
})->name('projects.index');

Route::get('/projects/{id}', function ($id) {
    return view('pages.project', ['record' => Project::query()->find($id)]);
})->name('projects.show');

Route::get('/events', function () {
    $records = Event::query()
        ->orderBy('created_at')
        ->get();

    return view('pages.events', ['records' => $records]);
})->name('events.index');

Route::get('/events/{id}', function ($id) {
    return view('pages.event', ['record' => Event::query()->find($id)]);
})->name('events.show');

Route::get('/stm', function () {
    return view('pages.stm');
})->name('stm');
