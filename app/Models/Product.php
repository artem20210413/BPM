<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * App\Models\Product
 *
 * @property int $id
 * @property int|null $category_id
 * @property string $slug
 * @property int|null $unit_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 *
 * @property-read Category|null $category
 * @property-read Unit|null $unit
 * @property-read \Illuminate\Database\Eloquent\Collection|Attribute[] $attributes
 */
class Product extends TranslationContract
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['category_id', 'slug', 'unit_id'];

    public function category() { return $this->belongsTo(Category::class); }

    public function unit() { return $this->belongsTo(Unit::class); }

    public function attributes() {
        return $this->belongsToMany(Attribute::class, 'product_attribute_values')
            ->withPivot('value_id');
    }
}
