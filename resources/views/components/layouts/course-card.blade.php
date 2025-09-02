@props([
    'title' => 'Title',
    'description' => '',
    'cardClass' => 'w-[450px] min-h-[470px]',
    'image' => null,
    'imageAlt' => null,
    'mode' => null, // f2f | hybrid | online
])

@php
    $modeKey = $mode ? strtolower(trim($mode)) : null;
    $modeLabel = null;
    $modeColor = null;

    switch($modeKey) {
        case 'f2f':
        case 'face-to-face':
        case 'face to face':
            $modeLabel = 'F2F';
            $modeColor = 'bg-green-600';
            break;
        case 'hybrid':
        case 'hybrid f2f':
        case 'hybrid-face-to-face':
            $modeLabel = 'Hybrid F2F';
            $modeColor = 'bg-amber-500';
            break;
        case 'online':
            $modeLabel = 'Online';
            $modeColor = 'bg-cyan-600';
            break;
    }
@endphp

<div {{ $attributes->merge(['class' => "border-2 border-[#0ABAB5] rounded-lg p-6 flex flex-col bg-white shadow-sm hover:shadow-md transition-shadow duration-300 $cardClass"]) }}>
    @if($image)
        <div class="w-full h-28 rounded-md mb-6 overflow-hidden">
            <img
                src="{{ asset($image) }}"
                alt="{{ $imageAlt ?? $title }}"
                class="w-full h-full object-cover"
                loading="lazy"
            >
        </div>
    @else
        <div class="w-full h-28 bg-[#0ABAB5] rounded-md mb-6"></div>
    @endif
    <h3 class="text-[#0ABAB5] font-semibold text-xl mb-3">{{ $title }}</h3>
    <p class="text-gray-600 text-sm leading-relaxed mb-6 flex-1">
        {{ $description }}
    </p>
    <!-- Bottom row: button (left) + modality bullet (right) -->
    <div class="mt-auto flex items-center justify-between">
        <x-layouts.button
            type="outline"
            color="tiffany-blue"
            size="sm"
            text="Enroll Now!"
            href="{{ url('/contact') }}"
        />
        @if($modeLabel)
            <span class="flex items-center gap-1 text-[11px] font-medium tracking-wide text-gray-500">
                <span class="w-2 h-2 rounded-full {{ $modeColor }}"></span>
                {{ $modeLabel }}
            </span>
        @else
            <span class="w-2 h-2"></span>
        @endif
    </div>
</div>
