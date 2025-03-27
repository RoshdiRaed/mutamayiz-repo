<x-app-layout>


    <div class="py-48">
        <div class="max-w-5xl mx-auto sm:px-8 lg:px-50">
            <div class="bg-white dark:bg-purple-950 overflow-hidden shadow-2xl sm:rounded-xl p-8">
                <div class="text-center text-gray-900 dark:text-gray-100">
                    <div class="mb-6 text-right">
                        <a href="/"
                            class="text-yellow-500 hover:text-yellow-600 font-semibold inline-flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                            </svg>
                            {{ __('العودة إلى الصفحة الرئيسية') }}
                        </a>
                    </div>
                    <div class="mb-6 text-center">
                        <img src="{{ asset('image/logo.png') }}" alt="Site Logo" class="mx-auto h-30">
                    </div>
                    <h2 class="text-3xl font-extrabold mb-6">{{ __('تسجيل الدخول') }}</h2>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <!-- Email Address -->
                        <div class="mb-6 text-right space-y-2">
                            <x-input-label for="email" :value="__('البريد الإلكتروني')" />
                            <input type="email" name="email" id="email"
                                class="w-full border border-gray-300 dark:border-yellow-500 rounded-lg p-3 text-gray-900 dark:text-gray-100"
                                placeholder="{{ __('أدخل البريد الإلكتروني') }}" required autofocus
                                autocomplete="username" value="{{ old('email') }}">
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <!-- Password -->
                        <div class="mb-6 text-right space-y-2">
                            <x-input-label for="password" :value="__('كلمة المرور')" />
                            <input type="password" name="password" id="password"
                                class="w-full border border-gray-300 dark:border-yellow-500 rounded-lg p-3 text-gray-900 dark:text-gray-100"
                                placeholder="{{ __('أدخل كلمة المرور') }}" required autocomplete="current-password">
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                        <!-- Remember Me -->
                        <div class="block mb-6 text-right">
                            <label for="remember_me" class="inline-flex items-center">
                                <input id="remember_me" type="checkbox"
                                    class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-yellow-500 shadow-sm focus:ring-yellow-500"
                                    name="remember">
                                <span class="mr-2 text-sm text-gray-600 dark:text-gray-400">{{ __('تذكرني') }}</span>
                            </label>
                        </div>

                        <div class="flex items-center justify-between">
                            <x-primary-button
                                class="bg-yellow-500 hover:bg-yellow-600 text-yellow font-bold py-2 px-4 rounded-lg">
                                {{ __('تسجيل الدخول') }}
                            </x-primary-button>
                            @if (Route::has('password.request'))
                                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500"
                                    href="{{ route('password.request') }}">
                                    {{ __('نسيت كلمة المرور؟') }}
                                </a>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</x-app-layout>
