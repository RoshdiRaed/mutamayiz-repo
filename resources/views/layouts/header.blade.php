<nav
    class="fixed top-4 left-0 right-0 mx-auto w-11/12 max-w-6xl bg-purple-900/95 backdrop-blur-sm text-white py-6 shadow-xl z-50 rounded-2xl animate__animated animate__fadeInDown">
    <div class="container mx-auto px-4">
        <div class="flex items-center justify-between">
            <!-- Logo Section -->
            <a href="/" class="flex items-center space-x-reverse space-x-3 group">
                <img src="/image/logo.png" alt="برموز لوجو"
                    class="h-10 w-auto transform transition-transform duration-300 group-hover:scale-105"
                    loading="lazy" />
                <span
                    class="text-lg font-bold bg-gradient-to-r from-yellow-200 to-yellow-400 bg-clip-text text-transparent"
                    style="font-family: cairo">
                    المتميّز
                </span>
            </a>

            <!-- Desktop Menu -->
            <ul class="hidden lg:flex items-center space-x-reverse space-x-6">
                <li>
                    <a href="/"
                        class="nav-link relative font-medium py-2 px-3 hover:text-yellow-300 transition-colors duration-300">
                        الرئيسية
                    </a>
                </li>
                <li>
                    <a href="{{ route('services.index') }}"
                        class="nav-link relative font-medium py-2 px-3 hover:text-yellow-300 transition-colors duration-300">
                        خدماتنا
                    </a>
                </li>
                <li>
                    <a href="{{ route('works.index') }}"
                        class="nav-link relative font-medium py-2 px-3 hover:text-yellow-300 transition-colors duration-300">
                        أعمالنا
                    </a>
                </li>
                {{-- <a href="#"
                    class="text-white font-medium hover:text-yellow-300 transition-colors duration-300 block py-2 px-4 rounded-md hover:bg-purple-800/50">
                    من نحن
                </a> --}}
                <li class="mr-4">
                    <a href="/"
                        class="bg-gradient-to-r from-yellow-400 to-yellow-500 text-purple-900 px-5 py-2 rounded-lg font-bold hover:from-yellow-500 hover:to-yellow-600 transition duration-300 transform hover:scale-105 hover:shadow-lg">
                        تواصل معنا
                    </a>
                </li>
            </ul>

            <!-- Mobile Menu Button -->
            <button id="mobile-menu-toggle"
                class="lg:hidden text-yellow-300 focus:outline-none focus:ring-2 focus:ring-yellow-300 rounded-md p-2"
                aria-label="Toggle mobile menu">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu"
        class="fixed inset-0 bg-purple-900/98 backdrop-blur-md z-50 hidden transition-opacity duration-300">
        <div class="flex justify-between items-center p-5 border-b border-purple-800">
            <img src="/image/logo.png" alt="برموز لوجو" class="h-10 w-auto" loading="lazy" />
            <button id="mobile-menu-close"
                class="text-yellow-300 focus:outline-none focus:ring-2 focus:ring-yellow-300 rounded-md p-2"
                aria-label="Close mobile menu">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
        <ul class="flex flex-col items-center space-y-5 mt-10 text-lg p-6">
            <li>
                <a href="/"
                    class="text-white font-medium hover:text-yellow-300 transition-colors duration-300 block py-2 px-4 rounded-md hover:bg-purple-800/50">
                    الرئيسية
                </a>
            </li>
            <li>
                <a href="{{ route('services.index') }}"
                    class="text-white font-medium hover:text-yellow-300 transition-colors duration-300 block py-2 px-4 rounded-md hover:bg-purple-800/50">
                    خدماتنا
                </a>
            </li>
            <li>
                <a href="{{ route('works.index') }}"
                    class="text-white font-medium hover:text-yellow-300 transition-colors duration-300 block py-2 px-4 rounded-md hover:bg-purple-800/50">
                    أعمالنا
                </a>
            </li>
            <li>
                {{-- <a href="#"
                    class="text-white font-medium hover:text-yellow-300 transition-colors duration-300 block py-2 px-4 rounded-md hover:bg-purple-800/50">
                    من نحن
                </a> --}}
            </li>
            <li>
                <a href="#"
                    class="bg-gradient-to-r from-yellow-400 to-yellow-500 text-purple-900 px-6 py-2.5 rounded-lg font-bold hover:from-yellow-500 hover:to-yellow-600 transition duration-300 block">
                    تواصل معنا
                </a>
            </li>
        </ul>
    </div>
</nav>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const mobileMenuToggle = document.getElementById('mobile-menu-toggle');
        const mobileMenuClose = document.getElementById('mobile-menu-close');
        const mobileMenu = document.getElementById('mobile-menu');

        mobileMenuToggle.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
            mobileMenu.classList.toggle('opacity-0');
            setTimeout(() => {
                mobileMenu.classList.toggle('opacity-100');
            }, 10);
        });

        mobileMenuClose.addEventListener('click', () => {
            mobileMenu.classList.add('opacity-0');
            setTimeout(() => {
                mobileMenu.classList.add('hidden');
                mobileMenu.classList.remove('opacity-100');
            }, 300);
        });

        // Close menu when clicking a link
        mobileMenu.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.add('opacity-0');
                setTimeout(() => {
                    mobileMenu.classList.add('hidden');
                    mobileMenu.classList.remove('opacity-100');
                }, 300);
            });
        });
    });
</script>

<style>
    @media (max-width: 768px) {
        nav {
            padding-top: 0.75rem;
            padding-bottom: 0.75rem;
        }

        #mobile-menu {
            transform: translateY(-100%);
            transition: transform 0.3s ease, opacity 0.3s ease;
        }

        #mobile-menu:not(.hidden) {
            transform: translateY(0);
        }
    }
</style>
