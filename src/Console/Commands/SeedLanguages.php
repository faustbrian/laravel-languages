<?php

declare(strict_types=1);

/*
 * This file is part of Laravel Languages.
 *
 * (c) Brian Faust <hello@basecode.sh>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Artisanry\Languages\Console\Commands;

use Artisanry\Languages\Language;
use Illuminate\Console\Command;

class SeedLanguages extends Command
{
    /**
     * @var string
     */
    protected $signature = 'languages:seed';

    /**
     * @var string
     */
    protected $description = 'Command description.';

    public function fire()
    {
        $data = base_path('vendor/artisanry/languages/resources/languages.json');
        $data = json_decode(file_get_contents($data), true);

        foreach ($data as $language) {
            Language::create([
                'code'        => $language['code'],
                'name'        => $language['name'],
                'native_name' => $language['nativeName'],
            ]);
        }

        $this->getOutput()->writeln('<info>Seeded:</info> Languages');
    }
}
