<!doctype html>

<html lang="pl" class="scroll-smooth">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>@yield('title', 'HORYZONT Biuro Geodezyjne Łukasz Kowalczyk | Geodeta Wieliczka, Kraków')</title>
    <meta
      name="description"
      content="@yield('description', 'Usługi geodezyjne i kartograficzne w Wieliczce, Krakowie i okolicach. Mapy do celów projektowych, tyczenia budynków, inwentaryzacje powykonawcze, podziały nieruchomości. Uprawniony geodeta Łukasz Kowalczyk.')"
    />
    <meta property="og:title" content="@yield('title', 'HORYZONT Biuro Geodezyjne Łukasz Kowalczyk')" />
    <meta property="og:description" content="@yield('description', 'Precyzyjne Usługi Geodezyjne w Wieliczce i Okolicach. Mapy projektowe, tyczenia, inwentaryzacje i podziały.')" />
    <meta property="og:type" content="website" />
    <meta property="og:locale" content="pl_PL" />

    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link
      href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Sora:wght@500;600;700;800&display=swap"
      rel="stylesheet"
    />
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/favicon-32x32.png') }}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicon-16x16.png') }}" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/apple-touch-icon.png') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <style>
      body {
        font-family: 'Manrope', -apple-system, BlinkMacSystemFont, sans-serif;
      }
      h1, h2, h3, h4, .font-headline {
        font-family: 'Sora', -apple-system, BlinkMacSystemFont, sans-serif;
      }
    </style>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="{{ asset('assets/js/tailwind.config.js') }}"></script>
    <script src="{{ asset('assets/js/lucide.min.js') }}"></script>
    @stack('head')
  </head>
  <body class="bg-surface font-body text-on-surface antialiased">
    @include('partials.header')

    <main class="w-full pt-16 sm:pt-20 @yield('main-class', 'bg-surface')">
      @yield('content')
    </main>

    @include('partials.footer')

    <div id="mobile-bottom-bar" class="fixed bottom-0 left-0 right-0 z-40 bg-surface/95 backdrop-blur-xl border-t border-outline-variant/30 px-3 py-2 sm:px-4 sm:py-2.5 lg:hidden shadow-[0_-4px_20px_rgba(0,0,0,0.08)] pb-safe">
      <div class="max-w-md mx-auto flex items-center gap-2 sm:gap-3">
        <a href="tel:+48515430240" class="flex-1 flex items-center justify-center gap-2 py-3 px-3 rounded-xl bg-primary text-on-primary font-bold text-sm active:scale-[0.98] transition-transform">
          <i data-lucide="phone" class="w-4 h-4"></i>
          <span>Zadzwoń</span>
        </a>
        <a href="{{ route('kontakt') }}" class="flex-1 flex items-center justify-center gap-2 py-3 px-3 rounded-xl bg-secondary-container text-on-secondary-container font-semibold text-sm hover:bg-surface-container-high active:scale-[0.98] transition-transform">
          <i data-lucide="calculator" class="w-4 h-4 text-tertiary"></i>
          <span>Formularz kontaktu</span>
        </a>
      </div>
    </div>

    <script src="{{ asset('assets/js/main.js') }}"></script>
    @stack('scripts')
  </body>
</html>
