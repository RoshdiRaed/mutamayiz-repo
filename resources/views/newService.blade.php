<x-app-layout>
<div class="py-48">
    <div class="max-w-5xl mx-auto sm:px-8 lg:px-10">
        <div class="bg-white dark:bg-purple-950 overflow-hidden shadow-2xl sm:rounded-xl p-8">
            <div class="text-center text-gray-900 dark:text-gray-100">
                <div class="mb-6 text-left">
                    <a href="/dashboard" class="text-yellow-500 hover:text-yellow-600 font-semibold flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                        </svg>
                        {{ __('العودة إلى لوحة التحكم') }}
                    </a>
                </div>
                <h2 class="text-3xl font-extrabold mb-6">{{ __('إضافة خدمة') }}</h2>
                <p class="text-xl mb-6">{{ __('قم بكتابة المحتوى الخدمة الجديدة والوصف والصور') }}</p>
                <form action="/" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-6">
                        <input type="text" name="title" id="titleInput"
                            class="w-full border border-gray-300 dark:border-gray-700 rounded-lg p-3 text-gray-900 dark:text-gray-100"
                            placeholder="{{ __('أدخل عنوان الصورة') }}" required>
                    </div>
                    <div class="mb-6">
                        <textarea name="description" id="descriptionInput"
                            class="w-full border border-gray-300 dark:border-gray-700 rounded-lg p-3 text-gray-900 dark:text-gray-100"
                            placeholder="{{ __('أدخل وصف الصورة') }}" rows="4" required></textarea>
                    </div>
                    <p class="text-xl mb-6">{{ __('قم بسحب وإفلات الصور هنا أو اخترها من جهازك') }}</p>
                    <div id="dropzone"
                        class="border-2 border-dashed border-gray-300 dark:border-gray-700 rounded-lg p-6 cursor-pointer hover:border-blue-500 transition"
                        ondrop="handleDrop(event)" ondragover="event.preventDefault()">
                        <input type="file" name="images[]" id="imageInput" class="hidden" accept="image/*"
                            multiple onchange="handleFiles(this.files)" required>
                        <p class="text-gray-500 dark:text-gray-400">{{ __('اسحب الصور هنا أو انقر لاختيارها') }}
                        </p>
                    </div>
                    <div id="preview" class="grid grid-cols-3 gap-4 mt-6">
                        <!-- Preview images will be displayed here -->
                    </div>
                    <button type="submit"
                        class="mt-6 bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-4 rounded-lg">
                        {{ __('نشر الخدمة') }}
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
</x-app-layout>
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
