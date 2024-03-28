<div @class([
    'container w-full mx-auto',
    'text-twhite bg-tgray' => $renderData->model->page_theme !== 'light',
    'text-tgray bg-twhite' => $renderData->model->page_theme === 'light',
])>
    <div class="flex items-center max-w-4xl py-4 mx-auto md:py-8">
        <div class="hidden md:block lg:hidden">
            <img src="{{ $block->image('image', 'tablet') }}" alt="Tablet Image" class="object-cover w-full h-auto">
        </div>

        <div class="hidden lg:block">
            <img src="{{ $block->image('image', 'desktop') }}" alt="Desktop Image" class="object-cover w-full h-auto">
        </div>

        <div class="block md:hidden">
            <img src="{{ $block->image('image', 'mobile') }}" alt="Mobile Image" class="object-cover w-full h-auto">
        </div>
    </div>
</div>
