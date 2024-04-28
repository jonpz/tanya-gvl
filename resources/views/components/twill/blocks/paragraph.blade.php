<div @class([
    'mx-4 xl:mx-0 text-' . $input('alignment'),
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
    {!! $block->translatedInput('text') !!}
</div>
