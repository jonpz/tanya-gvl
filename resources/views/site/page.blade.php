<x-html :title="$item->meta_title || $item->title
    ? ($item->meta_title ?? $item->title) . ' - ' . config('app.name')
    : config('app.name')" @class([
        'flex flex-col min-h-screen relative bg-tgray',
        // 'bg-tblack' => $item->page_theme !== 'light',
        // 'bg-tgray' => $item->page_theme === 'light',
    ])>
    <x-slot name="head">
        <meta name="description" content="{{ $item->meta_description }}">
        <link rel="shortcut icon" href="{{ url('assets/img/favicon.png') }}">
        @livewireStyles
        @vite(['resources/css/app.css'])
    </x-slot>

    <!-- Header -->
    <x-layout.header />

    <!-- Page backdrop -->
    <div class="absolute inset-0 z-0">
        <div @class([
            'container mx-auto h-full',
            'bg-tgray' => $item->page_theme === 'dark',
            'bg-twhite' => $item->page_theme === 'light',
        ])></div>
    </div>

    <!-- Content Section -->
    <div class="relative z-10 flex-grow mt-24 mb-12">
        {!! $item->renderBlocks() !!}
    </div>

    <!-- Footer -->
    <footer
        class="box-border absolute inset-x-0 bottom-0 py-3 border border-b-0 border-l-0 border-r-0 bg-tblack text-twhite border-t-1 border-tpurple">
        <div class="container mx-auto text-center">
            <span class="text-sm">&copy; {!! date('Y') !!} {{ config('app.name') }}. All rights
                reserved.</span>
        </div>
    </footer>

    @livewireScripts

</x-html>
