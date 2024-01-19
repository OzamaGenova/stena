<?php

namespace App\Providers;

use App\Models\Event;
use App\Models\Product;
use App\Models\Project;
use App\Models\Seo;
use App\Models\Solution;
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

        View::composer('components.home.products', function (\Illuminate\View\View $view) {
            $records = Product::query()
                ->orderBy('created_at')
                ->limit(4)
                ->get();
            $view->with('products', $records);
        });

        View::composer('components.home.solutions', function (\Illuminate\View\View $view) {
            $records = Solution::query()
                ->orderBy('created_at')
                ->limit(4)
                ->get();
            $view->with('solutions', $records);
        });

        View::composer('components.home.projects', function (\Illuminate\View\View $view) {
            $records = Project::query()
                ->orderBy('created_at')
                ->limit(6)
                ->get();
            $view->with('projects', $records);
        });

        View::composer('components.home.events', function (\Illuminate\View\View $view) {
            $records = Event::query()
                ->orderBy('created_at')
                ->limit(4)
                ->get();
            $view->with('events', $records);
        });
    }
}
