<x-layout navbarVariant="transparent-white">
    <div class="relative overflow-hidden min-h-screen w-full flex items-center justify-center">
    <img src="/images/landing-page-bg.jpg" alt="Landing Page Background" class="absolute object-cover inset-0 w-full h-full min-h-screen"/>

    <div class="absolute inset-0 w-full h-full min-h-screen bg-black/40 backdrop-blur-[9px] z-10"></div>

    <div class="relative text-center z-10 w-full px-4 sm:px-0">
            <span class="bg-dark-teal text-white text-xl sm:text-2xl px-6 sm:px-12 py-2 rounded-full font-bold opacity-0 animate-fade-in">
                RADMedics Corporation
            </span>
            <h1 class="mt-6 sm:mt-10 text-4xl sm:text-6xl md:text-8xl font-semibold text-white leading-tight opacity-0 animate-slide-up">
                Response Advocates <br>
                for Development of Medics
            </h1>
            <p class="mt-6 sm:mt-10 text-white text-base sm:text-xl tracking-widest mx-2 sm:mx-5 opacity-0 animate-fade-in-delay">
                An initiative dedicated to empowering and advancing healthcare professionals through technology, training, and innovation.
            </p>
            <div class="mt-5 sm:mt-13 flex justify-center w-full">
                <x-layouts.button
                    type="outline-round"
                    color="tiffany-blue"
                    size="md"
                    text="Learn More"
                    href="{{ route('about') }}"
                        class="animate-slide-up-delay opacity-0 px-8 sm:px-12 min-w-[140px] sm:min-w-[180px]"
                />
            </div>
        </div>
    </div>
    <!-- Hide Navbar on Scroll -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const navbar = document.getElementById('site-nav');

            function onScroll() {
                if (window.scrollY === 0) {
                    // At the very top, show navbar
                    navbar.classList.remove('opacity-0', '-translate-y-full', 'pointer-events-none');
                } else {
                    // Hide navbar when not at top
                    navbar.classList.add('opacity-0', '-translate-y-full', 'pointer-events-none');
                }
            }

            window.addEventListener('scroll', onScroll);
            // Run once on page load
            onScroll();
        });
    </script>
</x-layout>

