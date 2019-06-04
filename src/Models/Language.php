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

namespace Artisanry\Languages;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    /**
     * @var string
     */
    protected $table = 'languages';

    /**
     * @var array
     */
    protected $guarded = ['id', 'created_at', 'updated_at'];
}
