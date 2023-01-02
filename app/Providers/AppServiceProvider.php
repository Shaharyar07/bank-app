<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Termwind\Components\Dd;

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
            if (!in_array($view->getName(), ['index', 'signup'])) {
                $account = \App\Models\Account::where('Account Holder', auth()->user()->name)->get();

                $view->with('account', $account[0]);
            }
        });
        // Using view composer to set title variables globally
        view()->composer('*', function ($view) {
            $title = $view->getName();
            $view->with('title', $title);
        });
    }
}
