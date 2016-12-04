<?php

/*
 * This file is part of Laravel Languages.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

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
use BrianFaust\ServiceProvider\AbstractServiceProvider;

class LanguagesServiceProvider extends AbstractServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot(): void
    {
        parent::boot();

        $this->publishMigrations();
    }

    /**
     * Register the application services.
     */
    public function register(): void
    {
        parent::register();

        $this->commands(SeedLanguages::class);
    }

    /**
     * Get the default package name.
     *
     * @return string
     */
    public function getPackageName(): string
    {
        return 'languages';
    }
}
