<?php

namespace Database\Seeders;

use App\Models\Promo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PromoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

         $promoDataArrayOne = [
            [
                'title' => 'Tiger 1200 Gt, GT Pro & Gt Explorer',
                'subFamilyType' => 'tiger-1200-gt',
                'desc' => 'Врвни, патничко-авантуристички мотори, спремни и за интерконтинентални патувања.',
                'image' => '/images/adventure/adventurePromoTiger1200Gt.avif',
                'btnBlack' => true
            ],
        ];

        $promoDataArrayTwo = [
            [
                'title' => 'TIGER 1200 RALLY PRO AND RALLY EXPLORER',
                'subFamilyType' => 'tiger-1200-rally',
                'desc' => 'Со уште поголем off-road карактер и способности, најдобрата all-terrain авантуристичка серија.',
                'image' => '/images/adventure/adventurePromoTiger1200Rally.avif',
                'btnBlack' => false
            ]
        ];


        $promoDataArrayThree = [
            [
                'title' => 'TIGER SPORT 660',
                'subFamilyType' => 'tiger-sport-660',
                'desc' => 'Tiger Sport 660, со ефикасен три-цилиндричен мотор, врвни перформанси, комфорт а сепак агилен и со најниски трошоци за одржување во класата. Сето ова од  €9,590.00.',
                'image' => '/images/adventure/adventurePromoTiger660.avif',
                'btnBlack' => false
            ]
        ];

        $promoDataArrayFour = [
            [
                'title' => 'TIGER 900 GT',
                'subFamilyType' => 'tiger-900-gt',
                'desc' => 'Дизајниран за авантури по асфалт и комфорт, Tiger 900 GT серијата е фокусирана на возачот и нуди многу опрема и технологија на располагање.',
                'image' => '/images/adventure/adventurePromoTiger900Gt.avif',
                'btnBlack' => false
            ]
        ];

        $promoDataArrayFive = [
            [
                'title' => 'TIGER 900 RALLY',
                'subFamilyType' => 'tiger-900-rally',
                'desc' => 'Возбудлив Tiger серија, дизајнирана за максимално off-road доживување, комфорт и исклучително врвна контрола врз моторот со погон од најмоќниот три-цилиндричен Triumph мотор.',
                'image' => '/images/adventure/adventurePromoTiger900Rally.avif',
                'btnBlack' => true
            ]
            ];

        Promo::create(['promo_data' => json_encode($promoDataArrayOne)]);
        Promo::create(['promo_data' => json_encode($promoDataArrayTwo)]);
        Promo::create(['promo_data' => json_encode($promoDataArrayThree)]);
        Promo::create(['promo_data' => json_encode($promoDataArrayFour)]);
        Promo::create(['promo_data' => json_encode($promoDataArrayFive)]);



    }
}
