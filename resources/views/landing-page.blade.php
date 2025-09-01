<x-layout navbarVariant="transparent">
    <div class="pt-32 pb-6 md:pt-44 md:pb-32 text-center">
        <span class="bg-dark-teal text-white text-2xl px-12 py-2 rounded-full font-bold">
            RADMedics Corporation
        </span>
        <h1 class="mt-10 text-6xl md:text-8xl font-semibold text-cyan">
            Response Advocates <br>
            for Development of Medics
        </h1>
        <p class="mt-10 text-dark-teal text-xl tracking-widest mx-5">
            An initiative dedicated to empowering and advancing healthcare professionals through technology, training, and innovation.
        </p>
        <a href="{{ route('about') }}" class="mt-10 px-6 py-2 bg-white text-dark-teal border-2 border-dark-teal hover:bg-cyan hover:text-white hover:border-cyan rounded-full font-semibold inline-flex items-center space-x-2 transition duration-200 hover:scale-105">
            <span>Learn More</span>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
            </svg>
        </a>
    </div>
</x-layout>
