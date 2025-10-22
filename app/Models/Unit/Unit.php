<?php

namespace App\Models\Unit;

use App\Models\Product\Product;
use App\Models\Translation\TranslationContract;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
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

    /** Необязательно, но удобно явно указать модель перевода */
    public $translationModel = UnitTranslation::class;
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
