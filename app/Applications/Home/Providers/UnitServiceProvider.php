<?php

namespace App\Applications\Home\Providers;

use App\Support\Laravel\Units\ServiceProvider;

class UnitServiceProvider extends ServiceProvider
{
    protected $alias = 'home';

    protected $hasViews = true;

    protected $hasTranslations = true;

    protected $providers = [
        RouteServiceProvider::class,
    ];
}
