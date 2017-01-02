<?php

namespace App\Support\Foundation\Application;

use Illuminate\Foundation\Application as LaravelApplication;

/**
 * Class Application
 * @package App\Applications\Core\Foundation\Application
 * Core do framework Laravel em poder da aplicacao
 */
class Application extends LaravelApplication
{
    /**
     * Application constructor.
     * @param null $basePath
     */
    public function __construct($basePath = null)
    {
        parent::__construct($basePath);
    }

}
