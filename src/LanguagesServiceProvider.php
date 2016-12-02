<?php

/*
 * This file is part of Laravel Languages.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Languages;

use BrianFaust\Languages\Console\SeedLanguages;
use BrianFaust\ServiceProvider\ServiceProvider;

class LanguagesServiceProvider extends ServiceProvider
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
