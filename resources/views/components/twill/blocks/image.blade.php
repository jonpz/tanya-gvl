<div @class([
    'relative',
    'mt-2 md:mt-4' => $block->input('margin_top') === 'thin',
    'mt-4 md:mt-8' => $block->input('margin_top') === 'medium',
    'mt-8 md:mt-16' => $block->input('margin_top') === 'wide',
    'mb-2 md:mb-4' => $block->input('margin_bottom') === 'thin',
    'mb-4 md:mb-8' => $block->input('margin_bottom') === 'medium',
    'mb-8 md:mb-16' => $block->input('margin_bottom') === 'wide',
])>
    <div class="hidden md:block lg:hidden">
        <img src="{{ $block->imageAsArray('image', 'tablet')['src'] }}"
            alt="{{ $block->imageAsArray('image', 'tablet')['alt'] }}" class="object-cover w-full h-auto mx-auto">
    </div>

    <div class="hidden lg:block">
        <img src="{{ $block->imageAsArray('image', 'desktop')['src'] }}"
            alt="{{ $block->imageAsArray('image', 'desktop')['alt'] }}" class="object-cover w-full h-auto mx-auto">
    </div>

    <div class="block md:hidden">
        <img src="{{ $block->imageAsArray('image', 'mobile')['src'] }}"
            alt="{{ $block->imageAsArray('image', 'mobile')['alt'] }}" class="object-cover w-full h-auto mx-auto">
    </div>

    @if ($block->imageAsArray('image', 'desktop')['caption'])
        <div class="absolute inset-x-0 bottom-0 px-4 py-3 text-xs text-twhite bg-tblack/50 md:text-sm">
            {{ $block->imageAsArray('image', 'desktop')['caption'] }}
        </div>
    @endif
</div>
