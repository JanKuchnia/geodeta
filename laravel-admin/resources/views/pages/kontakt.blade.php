@extends('layouts.app')

@section('title', 'Kontakt | HORYZONT Biuro Geodezyjne Łukasz Kowalczyk')
@section('main-class', 'bg-slate-100 min-h-screen')

@section('content')

      <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-12 pt-6 sm:pt-8 flex items-center gap-1.5 text-xs sm:text-sm text-neutral-500 flex-wrap" aria-label="Okruszki">
        <a href="{{ route('home') }}" class="hover:text-neutral-900 transition-colors">Strona główna</a><i data-lucide="chevron-right" class="w-3.5 h-3.5 text-neutral-400"></i><span class="text-neutral-900 font-semibold">Kontakt</span>
      </nav>
      <section class="w-full py-10 sm:py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-12">
          <h1 class="font-headline font-bold text-2xl sm:text-3xl lg:text-4xl text-on-surface mb-4">Skonsultuj swoją działkę lub inwestycję</h1>
          <p class="text-on-surface-variant text-sm sm:text-base leading-relaxed max-w-prose mb-8 sm:mb-10">
            Wyślij numer działki, obręb i miejscowość albo zadzwoń. Wstępną analizę i wycenę przygotujemy bezpłatnie – zazwyczaj jeszcze tego samego dnia.
          </p>
          <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-start">
            <div class="lg:col-span-5 flex flex-col">
              <a class="p-5 sm:p-6 rounded-2xl bg-neutral-950 border border-yellow-400/30 text-white shadow-xl hover:border-yellow-400/60 transition-all mb-4 flex items-center justify-between gap-4 group active:scale-[0.99]" href="tel:+48515430240">
                <div class="flex items-center gap-3.5 sm:gap-4">
                  <div class="w-12 h-12 rounded-xl bg-yellow-400/20 border border-yellow-400/30 text-yellow-400 flex items-center justify-center shrink-0 group-hover:scale-105 transition-transform"><i data-lucide="phone-call" class="w-6 h-6"></i></div>
                  <div>
                    <div class="flex items-center gap-2 mb-0.5">
                      <p class="text-xs font-semibold text-yellow-300">Telefon bezpośredni do geodety</p>
                      <span class="inline-flex items-center gap-1 px-2 py-0.5 rounded text-xs font-bold bg-yellow-400/20 text-yellow-300 border border-yellow-400/30">
                        <span class="w-1.5 h-1.5 rounded-full bg-yellow-400 shrink-0"></span>
                        Dziś czynne
                      </span>
                    </div>
                    <p class="font-headline font-bold text-xl sm:text-2xl text-white tracking-wide">+48 515 430 240</p>
                    <p class="text-xs text-neutral-300 mt-0.5">Odbieramy natychmiast lub oddzwaniamy w ciągu godziny</p>
                  </div>
                </div>
                <div class="hidden sm:flex w-8 h-8 rounded-full bg-white/10 items-center justify-center text-white/80 group-hover:bg-yellow-400 group-hover:text-black transition-colors shrink-0"><i data-lucide="arrow-right" class="w-4 h-4"></i></div>
              </a>
              <div class="p-5 sm:p-6 rounded-2xl bg-white border border-slate-300 shadow-md space-y-4 text-sm">
                <div class="flex items-start gap-3.5">
                  <div class="w-9 h-9 rounded-lg bg-neutral-950 text-yellow-400 border border-neutral-800 flex items-center justify-center shrink-0 mt-0.5 shadow-sm font-bold"><i data-lucide="map-pin" class="w-4 h-4 text-yellow-400"></i></div>
                  <div>
                    <span class="font-bold text-neutral-900 block">Biuro Geodezyjne HORYZONT</span>
                    <a href="https://maps.google.com/?q=Byszyce+167,+32-020+Wieliczka" target="_blank" rel="noopener noreferrer" class="text-neutral-600 hover:text-black hover:underline transition-colors block text-xs sm:text-sm">Byszyce 167, 32-020 Wieliczka (zobacz na mapie)</a>
                  </div>
                </div>
                <div class="flex items-start gap-3.5">
                  <div class="w-9 h-9 rounded-lg bg-neutral-950 text-yellow-400 border border-neutral-800 flex items-center justify-center shrink-0 mt-0.5 shadow-sm font-bold"><i data-lucide="clock" class="w-4 h-4 text-yellow-400"></i></div>
                  <div>
                    <span class="font-bold text-neutral-900 block">Godziny pracy</span>
                    <span class="text-neutral-600 text-xs sm:text-sm">Poniedziałek – Piątek: 07:00 – 17:00</span>
                    <span class="block text-xs text-neutral-900 font-bold mt-0.5">Konsultacja telefoniczna również w weekendy</span>
                  </div>
                </div>
                <div class="flex items-start gap-3.5">
                  <div class="w-9 h-9 rounded-lg bg-neutral-950 text-yellow-400 border border-neutral-800 flex items-center justify-center shrink-0 mt-0.5 shadow-sm font-bold"><i data-lucide="mail" class="w-4 h-4 text-yellow-400"></i></div>
                  <div>
                    <span class="font-bold text-neutral-900 block">Adres e-mail</span>
                    <a href="mailto:geodezja.kowalczyk@gmail.com" class="text-neutral-600 hover:text-black hover:underline transition-colors block text-xs sm:text-sm">geodezja.kowalczyk@gmail.com</a>
                  </div>
                </div>
              </div>
              <div class="mt-4 rounded-2xl overflow-hidden border border-slate-300 shadow-md h-64">
                <iframe title="Mapa dojazdu do biura HORYZONT, Byszyce 167, Wieliczka" src="https://maps.google.com/maps?q=Byszyce+167,+32-020+Wieliczka&output=embed" class="w-full h-full border-0" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
            </div>
            <div class="lg:col-span-7 rounded-2xl sm:rounded-3xl bg-white shadow-xl border border-slate-300 w-full overflow-hidden">
              <div class="h-1.5 w-full bg-primary"></div>
              <div class="p-5 sm:p-8 lg:p-10">
                <h2 class="font-headline font-bold text-xl sm:text-2xl text-on-surface mb-2">Formularz bezpłatnej wyceny</h2>
                <p class="text-on-surface-variant text-xs sm:text-sm mb-6 sm:mb-8">Podaj parametry zlecenia – oddzwonimy ze szczegółową kalkulacją i terminem.</p>
                <form class="space-y-4 sm:space-y-5" id="quote-form" method="POST" action="{{ route('kontakt.store') }}">
                  @csrf
                  <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-5">
                    <div>
                      <label class="block text-sm font-semibold text-on-surface mb-1.5 sm:mb-2" for="client-name">Imię i Nazwisko *</label>
                      <input class="w-full px-4 py-3 rounded-xl bg-surface-container-low text-on-surface text-base sm:text-sm border-0 focus:bg-surface focus:outline-none focus:ring-2 focus:ring-primary transition-all placeholder:text-on-surface-variant/70" id="client-name" name="name" value="{{ old('name') }}" placeholder="Jan Kowalski" required type="text" />
                    </div>
                    <div>
                      <label class="block text-sm font-semibold text-on-surface mb-1.5 sm:mb-2" for="client-phone">Numer Telefonu *</label>
                      <input class="w-full px-4 py-3 rounded-xl bg-surface-container-low text-on-surface text-base sm:text-sm border-0 focus:bg-surface focus:outline-none focus:ring-2 focus:ring-primary transition-all placeholder:text-on-surface-variant/70" id="client-phone" name="phone" value="{{ old('phone') }}" placeholder="np. 500 123 456" required type="tel" />
                    </div>
                  </div>
                  <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-5">
                    <div>
                      <label class="block text-sm font-semibold text-on-surface mb-1.5 sm:mb-2" for="service-type">Rodzaj Usługi *</label>
                      <select class="w-full px-4 py-3 rounded-xl bg-surface-container-low text-on-surface text-base sm:text-sm border-0 focus:bg-surface focus:outline-none focus:ring-2 focus:ring-primary transition-all" id="service-type" name="service" required>
                        <option disabled selected value="">Wybierz rodzaj prac...</option>
                        <option value="mapa">Mapa do celów projektowych</option><option value="tyczenie">Tyczenie budynku lub przyłączy</option><option value="inwentaryzacja-budynku">Inwentaryzacja budynku lub przyłączy i sieci</option><option value="inwentaryzacja-powykonawcza">Inwentaryzacja powykonawcza</option><option value="podzial">Podział nieruchomości</option><option value="wznowienie-wyznaczenie">Wznowienie/wyznaczenie znaków</option><option value="rozgraniczenie">Rozgraniczenie nieruchomości</option><option value="inne">Inne usługi geodezyjne</option>
                      </select>
                    </div>
                    <div>
                      <label class="block text-sm font-semibold text-on-surface mb-1.5 sm:mb-2" for="parcel-loc">Miejscowość / Nr Działki</label>
                      <input class="w-full px-4 py-3 rounded-xl bg-surface-container-low text-on-surface text-base sm:text-sm border-0 focus:bg-surface focus:outline-none focus:ring-2 focus:ring-primary transition-all placeholder:text-on-surface-variant/70" id="parcel-loc" name="location" value="{{ old('location') }}" placeholder="np. Wieliczka, dz. 142/5" type="text" />
                    </div>
                  </div>
                  <div>
                    <label class="block text-sm font-semibold text-on-surface mb-1.5 sm:mb-2" for="message">Opis prac / dodatkowe informacje</label>
                    <textarea class="w-full px-4 py-3 rounded-xl bg-surface-container-low text-on-surface text-base sm:text-sm border-0 focus:bg-surface focus:outline-none focus:ring-2 focus:ring-primary transition-all placeholder:text-on-surface-variant/70" id="message" name="message" placeholder="Np. budynek jednorodzinny parterowy z poddaszem, termin rozpoczęcia robót planowany na kolejny miesiąc..." rows="3">{{ old('message') }}</textarea>
                  </div>
                  <div class="flex items-start gap-2.5 pt-1">
                    <input class="mt-1 rounded text-primary focus:ring-primary cursor-pointer w-4 h-4 shrink-0" id="rodo" required type="checkbox" />
                    <label class="text-xs text-on-surface-variant leading-normal cursor-pointer" for="rodo">Wyrażam zgodę na przetwarzanie danych osobowych w celu kontaktu i przygotowania oferty geodezyjnej zgodnie z polityką prywatności.</label>
                  </div>
                  <button class="w-full py-3.5 sm:py-4 px-6 rounded-xl bg-primary text-on-primary hover:bg-primary-container hover:text-on-primary-container font-bold text-sm sm:text-base active:scale-[0.98] transition-all flex items-center justify-center gap-2" type="submit"><i data-lucide="send" class="w-4 h-4"></i><span>Wyślij zapytanie o bezpłatną wycenę</span></button>
                  <div class="{{ session('sent') ? '' : 'hidden' }} p-4 rounded-xl bg-neutral-950 text-white border border-yellow-400/50 p-4 rounded-xl text-xs font-semibold flex items-center gap-2 animate-fade-in shadow-md" id="form-feedback"><i data-lucide="check-circle-2" class="w-4 h-4 text-yellow-400 shrink-0"></i>Dziękujemy! Twoje zapytanie zostało przesłane. Oddzwonimy w możliwie najszybszym czasie.</div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
    @endsection
