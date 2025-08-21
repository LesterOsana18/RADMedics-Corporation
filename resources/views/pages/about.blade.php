<x-layout>
@php
    $galleryImages = [
        ['src' => 'images/gallery/image1.jpg', 'alt' => 'A forest path'],
        ['src' => 'images/gallery/image2.jpg', 'alt' => 'A misty mountain range']
    ];
        $portraitImage = [
        ['src' => 'images/gallery/image1.jpg', 'alt' => 'A forest path']
    ];
@endphp

<style>
    .page-title {
        color: #0ABAB5;
        text-align: center;
        font-family: Poppins, sans-serif;
        font-size: 64px;
        font-style: normal;
        font-weight: 600;
        line-height: 50px;
        text-transform: uppercase;
        width: 100%;
        display: block;
    }
</style>

<div style="padding-top: 10%;">
    <div style="align-items: center;  padding-bottom: 15%;">
        <div style="width: 537.602px; height: 86px; margin: 0 auto; flex-direction: column; justify-content: center; flex-shrink: 0;">
            <span class="page-title">
                ABOUT US
            </span>
        </div>
            <x-layouts.image-box variant="ver-1" :images="$galleryImages"/>

            <x-layouts.text-box variant="ver-1">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
            </x-layouts.text-box>
    </div>
    <div class="flex items-center" style="padding-bottom: 15%;">
        <div class="w-1/2 pr-8">
            <x-layouts.image-box variant="ver-2" :image="$portraitImage"/>
        </div>
        <div class="w-1/2">
            <div class="mb-4">
                <span class="page-title">
                    WHAT WE DO
                </span>
            </div>
            <div>
                <x-layouts.text-box variant="ver-2">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                </x-layouts.text-box>
            </div>
        </div>
    </div>
    <div class="flex items-center" style="padding-bottom: 15%;">
        <div class="w-1/2 pr-8">
            <div class="mb-4">
                <span class="page-title">
                    OUR MISSION
                </span>
            </div>
            <div>
                <x-layouts.text-box variant="ver-3">
                    To empower and equip aspiring emergency medical professionals with comprehensive education and top-tier training in our emergency medical services program. Through strategic community partnerships and our unwavering commitment to promoting exceptional pre-hospital care, we aim to develop a cadre of highly skilled and compassionate healthcare providers.
                </x-layouts.text-box>
            </div>
        </div>
        <div class="w-1/2 pl-8">
            <x-layouts.image-box variant="ver-3" :image="$portraitImage"/>
        </div>
    </div>
    <div class="flex items-center" style="padding-bottom: 15%;">
        <div class="w-1/2 pr-8">
            <x-layouts.image-box variant="ver-4" :image="$portraitImage"/>
        </div>
        <div class="w-1/2">
            <div class="mb-4">
                <span class="page-title">
                    OUR VISION
                </span>
            </div>
            <div>
                <x-layouts.text-box variant="ver-2">
                    Be at the forefront of transforming pre-hospital care, setting new standards of excellence in both the local community and the nation. We strive to enhance the quality of emergency medical services, ensuring that every individual receives the best possible care in times of crisis.
                </x-layouts.text-box>
            </div>
        </div>
    </div>

    <div style="padding-bottom: 15%;">
        <span class="page-title">
            OUR CORE VALUES
        </span>
        <div class="grid grid-cols-3 gap-8 gap-y-20 mt-8 max-w-7xl mx-auto">
            <div class="flex flex-col items-center">
                <x-layouts.text-box variant="ver-4">
                    We uphold the highest ethical standards, ensuring integrity in all our actions and decisions.
                </x-layouts.text-box>
            </div>
            <div class="flex flex-col items-center">
                <x-layouts.text-box variant="ver-5">
                    We prioritize swift and efficient responses to emergency situations, minimizing response times to save lives.
                </x-layouts.text-box>
            </div>
            <div class="flex flex-col items-center">
                <x-layouts.text-box variant="ver-4">
                    We approach every emergency with the utmost professionalism, delivering care with empathy and expertise.
                </x-layouts.text-box>
            </div>
            <div class="flex flex-col items-center">
                <x-layouts.text-box variant="ver-5">
                    We continuously apply evidence-based practices, leveraging critical thinking to make informed medical decisions.
                </x-layouts.text-box>
            </div>
            <div class="flex flex-col items-center">
                <x-layouts.text-box variant="ver-4">
                    We foster a collaborative environment, where effective communication among our teams leads to seamless and coordinated care for patients.
                </x-layouts.text-box>
            </div>
            <div class="flex flex-col items-center">
                <x-layouts.text-box variant="ver-5">
                    We invest in the ongoing training and development of our prehospital care providers, ensuring they are highly skilled and competent in their life-saving roles.
                </x-layouts.text-box>
            </div>
        </div>
    </div>

    <div style="padding-bottom: 15%;">
        <span class="page-title">
            MEET THE TEAM
        </span>
        <div>
            <div class="flex mt-8 max-w-7xl mx-auto gap-8">
            <div class="w-1/2">
                <x-layouts.image-slider/>
            </div>
            <div class="w-1/2">
                <x-layouts.text-box variant="ver-6">

                </x-layouts.text-box>
            </div>
            </div>
        </div>
    </div>
</div>

</x-layout>
