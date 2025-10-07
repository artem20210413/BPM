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
class UnitTranslation extends Model
{
    public $timestamps = false;  // чаще всего переводы не имеют временных меток
    public $translatedAttributes = ['title', 'content'];
    protected $fillable = ['title', 'content'];
}
