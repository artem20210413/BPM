<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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

    protected $fillable = ['attribute_id', 'slug', 'data'];
    public function attribute()
    {
        return $this->belongsTo(Attribute::class);
    }
}
