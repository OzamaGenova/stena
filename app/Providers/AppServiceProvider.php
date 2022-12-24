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
        $records = Catalog::tree()->getItems();
        $catalogs = [];
        foreach ($records as $record) {
            $key = $record['slug'];
            $catalogs[$key] = $record;
        }
        View::share('catalogs', $catalogs);
    }
}
