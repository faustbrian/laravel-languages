<?php

/*
 * This file is part of Laravel Languages.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

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
