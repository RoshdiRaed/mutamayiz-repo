<hr
    class="my-12 border-0 h-px bg-gradient-to-r from-transparent via-yellow-300/50 to-transparent max-w-4xl mx-auto opacity-50">

<section class="py-16 from-purple-900 via-purple-800 to-purple-700">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-4xl font-bold text-yellow-300 mb-8">أعمالنا</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Project 1 -->
            <div class="relative overflow-hidden rounded-lg shadow-lg aspect-square group">
                <img src="/image/pro1.jpeg" alt="مشروع 1"
                    class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                <div
                    class="absolute inset-0 bg-purple-900 bg-opacity-80 flex flex-col items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 p-4 text-white">
                    <h3 class="text-2xl font-bold text-yellow-300 mb-2">عنوان المشروع 1</h3>
                    <p class="text-sm mb-4">وصف قصير للمشروع الأول يظهر عند تمرير الماوس</p>
                    <a href="#project1-details"
                        class="text-yellow-300 font-bold underline hover:text-yellow-200 transition-colors"
                        onclick="showPopup('project1')">تفاصيل المشروع</a>
                </div>
            </div>

            <!-- Project 2 -->
            <div class="relative overflow-hidden rounded-lg shadow-lg aspect-square group">
                <img src="/image/pro2.jpeg" alt="مشروع 2"
                    class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                <div
                    class="absolute inset-0 bg-purple-900 bg-opacity-80 flex flex-col items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 p-4 text-white">
                    <h3 class="text-2xl font-bold text-yellow-300 mb-2">عنوان المشروع 2</h3>
                    <p class="text-sm mb-4">وصف قصير للمشروع الثاني يظهر عند تمرير الماوس</p>
                    <a href="#project2-details"
                        class="text-yellow-300 font-bold underline hover:text-yellow-200 transition-colors"
                        onclick="showPopup('project2')">تفاصيل المشروع</a>
                </div>
            </div>

            <!-- Project 3 -->
            <div class="relative overflow-hidden rounded-lg shadow-lg aspect-square group">
                <img src="/image/pro3.jpeg" alt="مشروع 3"
                    class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                <div
                    class="absolute inset-0 bg-purple-900 bg-opacity-80 flex flex-col items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 p-4 text-white">
                    <h3 class="text-2xl font-bold text-yellow-300 mb-2">عنوان المشروع 3</h3>
                    <p class="text-sm mb-4">وصف قصير للمشروع الثالث يظهر عند تمرير الماوس</p>
                    <a href="#project3-details"
                        class="text-yellow-300 font-bold underline hover:text-yellow-200 transition-colors"
                        onclick="showPopup('project3')">تفاصيل المشروع</a>
                </div>
            </div>
        </div>
        <div class="mt-12">
            <a href="/works"
                class="inline-block bg-yellow-400 text-purple-900 px-8 py-3 rounded-lg font-bold
                hover:bg-yellow-500 transition duration-300 transform hover:scale-105 hover:shadow-lg">
                المزيد من أعمالنا
            </a>
        </div>
    </div>
</section>

<!-- Popup Overlay -->
<div id="popup-overlay" class="fixed inset-0 bg-black bg-opacity-75 z-50 hidden flex items-center justify-center p-4">
    <div class="bg-purple-900 rounded-lg max-w-4xl w-full max-h-[90vh] overflow-y-auto">
        <!-- Close Button -->
        <button onclick="hidePopup()" class="absolute top-4 right-4 text-white hover:text-yellow-300 text-2xl">
            &times;
        </button>

        <!-- Popup Content Will Be Injected Here -->
        <div id="popup-content" class="p-6">
            <!-- Content will be loaded dynamically -->
        </div>
    </div>
</div>

<!-- Project 1 Details (Hidden) -->
<div id="project1-details" class="hidden">
    <div class="grid md:grid-cols-2 gap-6">
        <div class="space-y-4">
            <img src="/image/pro1.jpeg" alt="مشروع 1" class="rounded-lg shadow-lg">
            <div class="grid grid-cols-2 gap-2">
                <img src="/image/pro2.jpeg" alt="تفاصيل إضافية 1" class="rounded-lg shadow-lg">
                <img src="/image/pro2.jpeg" alt="تفاصيل إضافية 2" class="rounded-lg shadow-lg">

            </div>
        </div>
        <div class="text-white">
            <h3 class="text-3xl font-bold text-yellow-300 mb-4">تفاصيل المشروع الأول</h3>
            <p class="mb-4">هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص
                العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها
                التطبيق.</p>
            <ul class="list-disc list-inside mb-4 space-y-2">
                <li>ميزة رئيسية للمشروع</li>
                <li>ميزة أخرى مهمة</li>
                <li>تفاصيل تقنية</li>
                <li>نتائج المشروع</li>
            </ul>
            <p>إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو
                مقسما ولا يحوي أخطاء لغوية.</p>
        </div>
    </div>
</div>

