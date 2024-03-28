<div @class([
    'container w-full mx-auto first:pt-8 first:md:pt-12 last:pb-8',
    'text-twhite bg-tgray' => $renderData->model->page_theme !== 'light',
    'text-tgray bg-twhite' => $renderData->model->page_theme === 'light',
])>
    <div class="flex items-center max-w-4xl py-4 mx-auto md:py-8">
        <h1 class="w-full text-4xl font-bold text-center md:text-6xl">
            {{ $block->translatedInput('title') }}
        </h1>
    </div>
</div>
