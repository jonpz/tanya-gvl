<div class="my-4">
    <img class="w-full" src="{{ $block->image('common_image', 'desktop') }}" />
    @if ($block->imageCaption('common_image'))
        <figcaption class="w-full text-xs text-center py-1">
            {{ $block->imageCaption('common_image') }}
        </figcaption>
    @endif
</div>
