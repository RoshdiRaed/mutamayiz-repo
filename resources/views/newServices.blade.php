<x-app-layout>
    <div class="py-48">
        <div class="max-w-5xl mx-auto sm:px-8 lg:px-10">
            <div class="bg-white dark:bg-purple-950 overflow-hidden shadow-2xl sm:rounded-xl p-8">
                <div class="text-center text-gray-900 dark:text-gray-100 relative">
                    <!-- Pop-up button -->
                    <button id="addLinkButton" class="absolute left-4 top-4 bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-4 rounded-lg transition">
                        {{ __('إضافة رابط صورة') }}
                    </button>

                    <a href="/dashboard"
                       class="flex items-center text-yellow-500 hover:text-yellow-600 font-semibold mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                        </svg>
                        {{ __('العودة إلى لوحة التحكم') }}
                    </a>
                    <h2 class="text-3xl font-extrabold mb-6">
                        {{ isset($service) ? __('تعديل الخدمة') : __('إضافة خدمة جديدة') }}
                    </h2>
                    <p class="text-xl mb-6">
                        {{ isset($service) ? __('قم بتحديث محتوى الخدمة والوصف والصور') : __('قم بكتابة محتوى الخدمة الجديدة والوصف والصور') }}
                    </p>

                    <form action="{{ isset($service) ? route('services.update', $service->id) : route('services.store') }}"
                          method="POST" enctype="multipart/form-data">
                        @csrf
                        @if(isset($service))
                            @method('PUT')
                        @endif

                        <div class="mb-6">
                            <input type="text" name="title" id="titleInput"
                                   value="{{ old('title', $service->title ?? '') }}"
                                   class="w-full border border-gray-300 dark:border-gray-700 rounded-lg p-3 text-gray-900 dark:text-gray-100"
                                   placeholder="{{ __('أدخل عنوان الخدمة') }}" required>
                            @error('title')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <textarea name="description" id="descriptionInput"
                                      class="w-full border border-gray-300 dark:border-gray-700 rounded-lg p-3 text-gray-900 dark:text-gray-100"
                                      placeholder="{{ __('أدخل وصف الخدمة') }}" rows="4" required>{{ old('description', $service->description ?? '') }}</textarea>
                            @error('description')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Add Image Link Form (Initially Hidden) -->
                        <div id="linkForm" class="mb-6 hidden transform translate-y-10 opacity-0 transition-all duration-500">
                            <h3 class="text-2xl font-bold mb-4">{{ __('إضافة رابط صورة') }}</h3>
                            <div id="linkInputs" class="space-y-4">
                                @if(isset($service) && json_decode($service->images))
                                    @foreach (json_decode($service->images) as $index => $image)
                                        @if (Str::startsWith($image, ['http://', 'https://']))
                                            <div class="relative flex items-center">
                                                <input type="url" name="image_links[]" class="w-full border border-gray-300 dark:border-gray-700 rounded-lg p-3 text-gray-900 dark:text-gray-100"
                                                       placeholder="{{ __('أدخل رابط الصورة') }}" value="{{ $image }}" data-preview-id="link-{{ $index }}">
                                                <button type="button" class="remove-link absolute right-2 text-red-500 hover:text-red-700" data-preview-id="link-{{ $index }}">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                                    </svg>
                                                </button>
                                            </div>
                                        @endif
                                    @endforeach
                                @endif
                                <div class="relative flex items-center">
                                    <input type="url" name="image_links[]" class="w-full border border-gray-300 dark:border-gray-700 rounded-lg p-3 text-gray-900 dark:text-gray-100"
                                           placeholder="{{ __('أدخل رابط الصورة') }}">
                                    <button type="button" class="remove-link absolute right-2 text-red-500 hover:text-red-700 hidden">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            @error('image_links.*')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                            <button type="button" id="anotherLinkButton" class="mt-4 bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-4 rounded-lg">
                                {{ __('رابط آخر') }}
                            </button>
                        </div>

                        <!-- Existing Images (if editing) -->
                        @if(isset($service) && json_decode($service->images))
                            <p class="text-xl mb-6">{{ __('الصور الحالية') }}</p>
                            <div id="existingImages" class="grid grid-cols-3 gap-4 mb-6">
                                @foreach (json_decode($service->images) as $index => $image)
                                    <div class="relative" data-image-id="existing-{{ $index }}">
                                        <img src="{{ Str::startsWith($image, ['http://', 'https://']) ? $image : asset('storage/' . $image) }}"
                                             alt="{{ $service->title }}" class="w-full h-32 object-cover rounded-lg shadow-md">
                                        <button type="button" class="remove-existing absolute top-2 right-2 text-red-500 hover:text-red-700 bg-white/80 rounded-full p-1"
                                                data-image-id="existing-{{ $index }}">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                            </svg>
                                        </button>
                                    </div>
                                @endforeach
                            </div>
                        @endif

                        <p class="text-xl mb-6">
                            {{ isset($service) ? __('قم بسحب وإفلات صور جديدة هنا أو اخترها من جهازك') : __('قم بسحب وإفلات الصور هنا أو اخترها من جهازك') }}
                        </p>
                        <div id="dropzone"
                             class="border-2 border-dashed border-gray-300 dark:border-gray-700 rounded-lg p-6 cursor-pointer hover:border-blue-500 transition"
                             ondrop="handleDrop(event)" ondragover="event.preventDefault()">
                            <input type="file" name="images[]" id="imageInput" class="hidden" accept="image/*" multiple
                                   onchange="handleFiles(this.files)">
                            <p class="text-gray-500 dark:text-gray-400">{{ __('اسحب الصور هنا أو انقر لاختيارها') }}</p>
                        </div>
                        @error('images.*')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror

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
            <div class="w-full bg-gray-200 dark:bg-purple-800 h-1 mt-2 rounded-full overflow-hidden">
                <div id="toast-progress" class="bg-yellow-500 h-1 rounded-full w-full"></div>
            </div>
        </div>

        <script>
            const toast = document.getElementById('toast-notification');
            const progressBar = document.getElementById('toast-progress');
            const displayDuration = 5000;

            setTimeout(() => {
                toast.classList.remove('translate-y-full', 'opacity-0');
                toast.classList.add('translate-y-0', 'opacity-100');
            }, 100);

            progressBar.style.transition = `width ${displayDuration}ms linear`;
            setTimeout(() => {
                progressBar.style.width = '0';
            }, 200);

            const autoHideTimeout = setTimeout(() => {
                hideToast();
            }, displayDuration);

            document.getElementById('closeToast').addEventListener('click', function() {
                clearTimeout(autoHideTimeout);
                hideToast();
            });

            function hideToast() {
                toast.classList.remove('translate-y-0', 'opacity-100');
                toast.classList.add('translate-y-full', 'opacity-0');
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
        const addLinkButton = document.getElementById('addLinkButton');
        const linkForm = document.getElementById('linkForm');
        const anotherLinkButton = document.getElementById('anotherLinkButton');
        const linkInputs = document.getElementById('linkInputs');
        const existingImages = document.getElementById('existingImages');

        dropzone.addEventListener('click', () => imageInput.click());

        function handleFiles(files) {
            Array.from(files).forEach((file, index) => {
                if (file.type.startsWith('image/')) {
                    const reader = new FileReader();
                    reader.onload = (e) => {
                        const div = document.createElement('div');
                        div.className = 'relative';
                        div.dataset.imageId = `new-${index}-${Date.now()}`;
                        const img = document.createElement('img');
                        img.src = e.target.result;
                        img.className = 'w-full h-32 object-cover rounded-lg shadow-md';
                        const button = document.createElement('button');
                        button.type = 'button';
                        button.className = 'remove-upload absolute top-2 right-2 text-red-500 hover:text-red-700 bg-white/80 rounded-full p-1';
                        button.innerHTML = `
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        `;
                        button.onclick = () => removeUploadedImage(div.dataset.imageId);
                        div.appendChild(img);
                        div.appendChild(button);
                        preview.appendChild(div);
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

        function removeUploadedImage(imageId) {
            const div = preview.querySelector(`[data-image-id="${imageId}"]`);
            if (div) div.remove();
            // Reset file input to allow re-upload of same file
            imageInput.value = '';
        }

        // Toggle link form with animation
        addLinkButton.addEventListener('click', () => {
            if (linkForm.classList.contains('hidden')) {
                linkForm.classList.remove('hidden');
                setTimeout(() => {
                    linkForm.classList.remove('translate-y-10', 'opacity-0');
                    linkForm.classList.add('translate-y-0', 'opacity-100');
                }, 10);
            } else {
                linkForm.classList.remove('translate-y-0', 'opacity-100');
                linkForm.classList.add('translate-y-10', 'opacity-0');
                setTimeout(() => {
                    linkForm.classList.add('hidden');
                }, 500);
            }
        });

        // Add new link input and preview
        anotherLinkButton.addEventListener('click', () => {
            const div = document.createElement('div');
            div.className = 'relative flex items-center';
            const newInput = document.createElement('input');
            newInput.type = 'url';
            newInput.name = 'image_links[]';
            newInput.className = 'w-full border border-gray-300 dark:border-gray-700 rounded-lg p-3 text-gray-900 dark:text-gray-100';
            newInput.placeholder = '{{ __('أدخل رابط الصورة') }}';
            const removeButton = document.createElement('button');
            removeButton.type = 'button';
            removeButton.className = 'remove-link absolute right-2 text-red-500 hover:text-red-700 hidden';
            removeButton.innerHTML = `
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            `;
            div.appendChild(newInput);
            div.appendChild(removeButton);
            linkInputs.appendChild(div);
            bindLinkPreview(newInput, removeButton);
        });

        // Preview URLs
        function bindLinkPreview(input, removeButton) {
            input.addEventListener('input', () => {
                const previewId = input.dataset.previewId || `link-${Date.now()}`;
                input.dataset.previewId = previewId;
                const existing = preview.querySelector(`[data-image-id="${previewId}"]`);
                if (existing) existing.remove();
                if (input.value && input.value.match(/\.(jpg|jpeg|png|gif)$/i)) {
                    const div = document.createElement('div');
                    div.className = 'relative';
                    div.dataset.imageId = previewId;
                    const img = document.createElement('img');
                    img.src = input.value;
                    img.className = 'w-full h-32 object-cover rounded-lg shadow-md';
                    img.onerror = () => div.remove();
                    const button = document.createElement('button');
                    button.type = 'button';
                    button.className = 'remove-url absolute top-2 right-2 text-red-500 hover:text-red-700 bg-white/80 rounded-full p-1';
                    button.innerHTML = `
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    `;
                    button.onclick = () => {
                        div.remove();
                        input.value = '';
                        removeButton.classList.add('hidden');
                    };
                    div.appendChild(img);
                    div.appendChild(button);
                    preview.appendChild(div);
                    removeButton.classList.remove('hidden');
                } else {
                    removeButton.classList.add('hidden');
                }
            });
            removeButton.addEventListener('click', () => {
                const div = preview.querySelector(`[data-image-id="${input.dataset.previewId}"]`);
                if (div) div.remove();
                input.value = '';
                removeButton.classList.add('hidden');
                input.parentElement.remove();
            });
        }

        // Bind preview to existing inputs
        document.querySelectorAll('input[name="image_links[]"]').forEach(input => {
            const removeButton = input.parentElement.querySelector('.remove-link');
            bindLinkPreview(input, removeButton);
        });

        // Remove existing images
        if (existingImages) {
            existingImages.addEventListener('click', (e) => {
                if (e.target.closest('.remove-existing')) {
                    const button = e.target.closest('.remove-existing');
                    const imageId = button.dataset.imageId;
                    const div = existingImages.querySelector(`[data-image-id="${imageId}"]`);
                    if (div) div.remove();
                }
            });
        }
    </script>
</x-app-layout>
