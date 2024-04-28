<div @class([
    'mt-2 md:mt-4' => $input('margin_top') === 'thin',
    'mt-4 md:mt-8' => $input('margin_top') === 'medium',
    'mt-8 md:mt-16' => $input('margin_top') === 'wide',
    'mb-2 md:mb-4' => $input('margin_bottom') === 'thin',
    'mb-4 md:mb-8' => $input('margin_bottom') === 'medium',
    'mb-8 md:mb-16' => $input('margin_bottom') === 'wide',
])>
    <hr @class([
        'mx-auto border-' . $input('color') . ' w-' . $input('width'),
        'h-12' => $inEditor,
    ]) />
</div>
