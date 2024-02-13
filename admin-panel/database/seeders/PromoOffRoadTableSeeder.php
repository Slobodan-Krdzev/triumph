<?php

namespace Database\Seeders;

use App\Models\PromoOffRoad;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PromoOffRoadTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $promoOffRoad = [
            [
                "title" => "Развиен Без Никаков Компромис",
                "subFamilyType" => "development-team",
                "desc" => "„Off-Road“ серијата е изработена во колаборација со нашиот инжењерски тим и најголемите мотокрос легенди, под едно исто мото - „Без Компромис.“",
                "image" => "/images/offRoad/offRoadPromo3.avif",
                "btnBlack" => false
            ],
        ];

        $promoOffRoadTwo = [
            [
                "title" => "НОВАТА TF 250-X СЕРИЈА",
                "subFamilyType" => "tf-250-x",
                "desc" => "Ако сте зависник од адреналин, новата TF 250-X серија на моторцикли е правилен избор за вас. Цени од: €9,995.00",
                "image" => "/images/offRoad/tf250x/tf250XPromoImage.avif",
                "btnBlack" => false
            ],
        ];


        $promoOffRoadThree = [
            [
                "title" => "All-In Тим",
                "subFamilyType" => "world-class-support",
                "desc" => "Triumph тимот ви стои на располагање за се што ви е потребно. Од сервис тимови па се до 24/7 on-line продавница за резервни делови и продавница за облека",
                "image" => "/images/offRoad/offRoadPromo3.avif",
                "btnBlack" => false
            ],
        ];

        PromoOffRoad::create(['promo_data' => json_encode($promoOffRoad)]);
        PromoOffRoad::create(['promo_data' => json_encode($promoOffRoadTwo)]);
        PromoOffRoad::create(['promo_data' => json_encode($promoOffRoadThree)]);


    }
}
