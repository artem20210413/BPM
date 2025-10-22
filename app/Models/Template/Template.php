<?php

namespace App\Models\Template;

use App\Models\Attribute\Attribute;
use App\Models\Translation\TranslationContract;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\Template
 *
 * @property int $id
 * @property string $slug
 * @property string|null $data
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 */
class Template extends TranslationContract
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['slug', 'data'];
    public $translationModel = TemplateTranslation::class;

    public function attribute()
    {
        return $this->belongsTo(Attribute::class);
    }
}
