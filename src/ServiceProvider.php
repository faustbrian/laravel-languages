<?php

namespace BrianFaust\Languages;

use BrianFaust\Languages\Console\SeedLanguages;

class ServiceProvider extends \BrianFaust\ServiceProvider\ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        parent::boot();

        $this->publishMigrations();
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        parent::register();

        $this->commands(SeedLanguages::class);
    }

    /**
     * Get the default package name.
     *
     * @return string
     */
    public function getPackageName()
    {
        return 'languages';
    }
}
