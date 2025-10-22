<?php

namespace App\Models\Category;

use App\Models\Attribute\Attribute;
use App\Models\Product\Product;
use App\Models\Translation\TranslationContract;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\Category
 *
 * @property int $id
 * @property int|null $parent_id
 * @property string $slug
 * @property int $priority
 * @property bool $active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 *
 * @property-read Category|null $parent
 * @property-read \Illuminate\Database\Eloquent\Collection|Category[] $children
 */
class Category extends TranslationContract
{
    use HasFactory, SoftDeletes;

    public $translationModel = CategoryTranslation::class;

    protected $fillable = [
        'parent_id',
        'slug',
        'priority',
        'active',
    ];

    /**
     * Родительская категория
     */
    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }

    /**
     * Дочерние категории
     */
    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function attributes()
    {
        return $this->belongsToMany(Attribute::class, 'category_attributes');
    }
}
