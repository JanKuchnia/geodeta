@extends('layouts.app')

@section('title', 'O nas | HORYZONT Biuro Geodezyjne Łukasz Kowalczyk')
@section('main-class', 'bg-neutral-100')

@section('content')

      <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-12 pt-6 sm:pt-8 flex items-center gap-1.5 text-xs sm:text-sm text-neutral-500 flex-wrap" aria-label="Okruszki">
        <a href="{{ route('home') }}" class="hover:text-neutral-900 transition-colors">Strona główna</a><i data-lucide="chevron-right" class="w-3.5 h-3.5 text-neutral-400"></i><span class="text-neutral-900 font-semibold">O nas</span>
      </nav>
      <section class="w-full py-10 sm:py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-12">
          <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-14 xl:gap-16 items-start">
            <div class="lg:col-span-5">
              <div class="rounded-2xl sm:rounded-3xl overflow-hidden shadow-lg border border-neutral-300 bg-white">
                <img class="w-full h-80 sm:h-[480px] object-cover" alt="Łukasz Kowalczyk, geodeta uprawniony, na pomiarach w terenie w powiecie wielickim" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDpGf9JjVvQurDMlf8fjeDpZZ-GqaF2U0TKCFJiIgv74A53sQGr4QIUysC2IMBEEpd-Q93bVDW1y5UlcY-lWo3ul1LF0Oltu2GHCWZhGMfbnQR6SVjMj_-KDuLC9kJ7wGj_ORXHYgthZGhVlU4EfcFxe3LEVaksQ1kYgZjEOGFSvailJSMJGBIkOlGiBvyJmIBNcu88afwJrS-SvSfizPqNVyaY2aY3PTt5jGNhxj9h6j-BYBxJIzJk" />
              </div>
              <div class="mt-4 flex items-center justify-between gap-3 px-1">
                <div class="flex items-center gap-3">
                  <div class="w-10 h-10 rounded-full bg-neutral-950 text-yellow-400 border border-yellow-400/30 flex items-center justify-center font-headline font-bold text-sm shrink-0">ŁK</div>
                  <div>
                    <p class="font-headline font-bold text-sm text-neutral-900 leading-tight">mgr inż. Łukasz Kowalczyk</p>
                    <p class="text-xs text-neutral-600 font-medium">Geodeta Uprawniony · Właściciel biura Horyzont</p>
                  </div>
                </div>
                <span class="inline-flex flex-col items-start gap-0.5 px-4 py-2 rounded-xl bg-yellow-400 text-black border border-yellow-500/40 text-sm font-bold shrink-0 shadow-xs">
                  <span class="flex items-center gap-1.5"><i data-lucide="award" class="w-4 h-4 text-black"></i>Numer uprawnień 23490</span>
                  <span>Zakres 1 i 2</span>
                </span>
              </div>
            </div>
            <div class="lg:col-span-7">
              <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-neutral-950 border border-neutral-800 text-white text-xs font-semibold mb-4 shadow-sm">
                <i data-lucide="shield-check" class="w-3.5 h-3.5 text-yellow-400 shrink-0"></i>
                <span>Dlaczego klienci wybierają Horyzont</span>
              </span>
              <h1 class="font-headline font-extrabold text-2xl sm:text-3xl lg:text-4xl text-neutral-900 leading-tight mb-4 tracking-tight">Pewność prawna, doświadczenie i <span class="text-neutral-950 underline decoration-yellow-400 decoration-[3px] sm:decoration-4 underline-offset-[6px] [text-decoration-skip-ink:none]" style="text-decoration-skip-ink: none;">brak zawiłego urzędowego żargonu</span></h1>
              <div class="space-y-3 text-neutral-600 text-sm sm:text-base leading-relaxed mb-6 sm:mb-8 max-w-xl">
                <p>Geodezja to fundament prawny i techniczny każdej budowy. Błędy pomiarowe lub niekompletna dokumentacja potrafią zablokować inwestycję na długie miesiące i wygenerować kosztowne spory.</p>
                <p>W biurze Horyzont stawiamy na bezpośrednią współpracę i terminowe zamykanie spraw urzędowych. Przeprowadzamy inwestorów przez procedury krok po kroku – bez urzędniczego żargonu i bez zbędnego stresu:</p>
              </div>
              <h2 class="sr-only">Kluczowe standardy obsługi i korzyści dla inwestorów</h2>
              <div class="space-y-4 sm:space-y-5">
                <div class="flex items-start gap-3.5">
                  <div class="w-7 h-7 rounded-lg bg-neutral-950 text-yellow-400 border border-neutral-800 flex items-center justify-center shrink-0 mt-0.5 shadow-sm font-bold"><i data-lucide="check" class="w-4 h-4 stroke-[2.5] text-yellow-400"></i></div>
                  <div>
                    <h3 class="font-headline font-bold text-sm sm:text-base text-neutral-900 mb-0.5">Bezpośredni kontakt z geodetą uprawnionym</h3>
                    <p class="text-xs sm:text-sm text-neutral-600 leading-relaxed max-w-[55ch]">Rozmawiasz wyłącznie ze specjalistą, który osobiście bada grunt, wykonuje pomiary w terenie i odpowiada za operat. Brak pośredników, handlowców i anonimowych infolinii.</p>
                  </div>
                </div>
                <div class="flex items-start gap-3.5">
                  <div class="w-7 h-7 rounded-lg bg-neutral-950 text-yellow-400 border border-neutral-800 flex items-center justify-center shrink-0 mt-0.5 shadow-sm font-bold"><i data-lucide="check" class="w-4 h-4 stroke-[2.5] text-yellow-400"></i></div>
                  <div>
                    <h3 class="font-headline font-bold text-sm sm:text-base text-neutral-900 mb-0.5">Cierpliwe wyjaśnienia procedur i formalności</h3>
                    <p class="text-xs sm:text-sm text-neutral-600 leading-relaxed max-w-[55ch]">Przepisy budowlane i geodezyjne bywają skomplikowane. Tłumaczymy każdy krok prostym, zrozumiałym językiem – zawsze wiesz, na jakim etapie jest Twoja sprawa w urzędzie.</p>
                  </div>
                </div>
                <div class="flex items-start gap-3.5">
                  <div class="w-7 h-7 rounded-lg bg-neutral-950 text-yellow-400 border border-neutral-800 flex items-center justify-center shrink-0 mt-0.5 shadow-sm font-bold"><i data-lucide="check" class="w-4 h-4 stroke-[2.5] text-yellow-400"></i></div>
                  <div>
                    <h3 class="font-headline font-bold text-sm sm:text-base text-neutral-900 mb-0.5">Lokalna znajomość urzędów (Wieliczka, Kraków, Myślenice)</h3>
                    <p class="text-xs sm:text-sm text-neutral-600 leading-relaxed max-w-[55ch]">Doskonale znamy specyfikę i procedury lokalnych wydziałów geodezji (PODGiK). Skrupulatnie skompletowana dokumentacja przechodzi państwową weryfikację bez poprawek i opóźnień.</p>
                  </div>
                </div>
                <div class="flex items-start gap-3.5">
                  <div class="w-7 h-7 rounded-lg bg-neutral-950 text-yellow-400 border border-neutral-800 flex items-center justify-center shrink-0 mt-0.5 shadow-sm font-bold"><i data-lucide="check" class="w-4 h-4 stroke-[2.5] text-yellow-400"></i></div>
                  <div>
                    <h3 class="font-headline font-bold text-sm sm:text-base text-neutral-900 mb-0.5">Uczciwa wycena bez ukrytych opłat urzędowych</h3>
                    <p class="text-xs sm:text-sm text-neutral-600 leading-relaxed max-w-[55ch]">Cenę ustalamy z góry przed przystąpieniem do prac. Wycena obejmuje opłaty za materiały z państwowego zasobu geodezyjnego oraz komplety map dla Ciebie i projektanta.</p>
                  </div>
                </div>
              </div>
              <div class="mt-8 pt-6 border-t border-neutral-300 flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                <p class="text-xs sm:text-sm italic text-neutral-600 max-w-md">„Każdą sprawę traktuję indywidualnie – od wyjaśnienia prawa po wbicie ostatniego palika."</p>
                <a href="tel:+48515430240" class="inline-flex items-center justify-center gap-2 px-5 py-2.5 rounded-xl bg-primary hover:bg-primary-container text-on-primary text-xs sm:text-sm font-bold transition-all shrink-0 active:scale-[0.98] shadow-sm"><i data-lucide="phone" class="w-4 h-4"></i><span>515 430 240</span></a>
              </div>
            </div>
          </div>
        </div>
      </section>
    @endsection
