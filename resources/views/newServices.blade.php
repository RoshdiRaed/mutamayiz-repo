<x-app-layout>
    <div class="py-48">
        <div class="max-w-5xl mx-auto sm:px-8 lg:px-10">
            <div class="bg-white dark:bg-purple-950 overflow-hidden shadow-2xl sm:rounded-xl p-8">
                <div class="text-center text-gray-900 dark:text-gray-100 relative">
                    <!-- Pop-up button -->
                    <button id="addLinkButton" class="absolute left-4 top-4 bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-4 rounded-lg transition">
                        {{ __('إضافة رابط صورة') }}
                    </button>

                    <a href="/dashboard" class="flex items-center text-yellow-500 hover:text-yellow-600 font-semibold mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
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

                    <form action="{{ isset($service) ? route('services.update', $service->id) : route('services.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @if(isset($service)) @method('PUT') @endif

                        <div class="mb-6">
                            <input type="text" name="title" value="{{ old('title', $service->title ?? '') }}"
                                   class="w-full border border-gray-300 dark:border-gray-700 rounded-lg p-3 text-gray-900 dark:text-gray-100"
                                   placeholder="{{ __('أدخل عنوان الخدمة') }}" required>
                            @error('title')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <textarea name="description" rows="4"
                                      class="w-full border border-gray-300 dark:border-gray-700 rounded-lg p-3 text-gray-900 dark:text-gray-100"
                                      placeholder="{{ __('أدخل وصف الخدمة') }}" required>{{ old('description', $service->description ?? '') }}</textarea>
                            @error('description')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Add Image Link Form -->
                        <div id="linkForm" class="mb-6 hidden transform translate-y-10 opacity-0 transition-all duration-500">
                            <h3 class="text-2xl font-bold mb-4">{{ __('إضافة رابط صورة') }}</h3>
                            <div id="linkInputs" class="space-y-4">
                                @if(isset($service) && json_decode($service->images))
                                    @foreach (json_decode($service->images) as $index => $image)
                                        @if (Str::startsWith($image, ['http://', 'https://']))
                                            <div class="relative flex items-center image-link-item">
                                                <input type="url" name="image_links[]" value="{{ $image }}"
                                                       class="w-full border border-gray-300 dark:border-gray-700 rounded-lg p-3 text-gray-900 dark:text-gray-100">
                                                <button type="button" class="remove-link absolute right-2 text-red-500 hover:text-red-700">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                                    </svg>
                                                </button>
                                            </div>
                                        @endif
                                    @endforeach
                                @endif

                                <!-- Default empty input -->
                                <div class="relative flex items-center image-link-item">
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

                        <!-- Existing Images -->
                        @if(isset($service) && json_decode($service->images))
                            <p class="text-xl mb-6">{{ __('الصور الحالية') }}</p>
                            <div id="existingImages" class="grid grid-cols-3 gap-4 mb-6">
                                @foreach (json_decode($service->images) as $index => $image)
                                    <div class="relative existing-image" data-index="{{ $index }}">
                                        <img src="{{ Str::startsWith($image, ['http://', 'https://']) ? $image : asset('storage/' . $image) }}"
                                             class="w-full h-32 object-cover rounded-lg shadow-md">
                                        <input type="hidden" name="existing_images[]" value="{{ $image }}">
                                        <button type="button" class="remove-existing absolute top-2 right-2 text-red-500 hover:text-red-700 bg-white/80 rounded-full p-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                            </svg>
                                        </button>
                                    </div>
                                @endforeach
                            </div>
                        @endif

                        <!-- File Upload -->
                        <p class="text-xl mb-6">{{ __('قم بسحب وإفلات الصور هنا أو انقر لاختيارها') }}</p>
                        <div id="dropzone"
                             class="border-2 border-dashed border-gray-300 dark:border-gray-700 rounded-lg p-6 cursor-pointer hover:border-blue-500 transition"
                             ondrop="handleDrop(event)" ondragover="event.preventDefault()">
                            <input type="file" name="images[]" id="imageInput" class="hidden" accept="image/*" multiple onchange="handleFiles(this.files)">
                            <p class="text-gray-500 dark:text-gray-400">{{ __('اسحب الصور هنا أو انقر لاختيارها') }}</p>
                        </div>
                        @error('images.*')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror

                        <div id="preview" class="grid grid-cols-3 gap-4 mt-6"></div>

                        <button type="submit" class="mt-6 bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-4 rounded-lg">
                            {{ isset($service) ? __('نشر التعديلات') : __('نشر الخدمة') }}
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Toast message (hidden here for brevity) -->
</x-app-layout>

<!-- JavaScript -->
<script>
    document.addEventListener("DOMContentLoaded", () => {
        // Show link form
        document.getElementById("addLinkButton").addEventListener("click", () => {
            const linkForm = document.getElementById("linkForm");
            linkForm.classList.remove("hidden");
            requestAnimationFrame(() => {
                linkForm.classList.remove("translate-y-10", "opacity-0");
            });
        });

        // Add new image link field
        document.getElementById("anotherLinkButton").addEventListener("click", () => {
            const container = document.createElement("div");
            container.classList.add("relative", "flex", "items-center", "image-link-item");
            container.innerHTML = `
                <input type="url" name="image_links[]" class="w-full border border-gray-300 dark:border-gray-700 rounded-lg p-3 text-gray-900 dark:text-gray-100" placeholder="أدخل رابط الصورة">
                <button type="button" class="remove-link absolute right-2 text-red-500 hover:text-red-700">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            `;
            document.getElementById("linkInputs").appendChild(container);
        });

        // Remove image link field
        document.getElementById("linkInputs").addEventListener("click", function(e) {
            if (e.target.closest(".remove-link")) {
                e.target.closest(".image-link-item").remove();
            }
        });

        // Remove existing image from edit mode
        document.getElementById("existingImages")?.addEventListener("click", function(e) {
            if (e.target.closest(".remove-existing")) {
                e.target.closest(".existing-image").remove();
            }
        });
    });

    function handleFiles(files) {
        const preview = document.getElementById("preview");
        preview.innerHTML = "";
        Array.from(files).forEach(file => {
            const reader = new FileReader();
            reader.onload = e => {
                const img = document.createElement("img");
                img.src = e.target.result;
                img.classList.add("w-full", "h-32", "object-cover", "rounded-lg", "shadow-md");
                preview.appendChild(img);
            };
            reader.readAsDataURL(file);
        });
    }

    function handleDrop(event) {
        event.preventDefault();
        const files = event.dataTransfer.files;
        document.getElementById("imageInput").files = files;
        handleFiles(files);
    }
</script>
<script>
    document.addEventListener("DOMContentLoaded", () => {
        // إضافة هذه الوظيفة لتشغيل اختيار الصور بالنقر
        document.getElementById("dropzone").addEventListener("click", () => {
            document.getElementById("imageInput").click();
        });

        // وظيفة السحب
        window.handleDrop = function(event) {
            event.preventDefault();
            const files = event.dataTransfer.files;
            handleFiles(files);
        };

        // عرض الصور عند إضافتها (يمكنك تعديلها حسب الحاجة)
        window.handleFiles = function(files) {
            const preview = document.getElementById("preview");
            for (let i = 0; i < files.length; i++) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const img = document.createElement("img");
                    img.src = e.target.result;
                    img.classList.add("w-full", "h-32", "object-cover", "rounded-lg", "shadow-md");
                    preview.appendChild(img);
                };
                reader.readAsDataURL(files[i]);
            }
        };
    });
</script>
