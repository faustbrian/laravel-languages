<?php



declare(strict_types=1);

namespace BrianFaust\Tests\Languages;

use BrianFaust\Languages\Console\SeedLanguages;
use GrahamCampbell\TestBenchCore\ServiceProviderTrait;

class ServiceProviderTest extends AbstractTestCase
{
    use ServiceProviderTrait;

    public function testSeedLanguagesCommandInjectable()
    {
        $this->assertIsInjectable(SeedLanguages::class);
    }
}
