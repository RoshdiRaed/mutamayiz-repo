@extends('head')
@include('header')

<body class="bg-gradient-to-br from-purple-900 to-purple-700 text-white font-arabic min-h-screen mt-24">
    <section class="from-purple-900 via-purple-800 to-purple-700 py-16 relative overflow-hidden">
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
                @foreach ($services as $service)
                    <!-- Service Card -->
                    <div class="group relative">
                        <div class="absolute inset-0 bg-gradient-to-r from-yellow-400/20 to-purple-600/20 rounded-xl blur opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>

                        <div class="relative p-8 bg-purple-900/80 backdrop-blur-sm rounded-xl shadow-xl transform transition-all duration-500 hover:-translate-y-2 border border-purple-800/50 hover:border-yellow-300/50">
                            <div class="mb-6 relative h-64 overflow-hidden rounded-lg">
                                <img src="{{ asset('storage/' . (json_decode($service->images)[0] ?? 'default.jpg')) }}"
                                    alt="{{ $service->title }}"
                                    class="w-full h-full object-cover transform transition-transform duration-500 group-hover:scale-110">
                            </div>

                            <h3 class="text-2xl font-semibold text-yellow-300 mb-4">{{ $service->title }}</h3>
                            <p class="text-gray-200 leading-relaxed">
                                {{ implode(' ', array_slice(explode(' ', $service->description), 0, 5)) }}
                            </p>
                            <button onclick="openModal('modal-{{ $service->id }}')" class="text-yellow-300 mt-4 inline-block hover:underline">اقرأ المزيد</button>

                            <!-- Admin Buttons -->
                            @auth
                                @if (Auth::user()->is_admin)
                                    <div class="mt-4 flex space-x-2">
                                        <a href="{{ route('services.edit', $service->id) }}"
                                            class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-1 px-3 rounded-lg">
                                            {{ __('تعديل') }}
                                        </a>
                                        <form action="{{ route('services.destroy', $service->id) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-bold py-1 px-3 rounded-lg"
                                                onclick="return confirm('{{ __('هل أنت متأكد من الحذف؟') }}')">
                                                {{ __('حذف') }}
                                            </button>
                                        </form>
                                    </div>
                                @endif
                            @endauth
                        </div>
                    </div>

                    <!-- Modal Popup with Scrollbar -->
                    <div id="modal-{{ $service->id }}" class="fixed inset-0 bg-black bg-opacity-75 flex items-center justify-center hidden z-50">
                        <div class="bg-purple-900/90 p-6 rounded-lg max-w-2xl w-full relative max-h-[80vh] flex flex-col">
                            <button onclick="closeModal('modal-{{ $service->id }}')" class="absolute top-2 right-2 text-yellow-300 text-2xl">×</button>
                            <h3 class="text-2xl font-semibold text-yellow-300 mb-4">{{ $service->title }}</h3>
                            <div class="overflow-y-auto flex-1">
                                @foreach (json_decode($service->images) ?? ['./image/ser2.jpg'] as $image)
                                    <img src="{{ asset('storage/' . $image) }}" alt="{{ $service->title }}"
                                        class="w-full h-auto object-cover rounded-lg mb-2">
                                @endforeach
                                <p class="text-gray-200 leading-relaxed">{{ $service->description }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Call to Action -->
            <div class="mt-16">
                <h3 class="text-3xl font-bold text-yellow-300 mb-4">هل أنت جاهز للبدء؟</h3>
                <p class="text-gray-300 text-lg mb-6">تواصل معنا الآن للحصول على استشارة مجانية ومناقشة احتياجاتك.</p>
                <a href="/contact" class="px-6 py-3 bg-yellow-300 text-purple-900 font-semibold rounded-lg shadow-lg hover:bg-yellow-400 transition">
                    تواصل معنا
                </a>
            </div>
        </div>
    </section>

    <!-- JavaScript for Modal -->
    <script>
        function openModal(modalId) {
            document.getElementById(modalId).classList.remove('hidden');
        }

        function closeModal(modalId) {
            document.getElementById(modalId).classList.add('hidden');
        }
    </script>
</body>
