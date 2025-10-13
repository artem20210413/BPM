<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Unit
 * @package App\Models
 * @property int id
 * @property string slug
 * @property int priority
 * @property Carbon created_at
 * @property Carbon updated_at
 */
class Unit extends TranslationContract
{

    use HasFactory, SoftDeletes;

    protected $fillable = ['slug', 'priority'];

    protected $casts = ['priority' => 'integer'];


    public function products()
    {
        return $this->hasMany(Product::class);
    }

    /**
     * Сортировка по приоритету по умолчанию.
     */
    protected static function booted(): void
    {
        static::addGlobalScope('ordered', function ($query) {
            $query->orderBy('priority');
        });
    }
}
