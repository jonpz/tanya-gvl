<x-html :title="$item->meta_title || $item->title
    ? ($item->meta_title ?? $item->title) . ' - ' . config('app.name')
    : config('app.name')" @class([
        'flex flex-col min-h-screen bg-tgray relative',
        // 'bg-black' => $item->page_theme !== 'light',
        // 'bg-tgray' => $item->page_theme === 'light',
    ])>
    <x-slot name="head">
        <meta name="description" content="{{ $item->meta_description }}">
        <link rel="shortcut icon" href="{{ url('assets/img/favicon.png') }}">
        @livewireStyles
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </x-slot>

    <!-- Header -->
    <x-layout-header />

    <div class="absolute inset-0 z-0">
        <div @class([
            'container mx-auto h-full',
            'text-twhite bg-tgray' => $item->page_theme !== 'light',
            'text-tgray bg-twhite' => $item->page_theme === 'light',
        ])></div>
    </div>

    <!-- Content Section -->
    <div class="z-10 pt-24 pb-12">
        {!! $item->renderBlocks() !!}
    </div>

    <!-- Footer -->
    <footer class="fixed bottom-0 z-30 w-full py-4 bg-tblack text-twhite">
        <div class="container mx-auto text-center">
            <p class="text-sm">&copy; 2024 {{ config('app.name') }}. All rights reserved.</p>
        </div>
    </footer>
    @livewireScripts

</x-html>
