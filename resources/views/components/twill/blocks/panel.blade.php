<div @class([
    'container mx-auto pzpanel',
    'text-twhite' =>
        ($renderData->model?->page_theme === 'dark' &&
            !in_array($input('background_color'), ['twhite', 'tbeige'])) ||
        in_array($input('background_color'), ['tblack', 'tgray', 'tpurple']),
    'text-tgray' =>
        ($inEditor &&
            !in_array($input('background_color'), [
                'tblack',
                'tgray',
                'tpurple',
            ])) ||
        $renderData->model?->page_theme === 'light' ||
        in_array($input('background_color'), ['twhite', 'tbeige']),
    'p-2 md:p-4' => $input('padding') === 'thin',
    'p-4 md:p-8' => $input('padding') === 'medium',
    'p-8 md:p-16' => $input('padding') === 'wide',
    'bg-' . $input('background_color') => $input('background_color') !== 'none',
])>
    <div @class([
        'mx-auto',
        'max-w-2xl' => $input('content_width') === 'thin',
        'max-w-4xl' => $input('content_width') === 'medium',
        'max-w-6xl' => $input('content_width') === 'wide',
    ])>
        {!! $renderData->renderChildren('panel_content') !!}
    </div>
</div>
