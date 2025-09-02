@php
    $variantClasses = [
        'ver-1' => 'flex flex-wrap justify-center gap-8',
        'ver-2' => 'flex items-center justify-center w-full',
        'ver-3' => 'flex items-center justify-center w-full',
        'ver-4' => 'flex items-center justify-center w-full',
    ];
    $boxSizeClass = 'w-[97%] h-[97%]';
    $centerBoxSizeClass = 'w-[117%] h-[97%]';
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
<div class="{{ $variantClasses[$variant] ?? $variantClasses['ver-1'] }} px-4">
    @if($variant === 'ver-1') {{-- Two Center Photobox --}}
        @foreach($images ?? [] as $image)
            <div class="relative w-full md:w-1/2 max-w-lg aspect-video">
                {{-- Background Box (Offset) --}}
                <div class="absolute bottom-2 w-full h-full" style="background-color: #0ABAB5;"></div>
                {{-- Foreground Box with Image --}}
                <div class="absolute top-2 w-full h-full flex items-center justify-center text-gray-500 text-sm bg-white border border-[#056360]">
                    <img src="{{ $image['src'] ?? 'https://placehold.co/1280x720/e2e8f0/475569?text=Placeholder' }}"
                        alt="{{ $image['alt'] ?? 'Placeholder Image' }}"
                        class="w-full h-full object-cover">
                </div>
            </div>
        @endforeach
    @else
        @php
            $containerClasses = [
                'ver-2' => 'relative w-full md:max-w-3xl aspect-video',
                'ver-3' => 'relative w-full md:max-w-lg aspect-[4/5]',
                'ver-4' => 'relative w-full md:max-w-md aspect-[4/5]',
            ][$variant] ?? '';

            $fgBoxClasses = [
                'ver-2' => 'absolute top-2 md:left-2 w-full h-full',
                'ver-3' => 'absolute top-2 md:right-2 w-full h-full',
                'ver-4' => 'absolute top-2 md:left-2 w-full h-full',
            ][$variant] ?? '';

            $bgBoxClasses = [
                'ver-2' => 'absolute bottom-2 md:right-2 w-full h-full',
                'ver-3' => 'absolute bottom-2 md:left-2 w-full h-full',
                'ver-4' => 'absolute bottom-2 md:right-2 w-full h-full',
            ][$variant] ?? '';
        @endphp
        <div class="{{ $containerClasses }}">
            {{-- Background Box --}}
            <div class="{{ $bgBoxClasses }}" style="background-color: #0ABAB5;"></div>
            {{-- Foreground Box with Image --}}
            <div class="{{ $fgBoxClasses }} flex items-center justify-center text-gray-500 text-sm bg-white border border-[#056360]">
            <img src="{{ $image['src'] ?? 'https://placehold.co/800x1000/e2e8f0/475569?text=Placeholder' }}"
                alt="{{ $image['alt'] ?? 'Placeholder Image' }}"
                class="w-full h-full object-cover">
            </div>
        </div>
    @endif
</div>
