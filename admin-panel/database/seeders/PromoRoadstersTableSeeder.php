<?php

namespace Database\Seeders;

use App\Models\PromoRoadsters;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PromoRoadstersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $promoRoadster = [
            [
                "title" => "НОВИОТ STREET TRIPLE 765",
                "subFamilyType" => "street-triple-765",
                "desc" => "Подкрепнат од еволуциран Moto2™ тркачки мотор. новата Speed Triple серија е високо перформантна, со висока спецификација и прилагодлива за секого. Цени од => €12,290.00",
                "image" => "/images/roadsters/roadstersPromoSpeedTriple765.avif",
                "btnBlack" => true
            ],
        ];

        $promoRoadsterTwo = [
            [

                "title" => "TRIDENT 660",
                "subFamilyType" => "trident-660",
                "desc" => "Компетативни цени, спорстки, стилски, возбудлив и прилагодлив - новиот Trident 660 може се. Вашата Tri-Reel Advantage ви е на располагање и чека на вас. Цени од €8,690.00.",
                "image" => "/images/roadsters/roadstersPromoTrident660.avif",
                "btnBlack" => false
            ]
        ];

        $promoRoadsterThree = [
            [
                "title" => "НОВИОТ SPEED TRIPLE 1200 RR",
                "subFamilyType" => "speed-triple-1200-rr/speed-triple-1200-rr",
                "desc" => "Колку повозбудливо изгледа толку е повозбудлив за возење, притоа со највисокото ниво на спецификации. Цени од €20,990.00.",
                "image" => "/images/roadsters/roadstersPromoSpeedRR.avif",
                "btnBlack" => false
            ],
        ];


        $promoRoadsterFour = [
            [
                "title" => "НАЈНОВИОТ SPEED TRIPLE 1200 RS",
                "subFamilyType" => "speed-triple-1200/speed-triple-1200-rs",
                "desc" => "Најмоќниот, динамичен и технолошки напреден Speed Triple мотор некогаш изработен. Цени од  €18,990.00.",
                "image" => "/images/roadsters/roadstersPromoSpeedRS.avif",
                "btnBlack" => false
            ],
        ];

        $promoRoadsterFive = [
            [
                "title" => "3-ЦИЛИНДРИЧЕН MOTO2™ МОТОР",
                "subFamilyType" => "/for-the-ride/racing/moto2/engine",
                "desc" => "Потрагата по  подобар квалитет не доведе до изработна на нови 'street' мотори кои се карактеризираат со неверојатна моќност, врвни перформанси и фукнционалност. Резултат на сето ова е нај-напредната серија на 'naked' мотори кои некогаш сме ги изработиле, дизајнирани за забава и на патека и на нормални патишта.",
                "image" => "/images/roadsters/roadstersPromoMoto2.avif",
                "btnBlack" => false
            ],
        ];

        PromoRoadsters::create(['promo_data' => json_encode($promoRoadster)]);
        PromoRoadsters::create(['promo_data' => json_encode($promoRoadsterTwo)]);
        PromoRoadsters::create(['promo_data' => json_encode($promoRoadsterThree)]);
        PromoRoadsters::create(['promo_data' => json_encode($promoRoadsterFour)]);
        PromoRoadsters::create(['promo_data' => json_encode($promoRoadsterFive)]);


    }
}
