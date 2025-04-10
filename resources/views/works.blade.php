@extends('head')
@extends('header')

<body class="bg-gradient-to-br from-purple-900 to-purple-700 text-white font-arabic min-h-screen mt-20">

    <section class="py-16 from-purple-900 via-purple-800 to-purple-700">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-4xl font-bold text-yellow-300 mb-8">أعمالنا</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach ($works as $work)
                    <div class="relative overflow-hidden rounded-lg shadow-lg aspect-square group">
                        <img src="{{ asset('storage/' . json_decode($work->images)[0] ?? 'default.jpg') }}"
                            alt="{{ $work->title }} - صورة المشروع"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                        <div
                            class="absolute inset-0 bg-purple-900 bg-opacity-80 flex flex-col items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 p-4 text-white">
                            <h3 class="text-2xl font-bold text-yellow-300 mb-2">{{ $work->title }}</h3>
                            <p class="text-sm mb-4">{{ Str::limit($work->description, 100) }}</p>
                            <button onclick="openModal('modal-{{ $work->id }}')"
                                class="text-yellow-300 mt-4 inline-block hover:underline">تفاصيل المشروع</button>

                            @auth
                                <div class="mt-4 flex space-x-4">
                                    <a href="{{ route('works.edit', $work->id) }}"
                                        class="text-yellow-300 hover:text-yellow-400 underline">تعديل</a>
                                    <button onclick="openDeleteConfirmation('delete-modal-{{ $work->id }}')"
                                        class="text-red-400 hover:text-red-500 underline">حذف</button>
                                </div>
                            @endauth
                        </div>
                    </div>

                    @auth
                        <!-- Delete Modal -->
                        <div id="delete-modal-{{ $work->id }}"
                            class="fixed inset-0 bg-black bg-opacity-70 z-50 hidden items-center justify-center p-4 transition-opacity duration-300">
                            <div
                                class="bg-purple-800 rounded-xl max-w-md w-full p-6 shadow-2xl transform transition-all duration-300 scale-95 opacity-0 popup-content">
                                <h3 class="text-2xl font-bold text-yellow-300 mb-4">تأكيد الحذف</h3>
                                <p class="text-gray-100 mb-6">هل أنت متأكد من حذف "{{ $work->title }}"؟ هذا الإجراء لا يمكن
                                    التراجع عنه.</p>
                                <div class="flex justify-end space-x-4">
                                    <button onclick="closeDeleteConfirmation('delete-modal-{{ $work->id }}')"
                                        class="text-gray-300 hover:text-white">إلغاء</button>
                                    <form action="{{ route('works.destroy', $work->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="text-red-400 hover:text-red-500 font-bold">حذف</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endauth
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

    <!-- Project Detail Modals -->
    @foreach ($works as $work)
        <div id="modal-{{ $work->id }}"
            class="fixed inset-0 bg-black bg-opacity-70 z-50 hidden items-center justify-center p-4 transition-opacity duration-300">
            <div
                class="bg-purple-800 rounded-xl max-w-4xl w-full max-h-[90vh] overflow-y-auto shadow-2xl transform transition-all duration-300 scale-95 opacity-0 popup-content relative mt-20">
                <button onclick="closeModal('modal-{{ $work->id }}')"
                    class="absolute top-4 right-4 text-white hover:text-yellow-300 text-3xl font-bold transition-colors duration-200">
                    ×
                </button>
                <div class="p-6 md:p-8">
                    <div class="grid md:grid-cols-2 gap-6">
                        <div class="space-y-4">
                            <img src="{{ asset('storage/' . json_decode($work->images)[0] ?? 'default.jpg') }}"
                                alt="{{ $work->title }} - صورة رئيسية"
                                class="w-full h-auto object-cover rounded-lg shadow-md">
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
                            <h3 class="text-3xl font-bold text-yellow-300 mb-4">تفاصيل {{ $work->title }}</h3>
                            <p class="text-gray-100 leading-relaxed">{{ $work->description }}</p>
                            <ul class="list-disc list-inside text-gray-200 space-y-2">
                                @if ($work->description && is_array($work->description))
                                    @foreach ($work->description as $feature)
                                        <li>{{ $feature }}</li>
                                    @endforeach
                                @else
                                    <p>لا يوجد تفاصيل أخرى</p>
                                @endif
                            </ul>
                            <p class="text-gray-100 leading-relaxed">{{ $work->detailed_text }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    @include('footer')

    <script>
        function openModal(id) {
            const modal = document.getElementById(id);
            modal.classList.remove('hidden');
            modal.classList.add('flex');
            setTimeout(() => {
                modal.querySelector('.popup-content').classList.remove('scale-95', 'opacity-0');
                modal.querySelector('.popup-content').classList.add('scale-100', 'opacity-100');
            }, 10);
        }

        function closeModal(id) {
            const modal = document.getElementById(id);
            modal.querySelector('.popup-content').classList.remove('scale-100', 'opacity-100');
            modal.querySelector('.popup-content').classList.add('scale-95', 'opacity-0');
            setTimeout(() => {
                modal.classList.add('hidden');
                modal.classList.remove('flex');
            }, 300);
        }

        function openDeleteConfirmation(id) {
            openModal(id);
        }

        function closeDeleteConfirmation(id) {
            closeModal(id);
        }
    </script>

</body>
