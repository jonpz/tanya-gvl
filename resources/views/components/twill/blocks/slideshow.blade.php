<script>
    function slideshow() {
        return {
            enlarged: false,
            enlargable: @json($input('enlargable') ?: false),
            slide_ids: @json(array_keys($block->imagesAsArraysWithCrops('free_image'))),
            active_slide: 0,
            openModal() {
                if (this.enlargable) {
                    this.enlarged = true;
                    document.body.style.overflow = 'hidden';
                }
            },
            closeModal() {
                this.enlarged = false;
                document.body.style.overflow = 'auto';
            },
            next() {
                next = this.active_slide + 1;
                if (next === this.slide_ids.length) next = 0;
                this.active_slide = next;
            },
            prev() {
                prev = this.active_slide - 1;
                if (prev === -1) prev = this.slide_ids.length - 1;
                this.active_slide = prev;
            },
        }
    }
</script>
<div x-data="slideshow()" @class([
    'flex justify-center',
    'mt-2 md:mt-4' => $input('margin_top') === 'thin',
    'mt-4 md:mt-8' => $input('margin_top') === 'medium',
    'mt-8 md:mt-16' => $input('margin_top') === 'wide',
    'mb-2 md:mb-4' => $input('margin_bottom') === 'thin',
    'mb-4 md:mb-8' => $input('margin_bottom') === 'medium',
    'mb-8 md:mb-16' => $input('margin_bottom') === 'wide',
])>
    <div @class([
        'relative aspect-video bg-tblack max-w-full h-56 md:h-' . $input('size'),
    ])>
        <div class="absolute inset-y-0 left-0 z-20 flex w-12 cursor-pointer md:w-16 align-center text-twhite"
            @click="prev()">
            <x-heroicon-o-chevron-left />
        </div>
        @foreach ($block->imagesAsArraysWithCrops('free_image') as $id => $imgArr)
            <div x-show="slide_ids[active_slide] == {{ $id }}" x-transition:enter="transition duration-400"
                x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                x-transition:leave="transition duration-400" x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0" @class([
                    'absolute flex w-full justify-center align-center z-10 overflow-hidden h-56 md:h-' .
                    $input('size'),
                    'cursor-pointer' => $input('enlargable'),
                ]) @click="openModal()">
                <img src="{{ $imgArr['display']['src'] }}" alt="{{ $imgArr['display']['alt'] }}"
                    class="max-w-full max-h-full">

                <template x-teleport="body">
                    <!-- Modal -->
                    <div x-show="enlarged && slide_ids[active_slide] == {{ $id }}" x-transition
                        class="fixed inset-0 z-40 flex justify-center p-2 align-middle cursor-pointer bg-tblack/90"
                        @click="closeModal()">
                        <x-heroicon-o-x-mark class="absolute w-12 h-12 md:w-16 md:h-16 top-2 right-2 text-twhite" />
                        <img src="{{ $imgArr['full']['src'] }}" alt="{{ $imgArr['full']['alt'] }}"
                            class="object-contain" />
                    </div>
                </template>

                @if ($imgArr['display']['caption'])
                    <div class="absolute inset-x-0 bottom-0 px-20 py-3 text-xs text-twhite bg-tblack/50 md:text-sm">
                        {{ $imgArr['display']['caption'] }}
                    </div>
                @endif
            </div>
        @endforeach
        <div class="absolute inset-y-0 right-0 z-20 flex w-12 cursor-pointer md:w-16 align-center text-twhite"
            @click="next()">
            <x-heroicon-o-chevron-right />
        </div>
    </div>
</div>
