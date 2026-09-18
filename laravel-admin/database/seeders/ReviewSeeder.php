<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $reviews = [
            [
                'author' => 'Tomasz M.', 'role' => 'Inwestor indywidualny · Wieliczka', 'rating' => 5,
                'text' => 'Pełen profesjonalizm, mapa do celów projektowych zrobiona bardzo szybko i bez problemów w starostwie. Doskonały kontakt telefoniczny na każdym etapie. Szczerze polecam usługi Pana Łukasza!',
                'service_tag' => 'Mapa do celów projektowych', 'verified' => true, 'source' => 'google', 'published' => true,
            ],
            [
                'author' => 'Anna K.', 'role' => 'Budowa domu · gm. Wieliczka', 'rating' => 5,
                'text' => 'Tyczenie budynku w Byszycach przebiegło sprawnie i niezwykle dokładnie. Kierownik budowy nie miał żadnych uwag, a wpis do dziennika budowy został dokonany od ręki. Rzetelny fachowiec z Wieliczki.',
                'service_tag' => 'Tyczenie budynku jednorodzinnego', 'verified' => true, 'source' => 'google', 'published' => true,
            ],
            [
                'author' => 'Grzegorz W.', 'role' => 'Inwestycja budowlana · Kraków', 'rating' => 5,
                'text' => 'Inwentaryzacja powykonawcza zrobiona ekspresowo, terminowo i w bardzo dobrej cenie. Komplet dokumentów bez jakichkolwiek zastrzeżeń przeszedł odbiór w nadzorze budowlanym. Polecam z czystym sumieniem.',
                'service_tag' => 'Inwentaryzacja powykonawcza', 'verified' => true, 'source' => 'google', 'published' => true,
            ],
            [
                'author' => 'Marek S.', 'role' => 'Podział działek · Niepołomice', 'rating' => 5,
                'text' => 'Pan Łukasz sprawnie przeprowadził procedurę podziału działki na terenie gminy Niepołomice. Wszystko wyjaśnił prostym językiem bez zawiłego żargonu. Cała procedura zakończona decyzją w urzędzie bez problemów.',
                'service_tag' => 'Podział nieruchomości', 'verified' => true, 'source' => 'google', 'published' => true,
            ],
            [
                'author' => 'Piotr i Ewa D.', 'role' => 'Ustalenie granic · Dobczyce', 'rating' => 5,
                'text' => 'Zlecaliśmy wznowienie granic przed budową ogrodzenia. Punkty wyznaczone precyzyjnie w terenie w obecności sąsiadów, sporządzony protokół graniczny. Pełna kultura osobista, precyzja pomiaru i spokój.',
                'service_tag' => 'Wznowienie znaków granicznych', 'verified' => true, 'source' => 'google', 'published' => true,
            ],
            [
                'author' => 'Krzysztof B.', 'role' => 'Inwestor · Biskupice k. Wieliczki', 'rating' => 5,
                'text' => 'Świetny kontakt telefoniczny, punktualność na budowie i szybkie wydanie szkiców. Tyczenie przyłączy wody i gazu wykonane bezproblemowo. Na pewno wrócimy przy kolejnych inwestycjach.',
                'service_tag' => 'Tyczenie sieci uzbrojenia terenu', 'verified' => true, 'source' => 'google', 'published' => true,
            ],
        ];

        foreach ($reviews as $review) {
            Review::updateOrCreate(['author' => $review['author'], 'text' => $review['text']], $review);
        }
    }
}
