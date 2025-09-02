<x-layout>
    <style>
        .page-title {
            color: #0ABAB5;
            text-align: center;
            font-family: Poppins, sans-serif;
            font-size: 64px;
            font-style: normal;
            font-weight: 600;
            line-height: 50px;
            text-transform: uppercase;
            width: 100%;
            display: block;
        }
    </style>

    <div style="padding-top: 10%;">
        <div style="align-items: center; padding-bottom: 5%;">
            <div style="width: 537.602px; height: 86px; margin: 0 auto; flex-direction: column; justify-content: center; flex-shrink: 0;">
                <span class="page-title">OUR COURSES</span>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 px-4 pb-20">
            <x-course-card
                title="Intro to Web Development"
                description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla pellentesque ultrices hendrerit. Donec blandit magna at lacus imperdiet, nec mollis purus hendrerit. Duis quis orci ut diam volutpat consequat sit amet vel dolor. In ultricies tempus erat, quis tincidunt libero scelerisque rutrum."
                imageUrl="/images/cpr.jpg"
            />

            <x-course-card
                title="Advanced Laravel"
                description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla pellentesque ultrices hendrerit. Donec blandit magna at lacus imperdiet, nec mollis purus hendrerit. Duis quis orci ut diam volutpat consequat sit amet vel dolor. In ultricies tempus erat, quis tincidunt libero scelerisque rutrum."
                imageUrl="/images/cpr.jpg"
            />

            <x-course-card
                title="UI/UX Design Fundamentals"
                description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla pellentesque ultrices hendrerit. Donec blandit magna at lacus imperdiet, nec mollis purus hendrerit. Duis quis orci ut diam volutpat consequat sit amet vel dolor. In ultricies tempus erat, quis tincidunt libero scelerisque rutrum."
                imageUrl="/images/cpr.jpg"
            />
        </div>
    </div>
    <script>
    window.addEventListener('DOMContentLoaded', () => {
        const cards = document.querySelectorAll('.course-card');
        cards.forEach((card, index) => {
            setTimeout(() => {
                card.classList.remove('opacity-0', 'translate-y-4');
                card.classList.add('opacity-100', 'translate-y-0');
            }, 150 + index * 150);
        });
    });
</script>

</x-layout>
