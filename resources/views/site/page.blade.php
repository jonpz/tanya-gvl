<x-html :title="$item->meta_title || $item->title
    ? ($item->meta_title ?? $item->title) . ' - ' . config('app.name')
    : config('app.name')" class="flex flex-col min-h-screen bg-gray-950">
    <x-slot name="head">
        <meta name="description" content="{{ $item->meta_description }}">
        @livewireStyles
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </x-slot>

    <!-- Header -->
    <x-layout-header />
    <!-- Content Section -->
    <div class="container min-h-screen pt-32 pb-16 mx-auto text-gray-200 bg-gray-900">
        {!! $item->renderBlocks() !!}
    </div>
    <!-- Footer -->
    <footer class="fixed bottom-0 w-full py-4 text-gray-200 bg-black">
        <div class="container mx-auto text-center">
            <p class="text-sm">&copy; 2024 {{ config('app.name') }}. All rights reserved.</p>
        </div>
    </footer>
    @livewireScripts
</x-html>
