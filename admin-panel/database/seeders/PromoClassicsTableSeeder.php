<?php

namespace Database\Seeders;

use App\Models\PromoClassics;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PromoClassicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $promoClassics = [
            [
                "category" => "classics",
                "title" => "Нова 'Truxton Final-Edition' Серија",
                "subFamilyType" => "truxton-final-edition",
                "desc" => "Крајот на една ера - последната продукциска серија на иконата во Triumph серијата. Откријте повеќе за ексклузивното Thruxton Final Edition.",
                "image" => "/images/classics/thruxtonFinalEdition.avif",
                "btnBlack" => true
              ],
        ];

        $promoClassicsOne = [
            [
                "category" => "classics",
                "title" => "Нова 'Stealth' Серија",
                "subFamilyType" => "stealth-edition",
                "desc" => "Темно и софистицирано, но сепак смело и живо. Достапна само една година, оваа неверојатна колекција се одликува со неверојатен финиш на боја по ваша нарачка.",
                "image" => "/images/classics/stealthEdition.avif",
                "btnBlack" => true
              ],
        ];




        PromoClassics::create(['promo_data' => json_encode($promoClassics)]);
        PromoClassics::create(['promo_data' => json_encode($promoClassicsOne)]);



    }
}
