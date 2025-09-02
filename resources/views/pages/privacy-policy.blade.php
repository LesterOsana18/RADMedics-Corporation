<x-layout>
    <div class="relative min-h-screen bg-white pt-10 overflow-x-hidden">
        <div class="absolute inset-0 pointer-events-none">
            <div class="absolute -top-24 -left-24 w-[32rem] h-[32rem] rounded-full bg-[#0ABAB5]/5 blur-3xl"></div>
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
                                <li class="text-[#056360] font-semibold">Privacy Policy</li>
                            </ol>
                        </nav>
                        <h1 class="text-4xl sm:text-5xl font-extrabold tracking-tight text-[#056360]">
                            Privacy Policy
                        </h1>
                        <p class="inline-flex items-center gap-2 text-sm font-semibold text-[#056360]">
                            <span class="h-2.5 w-2.5 rounded-full bg-[#056360] animate-pulse shadow shadow-[#056360]/40"></span>
                            Last updated: August 27, 2025
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
                                <li><a href="#overview" class="toc-link block hover:text-[#056360] text-black/70">Overview</a></li>
                                <li><a href="#definitions" class="toc-link block hover:text-[#056360] text-black/70">Definitions</a></li>
                                <li><a href="#data-collection" class="toc-link block hover:text-[#056360] text-black/70">Data Collection</a></li>
                                <li><a href="#usage" class="toc-link block hover:text-[#056360] text-black/70">Use of Data</a></li>
                                <li><a href="#retention" class="toc-link block hover:text-[#056360] text-black/70">Retention</a></li>
                                <li><a href="#transfer" class="toc-link block hover:text-[#056360] text-black/70">Transfer</a></li>
                                <li><a href="#delete" class="toc-link block hover:text-[#056360] text-black/70">Deletion</a></li>
                                <li><a href="#disclosure" class="toc-link block hover:text-[#056360] text-black/70">Disclosure</a></li>
                                <li><a href="#security" class="toc-link block hover:text-[#056360] text-black/70">Security</a></li>
                                <li><a href="#children" class="toc-link block hover:text-[#056360] text-black/70">Children</a></li>
                                <li><a href="#links" class="toc-link block hover:text-[#056360] text-black/70">External Links</a></li>
                                <li><a href="#changes" class="toc-link block hover:text-[#056360] text-black/70">Changes</a></li>
                                <li><a href="#contact" class="toc-link block hover:text-[#056360] text-black/70">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </aside>

                <!-- Article: Privacy Policy Sections -->
                <article class="space-y-16 [&_h2]:text-[#056360] [&_h3]:text-[#056360] [&_h4]:text-[#056360] [&_strong]:text-[#056360] [&_a]:text-[#056360] [&_a:hover]:underline">
                    <!-- 01 Overview -->
                    <section id="overview" class="scroll-mt-32">
                        <div class="space-y-6">
                            <div class="flex items-center gap-3">
                                <span class="h-9 w-9 flex items-center justify-center rounded-xl bg-[#056360]/10 text-[#056360] font-bold text-sm">01</span>
                                <h2 class="text-2xl font-bold">Overview</h2>
                            </div>
                            <div class="space-y-5 leading-relaxed text-black/80">
                                <p>This Privacy Policy describes Our policies and procedures on the collection, use and disclosure of Your information when You use the Service and tells You about Your privacy rights and how the law protects You.</p>
                                <p>We use Your Personal data to provide and improve the Service. By using the Service, You agree to the collection and use of information in accordance with this Privacy Policy. </p>
                            </div>
                        </div>
                    </section>

                    <!-- 02 Interpretation & Definitions -->
                    <section id="definitions" class="scroll-mt-32">
                        <div class="space-y-6">
                            <div class="flex items-center gap-3">
                                <span class="h-9 w-9 flex items-center justify-center rounded-xl bg-[#056360]/10 text-[#056360] font-bold text-sm">02</span>
                                <h2 class="text-2xl font-bold">Interpretation & Definitions</h2>
                            </div>
                            <div class="space-y-5 text-black/80 leading-relaxed">
                                <h3 class="font-semibold">Interpretation</h3>
                                <p>The words of which the initial letter is capitalized have meanings defined under the following conditions. The definitions have the same meaning regardless of singular or plural form.</p>
                                <h3 class="font-semibold mt-8">Definitions</h3>
                                <p>For the purposes of this Privacy Policy:</p>
                                <ul class="list-disc pl-6 space-y-3 marker:text-[#056360]/70">
                                    <li><strong>Account</strong> means a unique account created for You to access our Service or parts of our Service.</li>
                                    <li><strong>Affiliate</strong> means an entity that controls, is controlled by or is under common control with a party, where "control" means ownership of 50% or more of the shares, equity interest or other securities entitled to vote for election of directors or other managing authority.</li>
                                    <li><strong>Company</strong> (referred to as either "the Company", "We", "Us" or "Our" in this Agreement) refers to RADMedics Corporation, 847 E Pantaleon St Barangka Ibaba Mandaluyong City.</li>
                                    <li><strong>Cookies</strong> are small files that are placed on Your device by a website, containing the details of Your browsing history on that website among its many uses.</li>
                                    <li><strong>Country</strong> refers to: Philippines.</li>
                                    <li><strong>Device</strong> means any device that can access the Service such as a computer, a cellphone or a digital tablet.</li>
                                    <li><strong>Personal Data</strong> is any information that relates to an identified or identifiable individual.</li>
                                    <li><strong>Service</strong> refers to the Website.</li>
                                    <li><strong>Service Provider</strong> means any natural or legal person who processes the data on behalf of the Company. It refers to third-party companies or individuals employed by the Company to facilitate the Service, to provide the Service on behalf of the Company, to perform services related to the Service or to assist the Company in analyzing how the Service is used.</li>
                                    <li><strong>Usage Data</strong> refers to data collected automatically, either generated by the use of the Service or from the Service infrastructure itself (for example, the duration of a page visit).</li>
                                    <li><strong>Website</strong> refers to RADMedics, accessible from <a href="https://www.radmedicsph.com/" target="_blank" rel="noopener" class="underline decoration-dotted">https://www.radmedicsph.com/</a></li>
                                    <li><strong>You</strong> means the individual accessing or using the Service, or the company, or other legal entity on behalf of which such individual is accessing or using the Service, as applicable.</li>
                                </ul>
                            </div>
                        </div>
                    </section>

                    <!-- 03 Collecting & Using Personal Data -->
                    <section id="data-collection" class="scroll-mt-32">
                        <div class="space-y-6">
                            <div class="flex items-center gap-3">
                                <span class="h-9 w-9 flex items-center justify-center rounded-xl bg-[#056360]/10 text-[#056360] font-bold text-sm">03</span>
                                <h2 class="text-2xl font-bold">Collecting & Using Personal Data</h2>
                            </div>
                            <div class="space-y-8 leading-relaxed text-black/80">
                                <div class="space-y-4">
                                    <h3 class="font-semibold">Types of Data Collected</h3>
                                    <h4 class="font-semibold">Personal Data</h4>
                                    <p>We may ask You to provide certain personally identifiable information that can be used to contact or identify You. Personally identifiable information may include, but is not limited to:</p>
                                    <ul class="list-disc pl-6 space-y-2 marker:text-[#056360]/70">
                                        <li>Email address</li>
                                        <li>First and last name</li>
                                        <li>Phone number</li>
                                        <li>Usage Data</li>
                                    </ul>
                                </div>
                                <div class="space-y-4">
                                    <h4 class="font-semibold">Usage Data</h4>
                                    <p>Usage Data is collected automatically when using the Service.</p>
                                    <p>Usage Data may include information such as Your Device's Internet Protocol address (e.g. IP address), browser type, browser version, the pages of our Service that You visit, the time and date of Your visit, the time spent on those pages, unique device identifiers and other diagnostic data.</p>
                                    <p>When You access the Service by or through a mobile device, We may collect certain information automatically, including, but not limited to, the type of mobile device You use, Your mobile device unique ID, the IP address of Your mobile device, Your mobile operating system, the type of mobile Internet browser You use, unique device identifiers and other diagnostic data.</p>
                                    <p>We may also collect information that Your browser sends whenever You visit our Service or when You access the Service by or through a mobile device.</p>
                                </div>
                                <div class="space-y-4">
                                    <h4 class="font-semibold">Tracking Technologies & Cookies</h4>
                                    <p>We use cookies, scripts, tags, and web beacons to analyze and improve the Service.</p>
                                    <ul class="list-disc pl-6 space-y-2 marker:text-[#056360]/70">
                                        <li><strong>Browser Cookies:</strong> Small files stored on Your device.</li>
                                        <li><strong>Web Beacons:</strong> Tiny graphics used for analytics.</li>
                                    </ul>
                                    <p>Cookies may be Session or Persistent, used for essential authentication, preferences, and acceptance tracking.</p>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- 04 Use of Personal Data -->
                    <section id="usage" class="scroll-mt-32">
                        <div class="space-y-6">
                            <div class="flex items-center gap-3">
                                <span class="h-9 w-9 flex items-center justify-center rounded-xl bg-[#056360]/10 text-[#056360] font-bold text-sm">04</span>
                                <h2 class="text-2xl font-bold">Use of Personal Data</h2>
                            </div>
                            <p class="leading-relaxed text-black/80">We may use Personal Data to:</p>
                            <ul class="list-disc pl-6 space-y-3 marker:text-[#056360]/70 text-black/80">
                                <li>Provide and maintain the Service</li>
                                <li>Manage accounts and registrations</li>
                                <li>Perform contractual obligations</li>
                                <li>Contact You (email, calls, SMS, push)</li>
                                <li>Provide news, offers, events (unless opted out)</li>
                                <li>Process requests and inquiries</li>
                                <li>Support business transfers</li>
                                <li>Analyze usage and improve experience</li>
                            </ul>
                        </div>
                    </section>

                    <!-- 05 Retention -->
                    <section id="retention" class="scroll-mt-32">
                        <div class="space-y-6">
                            <div class="flex items-center gap-3">
                                <span class="h-9 w-9 flex items-center justify-center rounded-xl bg-[#056360]/10 text-[#056360] font-bold text-sm">05</span>
                                <h2 class="text-2xl font-bold">Retention</h2>
                            </div>
                            <p class="leading-relaxed text-black/80">Personal Data is retained only as long as necessary for stated purposes, compliance, dispute resolution, and policy enforcement. Usage Data may be kept shorter unless needed for security or legal reasons.</p>
                        </div>
                    </section>

                    <!-- 06 Transfer -->
                    <section id="transfer" class="scroll-mt-32">
                        <div class="space-y-6">
                            <div class="flex items-center gap-3">
                                <span class="h-9 w-9 flex items-center justify-center rounded-xl bg-[#056360]/10 text-[#056360] font-bold text-sm">06</span>
                                <h2 class="text-2xl font-bold">Transfer</h2>
                            </div>
                            <p class="leading-relaxed text-black/80">Your data may be processed in locations with different legal frameworks. We implement reasonable safeguards before transferring Personal Data internationally.</p>
                        </div>
                    </section>

                    <!-- 07 Deletion of Data -->
                    <section id="delete" class="scroll-mt-32">
                        <div class="space-y-6">
                            <div class="flex items-center gap-3">
                                <span class="h-9 w-9 flex items-center justify-center rounded-xl bg-[#056360]/10 text-[#056360] font-bold text-sm">07</span>
                                <h2 class="text-2xl font-bold">Deletion of Data</h2>
                            </div>
                            <p class="leading-relaxed text-black/80">You may request deletion, correction, or access to Personal Data. Certain data may be retained for legal obligations.</p>
                        </div>
                    </section>

                    <!-- 08 Disclosure -->
                    <section id="disclosure" class="scroll-mt-32">
                        <div class="space-y-6">
                            <div class="flex items-center gap-3">
                                <span class="h-9 w-9 flex items-center justify-center rounded-xl bg-[#056360]/10 text-[#056360] font-bold text-sm">08</span>
                                <h2 class="text-2xl font-bold">Disclosure</h2>
                            </div>
                            <div class="space-y-5 leading-relaxed text-black/80">
                                <p>We may disclose Personal Data in business transfers, to comply with law, protect rights, investigate misuse, ensure safety, or prevent liability.</p>
                                <ul class="list-disc pl-6 space-y-2 marker:text-[#056360]/70">
                                    <li>Legal compliance</li>
                                    <li>Rights and property protection</li>
                                    <li>Misconduct investigation</li>
                                    <li>User/public safety</li>
                                    <li>Liability protection</li>
                                </ul>
                            </div>
                        </div>
                    </section>

                    <!-- 09 Security -->
                    <section id="security" class="scroll-mt-32">
                        <div class="space-y-6">
                            <div class="flex items-center gap-3">
                                <span class="h-9 w-9 flex items-center justify-center rounded-xl bg-[#056360]/10 text-[#056360] font-bold text-sm">09</span>
                                <h2 class="text-2xl font-bold">Security</h2>
                            </div>
                            <p class="leading-relaxed text-black/80">We use commercially acceptable safeguards, but no Internet transmission or storage method is fully secure.</p>
                        </div>
                    </section>

                    <!-- 10 Children’s Privacy -->
                    <section id="children" class="scroll-mt-32">
                        <div class="space-y-6">
                            <div class="flex items-center gap-3">
                                <span class="h-9 w-9 flex items-center justify-center rounded-xl bg-[#056360]/10 text-[#056360] font-bold text-sm">10</span>
                                <h2 class="text-2xl font-bold">Children’s Privacy</h2>
                            </div>
                            <p class="leading-relaxed text-black/80">We do not knowingly collect data from individuals under 13. Parents may contact us to remove inadvertent data.</p>
                        </div>
                    </section>

                    <!-- 11 External Links -->
                    <section id="links" class="scroll-mt-32">
                        <div class="space-y-6">
                            <div class="flex items-center gap-3">
                                <span class="h-9 w-9 flex items-center justify-center rounded-xl bg-[#056360]/10 text-[#056360] font-bold text-sm">11</span>
                                <h2 class="text-2xl font-bold">Links to Other Sites</h2>
                            </div>
                            <p class="leading-relaxed text-black/80">External sites are not operated by us. Review third-party policies before providing data.</p>
                        </div>
                    </section>

                    <!-- 12 Changes -->
                    <section id="changes" class="scroll-mt-32">
                        <div class="space-y-6">
                            <div class="flex items-center gap-3">
                                <span class="h-9 w-9 flex items-center justify-center rounded-xl bg-[#056360]/10 text-[#056360] font-bold text-sm">12</span>
                                <h2 class="text-2xl font-bold">Changes to This Policy</h2>
                            </div>
                            <p class="leading-relaxed text-black/80">We may update this Policy and will post revisions with an updated date. Continued use signifies acceptance.</p>
                        </div>
                    </section>

                    <!-- 13 Contact -->
                    <section id="contact" class="scroll-mt-32">
                        <div class="space-y-8">
                            <div class="flex items-center gap-3">
                                <span class="h-9 w-9 flex items-center justify-center rounded-xl bg-[#056360]/10 text-[#056360] font-bold text-sm">13</span>
                                <h2 class="text-2xl font-bold">Contact Us</h2>
                            </div>
                            <div class="grid sm:grid-cols-2 gap-6 text-black/80">
                                <div class="space-y-1">
                                    <p class="font-semibold">Email</p>
                                    <a href="mailto:info@radmedicsph.com" class="underline decoration-dotted hover:decoration-solid text-[#056360]">info@radmedicsph.com</a>
                                </div>
                                <div class="space-y-1">
                                    <p class="font-semibold">Website</p>
                                    <a href="https://www.radmedicsph.com/" target="_blank" rel="noopener" class="underline decoration-dotted hover:decoration-solid text-[#056360]">radmedicsph.com</a>
                                </div>
                                <div class="space-y-1">
                                    <p class="font-semibold">Phone</p>
                                    <p>+63 917 208 0630</p>
                                </div>
                                <div class="space-y-1">
                                    <p class="font-semibold">Mail</p>
                                    <p>847 E Pantaleon St Barangka Ibaba Mandaluyong City</p>
                                </div>
                            </div>
                        </div>
                    </section>
                </article>
            </div>
        </main>
    </div>

    <script>
        window.addEventListener('load', () => { if (window.scrollX !== 0) window.scrollTo({ left: 0 }); });
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

