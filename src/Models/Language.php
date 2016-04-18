<?php

/*
 * This file is part of Laravel Languages.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DraperStudio\Languages\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Language.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
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
