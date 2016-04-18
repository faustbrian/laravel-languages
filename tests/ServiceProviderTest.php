<?php

/*
 * This file is part of Laravel Languages.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DraperStudio\Tests\Languages;

use GrahamCampbell\TestBenchCore\ServiceProviderTrait;
use DraperStudio\Languages\Console\SeedLanguages;

/**
 * This is the service provider test class.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
class ServiceProviderTest extends AbstractTestCase
{
    use ServiceProviderTrait;

    public function testSeedLanguagesCommandInjectable()
    {
        $this->assertIsInjectable(SeedLanguages::class);
    }
}
