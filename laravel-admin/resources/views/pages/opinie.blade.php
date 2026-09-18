@extends('layouts.app')

@section('title', 'Opinie klientów | HORYZONT Biuro Geodezyjne')
@section('description', 'Opinie klientów biura geodezyjnego HORYZONT z Wieliczki, Krakowa i Małopolski – zweryfikowane recenzje z Google Maps.')
@section('main-class', 'bg-white text-neutral-900 min-h-screen pb-16 sm:pb-20')

@section('content')
  <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-12 pt-6 sm:pt-8 flex items-center gap-1.5 text-xs sm:text-sm text-neutral-500 flex-wrap" aria-label="Okruszki">
    <a href="{{ route('home') }}" class="hover:text-neutral-900 transition-colors">Strona główna</a><i data-lucide="chevron-right" class="w-3.5 h-3.5 text-neutral-400"></i><span class="text-neutral-900 font-semibold">Opinie</span>
  </nav>

  <section class="w-full py-10 sm:py-14">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-12">
      <div class="max-w-3xl mb-10">
        <h1 class="font-headline font-bold text-3xl sm:text-4xl lg:text-5xl text-neutral-950 tracking-tight leading-[1.15] mb-4">Opinie klientów biura Horyzont</h1>
        <p class="text-neutral-600 text-sm sm:text-base leading-relaxed">Realne opinie inwestorów i właścicieli nieruchomości z Wieliczki, Krakowa i Małopolski, którzy skorzystali z naszych usług geodezyjnych.</p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-7">
        @foreach ($reviews as $review)
          <div class="p-6 sm:p-7 rounded-2xl bg-white border border-neutral-200 shadow-sm hover:border-yellow-400 hover:shadow-xl transition-all duration-300 flex flex-col justify-between group">
            <div>
              <div class="flex items-center justify-between mb-4">
                <div class="flex text-amber-400 gap-1">
                  @for ($i = 0; $i < $review->rating; $i++)
                    <i data-lucide="star" class="w-4 h-4 fill-amber-400 text-amber-400"></i>
                  @endfor
                </div>
                @if ($review->verified)
                  <span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full bg-neutral-100 text-neutral-800 border border-neutral-200 text-xs font-semibold">
                    <i data-lucide="check" class="w-3.5 h-3.5 text-neutral-950 stroke-[3]"></i>Zweryfikowana
                  </span>
                @endif
              </div>
              @if ($review->service_tag)
                <div class="mb-3">
                  <span class="inline-block px-2.5 py-1 rounded-md bg-yellow-400/15 text-black text-xs font-bold border border-yellow-400/30">{{ $review->service_tag }}</span>
                </div>
              @endif
              <p class="text-sm text-neutral-700 leading-relaxed mb-6 font-normal">„{{ $review->text }}”</p>
            </div>
            <div class="pt-4 border-t border-neutral-100 flex items-center gap-3">
              <div class="w-10 h-10 rounded-full bg-neutral-950 text-yellow-400 border border-neutral-900 flex items-center justify-center font-headline font-bold text-sm shrink-0">
                {{ collect(explode(' ', $review->author))->map(fn ($w) => mb_substr($w, 0, 1))->join('') }}
              </div>
              <div>
                <p class="font-headline font-bold text-sm text-neutral-950">{{ $review->author }}</p>
                <p class="text-xs text-neutral-500 font-medium">{{ $review->role }}</p>
              </div>
            </div>
          </div>
        @endforeach
      </div>

      <div class="mt-12 p-6 sm:p-8 rounded-2xl bg-neutral-50 border border-neutral-200/90 flex flex-col md:flex-row items-center justify-between gap-5">
        <div class="flex items-center gap-4 text-left">
          <div class="w-12 h-12 rounded-xl bg-white border border-neutral-200 flex items-center justify-center shadow-xs shrink-0">
            <i data-lucide="message-square-quote" class="w-6 h-6 text-neutral-900"></i>
          </div>
          <div>
            <p class="font-headline font-bold text-base text-neutral-950 leading-tight">Wszystkie opinie pochodzą z profilu Google Maps</p>
            <p class="text-xs sm:text-sm text-neutral-600">Dbamy o pełną transparentność – każda recenzja została wystawiona przez rzeczywistego klienta.</p>
          </div>
        </div>
        <a href="https://maps.google.com/?q=Horyzont+Biuro+Geodezyjne+Łukasz+Kowalczyk+Byszyce" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 px-4 py-2.5 rounded-xl bg-white hover:bg-neutral-100 text-neutral-900 border border-neutral-300 text-xs sm:text-sm font-semibold transition-all shadow-xs shrink-0 active:scale-[0.98]">
          <i data-lucide="external-link" class="w-4 h-4 text-neutral-700"></i>
          <span>Zobacz profil w Google</span>
        </a>
      </div>

      <div class="mt-10 sm:mt-12 p-8 sm:p-10 rounded-3xl bg-neutral-950 text-white border border-yellow-400/30 shadow-xl flex flex-col md:flex-row items-center justify-between gap-6">
        <div>
          <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-yellow-400/15 text-yellow-300 border border-yellow-400/30 text-xs font-semibold mb-3">
            <i data-lucide="sparkles" class="w-3.5 h-3.5 text-yellow-400"></i>
            Bezpłatna konsultacja
          </span>
          <h2 class="text-xl sm:text-2xl lg:text-3xl font-headline font-bold text-white mb-2 leading-tight">Planujesz budowę lub podział działki?</h2>
          <p class="text-xs sm:text-sm text-neutral-300 max-w-xl leading-relaxed">Zadzwoń do nas lub wyślij numer działki. Bezpłatną wstępną analizę dokumentacji i wycenę przygotujemy zwykle jeszcze tego samego dnia.</p>
        </div>
        <div class="flex flex-col sm:flex-row items-center gap-3 shrink-0 w-full md:w-auto">
          <a href="tel:+48515430240" class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-6 py-3.5 rounded-xl bg-yellow-400 hover:bg-yellow-300 text-black text-sm font-bold transition-all active:scale-[0.98] shadow-md"><i data-lucide="phone" class="w-4 h-4"></i><span>Zadzwoń: 515 430 240</span></a>
          <a href="{{ route('kontakt') }}" class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-6 py-3.5 rounded-xl bg-white/10 hover:bg-white/20 text-white border border-white/20 text-sm font-semibold transition-all active:scale-[0.98]"><i data-lucide="calculator" class="w-4 h-4 text-yellow-400"></i><span>Formularz kontaktu</span></a>
        </div>
      </div>
    </div>
  </section>
@endsection
