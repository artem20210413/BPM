<?php

namespace App\Models\Attribute;

use App\Models\Category\Category;
use App\Models\Product\ProductAttributeValue;
use App\Models\Template\Template;
use App\Models\Translation\TranslationContract;
use App\Models\Unit\Unit;
use App\Models\ValueTranslation;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\Attribute
 *
 * @property int $id
 * @property string $slug
 * @property string type
 * @property int unit_id
 * @property int $priority
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|ValueTranslation[] $translations
 * @property-read \Illuminate\Database\Eloquent\Collection|Category[] $categories
 */
class Attribute extends TranslationContract
{
    use HasFactory, SoftDeletes;
    public $translationModel = AttributeTranslation::class;
    private array $types = ['string', 'int', 'float', 'bool', 'datetime', 'list'];
    protected $fillable = ['slug', 'priority'];

    public function categories() {
        return $this->belongsToMany(Category::class, 'category_attributes');
    }
    public function unit()
    {
        return $this->belongsTo(Unit::class);
    }

    public function templates()
    {
        return $this->hasMany(Template::class);
    }

    public function values()
    {
        return $this->hasMany(ProductAttributeValue::class);
    }

    public function getTypes(): array
    {
        return $this->types;
    }
}
