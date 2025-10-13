<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\ProductAttributeValue
 *
 * @property int $id
 * @property int $product_id
 * @property int $attribute_id
 * @property int|null $value_id
 */
class ProductAttributeValue extends Translation
{
    public $timestamps = false;

    protected $fillable = ['product_id', 'attribute_id', 'value_id'];
}
