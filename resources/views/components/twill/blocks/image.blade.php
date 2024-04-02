<div class="mb-4 md:mb-8">
    <div class="hidden w-full md:block lg:hidden">
        <img src="{{ $image('image', 'tablet') }}" alt="Tablet Image" class="object-cover w-full h-auto mx-auto">
    </div>

    <div class="hidden w-full lg:block">
        <img src="{{ $image('image', 'desktop') }}" alt="Desktop Image" class="object-cover w-full h-auto mx-auto">
    </div>

    <div class="block w-full md:hidden">
        <img src="{{ $image('image', 'mobile') }}" alt="Mobile Image" class="object-cover w-full h-auto mx-auto">
    </div>
</div>
