<x-layout>
    <div class="max-w-3xl mx-auto pt-32 pb-8 md:pt-32 md:pb-8">
        <div class="rounded-[32px] shadow-lg overflow-hidden bg-white">
            <!-- Card Header -->
            <div class="bg-cyan px-8 py-6">
                <h2 class="text-white font-bold text-2xl mb-1">HOW CAN WE HELP?</h2>
                <p class="text-white text-base opacity-80">
                    Have questions, emergencies, or other concerns? Don’t hesitate to reach out.
                </p>
            </div>
            <!-- Card Body -->
            <form class="px-8 py-8 space-y-6" aria-label="Contact Us">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="name" class="font-semibold text-dark-teal mb-1 block">
                            Full Name <span class="text-dark-teal">*</span>
                        </label>
                        <input type="text" id="name" name="name" required placeholder="Full Name"
                            class="w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-dark-teal transition" />
                    </div>
                    <div>
                        <label for="email" class="font-semibold text-dark-teal mb-1 block">
                            Email Address <span class="text-dark-teal">*</span>
                        </label>
                        <input type="email" id="email" name="email" required placeholder="Email Address"
                            class="w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-dark-teal transition" />
                    </div>
                    <div>
                        <label for="phone" class="font-semibold text-dark-teal mb-1 block">
                            Phone Number <span class="text-dark-teal">*</span>
                        </label>
                        <input type="tel" id="phone" name="phone" required placeholder="Phone Number"
                            class="w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-dark-teal transition" />
                    </div>
                    <div>
                        <label for="referral" class="font-semibold text-dark-teal mb-1 block">
                            Where did you hear about us? <span class="text-dark-teal">*</span>
                        </label>
                        <select id="referral" name="referral" required
                            class="w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-dark-teal transition bg-white text-gray-800">
                            <option value="" selected disabled hidden></option>
                            <option value="Facebook">Facebook</option>
                            <option value="Instagram">Instagram</option>
                            <option value="TikTok">TikTok</option>
                            <option value="YouTube">YouTube</option>
                            <option value="Friend/Referral">Friend/Referral</option>
                            <option value="Event/Seminar">Event/Seminar</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                </div>
                <div>
                    <label for="message" class="font-semibold text-dark-teal mb-1 block">
                        Message <span class="text-dark-teal">*</span>
                    </label>
                    <textarea id="message" name="message" rows="4" required placeholder="Tell us about your concerns or questions"
                        class="w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-dark-teal transition"></textarea>
                </div>
                <div class="flex items-start space-x-2">
                    <input type="checkbox" id="consent" name="consent" required
                        class="accent-cyan-500 w-5 h-5 border-gray-300 rounded focus:ring-dark-teal mt-1"/>
                    <label for="consent" class="text-gray-700 text-sm leading-relaxed">
                        I agree to receive SMS notifications, alerts, and occasional marketing messages from RADMedics Corporation,
                        which may include updated information, reminders, and promotional offers regarding the company's events and services.
                    </label>
                </div>
                <div>
                    <button type="submit"
                        class="w-full bg-cyan text-white font-semibold py-2 rounded-md shadow transition hover:bg-dark-teal">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-layout>
