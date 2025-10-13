<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Translation extends Model
{
    public $timestamps = false;  // чаще всего переводы не имеют временных меток
    public $translatedAttributes = ['title', 'content'];
    protected $fillable = ['title', 'content'];
}
