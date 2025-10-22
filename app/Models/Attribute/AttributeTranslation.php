<?php

namespace App\Models\Attribute;

use App\Models\Translation\Translation;
use Carbon\Carbon;

/**
 * Class Unit
 * @package App\Models
 * @property int id
 * @property string slug
 * @property int priority
 * @property Carbon created_at
 * @property Carbon updated_at
 */
class AttributeTranslation extends Translation
{
}
