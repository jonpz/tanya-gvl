<x-html :title="$item->meta_title || $item->title
    ? ($item->meta_title ?? $item->title) . ' - ' . config('app.name')
    : config('app.name')" class="flex flex-col min-h-screen bg-tblack" @class([
        'flex flex-col min-h-screen bg-tblack',
        'bg-tblack' => $item->page_theme !== 'light',
        'bg-tgray' => $item->page_theme === 'light',
    ])>
    <x-slot name="head">
        <meta name="description" content="{{ $item->meta_description }}">
        @livewireStyles
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </x-slot>

    <!-- Header -->
    <x-layout-header />
    <!-- Content Section -->
    <div class="w-full min-h-screen pt-24 pb-12">
        {!! $item->renderBlocks() !!}
    </div>
    <!-- Footer -->
    <footer class="fixed bottom-0 w-full py-4 bg-tblack text-twhite">
        <div class="container mx-auto text-center">
            <p class="text-sm">&copy; 2024 {{ config('app.name') }}. All rights reserved.</p>
        </div>
    </footer>
    @livewireScripts
</x-html>
