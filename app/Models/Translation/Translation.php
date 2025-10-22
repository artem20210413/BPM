<?php

namespace App\Models\Translation;

use Illuminate\Database\Eloquent\Model;

class Translation extends Model
{
    public $timestamps = false;  // чаще всего переводы не имеют временных меток
    public $translatedAttributes = ['title', 'content'];
    protected $fillable = ['title', 'content'];
}
