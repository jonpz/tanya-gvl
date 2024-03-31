<div @class([
    'container w-full mx-auto first:pt-8 first:md:pt-12 last:pb-8',
    'text-twhite' => $renderData->model?->page_theme === 'dark',
    'text-tgray' => $inEditor || $renderData->model?->page_theme === 'light',
])>
    <div @class([
        'flex items-center py-4 mx-auto md:py-8',
        'max-w-2xl' => $inEditor || $renderData->model?->content_width === 'thin',
        'max-w-4xl' => $renderData->model?->content_width === 'medium',
        'max-w-6xl' => $renderData->model?->content_width === 'wide',
    ])>
        <h1 class="w-full text-4xl font-bold text-center md:text-6xl">
            {{ $block->translatedInput('title') }}
        </h1>
    </div>
</div>
