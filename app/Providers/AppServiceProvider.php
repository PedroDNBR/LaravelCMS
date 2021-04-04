<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use App\Models\Page;


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
        //Menu
        Paginator::useBootstrap();

        $frontMenu = [
            '/' => 'Home'
        ];

        $pages = Page::all();

        foreach($pages as $page){
            $frontMenu[$page['slug']] = $page['title'];
        }

        View::share("front_menu", $frontMenu);

    }
}
