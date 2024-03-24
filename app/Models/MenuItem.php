<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasNesting;
use A17\Twill\Models\Behaviors\HasPosition;
use A17\Twill\Models\Behaviors\HasRelated;
use A17\Twill\Models\Behaviors\HasTranslation;
use A17\Twill\Models\Behaviors\Sortable;
use A17\Twill\Models\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MenuItem extends Model implements Sortable
{
    use HasFactory, HasNesting, HasPosition, HasRelated, HasTranslation;

    protected $fillable = [
        'published',
        'title',
        'position',
    ];

    public $translatedAttributes = [
        'title',
    ];
}
