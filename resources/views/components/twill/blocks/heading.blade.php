@if ($block->input('size') === 'h1')
    <h1 @class([
        'mt-2 md:mt-4' => $block->input('margin_top') === 'thin',
        'mt-4 md:mt-8' => $block->input('margin_top') === 'medium',
        'mt-8 md:mt-16' => $block->input('margin_top') === 'wide',
        'mb-2 md:mb-4' => $block->input('margin_bottom') === 'thin',
        'mb-4 md:mb-8' => $block->input('margin_bottom') === 'medium',
        'mb-8 md:mb-16' => $block->input('margin_bottom') === 'wide',
        'text-' . $block->input('alignment') => $block->input('alignment'),
        'text-' . $block->input('color') => $block->input('color') !== 'default',
    ])>
        {{ $block->translatedInput('title') }}
    </h1>
@elseif ($block->input('size') === 'h2')
    <h2 @class([
        'mt-2 md:mt-4' => $block->input('margin_top') === 'thin',
        'mt-4 md:mt-8' => $block->input('margin_top') === 'medium',
        'mt-8 md:mt-16' => $block->input('margin_top') === 'wide',
        'mb-2 md:mb-4' => $block->input('margin_bottom') === 'thin',
        'mb-4 md:mb-8' => $block->input('margin_bottom') === 'medium',
        'mb-8 md:mb-16' => $block->input('margin_bottom') === 'wide',
        'text-' . $block->input('alignment') => $block->input('alignment'),
        'text-' . $block->input('color') => $block->input('color') !== 'default',
    ])>
        {{ $block->translatedInput('title') }}
    </h2>
@elseif ($block->input('size') === 'h3')
    <h3 @class([
        'mt-2 md:mt-4' => $block->input('margin_top') === 'thin',
        'mt-4 md:mt-8' => $block->input('margin_top') === 'medium',
        'mt-8 md:mt-16' => $block->input('margin_top') === 'wide',
        'mb-2 md:mb-4' => $block->input('margin_bottom') === 'thin',
        'mb-4 md:mb-8' => $block->input('margin_bottom') === 'medium',
        'mb-8 md:mb-16' => $block->input('margin_bottom') === 'wide',
        'text-' . $block->input('alignment') => $block->input('alignment'),
        'text-' . $block->input('color') => $block->input('color') !== 'default',
    ])>
        {{ $block->translatedInput('title') }}
    </h3>
@elseif ($block->input('size') === 'h4')
    <h4 @class([
        'mt-2 md:mt-4' => $block->input('margin_top') === 'thin',
        'mt-4 md:mt-8' => $block->input('margin_top') === 'medium',
        'mt-8 md:mt-16' => $block->input('margin_top') === 'wide',
        'mb-2 md:mb-4' => $block->input('margin_bottom') === 'thin',
        'mb-4 md:mb-8' => $block->input('margin_bottom') === 'medium',
        'mb-8 md:mb-16' => $block->input('margin_bottom') === 'wide',
        'text-' . $block->input('alignment') => $block->input('alignment'),
        'text-' . $block->input('color') => $block->input('color') !== 'default',
    ])>
        {{ $block->translatedInput('title') }}
    </h4>
@elseif ($block->input('size') === 'h5')
    <h5 @class([
        'mt-2 md:mt-4' => $block->input('margin_top') === 'thin',
        'mt-4 md:mt-8' => $block->input('margin_top') === 'medium',
        'mt-8 md:mt-16' => $block->input('margin_top') === 'wide',
        'mb-2 md:mb-4' => $block->input('margin_bottom') === 'thin',
        'mb-4 md:mb-8' => $block->input('margin_bottom') === 'medium',
        'mb-8 md:mb-16' => $block->input('margin_bottom') === 'wide',
        'text-' . $block->input('alignment') => $block->input('alignment'),
        'text-' . $block->input('color') => $block->input('color') !== 'default',
    ])>
        {{ $block->translatedInput('title') }}
    </h5>
@endif
