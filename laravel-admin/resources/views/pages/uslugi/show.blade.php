@extends('layouts.app')

@section('title', $service->title . ' | HORYZONT Biuro Geodezyjne')
@section('description', $service->description)

@section('content')
  <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-12 pt-6 sm:pt-8 flex items-center gap-1.5 text-xs sm:text-sm text-neutral-500 flex-wrap" aria-label="Okruszki">
    <a href="{{ route('home') }}" class="hover:text-neutral-900 transition-colors">Strona główna</a><i data-lucide="chevron-right" class="w-3.5 h-3.5 text-neutral-400"></i><a href="{{ route('uslugi.index') }}" class="hover:text-neutral-900 transition-colors">Usługi</a><i data-lucide="chevron-right" class="w-3.5 h-3.5 text-neutral-400"></i><span class="text-neutral-900 font-semibold">{{ $service->title }}</span>
  </nav>
  <section class="w-full py-10 sm:py-16">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-12">
      <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-neutral-100 border border-neutral-300 text-xs font-semibold text-neutral-800 mb-4 shadow-xs">
        <span class="w-1.5 h-1.5 rounded-full bg-yellow-500 shrink-0"></span>
        <span>{{ $service->stage_label }}</span>
      </div>
      <h1 class="font-headline font-bold text-3xl sm:text-4xl lg:text-5xl text-on-surface tracking-tight leading-[1.15] mb-5">{{ $service->title }}</h1>
      <p class="text-on-surface-variant text-base sm:text-lg leading-relaxed mb-8 max-w-3xl">{{ $service->description }}</p>
      <div class="flex flex-wrap gap-1.5 mb-10">
        @foreach ($service->tags ?? [] as $tag)
          <span class="px-2.5 py-1 rounded-md bg-neutral-100 text-xs font-semibold text-neutral-800 border border-neutral-200">{{ $tag }}</span>
        @endforeach
      </div>

      <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
        <div>
          <h2 class="font-headline font-bold text-xl sm:text-2xl text-on-surface mb-4">Kiedy potrzebujesz tej usługi</h2>
          <ul class="space-y-3.5 text-sm sm:text-base text-neutral-800">
            @foreach ($service->when_needed ?? [] as $item)
              <li class="flex items-start gap-3">
                <div class="w-6 h-6 rounded-lg bg-neutral-950 text-yellow-400 border border-neutral-800 flex items-center justify-center shrink-0 mt-0.5 shadow-xs font-bold"><i data-lucide="check" class="w-3.5 h-3.5 stroke-[2.5] text-yellow-400"></i></div>
                <span>{{ $item }}</span>
              </li>
            @endforeach
          </ul>
        </div>
        <div>
          <h2 class="font-headline font-bold text-xl sm:text-2xl text-on-surface mb-4">Jak przebiega proces</h2>
          <ul class="space-y-4">
            @foreach ($service->process_steps ?? [] as $index => $step)
              <li class="flex items-start gap-4">
                <div class="w-8 h-8 rounded-full bg-neutral-950 text-yellow-400 border border-neutral-800 flex items-center justify-center font-bold text-sm shrink-0">{{ $index + 1 }}</div>
                <p class="text-sm sm:text-base text-neutral-700 leading-relaxed pt-1">{{ $step }}</p>
              </li>
            @endforeach
          </ul>
        </div>
      </div>

      <div class="mt-12 p-6 sm:p-8 rounded-2xl bg-neutral-950 text-white border border-yellow-400/30 shadow-xl flex flex-col md:flex-row items-center justify-between gap-5">
        <div class="flex items-center gap-4">
          <div class="w-12 h-12 rounded-2xl bg-yellow-400/20 border border-yellow-400/30 text-yellow-400 flex items-center justify-center shrink-0">
            <i data-lucide="clock" class="w-6 h-6"></i>
          </div>
          <div>
            <p class="text-base sm:text-lg font-headline font-bold text-white mb-0.5">Orientacyjny czas realizacji: {{ $service->duration }}</p>
            <p class="text-xs sm:text-sm text-neutral-300 max-w-xl">Dokładny termin i cenę podajemy po bezpłatnej analizie Twojej działki w portalu geodezyjnym.</p>
          </div>
        </div>
        <div class="flex items-center gap-3 shrink-0 w-full md:w-auto">
          <a href="tel:+48515430240" class="flex-1 md:flex-initial inline-flex items-center justify-center gap-2 px-5 py-3 rounded-xl bg-yellow-400 hover:bg-yellow-300 text-black text-xs sm:text-sm font-bold transition-all active:scale-[0.98]"><i data-lucide="phone" class="w-4 h-4"></i><span>515 430 240</span></a>
          <a href="{{ route('kontakt') }}" class="flex-1 md:flex-initial inline-flex items-center justify-center gap-2 px-5 py-3 rounded-xl bg-white/10 hover:bg-white/20 text-white border border-white/20 text-xs sm:text-sm font-semibold transition-all active:scale-[0.98]"><i data-lucide="calculator" class="w-4 h-4 text-yellow-400"></i><span>Zamów usługę</span></a>
        </div>
      </div>

      <div class="mt-10 pt-8 border-t border-neutral-200">
        <a href="{{ route('uslugi.index') }}" class="inline-flex items-center gap-1.5 text-sm font-semibold text-neutral-700 hover:text-neutral-950 transition-colors"><i data-lucide="arrow-left" class="w-4 h-4"></i>Wróć do wszystkich usług</a>
      </div>
    </div>
  </section>
@endsection
