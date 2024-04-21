<div @class([
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
    <a @class([
        'font-bold',
        'rounded-' . $block->input('rounded') =>
            $block->input('rounded') !== 'none',
        'bg-' . $block->input('background_color') =>
            $block->input('background_color') !== 'none',
        'border text-tgray border-zinc-500 hover:bg-zinc-400' =>
            $block->input('background_color') === 'zinc-300',
        'border text-twhite border-red-950 hover:bg-red-900' =>
            $block->input('background_color') === 'red-700',
        'border text-twhite border-amber-950 hover:bg-amber-900' =>
            $block->input('background_color') === 'amber-700',
        'border text-twhite border-lime-950 hover:bg-lime-900' =>
            $block->input('background_color') === 'lime-700',
        'border text-twhite border-indigo-950 hover:bg-indigo-900' =>
            $block->input('background_color') === 'indigo-800',
        'text-twhite' => in_array($block->input('background_color'), [
            'tpurple',
            'tgray',
        ]),
        'text-tgray' => in_array($block->input('background_color'), [
            'tbeige',
            'none',
        ]),
        'px-4 py-1.5 text-sm' => $block->input('size') === 'small',
        'px-6 py-2 text-base' => $block->input('size') === 'medium',
        'px-12 py-4 text-xl' => $block->input('size') === 'large',
    ]) href="{{ $block->input('href') }}" target="{{ $block->input('target') }}">
        {{ $block->input('text') }}
    </a>
</div>
