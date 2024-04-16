<div @class([
    'container mx-auto pzpanel',
    'text-twhite' =>
        ($renderData->model?->page_theme === 'dark' &&
            !in_array($block->input('background_color'), [
                'twhite',
                'tbeige',
            ])) ||
        in_array($block->input('background_color'), [
            'tblack',
            'tgray',
            'tpurple',
        ]),
    'text-tgray' =>
        ($inEditor &&
            !in_array($block->input('background_color'), [
                'tblack',
                'tgray',
                'tpurple',
            ])) ||
        $renderData->model?->page_theme === 'light' ||
        in_array($block->input('background_color'), ['twhite', 'tbeige']),
    'p-2 md:p-4' => $block->input('padding') === 'thin',
    'p-4 md:p-8' => $block->input('padding') === 'medium',
    'p-8 md:p-16' => $block->input('padding') === 'wide',
    'bg-' . $block->input('background_color') =>
        $block->input('background_color') !== 'none',
])>
    <div @class([
        'mx-auto',
        'max-w-2xl' => $inEditor || $renderData->model?->content_width === 'thin',
        'max-w-4xl' => $renderData->model?->content_width === 'medium',
        'max-w-6xl' => $renderData->model?->content_width === 'wide',
    ])>
        {!! $renderData->renderChildren('panel_content') !!}
    </div>
</div>
