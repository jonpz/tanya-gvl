<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasBlocks;
use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Behaviors\HasRevisions;
use A17\Twill\Models\Behaviors\HasSlug;
use A17\Twill\Models\Behaviors\HasTranslation;
use A17\Twill\Models\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Home extends Model
{
    use HasBlocks, HasFactory, HasMedias, HasRevisions, HasSlug, HasTranslation;

    protected $fillable = [
        'published',
        'title',
    ];

    public $translatedAttributes = [
        'title',
    ];

    public $slugAttributes = [
        'title',
    ];
}
