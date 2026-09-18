@php
    $navItems = [
        ['route' => 'home', 'icon' => 'home', 'label' => 'Strona Główna'],
        ['route' => 'uslugi.index', 'icon' => 'layers', 'label' => 'Usługi'],
        ['route' => 'o-nas', 'icon' => 'user-check', 'label' => 'O nas'],
        ['route' => 'galeria', 'icon' => 'camera', 'label' => 'Galeria'],
        ['route' => 'home', 'icon' => 'map-pin', 'label' => 'Obszar działania', 'url' => route('home') . '#obszar'],
        ['route' => 'opinie', 'icon' => 'message-square-quote', 'label' => 'Opinie'],
        ['route' => 'kontakt', 'icon' => 'phone', 'label' => 'Kontakt'],
    ];
@endphp
<header class="fixed top-0 left-0 right-0 z-50 bg-surface/90 backdrop-blur-xl shadow-[0_1px_8px_rgba(46,50,48,0.06)]">
  <div class="h-16 sm:h-20 max-w-7xl mx-auto px-4 sm:px-6 lg:px-12 flex items-center justify-between gap-2 sm:gap-4">
    <div class="flex items-center gap-3 sm:gap-3.5 shrink-0">
      <img alt="Horyzont Geodezja Logo" class="h-12 sm:h-16 w-auto object-contain shrink-0" src="{{ asset('assets/images/logo.webp') }}" />
      <a class="flex flex-col shrink-0" href="{{ route('home') }}"><span class="flex items-center gap-1.5 sm:gap-2"><span class="font-headline font-bold text-lg sm:text-xl leading-tight tracking-tight text-on-surface whitespace-nowrap">HORYZONT</span><span class="w-3.5 h-3.5 sm:w-4 sm:h-4 bg-[#fdd43a] shrink-0 inline-block"></span></span><span class="font-label text-xs tracking-normal text-primary font-semibold whitespace-nowrap">Biuro Geodezyjne<span class="hidden 2xl:inline"> Łukasz Kowalczyk</span></span></a>
    </div>
    <nav class="hidden lg:flex items-center gap-0.5 xl:gap-1.5 shrink-0">
      @foreach ($navItems as $item)
        <a class="flex items-center gap-1.5 px-2.5 xl:px-3 py-1.5 xl:py-2 text-sm rounded-lg transition-colors font-medium whitespace-nowrap {{ request()->routeIs($item['route']) ? 'text-on-surface bg-surface-container-high' : 'text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface' }}" href="{{ $item['url'] ?? route($item['route']) }}"><i data-lucide="{{ $item['icon'] }}" class="w-4 h-4 text-neutral-700 shrink-0"></i><span>{{ $item['label'] }}</span></a>
      @endforeach
    </nav>
    <div class="flex items-center gap-2 sm:gap-3 shrink-0">
      <a class="hidden sm:flex items-center gap-2 px-3.5 py-2 rounded-xl bg-secondary-container text-on-secondary-container hover:bg-surface-container-high transition-colors font-semibold text-sm whitespace-nowrap" href="tel:+48515430240"><i data-lucide="phone" class="w-4 h-4 text-neutral-900 shrink-0"></i><span class="hidden xl:inline">+48 515 430 240</span></a>
      <a class="flex items-center gap-1.5 px-3 py-2 sm:px-4 sm:py-2.5 rounded-xl bg-primary text-on-primary hover:bg-primary-container hover:text-on-primary-container font-semibold text-xs sm:text-sm transition-all whitespace-nowrap active:scale-[0.98]" href="{{ route('kontakt') }}"><i data-lucide="calculator" class="w-4 h-4 shrink-0"></i><span>Formularz</span><span class="hidden sm:inline">&nbsp;kontaktu</span></a>
      <button id="mobile-menu-btn" aria-label="Otwórz menu" aria-expanded="false" class="lg:hidden w-10 h-10 rounded-xl bg-surface-container-high text-on-surface flex items-center justify-center shrink-0 hover:bg-surface-variant transition-colors">
        <i id="menu-icon-open" data-lucide="menu" class="w-5 h-5"></i>
        <i id="menu-icon-close" data-lucide="x" class="w-5 h-5 hidden"></i>
      </button>
    </div>
  </div>
  <div id="mobile-menu" class="hidden lg:hidden border-t border-outline-variant/30 bg-surface/98 backdrop-blur-xl px-4 py-4 sm:px-6 space-y-1 shadow-lg max-h-[calc(100vh-64px)] sm:max-h-[calc(100vh-80px)] overflow-y-auto">
    @foreach ($navItems as $item)
      <a class="flex items-center gap-3 px-4 py-3 text-base font-semibold text-on-surface rounded-xl hover:bg-surface-container-high transition-colors" href="{{ $item['url'] ?? route($item['route']) }}"><i data-lucide="{{ $item['icon'] }}" class="w-5 h-5 text-neutral-900"></i>{{ $item['label'] }}</a>
    @endforeach
    <div class="pt-3 mt-2 border-t border-outline-variant/30 flex flex-col gap-2.5">
      <a href="tel:+48515430240" class="flex items-center justify-center gap-2 py-3 px-4 rounded-xl bg-primary text-on-primary font-bold text-sm active:scale-[0.98] transition-transform">
        <i data-lucide="phone" class="w-4 h-4"></i>
        <span>Zadzwoń: +48 515 430 240</span>
      </a>
      <a href="{{ route('kontakt') }}" class="flex items-center justify-center gap-2 py-3 px-4 rounded-xl bg-secondary-container text-on-secondary-container font-semibold text-sm hover:bg-surface-container-high transition-colors">
        <i data-lucide="calculator" class="w-4 h-4 text-tertiary"></i>
        <span>Zamów bezpłatną wycenę</span>
      </a>
      <div class="pt-2 px-2 text-xs text-on-surface-variant font-medium flex items-center justify-between">
        <span>Byszyce 167 (Wieliczka)</span>
        <span>Pn–Pt: 07:00–17:00</span>
      </div>
    </div>
  </div>
</header>
