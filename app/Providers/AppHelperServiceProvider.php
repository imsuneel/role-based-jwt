<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppHelperServiceProvider extends ServiceProvider
{
    public function register()
    {
        \App::bind('AppHelper', function(){
            return new \App\Helpers\AppHelper;
        });
    }

    
}
