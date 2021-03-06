<?php

namespace App\Domains\Users\Providers;

use App\Domains\Users\Database\Seeders\UserSeeder;
use App\Support\Laravel\Domain\ServiceProvider;
use App\Domains\Users\Database\Factories\UserFactory;
use App\Domains\Users\Database\Migrations\CreateUsersTable;
use App\Domains\Users\Database\Migrations\CreatePasswordResetsTable;
use App\Domains\Users\Contracts;
use App\Domains\Users\Repositories;

/**
 * Class DomainServiceProvider.
 */
class DomainServiceProvider extends ServiceProvider
{
    /**
     * @var string
     */
    protected $alias = 'users';

    /**
     * @var array
     */
    protected $bindings = [
        Contracts\UserRepository::class => Repositories\UserRepository::class,
    ];

    protected $migrations = [
        CreateUsersTable::class,
        CreatePasswordResetsTable::class,
    ];

    protected $seeders = [
        UserSeeder::class,
    ];

    protected $factories = [
        UserFactory::class,
    ];
}
