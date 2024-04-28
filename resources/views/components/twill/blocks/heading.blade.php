@if ($input('size') === 'h1')
    <h1 @class([
        'mt-2 md:mt-4' => $input('margin_top') === 'thin',
        'mt-4 md:mt-8' => $input('margin_top') === 'medium',
        'mt-8 md:mt-16' => $input('margin_top') === 'wide',
        'mb-2 md:mb-4' => $input('margin_bottom') === 'thin',
        'mb-4 md:mb-8' => $input('margin_bottom') === 'medium',
        'mb-8 md:mb-16' => $input('margin_bottom') === 'wide',
        'text-' . $input('alignment') => $input('alignment'),
        'text-' . $input('color') => $input('color') !== 'default',
    ])>
        {{ $block->translatedInput('title') }}
    </h1>
@elseif ($input('size') === 'h2')
    <h2 @class([
        'mt-2 md:mt-4' => $input('margin_top') === 'thin',
        'mt-4 md:mt-8' => $input('margin_top') === 'medium',
        'mt-8 md:mt-16' => $input('margin_top') === 'wide',
        'mb-2 md:mb-4' => $input('margin_bottom') === 'thin',
        'mb-4 md:mb-8' => $input('margin_bottom') === 'medium',
        'mb-8 md:mb-16' => $input('margin_bottom') === 'wide',
        'text-' . $input('alignment') => $input('alignment'),
        'text-' . $input('color') => $input('color') !== 'default',
    ])>
        {{ $block->translatedInput('title') }}
    </h2>
@elseif ($input('size') === 'h3')
    <h3 @class([
        'mt-2 md:mt-4' => $input('margin_top') === 'thin',
        'mt-4 md:mt-8' => $input('margin_top') === 'medium',
        'mt-8 md:mt-16' => $input('margin_top') === 'wide',
        'mb-2 md:mb-4' => $input('margin_bottom') === 'thin',
        'mb-4 md:mb-8' => $input('margin_bottom') === 'medium',
        'mb-8 md:mb-16' => $input('margin_bottom') === 'wide',
        'text-' . $input('alignment') => $input('alignment'),
        'text-' . $input('color') => $input('color') !== 'default',
    ])>
        {{ $block->translatedInput('title') }}
    </h3>
@elseif ($input('size') === 'h4')
    <h4 @class([
        'mt-2 md:mt-4' => $input('margin_top') === 'thin',
        'mt-4 md:mt-8' => $input('margin_top') === 'medium',
        'mt-8 md:mt-16' => $input('margin_top') === 'wide',
        'mb-2 md:mb-4' => $input('margin_bottom') === 'thin',
        'mb-4 md:mb-8' => $input('margin_bottom') === 'medium',
        'mb-8 md:mb-16' => $input('margin_bottom') === 'wide',
        'text-' . $input('alignment') => $input('alignment'),
        'text-' . $input('color') => $input('color') !== 'default',
    ])>
        {{ $block->translatedInput('title') }}
    </h4>
@elseif ($input('size') === 'h5')
    <h5 @class([
        'mt-2 md:mt-4' => $input('margin_top') === 'thin',
        'mt-4 md:mt-8' => $input('margin_top') === 'medium',
        'mt-8 md:mt-16' => $input('margin_top') === 'wide',
        'mb-2 md:mb-4' => $input('margin_bottom') === 'thin',
        'mb-4 md:mb-8' => $input('margin_bottom') === 'medium',
        'mb-8 md:mb-16' => $input('margin_bottom') === 'wide',
        'text-' . $input('alignment') => $input('alignment'),
        'text-' . $input('color') => $input('color') !== 'default',
    ])>
        {{ $block->translatedInput('title') }}
    </h5>
@endif
