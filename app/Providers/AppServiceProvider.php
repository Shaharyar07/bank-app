<?php

namespace App\Providers;

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
        //

        // Using view composer to set following variables globally
        view()->composer('*', function ($view) {
            //every view except index
            if (!in_array($view->getName(), ['index', 'signup', 'layout'])) {
                $account = \App\Models\Account::where('Account Holder', auth()->user()->name)->first();
                $view->with('account', $account);
            }
        });
        // Using view composer to set title variables globally
        view()->composer('*', function ($view) {
            $title = $view->getName();
            $view->with('title', $title);
        });
    }
}
