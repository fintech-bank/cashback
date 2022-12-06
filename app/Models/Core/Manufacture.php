<?php

namespace App\Models\Core;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Core\Manufacture
 *
 * @property int $id
 * @property string $name
 * @property string|null $description
 * @property int $internet
 * @property int $magasin
 * @property int $cadeau
 * @property string|null $internet_description
 * @property string|null $magasin_description
 * @property string|null $cadeau_description
 * @property int $internet_percent
 * @property int $magasin_percent
 * @property int $cadeau_percent
 * @property string $site_link
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $subcategory_id
 * @property-read \App\Models\Core\Subcategory $subcategory
 * @method static \Illuminate\Database\Eloquent\Builder|Manufacture newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Manufacture newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Manufacture query()
 * @method static \Illuminate\Database\Eloquent\Builder|Manufacture whereCadeau($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Manufacture whereCadeauDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Manufacture whereCadeauPercent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Manufacture whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Manufacture whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Manufacture whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Manufacture whereInternet($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Manufacture whereInternetDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Manufacture whereInternetPercent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Manufacture whereMagasin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Manufacture whereMagasinDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Manufacture whereMagasinPercent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Manufacture whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Manufacture whereSiteLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Manufacture whereSubcategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Manufacture whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Manufacture extends Model
{
    protected $guarded = [];

    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class, 'subcategory_id');
    }
}