<!-- Project 2 Details (Hidden) -->
<div id="project2-details" class="hidden">
    <div class="grid md:grid-cols-2 gap-6">
        <div class="space-y-4">
            <img src="/image/pro2.jpeg" alt="مشروع 2" class="rounded-lg shadow-lg">
            <div class="grid grid-cols-2 gap-2">
                <img src="/image/pro2.jpeg" alt="تفاصيل إضافية 1" class="rounded-lg shadow-lg">
                <img src="/image/pro2.jpeg" alt="تفاصيل إضافية 2" class="rounded-lg shadow-lg">
            </div>
        </div>
        <div class="text-white">
            <h3 class="text-3xl font-bold text-yellow-300 mb-4">تفاصيل المشروع الثاني</h3>
            <p class="mb-4">وصف مفصل للمشروع الثاني مع جميع التفاصيل التقنية والإنجازات. هذا النص هو مثال لنص يمكن أن
                يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى.</p>
            <ul class="list-disc list-inside mb-4 space-y-2">
                <li>التحديات التي واجهتنا</li>
                <li>الحلول المبتكرة</li>
                <li>الأدوات المستخدمة</li>
                <li>النتائج المحققة</li>
            </ul>
            <p>مزيد من التفاصيل عن المشروع ومدى تأثيره على العملاء والمستخدمين النهائيين.</p>
        </div>
    </div>
</div>

<!-- Project 3 Details (Hidden) -->
<div id="project3-details" class="hidden">
    <div class="grid md:grid-cols-2 gap-6">
        <div class="space-y-4">
            <img src="/image/pro3.jpeg" alt="مشروع 3" class="rounded-lg shadow-lg">
            <div class="grid grid-cols-2 gap-2">
                <img src="/image/pro2.jpeg" alt="تفاصيل إضافية 1" class="rounded-lg shadow-lg">
                <img src="/image/pro2.jpeg" alt="تفاصيل إضافية 2" class="rounded-lg shadow-lg">
            </div>
        </div>
        <div class="text-white">
            <h3 class="text-3xl font-bold text-yellow-300 mb-4">تفاصيل المشروع الثالث</h3>
            <p class="mb-4">شرح كامل للمشروع الثالث مع التركيز على الجوانب الفريدة. هذا النص هو مثال لنص يمكن أن
                يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى.</p>
            <ul class="list-disc list-inside mb-4 space-y-2">
                <li>المراحل الرئيسية</li>
                <li>الفريق العامل</li>
                <li>المدة الزمنية</li>
                <li>التعليقات من العملاء</li>
            </ul>
            <p>خاتمة توضح أهمية المشروع والفوائد التي حققها للعميل وللشركة.</p>
        </div>
    </div>
</div>

<script>
    function showPopup(projectId) {
        event.preventDefault();
        const detailsContent = document.getElementById(projectId + '-details').innerHTML;
        document.getElementById('popup-content').innerHTML = detailsContent;
        document.getElementById('popup-overlay').classList.remove('hidden');
        document.body.style.overflow = 'hidden'; // Prevent scrolling when popup is open
    }

    function hidePopup() {
        document.getElementById('popup-overlay').classList.add('hidden');
        document.body.style.overflow = ''; // Restore scrolling
    }

    // Close popup when clicking outside content
    document.getElementById('popup-overlay').addEventListener('click', function(e) {
        if (e.target === this) {
            hidePopup();
        }
    });

    // Close popup with Escape key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && !document.getElementById('popup-overlay').classList.contains('hidden')) {
            hidePopup();
        }
    });
</script>

{{-- Why Choose Us? --}}


<section class="py-16 from-purple-900 via-purple-800 to-purple-700">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-4xl font-bold text-yellow-300 mb-12">لماذا نحن؟</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="relative p-8 bg-purple-900 rounded-2xl shadow-lg transform transition hover:scale-105 group">
                <div
                    class="absolute inset-0 bg-yellow-400/10 blur-lg opacity-0 group-hover:opacity-100 transition duration-500">
                </div>
                <h3 class="text-2xl font-semibold text-yellow-300 mb-4">إبداع غير محدود</h3>
                <p class="text-gray-200">نعمل على تحويل رؤيتك إلى تصميمات وحملات إعلانية مذهلة.</p>
            </div>
            <div class="relative p-8 bg-purple-900 rounded-2xl shadow-lg transform transition hover:scale-105 group">
                <div
                    class="absolute inset-0 bg-yellow-400/10 blur-lg opacity-0 group-hover:opacity-100 transition duration-500">
                </div>
                <h3 class="text-2xl font-semibold text-yellow-300 mb-4">أحدث التقنيات</h3>
                <p class="text-gray-200">نستخدم أدوات الذكاء الاصطناعي والتسويق الرقمي لضمان نتائج احترافية.</p>
            </div>
            <div class="relative p-8 bg-purple-900 rounded-2xl shadow-lg transform transition hover:scale-105 group">
                <div
                    class="absolute inset-0 bg-yellow-400/10 blur-lg opacity-0 group-hover:opacity-100 transition duration-500">
                </div>
                <h3 class="text-2xl font-semibold text-yellow-300 mb-4">فريق محترف</h3>
                <p class="text-gray-200">نمتلك نخبة من المصممين والمسوقين لضمان تحقيق أهدافك التجارية.</p>
            </div>
        </div>
    </div>
</section>
