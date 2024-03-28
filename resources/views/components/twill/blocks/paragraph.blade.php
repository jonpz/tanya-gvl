<div @class([
    'container w-full mx-auto',
    'text-twhite bg-tgray' => $renderData->model->page_theme !== 'light',
    'text-tgray bg-twhite' => $renderData->model->page_theme === 'light',
])>
    <div class="flex items-center max-w-4xl px-4 py-4 mx-auto text-base md:py-8 md:px-0 md:text-lg">
        {!! $block->translatedInput('text') !!}
    </div>
</div>
