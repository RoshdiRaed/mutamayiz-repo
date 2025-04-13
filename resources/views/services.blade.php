@extends('head')
<link rel="icon" type="image/png" href="/image/logo.png">

<body class="bg-gradient-to-br from-purple-900 to-purple-700 text-white font-arabic min-h-screen mt-24">
    <section class="py-16 relative overflow-hidden">
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
                @foreach ($services as $service)
                    <div class="group relative">
                        <div class="absolute inset-0 bg-gradient-to-r from-yellow-400/20 to-purple-600/20 rounded-xl blur opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>

                        <div class="relative p-8 bg-purple-900/80 backdrop-blur-sm rounded-xl shadow-xl transform transition duration-500 hover:-translate-y-2 border border-purple-800/50 hover:border-yellow-300/50">
                            @if ($service->created_at->diffInDays(now()) <= 7)
                                <span class="absolute top-3 left-3 bg-gradient-to-r from-yellow-300 to-yellow-500 text-purple-900 text-xs font-semibold px-4 py-1.5 rounded-full shadow-md transform -rotate-3 z-10 transition-all duration-300 hover:scale-105 hover:shadow-lg">
                                    خدمة جديدة
                                </span>
                            @endif

                            <div class="mb-6 h-64 overflow-hidden rounded-lg relative">
                                <img src="{{ Str::startsWith(json_decode($service->images)[0] ?? 'image/default.png', ['http://', 'https://'])
                                            ? json_decode($service->images)[0]
                                            : asset('storage/' . (json_decode($service->images)[0] ?? 'image/default.png')) }}"
                                     alt="{{ $service->title }}"
                                     class="w-full h-full object-cover transform transition-transform duration-500 group-hover:scale-110">
                            </div>

                            <h3 class="text-2xl font-semibold text-yellow-300 mb-4">{{ $service->title }}</h3>
                            <p class="text-gray-200 leading-relaxed">
                                {{ Str::words(strip_tags($service->description), 5, '...') }}
                            </p>

                            <button onclick="openModal('modal-{{ $service->id }}')" class="text-yellow-300 mt-4 inline-block hover:underline">
                                اقرأ المزيد
                            </button>

                            @auth
                                <div class="mt-4 flex space-x-2 justify-center">
                                    <a href="{{ route('services.edit', $service->id) }}"
                                       class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-1 px-3 rounded-lg">
                                        تعديل
                                    </a>
                                    <form action="{{ route('services.destroy', $service->id) }}" method="POST" onsubmit="return confirm('هل أنت متأكد من الحذف؟')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                                class="bg-red-500 hover:bg-red-600 text-white font-bold py-1 px-3 rounded-lg">
                                            حذف
                                        </button>
                                    </form>
                                </div>
                            @endauth
                        </div>
                    </div>

                    {{-- Modal --}}
                    <div id="modal-{{ $service->id }}" class="fixed inset-0 bg-black bg-opacity-75 flex items-center justify-center hidden z-50">
                        <div class="bg-purple-900/90 p-6 rounded-lg max-w-2xl w-full relative max-h-[80vh] flex flex-col">
                            <!-- Modified Close Button -->
                            <button onclick="closeModal('modal-{{ $service->id }}')"
                                    class="absolute top-3 right-3 bg-yellow-300 text-purple-900 w-8 h-8 flex items-center justify-center rounded-full text-lg font-bold hover:bg-yellow-400 transition"
                                    aria-label="إغلاق">
                                ×
                            </button>

                            <h3 class="text-2xl font-semibold text-yellow-300 mb-4">{{ $service->title }}</h3>
                            <div class="overflow-y-auto flex-1">
                                @foreach (json_decode($service->images) ?? ['image/default.png'] as $image)
                                    <img src="{{ Str::startsWith($image, ['http://', 'https://']) ? $image : asset('storage/' . $image) }}"
                                         alt="{{ $service->title }}"
                                         class="w-full h-auto object-cover rounded-lg mb-2">
                                @endforeach
                                <p class="text-gray-200 leading-relaxed mt-4">{{ $service->description }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="mt-16">
                <h3 class="text-3xl font-bold text-yellow-300 mb-4">هل أنت جاهز للبدء؟</h3>
                <p class="text-gray-300 text-lg mb-6">تواصل معنا الآن للحصول على استشارة مجانية ومناقشة احتياجاتك.</p>
                <div class="flex justify-center gap-4">
                    <a href="/" class="px-6 py-3 bg-yellow-300 text-purple-900 font-semibold rounded-lg shadow-lg hover:bg-yellow-400 transition">
                        تواصل معنا
                    </a>
                    <a href="/services" class="px-6 py-3 bg-purple-800 text-yellow-300 font-semibold rounded-lg shadow-lg hover:bg-purple-700 border border-yellow-300/50 hover:border-yellow-400 transition">
                        المزيد من الخدمات
                    </a>
                </div>
            </div>
        </div>
    </section>

    <script>
        function openModal(id) {
            document.getElementById(id).classList.remove('hidden');
        }

        function closeModal(id) {
            document.getElementById(id).classList.add('hidden');
        }
    </script>
    <script>
        function openModal(id) {
            document.getElementById(id).classList.remove('hidden');
        }

        function closeModal(id) {
            document.getElementById(id).classList.add('hidden');
        }

        // ⌨️ دعم زر Escape لإغلاق أي مودال مفتوح
        document.addEventListener('keydown', function (event) {
            if (event.key === 'Escape') {
                document.querySelectorAll('[id^="modal-"]').forEach(modal => {
                    if (!modal.classList.contains('hidden')) {
                        modal.classList.add('hidden');
                    }
                });
            }
        });
    </script>

</body>
