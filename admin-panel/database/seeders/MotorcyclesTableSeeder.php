<?php

namespace Database\Seeders;

use App\Models\Motorcycle;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MotorcyclesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $motorcycleData = [
            [
                "title" => "Tiger 900 GT",
                "model" => "tiger-900",
                "category" => "adventure",
                "subFamilyCategory" => "tiger-900-gt",
                "edition" => "adventure",
                "price" => "Наскоро",
                "gallery" => [
                    "modelImage" => [
                        "src" => "/images/adventure/tiger900GT/tiger900GTGraphiteBlack.png",
                        "alt" => "Tiger 900 GT"
                    ]
                ],
                "bikeCollorPalletteGallery" => [

                    "default" => "/images/adventure/tiger900GT/tiger900GTGraphiteBlack.png",
                    "color1" => "/images/adventure/tiger900GT/tiger900GTGraphiteBlack.png",
                    "color1Reversed" => "/images/adventure/tiger900GT/tiger900GTGraphiteBlackReversed.png",
                    "color2" => "/images/adventure/tiger900GT/tiger900GTSnowdonia.png",
                    "color2Reversed" => "/images/adventure/tiger900GT/tiger900GTSnowdoniaReversed.png",
                    "color3" => "/images/adventure/tiger900GT/tiger900GTRed.png",
                    "color3Reversed" => "/images/adventure/tiger900GT/tiger900GTRedReversed.png"
                ],
                "customizationColors" => [
                    [
                        "colorName" => "Graphite / Saphire Black",
                        "price" => "Наскоро",
                        "image" => "/images/custom-collors/graphiteJetBlack.jpg",
                        "colorCode" => "color1"
                      ],
                      [
                        "colorName" => "Snowdonia White / Saphire Black",
                        "price" => "Наскоро",
                        "image" => "/images/custom-collors/snowdoniaWhiteJetBlack.jpg",
                        "colorCode" => "color2"
                      ],
                      [
                        "colorName" => "Carnival Red / Saphire Black",
                        "price" => "Наскоро",
                        "image" => "/images/custom-collors/carnivalRedSapphireBlack.jpg",
                        "colorCode" => "color3"
                      ]
                ],
                "shortSpecInfo" => [
                    "info1" => "Нов 900cc три-цилиндричен мотор",
                    "info2" => "Високи спецификации за подобро искуство",
                    "info3" => "Врвна технологија фокусирана на возачот"
                ],
                "subFamilyPromo" => [
                    "title" => "Новиот Tiger 900 GT",
                    "desc" => "Со врвни перформанси и комфорт Tiger 900 GT ве води на долги авантури. Неговата агилност и можности ви доверуваат сигурност и даваат чувство на слобода."
                ],
            ],
        ];

        $motorcycleDataTwo = [
            [
                "title" => "Tiger 900 GT PRO",
                "model" => "tiger-900-gt-pro-2024",
                "category" => "adventure",
                "subFamilyCategory" => "tiger-900",
                "edition" => "adventure",
                "price" => null,
                "gallery" => [
                  "modelImage" => [
                    "src" => "/images/adventure/tiger900GTPRO/tiger900GTPROGraphite.png",
                    "alt" => "Tiger 900 GT"
                  ]
                ],
                "bikeCollorPalletteGallery" => [
                  "default" => "/images/adventure/tiger900GTPRO/tiger900GTPROGraphite.png",
                  "color1" => "/images/adventure/tiger900GTPRO/tiger900GTPROGraphite.png",
                  "color1Reversed" => "/images/adventure/tiger900GTPRO/tiger900GTPROGraphiteReversed.png",
                  "color2" => "/images/adventure/tiger900GTPRO/tiger900GTPRORed.png",
                  "color2Reversed" => "/images/adventure/tiger900GTPRO/tiger900GTPRORedReversed.png",
                  "color3" => "/images/adventure/tiger900GTPRO/tiger900GTPROWhite.png",
                  "color3Reversed" => "/images/adventure/tiger900GTPRO/tiger900GTPROWhiteReversed.png"
                ],
                "customizationColors" => [
                  [
                    "colorName" => "Graphite / Saphire Black",
                    "price" => null,
                    "image" => "/images/custom-collors/graphiteJetBlack.jpg",
                    "colorCode" => "color1"
                  ],
                  [
                    "colorName" => "Snowdonia White / Saphire Black",
                    "price" => null,
                    "image" => "/images/custom-collors/snowdoniaWhiteJetBlack.jpg",
                    "colorCode" => "color3"
                  ],
                  [
                    "colorName" => "Carnival Red / Saphire Black",
                    "price" => null,
                    "image" => "/images/custom-collors/carnivalRedSapphireBlack.jpg",
                    "colorCode" => "color2"
                  ]
                ],
                "subFamilyPromo" => [
                  "title" => "Новиот Tiger 900 GT PRO",
                  "desc" => "Високи перформанси, комфорт, можности и управување. Новата Tiger 900 GT фамилија е родена за авантури од епски размери."
                ]
            ]
        ];

        $motorcycleDataThree = [
            [
                "title" => "Tiger 900 Rally PRO",
                "model" => "tiger-900-rally-pro-2024",
                "category" => "adventure",
                "subFamilyCategory" => "tiger-900",
                "edition" => "adventure",
                "price" => 21990,
                "gallery" => [
                  "modelImage" => [
                    "src" => "/images/adventure/tiger900RallyPro/tiger900RallyProCarbonBlack.png",
                    "alt" => "Tiger 900 Rally Pro"
                  ]
                ],
                "bikeCollorPalletteGallery" => [
                  "default" => "/images/adventure/tiger900RallyPro/tiger900RallyProCarbonBlack.png",
                  "color1" => "/images/adventure/tiger900RallyPro/tiger900RallyProCarbonBlack.png",
                  "color1Reversed" => "/images/adventure/tiger900RallyPro/tiger900RallyProCarbonBlackReversed.png",
                  "color2" => "/images/adventure/tiger900RallyPro/tiger900RallyProOrange.png",
                  "color2Reversed" => "/images/adventure/tiger900RallyPro/tiger900RallyProOrangeReversed.png",
                  "color3" => "/images/adventure/tiger900RallyPro/tiger900RallyProKhaki.png",
                  "color3Reversed" => "/images/adventure/tiger900RallyPro/tiger900RallyProKhakiReversed.png"
                ],
                "customizationColors" => [
                  [
                    "colorName" => "Carbon Black / Saphire Black",
                    "price" => null,
                    "image" => "/images/custom-collors/carbonBlack.png",
                    "colorCode" => "color1"
                  ],
                  [
                    "colorName" => "Ash Gray / Intense Orange",
                    "price" => null,
                    "image" => "/images/custom-collors/ashGreyIntenseOrange.png",
                    "colorCode" => "color2"
                  ],
                  [
                    "colorName" => "Matt Khaki Green / Matt Phantom",
                    "price" => null,
                    "image" => "/images/custom-collors/mattKahkiGreenMattPhantomBlack.png",
                    "colorCode" => "color3"
                  ]
                ],
                "shortSpecInfo" => [
                  "info1" => "Нов 900cc три-цилиндричен мотор",
                  "info2" => "Високи спецификации за подобро искуство",
                  "info3" => "Врвна технологија фокусирана на возачот"
                ],
                "subFamilyPromo" => [
                  "title" => "НОВИОТ Tiger 900 Rally PRO",
                  "desc" => "Одлични “off-road“ способности со исто така исклучително добри перформанси на нормални патишта, новиот Tiger 900 Rally Pro е спремен за секаков терен и авантура."
                ]
              ],
        ];

        $motorcycleDataFive = [
            [
                "title" => "Tiger Sport 660",
                "model" => "tiger-sport-660",
                "category" => "adventure",
                "subFamilyCategory" => "tiger-sport-660",
                "edition" => "adventure",
                "price" => 9590,
                "specs" => [
                  "cc" => 398,
                  "hp" => 20,
                  "torque" => 37.5,
                  "horsePower" => 40,
                  "serviceInterval" => "16.000km",
                  "motorType" => "TR"
                ],
                "gallery" => [
                  "modelImage" => [
                    "src" => "/images/adventure/tigerSport660/tiger660ModelImage.avif",
                    "alt" => "Tiger Sport 660"
                  ],
                  "promoYoutubeVideo" => [
                    "src" => "https =>//www.youtube.com/embed/QvVCEk4t8IE",
                    "alt" => "Tiger 660 Youtbe Video"
                  ]
                ],
                "bikeCollorPalletteGallery" => [
                  "default" => "/images/adventure/tigerSport660/tiger660ModelImage.avif",
                  "color1" => "/images/adventure/tigerSport660/tiger660ModelImage.avif",
                  "color1Reversed" => "/images/adventure/tigerSport660/tigerSport660ModelImageReversed.png",
                  "color2" => "/images/adventure/tigerSport660/tiger660LucerneBlue.avif",
                  "color2Reversed" => "/images/adventure/tigerSport660/tigerSport660LucerneBlueReversed.avif",
                  "color3" => "/images/adventure/tigerSport660/tiger660JetBlackGraphite.avif",
                  "color3Reversed" => "/images/adventure/tigerSport660/tigerSport660JetBlackGraphiteReversed.png",
                  "color4" => "/images/adventure/tigerSport660/tiger660SnowdoniaWhiteJetBlack.avif",
                  "color4Reversed" => "/images/adventure/tigerSport660/tigerSport660SnowdoniaWhiteJetBlackReversed.png"
                ],
                "customizationColors" => [
                  [
                    "colorName" => "Korosi Red / Graphite",
                    "price" => 200,
                    "image" => "/images/custom-collors/korosiRedSapphireBlack.jpg",
                    "colorCode" => "color1"
                  ],
                  [
                    "colorName" => "Lucerne Blue / Sapphire Black",
                    "price" => null,
                    "image" => "/images/custom-collors/lucerneBlueSapphireBlack.jpg",
                    "colorCode" => "color2"
                  ],
                  [
                    "colorName" => "Graphite / Jet Black",
                    "price" => null,
                    "image" => "/images/custom-collors/jetBlackGraphite.jpg",
                    "colorCode" => "color3"
                  ],
                  [
                    "colorName" => "Snowdonia White / Jet Black",
                    "price" => 200,
                    "image" => "/images/custom-collors/snowdoniaWhiteJetBlack.jpg",
                    "colorCode" => "color4"
                  ]
                ],
                "shortSpecInfo" => [
                  "info1" => "660cc Triple Motor",
                  "info2" => "Лидер во категоријата",
                  "info3" => "Прилагодлива 'Showa' суспензија"
                ],
                "subFamilyPromo" => [
                  "title" => "TIGER SPORT 660",
                  "desc" => "Првиот избор за многу корисници, со три-цилиндарски мотор, неверојатен комфорт, перформантен, искористлив и агилен, стот тоа со најниски трошоци за одржување во класата. Цени од €9,590.00"
                ]
              ],
        ];

        $motorcycleDataSix = [
            [
                "title" => "Tiger 850 Sport",
                "model" => "tiger-850-sport",
                "category" => "adventure",
                "subFamilyCategory" => "tiger-850-sport",
                "edition" => "adventure",
                "price" => 12890,
                "specs" => [
                  "cc" => 398,
                  "hp" => 20,
                  "torque" => 37.5,
                  "horsePower" => 40,
                  "serviceInterval" => "16.000km",
                  "motorType" => "TR"
                ],
                "gallery" => [
                  "modelImage" => [
                    "src" => "/images/adventure/tigerSport850/tigerSport850DiabloRed.png",
                    "alt" => "Tiger 850 Sport"
                  ],
                  "promoYoutubeVideo" => [
                    "src" => "https =>//www.youtube.com/embed/dGfqpR5bwyM",
                    "alt" => "Tiger 850 Youtbe Video"
                  ]
                ],
                "bikeCollorPalletteGallery" => [
                  "default" => "/images/adventure/tigerSport850/tigerSport850DiabloRed.png",
                  "color1" => "/images/adventure/tigerSport850/tigerSport850DiabloRed.png",
                  "color1Reversed" => "/images/adventure/tigerSport850/tigerSport850DiabloRedReversed.png",
                  "color2" => "/images/adventure/tigerSport850/tigerSport850GraphiteJetBlack.png",
                  "color2Reversed" => "/images/adventure/tigerSport850/tigerSport850GraphiteJetBlackReversed.png"
                ],
                "customizationColors" => [
                  [
                    "colorName" => "Graphite Diablo Red",
                    "price" => 200,
                    "image" => "/images/custom-collors/graphiteDiabloRed.jpg",
                    "colorCode" => "color1"
                  ],
                  [
                    "colorName" => "Graphite / Jet Black",
                    "price" => 200,
                    "image" => "/images/custom-collors/graphiteJetBlack.jpg",
                    "colorCode" => "color2"
                  ]
                ],
                "shortSpecInfo" => [
                  "info1" => "850cc T-plane Triple Motor",
                  "info2" => "Патнички мотор со авантуристички дух",
                  "info3" => "20 литарски резервоар"
                ],
                "features" => [
                  [
                    "title" => "Мотор",
                    "desc" => "850сс triple мотор со иновативна Т-радалица (EURO 5 Стандарди)"
                  ],
                  [
                    "title" => "Compliance",
                    "desc" => "A2 compliant (Accessory fit conversion kit)"
                  ],
                  [
                    "title" => "Квачило",
                    "desc" => "Slip & assist квачило"
                  ],
                  [
                    "title" => "Систем за Пролизгување",
                    "desc" => "Ride-by-wire со автоматски систем за пролизгување"
                  ],
                  [
                    "title" => "Мод на работа",
                    "desc" => "2 модуса на работа (нормално и за дожд)"
                  ],
                  [
                    "title" => "Суспензија",
                    "desc" => "Marzocchi Гасна Суспензија, со можност за прилагодување"
                  ],
                  [
                    "title" => "Сопирачки",
                    "desc" => "Brembo Stylema сопирачки систем со двојни 320мм дискови"
                  ],
                  [
                    "title" => "ИНструментна Плоча",
                    "desc" => "5” TFТ инструментна плоча"
                  ],
                  [
                    "title" => "Светло",
                    "desc" => "LED главни и дневни светла"
                  ],
                  [
                    "title" => "Ветробранско Стакло",
                    "desc" => "Заштитно стакло, лесно прилагодливо"
                  ],
                  [
                    "title" => "Гаранција",
                    "desc" => "2 Години"
                  ],
                  [
                    "title" => "Сервисен Интервал",
                    "desc" => "2 Години"
                  ]
                ],
                "bikePageCarousell" => [
                  [
                    "title" => "Нов три-цилиндричен мотор со Т-Радалица",
                    "desc" => "Силен карактер и сила на низок обртај и уште поголема моќ од новиот иновативен мотор на Triumph со Т-радалица и уникатна 1, 3, 2 секвенца на палење. Моторот на Tiger 850 испорачува 85РЅ при 8500rpm и 85Nm обртен момент при 6500rpm. .",
                    "image" => "/images/adventure/tigerSport850/tiger850LatestCaro1.avif"
                  ],
                  [
                    "title" => "Мотор кој инспирира самодоверба",
                    "desc" => "Витка силуета, со седло на подесување од 810мм до 830мм и волан кој се прилагодува според вашите потреби, комбинирано со Brembo Stylema системот за сопирање, Marzocchi суспензија и сета можна технологија која е фокусирана на возачот и на тоа да му овозможи на возачот максимална самодоверба и контрола врз моторот.",
                    "image" => "/images/adventure/tigerSport850/tiger850LatesrCaro2.avif"
                  ],
                  [
                    "title" => "Технологија фокусирана на возачот",
                    "desc" => "Внесете се во секое возење со самодоверба со одлизни перформанси и чувство на сигурност благодарејки на Tiger 850 Sport сигурносна технологија, како најновиот ABS систем и систем за пролизгување кој се прилагодува според вашите потреби. Моќен а сепак лабав авантуристички мотор.",
                    "image" => "/images/adventure/tigerSport850/tiger850LatestCaro3.avif"
                  ],
                  [
                    "title" => "TFT Екран",
                    "desc" => "5' инчен екран во боја со минималистички стил кои ви ги дава на дофат сите потребни информации, доволно брзо за да немора да го тргнете погледот од патот.",
                    "image" => "/images/adventure/tigerSport850/tiger850LatestCaro4.avif"
                  ],
                  [
                    "title" => "2 мода на работа",
                    "desc" => "На располагање се два мода на работа. Нормален и мод за дожд. Заедно со системите за пролизгување и системот за асистенција при апликација на гас се грижат за сигурна авантура.",
                    "image" => "/images/adventure/tigerSport850/tiger850LatestCarо5.avif"
                  ],
                  [
                    "title" => "LED светла насекаде",
                    "desc" => "Прекрасно лесно-одржувачко LED светло го краси предниот крај на Tiger 850 Sport.Истото дава префинет изглед и ви овозможува чиста визија за тоа што ќе се најде пред вас. Нуди максимално осветлување на патиштата како и прекрасни LED дневни светла.",
                    "image" => "/images/adventure/tigerSport850/tiger850LatestCaro6.avif"
                  ],
                  [
                    "title" => "Квачило кое работи за вас",
                    "desc" => "Квачилото ви асистира при возењето на Tiger 850 Sport. Ви го олеснува стисокот што овозможува за подолга и по лесна авантура, дури и во градските средини каде запирањето е честа случка.",
                    "image" => "/images/adventure/tigerSport850/tiger850LatestCaro7.avif"
                  ],
                  [
                    "title" => "Подесувачко Ветробранско Стакло",
                    "desc" => "Скријте се од ветрот со помош на Ветробранското Стакло кое се прилагодува според вашите потреби со помош на една-рака и при возење.",
                    "image" => "/images/adventure/tigerSport850/tiger850LatestCaro8.avif"
                  ],
                  [
                    "title" => "Систем за сопирање на Brembo",
                    "desc" => "Нај-добрата, лесна, и компактна серија на Brembo Stylema клешти за сопирање со 320мм дискови ви дава самодоверба каде и да помислите.",
                    "image" => "/images/adventure/tigerSport850/tiger850LatestCaro9.avif"
                  ],
                  [
                    "title" => "Авантуристички Стил",
                    "desc" => "Off-road перформанси кои импресионираат споени со авантуристичка силуета со агресивни линии, детали и Tiger 850 Sport палетата на бои, дава рефиниран но сепак спортски, издржлив карактер кој е спремен за авантура.",
                    "image" => "/images/adventure/tigerSport850/tiger850LatestCaro10.avif"
                  ],
                  [
                    "title" => "20 литарски резервоар",
                    "desc" => "20 литарскиот резервоар ви овозможува повеќе возење а помалку време изгубено на бензиските станици.",
                    "image" => "/images/adventure/tigerSport850/tiger850LatestCaro11.avif"
                  ]
                ],
                "subFamilyPromo" => [
                  "title" => "TIGER 850 SPORT",
                  "desc" => "Изработен за секој предизвик - со целиот можен карактер, перформанси и агилност на еден Tiger мотор, и силуета по која сите се вртат и адаптабилност за сечии потреби. Цени од €12,890.00"
                ],
                "bikePagePromo" => [
                  [
                    "title" => "Ергономија која инспирира самодоверба",
                    "desc" => "Тенката силуета на Tiger 850 Sport, овозможува лесен контакт со површината на која возите. Лесната шасија, прилагодливите седло и волан, го подобруваат комодитетот и самодовербата.",
                    "image" => "/images/adventure/tigerSport850/tiger850BikePagePromo1.avif"
                  ]
                ]
              ],
        ];

        $motorcycleDataSeven = [
            [
                "title" => "Tiger 1200 GT PRO",
                "model" => "tiger-1200-gt-pro-2022",
                "category" => "adventure",
                "subFamilyCategory" => "tiger-1200-gt",
                "edition" => "adventure",
                "price" => 20990,
                "specs" => [
                  "cc" => 398,
                  "hp" => 20,
                  "torque" => 37.5,
                  "horsePower" => 40,
                  "serviceInterval" => "16.000km",
                  "motorType" => "TR"
                ],
                "gallery" => [
                  "modelImage" => [
                    "src" => "/images/adventure/tiger1200GTPRO/tiger1200GTPROModelImage.png",
                    "alt" => "Tiger 1200 GT PRO"
                  ],
                  "promoYoutubeVideo" => [
                    "src" => "https =>//www.youtube.com/embed/dGfqpR5bwyM",
                    "alt" => "Tiger 850 Youtbe Video"
                  ]
                ],
                "bikeCollorPalletteGallery" => [
                  "default" => "/images/adventure/tiger1200GTPRO/tiger1200GTPROModelImage.png",
                  "color1" => "/images/adventure/tiger1200GTPRO/tiger1200GTPROModelImage.png",
                  "color1Reversed" => "/images/adventure/tiger1200GTPRO/tiger1200GTPROColor1Reversed.png",
                  "color2" => "/images/adventure/tiger1200GTPRO/tiger1200GTPROColor2.png",
                  "color2Reversed" => "/images/adventure/tiger1200GTPRO/tiger1200GTPROColor2Reversed.png",
                  "color3" => "/images/adventure/tiger1200GTPRO/tiger1200GTPROColor3.png",
                  "color3Reversed" => "/images/adventure/tiger1200GTPRO/tiger1200GTPROColor3Reversed.png"
                ],
                "customizationColors" => [
                  [
                    "colorName" => "Snowdonia White",
                    "price" => null,
                    "image" => "/images/custom-collors/snowdoniaWhite.jpg",
                    "colorCode" => "color1"
                  ],
                  [
                    "colorName" => "Saphire Black",
                    "price" => 200,
                    "image" => "/images/custom-collors/sapphireBlack.jpg",
                    "colorCode" => "color2"
                  ],
                  [
                    "colorName" => "Lucerne Blue",
                    "price" => 200,
                    "image" => "/images/custom-collors/lucerneBlue.jpg",
                    "colorCode" => "color3"
                  ]
                ],
                "shortSpecInfo" => [
                  "info1" => "1,160cc T-plane Triple Motor",
                  "info2" => "20 литарски резервоар",
                  "info3" => "3 години гаранција"
                ],
                "features" => [
                  [
                    "title" => "Мотор",
                    "desc" => "850сс triple мотор со иновативна Т-радалица (EURO 5 Стандарди)"
                  ],
                  [
                    "title" => "Compliance",
                    "desc" => "A2 compliant (Accessory fit conversion kit)"
                  ],
                  [
                    "title" => "Квачило",
                    "desc" => "Slip & assist квачило"
                  ],
                  [
                    "title" => "Систем за Пролизгување",
                    "desc" => "Ride-by-wire со автоматски систем за пролизгување"
                  ],
                  [
                    "title" => "Мод на работа",
                    "desc" => "2 модуса на работа (нормално и за дожд)"
                  ],
                  [
                    "title" => "Суспензија",
                    "desc" => "Marzocchi Гасна Суспензија, со можност за прилагодување"
                  ],
                  [
                    "title" => "Сопирачки",
                    "desc" => "Brembo Stylema сопирачки систем со двојни 320мм дискови"
                  ],
                  [
                    "title" => "ИНструментна Плоча",
                    "desc" => "5” TFТ инструментна плоча"
                  ],
                  [
                    "title" => "Светло",
                    "desc" => "LED главни и дневни светла"
                  ],
                  [
                    "title" => "Ветробранско Стакло",
                    "desc" => "Заштитно стакло, лесно прилагодливо"
                  ],
                  [
                    "title" => "Гаранција",
                    "desc" => "2 Години"
                  ],
                  [
                    "title" => "Сервисен Интервал",
                    "desc" => "2 Години"
                  ]
                ],
                "bikePageCarousell" => [
                  [
                    "title" => "Нов три-цилиндричен мотор со Т-Радалица",
                    "desc" => "Силен карактер и сила на низок обртај и уште поголема моќ од новиот иновативен мотор на Triumph со Т-радалица и уникатна 1, 3, 2 секвенца на палење. Моторот на Tiger 850 испорачува 85РЅ при 8500rpm и 85Nm обртен момент при 6500rpm. .",
                    "image" => "/images/adventure/tigerSport850/tiger850LatestCaro1.avif"
                  ],
                  [
                    "title" => "Мотор кој инспирира самодоверба",
                    "desc" => "Витка силуета, со седло на подесување од 810мм до 830мм и волан кој се прилагодува според вашите потреби, комбинирано со Brembo Stylema системот за сопирање, Marzocchi суспензија и сета можна технологија која е фокусирана на возачот и на тоа да му овозможи на возачот максимална самодоверба и контрола врз моторот.",
                    "image" => "/images/adventure/tigerSport850/tiger850LatesrCaro2.avif"
                  ],
                  [
                    "title" => "Технологија фокусирана на возачот",
                    "desc" => "Внесете се во секое возење со самодоверба со одлизни перформанси и чувство на сигурност благодарејки на Tiger 850 Sport сигурносна технологија, како најновиот ABS систем и систем за пролизгување кој се прилагодува според вашите потреби. Моќен а сепак лабав авантуристички мотор.",
                    "image" => "/images/adventure/tigerSport850/tiger850LatestCaro3.avif"
                  ],
                  [
                    "title" => "TFT Екран",
                    "desc" => "5' инчен екран во боја со минималистички стил кои ви ги дава на дофат сите потребни информации, доволно брзо за да немора да го тргнете погледот од патот.",
                    "image" => "/images/adventure/tigerSport850/tiger850LatestCaro4.avif"
                  ],
                  [
                    "title" => "2 мода на работа",
                    "desc" => "На располагање се два мода на работа. Нормален и мод за дожд. Заедно со системите за пролизгување и системот за асистенција при апликација на гас се грижат за сигурна авантура.",
                    "image" => "/images/adventure/tigerSport850/tiger850LatestCarо5.avif"
                  ],
                  [
                    "title" => "LED светла насекаде",
                    "desc" => "Прекрасно лесно-одржувачко LED светло го краси предниот крај на Tiger 850 Sport.Истото дава префинет изглед и ви овозможува чиста визија за тоа што ќе се најде пред вас. Нуди максимално осветлување на патиштата како и прекрасни LED дневни светла.",
                    "image" => "/images/adventure/tigerSport850/tiger850LatestCaro6.avif"
                  ],
                  [
                    "title" => "Квачило кое работи за вас",
                    "desc" => "Квачилото ви асистира при возењето на Tiger 850 Sport. Ви го олеснува стисокот што овозможува за подолга и по лесна авантура, дури и во градските средини каде запирањето е честа случка.",
                    "image" => "/images/adventure/tigerSport850/tiger850LatestCaro7.avif"
                  ],
                  [
                    "title" => "Подесувачко Ветробранско Стакло",
                    "desc" => "Скријте се од ветрот со помош на Ветробранското Стакло кое се прилагодува според вашите потреби со помош на една-рака и при возење.",
                    "image" => "/images/adventure/tigerSport850/tiger850LatestCaro8.avif"
                  ],
                  [
                    "title" => "Систем за сопирање на Brembo",
                    "desc" => "Нај-добрата, лесна, и компактна серија на Brembo Stylema клешти за сопирање со 320мм дискови ви дава самодоверба каде и да помислите.",
                    "image" => "/images/adventure/tigerSport850/tiger850LatestCaro9.avif"
                  ],
                  [
                    "title" => "Авантуристички Стил",
                    "desc" => "Off-road перформанси кои импресионираат споени со авантуристичка силуета со агресивни линии, детали и Tiger 850 Sport палетата на бои, дава рефиниран но сепак спортски, издржлив карактер кој е спремен за авантура.",
                    "image" => "/images/adventure/tigerSport850/tiger850LatestCaro10.avif"
                  ],
                  [
                    "title" => "20 литарски резервоар",
                    "desc" => "20 литарскиот резервоар ви овозможува повеќе возење а помалку време изгубено на бензиските станици.",
                    "image" => "/images/adventure/tigerSport850/tiger850LatestCaro11.avif"
                  ]
                ],
                "subFamilyPromo" => [
                  "title" => "Tiger 1200 GT PRO",
                  "desc" => "Најдобриот во класата, GT Pro ги носи технологијата, возењето и спецификациите за оваа серија на ново ниво. Сега доаѓа и со новиот Active Preload Reduction мод кој овозможува прилагодлива суспензија.Цени од => €20,990.00"
                ],
                "bikePagePromo" => [
                  [
                    "title" => "Ергономија која инспирира самодоверба",
                    "desc" => "Тенката силуета на Tiger 850 Sport, овозможува лесен контакт со површината на која возите. Лесната шасија, прилагодливите седло и волан, го подобруваат комодитетот и самодовербата.",
                    "image" => "/images/adventure/tigerSport850/tiger850BikePagePromo1.avif"
                  ]
                ]
              ]
        ];

        $motorcycleDataEight = [
            [
                "title" => "Tiger 1200 GT Explorer",
                "model" => "tiger-1200-gt-explorer-2022",
                "category" => "adventure",
                "subFamilyCategory" => "tiger-1200-gt",
                "edition" => "adventure",
                "price" => 22990,
                "specs" => [
                  "cc" => 398,
                  "hp" => 20,
                  "torque" => 37.5,
                  "horsePower" => 40,
                  "serviceInterval" => "16.000km",
                  "motorType" => "TR"
                ],
                "gallery" => [
                  "modelImage" => [
                    "src" => "/images/adventure/tiger1200GtExplorerModel.png",
                    "alt" => "Tiger 1200 GT Explorer"
                  ],
                  "promoYoutubeVideo" => [
                    "src" => "https =>//www.youtube.com/embed/dGfqpR5bwyM",
                    "alt" => "Tiger 850 Youtbe Video"
                  ]
                ],
                "bikeCollorPalletteGallery" => [
                  "default" => "/images/adventure/tiger1200GTExplorer/tiger1200GTExplorerSnowdoniaWhite.png",
                  "color1" => "/images/adventure/tiger1200GTExplorer/tiger1200GTExplorerSnowdoniaWhite.png",
                  "color1Reversed" => "/images/adventure/tiger1200GTExplorer/tiger1200GTExplorerSnowdoniaWhiteReversed.png",
                  "color2" => "/images/adventure/tiger1200GTExplorer/tiger1200GTExplorerSaphireBlack.png",
                  "color2Reversed" => "/images/adventure/tiger1200GTExplorer/tiger1200GTExplorerSaphireBlackReversed.png",
                  "color3" => "/images/adventure/tiger1200GTExplorer/tiger1200GTExplorerLucerneBlue.png",
                  "color3Reversed" => "/images/adventure/tiger1200GTExplorer/tiger1200GTExplorerLucerneBlueReversed.png"
                ],
                "customizationColors" => [
                  [
                    "colorName" => "Snowdonia White",
                    "price" => null,
                    "image" => "/images/custom-collors/snowdoniaWhite.jpg",
                    "colorCode" => "color1"
                  ],
                  [
                    "colorName" => "Saphire Black",
                    "price" => 200,
                    "image" => "/images/custom-collors/sapphireBlack.jpg",
                    "colorCode" => "color2"
                  ],
                  [
                    "colorName" => "Lucerne Blue",
                    "price" => 300,
                    "image" => "/images/custom-collors/lucerneBlue.jpg",
                    "colorCode" => "color3"
                  ]
                ],
                "shortSpecInfo" => [
                  "info1" => "1,160cc T-plane Triple Motor",
                  "info2" => "30 литарски резервоар",
                  "info3" => "3 години гаранција"
                ],
                "features" => [
                  [
                    "title" => "Мотор",
                    "desc" => "850сс triple мотор со иновативна Т-радалица (EURO 5 Стандарди)"
                  ],
                  [
                    "title" => "Compliance",
                    "desc" => "A2 compliant (Accessory fit conversion kit)"
                  ],
                  [
                    "title" => "Квачило",
                    "desc" => "Slip & assist квачило"
                  ],
                  [
                    "title" => "Систем за Пролизгување",
                    "desc" => "Ride-by-wire со автоматски систем за пролизгување"
                  ],
                  [
                    "title" => "Мод на работа",
                    "desc" => "2 модуса на работа (нормално и за дожд)"
                  ],
                  [
                    "title" => "Суспензија",
                    "desc" => "Marzocchi Гасна Суспензија, со можност за прилагодување"
                  ],
                  [
                    "title" => "Сопирачки",
                    "desc" => "Brembo Stylema сопирачки систем со двојни 320мм дискови"
                  ],
                  [
                    "title" => "ИНструментна Плоча",
                    "desc" => "5” TFТ инструментна плоча"
                  ],
                  [
                    "title" => "Светло",
                    "desc" => "LED главни и дневни светла"
                  ],
                  [
                    "title" => "Ветробранско Стакло",
                    "desc" => "Заштитно стакло, лесно прилагодливо"
                  ],
                  [
                    "title" => "Гаранција",
                    "desc" => "2 Години"
                  ],
                  [
                    "title" => "Сервисен Интервал",
                    "desc" => "2 Години"
                  ]
                ],
                "bikePageCarousell" => [
                  [
                    "title" => "Нов три-цилиндричен мотор со Т-Радалица",
                    "desc" => "Силен карактер и сила на низок обртај и уште поголема моќ од новиот иновативен мотор на Triumph со Т-радалица и уникатна 1, 3, 2 секвенца на палење. Моторот на Tiger 850 испорачува 85РЅ при 8500rpm и 85Nm обртен момент при 6500rpm. .",
                    "image" => "/images/adventure/tigerSport850/tiger850LatestCaro1.avif"
                  ],
                  [
                    "title" => "Мотор кој инспирира самодоверба",
                    "desc" => "Витка силуета, со седло на подесување од 810мм до 830мм и волан кој се прилагодува според вашите потреби, комбинирано со Brembo Stylema системот за сопирање, Marzocchi суспензија и сета можна технологија која е фокусирана на возачот и на тоа да му овозможи на возачот максимална самодоверба и контрола врз моторот.",
                    "image" => "/images/adventure/tigerSport850/tiger850LatesrCaro2.avif"
                  ],
                  [
                    "title" => "Технологија фокусирана на возачот",
                    "desc" => "Внесете се во секое возење со самодоверба со одлизни перформанси и чувство на сигурност благодарејки на Tiger 850 Sport сигурносна технологија, како најновиот ABS систем и систем за пролизгување кој се прилагодува според вашите потреби. Моќен а сепак лабав авантуристички мотор.",
                    "image" => "/images/adventure/tigerSport850/tiger850LatestCaro3.avif"
                  ],
                  [
                    "title" => "TFT Екран",
                    "desc" => "5' инчен екран во боја со минималистички стил кои ви ги дава на дофат сите потребни информации, доволно брзо за да немора да го тргнете погледот од патот.",
                    "image" => "/images/adventure/tigerSport850/tiger850LatestCaro4.avif"
                  ],
                  [
                    "title" => "2 мода на работа",
                    "desc" => "На располагање се два мода на работа. Нормален и мод за дожд. Заедно со системите за пролизгување и системот за асистенција при апликација на гас се грижат за сигурна авантура.",
                    "image" => "/images/adventure/tigerSport850/tiger850LatestCarо5.avif"
                  ],
                  [
                    "title" => "LED светла насекаде",
                    "desc" => "Прекрасно лесно-одржувачко LED светло го краси предниот крај на Tiger 850 Sport.Истото дава префинет изглед и ви овозможува чиста визија за тоа што ќе се најде пред вас. Нуди максимално осветлување на патиштата како и прекрасни LED дневни светла.",
                    "image" => "/images/adventure/tigerSport850/tiger850LatestCaro6.avif"
                  ],
                  [
                    "title" => "Квачило кое работи за вас",
                    "desc" => "Квачилото ви асистира при возењето на Tiger 850 Sport. Ви го олеснува стисокот што овозможува за подолга и по лесна авантура, дури и во градските средини каде запирањето е честа случка.",
                    "image" => "/images/adventure/tigerSport850/tiger850LatestCaro7.avif"
                  ],
                  [
                    "title" => "Подесувачко Ветробранско Стакло",
                    "desc" => "Скријте се од ветрот со помош на Ветробранското Стакло кое се прилагодува според вашите потреби со помош на една-рака и при возење.",
                    "image" => "/images/adventure/tigerSport850/tiger850LatestCaro8.avif"
                  ],
                  [
                    "title" => "Систем за сопирање на Brembo",
                    "desc" => "Нај-добрата, лесна, и компактна серија на Brembo Stylema клешти за сопирање со 320мм дискови ви дава самодоверба каде и да помислите.",
                    "image" => "/images/adventure/tigerSport850/tiger850LatestCaro9.avif"
                  ],
                  [
                    "title" => "Авантуристички Стил",
                    "desc" => "Off-road перформанси кои импресионираат споени со авантуристичка силуета со агресивни линии, детали и Tiger 850 Sport палетата на бои, дава рефиниран но сепак спортски, издржлив карактер кој е спремен за авантура.",
                    "image" => "/images/adventure/tigerSport850/tiger850LatestCaro10.avif"
                  ],
                  [
                    "title" => "20 литарски резервоар",
                    "desc" => "20 литарскиот резервоар ви овозможува повеќе возење а помалку време изгубено на бензиските станици.",
                    "image" => "/images/adventure/tigerSport850/tiger850LatestCaro11.avif"
                  ]
                ],
                "subFamilyPromo" => [
                  "title" => "Tiger 1200 GT Explorer",
                  "desc" => "GT Explorer има 30 литарски резервоар и ги поставува стандардите за транс-континентални авантури, притоа ги понудува најдобрите спецификации во оваа серија на мотори. Сега доаѓа и со новиот Active Preload Reduction мод кој овозможува прилагодлива суспензија. Цени од => €22,990.00"
                ],
                "bikePagePromo" => [
                  [
                    "title" => "Ергономија која инспирира самодоверба",
                    "desc" => "Тенката силуета на Tiger 850 Sport, овозможува лесен контакт со површината на која возите. Лесната шасија, прилагодливите седло и волан, го подобруваат комодитетот и самодовербата.",
                    "image" => "/images/adventure/tigerSport850/tiger850BikePagePromo1.avif"
                  ]
                ]
              ]
        ];


        $motorcycleDataNine = [
            [
                "title" => "Tiger 1200 Rally Pro",
                "model" => "tiger-1200-rally-pro-2022",
                "category" => "adventure",
                "subFamilyCategory" => "tiger-1200-rally",
                "edition" => "adventure",
                "price" => 21990,
                "specs" => [
                  "cc" => 398,
                  "hp" => 20,
                  "torque" => 37.5,
                  "horsePower" => 40,
                  "serviceInterval" => "16.000km",
                  "motorType" => "TR"
                ],
                "gallery" => [
                  "modelImage" => [
                    "src" => "/images/adventure/tiger1200GTPRO/tiger1200GTPROModelImage.png",
                    "alt" => "Tiger 1200 Rally Pro"
                  ],
                  "promoYoutubeVideo" => [
                    "src" => "https =>//www.youtube.com/embed/dGfqpR5bwyM",
                    "alt" => "Tiger 850 Youtbe Video"
                  ]
                ],
                "bikeCollorPalletteGallery" => [
                  "default" => "/images/adventure/tiger1200RallyPro/tiger1200RallyProSnowdoniaWhite.png",
                  "color1" => "/images/adventure/tiger1200RallyPro/tiger1200RallyProSnowdoniaWhite.png",
                  "color1Reversed" => "/images/adventure/tiger1200RallyPro/tiger1200RallyProSnowdoniaWhiteReversed.png",
                  "color2" => "/images/adventure/tiger1200RallyPro/tiger1200RallyProBlack.png",
                  "color2Reversed" => "/images/adventure/tiger1200RallyPro/tiger1200RallyProBlackReversed.png",
                  "color3" => "/images/adventure/tiger1200RallyPro/tiger1200RallyProMattKhaki.png",
                  "color3Reversed" => "/images/adventure/tiger1200RallyPro/tiger1200RallyProMattKhakiReversed.png"
                ],
                "customizationColors" => [
                  [
                    "colorName" => "Snowdonia White",
                    "price" => null,
                    "image" => "/images/custom-collors/snowdoniaWhite.jpg",
                    "colorCode" => "color1"
                  ],
                  [
                    "colorName" => "Saphire Black",
                    "price" => 200,
                    "image" => "/images/custom-collors/sapphireBlack.jpg",
                    "colorCode" => "color2"
                  ],
                  [
                    "colorName" => "Matt Khaki",
                    "price" => 300,
                    "image" => "/images/custom-collors/mattKhaki.jpg",
                    "colorCode" => "color3"
                  ]
                ],
                "shortSpecInfo" => [
                  "info1" => "1,160cc T-plane Triple Motor",
                  "info2" => "20 литарски резервоар",
                  "info3" => "3 години гаранција"
                ],
                "features" => [
                  [
                    "title" => "Мотор",
                    "desc" => "850сс triple мотор со иновативна Т-радалица (EURO 5 Стандарди)"
                  ],
                  [
                    "title" => "Compliance",
                    "desc" => "A2 compliant (Accessory fit conversion kit)"
                  ],
                  [
                    "title" => "Квачило",
                    "desc" => "Slip & assist квачило"
                  ],
                  [
                    "title" => "Систем за Пролизгување",
                    "desc" => "Ride-by-wire со автоматски систем за пролизгување"
                  ],
                  [
                    "title" => "Мод на работа",
                    "desc" => "2 модуса на работа (нормално и за дожд)"
                  ],
                  [
                    "title" => "Суспензија",
                    "desc" => "Marzocchi Гасна Суспензија, со можност за прилагодување"
                  ],
                  [
                    "title" => "Сопирачки",
                    "desc" => "Brembo Stylema сопирачки систем со двојни 320мм дискови"
                  ],
                  [
                    "title" => "ИНструментна Плоча",
                    "desc" => "5” TFТ инструментна плоча"
                  ],
                  [
                    "title" => "Светло",
                    "desc" => "LED главни и дневни светла"
                  ],
                  [
                    "title" => "Ветробранско Стакло",
                    "desc" => "Заштитно стакло, лесно прилагодливо"
                  ],
                  [
                    "title" => "Гаранција",
                    "desc" => "2 Години"
                  ],
                  [
                    "title" => "Сервисен Интервал",
                    "desc" => "2 Години"
                  ]
                ],
                "bikePageCarousell" => [
                  [
                    "title" => "Нов три-цилиндричен мотор со Т-Радалица",
                    "desc" => "Силен карактер и сила на низок обртај и уште поголема моќ од новиот иновативен мотор на Triumph со Т-радалица и уникатна 1, 3, 2 секвенца на палење. Моторот на Tiger 850 испорачува 85РЅ при 8500rpm и 85Nm обртен момент при 6500rpm. .",
                    "image" => "/images/adventure/tigerSport850/tiger850LatestCaro1.avif"
                  ],
                  [
                    "title" => "Мотор кој инспирира самодоверба",
                    "desc" => "Витка силуета, со седло на подесување од 810мм до 830мм и волан кој се прилагодува според вашите потреби, комбинирано со Brembo Stylema системот за сопирање, Marzocchi суспензија и сета можна технологија која е фокусирана на возачот и на тоа да му овозможи на возачот максимална самодоверба и контрола врз моторот.",
                    "image" => "/images/adventure/tigerSport850/tiger850LatesrCaro2.avif"
                  ],
                  [
                    "title" => "Технологија фокусирана на возачот",
                    "desc" => "Внесете се во секое возење со самодоверба со одлизни перформанси и чувство на сигурност благодарејки на Tiger 850 Sport сигурносна технологија, како најновиот ABS систем и систем за пролизгување кој се прилагодува според вашите потреби. Моќен а сепак лабав авантуристички мотор.",
                    "image" => "/images/adventure/tigerSport850/tiger850LatestCaro3.avif"
                  ],
                  [
                    "title" => "TFT Екран",
                    "desc" => "5' инчен екран во боја со минималистички стил кои ви ги дава на дофат сите потребни информации, доволно брзо за да немора да го тргнете погледот од патот.",
                    "image" => "/images/adventure/tigerSport850/tiger850LatestCaro4.avif"
                  ],
                  [
                    "title" => "2 мода на работа",
                    "desc" => "На располагање се два мода на работа. Нормален и мод за дожд. Заедно со системите за пролизгување и системот за асистенција при апликација на гас се грижат за сигурна авантура.",
                    "image" => "/images/adventure/tigerSport850/tiger850LatestCarо5.avif"
                  ],
                  [
                    "title" => "LED светла насекаде",
                    "desc" => "Прекрасно лесно-одржувачко LED светло го краси предниот крај на Tiger 850 Sport.Истото дава префинет изглед и ви овозможува чиста визија за тоа што ќе се најде пред вас. Нуди максимално осветлување на патиштата како и прекрасни LED дневни светла.",
                    "image" => "/images/adventure/tigerSport850/tiger850LatestCaro6.avif"
                  ],
                  [
                    "title" => "Квачило кое работи за вас",
                    "desc" => "Квачилото ви асистира при возењето на Tiger 850 Sport. Ви го олеснува стисокот што овозможува за подолга и по лесна авантура, дури и во градските средини каде запирањето е честа случка.",
                    "image" => "/images/adventure/tigerSport850/tiger850LatestCaro7.avif"
                  ],
                  [
                    "title" => "Подесувачко Ветробранско Стакло",
                    "desc" => "Скријте се од ветрот со помош на Ветробранското Стакло кое се прилагодува според вашите потреби со помош на една-рака и при возење.",
                    "image" => "/images/adventure/tigerSport850/tiger850LatestCaro8.avif"
                  ],
                  [
                    "title" => "Систем за сопирање на Brembo",
                    "desc" => "Нај-добрата, лесна, и компактна серија на Brembo Stylema клешти за сопирање со 320мм дискови ви дава самодоверба каде и да помислите.",
                    "image" => "/images/adventure/tigerSport850/tiger850LatestCaro9.avif"
                  ],
                  [
                    "title" => "Авантуристички Стил",
                    "desc" => "Off-road перформанси кои импресионираат споени со авантуристичка силуета со агресивни линии, детали и Tiger 850 Sport палетата на бои, дава рефиниран но сепак спортски, издржлив карактер кој е спремен за авантура.",
                    "image" => "/images/adventure/tigerSport850/tiger850LatestCaro10.avif"
                  ],
                  [
                    "title" => "20 литарски резервоар",
                    "desc" => "20 литарскиот резервоар ви овозможува повеќе возење а помалку време изгубено на бензиските станици.",
                    "image" => "/images/adventure/tigerSport850/tiger850LatestCaro11.avif"
                  ]
                ],
                "subFamilyPromo" => [
                  "title" => "TIGER 1200 Rally PRo",
                  "desc" => "On dirt or tarmac, the Rally Pro combines capability, comfort and performance for the ultimate off-road adventure.Now including a new Active Preload Reduction Mode for advanced suspension preload adjustment.Price From €21,990.00"
                ],
                "bikePagePromo" => [
                  [
                    "title" => "Ергономија која инспирира самодоверба",
                    "desc" => "Тенката силуета на Tiger 850 Sport, овозможува лесен контакт со површината на која возите. Лесната шасија, прилагодливите седло и волан, го подобруваат комодитетот и самодовербата.",
                    "image" => "/images/adventure/tigerSport850/tiger850BikePagePromo1.avif"
                  ]
                ]
              ]
        ];


        $motorcycleDataTen = [
            [
                "title" => "Tiger 1200 Rally Explorer",
                "model" => "tiger-1200-rally-explorer-2022",
                "category" => "adventure",
                "subFamilyCategory" => "tiger-1200-rally",
                "edition" => "adventure",
                "price" => 23990,
                "specs" => [
                  "cc" => 398,
                  "hp" => 20,
                  "torque" => 37.5,
                  "horsePower" => 40,
                  "serviceInterval" => "16.000km",
                  "motorType" => "TR"
                ],
                "gallery" => [
                  "modelImage" => [
                    "src" => "/images/adventure/tiger1200RallyExplorerModelImage.avif",
                    "alt" => "Tiger 1200 Rally Explorer"
                  ],
                  "promoYoutubeVideo" => [
                    "src" => "https =>//www.youtube.com/embed/dGfqpR5bwyM",
                    "alt" => "Tiger 850 Youtbe Video"
                  ]
                ],
                "bikeCollorPalletteGallery" => [
                  "default" => "/images/adventure/tiger1200RallyExplorer/tiger1200RallyExplorerSnowdonia.png",
                  "color1" => "/images/adventure/tiger1200RallyExplorer/tiger1200RallyExplorerSnowdonia.png",
                  "color1Reversed" => "/images/adventure/tiger1200RallyExplorer/tiger1200RallyExplorerSnowdoniaReversed.png",
                  "color2" => "/images/adventure/tiger1200RallyExplorer/tiger1200RallyExplorerBlack.png",
                  "color2Reversed" => "/images/adventure/tiger1200RallyExplorer/tiger1200RallyExplorerBlackReversed.png",
                  "color3" => "/images/adventure/tiger1200RallyExplorer/tiger1200RallyExplorerKhaki.png",
                  "color3Reversed" => "/images/adventure/tiger1200RallyExplorer/tiger1200RallyExplorerKhakiReversed.png"
                ],
                "customizationColors" => [
                  [
                    "colorName" => "Snowdonia White",
                    "price" => null,
                    "image" => "/images/custom-collors/snowdoniaWhite.jpg",
                    "colorCode" => "color1"
                  ],
                  [
                    "colorName" => "Saphire Black",
                    "price" => 200,
                    "image" => "/images/custom-collors/sapphireBlack.jpg",
                    "colorCode" => "color2"
                  ],
                  [
                    "colorName" => "Matt Khaki",
                    "price" => 300,
                    "image" => "/images/custom-collors/mattKhaki.jpg",
                    "colorCode" => "color3"
                  ]
                ],
                "shortSpecInfo" => [
                  "info1" => "1,160cc T-plane Triple Motor",
                  "info2" => "30 литарски резервоар",
                  "info3" => "3 години гаранција"
                ],
                "features" => [
                  [
                    "title" => "Мотор",
                    "desc" => "850сс triple мотор со иновативна Т-радалица (EURO 5 Стандарди)"
                  ],
                  [
                    "title" => "Compliance",
                    "desc" => "A2 compliant (Accessory fit conversion kit)"
                  ],
                  [
                    "title" => "Квачило",
                    "desc" => "Slip & assist квачило"
                  ],
                  [
                    "title" => "Систем за Пролизгување",
                    "desc" => "Ride-by-wire со автоматски систем за пролизгување"
                  ],
                  [
                    "title" => "Мод на работа",
                    "desc" => "2 модуса на работа (нормално и за дожд)"
                  ],
                  [
                    "title" => "Суспензија",
                    "desc" => "Marzocchi Гасна Суспензија, со можност за прилагодување"
                  ],
                  [
                    "title" => "Сопирачки",
                    "desc" => "Brembo Stylema сопирачки систем со двојни 320мм дискови"
                  ],
                  [
                    "title" => "ИНструментна Плоча",
                    "desc" => "5” TFТ инструментна плоча"
                  ],
                  [
                    "title" => "Светло",
                    "desc" => "LED главни и дневни светла"
                  ],
                  [
                    "title" => "Ветробранско Стакло",
                    "desc" => "Заштитно стакло, лесно прилагодливо"
                  ],
                  [
                    "title" => "Гаранција",
                    "desc" => "2 Години"
                  ],
                  [
                    "title" => "Сервисен Интервал",
                    "desc" => "2 Години"
                  ]
                ],
                "bikePageCarousell" => [
                  [
                    "title" => "Нов три-цилиндричен мотор со Т-Радалица",
                    "desc" => "Силен карактер и сила на низок обртај и уште поголема моќ од новиот иновативен мотор на Triumph со Т-радалица и уникатна 1, 3, 2 секвенца на палење. Моторот на Tiger 850 испорачува 85РЅ при 8500rpm и 85Nm обртен момент при 6500rpm. .",
                    "image" => "/images/adventure/tigerSport850/tiger850LatestCaro1.avif"
                  ],
                  [
                    "title" => "Мотор кој инспирира самодоверба",
                    "desc" => "Витка силуета, со седло на подесување од 810мм до 830мм и волан кој се прилагодува според вашите потреби, комбинирано со Brembo Stylema системот за сопирање, Marzocchi суспензија и сета можна технологија која е фокусирана на возачот и на тоа да му овозможи на возачот максимална самодоверба и контрола врз моторот.",
                    "image" => "/images/adventure/tigerSport850/tiger850LatesrCaro2.avif"
                  ],
                  [
                    "title" => "Технологија фокусирана на возачот",
                    "desc" => "Внесете се во секое возење со самодоверба со одлизни перформанси и чувство на сигурност благодарејки на Tiger 850 Sport сигурносна технологија, како најновиот ABS систем и систем за пролизгување кој се прилагодува според вашите потреби. Моќен а сепак лабав авантуристички мотор.",
                    "image" => "/images/adventure/tigerSport850/tiger850LatestCaro3.avif"
                  ],
                  [
                    "title" => "TFT Екран",
                    "desc" => "5' инчен екран во боја со минималистички стил кои ви ги дава на дофат сите потребни информации, доволно брзо за да немора да го тргнете погледот од патот.",
                    "image" => "/images/adventure/tigerSport850/tiger850LatestCaro4.avif"
                  ],
                  [
                    "title" => "2 мода на работа",
                    "desc" => "На располагање се два мода на работа. Нормален и мод за дожд. Заедно со системите за пролизгување и системот за асистенција при апликација на гас се грижат за сигурна авантура.",
                    "image" => "/images/adventure/tigerSport850/tiger850LatestCarо5.avif"
                  ],
                  [
                    "title" => "LED светла насекаде",
                    "desc" => "Прекрасно лесно-одржувачко LED светло го краси предниот крај на Tiger 850 Sport.Истото дава префинет изглед и ви овозможува чиста визија за тоа што ќе се најде пред вас. Нуди максимално осветлување на патиштата како и прекрасни LED дневни светла.",
                    "image" => "/images/adventure/tigerSport850/tiger850LatestCaro6.avif"
                  ],
                  [
                    "title" => "Квачило кое работи за вас",
                    "desc" => "Квачилото ви асистира при возењето на Tiger 850 Sport. Ви го олеснува стисокот што овозможува за подолга и по лесна авантура, дури и во градските средини каде запирањето е честа случка.",
                    "image" => "/images/adventure/tigerSport850/tiger850LatestCaro7.avif"
                  ],
                  [
                    "title" => "Подесувачко Ветробранско Стакло",
                    "desc" => "Скријте се од ветрот со помош на Ветробранското Стакло кое се прилагодува според вашите потреби со помош на една-рака и при возење.",
                    "image" => "/images/adventure/tigerSport850/tiger850LatestCaro8.avif"
                  ],
                  [
                    "title" => "Систем за сопирање на Brembo",
                    "desc" => "Нај-добрата, лесна, и компактна серија на Brembo Stylema клешти за сопирање со 320мм дискови ви дава самодоверба каде и да помислите.",
                    "image" => "/images/adventure/tigerSport850/tiger850LatestCaro9.avif"
                  ],
                  [
                    "title" => "Авантуристички Стил",
                    "desc" => "Off-road перформанси кои импресионираат споени со авантуристичка силуета со агресивни линии, детали и Tiger 850 Sport палетата на бои, дава рефиниран но сепак спортски, издржлив карактер кој е спремен за авантура.",
                    "image" => "/images/adventure/tigerSport850/tiger850LatestCaro10.avif"
                  ],
                  [
                    "title" => "20 литарски резервоар",
                    "desc" => "20 литарскиот резервоар ви овозможува повеќе возење а помалку време изгубено на бензиските станици.",
                    "image" => "/images/adventure/tigerSport850/tiger850LatestCaro11.avif"
                  ]
                ],
                "subFamilyPromo" => [
                  "title" => "Tiger 1200 Rally Explorer",
                  "desc" => "Refinement with endurance. Setting a new standard, the new Rally Explorer with its 30 liter fuel tank is built for the big adventure.Now including a new Active Preload Reduction Mode for advanced suspension preload adjustment.Price From €23,990.00"
                ],
                "bikePagePromo" => [
                  [
                    "title" => "Ергономија која инспирира самодоверба",
                    "desc" => "Тенката силуета на Tiger 850 Sport, овозможува лесен контакт со површината на која возите. Лесната шасија, прилагодливите седло и волан, го подобруваат комодитетот и самодовербата.",
                    "image" => "/images/adventure/tigerSport850/tiger850BikePagePromo1.avif"
                  ]
                ]
              ]
        ];


        $motorcycleDataEleven = [
            [
                "title" => "Tiger 900 GT Aragon Edition",
                "model" => "gt-aragon-edition-2024",
                "category" => "adventure",
                "subFamilyCategory" => "tiger-900-2023",
                "edition" => "special",
                "price" => 16290,
                "specs" => [
                  "cc" => 398,
                  "hp" => 20,
                  "torque" => 37.5,
                  "horsePower" => 40,
                  "serviceInterval" => "16.000km",
                  "motorType" => "TR"
                ],
                "gallery" => [
                  "modelImage" => [
                    "src" => "/images/adventure/tiger900GtAragonModel.png",
                    "alt" => "Tiger 1200 GT Aragon"
                  ],
                  "promoYoutubeVideo" => [
                    "src" => "https =>//www.youtube.com/embed/dGfqpR5bwyM",
                    "alt" => "Tiger 850 Youtbe Video"
                  ]
                ],
                "bikeCollorPalletteGallery" => [
                  "default" => "/images/adventure/tiger1200GTPRO/tigerSport850ModelImage.png",
                  "color1" => "/images/adventure/tiger1200GTPRO/tigerSport850ModelImage.png",
                  "color1Reversed" => "/images/adventure/tiger1200GTPRO/tiger1200GTPROColor1Reversed.png",
                  "color2" => "/images/adventure/tiger1200GTPRO/tiger1200GTPROColor2.png",
                  "color2Reversed" => "/images/adventure/tiger1200GTPRO/tiger1200GTPROColor2Reversed.png",
                  "color3" => "/images/adventure/tiger1200GTPRO/tiger1200GTPROColor3.png",
                  "color3Reversed" => "/images/adventure/tiger1200GTPRO/tiger1200GTPROColor3Reversed.png"
                ],
                "customizationColors" => [
                  [
                    "colorName" => "Snowdonia White",
                    "price" => null,
                    "image" => "/images/custom-collors/snowdoniaWhite.jpg",
                    "colorCode" => "color1"
                  ],
                  [
                    "colorName" => "Saphire Black",
                    "price" => 200,
                    "image" => "/images/custom-collors/sapphireBlack.jpg",
                    "colorCode" => "color2"
                  ],
                  [
                    "colorName" => "Lucerne Blue",
                    "price" => 200,
                    "image" => "/images/custom-collors/lucerneBlue.jpg",
                    "colorCode" => "color3"
                  ]
                ],
                "shortSpecInfo" => [
                  "info1" => "Нов 900cc три-цилиндричен мотор",
                  "info2" => "Високи спецификации за подобро искуство",
                  "info3" => "Врвна технологија фокусирана на возачот"
                ],
                "features" => [
                  [
                    "title" => "Мотор",
                    "desc" => "850сс triple мотор со иновативна Т-радалица (EURO 5 Стандарди)"
                  ],
                  [
                    "title" => "Compliance",
                    "desc" => "A2 compliant (Accessory fit conversion kit)"
                  ],
                  [
                    "title" => "Квачило",
                    "desc" => "Slip & assist квачило"
                  ],
                  [
                    "title" => "Систем за Пролизгување",
                    "desc" => "Ride-by-wire со автоматски систем за пролизгување"
                  ],
                  [
                    "title" => "Мод на работа",
                    "desc" => "2 модуса на работа (нормално и за дожд)"
                  ],
                  [
                    "title" => "Суспензија",
                    "desc" => "Marzocchi Гасна Суспензија, со можност за прилагодување"
                  ],
                  [
                    "title" => "Сопирачки",
                    "desc" => "Brembo Stylema сопирачки систем со двојни 320мм дискови"
                  ],
                  [
                    "title" => "ИНструментна Плоча",
                    "desc" => "5” TFТ инструментна плоча"
                  ],
                  [
                    "title" => "Светло",
                    "desc" => "LED главни и дневни светла"
                  ],
                  [
                    "title" => "Ветробранско Стакло",
                    "desc" => "Заштитно стакло, лесно прилагодливо"
                  ],
                  [
                    "title" => "Гаранција",
                    "desc" => "2 Години"
                  ],
                  [
                    "title" => "Сервисен Интервал",
                    "desc" => "2 Години"
                  ]
                ],
                "bikePageCarousell" => [
                  [
                    "title" => "Нов три-цилиндричен мотор со Т-Радалица",
                    "desc" => "Силен карактер и сила на низок обртај и уште поголема моќ од новиот иновативен мотор на Triumph со Т-радалица и уникатна 1, 3, 2 секвенца на палење. Моторот на Tiger 850 испорачува 85РЅ при 8500rpm и 85Nm обртен момент при 6500rpm. .",
                    "image" => "/images/adventure/tigerSport850/tiger850LatestCaro1.avif"
                  ],
                  [
                    "title" => "Мотор кој инспирира самодоверба",
                    "desc" => "Витка силуета, со седло на подесување од 810мм до 830мм и волан кој се прилагодува според вашите потреби, комбинирано со Brembo Stylema системот за сопирање, Marzocchi суспензија и сета можна технологија која е фокусирана на возачот и на тоа да му овозможи на возачот максимална самодоверба и контрола врз моторот.",
                    "image" => "/images/adventure/tigerSport850/tiger850LatesrCaro2.avif"
                  ],
                  [
                    "title" => "Технологија фокусирана на возачот",
                    "desc" => "Внесете се во секое возење со самодоверба со одлизни перформанси и чувство на сигурност благодарејки на Tiger 850 Sport сигурносна технологија, како најновиот ABS систем и систем за пролизгување кој се прилагодува според вашите потреби. Моќен а сепак лабав авантуристички мотор.",
                    "image" => "/images/adventure/tigerSport850/tiger850LatestCaro3.avif"
                  ],
                  [
                    "title" => "TFT Екран",
                    "desc" => "5' инчен екран во боја со минималистички стил кои ви ги дава на дофат сите потребни информации, доволно брзо за да немора да го тргнете погледот од патот.",
                    "image" => "/images/adventure/tigerSport850/tiger850LatestCaro4.avif"
                  ],
                  [
                    "title" => "2 мода на работа",
                    "desc" => "На располагање се два мода на работа. Нормален и мод за дожд. Заедно со системите за пролизгување и системот за асистенција при апликација на гас се грижат за сигурна авантура.",
                    "image" => "/images/adventure/tigerSport850/tiger850LatestCarо5.avif"
                  ],
                  [
                    "title" => "LED светла насекаде",
                    "desc" => "Прекрасно лесно-одржувачко LED светло го краси предниот крај на Tiger 850 Sport.Истото дава префинет изглед и ви овозможува чиста визија за тоа што ќе се најде пред вас. Нуди максимално осветлување на патиштата како и прекрасни LED дневни светла.",
                    "image" => "/images/adventure/tigerSport850/tiger850LatestCaro6.avif"
                  ],
                  [
                    "title" => "Квачило кое работи за вас",
                    "desc" => "Квачилото ви асистира при возењето на Tiger 850 Sport. Ви го олеснува стисокот што овозможува за подолга и по лесна авантура, дури и во градските средини каде запирањето е честа случка.",
                    "image" => "/images/adventure/tigerSport850/tiger850LatestCaro7.avif"
                  ],
                  [
                    "title" => "Подесувачко Ветробранско Стакло",
                    "desc" => "Скријте се од ветрот со помош на Ветробранското Стакло кое се прилагодува според вашите потреби со помош на една-рака и при возење.",
                    "image" => "/images/adventure/tigerSport850/tiger850LatestCaro8.avif"
                  ],
                  [
                    "title" => "Систем за сопирање на Brembo",
                    "desc" => "Нај-добрата, лесна, и компактна серија на Brembo Stylema клешти за сопирање со 320мм дискови ви дава самодоверба каде и да помислите.",
                    "image" => "/images/adventure/tigerSport850/tiger850LatestCaro9.avif"
                  ],
                  [
                    "title" => "Авантуристички Стил",
                    "desc" => "Off-road перформанси кои импресионираат споени со авантуристичка силуета со агресивни линии, детали и Tiger 850 Sport палетата на бои, дава рефиниран но сепак спортски, издржлив карактер кој е спремен за авантура.",
                    "image" => "/images/adventure/tigerSport850/tiger850LatestCaro10.avif"
                  ],
                  [
                    "title" => "20 литарски резервоар",
                    "desc" => "20 литарскиот резервоар ви овозможува повеќе возење а помалку време изгубено на бензиските станици.",
                    "image" => "/images/adventure/tigerSport850/tiger850LatestCaro11.avif"
                  ]
                ],
                "subFamilyPromo" => [
                  "title" => "НОВИОТ TIGER 900 GT ARAGON EDITION",
                  "desc" => "Врвниот авантуристички моторцикл од средна зафатнина но фокусиран за патишта. Врвни перформанси, стил и спецификации спремни и за на трка."
                ],
                "bikePagePromo" => [
                  [
                    "title" => "Ергономија која инспирира самодоверба",
                    "desc" => "Тенката силуета на Tiger 850 Sport, овозможува лесен контакт со површината на која возите. Лесната шасија, прилагодливите седло и волан, го подобруваат комодитетот и самодовербата.",
                    "image" => "/images/adventure/tigerSport850/tiger850BikePagePromo1.avif"
                  ]
                ]
              ]
        ];

        $motorcycleDataTwelve = [
            [
                "title" => "Tiger 900 Rally Aragon Edition",
                "model" => "rally-aragon-edition-2024",
                "category" => "adventure",
                "subFamilyCategory" => "tiger-900-2023",
                "edition" => "special",
                "price" => 16990,
                "specs" => [
                  "cc" => 398,
                  "hp" => 20,
                  "torque" => 37.5,
                  "horsePower" => 40,
                  "serviceInterval" => "16.000km",
                  "motorType" => "TR"
                ],
                "gallery" => [
                  "modelImage" => [
                    "src" => "/images/adventure/tiger900RallyAragonModel.png",
                    "alt" => "iger 900 Rally Aragon Edition"
                  ],
                  "promoYoutubeVideo" => [
                    "src" => "https =>//www.youtube.com/embed/dGfqpR5bwyM",
                    "alt" => "Tiger 850 Youtbe Video"
                  ]
                ],
                "bikeCollorPalletteGallery" => [
                  "default" => "/images/adventure/tiger1200GTPRO/tigerSport850ModelImage.png",
                  "color1" => "/images/adventure/tiger1200GTPRO/tigerSport850ModelImage.png",
                  "color1Reversed" => "/images/adventure/tiger1200GTPRO/tiger1200GTPROColor1Reversed.png",
                  "color2" => "/images/adventure/tiger1200GTPRO/tiger1200GTPROColor2.png",
                  "color2Reversed" => "/images/adventure/tiger1200GTPRO/tiger1200GTPROColor2Reversed.png",
                  "color3" => "/images/adventure/tiger1200GTPRO/tiger1200GTPROColor3.png",
                  "color3Reversed" => "/images/adventure/tiger1200GTPRO/tiger1200GTPROColor3Reversed.png"
                ],
                "customizationColors" => [
                  [
                    "colorName" => "Snowdonia White",
                    "price" => null,
                    "image" => "/images/custom-collors/snowdoniaWhite.jpg",
                    "colorCode" => "color1"
                  ],
                  [
                    "colorName" => "Saphire Black",
                    "price" => 200,
                    "image" => "/images/custom-collors/sapphireBlack.jpg",
                    "colorCode" => "color2"
                  ],
                  [
                    "colorName" => "Lucerne Blue",
                    "price" => 200,
                    "image" => "/images/custom-collors/lucerneBlue.jpg",
                    "colorCode" => "color3"
                  ]
                ],
                "shortSpecInfo" => [
                  "info1" => "Нов 900cc три-цилиндричен мотор",
                  "info2" => "Врвна спецификација за екстремни off-road можности",
                  "info3" => "Врвни перформанси и агилност"
                ],
                "subFamilyPromo" => [
                  "title" => "НОВИОТ TIGER 900 RALLY ARAGON EDITION",
                  "desc" => "лидер во класата по спецификации со тркачки перформанси. Tiger 900 Rally Aragon ја ре-дефинира авантурата."
                ],
                "bikePagePromo" => [
                  [
                    "title" => "Ергономија која инспирира самодоверба",
                    "desc" => "Тенката силуета на Tiger 850 Sport, овозможува лесен контакт со површината на која возите. Лесната шасија, прилагодливите седло и волан, го подобруваат комодитетот и самодовербата.",
                    "image" => "/images/adventure/tigerSport850/tiger850BikePagePromo1.avif"
                  ]
                ]
              ]
        ];

        $motorcycleDataThirteen = [
            [
                "title" => "Tiger 900 GT Pro (MY23)",
                "model" => "gt-pro",
                "category" => "adventure",
                "subFamilyCategory" => "tiger-900",
                "edition" => "adventure",
                "price" => 16290,
                "specs" => [
                  "cc" => 398,
                  "hp" => 20,
                  "torque" => 37.5,
                  "horsePower" => 40,
                  "serviceInterval" => "16.000km",
                  "motorType" => "TR"
                ],
                "gallery" => [
                  "modelImage" => [
                    "src" => "/images/adventure/tiger900GtProModel.png",
                    "alt" => "Tiger 900 GT PRo (MY23)"
                  ],
                  "promoYoutubeVideo" => [
                    "src" => "https =>//www.youtube.com/embed/dGfqpR5bwyM",
                    "alt" => "Tiger 850 Youtbe Video"
                  ]
                ],
                "bikeCollorPalletteGallery" => [
                  "default" => "/images/adventure/tiger1200GTPRO/tigerSport850ModelImage.png",
                  "color1" => "/images/adventure/tiger1200GTPRO/tigerSport850ModelImage.png",
                  "color1Reversed" => "/images/adventure/tiger1200GTPRO/tiger1200GTPROColor1Reversed.png",
                  "color2" => "/images/adventure/tiger1200GTPRO/tiger1200GTPROColor2.png",
                  "color2Reversed" => "/images/adventure/tiger1200GTPRO/tiger1200GTPROColor2Reversed.png",
                  "color3" => "/images/adventure/tiger1200GTPRO/tiger1200GTPROColor3.png",
                  "color3Reversed" => "/images/adventure/tiger1200GTPRO/tiger1200GTPROColor3Reversed.png"
                ],
                "customizationColors" => [
                  [
                    "colorName" => "Snowdonia White",
                    "price" => null,
                    "image" => "/images/custom-collors/snowdoniaWhite.jpg",
                    "colorCode" => "color1"
                  ],
                  [
                    "colorName" => "Saphire Black",
                    "price" => 200,
                    "image" => "/images/custom-collors/sapphireBlack.jpg",
                    "colorCode" => "color2"
                  ],
                  [
                    "colorName" => "Lucerne Blue",
                    "price" => 200,
                    "image" => "/images/custom-collors/lucerneBlue.jpg",
                    "colorCode" => "color3"
                  ]
                ],
                "shortSpecInfo" => [
                  "info1" => "Потполно нов 900сс три-цилиндарски мотор",
                  "info2" => "GT спецификација за долги дистанци",
                  "info3" => "Врвна технологија фокусирана на возачот"
                ],
                "subFamilyPromo" => [
                  "title" => "TIGER SPORT 660",
                  "desc" => "Првиот избор за многу корисници, со три-цилиндарски мотор, неверојатен комфорт, перформантен, искористлив и агилен, стот тоа со најниски трошоци за одржување во класата. Цени од €9,590.00"
                ],
                "bikePagePromo" => [
                  [
                    "title" => "Ергономија која инспирира самодоверба",
                    "desc" => "Тенката силуета на Tiger 850 Sport, овозможува лесен контакт со површината на која возите. Лесната шасија, прилагодливите седло и волан, го подобруваат комодитетот и самодовербата.",
                    "image" => "/images/adventure/tigerSport850/tiger850BikePagePromo1.avif"
                  ]
                ]
              ]
        ];

        $motorcycleDataFourteen = [
            [
                "title" => "Tiger 900 Rally Pro (MY23)",
                "model" => "rally-pro",
                "category" => "adventure",
                "subFamilyCategory" => "tiger-900-my23",
                "edition" => "adventure",
                "price" => 16990,
                "specs" => [
                  "cc" => 398,
                  "hp" => 20,
                  "torque" => 37.5,
                  "horsePower" => 40,
                  "serviceInterval" => "16.000km",
                  "motorType" => "TR"
                ],
                "gallery" => [
                  "modelImage" => [
                    "src" => "/images/adventure/tiger900RallyProModel.png",
                    "alt" => "Tiger 900 Rally Pro Edition"
                  ],
                  "promoYoutubeVideo" => [
                    "src" => "https =>//www.youtube.com/embed/dGfqpR5bwyM",
                    "alt" => "Tiger 850 Youtbe Video"
                  ]
                ],
                "bikeCollorPalletteGallery" => [
                  "default" => "/images/adventure/tiger1200GTPRO/tigerSport850ModelImage.png",
                  "color1" => "/images/adventure/tiger1200GTPRO/tigerSport850ModelImage.png",
                  "color1Reversed" => "/images/adventure/tiger1200GTPRO/tiger1200GTPROColor1Reversed.png",
                  "color2" => "/images/adventure/tiger1200GTPRO/tiger1200GTPROColor2.png",
                  "color2Reversed" => "/images/adventure/tiger1200GTPRO/tiger1200GTPROColor2Reversed.png",
                  "color3" => "/images/adventure/tiger1200GTPRO/tiger1200GTPROColor3.png",
                  "color3Reversed" => "/images/adventure/tiger1200GTPRO/tiger1200GTPROColor3Reversed.png"
                ],
                "customizationColors" => [
                  [
                    "colorName" => "Snowdonia White",
                    "price" => null,
                    "image" => "/images/custom-collors/snowdoniaWhite.jpg",
                    "colorCode" => "color1"
                  ],
                  [
                    "colorName" => "Saphire Black",
                    "price" => 200,
                    "image" => "/images/custom-collors/sapphireBlack.jpg",
                    "colorCode" => "color2"
                  ],
                  [
                    "colorName" => "Lucerne Blue",
                    "price" => 200,
                    "image" => "/images/custom-collors/lucerneBlue.jpg",
                    "colorCode" => "color3"
                  ]
                ],
                "shortSpecInfo" => [
                  "info1" => "Потполно нов 900сс три-цилиндарски мотор",
                  "info2" => "Врвна спецификација за екстремни off-road можности",
                  "info3" => "Врвни перформанси и агилност"
                ],
                "subFamilyPromo" => [
                  "title" => "TIGER SPORT 660",
                  "desc" => "Првиот избор за многу корисници, со три-цилиндарски мотор, неверојатен комфорт, перформантен, искористлив и агилен, стот тоа со најниски трошоци за одржување во класата. Цени од €9,590.00"
                ],
                "bikePagePromo" => [
                  [
                    "title" => "Ергономија која инспирира самодоверба",
                    "desc" => "Тенката силуета на Tiger 850 Sport, овозможува лесен контакт со површината на која возите. Лесната шасија, прилагодливите седло и волан, го подобруваат комодитетот и самодовербата.",
                    "image" => "/images/adventure/tigerSport850/tiger850BikePagePromo1.avif"
                  ]
                ]
              ]
        ];

        $motorcycleDataFifteen = [
            [
                "title" => "Street Triple 765 R",
                "model" => "street-triple-765-r-2023",
                "category" => "roadsters",
                "subFamilyCategory" => "street-triple-765",
                "edition" => "roadsters",
                "price" => 12290,
                "specs" => [
                  "cc" => 765,
                  "hp" => 120,
                  "torque" => 80,
                  "horsePower" => 130,
                  "serviceInterval" => "10.000km",
                  "motorType" => "TR"
                ],
                "gallery" => [
                  "modelImage" => [
                    "src" => "/images/roadsters/streetTriple765RModel.png",
                    "alt" => "Street Triple 765 R"
                  ],
                  "promoYoutubeVideo" => [
                    "src" => "https =>//www.youtube.com/embed/cDNnqoRB50w",
                    "alt" => "Street Triple 765 R"
                  ]
                ],
                "bikeCollorPalletteGallery" => [
                  "default" => "/images/roadsters/streetTriple765RModel.png",
                  "color1" => "/images/roadsters/streetTriple765/streetTriple765Color1.avif",
                  "color1Reversed" => "/images/roadsters/streetTriple765/streetTriple765Color1Reversed.png",
                  "color2" => "/images/roadsters/streetTriple765/streetTriple765Color2.avif",
                  "color2Reversed" => "/images/roadsters/streetTriple765/streetTriple765Color2Reversed.png"
                ],
                "customizationColors" => [
                  [
                    "colorName" => "Silver Ice",
                    "price" => null,
                    "image" => "/images/custom-collors/silverice.jpg",
                    "colorCode" => "color1"
                  ],
                  [
                    "colorName" => "Crystal White",
                    "price" => 200,
                    "image" => "/images/custom-collors/crystalWhite.jpg",
                    "colorCode" => "color2"
                  ]
                ],
                "shortSpecInfo" => [
                  "info1" => "765cc мотор",
                  "info2" => "Максимална јачина од 120-130 PS",
                  "info3" => "10000 км сервисен интервал"
                ],
                "subFamilyPromo" => [
                  "title" => "НОВИОТ STREET TIRPLE 765",
                  "desc" => "Со значаен чекор напред во перформанси, можности и технолошки напредок подкрепнат од легендарниот три-цилиндричен мотор - овој моторцикл е најдобриот “streetfighter“ во класата. Цени од €12,290.00"
                ],
                "features" => [
                  [
                    "title" => "Мотор",
                    "desc" => "765 Три-Цилиндарски Мотор"
                  ],
                  [
                    "title" => "Сила и обртен Момент",
                    "desc" => "120PS & 80Nm"
                  ],
                  [
                    "title" => "Тежина",
                    "desc" => "189 kg - полн резервоар и други течности"
                  ],
                  [
                    "title" => "Суспензија",
                    "desc" => "Showa целосно прилагодлива"
                  ],
                  [
                    "title" => "Сопирачки",
                    "desc" => "Brembo M4.32 клешти и 310mm двојни дискови"
                  ],
                  [
                    "title" => "Пневматици",
                    "desc" => "Continental ContiRoad Пневматици"
                  ],
                  [
                    "title" => "Електроника",
                    "desc" => "АВЅ, Систем за Пролизгување и Систем за Контрола на Предна Осовина (Подигање)"
                  ],
                  [
                    "title" => "Инструментна Плоча",
                    "desc" => "Мултифункционален TFT екран"
                  ],
                  [
                    "title" => "Мод на работа",
                    "desc" => "4 програми (Road, Rain, Sport, Rider)"
                  ],
                  [
                    "title" => "Асистент за брзини",
                    "desc" => "Triumph shift assist (up and down)"
                  ],
                  [
                    "title" => "Квачило",
                    "desc" => " Slip & assist clutch"
                  ],
                  [
                    "title" => "Светло",
                    "desc" => "LED"
                  ],
                  [
                    "title" => "Сервисен Интервал",
                    "desc" => "10,000 km / 12 месеци"
                  ]
                ],
                "bikePageCarousell" => [
                  [
                    "title" => "Унапредени Перформанси",
                    "desc" => "Голема надградба на моторот 765 – поголема моќност со 120 КС, поголем вртежен момент од 80 Nm, подобрена реакција, побрзо забрзување и нов, послободен издув за целиот тој препознатлив звук со три цилиндри.",
                    "image" => "/images/roadsters/streetTriple765R/streetTriple765RCaro1.avif"
                  ],
                  [
                    "title" => "Нов и Оптимизиран ABS Систем",
                    "desc" => "ABS оптимизиран за агол, поддржан од IMU со приспособени поставки вградени во секој од четирите режими на возење на Street R, обезбедува оптимални перформанси на сопирање на кој било наклон.",
                    "image" => "/images/roadsters/streetTriple765R/streetTriple765RCaro2.avif"
                  ],
                  [
                    "title" => "Нов Оптимизиран систем за пролизгување со опција за деактивирање",
                    "desc" => "Оптимизираниот систем за контрола на тракцијата за исклучување постојано го пресметува аголот на потпирање за да обезбеди оптимална брзина на лизгање и контрола на вртежниот момент. Може да се изберат четири независно прилагодливи нивоа на интервенција за да одговараат на стилот и условите на возење.",
                    "image" => "/images/roadsters/streetTriple765R/streetTriple765RCaro3.avif"
                  ],
                  [
                    "title" => "Подобра Ергономија",
                    "desc" => "Improved control for this new generation comes courtesy of a new 12mm wider handlebar, giving the Street Triple R a more focused and commanding driving position.",
                    "image" => "/images/roadsters/streetTriple765R/streetTriple765RCaro4.avif"
                  ],
                  [
                    "title" => "Поголема Моќ на Сопирачките",
                    "desc" => "Двојните радијални моноблок клешти на Brembo M4.32 обезбедуваат моќно, контролирано сопирање во сите услови. Аголниот ABS додава сигурност и самодоверба на возачот.",
                    "image" => "/images/roadsters/streetTriple765R/streetTriple765RCaro5.avif"
                  ],
                  [
                    "title" => "Суспензија",
                    "desc" => "Висококвалитетната, целосно приспособлива превртена вилушка Big Piston на Showa со посебни функции и задниот амортизер со прачка обезбедува кадифен, но контролиран амортизација, за беспрекорно управување на патот со спортска моќ.",
                   "image" => "/images/roadsters/streetTriple765R/streetTriple765RCaro6.avif"
                  ],
                  [
                    "title" => "Стабилност и на високи брзини",
                    "desc" => "Дизајниран за идеална комбинација на торзиона вкочанетост и странична флексибилност, прекрасната ножичка за галебирање комбинира одлични повратни информации од возачот со неверојатна стабилност при голема брзина.",
                    "image" => "/images/roadsters/streetTriple765R/streetTriple765RCaro7.avif"
                  ],
                  [
                    "title" => "Оптимизирана Висина на Седиштето",
                    "desc" => "Со пристапна висина на седиштето од 826 mm на Street Triple R, може да се вгради и дополнителна опција за ниски седишта, со 3D мрежна технологија за подобрен комфор, за намалување на висината за 28 mm.",
                    "image" => "/images/roadsters/streetTriple765R/streetTriple765RCaro8.avif"
                  ],
                  [
                    "title" => "TFT Екран",
                    "desc" => "Street Triple R се одликува со повеќефункционален TFT дисплеј лесен за користење. Интуитивни и логично поставени, четирите програми за возење се лесно навигирани преку ергономски оптимизираниот прекинувач.",
                    "image" => "/images/roadsters/streetTriple765R/streetTriple765RCaro9.avif"
                  ],
                  [
                    "title" => "Агресивен Фокусиран Изглед",
                    "desc" => "Впечатливата нова естетика на Street Triple R ја испорачува непогрешливата дизајнерска ДНК на Street Triple, со целосно нов резервоар за гориво од 15 литри, врв на издувот, обвивки на ладилникот, облоги на предните фарови и задни облоги за најагресивен став и силуета досега.",
                    "image" => "/images/roadsters/streetTriple765R/streetTriple765RCaro10.avif"
                  ]
                  ,
                  [
                    "title" => "Високи Стандарди",
                    "desc" => "Street Triple R со повисоки спецификации е комплетиран со Shift Assist Quickshifter за менување на брзини без спојка, спојка со помош на влечки, целосно LED осветлување, контрола на подигнувањето на предните тркала и гуми Continental ContiRoad.",
                    "image" => "/images/roadsters/streetTriple765R/streetTriple765RCaro11.avif"
                  ]

                ]
              ]
        ];


        $motorcycleDataSixteen = [
            [
                "title" => "Street Triple 765 RS",
                "model" => "street-triple-765-rs-2023",
                "category" => "roadsters",
                "subFamilyCategory" => "street-triple-765",
                "edition" => "roadsters",
                "price" => 13990,
                "specs" => [
                  "cc" => 765,
                  "hp" => 130,
                  "torque" => 80,
                  "horsePower" => 130,
                  "serviceInterval" => "10.000km",
                  "motorType" => "TR"
                ],
                "gallery" => [
                  "modelImage" => [
                    "src" => "/images/roadsters/streetTriple765RsModel.png",
                    "alt" => "Street Triple 765 RS"
                  ]
                ],
                "bikeCollorPalletteGallery" => [
                  "default" => "/images/roadsters/speedTriple765RS/speedTripleSilverIce.png",
                  "color1" => "/images/roadsters/speedTriple765RS/speedTripleSilverIce.png",
                  "color1Reversed" => "/images/roadsters/speedTriple765RS/speedTripleSilverIceReversed.png",
                  "color2" => "/images/roadsters/speedTriple765RS/speedTripleRSCarnivalRed.png",
                  "color2Reversed" => "/images/roadsters/speedTriple765RS/speedTripleRSCarnivalRedReversed.png",
                  "color3" => "/images/roadsters/speedTriple765RS/speedTripleYellow.png",
                  "color3Reversed" => "/images/roadsters/speedTriple765RS/speedTripleYellowReversed.png"
                ],
                "customizationColors" => [
                  [
                    "colorName" => "Silver Ice",
                    "price" => null,
                    "image" => "/images/custom-collors/silverice.jpg",
                    "colorCode" => "color1"
                  ],
                  [
                    "colorName" => "Carnival Red",
                    "price" => null,
                    "image" => "/images/custom-collors/carnivalRed.jpg",
                    "colorCode" => "color2"
                  ],
                  [
                    "colorName" => "Cosmic Yellow",
                    "price" => 200,
                    "image" => "/images/custom-collors/cosmicYellow.jpg",
                    "colorCode" => "color3"
                  ]
                ],
                "shortSpecInfo" => [
                  "info1" => "765cc мотор",
                  "info2" => "Максимална јачина од 130 PS",
                  "info3" => "10000 км сервисен интервал"
                ],
                "subFamilyPromo" => [
                  "title" => "НОВИОТ STREET TIRPLE 765 RS",
                  "desc" => "Лидерски перформанси во класата на “naked-sportsbike“, највисока спецификација на сопирачки и технолошки напредок во комплет со исклучителна агилност. Цени од €13,990.00."
                ]
              ]
        ];


        $motorcycleDataSeventeen = [
            [
                "title" => "Trident 660",
                "model" => "trident-660",
                "category" => "roadsters",
                "subFamilyCategory" => "trident-660",
                "edition" => "roadsters",
                "price" => 8690,
                "specs" => [
                  "cc" => 660,
                  "hp" => 80,
                  "torque" => 64,
                  "horsePower" => 80,
                  "serviceInterval" => "16.000km",
                  "motorType" => "TR"
                ],
                "bikeCollorPalletteGallery" => [
                  "default" => "/images/roadsters/trident660/trident660TriumphYellow.png",
                  "color1" => "/images/roadsters/trident660/trident660TriumphYellow.png",
                  "color1Reversed" => "/images/roadsters/trident660/trident660TriumphYellowReversed.png",
                  "color2" => "/images/roadsters/trident660/trident660SapphireBlack.png",
                  "color2Reversed" => "/images/roadsters/trident660/trident660SapphireBlackReversed.png",
                  "color3" => "/images/roadsters/trident660/trident660MattBlack.png",
                  "color3Reversed" => "/images/roadsters/trident660/trident660MattBlackReversed.png",
                  "color4" => "/images/roadsters/trident660/trident660Red.png",
                  "color4Reversed" => "/images/roadsters/trident660/trident660RedReversed.png"
                ],
                "customizationColors" => [
                  [
                    "colorName" => "Jett Black / Triumph Racing Yellow",
                    "price" => 200,
                    "image" => "/images/custom-collors/jetBlackTriumphRacingYellow.jpg",
                    "colorCode" => "color1"
                  ],
                  [
                    "colorName" => "Sapphire Black / Storm Gray",
                    "price" => null,
                    "image" => "/images/custom-collors/sapphireBlack.jpg",
                    "colorCode" => "color2"
                  ],
                  [
                    "colorName" => "Matt Jet Black / Matt Silver Ice",
                    "price" => 200,
                    "image" => "/images/custom-collors/mattJettBlackMattSilverIce.jpg",
                    "colorCode" => "color3"
                  ],
                  [
                    "colorName" => "Silver Ice Diablo Red",
                    "price" => 200,
                    "image" => "/images/custom-collors/diabloRedAluminium.jpg",
                    "colorCode" => "color4"
                  ]
                ],
                "gallery" => [
                  "modelImage" => [
                    "src" => "/images/roadsters/trident660Model.png",
                    "alt" => "Trident 660"
                  ]
                ],
                "shortSpecInfo" => [
                  "info1" => "660cc мотор",
                  "info2" => "2 мода на работа (Road & Rain)",
                  "info3" => "10000км / 12 месеци сервисен интервал"
                ],
                "subFamilyPromo" => [
                  "title" => "НОВИОТ STREET TIRPLE 765",
                  "desc" => "Со значаен чекор напред во перформанси, можности и технолошки напредок подкрепнат од легендарниот три-цилиндричен мотор - овој моторцикл е најдобриот “streetfighter“ во класата. Цени од €12,290.00"
                ]
              ]
        ];

        $motorcycleDataEightteen = [
            [
                "title" => "Speed Triple 1200 RS",
                "model" => "speed-triple-1200-rs",
                "category" => "roadsters",
                "subFamilyCategory" => "speed-triple-1200-rs",
                "edition" => "roadsters",
                "price" => 18990,
                "specs" => [
                  "cc" => 1160,
                  "hp" => 180,
                  "torque" => 125,
                  "horsePower" => 180,
                  "serviceInterval" => "15.000km",
                  "motorType" => "TR"
                ],
                "gallery" => [
                  "modelImage" => [
                    "src" => "/images/roadsters/speedTriple1200RsModel.png",
                    "alt" => "Speed Triple 1200 Rs"
                  ]
                ],
                "bikeCollorPalletteGallery" => [
                  "default" => "/images/roadsters/speedTriple1200RS/speedTriple1200rsCarnivalRed.png",
                  "color1" => "/images/roadsters/speedTriple1200RS/speedTriple1200rsCarnivalRed.png",
                  "color1Reversed" => "/images/roadsters/speedTriple1200RS/speedTriple1200rsCarnivalRedReversed.png",
                  "color2" => "/images/roadsters/speedTriple1200RS/speedTriple1200rsCarnivalBlack.png",
                  "color2Reversed" => "/images/roadsters/speedTriple1200RS/speedTriple1200rsCarnivalBlackReversed.png",
                  "color3" => "/images/roadsters/speedTriple1200RS/speedTriple1200rsSilverIce.png",
                  "color3Reversed" => "/images/roadsters/speedTriple1200RS/speedTriple1200rsSilverIceReversed.png"
                ],
                "customizationColors" => [
                  [
                    "colorName" => "Carnival Red",
                    "price" => 300,
                    "image" => "/images/custom-collors/carnivalRed.jpg",
                    "colorCode" => "color1"
                  ],
                  [
                    "colorName" => "Saphire Black",
                    "price" => null,
                    "image" => "/images/custom-collors/sapphireBlack.jpg",
                    "colorCode" => "color2"
                  ],
                  [
                    "colorName" => "Matt Silver Ice",
                    "price" => null,
                    "image" => "/images/custom-collors/mattSilverIce.jpg",
                    "colorCode" => "color3"
                  ]
                ],
                "shortSpecInfo" => [
                  "info1" => "660cc мотор",
                  "info2" => "2 мода на работа (Road & Rain)",
                  "info3" => "10000км / 12 месеци сервисен интервал"
                ],
                "subFamilyPromo" => [
                  "title" => "Speed Triple 1200 RS",
                  "desc" => "Најмоќниот, нај-динамичниот и технолошки нај-напредниот Speed Triple моторцикл досега. Цени од €12,290.00"
                ]
              ]
        ];

        $motorcycleDataNineteen = [
            [
                "title" => "Speed Triple 1200 RR",
                "model" => "speed-triple-1200-rr",
                "category" => "roadsters",
                "subFamilyCategory" => "speed-triple-1200-rr",
                "edition" => "roadsters",
                "price" => 20990,
                "specs" => [
                  "cc" => 1160,
                  "hp" => 180,
                  "torque" => 125,
                  "horsePower" => 180,
                  "serviceInterval" => "15.000km",
                  "motorType" => "TR"
                ],
                "gallery" => [
                  "modelImage" => [
                    "src" => "/images/roadsters/speedTriple1200Rr2Model.png",
                    "alt" => "Speed Triple 1200 RR"
                  ]
                ],
                "bikeCollorPalletteGallery" => [
                  "default" => "/images/roadsters/speedTriple1200RR/speedTriple1200RRGray.png",
                  "color1" => "/images/roadsters/speedTriple1200RR/speedTriple1200RRGray.png",
                  "color1Reversed" => "/images/roadsters/speedTriple1200RR/speedTriple1200RRGrayReversed.png",
                  "color2" => "/images/roadsters/speedTriple1200RR/speedTriple1200RRRed.png",
                  "color2Reversed" => "/images/roadsters/speedTriple1200RR/speedTriple1200RRRedReversed.png"
                ],
                "customizationColors" => [
                  [
                    "colorName" => "Crystal White / Storm Gray",
                    "price" => null,
                    "image" => "/images/custom-collors/crystalWhiteStormGray.jpg",
                    "colorCode" => "color1"
                  ],
                  [
                    "colorName" => "Red Hopper / Storm Gray",
                    "price" => 300,
                    "image" => "/images/custom-collors/carnivalRedStormGrey.jpg",
                    "colorCode" => "color2"
                  ]
                ],
                "shortSpecInfo" => [
                  "info1" => "Нов 1160cc мотор со 180 коњски сили ",
                  "info2" => "Нов кокпит и едно предно светло",
                  "info3" => "Најново технологија фокусирана на возачот"
                ],
                "subFamilyPromo" => [
                  "title" => "Speed Triple 1200 RR",
                  "desc" => "Колку повозбудлив за гледање толку повозбудлив за возење - отсега со највисоко ниво на спецификација. Цени од €20,990.00"
                ]
              ]
        ];

        $motorcycleDataTwenty = [
            [
                "title" => "Rocket 3 R",
                "model" => "rocket-3-r",
                "category" => "rocket-3",
                "subFamilyCategory" => "rocket-3",
                "edition" => "rocket-3",
                "price" => 25290,
                "specs" => [
                  "cc" => 398,
                  "hp" => 20,
                  "torque" => 37.5,
                  "horsePower" => 40,
                  "serviceInterval" => "16.000km",
                  "motorType" => "TR"
                ],
                "gallery" => [
                  "modelImage" => [
                    "src" => "/images/rocket-3/rocket3R/rocket3RSilverIce.png",
                    "alt" => "Rocket 3 R"
                  ],
                  "promoYoutubeVideo" => [
                    "src" => "https =>//www.youtube.com/embed/7pRH-6UTgu8",
                    "alt" => "Rocket 3 R"
                  ]
                ],
                "bikeCollorPalletteGallery" => [
                  "default" => "/images/rocket-3/rocket3R/rocket3RSilverIce.png",
                  "color1" => "/images/rocket-3/rocket3R/rocket3RSilverIce.png",
                  "color1Reversed" => "/images/rocket-3/rocket3R/rocket3RSilverIceReversed.png",
                  "color2" => "/images/rocket-3/rocket3R/rocket3RSaphireBlack.png",
                  "color2Reversed" => "/images/rocket-3/rocket3R/rocket3RSaphireBlackReversed.png",
                  "color3" => "/images/rocket-3/rocket3R/rocket3RSilverRed.png",
                  "color3Reversed" => "/images/rocket-3/rocket3R/rocket3RSilverRedReversed.png"
                ],
                "customizationColors" => [
                  [
                    "colorName" => "Matt Silver Ice",
                    "price" => 300,
                    "image" => "/images/custom-collors/mattSilverIce.jpg",
                    "colorCode" => "color1"
                  ],
                  [
                    "colorName" => "Saphire Black",
                    "price" => null,
                    "image" => "/images/custom-collors/sapphireBlack.jpg",
                    "colorCode" => "color2"
                  ],
                  [
                    "colorName" => "Silver Ice Cranberry Red",
                    "price" => 600,
                    "image" => "/images/custom-collors/silverIceCranberryRed.jpg",
                    "colorCode" => "color3"
                  ]
                ],
                "shortSpecInfo" => [
                  "info1" => "Три-цилиндричен Rocket 3 мотор со 2,500cc зафатнина",
                  "info2" => "167 коњски сили при 6000rpm",
                  "info3" => "Обртен момент од 221Nm"
                ],
                "subFamilyPromo" => [
                  "title" => "Rocket 3 R",
                  "desc" => "Врвниот мускулест “Roadster“ кој испорачува инстанта сила и обртен момент, како и извонредна контрола и способност. Цени од €25,290.00."
                ],
                "bikePageInfo" => [
                  "topDesc" => [
                    "desc1" => "Во својата класа, Rocket 3 е врвниот мускулен родстер со високи спецификации и раѓање на легенда.",
                    "desc2" => "Поставувајќи стандарди за контрола и карактер, Rocket 3 R произведува неверојатна контрола, удобност, способност и водечки вртежен момент во светот, што е 71% повисок од најблискиот конкурент и повеќе од претходната генерација на моделите Rocket, со неверојатно рамна крива на вртежниот момент што достигнува врв на 4.000 вртежи во минута. и се шири линеарно низ опсегот на вртежи, обезбедувајќи одлично забрзување и моментален одговор, со секоја брзина во менувачот.",
                    "desc3" => "Максималната моќност е 167 КС при 6000 вртежи во минута. (11% повисоко од моделот од претходната генерација), со поголема моќност, од ниски 3500 вртежи во минута. и до црвената површина на тахометарот со почеток од 7000 вртежи во минута. правејќи го Rocket 3 R, неспоредливо возбудлив велосипед со врвни способности во секојдневното возење, со секоја брзина во кутијата.",
                    "desc4" => "Заедно со своите неспоредливи перформанси, Rocket 3 R има неверојатно мускулесто присуство и неверојатен стил на крстосувачот, како и прекрасни детали и неспоредлив финиш. И, се разбира, можете да го подобрите овој одличен велосипед уште повеќе со избирање од широк опсег од над 50 прилагодени додатоци."
                  ]
                ],
                "features" => [
                  [
                    "title" => "Мотор",
                    "desc" => "Нов 2,500cc три-цилиндарски Rocket 3 мотор - заштедени 18кг тежина во спротива со претходната генерација"
                  ],
                  [
                    "title" => "Сила и Обртен Момент",
                    "desc" => "2.73 секунди од 0 до 100 km/h"
                  ],
                  [
                    "title" => "Светло",
                    "desc" => "Карактеристични двојни LED светла со триаголно Triumph лого"
                  ],
                  [
                    "title" => "Систем за Издувни гасови",
                    "desc" => "Прекрасен hydro-formed издувна цевка"
                  ],
                  [
                    "title" => "Резервоар",
                    "desc" => "Мускулест 18 литарски резервоар со “Monza Style“ полиран центар и капаче"
                  ],
                  [
                    "title" => "Тркала",
                    "desc" => "20 жични тркала"
                  ],
                  [
                    "title" => "Позиција за Возење",
                    "desc" => "Прилагодлива ергономија"
                  ],
                  [
                    "title" => "Квачило",
                    "desc" => "Хидраулично квачило со ассистенција"
                  ],
                  [
                    "title" => "Седиште",
                    "desc" => "Комфортно седиште за возачот и за патхникот"
                  ],
                  [
                    "title" => "Модови за возење",
                    "desc" => "Четири мода за возење (Road, Rain, Sport and Rider - програмиран од возачот)"
                  ],
                  [
                    "title" => "Инструментна Плоча",
                    "desc" => "Втора генерација TFT екран со многу функционалности"
                  ],
                  [
                    "title" => "ABS",
                    "desc" => "Оптимизиран ABS и систем за пролизгување"
                  ],
                  [
                    "title" => "Темпомат",
                    "desc" => "Вграден Темпомат"
                  ],
                  [
                    "title" => "Keyless",
                    "desc" => "Вграден Keyless и Брава за заклучување"
                  ]
                  ,
                  [
                    "title" => "Асистент за брзини",
                    "desc" => "Опционалнен Triumph Shift Assist систем"
                  ],
                  [
                    "title" => "Систем за контрола на притисок во пневматици",
                    "desc" => "Вградено"
                  ]
                  ,
                  [
                    "title" => "Навигазија",
                    "desc" => "Опционален аксесоар - Turn by Turn Систем (изработен во соработка со Google)"
                  ],
                  [
                    "title" => "Bluetooth",
                    "desc" => "Вградени функционалности за поврзување со телефон и слушање музика преку Bluetooth®"
                  ],
                  [
                    "title" => "GoPro",
                    "desc" => "Опционален додаток"
                  ]
                ],
                "bikePageCarousell" => [
                  [
                    "title" => "Карактеристични LED Фарови",
                    "desc" => "Карактеристичните и препознатливи фарови на Rocket 3 R го носат препознатливиот триаголен амблем на Triumph и DRL - дневни светла.",
                    "image" => "/images/rocket-3/rocket3R/rocket3RCaro1.avif"
                  ],
                  [
                    "title" => "Возбудливи тркала составени од 20 краци",
                    "desc" => "Тркала со 20 краци со импозантна задна гума од 240 mm. Изработено од лесна алуминиумска легура, со современ стил и црна завршница.",
                    "image" => "/images/rocket-3/rocket3R/rocket3RCaro2.avif"

                  ],
                  [
                    "title" => "Хидраулично квачило кое ви асистира",
                    "desc" => "Лесната спојка го намалува напрегањето на возачот од користењето на рачката и нуди поголема удобност и подобра контрола.",
                    "image" => "/images/rocket-3/rocket3R/rocket3RCaro3.avif"
                  ],
                  [
                    "title" => "Комфортно седиште за возачот и за сопатникот",
                    "desc" => "Роудстерската конфигурација на седлото за возач и патник Rocket 3 R обезбедува чиста линија што тече низ велосипедот. Седлото има облоги од алуминиумска легура на дното и со висина од 773 mm нуди лесен пристап до секој возач.",
                    "image" => "/images/rocket-3/rocket3R/rocket3RCaro4.avif"

                  ],
                  [
                    "title" => "Ергономија која се прилагодува според вашите потреби",
                    "desc" => "Ергономски дизајниран за да овозможи максимална удобност, Rocket 3 R има централно поставени стапала со две прилагодувања на вертикалната положба, за крајно прилагодување на барањата на секој возач.",
                    "image" => "/images/rocket-3/rocket3R/rocket3RCaro5.avif"

                  ],
                  [
                    "title" => "Стилски волан со скриена инсталација",
                    "desc" => "Роудстер воланот на Rocket 3 R обезбедува уникатно мускулесто чувство и совршена положба за возење",
                    "image" => "/images/rocket-3/rocket3R/rocket3RCaro6.avif"

                  ],
                  [
                    "title" => "Прекрасен Финиш и Детали",
                    "desc" => "Голем број ексклузивни детали ја подобруваат неверојатната естетика на Rocket 3 R. Тие вклучуваат мускулест совршено формиран резервоар, полиран метален облог на резервоарот, капа во стилот на Монца, како и полиран капак на радијаторот и полиран радијатор и масло во стилот на Монца капаче.",
                    "image" => "/images/rocket-3/rocket3R/rocket3RCaro7.avif"

                  ],
                  [
                    "title" => "Скриени ногарки",
                    "desc" => "Уникатните потполно повлечени стапала може да се сокријат кога не се користат, што дополнително го подобрува чистиот минимален изглед на задниот дел на Rocket 3 R.",
                    "image" => "/images/rocket-3/rocket3R/rocket3RCaro8.avif"

                  ],
                  [
                    "title" => "18 литарски резервоар",
                    "desc" => "Со 18 литри, Rocket 3 R има многу голем резервоар за гориво кој обезбедува автономија при долги патувања.",
                    "image" => "/images/rocket-3/rocket3R/rocket3RCaro9.avif"

                  ],
                  [
                    "title" => "Прекрасни Бои на Располагање",
                    "desc" => "Rocket 3 R е достапен во боите на Korosi Red и Phantom Black.",
                    "image" => "/images/rocket-3/rocket3R/rocket3RCaro10.avif"

                  ]
                ]
              ]
        ];

        $motorcycleDataTwentyOne = [
            [
                "title" => "Rocket 3 GT",
                "model" => "rocket-3-gt",
                "category" => "rocket-3",
                "subFamilyCategory" => "rocket-3",
                "edition" => "rocket-3",
                "price" => 25990,
                "specs" => [
                  "cc" => 398,
                  "hp" => 20,
                  "torque" => 37.5,
                  "horsePower" => 40,
                  "serviceInterval" => "16.000km",
                  "motorType" => "TR"
                ],
                "gallery" => [
                  "modelImage" => [
                    "src" => "/images/rocket-3/rocket3GT/rocket3GTSaphireBlack.png",
                    "alt" => "Rocket 3 GT"
                  ],
                  "promoYoutubeVideo" => [
                    "src" => "https =>//www.youtube.com/embed/V-RbV3Jk47U",
                    "alt" => "Rocket 3 GT"
                  ]
                ],
                "bikeCollorPalletteGallery" => [
                  "default" => "/images/rocket-3/rocket3GT/rocket3GTSaphireBlack.png",
                  "color1" => "/images/rocket-3/rocket3GT/rocket3GTSaphireBlack.png",
                  "color1Reversed" => "/images/rocket-3/rocket3GT/rocket3GTSaphireBlackReversed.png",
                  "color2" => "/images/rocket-3/rocket3GT/rocket3GTCarnivalRedSaphireBlack.png",
                  "color2Reversed" => "/images/rocket-3/rocket3GT/rocket3GTCarnivalRedSaphireBlackReversed.png",
                  "color3" => "/images/rocket-3/rocket3GT/rocket3GTSilverIceStormGray.png",
                  "color3Reversed" => "/images/rocket-3/rocket3GT/rocket3GTSilverIceStormGrayReversed.png"
                ],
                "customizationColors" => [
                  [
                    "colorName" => "Saphire Black",
                    "price" => null,
                    "image" => "/images/custom-collors/sapphireBlack.jpg",
                    "colorCode" => "color1"
                  ],
                  [
                    "colorName" => "Carnival Red / Saphire Black",
                    "price" => null,
                    "image" => "/images/custom-collors/carnivalRedSapphireBlack.jpg",
                    "colorCode" => "color2"
                  ],
                  [
                    "colorName" => "Silver Ice / Storm Gray",
                    "price" => 600,
                    "image" => "/images/custom-collors/silverIceStormGray.jpg",
                    "colorCode" => "color3"
                  ]
                ],
                "shortSpecInfo" => [
                  "info1" => "Три-цилиндричен Rocket 3 мотор со 2,500cc зафатнина",
                  "info2" => "167 коњски сили при 6000rpm",
                  "info3" => "Обртен момент од 221Nm"
                ],
                "subFamilyPromo" => [
                  "title" => "Rocket 3 GT",
                  "desc" => "Врвни перформанси и изглед, неверојатен комфорт со релаксирана возачка позиција која дозволува авантури со долги дистанци. Цени од €25,990.00."
                ],
                "bikePageInfo" => [
                  "topDesc" => [
                    "desc1" => "Rocket 3 GT обезбедува неверојатни перформанси, уникатен стил, неверојатна удобност, лежерен карактер на крстосувачот и многу способности за крстарење кои го означуваат раѓањето на една легенда.",
                    "desc2" => "Ова е искуство кое доминира во класата, со најголема работна зафатнина на моторот што е поставена на сериски велосипед и водечки вртежен момент во светот, кој е 71% повисок од најблискиот конкурент и повеќе од моделите од претходната генерација на Rocket, со неверојатна рамна крива на вртежен момент што максимум на 4.000 вртежи во минута. и се шири линеарно низ опсегот на вртежи, обезбедувајќи одлично забрзување и моментален одговор, со секоја брзина во менувачот.",
                    "desc3" => "Максималната моќност достигнува 167 КС при 6000 вртежи во минута. (11% повисок од моделот од претходната генерација), така што Rocket 3 е возбудлив велосипед (со поголема моќност во опсегот на ниски 3500 вртежи во минута и до црвената зона на тахометар, која сега започнува повисоко од 7000 вртежи во минута .l.) кој нуди највисока технологија некогаш применета на моделот Rocket.",
                    "desc4" => "Сето ова се комбинира за да придонесе за врвните можности за патување на Rocket 3 GT, како и удобноста и лесното секојдневно возење во секоја брзина. Како вистински триумф, Rocket 3 GT е дефиниција за стил, присуство на мускулите и завршница. Можете дополнително да го надградите овој неверојатен велосипед со преку 50 прилагодени додатоци Rocket 3, додавајќи повеќе стил, практичност и можности за турнеи."
                  ]
                ],
                "features" => [
                  [
                    "title" => "Мотор",
                    "desc" => "Нов 2,500cc три-цилиндарски Rocket 3 мотор - заштедени 18кг тежина во спротива со претходната генерација"
                  ],
                  [
                    "title" => "Сила и Обртен Момент",
                    "desc" => "2.73 секунди од 0 до 100 km/h"
                  ],
                  [
                    "title" => "Светло",
                    "desc" => "Карактеристични двојни LED светла со триаголно Triumph лого"
                  ],
                  [
                    "title" => "Систем за Издувни гасови",
                    "desc" => "Прекрасен hydro-formed издувна цевка"
                  ],
                  [
                    "title" => "Резервоар",
                    "desc" => "Мускулест 18 литарски резервоар со “Monza Style“ полиран центар и капаче"
                  ],
                  [
                    "title" => "Тркала",
                    "desc" => "20 жични тркала"
                  ],
                  [
                    "title" => "Позиција за Возење",
                    "desc" => "Прилагодлива ергономија"
                  ],
                  [
                    "title" => "Квачило",
                    "desc" => "Хидраулично квачило со ассистенција"
                  ],
                  [
                    "title" => "Седиште",
                    "desc" => "Комфортно седиште за возачот и за патхникот"
                  ],
                  [
                    "title" => "Модови за возење",
                    "desc" => "Четири мода за возење (Road, Rain, Sport and Rider - програмиран од возачот)"
                  ],
                  [
                    "title" => "Инструментна Плоча",
                    "desc" => "Втора генерација TFT екран со многу функционалности"
                  ],
                  [
                    "title" => "ABS",
                    "desc" => "Оптимизиран ABS и систем за пролизгување"
                  ],
                  [
                    "title" => "Темпомат",
                    "desc" => "Вграден Темпомат"
                  ],
                  [
                    "title" => "Keyless",
                    "desc" => "Вграден Keyless и Брава за заклучување"
                  ]
                  ,
                  [
                    "title" => "Асистент за брзини",
                    "desc" => "Опционалнен Triumph Shift Assist систем"
                  ],
                  [
                    "title" => "Систем за контрола на притисок во пневматици",
                    "desc" => "Oпционално"
                  ]
                  ,
                  [
                    "title" => "Конекција со моторот",
                    "desc" => "Бесплатна 'My Triumph App' (достапна за iOS и Android)"
                  ],
                  [
                    "title" => "Bluetooth",
                    "desc" => "Вградени функционалности за поврзување со телефон и слушање музика преку Bluetooth®"
                  ],
                  [
                    "title" => "GoPro",
                    "desc" => "Опционален додаток"
                  ]
                ],
                "bikePageCarousell" => [
                  [
                    "title" => "Карактеристични LED Фарови",
                    "desc" => "Карактеристичните и препознатливи фарови на Rocket 3 R го носат препознатливиот триаголен амблем на Triumph и DRL - дневни светла.",
                    "image" => "/images/rocket-3/rocket3GT/rocket3GTCaro1.avif"
                  ],
                  [
                    "title" => "Возбудливи тркала составени од 20 краци",
                    "desc" => "Тркала со 20 краци (предни 17”x3,5”, задни 16”x3,5”) Изработени од лесна алуминиумска легура, со современ стил и обработени завршетоци на раб и краци.",
                    "image" => "/images/rocket-3/rocket3GT/rocket3GTCaro2.avif"

                  ],
                  [
                    "title" => "Хидраулично квачило кое ви асистира",
                    "desc" => "Полесната спојка го намалува напрегањето на возачот од користењето на рачката и нуди поголема удобност и подобра контрола",
                    "image" => "/images/rocket-3/rocket3GT/rocket3GTCaro3.avif"
                  ],
                  [
                    "title" => "Комфортно седиште за возачот и за сопатникот",
                    "desc" => "Роудстер конфигурацијата на Rocket 3 GT возачот и совозачкото седиште обезбедува чиста линија што тече низ велосипедот. На дното има облоги од алуминиумска легура. Со висина од 750 mm, нуди лесен пристап и апсолутна контрола на секој возач.",
                    "image" => "/images/rocket-3/rocket3GT/rocket3GTCaro4.avif"

                  ],
                  [
                    "title" => "Попирач за сопатникот со можности за прилагодување",
                    "desc" => "За дополнително подобрување на своите можности за турнеи, новиот Rocket 3 GT има стандардно прилагодување на висината.",
                    "image" => "/images/rocket-3/rocket3GT/rocket3GTCaro5.avif"

                  ],
                  [
                    "title" => "Поголем Ветробран",
                    "desc" => "За подобрена заштита од ветер и поголеми можности за турнеи, Rocket 3 GT има стандардно поголемо ветробранско стакло.",
                    "image" => "/images/rocket-3/rocket3GT/rocket3GTCaro6.avif"

                  ],
                  [
                    "title" => "Греачи на Волан",
                    "desc" => "Загреаните рачки се стандардна опрема на Rocket 3 GT и се активираат со притискање на специјално копче на левиот контролер. Постојат две поставки за температура, кои се прикажуваат на екранот на инструментот TFT.",
                    "image" => "/images/rocket-3/rocket3GT/rocket3GTCaro7.avif"

                  ],
                  [
                    "title" => "Ергономија",
                    "desc" => "Ергономски дизајниран за да овозможи максимална удобност, Rocket 3 GT има стапала поставени напред со три прилагодувања на хоризонталната положба, за крајно прилагодување на барањата на секој возач, како и прилагодлив потпирач за грб за совозач за дополнителна удобност.",
                    "image" => "/images/rocket-3/rocket3GT/rocket3GTCaro8.avif"

                  ],
                  [
                    "title" => "Стилски волан со скриена инсталација",
                    "desc" => "Туристичкиот волан на Rocket 3 GT обезбедува уникатно мускулесто чувство и совршена положба за возење.",
                    "image" => "/images/rocket-3/rocket3GT/rocket3GTCaro9.avif"

                  ],
                  [
                    "title" => "Прекрасен Финиш и Детали",
                    "desc" => "Голем број ексклузивни детали ја подобруваат неверојатната естетика на Rocket 3 GT. Вклучени се мускулест совршено формиран резервоар, украсен резервоар и капа од полиран метал во стилот на Монца, како и полиран капак на радијаторот во стил на Монца и полиран радијатор и капа за масло во стилот на Монца.",
                    "image" => "/images/rocket-3/rocket3GT/rocket3GTCaro10.avif"

                  ],

                  [
                    "title" => "Скриени ногарки",
                    "desc" => "Уникатните целосно вовлекувачки прагови може да се сокријат кога не се користат за дополнително да се подобри чистиот минимален изглед на задниот дел на Rocket 3 GT..",
                    "image" => "/images/rocket-3/rocket3GT/rocket3GTCaro11.avif"

                  ],
                  [
                    "title" => "18 литарски резервоар",
                    "desc" => "Со 18 литри, Rocket 3 GT има многу голем резервоар за гориво кој обезбедува автономија при долги патувања.",
                    "image" => "/images/rocket-3/rocket3GT/rocket3GTCaro12.avif"

                  ],
                  [
                    "title" => "Прекрасни Бои на Располагање",
                    "desc" => "Rocket 3 GT е достапен во опции за бои Silver Ice & Storm Grey и Phantom Black.",
                    "image" => "/images/rocket-3/rocket3GT/rocket3GTCaro13.avif"

                  ]

                ]
              ]
        ];


        $motorcycleDataTwentyTwo = [
            [
                "title" => "Rocket 3 R 221",
                "model" => "rocket-3-r-221-edition-2022",
                "category" => "rocket-3",
                "subFamilyCategory" => "rocket-3",
                "edition" => "special",
                "price" => 26190,
                "specs" => [
                  "cc" => 398,
                  "hp" => 20,
                  "torque" => 37.5,
                  "horsePower" => 40,
                  "serviceInterval" => "16.000km",
                  "motorType" => "TR"
                ],
                "gallery" => [
                  "modelImage" => [
                    "src" => "/images/rocket-3/rocket3R221/rocket3GT221RedHopper.png",
                    "alt" => "Rocket 3 R 221"
                  ]
                ],
                "bikeCollorPalletteGallery" => [
                  "default" => "/images/rocket-3/rocket3R221/rocket3GT221RedHopper.png",
                  "color1" => "/images/rocket-3/rocket3R221/rocket3GT221RedHopper.png",
                  "color1Reversed" => "/images/rocket-3/rocket3R221/rocket3GT221RedHopperReversed.png"
                ],
                "customizationColors" => [
                  [
                    "colorName" => "Red Hopper / Sapphire Black",
                    "price" => null,
                    "image" => "/images/custom-collors/jetBlackCranberryRed.jpg",
                    "colorCode" => "color1"
                  ]
                ],
                "shortSpecInfo" => [
                  "info1" => "Три-цилиндричен Rocket 3 мотор со 2,500cc зафатнина",
                  "info2" => "167 коњски сили при 6000rpm",
                  "info3" => "Обртен момент од 221Nm"
                ],
                "subFamilyPromo" => [
                  "title" => "Rocket 3 r 221 special edition",
                  "desc" => "Rocket 3 специјално издание, кое го слави и го добива името по тоа што е првиот мотор кој испорача обртен момент од 221 Nm. Цени од €26,190.00."
                ],
                "bikePageInfo" => [
                  "topDesc" => [
                    "desc1" => "Прославувајќи го водечкиот светски вртежен момент од 221 Nm од најголемиот сериски мотор некогаш направен, со ексклузивното специјално издание и за Rocket 3 R.."
                  ]
                ],
                "features" => [
                  [
                    "title" => "Мотор",
                    "desc" => "Нов 2,500cc три-цилиндарски Rocket 3 мотор - заштедени 18кг тежина во спротива со претходната генерација"
                  ],
                  [
                    "title" => "Сила и Обртен Момент",
                    "desc" => "2.73 секунди од 0 до 100 km/h"
                  ],
                  [
                    "title" => "Светло",
                    "desc" => "Карактеристични двојни LED светла со триаголно Triumph лого"
                  ],
                  [
                    "title" => "Систем за Издувни гасови",
                    "desc" => "Прекрасен hydro-formed издувна цевка"
                  ],
                  [
                    "title" => "Резервоар",
                    "desc" => "Мускулест 18 литарски резервоар со “Monza Style“ полиран центар и капаче"
                  ],
                  [
                    "title" => "Тркала",
                    "desc" => "20 жични тркала"
                  ],
                  [
                    "title" => "Позиција за Возење",
                    "desc" => "Прилагодлива ергономија"
                  ],
                  [
                    "title" => "Квачило",
                    "desc" => "Хидраулично квачило со ассистенција"
                  ],
                  [
                    "title" => "Седиште",
                    "desc" => "Комфортно седиште за возачот и за патхникот"
                  ],
                  [
                    "title" => "Модови за возење",
                    "desc" => "Четири мода за возење (Road, Rain, Sport and Rider - програмиран од возачот)"
                  ],
                  [
                    "title" => "Инструментна Плоча",
                    "desc" => "Втора генерација TFT екран со многу функционалности"
                  ],
                  [
                    "title" => "ABS",
                    "desc" => "Оптимизиран ABS и систем за пролизгување"
                  ],
                  [
                    "title" => "Темпомат",
                    "desc" => "Вграден Темпомат"
                  ],
                  [
                    "title" => "Keyless",
                    "desc" => "Вграден Keyless и Брава за заклучување"
                  ]
                  ,
                  [
                    "title" => "Асистент за брзини",
                    "desc" => "Опционалнен Triumph Shift Assist систем"
                  ],
                  [
                    "title" => "Систем за контрола на притисок во пневматици",
                    "desc" => "Вградено"
                  ]
                  ,
                  [
                    "title" => "Навигација",
                    "desc" => "Достапен аксесоар - Turn by turn навигација (создадена со партнерство со Google)"
                  ],
                  [
                    "title" => "Bluetooth",
                    "desc" => "Вградени функционалности за поврзување со телефон и слушање музика преку Bluetooth®"
                  ],
                  [
                    "title" => "GoPro",
                    "desc" => "Опционален додаток"
                  ]
                ],
                "bikePageCarousell" => [
                  [
                    "title" => "Ексклузивен",
                    "desc" => "Специјално издание на бои и графики, достапни само за една година, во комбинација со водечките светски перформанси, способности и мускулестата силуета на Rocket 3 R..",
                    "image" => "/images/rocket-3/rocket3R221/rocket221RCaro1.avif"
                  ],
                  [
                    "title" => "Уникатни Графики",
                    "desc" => "Стилската графика на резервоарот ги покажува неверојатните бројки на перформансите на ракетата - вртежен момент, големината на моторот, моќноста, отворот и ударот - додека препознатливата графика со капаче од 221 колена нуди храбар и уникатен изглед.",
                    "image" => "/images/rocket-3/rocket3R221/rocket221RCaro2.avif"

                  ],
                  [
                    "title" => "Специјално комбинирани бои за 221 серијалот",
                    "desc" => "Неверојатна смела шема на боја која вклучува резервоари и предни крила во карактеристична боја на Red Hopper, како и краци на крилата, куќиште на фаровите, решетка, странични панели и задна пластика во црна сафир.",
                    "image" => "/images/rocket-3/rocket3R221/rocket221RCaro3.avif"
                  ],
                  [
                    "title" => "Комфортно седиште за возачот и за сопатникот",
                    "desc" => "Трицилиндричен мотор 2500cc - најголемиот светски сериски мотоцикл. Со максимална моќност од 167 КС и вртежен момент од 221 Nm, обезбедувајќи неспоредливо забрзување и перформанси.",
                    "image" => "/images/rocket-3/rocket3R221/rocket221RCaro4.avif"

                  ],
                  [
                    "title" => "Уникатно Возачко Искуство",
                    "desc" => "Целосно прилагодливи амортизери Showa, прилагодлива вилушка од Showa од 47 mm, премиум сопирачки Brembo Stylema, задна гума од 240 mm и прилагодлива ергономија ви нудат заповедно, удобно и префинето возење.",
                    "image" => "/images/rocket-3/rocket3R221/rocket221RCaro5.avif"

                  ],
                  [
                    "title" => "Технологија фокусирана на возачот",
                    "desc" => "Најсовремена технологија на дофат на раката, вклучувајќи TFT инструменти со осветлени коцки со прекинувач, оптимизиран ABS во свијоци и контрола на влечење, четири режими на возење, контрола на патувањето, па дури и USB приклучок.",
                    "image" => "/images/rocket-3/rocket3R221/rocket221RCaro6.avif"

                  ]
                  ]
              ]
        ];

        $motorcycleDataTwentyThree = [
            [
                "title" => "Rocket 3 GT Chrome Edition",
                "model" => "rocket-3-gt-chrome-edition-2023",
                "category" => "rocket-3",
                "subFamilyCategory" => "rocket-3",
                "edition" => "chrome",
                "price" => 26890,
                "specs" => [
                  "cc" => 398,
                  "hp" => 20,
                  "torque" => 37.5,
                  "horsePower" => 40,
                  "serviceInterval" => "16.000km",
                  "motorType" => "TR"
                ],
                "gallery" => [
                  "modelImage" => [
                    "src" => "/images/rocket-3/rocket3GTChrome/rocket3GTChrome.png",
                    "alt" => "Rocket 3 GT 221"
                  ],
                  "promoYoutubeVideo" => [
                    "src" => "https =>//www.youtube.com/embed/2_leddMwH4Q",
                    "alt" => "Rocket 3 GT Chrome Edition"
                  ]
                ],
                "bikeCollorPalletteGallery" => [
                  "default" => "/images/rocket-3/rocket3GTChrome/rocket3GTChrome.png",
                  "color1" => "/images/rocket-3/rocket3GTChrome/rocket3GTChrome.png",
                  "color1Reversed" => "/images/rocket-3/rocket3GTChrome/rocket3GTChromeReversed.png"
                ],
                "customizationColors" => [
                  [
                    "colorName" => "Chrome / Diablo Red",
                    "price" => null,
                    "image" => "/images/custom-collors/chromeDiabloRed.jpg",
                    "colorCode" => "color1"
                  ]
                ],
                "shortSpecInfo" => [
                  "info1" => "Три-цилиндричен Rocket 3 мотор со 2,500cc зафатнина",
                  "info2" => "167 коњски сили при 6000rpm",
                  "info3" => "Обртен момент од 221Nm"
                ],
                "subFamilyPromo" => [
                  "title" => "НОВИОТ ROCKET 3 GT CHROME EDITION",
                  "desc" => "Врвни перформанси и релаксирана возачка позиција. Цени од €16,990.00."
                ],
                "bikePageInfo" => [
                  "topDesc" => [
                    "desc1" => "Рекордни перформанси, опуштена положба на возење и способност за патување без напор. Сега прекрасно завиткано во хром, само една година."
                  ]
                ],
                "features" => [
                  [
                    "title" => "Мотор",
                    "desc" => "Нов 2,500cc три-цилиндарски Rocket 3 мотор - заштедени 18кг тежина во спротива со претходната генерација"
                  ],
                  [
                    "title" => "Сила и Обртен Момент",
                    "desc" => "2.73 секунди од 0 до 100 km/h"
                  ],
                  [
                    "title" => "Светло",
                    "desc" => "Карактеристични двојни LED светла со триаголно Triumph лого"
                  ],
                  [
                    "title" => "Систем за Издувни гасови",
                    "desc" => "Прекрасен hydro-formed издувна цевка"
                  ],
                  [
                    "title" => "Резервоар",
                    "desc" => "Мускулест 18 литарски резервоар со “Monza Style“ полиран центар и капаче"
                  ],
                  [
                    "title" => "Тркала",
                    "desc" => "20 жични тркала"
                  ],
                  [
                    "title" => "Позиција за Возење",
                    "desc" => "Прилагодлива ергономија"
                  ],
                  [
                    "title" => "Квачило",
                    "desc" => "Хидраулично квачило со ассистенција"
                  ],
                  [
                    "title" => "Седиште",
                    "desc" => "Комфортно седиште за возачот и за патхникот"
                  ],
                  [
                    "title" => "Модови за возење",
                    "desc" => "Четири мода за возење (Road, Rain, Sport and Rider - програмиран од возачот)"
                  ],
                  [
                    "title" => "Инструментна Плоча",
                    "desc" => "Втора генерација TFT екран со многу функционалности"
                  ],
                  [
                    "title" => "ABS",
                    "desc" => "Оптимизиран ABS и систем за пролизгување"
                  ],
                  [
                    "title" => "Темпомат",
                    "desc" => "Вграден Темпомат"
                  ],
                  [
                    "title" => "Keyless",
                    "desc" => "Вграден Keyless и Брава за заклучување"
                  ]
                  ,
                  [
                    "title" => "Асистент за брзини",
                    "desc" => "Опционалнен Triumph Shift Assist систем"
                  ],
                  [
                    "title" => "Систем за контрола на притисок во пневматици",
                    "desc" => "Опционален аксесоар"
                  ]
                  ,
                  [
                    "title" => "Поврзување",
                    "desc" => "Бесплатна 'My Triumph App' (достапна за iOS и Android)"
                  ],
                  [
                    "title" => "Bluetooth",
                    "desc" => "Вградени функционалности за поврзување со телефон и слушање музика преку Bluetooth®"
                  ],
                  [
                    "title" => "GoPro",
                    "desc" => "Опционален додаток"
                  ]
                ],
                "bikePageCarousell" => [
                  [
                    "title" => "Хромиран Резервоар",
                    "desc" => "Впечатлив хромиран резервоар за гориво со препознатлива Diablo Red боја и триаголна значка - централниот дел на овој спектакуларен дизајн..",
                    "image" => "/images/rocket-3/rocket3GTChrome/rocket3GTChromeCaro1.avif"

                  ],
                  [
                    "title" => "Обоени панели со “Jet Black“ варијанта",
                    "desc" => "Елегантните делови обоени со Jet Black прекрасно се контрастираат со беспрекорниот хром.",
                    "image" => "/images/rocket-3/rocket3GTChrome/rocket3GTChromeCaro2.avif"
                  ],

                  [
                    "title" => "Четкани алуминиумски детали",
                    "desc" => "Држачите за браници и радијатор се финиширани со Matt Aluminium Silver боја кои дополнително го комплиментираат изгледот.",
                    "image" => "/images/rocket-3/rocket3GTChrome/rocket3GTChromeCaro3.avif"
                  ],
                  [
                    "title" => "Chrome Edition Kit",
                    "desc" => "Достапен е и ексклузивен комплет додатоци Rocket 3 GT Chrome Edition за да додадете уште попрепознатлив стил. Погледнете што е достапно преку врската со конфигураторот..",
                    "image" => "/images/rocket-3/rocket3GTChrome/rocket3GTChromeCaro4.avif"

                  ],
                  [
                    "title" => "Неверојатна Сила и Обртен Момент",
                    "desc" => "Мотор со три цилиндри 2500cc. - најголемиот светски сериски мотоцикл. Со максимална моќност од 167 КС и вртежен момент од 221 Nm, обезбедувајќи неспоредливо забрзување и перформанси.",
                    "image" => "/images/rocket-3/rocket3GTChrome/rocket3GTChromeCaro5.avif"

                  ],
                  [
                    "title" => "Технологија фокусирана на возачот",
                    "desc" => "Најсовремена технологија на дофат на раката, вклучувајќи TFT инструменти со осветлени коцки со прекинувач, оптимизиран ABS во свијоци и контрола на влечење, четири режими на возење, контрола на патувањето, па дури и USB приклучок.",
                    "image" => "/images/rocket-3/rocket3GTChrome/rocket3GTChromeCaro6.avif"

                  ]
                  ]
              ]
        ];


        $motorcycleDataTwentyFour = [
            [
                "title" => "Rocket 3 GT 221",
                "model" => "rocket-3-gt-221-edition-2022",
                "category" => "rocket-3",
                "subFamilyCategory" => "rocket-3",
                "edition" => "special",
                "price" => 26890,
                "specs" => [
                  "cc" => 398,
                  "hp" => 20,
                  "torque" => 37.5,
                  "horsePower" => 40,
                  "serviceInterval" => "16.000km",
                  "motorType" => "TR"
                ],
                "gallery" => [
                  "modelImage" => [
                    "src" => "/images/rocket-3/rocket3GT221/rocket3GT221RedSaphireBlack.png",
                    "alt" => "Rocket 3 GT Chrome Edition"
                  ],
                  "promoYoutubeVideo" => [
                    "src" => "https =>//www.youtube.com/embed/J_3kLwLe2Jc",
                    "alt" => "Rocket 3 GT 221"
                  ]
                ],
                "bikeCollorPalletteGallery" => [
                  "default" => "/images/rocket-3/rocket3GT221/rocket3GT221RedSaphireBlack.png",
                  "color1" => "/images/rocket-3/rocket3GT221/rocket3GT221RedSaphireBlack.png",
                  "color1Reversed" => "/images/rocket-3/rocket3GT221/rocket3GT221RedSaphireBlackReversed.png"
                ],
                "customizationColors" => [
                  [
                    "colorName" => "Red Hopper / Sapphire Black",
                    "price" => null,
                    "image" => "/images/custom-collors/carnivalRedSapphireBlack.jpg",
                    "colorCode" => "color1"
                  ]
                ],
                "shortSpecInfo" => [
                  "info1" => "Три-цилиндричен Rocket 3 мотор со 2,500cc зафатнина",
                  "info2" => "167 коњски сили при 6000rpm",
                  "info3" => "Обртен момент од 221Nm"
                ],
                "subFamilyPromo" => [
                  "title" => "НОВиот Rocket 3 GT Chrome Edition",
                  "desc" => "Врвни перформанси со релаксиран крузерски карактер отсега со нов специјализиран хромиран дизајн. Импресивен, дискретен - достапен само една година. Цени од €26,890.00."
                ],
                "bikePageInfo" => [
                  "topDesc" => [
                    "desc1" => "Во чест на водечките светски 221 Nm вртежен момент од најголемиот сериски мотор некогаш направен, со ексклузивно специјално издание и за Rocket 3 GT."
                  ]
                ],
                "features" => [
                  [
                    "title" => "Мотор",
                    "desc" => "Нов 2,500cc три-цилиндарски Rocket 3 мотор - заштедени 18кг тежина во спротива со претходната генерација"
                  ],
                  [
                    "title" => "Сила и Обртен Момент",
                    "desc" => "2.73 секунди од 0 до 100 km/h"
                  ],
                  [
                    "title" => "Светло",
                    "desc" => "Карактеристични двојни LED светла со триаголно Triumph лого"
                  ],
                  [
                    "title" => "Систем за Издувни гасови",
                    "desc" => "Прекрасен hydro-formed издувна цевка"
                  ],
                  [
                    "title" => "Резервоар",
                    "desc" => "Мускулест 18 литарски резервоар со “Monza Style“ полиран центар и капаче"
                  ],
                  [
                    "title" => "Тркала",
                    "desc" => "20 жични тркала"
                  ],
                  [
                    "title" => "Позиција за Возење",
                    "desc" => "Прилагодлива ергономија"
                  ],
                  [
                    "title" => "Квачило",
                    "desc" => "Хидраулично квачило со ассистенција"
                  ],
                  [
                    "title" => "Седиште",
                    "desc" => "Комфортно седиште за возачот и за патхникот"
                  ],
                  [
                    "title" => "Модови за возење",
                    "desc" => "Четири мода за возење (Road, Rain, Sport and Rider - програмиран од возачот)"
                  ],
                  [
                    "title" => "Инструментна Плоча",
                    "desc" => "Втора генерација TFT екран со многу функционалности"
                  ],
                  [
                    "title" => "ABS",
                    "desc" => "Оптимизиран ABS и систем за пролизгување"
                  ],
                  [
                    "title" => "Темпомат",
                    "desc" => "Вграден Темпомат"
                  ],
                  [
                    "title" => "Keyless",
                    "desc" => "Вграден Keyless и Брава за заклучување"
                  ]
                  ,
                  [
                    "title" => "Асистент за брзини",
                    "desc" => "Опционалнен Triumph Shift Assist систем"
                  ],
                  [
                    "title" => "Систем за контрола на притисок во пневматици",
                    "desc" => "Опционален аксесоар"
                  ]
                  ,
                  [
                    "title" => "Поврзување",
                    "desc" => "Бесплатна 'My Triumph App' (достапна за iOS и Android)"
                  ],
                  [
                    "title" => "Bluetooth",
                    "desc" => "Вградени функционалности за поврзување со телефон и слушање музика преку Bluetooth®"
                  ],
                  [
                    "title" => "GoPro",
                    "desc" => "Опционален додаток"
                  ]
                ],
                "bikePageCarousell" => [
                  [
                    "title" => "Хромиран Резервоар",
                    "desc" => "Впечатлив хромиран резервоар за гориво со препознатлива Diablo Red боја и триаголна значка - централниот дел на овој спектакуларен дизајн..",
                    "image" => "/images/rocket-3/rocket3GTChrome/rocket3GTChromeCaro1.avif"

                  ],
                  [
                    "title" => "Обоени панели со “Jet Black“ варијанта",
                    "desc" => "Елегантните делови обоени со Jet Black прекрасно се контрастираат со беспрекорниот хром.",
                    "image" => "/images/rocket-3/rocket3GTChrome/rocket3GTChromeCaro2.avif"
                  ],

                  [
                    "title" => "Четкани алуминиумски детали",
                    "desc" => "Држачите за браници и радијатор се финиширани со Matt Aluminium Silver боја кои дополнително го комплиментираат изгледот.",
                    "image" => "/images/rocket-3/rocket3GTChrome/rocket3GTChromeCaro3.avif"
                  ],
                  [
                    "title" => "Chrome Edition Kit",
                    "desc" => "Достапен е и ексклузивен комплет додатоци Rocket 3 GT Chrome Edition за да додадете уште попрепознатлив стил. Погледнете што е достапно преку врската со конфигураторот..",
                    "image" => "/images/rocket-3/rocket3GTChrome/rocket3GTChromeCaro4.avif"

                  ],
                  [
                    "title" => "Неверојатна Сила и Обртен Момент",
                    "desc" => "Мотор со три цилиндри 2500cc. - најголемиот светски сериски мотоцикл. Со максимална моќност од 167 КС и вртежен момент од 221 Nm, обезбедувајќи неспоредливо забрзување и перформанси.",
                    "image" => "/images/rocket-3/rocket3GTChrome/rocket3GTChromeCaro5.avif"

                  ],
                  [
                    "title" => "Технологија фокусирана на возачот",
                    "desc" => "Најсовремена технологија на дофат на раката, вклучувајќи TFT инструменти со осветлени коцки со прекинувач, оптимизиран ABS во свијоци и контрола на влечење, четири режими на возење, контрола на патувањето, па дури и USB приклучок.",
                    "image" => "/images/rocket-3/rocket3GTChrome/rocket3GTChromeCaro6.avif"

                  ]]
              ]
        ];

        $motorcycleDataTwentyFive = [
            [
                "title" => "Rocket 3 R Chrome Edition",
                "model" => "rocket-3-r-chrome-edition-2023",
                "category" => "rocket-3",
                "subFamilyCategory" => "rocket-3",
                "edition" => "chrome",
                "price" => 26190,
                "specs" => [
                  "cc" => 398,
                  "hp" => 20,
                  "torque" => 37.5,
                  "horsePower" => 40,
                  "serviceInterval" => "16.000km",
                  "motorType" => "TR"
                ],
                "gallery" => [
                  "modelImage" => [
                    "src" => "/images/rocket-3/rocket3RChrome/rocket3RChrome.png",
                    "alt" => "Rocket 3 R Chrome Edition"
                  ],
                  "promoYoutubeVideo" => [
                    "src" => "https =>//www.youtube.com/embed/2_leddMwH4Q",
                    "alt" => "Rocket 3 R Chrome Edition"
                  ]
                ],
                "bikeCollorPalletteGallery" => [
                  "default" => "/images/rocket-3/rocket3RChrome/rocket3RChrome.png",
                  "color1" => "/images/rocket-3/rocket3RChrome/rocket3RChrome.png",
                  "color1Reversed" => "/images/rocket-3/rocket3RChrome/rocket3RChromeReversed.png"
                ],
                "customizationColors" => [
                  [
                    "colorName" => "Chrome / Jet Black",
                    "price" => null,
                    "image" => "/images/custom-collors/chromeJetBlack.jpg",
                    "colorCode" => "color1"
                  ]
                ],
                "shortSpecInfo" => [
                  "info1" => "Три-цилиндричен Rocket 3 мотор со 2,500cc зафатнина",
                  "info2" => "167 коњски сили при 6000rpm",
                  "info3" => "Обртен момент од 221Nm"
                ],
                "subFamilyPromo" => [
                  "title" => "НОВиот Rocket 3 r Chrome Edition",
                  "desc" => "Врвниот “roadster“ сега со хромирани детали врз Jet Black боја.Достапен само една година. Цени од €26,190.00."
                ],
                "bikePageInfo" => [
                  "topDesc" => [
                    "desc1" => "Достапен само за една година, Chrome Edition серијата уште повеќе го разубавува Rocekt 3 R."
                  ]
                ],
                "features" => [
                  [
                    "title" => "Мотор",
                    "desc" => "Нов 2,500cc три-цилиндарски Rocket 3 мотор - заштедени 18кг тежина во спротива со претходната генерација"
                  ],
                  [
                    "title" => "Сила и Обртен Момент",
                    "desc" => "2.73 секунди од 0 до 100 km/h"
                  ],
                  [
                    "title" => "Светло",
                    "desc" => "Карактеристични двојни LED светла со триаголно Triumph лого"
                  ],
                  [
                    "title" => "Систем за Издувни гасови",
                    "desc" => "Прекрасен hydro-formed издувна цевка"
                  ],
                  [
                    "title" => "Резервоар",
                    "desc" => "Мускулест 18 литарски резервоар со “Monza Style“ полиран центар и капаче"
                  ],
                  [
                    "title" => "Тркала",
                    "desc" => "20 жични тркала"
                  ],
                  [
                    "title" => "Позиција за Возење",
                    "desc" => "Прилагодлива ергономија"
                  ],
                  [
                    "title" => "Квачило",
                    "desc" => "Хидраулично квачило со ассистенција"
                  ],
                  [
                    "title" => "Седиште",
                    "desc" => "Комфортно седиште за возачот и за патхникот"
                  ],
                  [
                    "title" => "Модови за возење",
                    "desc" => "Четири мода за возење (Road, Rain, Sport and Rider - програмиран од возачот)"
                  ],
                  [
                    "title" => "Инструментна Плоча",
                    "desc" => "Втора генерација TFT екран со многу функционалности"
                  ],
                  [
                    "title" => "ABS",
                    "desc" => "Оптимизиран ABS и систем за пролизгување"
                  ],
                  [
                    "title" => "Темпомат",
                    "desc" => "Вграден Темпомат"
                  ],
                  [
                    "title" => "Keyless",
                    "desc" => "Вграден Keyless и Брава за заклучување"
                  ]
                  ,
                  [
                    "title" => "Асистент за брзини",
                    "desc" => "Опционалнен Triumph Shift Assist систем"
                  ],
                  [
                    "title" => "Систем за контрола на притисок во пневматици",
                    "desc" => "Вградено"
                  ]
                  ,
                  [
                    "title" => "Навигазија",
                    "desc" => "Опционален аксесоар - Turn by Turn Систем (изработен во соработка со Google)"
                  ],
                  [
                    "title" => "Bluetooth",
                    "desc" => "Вградени функционалности за поврзување со телефон и слушање музика преку Bluetooth®"
                  ],
                  [
                    "title" => "GoPro",
                    "desc" => "Опционален додаток"
                  ]
                ],
                "bikePageCarousell" => [
                  [
                    "title" => "Ексклузивен",
                    "desc" => "Специјално издание на бои и графики, достапни само за една година, во комбинација со водечките светски перформанси, способности и мускулестата силуета на Rocket 3 R..",
                    "image" => "/images/rocket-3/rocket3R221/rocket221RCaro1.avif"
                  ],
                  [
                    "title" => "Уникатни Графики",
                    "desc" => "Стилската графика на резервоарот ги покажува неверојатните бројки на перформансите на ракетата - вртежен момент, големината на моторот, моќноста, отворот и ударот - додека препознатливата графика со капаче од 221 колена нуди храбар и уникатен изглед.",
                    "image" => "/images/rocket-3/rocket3R221/rocket221RCaro2.avif"

                  ],
                  [
                    "title" => "Специјално комбинирани бои за 221 серијалот",
                    "desc" => "Неверојатна смела шема на боја која вклучува резервоари и предни крила во карактеристична боја на Red Hopper, како и краци на крилата, куќиште на фаровите, решетка, странични панели и задна пластика во црна сафир.",
                    "image" => "/images/rocket-3/rocket3R221/rocket221RCaro3.avif"
                  ],
                  [
                    "title" => "Комфортно седиште за возачот и за сопатникот",
                    "desc" => "Трицилиндричен мотор 2500cc - најголемиот светски сериски мотоцикл. Со максимална моќност од 167 КС и вртежен момент од 221 Nm, обезбедувајќи неспоредливо забрзување и перформанси.",
                    "image" => "/images/rocket-3/rocket3R221/rocket221RCaro4.avif"

                  ],
                  [
                    "title" => "Уникатно Возачко Искуство",
                    "desc" => "Целосно прилагодливи амортизери Showa, прилагодлива вилушка од Showa од 47 mm, премиум сопирачки Brembo Stylema, задна гума од 240 mm и прилагодлива ергономија ви нудат заповедно, удобно и префинето возење.",
                    "image" => "/images/rocket-3/rocket3R221/rocket221RCaro5.avif"

                  ],
                  [
                    "title" => "Технологија фокусирана на возачот",
                    "desc" => "Најсовремена технологија на дофат на раката, вклучувајќи TFT инструменти со осветлени коцки со прекинувач, оптимизиран ABS во свијоци и контрола на влечење, четири режими на возење, контрола на патувањето, па дури и USB приклучок.",
                    "image" => "/images/rocket-3/rocket3R221/rocket221RCaro6.avif"

                  ]]
              ]
        ];

        $motorcycleDataTwentySix = [
            [
                "title" => "Speed 400",
                "model" => "speed-400",
                "category" => "classics",
                "subFamilyCategory" => "speed-400",
                "edition" => "classics",
                "price" => 5690,
                "desc" => "Со класичниот изглед Speed 400, навистина ја носи онаа modern-classic ДНК во неговата крв.",
                "specs" => [
                  "cc" => 398,
                  "hp" => 20,
                  "torque" => 37.5,
                  "horsePower" => 40,
                  "serviceInterval" => "16.000km",
                  "motorType" => "TR"
                ],
                "gallery" => [
                  "modelImage" => [
                    "src" => "/images/classics/speed400Model.png",
                    "alt" => "Speed 400"
                  ],
                  "promoYoutubeVideo" => [
                    "src" => "https =>//www.youtube.com/embed/omKdaaynGCg",
                    "alt" => "Speed 400 Youtube Video"
                  ]
                ],
                "bikeCollorPalletteGallery" => [
                  "default" => "/images/classics/speed400CarnivalRed.png",
                  "color1" => "/images/classics/speed400CarnivalRed.png",
                  "color1Reversed" => "/images/classics/speed400CarnivalRedReversed.png",
                  "color2" => "/images/classics/speed400CaspianBlue.png",
                  "color2Reversed" => "/images/classics/speed400CaspianBlueStormGreyReversed.png",
                  "color3" => "/images/classics/speed400PhantomBlack.png",
                  "color3Reversed" => "/images/classics/speed400phantomBlackStormGreyReversed.png"
                ],
                "customizationColors" => [
                  [
                    "colorName" => "Carnival Red / Storm Gray",
                    "price" => null,
                    "image" => "/images/custom-collors/carnivalRedStormGrey.jpg",
                    "colorCode" => "color1"
                  ],
                  [
                    "colorName" => "Caspian Blue / Storm Gray",
                    "price" => null,
                    "image" => "/images/custom-collors/caspianBlueStormGray.jpg",
                    "colorCode" => "color2"
                  ],
                  [
                    "colorName" => "Phantom Black / Storm Gray",
                    "price" => null,
                    "image" => "/images/custom-collors/phantomBlackStormGrey.jpg",
                    "colorCode" => "color3"
                  ]
                ],
                "shortSpecInfo" => [
                  "info1" => "398cc TR Мотор",
                  "info2" => "16 000 km сервисен интервал",
                  "info3" => "Достапен од Јануари 2024."
                ],
                "features" => [
                  [
                    "title" => "Мотор",
                    "desc" => "TR series мотор (Euro 5 compliant))"
                  ],
                  [
                    "title" => "Менувач",
                    "desc" => "6-брзински менувач со асистенција на квачило"
                  ],
                  [
                    "title" => "Систем за Пролизгување",
                    "desc" => "Ride-by-wire со автоматски систем за пролизгување"
                  ],
                  [
                    "title" => "Ергономија",
                    "desc" => "Висина на седиште 790мм, тенка половица и возбудлива ергономија"
                  ],
                  [
                    "title" => "Шасија",
                    "desc" => "Лесна шасија со задна вилушка на штрафови и алуминиумска предна вилушка"
                  ],
                  [
                    "title" => "Суспензија",
                    "desc" => "43мм предна суспензија и заден амортизер со подесување"
                  ],
                  [
                    "title" => "Сопирачки",
                    "desc" => "300мм дискови и клешти со АВЅ"
                  ],
                  [
                    "title" => "ИНструментна Плоча",
                    "desc" => "LCD дисплеј со аналоген мерач на брзина"
                  ],
                  [
                    "title" => "Светло",
                    "desc" => "LED главни и дневни светла"
                  ],
                  [
                    "title" => "Сервисен Интервал",
                    "desc" => "Лидер во класата со 16,000км сервисен интервал"
                  ]
                ],
                "bikePageCarousell" => [
                  [
                    "title" => "Стил и ДНК",
                    "desc" => "Од класичниот мотор и презисно обликуваниот резервоар за гориво па се до премиум боја, извонредниот стил и силуетата која не се заборава, Speed 400 сигурно е Triumph.",
                    "image" => "/images/classics/speed400/speed400BikePageCaro1.avif"
                  ],
                  [
                    "title" => "Луксузни финиши",
                    "desc" => "Препознатливиот пескарен финиш на моторот, елоксирани златни вилушки, високо квалитетна боја и извонредните детали покажуваат дека Speed 400 е изработен по највисоки стандарди.",
                    "image" => "/images/classics/speed400/speed400BikePageCaro2.avif"
                  ],
                  [
                    "title" => "TR Мотори",
                    "desc" => "Најновата TR серија на мотори ги комбинира најновите технологии со модерно-класични естетски детали и нуди топ перформанси, како и оној препознатливо чувство кога возите Triumph мотор а и непогрешливиот звук од издувната цевка.",
                    "image" => "/images/classics/speed400/speed400BikePageCaro3.avif"
                  ],
                  [
                    "title" => "Шасија и Суспензија",
                    "desc" => "Нова “roadster“ шасија и суспензијата од високо ниво, испорачуваат перфектна позиција за возење и за искусни и за неискусни возачи. .",
                    "image" => "/images/classics/speed400/speed400BikePageCaro4.avif"
                  ],
                  [
                    "title" => "Ергономија",
                    "desc" => "Speed 400 е наменет за секого, па така на него комотно ќе се чувствуваат возачи од секакви димензии. Благодарејки на неговата тенка половина, атрактивна и природна возачка позиција комбинира комфорт и самодоверба при возење на моторот.",
                    "image" => "/images/classics/speed400/speed400BikePageCaro5.avif"
                  ],
                  [
                    "title" => "Тркала и Гуми",
                    "desc" => "Лесни 10-жични алуминиумски тркала од 17 инчи споени со гуми од премиум брендови, нудат самодоверба во сите услови.",
                    "image" => "/images/classics/speed400/speed400BikePageCaro6.avif"
                  ],
                  [
                    "title" => "Сопирачки",
                    "desc" => "Респонсивноста и Самодовербата при запирање произлегува од сопирачки со клешти од по две клипчиња за запирање, дискови и Bosch ABS.",
                    "image" => "/images/classics/speed400/speed400BikePageCaro7.avif"
                  ],
                  [
                    "title" => "Технологија",
                    "desc" => "Speed 400 e буквално натоварен со модерна технологија која е фокусирана на возачот. Истата е составена од систем за контрола на пролизгување, асистенција на квачило, Bosch ABS, LED расвета и сосема нова инструментна табла која се состои од аналоген брзино-метар и LCD екран.",
                    "image" => "/images/classics/speed400/speed400BikePageCaro8.avif"
                  ],
                  [
                    "title" => "Безбедност",
                    "desc" => "Speed 400 е опремен со волан кој се заклучува и имобилизатор против кражби. Исто така во клучот на Speed 400 е вграден и сигурносен чип кој обезбедува моторот да биде запален само од страна на својот сопственик.",
                    "image" => "/images/classics/speed400/speed400BikePageCaro9.avif"
                  ],
                  [
                    "title" => "Вредност",
                    "desc" => "Со висока спецификација, квалитет и перформанси при мали трошоци за одржување со 16,000км сервисен интервал и две годишна гаранција која не истекува по одредена помината километража - Speed 400 е од голема вредност..",
                    "image" => "/images/classics/speed400/speed400BikePageCaro10.avif"
                  ]
                ],
                "subFamilyPromo" => [
                  "title" => "Speed 400",
                  "desc" => "Уникатен Модерен Класик кој го поседува уникатниот 'roadster' дизајн на Triumph во својата ДНК. Пристигнува во Јануари 2024. Цени од: €5,690.00"
                ]
              ]
        ];

        $motorcycleDataTwentySeven = [
            [
                "title" => "Scrambler 400 X",
                "model" => "scrambler-400-x",
                "category" => "classics",
                "subFamilyCategory" => "scrambler-400-x",
                "edition" => "classics",
                "desc" => "Scrambler 400 X - Подготвен за секаков на подлога.",
                "price" => 6390,
                "specs" => [
                  "cc" => 398,
                  "hp" => 20,
                  "torque" => 37.5,
                  "horsePower" => 40,
                  "serviceInterval" => "16.000km",
                  "motorType" => "TR"
                ],
                "bikeCollorPalletteGallery" => [
                  "default" => "/images/classics/scrambler400X/scrambler400XKhakiGreen.png",
                  "color1" => "/images/classics/scrambler400X/scrambler400XKhakiGreen.png",
                  "color1Reversed" => "/images/classics/scrambler400X/scrambler400XKhakiGreenReversed.png",
                  "color2" => "/images/classics/scrambler400X/scrambler400XRedBlack.png",
                  "color2Reversed" => "/images/classics/scrambler400X/scrambler400XRedBlackReversed.png",
                  "color3" => "/images/classics/scrambler400X/scrambler400XBlackSilver.png",
                  "color3Reversed" => "/images/classics/scrambler400X/scrambler400XBlackSilverReversed.png"
                ],
                "customizationColors" => [
                  [
                    "colorName" => "Matt Khaki Green / Fusion White",
                    "price" => null,
                    "image" => "/images/custom-collors/mattKhakiGreenFusionWhite.jpg",
                    "colorCode" => "color1"
                  ],
                  [
                    "colorName" => "Carnival Red / Saphire Black",
                    "price" => null,
                    "image" => "/images/custom-collors/carnivalRedSapphireBlack.jpg",
                    "colorCode" => "color2"
                  ],
                  [
                    "colorName" => "Phantom Black / Silver Ie",
                    "price" => null,
                    "image" => "/images/custom-collors/phantomBlackStormGrey.jpg",
                    "colorCode" => "color3"
                  ]
                ],
                "gallery" => [
                  "modelImage" => [
                    "src" => "/images/classics/scrambler400X/scrambler400XKhakiGreen.png",
                    "alt" => "Scrambler 400 x"
                  ]
                ],
                "shortSpecInfo" => [
                  "info1" => "398cc TR Мотор",
                  "info2" => "16 000 km сервисен интервал",
                  "info3" => "Достапен од Јануари 2024."
                ],
                "subFamilyPromo" => [
                  "title" => "Scrambler 400 X",
                  "desc" => "Уникатен Модерен Класик кој го поседува уникатниот 'roadster' дизајн на Triumph во својата ДНК. Пристигнува во Јануари 2024. Цени од: €5,690.00"
                ]
              ]
        ];

        $motorcycleDataTwentyEight = [
            [
                "title" => "Speed Twin 900",
                "model" => "speed-twin-900",
                "category" => "classics",
                "subFamilyCategory" => "speed-twin-900",
                "edition" => "900cc",
                "desc" => "Возбудливи перформанси и управување кое инспирира самодоверба, сега со уште повеќе комфорт и стил.",
                "price" => 10390,
                "specs" => [
                  "cc" => 398,
                  "hp" => 20,
                  "torque" => 37.5,
                  "horsePower" => 40,
                  "serviceInterval" => "16.000km",
                  "motorType" => "TR"
                ],
                "bikeCollorPalletteGallery" => [
                  "default" => "/images/classics/speedTwin900/speedTwin900StealthGreen.png",
                  "color1" => "/images/classics/speedTwin900/speedTwin900StealthGreen.png",
                  "color1Reversed" => "/images/classics/speedTwin900/speedTwin900StealthGreenReversed.png",
                  "color2" => "/images/classics/speedTwin900/speedTwin900Black.png",
                  "color2Reversed" => "/images/classics/speedTwin900/speedTwin900BlackReversed.png",
                  "color3" => "/images/classics/speedTwin900/speedTwin900CarnivalRed.png",
                  "color3Reversed" => "/images/classics/speedTwin900/speedTwin900CarnivalRedReversed.png",
                  "color4" => "/images/classics/speedTwin900/speedTwin900Competition.png",
                  "color4Reversed" => "/images/classics/speedTwin900/speedTwin900CompetitionReversed.png"
                ],
                "customizationColors" => [
                  [
                    "colorName" => "Stealth Edition - Saphire Green",
                    "price" => null,
                    "image" => "/images/custom-collors/phantomGreenSilverGreen.png",
                    "colorCode" => "color1"
                  ],
                  [
                    "colorName" => "Jett Black",
                    "price" => null,
                    "image" => "/images/custom-collors/jetBlack.jpg",
                    "colorCode" => "color2"
                  ],
                  [
                    "colorName" => "Carnival Red / Saphire Black",
                    "price" => 200,
                    "image" => "/images/custom-collors/carnivalRedSapphireBlack.jpg",
                    "colorCode" => "color3"
                  ]
                  ,
                  [
                    "colorName" => "Competition Green / Phantom Black",
                    "price" => 200,
                    "image" => "/images/custom-collors/competitionGreenPhantomBlack.jpg",
                    "colorCode" => "color4"
                  ]
                ],
                "gallery" => [
                  "modelImage" => [
                    "src" => "/images/classics/speedТwin900Model.png",
                    "alt" => "Speed Twin 900"
                  ],
                  "promoYoutubeVideo" => [
                    "src" => "https =>//www.youtube.com/embed/dGfqpR5bwyM",
                    "alt" => "Speed 400 Youtube Video"
                  ]
                ],
                "shortSpecInfo" => [
                  "info1" => "Новата Stealth Edition Серија е Достапна"
                ],
                "subFamilyPromo" => [
                  "title" => "Scrambler 400 X",
                  "desc" => "Возбудливи перформанси и управување што инспирира самодоверба, сега со уште поголема удобност и стил Цени од: €10,390.00"
                ]
              ]
        ];


        $motorcycleDataTwentyNine = [
            [
                "title" => "Bonneville Bobber",
                "model" => "bobber-2023",
                "category" => "classics",
                "subFamilyCategory" => "bonneville-bobber",
                "edition" => "classics",
                "price" => 16290,
                "specs" => [
                  "cc" => 398,
                  "hp" => 20,
                  "torque" => 37.5,
                  "horsePower" => 40,
                  "serviceInterval" => "16.000km",
                  "motorType" => "TR"
                ],
                "gallery" => [
                  "modelImage" => [
                    "src" => "/images/classics/bonnevilleBobberModel.png",
                    "alt" => "Bonneville Bobber"
                  ]
                ],
                "shortSpecInfo" => [
                  "info1" => "Новата Stealth Edition Серија е Достапна"
                ]
              ],
        ];

        $motorcycleDataThirty = [
            [
                "title" => "scrambler 1200 X (MY24)",
                "model" => "scrambler-1200-x-2024",
                "category" => "classics",
                "subFamilyCategory" => "scrambler-1200",
                "edition" => "classics",
                "price" => null,
                "specs" => [
                  "cc" => 398,
                  "hp" => 20,
                  "torque" => 37.5,
                  "horsePower" => 40,
                  "serviceInterval" => "16.000km",
                  "motorType" => "TR"
                ],
                "gallery" => [
                  "modelImage" => [
                    "src" => "/images/classics/scrambler1200XMy24Model.png",
                    "alt" => "scrambler 1200 X (MY24)"
                  ]
                ],
                "shortSpecInfo" => [
                  "info1" => "1,200cc Bonneville дво-цилинричен мотор",
                  "info2" => "Максимална јачина - 90 PS",
                  "info3" => "Максимален вртежен момент - 110 Nm"
                ]
              ],
        ];

        $motorcycleDataThirtyOne = [
            [
                "title" => "scrambler 1200 XE (MY24)",
                "model" => "scrambler-1200-xe-2024",
                "category" => "classics",
                "subFamilyCategory" => "scrambler-1200",
                "edition" => "classics",
                "price" => null,
                "specs" => [
                  "cc" => 398,
                  "hp" => 20,
                  "torque" => 37.5,
                  "horsePower" => 40,
                  "serviceInterval" => "16.000km",
                  "motorType" => "TR"
                ],
                "gallery" => [
                  "modelImage" => [
                    "src" => "/images/classics/scrambler1200XeMy24Model.png",
                    "alt" => "scrambler 1200 XE (MY24)"
                  ]
                ],
                "shortSpecInfo" => [
                  "info1" => "1,200cc Bonneville дво-цилинричен мотор",
                  "info2" => "Максимална јачина - 90 PS",
                  "info3" => "Максимален вртежен момент - 110 Nm"
                ]
              ],
            ];

            $motorcycleDataThirtyTwo = [
                [
                    "title" => "Scrambler 1200 XC (MY23)",
                    "model" => "scrambler-1200-xc-2023",
                    "category" => "classics",
                    "subFamilyCategory" => "scrambler-1200",
                    "edition" => "classics",
                    "price" => 15990,
                    "specs" => [
                      "cc" => 398,
                      "hp" => 20,
                      "torque" => 37.5,
                      "horsePower" => 40,
                      "serviceInterval" => "16.000km",
                      "motorType" => "TR"
                    ],
                    "gallery" => [
                      "modelImage" => [
                        "src" => "/images/classics/scrambler1200XcMy23Model.png",
                        "alt" => "Scrambler 1200 XC (MY23)"
                      ]
                    ],
                    "shortSpecInfo" => [
                      "info1" => "1,200cc Bonneville дво-цилинричен мотор",
                      "info2" => "Максимална јачина - 90 PS и вртежен момент - 110 Nm.",
                      "info3" => "Динамичен и многу способен мотор."
                    ]
                  ]
            ];

            $motorcycleDataThirtyThree = [
                [
                    "title" => "Scrambler 1200 XE (MY23)",
                    "model" => "scrambler-1200-xe-2023",
                    "category" => "classics",
                    "subFamilyCategory" => "scrambler-1200",
                    "edition" => "classics",
                    "price" => 16990,
                    "specs" => [
                      "cc" => 398,
                      "hp" => 20,
                      "torque" => 37.5,
                      "horsePower" => 40,
                      "serviceInterval" => "16.000km",
                      "motorType" => "TR"
                    ],
                    "gallery" => [
                      "modelImage" => [
                        "src" => "/images/classics/scrambler1200XeMy23Model.png",
                        "alt" => "Scrambler 1200 XE (MY23)"
                      ]
                    ],
                    "shortSpecInfo" => [
                      "info1" => "1,200cc Bonneville дво-цилинричен мотор",
                      "info2" => "Максимална јачина - 90 PS и вртежен момент - 110 Nm.",
                      "info3" => "Scrambler наменет за секого."
                    ]
                  ],
            ];

            $motorcycleDataThirtyFour = [
                [
                    "title" => "Bonneville Speedmaster",
                    "model" => "speedmaster-2023",
                    "category" => "classics",
                    "subFamilyCategory" => "bonneville-speedmaster",
                    "edition" => "classics",
                    "price" => 16290,
                    "specs" => [
                      "cc" => 398,
                      "hp" => 20,
                      "torque" => 37.5,
                      "horsePower" => 40,
                      "serviceInterval" => "16.000km",
                      "motorType" => "TR"
                    ],
                    "gallery" => [
                      "modelImage" => [
                        "src" => "/images/classics/bonnevilleSpeedmasterModel.png",
                        "alt" => "Bonneville Speedmaster"
                      ]
                    ],
                    "shortSpecInfo" => [
                      "info1" => "Новата Stealth Edition Серија е Достапна"
                    ]
                  ]
            ];


            $motorcycleDataThirtyFive = [
                [
                    "title" => "Speed Twin 1200",
                    "model" => "speed-twin-1200-2023",
                    "category" => "classics",
                    "subFamilyCategory" => "speed-twin-1200",
                    "edition" => "classics",
                    "price" => 14190,
                    "specs" => [
                      "cc" => 398,
                      "hp" => 20,
                      "torque" => 37.5,
                      "horsePower" => 40,
                      "serviceInterval" => "16.000km",
                      "motorType" => "TR"
                    ],
                    "gallery" => [
                      "modelImage" => [
                        "src" => "/images/classics/speedTwin1200Model.png",
                        "alt" => "Speed Twin 1200"
                      ]
                    ],
                    "shortSpecInfo" => [
                      "info1" => "Новата Stealth Edition Серија е Достапна"
                    ]
                  ]
            ];


            $motorcycleDataThirtySix = [
                [
                    "title" => "Scrambler 900",
                    "model" => "scrambler-900-2023",
                    "category" => "classics",
                    "subFamilyCategory" => "scrambler-900",
                    "edition" => "900cc",
                    "desc" => "Дрзок off-road карактер, врвна агилност и иконичен стил, со перформанси за забава на секаков терен.",
                    "price" => 11890,
                    "specs" => [
                      "cc" => 398,
                      "hp" => 20,
                      "torque" => 37.5,
                      "horsePower" => 40,
                      "serviceInterval" => "16.000km",
                      "motorType" => "TR"
                    ],
                    "gallery" => [
                      "modelImage" => [
                        "src" => "/images/classics/scrambler900Model.png",
                        "alt" => "Scrambler 900"
                      ]
                    ],
                    "shortSpecInfo" => [
                      "info1" => "Новата Stealth Edition Серија е Достапна"
                    ]
                  ],
                ];

                $motorcycleDataThirtySeven = [
                    [
                        "title" => "Bonneville T100",
                        "model" => "t100-2023",
                        "category" => "classics",
                        "subFamilyCategory" => "bonneville-t100",
                        "edition" => "900cc",
                        "desc" => "Bonneville T100 - еволуција на иконичен мотор сега уште полесен и посиле.",
                        "price" => 11690,
                        "specs" => [
                          "cc" => 398,
                          "hp" => 20,
                          "torque" => 37.5,
                          "horsePower" => 40,
                          "serviceInterval" => "16.000km",
                          "motorType" => "TR"
                        ],
                        "gallery" => [
                          "modelImage" => [
                            "src" => "/images/classics/bonnevilleT100Model.png",
                            "alt" => "Bonneville T100"
                          ]
                        ],
                        "shortSpecInfo" => [
                          "info1" => "Новата Stealth Edition Серија е Достапна"
                        ]
                      ],
                ];


                $motorcycleDataThirtyEight = [
                    [
                        "title" => "Bonneville T120",
                        "model" => "t120-2023",
                        "category" => "classics",
                        "subFamilyCategory" => "bonneville-t120",
                        "edition" => "classics",
                        "price" => 14290,
                        "specs" => [
                          "cc" => 398,
                          "hp" => 20,
                          "torque" => 37.5,
                          "horsePower" => 40,
                          "serviceInterval" => "16.000km",
                          "motorType" => "TR"
                        ],
                        "gallery" => [
                          "modelImage" => [
                            "src" => "/images/classics/bonnevilleT120Model.png",
                            "alt" => "Bonneville T100"
                          ]
                        ],
                        "shortSpecInfo" => [
                          "info1" => "Новата Stealth Edition Серија е Достапна"
                        ]
                      ]
                ];


                $motorcycleDataThirtyNine = [
                    [
                        "title" => "Bonneville T120 Black",
                        "model" => "t120-black-2023",
                        "category" => "classics",
                        "subFamilyCategory" => "bonneville-t120",
                        "edition" => "classics",
                        "price" => 14290,
                        "specs" => [
                          "cc" => 398,
                          "hp" => 20,
                          "torque" => 37.5,
                          "horsePower" => 40,
                          "serviceInterval" => "16.000km",
                          "motorType" => "TR"
                        ],
                        "gallery" => [
                          "modelImage" => [
                            "src" => "/images/classics/bonnevilleT120BlackModel.png",
                            "alt" => "Bonneville T120 Black"
                          ]
                        ],
                        "shortSpecInfo" => [
                          "info1" => "Новата Stealth Edition Серија е Достапна"
                        ]
                      ]
                ];


                $motorcycleDataFourty = [
                    [
                        "title" => "Thruxton Final Edition",
                        "model" => "thruxton-final-edition-2024",
                        "category" => "classics",
                        "subFamilyCategory" => "thruxton-rs",
                        "edition" => "classics",
                        "price" => 19690,
                        "specs" => [
                          "cc" => 398,
                          "hp" => 20,
                          "torque" => 37.5,
                          "horsePower" => 40,
                          "serviceInterval" => "16.000km",
                          "motorType" => "TR"
                        ],
                        "gallery" => [
                          "modelImage" => [
                            "src" => "/images/classics/thruxtonRsFinalEditionModel.png",
                            "alt" => "Thruxton Final Edition"
                          ]
                        ],
                        "shortSpecInfo" => [
                          "info1" => "1,200cc Thruxton тунинг мотор",
                          "info2" => "Повеќе сила, со подобра агилност.",
                          "info3" => "Неверојатни финиши на боја и стил."
                        ]
                      ],
                ];

                $motorcycleDataFourtyOne = [
                    [
                        "title" => "Thruxton RS",
                        "model" => "thruxton-rs-2023",
                        "category" => "classics",
                        "subFamilyCategory" => "thruxton-rs",
                        "edition" => "classics",
                        "price" => 17990,
                        "specs" => [
                          "cc" => 398,
                          "hp" => 20,
                          "torque" => 37.5,
                          "horsePower" => 40,
                          "serviceInterval" => "16.000km",
                          "motorType" => "TR"
                        ],
                        "gallery" => [
                          "modelImage" => [
                            "src" => "/images/classics/thruxtonRsModel.png",
                            "alt" => "Thruxton RS"
                          ]
                        ],
                        "shortSpecInfo" => [
                          "info1" => "1,200cc Thruxton тунинг мотор",
                          "info2" => "Повеќе сила, со подобра агилност во склоп со автентичната ДНК на 'Cafe-Racer' моторите.",
                          "info3" => "Неверојатни финиши на боја и стил."
                        ]
                      ]
                ];


                $motorcycleDataFourtyTwo = [
                    [
                        "title" => "Bobber Purple Stealth Edition",
                        "model" => "bobber-2023",
                        "category" => "classics",
                        "subFamilyCategory" => "bonneville-bobber",
                        "edition" => "stealth",
                        "price" => null,
                        "specs" => [
                          "cc" => 398,
                          "hp" => 20,
                          "torque" => 37.5,
                          "horsePower" => 40,
                          "serviceInterval" => "16.000km",
                          "motorType" => "TR"
                        ],
                        "gallery" => [
                          "modelImage" => [
                            "src" => "/images/classics/bobberStealth.avif",
                            "alt" => "Bobber Purple Stealth Edition"
                          ]
                        ],
                        "shortSpecInfo" => [
                          "info1" => "1,200cc Thruxton тунинг мотор",
                          "info2" => "Повеќе сила, со подобра агилност во склоп со автентичната ДНК на 'Cafe-Racer' моторите.",
                          "info3" => "Неверојатни финиши на боја и стил."
                        ]
                      ],
                    ];

           $motorcycleDataFourtyThree = [
            [
                "title" => "Scrambler 900 Orange Stealth Edition",
                "model" => "scrambler-900-2023",
                "category" => "classics",
                "subFamilyCategory" => "bonneville-scrambler-900",
                "edition" => "stealth",
                "price" => null,
                "specs" => [
                  "cc" => 398,
                  "hp" => 20,
                  "torque" => 37.5,
                  "horsePower" => 40,
                  "serviceInterval" => "16.000km",
                  "motorType" => "TR"
                ],
                "gallery" => [
                  "modelImage" => [
                    "src" => "/images/classics/scrambler900Orange.avif",
                    "alt" => "Scrambler 900 Orange Stealth Edition"
                  ]
                ],
                "shortSpecInfo" => [
                  "info1" => "1,200cc Thruxton тунинг мотор",
                  "info2" => "Повеќе сила, со подобра агилност во склоп со автентичната ДНК на 'Cafe-Racer' моторите.",
                  "info3" => "Неверојатни финиши на боја и стил."
                ]
              ],
           ];


           $motorcycleDataFourtyFour = [
            [
                "title" => "Speed Twin 900 Green Stealth Edition",
                "model" => "speed-twin-900-2023",
                "category" => "classics",
                "subFamilyCategory" => "speed-twin-900",
                "edition" => "stealth",
                "price" => null,
                "specs" => [
                  "cc" => 398,
                  "hp" => 20,
                  "torque" => 37.5,
                  "horsePower" => 40,
                  "serviceInterval" => "16.000km",
                  "motorType" => "TR"
                ],
                "gallery" => [
                  "modelImage" => [
                    "src" => "/images/classics/speedTwin900Stealth.avif",
                    "alt" => "Speed Twin 900 Green Stealth Edition"
                  ]
                ],
                "shortSpecInfo" => [
                  "info1" => "1,200cc Thruxton тунинг мотор",
                  "info2" => "Повеќе сила, со подобра агилност во склоп со автентичната ДНК на 'Cafe-Racer' моторите.",
                  "info3" => "Неверојатни финиши на боја и стил."
                ],
                "subFamilyPromo" => [
                  "title" => "Новиот Speed Twin 900 Green Stealth Edition",
                  "desc" => "Најуспешната прилагодена класика на Triumph е рачно доработена во светло зелена боја. Впечатливата Speed ​​​​Twin 900 Green Stealth Edition дава изјава за стил… и е достапна само една година."
                ]
              ],
            ];

            $motorcycleDataFourtyFive = [
                [
                    "title" => "Speed Twin 1200 Red Stealth Edition",
                    "model" => "speed-twin-1200-2023",
                    "category" => "classics",
                    "subFamilyCategory" => "bonneville-speed-twin-1200",
                    "edition" => "stealth",
                    "price" => null,
                    "specs" => [
                      "cc" => 398,
                      "hp" => 20,
                      "torque" => 37.5,
                      "horsePower" => 40,
                      "serviceInterval" => "16.000km",
                      "motorType" => "TR"
                    ],
                    "gallery" => [
                      "modelImage" => [
                        "src" => "/images/classics/speedTwin1200Stealth.avif",
                        "alt" => "Speed Twin 1200 Red Stealth Edition"
                      ]
                    ],
                    "shortSpecInfo" => [
                      "info1" => "1,200cc Thruxton тунинг мотор",
                      "info2" => "Повеќе сила, со подобра агилност во склоп со автентичната ДНК на 'Cafe-Racer' моторите.",
                      "info3" => "Неверојатни финиши на боја и стил."
                    ]
                  ],
            ];


            $motorcycleDataFourtySix = [
                [
                    "title" => "Speedmaster Red Stealth Edition",
                    "model" => "speedmaster-2023",
                    "category" => "classics",
                    "subFamilyCategory" => "bonneville-speedmaster",
                    "edition" => "stealth",
                    "price" => null,
                    "specs" => [
                      "cc" => 398,
                      "hp" => 20,
                      "torque" => 37.5,
                      "horsePower" => 40,
                      "serviceInterval" => "16.000km",
                      "motorType" => "TR"
                    ],
                    "gallery" => [
                      "modelImage" => [
                        "src" => "/images/classics/speedmasterRedStealth.avif",
                        "alt" => "Speedmaster Red Stealth Edition"
                      ]
                    ],
                    "shortSpecInfo" => [
                      "info1" => "1,200cc Thruxton тунинг мотор",
                      "info2" => "Повеќе сила, со подобра агилност во склоп со автентичната ДНК на 'Cafe-Racer' моторите.",
                      "info3" => "Неверојатни финиши на боја и стил."
                    ]
                  ],
            ];

            $motorcycleDataFourtySeven = [
                [
                    "title" => "T100 Blue Stealth Edition",
                    "model" => "t100-2023",
                    "category" => "classics",
                    "subFamilyCategory" => "bonneville-t100",
                    "edition" => "stealth",
                    "price" => null,
                    "specs" => [
                      "cc" => 398,
                      "hp" => 20,
                      "torque" => 37.5,
                      "horsePower" => 40,
                      "serviceInterval" => "16.000km",
                      "motorType" => "TR"
                    ],
                    "gallery" => [
                      "modelImage" => [
                        "src" => "/images/classics/t100Stealth.avif",
                        "alt" => "T100 Blue Stealth Edition"
                      ]
                    ],
                    "shortSpecInfo" => [
                      "info1" => "1,200cc Thruxton тунинг мотор",
                      "info2" => "Повеќе сила, со подобра агилност во склоп со автентичната ДНК на 'Cafe-Racer' моторите.",
                      "info3" => "Неверојатни финиши на боја и стил."
                    ]
                  ],
            ];


            $motorcycleDataFourtyEight = [
                [
                    "title" => "T100 Blue Stealth Edition",
                    "model" => "t100-2023",
                    "category" => "classics",
                    "subFamilyCategory" => "bonneville-t100",
                    "edition" => "stealth",
                    "price" => null,
                    "specs" => [
                      "cc" => 398,
                      "hp" => 20,
                      "torque" => 37.5,
                      "horsePower" => 40,
                      "serviceInterval" => "16.000km",
                      "motorType" => "TR"
                    ],
                    "gallery" => [
                      "modelImage" => [
                        "src" => "/images/classics/t100Stealth.avif",
                        "alt" => "T100 Blue Stealth Edition"
                      ]
                    ],
                    "shortSpecInfo" => [
                      "info1" => "1,200cc Thruxton тунинг мотор",
                      "info2" => "Повеќе сила, со подобра агилност во склоп со автентичната ДНК на 'Cafe-Racer' моторите.",
                      "info3" => "Неверојатни финиши на боја и стил."
                    ]
                  ],
            ];



            $motorcycleDataFourtyNine = [

                [
                    "title" => "T120 Blue Edition Stealth",
                    "model" => "t120-2023",
                    "category" => "classics",
                    "subFamilyCategory" => "bonneville-t120",
                    "edition" => "stealth",
                    "price" => null,
                    "specs" => [
                      "cc" => 398,
                      "hp" => 20,
                      "torque" => 37.5,
                      "horsePower" => 40,
                      "serviceInterval" => "16.000km",
                      "motorType" => "TR"
                    ],
                    "gallery" => [
                      "modelImage" => [
                        "src" => "/images/classics/t120Stealth.avif",
                        "alt" => "T120 Blue Edition Stealth"
                      ]
                    ],
                    "shortSpecInfo" => [
                      "info1" => "1,200cc Thruxton тунинг мотор",
                      "info2" => "Повеќе сила, со подобра агилност во склоп со автентичната ДНК на 'Cafe-Racer' моторите.",
                      "info3" => "Неверојатни финиши на боја и стил."
                    ]
                  ],

            ];


            $motorcycleDataFifty = [
                [
                    "title" => "T120 Black Stealth Edition",
                    "model" => "t120-black-2023",
                    "category" => "classics",
                    "subFamilyCategory" => "bonneville-t120",
                    "edition" => "stealth",
                    "price" => null,
                    "specs" => [
                      "cc" => 398,
                      "hp" => 20,
                      "torque" => 37.5,
                      "horsePower" => 40,
                      "serviceInterval" => "16.000km",
                      "motorType" => "TR"
                    ],
                    "gallery" => [
                      "modelImage" => [
                        "src" => "/images/classics/t120BlackStealth.avif",
                        "alt" => "T120 Black Stealth Edition"
                      ]
                    ],
                    "shortSpecInfo" => [
                      "info1" => "1,200cc Thruxton тунинг мотор",
                      "info2" => "Повеќе сила, со подобра агилност во склоп со автентичната ДНК на 'Cafe-Racer' моторите.",
                      "info3" => "Неверојатни финиши на боја и стил."
                    ]
                  ],
                ];


                $motorcycleDataFiftyOne = [
                    [
                        "title" => "Bonneville Bobber Chrome Edition",
                        "model" => "bobber-chrome-edition-2023",
                        "category" => "classics",
                        "subFamilyCategory" => "bonneville-bobber",
                        "edition" => "chrome",
                        "price" => 17090,
                        "specs" => [
                          "cc" => 398,
                          "hp" => 20,
                          "torque" => 37.5,
                          "horsePower" => 40,
                          "serviceInterval" => "16.000km",
                          "motorType" => "TR"
                        ],
                        "gallery" => [
                          "modelImage" => [
                            "src" => "/images/classics/bonnevilleBobberChrome.avif",
                            "alt" => "Bonneville Bobber Chrome Edition"
                          ]
                        ],
                        "shortSpecInfo" => [
                          "info1" => "1,200cc Thruxton тунинг мотор",
                          "info2" => "Повеќе сила, со подобра агилност во склоп со автентичната ДНК на 'Cafe-Racer' моторите.",
                          "info3" => "Неверојатни финиши на боја и стил."
                        ]
                      ],
                ];


                $motorcycleDataFiftyTwo = [
                    [
                        "title" => "Bonneville Speedmaster Chrome Edition",
                        "model" => "speedmaster-chrome-edition-2023",
                        "category" => "classics",
                        "subFamilyCategory" => "bonneville-speedmaster",
                        "edition" => "chrome",
                        "price" => 17090,
                        "specs" => [
                          "cc" => 398,
                          "hp" => 20,
                          "torque" => 37.5,
                          "horsePower" => 40,
                          "serviceInterval" => "16.000km",
                          "motorType" => "TR"
                        ],
                        "gallery" => [
                          "modelImage" => [
                            "src" => "/images/classics/speedmasterChrome.avif",
                            "alt" => "Bonneville Speedmaster Chrome Edition"
                          ]
                        ],
                        "shortSpecInfo" => [
                          "info1" => "1,200cc Thruxton тунинг мотор",
                          "info2" => "Повеќе сила, со подобра агилност во склоп со автентичната ДНК на 'Cafe-Racer' моторите.",
                          "info3" => "Неверојатни финиши на боја и стил."
                        ]
                      ],
                ];


                $motorcycleDataFiftyThree = [
                    [
                        "title" => "Scrambler 1200 XE Chrome Edition",
                        "model" => "scrambler-1200-xe-chrome-edition-2023",
                        "category" => "classics",
                        "subFamilyCategory" => "bonneville-scrambler-1200",
                        "edition" => "chrome",
                        "price" => 17090,
                        "specs" => [
                          "cc" => 398,
                          "hp" => 20,
                          "torque" => 37.5,
                          "horsePower" => 40,
                          "serviceInterval" => "16.000km",
                          "motorType" => "TR"
                        ],
                        "gallery" => [
                          "modelImage" => [
                            "src" => "/images/classics/scrambler1200XeChrome.avif",
                            "alt" => "Scrambler 1200 XE Chrome Edition"
                          ]
                        ],
                        "shortSpecInfo" => [
                          "info1" => "1,200cc Thruxton тунинг мотор",
                          "info2" => "Повеќе сила, со подобра агилност во склоп со автентичната ДНК на 'Cafe-Racer' моторите.",
                          "info3" => "Неверојатни финиши на боја и стил."
                        ]
                      ],
                ];

                $motorcycleDataFiftyFour = [
                    [
                        "title" => "Scrambler 900 Chrome Edition",
                        "model" => "scrambler-900-chrome-edition-2023",
                        "category" => "classics",
                        "subFamilyCategory" => "bonneville-scrambler-900",
                        "edition" => "chrome",
                        "price" => 12490,
                        "specs" => [
                          "cc" => 398,
                          "hp" => 20,
                          "torque" => 37.5,
                          "horsePower" => 40,
                          "serviceInterval" => "16.000km",
                          "motorType" => "TR"
                        ],
                        "gallery" => [
                          "modelImage" => [
                            "src" => "/images/classics/scrambler900Chrome.png",
                            "alt" => "Scrambler 900 Chrome Edition"
                          ]
                        ],
                        "shortSpecInfo" => [
                          "info1" => "1,200cc Thruxton тунинг мотор",
                          "info2" => "Повеќе сила, со подобра агилност во склоп со автентичната ДНК на 'Cafe-Racer' моторите.",
                          "info3" => "Неверојатни финиши на боја и стил."
                        ]
                      ],
                ];

                $motorcycleDataFiftyFive = [
                    [
                        "title" => "Speed Twin 900 Chrome Edition",
                        "model" => "speed-twin-900-chrome-edition-2023",
                        "category" => "classics",
                        "subFamilyCategory" => "speed-twin-900",
                        "edition" => "chrome",
                        "price" => 10990,
                        "specs" => [
                          "cc" => 398,
                          "hp" => 20,
                          "torque" => 37.5,
                          "horsePower" => 40,
                          "serviceInterval" => "16.000km",
                          "motorType" => "TR"
                        ],
                        "gallery" => [
                          "modelImage" => [
                            "src" => "/images/classics/speedTwin900Chrome.avif",
                            "alt" => "Speed Twin 900 Chrome Edition"
                          ]
                        ],
                        "shortSpecInfo" => [
                          "info1" => "1,200cc Thruxton тунинг мотор",
                          "info2" => "Повеќе сила, со подобра агилност во склоп со автентичната ДНК на 'Cafe-Racer' моторите.",
                          "info3" => "Неверојатни финиши на боја и стил."
                        ],
                        "subFamilyPromo" => [
                          "title" => "Новиот Speed Twin 900 Chrome Edition",
                          "desc" => "Достапен само една година, овој Speed Twin 900 доаѓа со повеќе стил и хром елементи. Цени од: €10,990.00"
                        ]
                      ],
                ];

                $motorcycleDataFiftySix = [
                     [
                        "title" => "Bonneville T100 Chrome Edition",
                        "model" => "t100-chrome-edition-2023",
                        "category" => "classics",
                        "subFamilyCategory" => "bonneville-t100",
                        "edition" => "chrome",
                        "price" => 12290,
                        "specs" =>  [
                          "cc" => 398,
                          "hp" => 20,
                          "torque" => 37.5,
                          "horsePower" => 40,
                          "serviceInterval" => "16.000km",
                          "motorType" => "TR"
                        ],
                        "gallery" =>  [
                          "modelImage" =>  [
                            "src" => "/images/classics/t100Chrome.avif",
                            "alt" => "Bonneville T100 Chrome Edition"
                          ]
                        ],
                        "shortSpecInfo" =>  [
                          "info1" => "1,200cc Thruxton тунинг мотор",
                          "info2" => "Повеќе сила, со подобра агилност во склоп со автентичната ДНК на 'Cafe-Racer' моторите.",
                          "info3" => "Неверојатни финиши на боја и стил."
                        ]
                      ],
                    ];

                    $motorcycleDataFiftySeven = [
                        [
                            "title" => "Bonneville T120 Chrome Edition",
                            "model" => "t120-chrome-edition-2023",
                            "category" => "classics",
                            "subFamilyCategory" => "bonneville-t120",
                            "edition" => "chrome",
                            "price" => 15090,
                            "specs" => [
                              "cc" => 398,
                              "hp" => 20,
                              "torque" => 37.5,
                              "horsePower" => 40,
                              "serviceInterval" => "16.000km",
                              "motorType" => "TR"
                            ],
                            "gallery" => [
                              "modelImage" => [
                                "src" => "/images/classics/t120Chrome.avif",
                                "alt" => "Bonneville T120 Chrome Edition"
                              ]
                            ],
                            "shortSpecInfo" => [
                              "info1" => "1,200cc Thruxton тунинг мотор",
                              "info2" => "Повеќе сила, со подобра агилност во склоп со автентичната ДНК на 'Cafe-Racer' моторите.",
                              "info3" => "Неверојатни финиши на боја и стил."
                            ]
                          ],
                        ];

                    $motorcycleDataFiftyEight = [
                        [
                            "title" => "Thruxton RS Chrome Edition",
                            "model" => "thruxton-rs-chrome-edition-2023",
                            "category" => "classics",
                            "subFamilyCategory" => "thruxton-rs",
                            "edition" => "chrome",
                            "price" => 18790,
                            "specs" => [
                              "cc" => 398,
                              "hp" => 20,
                              "torque" => 37.5,
                              "horsePower" => 40,
                              "serviceInterval" => "16.000km",
                              "motorType" => "TR"
                            ],
                            "gallery" => [
                              "modelImage" => [
                                "src" => "/images/classics/thruxtonRsChrome.avif",
                                "alt" => "Thruxton RS Chrome Edition"
                              ]
                            ],
                            "shortSpecInfo" => [
                              "info1" => "1,200cc Thruxton тунинг мотор",
                              "info2" => "Повеќе сила, со подобра агилност во склоп со автентичната ДНК на 'Cafe-Racer' моторите.",
                              "info3" => "Неверојатни финиши на боја и стил."
                            ]
                          ],
                    ];

                    $motorcycleDataFiftyNine = [
                        [
                            "title" => "Street Triple 765 MOTO2™ EDITION",
                            "model" => "street-triple-moto2-editon-2023",
                            "category" => "roadsters",
                            "subFamilyCategory" => "street-triple-moto2",
                            "edition" => "roadsters",
                            "price" => 16990,
                            "specs" => [
                              "cc" => 765,
                              "hp" => 130,
                              "torque" => 80,
                              "horsePower" => 130,
                              "serviceInterval" => "10.000km",
                              "motorType" => "TR"
                            ],
                            "gallery" => [
                              "modelImage" => [
                                "src" => "/images/roadsters/streetTriple765Moto2ModelImage.avif",
                                "alt" => "Street Triple MOTO 2"
                              ],
                              "promoYoutubeVideo" => [
                                "src" => "https =>//www.youtube.com/embed/omKdaaynGCg",
                                "alt" => "Speed 400 Youtube Video"
                              ]
                            ],
                            "bikeCollorPalletteGallery" => [
                              "color1" => "/images/roadsters/moto2/streetTripleMoto2Yellow.png",
                              "color1Reversed" => "/images/roadsters/moto2/streetTripleMoto2YellowReversed.png",
                              "color2" => "/images/roadsters/moto2/streetTripleMoto2White.png",
                              "color2Reversed" => "/images/roadsters/moto2/streetTripleMoto2WhiteReversed.png"
                            ],
                            "customizationColors" => [
                              [
                                "colorName" => "Triumph Racing Yellow",
                                "price" => null,
                                "image" => "/images/custom-collors/triumphRacingYellow.jpg",
                                "colorCode" => "color1"
                              ],
                              [
                                "colorName" => "Crystal White",
                                "price" => null,
                                "image" => "/images/custom-collors/crystalWhite.jpg",
                                "colorCode" => "color2"
                              ]
                            ],
                            "shortSpecInfo" => [
                              "info1" => "765cc мотор",
                              "info2" => "Максимална јачина од 130 PS",
                              "info3" => "10000 км сервисен интервал"
                            ],
                            "subFamilyPromo" => [
                              "title" => "НОВАТА STREET TIRPLE 765 MOTO2™ СЕРИЈА",
                              "desc" => "Најдобриот Street Triple моторцикл кој може да се купи. Ве носи најблиску до Moto2™ моторите но е спремен за патишта. Сосема ексклузивен и најопремен и нај-агилен. Цени од €16,990.00."
                            ]
                          ]
                            ];





        foreach ($motorcycleData as &$data) {
            foreach (['gallery', 'bikeCollorPalletteGallery', 'customizationColors', 'shortSpecInfo', 'subFamilyPromo'] as $field) {
                if (isset($data[$field])) {
                    $data[$field] = json_encode($data[$field]);
                }
            }
        }

        foreach ($motorcycleDataTwo as &$data) {
            foreach (['gallery', 'bikeCollorPalletteGallery', 'customizationColors', 'shortSpecInfo', 'subFamilyPromo'] as $field) {
                if (isset($data[$field])) {
                    $data[$field] = json_encode($data[$field]);
                }
            }
        }

        foreach ($motorcycleDataThree as &$data) {
            foreach (['gallery', 'bikeCollorPalletteGallery', 'customizationColors', 'shortSpecInfo', 'subFamilyPromo'] as $field) {
                if (isset($data[$field])) {
                    $data[$field] = json_encode($data[$field]);
                }
            }
        }

        foreach ($motorcycleDataFive as &$data) {
            foreach (['specs','gallery', 'bikeCollorPalletteGallery', 'customizationColors', 'shortSpecInfo', 'subFamilyPromo'] as $field) {
                if (isset($data[$field])) {
                    $data[$field] = json_encode($data[$field]);
                }
            }
        }

        foreach ($motorcycleDataSix as &$data) {
            foreach (['specs','gallery', 'bikeCollorPalletteGallery', 'customizationColors', 'shortSpecInfo', 'bikePageCarousell', 'features' ,'subFamilyPromo', 'bikePagePromo'] as $field) {
                if (isset($data[$field])) {
                    $data[$field] = json_encode($data[$field]);
                }
            }
        }

        foreach ($motorcycleDataSeven as &$data) {
            foreach (['specs','gallery', 'bikeCollorPalletteGallery', 'customizationColors', 'shortSpecInfo', 'bikePageCarousell', 'features' ,'subFamilyPromo', 'bikePagePromo'] as $field) {
                if (isset($data[$field])) {
                    $data[$field] = json_encode($data[$field]);
                }
            }
        }

        foreach ($motorcycleDataEight as &$data) {
            foreach (['specs','gallery', 'bikeCollorPalletteGallery', 'customizationColors', 'shortSpecInfo', 'bikePageCarousell', 'features' ,'subFamilyPromo', 'bikePagePromo'] as $field) {
                if (isset($data[$field])) {
                    $data[$field] = json_encode($data[$field]);
                }
            }
        }

        foreach ($motorcycleDataNine as &$data) {
            foreach (['specs','gallery', 'bikeCollorPalletteGallery', 'customizationColors', 'shortSpecInfo', 'bikePageCarousell', 'features' ,'subFamilyPromo', 'bikePagePromo'] as $field) {
                if (isset($data[$field])) {
                    $data[$field] = json_encode($data[$field]);
                }
            }
        }

        foreach ($motorcycleDataTen as &$data) {
            foreach (['specs','gallery', 'bikeCollorPalletteGallery', 'customizationColors', 'shortSpecInfo', 'bikePageCarousell', 'features' ,'subFamilyPromo', 'bikePagePromo'] as $field) {
                if (isset($data[$field])) {
                    $data[$field] = json_encode($data[$field]);
                }
            }
        }

        foreach ($motorcycleDataEleven as &$data) {
            foreach (['specs','gallery', 'bikeCollorPalletteGallery', 'customizationColors', 'shortSpecInfo', 'bikePageCarousell', 'features' ,'subFamilyPromo', 'bikePagePromo'] as $field) {
                if (isset($data[$field])) {
                    $data[$field] = json_encode($data[$field]);
                }
            }
        }

        foreach ($motorcycleDataTwelve as &$data) {
            foreach (['specs','gallery', 'bikeCollorPalletteGallery', 'customizationColors', 'shortSpecInfo', 'bikePageCarousell', 'features' ,'subFamilyPromo', 'bikePagePromo'] as $field) {
                if (isset($data[$field])) {
                    $data[$field] = json_encode($data[$field]);
                }
            }
        }

        foreach ($motorcycleDataThirteen as &$data) {
            foreach (['specs','gallery', 'bikeCollorPalletteGallery', 'customizationColors', 'shortSpecInfo', 'bikePageCarousell', 'features' ,'subFamilyPromo', 'bikePagePromo'] as $field) {
                if (isset($data[$field])) {
                    $data[$field] = json_encode($data[$field]);
                }
            }
        }

        foreach ($motorcycleDataFourteen as &$data) {
            foreach (['specs','gallery', 'bikeCollorPalletteGallery', 'customizationColors', 'shortSpecInfo', 'bikePageCarousell', 'features' ,'subFamilyPromo', 'bikePagePromo'] as $field) {
                if (isset($data[$field])) {
                    $data[$field] = json_encode($data[$field]);
                }
            }
        }

        foreach ($motorcycleDataFifteen as &$data) {
            foreach (['specs','gallery', 'bikeCollorPalletteGallery', 'customizationColors', 'shortSpecInfo', 'bikePageCarousell', 'features' ,'subFamilyPromo', 'bikePagePromo'] as $field) {
                if (isset($data[$field])) {
                    $data[$field] = json_encode($data[$field]);
                }
            }
        }


        foreach ($motorcycleDataSixteen as &$data) {
            foreach (['specs','gallery', 'bikeCollorPalletteGallery', 'customizationColors', 'shortSpecInfo', 'bikePageCarousell', 'features' ,'subFamilyPromo', 'bikePagePromo'] as $field) {
                if (isset($data[$field])) {
                    $data[$field] = json_encode($data[$field]);
                }
            }
        }

        foreach ($motorcycleDataSeventeen as &$data) {
            foreach (['specs','gallery', 'bikeCollorPalletteGallery', 'customizationColors', 'shortSpecInfo', 'bikePageCarousell', 'features' ,'subFamilyPromo', 'bikePagePromo'] as $field) {
                if (isset($data[$field])) {
                    $data[$field] = json_encode($data[$field]);
                }
            }
        }

        foreach ($motorcycleDataEightteen as &$data) {
            foreach (['specs','gallery', 'bikeCollorPalletteGallery', 'customizationColors', 'shortSpecInfo', 'bikePageCarousell', 'features' ,'subFamilyPromo', 'bikePagePromo'] as $field) {
                if (isset($data[$field])) {
                    $data[$field] = json_encode($data[$field]);
                }
            }
        }

        foreach ($motorcycleDataNineteen as &$data) {
            foreach (['specs','gallery', 'bikeCollorPalletteGallery', 'customizationColors', 'shortSpecInfo', 'bikePageCarousell', 'features' ,'subFamilyPromo', 'bikePagePromo'] as $field) {
                if (isset($data[$field])) {
                    $data[$field] = json_encode($data[$field]);
                }
            }
        }

        foreach ($motorcycleDataTwenty as &$data) {
            foreach (['specs','gallery', 'bikeCollorPalletteGallery', 'customizationColors', 'shortSpecInfo', 'bikePageCarousell', 'features' ,'subFamilyPromo', 'bikePageInfo', 'bikePagePromo'] as $field) {
                if (isset($data[$field])) {
                    $data[$field] = json_encode($data[$field]);
                }
            }
        }

        foreach ($motorcycleDataTwentyOne as &$data) {
            foreach (['specs','gallery', 'bikeCollorPalletteGallery', 'customizationColors', 'shortSpecInfo', 'bikePageCarousell', 'features' ,'subFamilyPromo', 'bikePageInfo', 'bikePagePromo'] as $field) {
                if (isset($data[$field])) {
                    $data[$field] = json_encode($data[$field]);
                }
            }
        }

        foreach ($motorcycleDataTwentyTwo as &$data) {
            foreach (['specs','gallery', 'bikeCollorPalletteGallery', 'customizationColors', 'shortSpecInfo', 'bikePageCarousell', 'features' ,'subFamilyPromo', 'bikePageInfo', 'bikePagePromo'] as $field) {
                if (isset($data[$field])) {
                    $data[$field] = json_encode($data[$field]);
                }
            }
        }

        foreach ($motorcycleDataTwentyThree as &$data) {
            foreach (['specs','gallery', 'bikeCollorPalletteGallery', 'customizationColors', 'shortSpecInfo', 'bikePageCarousell', 'features' ,'subFamilyPromo', 'bikePageInfo', 'bikePagePromo'] as $field) {
                if (isset($data[$field])) {
                    $data[$field] = json_encode($data[$field]);
                }
            }
        }


        foreach ($motorcycleDataTwentyFour as &$data) {
            foreach (['specs','gallery', 'bikeCollorPalletteGallery', 'customizationColors', 'shortSpecInfo', 'bikePageCarousell', 'features' ,'subFamilyPromo', 'bikePageInfo', 'bikePagePromo'] as $field) {
                if (isset($data[$field])) {
                    $data[$field] = json_encode($data[$field]);
                }
            }
        }

        foreach ($motorcycleDataTwentyFive as &$data) {
            foreach (['specs','gallery', 'bikeCollorPalletteGallery', 'customizationColors', 'shortSpecInfo', 'bikePageCarousell', 'features' ,'subFamilyPromo', 'bikePageInfo', 'bikePagePromo'] as $field) {
                if (isset($data[$field])) {
                    $data[$field] = json_encode($data[$field]);
                }
            }
        }

        foreach ($motorcycleDataTwentySix as &$data) {
            foreach (['specs','gallery', 'bikeCollorPalletteGallery', 'customizationColors', 'shortSpecInfo', 'bikePageCarousell', 'features' ,'subFamilyPromo', 'bikePageInfo', 'bikePagePromo'] as $field) {
                if (isset($data[$field])) {
                    $data[$field] = json_encode($data[$field]);
                }
            }
        }

        foreach ($motorcycleDataTwentySeven as &$data) {
            foreach (['specs','gallery', 'bikeCollorPalletteGallery', 'customizationColors', 'shortSpecInfo', 'bikePageCarousell', 'features' ,'subFamilyPromo', 'bikePageInfo', 'bikePagePromo'] as $field) {
                if (isset($data[$field])) {
                    $data[$field] = json_encode($data[$field]);
                }
            }
        }

        foreach ($motorcycleDataTwentyEight as &$data) {
            foreach (['specs','gallery', 'bikeCollorPalletteGallery', 'customizationColors', 'shortSpecInfo', 'bikePageCarousell', 'features' ,'subFamilyPromo', 'bikePageInfo', 'bikePagePromo'] as $field) {
                if (isset($data[$field])) {
                    $data[$field] = json_encode($data[$field]);
                }
            }
        }

        foreach ($motorcycleDataTwentyNine as &$data) {
            foreach (['specs','gallery', 'bikeCollorPalletteGallery', 'customizationColors', 'shortSpecInfo', 'bikePageCarousell', 'features' ,'subFamilyPromo', 'bikePageInfo', 'bikePagePromo'] as $field) {
                if (isset($data[$field])) {
                    $data[$field] = json_encode($data[$field]);
                }
            }
        }

        foreach ($motorcycleDataThirty as &$data) {
            foreach (['specs','gallery', 'bikeCollorPalletteGallery', 'customizationColors', 'shortSpecInfo', 'bikePageCarousell', 'features' ,'subFamilyPromo', 'bikePageInfo', 'bikePagePromo'] as $field) {
                if (isset($data[$field])) {
                    $data[$field] = json_encode($data[$field]);
                }
            }
        }

        foreach ($motorcycleDataThirtyOne as &$data) {
            foreach (['specs','gallery', 'bikeCollorPalletteGallery', 'customizationColors', 'shortSpecInfo', 'bikePageCarousell', 'features' ,'subFamilyPromo', 'bikePageInfo', 'bikePagePromo'] as $field) {
                if (isset($data[$field])) {
                    $data[$field] = json_encode($data[$field]);
                }
            }
        }


        foreach ($motorcycleDataThirtyTwo as &$data) {
            foreach (['specs','gallery', 'bikeCollorPalletteGallery', 'customizationColors', 'shortSpecInfo', 'bikePageCarousell', 'features' ,'subFamilyPromo', 'bikePageInfo', 'bikePagePromo'] as $field) {
                if (isset($data[$field])) {
                    $data[$field] = json_encode($data[$field]);
                }
            }
        }

        foreach ($motorcycleDataThirtyThree as &$data) {
            foreach (['specs','gallery', 'bikeCollorPalletteGallery', 'customizationColors', 'shortSpecInfo', 'bikePageCarousell', 'features' ,'subFamilyPromo', 'bikePageInfo', 'bikePagePromo'] as $field) {
                if (isset($data[$field])) {
                    $data[$field] = json_encode($data[$field]);
                }
            }
        }

        foreach ($motorcycleDataThirtyFour as &$data) {
            foreach (['specs','gallery', 'bikeCollorPalletteGallery', 'customizationColors', 'shortSpecInfo', 'bikePageCarousell', 'features' ,'subFamilyPromo', 'bikePageInfo', 'bikePagePromo'] as $field) {
                if (isset($data[$field])) {
                    $data[$field] = json_encode($data[$field]);
                }
            }
        }


        foreach ($motorcycleDataThirtyFive as &$data) {
            foreach (['specs','gallery', 'bikeCollorPalletteGallery', 'customizationColors', 'shortSpecInfo', 'bikePageCarousell', 'features' ,'subFamilyPromo', 'bikePageInfo', 'bikePagePromo'] as $field) {
                if (isset($data[$field])) {
                    $data[$field] = json_encode($data[$field]);
                }
            }
        }


        foreach ($motorcycleDataThirtySix as &$data) {
            foreach (['specs','gallery', 'bikeCollorPalletteGallery', 'customizationColors', 'shortSpecInfo', 'bikePageCarousell', 'features' ,'subFamilyPromo', 'bikePageInfo', 'bikePagePromo'] as $field) {
                if (isset($data[$field])) {
                    $data[$field] = json_encode($data[$field]);
                }
            }
        }


        foreach ($motorcycleDataThirtySeven as &$data) {
            foreach (['specs','gallery', 'bikeCollorPalletteGallery', 'customizationColors', 'shortSpecInfo', 'bikePageCarousell', 'features' ,'subFamilyPromo', 'bikePageInfo', 'bikePagePromo'] as $field) {
                if (isset($data[$field])) {
                    $data[$field] = json_encode($data[$field]);
                }
            }
        }


        foreach ($motorcycleDataThirtyEight as &$data) {
            foreach (['specs','gallery', 'bikeCollorPalletteGallery', 'customizationColors', 'shortSpecInfo', 'bikePageCarousell', 'features' ,'subFamilyPromo', 'bikePageInfo', 'bikePagePromo'] as $field) {
                if (isset($data[$field])) {
                    $data[$field] = json_encode($data[$field]);
                }
            }
        }

        foreach ($motorcycleDataThirtyNine as &$data) {
            foreach (['specs','gallery', 'bikeCollorPalletteGallery', 'customizationColors', 'shortSpecInfo', 'bikePageCarousell', 'features' ,'subFamilyPromo', 'bikePageInfo', 'bikePagePromo'] as $field) {
                if (isset($data[$field])) {
                    $data[$field] = json_encode($data[$field]);
                }
            }
        }


        foreach ($motorcycleDataFourty as &$data) {
            foreach (['specs','gallery', 'bikeCollorPalletteGallery', 'customizationColors', 'shortSpecInfo', 'bikePageCarousell', 'features' ,'subFamilyPromo', 'bikePageInfo', 'bikePagePromo'] as $field) {
                if (isset($data[$field])) {
                    $data[$field] = json_encode($data[$field]);
                }
            }
        }

        foreach ($motorcycleDataFourtyOne as &$data) {
            foreach (['specs','gallery', 'bikeCollorPalletteGallery', 'customizationColors', 'shortSpecInfo', 'bikePageCarousell', 'features' ,'subFamilyPromo', 'bikePageInfo', 'bikePagePromo'] as $field) {
                if (isset($data[$field])) {
                    $data[$field] = json_encode($data[$field]);
                }
            }
        }

        foreach ($motorcycleDataFourtyTwo as &$data) {
            foreach (['specs','gallery', 'bikeCollorPalletteGallery', 'customizationColors', 'shortSpecInfo', 'bikePageCarousell', 'features' ,'subFamilyPromo', 'bikePageInfo', 'bikePagePromo'] as $field) {
                if (isset($data[$field])) {
                    $data[$field] = json_encode($data[$field]);
                }
            }
        }


        foreach ($motorcycleDataFourtyThree as &$data) {
            foreach (['specs','gallery', 'bikeCollorPalletteGallery', 'customizationColors', 'shortSpecInfo', 'bikePageCarousell', 'features' ,'subFamilyPromo', 'bikePageInfo', 'bikePagePromo'] as $field) {
                if (isset($data[$field])) {
                    $data[$field] = json_encode($data[$field]);
                }
            }
        }

        foreach ($motorcycleDataFourtyFour as &$data) {
            foreach (['specs','gallery', 'bikeCollorPalletteGallery', 'customizationColors', 'shortSpecInfo', 'bikePageCarousell', 'features' ,'subFamilyPromo', 'bikePageInfo', 'bikePagePromo'] as $field) {
                if (isset($data[$field])) {
                    $data[$field] = json_encode($data[$field]);
                }
            }
        }

        foreach ($motorcycleDataFourtyFive as &$data) {
            foreach (['specs','gallery', 'bikeCollorPalletteGallery', 'customizationColors', 'shortSpecInfo', 'bikePageCarousell', 'features' ,'subFamilyPromo', 'bikePageInfo', 'bikePagePromo'] as $field) {
                if (isset($data[$field])) {
                    $data[$field] = json_encode($data[$field]);
                }
            }
        }

        foreach ($motorcycleDataFourtySix as &$data) {
            foreach (['specs','gallery', 'bikeCollorPalletteGallery', 'customizationColors', 'shortSpecInfo', 'bikePageCarousell', 'features' ,'subFamilyPromo', 'bikePageInfo', 'bikePagePromo'] as $field) {
                if (isset($data[$field])) {
                    $data[$field] = json_encode($data[$field]);
                }
            }
        }


        foreach ($motorcycleDataFourtySeven as &$data) {
            foreach (['specs','gallery', 'bikeCollorPalletteGallery', 'customizationColors', 'shortSpecInfo', 'bikePageCarousell', 'features' ,'subFamilyPromo', 'bikePageInfo', 'bikePagePromo'] as $field) {
                if (isset($data[$field])) {
                    $data[$field] = json_encode($data[$field]);
                }
            }
        }


        foreach ($motorcycleDataFourtyEight as &$data) {
            foreach (['specs','gallery', 'bikeCollorPalletteGallery', 'customizationColors', 'shortSpecInfo', 'bikePageCarousell', 'features' ,'subFamilyPromo', 'bikePageInfo', 'bikePagePromo'] as $field) {
                if (isset($data[$field])) {
                    $data[$field] = json_encode($data[$field]);
                }
            }
        }

        foreach ($motorcycleDataFourtyNine as &$data) {
            foreach (['specs','gallery', 'bikeCollorPalletteGallery', 'customizationColors', 'shortSpecInfo', 'bikePageCarousell', 'features' ,'subFamilyPromo', 'bikePageInfo', 'bikePagePromo'] as $field) {
                if (isset($data[$field])) {
                    $data[$field] = json_encode($data[$field]);
                }
            }
        }

        foreach ($motorcycleDataFifty as &$data) {
            foreach (['specs','gallery', 'bikeCollorPalletteGallery', 'customizationColors', 'shortSpecInfo', 'bikePageCarousell', 'features' ,'subFamilyPromo', 'bikePageInfo', 'bikePagePromo'] as $field) {
                if (isset($data[$field])) {
                    $data[$field] = json_encode($data[$field]);
                }
            }
        }

        foreach ($motorcycleDataFiftyOne as &$data) {
            foreach (['specs','gallery', 'bikeCollorPalletteGallery', 'customizationColors', 'shortSpecInfo', 'bikePageCarousell', 'features' ,'subFamilyPromo', 'bikePageInfo', 'bikePagePromo'] as $field) {
                if (isset($data[$field])) {
                    $data[$field] = json_encode($data[$field]);
                }
            }
        }

        foreach ($motorcycleDataFiftyTwo as &$data) {
            foreach (['specs','gallery', 'bikeCollorPalletteGallery', 'customizationColors', 'shortSpecInfo', 'bikePageCarousell', 'features' ,'subFamilyPromo', 'bikePageInfo', 'bikePagePromo'] as $field) {
                if (isset($data[$field])) {
                    $data[$field] = json_encode($data[$field]);
                }
            }
        }


        foreach ($motorcycleDataFiftyThree as &$data) {
            foreach (['specs','gallery', 'bikeCollorPalletteGallery', 'customizationColors', 'shortSpecInfo', 'bikePageCarousell', 'features' ,'subFamilyPromo', 'bikePageInfo', 'bikePagePromo'] as $field) {
                if (isset($data[$field])) {
                    $data[$field] = json_encode($data[$field]);
                }
            }
        }

        foreach ($motorcycleDataFiftyFour as &$data) {
            foreach (['specs','gallery', 'bikeCollorPalletteGallery', 'customizationColors', 'shortSpecInfo', 'bikePageCarousell', 'features' ,'subFamilyPromo', 'bikePageInfo', 'bikePagePromo'] as $field) {
                if (isset($data[$field])) {
                    $data[$field] = json_encode($data[$field]);
                }
            }
        }

        foreach ($motorcycleDataFiftyFive as &$data) {
            foreach (['specs','gallery', 'bikeCollorPalletteGallery', 'customizationColors', 'shortSpecInfo', 'bikePageCarousell', 'features' ,'subFamilyPromo', 'bikePageInfo', 'bikePagePromo'] as $field) {
                if (isset($data[$field])) {
                    $data[$field] = json_encode($data[$field]);
                }
            }
        }


        foreach ($motorcycleDataFiftySix as &$data) {
            foreach (['specs','gallery', 'bikeCollorPalletteGallery', 'customizationColors', 'shortSpecInfo', 'bikePageCarousell', 'features' ,'subFamilyPromo', 'bikePageInfo', 'bikePagePromo'] as $field) {
                if (isset($data[$field])) {
                    $data[$field] = json_encode($data[$field]);
                }
            }
        }

        foreach ($motorcycleDataFiftySeven as &$data) {
            foreach (['specs','gallery', 'bikeCollorPalletteGallery', 'customizationColors', 'shortSpecInfo', 'bikePageCarousell', 'features' ,'subFamilyPromo', 'bikePageInfo', 'bikePagePromo'] as $field) {
                if (isset($data[$field])) {
                    $data[$field] = json_encode($data[$field]);
                }
            }
        }

        foreach ($motorcycleDataFiftyEight as &$data) {
            foreach (['specs','gallery', 'bikeCollorPalletteGallery', 'customizationColors', 'shortSpecInfo', 'bikePageCarousell', 'features' ,'subFamilyPromo', 'bikePageInfo', 'bikePagePromo'] as $field) {
                if (isset($data[$field])) {
                    $data[$field] = json_encode($data[$field]);
                }
            }
        }

        foreach ($motorcycleDataFiftyNine as &$data) {
            foreach (['specs','gallery', 'bikeCollorPalletteGallery', 'customizationColors', 'shortSpecInfo', 'bikePageCarousell', 'features' ,'subFamilyPromo', 'bikePageInfo', 'bikePagePromo'] as $field) {
                if (isset($data[$field])) {
                    $data[$field] = json_encode($data[$field]);
                }
            }
        }


        Motorcycle::insert($motorcycleData);
        Motorcycle::insert($motorcycleDataTwo);
        Motorcycle::insert($motorcycleDataThree);
        Motorcycle::insert($motorcycleDataFive);
        Motorcycle::insert($motorcycleDataSix);
        Motorcycle::insert($motorcycleDataSeven);
        Motorcycle::insert($motorcycleDataEight);
        Motorcycle::insert($motorcycleDataNine);
        Motorcycle::insert($motorcycleDataTen);
        Motorcycle::insert($motorcycleDataEleven);
        Motorcycle::insert($motorcycleDataTwelve);
        Motorcycle::insert($motorcycleDataThirteen);
        Motorcycle::insert($motorcycleDataFourteen);
        Motorcycle::insert($motorcycleDataFifteen);
        Motorcycle::insert($motorcycleDataSixteen);
        Motorcycle::insert($motorcycleDataSeventeen);
        Motorcycle::insert($motorcycleDataEightteen);
        Motorcycle::insert($motorcycleDataNineteen);
        Motorcycle::insert($motorcycleDataTwenty);
        Motorcycle::insert($motorcycleDataTwentyOne);
        Motorcycle::insert($motorcycleDataTwentyTwo);
        Motorcycle::insert($motorcycleDataTwentyThree);
        Motorcycle::insert($motorcycleDataTwentyFour);
        Motorcycle::insert($motorcycleDataTwentyFive);
        Motorcycle::insert($motorcycleDataTwentySix);
        Motorcycle::insert($motorcycleDataTwentySeven);
        Motorcycle::insert($motorcycleDataTwentyEight);
        Motorcycle::insert($motorcycleDataTwentyNine);
        Motorcycle::insert($motorcycleDataThirty);
        Motorcycle::insert($motorcycleDataThirtyOne);
        Motorcycle::insert($motorcycleDataThirtyTwo);
        Motorcycle::insert($motorcycleDataThirtyThree);
        Motorcycle::insert($motorcycleDataThirtyFour);
        Motorcycle::insert($motorcycleDataThirtyFive);
        Motorcycle::insert($motorcycleDataThirtySix);
        Motorcycle::insert($motorcycleDataThirtySeven);
        Motorcycle::insert($motorcycleDataThirtyEight);
        Motorcycle::insert($motorcycleDataThirtyNine);
        Motorcycle::insert($motorcycleDataFourty);
        Motorcycle::insert($motorcycleDataFourtyOne);
        Motorcycle::insert($motorcycleDataFourtyTwo);
        Motorcycle::insert($motorcycleDataFourtyThree);
        Motorcycle::insert($motorcycleDataFourtyFour);
        Motorcycle::insert($motorcycleDataFourtyFive);
        Motorcycle::insert($motorcycleDataFourtySix);
        Motorcycle::insert($motorcycleDataFourtySeven);
        Motorcycle::insert($motorcycleDataFourtyEight);
        Motorcycle::insert($motorcycleDataFourtyNine);
        Motorcycle::insert($motorcycleDataFifty);
        Motorcycle::insert($motorcycleDataFiftyOne);
        Motorcycle::insert($motorcycleDataFiftyTwo);
        Motorcycle::insert($motorcycleDataFiftyThree);
        Motorcycle::insert($motorcycleDataFiftyFour);
        Motorcycle::insert($motorcycleDataFiftyFive);
        Motorcycle::insert($motorcycleDataFiftySix);
        Motorcycle::insert($motorcycleDataFiftySeven);
        Motorcycle::insert($motorcycleDataFiftyEight);
        Motorcycle::insert($motorcycleDataFiftyNine);



    }
}
