<div @class([
    'flowroot',
    'p-1 md:p-2' =>
        $input('spacing') === 'thin' && $input('bg_color') !== 'none',
    'p-2 md:p-4' =>
        $input('spacing') === 'medium' && $input('bg_color') !== 'none',
    'p-4 md:p-8' =>
        $input('spacing') === 'wide' && $input('bg_color') !== 'none',
    'py-1 md:p-2' =>
        $input('spacing') === 'thin' && $input('bg_color') === 'none',
    'py-2 md:p-4' =>
        $input('spacing') === 'medium' && $input('bg_color') === 'none',
    'py-4 md:p-8' =>
        $input('spacing') === 'wide' && $input('bg_color') === 'none',
    'bg-' . $input('bg_color') => $input('bg_color') !== 'none',
])>
    <div @class([
        'flex flex-wrap',
        'justify-center' => $input('align_panels') === 'center',
        'justify-start' => $input('align_panels') === 'left',
        'justify-end' => $input('align_panels') === 'right',
    ])>
        @foreach ($repeater('panels') as $panel)
            <div @class([
                'w-full' => $input('sm_cols') == 1,
                'w-1/' . $input('sm_cols') => $input('sm_cols') != 1,
                'md:w-full' => $input('md_cols') == 1,
                'md:w-1/' . $input('md_cols') => $input('md_cols') != 1,
                'lg:w-full' => $input('lg_cols') == 1,
                'lg:w-1/' . $input('lg_cols') => $input('lg_cols') != 1,
                'xl:w-full' => $input('xl_cols') == 1,
                'xl:w-1/' . $input('xl_cols') => $input('xl_cols') != 1,
                'inline-flex' => $panel->renderData->block->input('sm_visible') ?: false,
                'hidden' => !($panel->renderData->block->input('sm_visible') ?: false),
                'md:inline-flex' => $panel->renderData->block->input('md_visible') ?: false,
                'md:hidden' => !($panel->renderData->block->input('md_visible') ?: false),
                'lg:inline-flex' => $panel->renderData->block->input('lg_visible') ?: false,
                'lg:hidden' => !($panel->renderData->block->input('lg_visible') ?: false),
                'xl:inline-flex' => $panel->renderData->block->input('xl_visible') ?: false,
                'xl:hidden' => !($panel->renderData->block->input('xl_visible') ?: false),
                'p-1 md:p-2' =>
                    $input('spacing') === 'thin' && $input('bg_color') !== 'none',
                'p-2 md:p-4' =>
                    $input('spacing') === 'medium' && $input('bg_color') !== 'none',
                'p-4 md:p-8' =>
                    $input('spacing') === 'wide' && $input('bg_color') !== 'none',
                'py-1 md:p-2' =>
                    $input('spacing') === 'thin' && $input('bg_color') === 'none',
                'py-2 md:p-4' =>
                    $input('spacing') === 'medium' && $input('bg_color') === 'none',
                'py-4 md:p-8' =>
                    $input('spacing') === 'wide' && $input('bg_color') === 'none',
            ])>
                <div @class([
                    'w-full',
                    'text-twhite' =>
                        ($renderData->model?->page_theme === 'dark' &&
                            !in_array($input('panel_bg_color'), ['twhite', 'tbeige'])) ||
                        in_array($input('panel_bg_color'), ['tblack', 'tgray', 'tpurple']),
                    'text-tgray' =>
                        ($inEditor &&
                            !in_array($input('panel_bg_color'), [
                                'tblack',
                                'tgray',
                                'tpurple',
                            ])) ||
                        $renderData->model?->page_theme === 'light' ||
                        in_array($input('panel_bg_color'), ['twhite', 'tbeige']),
                    'p-2 md:p-4' => $input('panel_padding') === 'thin',
                    'p-4 md:p-8' => $input('panel_padding') === 'medium',
                    'p-8 md:p-16' => $input('panel_padding') === 'wide',
                    'bg-' . $input('panel_bg_color') => $input('panel_bg_color') !== 'none',
                    'rounded-' . $input('panel_rounded') => $input('panel_rounded') !== 'none',
                ])>
                    {!! $panel->renderData->renderChildren('panel_content') !!}
                </div>
            </div>
        @endforeach
    </div>
</div>
