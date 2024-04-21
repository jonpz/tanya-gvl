<script>
    function modal() {
        return {
            open: false,
            enabled: @json($block->input('enlargable')),
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
<div x-data="modal()" @class([
    'flex',
    'mt-2 md:mt-4' => $block->input('margin_top') === 'thin',
    'mt-4 md:mt-8' => $block->input('margin_top') === 'medium',
    'mt-8 md:mt-16' => $block->input('margin_top') === 'wide',
    'mb-2 md:mb-4' => $block->input('margin_bottom') === 'thin',
    'mb-4 md:mb-8' => $block->input('margin_bottom') === 'medium',
    'mb-8 md:mb-16' => $block->input('margin_bottom') === 'wide',
    'justify-start' => $block->input('alignment') === 'left',
    'justify-center' => $block->input('alignment') === 'center',
    'justify-end' => $block->input('alignment') === 'right',
])>
    <div @class([
        'relative inline',
        'cursor-pointer' => $block->input('enlargable'),
        'h-' . $block->input('restrict_height') => $block->input('restrict_height'),
        'w-' . $block->input('restrict_width') => $block->input('restrict_width'),
    ]) @click="openModal()">
        <img src="{{ $block->imageAsArray('free_image', 'display')['src'] }}"
            alt="{{ $block->imageAsArray('free_image', 'display')['alt'] }}" @class([
                'h-full w-auto' => $block->input('restrict_height'),
            ])>

        <template x-teleport="body">
            <!-- Modal -->
            <div x-show="open" x-transition
                class="fixed inset-0 z-40 flex justify-center p-8 align-middle cursor-pointer bg-tblack/90"
                @click="closeModal()">
                <img src="{{ $block->imageAsArray('free_image', 'full')['src'] }}"
                    alt="{{ $block->imageAsArray('free_image', 'full')['alt'] }}" class="max-w-none" />
            </div>
        </template>

        @if ($block->imageAsArray('free_image', 'display')['caption'])
            <div class="absolute inset-x-0 bottom-0 px-4 py-3 text-xs text-twhite bg-tblack/50 md:text-sm">
                {{ $block->imageAsArray('free_image', 'display')['caption'] }}
            </div>
        @endif
    </div>
</div>
