<?php

namespace App\Providers;

use App\Models\Seo;
use Illuminate\Support\Facades\URL;
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
        $url = URL::current();
        $path = parse_url($url, PHP_URL_PATH) ?? '/';
        $seo = Seo::query()->where('url', '=', $path)->first();
        View::share('seo', $seo);
    }
}
