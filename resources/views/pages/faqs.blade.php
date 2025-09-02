<x-layout>
    <div class="relative min-h-screen bg-white pt-10 overflow-x-hidden"> {{-- Prevent horizontal scroll --}}
        <div class="absolute inset-0 pointer-events-none">
            <div class="absolute -top-24 -left-24 w-[32rem] h-[32rem] rounded-full bg-[#0ABAB5]/5 blur-3xl"></div>
            {{-- Pull the right circle inside the viewport to avoid overflow --}}
            <div class="absolute top-1/2 right-0 translate-x-1/4 w-[38rem] h-[38rem] rounded-full bg-[#0ABAB5]/5 blur-3xl pointer-events-none"></div>
        </div>

        <header class="relative">
            <div class="max-w-7xl mx-auto px-6 pt-28 pb-14">
                <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between gap-8">
                    <div class="space-y-4">
                        <nav aria-label="Breadcrumb" class="text-xs font-medium tracking-wide text-black/60">
                            <ol class="flex flex-wrap items-center gap-1">
                                <li><a href="{{ url('/') }}" class="hover:text-black transition">Home</a></li>
                                <li class="text-black/30 px-1">/</li>
                                <li class="text-[#056360] font-semibold">FAQs</li>
                            </ol>
                        </nav>
                        <h1 class="text-4xl sm:text-5xl font-extrabold tracking-tight text-[#056360]">
                            Frequently Asked Questions
                        </h1>
                        <p class="inline-flex items-center gap-2 text-sm font-semibold text-[#056360]">
                            <span class="h-2.5 w-2.5 rounded-full bg-[#056360] animate-pulse shadow shadow-[#056360]/40"></span>
                            Last updated: September 2, 2025
                        </p>
                    </div>
                    <div>
                        <x-layouts.button href="landing-page" type="outline" color="tiffany-blue" size="md" text="Back to Home" />
                    </div>
                </div>
            </div>
        </header>

        <main class="relative max-w-7xl mx-auto px-6 pb-32">
            <div class="grid lg:grid-cols-[250px_1fr] gap-12">
                <aside class="lg:sticky lg:top-28 h-max hidden lg:block">
                    <div class="rounded-2xl border border-[#0ABAB5]/20 bg-white/70 backdrop-blur px-5 py-6">
                        <h2 class="text-sm font-bold uppercase tracking-wider text-[#056360] mb-4">On this page</h2>
                        <nav class="space-y-3 text-sm">
                            <ul class="space-y-2">
                                <li><a href="#question-1" class="toc-link block hover:text-[#056360] text-black/70">Question 1</a></li>
                                <li><a href="#question-2" class="toc-link block hover:text-[#056360] text-black/70">Question 2</a></li>
                                <li><a href="#question-3" class="toc-link block hover:text-[#056360] text-black/70">Question 3</a></li>
                                <li><a href="#question-4" class="toc-link block hover:text-[#056360] text-black/70">Question 4</a></li>
                                <li><a href="#question-5" class="toc-link block hover:text-[#056360] text-black/70">Question 5</a></li>
                            </ul>
                        </nav>
                    </div>
                </aside>

                <article class="space-y-16 [&_h2]:text-[#056360] [&_strong]:text-[#056360]">
                    <section id="question-1" class="scroll-mt-32">
                        <div class="space-y-6">
                            <div class="flex items-center gap-3">
                                <span class="h-9 w-9 flex items-center justify-center rounded-xl bg-[#056360]/10 text-[#056360] font-bold text-sm">01</span>
                                <h2 class="text-2xl font-bold">Question 1</h2>
                            </div>
                            <p class="leading-relaxed text-black/80">Answer coming soon.</p>
                        </div>
                    </section>

                    <section id="question-2" class="scroll-mt-32">
                        <div class="space-y-6">
                            <div class="flex items-center gap-3">
                                <span class="h-9 w-9 flex items-center justify-center rounded-xl bg-[#056360]/10 text-[#056360] font-bold text-sm">02</span>
                                <h2 class="text-2xl font-bold">Question 2</h2>
                            </div>
                            <p class="leading-relaxed text-black/80">Answer coming soon.</p>
                        </div>
                    </section>

                    <section id="question-3" class="scroll-mt-32">
                        <div class="space-y-6">
                            <div class="flex items-center gap-3">
                                <span class="h-9 w-9 flex items-center justify-center rounded-xl bg-[#056360]/10 text-[#056360] font-bold text-sm">03</span>
                                <h2 class="text-2xl font-bold">Question 3</h2>
                            </div>
                            <p class="leading-relaxed text-black/80">Answer coming soon.</p>
                        </div>
                    </section>

                    <section id="question-4" class="scroll-mt-32">
                        <div class="space-y-6">
                            <div class="flex items-center gap-3">
                                <span class="h-9 w-9 flex items-center justify-center rounded-xl bg-[#056360]/10 text-[#056360] font-bold text-sm">04</span>
                                <h2 class="text-2xl font-bold">Question 4</h2>
                            </div>
                            <p class="leading-relaxed text-black/80">Answer coming soon.</p>
                        </div>
                    </section>

                    <section id="question-5" class="scroll-mt-32">
                        <div class="space-y-6">
                            <div class="flex items-center gap-3">
                                <span class="h-9 w-9 flex items-center justify-center rounded-xl bg-[#056360]/10 text-[#056360] font-bold text-sm">05</span>
                                <h2 class="text-2xl font-bold">Question 5</h2>
                            </div>
                            <p class="leading-relaxed text-black/80">Answer coming soon.</p>
                        </div>
                    </section>
                </article>
            </div>
        </main>
    </div>

    <script>
        window.addEventListener('load', () => { if (window.scrollX !== 0) window.scrollTo({left: 0}); });
        document.addEventListener('scroll', () => {
            const headings = document.querySelectorAll('section[id]');
            let activeId = '';
            const offset = 140;
            headings.forEach(h => {
                const top = h.getBoundingClientRect().top;
                if (top - offset < 0) activeId = h.id;
            });
            document.querySelectorAll('.toc-link').forEach(a => {
                const active = a.getAttribute('href') === '#' + activeId;
                a.classList.toggle('font-semibold', active);
                a.classList.toggle('text-[#056360]', active);
            });
        });
    </script>
</x-layout>
