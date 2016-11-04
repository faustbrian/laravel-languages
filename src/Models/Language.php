<?php

namespace BrianFaust\Languages\Models;

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
