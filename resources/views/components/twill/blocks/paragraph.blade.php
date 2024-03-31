<div @class([
    'container w-full mx-auto first:pt-8 first:md:pt-12 last:pb-8',
    'text-twhite' => $renderData->model?->page_theme === 'dark',
    'text-tgray' => $inEditor || $renderData->model?->page_theme === 'light',
])>
    <div @class([
        'flex items-center p-4 mx-auto text-base xl:py-8 xl:px-0 md:text-lg',
        'max-w-2xl' => $inEditor || $renderData->model?->content_width === 'thin',
        'max-w-4xl' => $renderData->model?->content_width === 'medium',
        'max-w-6xl' => $renderData->model?->content_width === 'wide',
    ])>
        {!! $block->translatedInput('text') !!}
    </div>
</div>
