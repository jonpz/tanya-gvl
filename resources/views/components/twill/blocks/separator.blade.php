<div @class([
    'mt-2 md:mt-4' => $block->input('margin_top') === 'thin',
    'mt-4 md:mt-8' => $block->input('margin_top') === 'medium',
    'mt-8 md:mt-16' => $block->input('margin_top') === 'wide',
    'mb-2 md:mb-4' => $block->input('margin_bottom') === 'thin',
    'mb-4 md:mb-8' => $block->input('margin_bottom') === 'medium',
    'mb-8 md:mb-16' => $block->input('margin_bottom') === 'wide',
])>
    <hr @class([
        'mx-auto border-' . $block->input('color') . ' w-' . $block->input('width'),
        'h-12' => $inEditor,
    ]) />
</div>
