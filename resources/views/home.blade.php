<!DOCTYPE html>
<html lang="ar" dir="rtl">

@extends('head')
<link rel="icon" type="image/logo.png" href="/image/logo.png">


<body class="bg-gradient-to-br from-purple-900 to-purple-700 text-white font-arabic min-h-screen">
    {{-- FOOTER --}}

    @extends('footer')

    {{-- Contact Us --}}

    @extends('contact')

    {{-- PORTFOLIO --}}

    @extends('works')

    {{-- SERVICES --}}

    @extends('services')

    {{-- Our Inspiring Story --}}

    @extends('story')

    {{-- HERO --}}

    @extends('hero')

    {{-- NAVBAR --}}

    @extends('header')


    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>

    <script>
        function toggleStoryModal() {
            const modal = document.getElementById('storyModal');
            modal.classList.toggle('hidden');
        }
    </script>



    <script>
        gsap.fromTo(".animate__animated:not(.animate__infinite)", {
            opacity: 0,
            y: 50
        }, {
            opacity: 1,
            y: 0,
            duration: 1,
            stagger: 0.3
        });
    </script>
    <script>
        document.getElementById('mobile-menu-toggle').addEventListener('click', function() {
            document.getElementById('mobile-menu').classList.remove('hidden');
        });

        document.getElementById('mobile-menu-close').addEventListener('click', function() {
            document.getElementById('mobile-menu').classList.add('hidden');
        });
    </script>
    <script>
        function closeStoryModal() {
            document.getElementById('storyModal').classList.add('hidden');
        }
    </script>


    <script>
        function openStoryModal() {
            const modal = document.getElementById('storyModal');
            modal.classList.remove('hidden');
            document.body.style.overflow = 'hidden';

            // Add entrance animation
            gsap.from('#storyModal > div:nth-child(2)', {
                opacity: 0,
                y: 50,
                duration: 0.5,
                ease: 'power2.out'
            });
        }

        function closeStoryModal() {
            const modal = document.getElementById('storyModal');
            gsap.to('#storyModal > div:nth-child(2)', {
                opacity: 0,
                y: 50,
                duration: 0.3,
                ease: 'power2.in',
                onComplete: () => {
                    modal.classList.add('hidden');
                    document.body.style.overflow = 'auto';
                }
            });
        }

        // Close modal when clicking outside
        document.getElementById('storyModal').addEventListener('click', (e) => {
            if (e.target === document.getElementById('storyModal')) {
                closeStoryModal();
            }
        });

        // Close modal with Escape key
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') {
                closeStoryModal();
            }
        });
    </script>
    <script>
        function openStoryModal() {
            const modal = document.getElementById('storyModal');
            modal.classList.remove('hidden');
            document.body.style.overflow = 'hidden';

            // Add entrance animation
            gsap.from('#storyModal > div:nth-child(2)', {
                opacity: 0,
                y: 50,
                duration: 0.5,
                ease: 'power2.out'
            });
        }

        function closeStoryModal() {
            const modal = document.getElementById('storyModal');
            gsap.to('#storyModal > div:nth-child(2)', {
                opacity: 0,
                y: 50,
                duration: 0.3,
                ease: 'power2.in',
                onComplete: () => {
                    modal.classList.add('hidden');
                    document.body.style.overflow = 'auto';
                }
            });
        }

        // Close modal when clicking outside
        document.getElementById('storyModal').addEventListener('click', (e) => {
            if (e.target === document.getElementById('storyModal')) {
                closeStoryModal();
            }
        });

        // Close modal with Escape key
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') {
                closeStoryModal();
            }
        });
    </script>
    <script>
        // Toggle mobile menu visibility
        const mobileMenuToggle = document.getElementById('mobile-menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');
        const mobileMenuClose = document.getElementById('mobile-menu-close');

        mobileMenuToggle.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        mobileMenuClose.addEventListener('click', () => {
            mobileMenu.classList.add('hidden');
        });

        // Close menu when clicking outside of the menu
        document.addEventListener('click', (e) => {
            if (!mobileMenu.contains(e.target) && !mobileMenuToggle.contains(e.target)) {
                mobileMenu.classList.add('hidden');
            }
        });
    </script>
</body>

</html>
