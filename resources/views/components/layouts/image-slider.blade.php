@php
    // Define the team member data directly inside the component
    $members = [
        [
            'image' => 'https://placehold.co/800x1000/e0f2fe/0891b2?text=J.Doe',
            'name' => 'John Doe',
            'title' => 'Operational Manager'
        ],
        [
            'image' => 'https://placehold.co/800x1000/dcfce7/16a34a?text=J.Smith',
            'name' => 'Jane Smith',
            'title' => 'Lead Developer'
        ],
        [
            'image' => 'https://placehold.co/800x1000/fef9c3/f59e0b?text=S.Lee',
            'name' => 'Sam Lee',
            'title' => 'UX/UI Designer'
        ],
        [
            'image' => 'https://placehold.co/800x1000/fee2e2/dc2626?text=A.Wang',
            'name' => 'Alex Wang',
            'title' => 'Project Manager'
        ]
    ];
@endphp

{{--
    This component requires Alpine.js to be installed in your project.
    You can add it via a script tag in your main layout file:
    <script src="//unpkg.com/alpinejs" defer></script>
--}}

@if(!empty($members))
<div
    x-data="{
        members: {{ Illuminate\Support\Js::from($members) }},
        currentIndex: 0
    }"
    class="flex flex-col items-center justify-center py-10 font-poppins"
>

    <div class="relative w-[400px] h-[505px]">

        <div class="absolute top-0 left-0 w-[386.25px] h-[490.313px] bg-[#0ABAB5] shadow-md"></div>

        <div class="absolute bottom-0 right-0 flex items-center justify-center w-[386.25px] h-[490.313px] border-[0.938px] border-[#056360] bg-white overflow-hidden shadow-lg">
            <img
                :key="currentIndex" {{-- Use key to re-trigger transition --}}
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
                class="text-base font-normal text-center text-white opacity-90"
                x-transition:opacity.duration.300ms
            ></p>
        </div>
    </div>

    <div class="flex items-center justify-center gap-4 mt-8">
        <button
            @click="currentIndex = (currentIndex - 1 + members.length) % members.length"
            class="flex items-center justify-center w-[52.5px] h-[52.5px] border-2 border-gray-300  text-gray-600 transition hover:text-[#0ABAB5] hover:border-[#0ABAB5]"
            aria-label="Previous Member"
        >
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>
        </button>
        <button
            @click="currentIndex = (currentIndex + 1) % members.length"
            class="flex items-center justify-center w-[52.5px] h-[52.5px] border-2 border-gray-300 text-gray-600 transition hover:text-[#0ABAB5] hover:border-[#0ABAB5]"
            aria-label="Next Member"
        >
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
        </button>
    </div>
</div>
@else
    <p>No team members to display.</p>
@endif
