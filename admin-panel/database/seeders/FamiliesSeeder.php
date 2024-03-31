<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Family;

class FamiliesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $familiesData = [
            [
                "type" => "adventure",
                "mainBikeLogoImage" => [
                    "url" => "adventure/mainBikeLogo.png",
                    "alt" => "Adventure Main Bike Logo"
                ],
                "familyPageBannerDesc" => "Следната Тигер генерација пристигна. Најсовремените авантуристички мотори со возбудливи карактеристични трицилиндрични мотори, пионерска прогресивна технологија и опрема, ергономија на возачот за врвна контрола и флексибилно неутрално управување. Секој Tiger мотор е изграден со максимални способности да ве однесе насекаде со стил, удобност и контрола. Triumph Tiger е врвна авантуристичка серија на авантуристички мотори кои ви овозможуваат да го тестирате секој момент.",
                "familyPageBannerVideo" => "/images/adventure/adventureHeroVideo.webm",
                "configPageInfo" => [
                    "desc" => "Истражете го светот на авантурите, со мотоцикли изградени за секогаш да стигнат до крајот на патот, подготвени да одат каде било и да постигнат сè.",
                    "link" => "/configure/families/adventure"
                ],
                "configFamilyPageInfo" => [
                    "image" => [
                        "src" => "/images/adventure/configFamilyBanner.avif",
                        "alt" => "Adventure Bikes Banner"
                    ],
                    "title" => "Додајте аксесоари на вашиот мотор",
                    "link" => "/configure/bikes"
                ]
            ],
            [
                "type" => "classics",
                "familyPageBannerDesc" => null,
                "familyPageBannerVideo" => "/images/classics/classicsBannerVideo.webm",
                "configPageInfo" => [
                    "desc" => "Легендарната 'Bonneville' крвна линија е вградена во нашите модерни класици, со неспоредлива историја на изведби, тркачки успех и културно влијание.",
                    "link" => "/configure/families/classics"
                ],
                "configFamilyPageInfo" => [
                    "image" => [
                        "src" => "/images/classics/configFamilyBanner.avif",
                        "alt" => "Classic Bikes Banner"
                    ]
                ],
                "grayCaro" => [
                    [
                        "id" => "carouselItem1",
                        "title" => "Британски двоцилиндричен мотор",
                        "desc" => "Постојат две возбудливи алтернативи - на располагање се два мотора со висок вртежен момент 'HT 900cc' и 'HT 1200cc'. И двата мотора се надградени во 2021 година, со помали емисии и одлична економичност на горивото.",
                        "image" => "/images/classics/classicsSlide1.avif"
                    ],
                    [
                        "id" => "carouselItem2",
                        "title" => "Препознатливи Карактеристики",
                        "desc" => "Секој мотор има свој автентичен карактер и стил, надграден во 2021 година со уште повисоко ниво на завршница и детали.",
                        "image" => "/images/classics/classicsSlide2.avif"
                    ],
                    [
                        "id" => "carouselItem3",
                        "title" => "Неспоредлива Автентичност",
                        "desc" => "Денешното 'Triumph Modern Classic' семејство е директен потомок на Bonneville '59, оригиналната британска мотоциклистичка икона и почетокот на генерациите на мотоциклистички субкултури и многуте варијации во денешната модерна класична постава.",
                        "image" => "/images/classics/classicsSlide3.avif"
                    ],
                    [
                        "id" => "carouselItem4",
                        "title" => "Сериозни Перформанси",
                        "desc" => "Суспензијата и сопирачките со високи спецификации нудат флексибилно и динамично возење, додека најновата генерација електронски програми за возење, ABS и контрола на тракцијата ги носат безбедноста и контролата на највисоко ниво.",
                        "image" => "/images/classics/classicsSlide4.avif"
                    ],
                    [
                        "id" => "carouselItem5",
                        "title" => "Безвременски Стил",
                        "desc" => "Иконската силуета на Bonneville го зема секој поглед, исто како и секој модел кој е полн со прекрасни детали кои го повторуваат безвременскиот дизајн на оригиналниот мотор.",
                        "image" => "/images/classics/classicsSlide5.avif"
                    ]
                ]
            ],
            [
                "type" => "roadsters",
                "familyPageBannerDesc" => "Мотори кои ги менуваат правилата за 'Naked Bike'. Препознатливите 3-цилиндрични мотори на Triumph се дизајнирани за моќност, вртежен момент и моментален одговор.",
                "familyPageBannerVideo" => "/images/roadsters/roadsterHeroVideo.webm",
                "configPageInfo" => [
                    "desc" => "Triumph создава револуционерни мотоцикли и неверојатни трицилиндрични мотори со акцент на моќноста, вртежен момент и моменталната реакција.",
                    "link" => "/configure/families/roadsters"
                ],
                "configFamilyPageInfo" => [
                    "image" => [
                        "src" => "/images/roadsters/configFamilyBanner.avif",
                        "alt" => "Adventure Bikes Banner"
                    ]
                ],
                "audioSection" => [
                    "audio" => "/images/roadsters/audio.mp3",
                    "title" => "Длабок Богат Три-Цилиндричен Звук",
                    "desc" => "Speed Triple RS моторциклот, има чист, префинет звук благодарејки на двојниот катализаторски систем и карбонскиот врв на издувната цевка.",
                    "logo" => "/images/roadsters/logoAudioSection.png"
                ]
            ],
            [
                "type" => "rocket-3",
                "familyPageBannerDesc" => null,
                "familyPageBannerVideo" => null,
                "configPageInfo" => [
                    "desc" => "Опремен со најголемиот сериски мотор во светот и со најголем вртежен момент, ова е врвниот мускулен родстер со високи перформанси.",
                    "link" => "/configure/families/rocket-3"
                ],
                "configFamilyPageInfo" => [
                    "image" => [
                        "src" => "/images/rocket-3/configFamilyBanner.avif",
                        "alt" => "Adventure Bikes Banner"
                    ]
                ]
            ],
            [
                "type" => "sport",
                "familyPageBannerDesc" => "Мотори кои ги менуваат правилата за 'Naked Bike'. Препознатливите 3-цилиндрични мотори на Triumph се дизајнирани за моќност, вртежен момент и моментален одговор.",
                "familyPageBannerVideo" => "/images/sport/familyPageBannerVideo.webm",
                "configPageInfo" => [
                    "link" => "/configure/families/sport"
                ],
                "configFamilyPageInfo" => [
                    "image" => [
                        "src" => "/images/sport/configPageBannerImage.jpg",
                        "alt" => "OFf Road Bikes Banner Image"
                    ]
                ],
                "youtubeVideo" => "https =>//www.youtube.com/embed/PpnixM8wkv4",
                "grayCaro" => [
                    [
                        "id" => "carouselItem1",
                        "title" => "Три-Цилиндрична Моќност",
                        "desc" => "Екслозивен напад на низок обртај, возбудлив среден опсег и импресивен врв со импресивен звук од три-цилиндри мотор на Дејтона, го понудува најдоброто од сите светови.",
                        "image" => "/images/sport/grayCaro/caro1.avif"
                    ],
                    [
                        "id" => "carouselItem2",
                        "title" => "Технологија",
                        "desc" => "Технологијата фокусирана на возачот овозможува целосна контрола врз моторот. Daytona нуди три режими на возење (спорт, пат и дожд) и притоа ја оптимизираа реакцијата на гас, поседува ABS и контролата на тракцијата за условите, а најсовремените функции за активна безбедност, како што е предупредувањето за итно забавување, овозможуваат да се фокусирате на возењето.",
                        "image" => "/images/sport/grayCaro/caro2.avif"
                    ],
                    [
                        "id" => "carouselItem3",
                        "title" => "Фокусирана на Патиштата",
                        "desc" => "Лесно управување и интуитивен спортски одговор, совршено избалансираната рамка, суспензијата со врвен квалитет и природната ергономија инспирираат доверба во секое возење.",
                        "image" => "/images/sport/grayCaro/caro3.avif"
                    ],
                    [
                        "id" => "carouselItem4",
                        "title" => "Целосен Пакет",
                        "desc" => "Водечкиот сервисен интервал од 16.000 километри во класата, двегодишната гаранција за неограничени километри и високата вредност за препродажба нудат најдобра вредност во својата класа.",
                        "image" => "/images/sport/grayCaro/caro4.avif"
                    ],
                    [
                        "id" => "carouselItem5",
                        "title" => "Можност за управување со A2 Возачка Категорија",
                        "desc" => "Новите и помладите возачи ограничени на А2 лиценца сè уште можат да уживаат во Daytona 660. Вашиот продавач на Triumph може да постави специјален држач за APS и програма за моторот што ја ограничува коњската сила на 35 kW.",
                        "image" => "/images/sport/grayCaro/caro5.avif"
                    ]
                ]
            ],
            [
                "type" => "off-road",
                "familyPageBannerDesc" => null,
                "familyPageBannerVideo" => "/images/offRoad/familyBannerVideo.webm",
                "configPageInfo" => [
                    "desc" => "Изработени според најновите иновации од светска класа и со врвна опрема, моторциклите од „Off-Road“ фамилијата се изработени да победуваат на секое ниво.",
                    "link" => "/configure/families/off-road"
                ],
                "configFamilyPageInfo" => [
                    "image" => [
                        "src" => "/images/offRoad/offRoadConfigBanner.avif",
                        "alt" => "Off Road Family Banner Image"
                    ]
                ],
                "youtubeVideo" => "https =>//www.youtube.com/embed/cch0spfouds",
                "grayCaro" => [
                    [
                        "id" => "carouselItem1",
                        "title" => "Три-Цилиндрична Моќност",
                        "desc" => "Екслозивен напад на низок обртај, возбудлив среден опсег и импресивен врв со импресивен звук од три-цилиндри мотор на Дејтона, го понудува најдоброто од сите светови.",
                        "image" => "/images/sport/grayCaro/caro1.avif"
                    ],
                    [
                        "id" => "carouselItem2",
                        "title" => "Технологија",
                        "desc" => "Технологијата фокусирана на возачот овозможува целосна контрола врз моторот. Daytona нуди три режими на возење (спорт, пат и дожд) и притоа ја оптимизираа реакцијата на гас, поседува ABS и контролата на тракцијата за условите, а најсовремените функции за активна безбедност, како што е предупредувањето за итно забавување, овозможуваат да се фокусирате на возењето.",
                        "image" => "/images/sport/grayCaro/caro2.avif"
                    ],
                    [
                        "id" => "carouselItem3",
                        "title" => "Фокусирана на Патиштата",
                        "desc" => "Лесно управување и интуитивен спортски одговор, совршено избалансираната рамка, суспензијата со врвен квалитет и природната ергономија инспирираат доверба во секое возење.",
                        "image" => "/images/sport/grayCaro/caro3.avif"
                    ],
                    [
                        "id" => "carouselItem4",
                        "title" => "Целосен Пакет",
                        "desc" => "Водечкиот сервисен интервал од 16.000 километри во класата, двегодишната гаранција за неограничени километри и високата вредност за препродажба нудат најдобра вредност во својата класа.",
                        "image" => "/images/sport/grayCaro/caro4.avif"
                    ],
                    [
                        "id" => "carouselItem5",
                        "title" => "Можност за управување со A2 Возачка Категорија",
                        "desc" => "Новите и помладите возачи ограничени на А2 лиценца сè уште можат да уживаат во Daytona 660. Вашиот продавач на Triumph може да постави специјален држач за APS и програма за моторот што ја ограничува коњската сила на 35 kW.",
                        "image" => "/images/sport/grayCaro/caro5.avif"
                    ]
                ]
            ]
        ];

        foreach ($familiesData as $family){
            Family::create($family);
        }

    }
}
