<div @class([
    'flex',
    'mx-4' => $parent?->type === 'app-panel',
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
    <div @class([
        'relative md:w-' . $input('width'),
        'rounded-3xl' => $input('rounded'),
        'p-2 md:p-4' => $input('padding') === 'thin',
        'p-4 md:p-8' => $input('padding') === 'medium',
        'p-8 md:p-16' => $input('padding') === 'wide',
        'bg-' . $input('background_color') =>
            $input('background_color') !== 'none' &&
            $input('background_opacity') === '100',
        'bg-' . $input('background_color') . '/' . $input('background_opacity') =>
            $input('background_color') !== 'none' &&
            $input('background_opacity') !== '100',
    ])>
        @if ($input('background_icon'))
            <!-- Icon Backdrop -->
            <div @class([
                'absolute z-0 inset-0 flex overflow-hidden text-' . $input('icon_color'),
                'items-start' =>
                    $input('icon_placement') === 'top-left' ||
                    $input('icon_placement') === 'top-center' ||
                    $input('icon_placement') === 'top-right',
                'items-center' =>
                    $input('icon_placement') === 'middle-left' ||
                    $input('icon_placement') === 'middle-center' ||
                    $input('icon_placement') === 'middle-right',
                'items-end' =>
                    $input('icon_placement') === 'bottom-left' ||
                    $input('icon_placement') === 'bottom-center' ||
                    $input('icon_placement') === 'bottom-right',
                'justify-start' =>
                    $input('icon_placement') === 'top-left' ||
                    $input('icon_placement') === 'middle-left' ||
                    $input('icon_placement') === 'bottom-left',
                'justify-center' =>
                    $input('icon_placement') === 'top-center' ||
                    $input('icon_placement') === 'middle-center' ||
                    $input('icon_placement') === 'bottom-center',
                'justify-end' =>
                    $input('icon_placement') === 'top-right' ||
                    $input('icon_placement') === 'middle-right' ||
                    $input('icon_placement') === 'bottom-right',
            ])>
                <x-dynamic-component :component="$input('background_icon')" @class([
                    'w-16' => $input('icon_size') === 'small',
                    'w-32' => $input('icon_size') === 'medium',
                    'w-48' => $input('icon_size') === 'large',
                    'w-64' => $input('icon_size') === 'extra-large',
                ]) />
            </div>
        @endif
        <div class="relative z-10">
            {!! $renderData->renderChildren('panel_content') !!}
        </div>
    </div>
</div>
