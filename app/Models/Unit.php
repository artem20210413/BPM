<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

/**
 * Class Unit
 * @package App\Models
 * @property int id
 * @property string slug
 * @property int priority
 * @property Carbon created_at
 * @property Carbon updated_at
 */
class Unit extends Model implements TranslatableContract
{
    use HasFactory, Translatable;

    public array $translatedAttributes = ['title', 'content'];

    /** Необязательно, но удобно явно указать модель перевода */
    public $translationModel = UnitTranslation::class;

    protected $fillable = ['slug', 'priority'];

    protected $casts = ['priority' => 'integer'];
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
