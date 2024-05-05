<div @class([
    'flex flex-wrap justify-center',
    'gap-0' => $input('spacing') === 'none',
    'gap-2 md:gap-4' => $input('spacing') === 'thin',
    'gap-4 md:gap-8' => $input('spacing') === 'medium',
    'gap-8 md:gap-16' => $input('spacing') === 'wide',
    'bg-' . $input('bg_color') => $input('bg_color') !== 'none',
])>
    @foreach ($repeater('panels') as $panel)
        <div @class([
            'w-[calc(' .
            round((1 / $input('sm_cols')) * 100, 2) .
            '%-' .
            $input('gap_diff') .
            ')] md:w-[calc(' .
            round((1 / $input('md_cols')) * 100, 2) .
            '%-' .
            $input('gap_diff_md') .
            ')] lg:w-[calc(' .
            round((1 / $input('lg_cols')) * 100, 2) .
            '%-' .
            $input('gap_diff_md') .
            ')] xl:w-[calc(' .
            round((1 / $input('xl_cols')) * 100, 2) .
            '%-' .
            $input('gap_diff_md') .
            ')]',
            'inline-flex' => $panel->renderData->block->input('sm_visible') ?: false,
            'hidden' => !($panel->renderData->block->input('sm_visible') ?: false),
            'md:inline-flex' => $panel->renderData->block->input('md_visible') ?: false,
            'md:hidden' => !($panel->renderData->block->input('md_visible') ?: false),
            'lg:inline-flex' => $panel->renderData->block->input('lg_visible') ?: false,
            'lg:hidden' => !($panel->renderData->block->input('lg_visible') ?: false),
            'xl:inline-flex' => $panel->renderData->block->input('xl_visible') ?: false,
            'xl:hidden' => !($panel->renderData->block->input('xl_visible') ?: false),
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
    @endforeach
</div>
