<?php

namespace Database\Seeders;

use App\Models\MainCarousell;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MainCarousellSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mainCarousell = [
            "video" => "/storage/images/home/mainCarousell/tiger1200CaroVideo.webm",
            "image" => null,
            "imageMobile" => "/storage/images/home/mainCarousell/tiger1200CaroImageMobile.avif",
            "title" => "Новата Tiger 1200 Серија",
            "desc" => "Возвишете ја вашата авантура на повисоко ниво.",
            "link1" => [
                "url" => "/motorcycles/adventure/tiger-1200-gt",
                "text" => "Tiger 1200 GT"
            ],
            "link2" => [
                "url" => "/motorcycles/adventure/tiger-1200-rally",
                "text" => "Tiger 1200 Rally"
            ]
        ];


        $mainCarousellTwo = [
            "video" => "/storage/images/home/mainCarousell/offRoadCaroVideo.webm",
            "image" => null,
            "imageMobile" => "/storage/images/home/mainCarousell/offRoadMainCaroMobile.avif",
            "title" => "All In - All Out",
            "desc" => "Новата TF 250-X е тука. Triumph влегува во мотокрос светот.",
            "link1" => [
                "url" => "/motorcycles/off-road/tf-250-x",
                "text" => "Погледни ја Серијата"
            ]
        ];

        $mainCarousellThree = [
            "video" => null,
            "image" => "/storage/images/home/mainCarousell/daytona.avif",
            "imageMobile" => "/storage/images/home/mainCarousell/daytonaMobile.avif",
            "title" => "Новaтa Daytona 660",
            "desc" => "Динамична ДНК со нов карактер.",
            "link1" => [
                "url" => "/motorcycles/sport/daytona-660",
                "text" => "Погледни ја Серијата"
            ]
        ];

        $mainCarousellFour = [
            "video" => "/storage/images/home/mainCarousell/thruxtonCaroVideo.webm",
            "image" => "/storage/images/home/mainCarousell/thruxtonCaroImg.avif",
            "imageMobile" => "/storage/images/home/mainCarousell/stealthCaroImageMobile.avif",
            "title" => "Новата Thruxton Final Edition",
            "desc" => "За крај на една ера - Thruxton Final Edition",
            "link1" => [
                "url" => "/motorcycles/classics/thruxton-rs",
                "text" => "Погледни ја Серијата"
            ]
        ];


        $mainCarousellFive = [
            "video" => null,
            "image" => "/storage/images/home/mainCarousell/speed400CaroImage.avif",
            "imageMobile" => "/storage/images/home/mainCarousell/speed400CaroImageMobile.avif",
            "title" => "Нови Попусти, Нови Цени",
            "desc" => "Погледнете ги новите цени за Speed 400 & Scrambler 400 X",
            "link1" => [
                "url" => "/motorcycles/classics/speed-400",
                "text" => "Speed 400"
            ],
            "link2" => [
                "url" => "/motorcycles/classics/scrambler-400-x",
                "text" => "Scrambler 400 X"
            ]
        ];

        $mainCarousellSix = [
                "video" => "/storage/images/home/mainCarousell/scrambler1200CaroVideo.webm",
                "image" => "/storage/images/home/mainCarousell/scrambler1200CaroImage.avif",
                "imageMobile" => "/storage/images/home/mainCarousell/scrambler1200CaroImage.avif",
                "title" => "Направени за секој терен",
                "desc" => "Новите Scrambler 1200 XE & X",
                "link1" => [
                "url" => "/motorcycles/classics/scrambler-1200",
                "text" => "Погледни ја Серијата"
                ]
        ];


        $mainCarousellSeven = [
                "video" => "/storage/images/home/mainCarousell/tigerCaroVideo.webm",
                "image" => "/storage/images/home/mainCarousell/tigerCaroImage.avif",
                "imageMobile" => "/storage/images/home/mainCarousell/tigerCaroImageMobile.avif",
                "title" => "Tiger 900 Серија",
                "desc" => "Новиот Tiger 900 повторно повторно се искачи на врвот и стана репер за останатите мотори од авантуристички карактер. Откријте го новиот Tiger 900.",
                "link1" => [
                "url" => "/motorcycles/adventure/tiger-900",
                "text" => "Погледни ја Серијата"
                ],
                "link2" => [
                "url" => "/configure/bike/tiger-900",
                "text" => "Конфигурација"
                ]
        ];

        $mainCarousellEight = [
                "video" => "/storage/images/home/mainCarousell/stealthEditionsCaroVideo.webm",
                "image" => "/storage/images/home/mainCarousell/stealthCaroImage.avif",
                "imageMobile" => "/storage/images/home/mainCarousell/stealthCaroImageMobile.avif",
                "title" => "Драматичен Custom Стил",
                "desc" => "Новата Triumph Stealth Серија",
                "link1" => [
                "url" => "/motorcycles/classics/stealth-editions",
                "text" => "Погледни ја Серијата"
                ]
        ];

        MainCarousell::create($mainCarousell);
        MainCarousell::create($mainCarousellTwo);
        MainCarousell::create($mainCarousellThree);
        MainCarousell::create($mainCarousellFour);
        MainCarousell::create($mainCarousellFive);
        MainCarousell::create($mainCarousellSix);
        MainCarousell::create($mainCarousellSeven);
        MainCarousell::create($mainCarousellEight);
    }
}