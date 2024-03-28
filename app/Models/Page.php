<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasBlocks;
use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Behaviors\HasNesting;
use A17\Twill\Models\Behaviors\HasPosition;
use A17\Twill\Models\Behaviors\HasRevisions;
use A17\Twill\Models\Behaviors\HasSlug;
use A17\Twill\Models\Behaviors\HasTranslation;
use A17\Twill\Models\Behaviors\Sortable;
use A17\Twill\Models\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Page extends Model implements Sortable
{
    use HasBlocks, HasFactory, HasMedias, HasNesting, HasPosition, HasRevisions, HasSlug, HasTranslation;

    protected $fillable = [
        'published',
        'title',
        'meta_title',
        'meta_description',
        'position',
        'page_theme',
    ];

    public $translatedAttributes = [
        'title',
        'meta_title',
        'meta_description',
    ];

    public $slugAttributes = [
        'title',
    ];
}
