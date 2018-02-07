<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Session;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->defineConstants();
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

    protected function defineConstants()
    {
        $constants = $this->app['config']->get('constants');

        if (!is_null($constants)) {
            foreach ($constants as $key => $value) {
                if (!defined($key)) {
                    define($key, $value);
                }
            }
        }

        if (!Session::has('locale'))
        {
            Session::put('locale', 'en');
        }
        app()->setLocale(Session::get('locale'));
    }
}
