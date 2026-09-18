<?php

namespace Database\Seeders;

use App\Models\Photo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PhotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $photos = [
            [
                'category' => 'tyczenia', 'badge' => 'Tyczenie budynku',
                'image_path' => 'https://images.unsplash.com/photo-1504307651254-35680f356dfd?auto=format&fit=crop&w=1600&q=85',
                'alt_text' => 'Tyczenie budynku jednorodzinnego na ławach drutowych',
                'title' => 'Tyczenie budynku jednorodzinnego na ławach ciesielskich',
                'description' => 'Precyzyjne wyznaczenie osi głównych ścian konstrukcyjnych i poziomu zero (±0.00) z wpisem do dziennika budowy. Zapewniamy dokładność geometryczną wymaganą przez kierownika budowy.',
                'location' => 'Wieliczka – Krzyszkowice', 'equipment' => 'Tachimetr Leica TS06 + pryzmaty precyzyjne',
                'result_badge' => 'Szkic tyczenia przekazany kierownikowi budowy', 'sort_order' => 1,
            ],
            [
                'category' => 'mapy', 'badge' => 'Mapa d.c. projektowych',
                'image_path' => 'https://images.unsplash.com/photo-1503387762-592deb58ef4e?auto=format&fit=crop&w=1600&q=85',
                'alt_text' => 'Mapa do celów projektowych pod budowę rezydencji',
                'title' => 'Numeryczna mapa syt-wys pod projekt rezydencji',
                'description' => 'Pomiar rzeźby terenu, weryfikacja uzbrojenia podziemnego z rejestrem GESUT oraz formaty DWG/DXF dla architekta. Obejmuje analizę granic prawnych z EGiB.',
                'location' => 'Kraków – Swoszowice', 'equipment' => 'Zestaw GNSS RTK + oprogramowanie C-Geo / CAD',
                'result_badge' => 'Pozytywna klauzula PODGiK Kraków', 'sort_order' => 2,
            ],
            [
                'category' => 'inwentaryzacje', 'badge' => 'Inwentaryzacja sieci',
                'image_path' => 'https://images.unsplash.com/photo-1581094794329-c8112a89af12?auto=format&fit=crop&w=1600&q=85',
                'alt_text' => 'Inwentaryzacja przyłącza wodociągowego i gazowego',
                'title' => 'Inwentaryzacja przyłącza wodociągowego i gazowego',
                'description' => 'Bezpośredni pomiar w otwartym wykopie przed zasypaniem. Kompletna dokumentacja geodezyjna do odbioru technicznego w spółce gazowniczej i komunalnej.',
                'location' => 'Niepołomice', 'equipment' => 'Tachimetr Leica + odbiornik GNSS',
                'result_badge' => 'Zatwierdzenie w PZGiK w 4 dni robocze', 'sort_order' => 3,
            ],
            [
                'category' => 'granice', 'badge' => 'Granice nieruchomości',
                'image_path' => 'https://images.unsplash.com/photo-1531834685032-c34bf0d84c77?auto=format&fit=crop&w=1600&q=85',
                'alt_text' => 'Wznowienie znaków granicznych i stabilizacja słupków',
                'title' => 'Wznowienie znaków granicznych i stabilizacja słupków',
                'description' => 'Odtworzenie przebiegu miedz i punktów załamania granicy na podstawie archiwalnej dokumentacji geodezyjnej z udziałem właścicieli sąsiednich działek.',
                'location' => 'Byszyce k. Wieliczki', 'equipment' => 'Odbiornik GNSS wieloczęstotliwościowy RTK',
                'result_badge' => 'Protokół wznowienia podpisany przez strony', 'sort_order' => 4,
            ],
            [
                'category' => 'tyczenia', 'badge' => 'Tyczenie infrastruktury',
                'image_path' => 'https://images.unsplash.com/photo-1542621334-a254cf47733d?auto=format&fit=crop&w=1600&q=85',
                'alt_text' => 'Tyczenie magistrali wodociągowej i studni',
                'title' => 'Tyczenie magistrali wodociągowej i studni rewizyjnych',
                'description' => 'Wyznaczenie trasy przebiegu rurociągu z oznaczeniem rzędnych dna wykopu, spadków grawitacyjnych i punktów charakterystycznych.',
                'location' => 'Skawina', 'equipment' => 'Tachimetr Leica + minipryzmat',
                'result_badge' => 'Zgodność z projektem budowlanym ±1 cm', 'sort_order' => 5,
            ],
            [
                'category' => 'granice', 'badge' => 'Podział nieruchomości',
                'image_path' => 'https://images.unsplash.com/photo-1508873696983-2df5703bc20d?auto=format&fit=crop&w=1600&q=85',
                'alt_text' => 'Podział działki budowlanej na parcele',
                'title' => 'Podział działki budowlanej na 3 niezależne parcele',
                'description' => 'Sporządzenie mapy z projektem podziału, wyznaczenie drogi dojazdowej wewnętrznej oraz skompletowanie dokumentów do decyzji podziałowej.',
                'location' => 'Gdów', 'equipment' => 'Zestaw GNSS RTK + stanowisko GIS',
                'result_badge' => 'Ostateczna decyzja podziałowa wójta', 'sort_order' => 6,
            ],
            [
                'category' => 'inwentaryzacje', 'badge' => 'Inwentaryzacja kubaturowa',
                'image_path' => 'https://images.unsplash.com/photo-1590486803833-1c5dc8ddd4c8?auto=format&fit=crop&w=1600&q=85',
                'alt_text' => 'Inwentaryzacja powykonawcza hali magazynowej',
                'title' => 'Inwentaryzacja powykonawcza obiektu magazynowego',
                'description' => 'Pomiary gabarytów hali, układu komunikacyjnego, parkingów i instalacji deszczowej do zawiadomienia o zakończeniu budowy w PINB.',
                'location' => 'Wieliczka – Strefa Przemysłowa', 'equipment' => 'Tachimetr robotyczny + niwelator',
                'result_badge' => 'Bezpieczny odbiór PINB bez zastrzeżeń', 'sort_order' => 7,
            ],
            [
                'category' => 'mapy', 'badge' => 'Model rzeźby terenu',
                'image_path' => 'https://images.unsplash.com/photo-1517581177682-a085bb7ffb15?auto=format&fit=crop&w=1600&q=85',
                'alt_text' => 'Numeryczny model ukształtowania zbocza',
                'title' => 'Numeryczny model ukształtowania zbocza pod rezydencję',
                'description' => 'Gęsta siatka pikiet wysokościowych terenu o dużym nachyleniu wraz z wyznaczeniem warstwic i bilansu mas ziemnych dla konstruktora.',
                'location' => 'Dobczyce k. Zalewu', 'equipment' => 'Tachimetr z dalmierzem bezlustrowym',
                'result_badge' => 'Siatka warstwic co 0.50 m w CAD', 'sort_order' => 8,
            ],
            [
                'category' => 'sprzet', 'badge' => 'Sprzęt pomiarowy',
                'image_path' => 'https://images.unsplash.com/photo-1581092160607-ee22621dd758?auto=format&fit=crop&w=1600&q=85',
                'alt_text' => 'Tachimetr z dalmierzem bezlustrowym',
                'title' => 'Tachimetr z dalmierzem bezlustrowym i kompensatorem',
                'description' => 'Atestowany szwajcarski instrument optyczny gwarantujący milimetrową precyzję pomiarów kątowych i odległościowych nawet w trudnych warunkach oświetleniowych.',
                'location' => 'Baza techniczna HORYZONT', 'equipment' => 'Leica Geosystems · EDM laserowy',
                'result_badge' => 'Świadectwo legalizacji i kalibracji', 'sort_order' => 9,
            ],
            [
                'category' => 'sprzet', 'badge' => 'Niwelacja precyzyjna',
                'image_path' => 'https://images.unsplash.com/photo-1584467735815-f778f274e296?auto=format&fit=crop&w=1600&q=85',
                'alt_text' => 'Kontrola pionowości i osiadań fundamentów',
                'title' => 'Kontrola pionowości i osiadań fundamentów',
                'description' => 'Okresowe badania przemieszczeń pionowych konstrukcji z zastosowaniem stałych reperów ściennych oraz łaty inwarowej z kodem kreskowym.',
                'location' => 'Kraków – Śródmieście', 'equipment' => 'Niwelator kodowy precyzyjny',
                'result_badge' => 'Odczyty z dokładnością poniżej 0.5 mm', 'sort_order' => 10,
            ],
            [
                'category' => 'mapy', 'badge' => 'Opracowanie CAD & EGiB',
                'image_path' => 'https://images.unsplash.com/photo-1535732820275-9ffd998cac22?auto=format&fit=crop&w=1600&q=85',
                'alt_text' => 'Kameralne opracowanie operatów technicznych',
                'title' => 'Kameralne opracowanie operatów technicznych',
                'description' => 'Cyfrowe sporządzanie baz danych obiektowych GML, weryfikacja ksiąg wieczystych i składanie operatów przez e-PUAP do PODGiK.',
                'location' => 'Pracownia Byszyce 167', 'equipment' => 'C-Geo / TurboMAP / Podpis kwalifikowany',
                'result_badge' => 'Elektroniczny obieg dokumentacji z PODGiK', 'sort_order' => 11,
            ],
            [
                'category' => 'tyczenia', 'badge' => 'Nadzór na budowie',
                'image_path' => 'https://images.unsplash.com/photo-1621905251189-08b45d6a269e?auto=format&fit=crop&w=1600&q=85',
                'alt_text' => 'Kompleksowa obsługa inwestycji kubaturowych',
                'title' => 'Kompleksowa obsługa inwestycji kubaturowych',
                'description' => 'Bezpośrednia współpraca z kierownikiem budowy: od wykopów, przez weryfikację zbrojenia i pionów słupów, aż po mapę powykonawczą.',
                'location' => 'Myślenice', 'equipment' => 'Geodeta Uprawniony Łukasz Kowalczyk',
                'result_badge' => 'Stały nadzór uprawnionego geodety', 'sort_order' => 12,
            ],
        ];

        foreach ($photos as $photo) {
            Photo::updateOrCreate(['title' => $photo['title']], $photo);
        }
    }
}
