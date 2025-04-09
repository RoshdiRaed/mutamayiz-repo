<x-app-layout>
    <div class="py-48">
        <div class="max-w-5xl mx-auto sm:px-8 lg:px-10">
            <div class="bg-white dark:bg-purple-950 overflow-hidden shadow-2xl sm:rounded-xl p-8">
                <div class="text-center text-gray-900 dark:text-gray-100">
                    <a href="/dashboard"
                        class="flex items-center text-yellow-500 hover:text-yellow-600 font-semibold mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                        </svg>
                        {{ __('العودة إلى لوحة التحكم') }}
                    </a>
                    <h2 class="text-3xl font-extrabold mb-6">{{ __('إضافة خدمة') }}</h2>
                    <p class="text-xl mb-6">{{ __('قم بكتابة المحتوى الخدمة الجديدة والوصف والصور') }}</p>
                    <form
                        action="{{ isset($service) ? route('services.update', $service->id) : route('services.store') }}"
                        method="POST" enctype="multipart/form-data">
                        @csrf
                        @isset($service)
                            @method('PUT')
                        @endisset

                        <div class="mb-6">
                            <input type="text" name="title" id="titleInput"
                                value="{{ old('title', $service->title ?? '') }}"
                                class="w-full border border-gray-300 dark:border-gray-700 rounded-lg p-3 text-gray-900 dark:text-gray-100"
                                placeholder="{{ __('أدخل عنوان الخدمة') }}" required>
                        </div>

                        <div class="mb-6">
                            <textarea name="description" id="descriptionInput"
                                class="w-full border border-gray-300 dark:border-gray-700 rounded-lg p-3 text-gray-900 dark:text-gray-100"
                                placeholder="{{ __('أدخل وصف الخدمة') }}" rows="4" required>{{ old('description', $service->description ?? '') }}</textarea>
                        </div>

                        <p class="text-xl mb-6">{{ __('قم بسحب وإفلات الصور هنا أو اخترها من جهازك') }}</p>
                        <div id="dropzone"
                            class="border-2 border-dashed border-gray-300 dark:border-gray-700 rounded-lg p-6 cursor-pointer hover:border-blue-500 transition"
                            ondrop="handleDrop(event)" ondragover="event.preventDefault()">
                            <input type="file" name="images[]" id="imageInput" class="hidden" accept="image/*"
                                multiple onchange="handleFiles(this.files)" {{ !isset($service) ? 'required' : '' }}>
                            <p class="text-gray-500 dark:text-gray-400">{{ __('اسحب الصور هنا أو انقر لاختيارها') }}
                            </p>
                        </div>

                        <!-- Existing Image Preview (if editing) -->
                        @isset($service)
                            @if ($service->images)
                                <div class="mt-4">
                                    <p class="text-gray-500 dark:text-gray-400">{{ __('الصورة الحالية:') }}</p>
                                    <img src="{{ asset('storage/' . json_decode($service->images)[0]) }}"
                                        alt="{{ $service->title }}" class="w-32 h-32 object-cover rounded-lg">
                                </div>
                            @endif
                        @endisset

                        <!-- Image preview section for new uploads -->
                        <div id="preview" class="grid grid-cols-3 gap-4 mt-6">
                            <!-- Preview images will be displayed here -->
                        </div>

                        <button type="submit"
                            class="mt-6 bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-4 rounded-lg">
                            {{ isset($service) ? __('نشر التعديلات') : __('نشر الخدمة') }}
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @if (session('success'))
        <div id="toast-notification"
            class="fixed bottom-4 right-4 bg-white dark:bg-purple-900 rounded-lg shadow-lg p-4 transform translate-y-full opacity-0 transition-all duration-300 z-50 max-w-md">
            <div class="flex items-center">
                <div class="flex-shrink-0 mr-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-500" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <div class="flex-1">
                    <p class="text-gray-800 dark:text-white font-medium">{{ session('success') }}</p>
                </div>
                <button id="closeToast"
                    class="text-gray-500 hover:text-gray-700 dark:text-gray-300 dark:hover:text-white ml-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <!-- Progress bar -->
            <div class="w-full bg-gray-200 dark:bg-purple-800 h-1 mt-2 rounded-full overflow-hidden">
                <div id="toast-progress" class="bg-yellow-500 h-1 rounded-full w-full"></div>
            </div>
        </div>

        <script>
            // Show toast notification with smooth transition
            const toast = document.getElementById('toast-notification');
            const progressBar = document.getElementById('toast-progress');

            // Animation timing
            const displayDuration = 5000; // 5 seconds

            // Show toast
            setTimeout(() => {
                toast.classList.remove('translate-y-full', 'opacity-0');
                toast.classList.add('translate-y-0', 'opacity-100');
            }, 100);

            // Start progress bar animation
            progressBar.style.transition = `width ${displayDuration}ms linear`;
            setTimeout(() => {
                progressBar.style.width = '0';
            }, 200);

            // Auto-hide toast after display duration
            const autoHideTimeout = setTimeout(() => {
                hideToast();
            }, displayDuration);

            // Close toast when the button is clicked
            document.getElementById('closeToast').addEventListener('click', function() {
                clearTimeout(autoHideTimeout);
                hideToast();
            });

            // Function to hide toast
            function hideToast() {
                toast.classList.remove('translate-y-0', 'opacity-100');
                toast.classList.add('translate-y-full', 'opacity-0');

                // Remove from DOM after animation completes
                setTimeout(() => {
                    toast.remove();
                }, 300);
            }
        </script>
    @endif


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
                        img.className = 'w-32 h-32 object-cover rounded-lg shadow-md';
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
