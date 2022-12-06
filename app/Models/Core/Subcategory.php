<?php

namespace App\Models\Core;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Core\Subcategory
 *
 * @property int $id
 * @property string $name
 * @property int $category_id
 * @property-read \App\Models\Core\Category $category
 * @method static \Illuminate\Database\Eloquent\Builder|Subcategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Subcategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Subcategory query()
 * @method static \Illuminate\Database\Eloquent\Builder|Subcategory whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subcategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subcategory whereName($value)
 * @mixin \Eloquent
 */
class Subcategory extends Model
{
    protected $guarded = [];
    public $timestamps = false;

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
