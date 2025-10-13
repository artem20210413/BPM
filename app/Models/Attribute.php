<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * App\Models\Attribute
 *
 * @property int $id
 * @property string $slug
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

    protected $fillable = ['slug', 'priority'];

//    public function translations() { return $this->hasMany(ValueTranslation::class); }

    public function categories() {
        return $this->belongsToMany(Category::class, 'category_attributes');
    }
}
