<?php

namespace App\View\Components\Twill\Blocks;

use A17\Twill\Services\Forms\Fields\Medias;
use A17\Twill\Services\Forms\Form;
use A17\Twill\View\Components\Blocks\TwillBlockComponent;
use Illuminate\Contracts\View\View;

class Image extends TwillBlockComponent
{
    public static function getBlockIcon(): string
    {
        return 'image';
    }

    public function render(): View
    {
        return view('components.twill.blocks.image');
    }

    public function getForm(): Form
    {
        return Form::make([
            Medias::make()->name('image'),
        ]);
    }
}
