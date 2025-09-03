@props(['title' => null, 'description' => null])
<div class="mb-8 text-center">
    @if($title)
        <h1 class="text-2xl font-semibold text-gray-900">{{ $title }}</h1>
    @endif
    @if($description)
        <p class="mt-2 text-sm text-gray-600">{{ $description }}</p>
    @endif
</div>
