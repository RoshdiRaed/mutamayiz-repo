
<x-app-layout>
    <div class="py-48">
        <div class="max-w-5xl mx-auto sm:px-8 lg:px-10">
            <div class="bg-white dark:bg-purple-950 overflow-hidden shadow-2xl sm:rounded-xl mt-24 p-8">
                <div class="text-center text-gray-900 dark:text-gray-100">
                    <h1 class="text-3xl font-extrabold mb-6">{{ __('مرحباً بك') }} <span>{{ Auth::user()->name }}</span>
                        {{ '  في لوحة التحكم' }}</h1>
                    <p class="text-xl mb-6">{{ __('لقد تم تسجيل دخولك بنجاح!') }}</p>
                    <div class="space-y-4">
                        <div class="flex justify-center items-center space-x-4">
                            <a href="{{ route('profile.edit') }}"
                                class="text-blue-500 hover:underline text-lg font-medium">{{ __('الملف الشخصي') }}</a>
                            <span class="text-gray-500">|</span>
                            <a href="{{ route('logout') }}" class="text-red-500 hover:underline text-lg font-medium"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                {{ __('تسجيل الخروج') }}
                            </a>
                        </div>
                        <div class="mt-4">
                            <a href="{{ route('contacts.index') }}" class="text-green-500 hover:underline text-lg font-medium">
                                {{ __('من يحاول التواصل معي →') }}
                            </a>

                        </div>
                    </div>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                        @csrf
                    </form>
                    <div class="mt-8 flex justify-center space-x-4">
                        <a href="{{ route('works.create') }}"
                            class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-4 rounded-lg">
                            {{ __('إضافة عمل جديد') }}
                        </a>
                        <a href="{{ route('services.create') }}" class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-4 rounded-lg">
                            {{ __('إضافة خدمة جديدة') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const dropzone = document.getElementById('dropzone');
        const imageInput = document.getElementById('imageInput');
        const preview = document.getElementById('preview');

        dropzone.addEventListener('click', () => imageInput.click());

        function handleFiles(files) {
            preview.innerHTML = '';
            Array.from(files).forEach(file => {
                if (file.type.startsWith('image/')) {
                    const reader = new FileReader();
                    reader.onload = (e) => {
                        const img = document.createElement('img');
                        img.src = e.target.result;
                        img.className = 'w-full h-32 object-cover rounded-lg shadow-md';
                        preview.appendChild(img);
                    };
                    reader.readAsDataURL(file);
                }
            });
        }

        function handleDrop(event) {
            event.preventDefault();
            const files = event.dataTransfer.files;
            handleFiles(files);
        }
    </script>

</x-app-layout>
