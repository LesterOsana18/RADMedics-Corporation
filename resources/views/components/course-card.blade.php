@props([
    'title',
    'description',
    'imageUrl',
    'instructor' => 'Instructor',
    'price' => null,
])

<div class="course-card h-full flex flex-col opacity-0 translate-y-4 transition-all duration-700 ease-out bg-white rounded-lg shadow-md hover:shadow-xl overflow-hidden">
    <img src="{{ $imageUrl }}" alt="{{ $title }}" class="w-full h-48 object-cover">

    <div class="p-6 flex flex-col flex-grow">
        <h2 class="text-xl font-semibold text-gray-800 mb-2">{{ $title }}</h2>
        <p class="text-gray-600 text-sm mb-4 flex-grow">{{ $description }}</p>

        <div class="flex justify-between items-center text-sm text-gray-500 mb-4">
            <span>👨‍🏫 {{ $instructor }}</span>
            @if ($price)
                <span class="text-green-600 font-bold">{{ $price }}</span>
            @endif
        </div>

        <a href="/contact" class="block text-center bg-teal-500 hover:bg-teal-600 text-white font-semibold py-2 px-4 rounded transition duration-200">
            Enroll Now
        </a>
    </div>
</div>
