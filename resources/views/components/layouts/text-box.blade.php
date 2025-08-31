@php
    // Defines the alignment for the entire component container.
    $variantClasses = [
        'ver-1' => 'flex justify-center items-center w-full',
        'ver-2' => 'flex items-center justify-center w-full',
        'ver-3' => 'flex items-center justify-center w-full',
        'ver-4' => 'flex items-center justify-center w-full',
        'ver-5' => 'flex items-center justify-center w-full',
    ];
    $boxSizeClass = 'w-[97%] h-[97%]';
@endphp

{{--
    This component creates a stylized text box with a background and foreground element.
    It supports 5 different variants.

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

<div class="{{ $variantClasses[$variant] ?? $variantClasses['ver-1'] }} px-4 py-8">
    @if ($variant === 'ver-1')
        <div class="relative w-full max-w-5xl p-2 min-h-[360px] lg:h-[260px] flex items-center justify-center">
            <div class="absolute inset-x-0 bottom-2 h-full rounded-3xl lg:rounded-[60px] border-4" style="border-color: #0ABAB5;"></div>
            <div class="absolute inset-x-0 top-2 h-full flex items-center justify-center rounded-3xl lg:rounded-[60px] border-4 p-6 md:p-10" style="border-color: #056360;">
                <div class="font-poppins text-center font-light text-xl md:text-2xl leading-8" style="color: #056360;">
                    {{ $slot }}
                </div>
            </div>
        </div>
    @elseif ($variant === 'ver-4' || $variant === 'ver-5')
        @php
            $boxStyle = $variant === 'ver-4'
                ? 'background-color: #0ABAB5;'
                : 'border-color: #0ABAB5; background-color: #FFF;';
            $textStyle = $variant === 'ver-4'
                ? 'color: #FFF;'
                : 'color: #056360;';
        @endphp
        <div class="relative w-full max-w-sm lg:w-[345px] lg:h-[305px]">
            <div class="flex items-center justify-center rounded-3xl lg:rounded-[60px] p-8 md:p-10 min-h-[250px] w-full h-full @if($variant === 'ver-5') border-4 @endif" style="{{ $boxStyle }}">
                <div class="font-poppins text-center font-light text-xl md:text-2xl leading-8" style="{{ $textStyle }}">
                    {{ $slot }}
                </div>
            </div>
        </div>
    @else
        @php
            $fgBoxClasses = [
                'ver-2' => 'absolute top-2 right-2 w-full h-full',
                'ver-3' => 'absolute top-2 left-2 w-full h-full',
            ][$variant];

            $bgBoxClasses = [
                'ver-2' => 'absolute bottom-2 left-2 w-full h-full',
                'ver-3' => 'absolute bottom-2 right-2 w-full h-full',
            ][$variant];
        @endphp
        <div class="relative w-full max-w-4xl lg:w-[1042px] lg:h-[259px] min-h-[360px] p-2">
            <div class="{{ $bgBoxClasses }} rounded-3xl lg:rounded-[60px] border-4" style="border-color: #0ABAB5;"></div>
            <div class="{{ $fgBoxClasses }} flex items-center justify-center rounded-3xl lg:rounded-[60px] border-4 p-6 md:p-8" style="border-color: #056360;">
                <div class="font-poppins text-center font-light text-xl md:text-2xl leading-8" style="color: #056360;">
                    {{ $slot }}
                </div>
            </div>
        </div>
    @endif
</div>
