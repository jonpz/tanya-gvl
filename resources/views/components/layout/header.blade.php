<header x-data="{ open: false, headshrink: false }" @scroll.window="headshrink = (window.pageYOffset > 60)">
    <div class="fixed inset-x-0 z-30 transition-all duration-200 border border-t-0 border-l-0 border-r-0 border-box border-tpurple bg-tblack text-twhite"
        :class="{ 'h-16 border-b-1': headshrink, 'h-24 border-b-2': !headshrink }">
        <div class="container flex items-center justify-between h-full mx-auto">
            <div class="relative h-full">
                {{-- <a class="py-8 text-2xl font-bold hover:text-white"
                        href="{{ config('app.url') }}">{{ config('app.name') }}</a> --}}
                {{-- <a class="overflow-hidden hover:text-white h24" href="{{ config('app.url') }}">
                        <x-icon-masthead class="object-right w-96" style="bottom:-115px;position:relative" />
                    </a> --}}
                <div class="absolute flex items-center justify-center transition-all duration-200 bg-tblack"
                    :class="{
                        'h-20 md:h-24 w-40 md:w-48 masthead-shrunk': headshrink,
                        'h-32 md:h-44 w-60 md:w-80 masthead': !
                            headshrink
                    }">
                    <a href="{{ config('app.url') }}">
                        <img src="{{ asset('assets/img/masthead.png') }}" class="transition-all duration-200"
                            :class="{ 'h-14 md:h-16': headshrink, 'h-20 md:h-28': !headshrink }" />
                    </a>
                </div>
            </div>
            <div>
                <!-- Hamburger Button -->
                <div class="mr-4 md:hidden">
                    <button class="py-8 focus:outline-none" @click="open = ! open">
                        @svg('heroicon-o-bars-3', 'w-8 h-8')
                    </button>
                </div>
                <!-- Desktop Navigation -->
                <nav class="hidden space-x-2 md:flex">
                    @foreach ($links as $link)
                        <a href="{{ $link->href }}" class="px-4 transition-all duration-200 hover:text-white"
                            :class="{ 'py-4 text-lg': headshrink, 'py-8 text-xl': !headshrink }">
                            {{ $link->title }}
                        </a>
                    @endforeach
                </nav>
            </div>
        </div>
    </div>
    <!-- Mobile Navigation -->
    <nav x-show="open" class="fixed inset-x-0 z-20 text-twhite bg-tblack hover:text-gray-50 md:hidden"
        :class="{ 'pt-4 mt-16': headshrink, 'pt-8 mt-24': !headshrink }"
        x-transition:enter="transition ease-out duration-400 transform"
        x-transition:enter-start="opacity-85 -translate-y-full" x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-250 transform"
        x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-85 -translate-y-full">
        @foreach ($links as $link)
            <a href="{{ $link->href }}" class="block px-8 py-4 text-lg hover:bg-tgray last:mb-4">
                {{ $link->title }}</a>
        @endforeach
    </nav>
</header>
