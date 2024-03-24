<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>
        {{ $item->meta_title || $item->title ? ($item->meta_title ?? $item->title) . ' | ' . config('app.name') : config('app.name') }}
    </title>
    <meta name="description" content="{{ $item->meta_description }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @livewireStyles
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <x-menu />
    <div class="max-w-2xl mx-auto">
        {!! $item->renderBlocks() !!}
    </div>
    @livewireScripts
</body>

</html>
