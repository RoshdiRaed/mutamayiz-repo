<section class="relative py-0 bg-gradient-to-br overflow-hidden">
    <div class="absolute inset-0">
        <div class="absolute top-0 left-0 w-full h-64 bg-gradient-to-b"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-[#FFDF20]/10 rounded-full blur-3xl"></div>
        <div class="absolute top-32 left-20 w-72 h-72 bg-[#FFDF20]/10 rounded-full blur-3xl"></div>
    </div>

    <div class="container mx-auto px-6 relative z-10">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-5xl font-bold text-[#FFDF20] mb-8 animate__animated animate__fadeInDown">
                مسيرة النجاح والإبداع
            </h2>
            <p class="text-xl text-gray-300 leading-loose mb-12 animate__animated animate__fadeInUp">
                نحن نؤمن بأن كل علامة تجارية لديها قصة فريدة تستحق أن تُروى بأسلوب مميز.
                <button
                    class="inline-flex items-center text-[#FFDF20] hover:text-[#FFDF20]/80 transition-colors duration-300"
                    onclick="openStoryModal()">
                    اكتشف المزيد
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 7l5 5m0 0l-5 5m5-5H6" />
                    </svg>
                </button>
            </p>
        </div>

        <div class="relative mt-16">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div
                    class="bg-[#59168B]/50 backdrop-blur-sm p-6 rounded-xl border border-[#59168B]/50 hover:border-[#FFDF20]/50 transition-all duration-300">
                    <h3 class="text-xl font-semibold text-[#FFDF20] mb-4">رؤيتنا</h3>
                    <p class="text-gray-300">نسعى لتقديم حلول إبداعية تتجاوز التوقعات وتحقق نتائج ملموسة</p>
                </div>
                <div
                    class="bg-[#59168B]/50 backdrop-blur-sm p-6 rounded-xl border border-[#59168B]/50 hover:border-[#FFDF20]/50 transition-all duration-300">
                    <h3 class="text-xl font-semibold text-[#FFDF20] mb-4">قيمنا</h3>
                    <p class="text-gray-300">الابتكار، الشغف، الالتزام، والتميز في كل ما نقدمه</p>
                </div>
                <div
                    class="bg-[#59168B]/50 backdrop-blur-sm p-6 rounded-xl border border-[#59168B]/50 hover:border-[#FFDF20]/50 transition-all duration-300">
                    <h3 class="text-xl font-semibold text-[#FFDF20] mb-4">هدفنا</h3>
                    <p class="text-gray-300">تمكين عملائنا من تحقيق النجاح في عالم الأعمال المتغير</p>
                </div>
            </div>
        </div>
    </div>

    <hr
        class="my-12 border-0 h-px bg-gradient-to-r from-transparent via-yellow-300/50 to-transparent max-w-4xl mx-auto opacity-50">

    <!-- Story Modal -->
    <div id="storyModal" class="fixed inset-0 z-50 hidden">
        <!-- Backdrop with blur effect -->
        <div class="absolute inset-0 bg-black/75 backdrop-blur-md transition-all duration-300"></div>

        <!-- Modal Container -->
        <div class="relative min-h-screen flex items-center justify-center p-4">
            <div
                class="bg-gradient-to-br from-purple-900/95 to-purple-800/95 rounded-3xl max-w-4xl w-full p-10
            border border-yellow-300/20 shadow-2xl transform transition-all duration-500
            hover:border-yellow-300/30 backdrop-blur-lg">

                <!-- Header -->
                <div class="flex justify-between items-center mb-10">
                    <h3
                        class="text-4xl font-bold bg-gradient-to-r from-yellow-200 to-yellow-400
               bg-clip-text text-transparent animate__animated animate__fadeIn">
                        قصتنا بالتفصيل
                    </h3>
                    <button onclick="closeStoryModal()"
                        class="group relative p-2 rounded-full hover:bg-yellow-300/10
               transition-all duration-300 transform hover:scale-110">
                        <svg class="w-8 h-8 text-yellow-300/80 group-hover:text-yellow-300
              transition-colors duration-300"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <!-- Content with Image Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- Text Content -->
                    <div class="space-y-6 text-lg">
                        <p class="text-gray-200 leading-relaxed animate__animated animate__fadeInUp animate__delay-1s">
                            منذ بداياتنا المتواضعة، وضعنا نصب أعيننا هدفاً واضحاً: أن نكون روّاداً في مجال الإبداع
                            الإعلاني.
                        </p>
                        <p class="text-gray-200 leading-relaxed animate__animated animate__fadeInUp animate__delay-2s">
                            نجمع بين الخبرة العميقة والتقنيات المتطورة لنقدم حلولاً إبداعية تتجاوز توقعات عملائنا.
                        </p>
                        <p class="text-gray-200 leading-relaxed animate__animated animate__fadeInUp animate__delay-3s">
                            نفخر اليوم بمسيرتنا الحافلة بالإنجازات والنجاحات التي حققناها مع شركائنا في النجاح.
                        </p>

                        <!-- Contact Links -->
                        <div class="flex flex-wrap gap-4 mt-24">
                            <a href="tel:+972 59-812-5664"
                                class="flex items-center gap-2 px-4 py-2 bg-yellow-400/10 rounded-lg
                  hover:bg-yellow-400/20 transition-all duration-300">
                                <svg class="w-5 h-5 text-yellow-300" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                                <span class="text-yellow-300">اتصل بنا</span>
                            </a>
                            <a href="https://wa.me/+972598125664" target="_blank"
                                class="flex items-center gap-2 px-4 py-2 bg-yellow-400/10 rounded-lg
                  hover:bg-yellow-400/20 transition-all duration-300">
                                <svg class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z" />
                                </svg>
                                <span class="text-yellow-300">واتساب</span>
                            </a>
                        </div>
                    </div>

                    <!-- Image Grid -->
                    <div class="grid grid-cols-2 gap-4">
                        <img src="/image/pic1.jpg" alt="Our Journey 1"
                            class="w-full h-48 object-cover rounded-lg shadow-lg transform hover:scale-105 transition-transform duration-300">
                        <img src="/image/pic2.jpg" alt="Our Journey 2"
                            class="w-full h-48 object-cover rounded-lg shadow-lg transform hover:scale-105 transition-transform duration-300">
                        <img src="/image/pic3.jpg" alt="Our Journey 3"
                            class="w-full h-48 object-cover rounded-lg shadow-lg transform hover:scale-105 transition-transform duration-300">
                        <img src="/image/pic4.jpg" alt="Our Journey 4"
                            class="w-full h-48 object-cover rounded-lg shadow-lg transform hover:scale-105 transition-transform duration-300">
                    </div>
                </div>

                <!-- Decorative elements -->
                <div class="absolute -top-10 -right-10 w-40 h-40 bg-yellow-300/10 rounded-full blur-3xl"></div>
                <div class="absolute -bottom-10 -left-10 w-40 h-40 bg-purple-600/20 rounded-full blur-3xl"></div>
            </div>
        </div>
    </div>
</section>
