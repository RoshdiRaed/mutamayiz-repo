<x-app-layout>
    <div class="py-12 px-4 max-w-7xl mx-auto">
        <a href="/dashboard" class="flex items-center text-yellow-500 hover:text-yellow-600 font-semibold mt-20">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
            </svg>
            {{ __('العودة إلى لوحة التحكم') }}
        </a>
        <div class="bg-gradient-to-r from-purple-900 to-purple-700 border-b-1 rounded-t-lg p-6 mt-10">
            <h2 class="text-3xl font-bold text-yellow-400 text-center">الرسائل الواردة</h2>
        </div>

        <div class="bg-white shadow-xl rounded-b-lg">
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead>
                        <tr class="border-b-2 border-purple-800">
                            <th class="px-6 py-4 bg-purple-800 text-yellow-400 text-right font-semibold">الاسم الكامل
                            </th>
                            <th class="px-6 py-4 bg-purple-800 text-yellow-400 text-right font-semibold">البريد
                                الإلكتروني</th>
                            <th class="px-6 py-4 bg-purple-800 text-yellow-400 text-right font-semibold">الرقم</th>
                            <th class="px-6 py-4 bg-purple-800 text-yellow-400 text-right font-semibold">العنوان</th>
                            <th class="px-6 py-4 bg-purple-800 text-yellow-400 text-right font-semibold">الرسالة</th>
                            <th class="px-6 py-4 bg-purple-800 text-yellow-400 text-right font-semibold">تاريخ الإرسال
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($contacts as $contact)
                            <tr class="border-b border-gray-200 hover:bg-purple-50">
                                <td class="px-6 py-4 text-right">{{ $contact->full_name }}</td>
                                <td class="px-6 py-4 text-right text-purple-700">{{ $contact->email }}</td>
                                <td class="px-0 py-4 text-right">{{ $contact->phone }}</td>
                                <td class="px-6 py-4 text-right">{{ $contact->subject }}</td>
                                <td class="px-6 py-4 text-right">
                                    <div x-data="{ expanded: false }">
                                        <span x-show="!expanded">
                                            {{ \Illuminate\Support\Str::words($contact->message, 5, '...') }}
                                            <button @click="expanded = true"
                                                class="text-blue-600 hover:underline text-sm">قراءة المزيد</button>
                                        </span>

                                        <span x-show="expanded">
                                            {{ $contact->message }}
                                            <button @click="expanded = false"
                                                class="text-red-600 hover:underline text-sm ml-2">إخفاء</button>
                                        </span>
                                    </div>
                                </td>

                                <td class="px-6 py-4 text-right text-gray-500">
                                    {{ $contact->created_at->format('Y-m-d H:i') }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="px-6 py-12">
                                    <div class="flex flex-col items-center justify-center">
                                        <div
                                            class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mb-4">
                                            <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                                </path>
                                            </svg>
                                        </div>
                                        <p class="text-xl text-center font-medium text-gray-500">لا توجد رسائل بعد</p>
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="px-6 py-4 bg-purple-50 border-t border-purple-100 rounded-b-lg">
                <!-- Contact count and Load More button -->
                <div class="flex items-center justify-between">
                    <div class="text-sm text-purple-800">إجمالي عدد الرسائل: {{ $contacts->count() ?? 0 }}</div>
                    @if ($contacts->count() > 15)
                        <a href="{{ $contacts->previousPageUrl() }}"
                           class="px-4 py-2 bg-purple-700 text-yellow-400 rounded hover:bg-purple-800 font-medium">الانتقال إلى الرسائل القديمة</a>
                    @endif
                </div>
                <!-- Pagination Links -->
                <div class="mt-4">
                    {{ $contacts->links() }}
                </div>
            </div>
        </div>

    </div>



    <script src="//unpkg.com/alpinejs" defer></script>
</x-app-layout>
