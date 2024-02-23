<?php

namespace Database\Seeders;

use App\Models\SubFamAdventure;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubFamAdventureTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subFamAdventureData = [
            "familyType" => "adventure",
            "price" => 14290,
            "title" => "Нова Tiger 900 Серија",
            "subFamilyName" => "tiger-900",
            "url" => "/motorcycles/adventure/tiger-900",
            "specs" => [
                [
                    "desc" => "cc Мотор",
                    "data" => 900
                ],
                [
                    "desc" => "PS Коњски Сили",
                    "data" => 106.5
                ],
                [
                    "desc" => "NM. Обртен Момент",
                    "data" => 90
                ],
                [
                    "desc" => "Аксесоари",
                    "data" => "50+"
                ]
            ],
            "service" => [
                [
                    "title" => "Сервисен Интервал",
                    "desc" => "10,000 km или 12 месеци"
                ]
            ],
            "subFamilyPageInfo" => [
                "audioSection" => [
                    "title" => "Уникатни Перформанси и Звук.",
                    "desc" => "Новиот 900сс три-цилиндричен мотор на Tiger 900 испорачува препознатлив длабок звук и длабок виок, со возбудливи вибрации при средни фреквенции и прекрасни звуци при финиш.",
                    "audio" => "/images/adventure/tiger900/tiger900Sound.mp3"
                ],

            ],
            "heroSlogans" => ["НОВИОТ", "TIGER 900"],

            "specNumbers" => [
                ["data" => "900", "info" => "cc Мотор"],
                ["data" => "90", "info" => "Nm обртен момент"],
                ["data" => "108", "info" => "PS - Максимална Сила"],
                ["data" => "+50", "info" => "Аксесоари"]
            ],
            "engineTransmission" => [
                [
                    "title" => "Мотор",
                    "desc" => "12 вентили, 2EEK, линиски 3-цилиндри, водно ладење"
                ],
                [
                    "title" => "капацитет",
                    "desc" => "888 cc"
                ],
                [
                    "title" => "диаметар",
                    "desc" => "78 mm"
                ],
                [
                    "title" => "рута",
                    "desc" => "61.9 mm"
                ],
                [
                    "title" => "компресија",
                    "desc" => "13.0 =>1"
                ],
                [
                    "title" => "Мах. Коњски Сила",
                    "desc" => "108 PS @ 9,500 rpm"
                ],
                [
                    "title" => "Мах. Обртен Момент",
                    "desc" => "90 Nm @ 6,850 rpm"
                ],
                [
                    "title" => "Систем за убризгување",
                    "desc" => "Sequential multi-point electronic injection with electronic throttle"
                ],
                [
                    "title" => "Систем за Издувни гасови",
                    "desc" => "3 во 1 не-раѓосувачки челик"
                ],
                [
                    "title" => "Финална Трансмисија",
                    "desc" => "O-ring chain"
                ],
                [
                    "title" => "Квачило",
                    "desc" => "Liquid, multi-disc, assisted glide"
                ],
                [
                    "title" => "Менувачка Кутија",
                    "desc" => "6 брзини"
                ]
            ],
            "frame" => [
                [
                    "title" => "шасија",
                    "desc" => "тубуларна челична шасија"
                ],
                [
                    "title" => "вилушка",
                    "desc" => "лиен алуминиум"
                ],
                [
                    "title" => "предно тркало",
                    "desc" => "лиен алуминиум, 19 x 2.5 "
                ],
                [
                    "title" => "задно тркало",
                    "desc" => "лиен алуминиум, 17 x 4.25 "
                ],
                [
                    "title" => "предна гума",
                    "desc" => "Metzeler TouranceTM Next, 100/90-19"
                ],
                [
                    "title" => "задна гума",
                    "desc" => "Metzeler TouranceTM Next, 150/70R17"
                ],
                [
                    "title" => "предна суспензија",
                    "desc" => "Marzocchi 45mm inverted fork, manual rebound and compression damping adjustment, 180mm travel"
                ],
                [
                    "title" => "задна суспензија",
                    "desc" => "Marzocchi rear suspension unit with manual preload and rebound damping adjustment, 170mm rear wheel travel"
                ],
                [
                    "title" => "предни сопирачки",
                    "desc" => "Dual 320mm floating discs, Four-piston monobloc Brembo Stylema 4 calipers. Radial front brake master cylinder, corner-optimized ABS"
                ],
                [
                    "title" => "задна сопирачка",
                    "desc" => "Single disc 255mm. Single piston sliding caliper, optimized angular ABS"
                ],
                [
                    "title" => "инструментна плоча",
                    "desc" => "Instrument package with full color 7” TFT with My Triumph connectivity system"
                ]
            ],
            "dimension" => [
                [
                    "title" => "ширина на волан",
                    "desc" => "930 mm"
                ],
                [
                    "title" => "висина без ретровизори",
                    "desc" => "1410 - 1460 mm (adjustable jelly) mm"
                ],
                [
                    "title" => "Висина на Седиште",
                    "desc" => "820 - 840 mm (adjustable) mm"
                ],
                [
                    "title" => "мегу-осовинско растојание ",
                    "desc" => "1556 mm"
                ],
                [
                    "title" => "Custer Corner",
                    "desc" => "24.6 º"
                ],
                [
                    "title" => "Trace",
                    "desc" => "102.7 mm"
                ],
                [
                    "title" => "Тежина",
                    "desc" => "222 kg"
                ],
                [
                    "title" => "капацитет на резервоар",
                    "desc" => "20 L"
                ]
            ],
            "fuelConsumption" => [
                [
                    "title" => "Потрошувачка",
                    "desc" => "4.7 l/100 km (60.4 mpg))"
                ],
                [
                    "title" => "CO2 загадување",
                    "desc" => "Euro 5 Стандарди. (108g /km CO2) измерени според Регулатива 168/2013/EC. Резултатите се добиени во специјални тест средини и се на располагање само за споредба. Вистинските резултат може да варираат врз различни средини."
                ]
            ],
            "grayCarousell" => [
                [
                    "id" => "carouselItem1",
                    "title" => "Tiger 900 Rally Pro",
                    "desc" => "Новиот Tiger 900 Rally Pro комбинира водечки спецификации и врвни способности, со цел да испорача комфорт при долги авантури и фантастично управување. Нуди 6 мода на работа, и тоа => Road, Rain, Sport, Rider Customizable, Off-Road & Off-Road Pro",
                    "image" => "/images/adventure/tiger900/tiger900ProGrayCaro1.avif"
                ],
                [
                    "id" => "carouselItem2",
                    "title" => "Tiger 900 Серијата е репер во својата класа",
                    "desc" => "Уште посилна и агилна, новата Tiger 900 Rally Серија претставува репер во категоријата авантуристички мотори од средна-зафатнина на моторот.",
                    "image" => "/images/adventure/tiger900/tiger900ProGrayCaro2.avif"
                ],
                [
                    "id" => "carouselItem3",
                    "title" => "Референца",
                    "desc" => "Со високо-квалитетна Showa суспанзија и специјална off-road геометрија на рамката, новиот Tiger 900 Rally Pro е спремен и за нај екстремните услови.",
                    "image" => "/images/adventure/tiger900/tiger900ProGrayCaro3.avif"
                ],
                [
                    "id" => "carouselItem4",
                    "title" => "Карактер",
                    "desc" => "Со свеж стил, повеќе моќност и врвни способности Tiger 900 Rally Pro уште повеќе го истакнува својот агресивен карактер..",
                    "image" => "/images/adventure/tiger900/tiger900ProGrayCaro4.avif"
                ],
                [
                    "id" => "carouselItem5",
                    "title" => "Комфорт и Управување",
                    "desc" => "Неутралната, интуитивна возачка позиција и унапредено седиште (можност за висинско прилагодување од 20мм и греење на седиште кај двата Pro модела) гарантираат комфорт на долги релации. За уште повеќе комоција и самодоверба тука е и Showa long-travel суспензијата која ќе го одржува високо ниво на комфорт на сите видови подлоги.",
                    "image" => "/images/adventure/tiger900/tiger900ProGrayCaro4.avif"
                ],
                [
                    "id" => "carouselItem6",
                    "title" => "Перформанси",
                    "desc" => "Перфомансите на Tiger 900 серијата се флексибилни. Се карактеризираат со меки средни и силовити високи. Tiger 900 Rally Pro нуди 13% повеќе сила и додава возбудливи перформани на патиштата и надвор од нив. ",
                    "image" => "/images/adventure/tiger900/tiger900ProGrayCaro4.avif"
                ],
                [
                    "id" => "carouselItem7",
                    "title" => "TIGER 900 GT & GT PRO",
                    "desc" => "Софистициран, со врвни спецификации и способности - новиот Tiger 900 GT Pro е ултимативниот авантуристички мотор од средна зафатнина, ориентиран за на асфалт. 5 мода на работа => (Road, Rain, Sport, Rider Customizable & Off-Road).",
                    "image" => "/images/adventure/tiger900/tiger900GTProGrayCaro7.avif"
                ],
                [
                    "id" => "carouselItem8",
                    "title" => "Фокусиран на асфалтот",
                    "desc" => "Версатилен „T-Plane“ три-цилиндричен мотор, комфортната возачка позиција, лесната лиена алуминиумска рамка и меката суспензија додаваат лидерски перформанси и управување во класата.",
                    "image" => "/images/adventure/tiger900/tiger900GTProGrayCaro8.avif"
                ],
                [
                    "id" => "carouselItem9",
                    "title" => "Перформани - Tiger 900 GT Pro",
                    "desc" => "Со 13% зголемување на моќноста, глатко чувство при средни обртаи и моќни перформанси при низок обртај, три-цилиндричниот мотор на Triumph испорачува 108 коњски сили.",
                    "image" => "/images/adventure/tiger900/tiger900GTProGrayCaro9.avif"
                ],
                [
                    "id" => "carouselItem10",
                    "title" => "Карактеристики - Tiger 900 GT Pro",
                    "desc" => "Од урбани авантури па се до интер-континентални патување и се во средина, новиот Tiger 900 GT Pro е спремен за да покори се пред себе и тоа со абсолутна самодоверба.",
                    "image" => "/images/adventure/tiger900/tiger900GTProGrayCaro10.avif"
                ],
                [
                    "id" => "carouselItem11",
                    "title" => "Карактер - Tiger 900 GT Pro",
                    "desc" => "Новата каросерија со нови бои и графици додаваат агресивност и карактер на силуетата на Tiger 900 GT Pro.",
                    "image" => "/images/adventure/tiger900/tiger900GTProGrayCaro11.avif"
                ],
                [
                    "id" => "carouselItem12",
                    "title" => "Комфорт и Управување - Tiger 900 GT Pro",
                    "desc" => "Подобрената ергономија и системот за ублажување на ударите на воланот, комбинирани со одличното неутрално управување на Tiger 900 GT Pro - гарантираат долги авантури без никаков замор.",
                    "image" => "/images/adventure/tiger900/tiger900GTProGrayCaro12.avif"
                ]
            ],
            "accessory" => [
                "banner" => [
                    "image" => "/images/adventure/tiger900/tiger900AccessoryBanner.avif"
                ],
                "infoText" => [
                    "title" => "Аксесоари - Tiger 900"
                ],
                "accessoryTypes" => [
                    [
                        "title" => "Повеќе од 50 оригинални Triupmh аксесоари",
                        "desc" => "Со повеќе од 50 оригинални Triupmh аксесоари никоја авантура нема да биде ниту премала ниту преголема. Достапни е голема палета на багаж, како и разни „Inspiration“ сетови како - „Trekker Kit“ кој ви нуди аксесоари и багаж за патни авантури и „Expedition Kit“ кој ви нуди off-road и екстра цврсти аксесоари и багаж. Заштитата за вашиот мотор е исто така многу важен фактор па така на располагање се повеќе аксесоари кои нудат заштита на вашиот мотор.",
                        "image1" => [
                            "src" => "/images/adventure/tiger900/tiger900AccessImg1.avif",
                            "alt" => "Tiger Sport 900 Luggage"
                        ],
                        "image2" => [
                            "src" => "/images/adventure/tiger900/tiger900AccessImg2.avif",
                            "alt" => "Tiger Sport 900 Luggage"
                        ]

                    ]
                ]
            ],
            "gallery" => [
                "modelImage" => [
                    "src" => "/images/adventure/tiger900GtModel.png",
                    "alt" => "Tiger 900 Range Model Image"
                ],
                "subFamilyHeroVideo" => [
                    "src" => "/images/adventure/tiger900E1/tiger900HeroVideo.webm",
                    "alt" => "Tiger 900 Hero Video"
                ],
                "subFamilyHeroImageMobile" => [
                    "src" => "/images/adventure/tiger900/tiger900HeroMobile.avif",
                    "alt" => "Tiger Sport 900 Range Hero Image"
                ],
                "subFamilyTopSectionImage" => [
                    "src" => "/images/adventure/tiger900/tiger900TopSectionImage.avif",
                    "alt" => "Tiger 900 Range Top-Section Image"
                ],
                "subFamilyTopSectionBGImage" => [
                    "src" => "/images/adventure/tiger900/tiger900TopSectionImageBG.avif",
                    "alt" => "Tiger 900 Range Top-Section Image"
                ]
            ]
        ];


        $subFamAdventureDataTwo = [
            "subFamilyName" => "tiger-sport-660",
            "familyType" => "adventure",
            "title" => "Tiger Sport 660",
            "price" => 10290,
            "url" => "/motorcycles/adventure/tiger-sport-660",
            "shortDesc" => "Тројна предност во перформансите, водечка моќ и спецификации во класата и удобна употребливост при возење - сето тоа со одлична вредност.",
            "specs" => [
                [
                    "desc" => "cc Мотор",
                    "data" => 660
                ],
                [
                    "desc" => "PS Коњски Сили",
                    "data" => 81
                ],
                [
                    "desc" => "NM. Обртен Момент",
                    "data" => 64
                ],
                [
                    "desc" => "Сервисен Интервал",
                    "data" => "16,000km"
                ]
            ],
            "heroSlogans" => ["Автентичност", "Версатилен", "3-цилиндричен"],
            "youtubeVideo" => "https:://www.youtube.com/embed/QvVCEk4t8IE",
            "engineTransmission" => [
                [
                    "title" => "Мотор",
                    "desc" => "водно ладење, 12 вентили, 2 EEK, линиски 3-цилиндри"
                ],
                [
                    "title" => "капацитет",
                    "desc" => "888 cc"
                ],
                [
                    "title" => "диаметар",
                    "desc" => "78.0 mm"
                ],
                [
                    "title" => "рута",
                    "desc" => "61.9 mm"
                ],
                [
                    "title" => "компресија",
                    "desc" => "11.27 =>1"
                ],
                [
                    "title" => "Мах. Коњски Сила",
                    "desc" => "85 PS @ 8,500 rpm"
                ],
                [
                    "title" => "Мах. Обртен Момент",
                    "desc" => "82 Nm @ 6,500 rpm"
                ],
                [
                    "title" => "Систем за убризгување",
                    "desc" => "Electronic multi-point sequential injection"
                ],
                [
                    "title" => "Систем за Издувни гасови",
                    "desc" => "3 во 1 не-раѓосувачки челик"
                ],
                [
                    "title" => "Финална Трансмисија",
                    "desc" => "O-ring chain"
                ],
                [
                    "title" => "Квачило",
                    "desc" => "Liquid, multi-disc, assisted glide"
                ],
                [
                    "title" => "Менувачка Кутија",
                    "desc" => "6 брзини"
                ]
            ],
            "frame" => [
                [
                    "title" => "шасија",
                    "desc" => "тубуларна челична шасија"
                ],
                [
                    "title" => "вилушка",
                    "desc" => "лиен алуминиум"
                ],
                [
                    "title" => "предно тркало",
                    "desc" => "19 x 2.5' die-cast легура "
                ],
                [
                    "title" => "задно тркало",
                    "desc" => "17 x 4.25' die-cast легура "
                ],
                [
                    "title" => "предна гума",
                    "desc" => "100/90-19"
                ],
                [
                    "title" => "задна гума",
                    "desc" => "150/70R17"
                ],
                [
                    "title" => "предна суспензија",
                    "desc" => "Marzocchi Inverted Fork 45mm"
                ],
                [
                    "title" => "задна суспензија",
                    "desc" => "Marzocchi задна суспензија со систем за подесување"
                ],
                [
                    "title" => "предни сопирачки",
                    "desc" => "Dual 320mm дискови, 4-piston monobloc Brembo Stylema calipers. Front radial pump, ABS"
                ],
                [
                    "title" => "задна сопирачка",
                    "desc" => "Еден 255 mm диск. Brembo single piston floating caliper, ABS"
                ],
                [
                    "title" => "инструментна плочка",
                    "desc" => "5 TFT екран"
                ]
            ],
            "dimension" => [
                [
                    "title" => "ширина на волан",
                    "desc" => "830 mm"
                ],
                [
                    "title" => "висина без ретровизори",
                    "desc" => "1410-1460 mm"
                ],
                [
                    "title" => "Висина на Седиште",
                    "desc" => "820-840 mm"
                ],
                [
                    "title" => "мегу-осовинско растојание ",
                    "desc" => "1556 mm"
                ],
                [
                    "title" => "Custer Corner",
                    "desc" => "24.6 º"
                ],
                [
                    "title" => "Trace",
                    "desc" => "133.3 mm"
                ],
                [
                    "title" => "Тежина",
                    "desc" => "192 kg"
                ],
                [
                    "title" => "капацитет на резервоар",
                    "desc" => "20 L"
                ]
            ],
            "fuelConsumption" => [
                [
                    "title" => "Потрошувачка",
                    "desc" => "5.2l /100km"
                ],
                [
                    "title" => "CO2 загадување",
                    "desc" => "Euro 5 Стандарди измерени според Регулатива 168/2013/EC. Резултатите се добиени во специјални тест средини и се на располагање само за споредба. Вистинските резултат може да варираат врз различни средини."
                ]
            ],
            "grayCarousell" => [
                [
                    "id" => "carouselItem1",
                    "title" => "Три-цилиндрични перформанси",
                    "desc" => "Располага со спортски карактер произведен од три-цилиндричниот мотор со перфектен баланс помеѓу обртен момент при мала апликација на гас и возбудлива моќност при висока апликација на гас.",
                    "image" => "/images/adventure/tigerSport850/tiger850Caro1.avif"
                ],
                [
                    "id" => "carouselItem2",
                    "title" => "Технологија фокусирана на возачот",
                    "desc" => "Технологија од врвно ниво, сопирачки и одлична суспензија за подобро секојдневно возење со максимално чувство на самодоверба, перформанси и сигурност.",
                    "image" => "/images/adventure/tigerSport850/tiger850Caro2.avif"
                ],
                [
                    "id" => "carouselItem3",
                    "title" => "Комбинација помеѓу карактер и перформанси",
                    "desc" => "Соилуета по која сите се вртат, со агресивни линии и ексклузивни детали .",
                    "image" => "/images/adventure/tigerSport850/tiger850Caro3.avif"
                ],
                [
                    "id" => "carouselItem4",
                    "title" => "Дизајниран да инспирира самодоверба",
                    "desc" => "Лесно прилагодлив за сечиј возачки стил, од височината на седиштето, до воланот па се до ерканот, Tiger 850 е спремен да се прилагоди на вас.",
                    "image" => "/images/adventure/tigerSport850/tiger850Caro4.avif"
                ]
            ],
            "specNumbers" => [
                ["data" => "660", "info" => "cc Мотор"],
                ["data" => "81", "info" => "РЅ Коњски сили"],
                ["data" => "64", "info" => "Nm Максимален Обртен Момент"],
                ["data" => "16,000", "info" => "KM СЕРВИСЕН ИНТЕРВАЛ"]
            ],
            "subFamilyPageInfo" => [
                "topSection" => [
                    "title" => "АВТЕНТИЧНА ВИТАЛНОСТ НА ТРИ ЦИЛИНДРИ",
                    "desc" => "Перформансна предност, класно лидерство во моќност, спецификации и удобно возење - сè тоа на одлична вредност",
                    "subtitle" => "Дизајниран како перфектен секојдневен, градски мотор но и за уживање за време на викенд"
                ],
                "audioSection" => [
                    "audio" => "/images/adventure/tigerSport660/tiger660Audio.mp3",
                    "title" => "Богато Три-Цилиндрично Грмење",
                    "desc" => "Звукот е снимен во живо на реален пат.",
                    "logo" => null
                ]
            ],
            "reasonsToDrive" => [
                "banner" => [
                    "image" => "/images/adventure/tigerSport660/tiger660ReasonsBanner.avif"
                ],
                "infoText" => [
                    "title" => "Дефиницијата за разноликост е да се биде најдобар во се.",
                    "desc" => "Време е да се разбудите од досадните соништа со Tiger Sport 660. Ова е најпристапниот мотор од Tiger фамилијата на Triumph и е спремен за секојдневни авантури.Tiger Sport 660 е дизајниран да ги надмине вашите очекувања, од авантуристички тури па се до дневни обврски. Кај нас во Triumph се е во знак на возење, а еве и зошто =>"
                ],
                "reasons" => [
                    [
                        "title" => "Екстра лесно управлив мотор - Tiger Sport 660",
                        "desc" => "Поддржан од препознатливите перформанси на 660 кубниот три-цилиндарски мотор, Tiger Sport 660 е досега најлесната и најприлагодливата Tiger серија досега. Шест брзинскот менувач е оптимизиран за забава и агилност додека „Slip & Assist“ квачилото е тука за да му асистира на возачот при безбројните промени на степенот на пренос со што возачот ќе се чувствува релаксиран и ќе му овозможи по-комфортна авантура од било кога. Три-цилиндарскиот мотор се карактеризира со одличен обртен момент од ниски до највисоки обртаи на моторот. Испорачува 64Nm @ 6,250rpm обртен момент и 81PS @ 10,250rpm максимална јачина на моторот. Со овие перформанси три-цилиндарскиот мотор на Triumph лесно се справува со конкуретните дво-цилиндрични мотори. Истион е многу линеарен, спортски и забавно настроен но сепак со доза на возбуда и авантура во истиот.",
                        "image" => "/images/adventure/tigerSport660/tiger660ReasonsListImage1.avif"
                    ],
                    [
                        "title" => "Перфектна Хармонија Помеѓу Моторциклот и Возачот ",
                        "desc" => "При изработка на Tiger Sport 660 серијата како и кај секој Triumph мотор, хармонијата помеѓу возачот и моторот и многу важен фактор. Tiger Sport 660 серијата е изработена во комбинација од перформанси и возбуда. Tiger Sport 660 серијата е изработена и со новите и неискусни возачи на ум. Серијата мотори може да биде оптимизирана за А2 возачка лиценца. Без разлика дали сте во потрага по башиот прв мотор или барате решение за вашите секојдневни авантури , Tiger Sport 660 е расположен за секое ваше патување."
                    ],
                    [
                        "title" => "Инспирира Самодоверба",
                        "desc" => "Самодовербата е клучен фактор за уживање во вашите авантури. Затоа Tiger Sport 660 серијата настојува да внесе колку е можно повеќе самодоверба во возачот. Исправената положба при возењето и версатилниот мотор парирани со технологија која е наменета за да помага на возачот и одличните сопирачки се тука за да ви овозможат безгрижни и опуштени патувања. За уште повеќе леснотија и безгржност при возење тука е и тенката силуета и ниското седиште (835мм) кои ќе овозможат лесен контакт на возачот и подлогата за возење при моменти на стоење.",
                        "image" => "/images/adventure/tigerSport660/tiger660ReasonsImage2.avif"
                    ],
                    [
                        "title" => "Направен за Вас",
                        "desc" => "Мотото на Tiger Sport 660 серијата е дека сите возачи се различни. Затоа оваа серија моторцикли доаѓа со три различни бои и графици и повеќе од 40 оригинални Triumph аксесоари. Од вграден багаж па се до централни куфери кои држат и до две кациги, ќе бидете инспирирани да го конфигурирата вашиот Tiger Sport 660 по ваш вкус."
                    ],
                    [
                        "title" => "Секој ден, Цел Ден",
                        "desc" => "Извонредното ниво на комфорт и комоција кое го нуди Tiger Sport 660 ќе ве натера уште повеќе да го засакате патувањето наместо дестинацијата. Showa суспензијата (41мм напред и „Monoshock hydraulic“ назад), „Slip & Assist“ квцачилото, „Road & Rain“ модулите на работа како и Τriumph ABS системот ќе ви овозможат да уживате во вашите авантури без никаков замор и дис-сатисфакција."
                    ],
                    [
                        "title" => "Максимална искористливост",
                        "desc" => "17 литаркиот резервоар на Tiger Sport 660 серијата обезбедува подлоги авантури со помалку застанување на бензските станици. Без разлика дали сте на вашите секојдневни патувања до работа, авантура со вашите пријатели или маневрирање низ тесните градски површини возењето нема никогаш да биде досадно. Лесната рамка и спорткиот карактер на овој мотор ќе ве придружуваат каде и да одите. Tiger Sport 660 серијата е спремна за било каков предизвик.",
                        "image" => "/images/adventure/tigerSport660/tiger660ReasonsImage3.avif"
                    ],
                    [
                        "title" => "Прекрасна Зделка",
                        "desc" => "Tiger Sport 660 е изработен со врвна опрема, врвни сопирачки, пневматици и суспензија и најважното - три-цилиндарски високо перформантен мотор. Цел овој пакет доаѓа со невиден стил и компетативна цена, па затоа Tiger Sport 660 серијата е одличен избор ако сте во потрага по перфектен, спортско-авантуристички мотор од средна-зафатнина на мотор а притоа и одличен избор доколку влегувате во Triumph фамилијата."
                    ],
                    [
                        "title" => "Уникатен Стил",
                        "desc" => "Новата генерација на Tiger Sport мотори во секој поглед ги нуди сите бенефити на Triumph фамилијата. Од препознатливиот три-цилиндричен мотор до легендарниот Triumph карактер и стил, Tiger Sport 660 серијата е горд носител на Triumph логото. Со својата авантуристичка, исправена става, разни бои и графици како и многуте аксесоари Tiger Sport 660 серијата ќе го измами секој поглед и бргу ќе стане центар на внимание. Tiger Sport 660 серијата и перфектна спортско-авантуристичка серија со мотор од средна зафатнина."
                    ]
                ]
            ],
            "accessory" => [
                "banner" => [
                    "image" => "/images/adventure/tigerSport660/tigerSport660AccesoryHero.avif"
                ],
                "accessoryTypes" => [
                    [
                        "title" => "Додатоци",
                        "desc" => "Подобрете ја способноста за патување на долги растојанија со целосно интегрирани панталони и средишна покривка од 47 литри со капацитет за две кациги, сите во бојата на велосипедот. Елегантниот дизајн со единствена брава со единствен клуч ќе ги одржува вашите работи суви, заштитени и безбедни. Без разлика дали чувате лаптоп, два шлемови за цело лице или вреќи за спиење, стилскиот багаж ќе додаде практичност и флексибилност во вашиот секојдневен живот. Tiger Sport 660 доаѓа со дискретно интегрирани држачи како стандард, овозможувајќи лесно монтирање на додатоците за обложување, а истовремено задржувајќи го целиот чист стил на Tiger на задната страна кога не се инсталирани табли. Додајте ги целосно водоотпорните внатрешни кеси за да ги заштитите вашите работи од елементите, кои лесно се отстрануваат кога ќе стигнете до вашата дестинација. Други додатоци вклучуваат =>",
                        "itemsList" => [
                            "Целосно Интегрирани Куфери",
                            "Централен Куфер за Две Кациги",
                            "Водо-отпорни Торби",
                            "Алуминиумски Држачи за Куфери со Интегрирани Рачки за Патникот",
                            "Централен Држач за Монтирање на Куфер",
                            "Заден Потпирач за Патникот"
                        ],
                        "image1" => [
                            "src" => "/images/adventure/tigerSport660/tigerSport660Accessory1.avif",
                            "alt" => "Tiger Sport 660 Luggage"
                        ]
                    ],
                    [
                        "title" => "Заштита",
                        "desc" => "Стравот од пад не треба да виси над вас - додадете ја потребната заштита за мир на умот во секој маневар. Возете самоуверено со капаците на моторот, заштитниците на рамката и вилушката и комплетирајте го изгледот со јаболката и рачките во боја на велосипедот.",
                        "itemsList" => [
                            "Заштитник на мотор",
                            "Заштитник на шасија",
                            "Заштита на вилушки",
                            "Заштита на Боја",
                            "Штитници за Дланки",
                            "Гумена заштита на резервоар"
                        ],
                        "image1" => [
                            "src" => "/images/adventure/tigerSport660/tigerSport660Accessory2.avif",
                            "alt" => "Tiger Sport 660 Safety"
                        ]
                    ],
                    [
                        "title" => "технологија",
                        "desc" => "Задржете се во бојата на мотоциклот Додадете повеќе практичност и интеракција со возачот со единицата My Triumph Connectivity, овозможувајќи навигација чекор-по-сврт, контрола на камерата GoPro, функционалност на телефонот и музиката, сето тоа контролирано преку прекинувачите на рачката и прикажано на TFT екранот. Чувајте ги вашите лични уреди наполнети за секое возење со пригодниот приклучок за полнење USB под седлото и опцијата за приклучок од 12V што се наоѓа на левата страна од кокпитот. Има и Triumph Shift Assist брз менувач за брзи поместувања без спојка додека се одржува позицијата на гасот. Исто така, за поудобно возење во текот на целата година, внатрешните жици на воланот се веќе инсталирани ако изберете да го додадете комплетот за грип со греење. Ова обезбедува три поставки за температура, избрани преку паметно интегрираното копче. Можете исто така да додадете тркалачки LED индикатори и светли LED помошни светла за зголемена видливост и комплетен авантуристички стил (во зависност од земјата) . Системот за следење на притисокот во гумите (TPMS) е исто така одлична безбедносна помош што ќе ве предупреди рано за секое губење на притисокот во гумите. На споредливите пазари, комплетот за конверзија на лиценца А2 со држач за вртење APS и ексклузивно подесување на моторот ќе го ограничи велосипедот на 35 kW. Ова е лесно реверзибилно од дилер на Triumph штом ќе се добие целосното ослободување.",
                        "itemsList" => [
                            "Triumph Connectivity ",
                            "USB и 12 волтни влезови за полнење под седиштето",
                            "Triumph Shift Assist",
                            "Интегрирани Греачи на Рачки на Волан",
                            "LED Трапкачи",
                            "LED Дополнителни Светла",
                            "Мониторинг за Притисок На Пневматици",
                            "A2 Fold Limit Ki"
                        ],
                        "image1" => [
                            "src" => "/images/adventure/tigerSport660/tigerSport660Accessory3.avif",
                            "alt" => "Tiger Sport 660 Luggage"
                        ]
                    ],
                    [
                        "title" => "Сигурност",
                        "desc" => "Во зависност од достапноста на локалниот пазар, алармот Triumph Protect+ или тракерот Triumph Track+ може да ги одврати потенцијалните крадци и да помогне во обновувањето доколку се случи незамисливото. Овие безбедносни уреди одобрени од Тачам доаѓаат со луксузни клучеви од брендот Triumph.",
                        "itemsList" => [
                            "Triumph Connectivity ",
                            "USB и 12 волтни влезови за полнење под седиштето",
                            "Triumph Shift Assist",
                            "Интегрирани Греачи на Рачки на Волан",
                            "LED Трапкачи",
                            "LED Дополнителни Светла",
                            "Мониторинг за Притисок На Пневматици",
                            "A2 Fold Limit Ki"
                        ],
                        "image1" => [
                            "src" => "/images/adventure/tigerSport660/tigerSport660Accessory4.avif",
                            "alt" => "Tiger Sport 660 Security"
                        ],
                        "image2" => [
                            "src" => "/images/adventure/tigerSport660/tigerSport660Accessory5.avif",
                            "alt" => "Tiger Sport 660"
                        ]
                    ]
                ]
            ],
            "shortSpecInfo" => [
                "info1" => "660cc мотор",
                "info2" => "Водечки во класата по способност и ракување",
                "info3" => "Далечински прилагодлива Showa суспензија"
            ],
            "gallery" => [
                "modelImage" => [
                    "src" => "/images/adventure/tigerSport660Model.png",
                    "alt" => "Tiger Sport 660 Range Model Image"
                ],
                "subFamilyHeroVideo" => [
                    "src" => "/images/adventure/tigerSport660/heroVideo.webm",
                    "alt" => "Tiger Sport 660 Range Hero Image"
                ],
                "subFamilyHeroImageMobile" => [
                    "src" => "/images/adventure/tigerSport660/tigerSport660MobileHeroBanner.avif",
                    "alt" => "iger Sport 660 Range Hero Image"
                ],
                "subFamilyTopSectionImage" => [
                    "src" => "/images/adventure/tigerSport660/tiger660TopSection.avif",
                    "alt" => "Tiger Sport 660 Range Top-Section Image"
                ],
                "subFamilyTopSectionBGImage" => [
                    "src" => "/images/adventure/tigerSport660/tiger660TopSectionBG.avif",
                    "alt" => "Tiger Sport 660 Range Top-Section Image"
                ]
            ]
        ];


        $subFamAdventureDataThree = [
            "subFamilyName" => "tiger-850-sport",
            "familyType" => "adventure",
            "title" => "Tiger 850 Sport",
            "price" => 13390,
            "url" => "/motorcycles/adventure/tiger-850-sport",
            "specs" => [
                [
                    "desc" => "К.ЕК Мотор",
                    "data" => 888
                ],
                [
                    "desc" => "PS Коњски Сили",
                    "data" => 85
                ],
                [
                    "desc" => "NM. Обртен Момент",
                    "data" => 82
                ],
                [
                    "desc" => "Аксесоари",
                    "data" => "60+"
                ]
            ],
            "youtubeVideo" => "https:://www.youtube.com/embed/GIjm5EcJH30",
            "shortDesc" => "Прилагодлив на секој предизвик а сепак карактерот, агилноста и перформансите на Tiger, со завидувачки дизајн  и адаптабилност за сите потреби.",
            "heroSlogans" => ["практичен", "авантурист"],
            "subFamilyPageInfo" => [
                "audioSection" => [
                    "desc" => "Уникатен звук произведен од три-цилиндричниот мотор со T-crank радалица.",
                    "audio" => "/images/adventure/tiger850Sport/tigerSound.mp3"
                ],
                "topSection" => [
                    "title" => "ПЕРФОРАМАНСИ КОИ ИНСПИРИРААТ",
                    "desc" => "Tiger 850 Sport поставува нови стандарди на патиштата, во градска средина, на било кое патување и авантура.",
                    "subtitle" => "перфектен - повеќенамеснки мотор, со одличен баланс помеѓу авантуризам и секојдневна дискретност"
                ],
            ],

            "engineTransmission" => [
                [
                    "title" => "Тип на Мотор",
                    "desc" => "линиски три-цилиндричен мотор со водно ладење, 12 вентили, 2 EEK"
                ],
                [
                    "title" => "капацитет",
                    "desc" => "888 cc"
                ],
                [
                    "title" => "диаметар",
                    "desc" => "78.0mm"
                ],
                [
                    "title" => "рута",
                    "desc" => "61.9mm"
                ],
                [
                    "title" => "компресија",
                    "desc" => "11.27 =>1"
                ],
                [
                    "title" => "Мах. Коњски Сила",
                    "desc" => "85 PS / 84 bhp (62.5 kW) @ 8,500 rpm"
                ],
                [
                    "title" => "Мах. Обртен Момент",
                    "desc" => "60 lbft @ 6,500 rpm"
                ],
                [
                    "title" => "Систем за убризгување",
                    "desc" => "Multipoint sequential electronic fuel injection"
                ],
                [
                    "title" => "Систем за Издувни гасови",
                    "desc" => "3 во 1 не-раѓосувачки челик"
                ],
                [
                    "title" => "Финална Трансмисија",
                    "desc" => "O-ring chain"
                ],
                [
                    "title" => "Квачило",
                    "desc" => "Wet, multi-plate, slip"
                ],
                [
                    "title" => "Менувачка Кутија",
                    "desc" => "6 брзини"
                ]
            ],
            "frame" => [
                [
                    "title" => "шасија",
                    "desc" => "тубуларна челична шасија"
                ],
                [
                    "title" => "вилушка",
                    "desc" => "лиен алуминиум"
                ],
                [
                    "title" => "предно тркало",
                    "desc" => "19 x 2.5'"
                ],
                [
                    "title" => "задно тркало",
                    "desc" => "17 x 4.25' "
                ],
                [
                    "title" => "предна гума",
                    "desc" => "100/90-19"
                ],
                [
                    "title" => "задна гума",
                    "desc" => "150/70R17"
                ],
                [
                    "title" => "предна суспензија",
                    "desc" => "Marzocchi Inverted Fork 45mm"
                ],
                [
                    "title" => "задна суспензија",
                    "desc" => "Marzocchi задна суспензија со систем за подесување"
                ],
                [
                    "title" => "предни сопирачки",
                    "desc" => "Dual 320mm дискови, 4-piston monobloc Brembo Stylema calipers. Front radial pump, ABS"
                ],
                [
                    "title" => "задна сопирачка",
                    "desc" => "Еден 255 mm диск. Brembo single piston floating caliper, ABS"
                ],
                [
                    "title" => "инструментна плочка",
                    "desc" => "5 TFT екран"
                ]
            ],
            "dimension" => [
                [
                    "title" => "ширина на волан",
                    "desc" => "830 mm"
                ],
                [
                    "title" => "висина без ретровизори",
                    "desc" => "1410-1460 mm"
                ],
                [
                    "title" => "Висина на Седиште",
                    "desc" => "820-840 mm"
                ],
                [
                    "title" => "мегу-осовинско растојание ",
                    "desc" => "1556 mm"
                ],
                [
                    "title" => "Custer Corner",
                    "desc" => "24.6 º"
                ],
                [
                    "title" => "Trace",
                    "desc" => "133.3 mm"
                ],
                [
                    "title" => "Тежина",
                    "desc" => "192 kg"
                ],
                [
                    "title" => "капацитет на резервоар",
                    "desc" => "20 L"
                ]
            ],
            "fuelConsumption" => [
                [
                    "title" => "Потрошувачка",
                    "desc" => "5.2l /100km"
                ],
                [
                    "title" => "CO2 загадување",
                    "desc" => "Euro 5 Стандарди измерени според Регулатива 168/2013/EC. Резултатите се добиени во специјални тест средини и се на располагање само за споредба. Вистинските резултат може да варираат врз различни средини."
                ]
            ],

            "grayCarousell" => [
                [
                    "id" => "carouselItem1",
                    "title" => "Возбудлив Три Цилиндарски Мотор",
                    "desc" => "Почувствувајте го карактерот на моторот и чувството на лесно управување со иновативната T-crank радалица и најновиот 850 три-цилиндричен мотор.",
                    "image" => "/images/adventure/tigerSport850/tiger850Caro1.avif"
                ],
                [
                    "id" => "carouselItem2",
                    "title" => "Технологија фокусирана на возачот",
                    "desc" => "Технологија од врвно ниво, сопирачки и одлична суспензија за подобро секојдневно возење со максимално чувство на самодоверба, перформанси и сигурност.",
                    "image" => "/images/adventure/tigerSport850/tiger850Caro2.avif"
                ],
                [
                    "id" => "carouselItem3",
                    "title" => "Комбинација помеѓу карактер и перформанси",
                    "desc" => "Соилуета по која сите се вртат, со агресивни линии и ексклузивни детали .",
                    "image" => "/images/adventure/tigerSport850/tiger850Caro3.avif"
                ],
                [
                    "id" => "carouselItem4",
                    "title" => "Дизајниран да инспирира самодоверба",
                    "desc" => "Лесно прилагодлив за сечиј возачки стил, од височината на седиштето, до воланот па се до ерканот, Tiger 850 е спремен да се прилагоди на вас.",
                    "image" => "/images/adventure/tigerSport850/tiger850Caro4.avif"
                ]
            ],

            "specNumbers" => [
                ["data" => "888", "info" => "cc Мотор"],
                ["data" => "85", "info" => "РЅ Коњски сили"],
                ["data" => "82", "info" => "Nm Максимален Обртен Момент"],
                ["data" => "60+", "info" => "Аксесоари"]
            ],

            "reasonsToDrive" => [
                "banner" => [
                    "image" => "/images/adventure/tigerSport850/tiger850SportReasonsBanner.avif"
                ],
                "infoText" => [
                    "title" => "Tiger 850 Sport - Комфорт и Авантура",
                    "desc" => "Новиот Tiger 850 Sport ќе биде ваш партнер во секојдневието, ќе додаде уште повеќе адреналин при вашите дневни патувања, ќе ви помогне да се изборите со урбаната џунгла, ќе ве наполни со самодоверба која ќе ве натера да се впуштите во викенд авантура или просто ќе ви озвозможи да уживате на сите патеки кои ќе му ги поставите. Со моќен три-цилиндричен и карактеристичниот „Triumph Tiger“ стил, ќе уживате во комфортот и флексибилноста која Tiger 850 Sport ја нуди."
                ],
                "reasons" => [
                    [
                        "title" => "Авантуристички мотор фокусиран на патиштата",
                        "desc" => "Дизајниран да возбудува но и да инспирира самодоверба во вас, Tiger 850 Sport серијата ќе ве возбуди уште од првото палење на моторот но сепак ќе одржува едно високо ниво на самодоверба кај возачот. Без разлика дали е вашиот прв мотор или сте искусен возач, Tiger 850 Sport серијата е дизајнирана да ве размрда во секоја прилика.",
                        "image" => "/images/adventure/tigerSport850/tiger850SportReasons1.avif"
                    ],
                    [
                        "title" => "Инспирира Самодоверба",
                        "desc" => "Самодовербата е едно од најважните чувства за уживање во авантурата. Знаејќи дека високите перформанси на кочниците и суспензијата на Tiger 850 Sport серијата ви помагаат во секој момент, ваше е само да почнете да возите. Tiger 850 Sport е тука за вас и секогаш ќе ве држи сигурни. Со исправената возачка положба и лесната рамка и мотор, Tiger 850 Sport серијата оддава чувство на сигурност, агилност и самодоверба при возењето. Доколку ја додадеме и тенката силуета, одличната ергономија и прилагодливата висина на седлото со опсег од 20 mm, дополнително ќе ги подобрите вашето искуство и комоција при возењето. Tiger 850 Sport серијата се карактеризира со одлична агилност и управување во сите авантуристички сценарија на пат."
                    ],
                    [
                        "title" => "Иновативен три-цилиндричен мотор",
                        "desc" => "Triple 850 Sport серијата го носи карактеристичниот три-цилиндарски мотор на Triumph, специјално прилагоден за удобно возење во градски средини а сепак доволно експлозивен на патиштата. Се карактеризира со 1-3-2 редослед на запалување на цилиндрите и дава одлични перформанси при ниска апликација на гас и одлична прогресивна сила при додавање на гас. Со максимална моќност од 85PS при 8500rpm и максимален обртен момент од 82Nm при 6500rpm, новата Tiger 850 Sport серија е предвидлива но сепак спортко настроена."
                    ],
                    [
                        "title" => "Направен за вас",
                        "desc" => "Со оглед на индивидуалноста на возачите, Tiger 850 Sport доаѓа со повеќе опции за прилагодување на моторот со кои сигурно ќе ги постигнете посакуваните резулатати. Со можност за прилагодување на воланот, прилагодување на висината на седиштето како и прилагодливата Marzocchi суспензија ви гарантираме дека ќе ја пронајдете вашата идеална возачка позиција и ќе го прилагодите Tiger 850 Sport спрема вашите преференци. За дополнително да ви излеземе во пресрет на вашите побарување, на располагање ви се уште две различни бои како и повеќе од 60 оригинални Triumph аксесоари.",
                        "image" => "/images/adventure/tigerSport850/tiger850SportReasons2.avif"
                    ],
                    [
                        "title" => "Tiger 850 Sport ве мотивира да возите",
                        "desc" => "Важна е авантурата - не дестинацијата. Затоа Tiger 850 Sport серијата е спремна да му овозможи на возачот одличен комфорт додека трае неговата авантура. Опремен со Marzocchi 45mm inverted предна суспензија и задна суспензија со можност за подесување, квачило кое ви асистира, два модула на работа (Road & Rain) како и ABS систем на сопирачките, Tiger 850 Sport ќе ви овозможи комодитет и самодоверба на највисоко ниво."
                    ],
                    [
                        "title" => "Флексибилност",
                        "desc" => "Tiger 850 Sport серијата не е направена само за авантури. Напротив Tiger 850 Sport серијата е флексибилна и ќе додаде малку авантура и карактер и на вашите секојдневни возења. Со својот 20 литарски резервоар, ABS систем и систем за пролизгување, Tiger 850 Sport е спремен за секаква патека и авантура, без разлика дали ќе возите до работа или некаква поинтересна авантура. Со неговата лесна силуета, спортски карактер овој мотор е спремен да биде вашиот најверен партнер при вашите авантури."
                    ],
                    [
                        "title" => "Препознатлива Tiger става",
                        "desc" => "Tiger 850 Sport серијата дефинитивно го има Tiger карактерот. Но исто така ја дели и неговата силуета и стил. Високата става, високото ветробранско стакло и рефинирана ергономија дава одличен комфорт при вашето возење. Со дополнителните аксесоари и бои Tiger 850 Sport серијата со сигурност ќе мами погледи.",
                        "image" => "/images/adventure/tigerSport850/tiger850SportReasons3.avif"
                    ]
                ]
            ],
            "accessory" => [
                "banner" => [
                    "image" => "/images/adventure/tigerSport850/tiger850AccessoryBanner.avif"
                ],
                "infoText" => [
                    "title" => "Дополнителни аксесоари - Tiger 850 Sport",
                    "desc" => "Дополнително персонализирајте го вашиот Tiger 850 Sport со повеќе од 60 оригинални Triumph аксесоари кои додаваат уште повеќе стил и сигурност, комфорт и дополнително мамат погледи. Без разлика дали патувате низ урбаната џунгла или ќе тргнете на долга авантура со сигорност ќе најдете дополнителни аксесоари кои ќе ви го олеснат патувањето. Сите оригинални Triumph аксесоари се достапни во секое најблиско Triumph претставништо и чекаат вие да го нконфигурирате вашиот Triumph по ваш вкус."
                ],
                "accessoryTypes" => [
                    [
                        "title" => "Практичност - Багаж",
                        "desc" => "Додадете 131 литри и 25кг дополнителен багаж со специјално дизајниран Trekker багаж. Овој сет куфери за багаж ќе ги чува вашите сопствености суви, заштитени и сигурни со помош на бравата на заклучување. Без разлика дали тоа ќе биде вашиот лап-топ, кацига или вреќа за спиење, лесните алуминиумски куфери се лесни за монтажа и де-монтажа и се практични и флексибилни за секојдневно користење. За уште повеќе сигурност и заштита тука е и „Expedition“ сетот кој има алуминиумска конструкција со дебелина од 1.5мм и полимерна зафтита на аглите, брава на заклучување и капацитет од 131 литар.",
                        "itemsList" => [
                            "Шасии за поставување багаж",
                            "Trekker Багаж",
                            "Expedittion Багаж",
                            "Торби за внатрешна употреба во куфер"
                        ],
                        "image1" => [
                            "src" => "/images/adventure/tigerSport850/tiger850SportAccess3.avif",
                            "alt" => "Tiger Sport 850 Luggage"
                        ],
                        "image2" => [
                            "src" => "/images/adventure/tigerSport850/tiger850SportAccess1.avif",
                            "alt" => "Tiger Sport 850 Luggage"
                        ]
                    ],
                    [
                        "title" => "Комфорт",
                        "desc" => "Tiger 850 Sport серијата е создадена да ги покори сите услови па дури и оние со температури под нулата. За возачот се грижат греачи на рачки и седиште за возачот и патникот на кој на располагање му е и специјална перница за поголема комоција.",
                        "itemsList" => [
                            "Греачи на Рачки",
                            "Греач на седиште",
                            "Перница - потпирач за сопатникот"
                        ],
                        "image1" => [
                            "src" => "/images/adventure/tigerSport850/tiger850SportAccess2.avif",
                            "alt" => "Tiger 850 Sport - Comfort"
                        ]
                    ],
                    [
                        "title" => "Заштита од Елементите",
                        "desc" => "Целосната серија е фокусирана на комодитет а затоа се грижат - ветробранското стакло и штитниците за дланк.",
                        "itemsList" => [
                            "Ветробранско Стакло",
                            "Заштита за Раце"
                        ]
                    ],
                    [
                        "title" => "Сигурност - Безбедност",
                        "desc" => "Стравот од падови не треба да е пречка за повеќе сатисфакција при возењето. На возачот мора му биде обезбедена комоција, сигурност и да биде мотивиран за повеќе авантура со додвање доза на возбуда. Затоа за ваше уживање и опуштеност тука се разните штитници за моторот, штитници за резервоар и радијатор, како и штитници за вилушки, раце и светло кои дополнително додаваат и екстра авантуристички карактер и стил.",
                        "itemsList" => [
                            "Штитник за Мотор",
                            "Заштита за Резервоар",
                            "Штитници за Дланки",
                            "Штитник за Ладник",
                            "Штитник на Вилушки",
                            "Штитник за Светло"
                        ],
                        "image1" => [
                            "src" => "/images/adventure/tigerSport850/tiger850SportAccess4.avif",
                            "alt" => "Tiger Sport 850 Protection"
                        ]
                    ],
                    [
                        "title" => "Централна Ногарка",
                        "desc" => "Додајте ја оригиналната централна ногарка на Triumph која ќе го оптимизира вашето време додека паркирате. Алтернативно додадена е и оригинален тркачки сталак кој ви обезбедува дад заштедите на тежина и полесно паркирање во вашите гаражи.",
                        "itemsList" => [
                            "Централна Ногарка"
                        ],
                        "image1" => [
                            "src" => "/images/adventure/tigerSport850/tiger850SportAccess5.avif",
                            "alt" => "Tiger Sport 850 Stand"
                        ]
                    ]
                ]
            ],
            "shortSpecInfo" => [
                "info1" => "888cc T-plane мотор",
                "info2" => "Авантуристичко настроен патнички мотор",
                "info3" => "20 литарски резервоар",
                "info4" => "60+ аксесоари"
            ],
            "gallery" => [
                "modelImage" => [
                    "src" => "/images/adventure/tiger850Sport.png",
                    "alt" => "Tiger 850 Sport Model Image"
                ],
                "subFamilyHeroVideo" => [
                    "src" => "/images/adventure/tigerSport850/tigerSport850HeroVideo.webm",
                    "alt" => "Tiger Sport 850 Range Hero Image"
                ],
                "subFamilyHeroImageMobile" => [
                    "src" => "/images/adventure/tigerSport850/tiger850SportMobileHero.avif",
                    "alt" => "iger Sport 850 Range Hero Image"
                ],
                "subFamilyTopSectionImage" => [
                    "src" => "/images/adventure/tigerSport850/tiger850TopSection.avif",
                    "alt" => "Tiger Sport 850 Range Top-Section Image"
                ],
                "subFamilyTopSectionBGImage" => [
                    "src" => "/images/adventure/tigerSport850/tigerSport850TopSectionBG.avif",
                    "alt" => "Tiger Sport 850 Range Top-Section Image"
                ]
            ]
        ];

        $subFamAdventureDataFour = [
            "subFamilyName" => "tiger-1200-gt",
            "familyType" => "adventure",
            "title" => "Tiger 1200 GT",
            "price" => 20390,
            "url" => "/motorcycles/adventure/tiger-1200-gt",
            "specs" => [
                [
                    "desc" => "К.ЕК Мотор",
                    "data" => 1160
                ],
                [
                    "desc" => "PS Коњски Сили",
                    "data" => 150
                ],
                [
                    "desc" => "NM. Обртен Момент",
                    "data" => 130
                ],
                [
                    "desc" => "Години Гаранција",
                    "data" => "3"
                ]
            ],
            "shortDesc" => "Врвен авантуристички мотор фокусиран за асфалтни подлоги. Интер-континентални можности, со висока комоција, перформанси и стил.",
            "youtubeVideo" => "https:://www.youtube.com/embed/1W9yGiYxlJ8",
            "heroSlogans" => ["Вие ја ", "креирате", "авантурата"],
            "subFamilyPageInfo" => [
                "topSection" => [
                    "title" => "ТРАНСФОРМИРАЈТЕ ЈА ВАШАТА АВАНТУРА",
                    "desc" => "Ултимативниот авантуристички моторцикл фокусиран на асфалтот. Интерконтинентални можности, неверојатен комфорт, перформанси и стил.",
                    "subtitle" => "Нај-способниот, нај-версатилниот, и агилен мотор, со најголемата зафатнина на мотор во целиот свет"
                ],
            ],
            "engineTransmission" => [
                [
                    "title" => "Мотор",
                    "desc" => "12 вентили, 2EEK,3-цилиндарски мотор / водно ладењe "
                ],
                [
                    "title" => "капацитет",
                    "desc" => "1160cc"
                ],
                [
                    "title" => "диаметар",
                    "desc" => "90.0 mm"
                ],
                [
                    "title" => "рута",
                    "desc" => "60.7 mm"
                ],
                [
                    "title" => "компресија",
                    "desc" => "13.2 =>1"
                ],
                [
                    "title" => "Мах. Коњски Сила",
                    "desc" => "150PS @ 9,000rpm (100PS во програм за дожд)"
                ],
                [
                    "title" => "Мах. Обртен Момент",
                    "desc" => "130 Nm @ 7,000 rpm"
                ],
                [
                    "title" => "Систем за убризгување",
                    "desc" => "Sequential multi-point electronic injection with electronic throttle"
                ],
                [
                    "title" => "Систем за Издувни гасови",
                    "desc" => "3 во 1 не-раѓосувачки челик - скриен главен катализатор и странично монтиран финален катализатор"
                ],
                [
                    "title" => "Финална Трансмисија",
                    "desc" => "Axis"
                ],
                [
                    "title" => "Квачило",
                    "desc" => "Hydraulic, wet, multi-disc, sliding"
                ],
                [
                    "title" => "Менувачка Кутија",
                    "desc" => "6 брзини"
                ]
            ],
            "frame" => [
                [
                    "title" => "шасија",
                    "desc" => "тубуларна челична шасија / страничен заштитен алуминиумски рам со опција за лесно одстранување"
                ],
                [
                    "title" => "вилушка",
                    "desc" => "тубуларна челична конструкција / страничен заштитен алуминиумски рам со опција за лесно одстранување"
                ],
                [
                    "title" => "предно тркало",
                    "desc" => "19 x 3.0” алуминиумска легура "
                ],
                [
                    "title" => "задно тркало",
                    "desc" => "18 x 4.25” алуминиумска легура "
                ],
                [
                    "title" => "предна гума",
                    "desc" => "Metzeler Tourance, 120/70R19 (M/C 60V TL)"
                ],
                [
                    "title" => "задна гума",
                    "desc" => "Metzeler Tourance, 150/70R18 (M/C 70V TL)"
                ],
                [
                    "title" => "предна суспензија",
                    "desc" => "Showa 49mm inverted вилушки со полу-автоматско потискување"
                ],
                [
                    "title" => "задна суспензија",
                    "desc" => "Showa semi-active damping monoshock (200мм)."
                ],
                [
                    "title" => "предни сопирачки",
                    "desc" => "„Brembo M4.30 Stylema monobloc radial“ клешта , ABS, 320mm дупли дискови."
                ],
                [
                    "title" => "задна сопирачка",
                    "desc" => "„Brembo single piston“ клешта, ABS, 282mm диск. Посебна пумпа со посебен резервоар за задна сопирачка."
                ],
                [
                    "title" => "инструментна плочка",
                    "desc" => "7“ инструментален пакет во боја со My Triumph систем за поврзување"
                ]
            ],
            "dimension" => [
                [
                    "title" => "ширина на волан",
                    "desc" => "849 mm"
                ],
                [
                    "title" => "висина без ретровизори",
                    "desc" => "1436-1497 mm"
                ],
                [
                    "title" => "Висина на Седиште",
                    "desc" => "850-870 mm"
                ],
                [
                    "title" => "мегу-осовинско растојание ",
                    "desc" => "1560 mm"
                ],
                [
                    "title" => "Custer Corner",
                    "desc" => "24.0 º"
                ],
                [
                    "title" => "Trace",
                    "desc" => "120 v mm"
                ],
                [
                    "title" => "Тежина",
                    "desc" => "245 kg"
                ],
                [
                    "title" => "капацитет на резервоар",
                    "desc" => "20 L"
                ]
            ],
            "fuelConsumption" => [
                [
                    "title" => "Потрошувачка",
                    "desc" => "5.1l /100km"
                ],
                [
                    "title" => "CO2 загадување",
                    "desc" => "119 g/km EURO 5 Regulation (EU) No. 134/2014 Annex VIII"
                ]
            ],
            "service" => [
                [
                    "title" => "Сервисен Интервал",
                    "desc" => "16 000км или 12 месеци"
                ]
            ],
            "grayCarousell" => [
                [
                    "id" => "carouselItem1",
                    "title" => "Потполно Нов Три Цилиндарски Мотор",
                    "desc" => "Уште помоќен од неговата конкуренција - Tiger 1200 GT серијата ги комбинира најмоќните карактеристики од дво-цилиндричните и три-цилиндричните мотори и нуди посебен карактер.",
                    "image" => "/images/adventure/tiger1200GT/tiger1200GTGrayCaro1.avif"
                ],
                [
                    "id" => "carouselItem2",
                    "title" => "„Semi-Active“ Суспензија",
                    "desc" => "Високо квалитетната Showa суспензија е автоматски прилагодлива на секаков терен и тежина на возачотм сопатникои и дополнителнит багаж и сето тоа со лесно модифицирање од страна на возачот.",
                    "image" => "/images/adventure/tiger1200GT/tiger1200GTGrayCaro2.avif"
                ],
                [
                    "id" => "carouselItem3",
                    "title" => "Нова, уште полесна рамка",
                    "desc" => "Со иновативната „Tri-Link“ раме, нова лесна рамка и големи заштеди кога е во поглед вкупната тежина на моторот Tiger 1200 GT серијата поставува нов репер во управување на патот.",
                    "image" => "/images/adventure/tiger1200GT/tiger1200GTGrayCaro3.avif"
                ],
                [
                    "id" => "carouselItem4",
                    "title" => "Специјални Тркала - Специјален Дијаметар",
                    "desc" => "Tiger 1200 GT моделите стојат на лесни алуминиумски бандажи од 19“ напред и 18“ назад за уште поголем фидбек од асфалтната подлога.",
                    "image" => "/images/adventure/tiger1200GT/tiger1200GTGrayCaro4.avif"
                ],
                [
                    "id" => "carouselItem5",
                    "title" => "Високо ниво на технологија",
                    "desc" => "Новата иновативна „Blind Spot Radar“ технологија се грижи за тоа што се наоѓа околу вас и посебно зад вас, ќе ви изнуди уште повеќе самодоверба, комфорт и уживање.",
                    "image" => "/images/adventure/tiger1200GT/tiger1200GTGrayCaro5.avif"
                ]
            ],
            "specNumbers" => [
                ["data" => "1160", "info" => "cc Мотор"],
                ["data" => "150", "info" => "РЅ Коњски сили"],
                ["data" => "130", "info" => "Nm Максимален Обртен Момент"],
                ["data" => "3", "info" => "Години Гаранција"]
            ],
            "reasonsToDrive" => [
                "banner" => [
                    "image" => "/images/adventure/tiger1200GT/tiger1200GTReasonsBanner.avif"
                ],
                "infoText" => [
                    "title" => "Tiger 1200",
                    "desc" => "Triumph фамилијата располага со пет мотори од Tiger 1200 серијата и истите се наменети и изработени со помислата дека сите возачи се разнолики и имаат свои преференци. Па така тука се GT, GT Pro и GT Explorer моделите кои се наменети на асфалтните подлоги наспроти „all-terrain“ моделите како Rally Pro и Rally Explorer кои се за наменети за ентузијасти и сите оние кои ушиваат во авантура надвор од стандардните патишта. Tiger 1200 GT серијата е наменета да биде репер за сите оние кои бараат авантуристички мотор од голема зафатнина на моторот а тоа го постигнуваме со големата доза на технологија, како „Blind Spot Radar“ - технологија која ви го чува грбот во секој момент, со големиот левел на комфорт и лесното управува и на крај силната моќност на три-цилиндарските Triumph мотори."
                ],
                "reasons" => [
                    [
                        "title" => "Мотор",
                        "desc" => "Уникатниот, лесниот, препознатлив (1160cc) три-цилиндричен мотор на Triumph располага со многу капацитет, карактер и перформанси. Долго-годишните тестови и процеси на развој доведоа до произведување на оптимален три-цилиндарски мотор, кој располага со оние препознатливи предности на дво-цилиндарските мотори на низок обртен момент и богатите перформанси на три-цилиндарските мотори на високи обртаи. Tiger 1200 серијата нуди богат обртен момент и контрола при низок обртај со прецизност и предвидливост при додвање на гаста. Во моментот кога додавате гас и се наоѓате во онов среден обсен на обртаите на моторот три-цилиндарскиот аспект на овој мотор доаѓа до израз и понудава експлозивност и високи перформанси кои растат се до моментот кога стрелката влегува во црвено. Максималната јачина на моторот е 150 PS, 9PS повеќе од неговиот претходник.",
                        "image" => "/images/adventure/tiger1200GT/tiger1200GTReasons1.avif"
                    ],
                    [
                        "title" => "Тежина",
                        "desc" => "Со цел да оваа серија се доведе до идеално ниво на агилност, компактност и разноликост оваа серија мораше значително да ја намали својата вкупна тежина, но по цена да не се уништи нивота на комоција и самодоверба. Новиот 1160cc мотор, лесната тубуларна рамка и уникатното „Tri - Link“ раме парирано со суспензијата и сопирачките заштедија дури 25кг од вкупната тежина на моторот, што е 17кг помалку од вкупната тежина на нивниот претходник. На крај на се оваа Tiger серија понудува - врвен авантуристчки моторцикл со голема зафатнина на мотор кој е супериорно избалансиран, лесен за возење и нуди перфектни перформанси без никакво жртвување во поглед на комоција и леснотија за возење.",
                        "image" => "/images/adventure/tiger1200GT/tiger1200GTReasons2.avif"
                    ],
                    [
                        "title" => "Комфорт и Комоција",
                        "desc" => "Најчесто авантурите кои најмногу се паметат се оние кои се нај-исцрпувачки и за моторот и за возачот. Секој мотор од Tiger серијата е наменет за уживање од првиот до последниот километар па така секој мотор доаѓа со 3-годишна гаранција без разлика на поминати километри која ви овозможува повеќе возење и уживање наместо загриженост. Сите тестови направени врз оваа серија се наменети за да оваа серија испорача ултимативно „off-road“ искуство и авантура. Секој можен елемент на Tiger 1200 серијата почнувајки од лесната рамка па се до најситните компоненти се дизајнирани за максимална цврстина на моторот, стабилсност како и комоцијата на возачот.",
                        "image" => "/images/adventure/tiger1200GT/tiger1200GTReasons3.avif"
                    ],

                    [
                        "title" => "„Off-Road“ Специјалист",
                        "desc" => "Истражување на неоткриените терени е сон за многуте возачи, аванатуристи. Доколку и вие имате авантуристички и истражувачки аспирации, тогаш Tiger 1200 Rally Pro & Explorer моделите се тука за вас. Карактеристичното високо растојание до земјиното тло како и големите „Off-Road“ тркала и „tubuless“ Metzeler Karoo пневматици (21“ напред & 18“ назад) како и опционалните Michelin Anakee Wild пневматици се тука за да ве охрабрат на уште поголема авантура. Доколку на сето ова ја додадеме и перфектната возачка позиција, мотор кој испорачува извонредна сила и Showa суспензијата вие добивате ултимативен авантурист специјализиран за екстремни подлоги. Доколку вашата идеална авантура најмногу се базира на асфалтните подлоги, но понекогаш сакате и да избегате од нив тогаш Tiger GT Pro & GT Explorer се тука за да ви обезбедат многу возбудливи и безбедни километри.",
                        "image" => "/images/adventure/tiger1200GT/tiger1200GTReasons4.avif"

                    ],
                    [
                        "title" => "Техонологија",
                        "desc" => "Tiger 1200 серијата е една од технолошко најнапредните серии на пазарот. Истата е наменета како асистент на возачот и овозможува подолга, покомфортна и најважното најбезбедна авантура. Двата „Explorer“ модели се опремени со иновативната „Blind Spot Radar“ системот кој бурно го следи дејствието зад вас и во опсегот на вашите така наречени слепи точки. Изработен е во соработка со Continental и нуди „Blind Spot Assis“ и „Lane Change Assist“. Новата Showa суспензија автоматски се прилагодува на теживата на возачот, во секој момент е активна и го прави возењето полесно и покомфротно и сето ова на притисок на копче и без никаков алат во рацете. На клик на копче се достапни и 6 возачки мода, систем за пролизгување, ABS и опции за подесување на суспензијата. Целосниот „KEYLESS“ систем обезбедува побрзи застанување за точење на гориво како и ви овозможува да не ги вадите вашите ракавици на секое паркирање. Греачите на рачките и греачите на седиште за возач и сопатник (само кај Explorer моделите) се тука за да се чувствувате комотно и нудат повеќе опции на греење. 7“ TFT full-color дисплеј, адаптивните LED светла, „Hill-Assist“, USB влезовите, системот за мониторинг на притисокот во гумите и квачилото кое ви асистира се уште некои од дополнителните технолошки гаџети кои ви овозможуваат безгржно и комфортно патување и луксуз (некои од опциите не доаѓаат како стандард кај сите Tiger 1200 модели).",
                        "image" => "/images/adventure/tiger1200GT/tiger1200GTReasons5.avif"
                    ],
                    [
                        "title" => "Стил",
                        "desc" => "Суровиот изглед, цврстата става и „Tiger“ карактерот се тука да го измамат секој поглед и да го направат секој Tiger 1200 модел центар на вниманието. Tiger серијата еволуираше во поглед на ергономијата на возачот, перформансите што овозможи посигурно возење, повеќе самодоверба без губење на познатата комоција и стил на Tiger серијата. Висината до земјинотот тло исто така беше унапредена и ја направи Tiger 1200 серијата „off-road“ специјалист, но и оддаде свој допринос на изгледот и стилот на моторот. Како за крај тука е LED осветлувањето со дополнителни LED дневни светла кои оддаваат свој допир кога е во прашање не само излгедот туку и фукнционалноста.",
                        "image" => "/images/adventure/tiger1200GT/tiger1200GTReasons6.avif"

                    ]
                ]
            ],
            "accessory" => [
                "banner" => [
                    "image" => "/images/adventure/tiger1200GT/tiger1200GTAccessBanner.avif"
                ],
                "infoText" => [
                    "title" => "Конфигурирајте го вашиот мотор",
                    "desc" => "Tiger 1200 серијата е изработена да ве однесе каде и да посакате. Бидете сигурни дека безразлика на изборот кој ќе го направите и како и да посакате да го конфигурирате вашиот мотор, Triumph дизајнерите веќе го изработиле тоа парче."
                ],
                "accessoryTypes" => [
                    [
                        "title" => "Багаж ",
                        "desc" => "Моторите кои се дизајнирани за авантури бараат и соодветен екстра издржлив багаж. Дизајнирани во колаборација со светски познатиот бренд Givi, алуминиумската „Expedition“ серија и синтетичко/алуминиумската серија „Trekker“ нудат екстра издржливи багаж кој може да собере се што ви е потребно за безгрижна авантура. Големината и конфигурацијата на багажот се дизајнирани според силуетата на Tiger серијата (33 литри на десната и 46 литри капацитет на левата страна) заради издувната цевка на десната страна. Централниот багаж исто така варира кога е прашање на големина, па така можете да конфигурирате по ваш вкус и барање ( најголемата величина има доволно место за две кациги ) како и можност за додавање на дополнителен луксуз во форма на потпирач за совозачот. На располагање ви се и повеќето бои како „Stealth Black“ и „Classic Silver“. Дополнителни внатрешни торби за складирање и сортирање се на располагање кои ќе ги чуваат вашите сопствености суви и заштитени.",
                        "itemsList" => [
                            "Алуминиумски „Expedition“ Паниери",
                            "„Trekker“ Паниери"
                        ],
                        "image1" => [
                            "src" => "/images/adventure/tiger1200GT/tiger1200GTAccess1.avif",
                            "alt" => "Tiger 1200 Luggage"
                        ],
                        "image2" => [
                            "src" => "/images/adventure/tiger1200GT/tiger1200GTAccess2.avif",
                            "alt" => "Tiger 1200 Luggage"
                        ]
                    ],
                    [
                        "title" => "Заштита",
                        "desc" => "Долгите денови поминати на моторот, уморните мускули и деконцентрацијата некогаш доведуваат и до некој несакан пад. Сите сме биле таму. За наша и ваша среќа додавањето дополнителна заштита на вашиот Tiger 1200 никогаш не е била полесна. Секое парче е дизајнирано да комбинира функционалност и стил, додавајки уште повеќе трајност на вашиот Tiger 1200 како и уште посуров изглед. Падовите никако не смеат да бидат крај на вашите авантури напротив само малку одстранување од вашата цел. Рамовите/штитници на моторот додаваат заштита за долниот дел и страничниот дел на моторот и можат да бидат вградени поединечно или најдобро - заедно. Изработени од нераѓосувачки челик со тубуларна шасија штитниците за моторот ќе го заштитат моторот од било каков пад. Секој модел од Tiger 1200 серијата има повисоко растојание помеќу најдолниот дел од моторот и земјиното тло што нуди уште повеќе „Off-Road“ авантури. Со цел да го заштитиме долниот дел од моторот од камења и било какви тврди предмети, дизајниравме алуминиумска заштитна плоча која не само што штити туку и со нејзината мала тежина не додава на вкупната тежина на моторот. Со најголема дебелина од 4мм на клучните места ова е еден аксесоар кој мора да го имате. Претходно спомнатите камења и остри предмети можат многу лесно да наштетат на вашите светла. Дизајнирани претежно за „Off-Road“ услови поликарбонатските штитници за светла се лесни за вградувае и иделна заштита од надворешните услови.",
                        "itemsList" => [
                            "Заштитен Рам за Мотор",
                            "Заштита за картер (долен дел од мотор)",
                            "Заштита за Светло"
                        ],
                        "image1" => [
                            "src" => "/images/adventure/tiger1200GT/tiger1200GTAccess3.avif",
                            "alt" => "Tiger 1200 Safety"
                        ],
                        "image2" => [
                            "src" => "/images/adventure/tiger1200GT/tiger1200GTAccess4.avif",
                            "alt" => "Tiger 1200 Safety"
                        ]
                    ],
                    [
                        "title" => "Технологија Фокусирана на Возачот",
                        "desc" => "Без разлика на моделот, секој мотор од Tiger 1200 серијата е опремен со најновата технологија како стандард. Но на располагање ви се и додатни елементи доколку сакате уште повеќе да го подобрите нивото на технологија која вашиот мотор ќе ја поседува. За авантури во темните длабочини на природата тука е дополнителниот сет светла кои ќе ги осветлат дури и најтемните места кои ќе се најдат пред вас. Компактни и лесни и со одлична ширина и висина на светлосниот зрак овие светла се лесни за монтирање и демонтирање а се огромен чекор напред во осветлувањето на пат. Три-цилиндарскиот Triumph мотор е подкрепнат од одличен менувач кој како додаток го понудува „Shift Assist“ модулот кој обезбедува промена на степен на пренос без употреба на квачило. Тука е и (TPMS) „Tire Pressure Monitoring System“ систем кој одржува постојан мониторинг на притисокот на воздух во вашите пневматици. Овој систем ќе ви обезбеди посигурно возење и ќе ја одстрани потребата за преглед на вашиот мотор пред вашата авантура. Со цел да се обезбеди и позабавна авантура тука е и Sena системот за комуникација „rider-to-rider“ кој ќе овозможи непреќината комуникација ( макс. далечина до 1.9км ) помеѓу двајца или повеќе возачи од една група.",
                        "itemsList" => [
                            "Дополнителен Сет Светла",
                            "„Shift Assist“",
                            "Мониторинг на Притисок во Пневматици",
                            "Sena 50S Систем за Комуникација"
                        ],
                        "image1" => [
                            "src" => "/images/adventure/tiger1200GT/tiger1200GTAccess5.avif",
                            "alt" => "Tiger 1200 Technology"
                        ],
                        "image2" => [
                            "src" => "/images/adventure/tiger1200GT/tiger1200GTAccess6.avif",
                            "alt" => "Tiger 1200 Technology"
                        ]
                    ],
                    [
                        "title" => "Комфорт",
                        "desc" => "Возете подолго без разлика на временските услови. Tiger 1200 серијата уште од продукциката линија е една од најкомфортнине серии на мотори, но дополнително тука се и дополнителни аксесоари кои ќе додадат уште малку луксуз и комфорт додека возите и низ нај екстремните површини. Широката палета на седишта вклучува седишта со греачи, таканаречени ниски седишта (седишта кои се за некој милиметар пониско монтирани од нормалните со цел да овозможат одличен допир на пониските возачи со земјиното тло). Дополнителното мало ветробранско стакло се монтира на врвот на главното ветробранско стакло и го турка турбулентниот воздух подалеку од возачот и е идеален аксесоар за повисоките возачи. Со цел да се овозможи посигурна и полесна возачка позиција Tiger 1200 серијата на мотори е опремена со алуминиумски педали за нозе. Истите се доволно широки и изгравирани со цел да нема несакани лизгања на нозете.",
                        "itemsList" => [
                            "Греачи на Седишта",
                            "Дифузер за Ветробранско Стакло",
                            "Алуминиумски Педали за Нозе"
                        ],
                        "image1" => [
                            "src" => "/images/adventure/tiger1200GT/tiger1200GTAccess7.avif",
                            "alt" => "Tiger 1200 Comfort"
                        ],
                        "image2" => [
                            "src" => "/images/adventure/tiger1200GT/tiger1200GTAccess8.avif",
                            "alt" => "Tiger 1200 Comfort"
                        ]
                    ]
                ]
            ],
            "shortSpecInfo" => [
                "info1" => "1,160 cc T-plane мотор",
                "info2" => "Мотор со високи перформанси",
                "info3" => "3 години гаранција"
            ],
            "gallery" => [
                "modelImage" => [
                    "src" => "/images/adventure/tiger1200GtModel.png",
                    "alt" => "Tiger 1200 Gt Range Model Image"
                ],
                "subFamilyHeroVideo" => [
                    "src" => "/images/adventure/tiger1200GT/tiger1200GTHeroVideo.webm",
                    "alt" => "Tiger Sport 1200 GT Range Hero Image"
                ],
                "subFamilyHeroImageMobile" => [
                    "src" => "/images/adventure/tiger1200GT/tiger1200SubfamilyHeroMobile.avif",
                    "alt" => "Tiger Sport 1200 GT Range Hero Image"
                ],
                "subFamilyTopSectionImage" => [
                    "src" => "/images/adventure/tiger1200GT/tiger1200GTTopSection.avif",
                    "alt" => "Tiger Sport 1200 GT Range Top-Section Image"
                ],
                "subFamilyTopSectionBGImage" => [
                    "src" => "/images/adventure/tiger1200GT/tiger1200GTTopSectionBG.avif",
                    "alt" => "Tiger Sport 1200 GT Range Top-Section Image"
                ]
            ]
        ];

        $subFamAdventureDataFive = [
            "subFamilyName" => "tiger-1200-rally",
            "familyType" => "adventure",
            "title" => "Tiger 1200 Rally",
            "price" => 22590,
            "url" => "/motorcycles/adventure/tiger-1200-gt",
            "specs" => [
                [
                    "desc" => "К.ЕК Мотор",
                    "data" => 1160
                ],
                [
                    "desc" => "PS Коњски Сили",
                    "data" => 150
                ],
                [
                    "desc" => "NM. Обртен Момент",
                    "data" => 130
                ],
                [
                    "desc" => "Години Гаранција",
                    "data" => "3"
                ]
            ],
            "heroSlogans" => ["оживеј", "ја", "авантурата"],
            "subFamilyPageInfo" => [
                "topSection" => [
                    "title" => "Откриј ја Авантурата",
                    "desc" => "Изграден за секаков пат. Најновиот авантуристички шампион ве води низе светот, низ пустина и совладува планини.",
                    "subtitle" => "Новиот репер за авантури. Нај-возбудливиот нај-способниот, комфортен и версатилен Tiger 1200 мотор досега."
                ],
            ],
            "youtubeVideo" => "https:://www.youtube.com/embed/-B7HDawi2i4",
            "engineTransmission" => [
                [
                    "title" => "Мотор",
                    "desc" => "12 вентили, 2EEK,3-цилиндарски мотор / водно ладењe "
                ],
                [
                    "title" => "капацитет",
                    "desc" => "1160cc"
                ],
                [
                    "title" => "диаметар",
                    "desc" => "90.0 mm"
                ],
                [
                    "title" => "рута",
                    "desc" => "60.7 mm"
                ],
                [
                    "title" => "компресија",
                    "desc" => "13.2 =>1"
                ],
                [
                    "title" => "Мах. Коњски Сила",
                    "desc" => "150PS @ 9,000rpm (100PS во програм за дожд)"
                ],
                [
                    "title" => "Мах. Обртен Момент",
                    "desc" => "130 Nm @ 7,000 rpm"
                ],
                [
                    "title" => "Систем за убризгување",
                    "desc" => "Sequential multi-point electronic injection with electronic throttle"
                ],
                [
                    "title" => "Систем за Издувни гасови",
                    "desc" => "3 во 1 не-раѓосувачки челик - скриен главен катализатор и странично монтиран финален катализатор"
                ],
                [
                    "title" => "Финална Трансмисија",
                    "desc" => "Axis"
                ],
                [
                    "title" => "Квачило",
                    "desc" => "Hydraulic, wet, multi-disc, sliding"
                ],
                [
                    "title" => "Менувачка Кутија",
                    "desc" => "6 брзини"
                ]
            ],
            "frame" => [
                [
                    "title" => "шасија",
                    "desc" => "тубуларна челична шасија / страничен заштитен алуминиумски рам со опција за лесно одстранување"
                ],
                [
                    "title" => "вилушка",
                    "desc" => "тубуларна челична конструкција / страничен заштитен алуминиумски рам со опција за лесно одстранување"
                ],
                [
                    "title" => "предно тркало",
                    "desc" => "19 x 3.0” алуминиумска легура "
                ],
                [
                    "title" => "задно тркало",
                    "desc" => "18 x 4.25” алуминиумска легура "
                ],
                [
                    "title" => "предна гума",
                    "desc" => "Metzeler Tourance, 120/70R19 (M/C 60V TL)"
                ],
                [
                    "title" => "задна гума",
                    "desc" => "Metzeler Tourance, 150/70R18 (M/C 70V TL)"
                ],
                [
                    "title" => "предна суспензија",
                    "desc" => "Showa 49mm inverted вилушки со полу-автоматско потискување"
                ],
                [
                    "title" => "задна суспензија",
                    "desc" => "Showa semi-active damping monoshock (200мм)."
                ],
                [
                    "title" => "предни сопирачки",
                    "desc" => "„Brembo M4.30 Stylema monobloc radial“ клешта , ABS, 320mm дупли дискови."
                ],
                [
                    "title" => "задна сопирачка",
                    "desc" => "„Brembo single piston“ клешта, ABS, 282mm диск. Посебна пумпа со посебен резервоар за задна сопирачка."
                ],
                [
                    "title" => "инструментна плочка",
                    "desc" => "7“ инструментален пакет во боја со My Triumph систем за поврзување"
                ]
            ],
            "dimension" => [
                [
                    "title" => "ширина на волан",
                    "desc" => "849 mm"
                ],
                [
                    "title" => "висина без ретровизори",
                    "desc" => "1436-1497 mm"
                ],
                [
                    "title" => "Висина на Седиште",
                    "desc" => "850-870 mm"
                ],
                [
                    "title" => "мегу-осовинско растојание ",
                    "desc" => "1560 mm"
                ],
                [
                    "title" => "Custer Corner",
                    "desc" => "24.0 º"
                ],
                [
                    "title" => "Trace",
                    "desc" => "120 v mm"
                ],
                [
                    "title" => "Тежина",
                    "desc" => "245 kg"
                ],
                [
                    "title" => "капацитет на резервоар",
                    "desc" => "20 L"
                ]
            ],
            "fuelConsumption" => [
                [
                    "title" => "Потрошувачка",
                    "desc" => "5.1l /100km"
                ],
                [
                    "title" => "CO2 загадување",
                    "desc" => "119 g/km EURO 5 Regulation (EU) No. 134/2014 Annex VIII"
                ]
            ],
            "service" => [
                [
                    "title" => "Сервисен Интервал",
                    "desc" => "16 000км или 12 месеци"
                ]
            ],

            "grayCarousell" => [
                [
                    "id" => "carouselItem1",
                    "title" => "Возбудлив Три Цилиндарски Мотор",
                    "desc" => "Три-цилиндричниот „T-Plane“ мотор нуди извонреден карактер, одлична контрола при мала и висока апликација на гас и дава чувство на инстантна респонзивности и одлични перформанси.",
                    "image" => "/images/adventure/tiger1200Rally/tiger1200RallyCaro1.avif"
                ],
                [
                    "id" => "carouselItem2",
                    "title" => "Специјално Изработени Тркала",
                    "desc" => "Секој модел од Tiger 1200 Rally серијата е опремен со 21“ предно и 18“ задно „tubuless“ тркало и дополнително ве мотивира за уште поекстремна авантура.",
                    "image" => "/images/adventure/tiger1200Rally/tiger1200RallyCaro2.avif"
                ],
                [
                    "id" => "carouselItem3",
                    "title" => "„Semi-Auto“ Суспензија",
                    "desc" => "Освојте ги и најтешките патеки и безгрижно завршете ги вашите „Off-Road“ авантури со најновата Showa (220мм) суспензија.",
                    "image" => "/images/adventure/tiger1200Rally/tiger1200RallyCaro3.avif"
                ],
                [
                    "id" => "carouselItem4",
                    "title" => "Трансформација во Управувањето",
                    "desc" => "Лесен, со ниско централно тежиште, прецизен и агилен како на „Off-Road“ така и на асфлатот.",
                    "image" => "/images/adventure/tiger1200Rally/tiger1200RallyCaro4.avif"
                ],
                [
                    "id" => "carouselItem5",
                    "title" => "Off-Road PRO мод на работа",
                    "desc" => "За да имате потполна контрола во сите временски и теренски услови, Rally моделите се опремени со „Off-Road Pro“ мод на работа.",
                    "image" => "/images/adventure/tiger1200Rally/tiger1200RallyCaro5.avif"
                ]
            ],
            "specNumbers" => [
                ["data" => "1160", "info" => "К.ЕК. Мотор"],
                ["data" => "150", "info" => "РЅ Коњски сили"],
                ["data" => "130", "info" => "Nm Максимален Обртен Момент"],
                ["data" => "3", "info" => "Годишна Гаранција"]
            ],

            "reasonsToDrive" => [
                "banner" => [
                    "image" => "/images/adventure/tiger1200GT/tiger1200GTReasonsBanner.avif"
                ],
                "infoText" => [
                    "title" => "Tiger 1200",
                    "desc" => "Triumph фамилијата располага со пет мотори од Tiger 1200 серијата и истите се наменети и изработени со помислата дека сите возачи се разнолики и имаат свои преференци. Па така тука се GT, GT Pro и GT Explorer моделите кои се наменети на асфалтните подлоги наспроти „all-terrain“ моделите како Rally Pro и Rally Explorer кои се за наменети за ентузијасти и сите оние кои ушиваат во авантура надвор од стандардните патишта. Tiger 1200 GT серијата е наменета да биде репер за сите оние кои бараат авантуристички мотор од голема зафатнина на моторот а тоа го постигнуваме со големата доза на технологија, како „Blind Spot Radar“ - технологија која ви го чува грбот во секој момент, со големиот левел на комфорт и лесното управува и на крај силната моќност на три-цилиндарските Triumph мотори."
                ],
                "reasons" => [
                    [
                        "title" => "Мотор",
                        "desc" => "Уникатниот, лесниот, препознатлив (1160cc) три-цилиндричен мотор на Triumph располага со многу капацитет, карактер и перформанси. Долго-годишните тестови и процеси на развој доведоа до произведување на оптимален три-цилиндарски мотор, кој располага со оние препознатливи предности на дво-цилиндарските мотори на низок обртен момент и богатите перформанси на три-цилиндарските мотори на високи обртаи. Tiger 1200 серијата нуди богат обртен момент и контрола при низок обртај со прецизност и предвидливост при додвање на гаста. Во моментот кога додавате гас и се наоѓате во онов среден обсен на обртаите на моторот три-цилиндарскиот аспект на овој мотор доаѓа до израз и понудава експлозивност и високи перформанси кои растат се до моментот кога стрелката влегува во црвено. Максималната јачина на моторот е 150 PS, 9PS повеќе од неговиот претходник.",
                        "image" => "/images/adventure/tiger1200GT/tiger1200GTReasons1.avif"
                    ],
                    [
                        "title" => "Тежина",
                        "desc" => "Со цел да оваа серија се доведе до идеално ниво на агилност, компактност и разноликост оваа серија мораше значително да ја намали својата вкупна тежина, но по цена да не се уништи нивота на комоција и самодоверба. Новиот 1160cc мотор, лесната тубуларна рамка и уникатното „Tri - Link“ раме парирано со суспензијата и сопирачките заштедија дури 25кг од вкупната тежина на моторот, што е 17кг помалку од вкупната тежина на нивниот претходник. На крај на се оваа Tiger серија понудува - врвен авантуристчки моторцикл со голема зафатнина на мотор кој е супериорно избалансиран, лесен за возење и нуди перфектни перформанси без никакво жртвување во поглед на комоција и леснотија за возење.",
                        "image" => "/images/adventure/tiger1200GT/tiger1200GTReasons2.avif"
                    ],
                    [
                        "title" => "Комфорт и Комоција",
                        "desc" => "Најчесто авантурите кои најмногу се паметат се оние кои се нај-исцрпувачки и за моторот и за возачот. Секој мотор од Tiger серијата е наменет за уживање од првиот до последниот километар па така секој мотор доаѓа со 3-годишна гаранција без разлика на поминати километри која ви овозможува повеќе возење и уживање наместо загриженост. Сите тестови направени врз оваа серија се наменети за да оваа серија испорача ултимативно „off-road“ искуство и авантура. Секој можен елемент на Tiger 1200 серијата почнувајки од лесната рамка па се до најситните компоненти се дизајнирани за максимална цврстина на моторот, стабилсност како и комоцијата на возачот.",
                        "image" => "/images/adventure/tiger1200GT/tiger1200GTReasons3.avif"
                    ],

                    [
                        "title" => "„Off-Road“ Специјалист",
                        "desc" => "Истражување на неоткриените терени е сон за многуте возачи, аванатуристи. Доколку и вие имате авантуристички и истражувачки аспирации, тогаш Tiger 1200 Rally Pro & Explorer моделите се тука за вас. Карактеристичното високо растојание до земјиното тло како и големите „Off-Road“ тркала и „tubuless“ Metzeler Karoo пневматици (21“ напред & 18“ назад) како и опционалните Michelin Anakee Wild пневматици се тука за да ве охрабрат на уште поголема авантура. Доколку на сето ова ја додадеме и перфектната возачка позиција, мотор кој испорачува извонредна сила и Showa суспензијата вие добивате ултимативен авантурист специјализиран за екстремни подлоги. Доколку вашата идеална авантура најмногу се базира на асфалтните подлоги, но понекогаш сакате и да избегате од нив тогаш Tiger GT Pro & GT Explorer се тука за да ви обезбедат многу возбудливи и безбедни километри.",
                        "image" => "/images/adventure/tiger1200GT/tiger1200GTReasons4.avif"

                    ],
                    [
                        "title" => "Техонологија",
                        "desc" => "Tiger 1200 серијата е една од технолошко најнапредните серии на пазарот. Истата е наменета како асистент на возачот и овозможува подолга, покомфортна и најважното најбезбедна авантура. Двата „Explorer“ модели се опремени со иновативната „Blind Spot Radar“ системот кој бурно го следи дејствието зад вас и во опсегот на вашите така наречени слепи точки. Изработен е во соработка со Continental и нуди „Blind Spot Assis“ и „Lane Change Assist“. Новата Showa суспензија автоматски се прилагодува на теживата на возачот, во секој момент е активна и го прави возењето полесно и покомфротно и сето ова на притисок на копче и без никаков алат во рацете. На клик на копче се достапни и 6 возачки мода, систем за пролизгување, ABS и опции за подесување на суспензијата. Целосниот „KEYLESS“ систем обезбедува побрзи застанување за точење на гориво како и ви овозможува да не ги вадите вашите ракавици на секое паркирање. Греачите на рачките и греачите на седиште за возач и сопатник (само кај Explorer моделите) се тука за да се чувствувате комотно и нудат повеќе опции на греење. 7“ TFT full-color дисплеј, адаптивните LED светла, „Hill-Assist“, USB влезовите, системот за мониторинг на притисокот во гумите и квачилото кое ви асистира се уште некои од дополнителните технолошки гаџети кои ви овозможуваат безгржно и комфортно патување и луксуз (некои од опциите не доаѓаат како стандард кај сите Tiger 1200 модели).",
                        "image" => "/images/adventure/tiger1200GT/tiger1200GTReasons5.avif"
                    ],
                    [
                        "title" => "Стил",
                        "desc" => "Суровиот изглед, цврстата става и „Tiger“ карактерот се тука да го измамат секој поглед и да го направат секој Tiger 1200 модел центар на вниманието. Tiger серијата еволуираше во поглед на ергономијата на возачот, перформансите што овозможи посигурно возење, повеќе самодоверба без губење на познатата комоција и стил на Tiger серијата. Висината до земјинотот тло исто така беше унапредена и ја направи Tiger 1200 серијата „off-road“ специјалист, но и оддаде свој допринос на изгледот и стилот на моторот. Како за крај тука е LED осветлувањето со дополнителни LED дневни светла кои оддаваат свој допир кога е во прашање не само излгедот туку и фукнционалноста.",
                        "image" => "/images/adventure/tiger1200GT/tiger1200GTReasons6.avif"

                    ]
                ]
            ],
            "accessory" => [
                "banner" => [
                    "image" => "/images/adventure/tiger1200GT/tiger1200GTAccessBanner.avif"
                ],
                "infoText" => [
                    "title" => "Конфигурирајте го вашиот мотор",
                    "desc" => "Tiger 1200 серијата е изработена да ве однесе каде и да посакате. Бидете сигурни дека безразлика на изборот кој ќе го направите и како и да посакате да го конфигурирате вашиот мотор, Triumph дизајнерите веќе го изработиле тоа парче."
                ],
                "accessoryTypes" => [
                    [
                        "title" => "Багаж ",
                        "desc" => "Моторите кои се дизајнирани за авантури бараат и соодветен екстра издржлив багаж. Дизајнирани во колаборација со светски познатиот бренд Givi, алуминиумската „Expedition“ серија и синтетичко/алуминиумската серија „Trekker“ нудат екстра издржливи багаж кој може да собере се што ви е потребно за безгрижна авантура. Големината и конфигурацијата на багажот се дизајнирани според силуетата на Tiger серијата (33 литри на десната и 46 литри капацитет на левата страна) заради издувната цевка на десната страна. Централниот багаж исто така варира кога е прашање на големина, па така можете да конфигурирате по ваш вкус и барање ( најголемата величина има доволно место за две кациги ) како и можност за додавање на дополнителен луксуз во форма на потпирач за совозачот. На располагање ви се и повеќето бои како „Stealth Black“ и „Classic Silver“. Дополнителни внатрешни торби за складирање и сортирање се на располагање кои ќе ги чуваат вашите сопствености суви и заштитени.",
                        "itemsList" => [
                            "Алуминиумски „Expedition“ Паниери",
                            "„Trekker“ Паниери"
                        ],
                        "image1" => [
                            "src" => "/images/adventure/tiger1200GT/tiger1200GTAccess1.avif",
                            "alt" => "Tiger 1200 Luggage"
                        ],
                        "image2" => [
                            "src" => "/images/adventure/tiger1200GT/tiger1200GTAccess2.avif",
                            "alt" => "Tiger 1200 Luggage"
                        ]
                    ],
                    [
                        "title" => "Заштита",
                        "desc" => "Долгите денови поминати на моторот, уморните мускули и деконцентрацијата некогаш доведуваат и до некој несакан пад. Сите сме биле таму. За наша и ваша среќа додавањето дополнителна заштита на вашиот Tiger 1200 никогаш не е била полесна. Секое парче е дизајнирано да комбинира функционалност и стил, додавајки уште повеќе трајност на вашиот Tiger 1200 како и уште посуров изглед. Падовите никако не смеат да бидат крај на вашите авантури напротив само малку одстранување од вашата цел. Рамовите/штитници на моторот додаваат заштита за долниот дел и страничниот дел на моторот и можат да бидат вградени поединечно или најдобро - заедно. Изработени од нераѓосувачки челик со тубуларна шасија штитниците за моторот ќе го заштитат моторот од било каков пад. Секој модел од Tiger 1200 серијата има повисоко растојание помеќу најдолниот дел од моторот и земјиното тло што нуди уште повеќе „Off-Road“ авантури. Со цел да го заштитиме долниот дел од моторот од камења и било какви тврди предмети, дизајниравме алуминиумска заштитна плоча која не само што штити туку и со нејзината мала тежина не додава на вкупната тежина на моторот. Со најголема дебелина од 4мм на клучните места ова е еден аксесоар кој мора да го имате. Претходно спомнатите камења и остри предмети можат многу лесно да наштетат на вашите светла. Дизајнирани претежно за „Off-Road“ услови поликарбонатските штитници за светла се лесни за вградувае и иделна заштита од надворешните услови.",
                        "itemsList" => [
                            "Заштитен Рам за Мотор",
                            "Заштита за картер (долен дел од мотор)",
                            "Заштита за Светло"
                        ],
                        "image1" => [
                            "src" => "/images/adventure/tiger1200GT/tiger1200GTAccess3.avif",
                            "alt" => "Tiger 1200 Safety"
                        ],
                        "image2" => [
                            "src" => "/images/adventure/tiger1200GT/tiger1200GTAccess4.avif",
                            "alt" => "Tiger 1200 Safety"
                        ]
                    ],
                    [
                        "title" => "Технологија Фокусирана на Возачот",
                        "desc" => "Без разлика на моделот, секој мотор од Tiger 1200 серијата е опремен со најновата технологија како стандард. Но на располагање ви се и додатни елементи доколку сакате уште повеќе да го подобрите нивото на технологија која вашиот мотор ќе ја поседува. За авантури во темните длабочини на природата тука е дополнителниот сет светла кои ќе ги осветлат дури и најтемните места кои ќе се најдат пред вас. Компактни и лесни и со одлична ширина и висина на светлосниот зрак овие светла се лесни за монтирање и демонтирање а се огромен чекор напред во осветлувањето на пат. Три-цилиндарскиот Triumph мотор е подкрепнат од одличен менувач кој како додаток го понудува „Shift Assist“ модулот кој обезбедува промена на степен на пренос без употреба на квачило. Тука е и (TPMS) „Tire Pressure Monitoring System“ систем кој одржува постојан мониторинг на притисокот на воздух во вашите пневматици. Овој систем ќе ви обезбеди посигурно возење и ќе ја одстрани потребата за преглед на вашиот мотор пред вашата авантура. Со цел да се обезбеди и позабавна авантура тука е и Sena системот за комуникација „rider-to-rider“ кој ќе овозможи непреќината комуникација ( макс. далечина до 1.9км ) помеѓу двајца или повеќе возачи од една група.",
                        "itemsList" => [
                            "Дополнителен Сет Светла",
                            "„Shift Assist“",
                            "Мониторинг на Притисок во Пневматици",
                            "Sena 50S Систем за Комуникација"
                        ],
                        "image1" => [
                            "src" => "/images/adventure/tiger1200GT/tiger1200GTAccess5.avif",
                            "alt" => "Tiger 1200 Technology"
                        ],
                        "image2" => [
                            "src" => "/images/adventure/tiger1200GT/tiger1200GTAccess6.avif",
                            "alt" => "Tiger 1200 Technology"
                        ]
                    ],
                    [
                        "title" => "Комфорт",
                        "desc" => "Возете подолго без разлика на временските услови. Tiger 1200 серијата уште од продукциката линија е една од најкомфортнине серии на мотори, но дополнително тука се и дополнителни аксесоари кои ќе додадат уште малку луксуз и комфорт додека возите и низ нај екстремните површини. Широката палета на седишта вклучува седишта со греачи, таканаречени ниски седишта (седишта кои се за некој милиметар пониско монтирани од нормалните со цел да овозможат одличен допир на пониските возачи со земјиното тло). Дополнителното мало ветробранско стакло се монтира на врвот на главното ветробранско стакло и го турка турбулентниот воздух подалеку од возачот и е идеален аксесоар за повисоките возачи. Со цел да се овозможи посигурна и полесна возачка позиција Tiger 1200 серијата на мотори е опремена со алуминиумски педали за нозе. Истите се доволно широки и изгравирани со цел да нема несакани лизгања на нозете.",
                        "itemsList" => [
                            "Греачи на Седишта",
                            "Дифузер за Ветробранско Стакло",
                            "Алуминиумски Педали за Нозе"
                        ],
                        "image1" => [
                            "src" => "/images/adventure/tiger1200GT/tiger1200GTAccess7.avif",
                            "alt" => "Tiger 1200 Comfort"
                        ],
                        "image2" => [
                            "src" => "/images/adventure/tiger1200GT/tiger1200GTAccess8.avif",
                            "alt" => "Tiger 1200 Comfort"
                        ]
                    ]
                ]
            ],
            "shortSpecInfo" => [
                "info1" => "1,160 cc T-plane мотор",
                "info2" => "Мотор со високи перформанси",
                "info3" => "3 години гаранција"
            ],
            "gallery" => [
                "modelImage" => [
                    "src" => "/images/adventure/tiger1200RallyModel.png",
                    "alt" => "Tiger 1200 Rally Range Model Image"
                ],
                "subFamilyHeroVideo" => [
                    "src" => "/images/adventure/tiger1200Rally/tiger1200RallyHeroVideo.webm",
                    "alt" => "Tiger 1200 Rally Range Hero Image"
                ],
                "subFamilyHeroImageMobile" => [
                    "src" => "/images/adventure/tiger1200Rally/tiger1200SubfamilyHeroMobile.avif",
                    "alt" => "Tiger Sport 1200 Rally Range Hero Image"
                ],
                "subFamilyTopSectionImage" => [
                    "src" => "/images/adventure/tiger1200Rally/tiger1200Rally.avif",
                    "alt" => "Tiger 1200 Rally Range Top-Section Image"
                ],
                "subFamilyTopSectionBGImage" => [
                    "src" => "/images/adventure/tiger1200Rally/tiger1200RallyTopSectionBG.avif",
                    "alt" => "Tiger 1200 Rally Range Top-Section Image"
                ]
            ]
        ];

        $subFamClassicsData = [
            "subFamilyName" => "speed-400",
            "familyType" => "classics",
            "title" => "Speed 400",
            "price" => 5690,
            "url" => "/motorcycles/classics/speed-400",
            "cc" => 400,
            "specs" => [
                [
                    "desc" => "ML",
                    "data" => 389
                ],
                [
                    "desc" => "Сериски Мотор",
                    "data" => "TR"
                ],
                [
                    "desc" => "NM. Обртен Момент",
                    "data" => 37.5
                ],
                [
                    "desc" => "Аксесоари",
                    "data" => "20+"
                ]
            ],
            "shortDesc" => "Граден по скици од неговите предци, Speed 400 во својата ДНК го поседува уникатниот 'roadster' дизајн на Triumph.",
            "heroSlogans" => ["Пронајдете ја", "вашата", "слобода"],
            "subFamilyPageInfo" => [
                "topSection" => [
                    "title" => "Автентичност",
                    "desc" => "Speed 400 - иконата на Triumph, перфектен стил, перформанси и лидер во класата по квалитет..",
                    "subtitle" => "Преубав, агилен, версатилен и изграден со највисоки стандарди, Speed 400 ги поставува границите во својата категорија"
                ],
            ],
            "youtubeVideo" => "https:://www.youtube.com/embed/omKdaaynGCg",
            "engineTransmission" => [
                [
                    "title" => "Мотор",
                    "desc" => "4 вентили, 2EEK, еден цилиндар, водно ладење"
                ],
                [
                    "title" => "капацитет",
                    "desc" => "398.15 cc"
                ],
                [
                    "title" => "диаметар",
                    "desc" => "89.0 mm"
                ],
                [
                    "title" => "рута",
                    "desc" => "64.0 mm"
                ],
                [
                    "title" => "компресија",
                    "desc" => "12 =>1"
                ],
                [
                    "title" => "Мах. Коњски Сила",
                    "desc" => "40 PS @ 8,000 rpm"
                ],
                [
                    "title" => "Мах. Обртен Момент",
                    "desc" => "37.5 Nm @ 6,500 rpm"
                ],
                [
                    "title" => "Систем за убризгување",
                    "desc" => "Bosch electronic fuel injection with electronic throttle control"
                ],
                [
                    "title" => "Систем за Издувни гасови",
                    "desc" => "Stainless double shell head system with stainless steel silencer"
                ],
                [
                    "title" => "Финална Трансмисија",
                    "desc" => "X-ring chain"
                ],
                [
                    "title" => "Квачило",
                    "desc" => "Liquid, multi-disc with glide assist"
                ],
                [
                    "title" => "Менувачка Кутија",
                    "desc" => "6 брзини"
                ]
            ],
            "frame" => [
                [
                    "title" => "шасија",
                    "desc" => "Spine/perimeter hybrid - тубуларна челична шасија"
                ],
                [
                    "title" => "вилушка",
                    "desc" => "лиеана алуминиумска легура"
                ],
                [
                    "title" => "предно тркало",
                    "desc" => "17 x 3‘ (10 краци) - лиен алуминиум"
                ],
                [
                    "title" => "задно тркало",
                    "desc" => "17 x 3‘ (10 краци) - лиен алуминиум"
                ],
                [
                    "title" => "предна гума",
                    "desc" => "110/70 R17"
                ],
                [
                    "title" => "задна гума",
                    "desc" => "150/60 R17"
                ],
                [
                    "title" => "предна суспензија",
                    "desc" => "Big Piston Inverted Fork 43mm Wheel travel 140 mm"
                ],
                [
                    "title" => "задна суспензија",
                    "desc" => "RSU gas monoshock (со посебен резервоар) - preload adjustment - 130 mm"
                ],
                [
                    "title" => "предни сопирачки",
                    "desc" => "300mm диск, 4 клипна клешта, ABS"
                ],
                [
                    "title" => "задна сопирачка",
                    "desc" => "230mm диск, ABS"
                ],
                [
                    "title" => "инструментна плочка",
                    "desc" => "Аналоген брзинометар со мулти функционален LED дисплеј"
                ]
            ],
            "dimension" => [
                [
                    "title" => "ширина на волан",
                    "desc" => "814 mm"
                ],
                [
                    "title" => "висина без ретровизори",
                    "desc" => "1084 mm"
                ],
                [
                    "title" => "Висина на Седиште",
                    "desc" => "790 mm"
                ],
                [
                    "title" => "мегу-осовинско растојание ",
                    "desc" => "1377 mm"
                ],
                [
                    "title" => "Custer Corner",
                    "desc" => "24.6 º"
                ],
                [
                    "title" => "Trace",
                    "desc" => "102 mm"
                ],
                [
                    "title" => "Тежина",
                    "desc" => "170 kg"
                ],
                [
                    "title" => "капацитет на резервоар",
                    "desc" => "13 L"
                ]
            ],
            "fuelConsumption" => [
                [
                    "title" => "Потрошувачка",
                    "desc" => "3.5L/100km (80.7mpg)"
                ],
                [
                    "title" => "CO2 загадување",
                    "desc" => "83.8 g/km EURO 5 CO2"
                ]
            ],
            "grayCarousell" => [
                [
                    "id" => "carouselItem1",
                    "title" => "Стил",
                    "desc" => "Со безвременската „Triumph roadster“ силуета, рекласиран и минималистички стил и луксузни финиши, Speed 400 серијата поставуа нови стандради во класата.",
                    "image" => "/images/classics/speed400/speed400GrayCaro1.avif"
                ],
                [
                    "id" => "carouselItem2",
                    "title" => "Максимална Контрола на Пат",
                    "desc" => "Лесни, флексибилни и динамични - Speed 400 серијата ги воведува самодоверба кај возачот и со себе носи едно ново ниво на забава.",
                    "image" => "/images/classics/speed400/speed400GrayCaro2.avif"

                ],
                [
                    "id" => "carouselItem3",
                    "title" => "Карактер",
                    "desc" => "Автентилна Triumph силуета, управување, перформанси и звук. Speed 400 е се што ви треба.",
                    "image" => "/images/classics/speed400/speed400GrayCaro3.avif"

                ],
                [
                    "id" => "carouselItem4",
                    "title" => "Квалитет",
                    "desc" => "Дизајниран по високи стандарди, Speed 400 серијата комбинира одлични спецификации со премиум завршница.",
                    "image" => "/images/classics/speed400/speed400GrayCaro4.avif"

                ],
                [
                    "id" => "carouselItem5",
                    "title" => "Вредност",
                    "desc" => "Високи спецификации, долг сервисен период и мали трошоци за одржување - Speed 400 серијата е од голема вредност.",
                    "image" => "/images/classics/speed400/speed400GrayCaro5.avif"

                ]
            ],

            "specNumbers" => [
                ["data" => "398", "info" => "cc Мотор"],
                ["data" => "37.5", "info" => "Nm обртен момент"],
                ["data" => "TR", "info" => "Мотор Серија"],
                ["data" => "20+", "info" => "Аксесоари"]
            ],
            "reasonsToDrive" => [
                "banner" => [
                    "image" => "/images/classics/speed400/speed400ReasonsBanner.avif"
                ],
                "infoText" => [
                    "desc" => "Speed 400 серијата го носи она класично/модерно Triumph искуство до уште повеќе возачи отколку било кога. Дизајниран за да ги прави горди неговите Triumph претходници а опремен со најновата технологија, новата TR серија на едно-цилиндрични мотори е дизајнирана да произведе препознатлива сила со цел да се постигнат врвни перформанси. Неутралната а сепак респонзивна возачка позиција со ниското седиште и „roadster“ рамката, врвната суспензија и сопирачки се тука за да ја достават онаа препознатлива инспиративна и самодоверлива агилност, која им овозможува на возачите да се поврзат со подлогата и да уживаат во моментите поминати со Speed 400. Перфектните финиши и деталите се евидентен показател дека Speed 400 серијата дефинитивно припаѓа на Triumph фамилијата."
                ],
                "reasons" => [
                    [
                        "title" => "Автентичен Triumph Стил",
                        "desc" => "Дизајниран и изработен во Хинкли, Велика Британија, Speed 400 серијата беше изработена со истата доза на внимание како и секој друг Triumph мотор. Овој мотор комбинира безвременска ДНК со модерни перформанси. Препознатливата Triumph силуета и класичниот профил на моторот ги величи претходниците на Speed 400 серијата кои се веќе Triumph легенди. Speed 400 серијата е бленд помеѓу ретро изгледот, модерни перформанси и уникатниот шарм на Triumph.",
                        "image" => "/images/classics/speed400/speed400Reasons1.avif"
                    ],
                    [
                        "title" => "Потполно Нов Мотор",
                        "desc" => "Потполно новиот (398cc) моно цилиндричен моторт комбинира класичен Triumph изглед и модерна тахнологија и испорачува 40hp максимална јачина и 37.5Nm макссимален обртен момент. Техничките детали набројуваат - 4 вентили, 2EEK глава и радалица која е перфектно балансирана за да се оптимизира балансот на моторот при возење на ниски брзини. Париран со 6 брзински менувач кој нуди брзи и прецизни промени на степенот ја дава перфектната комбинација која заедно испорачува карактер и одлични перформанси.",
                        "image" => "/images/classics/speed400/speed400Reasons2.avif"

                    ],
                    [
                        "title" => "Направен за Забава",
                        "desc" => "Speed 400 серијата и изготвена за забава. Комфортната воачка позиција дава иделен баланс и одлично ја распоредува тежива врз целиот мотор и притоа дава извонредно чувство кога го возите моторот. Speed 400 серијата е наменета за сите возачи без разлика на нивната висина. Благодарејки на ниското седиште (790мм) Speed 400 дополнително се прилагодува кон пониските возачи и дава чувство на самодоверба и лесно маневрирање.",
                        "image" => "/images/classics/speed400/speed400Reasons3.avif"

                    ],
                    [
                        "title" => "Технологија",
                        "desc" => "Speed 400 серијата е парирана со технологија направена за го унапреди вашето патување. Паметното квачило е тука да ви асистира при секое запирање и тргнување со што го намалува заморот. ABS системот ви буди самодоверба при сопирање и при влез во свиоците како и системот за пролизгување кој ве чува при излез од свиоците. Speed 400 серијата е опремена со целосно LED осветлување со активни дневни LED светла кои гордо го носат Triumph амблемот. Инструментната плоча се состои од два дела и се контролира преку интуитивни команди и ролери на воланот. ",
                        "image" => "/images/classics/speed400/speed400Reasons4.avif"

                    ],
                    [
                        "title" => "Висока Спецификација",
                        "desc" => "Speed 400 серијата е опремена со периферни елементи од висок стандард со цел да се комплетира еден одличен пакет комбиниран од сигурност и уживање. Ексклузивните 10 кракни тркала се парирани со одлични пневматици од познати брендови, 43мм суспензија и лесното подесување на задната суспензија гарантира агилност и одлично управување. Дво-клипните сопирачки произведуваат одлична сопирачка сила и одлично чувство, додека ABS системот се грижи за вашата сигурност.",
                        "image" => "/images/classics/speed400/speed400Reasons5.avif"

                    ]
                ]
            ],
            "accessory" => [
                "banner" => [
                    "image" => "/images/classics/speed400/speed400AccesBanner.avif"
                ],
                "infoText" => [
                    "desc" => "На располагање ви е селекција од преку 20 оригинални Triupmh аксесоари за оваа серија на мотори. Аксесоарите кои ќе ги додадете може да бидат додадени на вашиот мотор во фабриката. Aксесоарите се дизајнирани од истиот тим кој го креираше Speed 400 и доаѓаат со две-годишна гаранција."
                ],
                "accessoryTypes" => [
                    [
                        "title" => "Стил и Комфорт",
                        "desc" => "Choose from a range of parts that will make the Speed ​​400 just the way you want it. Direct replacement bullet turn signals a subtle new look and premium touch with their satin black body and machined aluminum bezels.. Or maybe you want to remodel the tank with different knee pads? A comfortable saddle with a stitched and quilted finish makes a style statement and, together with plug and play heated grips, offers luxury on longer rides..",
                        "itemsList" => [
                            "Bullet type LED flash",
                            "Штитници за колена",
                            "Комфортно Седло"
                        ],
                        "image1" => [
                            "src" => "/images/classics/speed400/speed400SAccesoryStyleImage1.avif",
                            "alt" => "Speed 400 On The Road"
                        ],
                        "image2" => [
                            "src" => "/images/classics/speed400/speed400AccessoryStyleImage2.avif",
                            "alt" => "Speed 400 PaintJob"
                        ]
                    ],
                    [
                        "title" => "Багаж",
                        "desc" => "A full range of Speed ​​400-specific luggage has been created to add some practicality to the fun. The Speed ​​400 is the perfect touring bike, and outfitting it to handle your load really couldn't be easier. Choose from sturdy side or rigid and semi-rigid panniers, each with their own special mounting system or, for those who prefer to travel light, a simple luggage rack, nylon tank bag or roll-on bag could be the perfect choice .",
                        "itemsList" => [
                            "Цврсти Куфери за Багаж",
                            "Држач за Багаж",
                            "Најлонска торба за на резервоар",
                            "Најлонска Торба Roll "
                        ],
                        "image1" => [
                            "src" => "/images/classics/speed400/speed400AccessoryLuggageImage.avif",
                            "alt" => "Speed 400 Luggage"
                        ]
                    ],
                    [
                        "title" => "Заштита ",
                        "desc" => "Both your protection from the elements and that of the Speed ​​400 have been taken care of. A visor with a special fitting kit is also available to deflect the wind to reduce rider fatigue on longer rides. Easy to fit and with style to match, it's a must-have addition for distance riders.To keep the Speed ​​400 out of harm's way on rougher roads, there's an aluminum skid plate, a radiator guard and a headlight mask, which comes with its own bezel for easy fitting, and offers excellent protection from rocks and debris. All-weather riders may want to add the mudguard kit which consists of front and rear mudguard extensions and a rear wing. These combine nicely to protect against water spray and extend the life of the rear shock in extreme conditions.Upper and lower engine guards are also available — these provide excellent protection against drops and spills, a must-have addition for city and country driving.",
                        "itemsList" => [
                            "Гелатин",
                            "Заштита за ладник",
                            "Решетка за светло",
                            "Алуминиумска заштита",
                            "Заштита од Кал",
                            "Цевки за Заштита на Мотор (Горни и Долни)"
                        ],
                        "image1" => [
                            "src" => "/images/classics/speed400/speed400AccessoryProtectionImage1.avif",
                            "alt" => "Speed 400 Head"
                        ],
                        "image2" => [
                            "src" => "/images/classics/speed400/speed400AccessoryRadiatorProtection.avif",
                            "alt" => "speed 400 Accessory Radiator Protection"
                        ]
                    ]
                ]
            ],
            "shortSpecInfo" => [
                "info1" => "398cc TR Мотор",
                "info2" => "Сервис Интервал 16,000 км"
            ],
            "gallery" => [
                "modelImage" => [
                    "src" => "/images/classics/speed400CarnivalRed.png",
                    "alt" => "Speed 400 Range Model Image"
                ],
                "subFamilyHeroImage" => [
                    "src" => "/images/classics/speed400/speed400HeroSubFamilyImage.avif",
                    "alt" => "Speed 400"
                ],
                "subFamilyTopSectionImage" => [
                    "src" => "/images/classics/speed400/speed400TopSectionImage.avif",
                    "alt" => "Speed 400 Top Section Image"
                ],
                "subFamilyTopSectionBGImage" => [
                    "src" => "/images/classics/speed400/speed400TopSectionImageBG.avif",
                    "alt" => "Speed 400 Top Section Image BG"
                ]
            ]
        ];

        $subFamClassicsDataTwo = [
            "subFamilyName" => "scrambler-400-x",
            "familyType" => "classics",
            "title" => "Scrambler 400 X",
            "price" => 6390,
            "url" => "/motorcycles/classics/scrambler-400-x",
            "cc" => 400,
            "youtubeVideo" => "https:://www.youtube.com/embed/moLlIk90Ea",
            "shortDesc" => "Со агилно управување, водечки перформанси во класата и луксузна завршница, Scrambler 400 X е „кул“ и способен за секаков предизвик.",
            "heroSlogans" => ["Стартувајте ја", "вашата", "Авантура"],
            "specs" => [
                [
                    "desc" => "ML",
                    "data" => 389
                ],
                [
                    "desc" => "Сериски Мотор",
                    "data" => "TR"
                ],
                [
                    "desc" => "NM. Обртен Момент",
                    "data" => 37.5
                ],
                [
                    "desc" => "Аксесоари",
                    "data" => "20+"
                ]
            ],
            "subFamilyPageInfo" => [
                "topSection" => [
                    "title" => "Пристапете Секаде",
                    "desc" => "Прекрасно избалансиран, флексибилен без напор. Scrambler 400 X е направен за сите возачи и сите терени",
                    "subtitle" => "Безвременски Triumph Стил, Модерни Способности. Авантуристички настроениот Scrambler 400  додава забава на сите ваши авантури"
                ],
            ],
            "engineTransmission" => [
                [
                    "title" => "Мотор",
                    "desc" => "4 вентили, 2EEK, еден цилиндар, водно ладење"
                ],
                [
                    "title" => "капацитет",
                    "desc" => "398.15 cc"
                ],
                [
                    "title" => "диаметар",
                    "desc" => "89.0 mm"
                ],
                [
                    "title" => "рута",
                    "desc" => "64.0 mm"
                ],
                [
                    "title" => "компресија",
                    "desc" => "12 =>1"
                ],
                [
                    "title" => "Мах. Коњски Сила",
                    "desc" => "40 PS @ 8,000 rpm"
                ],
                [
                    "title" => "Мах. Обртен Момент",
                    "desc" => "37.5 Nm @ 6,500 rpm"
                ],
                [
                    "title" => "Систем за убризгување",
                    "desc" => "Bosch electronic fuel injection with electronic throttle control"
                ],
                [
                    "title" => "Систем за Издувни гасови",
                    "desc" => "Stainless double shell head system with stainless steel silencer"
                ],
                [
                    "title" => "Финална Трансмисија",
                    "desc" => "X-ring chain"
                ],
                [
                    "title" => "Квачило",
                    "desc" => "Liquid, multi-disc with glide assist"
                ],
                [
                    "title" => "Менувачка Кутија",
                    "desc" => "6 брзини"
                ]
            ],
            "frame" => [
                [
                    "title" => "шасија",
                    "desc" => "Spine/perimeter hybrid - тубуларна челична шасија"
                ],
                [
                    "title" => "вилушка",
                    "desc" => "лиеана алуминиумска легура"
                ],
                [
                    "title" => "предно тркало",
                    "desc" => "19 x 2.5‘ (10 краци) - лиен алуминиум"
                ],
                [
                    "title" => "задно тркало",
                    "desc" => "17 x 3.5‘ (10 краци) - лиен алуминиум"
                ],
                [
                    "title" => "предна гума",
                    "desc" => "100/90-19"
                ],
                [
                    "title" => "задна гума",
                    "desc" => "140/80-17"
                ],
                [
                    "title" => "предна суспензија",
                    "desc" => "Big Piston Inverted Fork 43mm Wheel travel 140 mm"
                ],
                [
                    "title" => "задна суспензија",
                    "desc" => "RSU gas monoshock (со посебен резервоар) - preload adjustment - 130 mm"
                ],
                [
                    "title" => "предни сопирачки",
                    "desc" => "320mm диск, 4 клипна клешта, ABS"
                ],
                [
                    "title" => "задна сопирачка",
                    "desc" => "230mm диск, ABS"
                ],
                [
                    "title" => "инструментна плочка",
                    "desc" => "Аналоген брзинометар со мулти функционален LED дисплеј"
                ]
            ],
            "dimension" => [
                [
                    "title" => "ширина на волан",
                    "desc" => "901 mm"
                ],
                [
                    "title" => "висина без ретровизори",
                    "desc" => "1169 mm"
                ],
                [
                    "title" => "Висина на Седиште",
                    "desc" => "835 mm"
                ],
                [
                    "title" => "мегу-осовинско растојание ",
                    "desc" => "1,418 mm"
                ],
                [
                    "title" => "Custer Corner",
                    "desc" => "23.2º"
                ],
                [
                    "title" => "Trace",
                    "desc" => "108 mm"
                ],
                [
                    "title" => "Тежина",
                    "desc" => "179 kg"
                ],
                [
                    "title" => "капацитет на резервоар",
                    "desc" => "13 L"
                ]
            ],
            "fuelConsumption" => [
                [
                    "title" => "CO2 загадување",
                    "desc" => "83.8 g/km EURO 5 CO2"
                ]
            ],
            "service" => [
                [
                    "title" => "Сервисен Интервал",
                    "desc" => "16,000 km / 12 месеци"
                ]
            ],
            "grayCarousell" => [
                [
                    "id" => "carouselItem1",
                    "title" => "Стил",
                    "desc" => "Непогрешлив Triumph Scrambler DNA со модерен прилагоден стил, теренски карактер и луксузна завршница што поставува нов стандард во класата.",
                    "image" => "/images/classics/scrambler400X/scrambler400XGrayCaro1.avif"
                ],
                [
                    "id" => "carouselItem2",
                    "title" => "Прекрасно Управување И Однесување на Патиштата",
                    "desc" => "Ексклузивната рамка Scrambler 400 X и импозантната ергономија нудат максимална доверба и контрола на возачот.",
                    "image" => "/images/classics/scrambler400X/scrambler400XGrayCaro2.avif"
                ],
                [
                    "id" => "carouselItem3",
                    "title" => "Карактер",
                    "desc" => "Scrambler 400 X — насочено управување на сите патишта, заедно со можностите за совпаѓање",
                    "image" => "/images/classics/scrambler400X/scrambler400XGrayCaro3.avif"
                ],
                [
                    "id" => "carouselItem4",
                    "title" => "Квалитет",
                    "desc" => "Прекрасно изработен со модерен прилагоден стил, врвен финиш во класата - иконската ДНК Scrambler на Triumph е длабока.",
                    "image" => "/images/classics/scrambler400X/scrambler400XGrayCaro4.avif"
                ],
                [
                    "id" => "carouselItem5",
                    "title" => "Вредност",
                    "desc" => "Со најдобри спецификации во класата и ниски трошоци за работа, Scrambler 400 X претставува непобедлива вредност.",
                    "image" => "/images/classics/scrambler400X/scrambler400XGrayCaro5.avif"
                ]
            ],
            "specNumbers" => [
                ["data" => "398", "info" => "cc Мотор"],
                ["data" => "37.5", "info" => "Nm обртен момент"],
                ["data" => "TR", "info" => "Мотор Серија"],
                ["data" => "20+", "info" => "Аксесоари"]
            ],
            "reasonsToDrive" => [
                "banner" => [
                    "image" => "/images/classics/scrambler400X/scrambler400XReasonsBanner.avif"
                ],
                "infoText" => [
                    "desc" => "Најновиот член на класичната Scramlber серија на Triumph е токму Scrambler 400 X, со мисија да го однесе Triumph духот кај новите генерации. Со безвременската Scrambler силуета, Scramler 400 X серијата ја нуди оној безгрешен Triumph стил со премиум финиши и лидерски спецификации во класата. Моно-цилиндричниот мотор произведува класичен Triumph карактер и перформанси. Импозантната возачка позиција со широк волан комбинирано со специфичната Scrambler рамка произведува комфорт на патиштата и надвор од нив. Врвна суспензија (150мм) и сопирачки се тука за да ве охрабрат и да ви изнудат ушта малку повеќе самодоверба знаејки дека ве чуваат во секој момент."
                ],
                "reasons" => [
                    [
                        "title" => "Потполно Нов Мотор",
                        "desc" => "Потполно новиот (398cc) моно цилиндричен моторт комбинира класичен Triumph изглед и модерна тахнологија и испорачува 40hp максимална јачина и 37.5Nm макссимален обртен момент. Техничките детали набројуваат - 4 вентили, 2EEK глава и радалица која е перфектно балансирана за да се оптимизира балансот на моторот при возење на ниски брзини. Париран со 6 брзински менувач кој нуди брзи и прецизни промени на степенот ја дава перфектната комбинација која заедно испорачува карактер и одлични перформанси.",
                        "image" => "/images/classics/scrambler400X/scrambler400XReasons1.avif"

                    ],
                    [
                        "title" => "Забава за Сите",
                        "desc" => "Лесен и со тенка половина, Scrambler 400 X е извонредно агилен и силен. Седиштето од 835мм висина и тенкиот струк на моторот обезбедува командантна возачка позиција која го намалува растојанието помеѓу земјиното тло и половината на возачот. Со тежина од 178 килограми, Scrambler 400 X е дизајниран за чесно маневрирање било каде. Нежниот мотор, лесната рамка и одличните суспензија и сопирачки доведуваат до агилен и версатилен мотор кој инспирира самодоверба за сите возачи.",
                        "image" => "/images/classics/scrambler400X/scrambler400XReasons2.avif"

                    ],
                    [
                        "title" => "Карактеристики",
                        "desc" => "Scrambler 400 X серијата е опремена со лесни алуминиумски тркала, 17 инчи назад и поголемо 19 инчно тркало напред парирани со пневматици од најпознатите брендови. Широкиот волан и исправената става на моторот оддаваат перфектно чувство на контрола при седечка но и при стоечка позиција. Рамни Scrambler педала за нозе со гуми кои лесно се одстрануваат даваат екстра сигурно дека нема да се лизнете од моторот.",
                        "image" => "/images/classics/scrambler400X/scrambler400XReasons3.avif"
                    ],
                    [
                        "title" => "Модерна Технологија",
                        "desc" => "Scrambler 400 X серијата е парирана со технологија наменета да го подобри вашето искуство. Ова вклучува квачило кое ви асистира и ве одмара при многуте промени на степенот на пренос. Квачилото е дизајнирано да ги избегнува оние моменти на подскокну вање на задното тркало при нагло спуптање на степенот на пренос што додава уште повеќе самодоверба и сугурност. Scrambler 400 X серијата е парирано со целосно LED осветлување кое гордо го носи Triumph логото и со дневни LED светла и тенки трепкачи. Беспрекорна инструментна табла поделена во два дела го краси воланот на Scrambler 400 X и без никакви маки ги прикажува сите потребни информации до возачот. На располагање е и USB-C порта за напојување за телефони и навигациски уреди како и за дополнителни аксесоари како греачи на рачките.",
                        "image" => "/images/classics/scrambler400X/scrambler400XReasons5.avif"

                    ]
                ]
            ],
            "accessory" => [
                "banner" => [
                    "image" => "/images/classics/scrambler400X/scrambler400XAccessoryBanner.avif"
                ],
                "infoText" => [
                    "desc" => "Scrambler 400 X серијата поседува одлична опрема и спецификации како стандард но сепа на располагање ви се дополнителни 20 оригинлани Triumph аксесоари кои ќе го одделат вашиот мотор од другите. Дизајнирани од истите дизајнери и инжињери како и самиот Scrambler 400 X и подкрепнати со двегодишна гаранција без разлика на поминатите километри, бидете сигурни дека ќе најдете некое парче по ваш вкус."
                ],
                "accessoryTypes" => [
                    [
                        "title" => "Стил и Комфорт",
                        "desc" => "Стилизирајте го вашиот Scrambler 400 X со LED трапкачите во форма на куршум. Машински изработени од алуминиум од црна сатенска боја додаваат премиум допир и нов изглед. Штитникот за резервоар додава стил и заштита од гребаници на резервоарот додека возачот и сопатникот патуваат комфортно со луксузните Triumph седишта. ",
                        "itemsList" => [
                            "LED трепкачи во форма на куршум",
                            "Штитни=к за Резервоар",
                            "Комфортно седиште за возач и сопатник"
                        ],
                        "image1" => [
                            "src" => "/images/classics/scrambler400X/scrambler400ΧAccess1.avif",
                            "alt" => "Scrambler 400 X"
                        ],
                        "image2" => [
                            "src" => "/images/classics/scrambler400X/scrambler400ΧAccess2.avif",
                            "alt" => "Scrambler 400 X"
                        ]
                    ],
                    [
                        "title" => "Багаж",
                        "desc" => "Целосна палета на ексклузивен Triumph - Scrambler 400 X е дизајнирна и заработена са секоков вид авантура, од урбано движење до амбициозни авантури. Куфери кои целосно се вклопуваат во стилот и силуетата на Scrambler 400 X - секој од нив со сопствен држач за монтирање. Доколку сакате да патувате без додатна тежина на располагање ви стојат и мали торби за резервоар кои се монтираат за момент.",
                        "itemsList" => [
                            "Цврсти Куфери за Багаж",
                            "Држач за Багаж",
                            "Најлонска торба за на резервоар",
                            "Најлонска Торба Roll"
                        ],
                        "image1" => [
                            "src" => "/images/classics/scrambler400X/scrambler400ΧAccess3.avif",
                            "alt" => "Scrambler 400 X"
                        ]
                    ],
                    [
                        "title" => "Заштита",
                        "desc" => "Иако Scrambler 400 X серијата е добро заштитена од надворешните услови при „Off-Road“ авантури, но сепак тука е и палетата аксесоари за дополнителна заштита од надворешните услови. Цврст алуминиумски капак го штити долниот дел на моторот од несакани тврди предмети и дополнително додава „Off-Road“ изглед и стил. Заштитен рам за моторот дополнително го штити моторот од несакани падови.Ветробранско стакло со специјален рам за монтирање стои на располагање доколку ви треба одмор од несаканиот ветар во вашето лице при вашите долги авантури.",
                        "itemsList" => [
                            "Алуминиумска заштита",
                            "Заштитен Рам за Мотор",
                            "Ветробранско Стакло"
                        ],
                        "image1" => [
                            "src" => "/images/classics/scrambler400X/scrambler400ΧAccess4.avif",
                            "alt" => "Scrambler 400 X"
                        ],
                        "image2" => [
                            "src" => "/images/classics/scrambler400X/scrambler400ΧAccess5.avif",
                            "alt" => "Scrambler 400 X"
                        ]
                    ]
                ]
            ],
            "shortSpecInfo" => [
                "info1" => "398cc TR Мотор",
                "info2" => "Сервис Интервал 16,000 км"
            ],
            "gallery" => [
                "modelImage" => [
                    "src" => "/images/classics/scrambler400X/scrambler400XKhakiGreen.png",
                    "alt" => "Scrambler 400 X Range Model Image"
                ],
                "subFamilyHeroImage" => [
                    "src" => "/images/classics/scrambler400X/scrambler400XHeroImage.avif",
                    "alt" => "Scrambler 400 X"
                ],
                "subFamilyTopSectionImage" => [
                    "src" => "/images/classics/scrambler400X/scrambler400XTopSectionImage.avif",
                    "alt" => "Scrambler 400 X Top Section Image"
                ],
                "subFamilyTopSectionBGImage" => [
                    "src" => "/images/classics/scrambler400X/scrambler400XTopSectionImageBG.avif",
                    "alt" => "Scrambler 400 X Top Section Image BG"
                ]
            ]
        ];

        $subFamClassicsDataThree = [
            "subFamilyName" => "speed-twin-900",
            "familyType" => "classics",
            "title" => "Speed Twin 900",
            "price" => 10390,
            "url" => "/motorcycles/classics/speed-twin-900",
            "cc" => 900,
            "specs" => [
                [
              "desc" => "К.ЕК Мотор",
              "data" => 900
                ],
                [
              "desc" => "РЅ Коњски Сили",
              "data" => 65
                ],
                [
              "desc" => "NM. Обртен Момент",
              "data" => 80
                ],
                [
              "desc" => "Сервисен Интервал",
              "data" => "16,000"
                ]
            ],
            "shortDesc" => "Возбудливи перформанси и управување што инспирира самодоверба, сега со уште поголема удобност и стил.",
            "heroSlogans" => ["Забавен", "Способен", "Стилски"],
            "subFamilyPageInfo" => [
              "topSection" => [
                "title" => "Автентичен Амблем",
                "desc" => "Автентичен, иновативе и возбудлив за возење - сега со уште повеќе перформанси, можности, спецификации и стил.",
                "subtitle" => "Модерни карактеристики парирани со напредни возачки технологии за најдобриот хот-род во класата"
              ],
              "audioSection" => [
                "title" => "Пуштете Глас",
                "desc" => "Слушнете го препознатливиот, уникатен дво-цилиндарски звук на Triumph Bonneville моторот.",
                "audio" => "/images/classics/speedTwin900/speedTwin900Audio.mp3"
                ]
            ],
            "engineTransmission" => [
                  [
                    "title" => "Мотор",
                    "desc" => "Дво-Цилиндричен „in-line“ 8-вентили, 1ЕЕК, водно ладење"
                  ],
                  [
                    "title" => "капацитет",
                    "desc" => "900 cc"
                  ],
                  [
                    "title" => "диаметар",
                    "desc" => "84.6 mm"
                  ],
                  [
                    "title" => "рута",
                    "desc" => "80 mm"
                  ],
                  [
                    "title" => "компресија",
                    "desc" => "11.0 =>1"
                  ],
                  [
                    "title" => "Мах. Коњски Сила",
                    "desc" => "65 PS @ 7500 rpm"
                  ],
                  [
                    "title" => "Мах. Обртен Момент",
                    "desc" => "80 Nm @ 3800 rpm"
                  ],
                  [
                    "title" => "Систем за убризгување",
                    "desc" => "Electronic multi-point injection"
                  ],
                  [
                    "title" => "Систем за Издувни гасови",
                    "desc" => "Brushed Stainless Steel Dual Casing 2 into 2 Exhaust System with Brushed Stainless Steel Tailpipes"
                  ],
                  [
                    "title" => "Финална Трансмисија",
                    "desc" => "Chain"
                  ],
                  [
                    "title" => "Квачило",
                    "desc" => "Fluid, multi-disc, assisted"
                  ],
                  [
                    "title" => "Менувачка Кутија",
                    "desc" => "6 брзини"
                  ]
            ],
            "frame" => [
                  [
                    "title" => "шасија",
                    "desc" => "тубуларна дупла челична шасија"
                  ],
                  [
                    "title" => "вилушка",
                    "desc" => "Двојна Вилушка"
                  ],
                  [
                    "title" => "предно тркало",
                    "desc" => "18 x 2.75 - лиен алуминиум"
                  ],
                  [
                    "title" => "задно тркало",
                    "desc" => "17 x 4.25 - лиен алуминиум"
                  ],
                  [
                    "title" => "предна гума",
                    "desc" => "100/90-18"
                  ],
                  [
                    "title" => "задна гума",
                    "desc" => "150/70 R17"
                  ],
                  [
                    "title" => "предна суспензија",
                    "desc" => "41mm "
                  ],
                  [
                    "title" => "задна суспензија",
                    "desc" => "Dual shock суспензија"
                  ],
                  [
                    "title" => "предни сопирачки",
                    "desc" => "Dual 310mm дискови, 4-piston Brembo, ABS"
                  ],
                  [
                    "title" => "задна сопирачка",
                    "desc" => "Еден 255 mm диск. Brembo dual piston, ABS"
                  ],
                  [
                    "title" => "инструментна плочка",
                    "desc" => "Аналоген брзинометар со мулти функционален LCD дисплеј"
                  ]
            ],
            "dimension" => [
                  [
                    "title" => "ширина на волан",
                    "desc" => "780 mm"
                  ],
                  [
                    "title" => "висина без ретровизори",
                    "desc" => "1110 mm"
                  ],
                  [
                    "title" => "Висина на Седиште",
                    "desc" => "765 mm"
                  ],
                  [
                    "title" => "мегу-осовинско растојание ",
                    "desc" => "1450 mm"
                  ],
                  [
                    "title" => "Custer Corner",
                    "desc" => "25.1 º"
                  ],
                  [
                    "title" => "Trace",
                    "desc" => "102.4 mm"
                  ],
                  [
                    "title" => "Тежина",
                    "desc" => "216 kg"
                  ],
                  [
                    "title" => "капацитет на резервоар",
                    "desc" => "12 L"
                  ]
            ],
            "fuelConsumption" => [
                  [
                    "title" => "Потрошувачка",
                    "desc" => "4.1 l/100km"
                  ],
                  [
                    "title" => "CO2 загадување",
                    "desc" => "93 g/km EURO 5"
                  ]
            ],
            "service" => [
                  [
                    "title" => "Сервисен Интервал",
                    "desc" => "16 000 км / 12 месеци"
                  ]
            ],
            "grayCarousell" => [
                [
                  "id" => "carouselItem1",
                  "title" => "Возбудливи Перформанси",
                  "desc" => "Дво-Цилиндарскиот Bonneville (900cc) мотор се карактеризира со моќен обртен момент и одлични перформанси.",
                  "image" => "/images/classics/speedTwin900/speedTwin900Caro1.avif"
                ],
                [
                  "id" => "carouselItem2",
                  "title" => "Возбудлив Модерен Стил",
                  "desc" => "Одличниот безвременски изглед - сега унапреден со луксузни финиши и детали.",
                  "image" => "/images/classics/speedTwin900/speedTwin900Caro2.avif"

                ],
                [
                  "id" => "carouselItem3",
                  "title" => "Возачко Искуство кои буди самодоверба",
                  "desc" => "Ниското седиште (765mm) нуди динамично и лесно управување со моторот и комоција.",
                  "image" => "/images/classics/speedTwin900/speedTwin900Caro3.avif"

                ],
                [
                  "id" => "carouselItem4",
                  "title" => "Висока Спецификација",
                  "desc" => "Brembo (4-клипна клешта напред) сопирачките и одлична предна суспензија (41мм) оддаваат одлично чувство при сопирање и одлична контрола врз моторот.",
                  "image" => "/images/classics/speedTwin900/speedTwin900Caro4.avif"

                ],
                [
                  "id" => "carouselItem5",
                  "title" => "Високо ниво на технологија",
                  "desc" => "Модови за возење на дожд и пар, ABS, систем за пролизгување, лесно квачило и LED осветлување.",
                  "image" => "/images/classics/speedTwin900/speedTwin900Caro5.avif"

                ]
            ],
              "specNumbers" => [
                [ "data" => "900", "info" => "cc Мотор" ],
                [ "data" => "80", "info" => "Nm обртен момент" ],
                [ "data" => "65", "info" => "PS - Максимална Сила" ],
                [ "data" => "16,000", "info" => "КМ Сервисен Интервал" ]
            ],
            "youtubeVideosCarousellItems" => [
                [
                  "src" => "https:://www.youtube.com/embed/hfo-yqQOAjM",
                  "title" => "Bobber Youtube Promo Video"
                ],
                [
                  "src" => "https:://www.youtube.com/embed/DFPZcQjEdgI",
                  "title" => "Bobber Youtube Promo Video"
                ],
                [
                  "src" => "https:://www.youtube.com/embed/W11Zkx35eGg",
                  "title" => "Bobber Youtube Promo Video"
                ],
                [
                  "src" => "https:://www.youtube.com/embed/samfuFi4GTs",
                  "title" => "Bobber Youtube Promo Video"
                ],
                [
                  "src" => "https:://www.youtube.com/embed/samfuFi4GTs",
                  "title" => "Bobber Youtube Promo Video"
                ]
            ],
            "shortSpecInfo" => [
              "info2" => "Новата Thriumph Stealth Серија е достапна"
            ],
            "reasonsToDrive" => [
              "banner" => [
                "image" => "/images/classics/speedTwin900/speedTwin900ReasonsBanner.avif"
              ],
              "infoText" => [
                "desc" => "Модерен, забавен и достапен - овие се само три од многуте причини зошто да ја одберете SPeed Twin 900 серијата. Опремен со најновата генерација на Bonneville 900cc мотори, голема испорака на обртен момент со уникатен карактер, звук и минималистички стил дава чувство на безгрижно патување и авантура со леснотија. Новата Speed Twin 900 серија доаѓа со уште повеќе комфорт и стил. Ова е една од нај-надградуваните серии на Triumph, но ајде да видиме зошто вие треба да ја одберете оваа серија!."
              ],
              "reasons" => [
                [
                  "title" => "Автентичен Triumph Дизајн",
                  "desc" => "Speed Twin серијата ја носи онаа препознатлива Triumph ДНК која светот ја запозна уште со оригиналниот Triumph bonneville од 1959 година, која беше репез за тоа како треба да изгледа еден мотор од оваа категорија. Истата оваа ДНК денеска е унапредена со напредни перформанси и карактеристики со цел да парираат на нејзиниот стил и карактер. Со препознатлив Triumph дизајн, звук и перформанси Speed Twin серијата мами погледи каде и да се појави. ",
                  "image" => "/images/classics/speedTwin900/speedTwin900Reasons1.avif"
                ],
                [
                  "title" => "Преубави луксузни детали и финиши",
                  "desc" => "Со неверојатно внимание на детали и квалитетни финиши новата Speed Twin серија го понудува оној британски „low-profile“ стил. За да е постигне тоа Triumph на новата серија додаде нови бои, нови тркала изработени од лиен алуминиум, ново рамно седиште како и алуминиумски држачи за светло."
                ],
                [
                  "title" => "Возбудливи Перформанси",
                  "desc" => "Новиот - водно ладен Bonneville 900cc мотор испорачува силен обртен момент и обезбедува потполно уживање. Моторот испорачува 80Nm обртен момент при 3,800rpm и 65PS максимална сила при 7,500rpm. Управуван од „ride-by-wire“ рачка за гас, лесно квачило кои во комбинација со ниското седиште даваа одлично чувство на контрола при возење а притоа овој мотор претрпи надоградување за да се постигне EURO 5 стандард со што овој мотор помага при одзжување на чиста околината.",
                  "image" => "/images/classics/speedTwin900/speedTwin900Reasons2.avif"

                ],
                [
                  "title" => "Комфорт и Безгрижни Патувања",
                  "desc" => "Новата генерација Speed Twin мотори се дизајнирани да ја задржат репутацијата на лесно и комфортно патување. Ова го постигнуваат благодарејки на седиштето дебело 10мм кое се обликува околу нозете за подобра ергономија што овозможува повеќе комфрот при долги патувања. Со максимална висина на седиштето од 765мм, тенок струк, високо квалитетна суспензија (41мм напред и традиционални дупли армортизери назад), новата Speed Twin серија е дизајнира да биде комотна и перформатна исто толку колку што е и возбудлива за гледање."
                ],
                [
                  "title" => "Модерна Технологија за Унапредување на Контролата и Сигурноста",
                  "desc" => "Наспроти автентичниот историски изглед на Speed Twin серијата се наоѓаат и технолошките гаџети од најнови генерации. Серијата е опремена со два мода на работе - Дожд и Патнички Мод - кои го променуваат дејствувањето на моторот како и на системот за пролизгување со еден клик на воланот. Водното ладење е тука со цел да го намали загадувањето и да обезбеди помала потрошувачка на гориво. Бројни други уреди како систем за пролизгување, ABS, лесното квачило, имобилизатор, USB порти се тука за моментите кога ви требаат. Серијата ја дополнуваат бројните опционални аксесоари како греачи на рачки, систем за мониторинг на притисок во пневматици. Накрај тука е сервисниот интервал од 16 000 километри или 2 години кој обезбедува повеќе авантури наспроти седење и чекање по сервиси."
                ],
                [
                  "title" => "Автентичен Британски Звук",
                  "desc" => "Со комплетно британски дво-цилиндарски звук, Speed Twin серијата нуди богат и топол звук во кој веднаш ќе се заљубите. Благодарејки на дизајнот моторот го крие својот катализатор под моторот од кој излегуваат двете финални издувни цефки од различни срани на моторот. Изработени од не-раѓосувачки челик и сместени во нагорна линија оваа е уште еден дизајнерски допир кој придонесува за стилот и елеганцијата на оваа серија.",
                  "image"  => "/images/classics/speedTwin900/speedTwin900Reasons3.avif"
                ],
                [
                  "title" => "Спремен за Ваша Персонализација",
                  "desc" => "Никогаш досега во Triumph фамилијата не постоел мотор кој има повеќе дополнителни аксесоари на располагање. Со повеќе од 120 оригинални Triump дополнителни парчиња веруваме дека ќе пронајдете нешто со што ќе го направите вашиот Speed Twin подобар од другите. На располагање ви стојат разни елементи како багаж, сигурносни уреди и разни алуминиумски делови како за возачот така и за сопатникот. Секое парче е изработено и тестирано од страна на истите дизајнери и инжињери кои го сработија Speed Twin па така квалитетот и стилот не се на одмет."
                ],
                [
                  "title" => "Достапен и за А2 Возачка Лиценца",
                  "desc" => "Speed Twin серијата е достапна за секога, без разлика дали сте нов или искусен возач. Со опцијата за лимитирање на способностите на моторот оваа серија е лесно достапна за возачите со А2 возачка категорија и ќе им помогне на истите да ги достигнат своите цели и да стигнат до потполна моторциклистичка возачка дозвола, а кога ќе стигнат до таму лесно и со само едно патување до најблискиот Triumph центар истиот Speed Twin ќе си го врати својот целосен капацитет."
                ]
              ]
            ],
            "accessory" => [
              "banner" => [
                "image" => "/images/classics/speedTwin900/speedTwin900TopSectionImageBG.avif"
              ],
              "infoText" => [
                "desc" => "На располагање ви е селекција од преку 120 оригинални Triupmh аксесоари за оваа серија на мотори. Аксесоарите кои ќе ги додадете може да бидат додадени на вашиот мотор во фабриката. Aксесоарите се дизајнирани од истиот тим кој го креираше Speed Twin и доаѓаат со две-годишна гаранција."
              ],
              "accessoryTypes" => [
                [
                  "title" => "Персонализација",
                  "desc" => "Дополнете го возачкото искуство со „FOX Piggy-Back“ суспензија. Со 20 можни сетинзи сигурно ќе ја најдете вашата преференца. Изработено од светски познатион бренд FOX овој уред се вклопува со вашиот мотор без никакви маки.",
                  "image1" => [
                    "src" => "/images/classics/speedTwin900/streetTwinAccess1.avif",
                    "alt" => "Speed Twin 900"
                  ]
                ],
                [
                  "title" => "Поголема Заштита од Ветар",
                  "desc" => "Намалете го отпорот од ветрот и тоа со стил. Додадете кратко, високо или целосно „touring“ ветробранско стакло со дискретен и минималистички рам за монтирање. Со фокус на комфорт и стил ова ветробранско стакло ќе го намали отпорот на воздух а ќе ја зголеми комоцијата што ќе понуди подолги патувања без ниту трошка замор."
                ],
                [
                  "title" => "Внимание на Детали",
                  "desc" => "Не секогаш добриот дизајн доаѓа од големи промени, најчесто најголеми заслужници се малите ситни детали кои го финализираат изгледот. Детали како машинско изгравирани Triumph логоа на капачето на резервоарот, црниот анодизиран финиш го прават Speed Twin тоа што е.",
                  "image1" => [
                    "src" => "/images/classics/speedTwin900/streetTwinAccess2.avif",
                    "alt" => "Speed Twin 900"
                  ],
                  "image2" => [
                    "src" => "/images/classics/speedTwin900/streetTwinAccess3.avif",
                    "alt" => "Speed Twin 900"
                  ]
                ],
                [
                  "title" => "„Naked“ Стил",
                  "desc" => "Комплетно променете го задниот дел на моторот со „Fender Removal“ сетот, кој целосно ќе го стандрадниот заедн комплет и ќе постави нов „почист“ сет кој вклучува LED светло и простор за поставување на регистарските таблички. Дополнително додадете ги LED трепкачите во форма на куршуми и ќе го постигнете оно „custom“ стил кој секој го посакува."
                ]
              ]
            ],
            "gallery" => [
              "modelImage" => [
                "src" => "/images/classics/speedTwin900.png",
                "alt" => "Speed Twin 900 Range Model Image"
              ],
              "subFamilyHeroVideo" => [
                "src" => "/images/classics/speedTwin900/speedTwin900HeroVideo.webm",
                "alt" => "Speed Twin 900"
              ],
              "subFamilyTopSectionImage" => [
                "src" => "/images/classics/speedTwin900/speedTwin900TopSectionImage.avif",
                "alt" => "Speed Twin 900 Top Section Image"
              ],
              "subFamilyTopSectionBGImage" => [
                "src" => "/images/classics/speedTwin900/speedTwin900TopSectionImageBG.avif",
                "alt" => "Speed Twin 900 Top Section Image BG"
              ]
            ]
        ];

        $subFamClassicsDataFour = [
            "subFamilyName" => "bonneville-bobber",
            "familyType" => "classics",
            "title" => "Bonneville Bobber",
            "price" => 16290,
            "url" => "/motorcycles/classics/bonneville-bobber",
            "cc" => 1200,
            "specs" => [
              [
              "desc" => "К.ЕК Мотор",
              "data" => 1200
              ],
              [
              "desc" => "PS Коњски Сили",
              "data" => 78
              ],
              [
              "desc" => "NM. Обртен Момент",
              "data" => 106
              ],
              [
              "desc" => "Сервисен Интервал",
              "data" => "16,000"
              ]
          ],
            "shortDesc" => "Највозбуливиот Bobber, успешно ги краде погледите благодарејки на некговиот мускулест изглед и агилност.",
            "heroSlogans" => ["Забава", "со", "стил"],
            "subFamilyPageInfo" => [
              "topSection" => [
                "title" => "Автентичен Амблем",
                "desc" => "Автентичен, иновативе и возбудлив за возење - сега со уште повеќе перформанси, можности, спецификации и стил.",
                "subtitle" => "Модерни карактеристики парирани со напредни возачки технологии за најдобриот хот-род во класата"
              ],
              "audioSection" => [
                "title" => "Hot-Rod Bobber Звук",
                "desc" => "Почувствувајте го силниот, богат и не-рефиниран Bobber звук.",
                "audio" => "/images/classics/bonnevilleBobber/bobberSound.mp3"
              ]
            ],
            "engineTransmission" => [
                  [
                    "title" => "Мотор",
                    "desc" => "Дво-Цилиндричен „in-line“ 8-вентили, 1ЕЕК, водно ладење"
                  ],
                  [
                    "title" => "капацитет",
                    "desc" => "1200 cc"
                  ],
                  [
                    "title" => "диаметар",
                    "desc" => "97.6 mm"
                  ],
                  [
                    "title" => "рута",
                    "desc" => "80 mm"
                  ],
                  [
                    "title" => "компресија",
                    "desc" => "10.0 =>1"
                  ],
                  [
                    "title" => "Мах. Коњски Сила",
                    "desc" => "78 PS @ 6100 rpm"
                  ],
                  [
                    "title" => "Мах. Обртен Момент",
                    "desc" => "106 Nm @ 4000 rpm"
                  ],
                  [
                    "title" => "Систем за убризгување",
                    "desc" => "Electronic multi-point injection"
                  ],
                  [
                    "title" => "Систем за Издувни гасови",
                    "desc" => "Brushed Stainless Steel Dual Casing 2 into 2 Exhaust System with Brushed Stainless Steel Tailpipes"
                  ],
                  [
                    "title" => "Финална Трансмисија",
                    "desc" => "Chain"
                  ],
                  [
                    "title" => "Квачило",
                    "desc" => "Fluid, multi-disc, assisted"
                  ],
                  [
                    "title" => "Менувачка Кутија",
                    "desc" => "6 брзини"
                  ]
                ],
            "frame" => [
                  [
                    "title" => "шасија",
                    "desc" => "тубуларна дупла челична шасија"
                  ],
                  [
                    "title" => "вилушка",
                    "desc" => "Двојна Вилушка"
                  ],
                  [
                    "title" => "предно тркало",
                    "desc" => "16 x 2.5 - жични тркала со 32 жици"
                  ],
                  [
                    "title" => "задно тркало",
                    "desc" => "16 x 3.5 - жични тркала со 32 жици"
                  ],
                  [
                    "title" => "предна гума",
                    "desc" => "MT90B16"
                  ],
                  [
                    "title" => "задна гума",
                    "desc" => "150/80 R16"
                  ],
                  [
                    "title" => "предна суспензија",
                    "desc" => "Showa 47mm"
                  ],
                  [
                    "title" => "задна суспензија",
                    "desc" => "Monoshock"
                  ],
                  [
                    "title" => "предни сопирачки",
                    "desc" => "Dual 310mm дискови, 2-piston monobloc Brembo Floating Axial"
                  ],
                  [
                    "title" => "задна сопирачка",
                    "desc" => "Еден 255 mm диск. Nissin single piston floating axial"
                  ],
                  [
                    "title" => "инструментна плочка",
                    "desc" => "Аналоген брзинометар со мулти функционален LCD дисплеј"
                  ]
                ],
            "dimension" => [
                  [
                    "title" => "ширина на волан",
                    "desc" => "800 mm"
                  ],
                  [
                    "title" => "висина без ретровизори",
                    "desc" => "1024 - 1055 mm"
                  ],
                  [
                    "title" => "Висина на Седиште",
                    "desc" => "690 - 700 mm"
                  ],
                  [
                    "title" => "мегу-осовинско растојание ",
                    "desc" => "1500 mm"
                  ],
                  [
                    "title" => "Custer Corner",
                    "desc" => "24.5º"
                  ],
                  [
                    "title" => "Trace",
                    "desc" => "92.0 mm"
                  ],
                  [
                    "title" => "Тежина",
                    "desc" => "251 kg"
                  ],
                  [
                    "title" => "капацитет на резервоар",
                    "desc" => "12 L"
                  ]
                ],
            "fuelConsumption" => [
                  [
                    "title" => "Потрошувачка",
                    "desc" => "4.5 l/100km"
                  ],
                  [
                    "title" => "CO2 загадување",
                    "desc" => "105 g/km EURO 5"
                  ]
                ],
            "service" => [
                  [
                    "title" => "Сервисен Интервал",
                    "desc" => "16 000 км / 12 месеци"
                  ]
                ],

            "grayCarousell" => [
                [
                  "id" => "carouselItem1",
                  "title" => "Нова Генерација Bobber",
                  "desc" => "Комбинирано од автентичноста на Bobber и високите спецификации на Bobber Black за најдобро од двата света.",
                  "image" => "/images/classics/bonnevilleBobber/bobberCaro1.avif"
                ],
                [
                  "id" => "carouselItem2",
                  "title" => "Возбудливи Перформанси",
                  "desc" => "Врвен 1200cc мотор со два цилиндри. Висок обртен момент со најновиот Bobber мапинг, со уште повеќе респонзивност и по Euro 5 стандарди.",
                  "image" => "/images/classics/bonnevilleBobber/bobberCaro2.avif"

                ],
                [
                  "id" => "carouselItem3",
                  "title" => "Прекрасни Елементи",
                  "desc" => "Bobber искуството е унапредено со комплетни Brembo сопирачки, Showa суспензија, 12 литарски резервоар и 16 инчно предно тркало.",
                  "image" => "/images/classics/bonnevilleBobber/bobberCaro3.avif"

                ],
                [
                  "id" => "carouselItem4",
                  "title" => "Напредна Технологија",
                  "desc" => "Комплетно LED осветлување со LED дневни светла и вграден темпомат кој се контролира со притисок на едно копче го прави овој Bobber уште по привлечлив.",
                  "image" => "/images/classics/bonnevilleBobber/bobberCaro4.avif"

                ],
                [
                  "id" => "carouselItem5",
                  "title" => "Автентичност",
                  "desc" => "Неспоредлива автентичност со извонредни детали и финиши, сега со уште повеќе перформанси, мускулест изглед и „темен“ стил.",
                  "image" => "/images/classics/bonnevilleBobber/bobberCaro5.avif"

                ]
              ],
            "specNumbers" => [
                [ "data" => "1200", "info" => "cc Мотор" ],
                [ "data" => "106", "info" => "Nm обртен момент" ],
                [ "data" => "78", "info" => "PS - Максимална Сила" ],
                [ "data" => "16,000", "info" => "КМ Сервисен Интервал" ]
              ],
            "youtubeVideosCarousellItems" => [
                [
                  "src" => "https:://www.youtube.com/embed/hfo-yqQOAjM",
                  "title" => "Bobber Youtube Promo Video"
                ],
                [
                  "src" => "https:://www.youtube.com/embed/DFPZcQjEdgI",
                  "title" => "Bobber Youtube Promo Video"
                ],
                [
                  "src" => "https:://www.youtube.com/embed/W11Zkx35eGg",
                  "title" => "Bobber Youtube Promo Video"
                ],
                [
                  "src" => "https:://www.youtube.com/embed/samfuFi4GTs",
                  "title" => "Bobber Youtube Promo Video"
                ],
                [
                  "src" => "https:://www.youtube.com/embed/samfuFi4GTs",
                  "title" => "Bobber Youtube Promo Video"
                ]
              ],


            "reasonsToDrive" => [
              "banner" => [
                "image" => "/images/classics/bonnevilleBobber/bobberReasonsBanner.avif"
              ],
              "infoText" => [
                "title" => "Bobber серијата е дизајнирана за уживање",
                "desc" => "Bonneville Bobber серијата е апсолутно најдобрата серија доколку сакате да модерна технологија и перформанси со оној историски автентичен Хот-Род стил. Дизајнерите во Triumph се потрудија и ги искомбинираа најдобрите страни на претходниците како Bobber и Bobber Black со цел да создадат врвно возачко искуство како и изглед кој го одзема здивот. "
              ],
              "reasons" => [
                [
                  "title" => "Дизајниран за да се разликува од другите",
                  "desc" => "Невозможно е да не го приметите присуството на Bobber околу вас и да не се заљубите во неговиот карактер и шарм. Секој милиментар е рефиниран и изаработен со беспрекорен финиш а агресивниот карактер и елеганција на Bobber серијата ќе ве наполни со гордост и самодоверба. Оригиналниот Bobber сега еволуираше, чуваки ги своите класични линии, луксузност но сега со уште повеќе мускулест лик и стил. За уште поголемо чувство на самодоверба тука се и мускулестиот преден дел на моторот, големата вилушка и големите пневматици како и задната суспензија која нуди едно ново ниво на комоција. Со оваа убавина и елеганција лесно е да с види зошто Bonneville Bobber серијата е најпродаваната серија на Triumph.",
                  "image" => "/images/classics/bonnevilleBobber/bobberReasons1.avif"
                ],
                [
                  "title" => "Одлични Перформанси",
                  "desc" => "Возењето мотор се базира на чувства - чувства кои доаѓаат од моторот кој го возите. Новата Bobber серија ги унапредува претходните перформанси додава уште помускулест изглед и нуди врвна суспензија и сопирачки и технологија. Срцето на Bobber серијата е новиот Bonneville мотор од 1200 кубни сантиметри, кој испорачува 78 максимални коњски сили со префинет и препознатлив дво-цилиндричен звук."

                ],
                [
                  "title" => "Опремен со Модерна Технологија",
                  "desc" => "Неспоредливата силуета и стил на Bobber серијата е парирана со модерни перформанси и модерна технологија која одлично се вклопува во класичните линии на Bobber серијата. Од сокриената задна суспензија па се до Brembo сопирачките и Showa вилушката, Bobber серијата ги носи сите најнови и најтехнолошки напредни елементи на себе. Без разлика дали патувате некаде или се возите низ град овие технолошки уреди се тука да ви асистираат кога ви е најпотребно. Со модовите за дожд и пат (Road & Rain), систем за пролизгување, лесно квачило, ABS и темпомат ваше е само да уживате во вашето патување.",
                  "image" => "/images/classics/bonnevilleBobber/bobberReasons2.avif"

                ],
                [
                  "title" => "Персонализиција",
                  "desc" => "Дизајниран со големо внимание на детали, Bonneville Bobber серијата е перфектно платно на кое можете да додадете ваш карактер и стил. Со палета од 77 дополнителни аксесоари, од мали детали и дизајнерски парчиња, до аксесоари кои ќе изнудат повеќе комоција и аксесоари кои ќе ви овозможат повеќе место за складирање, Triumph е тука да ви понуди нешто што ќе го направи вашиот Bobber поразличен од другите."

                ]
              ]
            ],
            "accessory" => [
              "banner" => [
                "image" => "/images/classics/bonnevilleBobber/bobberTopSectionImageBG.avif"
              ],
              "infoText" => [
                "desc" => "Додавањето мали детали никогаш не било полесно. Со повеќе од 75 аксесоари во палетата на Triumph оригинали, од парчиња кои ќе го унапредат стилот, сигурност па се до парчиња кои ќе ги подобрат перформансите на моторот сигурно ќе најдете нешто по ваш вкус. Сите парчиња можат да бидат лесно монтирани од страна на вашиот локален Triumph центар."
              ],
              "accessoryTypes" => [
                [
                  "title" => "Стил и Силуета",
                  "desc" => "Додајте ги „Ape Hanger“ рачките за уште подраматичен изглед. Финиширано со блескава црна боја и алуминиумски држач ова парче ќе додаде упте малку стил и карактер на вапиот Bobber. Дизајниран да оди во пар со „Ape Hanger“, тука е и сетот за црева и електрични приклучоци за волан, кој додава уште малку карактер на вашите линии за сопирачка течност, квачило и други видови на кабли." ,
                  "image1" => [
                    "src" => "/images/classics/bonnevilleBobber/bobberAccess1.avif",
                    "alt" => "Bonneville Bobber"
                  ],
                  "image2" => [
                    "src" => "/images/classics/bonnevilleBobber/bobberAccess2.avif",
                    "alt" => "Bonneville Bobber "
                  ]
                ],
                [
                  "title" => "комфорт и Елеганција",
                  "desc" => "Додајте уште малку елеганција и луксуз на вашиот Bobber. Преубавото кафеаво седиште изработено од кожа гордо го истакнува Triumph логото и додава уште малку лускуз и комоција. Достапно во црна и кафеава боја со цел да одберете што најдобро одговара според вас."
                ],
                [
                  "title" => "Релаксираност и Стил",
                  "desc" => "Прилагодете ја вашата возачка позиција со „Front Control Mount“ сетот кој ви овозможува да ги поместите вашите стапала за 175мм понапред со цел да постигнете одлична позиција за патување. Изработени од хромиран алуминиум обложени со гумен материјал ќе ви помогнат лесно да ги држете стапалата на педалите за нозе. Педалите за нозе и менувачот се изработени од ковен метал и го дополнуваат излгедот. ",
                  "image1" => [
                    "src" => "/images/classics/bonnevilleBobber/bobberAccess3.avif",
                    "alt" => "Bonneville Bobber "
                  ]
                ]
              ]
            ],
            "shortSpecInfo" => [
              "info2" => "Новата Thriumph Stealth Серија е достапна"
            ],
            "gallery" => [
              "modelImage" => [
                "src" => "/images/classics/bonnevilleBobber.avif",
                "alt" => "Bonneville Bobber Range Model Image"
              ],
              "subFamilyHeroVideo" => [
                "src" => "/images/classics/bonnevilleBobber/bonnevilleBobberHeroVideo.webm",
                "alt" => "Bonneville Bobber Range Model Image"
              ],
              "subFamilyHeroImageMobile" => [
                "src" => "/images/classics/bonnevilleBobber/bobberHeroMobileImg.avif",
                "alt" => "Tiger Sport 900 Range Hero Image"
              ],
              "subFamilyTopSectionImage" => [
                "src" => "/images/classics/bonnevilleBobber/bobberTopSectionImage.avif",
                "alt" => "Bonneville Bobber Range Model Image Top Section Image"
              ],
              "subFamilyTopSectionBGImage" => [
                "src" => "/images/classics/bonnevilleBobber/bobberTopSectionImageBG.avif",
                "alt" => "Bonneville Bobber Range Model Image Top Section Image BG"
              ]
            ]
        ];


        $subFamClassicsDataFive = [
            "subFamilyName" => "scrambler-1200",
            "familyType" => "classics",
            "title" => "Scrambler 1200",
            "price" => 15990,
            "url" => "/motorcycles/classics/scrambler-1200",
            "cc" => 1200,
            "youtubeVideo" => "https:://www.youtube.com/embed/Lj-79e9TMh4",
            "specs" => [
                [
              "desc" => "К.ЕК Мотор",
              "data" => 1200
                ],
                [
              "desc" => "PS Коњски Сили",
              "data" => 90
                ],
                [
              "desc" => "NM. Обртен Момент",
              "data" => 110
                ],
                [
              "desc" => "Сервисен Интервал",
              "data" => "16,000"
                ]
            ],
            "shortDesc" => "Автентичен Scrambler стајлинг со авантуристички спецификации кои се најдобри во класата. Scrambler 1200 е најдобриот мотор во својата класа.",
            "heroSlogans" => ["Авантура", "со", "стил"],
            "subFamilyPageInfo" => [
              "topSection" => [
                "title" => "Најдобриот Scrambler досега",
                "desc" => "Автентичен Scrabmler стајлинг со лидерски спецификации во класата. Scrambler 1200 е најдобар во својата класа.",
                "subtitle" => "Возбудливи, карактеристични перформанси и безгрижна „Off-Road“ авантура сега со модерни спецификации."
              ],
              "audioSection" => [
                "title" => "Карактеристичен Scrambler Звук",
                "desc" => "Двете високо монтирани издувни цевки го прудуцираат оној препознатилив длабок Triumph Scrambler тон.",
                "audio" => "/images/classics/scrambler1200/scramblerAudio.mp3"
              ],
            ],
                "engineTransmission" => [
                  [
                    "title" => "Мотор",
                    "desc" => "Дво-Цилиндричен „in-line“ 8-вентили, водно ладење"
                  ],
                  [
                    "title" => "капацитет",
                    "desc" => "1200 cc"
                  ],
                  [
                    "title" => "диаметар",
                    "desc" => "97.6 mm"
                  ],
                  [
                    "title" => "рута",
                    "desc" => "80 mm"
                  ],
                  [
                    "title" => "компресија",
                    "desc" => "11 =>1"
                  ],
                  [
                    "title" => "Мах. Коњски Сила",
                    "desc" => "90PS @ 7000 rpm"
                  ],
                  [
                    "title" => "Мах. Обртен Момент",
                    "desc" => "110Nm @ 4250 rpm"
                  ],
                  [
                    "title" => "Систем за убризгување",
                    "desc" => "Ride by wire, multi-point sequential electronic injection"
                  ],
                  [
                    "title" => "Систем за Издувни гасови",
                    "desc" => "Brushed 2-into-2 exhaust system with high-mounted brushed tailpipes."
                  ],
                  [
                    "title" => "Финална Трансмисија",
                    "desc" => "X ring chain"
                  ],
                  [
                    "title" => "Квачило",
                    "desc" => "Wet, multi-plate, assisted clutch"
                  ],
                  [
                    "title" => "Менувачка Кутија",
                    "desc" => "6 брзини"
                  ]
                ],
                "frame" => [
                  [
                    "title" => "шасија",
                    "desc" => "тубуларна челична шасија"
                  ],
                  [
                    "title" => "вилушка",
                    "desc" => "Двојна Вилушка"
                  ],
                  [
                    "title" => "предно тркало",
                    "desc" => "21 x 2.15 - жични тркала со 36 жици"
                  ],
                  [
                    "title" => "задно тркало",
                    "desc" => "17 x 4.25 - жични тркала со 32 жици"
                  ],
                  [
                    "title" => "предна гума",
                    "desc" => "90/90-21"
                  ],
                  [
                    "title" => "задна гума",
                    "desc" => "150/70 R17"
                  ],
                  [
                    "title" => "предна суспензија",
                    "desc" => "Marzocchi™ 1 1 Inverted Fork Non-Adjustable, 170mm"
                  ],
                  [
                    "title" => "задна суспензија",
                    "desc" => "Double Marzocchi shocks with piggyback canisters, adjustable preload, 170m"
                  ],
                  [
                    "title" => "предни сопирачки",
                    "desc" => "Dual 310mm discs, Nissin, ABS"
                  ],
                  [
                    "title" => "задна сопирачка",
                    "desc" => "255mm single disc, Nissin, ABS "
                  ],
                  [
                    "title" => "инструментна плочка",
                    "desc" => "Мултифункционален TFT екран"
                  ]
                ],
                "dimension" => [
                  [
                    "title" => "ширина на волан",
                    "desc" => "834 mm"
                  ],
                  [
                    "title" => "висина без ретровизори",
                    "desc" => "1185 mm"
                  ],
                  [
                    "title" => "Висина на Седиште",
                    "desc" => "820 mm"
                  ],
                  [
                    "title" => "мегу-осовинско растојание ",
                    "desc" => "1525 mm"
                  ],
                  [
                    "title" => "Custer Corner",
                    "desc" => "26.2 º"
                  ],
                  [
                    "title" => "Trace",
                    "desc" => "125 mm"
                  ],
                  [
                    "title" => "Тежина",
                    "desc" => "228 kg"
                  ],
                  [
                    "title" => "капацитет на резервоар",
                    "desc" => "15 L"
                  ]
                ],
                "fuelConsumption" => [
                  [
                    "title" => "Потрошувачка",
                    "desc" => "4.4 l/100km"
                  ],
                  [
                    "title" => "CO2 загадување",
                    "desc" => "105 g/km EURO 5"
                  ]
                ],
                "service" => [
                  [
                    "title" => "Сервисен Интервал",
                    "desc" => "16 000 км / 12 месеци"
                  ]
                ],
              "grayCarousell" => [
                [
                  "id" => "carouselItem1",
                  "title" => "All-Road Моторцикл",
                  "desc" => "Модернистичко класичен стил париран со авантуристички способности со цел да се добие перфектен баланс помеѓу најдобрите особини на „Off-Road“ и „On-Road“ моторите.",
                  "image" => "/images/classics/scrambler1200/scrambler1200Caro1.avif"
                ],
                [
                  "id" => "carouselItem2",
                  "title" => "Оригинална Scrambler Агилност",
                  "desc" => "Оптимизирана геометрија на рамка и високо специфираната суспензија нудат одлична контрола во сите екстремни условиж.",
                  "image" => "/images/classics/scrambler1200/scrambler1200Caro2.avif"

                ],
                [
                  "id" => "carouselItem3",
                  "title" => "Дво-Цилиндарски Линиски Bonneville 120cc мотор",
                  "desc" => "Екслкузивниот Scrambler мотро комбинира возбудливи тркачки перформнаси и лесно маневривање на пат и надвор од истиот.",
                  "image" => "/images/classics/scrambler1200/scrambler1200Caro3.avif"

                ],
                [
                  "id" => "carouselItem4",
                  "title" => "Врвна Технологија",
                  "desc" => "Новиот Scrambler е опремен со најновата технологија во индустријата целосно фокусирана да асистира на возачот а со лист и автентичен дизајн.",
                  "image" => "/images/classics/scrambler1200/scrambler1200Caro4.avif"

                ],
                [
                  "id" => "carouselItem5",
                  "title" => "Уникате Scrambler Стил",
                  "desc" => "Седиштето, резервоарот и високо монтираната предна вилушка ја креираат препознатливата Scrambler силуета.",
                  "image" => "/images/classics/scrambler1200/scrambler1200Caro5.avif"

                ],
                [
                  "id" => "carouselItem6",
                  "title" => "Повеќе од 60 Аксесоари на Располагање",
                  "desc" => "Одберете од огромната палета на оригинални Triumph аксесоари специјално креирани за Scrambler серијата. Од опциите за багаж па се до ветробрански стакла и штитници инспирирани од Дакар рели серијата.",
                  "image" => "/images/classics/scrambler1200/scrambler1200Caro6.avif"

                ]
              ],
              "specNumbers" => [
                [ "data" => "1200", "info" => "cc Мотор" ],
                [ "data" => "110", "info" => "Nm обртен момент" ],
                [ "data" => "90", "info" => "PS - Максимална Сила" ],
                [ "data" => "16,000", "info" => "КМ Сервисен Интервал" ]
              ],
              "youtubeVideosCarousellItems" => [
                [
                  "src" => "https:://www.youtube.com/embed/VGfZx5iHsAk",
                  "title" => "Scrambler 1200 Youtube Promo Video"
                ],
                [
                  "src" => "https:://www.youtube.com/embed/wBV6E_kE7dc",
                  "title" => "Scrambler 1200 Youtube Promo Video"
                ],
                [
                  "src" => "https:://www.youtube.com/embed/fXQXfR1U3zU",
                  "title" => "Scrambler 1200 Youtube Promo Video"
                ],
                [
                  "src" => "https:://www.youtube.com/embed/UQcn1J9D8A8",
                  "title" => "Scrambler 1200 Youtube Promo Video"
                ]
              ],

            "shortSpecInfo" => [
              "info1" => "1,200cc Bonneville дво-цилинричен мотор",
              "info2" => "Максимална јачина - 90 PS",
              "info3" => "Максимален вртежен момент - 110 Nm"
            ],
            "gallery" => [
              "modelImage" => [
                "src" => "/images/classics/scrambler1200.webp",
                "alt" => "Scrambler 1200 Range Model Image"
              ],
              "subFamilyHeroVideo" => [
                "src" => "/images/classics/scrambler1200/scrambler1200HeroVideo.webm",
                "alt" => "Scrambler 1200 Range Model Image"
              ],
              "subFamilyHeroImageMobile" => [
                "src" => "/images/classics/scrambler1200/scrambler1200MobileHero.avif",
                "alt" => "Scrambler 1200 Range Hero Image"
              ],
              "subFamilyTopSectionImage" => [
                "src" => "/images/classics/scrambler1200/scrambler1200TopSectionImage.avif",
                "alt" => "crambler 1200 Range Model Image Top Section Image"
              ],
              "subFamilyTopSectionBGImage" => [
                "src" => "/images/classics/scrambler1200/scrambler1200TopSectionImageBG.avif",
                "alt" => "crambler 1200 Range Model Image Top Section Image BG"
              ]
            ],
            "accessory" => [
              "banner" => [
                "image" => "/images/classics/scrambler1200/scrambler1200AccessBanner.avif"
              ],
              "infoText" => [
                "desc" => "На располагање ви е селекција од преку 60 оригинални Triupmh аксесоари за оваа серија на мотори. Аксесоарите кои ќе ги додадете може да бидат додадени на вашиот мотор во фабриката. Aксесоарите се дизајнирани од истиот тим кој го креираше Scrambler 1200 и доаѓаат со две-годишна гаранција."
              ],
              "accessoryTypes" => [
                [
                  "title" => "Ниско Седиште",
                  "desc" => "Нискоте седиште го намалува растојанието помеѓу седиштето и земјиното тло за 25мм што му овозможува на возачот полесно да допре до земјиното тло при моменти на сопирање а со тоа го подобрува комфортот и квалитетот на патувањето. Со истиот дизајн како и нормалното седиште, можете да изберете во две варијанти - црна и кафеава.",
                  "image1" => [
                    "src" => "/images/classics/scrambler1200/scrambler1200Access1.avif",
                    "alt" => "Scrabmler 1200 On The Road"
                  ],
                  "image2" => [
                    "src" => "/images/classics/scrambler1200/scrambler1200Access2.avif",
                    "alt" => "Scrabmler 1200 PaintJob"
                  ]
                ],
                [
                  "title" => "Багаж",
                  "desc" => "Перфектен избор доколку планирате авантура. Идеологијата за патување на Scrambler може дополнително да се оптимизира со специјалниот Givi багаж кој нуди => разни торби, торба за резервоар, торба за заден дел - сите целосно изработени специјално за Scrambler 1200 серијата и заедно комбинираат капацитет од 72 литри.Достапен е и рам за монтирање на багаж на задниот дел од моторот и нуди цврста база на која може дополнително да монтирате торби за багаж како водоотпорната витканта торба со капацитет од 30 литри. За повеќе комоција при долгите патувања тука е и високот ветробранско стакло кое ќе ве штите од ветрот. ",
                  "itemsList" => [
                    "Givi Багаж",
                    "Куфер - 25л",
                    "Торба за Резервоар - 12л",
                    "Торба за заден дел - 35л",
                    "Roll торба - 30л",
                    "Ветробранско Стакло"
                  ]
                ],
                [
                  "title" => "All Road Карактер",
                  "desc" => "Иако целокупниот стандарден пакет на Scrambler серијата има доста off-road карактер, сепак на располагање ви се и дополнителни аксесоари кои ќе го подобрат стилот но и нивото на заштита од елементите. Дизајнирани од Triumph и подкрепнати со две-годишна гаранција овие компоненти ќе го однесат SCrambler 1200 на едно повисоко ниво на off-road спремност. Висок преден браник додава вистински off-road карактер како и уште еден степен повеќе заштита од кал. Достапен во алуминиумски финиш или во финишот на вашиот мотор. Алуминиумски браник за радијатор исклучително добро се вклопува во пакет со овој преден браник. CNC изработената ногарка дава одличен детал кон дизајнот на моторот но и одлична функционалност. Заштитниот не-раѓосувачки рам околу моторот служи за заштита на истиот при несакани падови. За вашата тракција се грижат Michelin Anakee Wild® пневматици инспирирани од пневматиците кои се користат на релиот Дакар.",
                  "itemsList" => [
                    "Висок Преден Браник",
                    "Алуминиумски Браник за Радијатор",
                    "Мрежа за заштита на светло",
                    "Рачка за Управување (Волан)",
                    "Алуминиумски Грипови",
                    "Заштита за мотор - Не-раѓосувачки Челик",
                    "Странична Ногарка",
                    "Rear Flash Relocation Сет"
                  ],
                  "image1" => [
                    "src" => "/images/classics/scrambler1200/scrambler1200Access3.avif",
                    "alt" => "Scrambler 1200"
                  ],
                  "image2" => [
                    "src" => "/images/classics/scrambler1200/scrambler1200Access4.avif",
                    "alt" => "Scrambler 1200 Accessory Radiator Protection"
                  ]
                ],
                [
                  "title" => "Ултра Модерно Поврзување",
                  "desc" => "Како и секој модерен Triumph класик, така и Scrambler 1200 ја носи најновата технологија. Иако листата на технолошки уреди на Scrambler 1200 е долга сепак има место за уште повеќе унапредување. triumph Bluetooth Conectivity системот се состои од Bluetooth конекција, „Turn-By-Turn“ навигација, слушање музика и ракување со вашиот телефон. Комуникацијата помеѓу возачот и сопатникот е овозможена од Sena 50S Bluetooth Headset-от. Истиот нуди аудио-команди, мулти канално поврзување, тимско поврзување, примање повици, повикување пријатели и слушање музика преку Harman/Kardon аудио системот. Системот е оптимизиран за користење со секој Triumph мотор и се ракува лесно преку контролите на рачките на воланот.",
                  "itemsList" => [
                    "Bluetooth Conectivity",
                    "Triumph Sena 50S Bluetooth Headset"
                  ]
                ],
                [
                  "title" => "Сигурност - Безбедност",
                  "desc" => "Оваа палета на производи се состои од аксесоари кои помагаат при заштита на вашиот мотор од кражби. За употреба во домашни услови доволен ви е тешкиот анкор кој се прицврстува во земјата и ланците и катанец, додека за оние кои нивните мотори ги чуваат надвор тука се и прекривките кои се специјализирани за употреба во секакви временски услови. Triumph Protect+ алармот вклучува сензори за вибрации и нагиб кои активираат сирена при нагли промени. Доколку се случи најлошото, Track+ Tracker системот користи GPS сигнали за да ја открие моменталната локација на вашиот Scrambler. Системот автоматски ќе пушти информации до вашиот телефон доколку некој го вознемирува.",
                  "itemsList" => [
                    "Анкер за прицврстување во земјата",
                    "Ланец и катанец",
                    "Прекривки за сите временски услови",
                    "Катанци за дискови - U lock",
                    "Triumph Protect+ Аларм",
                    "Triumph Track+ Tracking System"
                  ]
                ]
              ]
            ],
            "reasonsToDrive" => [
              "banner" => [
                "image" => "/images/classics/scrambler1200/scrambler1200ReasonsBanner.avif"
              ],
              "infoText" => [
                "title" => "Scrabmler 1200 - Миленик на Сите Генерации",
                "desc" => "Најновата верзија на Scrambler 1200 серијата е уште подостапна и спремна за секојдневните предизвици, викенд прошетки и оригинални авантури. Најновиот Scrambler 1200 XE сега веќе еволуираше во најдобриот оф-роадер, додека SCrambler 1200 X со своите перформанси, контрола и стил инспирира самодоверба насекаде и на било која подлога."
              ],
              "reasons" => [
                [
                  "title" => "Нов Мотор - Scrambler Bonneville 1200cc",
                  "desc" => "Високо перформантен мотор кој одговара на секоја ваша потреба без разлика дали сте на пат или надвор од него. Осум вентилниот мотор испорачува силен но предвидлив удар. „Ride-By-Wire“ системот овозможува глатка апликација на гаста во секое возачко сценарио. Пет мода на работа се на располагање на возачот (плус Off-Road PRO кај XE моделот) кои ја оптимизираат тракцијата и ABS системот. За потполно прилагодување кон возачот Scrambler 1200 нуди и „Rider-Configurable“ мод кој овозможува да го конфигурирате моторот по ваш вкус.  ",
                  "image" => "/images/classics/scrambler1200/scrambler1200Reasons1.avif"
                ],
                [
                  "title" => "Рамка",
                  "desc" => "Дизајнирана за да понуди максимални перформанси кои ќе му парираат на изгледот на моторот. Самата рамка нуди командна позиција и ги поставува рачките на воланот високо со цел да овозможи оптимална контрола врз моторот. Геометријата, ергономијата се дизајнирани за да овозможат максимална самодоверба и контрола за комфортно и флексибилно искуство. Scrambler серијата е подкрепена од Marzocchi™ премиум суспензија. Предната (45mm) и задната „Piggy Back“ вилушка нудат одличен комфорт и контрола врз екстремните подлоги, дупки и избочини. Цврстите жични „tubuless“ тркала се изработе ни од не-раѓосувачки челик и парирани со одличните Brembo™ Stylema® сопирачки со дискови од 320мм напред и 310мм назад.",
                  "image" => "/images/classics/scrambler1200/scrambler1200Reasons2.avif"

                ],
                [
                  "title" => "Технологија",
                  "desc" => "Одлично интегрираната технологија го додава финалниот детал за комплетирање на Scrambler 1200. Со себе носи модерни перформанси, комфорт и сигурност при секое возење. Целосно LED осветлување оддава одлична прегледност пред вас а со дневните LED светла и одличен дизајн и стил. Scrambler серијата на себе го носи и (IMU) - Inertial Measurement Unit - систем кој врши мониторинг при забрзување, запирање, го мери аголот на нагиб со цел да го оптимизира ABS и системот за пролизгување. 5 мода на работа (Road, Rain, Sport, Off-Road и Off-Road PRO кај Scrambler 1200 XE) се на располагање на секој Sсrambler возач. Сите овие функции се лесно достапни преку контролите на рачките а одбраните сетинзи се јасно прикажани на TFT екранот во боја. И двата модела на Scrambler се компитабилни со Bluetooth функционалностите на Triumph Connectivity системот." ,
                  "image" => "/images/classics/scrambler1200/scrambler1200Reasons3.avif"

                ],
                [
                  "title" => "Дизајн",
                  "desc" => "Со препознатлива силуета и карактер, Scrambler 1200 серијата нуди одличен all-road карактер и ве запознава со Triumph Classic фамилијата која комбинира автентична ДНК со модерни перформанси и стил. Буквално се од внимателно излиениот резервар па се до високо монтираните издувни цевки, неворајтните детали и високо квалитетните материјали па до неверојатно убавите финиши, се е комбинирано за да се извлече оптималниот пакет.",
                  "image" => "/images/classics/scrambler1200/scrambler1200Reasons4.avif"
                ]
              ]
            ]
        ];

        $subFamClassicsDataSix = [
            "subFamilyName" => "bonneville-speedmaster",
            "familyType" => "classics",
            "title" => "Bonneville Speedmaster",
            "price" => 16290,
            "url" => "/motorcycles/classics/bonneville-speedmaster",
            "cc" => 1200,
            "shortDesc" => "Класичен 'custom' став, со комфортна позиција за возење за крузирање и 'premium' спецификации, сега веќе еволуирани.",
            "heroSlogans" => ["Моќен", "Комфортен", "Способен"],
            "specs" => [
                [
              "desc" => "К.ЕК Мотор",
              "data" => 1200
                ],
                [
              "desc" => "PS Коњски Сили",
              "data" => 78
                ],
                [
              "desc" => "NM. Обртен Момент",
              "data" => 106
                ],
                [
              "desc" => "Сервисен Интервал",
              "data" => "16,000"
                ]
            ],
            "subFamilyPageInfo" => [
              "topSection" => [
                "title" => "Класичен Британски Амблем",
                "desc" => "Автентичен и релаксиран британски стајлинг, со подобрени перформанси и управување, со уште покомфортна возачка позиција.",
                "subtitle" => "Bonneville ДНК, со безвременски стил со модерни перформанси"
              ],
              "audioSection" => [
                "title" => "Карактеристичен Speedmaster Звук",
                "desc" => "Препознатлив и карактеристичен Bonneville звук.",
                "audio" => "/images/classics/speedmaster/speedmasterAudio.mp3"
              ],
            ],
            "engineTransmission" => [
                  [
                    "title" => "Мотор",
                    "desc" => "Дво-Цилиндричен „in-line“, 8-вентили, 1ЕЕК,водно ладење"
                  ],
                  [
                    "title" => "капацитет",
                    "desc" => "1200 cc"
                  ],
                  [
                    "title" => "диаметар",
                    "desc" => "97.6 mm"
                  ],
                  [
                    "title" => "рута",
                    "desc" => "80 mm"
                  ],
                  [
                    "title" => "компресија",
                    "desc" => "10 =>1"
                  ],
                  [
                    "title" => "Мах. Коњски Сила",
                    "desc" => "78PS @ 6100 rpm"
                  ],
                  [
                    "title" => "Мах. Обртен Момент",
                    "desc" => "106Nm @ 4000 rpm"
                  ],
                  [
                    "title" => "Систем за убризгување",
                    "desc" => "Electronic multi-point injection"
                  ],
                  [
                    "title" => "Систем за Издувни гасови",
                    "desc" => "Brushed Stainless Steel Dual Casing 2 into 2 Exhaust System with Brushed Stainless Steel Tailpipes"
                  ],
                  [
                    "title" => "Финална Трансмисија",
                    "desc" => "Chain"
                  ],
                  [
                    "title" => "Квачило",
                    "desc" => "Fluid, multi-disc, assisted"
                  ],
                  [
                    "title" => "Менувачка Кутија",
                    "desc" => "6 брзини"
                  ]
            ],
            "frame" => [
                  [
                    "title" => "шасија",
                    "desc" => "тубуларна челична шасија"
                  ],
                  [
                    "title" => "вилушка",
                    "desc" => "Двојна Вилушка"
                  ],
                  [
                    "title" => "предно тркало",
                    "desc" => "16 x 2.5 - жични тркала со 32 жици"
                  ],
                  [
                    "title" => "задно тркало",
                    "desc" => "16 x 3.5 - жични тркала со 32 жици"
                  ],
                  [
                    "title" => "предна гума",
                    "desc" => "MT90B16"
                  ],
                  [
                    "title" => "задна гума",
                    "desc" => "150/80 R16"
                  ],
                  [
                    "title" => "предна суспензија",
                    "desc" => "Showa 47mm"
                  ],
                  [
                    "title" => "задна суспензија",
                    "desc" => "Monoshock"
                  ],
                  [
                    "title" => "предни сопирачки",
                    "desc" => "Dual 310mm, Brembo"
                  ],
                  [
                    "title" => "задна сопирачка",
                    "desc" => "255mm single, Nissin"
                  ],
                  [
                    "title" => "инструментна плочка",
                    "desc" => "Аналоген брзинометар со мулти функционален LCD дисплеј"
                  ]
            ],
            "dimension" => [
                  [
                    "title" => "ширина на волан",
                    "desc" => "910 mm"
                  ],
                  [
                    "title" => "висина без ретровизори",
                    "desc" => "1055 mm"
                  ],
                  [
                    "title" => "Висина на Седиште",
                    "desc" => "705 mm"
                  ],
                  [
                    "title" => "мегу-осовинско растојание ",
                    "desc" => "1500 mm"
                  ],
                  [
                    "title" => "Custer Corner",
                    "desc" => "25.3 º"
                  ],
                  [
                    "title" => "Trace",
                    "desc" => "94 mm"
                  ],
                  [
                    "title" => "Тежина",
                    "desc" => "263 kg"
                  ],
                  [
                    "title" => "капацитет на резервоар",
                    "desc" => "12 L"
                  ]
            ],
                "fuelConsumption" => [
                  [
                    "title" => "Потрошувачка",
                    "desc" => "4.6 l/100km"
                  ],
                  [
                    "title" => "CO2 загадување",
                    "desc" => "105 g/km EURO 5"
                  ]
            ],
            "service" => [
                  [
                    "title" => "Сервисен Интервал",
                    "desc" => "16 000 км / 12 месеци"
                  ]
            ],

              "grayCarousell" => [
                [
                  "id" => "carouselItem1",
                  "title" => "Возбудливи Перформанси",
                  "desc" => "Познатиот дво-цилиндарски линиски 1200cc мотор, со огромен обртен момент - сега уште полесен, респонзивен и EURO 5 компитабилен.",
                  "image" => "/images/classics/speedmaster/speedmasterCaro1.avif"
                ],
                [
                  "id" => "carouselItem2",
                  "title" => "Custom Стил",
                  "desc" => "Уникатен и класичен британски стил и карактер, со спуштен волан и педали за нозе монтирани напред.",
                  "image" => "/images/classics/speedmaster/speedmasterCaro2.avif"

                ],
                [
                  "id" => "carouselItem3",
                  "title" => "Одлично Управување",
                  "desc" => "Карактеристично Speedmaster управување овозможено од компоненти од високи спецификации и прилично големи заштеди во поглед на тежина.",
                  "image" => "/images/classics/speedmaster/speedmasterCaro3.avif"

                ],
                [
                  "id" => "carouselItem4",
                  "title" => "Цело Дневен Комфорт",
                  "desc" => "Отсега со уште по комфортно возачко и совозачко искуство и ниско седиште од 705mm за уште подобро возачко искуство.",
                  "image" => "/images/classics/speedmaster/speedmasterCaro4.avif"

                ],
                [
                  "id" => "carouselItem5",
                  "title" => "Технологија од Високи Стандарди",
                  "desc" => "Две возачки програми, темпомат, ABS, систем за пролизгување, лесно квачило и LED осветлување.",
                  "image" => "/images/classics/speedmaster/speedmasterCaro5.avif"

                ]
              ],
              "specNumbers" => [
                [ "data" => "1200", "info" => "cc Мотор" ],
                [ "data" => "106", "info" => "Nm обртен момент" ],
                [ "data" => "78", "info" => "PS - Максимална Сила" ],
                [ "data" => "16,000", "info" => "КМ Сервисен Интервал" ]
              ],
              "youtubeVideosCarousellItems" => [
                [
                  "src" => "https:://www.youtube.com/embed/9zpx-OrGLpA",
                  "title" => "Speedmaster Youtube Promo Video"
                ],
                [
                  "src" => "https:://www.youtube.com/embed/eKmeKK7DjTc",
                  "title" => "Speedmaster Youtube Promo Video"
                ],
                [
                  "src" => "https:://www.youtube.com/embed/DFPZcQjEdgI",
                  "title" => "Speedmaster Youtube Promo Video"
                ],
                [
                  "src" => "https:://www.youtube.com/embed/W11Zkx35eGg",
                  "title" => "Speedmaster Youtube Promo Video"
                ]
              ],

            "reasonsToDrive" => [
              "banner" => [
                "image" => "/images/classics/speedmaster/speedmasterReasonsBanner.avif"
              ],
              "infoText" => [
                "desc" => "Дознајте уште повеќе детали за овој британски laid-back мотор. Горд носител со автентичната британска Bonneville ДНК, со огромен комодитет овој крузер е создаден со комбинирање на автентичниот британски Bonneville стил и врвни перформанси, управување и контрола."
              ],
              "reasons" => [
                [
                  "title" => "Легендарна Triumph ДНК",
                  "desc" => "Дизајниран да биде наследник на легендарната линија на Triumph крузери од 1960 година, Speedmaster серијата ја носи легендарната Bonneville ДНК, со лежерен крузерски карактер и модерни способности како и елегантни финиши. Со класичниот британски стил, опуштената позиција на воланот и 16 инчните жични тркала, Speedmaster серијата нуди крузерска позиција која ги изнудува сите погледи и ве дели од другите. Ситните детали како излиениот 12 литарски резервоар, кукиштата за инџекторите изработени да изгледаат како дупли-карбуратори со цел да се добие оној автентичен Bonneville карактер, класичниот добош изглед на задното тркало како и минималното користење на пластика доведува да помислите дека овој Speedmaster доаѓа од минатото а сепак ќе ве изненади кога ќе дознаете дека е потполно нов. На сите овие ситни детали ги додаваме и хромираниот издувен систем како и традиционалниот метален држач за акумулаторот, традиционалните светла и седиштето кое овозможува да го одстраните сопатничкиот дел додатно придонесуваат да се добие оној Bobber изглед."
                ],
                [
                  "title" => "Возбудливи Перформанси со многу обртен момент и инстанта респонзивност",
                  "desc" => "Bonneville Speedmaster серијата е подкрепена од добро познатиот 1200cc мотор на Triumph, кој претрпе некои промени за да стане полесен и EURO 5 компитабилен. Се карактеризира со мекост и линеарни перформанси, одличен обртен момент при мали брзини (106Nm @ 4,000rpm), и максимална јачина од 78 коњски сили. Некои клучни делови од моторот претрпеа промени со цел да се намали вкупната тежина и добие повеќе респонзивност и острина.",
                  "image" => "/images/classics/speedmaster/speedmasterReasons1.avif"
                ],
                [
                  "title" => "Карактеристичен британски дво-цилиндричен звук",
                  "desc" => "Speedmaster серијата има уникатен, богат, длабок звук кој се издвојува од другите и ќе ве натера да се вљубите во него. Истиот се произведува во иновативниот дизајн на издувниот систем поделен на двете страни од моторот со што се финализира оној карактеристичен Bobber стил и изглед."
                ],
                [
                  "title" => "Комфорт на Високо Ниво",
                  "desc" => "Speedmaster серијата е позаната по својата комфортна и релаксирана возачка позиција која може уште повеќе да се подобри со „Comfort“ седиштата кои нуди дополнителна потпора и комфорт. Управувањето на Speedmaster беше дополнително унапредено во 2021 година со подобрување на суспензијата (Showa 47mm напред), сопирачките (Brembo & Nissin) и намалување на вкупната тежина за 4 килограми. Со својот тенок струк, високи перформанси, сопирачки, пневматици и специјално дизајнираната рамка која дозволува минимална висина на седиштето од 705мм, Speedmaster серијата е лесна за возење и преубава на изглед.",
                  "image" => "/images/classics/speedmaster/speedmasterReasons2.avif"
                ],
                [
                  "title" => "Најнова технологија за повеќе сигурност и контрола",
                  "desc" => "Speedmaster серијата е многу повеќе од само класичен изглед односно на себе ја носи најновата технологија во индустријата со цел да се подобри сигурноста, контролата и уживањето. Со цел да се подобри сигурноста оваа серија нуди два мода на работа - за дожд и за пат кои го променуваат мапирањето на моторот, го контролираат системот за пролизгување и апликацијата на гас, а за да се овозможи и максимален комфорт тука е и темпоматот кој ќе ја одмори вашата десна дланка. Серијата е опремена со целосна LED расвета и дневни LED светла кои насебе го носат Triumph амблемот. Поновите модели на себе носат и луксузна Triumph рамка која го опколува мултифункционалниот дисплеј чии менија се пристапуваа со допир на копчиња на рачките со што лесно можете да ги промените поставките како и јасно да ги следите сите важни информации."
                ],
                [
                  "title" => "Персонализација",
                  "desc" => "Со повеќе од 79 оригинални Triupmh аксесоари на располагање, Bonneville Speedmaster серијата е спремна за персонализирање. Понудата се состои од аксесоари кои ќе го подобрат комфортот, багаж, греачи на рачки, седишта и разни ситни детали кои ќе додадат уште малку стил и персонален допир на вашиот мотор. Кога е во прашање сигурноста од најлошото Triumph ви обезбедува и разни сигурносни уреди кои ќе ве остават спокојни секогаш."
                ]
              ]
            ],
            "accessory" => [
              "banner" => [
                "image" => "/images/classics/speedmaster/speedmasterTopSectionImageBG.avif"
              ],
              "infoText" => [
                "desc" => "Дизајниран со многу внимание на детали, Bonneville Speedmaster е спремен за ваша персонализација. На располагање ви е селекција од преку 75 оригинални Triupmh аксесоари за оваа серија на мотори. Аксесоарите кои ќе ги додадете може да бидат додадени на вашиот мотор во фабриката. Aксесоарите се дизајнирани од истиот тим кој го креираше Speedmaster и доаѓаат со две-годишна гаранција."
              ],
              "accessoryTypes" => [
                [
                  "title" => "Практичност и Стил",
                  "desc" => "Speedmaster нуди прекрасно изработен багаж, и нуди можности истиот да го монтирате на десната или на левата страна или најдобро и на двете. Самите торби се изработени од кожа и од памук како и стилизирани метални елементи. Индивидуални лајсни за монтирање се финиширани се хромирани и се дизајнирани перфектно да се вклопат во линиите на моторот. Торбите за багаж додаваат 13.8 литри доплнителен простор за багаж и на двете страни од моторот па затоа не треба да се грижите и треба да понесете се што ви е потребно за безгрижна авантура.",
                  "image1" => [
                    "src" => "/images/classics/speedmaster/speedmasterAccess1.avif",
                    "alt" => "Speedmaster Luggage"
                  ]
                ],
                [
                  "title" => "Комфорт",
                  "desc" => "Надоградете го сопатничкото седиште со додавање перниче за потпирање. Истото ќе изнуди поголема самодоверба, уживање и ќе придонесе за поголемо ниво на комфорт за сопатникот. Дизајнирано за да ја подобри ергономија ова седиште е изработено со оној препознатлив Speedmaster стил на ум. Како темел на целото седеиште е хромираната рамка која потполно се вклопува во дизајнот и силуетата на Speedmaster серијата.",
                  "image1" => [
                    "src" => "/images/classics/speedmaster/speedmasterAccess2.avif",
                    "alt" => "Speedmaster"
                  ],
                  "image2" => [
                    "src" => "/images/classics/speedmaster/speedmasterAccess3.avif",
                    "alt" => "Speedmaster Seat"
                  ]
                ]
              ]
            ],
            "shortSpecInfo" => [
              "info2" => "Новата Thriumph Stealth Серија е достапна"
            ],
            "gallery" => [
              "modelImage" => [
                "src" => "/images/classics/bonnevilleSpeedmasterStealth.avif",
                "alt" => "Bonneville Speedmaster Range Model Image"
              ],
              "subFamilyHeroVideo" => [
                "src" => "/images/classics/speedmaster/speedmasterHeroVideo.webm",
                "alt" => "SpeedMaster Range Model Image"
              ],
              "subFamilyHeroImageMobile" => [
                "src" => "/images/classics/speedmaster/speedmasterMobileHero.avif",
                "alt" => "SpeedMaster Range Hero Image"
              ],
              "subFamilyTopSectionImage" => [
                "src" => "/images/classics/speedmaster/speedmasterTopSectionImage.avif",
                "alt" => "SpeedMaster Range Model Image Top Section Image"
              ],
              "subFamilyTopSectionBGImage" => [
                "src" => "/images/classics/speedmaster/speedmasterTopSectionImageBG.avif",
                "alt" => "SpeedMaster Range Model Image Top Section Image BG"
              ]
            ]
        ];

        $subFamClassicsDataSeven = [
            "subFamilyName" => "speed-twin-1200",
            "familyType" => "classics",
            "title" => "Speed Twin 1200",
            "price" => 14190,
            "url" => "/motorcycles/classics/speed-twin-1200",
            "cc" => 1200,
            "youtubeVideo" => "https:://www.youtube.com/embed/YbdA9MwBu5o",
            "heroSlogans" => ["Репер", "За", "Перформанси"],
            "shortDesc" => "Модерно-класичен приспособен 'roadster' со динамични способности, целосно лесен за управување, многу напредна технологија, возбудлива испорака на вртежен момент со препознатлив британски звук.",
            "specs" => [
                [
              "desc" => "К.ЕК Мотор",
              "data" => 1200
                ],
                [
              "desc" => "PS Коњски Сили",
              "data" => 100
                ],
                [
              "desc" => "NM. Обртен Момент",
              "data" => 112
                ],
                [
              "desc" => "Сервисен Интервал",
              "data" => "16,000"
                ]
            ],
            "subFamilyPageInfo" => [
              "topSection" => [
                "title" => "Еволуција на Секое Поле",
                "desc" => "Подобри перформанси, подобрено управување, напредна технологија и врвен стил. Извноредната Speed Twin серија е новиот репер во класата.",
                "subtitle" => "Неспоредливата спортска модерно-класична серија со динамично возачко искуство."
              ],
              "audioSection" => [
                "title" => "Препознатлив Звук",
                "desc" => "Дупли нагоре извајани издувни цевки го произведуваат оној препознатлив Speed Twin звук.",
                "audio" => "/images/classics/speedTwin1200/speedTwin1200Sound.mp3"
              ]
            ],
            "engineTransmission" => [
                [
                  "title" => "Мотор",
                  "desc" => "Дво-Цилиндричен „in-line“, 8-вентили, 1ЕЕК, водно ладење"
                ],
                [
                  "title" => "капацитет",
                  "desc" => "1200 cc"
                ],
                [
                  "title" => "диаметар",
                  "desc" => "97.6 mm"
                ],
                [
                  "title" => "рута",
                  "desc" => "80 mm"
                ],
                [
                  "title" => "компресија",
                  "desc" => "12.1 =>1"
                ],
                [
                  "title" => "Мах. Коњски Сила",
                  "desc" => "100 PS @ 7250 rpm"
                ],
                [
                  "title" => "Мах. Обртен Момент",
                  "desc" => "112 Nm @ 4250 rpm"
                ],
                [
                  "title" => "Систем за убризгување",
                  "desc" => "Electronic multi-point injection"
                ],
                [
                  "title" => "Систем за Издувни гасови",
                  "desc" => "Brushed Stainless Steel Dual Casing 2 into 2 Exhaust System with Brushed Stainless Steel Tailpipes"
                ],
                [
                  "title" => "Финална Трансмисија",
                  "desc" => "O ring chain"
                ],
                [
                  "title" => "Квачило",
                  "desc" => "Liquid, multi-disc, torque assisted"
                ],
                [
                  "title" => "Менувачка Кутија",
                  "desc" => "6 брзини"
                ]
              ],
            "frame" => [
                [
                  "title" => "шасија",
                  "desc" => "тубуларна челична шасија"
                ],
                [
                  "title" => "вилушка",
                  "desc" => "Двојна Вилушка"
                ],
                [
                  "title" => "предно тркало",
                  "desc" => "17” x 3.5” - лиен алуминиум"
                ],
                [
                  "title" => "задно тркало",
                  "desc" => "17 x 5.0‘ - лиен алуминиум"
                ],
                [
                  "title" => "предна гума",
                  "desc" => "120/70 ZR17"
                ],
                [
                  "title" => "задна гума",
                  "desc" => "160/60 ZR17"
                ],
                [
                  "title" => "предна суспензија",
                  "desc" => "Marzocchi inverted fork, 120k travel"
                ],
                [
                  "title" => "задна суспензија",
                  "desc" => "Double shock absorbers with adjustable preload, 120 mm rear wheel travel"
                ],
                [
                  "title" => "предни сопирачки",
                  "desc" => "Dual 320mm, Brembo М50, ABS"
                ],
                [
                  "title" => "задна сопирачка",
                  "desc" => "220mm single, Nissin, ABS"
                ],
                [
                  "title" => "инструментна плочка",
                  "desc" => "Двојни аналогни брзинометар со мулти функционален LCD дисплеј"
                ]
            ],
            "dimension" => [
                [
                  "title" => "ширина на волан",
                  "desc" => "778 mm"
                ],
                [
                  "title" => "висина без ретровизори",
                  "desc" => "1097 mm"
                ],
                [
                  "title" => "Висина на Седиште",
                  "desc" => "809 mm"
                ],
                [
                  "title" => "мегу-осовинско растојание ",
                  "desc" => "1413 mm"
                ],
                [
                  "title" => "Custer Corner",
                  "desc" => "22.3º"
                ],
                [
                  "title" => "Trace",
                  "desc" => "91.5 mm"
                ],
                [
                  "title" => "Тежина",
                  "desc" => "216 kg"
                ],
                [
                  "title" => "капацитет на резервоар",
                  "desc" => "14.5 L"
                ]
            ],
            "fuelConsumption" => [
                [
                  "title" => "Потрошувачка",
                  "desc" => "5.1 l/100km"
                ],
                [
                  "title" => "CO2 загадување",
                  "desc" => "116 g/km EURO 5"
                ]
            ],
            "service" => [
                [
                  "title" => "Сервисен Интервал",
                  "desc" => "16 000 км / 12 месеци"
                ]
            ],
            "grayCarousell" => [
              [
                "id" => "carouselItem1",
                "title" => "Подобрено Управување",
                "desc" => "Врвна периферна опрема и високо перформатните пневматици нудат врвно управување.",
                "image" => "/images/classics/speedTwin1200/speedTwin1200Caro1.avif"
              ],
              [
                "id" => "carouselItem2",
                "title" => "Високо Перфромантен Дво-Цилиндричен Мотор",
                "desc" => "Унапредениот сега EURO 5 компитабилен 1200cc мотор сега уште помоќен, респонзивен и повозбудлив.",
                "image" => "/images/classics/speedTwin1200/speedTwin1200Caro2.avif"

              ],
              [
                "id" => "carouselItem3",
                "title" => "Нови Возачки Програми",
                "desc" => "Дискретно интегрираната технологија ја подобрува сигурноста и уживањето на возачот без да го уништи карактерот на Speed Twin 1200 серијата.",
                "image" => "/images/classics/speedTwin1200/speedTwin1200Caro3.avif"

              ],
              [
                "id" => "carouselItem4",
                "title" => "Луксуз и Стил",
                "desc" => "Модерниот „гол до коска“ стил и присуство сега е подобрено со нови тркала и издувни цевки.",
                "image" => "/images/classics/speedTwin1200/speedTwin1200Caro4.avif"

              ],
              [
                "id" => "carouselItem5",
                "title" => "Уште повеќее Луксузни Детали",
                "desc" => "Големото внимание посветено на деталите ја дефинира премиум завршницата на Speed Twin серијата.",
                "image" => "/images/classics/speedTwin1200/speedTwin1200Caro5.avif"

              ]
            ],
            "specNumbers" => [
              [ "data" => "1200", "info" => "cc Мотор" ],
              [ "data" => "112", "info" => "Nm обртен момент" ],
              [ "data" => "100", "info" => "PS - Максимална Сила" ],
              [ "data" => "16,000", "info" => "КМ Сервисен Интервал" ]
            ],
            "youtubeVideosCarousellItems" => [
              [
                "src" => "https:://www.youtube.com/embed/KC_E0rSlQdQ",
                "title" => "Speed Twin 1200 Youtube Promo Video"
              ],
              [
                "src" => "https:://www.youtube.com/embed/xAKLb7kCShs",
                "title" => "Speed Twin 1200 Youtube Promo Video"
              ],
              [
                "src" => "https:://www.youtube.com/embed/YbdA9MwBu5o",
                "title" => "Speed Twin 1200 Youtube Promo Video"
              ],
              [
                "src" => "https:://www.youtube.com/embed/ykl3VoGrE6g",
                "title" => "Speed Twin 1200 Youtube Promo Video"
              ]
            ],
            "reasonsToDrive" => [
              "banner" => [
                "image" => "/images/classics/speedTwin1200/speedTwinReasonsBanner.avif"
              ],
              "infoText" => [
                "title" => "Репер за перформанси. Еволуција од секакви размери",
                "desc" => "Наградуваната Triumph Speed Twin серија на мотори претрпе неколку значајни редизајни со цел уште повеќе да ја затемели својата позиција во класата. Отсега со подобар мотор, суспензија и сопирачки и лесни тркала."
              ],
              "reasons" => [
                [
                  "title" => "Надграден 1200cc Мотор",
                  "desc" => "Големи надградби на моторот придонесоа за повеќе сила и моќност на истиот со зголемување на максималната сила за 3 коњски сили за да се постигне симболичната бројка од 100 коњски сили. Надоградбите донесоа и повеќе коќност кога е во прашање обртниот момент сега зголемен за 30%. Исто така вкупната тежина е намалена а високата компресија во цилиндрите обезбеди поголема респонзивност. И покрај зголемувањето на максималната јачина сепак овој мотор се грижи и за околината и е EURO 5 компитабилен.",
                  "image" => "/images/classics/speedTwin1200/speedTwin1200Reasons1.avif"
                ],
                [
                  "title" => "Одлично Управување",
                  "desc" => "Многуте награди и признанија и големите фан бази на оваа серија се темели токму на лесното, интуитивно и спортско управување на моторите. Дизајнерите на оваа серија имаа само една цел - да дизајнираат мотор за потполно уживање и да го пренесат тој дизајн во еден спортки модерно/класичен мотор. Со предна суспензија од Marzocchi (43mm), Speed Twin 1200 има извонредно комфортно возење и агилност. За да се скроти огромната сила на Speed Twin серијата тука се и Brembo M50 сопирачките со двојни 320 милиметарски дискови напред. Лесните алуминиумски тркала го дополнуваат дизајнот на Soeed Twin серијата. Подкрепени со Metzeler Racetec RR пневматици истите се спремни за било како предизвик.",
                  "image" => "/images/classics/speedTwin1200/speedTwin1200Reasons2.avif"
                ],
                [
                  "title" => "Изглед",
                  "desc" => "Започнувајки од лесните 12 кракни алуминиумски тркала па се до системот на бои и графици, Speed Тwin серијата е обвиткана со стил и ситни детали. Носејки ја со себе безвременската Triumph ДНК и модерниот „naked-custom“ стил, Speed Twin серијата ги привлекува сите погледи. Ситните детали како и металните држачи за светло и браници, алуминиумските браници, излиениот 14.5 литарски резервоат само го комплетираат стилот и линијата на Speed Twin серијата.",
                  "image" => "/images/classics/speedTwin1200/speedTwin1200Reasons3.avif"
                ],
                [
                  "title" => "Модерни Способности",
                  "desc" => "Напредната сигурносна технологија е дискретно сместена насекаде низ Speed Twin серијата. На располагање ви се три возачки мода - Дожд, Патнички и Спорт кои го променуваат мапирањето на моторот и работата на системот за пролизгување и ABS. Истите можат да бидат променети со само еден клик на рачките. Лесните за читање инструменти нудат голем број на информации како количина на гориво, степен на пренос,, мод на работа, сервисен индикатор исто така лесни на дофат со ролер за контролирање. Поставен е и систем за имобилизација како и USB порта за вашиот телефон."
                ],
                [
                  "title" => "Достапност",
                  "desc" => "Возбудлив за искусните возачи и сигурен за новите возачи. Speed Twin серијата е одлично избалансирана и лесна за возење. Со нејзината тенка силуета и висина на седиштето од 809 милиметри, комфортна позиција на педалите за стапала и волан, Speed Twin серијата нуди релаксирана, исправена возачка позиција која буди самодоверба и удобност."
                ]
              ]
            ],
            "accessory" => [
              "banner" => [
                "image" => "/images/classics/speedTwin1200/speedTwinReasonsBanner.avif"
              ],
              "accessoryTypes" => [
                [
                  "title" => "Заштита",
                  "desc" => "Протектор за Мотор - Класичен сил и одлична заштита од несакани предмети и падови, овој челичен рам доаѓа во сјаен или графитно црн или сив финиш. Без разлика на изборот на бојата сигурноста е загарантирана. Дополнителните протектори се инсталираат за помалку од 20 минути и нудат одлична заштита од посилни удари. За вашиот резервоар да не претрпува гребаници од вашите колена тука е и штитниците за резервоар кои се монтираат странично на резервоарот и нудат одлична заштита но додаваат и малку стил.",
                  "image1"  => [
                    "src" => "/images/classics/speedTwin1200/speedTwinAccess1.avif",
                    "alt" => "speed Twin 1200 "
                  ],
                  "image2" => [
                    "src" => "/images/classics/speedTwin1200/speedTwinAccess2.avif",
                    "alt" => "speed Twin 1200 "
                  ]
                ],
                [
                  "title" => "Изглед",
                  "desc" => "Кружните ретровизори се одлична замена за стандардните. Инсталацијата трае помалку од 30 минути а како резултат ќе добиете импресивен изглед со цврсти, високо-квалитетни елементи. Рачно Шиено Седиште - Додајте класичен Tirumph карактер со ова рачно изработено и прецизно сошиено седиште кое гордо го носи Triumph амблемот. Исто така го подобрува нивото на комфорт. Машински изработен држач за светло - овој дискретен и елегантен детал додава уште малку стил и го дава оној vintage изглед.",
                  "itemsList" => [
                    "Кружни Ретровизори",
                    "Рачно Изработено Седиште",
                    "Машиснки изработен држач за светло",
                    "Заштитна плоча на долен дел од мотор"
                  ],
                  "image1" => [
                    "src" => "/images/classics/speedTwin1200/speedTwinAccess3.avif",
                    "alt" => "speed Twin 1200 "
                  ],
                  "image2" => [
                    "src" => "/images/classics/speedTwin1200/speedTwinAccess4.avif",
                    "alt" => "speed Twin 1200 "
                  ]
                ],
                [
                  "title" => "Електрика",
                  "desc" => "Мултифункционален Светлосен Сет - задниот дел на Speed Twin серијата го краси комплетен сет светла кои додаваат минамилистички стил со стандардна функционалност. Сетот потполно ги заменува стандардните светлосни елемнти на задниот дел од моторот а со посветениот алуминиумски рам за монтирање додава дополнител стил. LED трепкачи - совршен комплет доколку барате уште нешто ситно што ќе додаде малку карактер. Сетот се состои од алуминиумски држач, сјајно црно тело во форма на куршум и сјајни лупи. Истиот е достапен во различни големини може да биде искомбиниран со мултифункционалниот светлосен сет и е лесен за вградување.",
                  "itemsList" => [
                    "Мултифункционален Светлосен Сет",
                    "LED трепкачи",
                    "TPMS - Систем за мониторинг на притисок во пневматиците"
                  ]
                ]
              ]
            ],
            "shortSpecInfo" => [
              "info2" => "Новата Thriumph Stealth Серија е достапна"
            ],
            "gallery" => [
              "modelImage" => [
                "src" => "/images/classics/speedTwin1200.png",
                "alt" => "Speed Twin 1200 Speedmaster Range Model Image"
              ],
              "subFamilyHeroVideo" => [
                "src" => "/images/classics/speedTwin1200/speedTwin1200HeroVideo.webm",
                "alt" => "Speed Twin 1200 Range Model Image"
              ],
              "subFamilyHeroImageMobile" => [
                "src" => "/images/classics/speedTwin1200/speedTwin1200HeroMobile.avif",
                "alt" => "Speed Twin 1200 Range Hero Image"
              ],
              "subFamilyTopSectionImage" => [
                "src" => "/images/classics/speedTwin1200/speedTwin1200TopSectionImage.avif",
                "alt" => "speedTwin1200 Range Model Image Top Section Image"
              ],
              "subFamilyTopSectionBGImage" => [
                "src" => "/images/classics/speedTwin1200/speedTwin1200TopSectionImageBG.avif",
                "alt" => "Speed Twin 1200 Range Model Image Top Section Image BG"
              ]
            ]
        ];

        $subFamClassicsDataEight = [
            "subFamilyName" => "scrambler-900",
            "familyType" => "classics",
            "title" => "Scrambler 900",
            "price" => 11890,
            "url" => "/motorcycles/classics/scrambler-900",
            "cc" => 900,
            "specs" => [
                [
              "desc" => "К.ЕК Мотор",
              "data" => 900
                ],
                [
              "desc" => "PS Коњски Сили",
              "data" => 65
                ],
                [
              "desc" => "NM. Обртен Момент",
              "data" => 80
                ],
                [
              "desc" => "Сервисен Интервал",
              "data" => "16,000"
                ]
          ],
            "shortDesc" => "Еден од најприфатените мотори на Triumph, кој благодарејки на преубавиот стајлинг и 'off-road' карактер, си доби висока репутација без никаков преседан.",
            "heroSlogans" => ["Забавен", "Моќен", "Преубав"],
            "subFamilyPageInfo" => [
              "topSection" => [
                "title" => "Забавен и Моќен",
                "desc" => "Bonneville перформанси - со нова свежина и стил - Најдобриот Street Scrambler е тука.",
                "subtitle" => "„Гарантирана забава и успешна авантура“ - Motocislismo."
              ],
              "audioSection" => [
                "title" => "Уникатен Звук",
                "desc" => "Уникатен британски дво-цилиндричен звук.",
                "audio" => "/images/classics/scrambler900/scrambler900Audio.mp3"
              ],
            ],
            "engineTransmission" => [
                [
                  "title" => "Мотор",
                  "desc" => "Дво-Цилиндричен „in-line“, 8-вентили, 1ЕЕК, водно ладење"
                ],
                [
                  "title" => "капацитет",
                  "desc" => "900 cc"
                ],
                [
                  "title" => "диаметар",
                  "desc" => "84.6 mm"
                ],
                [
                  "title" => "рута",
                  "desc" => "80 mm"
                ],
                [
                  "title" => "компресија",
                  "desc" => "11.0 =>1"
                ],
                [
                  "title" => "Мах. Коњски Сила",
                  "desc" => "65 PS @ 7250 rpm"
                ],
                [
                  "title" => "Мах. Обртен Момент",
                  "desc" => "80 Nm @ 3250 rpm"
                ],
                [
                  "title" => "Систем за убризгување",
                  "desc" => "Electronic multi-point injection"
                ],
                [
                  "title" => "Систем за Издувни гасови",
                  "desc" => "Brushed Stainless Steel Dual Casing 2 into 2 Exhaust System with Brushed Stainless Steel Tailpipes"
                ],
                [
                  "title" => "Финална Трансмисија",
                  "desc" => "O ring chain"
                ],
                [
                  "title" => "Квачило",
                  "desc" => "Liquid, multi-disc, torque assisted"
                ],
                [
                  "title" => "Менувачка Кутија",
                  "desc" => "5 брзини"
                ]
            ],
            "frame" => [
                [
                  "title" => "шасија",
                  "desc" => "тубуларна челична шасија"
                ],
                [
                  "title" => "вилушка",
                  "desc" => "Двојна Челична Вилушка"
                ],
                [
                  "title" => "предно тркало",
                  "desc" => "19” x 2.5”"
                ],
                [
                  "title" => "задно тркало",
                  "desc" => "17 x 4.25‘"
                ],
                [
                  "title" => "предна гума",
                  "desc" => "100/90-19 Metzeler Tourance"
                ],
                [
                  "title" => "задна гума",
                  "desc" => "150/70 R17 Metzeler Tourance"
                ],
                [
                  "title" => "предна суспензија",
                  "desc" => "41mm fork with cartridge damping. 120 km route"
                ],
                [
                  "title" => "задна суспензија",
                  "desc" => "Double shock absorbers with adjustable preload. 120mm"
                ],
                [
                  "title" => "предни сопирачки",
                  "desc" => "Dual 310mm, Brembo, ABS"
                ],
                [
                  "title" => "задна сопирачка",
                  "desc" => "255mm single, Nissin, ABS"
                ],
                [
                  "title" => "инструментна плочка",
                  "desc" => "Аналоген брзинометар со мулти функционален LCD дисплеј"
                ]
              ],
            "dimension" => [
                [
                  "title" => "ширина на волан",
                  "desc" => "835 mm"
                ],
                [
                  "title" => "висина без ретровизори",
                  "desc" => "1180 mm"
                ],
                [
                  "title" => "Висина на Седиште",
                  "desc" => "790 mm"
                ],
                [
                  "title" => "мегу-осовинско растојание ",
                  "desc" => "1445 mm"
                ],
                [
                  "title" => "Custer Corner",
                  "desc" => "25.6 º"
                ],
                [
                  "title" => "Trace",
                  "desc" => "109 mm"
                ],
                [
                  "title" => "Тежина",
                  "desc" => "223 kg"
                ],
                [
                  "title" => "капацитет на резервоар",
                  "desc" => "12 L"
                ]
              ],
            "fuelConsumption" => [
                [
                  "title" => "Потрошувачка",
                  "desc" => "4.3 l/100km"
                ],
                [
                  "title" => "CO2 загадување",
                  "desc" => "99 g/km EURO 5"
                ]
              ],
            "service" => [
                [
                  "title" => "Сервисен Интервал",
                  "desc" => "16 000 км / 12 месеци"
                ]
              ],
            "grayCarousell" => [
              [
                "id" => "carouselItem1",
                "title" => "Перфектен Градски Scrambler",
                "desc" => "Командната возачка позиција нуди одлична самодоверба во градските средини и на off-road патеки.",
                "image" => "/images/classics/scrambler900/scrambler900Caro1.avif"
              ],
              [
                "id" => "carouselItem2",
                "title" => "Одлично Еволуиран",
                "desc" => "Автентичната Scrambler силуета отсега со уште повеќе луксуз, стил и детали.",
                "image" => "/images/classics/scrambler900/scrambler900Caro2.avif"

              ],
              [
                "id" => "carouselItem3",
                "title" => "Надградба",
                "desc" => "Во текот на 2021 година, оваа серија беше надградена со цел да се постигнат EURO 5 стандарди но и да испорача 65 PS @ 7250 rpm максимални коњски сили и одличен обртен момент низ целиот обсег на револуции на моторот.",
                "image" => "/images/classics/scrambler900/scrambler900Caro3.avif"

              ],
              [
                "id" => "carouselItem4",
                "title" => "Персонализација",
                "desc" => "Одберете од огромната палета на оригинални Triumph аксесоари специјално креирани за Scrambler серијата. Од опциите за багаж па се до заштита, комфорт и сигурност..",
                "image" => "/images/classics/scrambler900/scrambler900Caro4.avif"

              ],
              [
                "id" => "carouselItem5",
                "title" => "Интуитивен и Достапен",
                "desc" => "Со растојание помеѓу моторот и земјиното тло од 790мм, исправена возачка позиција, широк волан и специјализираната рамка Scrambler 900 серијата е извонредно комфортна и лесна за управување.",
                "image" => "/images/classics/scrambler900/scrambler900Caro5.avif"

              ],
              [
                "id" => "carouselItem6",
                "title" => "Високи Стандарди",
                "desc" => "Brembo сопирачки, Metzeler Tourance пневматици и уште многу други детали.",
                "image" => "/images/classics/scrambler900/scrambler900Caro6.avif"

              ]
            ],
            "specNumbers" => [
              [ "data" => "900", "info" => "cc Мотор" ],
              [ "data" => "80", "info" => "Nm обртен момент" ],
              [ "data" => "65", "info" => "PS - Максимална Сила" ],
              [ "data" => "16,000", "info" => "КМ Сервисен Интервал" ]
            ],
            "youtubeVideosCarousellItems" => [
              [
                "src" => "https:://www.youtube.com/embed/XnDDpYplJO4",
                "title" => "Scrambler 900 Youtube Promo Video"
              ],
              [
                "src" => "https:://www.youtube.com/embed/wDDvTxWtiks",
                "title" => "Scrambler 900 Youtube Promo Video"
              ],
              [
                "src" => "https:://www.youtube.com/embed/iEWSwPcPreQ",
                "title" => "Scrambler 900 Youtube Promo Video"
              ]
            ],

            "reasonsToDrive" => [
              "banner" => [
                "image" => "/images/classics/scrambler900/scrambler900ReasonsBanner.avif"
              ],
              "infoText" => [
                "desc" => "Препознатлив Scrambler дизајн, возбудливи Bonneville перформанси, технологија и одлично управување - оваа Scrambler серија нуди мореден scrambler карактер со off-road перформанси, луксузни финиши и помлаку загадување."
              ],
              "reasons" => [
                [
                  "title" => "Стил",
                  "desc" => "Како дел од автентичната Bonneville фамилија, Scrambler серијата се карактеризира со автентична Scrambler силуета со чисти и прецизни линии и минимално користење на пластични елементи. Истата екнорпорира модерни финиши за уште повеќе стил и детали. На располагање се три различни бои - Jett Black, Urban Grey & Matt Khaki/Matt Ironston. Секој финиш располага со алуминиумски парчиња и ласерски гравирани Triumph логоа насекаде по каросеријата.",
                  "image" => "/images/classics/speedTwin1200/speedTwin1200Reasons1.avif"
                ],
                [
                  "title" => "Перформанси",
                  "desc" => "Bonneville моторот од 900cc произведува возбудлива сила и одличен обртен момент (65 PS @ 7,250 rpm & 80 Nm @ 3,250 rpm) и истите ги пренесува во предвидливи манири. Овој мотор е водно ладен и е почист, поекономичен и EURO 5 компитабилен. Истиот го испорачува оној препознатлив Bonnbeville британски звук."
                ],
                [
                  "title" => "Капацитети",
                  "desc" => "Светски реномираните Brembo сопирачки оддаваат одлично чувство при сопирање и будат чувство на самодоверба кај возачот. Одличната суспензија се карактеризира со висока предна вилушка со традиционални гумени заштитни ракави додека задната суспензија е составена од темно сивкаст амортизер кој овозможува еластичност до 120мм на задниот дел на моторот со што обезбедува комфортно патување."
                ],
                [
                  "title" => "Ергономија и Контрола",
                  "desc" => "Одличната ергономија на Scrambler 900 серијата нуди одлична контрола врз моторот. Изработена е специјална рамка со алуминиумски волан и средно поставени педали за носе. Комбинирана со одличната суспензија и големиот дијаметар на предното тркало (19 инчи), нуди командна возачка позиција за која ја подобрува агилноста на моторот. Scrambler 900 серијата е извонредно комфортна и агилна при градските средини, на отворени патишта и на off-road патеки."
                ],
                [
                  "title" => "Достапност и Забава",
                  "desc" => "А2 сетот нуди моѓност вашиот Scrambler да го возите со А2 лиценца односно ги намалува перформансите на моторот и го прави достапен и за возачите - почетници. Сетот може многу лесно да биде вграден и осдтранет во секој Triumph центар. Две годишната (16.000км ) гаранција е тука за да возите спокојно.",
                  "image" => "/images/classics/scrambler900/scrambler900Reasons2.avif"
                ],
                [
                  "title" => "Технологија",
                  "desc" => "Технологија од најновата генерација е тука за да го оптимизира вашето возачко искуство. Одберете помеѓу трите возачки мода - (Road, Dain & Off-Road) со притискање на команди на волан и возете безгрижно бидејки овие модови ги оптимизираат перформансите на моторот. ABS и системот за пролизгување ќе ви дадат дополнителна доза на самодоверба и во нивни раце ќе се чувствувате безбедно."
                ],
                [
                  "title" => "Тркала и Пневматици",
                  "desc" => "Како завршен детал на силиетата на Scrambler 900 серијата се наоѓаат тркалата од 19 инчи напред и 17 инчи назад кои носат Metzeler Tourance dual-use пневматици кои даваат одлично ниво на тракција на патиштата и надвор од нив."
                ],
                [
                  "title" => "Аксесоари",
                  "desc" => "Со повеќе од 120 оригинални Triupmh аксесоари на располагање, Scrambler 900 серијата е спремна за персонализирање. Понудата се состои од аксесоари кои ќе го подобрат комфортот, сигурноста, заштитата, стилот и ќе додадат уште маллку персонален допир на вашиот мотор. Кога е во прашање сигурноста од најлошото Triumph ви обезбедува и разни сигурносни уреди кои ќе ве остават спокојни секогаш."
                ]
              ]
            ],
            "accessory" => [
              "banner" => [
                "image" => "/images/classics/scrambler900/scrambler900AccessBanner.avif"
              ],
              "infoText" => [
                "desc" => "Со повеќе од 120 оригинални Triupmh аксесоари на располагање, Scrambler 900 серијата е спремна за персонализирање. Понудата се состои од аксесоари кои ќе го подобрат комфортот, сигурноста, заштитата, стилот и ќе додадат уште малку персонален допир на вашиот мотор. Кога е во прашање сигурноста од најлошото Triumph ви обезбедува и разни сигурносни уреди кои ќе ве остават спокојни секогаш."
              ],
              "accessoryTypes" => [
                [
                  "title" => "Комфорт",
                  "desc" => "За највисоко ниво на комфорт и стил тука е рамното седиште. Достапно во црна и кафеава боја, ова традиционално двојно Scrambler седиште се карактеризира со детални шевови и Triumph логоа како и специјално изработена порница за подобра распределба на тежината што оддава поголемо ниво на комфорт за подолги патувања."
                ],
                [
                  "title" => "Персонализација",
                  "desc" => "Дополнително персонализрајте го вашиот Scrambler 900 со „Adjustable Levers“ сетот со кој ги заменувате стандардните полуги за кочници и квачило. Овој сет е CNC изграваран од алуминиум и доаѓа во две бои црна или црвена. Заедно со дополнителниот црн или сив волан оваа е одлична комбинација која мора да ја имате на вашиот Scrambler 900. Друга опција е „Fender Kit“ кој ги одстранува стандардните браници, додава екстра стил на држачите за регистарски таблички и нуди опција за монтирање на мултифункционалниот заден комплет LED светла и LED трепкачи."
                ],
                [
                  "title" => "Суспензија",
                  "desc" => "За да добиете уште помоќен off-road карактер на располагање ви стои и FOX задната суспензија која лесно се подесува кон вашите преференци. Ова парче е специјално изработено за Scrambler 900 серијата и се вградува за помалку од 30 минути. Fox сетот нуди 24 опции за подесување на задната суспензија."
                ],
                [
                  "title" => "Off-Road опрема",
                  "desc" => "Бидејки Scrambler 900 серијата е наменета и за off-road авантури, тука се и неколкуте специјализирани off-road парчиња, како - штитник за мотор кој ги држи понастрана несканите тврди предмети од моторот и додава off-road изглед Централната ногарка е тука за кога ви е потребно брзо и лесно паркирање како и повеќе опции за багаж."
                ]
              ]
            ],
            "shortSpecInfo" => [
              "info2" => "Новата Thriumph Stealth Серија е достапна"
            ],
            "gallery" => [
              "modelImage" => [
                "src" => "/images/classics/scrambler900.png",
                "alt" => "Scrambler 900 Speedmaster Range Model Image"
              ],
              "subFamilyHeroVideo" => [
                "src" => "/images/classics/scrambler900/scrambler900HeroVideo.webm",
                "alt" => "Speed Twin 1200 Range Model Image"
              ],
              "subFamilyHeroImageMobile" => [
                "src" => "/images/classics/scrambler900/scrambler900HeroMobile.avif",
                "alt" => "Speed Twin 1200 Range Hero Image"
              ],
              "subFamilyTopSectionImage" => [
                "src" => "/images/classics/scrambler900/scrambler900TopSectionImage.avif",
                "alt" => "scrambler900 Range Model Image Top Section Image"
              ],
              "subFamilyTopSectionBGImage" => [
                "src" => "/images/classics/scrambler900/scrambler900TopSectionImageBG.avif",
                "alt" => "Speed Twin 1200 Range Model Image Top Section Image BG"
              ]
            ]
        ];

        $subFamClassicsDataNine = [
            "subFamilyName" => "bonneville-t100",
            "familyType" => "classics",
            "title" => "Bonneville T100",
            "price" => 11690,
            "url" => "/motorcycles/classics/bonneville-t100",
            "cc" => 900,
            "specs" => [
                [
              "desc" => "К.ЕК Мотор",
              "data" => 900
                ],
                [
              "desc" => "PS Коњски Сили",
              "data" => 65
                ],
                [
              "desc" => "NM. Обртен Момент",
              "data" => 80
                ],
                [
              "desc" => "Аксесоари",
              "data" => "117"
                ]
            ],
            "shortDesc" => "T100 е модерен класик. Доаѓа како наследик на Bonneville '59 со сега веќе перфектни финиши и детали.",
            "heroSlogans" => ["Автентичен", "Моќен", "Преубав"],
            "subFamilyPageInfo" => [
              "topSection" => [
                "title" => "Автентичен за Секого",
                "desc" => "Безвремеснки стил, возбудливи перформанси и инспиративен. Т100 серијата е перфектен начин да се запознаете со Bonneville фамилијата.",
                "subtitle" => "Bonneville T100 е модерен класик со уште подобри перформанси, високи спецификации и уште повеќе стил."
              ],
              "audioSection" => [
                "title" => "Легендарен Bonneville Тон",
                "desc" => "Уникатен длабок дво-цилиндричен Triumph звук.",
                "audio" => "/images/classics/bonnevilleT100/bonT100Audio.mp3"
              ],
            ],
            "engineTransmission" => [
                [
                  "title" => "Мотор",
                  "desc" => "Дво-Цилиндричен „in-line“, 8-вентили, 2ЕЕК, водно ладење"
                ],
                [
                  "title" => "капацитет",
                  "desc" => "900 cc"
                ],
                [
                  "title" => "диаметар",
                  "desc" => "84.6 mm"
                ],
                [
                  "title" => "рута",
                  "desc" => "80 mm"
                ],
                [
                  "title" => "компресија",
                  "desc" => "11.0:1"
                ],
                [
                  "title" => "Мах. Коњски Сила",
                  "desc" => "65 PS @ 7250 rpm"
                ],
                [
                  "title" => "Мах. Обртен Момент",
                  "desc" => "80 Nm @ 3250 rpm"
                ],
                [
                  "title" => "Систем за убризгување",
                  "desc" => "Electronic multi-point injection"
                ],
                [
                  "title" => "Систем за Издувни гасови",
                  "desc" => "Brushed Stainless Steel Dual Casing 2 into 2 Exhaust System with Brushed Stainless Steel Tailpipes"
                ],
                [
                  "title" => "Финална Трансмисија",
                  "desc" => "Chain"
                ],
                [
                  "title" => "Квачило",
                  "desc" => "Fluid, multi-disc, torque assisted"
                ],
                [
                  "title" => "Менувачка Кутија",
                  "desc" => "5 брзини"
                ]
              ],
              "frame" => [
                [
                  "title" => "шасија",
                  "desc" => "тубуларна челична шасија"
                ],
                [
                  "title" => "вилушка",
                  "desc" => "Двојна Челична Вилушка"
                ],
                [
                  "title" => "предно тркало",
                  "desc" => "18” x 2.75” - 32 жични тркала"
                ],
                [
                  "title" => "задно тркало",
                  "desc" => "17 x 4.25‘ - 32 жични тркала"
                ],
                [
                  "title" => "предна гума",
                  "desc" => "100/90-18"
                ],
                [
                  "title" => "задна гума",
                  "desc" => "150/70 R17"
                ],
                [
                  "title" => "предна суспензија",
                  "desc" => "41mm"
                ],
                [
                  "title" => "задна суспензија",
                  "desc" => "Double shock absorbers with adjustable preload"
                ],
                [
                  "title" => "предни сопирачки",
                  "desc" => "Single 310mm, Brembo, ABS"
                ],
                [
                  "title" => "задна сопирачка",
                  "desc" => "255mm single, Nissin, ABS"
                ],
                [
                  "title" => "инструментна плочка",
                  "desc" => "Двојни аналогни брзинометар и тахометри со мулти функционален LCD дисплеј"
                ]
              ],
              "dimension" => [
                [
                  "title" => "ширина на волан",
                  "desc" => "780 mm"
                ],
                [
                  "title" => "висина без ретровизори",
                  "desc" => "1100 mm"
                ],
                [
                  "title" => "Висина на Седиште",
                  "desc" => "790 mm"
                ],
                [
                  "title" => "мегу-осовинско растојание ",
                  "desc" => "1450 mm"
                ],
                [
                  "title" => "Custer Corner",
                  "desc" => "25.5 º"
                ],
                [
                  "title" => "Trace",
                  "desc" => "104 mm"
                ],
                [
                  "title" => "Тежина",
                  "desc" => "104 kg"
                ],
                [
                  "title" => "капацитет на резервоар",
                  "desc" => "14.5 L"
                ]
              ],
              "fuelConsumption" => [
                [
                  "title" => "Потрошувачка",
                  "desc" => "4.1 l/100km"
                ],
                [
                  "title" => "CO2 загадување",
                  "desc" => "95 g/km EURO 5"
                ]
              ],
              "service" => [
                [
                  "title" => "Сервисен Интервал",
                  "desc" => "16 000 км / 12 месеци"
                ]
              ],
            "grayCarousell" => [
              [
                "id" => "carouselItem1",
                "title" => "Голема Моќ и Високи Перформанси",
                "desc" => "Подкрепнат од Bonneville HT 900cc (EURO 5) мотор, со одличен обртен момент и со плус 10 коњски сили, респонзивност и помалку загадување.",
                "image" => "/images/classics/bonnevilleT100/bonnevilleT100Caro1.avif"
              ],
              [
                "id" => "carouselItem2",
                "title" => "Високи Ниво на Опрема",
                "desc" => "Суспензија од високо ниво и Brembo сопирачките даваат одлично чувство при забрзување и сопирање за уште покомфортно патување.",
                "image" => "/images/classics/bonnevilleT100/bonnevilleT100Caro2.avif"

              ],
              [
                "id" => "carouselItem3",
                "title" => "Технологија",
                "desc" => "Најновата технологија, одлично инкорпорирана во класичните линии на Bonneville T100 - ABS, систем за пролизгување и лесно квачило.",
                "image" => "/images/classics/bonnevilleT100/bonnevilleT100Caro3.avif"

              ],
              [
                "id" => "carouselItem4",
                "title" => "Безвременски Стил",
                "desc" => "Носејки го оној безвременски Bonneville стил, Т100 серијата се карактеризира со софистицирани детали со мат црн мотор и нова инструментална табла која одлично се вклопува во стилот на Bonneville T100.",
                "image" => "/images/classics/bonnevilleT100/bonnevilleT100Caro4.avif"

              ],
              [
                "id" => "carouselItem5",
                "title" => "Персонализација",
                "desc" => "Со повеќе од 117 оригинални Triupmh аксесоари на располагање, Т100 серијата е спремна за персонализирање. Понудата се состои од аксесоари кои ќе го подобрат комфортот, сигурноста, заштитата, стилот и ќе додадат уште маллку персонален допир на вашиот мотор. Секое парче доаѓа со 24 месечна гаранција..",
                "image" => "/images/classics/bonnevilleT100/bonnevilleT100Caro5.avif"

              ]
            ],
            "specNumbers" => [
              [ "data" => "900", "info" => "cc Мотор" ],
              [ "data" => "80", "info" => "Nm обртен момент" ],
              [ "data" => "65", "info" => "PS - Максимална Сила" ],
              [ "data" => "117", "info" => "Дополнителни Аксесоари" ]
            ],
            "youtubeVideosCarousellItems" => [
              [
                "src" => "https://www.youtube.com/embed/JdxdTu5ejf4",
                "title" => "Bonneville T100 Youtube Promo Video"
              ],
              [
                "src" => "https://www.youtube.com/embed/uGT-PKMSML4",
                "title" => "Bonneville T100 Youtube Promo Video"
              ],
              [
                "src" => "https://www.youtube.com/embed/DFPZcQjEdg",
                "title" => "Bonneville T100 Youtube Promo Video"
              ],
              [
                "src" => "https://www.youtube.com/embed/W11Zkx35eGg",
                "title" => "Bonneville T100"
              ]
            ],
            "reasonsToDrive" => [
              "banner" => [
                "image" => "/images/classics/bonnevilleT100/t100ReasonsBanner.avif"
              ],
              "infoText" => [
                "desc" => "Сега полесен, со подобри сопирачки и суспензија, повеќе сила и стил - Т100 серијата е перфектен водач кон Bonneville фамилијата. Наменет за искусни и нови возачи, живиот но сепак смирен 900cc мотор испорачува возбуда и препознатлив дво-цилиндарски тон. Модерен со управување кое ви изнудува повеќе самодоверба и со висина на едиште од 790мм, Т100 серијата е спремна да ве однесе било каде ќе посакате и тоа со одлично ниво на комфорт. На располагање ви стојат и дополнителни оригинални Triumph аксесоари."
              ],
              "reasons" => [
                [
                  "title" => "Bonneville 900cc мотор",
                  "desc" => "Популарната Triumph икона, дво-цилиндарскиот Bonneville мотор одлично еволуираше низ години. Сега веќе полесен, со понежно квачило, со нова радалица и со максимална сила од 65PS @ 7,400rpm. Најновата генерација „Ride-By-Wire“ технологија за гас и напредниот систем за вбризгување на гориво го направија овој мотор многу по респонзивен при апликација на гас. Со сервисен интервал од 16 000км и изграден по EURO 5 овој мотор е ефикасен и лесен за одржување."
                ],
                [
                  "title" => "Одлична контрола врз Моторот",
                  "desc" => "Неутралната возачка позиција, агилност, одлично распоредената тежина и со минимална висина на седиштето од 790мм, Т100 серијата е доста лесна за возење, без разлика дали возите на тесни градски средини или отворени патишта. Одличната суспензија нуди извонредно чувство на управување без разлика дали сте сами, со совозач или пак носите багаж. За да се чувствувате уште посигурно тука се Brembo сопирачките и Michelin Road Classic пневматиците создадени специјално за Bonneville сериите.",
                  "image" => "/images/classics/bonnevilleT100/bonnevilleT100Reasons1.avif"
                ],
                [
                  "title" => "Достапно и за А2 возачка лиценца",
                  "desc" => "А2 сетот за деградирање на моторот во А2 категорија е тука за да ги охрабри новите возачи да го изберат Bonneville T100. Истиот сет ги деградира перформансите на моторот и може да биде вграден и одстранет за неколку минути во најблискиот Triumph центар."
                ],
                [
                  "title" => "Практичност",
                  "desc" => "Широката палета на стандардна опрема носи со себе високо ниво на практичност. Лежерната возачка позиција и комфортното седиште на Т100 серијата ќе ве натера да возите подалеку од било кога. Лесното квачило бара помалку напор од страна на возачот со цел да се намали нивото на изтоштеност. За подобрување на сигурноста во клучот е вграден и имобилизатор. USB портата која се наоѓа под седиштето е тука за моментите кога ќе ви затреба но и за дополнителните аксесоари како уреди за навигација и сл. Дополнителни аксесоари се на располагање и се дизајнирани да се вклопат во линиите на Bonneville T100 серијата."
                ],
                [
                  "title" => "Луксузни Финиши и Стил",
                  "desc" => "Класичната категорија на мотори на Triumph се карактеризира високо внимание на детали и неверојатно убави финиши. Т100 серијата го носи оној историски стил и дух на Bonneville кој датира од 1595 година. Рефинираните ситни детали се дизајнирани да додадат уште малку стил и да го подобрат изгледот на моторот. Иако ова е класична линија на мотори тоа не значи дека истите не поседуваат модерна технологија. Напротив Т100 серијата на себе носи потполно нова инструмента табла искомбинирана од класични аналогни инструменти и мултифункционален дисплеј кој ве информира за се што ви е потребно. Достапен во повеќе нијанси ( Jet Black, Carnival Red и Lucerne Blue ) и спремен за авантура."
                ]
              ]
            ],
            "accessory" => [
              "banner" => [
                "image" => "/images/classics/bonnevilleT100/bonnevilleT100AccessBanner.avif"
              ],
              "infoText" => [
                "desc" => "Со повеќе од 117 оригинални Triupmh аксесоари на располагање, Т100 серијата е спремна за персонализирање. Понудата се состои од аксесоари кои ќе го подобрат комфортот, сигурноста, заштитата, стилот и ќе додадат уште маллку персонален допир на вашиот мотор. Секое парче е изработено од истите дизајнери и инжињери кои го произведуваат Bonneville T100."
              ],
              "accessoryTypes" => [
                [
                  "title" => "Комфорт и Практичност",
                  "desc" => "Одличното управување и релаксирани перформанси ја прават Т100 серијата одличен градски комутер. За уште подобро искуство и со цел да се подигне нивото на практичност додадовме неколку дополнителни аксесоари. Греачите на рачки се есенцијален аксесоар кој ќе ви овозможи повеќе комфорт во секакви временски услови а ималку повеќе луксуз. Дизајнирани специјално за Bonneville серијата, лесно се вклопуваат во мотор и видливо ги претставуваат своите модови на работа на инструментната табла. Централен Куфер - Лесен за монтирање и демонтирање со свое сопствено лежиште за монтирање ова парче е наменето за они кој сакаат да патуваат. Изработено од полипропилен нуди капацитет од 3 литри и штити вашите драгоцени предмети од вода, прашина и сл.",
                  "itemsList" => [
                    "Греачи на Рачки",
                    "Централен Куфер",
                    "„Horseshoe Lock“ сигурносен уред со лежиште за монтажа"
                  ],
                  "image1" => [
                    "src" => "/images/classics/bonnevilleT100/bonnevilleT100Access1.avif",
                    "alt" => "Bonneville 100 On The Road"
                  ],
                  "image2" => [
                    "src" => "/images/classics/bonnevilleT100/bonnevilleT100Access2.avif",
                    "alt" => "Bonneville 100 PaintJob"
                  ]
                ],
                [
                  "title" => "Сигурност",
                  "desc" => "Triumph има своја палета на производи дизајнирани да ве заштитат вас и вашиот Bonneville T100. Анодизираната плоча за заштита на моторот од тврди предмети не само што го прави она за што е наменета туку внесува и трошка стил и го подобрува излгедот на моторциклот. Челичните лајсни го штитат моторот од несакани падови и перфектно се вклопуваат со линиите на моторот. ",
                  "itemsList" => [
                    "Алуминиумска плочка за мотор",
                    "Engine Protection Kit",
                    "Лајсни за заштита на моторот"
                  ],
                  "image1" => [
                    "src" => "/images/classics/bonnevilleT100/bonnevilleT100Access3.avif",
                    "alt" => "Bonneville 100 On The Road"
                  ],
                  "image2" => [
                    "src" => "/images/classics/bonnevilleT100/bonnevilleT100Access4.avif",
                    "alt" => "Bonneville 100 PaintJob"
                  ]
                ],
                [
                  "title" => "Класичен Стил",
                  "desc" => "Одлична палета на производи наменети за персонализација и подобрување на изгледот на вашиот мотор Рамното кафеаво седиште го дава класичниот Bonneville изглед и нуди повисоко ниво на комфорт.",
                  "itemsList" => [
                    "Рамно Седиште"
                  ]
                ],
                [
                  "title" => "Оджување",
                  "desc" => "Т100 серијата не е само мотор туку и одлична инвестиција па така ќе сакате истата да ја одржувате во најдобар ред. Затоа тука е Triumph Battery Optimizer кој се гриѓи за акомулаторот на моторот а вие ќе бидете сигурни дека вашиот мотор е спремен за авантура. Централно монтираната ногарка е тука за да ви помогне полесно да го исчистите вашиот мотор. Кога сме веќе кај чистењето на моторот тука е и специјално дизајниран Care-Kit изработен во соработка со светски познатиот бренд Muc-Off кој доаѓа со брендираната Triumph торбица со капацитет од 15литри.",
                  "itemsList" => [
                    "Triumph Battery Optimizer",
                    "Централна Ногарка",
                    "Muc-Off Комплет за Чистење"
                  ]
                ]
              ]
            ],
            "shortSpecInfo" => [
              "info2" => "Новата Thriumph Stealth Серија е достапна"
            ],
            "gallery" => [
              "modelImage" => [
                "src" => "/images/classics/bonnevilleT100.png",
                "alt" => "Bonneville T100 Speedmaster Range Model Image"
              ],
              "subFamilyHeroVideo" => [
                "src" => "/images/classics/bonnevilleT100/bonnevilleT100HeroVideo.webm",
                "alt" => "Speed Twin 1200 Range Model Image"
              ],
              "subFamilyHeroImageMobile" => [
                "src" => "/images/classics/bonnevilleT100/bonnevilleT100HeroMobile.avif",
                "alt" => "Speed Twin 1200 Range Hero Image"
              ],
              "subFamilyTopSectionImage" => [
                "src" => "/images/classics/bonnevilleT100/bonnevilleT100TopSectionImage.avif",
                "alt" => "bonnevilleT100 Range Model Image Top Section Image"
              ],
              "subFamilyTopSectionBGImage" => [
                "src" => "/images/classics/bonnevilleT100/bonnevilleT100TopSectionImageBG.avif",
                "alt" => "Speed Twin 1200 Range Model Image Top Section Image BG"
              ]
            ]
        ];

        $subFamClassicsDataTen = [
            "subFamilyName" => "bonneville-t120",
            "familyType" => "classics",
            "title" => "Bonneville T120",
            "price" => 14290,
            "url" => "/motorcycles/classics/bonneville-t120",
            "cc" => 1200,
            "specs" => [
                [
              "desc" => "година",
              "data" => 1959
                ],
                [
              "desc" => "К.ЕК Мотор",
              "data" => 1200
                ],
                [
              "desc" => "NM. Обртен Момент",
              "data" => 105
                ],
                [
              "desc" => "Аксесоари",
              "data" => "116"
                ]
            ],
            "shortDesc" => "Т120 и Т120 Black се вистински потомци на Bonneville моторите но со модерни перформанси, технологија и можности кои сепак го поседуваат оној автентичен Британски стил и карактер.",
            "heroSlogans" => ["Автентичен", "Британски", "Амблем"],
            "subFamilyPageInfo" => [
              "topSection" => [
                "title" => "Bonneville T120",
                "desc" => "Подобрени перформанси, управување, безвременски дизајн и Bonneville ДНК. Врната британска моторциклистичка легенда сега со уште повеќе Bonneville карактер.",
                "subtitle" => "Врвна Британска Моторциклистичка Легенда."
              ],
              "audioSection" => [
                "title" => "Легендарен Bonneville Тон",
                "desc" => "Уникатен длабок дво-цилиндричен Triumph звук.",
                "audio" => "/images/classics/bonnevilleT120/bonnevilleT120Audio.mp3"
              ],
            ],
            "engineTransmission" => [
                  [
                    "title" => "Мотор",
                    "desc" => "Дво-Цилиндричен „in-line“, 8-вентили, 1ЕЕК, водно ладење"
                  ],
                  [
                    "title" => "капацитет",
                    "desc" => "1200 cc"
                  ],
                  [
                    "title" => "диаметар",
                    "desc" => "97.6 mm"
                  ],
                  [
                    "title" => "рута",
                    "desc" => "80 mm"
                  ],
                  [
                    "title" => "компресија",
                    "desc" => "10.0 =>1"
                  ],
                  [
                    "title" => "Мах. Коњски Сила",
                    "desc" => "80 PS @ 6550 rpm"
                  ],
                  [
                    "title" => "Мах. Обртен Момент",
                    "desc" => "105 Nm @ 3500 rpm"
                  ],
                  [
                    "title" => "Систем за убризгување",
                    "desc" => "Electronic multi-point injection"
                  ],
                  [
                    "title" => "Систем за Издувни гасови",
                    "desc" => "Chrome 2-into-2 exhaust system with dual chrome tailpipes"
                  ],
                  [
                    "title" => "Финална Трансмисија",
                    "desc" => "Chain"
                  ],
                  [
                    "title" => "Квачило",
                    "desc" => "Wet, multi-disc, torque assisted"
                  ],
                  [
                    "title" => "Менувачка Кутија",
                    "desc" => "6 брзини"
                  ]
                ],
            "frame" => [
                  [
                    "title" => "шасија",
                    "desc" => "тубуларна челична шасија"
                  ],
                  [
                    "title" => "вилушка",
                    "desc" => "Двојна Вилушка"
                  ],
                  [
                    "title" => "предно тркало",
                    "desc" => "18” x 2.75” - 32 жични тркала"
                  ],
                  [
                    "title" => "задно тркало",
                    "desc" => "17 x 4.25‘ - 32 жични тркала"
                  ],
                  [
                    "title" => "предна гума",
                    "desc" => "100/90-18"
                  ],
                  [
                    "title" => "задна гума",
                    "desc" => "150/70 R17"
                  ],
                  [
                    "title" => "предна суспензија",
                    "desc" => "41mm"
                  ],
                  [
                    "title" => "задна суспензија",
                    "desc" => "Double shock absorbers with adjustable preload"
                  ],
                  [
                    "title" => "предни сопирачки",
                    "desc" => "Single 310mm, Brembo, ABS"
                  ],
                  [
                    "title" => "задна сопирачка",
                    "desc" => "255mm single, Nissin, ABS"
                  ],
                  [
                    "title" => "инструментна плочка",
                    "desc" => "Двојни аналогни брзинометар и тахометри со мулти функционален LCD дисплеј"
                  ]
                ],
            "dimension" => [
                  [
                    "title" => "ширина на волан",
                    "desc" => "780 mm"
                  ],
                  [
                    "title" => "висина без ретровизори",
                    "desc" => "1100 mm"
                  ],
                  [
                    "title" => "Висина на Седиште",
                    "desc" => "790 mm"
                  ],
                  [
                    "title" => "мегу-осовинско растојание ",
                    "desc" => "1450 mm"
                  ],
                  [
                    "title" => "Custer Corner",
                    "desc" => "25.5 º"
                  ],
                  [
                    "title" => "Trace",
                    "desc" => "105.2 mm"
                  ],
                  [
                    "title" => "Тежина",
                    "desc" => "236 kg"
                  ],
                  [
                    "title" => "капацитет на резервоар",
                    "desc" => "14.5 L"
                  ]
                ],
            "fuelConsumption" => [
                  [
                    "title" => "Потрошувачка",
                    "desc" => "4.7 l/100km"
                  ],
                  [
                    "title" => "CO2 загадување",
                    "desc" => "107 g/km EURO 5"
                  ]
                ],
            "service" => [
                  [
                    "title" => "Сервисен Интервал",
                    "desc" => "16 000 км / 12 месеци"
                  ]
                ],
              "grayCarousell" => [
                [
                  "id" => "carouselItem1",
                  "title" => "Безвременска Bonneville ДНК ",
                  "desc" => "Еволуирани за новите генерации, денешникте Т120 и Т120 Black модели се модерни икони, со духот на оргининалниот Bonneville од 1959 година.",
                  "image" => "/images/classics/bonnevilleT120/bonnevilleT120Caro1.avif"
                ],
                [
                  "id" => "carouselItem2",
                  "title" => "Мотор - HT 1200 KEK",
                  "desc" => "Препознатливиот Bonneville мотор отсега со нова полесна радалица за повеќе респонзивност и EURO 5 компатибилност.",
                  "image" => "/images/classics/bonnevilleT120/bonnevilleT120Caro2.avif"

                ],
                [
                  "id" => "carouselItem3",
                  "title" => "Контрола",
                  "desc" => "Со вкупна тежина 7 килограми пониска од претходната генерација, лесни тркала и Brembo сопирачки, Т120 серијата се карактеризира како агилна и серија која развива самодоверба.",
                  "image" => "/images/classics/bonnevilleT120/bonnevilleT120Caro3.avif"

                ],
                [
                  "id" => "carouselItem4",
                  "title" => "Современа Технологија",
                  "desc" => "Одлично вметнатата технологија нуди повеќе возачки мода, софистициран ABS систем и систем за пролизгување како стандард.",
                  "image" => "/images/classics/bonnevilleT120/bonnevilleT120Caro4.avif"

                ],
                [
                  "id" => "carouselItem5",
                  "title" => "Препознатлив Стил",
                  "desc" => "Луксузни финиши и додатни финеси како разни алуминиумси беџови и логоа нудат завршница од светски размери",
                  "image" => "/images/classics/bonnevilleT120/bonnevilleT120Caro5.avif"

                ]
              ],
              "specNumbers" => [
                [ "data" => "1959 год", "info" => "Традиција" ],
                [ "data" => "1200cc", "info" => "Κ.ΕΚ мотор" ],
                [ "data" => "105", "info" => "Nm Максимален Обртен Момент" ],
                [ "data" => "116", "info" => "Дополнителни Аксесоари" ]
              ],
              "youtubeVideosCarousellItems" => [
                [
                  "src" => "https:://www.youtube.com/embed/3uIUddIayug",
                  "title" => "Bonneville T100 Youtube Promo Video"
                ],
                [
                  "src" => "https:://www.youtube.com/embed/8UnwjQO-RN0",
                  "title" => "Bonneville T100 Youtube Promo Video"
                ],
                [
                  "src" => "https:://www.youtube.com/embed/iUb0lNf9t5M",
                  "title" => "Bonneville T100 Youtube Promo Video"
                ],
                [
                  "src" => "https:://www.youtube.com/embed/DFPZcQjEdgI",
                  "title" => "Bonneville T100"
                ],
                [
                  "src" => "https:://www.youtube.com/embed/W11Zkx35eGg",
                  "title" => "Bonneville T100"
                ]
              ],

            "reasonsToDrive" => [
              "banner" => [
                "image" => "/images/classics/bonnevilleT120/t120ReasonsBanner.avif"
              ],
              "infoText" => [
                "desc" => "Безразлика дали сакате да додадете малку динамика во секојдневниот живот или да отпатувате некаде, Bonneville Т120 серијата е тука да ве натера да возите подалеку од вашата дестинација. Легендарната ДНК, премиум и луксузни финиши и детали со модерни перформанси, оваа генерација Bonneville T120 е изработена за максимално возачко искуство."
              ],
              "reasons" => [
                [
                  "title" => "Bonneville 1200cc мотор",
                  "desc" => "Најреспонзивниот Bonneville T120 досега. Редуцирањето на вкупната тежина доведе до одлична респонзивност и острина на Bonneville моторот. Со силен обртен момент овој мотор испорачува 105Nm при само 3,500rpm, со максимална јачина од 80 коњски сили при 6,500Rpm. Моторот е париран со најновата технологија на Ride-By-Wire ситем и нуди одлична комуникација помеѓу дланката на возачот и моторот, што значи дека нуди предвидливи перформанси при секој степен на пренос."
                ],
                [
                  "title" => "Контрола",
                  "desc" => "Препознатливото Triumph искуство сега стана уште подобро. Со намалување на вкупната тежина, Т120 серијата е уште полесна за контролирање и позабавна за возење. Вкупната тежина се намали благодарејки и на лесните 32 жични тркала кои ја прават оваа серија уште поагилна. Со дијаметар од 41мм предната суспензија има слободен пад од 120милиметри. Дуплата суспензија на задниот крај е одлична доколку патувате сами, со сопатник или пак носите багаж. Целокупно, суспензијата го дава оној препознатливо Triumph чувство на контрола врз моторот. За ваша сигурност и сопирање на моторот се грижат Brembo сопирачките (диск од 310 милиметри напред) со вграден ABS систем. На крајот за да се залепите за подлогата тука се Michelin Road Classiс пневматиците специјално изработени за Bonneville фамилијата.",
                  "image" => "/images/classics/bonnevilleT120/bonnevilleT120Reasons1.avif"
                ],
                [
                  "title" => "Технологија",
                  "desc" => "Палета од технолошки направи го прави овој класичен мотор модерен и софистициран. На располагање се повеќе возачки модови, систем за пролизгување, темпомат, ABS систем и истите лесно се ракуваат со контроли на воланот кои се лесно достапни за палецот на возачот. Истите се одлично инкорпорирани во силуетата на Т120."
                ],
                [
                  "title" => "Практичност",
                  "desc" => "Опрема од висок стандард и врвните спецификации го прават овој Triumph мотор екстремно практичен. Комфортното седиште со висина од 790 милиметри и релаксираната возачка позиција, го претвараат секојдневното возење во момент за уживање. Лесното квачило е тука да ви помага при многуте промени на преносот а за дополнителна сигурност вграден е имобилизатор во клучот. Дополнителни елементи како централна ногарка, греачи на рачките, USB порта како и држачи за сопатникот го подобруваат Triumph искуството како за возачот така и за сопатникот"
                ],
                [
                  "title" => "Стил и Луксуз",
                  "desc" => "Целата Т120 серија е изработена со неверојатно внимание на детали и луксузни финиши. Сјајните бои и хромирани делови јасно ги истакнуваат сите линии и детали на Т120 серијата. Темно кафеавото седиште и мат црн поклопец на моторот додаваат свој допир кон силуетата и излгедот на Т120 серијата. Финалниот допир го додаваат двете издувни цевки офарбани во црна боја. Кај Black моделот истакнати се темни и софистицирани бои кои даваат потполно смел изглед."
                ]
              ]
            ],
            "accessory" => [
              "banner" => [
                "image" => "/images/classics/bonnevilleT120/bonnevilleT120AccessBanner.avif"
              ],
              "infoText" => [
                "desc" => "Иако сите ние ја имаме истата пасија за мотори, сите сме различни во поглед на стил и возачки амбиции. Со широка палета на Triumph аксесоари секогаш ќе најдете некое парче кое дополнително ќе го подобри вашето Triumph искуство. Без разлика дали барате багаж, елементи за надградба на суспензија или пак нешто што ќе го чува вашиот мотор сигурен, сигурни сме дека ќе најдете нешто што ќе го направи вашиот Bonneville само ваш. На располагање се 116 оригинални Triumph аксесоари."
              ],
              "accessoryTypes" => [
                [
                  "title" => "Стил и Комфорт",
                  "desc" => "Комфорт и искористливост се едни од особините на Bonneville, па затоа на располагање се уште неколку аксесоари кои ќе ја направат вашата авантура да биде подолга и незаморувачка. Ветробранско стакло кое се инсталира за минута и го заштитува возачот од силниот ветер на автопатот. Кожните куфери и торбата за резервоар комбинираат стил од шеесетите со модерна практичност. Со вкупен капацитет од 23.8 литри (13.8 странични куфери и 10 литаркса торба за резервоар.) ќе имате доволно простор за сите ваши потреби. Доколку сте ентузијаст кој сака да вози и во екстремни услови тука се греачите за рачките. Истите се инсталираат за момент и нивните функции се прикажуваат на мултифункционалниот дисплеј.",
                  "itemsList" => [
                    "Ветробранско Стакло",
                    "Багаж",
                    "Греачи за Рачки"
                  ],
                  "image1" => [
                    "src" => "/images/classics/bonnevilleT120/bonnevilleT120Access1.avif",
                    "alt" => "Bonneville T120 On The Road"
                  ],
                  "image2" => [
                    "src" => "/images/classics/bonnevilleT120/bonnevilleT120Access2.avif",
                    "alt" => "Bonneville T120 PaintJob"
                  ]
                ],
                [
                  "title" => "Заштитете ја вашата инвестиција",
                  "desc" => "За да обезбедиме максимална сигурност не значи дека треба да го компромитираме стилот и карактерот на Bonneville T120. Алуминиумскиот долен поклопец на моторот е дизајниран за да биде издржлив но и да донесе малку стил со неговата сива или црна боја. Ова е одлична идеа како да го заштитите вашиот Bonneville од тврди предмети. Чиличните лајсни кои се тука за да го заштитат моторот воведуваат чувство на носталгија. Дизајнирани да се спојат со силуетите и стилот на Т120 и Т120 Black, ова парче додава стил но и заштита. За оние кои сакаат дискретност изработивме заштитни налепници изработени од тврд најлонски материјал кој го штити долниот дел на моторот.",
                  "itemsList" => [
                    "Долен поклопен - алуминиум",
                    "Заштита за Мотор",
                    "Engine Protection Kit",
                    "Протектори на моторот - CNC гравирани"
                  ],
                  "image1" => [
                    "src" => "/images/classics/bonnevilleT120/bonnevilleT120Access3.avif",
                    "alt" => "Bonneville T120 Luggage"
                  ]
                ],
                [
                  "title" => "Сигурност",
                  "desc" => "Со цел да се заштитите од најлошото, ние во Triumph изработивме палета на сигурносни уреди и брави кои ќе го чуваат вашиот мотор сигурен. Таканаречената „Horseshoe Lock“ е брава која би ја користели низ градот. Истата стои помеѓу вбризгувачите на гориво и радалицата коа не е во употреба а кога ви е потребна таа е лесно достапна. Thatcham Approved Alarm сетот нуди екстремно ниво на сигурност и прегласна сирена. Дизајниран од сигурносни експерти во Datatool, овој уред одлично се вклопува со електрониката на моторите. Тешките Triumph ланци и катанци се тука за да го обезбедат вашиот мотор во вашата гаража или паркинг место.",
                  "itemsList" => [
                    "Horseshoe Lock",
                    "Thatcham Approved Alarm",
                    "Ланци и Катанец"
                  ],
                  "image1" => [
                    "src" => "/images/classics/bonnevilleT120/bonnevilleT120Access3.avif",
                    "alt" => "Bonneville T120 Head"
                  ]
                ],
                [
                  "title" => "Практичност",
                  "desc" => "Практичноста е клучен елемент при дизајнирање на самата серија на мотори и аксесоари. Без разлика на причината заради која возите, Т120 серијата треба да биде оптимизирана според вас. Централната ногарка помага при сервисирање на задниот дел од моторот додека централниот багаж е фантастично место за складирање на вашите најпотребни предмети. Лесен за монтажа и демотажа и со лимит до 3 килограми овој цврст, водоотпорен куфер е идеален за чување на вашите предмети суви и сигурни..",
                  "itemsList" => [
                    "Централна Ногарка",
                    "Централен Куфер"
                  ]
                ]
              ]
            ],
            "shortSpecInfo" => [
              "info2" => "Новата Thriumph Stealth Серија е достапна"
            ],
            "gallery" => [
              "modelImage" => [
                "src" => "/images/classics/bonnevilleT120/bonnevillieT120Black.png",
                "alt" => "Bonneville T120 Speedmaster Range Model Image"
              ],
              "subFamilyHeroVideo" => [
                "src" => "/images/classics/bonnevilleT120/t120HeroVideo.webm",
                "alt" => "Speed Twin 1200 Range Model Image"
              ],
              "subFamilyHeroImageMobile" => [
                "src" => "/images/classics/bonnevilleT120/bonnevilleT120HeroMobile.avif",
                "alt" => "Speed Twin 1200 Range Hero Image"
              ],
              "subFamilyTopSectionImage" => [
                "src" => "/images/classics/bonnevilleT120/bonnevilleT120TopSectionImage.avif",
                "alt" => "bonnevilleT120 Range Model Image Top Section Image"
              ],
              "subFamilyTopSectionBGImage" => [
                "src" => "/images/classics/bonnevilleT120/bonnevilleT120TopSectionImageBG.avif",
                "alt" => "Speed Twin 1200 Range Model Image Top Section Image BG"
              ]
            ]
        ];

        $subFamClassicsDataEleven = [
            "subFamilyName" => "thruxton-rs",
            "familyType" => "classics",
            "title" => "Thruxton RS",
            "price" => 14290,
            "url" => "/motorcycles/classics/thruxton-rs",
            "cc" => 1200,
            "specs" => [
              [
              "desc" => "ML Мотор",
              "data" => 1200
              ],
              [
              "desc" => "PS Коњски Сили",
              "data" => 105
              ],
              [
              "desc" => "NM. Обртен Момент",
              "data" => 112
              ],
              [
              "desc" => "Аксесоари",
              "data" => "80"
                ]
          ],
            "shortDesc" => "Новиот Thruxton RS комбинира оригинален стил и напредни перформанси со автентичен 'cafe-racer' дизајн.",
            "heroSlogans" => ["Модерен", "Cafe-Racer"],
            "subFamilyPageInfo" => [
              "topSection" => [
                "title" => "Thruxton RS",
                "desc" => "Името Thruxton доаѓа од светски реномираната тркачка легенда која својот успех го претрпе на Thruxton 500 и Isle of Man трките и инсиприраше безброј млади генерации.",
                "subtitle" => "Автентичен, модерен „Cafe-Racer“"
              ],
            ],
            "engineTransmission" => [
                [
                  "title" => "Мотор",
                  "desc" => "8-вентили, SOHC, водно ладење"
                ],
                [
                  "title" => "капацитет",
                  "desc" => "1200 cc"
                ],
                [
                  "title" => "диаметар",
                  "desc" => "97.6 mm"
                ],
                [
                  "title" => "рута",
                  "desc" => "80 mm"
                ],
                [
                  "title" => "компресија",
                  "desc" => "12.1:1"
                ],
                [
                  "title" => "Мах. Коњски Сила",
                  "desc" => "105 PS/103 bhp (77 kW) @ 7,500 rpm"
                ],
                [
                  "title" => "Мах. Обртен Момент",
                  "desc" => "112 Nm @ 4,250 rpm"
                ],
                [
                  "title" => "Систем за убризгување",
                  "desc" => "Multipoint sequential electronic fuel injection"
                ],
                [
                  "title" => "Систем за Издувни гасови",
                  "desc" => "Brushed 2 into 2 exhaust system with twin brushed silencers"
                ],
                [
                  "title" => "Финална Трансмисија",
                  "desc" => "O-ring chain"
                ],
                [
                  "title" => "Квачило",
                  "desc" => "Wet, multi-disc, torque assisted"
                ],
                [
                  "title" => "Менувачка Кутија",
                  "desc" => "6 брзини"
                ]
              ],
            "frame" => [
                [
                  "title" => "шасија",
                  "desc" => "тубуларна челична шасија"
                ],
                [
                  "title" => "вилушка",
                  "desc" => "Алуминиумска Вилушка"
                ],
                [
                  "title" => "предно тркало",
                  "desc" => "17” x 3.5” - 32 жични тркала"
                ],
                [
                  "title" => "задно тркало",
                  "desc" => "17 x 5‘ - 32 жични тркала"
                ],
                [
                  "title" => "предна гума",
                  "desc" => "120/70 ZR17"
                ],
                [
                  "title" => "задна гума",
                  "desc" => "150/70 R17"
                ],
                [
                  "title" => "предна суспензија",
                  "desc" => "160/60 ZR17"
                ],
                [
                  "title" => "задна суспензија",
                  "desc" => "Fully adjustable Öhlins twin shocks with Piggyback reservoir, 120 mm rear wheel travel"
                ],
                [
                  "title" => "предни сопирачки",
                  "desc" => "Single 310mm, Brembo М50, ABS"
                ],
                [
                  "title" => "задна сопирачка",
                  "desc" => "220mm single, Nissin, ABS"
                ],
                [
                  "title" => "инструментна плочка",
                  "desc" => "LCD мултифункционален дисплеј"
                ]
              ],
            "dimension" => [
                [
                  "title" => "ширина на волан",
                  "desc" => "745 mm"
                ],
                [
                  "title" => "висина без ретровизори",
                  "desc" => "1,030 mm"
                ],
                [
                  "title" => "Висина на Седиште",
                  "desc" => "810 mm"
                ],
                [
                  "title" => "мегу-осовинско растојание ",
                  "desc" => "1.415 mm"
                ],
                [
                  "title" => "Custer Corner",
                  "desc" => "22.8º"
                ],
                [
                  "title" => "Trace",
                  "desc" => "92 mm"
                ],
                [
                  "title" => "Тежина",
                  "desc" => "197 kg"
                ],
                [
                  "title" => "капацитет на резервоар",
                  "desc" => "14.5 L"
                ]
              ],
            "service" => [
                [
                  "title" => "Сервисен Интервал",
                  "desc" => "16 000 км / 12 месеци"
                ]
              ],
            "specNumbers" => [
              [ "data" => "1200cc", "info" => "Κ.ΕΚ мотор" ],
              [ "data" => "112", "info" => "Nm Максимален Обртен Момент" ],
              [ "data" => "105", "info" => "PS - Максимална Сила" ],
              [ "data" => "80", "info" => "Дополнителни Аксесоари" ]
            ],
            "reasonsToDrive" => [
              "banner" => [
                "image" => "/images/classics/thruxtonRS/thruxtonReasonsBanner.avif"
              ],
              "infoText" => [
                "title" => "Зошто Thruxton RS?!",
                "desc" => "Легендарниот Thruxton. Историскиот тркач кој ги руши сите рекорди. „Cafe-Racer“. Да точно прочитавте - ThruxtonRS е оној оригинален cafe-racer со фокусиран спортски карактер. Денеска со модерни перформанси и сите други модерни бенефити како и секој Triumph."
              ],
              "reasons" => [
                [
                  "title" => "Историско Потомство",
                  "desc" => "Тркачкиот успех на Triumph Bonneville T120 Thruxton одигра голема улога во развивањето на сите други спортки моторцикли за време на пеесетите и шеесетите години, кога овој извонреден тркач се докажа на првата Thruxton 500 трка како и земајки ја титулата за прв продукциски мотор кој постигнал просечна брзина над 100 милји на час на трката Isle ofMan TT во 1969 година. Во шеесетите години од минатиот век, дистинктивната поза на Bonneville T120 и урбаните перформанси и управување го направи овој мотор многу популарен помеѓу младата генерација на возачи кои беа во потрага по рецептот за најдобар Thruxton cafe-racer, но без успех се до 2004-тата година кога Triumph реши да ја обнови својата Classics серија. Thruxton RS серијата го започна својот живот каде што заврши Thruxton R и го еволвираше популарниот cafe-racer на ново ниво, со повеќе перформанси и спецификации.",
                  "image" => "/images/classics/thruxtonRS/thruxtonReasosn1.avif"
                ],
                [
                  "title" => "Thruxton Мотор со високи перформанси",
                  "desc" => "ThruxtonRS серијата е подкрепната од добро познатион 1200cc Bonneville мотор но со додатни надоградувања во поглед на перформанси и повеќе Triumph карактер и поистакнат британски дво-цилиндричен звук. Максималната сила на моторот е 105 PS @ 7,500 rpm со обртен момент од 112Nm при 4,250rpm. Со намалување на вкупната тежина на моторот, лесна радалица, квачило, поклопец од магнезиум, и висока компресија во цилиндрите ThruxtonRS серијата испорачува 20% повеќе моќ и за 500Rpm повеќе од стандардниот 1200cc Bonneville мотор."
                ],
                [
                  "title" => "Технологија и Можности",
                  "desc" => "Ова мотоцикл e создаден со сета напредна технологија со цел да се постигне возачко искуство кое ќе одговара на неговиот безвременски тркачки изглед. Постојат три режими за возење - Road, Rain и Sport - секој со посебно мапирање на моторот и посебна поставка за контрола на тракцијат. ThruxtonRS серијата има уникатно LED осветлување кое троши многу помалку енергија од стандардот. Ситен детал дава и LED дневното светло. Дополнителни стандардни елементи како USB порта, имобилизатор. "
                ],
                [
                  "title" => "Направен за Вас",
                  "desc" => "No two riders are the same, so you can personalize your Tiger Sport 660 with a choice of three special colors and graphics and over 40 genuine Triumph accessories. From built-in luggage to a central case that holds 2 helmets, you'll be inspired by the options to suit your adventure. When everyday flexibility is your goal, you shouldn't be left behind. The bike is designed with the rider in mind - make it your own."
                ],
                [
                  "title" => "Возбудлив Британски Звук",
                  "desc" => "Издувниот систем RS дава возбудлив британско-тркачки дво-цилиндарски звук со богата сурова нота што одговара на неговото легендарно име. Издувниот систем се финализира со две цевки од двете страни на моторот малку исправени нагоре за уште малку повеќе да се слушне препознатливиот звук.",
                  "image" => "/images/classics/thruxtonRS/thruxtonReasosn2.avif"
                ],
                [
                  "title" => "Агилност и Контрола",
                  "desc" => "Легендарниот тркач на Triumph се карактеризира со  динамична управливост, агилност и респонзивност со цел да се сервира она тркачко искуство. ThruxtonRS серијата е за 6 килограми полесна од претходникот и е перфектен избор за возачите кои сакаат спортска возбуда и перформанси на cafe-racer. Brembo M50 системот за сопирање, Showa вилушки и потполно прилагодливата Öhlins суспензија комбинирана со Metzeler Racetec RR пневматиците даваат одлично возачко искуство и агилност.",
                  "image" => "/images/classics/thruxtonRS/thruxtonReasosn3.avif"

                ],
                [
                  "title" => "Cafe-Racer Стил",
                  "desc" => "Никој не го енкапсулира оној класичен британски cafe-racer изглед подобро отколку Triumph Thruxton серијата. Чистата безвременска силуета и  препознатливата форма на резервоарот се само некои од деталите кои се дирекнто инспирирани од оригиналната Thruxton линија."
                ],
                [
                  "title" => "80 оригинални аксесоари",
                  "desc" => "Палета од 80 оригинални Triumph акасесоари се достапни во секој Triumph центар. Аксесоари кои додаваат стил, заштита, комфорт, безбедност. Доколку сакате веднаш да го имате оној перфектен Triumph тркачки изглед тука е Track Racer Inspiration сетот кој комплетно ќе го претвори вашиот Thruxton во прав тркач."
                ]
              ]
            ],
            "accessory" => [
              "banner" => [
                "image" => "/images/classics/thruxtonRS/thruxtonRSAccessBanner.avif"
              ],
              "infoText" => [
                "desc" => "Заедно со моќниот Thruxton RS доаѓа и целосна палета на аксесоари наменета за подобрување и персонализирање на серијата по ваш вкус. Исто така го имаме и TRACK RACER INSPIRATION сетот кој нуди целосен комплет од претходно селектирани парчиња за брзо конфигурирање на вапиот мотор."
              ],
              "accessoryTypes" => [
                [
                  "title" => "Track Racer Inspiration сет",
                  "desc" => "Додадете спортки финиш на вашиот Thruxton RS веднаш.",
                  "itemsList" => [
                    "Dolphin fairing",
                    "Rear mudguard removal kit",
                    "Компактни LED трепкачи"
                  ],
                  "image1" => [
                    "src" => "/images/classics/thruxtonRS/thruxtonAccess1.avif",
                    "alt" => "Thruxton On The Road"
                  ]
                ],
                [
                  "title" => "Стил",
                  "desc" => "Додадете ваш белег врз вашиот омилен cafe-racer.",
                  "itemsList" => [
                    "Dolphin Fairing",
                    "Прекривка за сопатничкото седиштето ",
                    "Полирани Детали на Резервоар",
                    "Алуминиумска замена за заден дел од мотор",
                    "LED Трепкачи"
                  ],
                  "image1" => [
                    "src" => "/images/classics/thruxtonRS/thruxtonRSAccess2.avif",
                    "alt" => "Thruxton Luggage"
                  ],
                  "image2" => [
                    "src" => "/images/classics/thruxtonRS/thruxtonRSAccess3.avif",
                    "alt" => "Thruxton Luggage"
                  ]
                ],
                [
                  "title" => "Багаж",
                  "desc" => "Практични елементи за багаж, куфери и торби за резервоар изработени од кожа, памук и синтетички најлон кој ќе ги чува вашите вредни предмети сигурни."
                ],
                [
                  "title" => "Комфорт",
                  "desc" => "Подобрете го комфортот со дадавање на овие аксесоари наменети да го претворат вашето во уживање.",
                  "itemsList" => [
                    "Комфортно Седиште",
                    "Греачи на Рачки",
                    "Стилизирани Рачки"
                  ]
                ]
              ]
            ],
            "shortSpecInfo" => [
              "info1" => "1,200cc Thruxton Серија",
              "info2" => "Автентичен Cafe Racer Дизајн",
              "info3" => "Oдлично управување и дизајн"
            ],
            "gallery" => [
              "modelImage" => [
                "src" => "/images/classics/truxtonRs.avif",
                "alt" => "Thruxton RS Speedmaster Range Model Image"
              ],
              "subFamilyHeroVideo" => [
                "src" => "/images/classics/thruxtonRS/truxtonHeroVideo.webm",
                "alt" => "ThruxtonRS Range Model Video"
              ],
              "subFamilyHeroImageMobile" => [
                "src" => "/images/classics/thruxtonRS/thruxtonRSHeroMobile.avif",
                "alt" => "ThruxtonRS Range Hero Image"
              ],
              "subFamilyTopSectionImage" => [
                "src" => "/images/classics/thruxtonRS/thruxtonRSTopSectionImage.avif",
                "alt" => "thruxtonRS Range Model Image Top Section Image"
              ],
              "subFamilyTopSectionBGImage" => [
                "src" => "/images/classics/thruxtonRS/thruxtonRSTopSectionImageBack.jpg",
                "alt" => "TruxtonRS Range Model Image Top Section Image BG"
              ]
            ]
        ];

        $subFamRoadsters = [
            "subFamilyName" => "street-triple-765",
            "familyType" => "roadsters",
            "title" => "Street Triple 765",
            "price" => 12290,
            "url" => "/motorcycles/roadsters/street-triple-765",
            "specs" => [
              [
              "desc" => "К.ЕК Мотор",
              "data" => 765
              ],
              [
                "desc" => "PS Коњски Сили",
                "data" => "12-130"
              ],
              [
                "desc" => "NM. Обртен Момент",
                "data" => 80
              ],
              [
                "desc" => "Сервисен Интервал",
                "data" => "10,000"
              ]
          ],
          "heroSlogans" => ["Перфектен", "спортски ", "моторцикл"],
          "youtubeVideo" => "https://www.youtube.com/embed/Hd3QZKRIT0Y",
         "shortDesc" => "Со легендарен карактер, а со големо засилување во перформанси и технологија оваа серија го доби префиксот 'definitive streetfighter'. ",
        "subFamilyPageInfo" => [
              "topSection" => [
                "title" => "Врвни Перформанси ",
                "desc" => "Подкрепнат од еволуција на Moto2™ тркачки мотор, Speed Triple 765 е мотор со врвни перформанси и висока спецификација.",
                "subtitle" => "Најдобриот “naked“ моторцикл - на пат и на тркачка патека."
              ],
              "audioSection" => [
                "audio" => "/images/roadsters/streetTriple765/streetTriple765Sound.mp3",
                "title" => "Три-цилиндречен звук кој го тресе земјиното тло.",
                "desc" => "Новиот издувен систем го испорачува оној препознатлив три-цилиндарски звук на моторот.",
                "logo" => null
              ],
            ],
            "engineTransmission" => [
                  [
                    "title" => "Тип на Мотор",
                    "desc" => "водно ладење, 12 вентили, 2EEK, линиски 3-цилиндри"
                  ],
                  [
                    "title" => "капацитет",
                    "desc" => "765 cc"
                  ],
                  [
                    "title" => "диаметар",
                    "desc" => "78.0 mm"
                  ],
                  [
                    "title" => "рута",
                    "desc" => "53.4 mm"
                  ],
                  [
                    "title" => "компресија",
                    "desc" => "13.25:1"
                  ],
                  [
                    "title" => "Мах. Коњски Сила",
                    "desc" => "120-130 (130 за Street Triple 765 R & Mото2™ Edition)"
                  ],
                  [
                    "title" => "Мах. Обртен Момент",
                    "desc" => "80 Nm @ 9,500 rpm"
                  ],
                  [
                    "title" => "Систем за убризгување",
                    "desc" => "Sequential multi-point electronic injection with electronic throttle"
                  ],
                  [
                    "title" => "Систем за Издувни гасови",
                    "desc" => "3 во 1 не-раѓосувачки челик"
                  ],
                  [
                    "title" => "Финална Трансмисија",
                    "desc" => "X-ring chain"
                  ],
                  [
                    "title" => "Квачило",
                    "desc" => "Liquid, multi-disc, assisted glide"
                  ],
                  [
                    "title" => "Менувачка Кутија",
                    "desc" => "6 брзини"
                  ]
                ],
            "frame" => [
                  [
                    "title" => "шасија",
                    "desc" => "Double-beam aluminum with 2-piece high-pressure die-cast subframe"
                  ],
                  [
                    "title" => "вилушка",
                    "desc" => "алуминиум"
                  ],
                  [
                    "title" => "предно тркало",
                    "desc" => "17 x 3.5' леан алуминиум со 5 краци"
                  ],
                  [
                    "title" => "задно тркало",
                    "desc" => "17 x 3.5' леан алуминиум со 5 краци"
                  ],
                  [
                    "title" => "предна гума",
                    "desc" => "120/70 ZR 17"
                  ],
                  [
                    "title" => "задна гума",
                    "desc" => "180/55 ZR 17"
                  ],
                  [
                    "title" => "предна суспензија",
                    "desc" => "Showa Big Piston 115мм inverted вилушка со прилагодувања за компресија, враќање и претходно оптоварување"
                  ],
                  [
                    "title" => "задна суспензија",
                    "desc" => "Showa piggyback monoshock 133.5mm задна суспензија со систем за прилагодувања за компресија, враќање и претходно оптоварување"
                  ],
                  [
                    "title" => "предни сопирачки",
                    "desc" => "Дупли дискови од 310m"
                  ],
                  [
                    "title" => "задна сопирачка",
                    "desc" => "Еден диск од 220mm, Brembo клешта со ABS"
                  ],
                  [
                    "title" => "инструментна плочка",
                    "desc" => "Мултифункционален TFT екран"
                  ]
                ],
            "dimension" => [
                  [
                    "title" => "ширина на волан",
                    "desc" => "792 mm"
                  ],
                  [
                    "title" => "висина без ретровизори",
                    "desc" => "1047 mm"
                  ],
                  [
                    "title" => "Висина на Седиште",
                    "desc" => "826 mm"
                  ],
                  [
                    "title" => "мегу-осовинско растојание ",
                    "desc" => "1402 mm"
                  ],
                  [
                    "title" => "Custer Corner",
                    "desc" => "23.7º"
                  ],
                  [
                    "title" => "Trace",
                    "desc" => "97.8 mm"
                  ],
                  [
                    "title" => "Тежина",
                    "desc" => "192 kg"
                  ],
                  [
                    "title" => "капацитет на резервоар",
                    "desc" => "15 L"
                  ],
                  [
                    "title" => "Tежина при полн резервозар",
                    "desc" => "189 kg"
                  ]
                ],
            "fuelConsumption" => [
                  [
                    "title" => "Потрошувачка",
                    "desc" => "52.8 mpg (5.4 литри / 100 km)"
                  ],
                  [
                    "title" => "CO2 загадување",
                    "desc" => "120g/km - Euro 5 Стандарди измерени според Регулатива 168/2013/EC. Резултатите се добиени во специјални тест средини и се на располагање само за споредба. Вистинските резултат може да варираат врз различни средини."
                  ],
                  [
                    "title" => "Сервисен Интервал",
                    "desc" => "10.000km / 12 месеци"
                  ]
                ],
              "grayCarousell" => [
                [
                  "id" => "carouselItem1",
                  "title" => "Најновиот и Првенец во класата на “Streetfighter“ Моторцикли",
                  "desc" => "Сега, уште повеќе сила благодарејки на Мото2 моторот со неверојатна агилност, агресивен изглед и електронска технологија која поставува нови стандарди.",
                  "image" => "/images/roadsters/streetTriple765/streetTriple765GrayCaro1.avif"
                ],
                [
                  "id" => "carouselItem2",
                  "title" => "Новиот Репер Во класата на “naked“ моторцикли",
                  "desc" => "ТНови технолошки унапредувања, агилност, највисока запирачка спецификација и новиот репер во смисла на моќност во класата.",
                  "image" => "/images/roadsters/streetTriple765/streetTriple765GrayCaro2.avif"
                ],
                [
                  "id" => "carouselItem3",
                  "title" => "Нај-моќната серија досега",
                  "desc" => "Со голем чекор напред во развивање на Мото2 моторот, Street Triple серијата се закити со уште повеќе обртен момент и сила - 120 РЅ за R верзијата и 130 РЅ за RS Verzijata.",
                  "image" => "/images/roadsters/streetTriple765/streetTriple765GrayCaro3.avif"
                ]
              ],
              "youtubeVideosCarousellItems" => [
                [
                  "src" => "https://www.youtube.com/embed/cDNnqoRB50w",
                  "title" => "Triumph Street Triple Launch Valencia 2022"
                ],
                [
                  "src" => "https://www.youtube.com/embed/A6MwjE782iI",
                  "title" => "Web | Street Triple R Hero"
                ],
                [
                  "src" => "https://www.youtube.com/embed/Qj9dxotylh0",
                  "title" => "Web | Street Triple RS Hero"
                ],
                [
                  "src" => "https://www.youtube.com/embed/--p8YSQxEp0",
                  "title" => "Web | Engine In Motion Street Triple 765"
                ],
                [
                  "src" => "https://www.youtube.com/embed/JR-wXQFKG2Q",
                  "title" => "Web - DE | Street Triple R | Features and Benefits"
                ],
                [
                  "src" => "https://www.youtube.com/embed/cDNnqoRB50w",
                  "title" => "Triumph Street Triple Launch Valencia 2022"
                ],
                [
                  "src" => "https://www.youtube.com/embed/kP7FA3k6Hv8",
                  "title" => "New Street Triple 765 RS | Features and Benefits"
                ]
              ],
              "specNumbers" => [
                [ "data" => "765", "info" => "cc Мотор" ],
                [ "data" => "80", "info" => "Nm обртен момент" ],
                [ "data" => "120-130", "info" => "PS - Максимална Сила" ],
                [ "data" => "10.000", "info" => "КМ Сервисен Интервал" ]
              ],
            "reasonsToDrive" => [
              "banner" => [
                "image" => "/images/roadsters/streetTriple765/streetTriple765ReasonsBanner.avif"
              ],
              "infoText" => [
                "title" => "Причини зошто да ja оберете Street Triple 765 серијата."
              ],
              "reasons" => [
                [
                  "title" => "Мотор",
                  "desc" => "Користејќи го знаењето стекнато од програмата за тркачки мотори Moto2™, Street Triple R сега произведува 120 КС при 11.500 вртежи во минута, додека RS и Moto2™ Edition испорачуваат максимални 130 КС при 12.000 вртежи во минута. Овие подобрувања беа направени без да се загрози репутацијата на Street Triple за доверливост, една од многуте причини поради кои организаторите на Moto2™ неодамна го продолжија договорот за користење на трицилиндричен мотор од 765 кубици. до крајот на 2024 година. Повисокиот сооднос на компресија, новите клипови, поврзувачките шипки и игличките на клипот, усогласени со новите оптимизирани комори за согорување нудат зголемено ограничување на притисокот во цилиндарот и на крајот поголема моќност. Новите вентили и брегасти вратила даваат зголемено подигање. Вентил за подобрени перформанси за внесување, согорување и издувни гасови, додека новите соодноси на менувачот носат подобрена ефикасност и одговор, што на крајот обезбедува побрзо забрзување, што значи дека оваа нова генерација е најострата и најживата досега. Значително ревидиран и ажуриран за да произведе повеќе моќ од кога било досега, моторот од 765 кубици. добиен од Moto2™ го испорачува препознатливиот Street Triple звук. Правејќи го тврдото отворање на гасот уште позависно, ревидираниот довод на воздух дава застрашувачки татнеж. А, со зголемена компресија и поефикасно согорување, звукот создаден од новиот издувен систем и послободниот заден дел е чиста Moto2™ магија.",
                  "video" => "https://www.youtube.com/embed/QKxDQhOaI0U"
                ],
                [
                  "title" => "Шасија",
                  "desc" => "Изграден со одлично управување за сигурно возење во сите сценарија, новиот Street Triple е вистинска радост за возење на патеката. Висококвалитетните сопирачки на Brembo заедно со врвната Showa и Öhlins суспензија и неверојатните Pirelli Supercorsa SP V3* гуми ја обезбедуваат способноста потребна за да се вози блиску до лимитот со сигурност. Брзиот менувач со помош на менувачот за менување на брзини без спојка е стандарден кај сите модели на Street Triple, како и оптимизиран ABS во свиоци и контрола на тракцијата. Во зависност од избраниот возач, овие технолошки напредни системи нудат исклучителни нивоа на помош на возачот за побезбедно возење со помалку наметливи поставки достапни за дополнителна способност за фокусирање на патеката. * само кај изданијата RS и Moto2™, R се одликува со пневматиците Continental ContiRoad кои се повеќе фокусирани на патот. Пластиката, резервоарот за гориво од 15 литри, капаците на ладилникот и финишот на фаровите се редизајнирани за поостар, поагресивен изглед, јасно задржувајќи ја иконската дизајнерска ДНК на Street Triple.nОвој нов, спуштен нос со почисти, поостри линии и тие препознатливи двојни фарови доаѓа рака под рака со целото познато неутрално и неверојатно агилно управување на Street Triple.",
                  "video" => "https://www.youtube.com/embed/Ppx4BokT26o"
                ],
                [
                  "title" => "Направен за Вас",
                  "desc" => "Оптоварена со технологија фокусирана на возачот, дизајнирана да го подобри возењето, најновиот опсег на Street Triple има придобивки од големата надградба на електрониката.Новиот Optimized Cornering ABS и исклучувачкиот Optimized Cornering Traction Control System обезбедуваат оптимални перформанси за сопирање и влечење под кој било агол, и на патот и на патеката, во сите услови на возење. Надградени се и режимите на возење со нови мапи за гас. Лесно може да се избере преку интуитивното мени од 5 инчи TFT и ергономски оптимизираниот Возачите се исто така надградени со нови мапи за гас. Лесно може да се избере преку интуитивното мени со TFT екран од 5' и ергономски оптимизираните прекинувачи, совршената поставка е секогаш на дофат. Функција на Bluetooth како додаток, целосно LED осветлување, со дневни светла на RS и Moto2TM Edition... има дури и практичен USB приклучок под седлото за полнење телефони и периферни уреди.",
                  "video" => "https://www.youtube.com/embed/xHNIjTSIRiA"
                ]
              ]
            ],
            "accessory" => [
              "banner" => [
                "image" => "/images/roadsters/streetTriple765/streetTriple765TopSectionImageBG.avif"
              ],
              "infoText" => [
                "title" => "Додајте ваш белег врз Speed 400",
                "desc" => "На располагање ви е селекција од преку 20 оригинални Triupmh аксесоари за оваа серија на мотори. Аксесоарите кои ќе ги додадете може да бидат додадени на вашиот мотор во фабриката. Aксесоарите се дизајнирани од истиот тим кој го креираше Speed 400 и доаѓаат со две-годишна гаранција."
              ],
              "accessoryTypes" => [
                [
                  "title" => "Технологија",
                  "desc" => "Веќе преполна со иновации, најновата генерација Street Triple има неколку полиња за штиклирање во однос на технологијата.Новата контрола на патувањето е совршен додаток за возачите кои поминуваат многу време на автопати и/или возат во области со зголемена брзина. Одржувањето на поставената брзина ја подобрува економичноста на горивото и го намалува заморот, давајќи и на десната рака поголема слобода да се наведнува на долги растојанија.За целосно искористување на способноста за Bluetooth на 5' TFT дисплејот, достапна е единица за целосно поврзување My Triumph. Ова овозможува ракување со телефонот и музиката и нуди навигација чекор-по-сврт.Тркалачките LED индикатори комбинираат стил со технологија и нудат персонализација, како и дополнително подобрување на видливоста на другите учесници во сообраќајот.",
                  "itemsList" => [
                    "Темпомат",
                    "My Triumph Bluetooth Уред",
                    "LED Трапкачи"
                  ],
                  "image1" => [
                    "src" => "/images/roadsters/streetTriple765/streetТriple765АccessoriesCruiseControl.avif",
                    "alt" => "Street Тriple 765 Cruise Control"
                  ],
                  "image2" => [
                    "src" => "/images/roadsters/streetTriple765/streetТriple765АccessoriesTFTl.avif",
                    "alt" => "Street Тriple 765 TFT"
                  ]
                ],
                [
                  "title" => "Заштита и Комфорт",
                  "desc" => "Одржувањето на вашата нова Street Triple безбедна од оштетување, штитниците за рамката и за нишање ги надополнуваат овие карактеристични и агресивни линии, додека штитниците на капакот на моторот, дизајнирани да одговараат совршено, нудат дискретно, но ефективно ублажување на оштетувањето во случај на пад.Достапен е елегантен визир за да се намали ветерот и да се подобри удобноста на долги растојанија, додека возачите за сите временски услови можат да уживаат во зимскиот пат со топли раце без жици да им пречат на рачките, со внатрешно жичените грејни рачки. Достапни се и рачки за држење на патници за дополнителна удобност и безбедност.Завртките за монтирање на тркачки штанд додаваат удобност за задачите за рутинско одржување, а премиум марката Triumph ќе обезбеди вашиот велосипед да остане чист и подготвен за следното возење.",
                  "itemsList" => [
                    "Штитиници на шасија",
                    "Штитници за вилушки",
                    "Штитници за мотор",
                    "Греачи на волан",
                    "Рачки за држење на совозач",
                    "Брендирана Triumph Покривка",
                    "Предна Маска",
                    "Штрафови за тркачка ногарка"
                  ],
                  "image1" => [
                    "src" => "/images/roadsters/streetTriple765/streetТriple765АccessoriesPassengerGrabs.avif",
                    "alt" => "Street Triple 765 Passenger Grabs"
                  ]
                ],
                [
                  "title" => "Стил и Детали",
                  "desc" => "Иако Street Triple е несомнено прекрасен велосипед, со толку многу различни стилски додатоци достапни, персонализирањето и правењето на вашата Street Triple навистина ваше никогаш не било полесно. Определите вклучуваат долен капак на опашката и бел LED систем за задни светла за почист заден дел. За помалите, но не помалку важни детали се води сметка и со високо обработените компоненти, како што е резервоарот за течност за сопирачките.",
                  "itemsList" => [
                    "Завршен Детал на крајот од моторот (Држач Регистрација)",
                    "Бели LED задни светла",
                    "Машинско Изработени Резервоари за Течност за Сопирачки "
                  ],
                  "image1" => [
                    "src" => "/images/roadsters/streetTriple765/streetТriple765АccessoriesMask.avif",
                    "alt" => "Street Triple 765 Mask"
                  ],
                  "image2" => [
                    "src" => "/images/roadsters/streetTriple765/streetТriple765АccessoriesTailKit.avif",
                    "alt" => "Street Triple 765 Tail Kit"
                  ]
                ],
                [
                  "title" => "Багаж",
                  "desc" => "Забавниот и динамичен карактер на Street Triple го прави секое возење пријатно, од долги рекреативни возења до патувања до работа за сите временски услови. Дополнително на неговата практичност, стилската дополнителна водоотпорна торба со резервоар и опашката торбичка може брзо да се откачат од велосипедот за лесно користење и секојдневна практичност..",
                  "itemsList" => ["Торба за Резервоар", "Торба за Багажник"],
                  "image1" => [
                    "src" => "/images/roadsters/streetTriple765/streetТriple765АccessoriesTailBag.avif",
                    "alt" => "Street Triple 765 Tail Bag"
                  ]
                ]
              ]
            ],
            "shortSpecInfo" => [
              "info1" => "765cc мотор",
              "info2" => "Максимална јачина од 120-130 PS",
              "info3" => "10000 км сервисен интервал"
            ],
            "gallery" => [
              "modelImage" => [
                "src" => "/images/roadsters/streetTriple765.png",
                "alt" => "Street Triple 765 Range Model Image"
              ],
              "subFamilyHeroVideo" => [
                "src" => "/images/roadsters/streetTriple765/streetTriple765SubFamHeroVideo.webm",
                "alt" => "Street Triple 765 Video"
              ],
              "subFamilyHeroImageMobile" => [
                "src" => "/images/roadsters/streetTriple765/streetTriple765HeroMobile.avif",
                "alt" => "Street Triple 765"
              ],
              "subFamilyTopSectionImage" => [
                "src" => "/images/roadsters/streetTriple765/streetTriple765TopSectionImage.avif",
                "alt" => "Street Triple 765 Motorcycle"
              ],
              "subFamilyTopSectionBGImage" => [
                "src" => "/images/roadsters/streetTriple765/streetTriple765TopSectionImageBG.avif",
                "alt" => "Street Triple 765 Motorcycle BG"
              ]
            ]
        ];

        $subFamRoadstersTwo = [
            "subFamilyName" => "street-triple-moto2",
            "familyType" => "roadsters",
            "title" => "Street Triple 765 Moto2",
            "price" => 12290,
            "url" => "/motorcycles/roadsters/street-triple-765",
            "specs" => [
                [
              "desc" => "К.ЕК Мотор",
              "data" => 1200
                ],
                [
                "desc" => "PS Коњски Сили",
                "data" => 130
                ],
                [
                "desc" => "NM. Обртен Момент",
                "data" => 80
                ],
                [
                "desc" => "Сервисен Интервал",
                "data" => "10,000"
                ]
            ],
            "shortDesc" => "Со легендарен карактер, а со големо засилување во перформанси и технологија оваа серија го доби префиксот 'definitive streetfighter'. ",
            "heroSlogans" => ["Перфектен", "спортски моторцикл", "со тркачки мотор"],
            "youtubeVideo" => "https://www.youtube.com/embed/l5B_Rd4cgHE",
            "subFamilyPageInfo" => [
              "topSection" => [
                "title" => "Врвни Перформанси Во Класата",
                "desc" => "Подкрепнат од еволуција на Moto2™ тркачки мотор, ова е нај-версатилниот, најмоќниот Стреет Трипле мотор досега.",
                "subtitle" => "Најдобриот “naked“ моторцикл - на пат и на тркачка патека."
              ],
              "audioSection" => [
                "audio" => "/images/roadsters/streetTriple765/streetTriple765Sound.mp3",
                "title" => "Три-цилиндречен звук кој го тресе земјиното тло.",
                "desc" => "Новиот издувен систем го испорачува оној препознатлив три-цилиндарски звук на моторот.",
                "logo" => null
              ],
            ],
            "engineTransmission" => [
                  [
                    "title" => "Тип на Мотор",
                    "desc" => "водно ладење, 12 вентили, DOHC, линиски 3-цилиндри, 240° редослед на есклпозии"
                  ],
                  [
                    "title" => "капацитет",
                    "desc" => "660 cc"
                  ],
                  [
                    "title" => "диаметар",
                    "desc" => "74.04 mm"
                  ],
                  [
                    "title" => "рута",
                    "desc" => "51.1 mm"
                  ],
                  [
                    "title" => "компресија",
                    "desc" => "11.95:1"
                  ],
                  [
                    "title" => "Мах. Коњски Сила",
                    "desc" => "81 PS / 80 bhp (59.6 kW) @ 10,250 rpm"
                  ],
                  [
                    "title" => "Мах. Обртен Момент",
                    "desc" => "64 Nm @ 6,250 rpm"
                  ],
                  [
                    "title" => "Систем за убризгување",
                    "desc" => "Multipoint sequential electronic fuel injection with electronic throttle control"
                  ],
                  [
                    "title" => "Систем за Издувни гасови",
                    "desc" => "3 во 1 не-раѓосувачки челик"
                  ],
                  [
                    "title" => "Финална Трансмисија",
                    "desc" => "X-ring chain"
                  ],
                  [
                    "title" => "Квачило",
                    "desc" => "Wet, multi-plate, slip"
                  ],
                  [
                    "title" => "Менувачка Кутија",
                    "desc" => "6 брзини"
                  ]
            ],
            "frame" => [
                  [
                    "title" => "шасија",
                    "desc" => "тубуларна челична шасија"
                  ],
                  [
                    "title" => "вилушка",
                    "desc" => "алуминиум"
                  ],
                  [
                    "title" => "предно тркало",
                    "desc" => "19 x 2.5' die-cast легура "
                  ],
                  [
                    "title" => "задно тркало",
                    "desc" => "17 x 4.25' die-cast легура "
                  ],
                  [
                    "title" => "предна гума",
                    "desc" => "100/90-19"
                  ],
                  [
                    "title" => "задна гума",
                    "desc" => "150/70R17"
                  ],
                  [
                    "title" => "предна суспензија",
                    "desc" => "Marzocchi Inverted Fork 45mm"
                  ],
                  [
                    "title" => "задна суспензија",
                    "desc" => "Marzocchi задна суспензија со систем за подесување"
                  ],
                  [
                    "title" => "предни сопирачки",
                    "desc" => "Dual 320mm дискови, 4-piston monobloc Brembo Stylema calipers. Front radial pump, ABS"
                  ],
                  [
                    "title" => "задна сопирачка",
                    "desc" => "Еден 255 mm диск. Brembo single piston floating caliper, ABS"
                  ],
                  [
                    "title" => "инструментна плочка",
                    "desc" => "5 TFT екран"
                  ]
            ],
            "dimension" => [
                  [
                    "title" => "ширина на волан",
                    "desc" => "830 mm"
                  ],
                  [
                    "title" => "висина без ретровизори",
                    "desc" => "1410-1460 mm"
                  ],
                  [
                    "title" => "Висина на Седиште",
                    "desc" => "820-840 mm"
                  ],
                  [
                    "title" => "мегу-осовинско растојание ",
                    "desc" => "1556 mm"
                  ],
                  [
                    "title" => "Custer Corner",
                    "desc" => "24.6 º"
                  ],
                  [
                    "title" => "Trace",
                    "desc" => "133.3 mm"
                  ],
                  [
                    "title" => "Тежина",
                    "desc" => "192 kg"
                  ],
                  [
                    "title" => "капацитет на резервоар",
                    "desc" => "20 L"
                  ]
            ],
            "fuelConsumption" => [
                  [
                    "title" => "Потрошувачка",
                    "desc" => "5.2l /100km"
                  ],
                  [
                    "title" => "CO2 загадување",
                    "desc" => "Euro 5 Стандарди измерени според Регулатива 168/2013/EC. Резултатите се добиени во специјални тест средини и се на располагање само за споредба. Вистинските резултат може да варираат врз различни средини."
                  ]
            ],
              "grayCarousell" => [
                [
                  "id" => "carouselItem1",
                  "title" => "Вашиот MOTO2™ тркач за на пат",
                  "desc" => "Лимитирано на 765 парчиња во секој од тркачки инспирираните дизајни, со сила која е лидер во својата класа и со потполно прилагодливи Öhlins вилушки.",
                  "image" => "/images/roadsters/moto2/streetTripleMoto2GrayCaro3.avif"
                ],
                [
                  "id" => "carouselItem2",
                  "title" => "Новиот Репер Во класата на “naked“ перформантни моторцикли",
                  "desc" => "Нови технолошки унапредувања, агилност, највисока запирачка спецификација и новиот репер во смисла на моќност во класата.",
                  "image" => "/images/roadsters/moto2/streetTripleMoto2GrayCaro2.avif"
                ],
                [
                  "id" => "carouselItem3",
                  "title" => "Нај-моќната серија досега",
                  "desc" => "Со голем чекор напред во развивање на Мото2 моторот, Street Triple серијата се закити со уште повеќе обртен момент и сила - 120 РЅ за R верзијата и 130 РЅ за RS Verzijata.",
                  "image" => "/images/roadsters/moto2/streetTripleMoto2GrayCaro3.avif"
                ]
              ],
              "youtubeVideosCarousellItems" => [
                [
                  "src" => "https://www.youtube.com/embed/cDNnqoRB50w",
                  "title" => "Triumph Street Triple Launch Valencia 2022"
                ],
                [
                  "src" => "https://www.youtube.com/embed/csViBxs5FSQ",
                  "title" => "Street Triple Moto2TM Edition | First Ride at Valencia"
                ],
                [
                  "src" => "https://www.youtube.com/embed/cDNnqoRB50w",
                  "title" => "Triumph Street Triple Launch Valencia 2022"
                ],
                [
                  "src" => "https://www.youtube.com/embed/PT4txMuuBBs",
                  "title" => "New Street Triple 765 Moto2 Edition | Features and Benefits"
                ],
                [
                  "src" => "https://www.youtube.com/embed/l5B_Rd4cgHE",
                  "title" => "Web | Street Triple Moto2 Edition"
                ],
                [
                  "src" => "https://www.youtube.com/embed/--p8YSQxEp",
                  "title" => "Web | Engine In Motion Street Triple 765"
                ]
              ],
              "specNumbers" => [
                [ "data" => "765", "info" => "cc Мотор" ],
                [ "data" => "80", "info" => "Nm обртен момент" ],
                [ "data" => "130", "info" => "PS - Максимална Сила" ],
                [ "data" => "10.000", "info" => "КМ Сервисен Интервал" ]
              ],
            "reasonsToDrive" => [
              "banner" => [
                "image" => "/images/roadsters/streetTriple765/streetTriple765TopSectionImageBG.avif"
              ],
              "infoText" => [
                "title" => "Причини зошто да ja оберете Street Triple 765 серијата",
                "desc" => "Доделена од печатот и од сопствениците од нејзиното лансирање во 2007 година, оваа нова генерација Street Triple се одликува со специфичен нов стил, подобрена ергономија и ревидирана геометрија што дава уште подобра агилност. Најмоќната серија Street Triple досега, со надградби на моторот добиени директно од рекордната програма за трки со мотори Moto2™, во комбинација со шасијата Street Triple светски позната по прецизно управување.Изграден според највисоките спецификации досега, со значителен напредок во суспензијата, сопирачките и технологијата, гамата Street Triple од 2023 година поставува нов репер за спортски велосипеди со голи перформанси.Веќе Уникатниот карактер на Street Triple е дополнително подобрен со серија надградби и поагресивен нов изглед.Подобрени перформанси на моторот, напредок во технологијата фокусирана на возачот, подобрена ергономија на возачот и суспензија и сопирачки со повисоки спецификации, плус целокупниот груб звук во доводот на Street Triple и нови комбинирани издувни гасови со послободно течење за да се постави нов репер во Street Triple моќност и управување. и забава."
              ],
              "reasons" => [
                [
                  "title" => "Безвременски и Автентичен Стил",
                  "desc" => "Conceived and designed in Hinckley, UK, the Speed ​​400 has been built with the same meticulous attention to detail as every Triumph model. This stunning motorcycle combines timeless design DNA with modern performance. The unmistakable Triumph roadster silhouette, distinctive sculpted fuel tank and classic engine profile echo legends of the past and with exquisite details such as the distinctive cylinder head with radiators, concealed liquid cooling, traditional exhaust header clamps and modern anode muffler, the dazzling blend of retro and modern styling embodies the unique charm of Triumph's famous Modern Classic range.",
                  "image" => "/images/classics/speed400/speed400ReasonsStyle.avif"
                ],
                [
                  "title" => "Нов Мотор",
                  "desc" => "The brand new 398cc single cylinder engine. fuel-injected combines modern classic Triumph styling with state-of-the-art technology to deliver 40bhp and 37.5Nm of peak torque with a rich, signature exhaust note from the twin-pipe muffler. Technical features include a four-valve, 2EEK cylinder head and a crankshaft that is perfectly weighted and balanced to optimize inertia for low-speed driving. A rocker arm valvetrain with low reciprocating mass and friction-reducing DLC ​​coatings also contribute to the incredible performance of this nimble yet supple engine. The six-speed gearbox offers a light, precise gear selection with ratios perfectly spread out to get the most out of this exciting, characterful and torque-rich engine. ",
                  "image" => "/images/classics/speed400/speed400ReasonsMotorImage.avif"
                ],
                [
                  "title" => "Сериозна Забава",
                  "desc" => "The Speed ​​400 is all about having fun. The comfortable and attractive riding position gives the ideal balance of weight between the three points of contact for that 'just right' feel, which has become synonymous with Triumph. Riders of all sizes feel right at home on the Speed ​​400 from the very first ride, thanks to the light and compact 398cc engine. and the slim waist makes the 790mm seat height even more approachable, for a confidence-inspiring ride and easy on-the-spot maneuvering.",
                  "image" => "/images/classics/speed400/speed400ReasonsFun.avif"
                ],
                [
                  "title" => "Направен за Вас",
                  "desc" => "No two riders are the same, so you can personalize your Tiger Sport 660 with a choice of three special colors and graphics and over 40 genuine Triumph accessories. From built-in luggage to a central case that holds 2 helmets, you'll be inspired by the options to suit your adventure. When everyday flexibility is your goal, you shouldn't be left behind. The bike is designed with the rider in mind - make it your own."
                ],
                [
                  "title" => "Модерна Технологија",
                  "desc" => "The Speed ​​400 is equipped with technology designed to improve every ride. The Torque Assist Clutch is an intelligent system that reduces the force on the clutch lever to improve ease of use and rider comfort when stopping/starting, and reducing travel fatigue. wheel for greater performance and safety.."
                ]
              ]
            ],
            "accessory" => [
              "banner" => [
                "image" => "/images/classics/speed400/speed400AccessoryBanner.avif"
              ],
              "infoText" => [
                "title" => "Додајте ваш белег врз Speed 400",
                "desc" => "На располагање ви е селекција од преку 20 оригинални Triupmh аксесоари за оваа серија на мотори. Аксесоарите кои ќе ги додадете може да бидат додадени на вашиот мотор во фабриката. Aксесоарите се дизајнирани од истиот тим кој го креираше Speed 400 и доаѓаат со две-годишна гаранција."
              ],
              "accessoryTypes" => [
                [
                  "title" => "Стил и Комфорт",
                  "desc" => "Choose from a range of parts that will make the Speed ​​400 just the way you want it. Direct replacement bullet turn signals a subtle new look and premium touch with their satin black body and machined aluminum bezels.. Or maybe you want to remodel the tank with different knee pads? A comfortable saddle with a stitched and quilted finish makes a style statement and, together with plug and play heated grips, offers luxury on longer rides..",
                  "itemsList" => [
                    "Bullet type LED flash",
                    "Штитници за колена",
                    "Комфортно Седло"
                  ],
                  "image1" => [
                    "src" => "/images/classics/speed400/speed400SAccesoryStyleImage1.avif",
                    "alt" => "Speed 400 On The Road"
                  ],
                  "image2" => [
                    "src" => "/images/classics/speed400/speed400AccessoryStyleImage2.avif",
                    "alt" => "Speed 400 PaintJob"
                  ]
                ],
                [
                  "title" => "Багаж",
                  "desc" => "A full range of Speed ​​400-specific luggage has been created to add some practicality to the fun. The Speed ​​400 is the perfect touring bike, and outfitting it to handle your load really couldn't be easier. Choose from sturdy side or rigid and semi-rigid panniers, each with their own special mounting system or, for those who prefer to travel light, a simple luggage rack, nylon tank bag or roll-on bag could be the perfect choice .",
                  "itemsList" => [
                    "Цврсти Куфери за Багаж",
                    "Држач за Багаж",
                    "Најлонска торба за на резервоар",
                    "Најлонска Торба Roll "
                  ],
                  "image1" => [
                    "src" => "/images/classics/speed400/speed400AccessoryLuggageImage.avif",
                    "alt" => "Speed 400 Luggage"
                  ]
                ],
                [
                  "title" => "Заштита ",
                  "desc" => "Both your protection from the elements and that of the Speed ​​400 have been taken care of. A visor with a special fitting kit is also available to deflect the wind to reduce rider fatigue on longer rides. Easy to fit and with style to match, it's a must-have addition for distance riders.To keep the Speed ​​400 out of harm's way on rougher roads, there's an aluminum skid plate, a radiator guard and a headlight mask, which comes with its own bezel for easy fitting, and offers excellent protection from rocks and debris. All-weather riders may want to add the mudguard kit which consists of front and rear mudguard extensions and a rear wing. These combine nicely to protect against water spray and extend the life of the rear shock in extreme conditions.Upper and lower engine guards are also available — these provide excellent protection against drops and spills, a must-have addition for city and country driving.",
                  "itemsList" => [
                    "Гелатин",
                    "Заштита за ладник",
                    "Решетка за светло",
                    "Алуминиумска заштита",
                    "Заштита од Кал",
                    "Цевки за Заштита на Мотор (Горни и Долни)"
                  ],
                  "image1" => [
                    "src" => "/images/classics/speed400/speed400AccessoryProtectionImage1.avif",
                    "alt" => "Speed 400 Head"
                  ],
                  "image2" => [
                    "src" => "/images/classics/speed400/speed400AccessoryRadiatorProtection.avif",
                    "alt" => "speed 400 Accessory Radiator Protection"
                  ]
                ]
              ]
            ],
            "shortSpecInfo" => [
              "info1" => "765cc мотор",
              "info2" => "130 PS",
              "info3" => "10000 км сервисен интервал"
            ],
            "gallery" => [
              "modelImage" => [
                "src" => "/images/roadsters/moto2/streetTripleMoto2Yellow.png",
                "alt" => "Street Triple 765 Range Model Image"
              ],
              "subFamilyHeroVideo" => [
                "src" => "/images/roadsters/moto2/streetTripleMoto2HeroVideo.mp4",
                "alt" => "Street Triple 765 Moto2 image"
              ],
              "subFamilyHeroImageMobile" => [
                "src" => "/images/roadsters/moto2/moto2HeroMobile.avif",
                "alt" => "Street Triple 765"
              ],
              "subFamilyTopSectionImage" => [
                "src" => "/images/roadsters/moto2/streetТriple765TopSectionImage.avif",
                "alt" => "Street Triple 765 Moto2 image"
              ],
              "subFamilyTopSectionBGImage" => [
                "src" => "/images/roadsters/moto2/streetТriple765TopSectionImageBG.avif",
                "alt" => "Street Triple 765 Moto2 image BG"
              ]
            ]
        ];

        $subFamRoadstersThree = [
            "subFamilyName" => "trident-660",
            "familyType" => "roadsters",
            "title" => "Trident 660",
            "price" => 8690,
            "url" => "/motorcycles/roadsters/trident-660",
            "specs" => [
                [
              "desc" => "К.ЕК Мотор",
              "data" => 660
                ],
                [
                "desc" => "PS Коњски Сили",
                "data" => 81
                ],
                [
                "desc" => "NM. Обртен Момент",
                "data" => 64
                ],
                [
                "desc" => "Сервисен Интервал",
                "data" => "16,000"
                ]
            ],
            "shortDesc" => "И спортски, и стилски, и возбудлив и со конкурентна цена - сето ова го може новиот Trident 660.",
            "youtubeVideo" => "https://www.youtube.com/embed/Po5n-cI9EQw",
            "heroSlogans" => ["Перфектен", "спортски моторцикл", "со тркачки мотор"],
            "subFamilyPageInfo" => [
              "topSection" => [
                "title" => "Забавата е загарантирана",
                "desc" => "Три-цилиндарски перформанси, технологија и спецификации кои се лидери во класата - сето ова со компетативна цена.",
                "subtitle" => "...возбудливo, флексибилно и динамично однесување на пат со технологија по која секој ќе завидува - Lee Morisson менаџер на сите каскадери на James Bond."
              ],
              "audioSection" => [
                "audio" => "/images/roadsters/streetTriple765/streetTriple765Sound.mp3",
                "title" => "Три-цилиндречен звук кој го тресе земјиното тло.",
                "desc" => "Новиот издувен систем го испорачува оној препознатлив три-цилиндарски звук на моторот.",
                "logo" => null
              ],
            ],
                "engineTransmission" => [
                  [
                    "title" => "Тип на Мотор",
                    "desc" => "водно ладење, 12 вентили, DOHC, линиски 3-цилиндри, 240° редослед на есклпозии"
                  ],
                  [
                    "title" => "капацитет",
                    "desc" => "660 cc"
                  ],
                  [
                    "title" => "диаметар",
                    "desc" => "74.04 mm"
                  ],
                  [
                    "title" => "рута",
                    "desc" => "51.1 mm"
                  ],
                  [
                    "title" => "компресија",
                    "desc" => "11.95:1"
                  ],
                  [
                    "title" => "Мах. Коњски Сила",
                    "desc" => "81 PS / 80 bhp (59.6 kW) @ 10,250 rpm"
                  ],
                  [
                    "title" => "Мах. Обртен Момент",
                    "desc" => "64 Nm @ 6,250 rpm"
                  ],
                  [
                    "title" => "Систем за убризгување",
                    "desc" => "Multipoint sequential electronic fuel injection with electronic throttle control"
                  ],
                  [
                    "title" => "Систем за Издувни гасови",
                    "desc" => "3 во 1 не-раѓосувачки челик"
                  ],
                  [
                    "title" => "Финална Трансмисија",
                    "desc" => "X-ring chain"
                  ],
                  [
                    "title" => "Квачило",
                    "desc" => "Wet, multi-plate, slip"
                  ],
                  [
                    "title" => "Менувачка Кутија",
                    "desc" => "6 брзини"
                  ]
                ],
                "frame" => [
                  [
                    "title" => "шасија",
                    "desc" => "тубуларна челична шасија"
                  ],
                  [
                    "title" => "вилушка",
                    "desc" => "алуминиум"
                  ],
                  [
                    "title" => "предно тркало",
                    "desc" => "19 x 2.5' die-cast легура "
                  ],
                  [
                    "title" => "задно тркало",
                    "desc" => "17 x 4.25' die-cast легура "
                  ],
                  [
                    "title" => "предна гума",
                    "desc" => "100/90-19"
                  ],
                  [
                    "title" => "задна гума",
                    "desc" => "150/70R17"
                  ],
                  [
                    "title" => "предна суспензија",
                    "desc" => "Marzocchi Inverted Fork 45mm"
                  ],
                  [
                    "title" => "задна суспензија",
                    "desc" => "Marzocchi задна суспензија со систем за подесување"
                  ],
                  [
                    "title" => "предни сопирачки",
                    "desc" => "Dual 320mm дискови, 4-piston monobloc Brembo Stylema calipers. Front radial pump, ABS"
                  ],
                  [
                    "title" => "задна сопирачка",
                    "desc" => "Еден 255 mm диск. Brembo single piston floating caliper, ABS"
                  ],
                  [
                    "title" => "инструментна плочка",
                    "desc" => "5 TFT екран"
                  ]
                ],
                "dimension" => [
                  [
                    "title" => "ширина на волан",
                    "desc" => "830 mm"
                  ],
                  [
                    "title" => "висина без ретровизори",
                    "desc" => "1410-1460 mm"
                  ],
                  [
                    "title" => "Висина на Седиште",
                    "desc" => "820-840 mm"
                  ],
                  [
                    "title" => "мегу-осовинско растојание ",
                    "desc" => "1556 mm"
                  ],
                  [
                    "title" => "Custer Corner",
                    "desc" => "24.6 º"
                  ],
                  [
                    "title" => "Trace",
                    "desc" => "133.3 mm"
                  ],
                  [
                    "title" => "Тежина",
                    "desc" => "192 kg"
                  ],
                  [
                    "title" => "капацитет на резервоар",
                    "desc" => "20 L"
                  ]
                ],
                "fuelConsumption" => [
                  [
                    "title" => "Потрошувачка",
                    "desc" => "5.2l /100km"
                  ],
                  [
                    "title" => "CO2 загадување",
                    "desc" => "Euro 5 Стандарди измерени според Регулатива 168/2013/EC. Резултатите се добиени во специјални тест средини и се на располагање само за споредба. Вистинските резултат може да варираат врз различни средини."
                  ]
                ],
              "grayCarousell" => [
                [
                  "id" => "carouselItem1",
                  "title" => "660сс три-цилиндричени перформанси",
                  "desc" => "Три-цилиндарскиот мотор од 66сс, ви нуди перфектен баланс помеѓу обртен момент на низок обртај и возбудлива сила и респонзивност при високи обртаи.",
                  "image" => "/images/roadsters/trident660/trident660GrayCaro1.avif"
                ],
                [
                  "id" => "carouselItem2",
                  "title" => "технологија",
                  "desc" => "Лидер во класата по технологија, TFT инструментна плоча, LED расвета, 2 мода на работа, АВЅ и систем за пролизгување за подобра сигурност и контрола.",
                  "image" => "/images/roadsters/trident660/trident660GrayCaro2.avif"
                ],
                [
                  "id" => "carouselItem3",
                  "title" => "Стил",
                  "desc" => "Препознатливиот минималистичен изглед и спортката силуета го краси Trident и му дава карактер и стил.",
                  "image" => "/images/roadsters/trident660/trident660GrayCaro3.avif"
                ]
              ],
              "youtubeVideosCarousellItems" => [
                [
                  "src" => "https://www.youtube.com/embed/JHUeNjilnXA",
                  "title" => "New Triumph Trident 660 Engine Story"
                ],
                [
                  "src" => "https://www.youtube.com/embed/4qnpPzumJTs",
                  "title" => "New Triumph Trident 660 - Live Launch Even"
                ],
                [
                  "src" => "https://www.youtube.com/embed/lLNvbwE0rfo",
                  "title" => "New Triumph Trident 660 Features and Benefits"
                ],
                [
                  "src" => "https://www.youtube.com/embed/L429P5w78HM",
                  "title" => "The New Triumph Trident 660 - Web"
                ]
              ],
              "specNumbers" => [
                [ "data" => "660", "info" => "cc Мотор" ],
                [ "data" => "64", "info" => "Nm обртен момент" ],
                [ "data" => "81", "info" => "PS - Максимална Сила" ],
                [ "data" => "16.000", "info" => "КМ Сервисен Интервал" ]
              ],
            "reasonsToDrive" => [
              "banner" => [
                "image" => "/images/roadsters/trident660/trident660TopSectionImageBG.avif"
              ],
              "infoText" => [
                "title" => "Trident 660"
              ],
              "reasons" => [
                [
                  "title" => "Возбудлив Три-Цилиндарски Мотор со Оцлични Перформанси",
                  "desc" => "Централно место за моќта, разновидноста и возбудливите перформанси на Trident 660 е неговиот мотор од 660 кубика. Трицилиндричен Triumph мотор кој нуди совршена рамнотежа на силен вртежен момент (очигледен од низок до висок), кој достигнува врв на 67 Nm @ 8.000 вртежи во минута и возбудлива моќ што достигнува врвни 80 КС @ 8.900 вртежи во минута.nКога станува збор за квалитетот на возењето, има чувство без напор во Trident 660. Мазниот и остар менувач со 6 брзини е оптимизиран за забавно и лесно возење, додека спојката со помош на влечки обезбедува лесно вклучување што го намалува заморот, овозможувајќи ви да уживате во тоа извонреден мотоцикл подолго.",
                  "image" => "/images/roadsters/trident660/trident660Reason1.avif"
                ],
                [
                  "title" => "Лидерска Технологија во Класата која доаѓа како СТАНДАРД",
                  "desc" => "Мултифункционалните инструменти на Trident 660 со TFT дисплеј во боја ги обезбедуваат сите основни информации во компактен и компактен дизајн за лесна и брза интеракција додека возите. Дисплејот е специјално дизајниран за опционалниот систем за поврзување што одговара на додатоците кој овозможува навигација „сврт по свиок“, контрола на GoPro, како и интеракција со телефонот и музиката преку прекинувачот на воланот - сето тоа јасно се прикажува на TFT екранот. Новиот Trident 660 има корист од најсовремената електроника, вклучително и програмите за возење на патот и дождот, кои ги прилагодуваат мапите за гас и контрола на тракцијата на мотоциклот за максимална контрола на возачот (со режимот Дожд кој се одликува со помека карта за подобрена безбедност), возење со гас -по жица за остар, прецизен одговор на вбризгувањето, прилагодлива контрола на тракцијата која управува со моќноста и вртежниот момент кога влечењето се губи и најновата генерација на ABS на Triumph за дополнителна безбедност на возачот. Целосното LED осветлување произведува подобри перформанси за максимална безбедност на возачот. Новиот препознатлив 7-инчен LED фар е уникатно дизајниран за Trident 660, додека компактното и интегрирано задно светло е усогласено со обликот на задната опашка. Суптилните само-поништувачки LED трепкачи додаваат на високото ниво на удобност на возачот на Trident 660 (може да важат ограничувања на локалниот пазар)."
                ],
                [
                  "title" => "Флексибилен, спортски со возачко искуство кое буди самодоверба",
                  "desc" => "Како Triumph мотоцикл, Trident нуди чувство на самодоверба за возење со лесно и неверојатно смирувачко управување, возбудливи перформанси и фантастична сигурност. Со малата тежина на рачките, имате стабилен мотоцикл кој е лесен и забавен за возење, додека суспензијата и сопирачките со високи спецификации се совршено комбинирани со лесните спортски алуминиумски тркала од 17 инчи за максимална маневрирање. Веднаш штом ќе се качите на овој мотоцикл, ќе ја забележите опуштената ергономија на возење, бидејќи сè за Trident 660 е дизајнирано да биде вашето совршено секојдневно искуство во возењето. Удобното и практично двојно седло има пристапна висина од 805 mm, додека тесната ширина на велосипедот инспирира самодоверба при стоење, со лесен пристап до стапките и прилагодлива рачка на сопирачките за дополнителна, подолготрајна удобност. Супериорната комбинација на суспензија, гуми и сопирачки на Trident 660 за удобно и сигурно возење вклучува => Систем за суспензија Showa со високи спецификации (црна превртена вилушка со 120мм патување на тркалата и прилагодлив заден амортизер однапред со 133,5мм патување на тркалата) Повеќедимензионални гуми Michelin „Road 5“ вградени стандардно, обезбедувајќи перформанси и доверба во влажни и суви услови. Голема моќ на запирање од системот за сопирање Nissin (предни пловечки клешти со 2 клипови со двојни дискови од 310 mm и единечен заден дебеломер и диск)"
                ],
                [
                  "title" => "Одлична Вредност",
                  "desc" => "Технолошкиот стандард на највисоко ниво на Trident 660, суспензијата со високи спецификации, сопирачките и гумите, агилното и сигурно возење, возбудливите перформанси на трицилиндричниот мотор, уникатниот стил и многу конкурентната цена го прават совршен избор на мотоцикли од средна класа. класа - и совршен влез во палетата Triumph. Врвниот сервисен интервал од 16.000 km (или 12 месеци) исто така придонесува за неверојатно ниската цена на сопственоста."
                ],
                [
                  "title" => "Препознатлив Стил",
                  "desc" => "Вклучувајќи ја дизајнерската ДНК на Triumph со чисти динамични линии, ова е навистина неверојатен мотоцикл со препознатлива спортска и мускулеста силуета и карактер. Trident 660 е достапен во четири различни комбинации на бои => кристално бела или црна сафир, двете со контрастни налепници или две опции за двојна боја Matt Jet Black & Matt Silver Ice или Silver Ice & Diablo Red. Велосипедот е дизајниран со карактеристики кои го истакнуваат препознатливиот изглед на Trident 660, вклучувајќи дизајн на резервоарот за гориво од 14 литри со извајани вдлабнатини на колената, црни тркала од лесно легура со пет краци и минималистичка опашка со држач за регистарски таблички и трепкач со ножици. Контрастно обоени капачиња за радијатори, мостови за виљушка и штитници за пети, заострените алуминиумски рачки и ретровизори со солзи, сето тоа придонесува за извонредното ниво на завршница на овој велосипед. Луксузната ознака Triumph додава одлични допири. Значка од алуминиумски влошки Trident 660 со натписи со дијамантски исечени натписи, ефектот на обработка со дијамант е надополнет со механичка значка Triumph на капачето за полнење гориво, значка Triumph на фарот и задното светло, брендирана клешта за рачката на Triumph и ознака Triumph на мотоциклот TFT дисплеј на инструменти лице (може да се применуваат пазарни ограничувања)."
                ],
                [
                  "title" => "Оригинални Аксесоари",
                  "desc" => "Можете да го персонализирате вашиот нов Trident 660 со избирање од цела палета на оригинални Triumph додатоци, развиени заедно со самиот велосипед и подложни на истиот ригорозен квалитет и процедури за тестирање. Со преку 45 достапни додатоци, вклучително и новите Trident 660, системот за поврзување My Triumph (за навигација, контрола на GoPro, телефон и музика) и додатоци кои нудат уште поголема удобност, заштита и стил, можете да го подобрите Trident 660 со неколку начини. Trident 660 може да биде опремен со опционален комплет за конверзија А2 кој ги ограничува перформансите на нивоа погодни за имателите на лиценца А2. Ова вклучува специјален држач за APS за A2 и специјална програма за моторот, ограничувајќи ја максималната моќност и максималниот вртежен момент. Овластена работилница на Triumph може да го врати мотоциклот со целосна моќност. Оригиналните додатоци на Triumph стандардно доаѓаат со двегодишна неограничена километарска гаранција."
                ]
              ]
            ],
            "accessory" => [
              "banner" => [
                "image" => "/images/roadsters/trident660/trident660AccessoriesBanner.avif"
              ],
              "infoText" => [
                "title" => "Додајте ваш белег врз Speed 400",
                "desc" => "На располагање ви е селекција од преку 20 оригинални Triupmh аксесоари за оваа серија на мотори. Аксесоарите кои ќе ги додадете може да бидат додадени на вашиот мотор во фабриката. Aксесоарите се дизајнирани од истиот тим кој го креираше Speed 400 и доаѓаат со две-годишна гаранција."
              ],
              "accessoryTypes" => [
                [
                  "title" => "Подобрен Изглед",
                  "desc" => "Можете да додадете удобност и стил со маската вбризгувана. Дизајниран да го намали заморот од ветер, тој е подготвен да додаде нови мазни линии на вашиот Trident. Со централната плоча што одговара на бојата на велосипедот, без видливи држачи и црна врежана надворешност, ќе даде беспрекорен изглед за дополнителна заштита од ветер. Надградете го вашиот заден вид со обработени крилни ретровизори. Нивниот лесен алуминиумски црн анодизиран финиш, со CNC контра-сечење, ќе ги подобри линиите на Trident. Додадете ја алуминиумската кара за да добиете подобрени панели за заштита од топлина за издувниот колектор, обезбедувајќи уште почисти линии и супериорна заштита од топлина. Прецизно изработени, овие делови го надополнуваат дизајнот на фаровите и минималистичките линии, подобрувајќи ја целокупната силуета додека го одржуваат чистиот изглед на Trident. Ласерското гравирање на логото го додава завршниот допир на горд изглед.",
                  "itemsList" => [
                    "Предна Маска - Исто боја како Моторциклот",
                    "Класични Ретровизори",
                    "Алуминиунмски Дотатоци на Моторот"
                  ],
                  "image1" => [
                    "src" => "/images/roadsters/trident660/trident660AccessoriesImg1.avif",
                    "alt" => "Trident 660"
                  ],
                  "image2" => [
                    "src" => "/images/roadsters/trident660/trident660AccessoriesImg2.avif",
                    "alt" => "Trident 660"
                  ]
                ],
                [
                  "title" => "Безбедност - за мирни и спокојни авантури",
                  "desc" => "Специјално дизајнирана за линиите на Trident, заштитата не мора да го загрозува стилот. Додадете ја потребната заштита за мир на умот при секое возење. Заштита на рамката, штитници на предната оска, комплет за капак на моторот и подлога на резервоарот. Целиот бренд Triumph, базиран на уникатниот стил на Trident, заштитата ќе ве исполни со самодоверба.",
                  "itemsList" => [
                    "Заштитник на шасија",
                    "Заштитник на предна осовина",
                    "Комплет заштита за мотор",
                    "Заштитна покривка на резервоар"
                  ],
                  "image1" => [
                    "src" => "/images/roadsters/trident660/trident660AccessoriesImg3.avif",
                    "alt" => "Trident 660 Safety"
                  ],
                  "image2" => [
                    "src" => "/images/roadsters/trident660/trident660AccessoriesImg4.avif",
                    "alt" => "Trident 660 Safety"
                  ]
                ],
                [
                  "title" => "Интегрирана Технологија - TFT Инструментна Плоча",
                  "desc" => "Модерното поврзување оди рака под рака со мотоциклите Triumph. Модулот за поврзување Triumph овозможува интегрирано работење со паметни телефони. Искористете ги придобивките од деталната навигација од вашиот телефон и известувањата канализирани преку паметниот дизајн на екранот TFT на вашиот инструмент. Безбедно комуницирајте со повиците и пуштете ја саканата музика со чистиот екран, контролиран од прекинувачот на воланот.Снимањето на авантурите стана полесно од кога било. Triumph се здружи со GoPro, лидерот во авантурата. Со Accessory Fit можете да го поврзете вашиот GoPro и лесно да го контролирате, задржувајќи го вашиот фокус на патот додека ги снимате авантурите за подоцна.Нема повеќе неред, целосна интеграција за функциите што ви се потребни, кога ви се потребни. Додајте го USB полначот за да бидете сигурни дека вашата технологија никогаш нема да остане без батерија кога ви е потребна. Приклучокот за полнење USB може дискретно да се инсталира под седлото за крајна удобност при полнење во движење.",
                  "itemsList" => [
                    "Уред за поврзување со инструментна плоча",
                    "USB влез за полнач"
                  ],
                  "image1" => [
                    "src" => "/images/roadsters/trident660/trident660AccessoriesImg5.avif",
                    "alt" => "Trident 660 Safety"
                  ]
                ],
                [
                  "title" => "Екстра Технологија ",
                  "desc" => "Со оглед на тоа што сите светла се LED, дополнително подобрете го вашето присуство на патот со тркалачките LED индикатори. Дизајниран да осветлува со насочено осветлување и докажан како поефективен за другите учесници во сообраќајот. 7-те високомоќни LED светла сместени во леано алуминиумско куќиште со сјајно црн финиш и обликуваното лого Triumph ќе го додадат тој дополнителен допир на стил и безбедност.Заборавете на заморот при возење со користење на спојката благодарение на помошта за промена на брзината. Оваа технологија за приклучување и игра овозможува префрлување без користење на куплунгот. Идеален за урбани средини или долги денови на возење, поедноставувајќи го патувањето. Добијте дополнително уверување со Triumph Track + одобрена од Тачам. Со откривање на манипулации на батеријата и антената и активирање на движење, ќе знаете дека вашиот Trident е безбеден користејќи A-GPS, GLONAS и 4G SIM за да ве информираме. Ако некој ви упадне во велосипедот, 24/7 мониторинг ќе бидете сигурни дека вие сте првиот што ќе го дознае тоа (ограничувањата важат по пазар). Вашата безбедност и безбедноста на вашиот мотоцикл се во првите редови на овие оригинални додатоци на Triumph. Се е до возење.",
                  "itemsList" => [
                    "Асистенција при менување степен на пренос",
                    "Rolling Трепкачи",
                    "Track +"
                  ],
                  "image1" => [
                    "src" => "/images/roadsters/trident660/trident660AccessoriesImg6.avif",
                    "alt" => "Trident 660 Safety"
                  ]
                ]
              ]
            ],
            "shortSpecInfo" => [
              "info1" => "660cc мотор (Euro 5 Стандарди)",
              "info2" => "2 мода на работа (Road Mode и Rain Mode)",
              "info3" => "10000 милји / 12 месеци сервисен интервал"
            ],
            "gallery" => [
              "modelImage" => [
                "src" => "/images/roadsters/trident660Model.png",
                "alt" => "Trident 660 Range Model Image"
              ],
              "subFamilyHeroVideo" => [
                "src" => "/images/roadsters/trident660/trident660HeroVideo.webm",
                "alt" => "Trident 660 Video"
              ],
              "subFamilyHeroImageMobile" => [
                "src" => "/images/roadsters/trident660/trident660HeroMobile.avif",
                "alt" => "Trident 660"
              ],
              "subFamilyTopSectionImage" => [
                "src" => "/images/roadsters/trident660/trident660TopSectionImage.avif",
                "alt" => "Trident 660"
              ],
              "subFamilyTopSectionBGImage" => [
                "src" => "/images/roadsters/trident660/trident660TopSectionImageBG.avif",
                "alt" => "Trident 660 BG"
              ]
            ]
        ];

        $subFamRoadstersFour = [
            "subFamilyName" => "speed-triple-1200-rs",
            "familyType" => "roadsters",
            "title" => "Speed Triple 1200 RS",
            "price" => 18990,
            "url" => "/motorcycles/roadsters/speed-triple-1200-rs",
            "specs" => [
                [
              "desc" => "К.ЕК Мотор",
              "data" => 1160
                ],
                [
                "desc" => "PS Коњски Сили",
                "data" => 180
                ],
                [
                "desc" => "NM. Обртен Момент",
                "data" => 125
                ],
                [
                "desc" => "Тежина",
                "data" => "198кг"
                ]
          ],
            "shortDesc" => "Најмоќниот, најдинамичниот и технолошки најнапредниот Speed Triple некогаш направен.",
            "youtubeVideo" => "https://www.youtube.com/embed/vuSogrXazi0",
            "heroSlogans" => ["Автентична", "Три-Цилиндарска", "Перфекција"],
            "subFamilyPageInfo" => [
              "topSection" => [
                "title" => "Сосема нов од секој агол",
                "desc" => "Ја воведува врвната револуција во силина, перформанси, управување и Speed Triple технологија.",
                "subtitle" => "Новиот репер за тоа како треба да се спојат сите коцки за да се добијат врвни перформанси на “naked-sports“ мотор."
              ],
              "audioSection" => [
                "audio" => "/images/roadsters/speedTriple1200RS/speedTriple 1200RS.mp3",
                "title" => "Најдобриот звук...",
                "desc" => "...на било кој Speed Triple мотор досега, мистичен, богат и возбудлив звук за возубудливо патување",
                "logo" => null
              ],
            ],

                "engineTransmission" => [
                  [
                    "title" => "Тип на Мотор",
                    "desc" => "водно ладење, 12 вентили, DOHC, линиски 3-цилиндри, 240° редослед на есклпозии"
                  ],
                  [
                    "title" => "капацитет",
                    "desc" => "660 cc"
                  ],
                  [
                    "title" => "диаметар",
                    "desc" => "74.04 mm"
                  ],
                  [
                    "title" => "рута",
                    "desc" => "51.1 mm"
                  ],
                  [
                    "title" => "компресија",
                    "desc" => "11.95:1"
                  ],
                  [
                    "title" => "Мах. Коњски Сила",
                    "desc" => "81 PS / 80 bhp (59.6 kW) @ 10,250 rpm"
                  ],
                  [
                    "title" => "Мах. Обртен Момент",
                    "desc" => "64 Nm @ 6,250 rpm"
                  ],
                  [
                    "title" => "Систем за убризгување",
                    "desc" => "Multipoint sequential electronic fuel injection with electronic throttle control"
                  ],
                  [
                    "title" => "Систем за Издувни гасови",
                    "desc" => "3 во 1 не-раѓосувачки челик"
                  ],
                  [
                    "title" => "Финална Трансмисија",
                    "desc" => "X-ring chain"
                  ],
                  [
                    "title" => "Квачило",
                    "desc" => "Wet, multi-plate, slip"
                  ],
                  [
                    "title" => "Менувачка Кутија",
                    "desc" => "6 брзини"
                  ]
                ],
                "frame" => [
                  [
                    "title" => "шасија",
                    "desc" => "тубуларна челична шасија"
                  ],
                  [
                    "title" => "вилушка",
                    "desc" => "алуминиум"
                  ],
                  [
                    "title" => "предно тркало",
                    "desc" => "19 x 2.5' die-cast легура "
                  ],
                  [
                    "title" => "задно тркало",
                    "desc" => "17 x 4.25' die-cast легура "
                  ],
                  [
                    "title" => "предна гума",
                    "desc" => "100/90-19"
                  ],
                  [
                    "title" => "задна гума",
                    "desc" => "150/70R17"
                  ],
                  [
                    "title" => "предна суспензија",
                    "desc" => "Marzocchi Inverted Fork 45mm"
                  ],
                  [
                    "title" => "задна суспензија",
                    "desc" => "Marzocchi задна суспензија со систем за подесување"
                  ],
                  [
                    "title" => "предни сопирачки",
                    "desc" => "Dual 320mm дискови, 4-piston monobloc Brembo Stylema calipers. Front radial pump, ABS"
                  ],
                  [
                    "title" => "задна сопирачка",
                    "desc" => "Еден 255 mm диск. Brembo single piston floating caliper, ABS"
                  ],
                  [
                    "title" => "инструментна плочка",
                    "desc" => "5 TFT екран"
                  ]
                ],
                "dimension" => [
                  [
                    "title" => "ширина на волан",
                    "desc" => "830 mm"
                  ],
                  [
                    "title" => "висина без ретровизори",
                    "desc" => "1410-1460 mm"
                  ],
                  [
                    "title" => "Висина на Седиште",
                    "desc" => "820-840 mm"
                  ],
                  [
                    "title" => "мегу-осовинско растојание ",
                    "desc" => "1556 mm"
                  ],
                  [
                    "title" => "Custer Corner",
                    "desc" => "24.6 º"
                  ],
                  [
                    "title" => "Trace",
                    "desc" => "133.3 mm"
                  ],
                  [
                    "title" => "Тежина",
                    "desc" => "192 kg"
                  ],
                  [
                    "title" => "капацитет на резервоар",
                    "desc" => "20 L"
                  ]
                ],
                "fuelConsumption" => [
                  [
                    "title" => "Потрошувачка",
                    "desc" => "5.2l /100km"
                  ],
                  [
                    "title" => "CO2 загадување",
                    "desc" => "Euro 5 Стандарди измерени според Регулатива 168/2013/EC. Резултатите се добиени во специјални тест средини и се на располагање само за споредба. Вистинските резултат може да варираат врз различни средини."
                  ]
                ],
              "grayCarousell" => [
                [
                  "id" => "carouselItem1",
                  "title" => "Револуција во перформансите",
                  "desc" => "Најмоќниот Speed Triple, со најмногу обртен момент и најбрза забрзување досега со сосема новиот три-цилиндарски мотор од 1160сс мотор.",
                  "image" => "/images/roadsters/speedTriple1200RS/speedTripleRSGrayCaro1.avif"
                ],
                [
                  "id" => "carouselItem2",
                  "title" => "Револуција во однесување на пат",
                  "desc" => "Нај-флексибилниот, прецизе, динамичен и нај-респонзивниот Speed Triple некогаш изработен.",
                  "image" => "/images/roadsters/speedTriple1200RS/speedTripleRSGrayCaro2.avif"
                ],
                [
                  "id" => "carouselItem3",
                  "title" => "Револуција во технологија",
                  "desc" => "Пагетен, остар и технолошки нај-напредниот Speed Triple некогаш изработен.",
                  "image" => "/images/roadsters/speedTriple1200RS/speedTripleRSGrayCaro3.avif"
                ],
                [
                  "id" => "carouselItem4",
                  "title" => "Револуција во стајлингот",
                  "desc" => "Поставена е нова дефиниција на вистинска Speed Triple агресивност, карактер и стил.",
                  "image" => "/images/roadsters/speedTriple1200RS/speedTripleRSGrayCaro4.avif"
                ]
              ],
              "youtubeVideosCarousellItems" => [
                [
                  "src" => "https://www.youtube.com/embed/vuSogrXazi0",
                  "title" => "Web - All-New Speed Triple 1200 RS"
                ],
                [
                  "src" => "https://www.youtube.com/embed/jWsjDF88QMo",
                  "title" => "Web - Track Riding | All-New Speed Triple 1200 RS"
                ],
                [
                  "src" => "https://www.youtube.com/embed/qeGu-JP7B40",
                  "title" => "Web - Road focused. Track ready | All-New Speed Triple 1200 RS"
                ],
                [
                  "src" => "https://www.youtube.com/embed/VczRFwgIYgo",
                  "title" => "All-New Speed Triple 1200 RS Features and Benefits"
                ],
                [
                  "src" => "https://www.youtube.com/embed/oQ2C2v-dQtU",
                  "title" => "Web - All-New Speed Triple 1200 RS  | Accessories"
                ]
              ],
              "specNumbers" => [
                [ "data" => "1160", "info" => "cc Мотор" ],
                [ "data" => "180", "info" => "Nm обртен момент" ],
                [ "data" => "125", "info" => "PS - Максимална Сила" ],
                [ "data" => "198", "info" => "Kg - Тежина при полн резервоар" ]
              ],
            "reasonsToDrive" => [
              "banner" => [
                "image" => "/images/roadsters/speedTriple1200RS/speedTripleReasonsHeroBanner.avif"
              ],
              "infoText" => [
                "title" => "Генерациска Трансформација",
                "desc" => "ВРЕМЕ Е ЗА БРЗИНА ТРОЈНА РЕВОЛУЦИЈА. ВО СЕКОЈ НАЧИН, SPEED TRIPLE 1200 RS Е ДИЗАЈНИРАН ДА ПОСТАВИ РЕПЕР ЗА КАКО СЕ СЕ СЕ ЗАЕДНУВА ЗА КРАЈН МОТОЦИКЛ ОД ГОЛИ ПЕРФОРМАНСИ - НА ПАТОТ И НА ПАТЕКАТА. ДОБРЕДОЈДОВТЕ ВО СУПЕРИОРНАТА БРЗИНА ТРОЈКА.."
              ],
              "reasons" => [
                [
                  "title" => "Фокусиран на патиштата, но спремен за тркање",
                  "desc" => "Трансформирајте го вашето искуство во возењето со врвни перформанси со тројна брзина. Специјално дизајниран од нула за да го испорача врвното искуство на возење на патиштата, а сепак да биде неверојатно способен на патеката. Speed ​​​​Triple е врвна комбинација на перформанси, управување, технологија фокусирана на возачот, опрема за спецификација на трка и агресивен нов стил.",
                  "image" => "/images/roadsters/speedTriple1200RS/speedТripleReasons1.avif"
                ],
                [
                  "title" => "Нај-моќниот Speed Triple Досега",
                  "desc" => "Завртете го гасот и почувствувајте дека целосно новиот Speed ​​​​Triple ве забрзува напред со трицилиндричен мотор со највисок капацитет од 1160cc. Со максимална моќност од 180 КС, 30 КС повеќе од претходната Speed ​​​​Triple и максимален вртежен момент од 125 Nm, ќе почувствувате како вашите сетила се палат. Поголеми вртежи, со уште подобар звук со три цилиндри, лесен за возење, возбудлив - најагилниот и најбрзо забрзувачки Speed ​​​​Triple некогаш направен. ",
                  "image" => "/images/roadsters/speedTriple1200RS/speedТripleReasons2.avif"
                ],
                [
                  "title" => "Нај-лесниот и Нај-агилниот Speed Tripel Досега",
                  "desc" => "Дизајниран да ве воодушевува на секој чекор, новиот Speed ​​​​Triple 1200 RS е најлесниот и најдобро ракувачкиот Speed ​​​​Triple таму. Тој е полесен за 10 килограми од претходната генерација со само 198 килограми подготвен за возење, со целосно нова лесна рамка, целосно нова ергономија на возачот и покомандувачка и фокусирана позиција на возење. Резултатот е велосипед кој е позатегнат, потониран, со подобра распределба на масата, за поагилно, прецизно и динамично возење. Опремата за врвна патека вклучува нови Brembo Stylema® сопирачки, гуми Pirelli Diablo Supercorsa V3 и Öhlins перформанс суспензија, сите дотерани за врвно спортско возење со голи коски. Новиот Speed ​​​​Triple не е ништо помалку од револуција во управувањето."
                ],
                [
                  "title" => "Перфектна Комбинација на технологија",
                  "desc" => "Напредната технологија за напојување „ride-by-wire“ го опремува Speed ​​​​Triple 1200 RS со 3 различни мапи за гас и 4 оптимизирани мапи за контрола на тракцијата за да ви го дадат одговорот што ви треба, без оглед на условите. 5-те приспособливи режими на возење (дожд, пат, спорт, патека и приспособлив од возачот) се менуваат преку посебно копче на рачката и го прилагодуваат карактерот на велосипедот со специфичен одговор на гас и поставки за контрола на тракцијата ABS. ABS, оптимизиран за агол, ABS и контрола на тракција оптимизирана за исклучување, обезбедуваат одлична прогресивност и контрола во сите услови со постојано следење на аголот на потпирање на велосипедот, додека подобрениот нов режим Track е дизајниран да ги направи електронските интервенции речиси невидливи при брзо возење, оставајќи ве да се фокусира на следниот свиок."
                ],
                [
                  "title" => "Модерна Технологија",
                  "desc" => "Опремен со технологија за целосно поврзано возење, новиот Speed ​​​​Triple 1200 RS има сосема нови 5 TFT инструменти за лесно читање информации на прв поглед. Поврзете го вашиот паметен телефон со стандардниот систем за поврзување My Triumph за навигација на Google, контрола на GoPro, музика и друго. Подобрениот нов Triumph Shift Assist систем за брзо менување брзини се одликува со подобрен сензор за брзо менување на брзините и непречено, прецизно спуштање без спојка. Целосно ново, целосно LED осветлување со впечатливи нови предни светла, препознатливи дневни светла и извајано задно светло го трансформираат стилот и способноста за осветлување на 1200 RS, со побела, посветла и неверојатно карактеристична нова комбинација.",
                  "image" => "/images/roadsters/speedTriple1200RS/speedТripleReasons3.avif"
                ]
              ]
            ],
            "accessory" => [
              "banner" => [
                "image" => "/images/roadsters/speedTriple1200RS/speedTripleRSAccessoriesHero.avif"
              ],
              "infoText" => [
                "title" => "Додајте ваш белег врз Speed 400",
                "desc" => "На располагање ви е селекција од преку 20 оригинални Triupmh аксесоари за оваа серија на мотори. Аксесоарите кои ќе ги додадете може да бидат додадени на вашиот мотор во фабриката. Aксесоарите се дизајнирани од истиот тим кој го креираше Speed 400 и доаѓаат со две-годишна гаранција."
              ],
              "accessoryTypes" => [
                [
                  "title" => "Сигурност и Самодоверба",
                  "desc" => "Дизајнирана специјално за агресивните линии Speed ​​​​Triple, заштитата не мора да го загрози стилот. Додадете ја заштитата што ви е потребна за да бидете сигурни при секое возење. Без разлика дали се работи за дополнителна заштита од паѓање или издржливи штитници за спречување гребнатини и абење, сè е дизајнирано специјално за Speed ​​​​Triple. Палетата вклучува комплети за заштита на рамката, штитници за вилушка и влошки за резервоарот. Сè со брендирањето Triumph, засновано на уникатниот стил на Speed ​​​​Triple, ќе ви даде единствена самодоверба.",
                  "itemsList" => [
                    "Заштита на шасија",
                    "Заштита на вилушки",
                    "Заштита од гребаници за резервоар"
                  ],
                  "image1" => [
                    "src" => "/images/roadsters/speedTriple1200RS/streetTriple1200RSAccessory1.avif",
                    "alt" => "Speed Triple 1200"
                  ],
                  "image2" => [
                    "src" => "/images/roadsters/speedTriple1200RS/streetTriple1200RSAccessory2.avif",
                    "alt" => "Speed Triple 1200"
                  ]
                ],
                [
                  "title" => "Подобрен Изглед",
                  "desc" => "Можете да додадете удобност и стил со специјално конструираната маска со инјектирање. Дизајниран да го намали заморот од ветерот, тој е подготвен да додаде мазни линии во Speed ​​​​Triple. Во бојата на велосипедот со налепница RS и без видливи држачи, ќе понуди беспрекорен изглед и дополнителна заштита од ветер. За уште поголема заштита од ветер, има и затемнет гел за маска. Надградете го вашиот заден вид со спортските фалсификувани крилни ретровизори. Лесниот црн алуминиумски анодизиран финиш, со CNC контра-резен профил, ќе ги подобри линиите на Speed ​​​​Triple. Променете ги резервоарите за течноста за сопирачките во CNC алуминиум, со отвори за затемнети стакла и ласерски гравирани детали за дополнително да го подобрите вашиот стил. Прецизно дизајнирани, овие компоненти го надополнуваат агресивниот дизајн кој плени, подобрувајќи го целокупниот изглед, одржувајќи ја чистата линија на Speed ​​​​Triple. Ласерско врежано брендирање го додава завршниот допир на горд изглед. Додатоци за прикажување, автентични и спремни за употреба.",
                  "itemsList" => [
                    "Предна Маска во боја на моторот",
                    "Затемнет Ветробран",
                    "Алуминиумски Ретровизори",
                    "Преден и заден резервоар за течност за сопирачки"
                  ],
                  "image1" => [
                    "src" => "/images/roadsters/speedTriple1200RS/streetTriple1200RSAccessory3.avif",
                    "alt" => "Speed Triple 1200 "
                  ]
                ],
                [
                  "title" => "Екстра Додатоци",
                  "desc" => "Подобрете го вашето присуство на патот со тркалачки LED индикатори. 7-те LED диоди со висока моќност сместени во леано алуминиумско тело со сјајна црна завршница и обликуваното лого Triumph ќе го додадат тој дополнителен допир на стил и безбедност.Додадете ги тие дополнителни доработки со облогата на алуминиумската оска означена со Triumph, со црни контрастни елоксирани детали и детали за Triumph оцртани со ласер. Бидете дел од револуцијата со уште повеќе стил, заштита, удобност и безбедност за да ги одразуваат вашите сопствени потреби за возење. Сите додатоци се достапни за монтирање кај вашиот локален продавач на Triumph.",
                  "image1" => [
                    "src" => "/images/roadsters/speedTriple1200RS/streetTriple1200RSAccessory4.avif",
                    "alt" => "Speed Triple 1200 "
                  ]
                ]
              ]
            ],
            "shortSpecInfo" => [
              "info1" => "Нов 1160cc со 180PS",
              "info2" => "198kg тежина и спремен за на патека",
              "info3" => "Најмодерна технологија фокусирана на возачот"
            ],
            "gallery" => [
              "modelImage" => [
                "src" => "/images/roadsters/speedTriple1200RsModel.png",
                "alt" => "Speed Triple 1200 RS Range Model Image"
              ],
              "subFamilyHeroVideo" => [
                "src" => "/images/roadsters/speedTriple1200RS/speedTripleRSHeroVideo.webm",
                "alt" => "Speed Triple 1200RS Video"
              ],
              "subFamilyHeroImageMobile" => [
                "src" => "/images/roadsters/speedTriple1200RS/speedTripleRSHeroMobile.avif",
                "alt" => "Speed Triple 1200RS"
              ],
              "subFamilyTopSectionImage" => [
                "src" => "/images/roadsters/speedTriple1200RS/speedTripleRSTopSectionImage.avif",
                "alt" => "Speed Triple 1200RS Motorcycle"
              ],
              "subFamilyTopSectionBGImage" => [
                "src" => "/images/roadsters/speedTriple1200RS/speedTripleRSTopSectionImageBG.avif",
                "alt" => "Speed Triple 1200RS Motorcycle BG"
              ]
            ]
        ];


        $subFamRoadstersFive = [
            "subFamilyName" => "speed-triple-1200-rr",
            "familyType" => "roadsters",
            "title" => "Speed Triple 1200 RR",
            "price" => 20990,
            "url" => "/motorcycles/roadsters/speed-triple-1200-rr",
            "youtubeVideo" => "https://www.youtube.com/embed/DmPPgMjUD1o",
            "specs" => [
              [
              "desc" => "К.ЕК Мотор",
              "data" => 1160
              ],
              [
                "desc" => "PS Коњски Сили",
                "data" => 180
              ],
              [
                "desc" => "NM. Обртен Момент",
                "data" => 125
              ],
              [
                "desc" => "Сервисен Интервал",
                "data" => "15,000"
              ]
            ],
            "shortDesc" => "Колку повозбудливо изгледа толку повозбудлив е за возење. Најновиот Speed Triple 1200 RR со досега најдобрата спецификација.",
            "heroSlogans" => ["Автентична", "Три-Цилиндарска", "Перфекција"],
            "subFamilyPageInfo" => [
              "topSection" => [
                "title" => "Чиста елеганција, перформанси и карактер",
                "desc" => "Нај-фокусираниот Speed Triple досега. Преубав дизајн, одлично чувство на поврзаност помеѓу возачот и моторот.",
                "subtitle" => "Нов репер за убавина, софистицирано инжињерство и фокусиран карактер и врвот на Speed Triple перформанси и управување."
              ],
              "audioSection" => [
                "audio" => "/images/roadsters/speedTriple1200RR/speedTriple 1200RR.mp3",
                "title" => "Пуштете глас и уживајте.",
                "desc" => null,
                "logo" => null
              ],
            ],
                "engineTransmission" => [
                  [
                    "title" => "Тип на Мотор",
                    "desc" => "водно ладење, 12 вентили, DOHC, линиски 3-цилиндри, 240° редослед на есклпозии"
                  ],
                  [
                    "title" => "капацитет",
                    "desc" => "660 cc"
                  ],
                  [
                    "title" => "диаметар",
                    "desc" => "74.04 mm"
                  ],
                  [
                    "title" => "рута",
                    "desc" => "51.1 mm"
                  ],
                  [
                    "title" => "компресија",
                    "desc" => "11.95:1"
                  ],
                  [
                    "title" => "Мах. Коњски Сила",
                    "desc" => "81 PS / 80 bhp (59.6 kW) @ 10,250 rpm"
                  ],
                  [
                    "title" => "Мах. Обртен Момент",
                    "desc" => "64 Nm @ 6,250 rpm"
                  ],
                  [
                    "title" => "Систем за убризгување",
                    "desc" => "Multipoint sequential electronic fuel injection with electronic throttle control"
                  ],
                  [
                    "title" => "Систем за Издувни гасови",
                    "desc" => "3 во 1 не-раѓосувачки челик"
                  ],
                  [
                    "title" => "Финална Трансмисија",
                    "desc" => "X-ring chain"
                  ],
                  [
                    "title" => "Квачило",
                    "desc" => "Wet, multi-plate, slip"
                  ],
                  [
                    "title" => "Менувачка Кутија",
                    "desc" => "6 брзини"
                  ]
                ],
                "frame" => [
                  [
                    "title" => "шасија",
                    "desc" => "тубуларна челична шасија"
                  ],
                  [
                    "title" => "вилушка",
                    "desc" => "алуминиум"
                  ],
                  [
                    "title" => "предно тркало",
                    "desc" => "19 x 2.5' die-cast легура "
                  ],
                  [
                    "title" => "задно тркало",
                    "desc" => "17 x 4.25' die-cast легура "
                  ],
                  [
                    "title" => "предна гума",
                    "desc" => "100/90-19"
                  ],
                  [
                    "title" => "задна гума",
                    "desc" => "150/70R17"
                  ],
                  [
                    "title" => "предна суспензија",
                    "desc" => "Marzocchi Inverted Fork 45mm"
                  ],
                  [
                    "title" => "задна суспензија",
                    "desc" => "Marzocchi задна суспензија со систем за подесување"
                  ],
                  [
                    "title" => "предни сопирачки",
                    "desc" => "Dual 320mm дискови, 4-piston monobloc Brembo Stylema calipers. Front radial pump, ABS"
                  ],
                  [
                    "title" => "задна сопирачка",
                    "desc" => "Еден 255 mm диск. Brembo single piston floating caliper, ABS"
                  ],
                  [
                    "title" => "инструментна плочка",
                    "desc" => "5 TFT екран"
                  ]
                ],
                "dimension" => [
                  [
                    "title" => "ширина на волан",
                    "desc" => "830 mm"
                  ],
                  [
                    "title" => "висина без ретровизори",
                    "desc" => "1410-1460 mm"
                  ],
                  [
                    "title" => "Висина на Седиште",
                    "desc" => "820-840 mm"
                  ],
                  [
                    "title" => "мегу-осовинско растојание ",
                    "desc" => "1556 mm"
                  ],
                  [
                    "title" => "Custer Corner",
                    "desc" => "24.6 º"
                  ],
                  [
                    "title" => "Trace",
                    "desc" => "133.3 mm"
                  ],
                  [
                    "title" => "Тежина",
                    "desc" => "192 kg"
                  ],
                  [
                    "title" => "капацитет на резервоар",
                    "desc" => "20 L"
                  ]
                ],
                "fuelConsumption" => [
                  [
                    "title" => "Потрошувачка",
                    "desc" => "5.2l /100km"
                  ],
                  [
                    "title" => "CO2 загадување",
                    "desc" => "Euro 5 Стандарди измерени според Регулатива 168/2013/EC. Резултатите се добиени во специјални тест средини и се на располагање само за споредба. Вистинските резултат може да варираат врз различни средини."
                  ]
                ],
              "grayCarousell" => [
                [
                  "id" => "carouselItem1",
                  "title" => "Револуционирање на однесувањето на патиштата",
                  "desc" => "Новиот Street Tirple направи голем чекор напред кога е во прашање управувањето со тоа што на возачот му понудива по-директна позиција за возење.",
                  "image" => "/images/roadsters/speedTriple1200RR/speedTriple1200RRGrayCaro1.avif"
                ],
                [
                  "id" => "carouselItem2",
                  "title" => "Нови луксузни спецификации",
                  "desc" => "Новите Öhlins Smart EC 2.0. електорнско подесувачки полу-активни елементи на суспензијата понудуваат високо ниво на перформанси, комфорт и контрола врз моторот.",
                  "image" => "/images/roadsters/speedTriple1200RR/speedTriple1200RRGrayCaro2.avif"
                ],
                [
                  "id" => "carouselItem3",
                  "title" => "Нови пневматици специјализирани за на патека",
                  "desc" => "Опремен со Pirelli Diablo Supercorsa V3 пневматици, Streeт Triple буквално се лепи на подлогата.",
                  "image" => "/images/roadsters/speedTriple1200RR/speedTriple1200RRGrayCaro3.avif"
                ],
                [
                  "id" => "carouselItem4",
                  "title" => "Високо Перформантни Сопирачки",
                  "desc" => "Brembo Stylema® dual radial monobloс клештите во пар со 320mm дискови доставуваат неверојатна презиност и перформанси кога е во прашање сопирањето.",
                  "image" => "/images/roadsters/speedTriple1200RR/speedTriple1200RRGrayCaro4.avif"
                ],
                [
                  "id" => "carouselItem5",
                  "title" => "Три-Цилиндарска Револуција",
                  "desc" => "Експлозивни перформанси и перфектна респонзивност се на располагање, изработени од моторот од 1160сс - 180РЅ и 125Nm обртен момент.",
                  "image" => "/images/roadsters/speedTriple1200RR/speedTriple1200RRGrayCaro5.avif"
                ]
              ],
              "youtubeVideosCarousellItems" => [
                [
                  "src" => "https://www.youtube.com/embed/DSO4IahvOXk",
                  "title" => "New Triumph Speed Triple 1200 RR – Global Revea"
                ],
                [
                  "src" => "https://www.youtube.com/embed/DmPPgMjUD1o",
                  "title" => "New Speed Triple 1200 RR - Web"
                ],
                [
                  "src" => "https://www.youtube.com/embed/0oHPkxbwt70",
                  "title" => "Track Riding | New Speed Triple 1200 R"
                ],
                [
                  "src" => "https://www.youtube.com/embed/d8tbBPBEtdw",
                  "title" => "New Speed Triple 1200 RR  | Accessories"
                ],
                [
                  "src" => "https://www.youtube.com/embed/Wkl9OAfK5XQ",
                  "title" => "New Speed Triple 1200 RR Features and Benefit"
                ]
              ],
              "specNumbers" => [
                [ "data" => "1160", "info" => "cc Мотор" ],
                [ "data" => "180", "info" => "Nm обртен момент" ],
                [ "data" => "125", "info" => "PS - Максимална Сила" ],
                [ "data" => "15.000", "info" => "КМ Сервисен Интервал" ]
              ],
            "reasonsToDrive" => [
              "banner" => [
                "image" => "/images/roadsters/speedTriple1200RR/speedTriple1200RRReasonsBanner.avif"
              ],
              "infoText" => [
                "title" => "Speed Triple 1200RR",
                "desc" => "Во 2021 година, 1200 RS направи апсолутна револуција во тежината, моќта, управувањето, технологијата и Speed ​​​​Triple стилот. Сега за 2022 година, барот е подигнат уште повеќе со новиот врвен опсег 1200 RR, дизајниран да испорача неверојатна и рафинирана нова изјава во стил на Speed ​​​​Triple, во комбинација со најфокусираното, возбудливо и динамично возење досега. Посветен, со највисоки спецификации, RR се одликува со нов прекрасно обликуван кокпит со рачки со прицврстување и уште пофокусирана ергономија на возачот. Преполн со најсовремена технологија и суспензија со врвни спецификации, сопирачки и гуми, RR е удобен на патеката како и на патот."
              ],
              "reasons" => [
                [
                  "title" => "Перформанси",
                  "desc" => "Speed ​​​​Triple 1200 RS го зафати светот во јануари 2021 година со својот пргав и моќен трицилиндричен мотор од 180 КС и 1160 кубици. ниска инерција. Сега, истата компактна и лесна единица го напојува Speed ​​​​Triple 1200 RR давајќи уште повозбудливо искуство со Speed ​​Triple возење, благодарение на пофокусираната ергономија и надградбите на спецификациите. Избришената опашка од нерѓосувачки челик со црн конус гарантира дека звукот за овој нов британски еп е совршен.",
                  "image" => "/images/roadsters/speedTriple1200RR/speedТriple1200RRReasonsImage1.avif"
                ],
                [
                  "title" => "Автентична Ергономија и Управување",
                  "desc" => "Дизајниран со исклучително внимание на деталите, RR е најфокусираната Speed ​​​​Triple некогаш направена, со рачки со прицврстување и прекрасно ново обложување, што му дава чисто рафинирана спортска агресивна позиција на возење.Опремен со најновата електронски прилагодлива полуактивна вилушка Öhlins Smart EC 2.0 и заден амортизер, Speed ​​​​Triple 1200 RR се одликува со најнапредната сериска Öhlins суспензија на располагање. Сопирачките Brembo развиени на трка вклучуваат целосно прилагодлива рачка, радијално монтирани Stylema® клешти и лесни дискови од 320 mm. Новите гуми Pirelli Diablo Supercorsa SP V3 со високи перформанси, лесната лиена алуминиумска рамка и оптимизираниот центар на гравитација нудат нов репер за прецизно ракување и агилност.",
                  "image" => "/images/roadsters/speedTriple1200RR/speedТriple1200RRReasonsImage2.avif"
                ],
                [
                  "title" => "Технологија која е фокусирана на унапредување на перформансите",
                  "desc" => "Континуираната еволуција ја трансформираше технологијата што му помага на возачот и Speed ​​​​Triple 1200 RR е совршен пример. Оптимизираниот ABS во свијоци и оптимизираниот систем за контрола на тракцијата при свиоци нудат најсовремен безбедносен систем за возење во сите услови. И оваа помош никогаш не е наметлива или рестриктивна, тенката линија помеѓу перформансите и безбедноста е секогаш совршено избалансирана. Triumph Shift Assist за нагорни менувања работи совршено при секоја брзина и оптоварување на моторот, оптимизирајќи ги промените на брзините, одржувајќи ја позицијата на гасот, помагајќи да се зголеми фокусот на патеката или на патот. Последната генерација на контрола за подигнување на предните тркала користи напредни алгоритми за да овозможи ненаметливо непречено возење со конзистентен, позитивен гас"
                ],
                [
                  "title" => "Помалку напор, повеќе забава",
                  "desc" => "Покрај напредните електронски помагала за возење што ги подобруваат перформансите и безбедноста, Speed ​​​​Triple 1200 RR има голем број внимателни допири кои го подобруваат возењето. 5-инчниот TFT дисплеј има силен фокус на брзината, односот на менувачот и тахометарот, кој може да се конфигурира за да одговара на преференциите на возачот - информациите што ви се потребни за да возите на пат често се разликуваат од информациите што ги сакате на полето за екранот. патеката. Системот за поврзување My Triumph доаѓа стандардно, со вградена Bluetooth единица за лесни телефонски повици и репродукција на музика на системот на вашата кацига, заедно со детална навигација и GoPro контрола. Достапно преку лесни за користење прекинувачи на воланот со системи со мени кои се интуитивни и прифатливи за корисниците, сите информации за возењето што ви се потребни никогаш не се далеку.",
                  "image" => "/images/roadsters/speedTriple1200RR/speedТriple1200RRReasonsImage3.avif"
                ],
                [
                  "title" => "5 мода на работа",
                  "desc" => "Петте режими на возење (дожд, пат, спорт, патека и приспособлив за возач) може лесно да се изберат во лет, преку посебно копче на левата страна на рачката. Овие различни програми се развиени преку интензивно тестирање за да се даде совршен одзив на гас, контрола на тракцијата и поставки за ABS за да одговараат на широк опсег на временски услови и услови на патот. Се разбира, сите ние имаме свои преференции како возачи, така што опцијата Приспособлива програма овозможува секој параметар да биде дотерување за да одговара на вашиот стил. ."
                ],
                [
                  "title" => "Карактер",
                  "desc" => "Новиот RR го зема целокупниот мускулест став и Speed ​​​​Triple стил на новата генерација RS и ги носи на сосема ново ниво со мноштво одлични карактеристики и допири. Агресивната, слаба и мускулеста градба на Speed ​​​​Triple е дополнително засилена со неверојатната нова обвивка со едно предно светло што ја повторува дизајнерската ДНК на Triumph. Додадете на ова исклучително внимание на деталите на RR, луксузната висококвалитетна завршница од јаглеродни влакна и впечатливите комбинации на бои на Црвениот бункер и кристално белата боја и ќе го имате врвот на Speed ​​​​Triple карактер и стил."
                ]
              ]
            ],
            "accessory" => [
              "banner" => [
                "image" => "/images/roadsters/speedTriple1200RR/speedTriple1200RRAccessoriesHero.avif"
              ],
              "infoText" => [
                "title" => "Додајте ваш белег врз Speed 400",
                "desc" => "На располагање ви е селекција од преку 20 оригинални Triupmh аксесоари за оваа серија на мотори. Аксесоарите кои ќе ги додадете може да бидат додадени на вашиот мотор во фабриката. Aксесоарите се дизајнирани од истиот тим кој го креираше Speed 400 и доаѓаат со две-годишна гаранција."
              ],
              "accessoryTypes" => [
                [
                  "title" => "Технологија",
                  "desc" => "Speed ​​​​Triple 1200 RR е еден од најнапредните велосипеди на пазарот - но има простор да се додаде уште повеќе технологија, прилагодена за вашиот Triump",
                  "itemsList" => [
                    "Мониторинг на пневматици (Притиок во пневматици)",
                    "Греачи на волан",
                    "LED Трепкачи со анимација",
                    "Triumph Protect - Аларм, Triumph Locator - Локатор"
                  ],
                  "image1" => [
                    "src" => "/images/roadsters/speedTriple1200RR/speedTriple1200RRAccesory1.avif",
                    "alt" => "Speed Triple 1200RR On The Road"
                  ],
                  "image2" => [
                    "src" => "/images/roadsters/speedTriple1200RR/speedTriple1200RRAccesory2.avif",
                    "alt" => "Speed Triple 1200RR PaintJob"
                  ]
                ],
                [
                  "title" => "Додатоци",
                  "desc" => "Додека фокусираната, посветена позиција на возење инспирира духовно возење - а можеби и зависност од патеката - Speed ​​​​Triple 1200 RR е исто така удобен на растојанија, со одлична заштита од ветер од облогата и фокусирана, но ергономска позиција на возење. Опсегот на водоотпорен багаж со држачи за брзо ослободување вклучува посебна торба за резервоар и пакет за опашка за дополнителна практичност. Заштитниците на рамката и вилушката, заедно со гумената подлога за резервоарот, ќе го одржат вашиот велосипед чист, помагајќи да се спречи оштетување",
                  "image1" => [
                    "src" => "/images/roadsters/speedTriple1200RR/speedTriple1200RRAccesory3.avif",
                    "alt" => "Speed Triple 1200RR Luggage"
                  ],
                  "image2" => [
                    "src" => "/images/roadsters/speedTriple1200RR/speedTriple1200RRAccesory4.avif",
                    "alt" => "Speed Triple 1200RR Luggage"
                  ]
                ]
              ]
            ],
            "shortSpecInfo" => [
              "info1" => "Нов 1160cc со 180PS",
              "info2" => "198kg тежина и спремен за на патека",
              "info3" => "Најмодерна технологија фокусирана на возачот"
            ],
            "gallery" => [
              "modelImage" => [
                "src" => "/images/roadsters/speedTriple1200RrModel.png",
                "alt" => "Speed Triple 1200 RR Range Model Image"
              ],
              "subFamilyHeroVideo" => [
                "src" => "/images/roadsters/speedTriple1200RR/speedTripleRRHeroVideo.webm",
                "alt" => "Speed Triple 1200RR Video"
              ],
              "subFamilyHeroImageMobile" => [
                "src" => "/images/roadsters/speedTriple1200RR/speedTriple1200RRHeroImage.avif",
                "alt" => "Speed Triple 1200RR"
              ],
              "subFamilyTopSectionImage" => [
                "src" => "/images/roadsters/speedTriple1200RR/speedTriple1200RRTopSectionImage.avif",
                "alt" => "Speed Triple 1200RR Motorcycle"
              ],
              "subFamilyTopSectionBGImage" => [
                "src" => "/images/roadsters/speedTriple1200RR/speedTriple1200RRTopSectionImageBG.avif",
                "alt" => "Speed Triple 1200RR Motorcycle BG"
              ]
            ]
        ];

        $subFamRocket3 = [
            "subFamilyName" => "rocket-3",
            "familyType" => "rocket-3",
            "title" => "Rocket 3",
            "price" => 25290,
            "url" => "/motorcycles/rocket-3/rocket-3",
            "specs" => [
                [
              "desc" => "К.ЕК Мотор",
              "data" => 2500
                ],
                [
                "desc" => "PS Коњски Сили",
                "data" => 167
                ],
                [
                "desc" => "NM. Обртен Момент",
                "data" => 221
                ],
                [
                "desc" => "Полесен од претходната серија",
                "data" => "40кг"
                ]
            ],
            "shortDesc" => "Со мускулестиот изглед, прекрасениот стил и највисокото ниво на спецификации и технологија, Rocket-3 серијата изгледа енормно на патот но сепак е лесно управлива.",
            "heroSlogans" => ["Лидерски", "Перформанси", "на светско ниво"],
            "youtubeVideo" => "https://www.youtube.com/embed/7pRH-6UTgu8",
            "subFamilyPageInfo" => [
              "topSection" => [
                "title" => "Rocket-3",
                "desc" => "Опремен со најголемиот мотор некогаш ставен во продукциски мотор, Rockеt 3 серијата со нејзиниот 2500сс мотор, продуцира највисок обртен момент и невидено забрзување во светот и тоа со смиреност и превидливост при апликација на гас. Rocket-3 серијата си седи во посебна класа сам за себе.",
                "subtitle" => "Го искусуваме раѓањето на нова ултимативна генерациска Triumph легенда."
              ],
              "audioSection" => [
                "audio" => "/images/roadsters/streetTriple765/streetTriple765Sound.mp3",
                "title" => "Три-цилиндречен звук кој го тресе земјиното тло.",
                "desc" => "Новиот издувен систем го испорачува оној препознатлив три-цилиндарски звук на моторот.",
                "logo" => null
              ],
            ],
            "engineTransmission" => [
                  [
                    "title" => "Тип на Мотор",
                    "desc" => "водно ладење, DOHC, линиски 3-цилиндри"
                  ],
                  [
                    "title" => "капацитет",
                    "desc" => "2458 cc"
                  ],
                  [
                    "title" => "диаметар",
                    "desc" => "110.2 mm"
                  ],
                  [
                    "title" => "рута",
                    "desc" => "85.9 mm"
                  ],
                  [
                    "title" => "компресија",
                    "desc" => "10.8:1"
                  ],
                  [
                    "title" => "Мах. Коњски Сила",
                    "desc" => "167PS /165 bhp (123 kW) @ 6,000rpm"
                  ],
                  [
                    "title" => "Мах. Обртен Момент",
                    "desc" => "221Nm @ 4,000rpm"
                  ],
                  [
                    "title" => "Систем за убризгување",
                    "desc" => "Ride-by-Wire, fuel injected"
                  ],
                  [
                    "title" => "Систем за Издувни гасови",
                    "desc" => "3 во 1 не-раѓосувачки челик / CAT Box"
                  ],
                  [
                    "title" => "Финална Трансмисија",
                    "desc" => "Shaft, bevel box"
                  ],
                  [
                    "title" => "Квачило",
                    "desc" => "Wet, multi-plate hydraulically operated, torque assist"
                  ],
                  [
                    "title" => "Менувачка Кутија",
                    "desc" => "6 брзини"
                  ]
                ],
            "frame" => [
                  [
                    "title" => "шасија",
                    "desc" => "целосно алуминиумска шасија"
                  ],
                  [
                    "title" => "вилушка",
                    "desc" => "алуминиум"
                  ],
                  [
                    "title" => "предно тркало",
                    "desc" => "17 x 3.5in cast aluminium "
                  ],
                  [
                    "title" => "задно тркало",
                    "desc" => "16 x 7.5in cast aluminium"
                  ],
                  [
                    "title" => "предна гума",
                    "desc" => "150/80 R17 V"
                  ],
                  [
                    "title" => "задна гума",
                    "desc" => "240/50 R16 V"
                  ],
                  [
                    "title" => "предна суспензија",
                    "desc" => "Showa 47mm upside-down 1 1 cartridge front forks, compression and rebound adjuster. 120mm travel"
                  ],
                  [
                    "title" => "задна суспензија",
                    "desc" => "Fully adjustable Showa piggyback reservoir RSU with remote hydraulic preload adjuster, 107mm rear wheel travel"
                  ],
                  [
                    "title" => "предни сопирачки",
                    "desc" => "Dual 320mm discs, Brembo M4.30 Stylema® 4-piston radial monobloc calipers, Cornering ABS"
                  ],
                  [
                    "title" => "задна сопирачка",
                    "desc" => "Single 300mm disc, Brembo M4.32 4-piston monobloc caliper, Cornering ABS"
                  ],
                  [
                    "title" => "инструментна плочка",
                    "desc" => "TFT мулти функционален екран со дигитален брзинометар, trip компјутер, дигитален тахометар, индикатор за брзина, индикатор за гориво, сервисен индикатор, амбиентална температура и бозалки модови (Дожд/Пат/Спорт/Custom) - Triumph TFT Connectivity Системот може да биде додаден со Bluetooth модул"
                  ]
                ],
            "dimension" => [
                  [
                    "title" => "ширина на волан",
                    "desc" => "889 mm"
                  ],
                  [
                    "title" => "висина без ретровизори",
                    "desc" => "1065 mm"
                  ],
                  [
                    "title" => "Висина на Седиште",
                    "desc" => "773 mm"
                  ],
                  [
                    "title" => "мегу-осовинско растојание ",
                    "desc" => "1677 mm"
                  ],
                  [
                    "title" => "Custer Corner",
                    "desc" => "27.9º"
                  ],
                  [
                    "title" => "Trace",
                    "desc" => "134.9 mm"
                  ],
                  [
                    "title" => "Тежина",
                    "desc" => "291 kg"
                  ],
                  [
                    "title" => "капацитет на резервоар",
                    "desc" => "18 L"
                  ]
                ],
            "fuelConsumption" => [
                  [
                    "title" => "Потрошувачка",
                    "desc" => "7.0 l/100km"
                  ],
                  [
                    "title" => "CO2 загадување",
                    "desc" => "EURO 5 Standard => 158g/km"
                  ]
                ],
              "grayCarousell" => [
                [
                  "id" => "carouselItem1",
                  "title" => "Најновиот и Првенец во класата на “Streetfighter“ Моторцикли",
                  "desc" => "Сега, уште повеќе сила благодарејки на Мото2 моторот со неверојатна агилност, агресивен изглед и електронска технологија која поставува нови стандарди.",
                  "image" => "/images/roadsters/streetTriple765/streetTriple765GrayCaro1.avif"
                ],
                [
                  "id" => "carouselItem2",
                  "title" => "Новиот Репер Во класата на “naked“ моторцикли",
                  "desc" => "ТНови технолошки унапредувања, агилност, највисока запирачка спецификација и новиот репер во смисла на моќност во класата.",
                  "image" => "/images/roadsters/streetTriple765/streetTriple765GrayCaro2.avif"
                ],
                [
                  "id" => "carouselItem3",
                  "title" => "Нај-моќната серија досега",
                  "desc" => "Со голем чекор напред во развивање на Мото2 моторот, Street Triple серијата се закити со уште повеќе обртен момент и сила - 120 РЅ за R верзијата и 130 РЅ за RS Verzijata.",
                  "image" => "/images/roadsters/streetTriple765/streetTriple765GrayCaro3.avif"
                ]
              ],
              "youtubeVideosCarousellItems" => [
                [
                  "src" => "https://www.youtube.com/embed/cDNnqoRB50w",
                  "title" => "Triumph Street Triple Launch Valencia 2022"
                ],
                [
                  "src" => "https://www.youtube.com/embed/A6MwjE782iI",
                  "title" => "Web | Street Triple R Hero"
                ],
                [
                  "src" => "https://www.youtube.com/embed/Qj9dxotylh0",
                  "title" => "Web | Street Triple RS Hero"
                ],
                [
                  "src" => "https://www.youtube.com/embed/--p8YSQxEp0",
                  "title" => "Web | Engine In Motion Street Triple 765"
                ],
                [
                  "src" => "https://www.youtube.com/embed/JR-wXQFKG2Q",
                  "title" => "Web - DE | Street Triple R | Features and Benefits"
                ],
                [
                  "src" => "https://www.youtube.com/embed/cDNnqoRB50w",
                  "title" => "Triumph Street Triple Launch Valencia 2022"
                ],
                [
                  "src" => "https://www.youtube.com/embed/kP7FA3k6Hv8",
                  "title" => "New Street Triple 765 RS | Features and Benefits"
                ]
              ],

            "specNumbers" => [
                [ "data" => "2500", "info" => "cc Мотор" ],
                [ "data" => "221", "info" => "Nm обртен момент" ],
                [ "data" => "167", "info" => "PS - Максимална Сила" ],
                [ "data" => "40", "info" => "Kg ПОЛЕСЕН" ]
            ],
            "reasonsToDrive" => [
              "banner" => [
                "image" => "/images/rocket-3/heroBanner.avif"
              ],
              "infoText" => [
                "title" => "зошто баш Rocket-3 !?",
                "desc" => "Rocket-3 серијата еволуираше и на свет го донесе првиот продукциски мотор со најголема зафатнина на моторот од 2500сс. Истион испорачува не-спорелив обртен момент притоа има мускулест изглед, комбиниран со високо технолошко ниво и препознатливo Triumph чувство кога го возите. Rocket 3 R е врвниот високо перформантен роадстер а Rocket 3 GT уште повеќе го зголемува комфортот и го намалува заморот при возење што обезбедува уште подолга авантура. Еве зошто треба веднаш да ги тестирате ...!"
              ],
              "reasons" => [
                [
                  "title" => "2,500cc - Првиот продукциски моторцикл со толкава зафатнина на моторот",
                  "desc" => "Претходната генерација на Rocket-3 веќе го држеше овој рекорд во своја сопственост со 2,300сс зафатнина на моторот, но најновата генерација го надмина и тоа и постави нов рекорд со 2,500сс зафатнина на моторот која нуди уште повеќе перформанси. Дизајнерите во Triumph и покрај зголемувањето на зафатнината успејаа да ја намалат вкупната тежина на моторо за 18кг и се погрижија самиот мотор да биде елегантен и уште поубав за очи.",
                  "image" => "/images/rocket-3/rocket3ReasonsMotor.avif"
                ],
                [
                  "title" => "Досега невидено забрзување и обртен момент ",
                  "desc" => "Најновата генерација на Rocekt 3 уште повеќе ги унапредија перформансите. Со силина од 167PS @ 6,000rpm, оваа генерација е за 11% помоќна од претходната Rocekt генерација. Со обртен момент од 221Nm at 4,000rpm Rocket-3 е светски лидер и нуди дури 71% повеќе обртен момент од најблискиот негов конкурент. Сепак зборуваме за бројка од 2.8 секунди од 0 до 100km/h."
                ],
                [
                  "title" => "Одлично Управување",
                  "desc" => "Екстремните перформанси на Rocket 3 се парирани со одлично управување, суспензија и сопирачки. Rocket 3 е составен од Showa предна и задна суспензија, Brembo систем за запирање. Целата шасија на Rocket 3 е создадена од алуминиум кој ја прави истат полесна и заштедува 40кг од претходната серија. Како додаток на ова моторот е опремен со врвна ABS технологија и систем за пролизгување кој е изработен во соработка со Continental."
                ],
                [
                  "title" => "Чувство на доминација",
                  "desc" => "Мислиме дека на секој му е јасно дека Rocket 3 серијата е доминантна секаде. Со својот мускулест изглед и стил, и опремен со ситни детали докажува дека лидер во својата категорија и кога е во прашање и изгледот. Со својата витка ергономија Rocket 3 серијата не само што е комфортна за возење туку и убава за гледање."
                ],
                [
                  "title" => "Технологија",
                  "desc" => "Rocket 3 серијата воведува нова технологија кога е во прашање функционалност и возачкото искуство. Втората генерација TFT екрани инкорпорира минималистички дизајн и дво-димензионален информациски систем кој е изработен со возачот во прв план, односно дозволува возачот да си го персонализира својата инструментна табла. Како додаток на сета сигурносна опрема, Rocekt 3 серијата е опремена со повеќе модови на работа како => Road, Road, Sport и Custom , hill-assist, темпомат, keyless и ситни детали како греачи на волан како стандардна опција кај Rocekt 3 GT (можност за опремување и кај R верзијата)."
                ],
                [
                  "title" => "My Triumph Connectivity System",
                  "desc" => "My Triumph Connectivity System му овозможува на возачот лесна конекција со GoPro камера чии операции се наведени на TFT екранот. Исто така овој систем на возачот му овозможува од turn-by-turn навигација па се до планер за возење и интегрирана конекција за телефон кој овозможува да контролирате со музика.",
                  "image" => "/images/rocket-3/rocket3ReasonsConectivity.avif"
                ],
                [
                  "title" => "Импозанта Става",
                  "desc" => "Секој мотор од Rocket 3 серијата ужива во својатса силуета и дизајн. Специјални Avon Cobra Chrome гуми се изработени специјанлно за Rocket 3 серијата. Самата димензија на гумите додава посебен мускулест изглед на моторот. Моден додаток на моторите е и задната вилушка која е видлива само од левата страна моторот на чиј крај се наоѓа лесно алуминиумско тркало со 20 краци."
                ],
                [
                  "title" => "Препознатливи Дизајн Елементи",
                  "desc" => "За подобрувањето на естетиката на Rocket 3 се заслужни и мноштво врвни детали и препознатливи дизајнерски карактеристики кои го максимизираат мускулестото присуство на моторот, вклучувајќи => иновативно извајани издувни цевки кои овозможуваат да се нагласи импозантната големина на моторот, препознатлив двоен LED фар* со прекрасно брендирање на триаголник со ознака на производителот Triumph, уникатно седиште за секој мотор со удобни извајани седишта за возач и сопатник со посебно приспособено седло што создава течна линија низ моторот – со GT варијантата која се одликува со прилагодлив четкан алуминиумски потпирач за грб – и целосно LED осветлување* со карактеристично дневно Светла* за максимална видливост.."
                ],
                [
                  "title" => "Прекрасни Детали и Боја",
                  "desc" => "Палетата на мотоцикли Rocket 3 има високо ниво на завршна обработка и детали што ја дефинира завршната фаза заслужна за неговиот прекрасен стил. Овие прекрасни карактеристики вклучуваат мускулест извајан резервоар за гориво со препознатливата дизајнерска ДНК на Triumph, четкана лента на резервоарот од не'рѓосувачки челик и алуминиумско капаче во стилот на Монца, брусен алуминиумски капак на воздушната кутија, брусен алуминиум за ладење и капачиња за масло во стилот на Монца, обработени перки на картерот, четкани топлински штитови од издувните гасови и завршни капачиња и скриени потпирачи за нозе на преклопување со уникатен дизајн."
                ]
              ]
            ],
            "accessory" => [
              "banner" => [
                "image" => "/images/rocket-3/rocket3AccessoryBaner.avif"
              ],
              "infoText" => [
                "title" => "Rocket-3",
                "desc" => "Rocket 3 R & GT може целосно да се прилагоди на преференциите на нивните сопственици со повеќе од педесет оригинални приспособени додатоци на Triumph, кои се дизајнирани, изградени и тестирани заедно со еволуцијата на овој велосипед. Додатоци кои го подобруваат капацитетот за носење багаж, удобноста, практичноста, стилот и заштитата на моделите Rocket 3. Дизајниран и изграден во тандем со еволуцијата на мотоциклите и сите достапни кај овластените дилери. Има и комплет за инспирација „Highway“, кој е совршен начин веднаш да додадете ново ниво на способност за турнеи на Rocket 3, со однапред избрана палета на оригинални Triumph додатоци."
              ],
              "accessoryTypes" => [
                [
                  "title" => "Инспирација",
                  "desc" => "За да ги прикажеме обемните можности за турнеи на серијата Rocket 3, ги препорачуваме овие специјално избрани оригинални додатоци на Triumph за врвна конфигурација за турнеи:",
                  "itemsList" => [
                    "Спортски Страничен Багаж",
                    "Држачи за Багаж кои се лесни за Одстранување",
                    "Вграден Централен Алуминиумски Држач за Багаж",
                    "Машински Изработени Ретровизори",
                    "Triumph Shift Assist",
                    "Triumph TFT connectivity ситем"
                  ],
                  "image1" => [
                    "src" => "/images/rocket-3/rocket3Accessory1.avif",
                    "alt" => "Rocket - 3"
                  ]
                ],
                [
                  "title" => "Стил",
                  "desc" => "Персонализирајте го стилот на вашиот Rocket 3 со прилагодени додатоци. Вклучува спортски ретровизори, класични ретровизори и (за прв пат на сериски велосипед) лизгачки LED трепкач* со црно тело од алуминиумска легура и црн хром внатрешен ретровизор *Може да важат регионални ограничувања.",
                  "image1" => [
                    "src" => "/images/rocket-3/rocket3Accessory2.avif",
                    "alt" => "Rocket 3 Passenger Grabs"
                  ]
                ],
                [
                  "title" => "Технологија",
                  "desc" => "Опсегот на додатоци од високата класа го вклучува системот за поврзување Triumph TFT, кој овозможува навигација чекор по свиок, управување со телефонски повици, работа со GoPro камера и многу повеќе. Исто така, Triumph Track+ (уредот за следење заедно со 24/7 контрола од мобилниот телефон на сопственикот) и Triumph Protect+ (систем за аларм одобрен од Triumph Thtcham) ја подигнуваат заштитата на ново ниво и му обезбедуваат доверба на сопственикот.",
                  "image1" => [
                    "src" => "/images/rocket-3/rocket3Accessory3.avif",
                    "alt" => "Rocket 3 Speedo"
                  ]
                ],
                [
                  "title" => "Сигурност",
                  "desc" => "За поголема заштита, во соработка со Artago развивме серија безбедносни производи, кои ќе му понудат поголема безбедност на вашиот Triumph. Овие производи целосно ги исполнуваат безбедносните спецификации Sold Secure и SRA. (Куката за заземјување ја исполнува само спецификацијата Sold Secure). Опсегот вклучува:",
                  "itemsList" => [
                    "Катанец и Ланец",
                    "Катанец на Сопирачки",
                    "Horseshoe lock",
                    "Ground hook",
                    "Disc brake lock with alarm (120dB)"
                  ],
                  "image1" => [
                    "src" => "/images/roadsters/streetTriple765/streetТriple765АccessoriesTailBag.avif",
                    "alt" => "Street Triple 765 Tail Bag"
                  ]
                ]
              ]
            ],
            "shortSpecInfo" => [
              "info1" => "2500cc Rocket Мотор",
              "info2" => "'Ultimate high performance roadster'"
            ],
            "gallery" => [
              "modelImage" => [
                "src" => "/images/rocket-3/rocket3R/rocket3RSilverIce.png",
                "alt" => "Rocket 3 Range Model Image"
              ],
              "subFamilyHeroVideo" => [
                "src" => "/images/rocket-3/rocket3SubFamHeroVideo.webm",
                "alt" => "Rocket 3 "
              ],
              "subFamilyHeroImageMobile" => [
                "src" => "/images/rocket-3/rocket3HeroMobile.avif",
                "alt" => "Rocket 3"
              ],
              "subFamilyTopSectionImage" => [
                "src" => "/images/rocket-3/rocket-3TopSectionImage.avif",
                "alt" => "Rocket 3"
              ],
              "subFamilyTopSectionBGImage" => [
                "src" => "/images/rocket-3/rocket-3TopSectionImageBG.avif",
                "alt" => "Rocket 3"
              ]
            ]
        ];


        $subFamSport = [
            "subFamilyName" => "daytona-660",
            "familyType" => "sport",
            "title" => "Daytona 660",

            "url" => "/motorcycles/sport/daytona-660",
            "specs" => [
                [
              "desc" => "Цилиндри",
              "data" => 3
                ],
                [
                "desc" => "PS Коњски Сили",
                "data" => 95
                ],
                [
                "desc" => "NM. Обртен Момент",
                "data" => 69
                ],
                [
                "desc" => "SAL",
                "data" => "12,650"
                ]
          ],
          "heroSlogans" => ["Новата", "Daytona 660", "Пристигна"],
          "youtubeVideo" => "https://www.youtube.com/embed/u2TJ67x2alQ",
                "engineTransmission" => [
                  [
                    "title" => "Тип на Мотор",
                    "desc" => "водно ладење, 12 вентили, 2EEK, линиски 3-цилиндри"
                  ],
                  [
                    "title" => "капацитет",
                    "desc" => "660 cc"
                  ],
                  [
                    "title" => "диjаметар",
                    "desc" => "74.04 mm"
                  ],
                  [
                    "title" => "рута",
                    "desc" => "51.1 mm"
                  ],
                  [
                    "title" => "компресија",
                    "desc" => "12.05"
                  ],
                  [
                    "title" => "Мах. Коњски Сила",
                    "desc" => "70 kW (95PS) @ 11,250 rpm"
                  ],
                  [
                    "title" => "Мах. Обртен Момент",
                    "desc" => "69 Nm @ 8,250 rpm"
                  ],
                  [
                    "title" => "Систем за убризгување",
                    "desc" => "Електронски ulti-point систем за убризгување со електрична контрола на гас"
                  ],
                  [
                    "title" => "Систем за Издувни гасови",
                    "desc" => "3 во 1 не-раѓосувачки челик монтиран во долниот предел на моторот"
                  ],
                  [
                    "title" => "Финална Трансмисија",
                    "desc" => "X-ring chain"
                  ],
                  [
                    "title" => "Квачило",
                    "desc" => "Liquid, multi-disc, assisted glide"
                  ],
                  [
                    "title" => "Менувачка Кутија",
                    "desc" => "6 брзини"
                  ]
                ],
                "frame" => [
                  [
                    "title" => "шасија",
                    "desc" => "Tubular steel perimeter frame"
                  ],
                  [
                    "title" => "вилушка",
                    "desc" => "Дупла Челична"
                  ],
                  [
                    "title" => "предно тркало",
                    "desc" => "17 x 3.5' леан алуминиум"
                  ],
                  [
                    "title" => "задно тркало",
                    "desc" => "17 x 3.5' леан алуминиум"
                  ],
                  [
                    "title" => "предна гума",
                    "desc" => "120/70 ZR 17"
                  ],
                  [
                    "title" => "задна гума",
                    "desc" => "180/55 ZR 17"
                  ],
                  [
                    "title" => "предна суспензија",
                    "desc" => "Showa 41mm испревртена вилушка од 110mm "
                  ],
                  [
                    "title" => "задна суспензија",
                    "desc" => "Showa monoshock 130mm со можност за брзо подесување"
                  ],
                  [
                    "title" => "предни сопирачки",
                    "desc" => "Дупли дискови од 310m со 4 клипна клешта, ABS"
                  ],
                  [
                    "title" => "задна сопирачка",
                    "desc" => "Еден диск од 220mm со едно клипна клешта,ABS"
                  ],
                  [
                    "title" => "инструментна плочка",
                    "desc" => "Мултифункционален TFT екран"
                  ]
                ],
                "dimension" => [
                  [
                    "title" => "ширина на волан",
                    "desc" => "736 mm"
                  ],
                  [
                    "title" => "висина без ретровизори",
                    "desc" => "1145.2 mm"
                  ],
                  [
                    "title" => "Висина на Седиште",
                    "desc" => "810 mm"
                  ],
                  [
                    "title" => "мегу-осовинско растојание ",
                    "desc" => "1425.6 mm"
                  ],
                  [
                    "title" => "Custer Corner",
                    "desc" => "23.8º"
                  ],
                  [
                    "title" => "Trace",
                    "desc" => "82.3 mm"
                  ],
                  [
                    "title" => "капацитет на резервоар",
                    "desc" => "14 L"
                  ],
                  [
                    "title" => "Tежина при полн резервозар",
                    "desc" => "201 kg"
                  ]
                ],
                "fuelConsumption" => [
                  [
                    "title" => "Потрошувачка",
                    "desc" => "(4.9 l / 100 km) 57.6mpg"
                  ],
                  [
                    "title" => "CO2 загадување",
                    "desc" => "113g/km - Euro 5 Стандарди измерени според Регулатива 168/2013/EC. Резултатите се добиени во специјални тест средини и се на располагање само за споредба. Вистинските резултат може да варираат врз различни средини."
                  ],
                  [
                    "title" => "Сервисен Интервал",
                    "desc" => "10.000km / 12 месеци"
                  ]
                ],
                "specNumbers" => [
                    [ "data" => "3", "info" => "Цилиндри" ],
                    [ "data" => "69", "info" => "Nm обртен момент" ],
                    [ "data" => "12,650", "info" => "SAL" ],
                    [ "data" => "95", "info" => "РЅ Коњски сили" ]
                ],
            "reasonsToDrive" => [
              "banner" => [
                "image" => "/images/sport/daytona660/daytona660DetailsBanner.avif"
              ],
              "infoText" => [
                "desc" => "Запознајте ја новата Daytona 660 серија. Во нејзината ДНК таа чува динамичен спортски карактер и управување, со стил кој изнудува погледи од сите страни сплотено со врвна агилност и перформанси кои ќе ги подигнат вашите возачки способности на сосема повисоко ниво."
              ],
              "reasons" => [
                [
                  "title" => "Три-Цилиндричен Експлозивен Мотор",
                  "desc" => "Daytona 660 серијата е подкрепена до препознатливиот трицилиндричен мотор на Triumph усовршен низ деценискиот развој. Моторот се одликува со идеална конфигурација, комбинирајќи го вртежниот момент и стисокот на двоцилиндричните мотори при низок обртај со перформансите на линиските четири-цилиндрични мотори при високите обртаи со уникатниот препознатлив три-цилиндричен звук со кој се карактеризираат сите мотори на Triumph. Произведува 95 КС @ 11.250 вртежи во минута и 69 Nm врвен вртежен момент, со повеќе од 80% достапни низ опсегот од 3.125 врт/мин до 11.750 вртежи во минута. Кога станува збор за перформанси Daytona 660 серијата може се. Во пракса, ова се претвора во спортски мотор со врвни перформанси со прифатлива цена кој одговара на секое сценарио за возење и на стилот на секој возач. Овајмотор е надополнет со одлично респонзивен менувач со шест брзини и „Triumph's Slip and Assist“ квачило. „Triumph's Slip and Assist“ квачилото овозможува неверојатно лесно урбано патување е. Дизајнот на квачилото, исто така, го намалува отскокнувањето и блокирањето на задните тркала при нагло забавување за непречена и сигурна авантура.",
                  "image" => "/images/sport/daytona660/daytona660Reasons1.avif"
                ],
                [
                  "title" => "Комфорт и Контрола",
                  "desc" => "Daytona 660 серијата ги има сите карактеристики на чистокрвен спортски мотор со секојдневна употребливост. Со воланот поставен над горниот мост, положбата на возење е совршено избалансирана за да се даде повратна информација потребна за динамично спортско возење. Daytona 660 серијата нуди доволен комфорт за долги релации и лесно управување, нудејќи одлична контрола при мали брзини во урбани средини. Предниот дел на Daytona 660 комбинира остар, агресивен спортски изглед со практично ветробранско стакло кој го отклонува воздухот над и околу возачот за да го намали заморот при подолги возења со голема брзина на автопат. Висината на седлото од само 810 mm со тесна ширина го прави Daytona 660 достапен за возачи од сите големини. Благодарение на тенкиот струк на моторот и со паметент дизајн, положбата на стапалото нуди доволно растојание при свиоци без да се загрози удобноста, дури и за повисоките возачи. Daytona 600 е изградена за секој возач и за секој пат.",
                  "image" => "/images/sport/daytona660/daytona660Reasons2.avif"
                ],
                [
                  "title" => "Перфектен Баланс",
                  "desc" => "Најзаслужни за одличните перформанси и управување кај Daytona 660 се годините поминати во дизајнирање и развој на тркачки шасии. Кога сме кај балансот на Daytona 660, таа се карактеризира со агилност при мали брзини комбинирана со неутрално, стабилно управување при големи брзини. Нудејќи го најдоброто од двата света, дизајнот на рамката и совршено усогласените компоненти на Daytona го издвојуваат од неговите ривали од средната класа. Опремен со „Showa“ суспензија од 41 мм, Daytona има фокусирано управување што го олеснува вашиот живот при динамично возење. Задната суспензија е лесно и брзо прилагодлива. Сопирањето е подеднакво обезбедено. Двете радијални четириклипни клешти во комбинација со лесните дискови од 310 mm обезбедуваат голема моќ за запирање, а преку ABS системот кој се оптимизира преку избор на возач, безбедноста е загарантирана, дури и при најтешкото сопирање. Лесните леани алуминиумски тркала со пет краци ја одржуваат ротирачката инерцијална маса ниска за подобрен одговор и перформанси на суспензијата. Најновите Michelin Power 6 гуми со високи спецификации го комплетираат пакетот за управување, обезбедувајќи доверба во сите услови.",
                  "image" => "/images/sport/daytona660/daytona660Reasons3.avif"
                ],
                [
                  "title" => "Технологија на Врвно Ниво",
                  "desc" => "Daytona 660 е опремена со технологија која го подобрува искуството во возењето и безбедноста. „Ride-by-wire“ системот за апликација на гас нуди чист и прецизен одговор и исто така овозможува три режими на возење - спорт, пат и дожд. Секоја програма нуди различен одговор при додавање на гас и ниво на интервенција на контрола на тракцијата, при што режимот Sport обезбедува најдиректен одговор на гас за возење на патека. Системот за контрола на тракцијата може да се исклучи преку менито на инструментната плоча за возачите кои претпочитаат потрадиционално „аналогно“ чувство. Сопирањето на Daytona 660 е секогаш на врвно ниво благодарение на квалитетниот ABS систем. Контролирано од конфигуратор од високата класа на Continental, моќното сопирање со дополнителна безбедност - но без чувството на треперење ја зголемува довербата на возачот во сите услови. Бидејки Daytona 660 има толку голема моќ за запирање, опремена е со систем за  предупредување при итно забавување, кој активира предупредувачки светла при силно сопирање за да ги предупреди другите учесници во сообраќајот. Мултифункционалните инструменти се прикажани на TFT дисплеј во боја интегриран во LCD бело-црн дисплеј. Компактни и ненаметнати во дизајнот, инструментите ги прикажуваат јасно сите информации за возачот и се лесни за читање во различни услови на осветлување. Овој уред е компатибилен со дополнителната апликација за системот за поврзување „My Triumph“, која овозможува „Turn-By-Turn“ навигација и интеракција со телефонот и музика. Сите функции се јасно прикажани на TFT екранот и се контролираат преку лесно достаплив контролер на воланот за полесно користење додека возите.",
                  "image" => "/images/sport/daytona660/daytona660Reasons4.avif"
                ],
                [
                  "title" => "Динамичност",
                  "desc" => "Со впечатлива силуета, чистите линии и стил Daytona ги мами сите погледи. Елегантната нова каросерија, со препознатливите двојни LED фарови и централниот довод на воздух кои се обвиткуваат околу рамката, гушкајќи го извајаниот резервоар па се до минималистичката опашка го дополнуваат изгледот на Daytona. Како кај секој Triumph убавината се крие и под каросеријата. Рамката има издржлива, висококвалитетна завршница, со дизајнерски детали кои се протегаат до подрамката и вилушките инспирирани од тркачкиот дух на Triumph. Ова исклучително внимание на деталите се пренесува во просторот на кокпитот, со скриени кабли и црева. Рачно изработените алуминиумски штитници се само еден пример за обемниот дизајн на Daytona - и бескрајната потрага по совршенство.",
                  "image" => "/images/sport/daytona660/daytona660Reasons5.avif"
                ],
                [
                  "title" => "Најниски Трошоци во Класата",
                  "desc" => "Врвните перформанси, квалитет и управување се само почеток на причините кои ќе ве натераат да станете сопственик на Daytona 660. Добро докажаниот три-цилиндричен мотор е создаден во интензивната конкуренција на трките од светскиот шампионат во Moto2, а со програма за издржливост, тестирање во реални услови и тестирање на патеката, можете да имате целосна доверба во способностите на Daytona 660. Доколку ги додаеме и ниските трошоци за одржување, водечките во класата интервали на сервисирање од 16.000 километри и двегодишна неограничена гаранција за километражата, Daytona ви овозможува вашето слободно време да го трошите на возење наместо во одржување. Daytona 600 нуди квалитет кој дава непобедлива вредност.",
                  "image" => "/images/sport/daytona660/daytona660Reasons6.avif"
                ]
              ]
            ],
            "accessory" => [
              "banner" => [
                "image" => "/images/sport/daytona660/daytona660AccessoriesBanner.avif"
              ],
              "infoText" => [
                "title" => "Додајте ваш белег врз Speed 400",
                "desc" => "На располагање ви е селекција од преку 20 оригинални Triupmh аксесоари за оваа серија на мотори. Аксесоарите кои ќе ги додадете може да бидат додадени на вашиот мотор во фабриката. Aксесоарите се дизајнирани од истиот тим кој го креираше Speed 400 и доаѓаат со две-годишна гаранција."
              ],
              "accessoryTypes" => [
                [
                  "title" => "Заштита и Нега",
                  "desc" => "Гордоста на сопственоста често значи инвестирање во производи за заштита на вашиот нов мотор. Triumph има своја индивидуална палета на специјалните компонентите  го прават тоа подобро од сите други. Истите совршено се вклопуваат без модификација и без да предизвикаат поголема штета отколку што веројатно некогаш ќе се извлечат. Изберете од штитниците на моторот со завртки, гумени подлоги за резервоарот, штитници за рамка и штитници за заштита од оштетување од триење на нозете и помали падови. Достапна е и специјална прекривка за сите временски услови заедно со полнач за батерии за да ја одржите вашата Daytona 660 во одлична состојба и подготвена за акција додека мирува. Комплет за чистење, создаден во соработка со британскиот специјалист за нега на мотоцикли „Muc-Off“, кој ќе ја одржиува вашата Daytona 660 свежа како и денот кога сте ја купиле.",
                  "itemsList" => [
                    "Заштита за Мотор",
                    "Гумени Подлоги за Резервоар",
                    "Заштита на Рамка",
                    "Заштита за Вилушки",
                    "Прекривка за Заштита од Временски Услови",
                    "Muc-Off Комплет за Чистење"
                  ],
                  "image1" => [
                    "src" => "/images/sport/daytona660/daytona660Access1.avif",
                    "alt" => "Daytona 660 Заштита "
                  ]
                ],
                [
                  "title" => "Технологија",
                  "desc" => "Во однос на технологијата, Daytona 660 има водечка стандардна опрема во класата и палета на оригинални Triumph додатоци. Системот за поврзување „My Triumph“ овозможува лесно и интуитивно ракување со телефонот и музика, како и „Turn-By-Turn“ навигација - лесна надградба што ќе го извлече максимумот од вашите уреди во движење. Исто така вклучена е и USB порта под седлото и систем за следење на притисокот во гумите (TPMS) кој ги прикажува вредностите јасно на TFT екранот. И двете се едноставни за вградување.",
                  "itemsList" => [
                    "„My Triumph“ Систем за Поврзување",
                    "USB Порта под Седлото",
                    "Систем за Мониторинг на Притисок во Гуми (TPMS)"
                  ],
                  "image1" => [
                    "src" => "/images/sport/daytona660/daytona660Access2.avif",
                    "alt" => "Daytona 660 Технологија"
                  ]
                ],
                [
                  "title" => "Стил",
                  "desc" => "Додатни извонредно изработени компоненти кои на Daytona 660 ќе и дадат уште повеќе карактер се достапни. Истите вклучуваат капаче за полнење масло, претходно издупчено за заклучување на жици, завртки за тркачка ногарка, облоги на воланот и резервоар за течност за задните сопирачки, како и гумена подлога на репот на моторот.",
                  "itemsList" => [
                    "Гумена Подлога за Потпирање на Репот на Моторот",
                    "Капаче за Полнење на Масло",
                    "Завртки за Тркачка Ногарка",
                    "Oблоги на Воланот",
                    "Резервоар за Течност за Задните Сопирачки"
                  ],
                  "image1" => [
                    "src" => "/images/sport/daytona660/daytona660Access3.avif",
                    "alt" => "Daytona 660 Стил"
                  ]
                ],
                [
                  "title" => "Комфорт и Практикалност",
                  "desc" => "Внатрешно жичените рачки со греачи се лесни за монтирање и задолжителен додаток за возачите кои не се плашат од различните временски услови. Достапни се и две придружни седла. Првиот е за удобност, со дизајн на воздушни канали за да ве лади и 3D мрежна технологија за да ве држи на место, намалувајќи го заморот за време на возењето. Другото ја прави Daytona 660 достапна за уште повеќе возачи со намалување на висината на седиштето за 25mm до 785mm. Ако сакате да го споделите искуството на Daytona со патник, тогаш рачките за држење на патниците додаваат удобност и дополнително чувство на безбедност кај патникот.",
                  "itemsList" => [
                    "Греачи на Рачки",
                    "Комотни Седла",
                    "Пониско Седло",
                    "Рачки за Држење за Патник"
                  ],
                  "image1" => [
                    "src" => "/images/sport/daytona660/daytona660Access5.png",
                    "alt" => "Daytona 660 Комфорт"
                  ]
                ],
                [
                  "title" => "Багаж",
                  "desc" => "Идеални за секојдневно па и подогли патувања, изберете помеѓу торба за багаж за резервоар или багаж на опашката на моторот - или комбинирајте ги заедно за 20 литри стилски капацитет. И двете опции се изработени со висок квалитет и имаат робусни патенти и држачи за брзо ослободување и вклучуваат водоотпорна внатрешна ролна торба за да ги одржувате вашите работи суви.",
                  "itemsList" => [
                    "Торба за Багаж за Резервоар",
                    "Торба за Багаш за Монтирање на Опашка"
                  ],
                  "image1" => [
                    "src" => "/images/sport/daytona660/daytona660Access6.avif",
                    "alt" => "Daytona 660 Багаж"
                  ]
                ],
                [
                  "title" => "Сигурност",
                  "desc" => "Колку и да е добра вредност, за жал, не секој сака да плати за нова Daytona 660. Чувајте ја вашата Daytona 660 безбедна со тоа што ќе изберете некој од оригиналните безбедносни додатоци на Triumph. „Triumph Protect+ Alarm и Triumph Track+ Tracker“ нудат одлична заштита од кражба. Тие го чуваат вашиот мотор од кражби со тоа што активираат аларм при пресекување на жици и слични елементи кои се мета на крадците. „Track+“ системот е задолжен за 24/7 мониторинг и ве известува кога вашата Daytona ќе биде вознемирена. „Triumph“ се грижи за вашиот мотор и кога е во гаража. Од својата палета „Triumph“ ви нуди заштитна брава за гаражи, брава за дискот на кочницата, брава за диск со вграден аларм, како и прицврстување за земја, синџир и брава.",
                  "itemsList" => [
                    "Triumph Protect+ Аларм",
                    "Triumph Track+ Tracking Систем",
                    "Брави за Гаража",
                    "Брава за Дискот на Кочницата ",
                    "Брава за Дискот на Кочницата со Аларм",
                    "Синџири и Брави"
                  ],
                  "image1" => [
                    "src" => "/images/sport/daytona660/daytona660Access7.avif",
                    "alt" => "Daytona 660 Сигурност"
                  ]
                ]
              ]
            ],
            "shortSpecInfo" => [
              "info1" => "12,650 SAL",
              "info2" => "Максимална јачина од 95 PS",
              "info3" => "69 NM Максимален Обртен Момент"
            ],
            "gallery" => [
              "modelImage" => [
                "src" => "/images/sport/daytona660/daytona660SnowdoniaWhite.png",
                "alt" => "Daytona 660 Range Model Image"
              ],
              "subFamilyHeroVideo" => [
                "src" => "/images/sport/daytona660/familyPageBannerVideo.webm",
                "alt" => "Daytona 660 Серија"
              ],
              "subFamilyHeroImageMobile" => [
                "src" => "/images/sport/daytona660/daytonaSubFamilyHeroImage.avif",
                "alt" => "Daytona 660 Серија"
              ],
              "subFamilyTopSectionImage" => [
                "src" => "/images/roadsters/streetTriple765/streetTriple765TopSectionImage.avif",
                "alt" => "Street Triple 765 Motorcycle"
              ],
              "subFamilyTopSectionBGImage" => [
                "src" => "/images/roadsters/streetTriple765/streetTriple765TopSectionImageBG.avif",
                "alt" => "Street Triple 765 Motorcycle BG"
              ]
            ]
        ];

        $subFamOffRoad = [
            "subFamilyName" => "tf-250-x",
            "familyType" => "off-road",
            "title" => "TF 250-X",
            "price" => 9995,
            "url" => "/motorcycles/off-road/tf-250-x",
            "specs" => [
              [
              "desc" => "cc Мотор",
              "data" => 250
              ],
              [
                "desc" => "Рамка",
                "data" => "Алуминиумска"
              ],
              [
                "desc" => "Компоненти",
                "data" => "Врвни"
              ],
              [
                "desc" => "Серија",
                "data" => "Потполно Нова"
              ]
          ],
            "shortDesc" => null,
            "heroSlogans" => ["Фокусиран", "Тркачки", "Мотор"],
            "youtubeVideo" => "https://www.youtube.com/embed/cch0spfouds",
            "subFamilyPageInfo" => [
                "audioSection" => [
                    "audio" => "/images/roadsters/streetTriple765/streetTriple765Sound.mp3",
                    "title" => "Три-цилиндречен звук кој го тресе земјиното тло.",
                    "desc" => "Новиот издувен систем го испорачува оној препознатлив три-цилиндарски звук на моторот.",
                    "logo" => null
                  ],
            ],
                "engineTransmission" => [
                  [
                    "title" => "Тип на Мотор",
                    "desc" => "4 тактен DOHC мотор со еден цилиндар"
                  ],
                  [
                    "title" => "капацитет",
                    "desc" => "249.95 cc"
                  ],
                  [
                    "title" => "диjаметар",
                    "desc" => "78mm"
                  ],
                  [
                    "title" => "рута",
                    "desc" => "52.3mm"
                  ],
                  [
                    "title" => "компресија",
                    "desc" => "14.4"
                  ],
                  [
                    "title" => "Систем за убризгување",
                    "desc" => "Dellorto Throttle Body, Athena EMS"
                  ],
                  [
                    "title" => "Систем за Издувни гасови",
                    "desc" => "Single Silencer"
                  ],
                  [
                    "title" => "Финална Трансмисија",
                    "desc" => "13/48"
                  ],
                  [
                    "title" => "Квачило",
                    "desc" => "Wet Multi-Plate Belleville Spring"
                  ],
                  [
                    "title" => "Менувачка Кутија",
                    "desc" => "5 брзини"
                  ]
                ],
                "frame" => [
                  [
                    "title" => "шасија",
                    "desc" => "Алуминиум"
                  ],
                  [
                    "title" => "вилушка",
                    "desc" => "Алуминиум"
                  ],
                  [
                    "title" => "предно тркало",
                    "desc" => "21' x 1.6'"
                  ],
                  [
                    "title" => "задно тркало",
                    "desc" => "19' x 1.85'"
                  ],
                  [
                    "title" => "предна гума",
                    "desc" => "80/100 - 21"
                  ],
                  [
                    "title" => "задна гума",
                    "desc" => "100/90 - 19"
                  ],
                  [
                    "title" => "предна суспензија",
                    "desc" => "KYB 48mm (1.88in) Coil Spring Fork, Compression/Rebound Adjustment, 310mm (12.20in) Travel"
                  ],
                  [
                    "title" => "задна суспензија",
                    "desc" => "KYB Coil, Compression Adjustment (H and L Speed), Rebound Adjustment, 305mm (12.0in) Travel"
                  ],
                  [
                    "title" => "предни сопирачки",
                    "desc" => "Brembo Twin 24mm (0.94in) Piston, 260mm (10.23in) Disc"
                  ],
                  [
                    "title" => "задна сопирачка",
                    "desc" => "Brembo Single 26mm (1.02in) Piston, 220mm (8.66in) Disc"
                  ],
                  [
                    "title" => "инструментна плочка",
                    "desc" => "Hour Meter, Multifunction Switch Cubes"
                  ]
                ],
                "dimension" => [
                  [
                    "title" => "ширина на волан",
                    "desc" => "32.91” (836mm)"
                  ],
                  [
                    "title" => "висина без ретровизори",
                    "desc" => "50” (1270mm)"
                  ],
                  [
                    "title" => "Висина на Седиште",
                    "desc" => "37.8” (960mm)"
                  ],
                  [
                    "title" => "мегу-осовинско растојание ",
                    "desc" => "58.74” (1492mm)"
                  ],
                  [
                    "title" => "Rake",
                    "desc" => "27.4 º"
                  ],
                  [
                    "title" => "Trace",
                    "desc" => "4.57” (116mm)"
                  ],
                  [
                    "title" => "капацитет на резервоар",
                    "desc" => "1.85 gal (7 L)"
                  ],
                  [
                    "title" => "Tежина при полн резервозар",
                    "desc" => "229lbs"
                  ]
                ],

              "grayCarousell" => [
                [
                  "id" => "carouselItem1",
                  "title" => "Најновиот и Првенец во класата на “Streetfighter“ Моторцикли",
                  "desc" => "Сега, уште повеќе сила благодарејки на Мото2 моторот со неверојатна агилност, агресивен изглед и електронска технологија која поставува нови стандарди.",
                  "image" => "/images/roadsters/streetTriple765/streetTriple765GrayCaro1.avif"
                ],
                [
                  "id" => "carouselItem2",
                  "title" => "Новиот Репер Во класата на “naked“ моторцикли",
                  "desc" => "ТНови технолошки унапредувања, агилност, највисока запирачка спецификација и новиот репер во смисла на моќност во класата.",
                  "image" => "/images/roadsters/streetTriple765/streetTriple765GrayCaro2.avif"
                ],
                [
                  "id" => "carouselItem3",
                  "title" => "Нај-моќната серија досега",
                  "desc" => "Со голем чекор напред во развивање на Мото2 моторот, Street Triple серијата се закити со уште повеќе обртен момент и сила - 120 РЅ за R верзијата и 130 РЅ за RS Verzijata.",
                  "image" => "/images/roadsters/streetTriple765/streetTriple765GrayCaro3.avif"
                ]
              ],
              "youtubeVideosCarousellItems" => [
                [
                  "src" => "https://www.youtube.com/embed/cDNnqoRB50w",
                  "title" => "Triumph Street Triple Launch Valencia 2022"
                ],
                [
                  "src" => "https://www.youtube.com/embed/A6MwjE782iI",
                  "title" => "Web | Street Triple R Hero"
                ],
                [
                  "src" => "https://www.youtube.com/embed/Qj9dxotylh0",
                  "title" => "Web | Street Triple RS Hero"
                ],
                [
                  "src" => "https://www.youtube.com/embed/--p8YSQxEp0",
                  "title" => "Web | Engine In Motion Street Triple 765"
                ],
                [
                  "src" => "https://www.youtube.com/embed/JR-wXQFKG2Q",
                  "title" => "Web - DE | Street Triple R | Features and Benefits"
                ],
                [
                  "src" => "https://www.youtube.com/embed/cDNnqoRB50w",
                  "title" => "Triumph Street Triple Launch Valencia 2022"
                ],
                [
                  "src" => "https://www.youtube.com/embed/kP7FA3k6Hv8",
                  "title" => "New Street Triple 765 RS | Features and Benefits"
                ]
              ],
              "specNumbers" => [
                [ "data" => "3", "info" => "Цилиндри" ],
                [ "data" => "69", "info" => "Nm обртен момент" ],
                [ "data" => "12,650", "info" => "SAL" ],
                [ "data" => "95", "info" => "РЅ Коњски сили" ]
              ],

            "accessory" => [
              "banner" => [
                "image" => "/images/offRoad/tf250X/tf250XAccessoryBanner.avif"
              ],
              "accessoryTypes" => [
                [
                  "title" => "ATHENA LC-GPA Launch Control Модул",
                  "desc" => "Стартот на трките е еден од клучните моменти во трката. Нервозата, адреналинот и како и огромната бучава го дефокусираат возачот. Овој уред е наменет токму за овие моменти и ќе ви овозможи перфеектен старт. ATHENA LC-GPA Launch Control модулот се монтира на предниот блатобран и ја контролира тракцијата на моторот со патентираниот GPA ( Get Power Assistance ) систем. 12 LED светла му сигнализираат на возачот кој е оптималниот RPM кој ќе му овозможи перфектен старт, секогаш.",
                  "image1" => [
                    "src" => "/images/offRoad/tf250X/tf250Acces1.avif",
                    "alt" => "TF 250 X Штитник за Радијатор"
                  ]
                ],
                [
                  "title" => "Holeshot Уред",
                  "desc" => "Уредот кој мора да го имате. XTRig уредот ги држи предните вилушки во заклучена позиција при тешкото забрзување на стартот на трката со цел да се намали подигањето на предните тркала и да се овозможи подобра контрола. Изработен на CNC машина и ласерски изгравиран, ова е совршен додаток за вашиот TF 250-X.",
                  "image1" => [
                    "src" => "/images/offRoad/tf250X/tf250Acces2.avif",
                    "alt" => "TF 250X Holeshot Уред "
                  ]
                ],
                [
                  "title" => "WI-Fi Модул за Тунинг",
                  "desc" => "Едноставен „Plug and Play“ додаток кој ви овозможува да комуницирате со мозокот на моторот. Ви нуди дијагностика и селектирање на модули на работа во живо.",
                  "image1" => [
                    "src" => "/images/offRoad/tf250X/tf250Acces3.avif",
                    "alt" => "TF 250X wifi Уред "
                  ]
                ],
                [
                  "title" => "Комплетен „Body-Kit“",
                  "desc" => "Triumph ви нуди комплетен пластичен „Body-Kit“ кој ќе ви овозможи да ги замените старите и оштетени пластики. Сите пластични делови се достапни поединечно и во комплет.",
                  "image1" => [
                    "src" => "/images/offRoad/tf250X/tf250Acces4.avif",
                    "alt" => "TF 250X Body Kit"
                  ]
                ],
                [
                  "title" => "Прекривка за Седиште со Грипови",
                  "desc" => "Заштитната прекривка за седиштето со детали кои спречуваа лизгање е одлична идеа за да го заштите вашето седиште од оштетување и да го продолжите неговит век на траење."
                ],
                [
                  "title" => "„Performance Gripper“ Седиште",
                  "desc" => "Ова седиште е заменско седиште кое уште повеќе го спречува лизгањето на возачот од истото. Долж целата негова должина седиштето е изгравирано е со грипови односно додатоци кои спречуваат лизгање."
                ],
                [
                  "title" => "Алуминиумско Капаче за Резервоар",
                  "desc" => "Додајте малку стил со додавање на алуминиумски детал на вашиот резервоар. Истото е машински изгравирано од алуминиум, со издувен вентил и со петто кракен дизајн.",
                  "image1" => [
                    "src" => "/images/offRoad/tf250X/tf250Acces5.avif",
                    "alt" => "TF 250X Seat Kit"
                  ]
                ],
                [
                  "title" => "Заштита за Филтер за Воздух",
                  "desc" => "Дизајниран за користење во екстремни услови, овој штитник е наменет да го чува вашиот филтер чист и без прашина, кал и вода."
                ],
                [
                  "title" => "Заштита на Суспензија и Вилушки",
                  "desc" => "Едноставно решение кои ви помага да ги заштите вашите дихтунзи и суспензија од прашина и други надворешни елементи. Овој ракав е екстремно издржлив и едноставно се превиткува околу вилушките на моторот и го пролонгира менувањето на истите."
                ],
                [
                  "title" => "Штитник за Диск",
                  "desc" => "Камените патеки и патеките полни со бразди можат сериозно да им наштетат на дисковите на сопирачките. Затоа Triumph го креираше овој лесно вградлив штитник кој ги штити дисковите но сепак остава доволно простор за ладење.",
                  "image1" => [
                    "src" => "/images/offRoad/tf250X/tf250Acces6.avif",
                    "alt" => "TF 250 X Штитник за Кочници"
                  ]
                ],
                [
                  "title" => "Штитник за Радијатор",
                  "desc" => "Додадете уште повеќе стил со овој штитник офарбан во препознатлива Triumph тркачка воја.",
                  "image1" => [
                    "src" => "/images/offRoad/tf250X/tf250Acces6.avif",
                    "alt" => "TF 250 X Штитник за Радијатор"
                  ]
                ]
              ]
            ],
            "shortSpecInfo" => [
              "info1" => "250cc мотор",
              "info2" => "Алуминиумска Рамка",
              "info3" => "Компоненти од Врвна Класа"
            ],
            "gallery" => [
              "modelImage" => [
                "src" => "/images/offRoad/tf250X/tf250xTriumphYellow.png",
                "alt" => "TF 250 X Range Model Image"
              ],
              "subFamilyHeroVideo" => [
                "src" => "/images/offRoad/familyBannerVideo.webm",
                "alt" => "TF 250-X"
              ],
              "subFamilyHeroImageMobile" => [
                "src" => "/images/offRoad/tf250X/tf250XHeroMobileBanner.avif",
                "alt" => "TF 250-X"
              ],
              "subFamilyTopSectionImage" => [
                "src" => "/images/roadsters/streetTriple765/streetTriple765TopSectionImage.avif",
                "alt" => "Street Triple 765 Motorcycle"
              ],
              "subFamilyTopSectionBGImage" => [
                "src" => "/images/roadsters/streetTriple765/streetTriple765TopSectionImageBG.avif",
                "alt" => "Street Triple 765 Motorcycle BG"
              ]
            ]
        ];




        SubFamAdventure::create($subFamAdventureData);
        SubFamAdventure::create($subFamAdventureDataTwo);
        SubFamAdventure::create($subFamAdventureDataThree);
        SubFamAdventure::create($subFamAdventureDataFour);
        SubFamAdventure::create($subFamAdventureDataFive);
        SubFamAdventure::create($subFamClassicsData);
        SubFamAdventure::create($subFamClassicsDataTwo);
        SubFamAdventure::create($subFamClassicsDataThree);
        SubFamAdventure::create($subFamClassicsDataFour);
        SubFamAdventure::create($subFamClassicsDataFive);
        SubFamAdventure::create($subFamClassicsDataSix);
        SubFamAdventure::create($subFamClassicsDataSeven);
        SubFamAdventure::create($subFamClassicsDataEight);
        SubFamAdventure::create($subFamClassicsDataNine);
        SubFamAdventure::create($subFamClassicsDataTen);
        SubFamAdventure::create($subFamClassicsDataEleven);
        SubFamAdventure::create($subFamRoadsters);
        SubFamAdventure::create($subFamRoadstersTwo);
        SubFamAdventure::create($subFamRoadstersThree);
        SubFamAdventure::create($subFamRoadstersFour);
        SubFamAdventure::create($subFamRoadstersFive);
        SubFamAdventure::create($subFamRocket3);
        SubFamAdventure::create($subFamRocket3);
        SubFamAdventure::create($subFamSport);
        SubFamAdventure::create($subFamOffRoad);







    }
}
