<?php

namespace App\Applications\Core\Providers;

use App\Support\Laravel\Units\ServiceProvider;

class UnitServiceProvider extends ServiceProvider
{
    protected $alias = 'core';

    protected $hasViews = true;

    protected $hasTranslations = true;

    protected $providers = [
        //BroadcastServiceProvider::class,
        AppServiceProvider::class,
    ];
}
