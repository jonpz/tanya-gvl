<script>
    function floatImage() {
        return {
            open: false,
            enabled: @json($input('enlargable') ?: false),
            openModal() {
                if (this.enabled) {
                    this.open = true;
                    document.body.style.overflow = 'hidden';
                }
            },
            closeModal() {
                this.open = false;
                document.body.style.overflow = 'auto';
            }
        }
    }
</script>
<div x-data="floatImage()" @class([
    'mx-4 xl:mx-0',
    'mt-2 md:mt-4' => $input('margin_top') === 'thin',
    'mt-4 md:mt-8' => $input('margin_top') === 'medium',
    'mt-8 md:mt-16' => $input('margin_top') === 'wide',
    'mb-2 md:mb-4' => $input('margin_bottom') === 'thin',
    'mb-4 md:mb-8' => $input('margin_bottom') === 'medium',
    'mb-8 md:mb-16' => $input('margin_bottom') === 'wide',
    'text-base md:text-lg' => $input('size') === 'base',
    'text-sm md:text-base' => $input('size') === 'small',
    'text-lg md:text-xl' => $input('size') === 'large',
    'text-xl md:text-2xl' => $input('size') === 'extra-large',
    'text-' . $input('color') => $input('color') !== 'inherit',
    'font-' . $input('font') => $input('font') !== 'inherit',
    'pb-16' => $inEditor && $parent->type === 'app-panel',
])>
    @if ($block->imageAsArray('free_image', 'display'))
        <div @class([
            'relative inline mb-3 h-' . $input('image_size'),
            'float-left mr-4' => $input('float_direction') === 'left',
            'float-right ml-4' => $input('float_direction') === 'right',
            'cursor-pointer' => $input('enlargable'),
        ]) @click="openModal()">
            <img src="{{ $block->imageAsArray('free_image', 'display')['src'] }}"
                alt="{{ $block->imageAsArray('free_image', 'display')['alt'] }}" class="w-auto h-full">

            <template x-teleport="body">
                <!-- Modal -->
                <div x-show="open" x-transition
                    class="fixed inset-0 z-40 flex justify-center p-2 align-middle cursor-pointer bg-tblack/90"
                    @click="closeModal()">
                    <x-heroicon-s-x-mark class="absolute w-16 h-16 top-2 right-2 text-twhite" />
                    <img src="{{ $block->imageAsArray('free_image', 'full')['src'] }}"
                        alt="{{ $block->imageAsArray('free_image', 'full')['alt'] }}" class="object-contain" />
                </div>
            </template>

            @if ($block->imageAsArray('free_image', 'display')['caption'])
                <div class="absolute inset-x-0 bottom-0 px-4 py-3 text-xs text-twhite bg-tblack/50 md:text-sm">
                    {{ $block->imageAsArray('free_image', 'display')['caption'] }}
                </div>
            @endif
        </div>
    @endif
    {!! $block->translatedInput('text') !!}
</div>
