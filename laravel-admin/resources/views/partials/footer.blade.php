@php
    $footerServices = \App\Models\Service::orderBy('sort_order')->get();
@endphp
<footer class="w-full bg-neutral-950 text-neutral-400 mt-0 pb-28 lg:pb-12">
  <h2 class="sr-only">Informacje o biurze i nawigacja w stopce</h2>
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-12 pt-12 sm:pt-16 pb-12">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 lg:gap-12">
      <div class="flex flex-col gap-4">
        <div class="flex items-center gap-3.5">
          <img alt="Horyzont Geodezja Logo" class="h-16 sm:h-20 w-auto object-contain shrink-0" src="{{ asset('assets/images/logo-white.webp') }}" />
          <div class="flex flex-col">
            <div class="flex items-center gap-2"><span class="font-headline font-bold text-xl sm:text-2xl text-white leading-tight tracking-tight">HORYZONT</span><span class="w-4 h-4 sm:w-5 sm:h-5 bg-[#fdd43a] shrink-0 inline-block"></span></div>
            <span class="text-xs font-semibold text-yellow-400 tracking-wide">Biuro Geodezyjne Łukasz Kowalczyk</span>
          </div>
        </div>
        <p class="text-sm leading-relaxed text-neutral-400">
          Profesjonalne biuro świadczące kompleksowe usługi geodezyjne i kartograficzne na terenie Wieliczki, Krakowa oraz całej Małopolski.
        </p>
        <div class="flex items-center gap-2 pt-1">
          <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-yellow-400/15 text-yellow-300 border border-yellow-400/30 text-xs font-semibold">
            <i data-lucide="award" class="w-3.5 h-3.5 text-yellow-400 shrink-0"></i>
            Uprawnienia państwowe GGK
          </span>
        </div>
      </div>
      <div>
        <h3 class="font-headline font-bold text-base text-white mb-4">Usługi Geodezyjne</h3>
        <ul class="space-y-2.5 text-sm">
          @foreach ($footerServices as $service)
            <li><a href="{{ route('uslugi.show', $service->slug) }}" class="group/foot flex items-center gap-2 text-neutral-400 hover:text-yellow-400 transition-colors"><i data-lucide="{{ $service->icon ?: 'file-text' }}" class="w-4 h-4 text-neutral-400 group-hover/foot:text-yellow-400 shrink-0 transition-colors"></i><span>{{ $service->title }}</span></a></li>
          @endforeach
        </ul>
      </div>
      <div>
        <h3 class="font-headline font-bold text-base text-white mb-4">Dane Kontaktowe</h3>
        <ul class="space-y-3 text-sm">
          <li class="flex items-start gap-2.5">
            <i data-lucide="map-pin" class="w-4 h-4 text-neutral-400 shrink-0 mt-0.5"></i>
            <a href="https://maps.google.com/?q=Byszyce+167,+32-020+Wieliczka" target="_blank" rel="noopener noreferrer" class="text-neutral-400 hover:text-yellow-400 transition-colors">Byszyce 167, 32-020 Wieliczka</a>
          </li>
          <li class="flex items-center gap-2.5">
            <i data-lucide="phone" class="w-4 h-4 text-neutral-400 shrink-0"></i>
            <a class="hover:text-yellow-400 transition-colors font-bold text-white text-base" href="tel:+48515430240">+48 515 430 240</a>
          </li>
          <li class="flex items-center gap-2.5">
            <i data-lucide="mail" class="w-4 h-4 text-neutral-400 shrink-0"></i>
            <a href="mailto:geodezja.kowalczyk@gmail.com" class="text-neutral-400 hover:text-yellow-400 transition-colors">geodezja.kowalczyk@gmail.com</a>
          </li>
          <li class="flex items-start gap-2.5">
            <i data-lucide="clock" class="w-4 h-4 text-neutral-400 shrink-0 mt-0.5"></i>
            <div>
              <span class="text-neutral-300">Poniedziałek – Piątek: 07:00 – 17:00</span><br /><span class="text-xs text-neutral-400">Wycena telefoniczna również w weekendy</span>
            </div>
          </li>
        </ul>
      </div>
      <div>
        <h3 class="font-headline font-bold text-base text-white mb-4">Obszar Działania</h3>
        <p class="text-sm leading-relaxed mb-4 text-neutral-400">
          Powiat wielicki, krakowski, myślenicki, bocheński, limanowski oraz miasto Kraków.
        </p>
        <div class="flex flex-col gap-2 pt-1">
          <div class="flex items-center gap-1.5 text-xs font-bold text-yellow-400">
            <i data-lucide="sparkles" class="w-3.5 h-3.5"></i>
            <span>Potrzebujesz szybkiej wyceny?</span>
          </div>
          <p class="text-xs text-neutral-400">Bezpłatna konsultacja i analiza dokumentacji Twojej działki.</p>
          <a class="text-xs font-bold text-yellow-400 hover:text-yellow-300 transition-colors inline-flex items-center gap-1.5 mt-1" href="tel:+48515430240"><span>Zadzwoń: 515 430 240</span>
            <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
          </a>
        </div>
      </div>
    </div>
    <div class="mt-12 pt-6 border-t border-neutral-900 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs text-neutral-400">
      <p>© {{ date('Y') }} HORYZONT Biuro Geodezyjne Łukasz Kowalczyk. Wszelkie prawa zastrzeżone.</p>
      <div class="flex flex-wrap items-center gap-4 sm:gap-6 font-semibold">
        <a class="flex items-center gap-1.5 text-neutral-400 hover:text-yellow-400 transition-colors underline-offset-4 hover:underline" href="{{ route('galeria') }}"><i data-lucide="camera" class="w-3.5 h-3.5 text-neutral-400"></i><span>Galeria</span></a>
        <a class="flex items-center gap-1.5 text-neutral-400 hover:text-yellow-400 transition-colors underline-offset-4 hover:underline" href="{{ route('kontakt') }}"><i data-lucide="shield-check" class="w-3.5 h-3.5 text-neutral-400"></i><span>Polityka prywatności</span></a>
        <a class="flex items-center gap-1.5 text-neutral-400 hover:text-yellow-400 transition-colors underline-offset-4 hover:underline" href="{{ route('kontakt') }}"><i data-lucide="file-text" class="w-3.5 h-3.5 text-neutral-400"></i><span>RODO</span></a>
        <a class="flex items-center gap-1.5 text-neutral-400 hover:text-yellow-400 transition-colors underline-offset-4 hover:underline" href="{{ route('kontakt') }}"><i data-lucide="phone" class="w-3.5 h-3.5 text-neutral-400"></i><span>Kontakt</span></a>
      </div>
    </div>
  </div>
</footer>
