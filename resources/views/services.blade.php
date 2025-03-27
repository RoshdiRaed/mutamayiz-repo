@extends('head')
@extends('header')
<body class="bg-gradient-to-br from-purple-900 to-purple-700 text-white font-arabic min-h-screen mt-24">
<section class="from-purple-900 via-purple-800 to-purple-700 py-16 relative overflow-hidden ">
    <!-- Decorative background elements -->
    <div class="absolute inset-0">
        <div class="absolute top-0 right-0 w-72 h-72 bg-yellow-300/10 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 left-0 w-72 h-72 bg-purple-600/20 rounded-full blur-3xl"></div>
    </div>

    <div class="container mx-auto px-4 text-center relative z-10">
        <h2 class="text-4xl font-bold text-yellow-300 mb-12 animate__animated animate__fadeInDown">خدماتنا</h2>
        <p class="text-gray-300 text-lg mb-8 leading-relaxed">
            نقدم مجموعة متنوعة من الخدمات التي تساعدك على تحقيق أهدافك التجارية بأعلى مستويات الاحترافية.
        </p>

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
                    <a href="#" class="text-yellow-300 mt-4 inline-block hover:underline">اقرأ المزيد</a>
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
                    <a href="#" class="text-yellow-300 mt-4 inline-block hover:underline">اقرأ المزيد</a>
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
                    <a href="#" class="text-yellow-300 mt-4 inline-block hover:underline">اقرأ المزيد</a>
                </div>
            </div>
        </div>

        <!-- Call to Action -->
        <div class="mt-16">
            <h3 class="text-3xl font-bold text-yellow-300 mb-4">هل أنت جاهز للبدء؟</h3>
            <p class="text-gray-300 text-lg mb-6">تواصل معنا الآن للحصول على استشارة مجانية ومناقشة احتياجاتك.</p>
            <a href="/contact"
                class="px-6 py-3 bg-yellow-300 text-purple-900 font-semibold rounded-lg shadow-lg hover:bg-yellow-400 transition">
                تواصل معنا
            </a>
        </div>
    </div>
</section>
</body>
{{-- @include('footer') --}}
