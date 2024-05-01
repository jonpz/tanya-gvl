<?php

return [
    'block_editor' => [
        'use_twill_blocks' => [],
        'crops' => [
            'image' => [
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
            'free_image' => [
                'display' => [
                    [
                        'name' => 'display',
                    ],
                ],
                'full' => [
                    [
                        'name' => 'full',
                    ],
                ],
            ],
        ],
    ],
    'preview' => [
        'breakpoints' => [
            [
                'size' => 1280,
                'name' => 'preview-desktop',
            ],
            [
                'size' => 1024,
                'name' => 'preview-tablet-h',
            ],
            [
                'size' => 768,
                'name' => 'preview-tablet-v',
            ],
            [
                'size' => 450,
                'name' => 'preview-mobile',
            ],
        ],
    ],
];
