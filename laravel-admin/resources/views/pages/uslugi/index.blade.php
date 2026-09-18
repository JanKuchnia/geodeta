@extends('layouts.app')

@section('title', 'Usługi geodezyjne w Wieliczce, Krakowie i okolicy | HORYZONT')
@section('description', 'Mapy do celów projektowych, tyczenia budynków, inwentaryzacje powykonawcze, podziały nieruchomości i ustalanie granic – pełen zakres usług geodezyjnych.')

@section('content')
  <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-12 pt-6 sm:pt-8 flex items-center gap-1.5 text-xs sm:text-sm text-neutral-500 flex-wrap" aria-label="Okruszki">
    <a href="{{ route('home') }}" class="hover:text-neutral-900 transition-colors">Strona główna</a><i data-lucide="chevron-right" class="w-3.5 h-3.5 text-neutral-400"></i><span class="text-neutral-900 font-semibold">Usługi</span>
  </nav>
  <section class="w-full py-10 sm:py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-12">
      <div class="max-w-3xl mb-10 sm:mb-14">
        <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-neutral-950 text-white text-xs font-semibold uppercase tracking-wider mb-4 border border-neutral-800 shadow-sm">
          <i data-lucide="layers" class="w-3.5 h-3.5 text-yellow-400"></i>
          <span>Zakres Usług Geodezyjnych</span>
        </div>
        <h1 class="font-headline font-bold text-3xl sm:text-4xl lg:text-5xl text-on-surface tracking-tight leading-[1.15] mb-4">Usługi geodezyjne w Wieliczce, Krakowie i okolicy</h1>
        <p class="text-on-surface-variant text-sm sm:text-base leading-relaxed">
          Prowadzimy formalności geodezyjne od pierwszej mapy do projektu, przez tyczenie w terenie, po formalny odbiór w PINB i regulację granic prawnych działki. Wybierz usługę poniżej, aby zobaczyć, na czym polega, kiedy jest potrzebna i jak długo trwa.
        </p>
      </div>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($services as $service)
          <div class="group p-6 sm:p-7 rounded-2xl bg-white border border-neutral-300 hover:border-yellow-400 shadow-xs hover:shadow-xl transition-all duration-300 flex flex-col justify-between">
            <div>
              <div class="flex items-center justify-between mb-5">
                <div class="w-12 h-12 rounded-xl bg-neutral-950 text-yellow-400 border border-neutral-800 flex items-center justify-center font-bold shadow-sm transition-transform group-hover:scale-105 group-hover:bg-neutral-900 group-hover:text-yellow-300">
                  <i data-lucide="{{ $service->icon }}" class="w-6 h-6"></i>
                </div>
              </div>
              <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-neutral-100 border border-neutral-200 text-xs font-semibold text-neutral-800 mb-3">
                <span class="w-1.5 h-1.5 rounded-full bg-yellow-500 shrink-0"></span>
                <span>{{ $service->stage_label }}</span>
              </div>
              <h2 class="font-headline font-bold text-xl text-on-surface mb-3 group-hover:text-neutral-950 transition-colors">{{ $service->title }}</h2>
              <p class="text-on-surface-variant text-sm leading-relaxed mb-5">{{ $service->description }}</p>
              <div class="flex flex-wrap gap-1.5 mb-6">
                @foreach ($service->tags ?? [] as $tag)
                  <span class="px-2.5 py-1 rounded-md bg-neutral-100 text-xs font-semibold text-neutral-800 border border-neutral-200">{{ $tag }}</span>
                @endforeach
              </div>
            </div>
            <div class="pt-4 border-t border-neutral-100 flex items-center justify-between text-xs font-semibold">
              <span class="flex items-center gap-1.5 text-neutral-700"><i data-lucide="clock" class="w-3.5 h-3.5 text-neutral-900"></i>{{ $service->duration }}</span>
              <a class="inline-flex items-center gap-1 text-neutral-950 hover:text-black font-bold group/link" href="{{ route('uslugi.show', $service->slug) }}">
                <span>Zobacz szczegóły</span>
                <i data-lucide="arrow-right" class="w-3.5 h-3.5 transition-transform group-hover/link:translate-x-1"></i>
              </a>
            </div>
          </div>
        @endforeach
      </div>

      <div class="flex items-center gap-3 mt-14 mb-6">
        <span class="text-xs font-bold tracking-wider uppercase text-neutral-900 bg-neutral-100 border border-neutral-300 px-3.5 py-1 rounded-full shadow-xs">Pozostałe usługi</span>
        <span class="h-px bg-neutral-200 flex-1"></span>
      </div>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <div class="group p-6 sm:p-7 rounded-2xl bg-white border border-neutral-300 hover:border-yellow-400 shadow-xs hover:shadow-xl transition-all duration-300">
          <div class="flex items-center justify-between mb-5">
            <div class="w-12 h-12 rounded-xl bg-neutral-950 text-yellow-400 border border-neutral-800 flex items-center justify-center font-bold shadow-sm transition-transform group-hover:scale-105 group-hover:bg-neutral-900 group-hover:text-yellow-300">
              <i data-lucide="list-checks" class="w-6 h-6"></i>
            </div>
          </div>
          <h3 class="font-headline font-bold text-xl text-on-surface mb-3 group-hover:text-neutral-950 transition-colors">Wykazy synchronizacyjne (równoważniki)</h3>
          <p class="text-on-surface-variant text-sm leading-relaxed">Ujednolicenie oznaczeń działek między księgą wieczystą a ewidencją gruntów – niezbędne przy rozbieżnościach numeracji i powierzchni.</p>
        </div>
        <div class="group p-6 sm:p-7 rounded-2xl bg-white border border-neutral-300 hover:border-yellow-400 shadow-xs hover:shadow-xl transition-all duration-300">
          <div class="flex items-center justify-between mb-5">
            <div class="w-12 h-12 rounded-xl bg-neutral-950 text-yellow-400 border border-neutral-800 flex items-center justify-center font-bold shadow-sm transition-transform group-hover:scale-105 group-hover:bg-neutral-900 group-hover:text-yellow-300">
              <i data-lucide="file-search" class="w-6 h-6"></i>
            </div>
          </div>
          <h3 class="font-headline font-bold text-xl text-on-surface mb-3 group-hover:text-neutral-950 transition-colors">Badanie stanu prawnego nieruchomości</h3>
          <p class="text-on-surface-variant text-sm leading-relaxed">Analiza ksiąg wieczystych, ewidencji gruntów i archiwalnej dokumentacji geodezyjnej przed zakupem lub inwestycją na działce.</p>
        </div>
        <div class="group p-6 sm:p-7 rounded-2xl bg-white border border-neutral-300 hover:border-yellow-400 shadow-xs hover:shadow-xl transition-all duration-300">
          <div class="flex items-center justify-between mb-5">
            <div class="w-12 h-12 rounded-xl bg-neutral-950 text-yellow-400 border border-neutral-800 flex items-center justify-center font-bold shadow-sm transition-transform group-hover:scale-105 group-hover:bg-neutral-900 group-hover:text-yellow-300">
              <i data-lucide="waves" class="w-6 h-6"></i>
            </div>
          </div>
          <h3 class="font-headline font-bold text-xl text-on-surface mb-3 group-hover:text-neutral-950 transition-colors">Wydzielenie wody płynącej (Wp)</h3>
          <p class="text-on-surface-variant text-sm leading-relaxed">Wydzielenie gruntów pokrytych wodami płynącymi z działki ewidencyjnej zgodnie z przepisami Prawa wodnego.</p>
        </div>
      </div>

      <div class="mt-10 p-6 sm:p-8 rounded-2xl bg-neutral-950 text-white border border-yellow-400/30 shadow-xl flex flex-col md:flex-row items-center justify-between gap-5">
        <div>
          <p class="text-base sm:text-lg font-headline font-bold text-white mb-0.5">Nie masz pewności, której usługi potrzebujesz?</p>
          <p class="text-xs sm:text-sm text-neutral-300 max-w-xl">Zadzwoń lub podaj numer działki – bezpłatnie sprawdzimy stan w portalu geodezyjnym i wskażemy właściwą procedurę.</p>
        </div>
        <div class="flex items-center gap-3 shrink-0 w-full md:w-auto">
          <a href="tel:+48515430240" class="flex-1 md:flex-initial inline-flex items-center justify-center gap-2 px-5 py-3 rounded-xl bg-yellow-400 hover:bg-yellow-300 text-black text-xs sm:text-sm font-bold transition-all active:scale-[0.98]"><i data-lucide="phone" class="w-4 h-4"></i><span>515 430 240</span></a>
          <a href="{{ route('kontakt') }}" class="flex-1 md:flex-initial inline-flex items-center justify-center gap-2 px-5 py-3 rounded-xl bg-white/10 hover:bg-white/20 text-white border border-white/20 text-xs sm:text-sm font-semibold transition-all active:scale-[0.98]"><i data-lucide="calculator" class="w-4 h-4 text-yellow-400"></i><span>Formularz kontaktu</span></a>
        </div>
      </div>
    </div>
  </section>
@endsection
