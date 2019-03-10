<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Validator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        Validator::extend('caracter_mayuscula', function($attribute, $value, $parameters){
            return preg_match('@[A-Z]@', $value);
        });

        Validator::extend('caracter_minuscula', function($attribute, $value, $parameters){
            return preg_match('@[a-z]@', $value);
        });

        Validator::extend('caracter_numero', function($attribute, $value, $parameters){
            return preg_match('@[0-9]@', $value);
        });

        Validator::extend('caracter_alfanumerico', function($attribute, $value, $parameters){
            return preg_match('@[!\@#.$%\?&\*\(\)_\-\+=]@', $value);
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
