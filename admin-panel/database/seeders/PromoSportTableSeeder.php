<?php

namespace Database\Seeders;

use App\Models\PromoSport;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PromoSportTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $promoSport = [
            [
                "title" => "НОВАТА DAYTONA 660",
                "subFamilyType" => "daytona-660",
                "desc" => "Подкрепнат од еволуциран Moto2™ тркачки мотор. новата Speed Triple серија е високо перформантна, со висока спецификација и прилагодлива за секого. Цени од: €12,290.00",
                "image" => "/images/sport/daytona660/daytona660SnowdoniaWhite.png",
                "btnBlack" => false
            ],
        ];

        PromoSport::create(['promo_data' => json_encode($promoSport)]);

    }
}
