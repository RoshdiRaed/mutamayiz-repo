@extends('head')
@extends('header')

<body class="bg-gradient-to-br from-purple-900 to-purple-700 text-white font-arabic min-h-screen mt-20">

    <section class="py-16 from-purple-900 via-purple-800 to-purple-700">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-4xl font-bold text-yellow-300 mb-8">أعمالنا</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach ($works as $work)
                    <div class="relative overflow-hidden rounded-lg shadow-lg aspect-square group">
                        <!-- Only one image is displayed in the grid -->
                        <img src="{{ asset('storage/' . json_decode($work->images)[0] ?? 'default.jpg') }}"
                            alt="{{ $work->title }} - صورة المشروع"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                        <div
                            class="absolute inset-0 bg-purple-900 bg-opacity-80 flex flex-col items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 p-4 text-white">
                            <h3 class="text-2xl font-bold text-yellow-300 mb-2">{{ $work->title }}</h3>
                            <!-- Show only a brief description in the hover overlay -->
                            <p class="text-sm mb-4">{{ Str::limit($work->description, 100) }}</p>
                            <button onclick="openModal('modal-{{ $work->id }}')"
                                class="text-yellow-300 mt-4 inline-block hover:underline">تفاصيل المشروع</button>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="mt-12">
                <a href="/works"
                    class="inline-block bg-yellow-400 text-purple-900 px-8 py-3 rounded-lg font-bold hover:bg-yellow-500 transition duration-300 transform hover:scale-105 hover:shadow-lg">
                    المزيد من أعمالنا
                </a>
            </div>
        </div>
    </section>

    <!-- Modals -->
    @foreach ($works as $work)
        <div id="modal-{{ $work->id }}"
            class="fixed inset-0 bg-black bg-opacity-70 z-50 hidden items-center justify-center p-4 transition-opacity duration-300">
            <div
                class="bg-purple-800 rounded-xl max-w-4xl w-full max-h-[90vh] overflow-y-auto shadow-2xl transform transition-all duration-300 scale-95 opacity-0 popup-content">
                <!-- Close Button -->
                <button onclick="closeModal('modal-{{ $work->id }}')"
                    class="absolute top-4 right-4 text-white hover:text-yellow-300 text-3xl font-bold transition-colors duration-200 focus:outline-none">
                    ×
                </button>

                <!-- Modal Content -->
                <div class="p-6 md:p-8">
                    <div class="grid md:grid-cols-2 gap-6">
                        <div class="space-y-4">
                            <!-- Main image first -->
                            <img src="{{ asset('storage/' . json_decode($work->images)[0] ?? 'default.jpg') }}"
                                alt="{{ $work->title }} - صورة رئيسية"
                                class="w-full h-auto object-cover rounded-lg shadow-md">

                            <!-- Only show additional images in the popup -->
                            @if (count(json_decode($work->images)) > 1)
                                <div class="grid grid-cols-2 gap-2">
                                    @foreach (array_slice(json_decode($work->images), 1) as $image)
                                        <img src="{{ asset('storage/' . $image) }}" alt="تفاصيل إضافية"
                                            class="rounded-lg shadow-md hover:scale-105 transition-transform duration-200">
                                    @endforeach
                                </div>
                            @endif
                        </div>
                        <div class="text-white space-y-4">
                            <h3 class="text-3xl font-bold text-yellow-300 mb-4">{{ $work->title }} تفاصيل</h3>
                            <!-- Full description in the popup -->
                            <p class="text-gray-100 leading-relaxed">{{ $work->full_description }}</p>
                            <ul class="list-disc list-inside text-gray-200 space-y-2">
                                @if ($work->features && is_array($work->features))
                                    @foreach ($work->features as $feature)
                                        <li>{{ $feature }}</li>
                                    @endforeach
                                @else
                                    <li>لا توجد مميزات.</li>
                                @endif
                            </ul>
                            <p class="text-gray-100 leading-relaxed">{{ $work->detailed_text }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

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
                        <li><a href="#" class="hover:text-yellow-400 transition duration-300">تواصل معنا</a></li>
                        <li><a href="{{ asset('login') }}" class="hover:text-yellow-400 transition duration-300">تسجيل
                                دخول الإدارة</a></li>
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
                <span id="year"></span> المتميّز للدعاية والإعلان. جميع الحقوق محفوظة &copy; <?php echo date('Y'); ?>
            </div>
        </div>

        <!-- Floating Glow Effect -->
        <div
            class="absolute inset-x-0 bottom-0 h-12 bg-gradient-to-t from-yellow-500/10 to-transparent blur-xl opacity-40">
        </div>
    </footer>

    <script>
        function openModal(modalId) {
            document.getElementById(modalId).classList.remove('hidden');
            document.getElementById(modalId).classList.add('flex');
            setTimeout(() => {
                document.querySelector(`#${modalId} .popup-content`).classList.remove('scale-95', 'opacity-0');
                document.querySelector(`#${modalId} .popup-content`).classList.add('scale-100', 'opacity-100');
            }, 10);
        }

        function closeModal(modalId) {
            document.querySelector(`#${modalId} .popup-content`).classList.remove('scale-100', 'opacity-100');
            document.querySelector(`#${modalId} .popup-content`).classList.add('scale-95', 'opacity-0');

            setTimeout(() => {
                document.getElementById(modalId).classList.add('hidden');
                document.getElementById(modalId).classList.remove('flex');
            }, 300);
        }
    </script>
</body>
