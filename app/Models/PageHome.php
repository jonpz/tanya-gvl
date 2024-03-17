<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasBlocks;
use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Behaviors\HasRevisions;
use A17\Twill\Models\Behaviors\HasTranslation;
use App\Models\Base\Model;

class PageHome extends Model
{
    use HasBlocks, HasMedias, HasRevisions, HasTranslation;

    protected $fillable = [
        'title',
        'meta_title',
        'meta_description',
    ];

    public $translatedAttributes = [
        'title',
        'meta_title',
        'meta_description',
    ];

    public array $publicAttributes = [
        'title',
        'meta_title',
        'meta_description',
        'blocks',
    ];
}
