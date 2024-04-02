<div @class([
    'container w-full mx-auto last:mb-20',
    'text-twhite' => $renderData->model?->page_theme === 'dark',
    'text-tgray' => $inEditor || $renderData->model?->page_theme === 'light',
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
