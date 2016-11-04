<?php

namespace BrianFaust\Tests\Languages;

use GrahamCampbell\TestBenchCore\ServiceProviderTrait;
use BrianFaust\Languages\Console\SeedLanguages;

class ServiceProviderTest extends AbstractTestCase
{
    use ServiceProviderTrait;

    public function testSeedLanguagesCommandInjectable()
    {
        $this->assertIsInjectable(SeedLanguages::class);
    }
}
