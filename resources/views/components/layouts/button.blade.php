{{--
    Sample Usage:
	<x-layouts.button type="outline" color="tiffany-blue" size="sm" text="Submit" />
	<x-layouts.button type="outline-round" color="tiffany-blue" size="sm" text="Submit" />
--}}

@props([
	'type' => 'solid', // e.g. 'solid', 'outline'
	'color' => 'dark-teal', // 'blue', 'red', 'yellow', 'dark-teal', 'tiffany-blue'
	'size' => 'md', // 'sm' | 'md' | 'lg'
	'text' => 'Button',
	'href' => null,
	'class' => ''
])

@php
	$base = 'font-semibold transition-colors duration-200 relative overflow-hidden group inline-flex items-center justify-center';

	// Font Size
	$sizeClasses = [
		'sm' => 'px-3 py-1 text-sm',
		'md' => 'px-4 py-2 text-base',
		'lg' => 'px-6 py-3 text-lg',
	];

	// Border Radius for outline-round
	$roundClass = 'rounded-full';

    // Color and Type Definitions
	$sizeClass = $sizeClasses[$size] ?? $sizeClasses['md'];
	$colors = [
		'blue' => [
			'main' => 'bg-blue-600',
			'hover' => 'bg-blue-700',
			'border' => 'border-blue-600',
			'hoverBorder' => 'border-blue-700',
			'text' => 'text-white',
			'outlineText' => 'text-blue-600',
			'outlineHoverText' => 'text-white',
		],
		'red' => [
			'main' => 'bg-red-600',
			'hover' => 'bg-red-700',
			'border' => 'border-red-600',
			'hoverBorder' => 'border-red-700',
			'text' => 'text-white',
			'outlineText' => 'text-red-600',
			'outlineHoverText' => 'text-white',
		],
		'yellow' => [
			'main' => 'bg-yellow-600',
			'hover' => 'bg-yellow-700',
			'border' => 'border-yellow-600',
			'hoverBorder' => 'border-yellow-700',
			'text' => 'text-white',
			'outlineText' => 'text-yellow-600',
			'outlineHoverText' => 'text-white',
		],
		'dark-teal' => [
			'main' => 'bg-[#056360]',
			'hover' => 'bg-[#044f4c]',
			'border' => 'border-[#056360]',
			'hoverBorder' => 'border-[#044f4c]',
			'text' => 'text-white',
			'outlineText' => 'text-[#056360]',
			'outlineHoverText' => 'text-white',
		],
		'tiffany-blue' => [
			'main' => 'bg-[#0ABAB5]',
			'hover' => 'bg-[#099e9a]',
			'border' => 'border-[#0ABAB5]',
			'hoverBorder' => 'border-[#099e9a]',
			'text' => 'text-white',
			'outlineText' => 'text-[#0ABAB5]',
			'outlineHoverText' => 'text-white',
		],
	];

	$types = [
		'solid' => fn($c) => "$sizeClass $base rounded-lg border {$c['border']} {$c['text']} bg-transparent",
		'outline' => fn($c) => "$sizeClass $base rounded-lg border {$c['border']} {$c['outlineText']} bg-transparent",
		'outline-round' => fn($c) => "$sizeClass $base $roundClass border {$c['border']} {$c['outlineText']} bg-transparent",
	];

	$c = $colors[$color] ?? $colors['blue'];
	$btnClass = $types[$type]($c) ?? $types['solid']($c);
	$btnClass .= " $class";
@endphp

@if($type === 'outline' || $type === 'outline-round')
	@if($href)
		<a href="{{ $href }}" class="{{ $btnClass }}">
			<span class="absolute left-0 top-0 h-full w-0 transition-all duration-300 group-hover:w-full z-0 pointer-events-none {{ $c['main'] }}"></span>
			<span class="relative z-10 font-semibold transition-colors duration-300 group-hover:text-white">{{ $text }}</span>
		</a>
	@else
		<button type="button" class="{{ $btnClass }}">
			<span class="absolute left-0 top-0 h-full w-0 transition-all duration-300 group-hover:w-full z-0 pointer-events-none {{ $c['main'] }}"></span>
			<span class="relative z-10 font-semibold transition-colors duration-300 group-hover:text-white">{{ $text }}</span>
		</button>
	@endif
@elseif($type === 'solid')
	@if($href)
		<a href="{{ $href }}" class="{{ $btnClass }}">
			<span class="absolute right-0 top-0 h-full w-full transition-all duration-300 group-hover:w-0 z-0 pointer-events-none {{ $c['main'] }}"></span>
			<span class="relative z-10 font-semibold transition-colors duration-300 {{ $c['text'] }} group-hover:{{ $c['outlineText'] }}">{{ $text }}</span>
		</a>
	@else
		<button type="button" class="{{ $btnClass }}">
			<span class="absolute right-0 top-0 h-full w-full transition-all duration-300 group-hover:w-0 z-0 pointer-events-none {{ $c['main'] }}"></span>
			<span class="relative z-10 font-semibold transition-colors duration-300 {{ $c['text'] }} group-hover:{{ $c['outlineText'] }}">{{ $text }}</span>
		</button>
	@endif
@else
	@if($href)
		<a href="{{ $href }}" class="{{ $btnClass }}">
			<span class="font-semibold">{{ $text }}</span>
		</a>
	@else
		<button type="button" class="{{ $btnClass }}">
			<span class="font-semibold">{{ $text }}</span>
		</button>
	@endif
@endif
