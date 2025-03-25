<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="برموز للدعاية والإعلان - حلول تسويقية متكاملة">
    <meta name="keywords" content="دعاية, اعلان, تسويق, هوية تجارية">
    <title>المتميّز للدعاية والإعلان</title>

    <!-- Styles -->
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

    <!-- Favicon -->
    <link rel="icon" type="image/logo.png" href="/image/logo.png">
    <style>
        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            right: 0;
            background: linear-gradient(to right, #fbbf24, #f59e0b);
            transition: width 0.3s ease-in-out;
        }

        .nav-link:hover::after {
            width: 100%;
        }
    </style>
</head>

<body class="bg-gradient-to-br from-purple-900 to-purple-700 text-white font-arabic min-h-screen">
    {{-- NAVBAR --}}
    <nav class="fixed top-4 left-0 right-0 mx-auto w-11/12 max-w-6xl bg-purple-900/95 backdrop-blur-sm text-white py-4 shadow-xl z-50 rounded-2xl animate__animated animate__fadeInDown">
        <div class="container mx-auto px-4">
            <div class="flex items-center justify-between">
                <!-- Logo Section -->
                <div class="flex items-center space-x-reverse space-x-4 group">
                    <img src="/image/logo.png" alt="برموز لوجو" class="h-12 w-auto transform transition-transform duration-300 group-hover:scale-110">
                    <span class="text-xl font-bold bg-gradient-to-r from-yellow-200 to-yellow-400 bg-clip-text text-transparent" style="font-family: cairo">
                        المتميّز
                    </span>
                </div>

                <!-- Desktop Menu -->
                <ul class="hidden lg:flex items-center space-x-reverse space-x-8">
                    <li><a href="#" class="nav-link relative font-medium py-2 hover:text-yellow-300 transition-colors duration-300">الرئيسية</a></li>
                    <li><a href="#" class="nav-link relative font-medium py-2 hover:text-yellow-300 transition-colors duration-300">خدماتنا</a></li>
                    <li><a href="#" class="nav-link relative font-medium py-2 hover:text-yellow-300 transition-colors duration-300">أعمالنا</a></li>
                    <li><a href="#" class="nav-link relative font-medium py-2 hover:text-yellow-300 transition-colors duration-300">من نحن</a></li>
                    <li class="mr-4">
                        <a href="#" class="bg-gradient-to-r from-yellow-400 to-yellow-500 text-purple-900 px-6 py-2.5 rounded-lg font-bold hover:from-yellow-500 hover:to-yellow-600 transition duration-300 transform hover:scale-105 hover:shadow-lg">
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
        <div id="mobile-menu" class="fixed inset-0 bg-purple-900/98 backdrop-blur-md z-50 hidden transition-all duration-300">
            <div class="flex justify-between items-center p-6 border-b border-purple-800">
                <img src="/image/logo.png" alt="برموز لوجو" class="h-12 w-auto">
                <button id="mobile-menu-close" class="text-yellow-300 focus:outline-none">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <ul class="flex flex-col items-center space-y-6 mt-12 text-lg p-6">
                <li><a href="#" class="text-yellow-300 font-medium hover:scale-105 transform transition-all duration-300 block">الرئيسية</a></li>
                <li><a href="#" class="hover:text-yellow-300 transition-colors duration-300 hover:scale-105 transform block">خدماتنا</a></li>
                <li><a href="#" class="hover:text-yellow-300 transition-colors duration-300 hover:scale-105 transform block">أعمالنا</a></li>
                <li><a href="#" class="hover:text-yellow-300 transition-colors duration-300 hover:scale-105 transform block">من نحن</a></li>
                <li>
                    <a href="#" class="bg-gradient-to-r from-yellow-400 to-yellow-500 text-purple-900 px-8 py-3 rounded-lg font-bold hover:from-yellow-500 hover:to-yellow-600 transition duration-300 hover:scale-105 transform block">
                        تواصل معنا
                    </a>
                </li>
            </ul>
        </div>
    </nav>

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
                    <img src="/image/logo.png" alt="شخصية كرتونية"
                        class="w-full h-auto transform hover:scale-105 transition duration-500 drop-shadow-2xl">
                </div>
            </div>
        </div>
    </div>

    {{-- Our Inspiring Story --}}

    <section class="relative py-0 bg-gradient-to-br overflow-hidden">
        <div class="absolute inset-0">
            <div class="absolute top-0 left-0 w-full h-64 bg-gradient-to-b"></div>
            <div class="absolute bottom-0 right-0 w-96 h-96 bg-[#FFDF20]/10 rounded-full blur-3xl"></div>
            <div class="absolute top-32 left-20 w-72 h-72 bg-[#FFDF20]/10 rounded-full blur-3xl"></div>
        </div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-5xl font-bold text-[#FFDF20] mb-8 animate__animated animate__fadeInDown">
                    مسيرة النجاح والإبداع
                </h2>
                <p class="text-xl text-gray-300 leading-loose mb-12 animate__animated animate__fadeInUp">
                    نحن نؤمن بأن كل علامة تجارية لديها قصة فريدة تستحق أن تُروى بأسلوب مميز.
                    <button
                        class="inline-flex items-center text-[#FFDF20] hover:text-[#FFDF20]/80 transition-colors duration-300"
                        onclick="openStoryModal()">
                        اكتشف المزيد
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 7l5 5m0 0l-5 5m5-5H6" />
                        </svg>
                    </button>
                </p>
            </div>

            <div class="relative mt-16">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div
                        class="bg-[#59168B]/50 backdrop-blur-sm p-6 rounded-xl border border-[#59168B]/50 hover:border-[#FFDF20]/50 transition-all duration-300">
                        <h3 class="text-xl font-semibold text-[#FFDF20] mb-4">رؤيتنا</h3>
                        <p class="text-gray-300">نسعى لتقديم حلول إبداعية تتجاوز التوقعات وتحقق نتائج ملموسة</p>
                    </div>
                    <div
                        class="bg-[#59168B]/50 backdrop-blur-sm p-6 rounded-xl border border-[#59168B]/50 hover:border-[#FFDF20]/50 transition-all duration-300">
                        <h3 class="text-xl font-semibold text-[#FFDF20] mb-4">قيمنا</h3>
                        <p class="text-gray-300">الابتكار، الشغف، الالتزام، والتميز في كل ما نقدمه</p>
                    </div>
                    <div
                        class="bg-[#59168B]/50 backdrop-blur-sm p-6 rounded-xl border border-[#59168B]/50 hover:border-[#FFDF20]/50 transition-all duration-300">
                        <h3 class="text-xl font-semibold text-[#FFDF20] mb-4">هدفنا</h3>
                        <p class="text-gray-300">تمكين عملائنا من تحقيق النجاح في عالم الأعمال المتغير</p>
                    </div>
                </div>
            </div>
        </div>

        <hr
            class="my-12 border-0 h-px bg-gradient-to-r from-transparent via-yellow-300/50 to-transparent max-w-4xl mx-auto opacity-50">

        <!-- Story Modal -->
        <div id="storyModal" class="fixed inset-0 z-50 hidden">
            <!-- Backdrop with blur effect -->
            <div class="absolute inset-0 bg-black/75 backdrop-blur-md transition-all duration-300"></div>

            <!-- Modal Container -->
            <div class="relative min-h-screen flex items-center justify-center p-4">
                <div
                    class="bg-gradient-to-br from-purple-900/95 to-purple-800/95 rounded-3xl max-w-4xl w-full p-10
                border border-yellow-300/20 shadow-2xl transform transition-all duration-500
                hover:border-yellow-300/30 backdrop-blur-lg">

                    <!-- Header -->
                    <div class="flex justify-between items-center mb-10">
                        <h3
                            class="text-4xl font-bold bg-gradient-to-r from-yellow-200 to-yellow-400
                   bg-clip-text text-transparent animate__animated animate__fadeIn">
                            قصتنا بالتفصيل
                        </h3>
                        <button onclick="closeStoryModal()"
                            class="group relative p-2 rounded-full hover:bg-yellow-300/10
                   transition-all duration-300 transform hover:scale-110">
                            <svg class="w-8 h-8 text-yellow-300/80 group-hover:text-yellow-300
                  transition-colors duration-300"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>

                    <!-- Content with Image Grid -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <!-- Text Content -->
                        <div class="space-y-6 text-lg">
                            <p
                                class="text-gray-200 leading-relaxed animate__animated animate__fadeInUp animate__delay-1s">
                                منذ بداياتنا المتواضعة، وضعنا نصب أعيننا هدفاً واضحاً: أن نكون روّاداً في مجال الإبداع
                                الإعلاني.
                            </p>
                            <p
                                class="text-gray-200 leading-relaxed animate__animated animate__fadeInUp animate__delay-2s">
                                نجمع بين الخبرة العميقة والتقنيات المتطورة لنقدم حلولاً إبداعية تتجاوز توقعات عملائنا.
                            </p>
                            <p
                                class="text-gray-200 leading-relaxed animate__animated animate__fadeInUp animate__delay-3s">
                                نفخر اليوم بمسيرتنا الحافلة بالإنجازات والنجاحات التي حققناها مع شركائنا في النجاح.
                            </p>

                            <!-- Contact Links -->
                            <div class="flex flex-wrap gap-4 mt-24">
                                <a href="tel:+970599999999"
                                    class="flex items-center gap-2 px-4 py-2 bg-yellow-400/10 rounded-lg
                      hover:bg-yellow-400/20 transition-all duration-300">
                                    <svg class="w-5 h-5 text-yellow-300" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                    </svg>
                                    <span class="text-yellow-300">اتصل بنا</span>
                                </a>
                                <a href="https://wa.me/970599999999" target="_blank"
                                    class="flex items-center gap-2 px-4 py-2 bg-yellow-400/10 rounded-lg
                      hover:bg-yellow-400/20 transition-all duration-300">
                                    <svg class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z" />
                                    </svg>
                                    <span class="text-yellow-300">واتساب</span>
                                </a>
                            </div>
                        </div>

                        <!-- Image Grid -->
                        <div class="grid grid-cols-2 gap-4">
                            <img src="/image/pic1.jpg" alt="Our Journey 1"
                                class="w-full h-48 object-cover rounded-lg shadow-lg transform hover:scale-105 transition-transform duration-300">
                            <img src="/image/pic2.jpg" alt="Our Journey 2"
                                class="w-full h-48 object-cover rounded-lg shadow-lg transform hover:scale-105 transition-transform duration-300">
                            <img src="/image/pic3.jpg" alt="Our Journey 3"
                                class="w-full h-48 object-cover rounded-lg shadow-lg transform hover:scale-105 transition-transform duration-300">
                            <img src="/image/pic4.jpg" alt="Our Journey 4"
                                class="w-full h-48 object-cover rounded-lg shadow-lg transform hover:scale-105 transition-transform duration-300">
                        </div>
                    </div>

                    <!-- Decorative elements -->
                    <div class="absolute -top-10 -right-10 w-40 h-40 bg-yellow-300/10 rounded-full blur-3xl"></div>
                    <div class="absolute -bottom-10 -left-10 w-40 h-40 bg-purple-600/20 rounded-full blur-3xl"></div>
                </div>
            </div>
        </div>
    </section>


    {{-- SERVICES --}}

    <section class="from-purple-900 via-purple-800 to-purple-700 py-16 relative overflow-hidden">
        <!-- Decorative background elements -->
        <div class="absolute inset-0">
            <div class="absolute top-0 right-0 w-72 h-72 bg-yellow-300/10 rounded-full blur-3xl"></div>
            <div class="absolute bottom-0 left-0 w-72 h-72 bg-purple-600/20 rounded-full blur-3xl"></div>
        </div>

        <div class="container mx-auto px-4 text-center relative z-10">
            <h2 class="text-4xl font-bold text-yellow-300 mb-12 animate__animated animate__fadeInDown">خدماتنا</h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Service Card 1 -->
                <div class="group relative">
                    <div
                        class="absolute inset-0 bg-gradient-to-r from-yellow-400/20 to-purple-600/20 rounded-xl blur opacity-0
                        group-hover:opacity-100 transition-opacity duration-500">
                    </div>

                    <div
                        class="relative p-8 bg-purple-900/80 backdrop-blur-sm rounded-xl shadow-xl
                        transform transition-all duration-500 hover:-translate-y-2
                        border border-purple-800/50 hover:border-yellow-300/50">

                        <div class="mb-6 relative h-62 overflow-hidden rounded-lg">
                            <img src="/image/ser1.jpg" alt="تصميم الهوية البصرية"
                                class="w-full h-full object-cover transform transition-transform duration-500
                                group-hover:scale-110">
                        </div>

                        <h3 class="text-2xl font-semibold text-yellow-300 mb-4">تصميم الهوية البصرية</h3>
                        <p class="text-gray-200 leading-relaxed">نساعدك في إنشاء هوية متميزة تعكس قيم شركتك وتترك
                            انطباعاً لا يُنسى.</p>
                    </div>
                </div>

                <!-- Service Card 2 -->
                <div class="group relative">
                    <div
                        class="absolute inset-0 bg-gradient-to-r from-yellow-400/20 to-purple-600/20 rounded-xl blur opacity-0
                        group-hover:opacity-100 transition-opacity duration-500">
                    </div>

                    <div
                        class="relative p-8 bg-purple-900/80 backdrop-blur-sm rounded-xl shadow-xl
                        transform transition-all duration-500 hover:-translate-y-2
                        border border-purple-800/50 hover:border-yellow-300/50">

                        <div class="mb-6 relative h-62 overflow-hidden rounded-lg">
                            <img src="/image/ser2.jpg" alt="إدارة الحملات الإعلانية"
                                class="w-full h-full object-cover transform transition-transform duration-500
                                group-hover:scale-110">
                        </div>

                        <h3 class="text-2xl font-semibold text-yellow-300 mb-4">إدارة الحملات الإعلانية</h3>
                        <p class="text-gray-200 leading-relaxed">نضمن وصول علامتك التجارية للجمهور المستهدف بأفضل
                            الاستراتيجيات.</p>
                    </div>
                </div>

                <!-- Service Card 3 -->
                <div class="group relative">
                    <div
                        class="absolute inset-0 bg-gradient-to-r from-yellow-400/20 to-purple-600/20 rounded-xl blur opacity-0
                        group-hover:opacity-100 transition-opacity duration-500">
                    </div>

                    <div
                        class="relative p-8 bg-purple-900/80 backdrop-blur-sm rounded-xl shadow-xl
                        transform transition-all duration-500 hover:-translate-y-2
                        border border-purple-800/50 hover:border-yellow-300/50">

                        <div class="mb-6 relative h-62 overflow-hidden rounded-lg">
                            <img src="/image/ser3.jpg" alt="التسويق الرقمي"
                                class="w-full h-full object-cover transform transition-transform duration-500
                                group-hover:scale-110">
                        </div>

                        <h3 class="text-2xl font-semibold text-yellow-300 mb-4">التسويق الرقمي</h3>
                        <p class="text-gray-200 leading-relaxed">استراتيجيات رقمية مبتكرة لزيادة التفاعل وتحقيق
                            الانتشار الواسع، وإضافة طابع احترافي.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <hr
        class="my-12 border-0 h-px bg-gradient-to-r from-transparent via-yellow-300/50 to-transparent max-w-4xl mx-auto opacity-50">


    {{-- PORTFOLIO --}}

    <section class="py-16 from-purple-900 via-purple-800 to-purple-700">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-4xl font-bold text-yellow-300 mb-8">أعمالنا</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="overflow-hidden rounded-lg shadow-lg aspect-square">
                    <img src="/image/pro1.jpeg" alt="مشروع 1" class="w-full h-full object-cover">
                </div>
                <div class="overflow-hidden rounded-lg shadow-lg aspect-square">
                    <img src="/image/pro2.jpeg" alt="مشروع 2" class="w-full h-full object-cover">
                </div>
                <div class="overflow-hidden rounded-lg shadow-lg aspect-square">
                    <img src="/image/pro3.jpeg" alt="مشروع 3" class="w-full h-full object-cover">
                </div>
            </div>
            <div class="mt-12">
                <a href="#"
                    class="inline-block bg-yellow-400 text-purple-900 px-8 py-3 rounded-lg font-bold
                    hover:bg-yellow-500 transition duration-300 transform hover:scale-105 hover:shadow-lg">
                    المزيد من أعمالنا
                </a>
            </div>
        </div>
    </section>

    {{-- Why Choose Us? --}}

    <section class="py-16 from-purple-900 via-purple-800 to-purple-700">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-4xl font-bold text-yellow-300 mb-12">لماذا نحن؟</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div
                    class="relative p-8 bg-purple-900 rounded-2xl shadow-lg transform transition hover:scale-105 group">
                    <div
                        class="absolute inset-0 bg-yellow-400/10 blur-lg opacity-0 group-hover:opacity-100 transition duration-500">
                    </div>
                    <h3 class="text-2xl font-semibold text-yellow-300 mb-4">إبداع غير محدود</h3>
                    <p class="text-gray-200">نعمل على تحويل رؤيتك إلى تصميمات وحملات إعلانية مذهلة.</p>
                </div>
                <div
                    class="relative p-8 bg-purple-900 rounded-2xl shadow-lg transform transition hover:scale-105 group">
                    <div
                        class="absolute inset-0 bg-yellow-400/10 blur-lg opacity-0 group-hover:opacity-100 transition duration-500">
                    </div>
                    <h3 class="text-2xl font-semibold text-yellow-300 mb-4">أحدث التقنيات</h3>
                    <p class="text-gray-200">نستخدم أدوات الذكاء الاصطناعي والتسويق الرقمي لضمان نتائج احترافية.</p>
                </div>
                <div
                    class="relative p-8 bg-purple-900 rounded-2xl shadow-lg transform transition hover:scale-105 group">
                    <div
                        class="absolute inset-0 bg-yellow-400/10 blur-lg opacity-0 group-hover:opacity-100 transition duration-500">
                    </div>
                    <h3 class="text-2xl font-semibold text-yellow-300 mb-4">فريق محترف</h3>
                    <p class="text-gray-200">نمتلك نخبة من المصممين والمسوقين لضمان تحقيق أهدافك التجارية.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Contact Us --}}

    <section class="py-20 bg-gradient-to-br  relative overflow-hidden">
        <!-- Decorative elements -->
        <div class="absolute inset-0">
            <div class="absolute -top-24 -right-24 w-96 h-96 bg-yellow-400/10 rounded-full blur-3xl"></div>
            <div class="absolute -bottom-24 -left-24 w-96 h-96 bg-purple-600/20 rounded-full blur-3xl"></div>
        </div>

        <div class="container mx-auto px-4 relative">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-yellow-300 mb-4 animate__animated animate__fadeInDown">تواصل معنا
                </h2>
                <p class="text-gray-300 max-w-2xl mx-auto">نحن هنا لمساعدتك في تحقيق رؤيتك. راسلنا وسنرد عليك في أقرب
                    وقت ممكن</p>
            </div>

            <form
                class="max-w-2xl mx-auto backdrop-blur-lg bg-purple-900/50 p-8 rounded-2xl shadow-xl border border-purple-700/50">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="group">
                        <input type="text" placeholder="الاسم الكامل" required
                            class="w-full px-4 py-3 rounded-lg bg-purple-800/50 text-white placeholder-gray-400
                            border-2 border-transparent focus:border-yellow-400/50 focus:bg-purple-800/80
                            transition-all duration-300 outline-none">
                    </div>

                    <div class="group">
                        <input type="email" placeholder="البريد الإلكتروني" required
                            class="w-full px-4 py-3 rounded-lg bg-purple-800/50 text-white placeholder-gray-400
                            border-2 border-transparent focus:border-yellow-400/50 focus:bg-purple-800/80
                            transition-all duration-300 outline-none">
                    </div>

                    <div class="md:col-span-2">
                        <input type="text" placeholder="عنوان الرسالة"
                            class="w-full px-4 py-3 rounded-lg bg-purple-800/50 text-white placeholder-gray-400
                            border-2 border-transparent focus:border-yellow-400/50 focus:bg-purple-800/80
                            transition-all duration-300 outline-none">
                    </div>

                    <div class="md:col-span-2">
                        <textarea placeholder="رسالتك" rows="5" required
                            class="w-full px-4 py-3 rounded-lg bg-purple-800/50 text-white placeholder-gray-400
                            border-2 border-transparent focus:border-yellow-400/50 focus:bg-purple-800/80
                            transition-all duration-300 outline-none resize-none"></textarea>
                    </div>
                </div>

                <div class="mt-6 text-center">
                    <button type="submit"
                        class="group relative inline-flex items-center justify-center px-8 py-3 font-bold
                        text-purple-900 bg-gradient-to-r from-yellow-400 to-yellow-500 rounded-lg
                        transform transition-all duration-300 hover:scale-105 hover:from-yellow-500 hover:to-yellow-600
                        focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:ring-offset-2 focus:ring-offset-purple-900">
                        <span class="relative">إرسال الرسالة</span>
                        <span
                            class="absolute right-0 transform translate-x-full opacity-0 group-hover:translate-x-0
                            group-hover:opacity-100 transition-all duration-300">
                            →
                        </span>
                    </button>
                </div>
            </form>
        </div>
    </section>

    {{-- FOOTER --}}

    <footer class="relative bg-gradient-to-br from-purple-900 to-purple-800 text-gray-200 pt-12 pb-6">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center md:text-right">

                <!-- Section 1: About -->
                <div class="space-y-4">
                    <h3 class="text-xl font-bold text-yellow-300">المتميّز للدعاية والإعلان</h3>
                    <p class="text-gray-300 leading-relaxed">
                        نقدم حلولاً إعلانية مبتكرة تعكس التميز وتعزز الهوية التجارية بأسلوب احترافي.
                    </p>
                </div>

                <!-- Section 2: Quick Links -->
                <div>
                    <h3 class="text-xl font-bold text-yellow-300 mb-4">روابط سريعة</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="hover:text-yellow-400 transition duration-300">الرئيسية</a></li>
                        <li><a href="#" class="hover:text-yellow-400 transition duration-300">خدماتنا</a></li>
                        <li><a href="#" class="hover:text-yellow-400 transition duration-300">أعمالنا</a></li>
                        <li><a href="#" class="hover:text-yellow-400 transition duration-300">من نحن</a></li>
                        <li><a href="#" class="hover:text-yellow-400 transition duration-300">تواصل معنا</a>
                        </li>
                    </ul>
                </div>

                <!-- Section 3: Contact Info -->
                <div>
                    <h3 class="text-xl font-bold text-yellow-300 mb-4">تواصل معنا</h3>
                    <p class="flex items-center justify-center md:justify-start gap-2">
                        <svg class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M2.94 2.94a2 2 0 012.83 0l9.25 9.25a2 2 0 010 2.83l-2.83 2.83a2 2 0 01-2.83 0L2.94 8.6a2 2 0 010-2.83l2.83-2.83a2 2 0 012.83 0l-2.83 2.83a1 1 0 01-1.42 0l-2.83-2.83a1 1 0 010-1.42z">
                            </path>
                        </svg>
                        info@almutamize.com
                    </p>
                    <p class="flex items-center justify-center md:justify-start gap-2">
                        <svg class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M4 3a1 1 0 011-1h10a1 1 0 011 1v14l-6-3-6 3V3z"></path>
                        </svg>
                        +970 599 999 999
                    </p>
                </div>

            </div>

            <!-- Social Media Links -->
            <div class="mt-10 flex justify-center space-x-6 text-yellow-400">
                <a href="#" class="hover:text-yellow-500 transition transform hover:scale-110">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M22 12..."></path>
                    </svg>
                </a>
                <a href="#" class="hover:text-yellow-500 transition transform hover:scale-110">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M22 12..."></path>
                    </svg>
                </a>
                <a href="#" class="hover:text-yellow-500 transition transform hover:scale-110">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M22 12..."></path>
                    </svg>
                </a>
            </div>

            <!-- Copyright -->
            <div class="mt-10 text-center text-gray-400 text-sm">
                &copy; <span id="year"></span> المتميّز للدعاية والإعلان. جميع الحقوق محفوظة.
            </div>
        </div>

        <!-- Floating Glow Effect -->
        <div
            class="absolute inset-x-0 bottom-0 h-12 bg-gradient-to-t from-yellow-500/10 to-transparent blur-xl opacity-40">
        </div>
    </footer>

    <script>
        document.getElementById("year").textContent = new Date().getFullYear();
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
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
</body>

</html>
