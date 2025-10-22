<?php

namespace App\Models\Category;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\CategoryAttribute
 *
 * @property int $id
 * @property int $category_id
 * @property int $attribute_id
 */
class CategoryAttribute extends Model
{
    public $timestamps = false;

    protected $fillable = ['category_id', 'attribute_id'];
}
