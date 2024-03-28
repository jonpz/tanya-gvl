<div @class([
    'container w-full mx-auto',
    'text-twhite bg-tgray' => $renderData->model->page_theme !== 'light',
    'text-tgray bg-twhite' => $renderData->model->page_theme === 'light',
])>
    <div class="max-w-4xl p-4 mx-auto md:p-8">
        <hr @class([
            'w-full',
            'border-tbeige' => $renderData->model->page_theme !== 'light',
            'border-tpurple' => $renderData->model->page_theme === 'light',
        ]) />
    </div>
</div>
