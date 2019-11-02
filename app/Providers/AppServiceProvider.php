<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Auth;

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
        \Debugbar::disable();
        view()->composer('*', function($views){
            if(Auth::user())
            {
                $views->with('active_project', Auth::user()->getProject());
            }
        });
        view()->composer('layouts.navbars.navs.auth', function($view){
            $view->with('company_projects', Auth::user()->userCompany()->projects);
        });
    }
}
