<?php

namespace App\Providers;

use Encore\Admin\Config\Config;
use App\Models\Company;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // if (config('app.env') !== 'testing') {
        //     //Config::load();
        // }

        // 使用基于闭包的合成器...
        View::composer(['layouts.app', 'case.index', 'welcome', 'careers.index'], function ($view) {
            $view->with('company', Company::find(1));
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
