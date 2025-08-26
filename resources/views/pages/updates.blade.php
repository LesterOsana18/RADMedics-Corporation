<x-layout>
	<section class="max-w-7xl mx-auto px-4 py-12">

		<div class="grid gap-16 md:grid-cols-2 pt-8">

			{{-- FACEBOOK CARD --}}
			<x-layouts.social-media-card
				platform="facebook"
				title="RADMedics-Official"
				subtitle="Facebook Page"
				logo="/images/radmedics-logo.png"
				facebook-page-url="https://www.facebook.com/radmedicsph"
				height="500"
				class="mx-auto"
			/>

			{{-- INSTAGRAM CARD --}}
			<x-layouts.social-media-card
				platform="instagram"
				title="@radmedicsph"
				subtitle="Instagram"
				logo="/images/radmedics-logo.png"
				instagram-url="https://www.instagram.com/radmedicsph/"
				instagram-embed-url="https://www.instagram.com/p/DGMD2n3PDGm/"
				height="500"
				class="mx-auto"
			/>
		</div>

		<script async src="https://www.instagram.com/embed.js"></script>

        {{-- Animation for Cards --}}
		<script>
			window.addEventListener('DOMContentLoaded', () => {
				const cards = document.querySelectorAll('.js-soc-card');
				cards.forEach((el, idx) => {
					setTimeout(() => {
						el.classList.remove('opacity-0','translate-y-4');
						el.classList.add('opacity-100','translate-y-0');
					}, 100 + idx * 120);
				});
			});
		</script>
	</section>
</x-layout>
