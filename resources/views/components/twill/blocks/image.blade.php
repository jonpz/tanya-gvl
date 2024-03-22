<div class="py-8 mx-auto max-w-2xl flex items-center">
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
