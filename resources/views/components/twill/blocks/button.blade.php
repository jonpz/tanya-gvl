<div @class([
    'flex',
    'mt-2 md:mt-4' => $input('margin_top') === 'thin',
    'mt-4 md:mt-8' => $input('margin_top') === 'medium',
    'mt-8 md:mt-16' => $input('margin_top') === 'wide',
    'mb-2 md:mb-4' => $input('margin_bottom') === 'thin',
    'mb-4 md:mb-8' => $input('margin_bottom') === 'medium',
    'mb-8 md:mb-16' => $input('margin_bottom') === 'wide',
    'justify-start' => $input('alignment') === 'left',
    'justify-center' => $input('alignment') === 'center',
    'justify-end' => $input('alignment') === 'right',
])>
    <a @class([
        'font-bold',
        'rounded-' . $input('rounded') => $input('rounded') !== 'none',
        'bg-' . $input('background_color') => $input('background_color') !== 'none',
        'border text-tgray border-zinc-500 hover:bg-zinc-400' =>
            $input('background_color') === 'zinc-300',
        'border text-twhite border-red-950 hover:bg-red-900' =>
            $input('background_color') === 'red-700',
        'border text-twhite border-amber-950 hover:bg-amber-900' =>
            $input('background_color') === 'amber-700',
        'border text-twhite border-lime-950 hover:bg-lime-900' =>
            $input('background_color') === 'lime-700',
        'border text-twhite border-indigo-950 hover:bg-indigo-900' =>
            $input('background_color') === 'indigo-800',
        'text-twhite' => in_array($input('background_color'), ['tpurple', 'tgray']),
        'text-tgray' => in_array($input('background_color'), ['tbeige', 'none']),
        'px-4 py-1.5 text-sm' => $input('size') === 'small',
        'px-6 py-2 text-base' => $input('size') === 'medium',
        'px-12 py-4 text-xl' => $input('size') === 'large',
    ]) href="{{ $input('href') }}" target="{{ $input('target') }}">
        {{ $input('text') }}
    </a>
</div>
