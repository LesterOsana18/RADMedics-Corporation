<x-layout navbarVariant="transparent-white">
    <div class="relative overflow-hidden min-h-screen w-full flex items-center justify-center">
    <img src="/images/landing-page-bg.jpg" alt="Landing Page Background" class="absolute object-cover inset-0 w-full h-full min-h-screen"/>

    <div class="absolute inset-0 w-full h-full min-h-screen bg-black/40 backdrop-blur-[9px] z-10"></div>

    <div class="relative text-center z-10 w-full px-4 sm:px-0">
            <span id="hero-badge" class="bg-dark-teal text-white text-xl sm:text-2xl px-6 sm:px-12 py-2 rounded-full font-bold opacity-0 translate-y-2 transition-all duration-700 ease-out">
                RADMedics Corporation
            </span>
            <h1 id="hero-title" class="mt-6 sm:mt-10 text-4xl sm:text-6xl md:text-8xl font-semibold text-white leading-tight opacity-0 translate-y-4 transition-all duration-700 ease-out">
                Response Advocates <br>
                for Development of Medics
            </h1>
            <p id="hero-text" class="mt-6 sm:mt-10 text-white text-base sm:text-xl tracking-widest mx-2 sm:mx-5 opacity-0 translate-y-4 transition-all duration-700 ease-out">
                An initiative dedicated to empowering and advancing healthcare professionals through technology, training, and innovation.
            </p>
            <div class="mt-5 sm:mt-13 flex justify-center w-full">
                <span id="hero-btn-wrapper" class="inline-block opacity-0 translate-y-4 transition-all duration-700 ease-out">
                    <x-layouts.button
                        type="outline-round"
                        color="tiffany-blue"
                        size="md"
                        text="Learn More"
                        href="{{ route('about') }}"
                        class="px-8 sm:px-12 min-w-[140px] sm:min-w-[180px]"
                    />
                </span>
            </div>
        </div>
    </div>
    <!-- Hide Navbar on Scroll -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const navbar = document.getElementById('site-nav');

            // Hide / show navbar on scroll (existing behavior)
            function onScroll() {
                if (window.scrollY === 0) {
                    navbar?.classList.remove('opacity-0', '-translate-y-full', 'pointer-events-none');
                } else {
                    navbar?.classList.add('opacity-0', '-translate-y-full', 'pointer-events-none');
                }
            }
            window.addEventListener('scroll', onScroll);
            onScroll();

            const seq = [
                { el: document.getElementById('hero-badge'), delay: 50 },
                { el: document.getElementById('hero-title'), delay: 300 },
                { el: document.getElementById('hero-text'), delay: 600 },
                { el: document.getElementById('hero-btn-wrapper'), delay: 900 }
            ];

            seq.forEach(item => {
                if (!item.el) return;
                setTimeout(() => {
                    item.el.classList.remove('opacity-0', 'translate-y-4', 'translate-y-2');
                    item.el.classList.add('opacity-100', 'translate-y-0');
                }, item.delay);
            });

            // Fallback: force show after 2s if still hidden
            setTimeout(() => {
                const btnWrap = document.getElementById('hero-btn-wrapper');
                if (btnWrap && btnWrap.classList.contains('opacity-0')) {
                    btnWrap.classList.remove('opacity-0', 'translate-y-4');
                    btnWrap.classList.add('opacity-100', 'translate-y-0');
                }
            }, 2000);
        });
    </script>
</x-layout>

