<?php

namespace Database\Seeders;

use App\Models\Promo;
use Illuminate\Database\Seeder;

class PromosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $promosData = [
            [
                "category" => "adventure",
                "title" => "Tiger 1200 Gt, GT Pro & Gt Explorer",
                "subFamilyType" => "tiger-1200-gt",
                "desc" => "Врвни, патничко-авантуристички мотори, спремни и за интерконтинентални патувања.",
                "image" => "/images/adventure/adventurePromoTiger1200Gt.avif",
                "btnBlack" => true
            ],
            [
                "category" => "adventure",
                "title" => "TIGER 1200 RALLY PRO AND RALLY EXPLORER",
                "subFamilyType" => "tiger-1200-rally",
                "desc" => "Со уште поголем off-road карактер и способности, најдобрата all-terrain авантуристичка серија.",
                "image" => "/images/adventure/adventurePromoTiger1200Rally.avif",
                "btnBlack" => false
            ],
            [
                "category" => "adventure",
                "title" => "TIGER SPORT 660",
                "subFamilyType" => "tiger-sport-660",
                "desc" => "Tiger Sport 660, со ефикасен три-цилиндричен мотор, врвни перформанси, комфорт а сепак агилен и со најниски трошоци за одржување во класата. Сето ова од  €9,590.00.",
                "image" => "/images/adventure/adventurePromoTiger660.avif",
                "btnBlack" => false
            ],
            [
                "category" => "adventure",
                "title" => "TIGER 900 GT",
                "subFamilyType" => "tiger-900-gt",
                "desc" => "Дизајниран за авантури по асфалт и комфорт, Tiger 900 GT серијата е фокусирана на возачот и нуди многу опрема и технологија на располагање.",
                "image" => "/images/adventure/adventurePromoTiger900Gt.avif",
                "btnBlack" => false
            ],
            [
                "category" => "adventure",
                "title" => "TIGER 900 RALLY",
                "subFamilyType" => "tiger-900-rally",
                "desc" => "Возбудлив Tiger серија, дизајнирана за максимално off-road доживување, комфорт и исклучително врвна контрола врз моторот со погон од најмоќниот три-цилиндричен Triumph мотор.",
                "image" => "/images/adventure/adventurePromoTiger900Rally.avif",
                "btnBlack" => true
            ],
            [
                "category" => "adventure",
                "title" => "TIGER 1200",
                "subFamilyType" => "configure/families/adventure",
                "desc" => "All-terrain моторцикли кои го освојуваат светот...",
                "image" => "/images/adventure/adventurePromoTiger1200Gif.gif",
                "btnBlack" => true
            ],
            [
                "category" => "classics",
                "title" => "Нова 'Truxton' Серија",
                "subFamilyType" => "thruxton-rs",
                "desc" => "Крајот на една ера - последната продукциска серија на иконата во Triumph серијата. Откријте повеќе за ексклузивното Thruxton Final Edition.",
                "image" => "/images/classics/thruxtonFinalEdition.avif",
                "btnBlack" => true
            ],
            [
                "category" => "roadsters",
                "title" => "НОВИОТ STREET TRIPLE 765",
                "subFamilyType" => "street-triple-765",
                "desc" => "Подкрепнат од еволуциран Moto2™ тркачки мотор. новата Speed Triple серија е високо перформантна, со висока спецификација и прилагодлива за секого. Цени од => €12,290.00",
                "image" => "/images/roadsters/roadstersPromoSpeedTriple765.avif",
                "btnBlack" => true
            ],
            [
                "category" => "roadsters",
                "title" => "TRIDENT 660",
                "subFamilyType" => "trident-660",
                "desc" => "Компетативни цени, спорстки, стилски, возбудлив и прилагодлив - новиот Trident 660 може се. Вашата Tri-Reel Advantage ви е на располагање и чека на вас. Цени од €8,690.00.",
                "image" => "/images/roadsters/roadstersPromoTrident660.avif",
                "btnBlack" => false
            ],
            [
                "category" => "roadsters",
                "title" => "НОВИОТ SPEED TRIPLE 1200 RR",
                "subFamilyType" => "speed-triple-1200-rr/speed-triple-1200-rr",
                "desc" => "Колку повозбудливо изгледа толку е повозбудлив за возење, притоа со највисокото ниво на спецификации. Цени од €20,990.00.",
                "image" => "/images/roadsters/roadstersPromoSpeedRR.avif",
                "btnBlack" => false
            ],
            [
                "category" => "roadsters",
                "title" => "НАЈНОВИОТ SPEED TRIPLE 1200 RS",
                "subFamilyType" => "speed-triple-1200-rs/speed-triple-1200-rs",
                "desc" => "Најмоќниот, динамичен и технолошки напреден Speed Triple мотор некогаш изработен. Цени од  €18,990.00.",
                "image" => "/images/roadsters/roadstersPromoSpeedRS.avif",
                "btnBlack" => false
            ],
            [
                "category" => "sport",
                "title" => "НОВАТА DAYTONA 660",
                "subFamilyType" => "daytona-660",
                "desc" => "Подкрепнат од еволуциран Moto2™ тркачки мотор. новата Speed Triple серија е високо перформантна, со висока спецификација и прилагодлива за секого. Цени од => €12,290.00",
                "image" => "/images/sport/daytona660/daytona660SnowdoniaWhite.png",
                "btnBlack" => false
            ],
            [
                "category" => "off-road",
                "title" => "Развиен Без Никаков Компромис",
                "subFamilyType" => "development-team",
                "desc" => "„Off-Road“ серијата е изработена во колаборација со нашиот инжењерски тим и најголемите мотокрос легенди, под едно исто мото - „Без Компромис.“",
                "image" => "/images/offRoad/offRoadPromo3.avif",
                "btnBlack" => false
            ],
            [
                "category" => "off-road",
                "title" => "НОВАТА TF 250-X СЕРИЈА",
                "subFamilyType" => "tf-250-x",
                "desc" => "Ако сте зависник од адреналин, новата TF 250-X серија на моторцикли е правилен избор за вас. Цени од => €9,995.00",
                "image" => "/images/offRoad/tf250x/tf250XPromoImage.avif",
                "btnBlack" => false
            ],
            [
                "category" => "off-road",
                "title" => "All-In Тим",
                "subFamilyType" => "world-class-support",
                "desc" => "Triumph тимот ви стои на располагање за се што ви е потребно. Од сервис тимови па се до 24/7 on-line продавница за резервни делови и продавница за облека",
                "image" => "/images/offRoad/offRoadPromo3.avif",
                "btnBlack" => false
            ]
        ];


        Promo::insert($promosData);

    }
}
