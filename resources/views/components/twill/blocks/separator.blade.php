<div class="container w-full mx-auto first:pt-8 first:md:pt-12 last:pb-8">
    <div @class([
        'flex items-center p-4 mx-auto md:py-8',
        'max-w-2xl' => $inEditor || $renderData->model?->content_width === 'thin',
        'max-w-4xl' => $renderData->model?->content_width === 'medium',
        'max-w-6xl' => $renderData->model?->content_width === 'wide',
    ])>
        <hr @class([
            'w-full',
            'border-tbeige' => $inEditor || $renderData->model?->page_theme !== 'light',
            'border-tpurple' => $renderData->model?->page_theme === 'light',
        ]) />
    </div>
</div>
