<?php

namespace App\Providers;


use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

use App\View\Components\Header;
use App\View\Components\Telephone;
use App\View\Components\Hero;
use App\View\Components\Box;
use App\View\Components\Footer;
use App\View\Components\Brand;
use App\View\Components\Button;

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
        Blade::component('header-component', Header::class);
        Blade::component('telephone-component', Telephone::class);
        Blade::component('hero-component', Hero::class);
        Blade::component('box-component', Box::class);
        Blade::component('footer-component', Footer::class);
        Blade::component('brand-component', Brand::class);
        Blade::component('button-component', Button::class);
    }
}
