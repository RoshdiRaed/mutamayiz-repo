<section class="py-20 bg-gradient-to-br  relative overflow-hidden">
    <!-- Decorative elements -->
    <div class="absolute inset-0">
        <div class="absolute -top-24 -right-24 w-96 h-96 bg-yellow-400/10 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-24 -left-24 w-96 h-96 bg-purple-600/20 rounded-full blur-3xl"></div>
    </div>

    <div class="container mx-auto px-4 relative">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold text-yellow-300 mb-4 animate__animated animate__fadeInDown">تواصل معنا
            </h2>
            <p class="text-gray-300 max-w-2xl mx-auto">نحن هنا لمساعدتك في تحقيق رؤيتك. راسلنا وسنرد عليك في أقرب
                وقت ممكن</p>
        </div>

        <form
            class="max-w-2xl mx-auto backdrop-blur-lg bg-purple-900/50 p-8 rounded-2xl shadow-xl border border-purple-700/50">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="group">
                    <input type="text" placeholder="الاسم الكامل" required
                        class="w-full px-4 py-3 rounded-lg bg-purple-800/50 text-white placeholder-gray-400
                        border-2 border-transparent focus:border-yellow-400/50 focus:bg-purple-800/80
                        transition-all duration-300 outline-none">
                </div>

                <div class="group">
                    <input type="email" placeholder="البريد الإلكتروني" required
                        class="w-full px-4 py-3 rounded-lg bg-purple-800/50 text-white placeholder-gray-400
                        border-2 border-transparent focus:border-yellow-400/50 focus:bg-purple-800/80
                        transition-all duration-300 outline-none">
                </div>

                <div class="md:col-span-2">
                    <input type="text" placeholder="عنوان الرسالة"
                        class="w-full px-4 py-3 rounded-lg bg-purple-800/50 text-white placeholder-gray-400
                        border-2 border-transparent focus:border-yellow-400/50 focus:bg-purple-800/80
                        transition-all duration-300 outline-none">
                </div>

                <div class="md:col-span-2">
                    <textarea placeholder="رسالتك" rows="5" required
                        class="w-full px-4 py-3 rounded-lg bg-purple-800/50 text-white placeholder-gray-400
                        border-2 border-transparent focus:border-yellow-400/50 focus:bg-purple-800/80
                        transition-all duration-300 outline-none resize-none"></textarea>
                </div>
            </div>

            <div class="mt-6 text-center">
                <button type="submit"
                    class="group relative inline-flex items-center justify-center px-8 py-3 font-bold
                    text-purple-900 bg-gradient-to-r from-yellow-400 to-yellow-500 rounded-lg
                    transform transition-all duration-300 hover:scale-105 hover:from-yellow-500 hover:to-yellow-600
                    focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:ring-offset-2 focus:ring-offset-purple-900">
                    <span class="relative">إرسال الرسالة</span>
                    <span
                        class="absolute right-0 transform translate-x-full opacity-0 group-hover:translate-x-0
                        group-hover:opacity-100 transition-all duration-300">
                        →
                    </span>
                </button>
            </div>
        </form>
    </div>
</section>
