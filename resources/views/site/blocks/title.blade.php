@if ($block->position == 1)
    <h1 class="text-center text-4xl font-semibold text-gray-900">{{ $block->translatedInput('title') }}</h1>
@else
    <h2 class="text-center text-3xl font-semibold text-gray-900">{{ $block->translatedInput('title') }}</h2>
@endif
