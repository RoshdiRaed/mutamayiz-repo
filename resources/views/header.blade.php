<nav
    class="fixed top-4 left-0 right-0 mx-auto w-11/12 max-w-6xl bg-purple-900/95 backdrop-blur-sm text-white py-4 shadow-xl z-50 rounded-2xl animate__animated animate__fadeInDown">
    <div class="container mx-auto px-4">
        <div class="flex items-center justify-between">
            <!-- Logo Section -->
            <a href="/" class="flex items-center space-x-reverse space-x-4 group">
                <img src="/image/logo.png" alt="برموز لوجو"
                    class="h-12 w-auto transform transition-transform duration-300 group-hover:scale-110">
                <span
                    class="text-xl font-bold bg-gradient-to-r from-yellow-200 to-yellow-400 bg-clip-text text-transparent"
                    style="font-family: cairo">
                    المتميّز
                </span>
            </a>

            <!-- Desktop Menu -->
            <ul class="hidden lg:flex items-center space-x-reverse space-x-8">
                <li><a href="/"
                        class="nav-link relative font-medium py-2 hover:text-yellow-300 transition-colors duration-300">الرئيسية</a>
                </li>
                <li><a href="{{ route('services.index') }}"
                        class="nav-link relative font-medium py-2 hover:text-yellow-300 transition-colors duration-300">خدماتنا</a>
                </li>
                <li><a href="{{ route('works.index') }}"
                        class="nav-link relative font-medium py-2 hover:text-yellow-300 transition-colors duration-300">أعمالنا</a>
                </li>
                <li><a href="/"
                        class="nav-link relative font-medium py-2 hover:text-yellow-300 transition-colors duration-300">من
                        نحن</a></li>
                <li class="mr-4">
                    <a href="/contacts"
                        class="bg-gradient-to-r from-yellow-400 to-yellow-500 text-purple-900 px-6 py-2.5 rounded-lg font-bold hover:from-yellow-500 hover:to-yellow-600 transition duration-300 transform hover:scale-105 hover:shadow-lg">
                        تواصل معنا
                    </a>
                </li>
            </ul>

            <!-- Mobile Menu Button -->
            <button id="mobile-menu-toggle" class="lg:hidden text-yellow-300 focus:outline-none">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu"
        class="fixed inset-0 bg-purple-900/98 backdrop-blur-md z-50 hidden transition-all duration-300">
        <div class="flex justify-between items-center p-6 border-b border-purple-800">
            <img src="/image/logo.png" alt="برموز لوجو" class="h-12 w-auto">
            <button id="mobile-menu-close" class="text-yellow-300 focus:outline-none">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
        <ul class="flex flex-col items-center space-y-6 mt-12 text-lg p-6">
            <li><a href="#"
                    class="text-yellow-300 font-medium hover:scale-105 transform transition-all duration-300 block">الرئيسية</a>
            </li>
            <li><a href="{{ route('services.index') }}"
                    class="hover:text-yellow-300 transition-colors duration-300 hover:scale-105 transform block">خدماتنا</a>
            </li>
            <li><a href="{{ route('works.index') }}"
                    class="hover:text-yellow-300 transition-colors duration-300 hover:scale-105 transform block">أعمالنا</a>
            </li>
            <li><a href="#"
                    class="hover:text-yellow-300 transition-colors duration-300 hover:scale-105 transform block">من
                    نحن</a></li>
            <li>
                <a href="#"
                    class="bg-gradient-to-r from-yellow-400 to-yellow-500 text-purple-900 px-8 py-3 rounded-lg font-bold hover:from-yellow-500 hover:to-yellow-600 transition duration-300 hover:scale-105 transform block">
                    تواصل معنا
                </a>
            </li>
        </ul>
    </div>
</nav>
