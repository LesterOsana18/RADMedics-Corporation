@php
    // Defines the alignment for the entire component container.
    $variantClasses = [
        'ver-1' => 'flex justify-center items-center w-full',
        'ver-2' => 'flex items-center justify-center w-full',
        'ver-3' => 'flex items-center justify-center w-full flex-row-reverse',
        'ver-4' => 'flex items-center justify-center w-full',
        'ver-5' => 'flex items-center justify-center w-full',
        'ver-6' => 'flex items-center justify-center w-full',
    ];

    // The size of the foreground/background boxes relative to their container.
    // This creates the offset effect.
    $boxSizeClass = 'w-[97%] h-[97%]';
@endphp

{{--
    This component creates a stylized text box with a background and foreground element.
    It supports 6 different variants.

    HOW TO USE:
    Pass the content directly into the component's slot.

    <x-layouts.text-box variant="ver-1">
        Your content, like this paragraph, goes here. It will be placed inside the foreground box.
    </x-layouts.text-box>
--}}

@php
    // Sets a default variant if none is provided.
    $variant = $variant ?? 'ver-1';
@endphp

<div class="{{ $variantClasses[$variant] ?? $variantClasses['ver-1'] }}">
    @if ($variant === 'ver-1')
        <div class="relative w-full max-w-5xl aspect-[1245/264] p-2">
            {{-- Background Box --}}
            <div class="absolute bottom-3 {{ $boxSizeClass }} rounded-[60px] border-[4px]" style="border-color: #0ABAB5;"></div>

            {{-- Foreground Box with Text --}}
            <div class="absolute top-3 {{ $boxSizeClass }} flex items-center justify-center rounded-[60px] border-[4px] p-6 md:p-10" style="border-color: #056360;">
                <div class="font-poppins text-center font-light text-2xl leading-8"
                    style="color: #056360; text-align: center; font-family: Poppins; font-size: 24px; font-style: normal; font-weight: 300; line-height: 32px;">
                    {{ $slot }}
                </div>
            </div>
        </div>
@elseif ($variant === 'ver-4')
    <div class="relative w-full max-w-3xl aspect-video p-2">
        {{-- Foreground Box with Text --}}
        <div class="absolute top-3 flex items-center justify-center rounded-2xl" style="background-color: #0ABAB5; width: 345px; height: 305px;">
            <div class="font-poppins text-center font-light text-2xl leading-8" style="color: #FFF; text-align: center; font-family: Poppins; font-size: 24px; font-style: normal; font-weight: 300; line-height: 32px;">
                {{ $slot }}
            </div>
        </div>
    </div>
@elseif ($variant === 'ver-5')
    <div class="relative w-full max-w-3xl aspect-video p-2">
        {{-- Foreground Box with Text --}}
        <div class="absolute top-3 flex items-center justify-center rounded-2xl border-[4px] p-6 md:p-8" style="border-color: #0ABAB5; background-color: #FFF; width: 345px; height: 305px;">
            <div class="font-poppins text-center font-light text-2xl leading-8" style="color: #056360; text-align: center; font-family: Poppins; font-size: 24px; font-style: normal; font-weight: 300; line-height: 32px;">
                {{ $slot }}
            </div>
        </div>
    </div>
@elseif ($variant === 'ver-6')
    <div class="relative w-full max-w-3xl aspect-video p-2">
        {{-- Foreground Box with Text --}}
        <div class="absolute top-3 flex items-center justify-center rounded-2xl border-[4px] p-6 md:p-8" style="border-color: #0ABAB5; width: 838.125px; height: 439.688px;">
            <div class="font-poppins text-center font-light text-2xl leading-8" style="color: #056360;">
            {{ $slot }}
            </div>
        </div>
    </div>
@else
    {{-- Variants 2-3: Now styled with two borders and a transparent background. --}}
    @php
        // Defines the shape and size of the container for each variant.
        $containerClasses = [
            'ver-2' => 'relative w-[727.984px] h-[283px]', // Custom fixed size
            'ver-3' => 'relative w-[942px] h-[259px]',      // Custom fixed size
        ][$variant];

        // Defines the position of the background box.
        $bgBoxClasses = [
            'ver-2' => 'absolute top-0 left-0',
            'ver-3' => 'absolute top-0 left-0',
        ][$variant];

        // Defines the position of the foreground box.
        $fgBoxClasses = [
            'ver-2' => 'absolute bottom-0 right-0',
            'ver-3' => 'absolute bottom-0 right-0',
        ][$variant];

        $bgBoxStyle = '';
        $fgBoxStyle = 'border-color: #056360;';
        $bgBoxRadius = 'rounded-2xl';
        $fgBoxRadius = 'rounded-2xl';

        if ($variant === 'ver-2') {
            $bgBoxStyle = 'border-color: #0ABAB5; width: 727.984px; height: 283px;';
            $fgBoxStyle .= ' width: 727.984px; height: 283px;';
        } elseif ($variant === 'ver-3') {
            $bgBoxStyle = 'border-color: #0ABAB5;';
            $bgBoxRadius = 'rounded-[60px]';
            $fgBoxRadius = 'rounded-[60px]';
        }
        @endphp

        <div class="{{ $containerClasses }}">
        {{-- Background Box (Now a border) --}}
        <div class="{{ $bgBoxClasses }} {{ $boxSizeClass }} {{ $bgBoxRadius }} border-[4px] p-6 md:p-8" style="{{ $bgBoxStyle }}"></div>

        {{-- Foreground Box with Text (Thicker border) --}}
        <div class="{{ $fgBoxClasses }} {{ $boxSizeClass }} flex items-center justify-center {{ $fgBoxRadius }} border-[4px] p-6 md:p-8" style="{{ $fgBoxStyle }}">
            <div class="font-poppins text-center font-light text-2xl leading-8" style="color: #056360;">
            {{ $slot }}
            </div>
        </div>
        </div>
    @endif
    </div>
