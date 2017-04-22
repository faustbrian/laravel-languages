<?php



declare(strict_types=1);

namespace BrianFaust\Tests\Languages;

use GrahamCampbell\TestBench\AbstractPackageTestCase;

abstract class AbstractTestCase extends AbstractPackageTestCase
{
    /**
     * Setup the application environment.
     *
     * @param \Illuminate\Contracts\Foundation\Application $app
     */
    protected function getEnvironmentSetUp($app)
    {
        parent::getEnvironmentSetUp($app);

        $this->setUpDatabase($this->app);
    }

    /**
     * Get the service provider class.
     *
     * @param \Illuminate\Contracts\Foundation\Application $app
     *
     * @return string
     */
    protected function getServiceProviderClass($app): string
    {
        return \BrianFaust\Languages\ServiceProvider::class;
    }

    /**
     * Set up the database.
     *
     * @param \Illuminate\Foundation\Application $app
     */
    protected function setUpDatabase($app)
    {
        include_once __DIR__.'/../resources/migrations/create_languages_table.php';

        (new \CreateLanguagesTable())->up();
    }
}
