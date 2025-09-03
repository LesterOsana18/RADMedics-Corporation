<x-layout>
    <div class="relative min-h-screen bg-white pt-10 overflow-x-hidden">
        <div class="absolute inset-0 pointer-events-none">
            <div class="absolute -top-24 -left-24 w-[32rem] h-[32rem] rounded-full bg-[#056360]/5 blur-3xl"></div>
            <div class="absolute top-1/2 right-0 translate-x-1/4 w-[38rem] h-[38rem] rounded-full bg-[#056360]/5 blur-3xl pointer-events-none"></div>
        </div>

        <!-- Header -->
        <header class="relative">
            <div class="max-w-7xl mx-auto px-6 pt-28 pb-14">
                <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between gap-8">
                    <div class="space-y-4">
                        <nav aria-label="Breadcrumb" class="text-xs font-medium tracking-wide text-black/60">
                            <ol class="flex flex-wrap items-center gap-1">
                                <li><a href="{{ url('/') }}" class="hover:text-black transition">Home</a></li>
                                <li class="text-black/30 px-1">/</li>
                                <li class="text-[#056360] font-semibold">Terms of Service</li>
                            </ol>
                        </nav>
                        <h1 class="text-4xl sm:text-5xl font-extrabold tracking-tight text-[#056360]">
                            Terms of Service
                        </h1>
                        <p class="inline-flex items-center gap-2 text-sm font-semibold text-[#056360]">
                            <span class="h-2.5 w-2.5 rounded-full bg-[#056360] animate-pulse shadow shadow-[#056360]/40"></span>
                            Last updated: September 03, 2025
                        </p>
                    </div>
                    <div>
                        <x-layouts.button href="{{ url('landing-page') }}" type="outline-round" color="tiffany-blue" size="md" text="Back to Home" />
                    </div>
                </div>
            </div>
        </header>

        <!-- Main -->
        <main class="relative max-w-7xl mx-auto px-6 pb-32">
            <div class="grid lg:grid-cols-[250px_1fr] gap-12">
                <!-- TOC -->
                <aside class="lg:sticky lg:top-28 h-max hidden lg:block">
                    <div class="rounded-2xl border border-[#056360]/20 bg-white/70 backdrop-blur px-5 py-6">
                        <h2 class="text-sm font-bold uppercase tracking-wider text-[#056360] mb-4">On this page</h2>
                        <nav class="space-y-3 text-sm">
                            <ul class="space-y-2">
                                <li><a href="#introduction" class="toc-link block hover:text-[#056360] text-black/70">1. Introduction</a></li>
                                <li><a href="#communications" class="toc-link block hover:text-[#056360] text-black/70">2. Communications</a></li>
                                <li><a href="#purchases" class="toc-link block hover:text-[#056360] text-black/70">3. Purchases</a></li>
                                <li><a href="#promotions" class="toc-link block hover:text-[#056360] text-black/70">4. Promotions</a></li>
                                <li><a href="#refunds" class="toc-link block hover:text-[#056360] text-black/70">5. Refunds</a></li>
                                <li><a href="#content" class="toc-link block hover:text-[#056360] text-black/70">6. Content</a></li>
                                <li><a href="#prohibited-uses" class="toc-link block hover:text-[#056360] text-black/70">7. Prohibited Uses</a></li>
                                <li><a href="#analytics" class="toc-link block hover:text-[#056360] text-black/70">8. Analytics</a></li>
                                <li><a href="#minors" class="toc-link block hover:text-[#056360] text-black/70">9. No Use By Minors</a></li>
                                <li><a href="#accounts" class="toc-link block hover:text-[#056360] text-black/70">10. Accounts</a></li>
                                <li><a href="#ip" class="toc-link block hover:text-[#056360] text-black/70">11. Intellectual Property</a></li>
                                <li><a href="#copyright-policy" class="toc-link block hover:text-[#056360] text-black/70">12. Copyright Policy</a></li>
                                <li><a href="#dmca" class="toc-link block hover:text-[#056360] text-black/70">13. DMCA</a></li>
                                <li><a href="#feedback" class="toc-link block hover:text-[#056360] text-black/70">14. Feedback</a></li>
                                <li><a href="#links" class="toc-link block hover:text-[#056360] text-black/70">15. Links</a></li>
                                <li><a href="#disclaimer" class="toc-link block hover:text-[#056360] text-black/70">16. Disclaimer</a></li>
                                <li><a href="#liability" class="toc-link block hover:text-[#056360] text-black/70">17. Liability</a></li>
                                <li><a href="#termination" class="toc-link block hover:text-[#056360] text-black/70">18. Termination</a></li>
                                <li><a href="#law" class="toc-link block hover:text-[#056360] text-black/70">19. Governing Law</a></li>
                                <li><a href="#changes-service" class="toc-link block hover:text-[#056360] text-black/70">20. Changes to Service</a></li>
                                <li><a href="#amendments" class="toc-link block hover:text-[#056360] text-black/70">21. Amendments</a></li>
                                <li><a href="#waiver" class="toc-link block hover:text-[#056360] text-black/70">22. Waiver & Severability</a></li>
                                <li><a href="#acknowledgement" class="toc-link block hover:text-[#056360] text-black/70">23. Acknowledgement</a></li>
                                <li><a href="#contact" class="toc-link block hover:text-[#056360] text-black/70">24. Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </aside>

                <!-- Content -->
                <article class="space-y-16 [&_h2]:text-[#056360] [&_h3]:text-[#056360] [&_strong]:text-[#056360] [&_a]:text-[#056360] [&_a:hover]:underline">

                    <!-- 1 Introduction -->
                    <section id="introduction" class="scroll-mt-32">
                        <div class="space-y-6">
                            <div class="flex items-center gap-3">
                                <span class="h-9 w-9 flex items-center justify-center rounded-xl bg-[#056360]/10 text-[#056360] font-bold text-sm">01</span>
                                <h2 class="text-2xl font-bold">Introduction</h2>
                            </div>
                            <div class="space-y-5 leading-relaxed text-black/80">
                                <p>Welcome to <strong>RADMedics Corporation</strong> (“Company”, “we”, “our”, “us”).</p>
                                <p>These Terms of Service (“Terms”, “Terms of Service”) govern your use of our website located at <strong>https://www.radmedicsph.com/</strong> (together or individually “Service”) operated by <strong>RADMedics Corporation</strong>.</p>
                                <p>Our Privacy Policy also governs your use of our Service and explains how we collect, safeguard and disclose information resulting from your use of our pages.</p>
                                <p>Your agreement with us includes these Terms and our Privacy Policy (“Agreements”). You acknowledge that you have read and understood Agreements, and agree to be bound by them.</p>
                                <p>If you do not agree (or cannot comply) with Agreements, you may not use the Service. Please contact us at <strong>info@radmedicsph.com</strong> so we can try to find a solution. These Terms apply to all visitors, users and others who wish to access or use Service.</p>
                            </div>
                        </div>
                    </section>

                    <!-- 2 Communications -->
                    <section id="communications" class="scroll-mt-32">
                        <div class="space-y-6">
                            <div class="flex items-center gap-3">
                                <span class="h-9 w-9 flex items-center justify-center rounded-xl bg-[#056360]/10 text-[#056360] font-bold text-sm">02</span>
                                <h2 class="text-2xl font-bold">Communications</h2>
                            </div>
                            <p class="leading-relaxed text-black/80">By using Service, you agree to subscribe to newsletters, marketing or promotional materials and other information we may send. You may opt out via unsubscribe links or by emailing <strong>info@radmedicsph.com</strong>.</p>
                        </div>
                    </section>

                    <!-- 3 Purchases -->
                    <section id="purchases" class="scroll-mt-32">
                        <div class="space-y-6">
                            <div class="flex items-center gap-3">
                                <span class="h-9 w-9 flex items-center justify-center rounded-xl bg-[#056360]/10 text-[#056360] font-bold text-sm">03</span>
                                <h2 class="text-2xl font-bold">Purchases</h2>
                            </div>
                            <div class="space-y-5 leading-relaxed text-black/80">
                                <p>If you purchase products or services, you may need to provide payment details (card number, expiration, billing, shipping).</p>
                                <p>You represent and warrant you have legal right to use provided payment methods and that supplied information is true, correct and complete.</p>
                                <p>We may use third-party services to process payments. By submitting information, you authorize sharing with those third parties under our Privacy Policy.</p>
                                <p>We may refuse or cancel orders for reasons including availability, errors, suspected fraud or unauthorized activity.</p>
                            </div>
                        </div>
                    </section>

                    <!-- 4 Promotions -->
                    <section id="promotions" class="scroll-mt-32">
                        <div class="space-y-6">
                            <div class="flex items-center gap-3">
                                <span class="h-9 w-9 flex items-center justify-center rounded-xl bg-[#056360]/10 text-[#056360] font-bold text-sm">04</span>
                                <h2 class="text-2xl font-bold">Contests, Sweepstakes & Promotions</h2>
                            </div>
                            <p class="leading-relaxed text-black/80">Promotions may be governed by separate rules. If Promotion rules conflict with these Terms, Promotion rules control.</p>
                        </div>
                    </section>

                    <!-- 5 Refunds -->
                    <section id="refunds" class="scroll-mt-32">
                        <div class="flex items-center gap-3 mb-6">
                            <span class="h-9 w-9 flex items-center justify-center rounded-xl bg-[#056360]/10 text-[#056360] font-bold text-sm">05</span>
                            <h2 class="text-2xl font-bold">Refunds</h2>
                        </div>
                        <p class="leading-relaxed text-black/80">Refunds for Contracts may be issued within <strong>30 days</strong> of original purchase.</p>
                    </section>

                    <!-- 6 Content -->
                    <section id="content" class="scroll-mt-32">
                        <div class="flex items-center gap-3 mb-6">
                            <span class="h-9 w-9 flex items-center justify-center rounded-xl bg-[#056360]/10 text-[#056360] font-bold text-sm">06</span>
                            <h2 class="text-2xl font-bold">Content</h2>
                        </div>
                        <div class="space-y-5 leading-relaxed text-black/80">
                            <p>You are responsible for Content you post, including legality and appropriateness. You warrant you own or have rights to it and its posting does not infringe others’ rights.</p>
                            <p>By posting Content you grant us a license to use, modify, publicly perform, display, reproduce and distribute it on and through Service; other users may also use it under these Terms.</p>
                            <p>We may (but are not obligated to) monitor and edit user Content.</p>
                            <p>Content on Service (excluding user Content) is property of RADMedics Corporation or used with permission. You may not reuse without written consent.</p>
                        </div>
                    </section>

                    <!-- 7 Prohibited Uses -->
                    <section id="prohibited-uses" class="scroll-mt-32">
                        <div class="flex items-center gap-3 mb-6">
                            <span class="h-9 w-9 flex items-center justify-center rounded-xl bg-[#056360]/10 text-[#056360] font-bold text-sm">07</span>
                            <h2 class="text-2xl font-bold">Prohibited Uses</h2>
                        </div>
                        <div class="space-y-5 leading-relaxed text-black/80">
                            <p>You agree not to use Service for unlawful purposes, to exploit minors, send spam, impersonate others, infringe rights, engage in harmful conduct, or restrict others’ use.</p>
                            <p>Additionally you agree not to:</p>
                            <ul class="list-disc pl-6 space-y-2 marker:text-[#056360]/70">
                                <li>Overburden or impair Service.</li>
                                <li>Use automated tools (robots, spiders) without consent.</li>
                                <li>Use manual processes to copy material without consent.</li>
                                <li>Interfere with proper functioning.</li>
                                <li>Introduce malicious code.</li>
                                <li>Attempt unauthorized access or disrupt infrastructure.</li>
                                <li>Launch denial-of-service attacks.</li>
                                <li>Damage or falsify Company rating.</li>
                                <li>Otherwise interfere with proper operation.</li>
                            </ul>
                        </div>
                    </section>

                    <!-- 8 Analytics -->
                    <section id="analytics" class="scroll-mt-32">
                        <div class="flex items-center gap-3 mb-6">
                            <span class="h-9 w-9 flex items-center justify-center rounded-xl bg-[#056360]/10 text-[#056360] font-bold text-sm">08</span>
                            <h2 class="text-2xl font-bold">Analytics</h2>
                        </div>
                        <p class="leading-relaxed text-black/80">We may use third-party providers to monitor and analyze Service usage.</p>
                    </section>

                    <!-- 9 No Use By Minors -->
                    <section id="minors" class="scroll-mt-32">
                        <div class="flex items-center gap-3 mb-6">
                            <span class="h-9 w-9 flex items-center justify-center rounded-xl bg-[#056360]/10 text-[#056360] font-bold text-sm">09</span>
                            <h2 class="text-2xl font-bold">No Use By Minors</h2>
                        </div>
                        <p class="leading-relaxed text-black/80">Service is for individuals 18+. By using Service you represent you are 18 or older with authority to agree.</p>
                    </section>

                    <!-- 10 Accounts -->
                    <section id="accounts" class="scroll-mt-32">
                        <div class="flex items-center gap-3 mb-6">
                            <span class="h-9 w-9 flex items-center justify-center rounded-xl bg-[#056360]/10 text-[#056360] font-bold text-sm">10</span>
                            <h2 class="text-2xl font-bold">Accounts</h2>
                        </div>
                        <div class="space-y-5 leading-relaxed text-black/80">
                            <p>You must provide accurate, current information. You are responsible for confidentiality and all activity under your credentials.</p>
                            <p>Notify us of unauthorized use. Usernames may not infringe rights or be offensive.</p>
                            <p>We may refuse service, terminate accounts, remove content or cancel orders at our discretion.</p>
                        </div>
                    </section>

                    <!-- 11 Intellectual Property -->
                    <section id="ip" class="scroll-mt-32">
                        <div class="flex items-center gap-3 mb-6">
                            <span class="h-9 w-9 flex items-center justify-center rounded-xl bg-[#056360]/10 text-[#056360] font-bold text-sm">11</span>
                            <h2 class="text-2xl font-bold">Intellectual Property</h2>
                        </div>
                        <p class="leading-relaxed text-black/80">Service and original content (excluding user Content) remain exclusive property of RADMedics Corporation and licensors. Protected by applicable laws. Trademarks may not be used without written consent.</p>
                    </section>

                    <!-- 12 Copyright Policy -->
                    <section id="copyright-policy" class="scroll-mt-32">
                        <div class="flex items-center gap-3 mb-6">
                            <span class="h-9 w-9 flex items-center justify-center rounded-xl bg-[#056360]/10 text-[#056360] font-bold text-sm">12</span>
                            <h2 class="text-2xl font-bold">Copyright Policy</h2>
                        </div>
                        <p class="leading-relaxed text-black/80">We respond to claims that Content infringes copyrights or other IP rights. Misrepresentation may incur liability.</p>
                    </section>

                    <!-- 13 DMCA -->
                    <section id="dmca" class="scroll-mt-32">
                        <div class="flex items-center gap-3 mb-6">
                            <span class="h-9 w-9 flex items-center justify-center rounded-xl bg-[#056360]/10 text-[#056360] font-bold text-sm">13</span>
                            <h2 class="text-2xl font-bold">DMCA Notice</h2>
                        </div>
                        <div class="space-y-5 leading-relaxed text-black/80">
                            <p>Provide the following (17 U.S.C. 512(c)(3)) to submit a DMCA claim:</p>
                            <ul class="list-disc pl-6 space-y-2 marker:text-[#056360]/70">
                                <li>Signature (physical or electronic).</li>
                                <li>Description of copyrighted work.</li>
                                <li>Location (URL) of infringing material.</li>
                                <li>Your address, phone, email.</li>
                                <li>Good faith belief statement.</li>
                                <li>Accuracy statement under penalty of perjury with authority claim.</li>
                            </ul>
                            <p>Send to <strong>info@radmedicsph.com</strong> (subject: “Copyright Infringement”).</p>
                        </div>
                    </section>

                    <!-- 14 Error Reporting -->
                    <section id="feedback" class="scroll-mt-32">
                        <div class="flex items-center gap-3 mb-6">
                            <span class="h-9 w-9 flex items-center justify-center rounded-xl bg-[#056360]/10 text-[#056360] font-bold text-sm">14</span>
                            <h2 class="text-2xl font-bold">Error Reporting & Feedback</h2>
                        </div>
                        <p class="leading-relaxed text-black/80">By submitting Feedback (ideas, suggestions, errors) you grant us an irrevocable, perpetual, transferable, royalty-free license to use it.</p>
                    </section>

                    <!-- 15 Links -->
                    <section id="links" class="scroll-mt-32">
                        <div class="flex items-center gap-3 mb-6">
                            <span class="h-9 w-9 flex items-center justify-center rounded-xl bg-[#056360]/10 text-[#056360] font-bold text-sm">15</span>
                            <h2 class="text-2xl font-bold">Links To Other Websites</h2>
                        </div>
                        <div class="space-y-5 leading-relaxed text-black/80">
                            <p>Third-party links may appear. We do not control their content, policies, or practices.</p>
                            <p>Example resources generated via <a href="https://policymaker.io/" target="_blank" rel="noopener">PolicyMaker.io</a>.</p>
                            <p><strong>YOU ACKNOWLEDGE</strong> we are not liable for damage from reliance on third-party sites. Review their Terms and Privacy Policies.</p>
                        </div>
                    </section>

                    <!-- 16 Disclaimer -->
                    <section id="disclaimer" class="scroll-mt-32">
                        <div class="flex items-center gap-3 mb-6">
                            <span class="h-9 w-9 flex items-center justify-center rounded-xl bg-[#056360]/10 text-[#056360] font-bold text-sm">16</span>
                            <h2 class="text-2xl font-bold">Disclaimer of Warranty</h2>
                        </div>
                        <p class="leading-relaxed text-black/80 uppercase text-[0.9rem] tracking-wide">
                            SERVICES ARE PROVIDED “AS IS” AND “AS AVAILABLE” WITHOUT WARRANTIES OF ANY KIND. WE DISCLAIM ALL WARRANTIES INCLUDING MERCHANTABILITY, NON-INFRINGEMENT, FITNESS FOR A PARTICULAR PURPOSE. SOME JURISDICTIONS MAY LIMIT EXCLUSIONS.
                        </p>
                    </section>

                    <!-- 17 Limitation -->
                    <section id="liability" class="scroll-mt-32">
                        <div class="flex items-center gap-3 mb-6">
                            <span class="h-9 w-9 flex items-center justify-center rounded-xl bg-[#056360]/10 text-[#056360] font-bold text-sm">17</span>
                            <h2 class="text-2xl font-bold">Limitation of Liability</h2>
                        </div>
                        <p class="leading-relaxed text-black/80 uppercase text-[0.9rem] tracking-wide">
                            TO THE MAXIMUM EXTENT PERMITTED, WE ARE NOT LIABLE FOR INDIRECT, INCIDENTAL, SPECIAL, CONSEQUENTIAL OR PUNITIVE DAMAGES. LIABILITY (IF ANY) IS LIMITED TO AMOUNTS PAID FOR SERVICES. SOME STATES DO NOT ALLOW LIMITATIONS.
                        </p>
                    </section>

                    <!-- 18 Termination -->
                    <section id="termination" class="scroll-mt-32">
                        <div class="flex items-center gap-3 mb-6">
                            <span class="h-9 w-9 flex items-center justify-center rounded-xl bg-[#056360]/10 text-[#056360] font-bold text-sm">18</span>
                            <h2 class="text-2xl font-bold">Termination</h2>
                        </div>
                        <p class="leading-relaxed text-black/80">We may suspend or terminate accounts immediately for any reason including breach. Provisions intended to survive termination do so.</p>
                    </section>

                    <!-- 19 Governing Law -->
                    <section id="law" class="scroll-mt-32">
                        <div class="flex items-center gap-3 mb-6">
                            <span class="h-9 w-9 flex items-center justify-center rounded-xl bg-[#056360]/10 text-[#056360] font-bold text-sm">19</span>
                            <h2 class="text-2xl font-bold">Governing Law</h2>
                        </div>
                        <p class="leading-relaxed text-black/80">These Terms are governed by the laws of the Philippines. Failure to enforce a provision is not a waiver. Invalid provisions are limited or removed; remainder remains effective.</p>
                    </section>

                    <!-- 20 Changes to Service -->
                    <section id="changes-service" class="scroll-mt-32">
                        <div class="flex items-center gap-3 mb-6">
                            <span class="h-9 w-9 flex items-center justify-center rounded-xl bg-[#056360]/10 text-[#056360] font-bold text-sm">20</span>
                            <h2 class="text-2xl font-bold">Changes To Service</h2>
                        </div>
                        <p class="leading-relaxed text-black/80">We may withdraw or amend Service without notice. Access may be restricted periodically.</p>
                    </section>

                    <!-- 21 Amendments -->
                    <section id="amendments" class="scroll-mt-32">
                        <div class="flex items-center gap-3 mb-6">
                            <span class="h-9 w-9 flex items-center justify-center rounded-xl bg-[#056360]/10 text-[#056360] font-bold text-sm">21</span>
                            <h2 class="text-2xl font-bold">Amendments To Terms</h2>
                        </div>
                        <p class="leading-relaxed text-black/80">We may amend Terms by posting updates. Continued use after revisions constitutes acceptance.</p>
                    </section>

                    <!-- 22 Waiver -->
                    <section id="waiver" class="scroll-mt-32">
                        <div class="flex items-center gap-3 mb-6">
                            <span class="h-9 w-9 flex items-center justify-center rounded-xl bg-[#056360]/10 text-[#056360] font-bold text-sm">22</span>
                            <h2 class="text-2xl font-bold">Waiver & Severability</h2>
                        </div>
                        <p class="leading-relaxed text-black/80">No waiver is continuing unless stated. Invalid provisions are limited so remainder continues.</p>
                    </section>

                    <!-- 23 Acknowledgement -->
                    <section id="acknowledgement" class="scroll-mt-32">
                        <div class="flex items-center gap-3 mb-6">
                            <span class="h-9 w-9 flex items-center justify-center rounded-xl bg-[#056360]/10 text-[#056360] font-bold text-sm">23</span>
                            <h2 class="text-2xl font-bold">Acknowledgement</h2>
                        </div>
                        <p class="leading-relaxed text-black/80 uppercase text-[0.9rem] tracking-wide">BY USING SERVICE YOU ACKNOWLEDGE YOU HAVE READ AND AGREE TO THESE TERMS.</p>
                    </section>

                    <!-- 24 Contact -->
                    <section id="contact" class="scroll-mt-32">
                        <div class="flex items-center gap-3 mb-8">
                            <span class="h-9 w-9 flex items-center justify-center rounded-xl bg-[#056360]/10 text-[#056360] font-bold text-sm">24</span>
                            <h2 class="text-2xl font-bold">Contact Us</h2>
                        </div>
                        <div class="space-y-5 leading-relaxed text-black/80">
                            <p>Send feedback, comments, or support requests to <strong>info@radmedicsph.com</strong>.</p>
                        </div>
                    </section>

                </article>
            </div>
        </main>
    </div>

    <script>
        window.addEventListener('load', () => { if (window.scrollX !== 0) window.scrollTo({ left: 0 }); });
        document.addEventListener('scroll', () => {
            const sections = document.querySelectorAll('section[id]');
            let activeId = '';
            const offset = 140;
            sections.forEach(sec => {
                const rect = sec.getBoundingClientRect();
                if (rect.top - offset < 0) activeId = sec.id;
            });
            document.querySelectorAll('.toc-link').forEach(a => {
                const active = a.getAttribute('href') === '#' + activeId;
                a.classList.toggle('font-semibold', active);
                a.classList.toggle('text-[#056360]', active);
            });
        });
    </script>
</x-layout>
