<x-layout navbarVariant="transparent-white">
    <div class="relative overflow-hidden">
        <!-- <video autoplay muted loop class="absolute inset-0 object-cover z-0">
            <source src="/images/v4.mp4" type="video/mp4" >
        </video> -->
        <img src="/images/landing-page-bg.jpg" alt="Landing Page Background" class="absolute object-cover inset-0 w-full h-full"/>

        <div class="absolute inset-0 bg-black/40 backdrop-blur-[9px] z-10"></div>

        <div class="relative pt-32 pb-6 md:pt-44 md:pb-32 text-center z-10">
            <span class="bg-dark-teal text-white text-2xl px-12 py-2 rounded-full font-bold opacity-0 animate-fade-in">
                RADMedics Corporation
            </span>
            <h1 class="mt-10 text-6xl md:text-8xl font-semibold text-white opacity-0 animate-slide-up">
                Response Advocates <br>
                for Development of Medics
            </h1>
            <p class="mt-10 text-white text-xl tracking-widest mx-5 opacity-0 animate-fade-in-delay">
                An initiative dedicated to empowering and advancing healthcare professionals through technology, training, and innovation.
            </p>
            <a href="{{ route('about') }}" class="mt-10 px-6 py-2 bg-none text-white border-2 border-white hover:bg-cyan hover:text-white hover:border-cyan rounded-full font-semibold inline-flex items-center space-x-2 transition duration-200 hover:scale-105 opacity-0 animate-slide-up-delay">
                <span>Learn More</span>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                </svg>
            </a>
        </div>
    </div>
</x-layout>
