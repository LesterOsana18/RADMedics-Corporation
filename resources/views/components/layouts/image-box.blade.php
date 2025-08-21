@php
    $variantClasses = [
        'ver-1' => 'flex flex-wrap justify-center gap-8',
        'ver-2' => 'flex items-center justify-center w-full',
        'ver-3' => 'flex items-center justify-center w-full flex-row-reverse',
        'ver-4' => 'flex items-center justify-center w-full',
    ];

    $boxSizeClass = 'w-[97%] h-[97%]';
@endphp
{{-- VARIANTS ARE DIRECTLY FROM THE FIGMA DESIGNS IN DRAFT #2 --}}

{{-- Image Setting for ver-1--}}
{{--
    @php
        // First, define the array of images you want to display
        $galleryImages = [
            [
                'src' => 'add source ref here',
                'alt' => 'A forest path'
            ],
            [
                'src' => 'add source ref here',
                'alt' => 'A misty mountain range'
            ]
        ];
    @endphp

        //Then, pass that array to the component using the :images prop

        <x-layouts.image-box variant="ver-1" :images="$galleryImages" />

--}}

{{-- Image Setting for ver-2,3,& 4--}}

{{-- @php
            // Similar to the center image boxes, define the single image you want to display
            $portraitImage = [
                'src' => 'add source ref here',
                'alt' => 'A beautiful beach scene'
            ];

            //Create more if different images are needed for the each image boxes.
        @endphp

            // After that, pass that single image array to the component using the :image prop

            <x-layouts.image-box variant="ver-3" :image="$portraitImage" />
 --}}



@php
    $variant = $variant ?? 'ver-1';
@endphp
<div class="{{ $variantClasses[$variant] ?? $variantClasses['ver-1'] }}">
    @if($variant === 'ver-1') {{-- Two Center Photobox --}}

        @foreach($images ?? [] as $image)
            <div class="relative w-full md:w-1/2 max-w-lg aspect-video" style="margin-bottom: 30px">
                {{-- Background Box --}}
                <div class="absolute top-0 right-0 {{ $boxSizeClass }}" style="background-color: #0ABAB5;"></div>

                {{-- Foreground Box with Image --}}
                <div class="absolute bottom-0 right-0 {{ $boxSizeClass }} flex items-center justify-center text-gray-500 text-sm" style="background-color: #FFF; border: 0.36px solid #056360;">
                    <img src="{{ $image['src'] ?? '' }}"
                         alt="{{ $image['alt'] ?? 'Placeholder Image' }}"
                         class="w-full h-full object-cover">
                </div>
            </div>
        @endforeach
    @else
        @php
            $containerClasses = [
                'ver-2' => 'relative w-full max-w-3xl aspect-video',
                'ver-3' => 'relative w-full max-w-lg aspect-[4/5]',
                'ver-4' => 'relative w-full max-w-md aspect-[4/5]',
            ][$variant] ?? '';

            $bgBoxClasses = [
                'ver-2' => 'absolute top-0 left-0',
                'ver-3' => 'absolute top-0 right-0',
                'ver-4' => 'absolute top-0 left-0',
            ][$variant] ?? '';

            $fgBoxClasses = [
                'ver-2' => 'absolute bottom-0 right-0',
                'ver-3' => 'absolute bottom-0 left-0',
                'ver-4' => 'absolute bottom-0 right-0',
            ][$variant] ?? '';
        @endphp
        <div class="{{ $containerClasses }}" style="margin-bottom: 30px">
            {{-- Background Box --}}
            <div class="{{ $bgBoxClasses }} {{ $boxSizeClass }}" style="background-color: #0ABAB5;"></div>

            {{-- Foreground Box with Image --}}
            <div class="{{ $fgBoxClasses }} {{ $boxSizeClass }} flex items-center justify-center text-gray-500 text-sm" style="background-color: #FFF; border: 0.36px solid #056360;">
                <img src="{{ $image['src'] ?? '' }}"
                     alt="{{ $image['alt'] ?? 'Placeholder Image' }}"
                     class="w-full h-full object-cover">
            </div>
        </div>
    @endif
</div>
