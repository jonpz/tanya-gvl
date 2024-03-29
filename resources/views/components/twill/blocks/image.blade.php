<div @class([
    'container w-full mx-auto first:pt-8 first:md:pt-12 last:pb-8',
    'text-twhite' => $renderData->model->page_theme !== 'light',
    'text-tgray' => $renderData->model->page_theme === 'light',
])>
    <div @class([
        'flex items-center py-4 mx-auto md:py-8',
        'max-w-2xl' => $renderData->model->content_width === 'thin',
        'max-w-4xl' => $renderData->model->content_width === 'medium',
        'max-w-6xl' => $renderData->model->content_width === 'wide',
    ])>
        <div class="hidden w-full md:block lg:hidden">
            <img src="{{ $block->image('image', 'tablet') }}" alt="Tablet Image"
                class="object-cover w-full h-auto mx-auto">
        </div>

        <div class="hidden w-full lg:block">
            <img src="{{ $block->image('image', 'desktop') }}" alt="Desktop Image"
                class="object-cover w-full h-auto mx-auto">
        </div>

        <div class="block w-full md:hidden">
            <img src="{{ $block->image('image', 'mobile') }}" alt="Mobile Image"
                class="object-cover w-full h-auto mx-auto">
        </div>
    </div>
</div>
