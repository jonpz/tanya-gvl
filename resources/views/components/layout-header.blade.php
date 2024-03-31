<header x-data="{ open: false }">
    <div class="fixed inset-x-0 z-30 bg-tblack text-twhite">
        <div class="container mx-auto">
            <div class="flex items-center justify-between h-24">
                <div class="ml-4">
                    {{-- <a class="py-8 text-2xl font-bold hover:text-white"
                        href="{{ config('app.url') }}">{{ config('app.name') }}</a> --}}
                    {{-- <a class="overflow-hidden hover:text-white h24" href="{{ config('app.url') }}">
                        <x-icon-masthead class="object-right w-96" style="bottom:-115px;position:relative" />
                    </a> --}}
                    <a href="{{ config('app.url') }}">
                        <img src="{{ asset('assets/img/masthead.png') }}" class="h-20" />
                    </a>
                </div>
                <div>
                    <!-- Hamburger Menu -->
                    <div class="mr-4 md:hidden">
                        <button class="py-8 focus:outline-none" @click="open = ! open">
                            @svg('heroicon-o-bars-3', 'w-8 h-8')
                        </button>
                    </div>
                    <!-- Desktop Navigation -->
                    <nav class="hidden space-x-2 md:flex">
                        @foreach ($links as $link)
                            <a href="{{ $link->href }}" class="px-4 py-8 text-xl hover:text-white">
                                {{ $link->title }}
                            </a>
                        @endforeach
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile Navigation (Hidden by default) -->
    <nav x-show="open" class="fixed inset-x-0 z-20 mt-24 text-twhite bg-tblack hover:text-gray-50 md:hidden"
        x-transition:enter="transition ease-out duration-400 transform"
        x-transition:enter-start="opacity-85 -translate-y-40" x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-250 transform"
        x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-85 -translate-y-40">
        @foreach ($links as $link)
            <a href="{{ $link->href }}" class="block px-8 py-4 text-lg hover:bg-tgray last:mb-4">
                {{ $link->title }}</a>
        @endforeach
    </nav>
</header>
