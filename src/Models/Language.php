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

    /**
     * @var array
     */
    protected $casts = [
        'name' => 'array',
        'tld' => 'array',
        'currency' => 'array',
        'callingCode' => 'array',
        'altSpellings' => 'array',
        'languages' => 'array',
        'translations' => 'array',
        'latlng' => 'array',
        'landlocked' => 'boolean',
        'borders' => 'array',
        'area' => 'integer',
    ];

    /**
     * @param Builder $query
     * @param $value
     *
     * @return $this
     */
    public function scopeName(Builder $query, $value)
    {
        return $query->where('name', '=', $value);
    }

    /**
     * @param Builder $query
     * @param $value
     *
     * @return $this
     */
    public function scopeTld(Builder $query, $value)
    {
        return $query->where('tld', '=', $value);
    }

    /**
     * @param Builder $query
     * @param $value
     *
     * @return $this
     */
    public function scopeCca2(Builder $query, $value)
    {
        return $query->where('cca2', '=', $value);
    }

    /**
     * @param Builder $query
     * @param $value
     *
     * @return $this
     */
    public function scopeCcn3(Builder $query, $value)
    {
        return $query->where('ccn3', '=', $value);
    }

    /**
     * @param Builder $query
     * @param $value
     *
     * @return $this
     */
    public function scopeCca3(Builder $query, $value)
    {
        return $query->where('cca3', '=', $value);
    }

    /**
     * @param Builder $query
     * @param $value
     *
     * @return $this
     */
    public function scopeCioc(Builder $query, $value)
    {
        return $query->where('cioc', '=', $value);
    }

    /**
     * @param Builder $query
     * @param $value
     *
     * @return $this
     */
    public function scopeCurrency(Builder $query, $value)
    {
        return $query->where('currency', '=', $value);
    }

    /**
     * @param Builder $query
     * @param $value
     *
     * @return $this
     */
    public function scopeCallingCode(Builder $query, $value)
    {
        return $query->where('callingCode', '=', $value);
    }

    /**
     * @param Builder $query
     * @param $value
     *
     * @return $this
     */
    public function scopeCapital(Builder $query, $value)
    {
        return $query->where('capital', '=', $value);
    }

    /**
     * @param Builder $query
     * @param $value
     *
     * @return $this
     */
    public function scopeAltSpellings(Builder $query, $value)
    {
        return $query->where('altSpellings', '=', $value);
    }

    /**
     * @param Builder $query
     * @param $value
     *
     * @return $this
     */
    public function scopeRegion(Builder $query, $value)
    {
        return $query->where('region', '=', $value);
    }

    /**
     * @param Builder $query
     * @param $value
     *
     * @return $this
     */
    public function scopeSubregion(Builder $query, $value)
    {
        return $query->where('subregion', '=', $value);
    }

    /**
     * @param Builder $query
     * @param $value
     *
     * @return $this
     */
    public function scopeLanguages(Builder $query, $value)
    {
        return $query->where('languages', '=', $value);
    }

    /**
     * @param Builder $query
     * @param $value
     *
     * @return $this
     */
    public function scopeTranslations(Builder $query, $value)
    {
        return $query->where('translations', '=', $value);
    }

    /**
     * @param Builder $query
     * @param $value
     *
     * @return $this
     */
    public function scopeLatlng(Builder $query, $value)
    {
        return $query->where('latlng', '=', $value);
    }

    /**
     * @param Builder $query
     * @param $value
     *
     * @return $this
     */
    public function scopeDemonym(Builder $query, $value)
    {
        return $query->where('demonym', '=', $value);
    }

    /**
     * @param Builder $query
     * @param $value
     *
     * @return $this
     */
    public function scopeLandlocked(Builder $query, $value)
    {
        return $query->where('landlocked', '=', $value);
    }

    /**
     * @param Builder $query
     * @param $value
     *
     * @return $this
     */
    public function scopeBorders(Builder $query, $value)
    {
        return $query->where('borders', '=', $value);
    }

    /**
     * @param Builder $query
     * @param $value
     *
     * @return $this
     */
    public function scopeArea(Builder $query, $value)
    {
        return $query->where('area', '=', $value);
    }

    /**
     * @param $keyColumn
     * @param $valueColumn
     *
     * @return mixed
     */
    public static function listBy($keyColumn, $valueColumn)
    {
        $valueColumnKey = explode('.', $valueColumn)[0];

        return static::get([$keyColumn, $valueColumnKey])->keyBy($keyColumn)->map(function ($item, $keyColumn) use ($valueColumn) {
            return array_get($item->toArray(), $valueColumn);
        });
    }
}
