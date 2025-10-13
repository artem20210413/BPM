<?php

namespace App\Models;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class TranslationContract extends Model implements TranslatableContract
{
    use Translatable;


    public array $translatedAttributes = ['title', 'content'];

    /** Необязательно, но удобно явно указать модель перевода */
    public $translationModel = UnitTranslation::class;
}
