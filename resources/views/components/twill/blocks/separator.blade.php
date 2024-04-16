<hr @class([
    'm-8 md:m-12',
    'h-8' => $inEditor,
    'border-tbeige' => $inEditor || $renderData->model?->page_theme !== 'light',
    'border-tpurple' => $renderData->model?->page_theme === 'light',
]) />
