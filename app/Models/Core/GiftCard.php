<?php

namespace App\Models\Core;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Core\GiftCard
 *
 * @property int $id
 * @property string $offert
 * @property int $manufacture_id
 * @property-read \App\Models\Core\Manufacture $manufacture
 * @method static \Illuminate\Database\Eloquent\Builder|GiftCard newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GiftCard newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GiftCard query()
 * @method static \Illuminate\Database\Eloquent\Builder|GiftCard whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GiftCard whereManufactureId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GiftCard whereOffert($value)
 * @mixin \Eloquent
 */
class GiftCard extends Model
{
    protected $guarded = [];
    public $timestamps = false;

    public function manufacture()
    {
        return $this->belongsTo(Manufacture::class, 'manufacture_id');
    }
}
