<?php

namespace App\Models\Product;

use App\Models\Attribute\Attribute;
use App\Models\Category\Category;
use App\Models\Translation\TranslationContract;
use App\Models\Unit\Unit;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

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

    public $translationModel = ProductTranslation::class;
    protected $fillable = ['category_id', 'slug', 'unit_id'];

    public function category() { return $this->belongsTo(Category::class); }

    public function unit() { return $this->belongsTo(Unit::class); }

    public function attributes() {
        return $this->belongsToMany(Attribute::class, 'product_attribute_values')
            ->withPivot('value_id');
    }
}
