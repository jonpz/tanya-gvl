<?php

namespace App\View\Components\Twill\Blocks\Common;

use A17\Twill\Services\Forms\Fields\Medias;
use A17\Twill\Services\Forms\Form;
use Illuminate\Contracts\View\View;

class Image extends Base
{
    public function render(): View
    {
        return view('site/blocks/image');
    }

    public function getForm(): Form
    {
        return Form::make([
            Medias::make()
                ->name('common_image')
                ->label(__('Image'))
                ->max(1),
        ]);
    }

    public static function getCrops(): array
    {
        return [
            'common_image' => [
                'desktop' => [
                    [
                        'name' => 'desktop',
                        'ratio' => 16 / 9,
                        'minValues' => [
                            'width' => 1200,
                            'height' => 675,
                        ],
                    ],
                ],
                'tablet' => [
                    [
                        'name' => 'tablet',
                        'ratio' => 4 / 3,
                    ],
                ],
                'mobile' => [
                    [
                        'name' => 'mobile',
                        'ratio' => 1,
                    ],
                ],
            ],
        ];
    }

    public static function getBlockTitle(): string
    {
        return __('Image');
    }

    public static function getBlockIcon(): string
    {
        return 'image';
    }
}
