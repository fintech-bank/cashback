<?php

namespace App\Models\Core;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Core\GiftCardValue
 *
 * @property int $id
 * @property float $price
 * @property int $gift_card_id
 * @property-read \App\Models\Core\GiftCard $gift
 * @method static \Illuminate\Database\Eloquent\Builder|GiftCardValue newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GiftCardValue newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GiftCardValue query()
 * @method static \Illuminate\Database\Eloquent\Builder|GiftCardValue whereGiftCardId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GiftCardValue whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GiftCardValue wherePrice($value)
 * @mixin \Eloquent
 */
class GiftCardValue extends Model
{
    protected $guarded = [];
    public $timestamps = false;

    public function gift()
    {
        return $this->belongsTo(GiftCard::class, 'gift_card_id');
    }
}
