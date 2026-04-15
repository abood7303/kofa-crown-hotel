<x-layout>
    <x-slot:title>Kofa Crown Hotel | الرئيسية</x-slot:title>

    <!-- Hero Section -->
    <section class="relative h-screen w-full overflow-hidden flex items-end pb-32 px-12 parallax-container">
        <div class="absolute inset-0 z-0">
            <img class="w-full h-full object-cover grayscale opacity-60 transition-transform duration-300"
                data-alt="Moody cinematic wide shot of a dark jagged cliff face over a crashing midnight ocean"
                src="/images/index.png">
            <div class="absolute inset-0 scrim-bottom"></div>
        </div>
        <div class="relative z-10 max-w-5xl text-center mx-auto reveal">
            <h1 class="text-5xl md:text-8xl font-headline letter-spacing-tight text-on-surface leading-[0.9] mb-8 text-center uppercase">
                <span class="italic font-light">فندق كوفا</span>
                <br>
                <span class="italic font-light opacity-80">كراون</span>
            </h1>
        </div>
    </section>

    <!-- The Elemental Suites (Accommodations) -->
    <section class="py-24 px-8 md:px-16 bg-surface earthen-glow overflow-hidden reveal">
        <div class="max-w-screen-xl mx-auto">
            <div class="flex flex-col md:flex-row justify-between items-baseline mb-20 gap-8">
                <h2 class="text-4xl md:text-5xl font-headline letter-spacing-tight italic">أجنحة </h2>
            </div>
            <!-- Organic Bubble Layout -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-16 items-center">
                <!-- Item 1 -->
                <div class="flex flex-col items-center text-center float-animation float-delay-1">
                    <div class="relative w-full aspect-[4/5] overflow-hidden shape-pebble-1 group cursor-pointer mb-8 parallax-container">
                        <img class="w-full h-full object-cover grayscale opacity-70 group-hover:grayscale-0 group-hover:opacity-100 transition-all duration-1000" data-alt="Ultra-luxury dark minimalist bedroom" src="https://lh3.googleusercontent.com/aida-public/AB6AXuChV3_JrOZl9sx1ttYOP_GNzT5pMFqjksHasOgiGw-4RfvFsgSpZUmAjInydJXiisyuwht-_QbC39Yk5IQfNTwi_LJPsM9H4222KiX0SDI-oca-E4TfnCvezvpC7JO4nALqQ8l9fqyjM3tQsNxgev9nVHJkYBWyiakKYP8FUeS36KEKTs38PKG7wlSHuc9VCz7TShVsGdOD2Ct8BqNKlz-aGpHE1_0dpnr7179Xfzhf6CpQFUHeRBvj4OdVroNqCAp7YokeNM2NqPuR">
                        <div class="absolute inset-0 bg-gradient-to-t from-primary-container/40 to-transparent"></div>
                    </div>
                    <h3 class="text-3xl font-headline mb-2">جناح vip</h3>
                    <p class="font-label text-xs uppercase tracking-widest text-primary">شرفة خاصة • حوض استحمام </p>
                </div>
                <!-- Item 2 -->
                <div class="flex flex-col items-center text-center float-animation float-delay-2 mt-12 md:mt-24">
                    <div class="relative w-full aspect-[4/5] overflow-hidden shape-pebble-2 group cursor-pointer mb-8 parallax-container">
                        <img class="w-full h-full object-cover grayscale opacity-70 group-hover:grayscale-0 group-hover:opacity-100 transition-all duration-1000" data-alt="Interior of a luxury room with dark wood accents"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuAPofAkBFrNFqLXIl1jd1gCqTml8nAd4O-pP-bh13FHwTp9zqoeGYZn7IOBXpc0g4xQj5ol4ohsuOnxdlmV-6a1B_H9zf3iRE4eYHVbYTZCr_mZxw1w1kOIP6VqdaclaFZKqY20Id5pITEA63OVs9qMk4DJtyuktF5qnPyooeCN6QVhVQTdcPzabd8auqKSKW6wgKaAhPnE_VxOyx4vUubB6qjmYv70pqmq8X9-2W5wTCLaxrkuq2osNO7N8n9KJsK7JUWF9aqeeqsL">
                        <div class="absolute inset-0 bg-gradient-to-t from-primary-container/40 to-transparent"></div>
                    </div>
                    <h3 class="text-3xl font-headline mb-2"> غرفه مفردة</h3>
                    <p class="font-label text-xs uppercase tracking-widest text-primary">إطلالة مرتفعة • خصوصية مطلقة</p>
                </div>
                <!-- Item 3 -->
                <div class="flex flex-col items-center text-center float-animation float-delay-3">
                    <div class="relative w-full aspect-[4/5] overflow-hidden shape-pebble-3 border border-outline-variant/30 flex items-center justify-center bg-surface-container-low group cursor-pointer mb-8">
                        <div class="text-center p-12">
                            <span class="material-symbols-outlined text-6xl text-primary mb-6">king_bed</span>
                            <p class="font-label text-xs uppercase tracking-[0.2em] mb-4 text-center">
                                <a class="text-zinc-500 hover:text-primary transition-colors font-label uppercase text-[10px] tracking-widest"
                                    href="/rooms"> عرض كافة الإقامات</a>

                            </p>
                            <div class="h-[1px] w-12 bg-primary mx-auto group-hover:w-20 transition-all"></div>
                        </div>
                        <div class="absolute inset-0 bg-primary-container/10 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    </div>
                    <h3 class="text-2xl font-headline mb-2">استكشف المزيد</h3>
                    <p class="font-label text-[10px] uppercase tracking-widest text-outline">ملاذات مخفية بانتظارك</p>
                </div>
            </div>
        </div>
    </section>

    <!-- The Abyssal Spa -->
    <section class="py-24 px-8 md:px-16 bg-surface-container-lowest reveal">
        <div class="max-w-screen-xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
            <div class="relative aspect-[3/4] overflow-hidden rounded-sm parallax-container">
                <img class="w-full h-full object-cover grayscale brightness-50 transition-transform duration-300"
                    data-alt="Luxury spa interior with dark volcanic stone pool" src="https://lh3.googleusercontent.com/aida-public/AB6AXuD_xov1gQK-k0IHTSy1lInugO2rngfzChaUqyq_rJ-bSY-NHx-GgKNMnGLm1FG5H7hPNYaNiCLr58PRblRbCR1KBQPg7-PFu9HeveSrybnYxXKAhb3IYgMjML_ZK4-nOBlO6DGMuSkyKcT76CDAE3rB7etU9LCEudTguAa9V4Aq7zF16OZAGY_OsIY-PYbNKp6jr4V1Eg6c1rDTXyQREMHqiRJS93n5Dl6i1honkxrbRtufWZv8jN4uA4IvI_xy4WDINCfmd5toaV41">
            </div>
            <div class="pr-0 md:pr-8">
                <span class="font-label uppercase text-[10px] letter-spacing-wide text-primary block mb-6">الاستشفاء</span>
                <h2 class="text-4xl md:text-5xl font-headline mb-8 leading-tight">بيت الاستحمام </h2>
                <p class="text-zinc-400 text-base leading-relaxed mb-10 font-light">
                    اغمر نفسك في مياه ، صُممت لتجريدك من ضجيج العالم الحديث وإعادتك إلى حالتك الأولى.
                </p>
                <ul class="space-y-6 mb-12">
                    <li class="flex items-center gap-4 group">
                        <span class="material-symbols-outlined text-primary text-xl">water_drop</span>
                        <span class="font-label text-sm uppercase tracking-widest group-hover:-translate-x-2 transition-transform">تقشير الملح الأسود</span>
                    </li>
                    <li class="flex items-center gap-4 group">
                        <span class="material-symbols-outlined text-primary text-xl">thermostat</span>
                        <span class="font-label text-sm uppercase tracking-widest group-hover:-translate-x-2 transition-transform">غرفة البخار البركاني</span>
                    </li>
                    <li class="flex items-center gap-4 group">
                        <span class="material-symbols-outlined text-primary text-xl">self_improvement</span>
                        <span class="font-label text-sm uppercase tracking-widest group-hover:-translate-x-2 transition-transform">تأمل منتصف الليل</span>
                </ul>
            </div>
        </div>
    </section>

    <!-- Culinary Section (Dining) -->
    <section class="py-20 px-8 md:px-16 bg-surface overflow-hidden">
        <div class="max-w-screen-xl mx-auto">
            <div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-8 reveal">
                <div class="max-w-xl">
                    <span class="font-label uppercase text-[10px] letter-spacing-wide text-primary block mb-3 border-r-2 border-primary/30 mr-4 px-3 text-right">تجربة القهوة الفريدة </span>
                    <h2 class="text-4xl md:text-6xl font-headline italic leading-none">الكافيه</h2>
                </div>
                <div class="max-w-sm pb-2">
                    <p class="text-on-surface-variant text-sm leading-relaxed font-light mb-8 text-justify">
                        بين عبق القهوة اليمنية الأصيلة وتفاصيل الفخامة العصرية، ندعوكم لرحلة تذوق استثنائية في أرقى زوايا فندق كوفا كراون.
                    </p>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-x-16 gap-y-20 items-start">
                <!-- Cafe Item 1 -->
                <div class="flex flex-col reveal reveal-left">
                    <div class="relative aspect-[4/3] overflow-hidden shape-pebble-4 group mb-8 shadow-xl cursor-pointer parallax-container">
                        <img class="w-full h-full object-cover grayscale opacity-70 group-hover:grayscale-0 group-hover:opacity-100 transition-all duration-1000 group-hover:scale-110"
                            src="/images/cafe2.jpg" alt="Outdoor Lounge">
                        <div class="absolute inset-0 bg-primary-container/10 mix-blend-overlay"></div>
                        <div class="absolute inset-0 border border-primary/5 rounded-full pointer-events-none"></div>
                    </div>
                    <!-- <div class="px-2">
                        <div class="flex items-center gap-3 mb-4">
                            <span class="h-px w-8 bg-primary/40"></span>
                            <span class="font-label text-primary text-[10px] tracking-widest uppercase">رؤية بانورامية</span>
                        </div>
                        <h3 class="text-2xl font-headline mb-4 italic opacity-90">ساحة خارجية</h3>
                        <p class="text-on-surface-variant text-sm leading-relaxed font-light mb-8 text-justify">
                            تمتع بالاجواء الخارجيه والجو العليل مع كوب قهوة تنسك الدنيا
                        </p>
                        <button class="font-label text-[10px] uppercase tracking-widest flex items-center gap-4 group">
                            <span class="bg-primary-container/20 p-3 rounded-full group-hover:bg-primary transition-all">
                                <span class="material-symbols-outlined text-xs group-hover:text-surface">explore</span>
                            </span>
                            اكتشف الإطلالة
                        </button>
                    </div> -->
                </div>

                <!-- Cafe Item 2 -->
                <div class="flex flex-col md:mt-32 reveal reveal-right">
                    <div class="relative aspect-[4/3] overflow-hidden shape-pebble-1 group mb-8 shadow-xl cursor-pointer order-first md:order-last mt-0 md:mt-8 parallax-container">
                        <img class="w-full h-full object-cover grayscale opacity-70 group-hover:grayscale-0 group-hover:opacity-100 transition-all duration-1000 group-hover:scale-110"
                            src="/images/cafe1.jpg" alt="Obsidian Bar">
                        <div class="absolute inset-0 bg-primary-container/10 mix-blend-overlay"></div>
                    </div>

                </div>

                <!-- Cafe Item 1 -->
                <div class="flex flex-col reveal reveal-left">
                    <div class="relative aspect-[4/3] overflow-hidden shape-pebble-4 group mb-8 shadow-xl cursor-pointer parallax-container">
                        <img class="w-full h-full object-cover grayscale opacity-70 group-hover:grayscale-0 group-hover:opacity-100 transition-all duration-1000 group-hover:scale-110"
                            src="/images/cafe2.jpg" alt="Outdoor Lounge">
                        <div class="absolute inset-0 bg-primary-container/10 mix-blend-overlay"></div>
                        <div class="absolute inset-0 border border-primary/5 rounded-full pointer-events-none"></div>
                    </div>
                </div>
            </div>
    </section>

    <!-- Quote / Atmosphere -->
    <section class="py-40 px-12 bg-surface text-center earthen-glow reveal">
        <div class="max-w-3xl mx-auto">
            <span class="material-symbols-outlined text-6xl text-outline-variant/30 mb-8">format_quote</span>
            <blockquote class="text-3xl md:text-5xl font-headline italic leading-tight text-on-surface mb-12">
                "الليل لا يخفي العالم، بل يكشف أجزاءً منا تجعلنا الشمس ننساها."
            </blockquote>
            <p class="font-label uppercase text-xs letter-spacing-wide text-outline">حارس المرصد</p>
        </div>
    </section>

    <!-- Guest Reviews Section -->
    <section class="py-32 px-12 bg-surface-container-low overflow-hidden reveal">
        <div class="max-w-screen-2xl mx-auto reveal">
            <div class="flex flex-col items-center text-center mb-24">
                <span class="font-label uppercase text-xs letter-spacing-wide text-primary mb-4 block">شهادات</span>
                <h2 class="text-5xl font-headline letter-spacing-tight">آراء <span class="italic">الضيوف</span></h2>
                <div class="h-[1px] w-24 bg-primary-container mt-6"></div>
            </div>
            <div x-data="{ 
                    active: 0, 
                    total: 3,
                    next() { this.active = (this.active + 1) % this.total },
                    prev() { this.active = (this.active - 1 + this.total) % this.total },
                    init() {
                        setInterval(() => { this.next() }, 6000)
                    }
                }" class="relative max-w-4xl mx-auto">
                <!-- Navigation Arrows -->
                <div class="absolute inset-y-0 -left-12 md:-left-24 flex items-center z-20">
                    <button @click="prev()" class="text-primary/40 hover:text-primary transition-all p-4">
                        <span class="material-symbols-outlined text-4xl">chevron_left</span>
                    </button>
                </div>
                <div class="absolute inset-y-0 -right-12 md:-right-24 flex items-center z-20">
                    <button @click="next()" class="text-primary/40 hover:text-primary transition-all p-4">
                        <span class="material-symbols-outlined text-4xl">chevron_right</span>
                    </button>
                </div>

                <!-- Reviews Container -->
                <div class="relative min-h-[450px] md:min-h-[400px] flex items-center justify-center">
                    <!-- Testimonial 1 -->
                    <div x-show="active === 0"
                        x-transition:enter="transition ease-out duration-700 delay-300"
                        x-transition:enter-start="opacity-0 translate-y-12 scale-95"
                        x-transition:enter-end="opacity-100 translate-y-0 scale-100"
                        x-transition:leave="transition ease-in duration-300 absolute"
                        x-transition:leave-start="opacity-100 scale-100"
                        x-transition:leave-end="opacity-0 scale-105"
                        class="w-full text-center px-6">
                        <div class="flex justify-center gap-1 mb-8 text-primary">
                            <span class="material-symbols-outlined fill-1 text-sm">star</span>
                            <span class="material-symbols-outlined fill-1 text-sm">star</span>
                            <span class="material-symbols-outlined fill-1 text-sm">star</span>
                            <span class="material-symbols-outlined fill-1 text-sm">star</span>
                            <span class="material-symbols-outlined fill-1 text-sm">star</span>
                        </div>
                        <p class="font-headline text-2xl md:text-3xl lg:text-4xl leading-relaxed text-on-surface mb-10 italic">
                            "تجربة لا تُنسى، الهدوء هنا يأخذك إلى عالم آخر تماماً. لم أشعر بهذا الصفاء منذ سنوات."
                        </p>
                        <div class="flex flex-col items-center gap-4">
                            <div class="w-10 h-px bg-primary/30"></div>
                            <span class="font-label text-[10px] uppercase tracking-[0.4em] text-primary">فهد القحطاني</span>
                        </div>
                    </div>

                    <!-- Testimonial 2 -->
                    <div x-show="active === 1"
                        x-transition:enter="transition ease-out duration-700 delay-300"
                        x-transition:enter-start="opacity-0 translate-y-12 scale-95"
                        x-transition:enter-end="opacity-100 translate-y-0 scale-100"
                        x-transition:leave="transition ease-in duration-300 absolute"
                        x-transition:leave-start="opacity-100 scale-100"
                        x-transition:leave-end="opacity-0 scale-105"
                        class="w-full text-center px-6" style="display: none;">
                        <div class="flex justify-center gap-1 mb-8 text-primary">
                            <span class="material-symbols-outlined fill-1 text-sm">star</span>
                            <span class="material-symbols-outlined fill-1 text-sm">star</span>
                            <span class="material-symbols-outlined fill-1 text-sm">star</span>
                            <span class="material-symbols-outlined fill-1 text-sm">star</span>
                            <span class="material-symbols-outlined fill-1 text-sm">star</span>
                        </div>
                        <p class="font-headline text-2xl md:text-3xl lg:text-4xl leading-relaxed text-on-surface mb-10 italic">
                            "التصميم المعماري مذهل والخدمة تفوق التوقعات. كل ركن في المرصد يحكي قصة صمت جميلة."
                        </p>
                        <div class="flex flex-col items-center gap-4">
                            <div class="w-10 h-px bg-primary/30"></div>
                            <span class="font-label text-[10px] uppercase tracking-[0.4em] text-primary">نورة السديري</span>
                        </div>
                    </div>

                    <!-- Testimonial 3 -->
                    <div x-show="active === 2"
                        x-transition:enter="transition ease-out duration-700 delay-300"
                        x-transition:enter-start="opacity-0 translate-y-12 scale-95"
                        x-transition:enter-end="opacity-100 translate-y-0 scale-100"
                        x-transition:leave="transition ease-in duration-300 absolute"
                        x-transition:leave-start="opacity-100 scale-100"
                        x-transition:leave-end="opacity-0 scale-105"
                        class="w-full text-center px-6" style="display: none;">
                        <!-- <div class="flex justify-center gap-1 mb-8 text-primary">
                            <span class="material-symbols-outlined fill-1 text-sm">star</span>
                            <span class="material-symbols-outlined fill-1 text-sm">star</span>
                            <span class="material-symbols-outlined fill-1 text-sm">star</span>
                            <span class="material-symbols-outlined fill-1 text-sm">star</span>
                            <span class="material-symbols-outlined fill-1 text-sm">star</span>
                        </div> -->
                        <p class="font-headline text-2xl md:text-3xl lg:text-4xl leading-relaxed text-on-surface mb-10 italic">
                            "ملاذ حقيقي لمن يبحث عن الفخامة والخصوصية المطلقة. بار أوبسيديان تجربة استثنائية."
                        </p>
                        <div class="flex flex-col items-center gap-4">
                            <div class="w-10 h-px bg-primary/30"></div>
                            <span class="font-label text-[10px] uppercase tracking-[0.4em] text-primary">عبدالعزيز بن حمد</span>
                        </div>
                    </div>
                </div>

                <!-- Dots -->
                <div class="flex justify-center gap-4 mt-8">
                    <template x-for="i in total" :key="i-1">
                        <button @click="active = i-1"
                            class="h-1 rounded-full transition-all duration-500"
                            :class="active === i-1 ? 'bg-primary w-12' : 'bg-primary/20 w-4'"></button>
                    </template>
                </div>
            </div>
        </div>
    </section>
</x-layout>