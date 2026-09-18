<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            [
                'title' => 'Mapa do celów projektowych',
                'slug' => 'mapa-do-celow-projektowych',
                'icon' => 'map',
                'stage_label' => 'Etap 1 · Przed pozwoleniem',
                'description' => 'Mapa do celów projektowych to dokument, bez którego architekt nie zacznie projektu, a starostwo nie wyda pozwolenia na budowę. Aktualizujemy mapę zasadniczą o świeże pomiary terenowe Twojej działki i przekazujemy komplet w formacie gotowym dla pracowni projektowej oraz dla Ośrodka Dokumentacji Geodezyjnej i Kartograficznej (ODGiK).',
                'duration' => 'ok. 2–3 tygodnie',
                'tags' => ['Format CAD/DWG + PDF', 'Zgłoszenie w ODGiK', 'Skala 1:500 / 1:1000'],
                'when_needed' => [
                    'Planujesz budowę domu jednorodzinnego lub innego obiektu',
                    'Rozbudowujesz, nadbudowujesz lub zmieniasz sposób użytkowania budynku',
                    'Stawiasz ogrodzenie w pobliżu granicy działki',
                    'Przygotowujesz projekt przyłącza do sieci wodociągowej, gazowej lub elektrycznej',
                ],
                'process_steps' => [
                    'Zgłoszenie prac geodezyjnych w ODGiK i pobranie materiałów z zasobu',
                    'Pomiar terenowy działki i obiektów istniejących – budynków, ogrodzeń, drzew, uzbrojenia',
                    'Opracowanie mapy w skali 1:500 lub 1:1000 i weryfikacja w ośrodku',
                    'Przekazanie mapy w formacie CAD/DWG oraz PDF – dla Ciebie i dla projektanta',
                ],
                'sort_order' => 1,
            ],
            [
                'title' => 'Tyczenie budynków i sieci uzbrojenia',
                'slug' => 'tyczenie-budynkow',
                'icon' => 'ruler',
                'stage_label' => 'Etap 2 · Start budowy',
                'description' => 'Tyczenie to wyznaczenie w terenie dokładnego położenia budynku i przyłączy zgodnie z zatwierdzonym projektem – zanim ekipa budowlana wbije pierwszą łopatę. Wyznaczamy główne osie obiektu, ławy drutowe, poziom zera budynku oraz przebieg przyłączy mediów, a wpis do dziennika budowy trafia na miejscu.',
                'duration' => 'zwykle w ciągu kilku dni od zgłoszenia',
                'tags' => ['Główne osie i ławy', 'Prąd, woda, gaz, kanalizacja', 'Wpis do Dziennika Budowy'],
                'when_needed' => [
                    'Rozpoczynasz budowę domu i kierownik budowy potrzebuje wpisu do dziennika',
                    'Wytyczasz przyłącza: prąd, wodę, gaz lub kanalizację',
                    'Stawiasz ogrodzenie dokładnie wzdłuż granicy działki',
                ],
                'process_steps' => [
                    'Analiza projektu zagospodarowania terenu i mapy do celów projektowych',
                    'Wyznaczenie głównych osi budynku i ław drutowych w terenie',
                    'Wytyczenie poziomu zero (rzędnej) budynku',
                    'Wpis do dziennika budowy – dokument wymagany przez kierownika budowy',
                ],
                'sort_order' => 2,
            ],
            [
                'title' => 'Inwentaryzacja powykonawcza',
                'slug' => 'inwentaryzacja-powykonawcza',
                'icon' => 'clipboard-check',
                'stage_label' => 'Etap 3 · Zakończenie i odbiór',
                'description' => 'Po zakończeniu budowy mierzymy rzeczywiste położenie obiektu i przyłączy, porównujemy je z projektem, a wyniki wprowadzamy do Państwowego Zasobu Geodezyjnego i Kartograficznego (PZGiK). Efekt to komplet operatów, który potrzebujesz do zgłoszenia zakończenia budowy w Powiatowym Inspektoracie Nadzoru Budowlanego (PINB).',
                'duration' => 'zależny od zakresu, zwykle 1–2 tygodnie po pomiarze',
                'tags' => ['Kompletny operat do PINB', 'Pomiary budynku i sieci', 'Wprowadzenie do PZGiK'],
                'when_needed' => [
                    'Kończysz budowę domu i zgłaszasz jej zakończenie w PINB',
                    'Wykonałeś przyłącze i musisz je zainwentaryzować',
                    'Postawiłeś ogrodzenie, altanę lub inny obiekt podlegający zgłoszeniu',
                ],
                'process_steps' => [
                    'Pomiar zrealizowanego obiektu i przyłączy w terenie',
                    'Porównanie wyników z projektem budowlanym i pozwoleniem na budowę',
                    'Sporządzenie mapy inwentaryzacyjnej i wprowadzenie danych do PZGiK',
                    'Przekazanie kompletu dokumentów do zgłoszenia w PINB',
                ],
                'sort_order' => 3,
            ],
            [
                'title' => 'Podział nieruchomości',
                'slug' => 'podzial-nieruchomosci',
                'icon' => 'split',
                'stage_label' => 'Obsługa prawna nieruchomości',
                'description' => 'Dzielimy działki budowlane i drogowe oraz prowadzimy podziały w sprawach spadkowych – od wstępnego projektu podziału po komplet dokumentów gotowy do aktu notarialnego.',
                'duration' => 'zależny od procedury urzędowej, zwykle kilka tygodni',
                'tags' => ['Zgodność z MPZP lub decyzją WZ', 'Prowadzenie procedury w urzędzie gminy lub miasta', 'Komplet dokumentów do notariusza i ksiąg wieczystych'],
                'when_needed' => [
                    'Sprzedajesz część swojej działki',
                    'Dzielisz majątek spadkowy między spadkobierców',
                    'Wydzielasz drogę dojazdową do nowej działki budowlanej',
                    'Chcesz przekazać część gruntu w darowiźnie',
                ],
                'process_steps' => [
                    'Analiza zgodności z Miejscowym Planem Zagospodarowania Przestrzennego lub decyzją o warunkach zabudowy',
                    'Przygotowanie wstępnego projektu podziału',
                    'Prowadzenie procedury podziałowej w urzędzie gminy lub miasta',
                    'Stabilizacja nowych granic w terenie i przekazanie mapy z klauzulą do księgi wieczystej',
                ],
                'sort_order' => 4,
            ],
            [
                'title' => 'Ustalanie granic i wznowienie znaków granicznych',
                'slug' => 'rozgraniczenie-nieruchomosci',
                'icon' => 'map-pinned',
                'stage_label' => 'Granice i bezpieczeństwo własności',
                'description' => 'Gdy granica działki jest sporna albo słupki graniczne zniknęły, ustalamy ich prawidłowy przebieg na podstawie dokumentacji archiwalnej z PZGiK i spisujemy wiążący protokół bezpośrednio na gruncie – zanim postawisz ogrodzenie.',
                'duration' => 'zależny od dostępności stron, zwykle 2–4 tygodnie',
                'tags' => ['Ochrona przed sporem sąsiedzkim', 'Prawnie wiążący protokół spisany na gruncie', 'Weryfikacja w PZGiK'],
                'when_needed' => [
                    'Masz spór sąsiedzki o przebieg granicy działki',
                    'Punkty graniczne zostały zniszczone lub zaginęły',
                    'Planujesz budowę ogrodzenia i chcesz mieć pewność co do granicy',
                    'Kupujesz działkę, której granice nie są jednoznacznie oznaczone w terenie',
                ],
                'process_steps' => [
                    'Zebranie i analiza dokumentacji archiwalnej z Państwowego Zasobu Geodezyjnego i Kartograficznego',
                    'Wyznaczenie punktów granicznych w terenie',
                    'Spotkanie ze stronami i spisanie protokołu granicznego',
                    'Stabilizacja znaków granicznych',
                ],
                'sort_order' => 5,
            ],
        ];

        foreach ($services as $service) {
            Service::updateOrCreate(['slug' => $service['slug']], $service);
        }
    }
}
