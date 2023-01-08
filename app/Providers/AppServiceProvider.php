<?php

namespace App\Providers;

use App\Models\Catalog;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $records = Catalog::with(['parent', 'children'])->get();
        $records = $records->keyBy('slug')->toArray();
        View::share('categories', $records);
    }
}
