@php
    // Define the team member data, including a description for the text box.
    $members = [
        [
            'image' => '/images/Doc-Almar.jpg',
            'name' => 'ALMAR NUÑEZ',
            'title' => 'President & Medical Director',
            'description' => 'Description'
        ],
        [
            'image' => 'https://placehold.co/800x1000/dcfce7/16a34a?text=J.Smith',
            'name' => 'Jane Smith',
            'title' => 'Lead Developer',
            'description' => 'Jane leads our development team with expertise and innovation, turning complex project requirements into elegant, functional code.'
        ],
        [
            'image' => 'https://placehold.co/800x1000/fef9c3/f59e0b?text=S.Lee',
            'name' => 'Sam Lee',
            'title' => 'UX/UI Designer',
            'description' => 'Sam is the creative force behind our user-centric designs, crafting intuitive and beautiful interfaces that delight our users.'
        ],
        [
            'image' => 'https://placehold.co/800x1000/fee2e2/dc2626?text=A.Wang',
            'name' => 'Alex Wang',
            'title' => 'Project Manager',
            'description' => 'Alex masterfully steers our projects from conception to completion, ensuring we meet deadlines and exceed expectations.'
        ]
    ];
@endphp

{{--
    This component requires Alpine.js to be installed in your project.
    It displays an image slider synchronized with a descriptive text box.
--}}

@if(!empty($members))
<div
    x-data="{
        members: {{ Illuminate\Support\Js::from($members) }},
        currentIndex: 0
    }"
    class="flex flex-col items-center justify-center w-full py-10 font-poppins"
>
    {{-- Main container with the original, wider gap --}}
    <div class="flex flex-col lg:flex-row items-center justify-center gap-12">

        {{-- Image Slider (on the left) --}}
        <div class="flex flex-col items-center order-1">
            <div class="relative w-[400px] h-[605px]">
                <div class="absolute top-0 left-0 w-[386.25px] h-[590.313px] bg-[#0ABAB5] shadow-md"></div>
                <div class="absolute bottom-0 right-0 flex items-center justify-center w-[386.25px] h-[590.313px] border-[0.938px] border-[#056360] bg-white overflow-hidden shadow-lg">
                    <img
                        :key="currentIndex"
                        :src="members[currentIndex].image"
                        :alt="members[currentIndex].name"
                        class="object-cover w-full h-full"
                        x-transition:opacity.duration.300ms
                        onerror="this.onerror=null;this.src='https://placehold.co/800x1000/fecaca/991b1b?text=Image+Not+Found';"
                    >
                </div>
                <div class="absolute bottom-0 right-0 flex flex-col items-center justify-center w-[386.25px] h-[105.938px] bg-[#0ABAB5]">
                    <h3
                        :key="currentIndex"
                        x-text="members[currentIndex].name"
                        class="pt-4 text-3xl font-bold text-center text-white capitalize leading-tight"
                        x-transition:opacity.duration.300ms
                    ></h3>
                    <p
                        :key="currentIndex"
                        x-text="members[currentIndex].title"
                        class="text-base font-normal text-center text-white opacity-90"style="padding-bottom: 5%;"
                        x-transition:opacity.duration.300ms
                    ></p>
                </div>
            </div>

            {{-- Navigation Buttons --}}
            <div class="flex items-center justify-center gap-4 mt-8">
                <button
                    @click="currentIndex = (currentIndex - 1 + members.length) % members.length"
                    class="flex items-center justify-center w-[52.5px] h-[52.5px] border-2 transition hover:text-[#FFF] hover:border-[#FFF] rounded-full" style="background-color: #0ABAB5;"
                    aria-label="Previous Member"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#FFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>
                </button>
                <button
                    @click="currentIndex = (currentIndex + 1) % members.length"
                    class="flex items-center justify-center w-[52.5px] h-[52.5px] border-2 transition hover:text-[#FFF] hover:border-[#FFF] rounded-full" style="background-color: #0ABAB5;"
                    aria-label="Next Member"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#FFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                </button>
            </div>
        </div>
        <div class="flex flex-col items-center order-2" style="padding-bottom: 5%;">
            <div class="relative w-[838px] h-[440px]">
                <div class="rounded-[2.5rem] border-4 flex items-center justify-center p-8 md:p-10" style="width: 99%; height: 99%; border-color: #0ABAB5;">
                    <p
                        :key="currentIndex"
                        x-text="members[currentIndex].description"
                        class="text-2xl font-light leading-8 text-center"
                        style="color: #056360;"
                        x-transition:opacity.duration.300ms
                    ></p>
                </div>
            </div>
        </div>
    </div>
</div>
@else
    <p>No team members to display.</p>
@endif
