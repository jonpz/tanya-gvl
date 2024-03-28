<div @class([
    'container w-full mx-auto',
    'text-twhite bg-tgray' => $renderData->model->page_theme !== 'light',
    'text-tgray bg-twhite' => $renderData->model->page_theme === 'light',
])>
    <div class="flex items-center max-w-4xl py-4 mx-auto md:py-8">
        <h1 class="w-full mt-6 text-6xl font-bold text-center md:mt-8 lg:mt-12 md:text-6xl">
            {{ $block->translatedInput('title') }}
        </h1>
    </div>
</div>
