    {{-- NAVBAR --}}
    <nav class="fixed w-full bg-purple-900/95 backdrop-blur-sm text-white py-4 shadow-xl z-50">
        <div class="container mx-auto px-4">
            <div class="flex items-center justify-between">
                <!-- Logo Section -->
                <div class="flex items-center space-x-reverse space-x-4 group">
                    <img src="/image/logo.png" alt="برموز لوجو"
                        class="h-12 w-auto transform transition-transform duration-300 group-hover:scale-110">
                    <span
                        class="text-xl font-bold bg-gradient-to-r from-yellow-200 to-yellow-400 bg-clip-text text-transparent">
                        المتميّز
                    </span>
                </div>

                <!-- Desktop Menu -->
                <ul class="hidden lg:flex items-center space-x-reverse space-x-8">
                    <li><a href="#"
                            class="nav-link relative font-medium py-2 hover:text-yellow-300 transition-colors duration-300">الرئيسية</a>
                    </li>
                    <li><a href="#"
                            class="nav-link relative font-medium py-2 hover:text-yellow-300 transition-colors duration-300">خدماتنا</a>
                    </li>
                    <li><a href="#"
                            class="nav-link relative font-medium py-2 hover:text-yellow-300 transition-colors duration-300">أعمالنا</a>
                    </li>
                    <li><a href="#"
                            class="nav-link relative font-medium py-2 hover:text-yellow-300 transition-colors duration-300">من
                            نحن</a></li>
                    <li class="mr-4">
                        <a href="#"
                            class="bg-gradient-to-r from-yellow-400 to-yellow-500 text-purple-900 px-6 py-2.5 rounded-lg
                            font-bold hover:from-yellow-500 hover:to-yellow-600 transition duration-300
                            transform hover:scale-105 hover:shadow-lg">
                            تواصل معنا
                        </a>
                    </li>
                </ul>

                <!-- Mobile Menu Button -->
                <button id="mobile-menu-toggle" class="lg:hidden text-yellow-300 focus:outline-none">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
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
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <ul class="flex flex-col items-center space-y-6 mt-12 text-lg p-6">
                <li><a href="#"
                        class="text-yellow-300 font-medium hover:scale-105 transform transition-all duration-300 block">الرئيسية</a>
                </li>
                <li><a href="#"
                        class="hover:text-yellow-300 transition-colors duration-300 hover:scale-105 transform block">خدماتنا</a>
                </li>
                <li><a href="#"
                        class="hover:text-yellow-300 transition-colors duration-300 hover:scale-105 transform block">أعمالنا</a>
                </li>
                <li><a href="#"
                        class="hover:text-yellow-300 transition-colors duration-300 hover:scale-105 transform block">من
                        نحن</a></li>
                <li>
                    <a href="#"
                        class="bg-gradient-to-r from-yellow-400 to-yellow-500 text-purple-900 px-8 py-3 rounded-lg
                        font-bold hover:from-yellow-500 hover:to-yellow-600 transition duration-300 hover:scale-105 transform block">
                        تواصل معنا
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    {{-- HERO --}}

    <div class="container mx-auto px-4 py-16 from-purple-900 via-purple-800 to-purple-700">
        <div class="flex flex-col md:flex-row items-center justify-between gap-8">
            <div class="md:w-1/2 text-right animate__animated animate__fadeInRight">
                <img src="/image/logo.png" alt="برموز لوجو" class="mb-8 max-h-24 object-contain">

                <h1 class="text-4xl md:text-5xl font-bold mb-6 text-yellow-300 leading-tight">
                    نضع بصمتنا في إبراز هويتك التجارية
                </h1>

                <p class="text-lg md:text-xl mb-8 leading-relaxed text-gray-100">
                    نقدم لك حلول تسويقية متكاملة تعكس القوة والتميز، لترك انطباع استثنائي لدى عملائك
                </p>

                <div class="flex flex-col sm:flex-row gap-4 sm:space-x-reverse sm:space-x-4">
                    <a href="#"
                        class="bg-yellow-400 text-purple-900 px-6 py-3 rounded-lg font-bold
                        hover:bg-yellow-500 transition duration-300 text-center
                        animate__animated animate__pulse animate__infinite animate__slower">
                        احصل على استشارة مجانية
                    </a>
                    <a href="#"
                        class="border-2 border-yellow-300 text-yellow-300 px-6 py-3 rounded-lg font-bold
                        hover:bg-yellow-300 hover:text-purple-900 transition duration-300 text-center">
                        تعرف على خدماتنا
                    </a>
                </div>
            </div>

            <div class="md:w-1/2 flex justify-center animate__animated animate__fadeInLeft">
                <div class="relative w-full max-w-md">
                    <img src="/image/megaphone.png" alt="شخصية كرتونية"
                        class="w-full h-auto transform hover:scale-105 transition duration-500 drop-shadow-2xl">
                </div>
            </div>
        </div>
    </div>

    {{-- Our Inspiring Story --}}

    <section class="relative py-20 bg-gradient-to-br from-purple-900 via-purple-800 to-purple-700 overflow-hidden">

        </div>

        <div class="container mx-auto px-6 text-center relative z-10">
            <h2 class="text-4xl font-extrabold text-yellow-300 mb-6 animate__animated animate__fadeInDown">
                قصتنا المُلهمة
            </h2>
            <p class="text-lg text-gray-300 max-w-3xl mx-auto leading-relaxed animate__animated animate__fadeInUp">
                بدأنا رحلتنا بشغف في تحويل الأفكار إلى واقع، نهدف إلى الريادة في تقديم حلول إعلانية متطورة
                تمزج بين الإبداع والتكنولوجيا.
                <span class="cursor-pointer text-yellow-300 hover:underline" onclick="openStoryModal()">اقرأ المزيد...</span>
            </p>

            <div class="relative mt-12 flex justify-center">
                <div class="absolute -top-10 w-72 h-72 bg-yellow-400/10 blur-3xl rounded-full animate-pulse"></div>
                <div class="relative group cursor-pointer" onclick="openStoryModal()">
                    <div class="absolute -inset-2 bg-gradient-to-tr from-yellow-400/20 to-transparent rounded-lg blur-lg opacity-50 group-hover:opacity-75 transition-opacity duration-300"></div>
                    <img src="/image/story.png" alt="قصتنا"
                        class="relative mx-auto max-w-xs md:max-w-md rounded-lg shadow-2xl transform transition-transform duration-500 hover:scale-105">
                </div>
            </div>
        </div>

        <!-- Story Modal -->
        <div id="storyModal" class="fixed inset-0 z-50 hidden">
            <div class="absolute inset-0 bg-black/80 backdrop-blur-sm"></div>
            <div class="relative min-h-screen flex items-center justify-center p-4">
                <div class="bg-purple-900 rounded-xl max-w-2xl w-full p-6 md:p-8 transform transition-all">
                    <div class="flex justify-between items-center mb-6">
                        <h3 class="text-2xl font-bold text-yellow-300">قصتنا الكاملة</h3>
                        <button onclick="closeStoryModal()" class="text-gray-400 hover:text-yellow-300 transition-colors">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>
                    <div class="prose prose-invert prose-yellow max-w-none">
                        <p class="text-gray-300 leading-relaxed mb-4">
                            بدأت قصتنا عام 2010 بفريق صغير يحمل أحلاماً كبيرة. كنا نؤمن بأن الإعلان ليس مجرد صور وكلمات، بل هو فن صناعة التأثير وبناء العلاقات مع الجمهور.
                        </p>
                        <p class="text-gray-300 leading-relaxed mb-4">
                            على مر السنين، نجحنا في تطوير أساليبنا وتقنياتنا، مستفيدين من التطور التكنولوجي المتسارع. نفخر اليوم بفريقنا المحترف الذي يضم نخبة من المصممين والمسوقين وخبراء التسويق الرقمي.
                        </p>
                        <p class="text-gray-300 leading-relaxed">
                            نحن لا نقدم مجرد خدمات إعلانية، بل نصنع تجارب تسويقية متكاملة تساعد عملاءنا على النمو والتميز في السوق المحلي والإقليمي.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
