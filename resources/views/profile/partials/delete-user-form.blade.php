<section class="space-y-6">
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('حذف الحساب') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('بمجرد حذف حسابك، سيتم حذف جميع موارده وبياناته بشكل دائم. قبل حذف حسابك، يرجى تنزيل أي بيانات أو معلومات ترغب في الاحتفاظ بها.') }}
        </p>
    </header>

    <div class="flex justify-end rtl:flex-row-reverse">
        <a href="{{ route('dashboard') }}"
            class="text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-gray-100 transition duration-300 ease-in-out transform hover:translate-x-2 rtl:hover:translate-x-0 rtl:hover:-translate-x-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline-block" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
            </svg>
            <span class="ml-2 rtl:ml-0 rtl:mr-2">{{ __('العودة إلى لوحة التحكم') }}</span>
        </a>
    </div>
    <x-danger-button x-data=""
        x-on.editclick.prevent="$dispatch('open-modal', 'confirm-user-deletion')">{{ __('حذف الحساب') }}</x-danger-button>

        <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
            <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
                @csrf
                @method('delete')

                <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                    {{ __('هل أنت متأكد أنك تريد حذف حسابك؟') }}
                </h2>

                <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                    {{ __('بمجرد حذف حسابك، سيتم حذف جميع موارده وبياناته بشكل دائم. يرجى إدخال كلمة المرور لتأكيد أنك ترغب في حذف حسابك بشكل دائم.') }}
                </p>

                <div class="mt-6">
                    <x-input-label for="password" value="{{ __('كلمة المرور') }}" class="sr-only" />

                    <x-text-input id="password" name="password" type="password" class="mt-1 block w-3/4"
                        placeholder="{{ __('كلمة المرور') }}" />

                    <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
                </div>

                <div class="mt-6 flex justify-end">
                    <x-secondary-button x-on:click="$dispatch('close')">
                        {{ __('إلغاء') }}
                    </x-secondary-button>

                    <x-danger-button class="ms-3">
                        {{ __('حذف الحساب') }}
                    </x-danger-button>
                </div>
            </form>
        </x-modal>
</section>
