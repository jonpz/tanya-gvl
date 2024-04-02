<hr @class([
    'w-full my-4 md:my-8',
    'border-tbeige' => $inEditor || $renderData->model?->page_theme !== 'light',
    'border-tpurple' => $renderData->model?->page_theme === 'light',
]) />
