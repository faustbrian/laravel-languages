<?php

/*
 * This file is part of Laravel Languages.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DraperStudio\Languages\Console;

use DB;
use DraperStudio\Languages\Models\Language;
use Illuminate\Console\Command;

/**
 * Class SeedLanguages.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
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
        DB::table('languages')->delete();

        $data = base_path('vendor/draperstudio/laravel-languages/resources/languages.json');
        $data = json_decode(file_get_contents($data), true);

        foreach ($data as $language) {
            Language::create([
                'code' => $language['code'],
                'name' => $language['name'],
                'native_name' => $language['nativeName'],
            ]);
        }

        $this->getOutput()->writeln("<info>Seeded:</info> Languages");
    }
}
