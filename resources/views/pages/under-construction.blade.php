<x-layout>
    <div class="relative w-full h-screen overflow-hidden">
        <!-- Background Image -->
        <img src="/images/ems-placeholder.jpg"
            alt="Emergency Medics"
            class="absolute inset-0 w-full h-full object-cover z-0"/>

        <!-- Glass overlay -->
        <div class="absolute inset-0 bg-white/10 backdrop-blur-xl z-10"></div>

        <!-- Centered Under Construction Card -->
        <div class="relative z-10 flex items-center justify-center w-full h-full">
            <div class="bg-white/80 rounded-lg shadow-lg p-16 text-center backdrop-blur-md transition-all duration-300 ease-in-out hover:scale-110 hover:shadow-2xl">
                <h1 class="text-4xl font-bold text-black mb-4">🚧 Under Construction... 🚧</h1>
                <p class="text-xl text-dark-teal mb-2">This feature is coming soon!</p>
                <p class="text-md text-gray-500">Please check back later.</p>
            </div>
        </div>
    </div>
</x-layout>
