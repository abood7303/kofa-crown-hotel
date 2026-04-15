<!-- Footer -->
<footer class="bg-black border-t border-white/5">
    <div class="grid grid-cols-1 md:grid-cols-4 gap-12 px-12 py-20 max-w-screen-2xl mx-auto">
        <div class="col-span-1 md:col-span-2">
            <div class="text-3xl font-headline text-zinc-200 mb-8">
                <img alt="Kofa Crown Hotel Logo"
                    :class="scrolled ? 'h-11 md:h-14' : 'h-14 md:h-22'"
                    class="h-14 md:h-22 w-auto brightness-200 contrast-125 transition-all duration-500 drop-shadow-2xl"
                    src="/images/kofa.png">
            </div>
            <p class="text-zinc-500 font-body text-sm max-w-sm leading-relaxed mb-8">
                أعجوبة معمارية تقع على حافة المحيط الأطلسي. مكرسة للحفاظ على الصمت والاحتفاء بالظلام.
            </p>
        </div>
        <div>
            <h4 class="font-headline text-zinc-100 text-lg mb-6">التنقل</h4>
            <ul class="space-y-4">
                <li><a class="text-zinc-500 hover:text-primary transition-colors font-label uppercase text-[10px] tracking-widest" href="/rooms">الغرف</a></li>
                <li><a class="text-zinc-500 hover:text-zinc-300 transition-colors font-label uppercase text-[10px] tracking-widest" href="#">المنتجع الصحي</a></li>
                <li><a class="text-zinc-500 hover:text-primary transition-colors font-label uppercase text-[10px] tracking-widest" href="/restaurant">المطاعم</a></li>
                <li><a class="text-zinc-500 hover:text-zinc-300 transition-colors font-label uppercase text-[10px] tracking-widest" href="#">المعرض</a></li>
            </ul>
        </div>
        <div>
            <h4 class="font-headline text-zinc-100 text-lg mb-6">الاستفسارات</h4>
            <ul class="space-y-4">
                <li><a class="text-zinc-500 hover:text-zinc-300 font-label uppercase text-[10px] tracking-widest" href="#">سياسة الخصوصية</a></li>
                <li><a class="text-zinc-500 hover:text-zinc-300 font-label uppercase text-[10px] tracking-widest" href="#">شروط الخدمة</a></li>
                <li><a class="text-zinc-500 hover:text-zinc-300 font-label uppercase text-[10px] tracking-widest" href="#">الملف الصحفي</a></li>
                <li><a class="text-zinc-500 hover:text-zinc-300 font-label uppercase text-[10px] tracking-widest" href="#">اتصل بنا</a></li>
            </ul>
        </div>
    </div>
    <div class="px-12 py-8 border-t border-white/5 text-center">
        <p class="text-[10px] font-label uppercase tracking-[0.2em] text-zinc-600">© 2026 فندق وأجنحة كوفا كراون. ملاذٌك.</p>
    </div>
</footer>