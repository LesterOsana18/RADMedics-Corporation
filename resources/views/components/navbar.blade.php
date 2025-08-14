<nav class="bg-white shadow-lg fixed w-full z-20 font-sans">
    <div class="max-w-7xl mx-auto px-2 flex items-center justify-between h-32">
        <!-- Logo + Company Name + Tagline -->
        <div class="flex items-center space-x-6 -mx-20">
            <!-- Logo -->
            <img src="/images/radmedics-logo.png"
                alt="RADMedics Logo"
                class="w-14 h-14 sm:w-16 sm:h-16 lg:w-20 lg:h-20 rounded-full shadow"/>
            <!-- Company Name (stacked) -->
            <div class="flex flex-col leading-none items-center lg:items-start">
                <span class="text-lg sm:text-xl lg:text-2xl font-bold text-cyan tracking-wide -mb-1 shadow-xs"
                    style="letter-spacing:0.18em;">RADMEDICS</span>
                <span class="text-lg sm:text-xl lg:text-2xl font-bold text-cyan -mt-1">CORPORATION</span>
            </div>
            <!-- Tagline Pill -->
            <div class="bg-dark-teal rounded-xl px-2 py-1 sm:px-3 sm:py-2 text-white italic text-xs sm:text-xs lg:text-xs font-sans w-fit text-center shadow
                        hidden sm:block">
                Response Advocates for Development of Medics
            </div>
        </div>
        <!-- Desktop Navigation -->
        <div class="hidden lg:flex items-center space-x-8 -mx-20">
            @foreach([
                ['url' => url('/about'), 'label' => 'ABOUT US'],
                ['url' => '#courses', 'label' => 'COURSES'],
                ['url' => '#updates', 'label' => 'UPDATES'],
                ['url' => '#contact', 'label' => 'CONTACT'],
            ] as $item)
                <a href="{{ $item['url'] }}" class="px-2 font-bold text-lg relative group flex items-center nav-link">
                    <span class="text-cyan transition-all duration-200 group-hover:text-dark-teal group-hover:scale-110">{{ $item['label'] }}</span>
                </a>
            @endforeach
            <a href="#login" class="bg-dark-teal rounded-xl px-6 py-2 font-bold text-lg text-white flex items-center transform transition-all duration-200 hover:bg-cyan hover:scale-110">
                LOGIN
            </a>
        </div>
        <!-- Mobile Hamburger -->
        <button id="menu-toggle" aria-controls="mobile-menu" aria-expanded="false" class="lg:hidden focus:outline-none">
            <span class="sr-only">Toggle menu</span>
            <svg id="icon-open" class="w-8 h-8 text-dark-teal" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            <svg id="icon-close" class="w-8 h-8 text-dark-teal hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>
    <!-- Mobile Menu -->
    <div id="mobile-menu"
        class="fixed inset-0 bg-dark-teal bg-opacity-95 transform -translate-x-full
                transition-transform duration-300 ease-in-out lg:hidden z-50">
        <button id="menu-close" aria-label="Close menu"
            class="absolute top-4 right-4 focus:outline-none">
            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round"
                    stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
        <div class="mt-20 px-6 space-y-6">
            @foreach([
                ['url' => '#about', 'label' => 'ABOUT US'],
                ['url' => '#courses', 'label' => 'COURSES'],
                ['url' => '#updates', 'label' => 'UPDATES'],
                ['url' => '#contact', 'label' => 'CONTACT'],
                ['url' => '#login', 'label' => 'LOGIN'],
            ] as $item)
                <a href="{{ $item['url'] }}" class="block font-bold text-lg text-white transition-colors duration-200 hover:text-cyan">
                    {{ $item['label'] }}
                </a>
            @endforeach
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const toggle = document.getElementById('menu-toggle');
            const menu = document.getElementById('mobile-menu');
            const openIcon = document.getElementById('icon-open');
            const closeIcon = document.getElementById('icon-close');
            const closeBtn = document.getElementById('menu-close');
            function toggleMenu() {
                const expanded = toggle.getAttribute('aria-expanded') === 'true';
                toggle.setAttribute('aria-expanded', !expanded);
                menu.classList.toggle('translate-x-0');
                openIcon.classList.toggle('hidden');
                closeIcon.classList.toggle('hidden');
            }
            toggle.addEventListener('click', toggleMenu);
            closeBtn.addEventListener('click', toggleMenu);
        });
    </script>
</nav>
