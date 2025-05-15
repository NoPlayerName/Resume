<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Doctrine\DBAL\Types\Type;
use Doctrine\DBAL\Platforms\AbstractPlatform;

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
        $this->loadMigrationsFrom(__DIR__.'/../../vendor/spatie/laravel-permission/database/migrations');

        $connection = Schema::getConnection();
        $platform = $connection->getDoctrineSchemaManager()->getDatabasePlatform();

        $platform->registerDoctrineTypeMapping('jsonb', 'json');

    }
}
