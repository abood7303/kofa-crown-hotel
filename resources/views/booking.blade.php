<x-layout>
    <x-slot:title>Kofa Crown Hotel | الحجز</x-slot:title>

    <main class="pt-32 pb-20 px-6 md:px-12 max-w-screen-2xl mx-auto">
        <!-- Header Section -->
        <header class="mb-12 grid grid-cols-1 md:grid-cols-12 gap-8">
            <div class="md:col-span-8 md:col-start-1">
                <span class="block font-label text-primary uppercase tracking-widest text-[10px] mb-4">بوابة الحجز</span>
                <h1 class="text-4xl md:text-6xl font-headline tracking-tight leading-tight mb-6 italic">احجز ملاذك في قلب السكون.</h1>
                <p class="text-sm md:text-base font-body text-zinc-500 max-w-2xl leading-relaxed">اختر نافذتك الزمنية وجناحك المفضل. كل جناح مصمم بعناية للمراقبة المثلى للأفق البعيد.</p>
            </div>
        </header>

        <!-- Booking Layout -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-16">
            <!-- Right Column: Selection Flow -->
            <div class="lg:col-span-7 space-y-16 reveal">
                <!-- Date Picker Section -->
                <section>
                    <div class="flex items-center gap-4 mb-6">
                        <span class="font-headline text-2xl text-primary opacity-50">٠١</span>
                        <h2 class="font-headline text-xl tracking-tight italic">النطاق الزمني</h2>
                    </div>
                    <div class="bg-surface-container-low p-8 border-b-2 border-primary-container/40">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                            <div class="space-y-2">
                                <label class="block font-label text-[10px] uppercase tracking-widest text-outline">تاريخ الدخول</label>
                                <div class="flex items-center gap-3 border-b border-outline-variant py-3 group hover:border-primary transition-colors">
                                    <span class="material-symbols-outlined text-primary-fixed-dim">calendar_today</span>
                                    <input class="bg-transparent border-none p-0 focus:ring-0 text-on-surface font-headline text-xl tracking-wider w-full text-right" type="text" value="٢٤ أكتوبر، ٢٠٢٤" />
                                </div>
                            </div>
                            <div class="space-y-2">
                                <label class="block font-label text-[10px] uppercase tracking-widest text-outline">تاريخ الخروج</label>
                                <div class="flex items-center gap-3 border-b border-outline-variant py-3 group hover:border-primary transition-colors">
                                    <span class="material-symbols-outlined text-primary-fixed-dim">calendar_today</span>
                                    <input class="bg-transparent border-none p-0 focus:ring-0 text-on-surface font-headline text-xl tracking-wider w-full text-right" type="text" value="٢٨ أكتوبر، ٢٠٢٤" />
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Room Selection Section -->
                <section>
                    <div class="flex items-center gap-4 mb-8">
                        <span class="font-headline text-3xl text-primary opacity-50">٠٢</span>
                        <h2 class="font-headline text-2xl tracking-tight">اختر الجناح</h2>
                    </div>
                    <div class="grid grid-cols-1 gap-6">
                        <!-- Chamber Card 1 (Selected) -->
                        <div class="group relative overflow-hidden bg-surface-container ring-1 ring-primary-container/50">
                            <div class="md:flex h-full">
                                <div class="md:w-2/5 relative h-64 md:h-auto overflow-hidden">
                                    <img alt="جناح فندقي فاخر بجدران فحمي داكنة، نوافذ كبيرة من الأرض للسقف تطل على المحيط ليلاً" class="object-cover w-full h-full grayscale hover:grayscale-0 transition-all duration-700" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAjQkix_TbvAP25t1QPwJIYtOjZg4iOlLCcZx-mAUESoetIqjTFSZDpNh0K3zLtcK_F18I4pnNMf6GQpxcuR7v9nzPyzKofUxkSmu_8iEe1kG-ynfAuqFsdXRz3Jy5A2YDZMTfyLHE2wxtrz0m__V1HQXAVaixtbNfPnEkiZBuwhaIJJzonMNRnRNcpEuDW7liR89pnVRRLVzfTDfJkYvfYN-SIS7XeOMzm_ZXyH40xyJH-LbNPt-KjROGZfuU2r9b7KnMlxzEYEqOo" />
                                    <div class="absolute inset-0 bg-primary-container/10 mix-blend-overlay"></div>
                                </div>
                                <div class="md:w-3/5 p-8 flex flex-col justify-between">
                                    <div>
                                        <div class="flex justify-between items-start mb-4">
                                            <h3 class="font-headline text-2xl">جناح الأوبسيديان</h3>
                                            <span class="bg-primary-container text-on-primary-container px-3 py-1 text-[10px] font-label uppercase tracking-widest">خيارك الحالي</span>
                                        </div>
                                        <p class="text-on-surface-variant font-body text-sm leading-relaxed mb-6">ملاذ متكامل مع إطلالات بانورامية على المحيط الأطلسي. معزول صوتياً ويضم منصة خاصة لمراقبة السماء.</p>
                                        <div class="flex gap-6 mb-2">
                                            <div class="flex items-center gap-2">
                                                <span class="material-symbols-outlined text-xs text-outline">bed</span>
                                                <span class="font-label text-[10px] uppercase text-on-surface-variant">سرير كينج</span>
                                            </div>
                                            <div class="flex items-center gap-2">
                                                <span class="material-symbols-outlined text-xs text-outline">visibility</span>
                                                <span class="font-label text-[10px] uppercase text-on-surface-variant">إطلالة بحرية</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex justify-between items-end mt-8 border-t border-outline-variant pt-6">
                                        <div class="font-headline text-xl">١,٢٤٠ $ <span class="text-xs font-label uppercase text-outline">/ ليلة</span></div>
                                        <button class="font-label text-xs uppercase tracking-widest text-primary hover:text-primary-fixed transition-colors">التفاصيل</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Chamber Card 2 -->
                        <div class="group relative overflow-hidden bg-surface-container-low hover:bg-surface-container transition-colors duration-500">
                            <div class="md:flex h-full">
                                <div class="md:w-2/5 relative h-64 md:h-auto overflow-hidden opacity-60">
                                    <img alt="غرفة نوم بسيطة داكنة مع ملمس خرساني وإضاءة حمراء ناعمة" class="object-cover w-full h-full grayscale" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCIS-KS8DDPpml2acBzGGWrsLN4VYq9Bg5M7FQ1SS6wfmQJb83b7C0Q12WSeRnrOXShc9jrgv88D011ooLi39S9wUH-hxt8TccdLh_LsEWq5IEzvLOKLa39TfqwIs27oRKNSlaxKfj2fIjJi-Hw7iVoeVThQ9vp6b5sXjNdhb8-23krp9GlPzyhuFneRlEmsOykvVilrGoQWwLI1X2Mr0J7sSSozaMAMN2c_qpFxdLg4D4BWiRA6gFRkbAoqRagWYCQlahdZ0NMixWS" />
                                </div>
                                <div class="md:w-3/5 p-8 flex flex-col justify-between">
                                    <div>
                                        <h3 class="font-headline text-2xl mb-4">غرفة الحجر الواحد</h3>
                                        <p class="text-on-surface-variant font-body text-sm leading-relaxed mb-6">مصممة للتركيز العميق. ملمس خشن ممزوج بالمخمل الناعم، تمنحك إحساساً بالسكينة تحت الأرض وأنت فوقها.</p>
                                    </div>
                                    <div class="flex justify-between items-end mt-8 border-t border-outline-variant/50 pt-6">
                                        <div class="font-headline text-xl">٨٥٠ $ <span class="text-xs font-label uppercase text-outline">/ ليلة</span></div>
                                        <button class="bg-outline-variant/20 hover:bg-primary-container hover:text-on-primary-container px-6 py-2 font-label text-[10px] uppercase tracking-widest transition-all">اختر الجناح</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <!-- Left Column: Summary Card (Sticky) -->
            <div class="lg:col-span-5 reveal delay-200">
                <aside class="sticky top-32">
                    <div class="bg-surface-container-high p-10 relative border border-white/5">
                        <!-- Tonal Glow Decoration -->
                        <div class="absolute -top-24 -left-24 w-64 h-64 bg-primary-container/20 rounded-full blur-[100px] pointer-events-none"></div>
                        <h2 class="font-headline text-3xl mb-10 tracking-tight">إقامتك في المرصد</h2>
                        <div class="space-y-8 mb-12">
                            <div class="flex justify-between items-start pb-6 border-b border-outline-variant/30">
                                <div>
                                    <label class="block font-label text-[10px] uppercase tracking-widest text-outline mb-1">الجناح</label>
                                    <div class="font-headline text-lg">جناح الأوبسيديان</div>
                                </div>
                                <div class="text-left">
                                    <label class="block font-label text-[10px] uppercase tracking-widest text-outline mb-1">السعر</label>
                                    <div class="font-body text-sm">١,٢٤٠ $/ليلة</div>
                                </div>
                            </div>
                            <div class="flex justify-between items-start pb-6 border-b border-outline-variant/30">
                                <div>
                                    <label class="block font-label text-[10px] uppercase tracking-widest text-outline mb-1">المدة</label>
                                    <div class="font-headline text-lg">٤ ليالي</div>
                                </div>
                                <div class="text-left">
                                    <label class="block font-label text-[10px] uppercase tracking-widest text-outline mb-1">المواعيد</label>
                                    <div class="font-body text-sm">٢٤ أكتوبر - ٢٨ أكتوبر</div>
                                </div>
                            </div>
                            <div class="space-y-4 pt-4">
                                <div class="flex justify-between text-sm">
                                    <span class="text-on-surface-variant font-body">المجموع الفرعي</span>
                                    <span class="font-body">٤,٩٦٠.٠٠ $</span>
                                </div>
                                <div class="flex justify-between text-sm">
                                    <span class="text-on-surface-variant font-body">رسوم خدمة المرصد</span>
                                    <span class="font-body">٢٥٠.٠٠ $</span>
                                </div>
                                <div class="flex justify-between text-xl pt-6 border-t border-outline-variant text-primary">
                                    <span class="font-headline">إجمالي الاستقرار</span>
                                    <span class="font-headline font-bold">٥,٢١٠.٠٠ $</span>
                                </div>
                            </div>
                        </div>
                        <div class="space-y-4">
                            <button class="w-full bg-primary-container text-on-primary-container py-5 font-label uppercase tracking-[0.2em] text-xs hover:bg-primary transition-all shadow-xl shadow-black/40">
                                تأكيد الحجز
                            </button>
                            <p class="text-center font-label text-[10px] text-outline uppercase tracking-widest py-2">غير قابل للاسترداد خلال ٤٨ ساعة من موعد الوصول</p>
                        </div>
                        <!-- Trust Seal -->
                        <div class="mt-12 flex items-center justify-center gap-4 opacity-30">
                            <span class="material-symbols-outlined text-4xl">shield_locked</span>
                            <div class="text-[9px] font-label uppercase tracking-widest leading-tight">
                                قناة مشفرة وآمنة<br />تاجر مرصد معتمد
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </main>
</x-layout>