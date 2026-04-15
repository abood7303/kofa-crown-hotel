<nav x-data="{ scrolled: false }" 
    @scroll.window="scrolled = (window.pageYOffset > 20)"
    :class="{ 'py-4 bg-black/80 backdrop-blur-2xl border-b border-white/10 shadow-2xl': scrolled, 'py-6 bg-transparent border-b border-transparent': !scrolled }"
    class="fixed top-0 w-full z-50 transition-all duration-500 ease-in-out px-6 md:px-12 flex justify-between items-center group">

    <!-- Logo Section -->
    <div class="relative flex items-center">
        <a href="/" class="relative z-10 block transition-transform duration-500 hover:scale-105 active:scale-95">
            <img alt="Kofa Crown Hotel Logo"
                :class="scrolled ? 'h-11 md:h-14' : 'h-14 md:h-22'"
                class="h-14 md:h-22 w-auto brightness-200 contrast-125 transition-all duration-500 drop-shadow-2xl"
                src="/images/kofa.png">
        </a>
        <!-- Subtle Glow behind logo -->
        <div class="absolute -inset-4 bg-primary/10 blur-[40px] rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-700 pointer-events-none"></div>
    </div>

    <!-- Desktop Navigation -->
    <div class="hidden md:flex items-center gap-12">
        @php
        $links = [
        ['name' => 'الغرف', 'url' => '/rooms'],
        ['name' => 'المطاعم', 'url' => '/restaurant'],
        ['name' => 'المنتجع الصحي', 'url' => '#'],
        ['name' => 'عن الفندق', 'url' => '#'],
        ['name' => 'المعرض', 'url' => '#'],
        ];
        @endphp

        @foreach($links as $link)
        <a href="{{ $link['url'] }}"
            class="relative text-xs font-label uppercase tracking-widest transition-colors duration-300 group/link {{ request()->is(ltrim($link['url'], '/')) ? 'text-primary' : 'text-on-surface/60 hover:text-primary' }}">
            {{ $link['name'] }}
            <span class="absolute -bottom-2 left-0 w-0 h-[1px] bg-primary transition-all duration-300 group-hover/link:w-full {{ request()->is(ltrim($link['url'], '/')) ? 'w-full' : '' }}"></span>
        </a>
        @endforeach
    </div>

    <!-- Actions Area -->
    <div class="flex items-center gap-6">
        <!-- Language Switcher (Mockup) -->
        <button class="hidden lg:flex items-center gap-2 text-zinc-500 hover:text-primary transition-colors font-label text-[10px] uppercase tracking-widest">
            <span class="material-symbols-outlined text-sm">language</span>
            EN
        </button>

        <!-- Booking Button -->
        <a href="/booking"
            class="relative overflow-hidden bg-primary-container text-on-primary-container px-10 py-3 font-label uppercase text-[10px] font-bold tracking-[0.2em] transition-all duration-300 hover:brightness-125 active:scale-95 shadow-lg shadow-black/20 group/btn rounded-[2px]">
            <span class="relative z-10">احجز الآن</span>
            <!-- Shine effect on hover -->
            <div class="absolute inset-0 -translate-x-full group-hover/btn:translate-x-full transition-transform duration-1000 bg-gradient-to-r from-transparent via-white/10 to-transparent"></div>
        </a>

        <!-- Mobile Menu Trigger -->
        <button @click="$dispatch('open-menu')" class="md:hidden text-zinc-100 hover:text-primary transition-colors">
            <span class="material-symbols-outlined text-3xl">menu</span>
        </button>
    </div>
</nav>

<!-- Mobile Overlay Menu (Logical Placeholder) -->
<div x-data="{ open: false }"
    @open-menu.window="open = true"
    x-show="open"
    x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="opacity-0 translate-y-[-100%]"
    x-transition:enter-end="opacity-100 translate-y-0"
    x-transition:leave="transition ease-in duration-200"
    x-transition:leave-start="opacity-100 translate-y-0"
    x-transition:leave-end="opacity-0 translate-y-[-100%]"
    class="fixed inset-0 z-[60] bg-surface flex flex-col items-center justify-center p-12 text-center"
    style="display: none;">

    <button @click="open = false" class="absolute top-8 right-8 text-on-surface hover:text-primary transition-colors">
        <span class="material-symbols-outlined text-4xl">close</span>
    </button>

    <div class="flex flex-col gap-8">
        @foreach($links as $link)
        <a href="{{ $link['url'] }}"
            class="text-4xl font-headline italic hover:text-primary transition-colors">
            {{ $link['name'] }}
        </a>
        @endforeach
    </div>

    <div class="mt-20 flex flex-col items-center gap-6">
        <a href="/booking" class="bg-primary-container text-on-primary-container px-16 py-4 rounded-full font-label uppercase tracking-widest font-bold">احجز الآن</a>
        <div class="text-zinc-500 font-label text-[10px] uppercase tracking-[0.3em]">تجربة كوفا كراون</div>
    </div>
</div>