<?php

namespace Database\Seeders;

use App\Models\Motorcycle;
use App\Models\Promo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MotorcyclesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $motorcyclesData = [
            [
                "id" => 1,
                "title" => "Tiger 900 GT",
                "model" => "tiger-900-gt",
                "category" => "adventure",
                "subFamilyCategory" => "tiger-900",
                "edition" => "adventure",
                "price" => 14290,
                "gallery" => [
                    "modelImage" => [
                        "src" => "/images/adventure/tiger900GT/tiger900GTGraphiteBlack.png",
                        "alt" => "Tiger 900 GT"
                    ],
                    "promoYoutubeVideo" => [
                        "src" => "https://www.youtube.com/embed/8a7AiabjRaM",
                        "alt" => "Tiger 900 GT PRomo YouTube"
                    ]
                ],
                "customizationColors" => [
                    [
                        "colorName" => "Graphite / Sapphire Black",
                        "price" => 200,
                        "image" => "/images/custom-collors/graphiteJetBlack.jpg",
                        "base" => "/images/adventure/tiger900GT/tiger900GTGraphiteBlack.png",
                        "reversed" => "/images/adventure/tiger900GT/tiger900GTGraphiteBlackReversed.png"
                    ],
                    [
                        "colorName" => "Snowdonia White / Sapphire Black",
                        "price" => null,
                        "image" => "/images/custom-collors/snowdoniaWhiteSapphireBlack.pn",
                        "base" => "/images/adventure/tiger900GT/tiger900GTSnowdonia.png",
                        "reversed" => "/images/adventure/tiger900GT/tiger900GTSnowdoniaReversed.png"
                    ],
                    [
                        "colorName" => "Carnival Red / Saphire Black",
                        "price" => 200,
                        "image" => "/images/custom-collors/carnivalRedSapphireBlack.jpg",
                        "base" => "/images/adventure/tiger900GT/tiger900GTRed.png",
                        "reversed" => "/images/adventure/tiger900GT/tiger900GTRedReversed.png"
                    ]
                ],
                "subFamilyPromo" => [
                    "title" => "Новиот Tiger 900 GT",
                    "desc" => "Со врвни перформанси и комфорт Tiger 900 GT ве води на долги авантури. Неговата агилност и можности ви доверуваат сигурност и даваат чувство на слобода."
                ],
                "bikePageCarousell" => [
                    [
                        "title" => "Мотор",
                        "desc" => "Целиот обртен момент и тракција карактеристична за дво-цилиндарските мотори со одличната сила на средни и високи револуции на моторот карактеристични за три-цилиндарските мотори.",
                        "image" => "/images/adventure/tiger900GT/tiger900GTBikeCaro1.avif"
                    ],
                    [
                        "title" => "Сигурносни Системи",
                        "desc" => "Унапредениот систем за сопирање со оптимизиран ABS и систем за пролизгување заедно со светлосениот систем за алармирање на другите возачи при нагло сопирање ветуваат самодоберба и високо ниво на сигурност.",
                        "image" => "/images/adventure/tiger900GT/tiger900GTBikeCaro2.avif"
                    ],
                    [
                        "title" => "Технологија",
                        "desc" => "Целокупната Tiger 900 серија е опремена со високо ниво на технологија фокусирана на возачот. На располагање се 5 мода за возење а преку новиот 7 инчен TFT екран лесно можете да се поврзете со вашиот мотор преку Bluetooth.",
                        "image" => "/images/adventure/tiger900GT/tiger900GTBikeCaro3.avif"
                    ],
                    [
                        "title" => "Комфорт",
                        "desc" => "Ергономијата на моторот е дизајнирана за максимално искуство при долгите авантури со манимална доза на замор. Новото седиште како и воланот кој ги абсорбира сите несакани вибрации и удари му овозможуваат на возачот максимален комфорт и ушивање во авантурата.",
                        "image" => "/images/adventure/tiger900GT/tiger900GTBikeCaro4.avif"
                    ],
                    [
                        "title" => "Brembo Сопирачки",
                        "desc" => "Tiger 900 серијата на себе го носи најдобриот систем за сопирање во класата - Brembo Stylema со двојни 320 милиметарски дискови за поголема сопирачка моќ и повеќе контрола.",
                        "image" => "/images/adventure/tiger900GT/tiger900GTBikeCaro5.avif"
                    ],
                    [
                        "title" => "Суспензија",
                        "desc" => "Изработена исклучиво за Tiger 900 серијата, одличната Marzocchi прилагодлива суспензија нуди големо ниво на комфорт и контрола на моторциклот.",
                        "image" => "/images/adventure/tiger900GT/tiger900GTBikeCaro6.avif"
                    ],
                    [
                        "title" => "Квачило - Assisted Slip",
                        "desc" => "Дизајнирано за подобра контрола на задниот крај при агресивни спустови или лизгави коловози - Slip Assist квачилото ви асистира со полесен притисок на дланката.",
                        "image" => "/images/adventure/tiger900GT/tiger900GTBikeCaro7.avif"
                    ],
                    [
                        "title" => "Резервоар",
                        "desc" => "Дизајниран за долги патувања но и за максимална удобдност на возачот, резервоарот има капацитет од 20 литри и нуди одлична возачка позиција.",
                        "image" => "/images/adventure/tiger900GT/tiger900GTBikeCaro8.avif"
                    ],
                    [
                        "title" => "Светло",
                        "desc" => "Моќна LED расвета е насекаде низ Tiger 900 серијата со одлично главно светло и препознатливо LED дневно светло.",
                        "image" => "/images/adventure/tiger900GT/tiger900GTBikeCaro9.avif"
                    ],
                    [
                        "title" => "Bluetooth Конекција",
                        "desc" => "Стандардниот My Triumph систем за поврзување нуди „Turn-By-Turn“ навигација и целосна контрола на вашиот смарт телефонт (повици, музика).",
                        "image" => "/images/adventure/tiger900GT/tiger900GTBikeCaro10.avif"
                    ]
                ],
                "features" => [
                    [
                        "title" => "Модови за возење",
                        "desc" => "4 - Road, Rain, Sport & Off-Road"
                    ],
                    [
                        "title" => "Поврзување",
                        "desc" => "Triump Connectivity System"
                    ],
                    [
                        "title" => "Светло",
                        "desc" => "Full LED"
                    ],
                    [
                        "title" => "USB",
                        "desc" => "2 порти - Кокпит и под седиште"
                    ],
                    [
                        "title" => "Ветробранско Стакло",
                        "desc" => "Подесување до 50mm"
                    ],
                    [
                        "title" => "Греачи",
                        "desc" => "Рачки - дополнителна опција за седишта"
                    ],
                    [
                        "title" => "Темпомат",
                        "desc" => "Доаѓа како стандард"
                    ],
                    [
                        "title" => "Систем за контрола на притисок во пневматици",
                        "desc" => "Опционален Пакет"
                    ],
                    [
                        "title" => "ABS - Ситем за Пролизгување",
                        "desc" => "Доаѓа како стандард"
                    ],
                    [
                        "title" => "Систем за алармирање при нагло запирање",
                        "desc" => "Доаѓа како стандард"
                    ],
                    [
                        "title" => "Заштитни Рамови и Централна Ногарка",
                        "desc" => "Опционален Пакет"
                    ]
                ]
            ],
            [
                "id" => 2,
                "title" => "Tiger 900 GT PRO",
                "model" => "tiger-900-gt-pro",
                "category" => "adventure",
                "subFamilyCategory" => "tiger-900",
                "edition" => "adventure",
                "price" => 16790,
                "gallery" => [
                    "modelImage" => [
                        "src" => "/images/adventure/tiger900GTPRO/tiger900GTPROGraphite.png",
                        "alt" => "Tiger 900 GT"
                    ],
                    "promoYoutubeVideo" => [
                        "src" => "https://www.youtube.com/embed/8a7AiabjRaM",
                        "alt" => "Promo Youtube Video Tiger 900 GT PRo"
                    ]
                ],
                "customizationColors" => [
                    [
                        "colorName" => "Graphite / Sapphire Black",
                        "price" => 110,
                        "image" => "/images/custom-collors/graphiteJetBlack.jpg",
                        "base" => "/images/adventure/tiger900GTPRO/tiger900GTPROGraphite.png",
                        "reversed" => "/images/adventure/tiger900GTPRO/tiger900GTPROGraphiteReversed.png"
                    ],
                    [
                        "colorName" => "Carnival Red / Saphire Black",
                        "price" => 110,
                        "image" => "/images/custom-collors/carnivalRedSapphireBlack.jpg",
                        "base" => "/images/adventure/tiger900GTPRO/tiger900GTPRORed.png",
                        "reversed" => "/images/adventure/tiger900GTPRO/tiger900GTPRORedReversed.png"
                    ],
                    [
                        "colorName" => "Snowdonia White / Sapphire Black",
                        "price" => null,
                        "image" => "/images/custom-collors/snowdoniaWhiteSapphireBlack.pn",
                        "base" => "/images/adventure/tiger900GTPRO/tiger900GTPROWhite.png",
                        "reversed" => "/images/adventure/tiger900GTPRO/tiger900GTPROWhiteReversed.png"
                    ]
                ],
                "subFamilyPromo" => [
                    "title" => "Новиот Tiger 900 GT PRO",
                    "desc" => "Високи перформанси, комфорт, можности и управување. Новата Tiger 900 GT фамилија е родена за авантури од епски размери."
                ],
                "bikePageCarousell" => [
                    [
                        "title" => "Мотор",
                        "desc" => "Целиот обртен момент и тракција карактеристична за дво-цилиндарските мотори со одличната сила на средни и високи револуции на моторот карактеристични за три-цилиндарските мотори. Флексибилен, интуитивен со 13% повеќе моќ од својот претходник.",
                        "image" => "/images/adventure/tiger900GTPRO/tiger900GTPROBikeCaro1.avif"
                    ],
                    [
                        "title" => "Сигурносни Системи",
                        "desc" => "Унапредениот систем за сопирање со оптимизиран ABS и систем за пролизгување заедно со светлосениот систем за алармирање на другите возачи при нагло сопирање ветуваат самодоберба и високо ниво на сигурност.",
                        "image" => "/images/adventure/tiger900GTPRO/tiger900GTPROBikeCaro2.avif"
                    ],
                    [
                        "title" => "Технологија",
                        "desc" => "Целокупната Tiger 900 серија е опремена со високо ниво на технологија фокусирана на возачот. На располагање се 5 мода за возење а преку новиот 7 инчен TFT екран лесно можете да се поврзете со вашиот мотор преку Bluetooth.",
                        "image" => "/images/adventure/tiger900GTPRO/tiger900GTPROBikeCaro3.avif"
                    ],
                    [
                        "title" => "Комфорт",
                        "desc" => "Ергономијата на моторот е дизајнирана за максимално искуство при долгите авантури со манимална доза на замор. Новото седиште со 20мм понизок профил од стандардот како и воланот кој ги абсорбира сите несакани вибрации и удари му овозможуваат на возачот максимален комфорт и ушивање во авантурата.",
                        "image" => "/images/adventure/tiger900GTPRO/tiger900GTPROBikeCaro4.avif"
                    ],
                    [
                        "title" => "Brembo Сопирачки",
                        "desc" => "Tiger 900 серијата на себе го носи најдобриот систем за сопирање во класата - Brembo Stylema со двојни 320 милиметарски дискови за поголема сопирачка моќ и повеќе контрола.",
                        "image" => "/images/adventure/tiger900GTPRO/tiger900GTPROBikeCaro5.avif"
                    ],
                    [
                        "title" => "Суспензија",
                        "desc" => "Изработена исклучиво за Triumph, одличната Marzocchi прилагодлива суспензија нуди големо ниво на комфорт и контрола на моторциклот.",
                        "image" => "/images/adventure/tiger900GTPRO/tiger900GTPROBikeCaro6.avif"
                    ],
                    [
                        "title" => "Квачило - Assisted Slip",
                        "desc" => "Дизајнирано за подобра контрола на задниот крај при агресивни спустови или лизгави коловози - Slip Assist квачилото ви асистира со полесен притисок на дланката.",
                        "image" => "/images/adventure/tiger900GTPRO/tiger900GTPROBikeCaro7.avif"
                    ],
                    [
                        "title" => "Резервоар",
                        "desc" => "Дизајниран за долги патувања но и за максимална удобдност на возачот, резервоарот има капацитет од 20 литри и нуди одлична возачка позиција.",
                        "image" => "/images/adventure/tiger900GTPRO/tiger900GTPROBikeCaro8.avif"
                    ],
                    [
                        "title" => "Светло",
                        "desc" => "Моќна LED расвета е насекаде низ Tiger 900 серијата со одлично главно светло и препознатливо LED дневно светло.",
                        "image" => "/images/adventure/tiger900GTPRO/tiger900GTPROBikeCaro9.avif"
                    ],
                    [
                        "title" => "Bluetooth Конекција",
                        "desc" => "Стандардниот My Triumph систем за поврзување нуди „Turn-By-Turn“ навигација и целосна контрола на вашиот смарт телефонт (повици, музика).",
                        "image" => "/images/adventure/tiger900GTPRO/tiger900GTPROBikeCaro10.avif"
                    ]
                ],
                "features" => [
                    [
                        "title" => "Модови за возење",
                        "desc" => "5 - Road, Rain, Sport, Rider Customizable & Off-Road"
                    ],
                    [
                        "title" => "Поврзување",
                        "desc" => "Triump Connectivity System"
                    ],
                    [
                        "title" => "Светло",
                        "desc" => "Full LED"
                    ],
                    [
                        "title" => "USB",
                        "desc" => "2 порти - Кокпит и под седиште"
                    ],
                    [
                        "title" => "Ветробранско Стакло",
                        "desc" => "Подесување до 50mm"
                    ],
                    [
                        "title" => "Греачи",
                        "desc" => "Рачки и Седишта"
                    ],
                    [
                        "title" => "Темпомат",
                        "desc" => "Доаѓа како стандард"
                    ],
                    [
                        "title" => "Систем за контрола на притисок во пневматици",
                        "desc" => "Опционален Пакет"
                    ],
                    [
                        "title" => "ABS - Ситем за Пролизгување",
                        "desc" => "Доаѓа како стандард"
                    ],
                    [
                        "title" => "Triumph Shift Assist",
                        "desc" => "Доаѓа како стандард"
                    ],
                    [
                        "title" => "Систем за алармирање при нагло запирање",
                        "desc" => "Доаѓа како стандард"
                    ],
                    [
                        "title" => "Заштитни Рамови",
                        "desc" => "Опционален Пакет"
                    ],
                    [
                        "title" => "Централна Ногарка",
                        "desc" => "Доаѓа како Стандард"
                    ]
                ],
                "bikePageImageGallery" => [
                    [
                        "alt" => "tiger900GTPROBikeGalleryCaro1",
                        "src" => "/images/adventure/tiger900GTPRO/tiger900GTPROBikeGalleryCaro1.avif"
                    ],
                    [
                        "alt" => "tiger900GTPROBikeGalleryCaro2",
                        "src" => "/images/adventure/tiger900GTPRO/tiger900GTPROBikeGalleryCaro2.avif"
                    ],
                    [
                        "alt" => "tiger900GTPROBikeGalleryCaro3",
                        "src" => "/images/adventure/tiger900GTPRO/tiger900GTPROBikeGalleryCaro3.avif"
                    ],
                    [
                        "alt" => "tiger900GTPROBikeGalleryCaro4",
                        "src" => "/images/adventure/tiger900GTPRO/tiger900GTPROBikeGalleryCaro4.avif"
                    ]
                ]
            ],
            [
                "id" => 3,
                "title" => "Tiger 900 Rally PRO",
                "model" => "tiger-900-rally-pro",
                "category" => "adventure",
                "subFamilyCategory" => "tiger-900",
                "edition" => "adventure",
                "price" => 17490,
                "gallery" => [
                    "modelImage" => [
                        "src" => "/images/adventure/tiger900RallyPro/tiger900RallyProCarbonBlack.png",
                        "alt" => "Tiger 900 Rally Pro"
                    ],
                    "promoYoutubeVideo" => [
                        "src" => "https://www.youtube.com/embed/8x9rtiLVFQU",
                        "alt" => "Promo Youtube Video Tiger 900"
                    ]
                ],
                "customizationColors" => [
                    [
                        "colorName" => "Ash Gray / Intense Orange",
                        "price" => 200,
                        "image" => "/images/custom-collors/ashGreyIntenseOrange.png",
                        "base" => "/images/adventure/tiger900RallyPro/tiger900RallyProOrange.png",
                        "reversed" => "/images/adventure/tiger900RallyPro/tiger900RallyProOrangeReversed.png"
                    ],
                    [
                        "colorName" => "Carbon Black / Sapphire Black",
                        "price" => null,
                        "image" => "/images/custom-collors/carbonBlack.png",
                        "base" => "/images/adventure/tiger900RallyPro/tiger900RallyProCarbonBlack.png",
                        "reversed" => "/images/adventure/tiger900RallyPro/tiger900RallyProCarbonBlackReversed.png",
                    ],
                    [
                        "colorName" => "Matt Khaki / Matt Phantom Black",
                        "price" => 300,
                        "image" => "/images/custom-collors/mattKahkiGreenMattPhantomBlack.png",
                        "base" => "/images/adventure/tiger900RallyPro/tiger900RallyProKhaki.png",
                        "reversed" => "/images/adventure/tiger900RallyPro/tiger900RallyProKhakiReversed.png"
                    ]
                ],
                "subFamilyPromo" => [
                    "title" => "НОВИОТ Tiger 900 Rally PRO",
                    "desc" => "Одлични “off-road“ способности со исто така исклучително добри перформанси на нормални патишта, новиот Tiger 900 Rally Pro е спремен за секаков терен и авантура."
                ],
                "bikePageCarousell" => [
                    [
                        "title" => "Мотор",
                        "desc" => "Одличен обртен момент при ниски револуции на моторот, агилност во средните и екслозивна сила при високите револуции на моторот со додатени 13% повеќе максимална сила од претходникот.",
                        "image" => "/images/adventure/tiger900RallyPro/tiger900RallyPROBikeCaro1.avif"
                    ],
                    [
                        "title" => "Сигурносни Системи",
                        "desc" => "Унапредениот систем за сопирање со оптимизиран ABS и систем за пролизгување заедно со светлосениот систем за алармирање на другите возачи при нагло сопирање ветуваат самодоберба и високо ниво на сигурност.",
                        "image" => "/images/adventure/tiger900RallyPro/tiger900RallyPROBikeCaro2.avif"
                    ],
                    [
                        "title" => "Технологија",
                        "desc" => "Целокупната Tiger 900 серија е опремена со високо ниво на технологија фокусирана на возачот. На располагање се 5 мода за возење а преку новиот 7 инчен TFT екран лесно можете да се поврзете со вашиот мотор преку Bluetooth.",
                        "image" => "/images/adventure/tiger900RallyPro/tiger900RallyPROBikeCaro3.avif"
                    ],
                    [
                        "title" => "Комфорт",
                        "desc" => "Ергономијата на моторот е дизајнирана за максимално искуство при долгите авантури со манимална доза на замор. Новото седиште со 20мм понизок профил од стандардот како и воланот кој ги абсорбира сите несакани вибрации и удари му овозможуваат на возачот максимален комфорт и ушивање во авантурата.",
                        "image" => "/images/adventure/tiger900RallyPro/tiger900RallyPROBikeCaro4.avif"
                    ],
                    [
                        "title" => "Brembo Сопирачки",
                        "desc" => "Tiger 900 серијата на себе го носи најдобриот систем за сопирање во класата - Brembo Stylema со двојни 320 милиметарски дискови за поголема сопирачка моќ и повеќе контрола.",
                        "image" => "/images/adventure/tiger900RallyPro/tiger900RallyPROBikeCaro5.avif"
                    ],
                    [
                        "title" => "Суспензија",
                        "desc" => "Со одличната Showa суспензија од 240mm напред и 230mm назад, Tiger 900 Rally Pro е способна за било каков екстремен off-road предизвик со одлично ниво на комоција.",
                        "image" => "/images/adventure/tiger900RallyPro/tiger900RallyPROBikeCaro6.avif"
                    ],
                    [
                        "title" => "Квачило - Assisted Slip",
                        "desc" => "Дизајнирано за подобра контрола на задниот крај при агресивни спустови или лизгави коловози - Slip Assist квачилото ви асистира со полесен притисок на дланката.",
                        "image" => "/images/adventure/tiger900RallyPro/tiger900RallyPROBikeCaro7.avif"
                    ],
                    [
                        "title" => "Резервоар",
                        "desc" => "Дизајниран за долги патувања но и за максимална удобдност на возачот, резервоарот има капацитет од 20 литри и нуди одлична возачка позиција.",
                        "image" => "/images/adventure/tiger900RallyPro/tiger900RallyPROBikeCaro8.avif"
                    ],
                    [
                        "title" => "Светло",
                        "desc" => "Моќна LED расвета е насекаде низ Tiger 900 серијата со одлично главно светло и препознатливо LED дневно светло.",
                        "image" => "/images/adventure/tiger900RallyPro/tiger900RallyPROBikeCaro9.avif"
                    ],
                    [
                        "title" => "Тркала",
                        "desc" => "Жичните тркала со жичи монтирани странично се одличен избор за Rally Pro серијата. 21‘ предно тркало и 17‘ задно тркало нудат одлични off-road способности и управување со широка палета на пневматици.",
                        "image" => "/images/adventure/tiger900RallyPro/tiger900RallyPROBikeCaro10.avif"
                    ]
                ],
                "features" => [
                    [
                        "title" => "Модови за возење",
                        "desc" => "6 - Road, Rain, Sport, Rider Customizable, Off-Road & Off-Road PRO"
                    ],
                    [
                        "title" => "Поврзување",
                        "desc" => "Triump Connectivity System"
                    ],
                    [
                        "title" => "Светло",
                        "desc" => "Full LED"
                    ],
                    [
                        "title" => "USB",
                        "desc" => "2 порти - Кокпит и под седиште"
                    ],
                    [
                        "title" => "Ветробранско Стакло",
                        "desc" => "Подесување до 50mm"
                    ],
                    [
                        "title" => "Греачи",
                        "desc" => "Рачки и Седишта"
                    ],
                    [
                        "title" => "Темпомат",
                        "desc" => "Доаѓа како стандард"
                    ],
                    [
                        "title" => "Систем за контрола на притисок во пневматици",
                        "desc" => "Опционален Пакет"
                    ],
                    [
                        "title" => "ABS - Ситем за Пролизгување",
                        "desc" => "Доаѓа како стандард"
                    ],
                    [
                        "title" => "Triumph Shift Assist",
                        "desc" => "Доаѓа како стандард"
                    ],
                    [
                        "title" => "Систем за алармирање при нагло запирање",
                        "desc" => "Доаѓа како стандард"
                    ],
                    [
                        "title" => "Заштитни Рамови",
                        "desc" => "Заштитен рам за мотор"
                    ],
                    [
                        "title" => "Централна Ногарка",
                        "desc" => "Доаѓа како Стандард"
                    ]
                ],
                "bikePageImageGallery" => [
                    [
                        "alt" => "tiger900RallyProBikeGalleryCaro1",
                        "src" => "/images/adventure/tiger900RallyPro/tiger900RallyProBikeGalleryCaro1.avif"
                    ],
                    [
                        "alt" => "tiger900RallyProBikeGalleryCaro2",
                        "src" => "/images/adventure/tiger900RallyPro/tiger900RallyProBikeGalleryCaro2.avif"
                    ],
                    [
                        "alt" => "tiger900RallyProBikeGalleryCaro3",
                        "src" => "/images/adventure/tiger900RallyPro/tiger900RallyProBikeGalleryCaro3.avif"
                    ],
                    [
                        "alt" => "tiger900RallyProBikeGalleryCaro4",
                        "src" => "/images/adventure/tiger900RallyPro/tiger900RallyProBikeGalleryCaro4.avif"
                    ]
                ]
            ],
            [
                "id" => 5,
                "title" => "Tiger Sport 660",
                "model" => "tiger-sport-660",
                "category" => "adventure",
                "subFamilyCategory" => "tiger-sport-660",
                "edition" => "adventure",
                "price" => 10290,
                "gallery" => [
                    "modelImage" => [
                        "src" => "/images/adventure/tigerSport660/tiger660ModelImage.avif",
                        "alt" => "Tiger Sport 660"
                    ],
                    "promoYoutubeVideo" => [
                        "src" => "https://www.youtube.com/embed/QvVCEk4t8IE",
                        "alt" => "Tiger 660 Youtbe Video"
                    ]
                ],
                "customizationColors" => [
                    [
                        "colorName" => "Graphite / Jet Black",
                        "price" => null,
                        "image" => "/images/custom-collors/jetBlackGraphite.jpg",
                        "base" => "/images/adventure/tigerSport660/tiger660JetBlackGraphite.avif",
                        "reversed" => "/images/adventure/tigerSport660/tigerSport660JetBlackGraphiteReversed.png"
                    ],
                    [
                        "colorName" => "Snowdonia White / Jett Black",
                        "price" => 200,
                        "image" => "/images/custom-collors/crystalWhiteJetBlack.jpg",
                        "base" => "/images/adventure/tigerSport660/tigerSport660SnowdoniaWhiteJetBlack.png",
                        "reversed" => "/images/adventure/tigerSport660/tigerSport660SnowdoniaWhiteJetBlackReversed.png"
                    ],
                    [
                        "colorName" => "Korosi Red / Graphite",
                        "price" => 200,
                        "image" => "/images/custom-collors/korosiRedSapphireBlack.jpg",
                        "base" => "/images/adventure/tigerSport660/tiger660ModelImage.avif",
                        "reversed" => "/images/adventure/tigerSport660/tigerSport660ModelImageReversed.png"
                    ]
                ],
                "shortSpecInfo" => [
                    "info1" => "660cc Tри-Цилиндричен Мотор",
                    "info2" => "Лидер во категоријата",
                    "info3" => "Прилагодлива 'Showa' суспензија"
                ],
                "features" => [
                    [
                        "title" => "Мотор",
                        "desc" => "660сс - Три-Цилиндри"
                    ],
                    [
                        "title" => "Коњски Сили и Обртен Момент",
                        "desc" => "81PS & 64Nm"
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
                        "desc" => "2 мода на работа (нормално и за дожд)"
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
                        "title" => "Инструментна Плоча",
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
                        "desc" => "16,000 км или 12 месеци"
                    ]
                ],
                "bikePageCarousell" => [
                    [
                        "title" => "Лидерски Перформанси во Класата",
                        "desc" => "Tiger 660 серијата е најмоќниот мотор во својата категорија - со максимална јачина од 81 коњски сили и 64 Nm вртежен момент, три-цилиндричниот Triumph мотор ги испорачува своите перформанси со глаток и линеарен карактер.",
                        "image" => "/images/adventure/tigerSport660/tigerSport660BikeCaro1.avif"
                    ],
                    [
                        "title" => "Флексибилен, Динамичен и Комфортен",
                        "desc" => "Со тенок профил на караосеријата, ниско седиште (835 милиметри), одлична ергономија и агилност, Tiger 660 серијата ја прави секоја авантура забаван и без никаков напор.",
                        "image" => "/images/adventure/tigerSport660/tigerSport660BikeCaro2.avif"
                    ],
                    [
                        "title" => "Технологија",
                        "desc" => "За унапредување на нивото на сигурност и контрола, Tiger 660 серијата со себе ја носи најновата ABS технологија како и најновата генерација на систем за пролизгување, кои впрочем може и лесно да биде деактивиран за уште повозбудлива авантура.",
                        "image" => "/images/adventure/tigerSport660/tigerSport660BikeCaro3.avif"
                    ],
                    [
                        "title" => "Мулитифункионален Екран",
                        "desc" => "Најмоќниот TFT мултифункционален екран ефикасно и интуитивно ги претставува сите информации кои се од корист на возачите. Исто така истиот е компитабилен и со најновиот My Triump Connectivity - систем за поврзување кој овозможува користење на навигација, телефон и GoPro.",
                        "image" => "/images/adventure/tigerSport660/tigerSport660BikeCaro4.avif"
                    ],
                    [
                        "title" => "Два мода на работа",
                        "desc" => "Со користење на ергономични и интуитивни команди на воланот, лесно можете да го промените програмот на работа на моторот. На располагање се: Rain и Road програми, кои самостојно го прилагодуваат карактерот на моторот за повеќе авантура или повеќе сигурност.",
                        "image" => "/images/adventure/tigerSport660/tigerSport660BikeCaro5.avif"
                    ],
                    [
                        "title" => "Максимална сигурност со целосната LED расвета",
                        "desc" => "Со одличните LED главни и дневни светла, интегрирано задно LED светло и LED трепкачи, Tiger 660 одлично го осветлува патот пред вас и околу вас и го зголемува нивото на безбедност.",
                        "image" => "/images/adventure/tigerSport660/tigerSport660BikeCaro6.avif"
                    ],
                    [
                        "title" => "Возачки Помагала",
                        "desc" => "Tiger 660 серијата на себе носи „Slip & Assist“ квачило кое поседува лесна рачка со што го намалува заморот на дланката. Исто така тука е и „Ride By Wire“ технологијата за аплицирање на гас и имобилизатор за повеќе сигурсност.",
                        "image" => "/images/adventure/tigerSport660/tigerSport660BikeCaro7.avif"
                    ],
                    [
                        "title" => "Спремен за Персонализација",
                        "desc" => "Од багаш во иста боја со моторот, до дополнителна заштита, стил и сигурност, секое парче аксесоар е дизајнирано рака под рака со моторот и поседува 2 годишна гаранција.",
                        "image" => "/images/adventure/tigerSport660/tigerSport660BikeCaro8.avif"
                    ],
                    [
                        "title" => "Одлична сопирачка Моќ",
                        "desc" => "Целосниот Nissin сопирачки систем оддава одлично чувство и контрола при аплицирање на сопирачките за уште поинтересна авантура.",
                        "image" => "/images/adventure/tigerSport660/tigerSport660BikeCaro9.avif"
                    ],
                    [
                        "title" => "Авантуристички Стил",
                        "desc" => "Off-road перформанси кои импресионираат споени со авантуристичка силуета со агресивни линии, детали и Tiger 660 Sport палетата на бои, дава рефиниран но сепак спортски, издржлив карактер кој е спремен за авантура.",
                        "image" => "/images/adventure/tigerSport660/tigerSport660BikeCaro10.avif"
                    ],
                    [
                        "title" => "17 литарски резервоар",
                        "desc" => "17 литарскиот резервоар ви овозможува повеќе возење а помалку време изгубено на бензиските станици.",
                        "image" => "/images/adventure/tigerSport660/tigerSport660BikeCaro11.avif"
                    ]
                ],
                "subFamilyPromo" => [
                    "title" => "TIGER SPORT 660",
                    "desc" => "Првиот Triumph мотор за многу корисници, со три-цилиндарски мотор, неверојатен комфорт, перформанси, искористливост и агилност,и тоа со најниски трошоци за одржување во класата."
                ],
                "bikePagePromo" => [
                    [
                        "title" => "Неспоредливо Мали Трошоци за Одржување",
                        "desc" => "Новиот Tiger Sport 660 се карактеризира со најниски трошоци за одржување во класата, две годишна гаранција без рразлика на поминати километри и сервисен интервал од 16 000 километри и тоа по компетитивна цена.",
                        "image" => "/images/adventure/tigerSport660/bikePagepPromo1.avif"
                    ],
                    [
                        "title" => "Компатибилен со A2 Возачка Лиценца",
                        "desc" => "Tiger Sport 660 е идеален избор за нови и неискусни возачи. Истиот нуди модул за деградирање на моторот во А2 возачка лиценца и истиот може да се вгради или одстрани во најблискиот Triumph центар и тоа за рекордно брзо време.",
                        "image" => "/images/adventure/tigerSport660/bikePagePromo2.avif"
                    ]
                ]
            ],
            [
                "id" => 6,
                "title" => "Tiger 850 Sport",
                "model" => "tiger-850-sport",
                "category" => "adventure",
                "subFamilyCategory" => "tiger-850-sport",
                "edition" => "adventure",
                "price" => 13390,
                "gallery" => [
                    "modelImage" => [
                        "src" => "/images/adventure/tigerSport850/tigerSport850DiabloRed.png",
                        "alt" => "Tiger 850 Sport"
                    ],
                    "promoYoutubeVideo" => [
                        "src" => "https://www.youtube.com/embed/dGfqpR5bwyM",
                        "alt" => "Tiger 850 Youtbe Video"
                    ]
                ],
                "customizationColors" => [
                    [
                        "colorName" => "Graphite Diablo Red",
                        "price" => null,
                        "image" => "/images/custom-collors/graphiteDiabloRed.jpg",
                        "base" => "/images/adventure/tigerSport850/tigerSport850DiabloRed.png",
                        "reversed" => "/images/adventure/tigerSport850/tigerSport850DiabloRedReversed.png"
                    ],
                    [
                        "colorName" => "Graphite / Jet Black",
                        "price" => null,
                        "image" => "/images/custom-collors/graphiteJetBlack.jpg",
                        "base" => "/images/adventure/tigerSport850/tigerSport850GraphiteJetBlack.png",
                        "reversed" => "/images/adventure/tigerSport850/tigerSport850GraphiteJetBlackReversed.png"
                    ]
                ],
                "shortSpecInfo" => [
                    "info1" => "850cc T-plane Три-Цилиндричен Мотор",
                    "info2" => "Патнички мотор со авантуристички дух",
                    "info3" => "20 литарски резервоар"
                ],
                "features" => [
                    [
                        "title" => "Мотор",
                        "desc" => "850сс triple мотор со иновативна Т-радалица (EURO 5 Стандарди)"
                    ],
                    [
                        "title" => "Возачка Категорија",
                        "desc" => "Можност за конвертирање во A2 категорија"
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
                        "desc" => "2 мода на работа (нормално и за дожд)"
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
                    "desc" => "Изработен за секој предизвик - со целиот можен карактер, перформанси и агилност на еден Tiger мотор, и силуета по која сите се вртат и адаптабилност за сечии потреби."
                ],
                "bikePagePromo" => [
                    [
                        "title" => "Ергономија која инспирира самодоверба",
                        "desc" => "Тенката силуета на Tiger 850 Sport, овозможува лесен контакт со површината на која возите. Лесната шасија, прилагодливите седло и волан, го подобруваат комодитетот и самодовербата.",
                        "image" => "/images/adventure/tigerSport850/tiger850BikePagePromo1.avif"
                    ]
                ],
                "bikePageImageGallery" => [
                    [
                        "alt" => "tiger850SportBikeGalleryCaro1",
                        "src" => "/images/adventure/tigerSport850/tiger850SportBikeGalleryCaro1.avif"
                    ]
                ]
            ],
            [
                "id" => 7,
                "title" => "Tiger 1200 GT PRO",
                "model" => "tiger-1200-gt-pro-2022",
                "category" => "adventure",
                "subFamilyCategory" => "tiger-1200-gt",
                "edition" => "adventure",
                "price" => 21590,
                "gallery" => [
                    "modelImage" => [
                        "src" => "/images/adventure/tiger1200GTPRO/tiger1200GTPROModelImage.png",
                        "alt" => "Tiger 1200 GT PRO"
                    ],
                    "promoYoutubeVideo" => [
                        "src" => "https://www.youtube.com/embed/63NpxVoXyNg",
                        "alt" => "Tiger 1200 GT PRO Youtube Video"
                    ]
                ],
                "customizationColors" => [
                    [
                        "colorName" => "Snowdonia White",
                        "price" => null,
                        "image" => "/images/custom-collors/snowdoniaWhite.jpg",
                        "base" => "/images/adventure/tiger1200GTPRO/tiger1200GTPROModelImage.png",
                        "reversed" => "/images/adventure/tiger1200GTPRO/tiger1200GTPROColor1Reversed.png"
                    ],
                    [
                        "colorName" => "Saphire Black",
                        "price" => 200,
                        "image" => "/images/custom-collors/sapphireBlack.jpg",
                        "base" => "/images/adventure/tiger1200GTPRO/tiger1200GTPROColor2.png",
                        "reversed" => "/images/adventure/tiger1200GTPRO/tiger1200GTPROColor2Reversed.png"
                    ],
                    [
                        "colorName" => "Carnival Red",
                        "price" => 200,
                        "image" => "/images/custom-collors/carnivalRed.jpg",
                        "base" => "/images/adventure/tiger1200GTPRO/tiger1200GTPRORed.png",
                        "reversed" => "/images/adventure/tiger1200GTPRO/tiger1200GTPRORedReversed.png"
                    ]
                ],
                "shortSpecInfo" => [
                    "info1" => "1,160cc T-plane Triple Motor",
                    "info2" => "20 литарски резервоар",
                    "info3" => "3 години гаранција"
                ],
                "features" => [
                    [
                        "title" => "Поврзување",
                        "desc" => "Triump Connectivity System"
                    ],
                    [
                        "title" => "Греачи",
                        "desc" => "Рачки стандард / Опционално за седишта"
                    ],
                    [
                        "title" => "Темпомат",
                        "desc" => "Стандард"
                    ],
                    [
                        "title" => "Систем за контрола на притисок во пневматици",
                        "desc" => "Опционален Пакет"
                    ],
                    [
                        "title" => "ABS - Ситем за Пролизгување",
                        "desc" => "Стандард"
                    ],
                    [
                        "title" => "Адаптивни Светла",
                        "desc" => "Стандард Full LED"
                    ],
                    [
                        "title" => "Triumph Shift Assist",
                        "desc" => "Стандард"
                    ],
                    [
                        "title" => "Hill Hold",
                        "desc" => "Стандард"
                    ],
                    [
                        "title" => "Систем за алармирање при нагло запирање",
                        "desc" => "Стандард"
                    ],
                    [
                        "title" => "Заштита",
                        "desc" => "Заштитен за раце, Алуминиумска плоча за долен дел од мотор"
                    ],
                    [
                        "title" => "Централна Ногарка",
                        "desc" => "Доаѓа како Стандард"
                    ],
                    [
                        "title" => "Гаранција",
                        "desc" => "3 години"
                    ]
                ],
                "bikePageCarousell" => [
                    [
                        "title" => "Мотор",
                        "desc" => "Уникатен „Т-Plane“ три-цилиндричен мотор со сите бенефити при ниски револуции на моторот како кај сите дво-цилиндраши и одлични високи перформанси карактеристични за три-цилиндарските мотор.",
                        "image" => "/images/adventure/tiger1200GTPRO/tiger1200GTPROBikeCaro1.png"
                    ],
                    [
                        "title" => "Tri-Link Задна Вилушка",
                        "desc" => "Уникатната „TRI-LINK“ задна вилушка комбинира цврстина и издржливост со лесно одржување и нуди одлично чувство и контрола при возење, сето тоа со мала тежина на самата компонента.",
                        "image" => "/images/adventure/tiger1200GTPRO/tiger1200GTPROBikeCaro2.avif"
                    ],
                    [
                        "title" => "Сопирачки",
                        "desc" => "Brembo Stylema клештите и Magura пумпата за течност за сопирање го комплетираат системот за сoпирање кој нуди висока сопирачка моќ и сигурност со оптимизираниот ABS систем.",
                        "image" => "/images/adventure/tiger1200GTPRO/tiger1200GTPROBikeCaro3.avif"
                    ],
                    [
                        "title" => "Квачило - Shift Assist",
                        "desc" => "Пмаетното квачило ви овозможува лесно, прецизно и брзо менување на степенот на пренос без користење на квачилото.",
                        "image" => "/images/adventure/tiger1200GTPRO/tiger1200GTPROBikeCaro4.avif"
                    ],
                    [
                        "title" => "Пет Мода на Работа",
                        "desc" => "Како дополнување на трите стандарди мода на работа , GT PRO серијата го носи и Off-Road модот со кој лесно може да ги совладате сите видови терени. Како плус на сето ова тука е и Rider модот кој лесно се персонализира според вашите преференци.",
                        "image" => "/images/adventure/tiger1200GTPRO/tiger1200GTPROBikeCaro5.avif"
                    ],
                    [
                        "title" => "Одлична Ергономија",
                        "desc" => "Оличната силуета, тенок профил на седиштето нуди високо ниво на самодоверба и флексибилност без разлика дали возите во седечка или стоечка позиција.",
                        "image" => "/images/adventure/tiger1200GTPRO/tiger1200GTPROBikeCaro6.png"
                    ],
                    [
                        "title" => "Лесно Прилагодливо Седиште и Ветробранско Стакло",
                        "desc" => "Со цел за уште покомфортно возачко искуство и контрола врз моторот, тука е лесно прилагодливото седиште со висина од 850 до 870 милиметри како и одлично ветробранско стакло за заштита од ветер.",
                        "image" => "/images/adventure/tiger1200GTPRO/tiger1200GTPROBikeCaro7.avif"
                    ],
                    [
                        "title" => "адаптивно светло",
                        "desc" => "Целосната LED расвета доаѓа како стандард кај сите Tiger модели. Дополнително GT PRO серијата доаѓа со адаптивни светла кои го следата патот пред вас и се вртат кон внатрешната страна на свиокот. Како екстра детал тука е и екстерните светла за уште повеќе сигурност и уживање.",
                        "image" => "/images/adventure/tiger1200GTPRO/tiger1200GTPROBikeCaro8.avif"
                    ],
                    [
                        "title" => "Луксузни Финиши",
                        "desc" => "Софистициран, елегантен и изработен за да трае, GT PRO серијата и достапна во три бои и секоја од нив нуди одлични детали и завршница од високо ниво.",
                        "image" => "/images/adventure/tiger1200GTPRO/tiger1200GTPROBikeCaro9.avif"
                    ],
                    [
                        "title" => "Комфорт & Контрола",
                        "desc" => "GT PRO серијата е дизајнирана за максимално возачко уживање, контрола и комфорт. Секој елемент како греачите на рачки, темпомат, централна ногарка и сл. се тука за да го подобрат возачкото искуство",
                        "image" => "/images/adventure/tiger1200GTPRO/tiger1200GTPROBikeCaro10.avif"
                    ]
                ],
                "subFamilyPromo" => [
                    "title" => "Tiger 1200 GT PRO",
                    "desc" => "Најдобриот во класата, GT Pro ги носи технологијата, возењето и спецификациите за оваа серија на ново ниво. Сега доаѓа и со новиот Active Preload Reduction мод кој овозможува прилагодлива суспензија."
                ],
                "bikePageImageGallery" => [
                    [
                        "alt" => "tiger1200GTPROBikeGalleryCaro1tiger1200GTPROBikeGalleryCaro1",
                        "src" => "/images/adventure/tiger1200GTPRO/tiger1200GTPROBikeGalleryCaro1.avif"
                    ]
                ]
            ],
            [
                "id" => 8,
                "title" => "Tiger 1200 GT Explorer",
                "model" => "tiger-1200-gt-explorer-2022",
                "category" => "adventure",
                "subFamilyCategory" => "tiger-1200-gt",
                "edition" => "adventure",
                "price" => 23590,
                "gallery" => [
                    "modelImage" => [
                        "src" => "/images/adventure/tiger1200GtExplorerModel.png",
                        "alt" => "Tiger 1200 GT Explorer"
                    ],
                    "promoYoutubeVideo" => [
                        "src" => "https://www.youtube.com/embed/OeubtUmrNbQ",
                        "alt" => "Tiger 1200 GT Explorer Youtube Video"
                    ]
                ],
                "customizationColors" => [
                    [
                        "colorName" => "Snowdonia White",
                        "price" => null,
                        "image" => "/images/custom-collors/snowdoniaWhite.jpg",
                        "base" => "/images/adventure/tiger1200GTExplorer/tiger1200GTExplorerSnowdoniaWhite.png",
                        "reversed" => "/images/adventure/tiger1200GTExplorer/tiger1200GTExplorerSnowdoniaWhiteReversed.png"
                    ],
                    [
                        "colorName" => "Saphire Black",
                        "price" => 300,
                        "image" => "/images/custom-collors/sapphireBlack.jpg",
                        "base" => "/images/adventure/tiger1200GTExplorer/tiger1200GTExplorerSaphireBlack.png",
                        "reversed" => "/images/adventure/tiger1200GTExplorer/tiger1200GTExplorerSaphireBlackReversed.png"
                    ],
                    [
                        "colorName" => "Carnival Red",
                        "price" => 400,
                        "image" => "/images/custom-collors/carnivalRed.jpg",
                        "base" => "/images/adventure/tiger1200GTExplorer/tiger1200GTExplorerRed.png",
                        "reversed" => "/images/adventure/tiger1200GTExplorer/tiger1200GTExplorerRedReversed.png"
                    ]
                ],
                "shortSpecInfo" => [
                    "info1" => "1,160cc T-plane Triple Motor",
                    "info2" => "30 литарски резервоар",
                    "info3" => "3 години гаранција"
                ],
                "features" => [
                    [
                        "title" => "Поврзување",
                        "desc" => "Triump Connectivity System"
                    ],
                    [
                        "title" => "Blind Spot Radar",
                        "desc" => "Стандард"
                    ],
                    [
                        "title" => "Темпомат",
                        "desc" => "Стандард"
                    ],
                    [
                        "title" => "Систем за контрола на притисок во пневматици",
                        "desc" => "Опционален Пакет"
                    ],
                    [
                        "title" => "ABS - Ситем за Пролизгување",
                        "desc" => "Стандард"
                    ],
                    [
                        "title" => "Адаптивни Светла",
                        "desc" => "Стандард Full LED / Дополнителни мали LED"
                    ],
                    [
                        "title" => "Греачи",
                        "desc" => "Рачки и Седишта"
                    ],
                    [
                        "title" => "Triumph Shift Assist",
                        "desc" => "Стандард"
                    ],
                    [
                        "title" => "Hill Hold",
                        "desc" => "Стандард"
                    ],
                    [
                        "title" => "Систем за алармирање при нагло запирање",
                        "desc" => "Стандард"
                    ],
                    [
                        "title" => "Заштита",
                        "desc" => "Заштитен за раце, Алуминиумска плоча за долен дел од мотор"
                    ],
                    [
                        "title" => "Централна Ногарка",
                        "desc" => "Доаѓа како Стандард"
                    ],
                    [
                        "title" => "Гаранција",
                        "desc" => "3 години"
                    ]
                ],
                "bikePageCarousell" => [
                    [
                        "title" => "30 литарски резервоар",
                        "desc" => "30 литарскиот резервоар на GT Explorer серијата ја продолжува вашата авантура во просек за 30% повеќе од GT & GT PRO моделите што ја прави оваа серија идеална за долги тури.",
                        "image" => "/images/adventure/tiger1200GTExplorer/tiger1200GTExplorerBikeCaro1.avif"
                    ],
                    [
                        "title" => "Мотор",
                        "desc" => "Уникатен „Т-Plane“ три-цилиндричен мотор со сите бенефити при ниски револуции на моторот како кај сите дво-цилиндраши и одлични високи перформанси карактеристични за три-цилиндарските мотор.",
                        "image" => "/images/adventure/tiger1200GTExplorer/tiger1200GTExplorerBikeCaro2.png"
                    ],
                    [
                        "title" => "Blind Spot Радар",
                        "desc" => "Од колаборацијата помеѓу Continental и Triumph, GT Explorer серијата бенифитираше со најновата радар технологија која ги наблудува слепите агли на возачот и го известува за ситуацијата околку возачот.",
                        "image" => "/images/adventure/tiger1200GTExplorer/tiger1200GTExplorerBikeCaro3.png"
                    ],
                    [
                        "title" => "Систем за мониторинт на притисок во пневматици",
                        "desc" => "Системот за контрола на притисокот во пневматицити доаѓа како стандард кај GT Explorer серијата и го известува возачот за помемталните притисоци во неговите пневматици а со тоа и ја подобрува сигурноста и нивото на самодоверба кај возачот.",
                        "image" => "/images/adventure/tiger1200GTExplorer/tiger1200GTExplorerBikeCaro4.avif"
                    ],
                    [
                        "title" => "Auto-Hold систем",
                        "desc" => "Лесен за активација и користење, овој систем ги активира сопирачките и не дозволува вашиот мотор да се истркала назад по острите угорници. Истиот лесно се активира преку менито на инструментната табла.",
                        "image" => "/images/adventure/tiger1200GTExplorer/tiger1200GTExplorerBikeCaro5.avif"
                    ],
                    [
                        "title" => "Греачи на седиште за возач и сопатник",
                        "desc" => "GT Explorer серијата е опремена со греачи на седиште за возач но и за сопатник и истот доаѓа како стандард и овозможува комфорт при секој тип на годишно време и временска непогода.",
                        "image" => "/images/adventure/tiger1200GTExplorer/tiger1200GTExplorerBikeCaro6.avif"
                    ],
                    [
                        "title" => "Рам за заштита на моторот",
                        "desc" => "Овој заштитен рам нуди одлична заштита со модерен дизајн и авантуристички стил и перфектно ја комплиментирата лесната тубуларна рамка на моторот.",
                        "image" => "/images/adventure/tiger1200GTExplorer/tiger1200GTExplorerBikeCaro7.avif"
                    ],
                    [
                        "title" => "Адаптивни Светла",
                        "desc" => "Иновативна адаптивна LED расвета е насекаде околу GT Explorer серијата. Од главни светла кои ги следат патиштата па се до LED дневни светла и LED трепкачи.",
                        "image" => "/images/adventure/tiger1200GTExplorer/tiger1200GTExplorerBikeCaro8.avif"
                    ],
                    [
                        "title" => "пет работни програми",
                        "desc" => "Секој од петте работни модови си има своја карактеристика и дополнително ги програмира сетинзите за апликација на гас, систем за пролизгување, ABS систем и суспензијата и го прилагодува вашиот мотор за било каква подлога. На располагање се: Road, Rain, Sport & Off-Road.",
                        "image" => "/images/adventure/tiger1200GTExplorer/tiger1200GTExplorerBikeCaro9.avif"
                    ],
                    [
                        "title" => "Ергономија",
                        "desc" => "Агилноста на GT Explorer серијата не се раскажува туку мора да се проба. Тенкиот струк и седиште нудат повисоко ниво на контрола врз моторот и кај возачот будач чувство на самодоверба, додека стапките за нозе се сместени точно на позициите кои нудат најголемо ниво на комфорт за вашите нозе.",
                        "image" => "/images/adventure/tiger1200GTExplorer/tiger1200GTExplorerBikeCaro10.avif"
                    ]
                ],
                "subFamilyPromo" => [
                    "title" => "Tiger 1200 GT Explorer",
                    "desc" => "GT Explorer има 30 литарски резервоар и ги поставува стандардите за транс-континентални авантури, притоа ги понудува најдобрите спецификации во оваа серија на мотори. Сега доаѓа и со новиот Active Preload Reduction мод кој овозможува прилагодлива суспензија."
                ],
                "bikePageImageGallery" => [
                    [
                        "alt" => "tiger1200GTExplorerBikeGalleryCaro1",
                        "src" => "/images/adventure/tiger1200GTExplorer/tiger1200GTExplorerBikeGalleryCaro1.avif"
                    ]
                ]
            ],
            [
                "id" => 9,
                "title" => "Tiger 1200 Rally Pro",
                "model" => "tiger-1200-rally-pro-2022",
                "category" => "adventure",
                "subFamilyCategory" => "tiger-1200-rally",
                "edition" => "adventure",
                "price" => 22790,
                "gallery" => [
                    "modelImage" => [
                        "src" => "/images/adventure/tiger1200GTPRO/tiger1200GTPROModelImage.png",
                        "alt" => "Tiger 1200 Rally Pro"
                    ],
                    "promoYoutubeVideo" => [
                        "src" => "https://www.youtube.com/embed/TVyryTRhZG0",
                        "alt" => "Tiger 1200 Rally PRO Youtube Video"
                    ]
                ],
                "customizationColors" => [
                    [
                        "colorName" => "Matt Sandstorm",
                        "price" => 100,
                        "image" => "/images/custom-collors/sandstorm.jpg",
                        "base" => "/images/adventure/tiger1200RallyPro/tiger1200RallyProSandstorm.png",
                        "reversed" => "/images/adventure/tiger1200RallyPro/tiger1200RallyProSandstormReversed.png"
                    ],
                    [
                        "colorName" => "Jett Black",
                        "price" => null,
                        "image" => "/images/custom-collors/sapphireBlack.jpg",
                        "base" => "/images/adventure/tiger1200RallyPro/tiger1200RallyProBlack.png",
                        "reversed" => "/images/adventure/tiger1200RallyPro/tiger1200RallyProBlackReversed.png",
                    ],
                    [
                        "colorName" => "Matt Khaki",
                        "price" => 100,
                        "image" => "/images/custom-collors/mattKhaki.jpg",
                        "base" => "/images/adventure/tiger1200RallyPro/tiger1200RallyProMattKhaki.png",
                        "reversed" => "/images/adventure/tiger1200RallyPro/tiger1200RallyProMattKhakiReversed.png"
                    ]
                ],
                "shortSpecInfo" => [
                    "info1" => "1,160cc T-plane Triple Motor",
                    "info2" => "20 литарски резервоар",
                    "info3" => "3 години гаранција"
                ],
                "features" => [
                    [
                        "title" => "Поврзување",
                        "desc" => "Triump Connectivity System"
                    ],
                    [
                        "title" => "Blind Spot Radar",
                        "desc" => "Стандард"
                    ],
                    [
                        "title" => "Темпомат",
                        "desc" => "Стандард"
                    ],
                    [
                        "title" => "Систем за контрола на притисок во пневматици",
                        "desc" => "Опционален Пакет"
                    ],
                    [
                        "title" => "ABS - Ситем за Пролизгување",
                        "desc" => "Стандард"
                    ],
                    [
                        "title" => "Адаптивни Светла",
                        "desc" => "Стандард Full LED / Дополнителни мали LED"
                    ],
                    [
                        "title" => "Греачи",
                        "desc" => "Опционални"
                    ],
                    [
                        "title" => "Triumph Shift Assist",
                        "desc" => "Стандард"
                    ],
                    [
                        "title" => "Hill Hold",
                        "desc" => "Стандард"
                    ],
                    [
                        "title" => "Систем за алармирање при нагло запирање",
                        "desc" => "Стандард"
                    ],
                    [
                        "title" => "Заштита",
                        "desc" => "Заштитен за раце и мотор, Алуминиумска плоча за долен дел од мотор"
                    ],
                    [
                        "title" => "Гаранција",
                        "desc" => "3 години"
                    ]
                ],
                "bikePageCarousell" => [
                    [
                        "title" => "Мотор",
                        "desc" => "Уникатен „Т-Plane“ три-цилиндричен мотор со сите бенефити при ниски револуции на моторот како кај сите дво-цилиндраши и одлични високи перформанси карактеристични за три-цилиндарските мотор.",
                        "image" => "/images/adventure/tiger1200RallyPro/tiger1200RallyProBikeCaro1.png"
                    ],
                    [
                        "title" => "Semi-Active Post Showa Вилушка",
                        "desc" => "За екстремно off-road искуство потребна ви е одлична суспензија. Showa semi-active задната вилушка (220mm) нуди подесување на тврдината и цврстината на суспензијата со цел да се овозможи најдобар сетап кога пристапувате кон тешките терени.",
                        "image" => "/images/adventure/tiger1200RallyPro/tiger1200RallyProBikeCaro2.avif"
                    ],
                    [
                        "title" => "Пневматици и Тркала",
                        "desc" => "21 инчното предно тркало нуди повисоко растојание помеѓу долниот дел на моторот и подлогата на која возите ос цел да овозможи пристап и до најтешко пристапните терени.",
                        "image" => "/images/adventure/tiger1200RallyPro/tiger1200RallyProBikeCaro3.png"
                    ],
                    [
                        "title" => "Tri-Link Задна Вилушка",
                        "desc" => "Уникатната „TRI-LINK“ задна вилушка комбинира цврстина и издржливост со лесно одржување и нуди одлично чувство и контрола при возење, сето тоа со мала тежина на самата компонента.",
                        "image" => "/images/adventure/tiger1200RallyPro/tiger1200RallyProBikeCaro4.avif"
                    ],
                    [
                        "title" => "Triumph Shift Assist",
                        "desc" => "Лесни, прецизни промени на степенот на пренос овозможени од паметното квачило кое овозможува промените да ги направите без употреба на рачката на квачилото.",
                        "image" => "/images/adventure/tiger1200RallyPro/tiger1200RallyProBikeCaro5.avif"
                    ],
                    [
                        "title" => "Целосен Keyless Систем",
                        "desc" => "Tiger 1200 серијата доаѓа со систем за палење и гасење на моторот, заклучување на воланот и капачето на резервоарот без употреба на клуч. Дополнително тука е и далечинскиот имобилизатор кој овозможува уште повисоко ниво на сигурност од кражби.",
                        "image" => "/images/adventure/tiger1200RallyPro/tiger1200RallyProBikeCaro6.avif"
                    ],
                    [
                        "title" => "Редизајниран Волан и позиција на рачки",
                        "desc" => "Комфортен на патиштата и доминантен надвор од нив. Ергономијата на оваа серија е дизајнирана за да се постигне идеална исправена off-road возачка позиција и комфорт при долги патувања.",
                        "image" => "/images/adventure/tiger1200RallyPro/tiger1200RallyProBikeCaro7.avif"
                    ],
                    [
                        "title" => "Луксузни Финиши",
                        "desc" => "Луксузните финиши и детали се тука не само да изгледаат добро туку и да продолжат животниот век на моторот.",
                        "image" => "/images/adventure/tiger1200RallyPro/tiger1200RallyProBikeCaro8.avif"
                    ],
                    [
                        "title" => "Off-Road мод за возење",
                        "desc" => "Како додаток на стандардните возачки модови кои доаѓаат кај сите модели од Tiger 1200 серијата, Rally Pro моделот со себе го носи и Off-Road PRO програмот на работа кој комплетно го исклучува ABS системот и системот за пролизгување.",
                        "image" => "/images/adventure/tiger1200RallyPro/tiger1200RallyProBikeCaro9.png"
                    ],
                    [
                        "title" => "7‘ TFT Дисплеј",
                        "desc" => "Овој „user-friendly“ 7 инчен TFT екран ги понудува сите функционалност на овој мотор и видливи ги презентира пред својот возач. Опремен со My Triumph системот за поврзување на моторот со вашиот телефон, GoPro и „Turn-By-Turn“ навигација.",
                        "image" => "/images/adventure/tiger1200RallyPro/tiger1200RallyProBikeCaro10.avif"
                    ]
                ],
                "subFamilyPromo" => [
                    "title" => "TIGER 1200 Rally PRO",
                    "desc" => "Без разлика на подлогата, Rally PRO серијата комбинира одлични способности, комфорт и перформанси со цел да понуди врвна авантура на патишта а пред се и надвор од нив. Отсега со новата активна суспензија за уште поголеми можности за персонализирање на моторот."
                ],
                "bikePageImageGallery" => [
                    [
                        "alt" => "tiger1200RallyProBikeGalleryCaro1",
                        "src" => "/images/adventure/tiger1200RallyPro/tiger1200RallyProBikeGalleryCaro1.avif"
                    ]
                ]
            ],
            [
                "id" => 10,
                "title" => "Tiger 1200 Rally Explorer",
                "model" => "tiger-1200-rally-explorer-2022",
                "category" => "adventure",
                "subFamilyCategory" => "tiger-1200-rally",
                "edition" => "adventure",
                "price" => 24790,
                "gallery" => [
                    "modelImage" => [
                        "src" => "/images/adventure/tiger1200RallyExplorerModelImage.avif",
                        "alt" => "Tiger 1200 Rally Explorer"
                    ],
                    "promoYoutubeVideo" => [
                        "src" => "https://www.youtube.com/embed/FPJLF70YlsA",
                        "alt" => "Tiger 1200 Rally Explorer Youtbe Video"
                    ]
                ],
                "customizationColors" => [
                    [
                        "colorName" => "Matt Sandstorm",
                        "price" => 100,
                        "image" => "/images/custom-collors/sandstorm.jpg",
                        "base" => "/images/adventure/tiger1200RallyExplorer/tiger1200RallyExplorerSandstorm.png",
                        "reversed" => "/images/adventure/tiger1200RallyExplorer/tiger1200RallyExplorerSandstormReversed.png"
                    ],
                    [
                        "colorName" => "Saphire Black",
                        "price" => null,
                        "image" => "/images/custom-collors/sapphireBlack.jpg",
                        "base" => "/images/adventure/tiger1200RallyExplorer/tiger1200RallyExplorerBlack.png",
                        "reversed" => "/images/adventure/tiger1200RallyExplorer/tiger1200RallyExplorerBlackReversed.png"
                    ],
                    [
                        "colorName" => "Matt Khaki",
                        "price" => 200,
                        "image" => "/images/custom-collors/mattKhaki.jpg",
                        "base" => "/images/adventure/tiger1200RallyExplorer/tiger1200RallyExplorerKhaki.png",
                        "reversed" => "/images/adventure/tiger1200RallyExplorer/tiger1200RallyExplorerKhakiReversed.png"
                    ]
                ],
                "shortSpecInfo" => [
                    "info1" => "1,160cc T-plane Triple Motor",
                    "info2" => "30 литарски резервоар",
                    "info3" => "3 години гаранција"
                ],
                "features" => [
                    [
                        "title" => "Модови за возење",
                        "desc" => "6"
                    ],
                    [
                        "title" => "Поврзување",
                        "desc" => "Triump Connectivity System"
                    ],
                    [
                        "title" => "Blind Spot Radar",
                        "desc" => "Стандард"
                    ],
                    [
                        "title" => "Темпомат",
                        "desc" => "Стандард"
                    ],
                    [
                        "title" => "Систем за контрола на притисок во пневматици",
                        "desc" => "Опционален Пакет"
                    ],
                    [
                        "title" => "ABS - Ситем за Пролизгување",
                        "desc" => "Стандард"
                    ],
                    [
                        "title" => "Адаптивни Светла",
                        "desc" => "Стандард Full LED / Дополнителни мали LED"
                    ],
                    [
                        "title" => "Греачи",
                        "desc" => "Рачки и Седишта"
                    ],
                    [
                        "title" => "Triumph Shift Assist",
                        "desc" => "Стандард"
                    ],
                    [
                        "title" => "Hill Hold",
                        "desc" => "Стандард"
                    ],
                    [
                        "title" => "Систем за алармирање при нагло запирање",
                        "desc" => "Стандард"
                    ],
                    [
                        "title" => "Заштита",
                        "desc" => "Заштитен за раце, мотор и резервоар, Алуминиумска плоча за долен дел од мотор"
                    ],
                    [
                        "title" => "Гаранција",
                        "desc" => "3 години"
                    ]
                ],
                "bikePageCarousell" => [
                    [
                        "title" => "Blind Spot Радар",
                        "desc" => "Од колаборацијата помеѓу Continental и Triumph, Rally Explorer серијата бенифитираше со најновата радар технологија која ги наблудува слепите агли на возачот и го известува за ситуацијата околку возачот.",
                        "image" => "/images/adventure/tiger1200RallyExplorer/tiger1200RallyExplorerBikeCaro1.png"
                    ],
                    [
                        "title" => "Мотор",
                        "desc" => "Уникатен „Т-Plane“ три-цилиндричен мотор со сите бенефити при ниски револуции на моторот како кај сите дво-цилиндраши и одлични високи перформанси карактеристични за три-цилиндарските мотор.",
                        "image" => "/images/adventure/tiger1200RallyExplorer/tiger1200RallyExplorerBikeCaro2.png"
                    ],
                    [
                        "title" => "30 литарски резервоар",
                        "desc" => "30 литарскиот резервоар на Rally Explorer серијата ја продолжува вашата авантура во просек за 50% повеќе од Rally PRO моделите што ја прави оваа серија идеална за долги тури.",
                        "image" => "/images/adventure/tiger1200RallyExplorer/tiger1200RallyExplorerBikeCaro3.avif"
                    ],
                    [
                        "title" => "Off-Road Пневматици и Тркала",
                        "desc" => "21 инчното предно тркало нуди повисоко растојание помеѓу долниот дел на моторот и подлогата на која возите ос цел да овозможи пристап и до најтешко пристапните терени.",
                        "image" => "/images/adventure/tiger1200RallyPro/tiger1200RallyProBikeCaro4.avif"
                    ],
                    [
                        "title" => "Греачи на седиште за возач и сопатник",
                        "desc" => "Rally Explorer серијата е опремена со греачи на седиште за возач но и за сопатник и истот доаѓа како стандард и овозможува комфорт при секој тип на годишно време и временска непогода.",
                        "image" => "/images/adventure/tiger1200RallyExplorer/tiger1200RallyExplorerBikeCaro5.avif"
                    ],
                    [
                        "title" => "Систем за мониторинт на притисок во пневматици",
                        "desc" => "Системот за контрола на притисокот во пневматицити доаѓа како стандард кај Rally Explorer серијата и го известува возачот за помемталните притисоци во неговите пневматици а со тоа и ја подобрува сигурноста и нивото на самодоверба кај возачот.",
                        "image" => "/images/adventure/tiger1200RallyExplorer/tiger1200RallyExplorerBikeCaro6.avif"
                    ],
                    [
                        "title" => "Auto-Hold систем",
                        "desc" => "Лесен за активација и користење, овој систем ги активира сопирачките и не дозволува вашиот мотор да се истркала назад по острите угорници. Истиот лесно се активира преку менито на инструментната табла.",
                        "image" => "/images/adventure/tiger1200RallyExplorer/tiger1200RallyExplorerBikeCaro7.avif"
                    ],
                    [
                        "title" => "Оптимизиран ABS и Систем за Пролизгување",
                        "desc" => "Контролирани од софистициран (IMU) Inertial Measurement Unit кој го следи нагибот и тракцијата на моторциклот, овие два системи се оптимизирани за целосна сигурно и уживање на разни подлоги.",
                        "image" => "/images/adventure/tiger1200RallyExplorer/tiger1200RallyExplorerBikeCaro8.avif"
                    ],
                    [
                        "title" => "Високо Перформантни Сопирачки",
                        "desc" => "Brembo Stylema клештите и Magura пумпата за течност за сопирање го комплетираат системот за сoпирање кој нуди висока сопирачка моќ и сигурност со оптимизираниот ABS систем.",
                        "image" => "/images/adventure/tiger1200RallyExplorer/tiger1200RallyExplorerBikeCaro9.avif"
                    ],
                    [
                        "title" => "Комфорт",
                        "desc" => "Rally Explorer серијата е подкрепена со технологија наменета за целосно уживање на возачот. Некои од елементите кои го подобруваат нивото на комоција се греачи на рачките, темпомат, USB порта под седиште и слично.",
                        "image" => "/images/adventure/tiger1200RallyExplorer/tiger1200RallyExplorerBikeCaro10.avif"
                    ]
                ],
                "subFamilyPromo" => [
                    "title" => "Tiger 1200 Rally Explorer",
                    "desc" => "Изработен за максимална издржливост и со цел да постави нови стандарди во класата. Отсега опремен со 30 литарски резервоар за уште подолго патување и со нова активна суспензија за уште поголем степен на персонализирање на моторот според вашите потреби."
                ],
                "bikePageImageGallery" => [
                    [
                        "alt" => "tiger1200RallyExplorerBikeGalleryCaro1",
                        "src" => "/images/adventure/tiger1200RallyExplorer/tiger1200RallyExplorerBikeGalleryCaro1.avif"
                    ]
                ]
            ],
            [
                "id" => 15,
                "title" => "Street Triple 765 R",
                "model" => "street-triple-765-r",
                "category" => "roadsters",
                "subFamilyCategory" => "street-triple-765",
                "edition" => "roadsters",
                "price" => 12590,
                "gallery" => [
                    "modelImage" => [
                        "src" => "/images/roadsters/streetTriple765RModel.png",
                        "alt" => "Street Triple 765 R"
                    ],
                    "promoYoutubeVideo" => [
                        "src" => "https://www.youtube.com/embed/Dzts2fD29Tc",
                        "alt" => "Street Triple 765 R"
                    ]
                ],
                "customizationColors" => [
                    [
                        "colorName" => "Silver Ice",
                        "price" => null,
                        "image" => "/images/custom-collors/silverice.jpg",
                        "base" => "/images/roadsters/streetTriple765/streetTriple765Color1.avif",
                        "reversed" => "/images/roadsters/streetTriple765/streetTriple765Color1Reversed.png",
                    ],
                    [
                        "colorName" => "Crystal White",
                        "price" => 200,
                        "image" => "/images/custom-collors/crystalWhite.jpg",
                        "base" => "/images/roadsters/streetTriple765/streetTriple765Color2.avif",
                        "reversed" => "/images/roadsters/streetTriple765/streetTriple765Color2Reversed.png"
                    ]
                ],
                "shortSpecInfo" => [
                    "info1" => "765cc мотор",
                    "info2" => "Максимална јачина од 120 PS",
                    "info3" => "10000 км сервисен интервал"
                ],
                "subFamilyPromo" => [
                    "title" => "НОВИОТ STREET TIRPLE 765 R",
                    "desc" => "Street Triple 765 R серијата е комбинација помеѓу врвни перформанси, одлични способности и високо технолошко ниво во соработка со легендарниот три-цилиндричен карактер."
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
                        "title" => "Перформанси",
                        "desc" => "Со надградбата на моторот, отсега Street Triple R серијата нуди максимални коњски сили од 120 PS како и 80Нм вртежен момент, со повеќе екслозивност, подобро забрзување и со остар три-цилиндарски звук.",
                        "image" => "/images/roadsters/streetTriple765R/streetTriple765RCaro1.avif"
                    ],
                    [
                        "title" => "Нов и Оптимизиран ABS Систем",
                        "desc" => "Поддржан од IMU системот со приспособливи поставки вградени во секој од четрите режими на возење на Street RЅ, новиот ABS систем го наблудува аголот на нагиб на моторот и обезбедува оптимални перформанси при сопирање",
                        "image" => "/images/roadsters/streetTriple765R/streetTriple765RCaro2.avif"
                    ],
                    [
                        "title" => "Нов Оптимизиран систем за пролизгување со опција за деактивирање",
                        "desc" => "Овој паметен систем го наблудува аголот на нагиб на моторот и пресметува колку сила е потребно за да се извлечат максимални перформанси во дадениот момент, а притоа и одлична контрола врз моторот.",
                        "image" => "/images/roadsters/streetTriple765R/streetTriple765RCaro3.avif"
                    ],
                    [
                        "title" => "Подобра Ергономија",
                        "desc" => "Новата Street Triple R серијата е управувана од 12mm поширок волан од претходната серијата. Истиот претрпе редизајн во поглед на геометријата и нуди повеќе агилност, побрзо маневрирање и подобра возачка позиција.",
                        "image" => "/images/roadsters/streetTriple765R/streetTriple765RCaro4.avif"
                    ],
                    [
                        "title" => "Сопирачкa Моќ",
                        "desc" => "Двојните monobloc клешти на Brembo M4.32 обезбедуваат моќно, контролирано запирање во сите услови. ABS системот во секој момент го следи аголот на нагиб и додава сигурност и самодоверба на возачот.",
                        "image" => "/images/roadsters/streetTriple765R/streetTriple765RCaro5.avif"
                    ],
                    [
                        "title" => "Суспензија",
                        "desc" => "Висококвалитетната, целосно приспособлива Big Piston вилушка на Showa со посебни функции и задниот амортизер обезбедуваат максимално ниво на комфорт, контрола и сигурност при вашите авантури.",
                        "image" => "/images/roadsters/streetTriple765R/streetTriple765RCaro6.avif"
                    ],
                    [
                        "title" => "Стабилност на високи брзини",
                        "desc" => "Дизајнирана за идеална комбинација помеѓу комфорт и перформанси, вилушката на Street Triple R серијата нуди агилност и контрола при високи брзина како и лесно маневрирање во градските средини.",
                        "image" => "/images/roadsters/streetTriple765R/streetTriple765RCaro7.avif"
                    ],
                    [
                        "title" => "Висина на Седиштето",
                        "desc" => "Со висина на седиштето од 836 милиметри (прилагодливо во секој Triumph сервис) и опционалното седиште кој уште повеќе ја намалува висината (за 28mm помалку), Street Triple RS е наменет за возачи од секакви димензии.",
                        "image" => "/images/roadsters/streetTriple765R/streetTriple765RCaro8.avif"
                    ],
                    [
                        "title" => "TFT Екран",
                        "desc" => "Street Triple R на себе носи мулти функционален TFT дисплеј кој е екстремно лесен за користење. Интуитивни и логично поставени, четирите програми за возење се лесно навигирани преку ергономски оптимизираниот прекинувач.",
                        "image" => "/images/roadsters/streetTriple765R/streetTriple765RCaro9.avif"
                    ],
                    [
                        "title" => "Агресивен Фокусиран Изглед",
                        "desc" => "Впечатливата нова естетика на Street Triple R ја прикажува непогрешливата дизајнерска ДНК на Street Triple. Со целосно нов резервоар за гориво од 15 литри, нов издувен систем, обвивки на ладилникот, облоги на предните фарови и задни облоги оваа Street Triple R серија го има најагресивениот став и силуета досега.",
                        "image" => "/images/roadsters/streetTriple765R/streetTriple765RCaro10.avif"
                    ],
                    [
                        "title" => "Високи Стандарди",
                        "desc" => "Високиот стандард кој со собе го носи секој Street Triple R мотор е комплетиран со Shift Assist Quickshifter квачилото кој овозможува  менување на степенот на пренос без употреба на рачката за квачило, целосно LED осветлување, контрола на подигнувањето на предните тркала и гуми Continental ContiRoad.",
                        "image" => "/images/roadsters/streetTriple765R/streetTriple765RCaro11.avif"
                    ]
                ],
                "bikePageImageGallery" => [
                    [
                        "alt" => "streetTriple765RBikeGalleryCaro1",
                        "src" => "/images/roadsters/streetTriple765R/streetTriple765RBikeGalleryCaro1.avif"
                    ],
                    [
                        "alt" => "streetTriple765RBikeGalleryCaro2",
                        "src" => "/images/roadsters/streetTriple765R/streetTriple765RBikeGalleryCaro2.avif"
                    ],
                    [
                        "alt" => "streetTriple765RBikeGalleryCaro3",
                        "src" => "/images/roadsters/streetTriple765R/streetTriple765RBikeGalleryCaro3.avif"
                    ],
                    [
                        "alt" => "streetTriple765RBikeGalleryCaro4",
                        "src" => "/images/roadsters/streetTriple765R/streetTriple765RBikeGalleryCaro4.avif"
                    ],
                    [
                        "alt" => "streetTriple765RBikeGalleryCaro5",
                        "src" => "/images/roadsters/streetTriple765R/streetTriple765RBikeGalleryCaro5.avif"
                    ],
                    [
                        "alt" => "streetTriple765RBikeGalleryCaro6",
                        "src" => "/images/roadsters/streetTriple765R/streetTriple765RBikeGalleryCaro6.avif"
                    ],
                    [
                        "alt" => "streetTriple765RBikeGalleryCaro7",
                        "src" => "/images/roadsters/streetTriple765R/streetTriple765RBikeGalleryCaro7.avif"
                    ],
                    [
                        "alt" => "streetTriple765RBikeGalleryCaro8",
                        "src" => "/images/roadsters/streetTriple765R/streetTriple765RBikeGalleryCaro8.avif"
                    ],
                    [
                        "alt" => "streetTriple765RBikeGalleryCaro9",
                        "src" => "/images/roadsters/streetTriple765R/streetTriple765RBikeGalleryCaro9.avif"
                    ]
                ]
            ],
            [
                "id" => 16,
                "title" => "Street Triple 765 RS",
                "model" => "street-triple-765-rs",
                "category" => "roadsters",
                "subFamilyCategory" => "street-triple-765",
                "edition" => "roadsters",
                "price" => 14390,
                "gallery" => [
                    "modelImage" => [
                        "src" => "/images/roadsters/streetTriple765RS/speedTripleSilverIce.png",
                        "alt" => "Street Triple 765 RS"
                    ],
                    "promoYoutubeVideo" => [
                        "src" => "https://www.youtube.com/embed/kP7FA3k6Hv8",
                        "alt" => "Stret Triple 765 RS"
                    ]
                ],
                "customizationColors" => [
                    [
                        "colorName" => "Silver Ice",
                        "price" => null,
                        "image" => "/images/custom-collors/silverice.jpg",
                        "base" => "/images/roadsters/streetTriple765RS/speedTripleSilverIce.png",
                        "reversed" => "/images/roadsters/streetTriple765RS/speedTripleSilverIceReversed.png"
                    ],
                    [
                        "colorName" => "Carnival Red",
                        "price" => 200,
                        "image" => "/images/custom-collors/carnivalRed.jpg",
                        "base" => "/images/roadsters/streetTriple765RS/speedTripleRSCarnivalRed.png",
                        "reversed" => "/images/roadsters/streetTriple765RS/speedTripleRSCarnivalRedReversed.png"
                    ],
                    [
                        "colorName" => "Cosmic Yellow",
                        "price" => 200,
                        "image" => "/images/custom-collors/cosmicYellow.jpg",
                        "base" => "/images/roadsters/streetTriple765RS/speedTripleYellow.png",
                        "reversed" => "/images/roadsters/streetTriple765RS/speedTripleYellowReversed.png"
                    ]
                ],
                "shortSpecInfo" => [
                    "info1" => "765cc мотор",
                    "info2" => "Максимална јачина од 130 PS",
                    "info3" => "10000 км сервисен интервал"
                ],
                "subFamilyPromo" => [
                    "title" => "НОВИОТ STREET TIRPLE 765 RS",
                    "desc" => "Лидерски перформанси во “naked-sportsbike“ класата, највисока спецификација на сопирачки и технолошки напредок во комплет со исклучителна агилност. Street Triple 765 RS е репер за сите други во класата."
                ],
                "features" => [
                    [
                        "title" => "Мотор",
                        "desc" => "765 Три-Цилиндарски Мотор"
                    ],
                    [
                        "title" => "Сила и обртен Момент",
                        "desc" => "130PS & 80Nm"
                    ],
                    [
                        "title" => "Тежина",
                        "desc" => "188 kg - полн резервоар и други течности"
                    ],
                    [
                        "title" => "Суспензија",
                        "desc" => "Showa целосно прилагодлива"
                    ],
                    [
                        "title" => "Сопирачки",
                        "desc" => "Brembo Stylema 310mm двојни дискови"
                    ],
                    [
                        "title" => "Пневматици",
                        "desc" => "Pirelli Diablo Supercorsa V3 Пневматици"
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
                        "desc" => "5 програми (Road, Rain, Sport, Track, Rider)"
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
                        "title" => "Најдобри Перформанси во Класата",
                        "desc" => "Благодарејки на технологијата превземена директно од Moto2 тркачката програма, новиот 765 RS испорачува 130 коњски сили и 80Nm што го прави лидер во класата.",
                        "image" => "/images/roadsters/streetTriple765RS/streetTriple765RSBikeCaro1.avif"
                    ],
                    [
                        "title" => "Нов Оптимизиран ABS Систем",
                        "desc" => "Поддржан од IMU системот со приспособливи поставки вградени во секој од петте режими на возење на Street RЅ, новиот ABS систем го наблудува аголот на нагиб на моторот и обезбедува оптимални перформанси при сопирање.",
                        "image" => "/images/roadsters/streetTriple765RS/streetTriple765RSBikeCaro2.avif"
                    ],
                    [
                        "title" => "Нов Оптимизиран систем за пролизгување со опција за деактивирање",
                        "desc" => "Овој паметен систем го наблудува аголот на нагиб на моторот и пресметува колку сила е потребно за да се извлечат максимални перформанси во дадениот момент, а притоа и одлична контрола врз моторот.",
                        "image" => "/images/roadsters/streetTriple765RS/streetTriple765RSBikeCaro3.avif"
                    ],
                    [
                        "title" => "Сопирачки - Brembo Stylema",
                        "desc" => "Новите Brembo Stylema сопирачки со четири клипни клешти и 310m дискови испорачуваа одлична сопирачка мож а во комбинација со ABS системот и одлична контрола на моторот.",
                        "image" => "/images/roadsters/streetTriple765RS/streetTriple765RSBikeCaro5.avif"
                    ],
                    [
                        "title" => "Контрола",
                        "desc" => "Новата Street Triple RS серијата е управувана од 12mm поширок волан од претходната серијата. Истиот претрпе редизајн во поглед на геометријата и нуди повеќе агилност, побрзо маневрирање и подобра возачка позиција.",
                        "image" => "/images/roadsters/streetTriple765RS/streetTriple765RSBikeCaro4.avif"
                    ],
                    [
                        "title" => "Суспензија",
                        "desc" => "Висококвалитетната, целосно приспособлива предна Big Piston вилушка на Showa со посебни функции и задниот Ohlins амортизер обезбедуваат одличен комфорт и контрола за беспрекорно управување на патот.",
                        "image" => "/images/roadsters/streetTriple765RS/streetTriple765RSBikeCaro6.avif"
                    ],
                    [
                        "title" => "Пневматици",
                        "desc" => "Високо перформантните Pirelli Supercorsa SP V3 пневматици кои доаѓаата како стандард нудат одлично ниво на тракција и одлична стабилност при високи брзини. Овие пневматици доаѓаат од тркачкиот свет но се оптимизирани и целосно легални за користење на пат.",
                        "image" => "/images/roadsters/streetTriple765RS/streetTriple765RSBikeCaro7.avif"
                    ],
                    [
                        "title" => "Full Color - TFT Екран",
                        "desc" => "Со фабрички активиран My Triumph систем за поврзување овој мулти функционален дисплеј е спремен за вашите Bluetooth уреди веднаш.",
                        "image" => "/images/roadsters/streetTriple765RS/streetTriple765RSBikeCaro9.avif"
                    ],
                    [
                        "title" => "Комоција и Ергономија",
                        "desc" => "Со висина на седиштето од 836 милиметри (прилагодливо во секој Triumph сервис) и опционалното седиште кој уште повеќе ја намалува висината (за 28mm помалку), Street Triple RS е наменет за возачи од секакви димензии.",
                        "image" => "/images/roadsters/streetTriple765RS/streetTriple765RSBikeCaro9.avif"
                    ],
                    [
                        "title" => "Спремен за Патека",
                        "desc" => "Благодарејки на Triumph Shift Assist системот кој овозможува промени на степенот на преносот без употреба на квачило како и на Track програмата за работа, Stret Triple RS е спремен за возбудлива акција на патеките.",
                        "image" => "/images/roadsters/streetTriple765RS/streetTriple765RSBikeCaro10.avif"
                    ],
                    [
                        "title" => "Високи Стандарди",
                        "desc" => "Street Triple RS насебе ја носи најновата технологија која му асистира на возачот во секој момент. Целосната LED расвета со дневни LED светла како и Shift-Assist квачилото во пар со ABS системот и имобилизатор само го потврдуваат фактот дека Street Triple RS доаѓа со најновата опрема за заштита и сигурно но и за гарантирана забава.",
                        "image" => "/images/roadsters/streetTriple765RS/streetTriple765RSBikeCaro11.avif"
                    ]
                ],
                "bikePageImageGallery" => [
                    [
                        "alt" => "streetTriple765RSBikeGalleryCaro1",
                        "src" => "/images/roadsters/streetTriple765RS/streetTriple765RSBikeGalleryCaro1.avif"
                    ],
                    [
                        "alt" => "streetTriple765RSBikeGalleryCaro2",
                        "src" => "/images/roadsters/streetTriple765RS/streetTriple765RSBikeGalleryCaro2.avif",
                    ],
                    [
                        "alt" => "streetTriple765RSBikeGalleryCaro3",
                        "src" => "/images/roadsters/streetTriple765RS/streetTriple765RSBikeGalleryCaro3.avif",
                    ],
                    [
                        "alt" => "streetTriple765RSBikeGalleryCaro4",
                        "src" => "/images/roadsters/streetTriple765RS/streetTriple765RSBikeGalleryCaro4.avif",
                    ],
                    [
                        "alt" => "streetTriple765RSBikeGalleryCaro5",
                        "src" => "/images/roadsters/streetTriple765RS/streetTriple765RSBikeGalleryCaro5.avif",
                    ],
                    [
                        "alt" => "streetTriple765RSBikeGalleryCaro6",
                        "src" => "/images/roadsters/streetTriple765RS/streetTriple765RSBikeGalleryCaro6.avif",
                    ],
                    [
                        "alt" => "streetTriple765RSBikeGalleryCaro7",
                        "src" => "/images/roadsters/streetTriple765RS/streetTriple765RSBikeGalleryCaro7.avif",
                    ],
                    [
                        "alt" => "streetTriple765RSBikeGalleryCaro8",
                        "src" => "/images/roadsters/streetTriple765RS/streetTriple765RSBikeGalleryCaro8.avif",
                    ],
                    [
                        "alt" => "streetTriple765RSBikeGalleryCaro9",
                        "src" => "/images/roadsters/streetTriple765RS/streetTriple765RSBikeGalleryCaro9.avif",
                    ],
                    [
                        "alt" => "streetTriple765RSBikeGalleryCaro10",
                        "src" => "/images/roadsters/streetTriple765RS/streetTriple765RSBikeGalleryCaro10.avif"
                    ]
                ]
            ],
            [
                "id" => 17,
                "title" => "Trident 660",
                "model" => "trident-660",
                "category" => "roadsters",
                "subFamilyCategory" => "trident-660",
                "edition" => "roadsters",
                "price" => 9590,
                "customizationColors" => [
                    [
                        "colorName" => "Sapphire Black",
                        "price" => null,
                        "image" => "/images/custom-collors/sapphireBlack.jpg",
                        "base" => "/images/roadsters/trident660/trident660SapphireBlack.png",
                        "reversed" => "/images/roadsters/trident660/trident660SapphireBlackReversed.png"
                    ],
                    [
                        "colorName" => "Jett Black / Triumph Racing Yellow",
                        "price" => 200,
                        "image" => "/images/custom-collors/jetBlackTriumphRacingYellow.jpg",
                        "base" => "/images/roadsters/trident660/trident660TriumphYellow.png",
                        "reversed" => "/images/roadsters/trident660/trident660TriumphYellowReversed.png",
                    ],
                    [
                        "colorName" => "Matt Jet Black / Matt Silver Ice",
                        "price" => 200,
                        "image" => "/images/custom-collors/mattJetBlackICe.jp",
                        "base" => "/images/roadsters/trident660/trident660MattBlack.png",
                        "reversed" => "/images/roadsters/trident660/trident660MattBlackReversed.png",
                    ],
                    [
                        "colorName" => "Silver Ice Diablo Red",
                        "price" => 200,
                        "image" => "/images/custom-collors/diabloRedAluminium.jpg",
                        "base" => "/images/roadsters/trident660/tridentIceRed.png",
                        "reversed" => "/images/roadsters/trident660/tridentIceRedReversed.png"
                    ]
                ],
                "gallery" => [
                    "modelImage" => [
                        "src" => "/images/roadsters/trident660/tridentMattBajaOrange.png",
                        "alt" => "Trident 660"
                    ],
                    "promoYoutubeVideo" => [
                        "src" => "https://www.youtube.com/embed/lLNvbwE0rfo",
                        "alt" => "Trident 660"
                    ]
                ],
                "shortSpecInfo" => [
                    "info1" => "660cc мотор",
                    "info2" => "2 мода на работа (Road & Rain)",
                    "info3" => "16000км / 12 месеци сервисен интервал"
                ],
                "subFamilyPromo" => [
                    "title" => "Trident 660",
                    "desc" => "Спортски настроен, воздудлив и лесно прилагодлив мотор со одличен стил и уште подобра цена - сето ова го поседува новата Trident 660 серија."
                ],
                "features" => [
                    [
                        "title" => "Мотор",
                        "desc" => "660 Три-Цилиндарски Мотор - (EURO 5)"
                    ],
                    [
                        "title" => "Возачка Категорија",
                        "desc" => "А2 сет - компитабилен со А2 возачка категорија"
                    ],
                    [
                        "title" => "Суспензија",
                        "desc" => "Showa"
                    ],
                    [
                        "title" => "Сопирачки",
                        "desc" => "Nissin - ABS"
                    ],
                    [
                        "title" => "Електроника",
                        "desc" => "АВЅ, Систем за Пролизгување"
                    ],
                    [
                        "title" => "Мод на работа",
                        "desc" => "2 програми (Road, Rain)"
                    ],
                    [
                        "title" => "Квачило",
                        "desc" => "Triumph Shift Assist - ОПЦИОНАЛНО"
                    ],
                    [
                        "title" => "Инструментна Плоча",
                        "desc" => "Мултифункционален TFT екран"
                    ],
                    [
                        "title" => "Bluetooth Конекција",
                        "desc" => "Опционален My Triumph пакет"
                    ],
                    [
                        "title" => "Светло",
                        "desc" => "LED"
                    ],
                    [
                        "title" => "Сервисен Интервал",
                        "desc" => "16,000 km / 12 месеци"
                    ]
                ],
                "bikePageCarousell" => [
                    [
                        "title" => "Три-Цилиндричен 660cc Мотор",
                        "desc" => "Потполн карактер и перформанси како и секој три-цилиндречен мотор со богат обртен момент при ниски револуции на моторот.",
                        "image" => "/images/roadsters/trident660/trident660BikeCaro1.avif"
                    ],
                    [
                        "title" => "Врвна Контрола",
                        "desc" => "Одличната контрола и агилност на Trident 660 серијата доаѓа од одличната рамка како и Showa суспензијата и Nissin сопирачките.",
                        "image" => "/images/roadsters/trident660/trident660BikeCaro2.avif"
                    ],
                    [
                        "title" => "TRT Екран",
                        "desc" => "Новата генерација TFT екрани ги испорачуваат сите витални информации јасно на своите дисплеи. My Triumph системот (ОПЦИОНАЛЕН) со себе носи можности за конектирање со моторот како и навигација, GoPro поврзаност и манипулирање со вашиот телефон.",
                        "image" => "/images/roadsters/trident660/trident660BikeCaro3.avif"
                    ],
                    [
                        "title" => "Технологија",
                        "desc" => "За максимална сигурност и уживање, Trident 660 серијата е опремена со најновите технологии како ABS, Систем за пролизгување и два возечки програми.",
                        "image" => "/images/roadsters/trident660/trident660BikeCaro4.avif"
                    ],
                    [
                        "title" => "LED - насекаде",
                        "desc" => "За уште повеќе сигурност Trident 660 серијата насекаде носи LED светла и само елиминирачки LED трепкачи.",
                        "image" => "/images/roadsters/trident660/trident660BikeCaro5.avif"
                    ],
                    [
                        "title" => "Стил",
                        "desc" => "Препознатливиот Trident стил се истакнува во перфектните линии и силуетата на Trident надградена со извајан резервоар и минималистичен дизајн на задниот крај.",
                        "image" => "/images/roadsters/trident660/trident660BikeCaro6.avif"
                    ],
                    [
                        "title" => "Ергономија и Комфорт",
                        "desc" => "Со тесен профил на ширина, одлично поставени стапки за нозе и висина на седиштетот од само 805 милиметри Trident нуди одличен комодитет и возачка позиција. На сево ова додајте го и лесното квачило и спремни се за авантура од секакво времетраење без никаков замор.",
                        "image" => "/images/roadsters/trident660/trident660BikeCaro7.avif"
                    ],
                    [
                        "title" => "Компитабилен за А2 возачка лиценца",
                        "desc" => "А2 сетот за деградирање на моторот во А2 категорија е тука за да ги охрабри новите возачи да го изберат Trident 660. Истиот сет ги деградира перформансите на моторот и може да биде вграден и одстранет за неколку минути во најблискиот Triumph центар.",
                        "image" => "/images/roadsters/trident660/trident660BikeCaro9.avif"
                    ],
                    [
                        "title" => "Аксесоари",
                        "desc" => "Персонализирајте го вашиот Trident 660 со целосната палета на оригинални Triumph аксесоари како багаж и одредени парчиња кои го подобруваат стилот и сигурноста на овој мотор.",
                        "image" => "/images/roadsters/trident660/trident660BikeCaro9.avif"
                    ]
                ],
                "bikePagePromo" => [
                    [
                        "title" => "16,000км - сервисен интервал",
                        "desc" => "Со лидерски сервисен интервал од 16,000 километри и со одлична цена, Trident 660 е одличен избор за секој возач.",
                        "image" => "/images/roadsters/trident660/trident660BikePromo1.avif"
                    ]
                ],
                "bikePageImageGallery" => [
                    [
                        "alt" => "trident660BikeGalleryCaro1",
                        "src" => "/images/roadsters/trident660/trident660BikeGalleryCaro1.avif"
                    ]
                ]
            ],
            [
                "id" => 18,
                "title" => "Speed Triple 1200 RS",
                "model" => "speed-triple-1200-rs",
                "category" => "roadsters",
                "subFamilyCategory" => "speed-triple-1200-rs",
                "edition" => "roadsters",
                "price" => 19590,
                "gallery" => [
                    "modelImage" => [
                        "src" => "/images/roadsters/speedTriple1200RS/speedTriple1200rsCarnivalBlack.png",
                        "alt" => "Speed Triple 1200 RS"
                    ],
                    "promoYoutubeVideo" => [
                        "src" => "https://www.youtube.com/embed/VczRFwgIYgo",
                        "alt" => "Speed Triple 1200 RS"
                    ]
                ],
                "customizationColors" => [
                    [
                        "colorName" => "Saphire Black",
                        "price" => null,
                        "image" => "/images/custom-collors/sapphireBlack.jpg",
                        "base" => "/images/roadsters/speedTriple1200RS/speedTriple1200rsCarnivalBlack.png",
                        "reversed" => "/images/roadsters/speedTriple1200RS/speedTriple1200rsCarnivalBlackReversed.png",
                    ],
                    [
                        "colorName" => "Matt Silver Ice",
                        "price" => null,
                        "image" => "/images/custom-collors/mattSilverIce.jpg",
                        "base" => "/images/roadsters/speedTriple1200RS/speedTriple1200rsSilverIce.png",
                        "reversed" => "/images/roadsters/speedTriple1200RS/speedTriple1200rsSilverIceReversed.png",
                    ],
                    [
                        "colorName" => "Carnival Red",
                        "price" => 300,
                        "image" => "/images/custom-collors/carnivalRed.jpg",
                        "base" => "/images/roadsters/speedTriple1200RS/speedTriple1200rsCarnivalRed.png",
                        "reversed" => "/images/roadsters/speedTriple1200RS/speedTriple1200rsCarnivalRedReversed.png"
                    ]
                ],
                "shortSpecInfo" => [
                    "info1" => "1160cc мотор",
                    "info2" => "198kg тежина и спремен за на патека",
                    "info3" => "Врвна Технологија"
                ],
                "subFamilyPromo" => [
                    "title" => "Speed Triple 1200 RS",
                    "desc" => "Најмоќниот, нај-динамичниот и технолошки нај-напредниот Speed Triple моторцикл досега."
                ],
                "features" => [
                    [
                        "title" => "Мотор",
                        "desc" => "1160cc Три-Цилиндарски Мотор"
                    ],
                    [
                        "title" => "Сила и обртен Момент",
                        "desc" => "180PS & 125Nm"
                    ],
                    [
                        "title" => "Тежина",
                        "desc" => "198 kg - полн резервоар и други течности"
                    ],
                    [
                        "title" => "Суспензија",
                        "desc" => "Ohlins"
                    ],
                    [
                        "title" => "Сопирачки",
                        "desc" => "Brembo Stylema 320mm двојни дискови напред"
                    ],
                    [
                        "title" => "Пневматици",
                        "desc" => "Pirelli Diablo Supercorsa V3 Пневматици"
                    ],
                    [
                        "title" => "Електроника",
                        "desc" => "АВЅ, Систем за Пролизгување и Систем за Контрола на Предна Осовина (Подигање), Темпомат"
                    ],
                    [
                        "title" => "Инструментна Плоча",
                        "desc" => "Мултифункционален TFT екран 5‘"
                    ],
                    [
                        "title" => "Мод на работа",
                        "desc" => "5 програми (Road, Rain, Sport, Track, Rider)"
                    ],
                    [
                        "title" => "Квачило",
                        "desc" => "Triumph Shift Assist"
                    ],
                    [
                        "title" => "Светло",
                        "desc" => "LED"
                    ],
                    [
                        "title" => "Keyless",
                        "desc" => "Стандардно"
                    ],
                    [
                        "title" => "Сервисен Интервал",
                        "desc" => "16,000 km / 12 месеци"
                    ]
                ],
                "bikePageCarousell" => [
                    [
                        "title" => "Потполно нов Три-Цилиндричен мотор",
                        "desc" => "Новиот 1160cc три-цилиндричен мотор изработен по Moto2 стандарди е значително полесен покомпактен, пореспонзивен и нуди одлично возачко искуство.",
                        "image" => "/images/roadsters/speedTriple1200RS/speedTriple1200RSBikeCaro1.avif"
                    ],
                    [
                        "title" => "три-Цилиндрична Моќност",
                        "desc" => "Со максимална јачина од 180 коњски сили, оваа генерација на три-цилиндрични мотори испорачува 30 коњски сили повеќе од својот претходник. Како дополнување на ова е и одличниот обртен момент кој беше измерен со максимални 125Nm.",
                        "image" => "/images/roadsters/speedTriple1200RS/speedTriple1200RSBikeCaro2.avif"
                    ],
                    [
                        "title" => "Нов 5‘ TFT екран",
                        "desc" => "Новиот 5 инчен TFT екран многу лесно ги прикажува сите потребни информации и параметри додека возите, како и сите други дополнителни информации како повици, мултимедиа и штоперицата.",
                        "image" => "/images/roadsters/speedTriple1200RS/speedTriple1200RSBikeCaro3.avif"
                    ],
                    [
                        "title" => "Флексибилен и Прецизен",
                        "desc" => "Со ултра лесната рамка и одлична ергономија и возачка позиција, оваа Speed Triple серија е најагилна, најпрецизна и најдинамична Speed Triple серија досега.",
                        "image" => "/images/roadsters/speedTriple1200RS/speedTriple1200RSBikeCaro5.avif"
                    ],
                    [
                        "title" => "Најлесниот Speed Triple досега",
                        "desc" => "Со тежина од 198 килограми, максималната тежина на серијата беше намалена за 10 килограми благодарекни на ултра лесната шасија и значително лесниот мотор, се со цел да се обезбеди агилност и динамика и одлично возачко искуство.",
                        "image" => "/images/roadsters/speedTriple1200RS/speedTriple1200RSBikeCaro4.avif"
                    ],
                    [
                        "title" => "Високо Квалитетни Периферни Елементи",
                        "desc" => "Целосно прилагодливата Ohlins суспензија и Brembo Stylema сопирачките во пар со Metzeler Racetec RR пневматиците се одлична комбинација за добивање одлични перформансни резултати.",
                        "image" => "/images/roadsters/speedTriple1200RS/speedTriple1200RSBikeCaro6.avif"
                    ],
                    [
                        "title" => "Возачка Позиција",
                        "desc" => "Широкиот волан, и сосема новото седиште обезбедуваат динамична и природна возачка позиција, а благодарејки и на репозиционирањето на стапките за нозе се овозможи и поголема дистанца помеѓу површината на која возите и вашите нозе додека влегувате во свиоците.",
                        "image" => "/images/roadsters/speedTriple1200RS/speedTriple1200RSBikeCaro7.avif"
                    ],
                    [
                        "title" => "Технологија Фокусирана на Возачот",
                        "desc" => "Најнова генерација на Optimised Corner Traction системот и ABS системот овозможуваат одлична контрола при свиоци и при апликација на гас, додека системот за контрола на предниот крај ви помага и автоматски го спушта предниот крај за вас. Квачилото овозможува промена на степенот на пренос без употреба на рачката за квачилото додека 5-те возачки програми се тука за секаква забава или сигурност кога и да посакате.",
                        "image" => "/images/roadsters/speedTriple1200RS/speedTriple1200RSBikeCaro8.avif"
                    ],
                    [
                        "title" => "My Triumph Connectivity System",
                        "desc" => "Вграден како стандардна опрема, My Triumph Connectivity системот ќе ви овозможи да се конектирате со вашиот мотор преку вашиот телефон. Исто така на располагање ви ја нуди и „Turn-By-Turn“ навигацијата, GoPro контрола и примање повици како си слушање музика преку вашиот Headset.",
                        "image" => "/images/roadsters/speedTriple1200RS/speedTriple1200RSBikeCaro9.avif"
                    ],
                    [
                        "title" => "LED - насекаде",
                        "desc" => "Импресивниот нов изглед на двете предни светла како и LED задното светло не само што ќе донесе одличен стил на вашиот мотор тука ќе ја зголеми безбедноста и видливоста додека возите.",
                        "image" => "/images/roadsters/speedTriple1200RS/speedTriple1200RSBikeCaro10.avif"
                    ]
                ],
                "bikePagePromo" => [
                    [
                        "title" => "Фокусиран на патиштата - но спремен за тркање",
                        "desc" => "Премиум и тркачки спремните елементи како Brembo Stylema®, Pirelli Diablo Supercorsa V3 и Öhlins суспензијата ја прават Speed triple 1200 RS серијата возбудлива на патиштата и спремна за тркање. Испробајте го Track програмот кога сте на патеката и почувствувајте го полниот потенцијал на Speed Triple 1200 RS.",
                        "image" => "/images/roadsters/speedTriple1200RS/speedTriple1200RSBikePromo1.avif"
                    ]
                ]
            ],
            [
                "id" => 19,
                "title" => "Speed Triple 1200 RR",
                "model" => "speed-triple-1200-rr",
                "category" => "roadsters",
                "subFamilyCategory" => "speed-triple-1200-rr",
                "edition" => "roadsters",
                "price" => 21590,
                "gallery" => [
                    "modelImage" => [
                        "src" => "/images/roadsters/speedTriple1200Rr2Model.png",
                        "alt" => "Speed Triple 1200 RR"
                    ],
                    "promoYoutubeVideo" => [
                        "src" => "https://www.youtube.com/embed/Wkl9OAfK5XQ",
                        "alt" => "Speed Triple 1200 RR"
                    ]
                ],
                "customizationColors" => [
                    [
                        "colorName" => "Crystal White / Storm Gray",
                        "price" => null,
                        "image" => "/images/custom-collors/crystalWhiteStormGray.jpg",
                        "base" => "/images/roadsters/speedTriple1200RR/speedTriple1200RRGray.png",
                        "reversed" => "/images/roadsters/speedTriple1200RR/speedTriple1200RRGrayReversed.png"
                    ],
                    [
                        "colorName" => "Red Hopper / Storm Gray",
                        "price" => 300,
                        "image" => "/images/custom-collors/carnivalRedStormGrey.jpg",
                        "base" => "/images/roadsters/speedTriple1200RR/speedTriple1200RRRed.png",
                        "reversed" => "/images/roadsters/speedTriple1200RR/speedTriple1200RRRedReversed.png"
                    ]
                ],
                "shortSpecInfo" => [
                    "info1" => "Нов 1160cc мотор со 180 коњски сили ",
                    "info2" => "Нов кокпит со едно предно светло",
                    "info3" => "Најнова технологија фокусирана на возачот"
                ],
                "subFamilyPromo" => [
                    "title" => "Speed Triple 1200 RR",
                    "desc" => "Колку повозбудлив за гледање толку повозбудлив за возење - отсега со највисоко ниво на спецификација."
                ],
                "features" => [
                    [
                        "title" => "Мотор",
                        "desc" => "1160cc Три-Цилиндарски Мотор"
                    ],
                    [
                        "title" => "Сила и обртен Момент",
                        "desc" => "180PS & 125Nm"
                    ],
                    [
                        "title" => "Тежина",
                        "desc" => "198 kg - полн резервоар и други течности"
                    ],
                    [
                        "title" => "Суспензија",
                        "desc" => "Ohlins Smart EC 2.0 electronically adjustable semi-active suspension"
                    ],
                    [
                        "title" => "Сопирачки",
                        "desc" => "Brembo Stylema 320mm двојни дискови напред"
                    ],
                    [
                        "title" => "Електроника",
                        "desc" => "АВЅ, Систем за Пролизгување и Систем за Контрола на Предна Осовина (Подигање), Темпомат"
                    ],
                    [
                        "title" => "Инструментна Плоча",
                        "desc" => "Мултифункционален TFT екран 5‘"
                    ],
                    [
                        "title" => "Мод на работа",
                        "desc" => "5 програми (Road, Rain, Sport, Track, Rider)"
                    ],
                    [
                        "title" => "Квачило",
                        "desc" => "Triumph Shift Assist"
                    ],
                    [
                        "title" => "Светло",
                        "desc" => "LED"
                    ],
                    [
                        "title" => "Keyless",
                        "desc" => "Стандардно"
                    ]
                ],
                "bikePageCarousell" => [
                    [
                        "title" => "Мотор - 1160cc",
                        "desc" => "Новиот 1160cc три-цилиндричен мотор изработен по Moto2 стандарди е значително полесен покомпактен, пореспонзивен и нуди одлично возачко искуство. Со максимална јачина од 180 коњски сили, оваа генерација на три-цилиндрични мотори испорачува 30 коњски сили повеќе од својот претходник. Како дополнување на ова е и одличниот обртен момент кој беше измерен со максимални 125Nm.",
                        "image" => "/images/roadsters/speedTriple1200RR/speedTriple1200RRBikeCaro1.avif"
                    ],
                    [
                        "title" => "Нова ÖHLINS SEMI-ACTIVE суспензија",
                        "desc" => "Просто кажано Street Triple 1200 RR на себе ја носи најнапредната Öhlins суспензија која може да се вгради. Истата е целосно електронси прилагодлива со цел да се обезбеди саканиот перформанс од истата.",
                        "image" => "/images/roadsters/speedTriple1200RR/speedTriple1200RRBikeCaro2.avif"
                    ],
                    [
                        "title" => "Потполно Фокусирана Ергономија",
                        "desc" => "Новите рачки на воланот се за 135 милиметри пониски и за 50 милиметри понапред од оние на RR серијата, додека стапките за нозе се исто така одлично позиционирани со цел да се добие фокусирана возачка позиција без да се компромитира комфортот.",
                        "image" => "/images/roadsters/speedTriple1200RR/speedTriple1200RRBikeCaro3.avif"
                    ],
                    [
                        "title" => "Редизајн на Предниот Дел",
                        "desc" => "Новиот дизајна на предната маска и LED светло, го прават Street Triple RS веднаш препознатлив меѓу останатите.",
                        "image" => "/images/roadsters/speedTriple1200RR/speedTriple1200RRBikeCaro4.avif"
                    ],
                    [
                        "title" => "Нови спортски Pirelli пневматици",
                        "desc" => "Со цел да се обезбедни одлична контрола, тракција и урпавување, Street Triple 1200 RR серијата на себе ги носи новите Pirreli Diablo Supercorsa V3 пневматици кои нудат одлични перформанси на патиштата и на патеките.",
                        "image" => "/images/roadsters/speedTriple1200RR/speedTriple1200RRBikeCaro5.avif"
                    ],
                    [
                        "title" => "Оптимизиран ABS и Систем за Пролизгување",
                        "desc" => "Со помош на IMU системот кој во секој момент врши мониторинг на аголот на нагиб и подлогата, новиот ABS и системот за пролизгување ви помагаат при нагли апликации на гас како и при влез и излез од свиоците.",
                        "image" => "/images/roadsters/speedTriple1200RR/speedTriple1200RRBikeCaro6.avif"
                    ],
                    [
                        "title" => "Brembo Stylema Сопирачки",
                        "desc" => "Премиум Brembo Stylema системот за сопирање нуди лесни 320 милиметарски двојни дискови кои нудат извонредна сопирачка моќ и контрола за повеќе уживање и безгрижни авантури.",
                        "image" => "/images/roadsters/speedTriple1200RR/speedTriple1200RRBikeCaro7.avif"
                    ],
                    [
                        "title" => "Пет Возачки Програми",
                        "desc" => "Rain, Road, Sport, Track & Rider Configurable - Секоја од овие програми на работа нуди свои специфични поставки за апликација на гас, сетинзи за ABS и систем за пролизгување, додека истите се прилагодливи според вашите преференци.",
                        "image" => "/images/roadsters/speedTriple1200RR/speedTriple1200RRBikeCaro8.avif"
                    ]
                ],
                "bikePagePromo" => [
                    [
                        "title" => "Технологија спремна за патека",
                        "desc" => "Triumph Shift Assist квачилото нуди брзи и прецизни промени на степенот на пренос без употреба на рачката за активирање на квачилото.",
                        "image" => "/images/roadsters/speedTriple1200RR/speedTriple1200RRBikePromo1.avif"
                    ]
                ]
            ],
            [
                "id" => 20,
                "title" => "Rocket 3 R",
                "model" => "rocket-3-r",
                "category" => "rocket-3",
                "subFamilyCategory" => "rocket-3",
                "edition" => "rocket-3",
                "price" => 25990,
                "gallery" => [
                    "modelImage" => [
                        "src" => "/images/rocket-3/rocket3R/rocket3RSilverIce.png",
                        "alt" => "Rocket 3 R"
                    ],
                    "promoYoutubeVideo" => [
                        "src" => "https://www.youtube.com/embed/7pRH-6UTgu8",
                        "alt" => "Rocket 3 R"
                    ]
                ],
                "customizationColors" => [
                    [
                        "colorName" => "Matt Silver Ice",
                        "price" => 300,
                        "image" => "/images/custom-collors/mattSilverIce.jpg",
                        "base" => "/images/rocket-3/rocket3R/rocket3RSilverIce.png",
                        "reversed" => "/images/rocket-3/rocket3R/rocket3RSilverIceReversed.png"
                    ],
                    [
                        "colorName" => "Saphire Black",
                        "price" => null,
                        "image" => "/images/custom-collors/sapphireBlack.jpg",
                        "base" => "/images/rocket-3/rocket3R/rocket3RSaphireBlack.png",
                        "reversed" => "/images/rocket-3/rocket3R/rocket3RSaphireBlackReversed.png"
                    ],
                    [
                        "colorName" => "Sapphire Black / Carnival Red / Silver Ice",
                        "price" => 700,
                        "image" => "/images/custom-collors/carnivalRedSapphireBlack.jpg",
                        "base" => "/images/rocket-3/rocket3R/rocket3RSilverRedBlack.png",
                        "reversed" => "/images/rocket-3/rocket3R/rocket3RSilverRedBlackReversed.png"
                    ],
                    [
                        "colorName" => "Chrome Edition / Jet Black",
                        "price" => 1000,
                        "image" => "/images/custom-collors/chromeJetBlack.jpg",
                        "base" => "/images/rocket-3/rocket3R/rocket3RSaphireChrome.png",
                        "reversed" => "/images/rocket-3/rocket3R/rocket3RSaphireChromeReversed.png"
                    ]
                ],
                "shortSpecInfo" => [
                    "info1" => "Три-цилиндричен Rocket 3 2,500cc мотор ",
                    "info2" => "167 коњски сили при 6000rpm",
                    "info3" => "Обртен момент од 221Nm"
                ],
                "subFamilyPromo" => [
                    "title" => "Rocket 3 R",
                    "desc" => "Врвниот мускулест “Roadster“ кој испорачува инстанта сила и обртен момент, како и извонредна контрола и способност."
                ],
                "bikePageInfo" => [
                    "Во своја засебна класа, Rocket 3 е врвниот и легендарен мускулест родстер со високи спецификации.",
                    "Rocket 3 R произведува неверојатна контрола, удобност, способност и водечки вртежен момент во светот, што е 71% повисок од најблискиот конкурент и повеќе од претходната Rocket генерација. Истиот се карактеризира со неверојатно рамна крива на вртежниот момент што достигнува врв на 4.000 вртежи во минута. Моќта на три цилиндричниот 2500cc мотор се шири линеарно низ опсегот на вртежи, обезбедувајќи одлично забрзување и моментален одговор, во секој степен во менувачот.",
                    "Максималната моќност е 167 КС при 6000 вртежи во минута што е 11% повисоко од моделот од претходната генерација. Голема моќност се чувствува уште од ниски 3500 револуции во минута па се до црвената линија на тахометарот односно при 7000 вртежи во минута, правејќи го Rocket 3 R неспоредливо највозбудлив мотор што некогаш сте го возеле.",
                    "Заедно со своите неспоредливи перформанси, Rocket 3 R има неверојатно мускулесто присуство и неверојатен крузер стил, како и прекрасни детали и неспоредлив финиш. Се разбира, вие можете да го подобрите овој одличен мотор уште повеќе со избирање од широк опсег од над 50 оригинални Triumph аксесоари."
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
                    ],
                    [
                        "title" => "Асистент за брзини",
                        "desc" => "Опционалнен Triumph Shift Assist систем"
                    ],
                    [
                        "title" => "Систем за контрола на притисок во пневматици",
                        "desc" => "Вградено"
                    ],
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
                        "desc" => "Карактеристичните и препознатливи LED фарови со  DRL - дневни светла на Rocket 3 R го носат препознатливиот триаголен амблем на Triumph",
                        "image" => "/images/rocket-3/rocket3R/rocket3RCaro1.avif"
                    ],
                    [
                        "title" => "Возбудливи тркала составени од 20 краци",
                        "desc" => "Тркалата со 20 краци (предни 17”x3,5”, задни 16”x3,5”) се изработени од лесна алуминиумска легура, со современ стил и обработени завршетоци на рабовите и краците.",
                        "image" => "/images/rocket-3/rocket3R/rocket3RCaro2.avif"
                    ],
                    [
                        "title" => "Хидраулично квачило кое ви асистира",
                        "desc" => "Лесното квачило го намалува напрегањето на возачот од користење на истото и нуди поголема удобност и подобра контрола.",
                        "image" => "/images/rocket-3/rocket3R/rocket3RCaro3.avif"
                    ],
                    [
                        "title" => "Комфортно седиште за возачот и за сопатникот",
                        "desc" => "Роудстер конфигурацијата на Rocket 3 R и позицијата на седиштето обезбедува чиста дизајн линија што тече низ моторот. Дното на седиштето има облоги од алуминиумска легура а со висина од 773 mm, нуди лесен пристап и апсолутна контрола врз моторот.",
                        "image" => "/images/rocket-3/rocket3R/rocket3RCaro4.avif"
                    ],
                    [
                        "title" => "Ергономија која се прилагодува",
                        "desc" => "Ергономски дизајниран за да овозможи максимална удобност, Rocket 3 R има централно поставени стапки за стапала со две прилагодувања на вертикалната положба, со цел да одговори на барањата на секој возач.",
                        "image" => "/images/rocket-3/rocket3R/rocket3RCaro5.avif"
                    ],
                    [
                        "title" => "волан со скриена инсталација",
                        "desc" => "Роудстер воланот на Rocket 3 R обезбедува уникатно мускулесто чувство и совршена положба за возење",
                        "image" => "/images/rocket-3/rocket3R/rocket3RCaro6.avif"
                    ],
                    [
                        "title" => "Прекрасен Финиш и Детали",
                        "desc" => "Голем број ексклузивни детали ја подобруваат неверојатната естетика на Rocket 3 GT. Одлично извајаниот резервоар со алуминиумско капаче за гориво и масло се малкуте детали кои треба да ги откриете долж силуетата на Rocket 3 GT сериајта.",
                        "image" => "/images/rocket-3/rocket3R/rocket3RCaro7.avif"
                    ],
                    [
                        "title" => "Скриени ногарки",
                        "desc" => "Уникатните целосно вовлекувачки прагови може да се сокријат кога не се користат за дополнително да се подобри чистиот минимален изглед на задниот дел на Rocket 3 GT.",
                        "image" => "/images/rocket-3/rocket3R/rocket3RCaro8.avif"
                    ],
                    [
                        "title" => "18 литарски резервоар",
                        "desc" => "Со капацитет од 18 литри, Rocket 3 GT е спремен за долги авантури со повеќе возење и помалку паузи на бензинските станици.",
                        "image" => "/images/rocket-3/rocket3R/rocket3RCaro9.avif"
                    ],
                    [
                        "title" => "Прекрасни Бои на Располагање",
                        "desc" => "Rocket 3 R е достапен две бои и тоа: Korosi Red и Phantom Black.",
                        "image" => "/images/rocket-3/rocket3R/rocket3RCaro10.avif"
                    ]
                ],
                "bikePagePromo" => [
                    [
                        "title" => "Мотор",
                        "desc" => "2500cc моторот на Rocket-3 серијата е најголемиот мотор некогаш поставен во продукциски мотор. Истиот беше ре-дизајниран и сега е полесен за 18 килограми со уште помоќни перформанси и огромен потенцијал.",
                        "image" => "/images/rocket-3/rocket3R/rocket3RBikePromo1.avif"
                    ],
                    [
                        "title" => "Одлично Забрзување и Обртен Момент",
                        "desc" => "Со измерени 221Nm вртежен моемент, Rocket-3 серијата е ултимативниот мускулест roadster. Истиот испорачува извонреден вртежен момент досега невиден кај некој продукциски мотор.",
                        "image" => "/images/rocket-3/rocket3R/rocket3RBikePromo2.avif"
                    ]
                ],
                "bikePageImageGallery" => [
                    [
                        "alt" => "rocket3RBikeGalleryCaro1",
                        "src" => "/images/rocket-3/rocket3R/rocket3RBikeGalleryCaro1.avif",
                    ],
                    [
                        "alt" => "rocket3RBikeGalleryCaro2",
                        "src" => "/images/rocket-3/rocket3R/rocket3RBikeGalleryCaro2.avif",
                    ],
                    [
                        "alt" => "rocket3RBikeGalleryCaro3",
                        "src" => "/images/rocket-3/rocket3R/rocket3RBikeGalleryCaro3.avif",
                    ],
                    [
                        "alt" => "rocket3RBikeGalleryCaro4",
                        "src" => "/images/rocket-3/rocket3R/rocket3RBikeGalleryCaro4.avif",
                    ],
                    [
                        "alt" => "rocket3RBikeGalleryCaro5",
                        "src" => "/images/rocket-3/rocket3R/rocket3RBikeGalleryCaro5.avif",
                    ],
                    [
                        "alt" => "rocket3RBikeGalleryCaro6",
                        "src" => "/images/rocket-3/rocket3R/rocket3RBikeGalleryCaro6.avif",
                    ],
                    [
                        "alt" => "rocket3RBikeGalleryCaro7",
                        "src" => "/images/rocket-3/rocket3R/rocket3RBikeGalleryCaro7.avif",
                    ],
                    [
                        "alt" => "rocket3RBikeGalleryCaro8",
                        "src" => "/images/rocket-3/rocket3R/rocket3RBikeGalleryCaro8.avif",
                    ],
                    [
                        "alt" => "rocket3RBikeGalleryCaro9",
                        "src" => "/images/rocket-3/rocket3R/rocket3RBikeGalleryCaro9.avif",
                    ],
                    [
                        "alt" => "rocket3RBikeGalleryCaro10",
                        "src" => "/images/rocket-3/rocket3R/rocket3RBikeGalleryCaro10.avif"
                    ]
                ]
            ],
            [
                "id" => 21,
                "title" => "Rocket 3 GT",
                "model" => "rocket-3-gt",
                "category" => "rocket-3",
                "subFamilyCategory" => "rocket-3",
                "edition" => "rocket-3",
                "price" => 26790,
                "gallery" => [
                    "modelImage" => [
                        "src" => "/images/rocket-3/rocket3GT/rocket3GTSaphireBlack.png",
                        "alt" => "Rocket 3 GT"
                    ],
                    "promoYoutubeVideo" => [
                        "src" => "https://www.youtube.com/embed/V-RbV3Jk47U",
                        "alt" => "Rocket 3 GT"
                    ]
                ],
                "customizationColors" => [
                    [
                        "colorName" => "Saphire Black",
                        "price" => null,
                        "image" => "/images/custom-collors/sapphireBlack.jpg",
                        "base" => "/images/rocket-3/rocket3GT/rocket3GTSaphireBlack.png",
                        "reversed" => "/images/rocket-3/rocket3GT/rocket3GTSaphireBlackReversed.png"
                    ],
                    [
                        "colorName" => "Saphire Black / Carnival Red / Silver Ice",
                        "price" => null,
                        "image" => "/images/custom-collors/carnivalRedSapphireBlack.jpg",
                        "base" => "/images/rocket-3/rocket3GT/rocket3GTCarnivalRedSaphireBlack.png",
                        "reversed" => "/images/rocket-3/rocket3GT/rocket3GTCarnivalRedSaphireBlackReversed.png"
                    ],
                    [
                        "colorName" => "Chrome Edition / Diablo Red",
                        "price" => 900,
                        "image" => "/images/custom-collors/chromeDiabloRed.jpg",
                        "base" => "/images/rocket-3/rocket3GT/rocket3GTChrome.png",
                        "reversed" => "/images/rocket-3/rocket3GT/rocket3GTChromeReversed.png"
                    ]
                ],
                "shortSpecInfo" => [
                    "info1" => "Три-цилиндричен 2,500cc Rocket 3 мотор",
                    "info2" => "167 коњски сили при 6000rpm",
                    "info3" => "Обртен момент од 221Nm"
                ],
                "subFamilyPromo" => [
                    "title" => "Rocket 3 GT",
                    "desc" => "Врвни перформанси и изглед, неверојатен комфорт со релаксирана возачка позиција која дозволува авантури со долги дистанци."
                ],
                "bikePageInfo" => [
                    "Во своја засебна класа, Rocket 3 е врвниот и легендарен мускулест родстер со високи спецификации.",
                    "Rocket 3 R произведува неверојатна контрола, удобност, способност и водечки вртежен момент во светот, што е 71% повисок од најблискиот конкурент и повеќе од претходната Rocket генерација. Истиот се карактеризира со неверојатно рамна крива на вртежниот момент што достигнува врв на 4.000 вртежи во минута. Моќта на три цилиндричниот 2500cc мотор се шири линеарно низ опсегот на вртежи, обезбедувајќи одлично забрзување и моментален одговор, во секој степен во менувачот.",
                    "Максималната моќност е 167 КС при 6000 вртежи во минута што е 11% повисоко од моделот од претходната генерација. Голема моќност се чувствува уште од ниски 3500 револуции во минута па се до црвената линија на тахометарот односно при 7000 вртежи во минута, правејќи го Rocket 3 R неспоредливо највозбудлив мотор што некогаш сте го возеле.",
                    "Заедно со своите неспоредливи перформанси, Rocket 3 R има неверојатно мускулесто присуство и неверојатен крузер стил, како и прекрасни детали и неспоредлив финиш. Се разбира, вие можете да го подобрите овој одличен мотор уште повеќе со избирање од широк опсег од над 50 оригинални Triumph аксесоари."
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
                        "desc" => "Комфортно седиште за возачот и за сопатникот"
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
                    ],
                    [
                        "title" => "Асистент за брзини",
                        "desc" => "Опционалнен Triumph Shift Assist систем"
                    ],
                    [
                        "title" => "Систем за контрола на притисок во пневматици",
                        "desc" => "Oпционално"
                    ],
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
                        "desc" => "Карактеристичните и препознатливи LED фарови со  DRL - дневни светла на Rocket 3 R го носат препознатливиот триаголен амблем на Triumph.",
                        "image" => "/images/rocket-3/rocket3GT/rocket3GTCaro1.avif"
                    ],
                    [
                        "title" => "Возбудливи тркала составени од 20 краци",
                        "desc" => "Тркалата со 20 краци (предни 17”x3,5”, задни 16”x3,5”) се изработени од лесна алуминиумска легура, со современ стил и обработени завршетоци на рабовите и краците.",
                        "image" => "/images/rocket-3/rocket3GT/rocket3GTCaro2.avif"
                    ],
                    [
                        "title" => "Хидраулично квачило кое ви асистира",
                        "desc" => "Лесното квачило го намалува напрегањето на возачот од користењето на истото и нуди поголема удобност и подобра контрола",
                        "image" => "/images/rocket-3/rocket3GT/rocket3GTCaro3.avif"
                    ],
                    [
                        "title" => "Комфортно седиште за возачот и за сопатникот",
                        "desc" => "Роудстер конфигурацијата на Rocket 3 GT и позицијата на седиштето обезбедува чиста дизајн линија што тече низ моторот. Дното на седиштето има облоги од алуминиумска легура а со висина од 750 mm, нуди лесен пристап и апсолутна контрола врз моторот.",
                        "image" => "/images/rocket-3/rocket3GT/rocket3GTCaro4.avif"
                    ],
                    [
                        "title" => "Прилагодлив Потпирач за сопатникот",
                        "desc" => "За дополнително подобрување на комоцијата при вашите долги турнеи, новото седиште на Rocket 3 GT нуди прилагодување на висината.",
                        "image" => "/images/rocket-3/rocket3GT/rocket3GTCaro5.avif"
                    ],
                    [
                        "title" => "Поголем Ветробран",
                        "desc" => "За подобрена заштита од ветер и поголеми можности за турнеи, Rocket 3 GT на себе носи поголемо ветробранско стакло.",
                        "image" => "/images/rocket-3/rocket3GT/rocket3GTCaro6.avif"
                    ],
                    [
                        "title" => "Греачи на Волан",
                        "desc" => "Греачите на рачките се стандардна опрема на Rocket 3 GT и се активираат со притискање на специјално копче на левиот контролер. Постојат две поставки за температура, кои се прикажуваат на TFT екранот.",
                        "image" => "/images/rocket-3/rocket3GT/rocket3GTCaro7.avif"
                    ],
                    [
                        "title" => "Ергономија",
                        "desc" => "Ергономски дизајниран за да овозможи максимална удобност, Rocket 3 GT има подлоги за стапала поставени напред со три опции за прилагодувања на хоризонталната положба.",
                        "image" => "/images/rocket-3/rocket3GT/rocket3GTCaro8.avif"
                    ],
                    [
                        "title" => "волан со скриена инсталација",
                        "desc" => "Волан на Rocket 3 GT обезбедува уникатно мускулесто чувство и совршена положба за возење.",
                        "image" => "/images/rocket-3/rocket3GT/rocket3GTCaro9.avif"
                    ],
                    [
                        "title" => "Прекрасен Финиш и Детали",
                        "desc" => "Голем број ексклузивни детали ја подобруваат неверојатната естетика на Rocket 3 GT. Одлично извајаниот резервоар со алуминиумско капаче за гориво и масло се малкуте детали кои треба да ги откриете долж силуетата на Rocket 3 GT сериајта.",
                        "image" => "/images/rocket-3/rocket3GT/rocket3GTCaro10.avif"
                    ],
                    [
                        "title" => "Скриени ногарки",
                        "desc" => "Уникатните целосно вовлекувачки прагови може да се сокријат кога не се користат за дополнително да се подобри чистиот минимален изглед на задниот дел на Rocket 3 GT.",
                        "image" => "/images/rocket-3/rocket3GT/rocket3GTCaro11.avif"
                    ],
                    [
                        "title" => "18 литарски резервоар",
                        "desc" => "Со капацитет од 18 литри, Rocket 3 GT е спремен за долги авантури со повеќе возење и помалку паузи на бензинските станици.",
                        "image" => "/images/rocket-3/rocket3GT/rocket3GTCaro12.avif"
                    ],
                    [
                        "title" => "Прекрасни Бои на Располагање",
                        "desc" => "Rocket 3 GT е достапен две опции  Silver Ice & Storm Grey и Phantom Black.",
                        "image" => "/images/rocket-3/rocket3GT/rocket3GTCaro13.avif"
                    ]
                ],
                "bikePagePromo" => [
                    [
                        "title" => "Технологија спремна за патека",
                        "desc" => "Triumph Shift Assist квачилото нуди брзи и прецизни промени на степенот на пренос без употреба на рачката за активирање на квачилото.",
                        "image" => "/images/roadsters/speedTriple1200RR/speedTriple1200RRBikePromo1.avif"
                    ]
                ],
                "bikePageImageGallery" => [
                    [
                        "alt" => "rocket3GTBikeGalleryCaro1",
                        "src" => "/images/rocket-3/rocket3GT/rocket3GTBikeGalleryCaro1.avif",
                    ],
                    [
                        "alt" => "rocket3GTBikeGalleryCaro2",
                        "src" => "/images/rocket-3/rocket3GT/rocket3GTBikeGalleryCaro2.avif",
                    ],
                    [
                        "alt" => "rocket3GTBikeGalleryCaro3",
                        "src" => "/images/rocket-3/rocket3GT/rocket3GTBikeGalleryCaro3.avif",
                    ],
                    [
                        "alt" => "rocket3GTBikeGalleryCaro4",
                        "src" => "/images/rocket-3/rocket3GT/rocket3GTBikeGalleryCaro4.avif",
                    ],
                    [
                        "alt" => "rocket3GTBikeGalleryCaro5",
                        "src" => "/images/rocket-3/rocket3GT/rocket3GTBikeGalleryCaro5.avif",
                    ],
                    [
                        "alt" => "rocket3GTBikeGalleryCaro6",
                        "src" => "/images/rocket-3/rocket3GT/rocket3GTBikeGalleryCaro6.avif",
                    ],
                    [
                        "alt" => "rocket3GTBikeGalleryCaro7",
                        "src" => "/images/rocket-3/rocket3GT/rocket3GTBikeGalleryCaro7.avif",
                    ],
                    [
                        "alt" => "rocket3GTBikeGalleryCaro8",
                        "src" => "/images/rocket-3/rocket3GT/rocket3GTBikeGalleryCaro8.avif"
                    ]
                ]
            ],
            [
                "id" => 26,
                "title" => "Speed 400",
                "model" => "speed-400",
                "category" => "classics",
                "subFamilyCategory" => "speed-400",
                "edition" => "400cc",
                "price" => 6390,
                "desc" => "Со класичниот изглед Speed 400, навистина ја носи онаа modern-classic ДНК во неговата крв.",
                "gallery" => [
                    "modelImage" => [
                        "src" => "/images/classics/speed400CarnivalRed.png",
                        "alt" => "Speed 400"
                    ],
                    "promoYoutubeVideo" => [
                        "src" => "https://www.youtube.com/embed/omKdaaynGCg",
                        "alt" => "Speed 400 Youtube Video"
                    ]
                ],
                "customizationColors" => [
                    [
                        "colorName" => "Carnival Red / Storm Gray",
                        "price" => null,
                        "image" => "/images/custom-collors/carnivalRedStormGrey.jpg",
                        "base" => "/images/classics/speed400CarnivalRed.png",
                        "reversed" => "/images/classics/speed400CarnivalRedReversed.png"
                    ],
                    [
                        "colorName" => "Caspian Blue / Storm Gray",
                        "price" => null,
                        "image" => "/images/custom-collors/caspianBlueStormGray.jpg",
                        "base" => "/images/classics/speed400CaspianBlue.png",
                        "reversed" => "/images/classics/speed400CaspianBlueStormGreyReversed.png"
                    ],
                    [
                        "colorName" => "Phantom Black / Storm Gray",
                        "price" => null,
                        "image" => "/images/custom-collors/phantomBlackStormGrey.jpg",
                        "base" => "/images/classics/speed400PhantomBlack.png",
                        "reversed" => "/images/classics/speed400phantomBlackStormGreyReversed.png"
                    ]
                ],
                "shortSpecInfo" => [
                    "info1" => "398cc TR Мотор",
                    "info2" => "16 000 km сервисен интервал"
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
                        "title" => "Инструментна Плоча",
                        "desc" => "LCD дисплеј со аналоген мерач на брзина"
                    ],
                    [
                        "title" => "Светло",
                        "desc" => "LED главни и дневни светла"
                    ],
                    [
                        "title" => "Сервисен Интервал",
                        "desc" => "16,000км сервисен интервал"
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
                        "desc" => "Speed 400 е наменет за секого и е направен за комоција која ќе ја чувствуваат возачи од секакви димензии. Благодарејки на неговата тенка половина, атрактивна и природна возачка позиција комбинира комфорт и самодоверба при возење на моторот.",
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
                ],
                "bikePagePromo" => [
                    [
                        "title" => "Икона",
                        "desc" => "Идна легенда, амблем во изработка. Изработен за потполно нова генерација на Triumph возачи.",
                        "image" => "/images/classics/speed400/speed400BikePromo1.avif"
                    ]
                ]
            ],
            [
                "id" => 27,
                "title" => "Scrambler 400 X",
                "model" => "scrambler-400-x",
                "category" => "classics",
                "subFamilyCategory" => "scrambler-400-x",
                "edition" => "400cc",
                "desc" => "Scrambler 400 X - Подготвен за секаков на подлога.",
                "price" => 6890,
                "customizationColors" => [
                    [
                        "colorName" => "Matt Khaki Green / Fusion White",
                        "price" => null,
                        "image" => "/images/custom-collors/mattKhakiGreenFusionWhite.jpg",
                        "base" => "/images/classics/scrambler400X/scrambler400XKhakiGreen.png",
                        "reversed" => "/images/classics/scrambler400X/scrambler400XKhakiGreenReversed.png"
                    ],
                    [
                        "colorName" => "Carnival Red / Saphire Black",
                        "price" => null,
                        "image" => "/images/custom-collors/carnivalRedSapphireBlack.jpg",
                        "base" => "/images/classics/scrambler400X/scrambler400XRedBlack.png",
                        "reversed" => "/images/classics/scrambler400X/scrambler400XRedBlackReversed.png"
                    ],
                    [
                        "colorName" => "Phantom Black / Silver Ie",
                        "price" => null,
                        "image" => "/images/custom-collors/phantomBlackStormGrey.jpg",
                        "base" => "/images/classics/scrambler400X/scrambler400XBlackSilver.png",
                        "reversed" => "/images/classics/scrambler400X/scrambler400XBlackSilverReversed.png"
                    ]
                ],
                "gallery" => [
                    "modelImage" => [
                        "src" => "/images/classics/scrambler400X/scrambler400XKhakiGreen.png",
                        "alt" => "Scrambler 400 x"
                    ],
                    "promoYoutubeVideo" => [
                        "src" => "https://www.youtube.com/embed/_LIgYq4eYag",
                        "alt" => "Scrambler 400 X"
                    ]
                ],
                "shortSpecInfo" => [
                    "info1" => "398cc TR Мотор",
                    "info2" => "16 000 km сервисен интервал"
                ],
                "subFamilyPromo" => [
                    "title" => "Scrambler 400 X",
                    "desc" => "Уникатен Модерен Класик кој го поседува уникатниот 'roadster' дизајн на Triumph во својата ДНК. Пристигнува во Јануари 2024. Цени од: €5,690.00"
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
                        "desc" => "Висина на седиште 835мм, тенка половица и возбудлива ергономија"
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
                        "desc" => "320мм дискови и клешти со АВЅ"
                    ],
                    [
                        "title" => "Инструментна Плоча",
                        "desc" => "LCD дисплеј со аналоген мерач на брзина"
                    ],
                    [
                        "title" => "Светло",
                        "desc" => "LED главни и дневни светла"
                    ],
                    [
                        "title" => "Сервисен Интервал",
                        "desc" => "16,000км сервисен интервал"
                    ]
                ],
                "bikePageCarousell" => [
                    [
                        "title" => "Автентичен Scrambler Карактер",
                        "desc" => "Off-Road Setup, безвременска Scrambler силуета и класичен Triumph профил на моторот. Од глава до петици, Scrambler 400 X серијата ја носи онаа автентична Triumph Scrambler ДНК.",
                        "image" => "/images/classics/scrambler400X/scrambler400XBikeCaro1.avif"
                    ],
                    [
                        "title" => "Луксузни финиши и Детали",
                        "desc" => "Препознатливиот црн капак на моторот, златни анодизирани вилушки, високо квалитетни бои и екслузивни ддетали како многуте машински гравирани Triumph логоа оставаат луксузни детали на овој Triumph.",
                        "image" => "/images/classics/scrambler400X/scrambler400XBikeCaro2.avif"
                    ],
                    [
                        "title" => "All-Road Способности",
                        "desc" => "Заштита за моторот и возачот, заштитата за LED светла, ладник и рачки се дел од оние ситени детали кои ја праваат оваа серија на мотори способна за секаков терен.",
                        "image" => "/images/classics/scrambler400X/scrambler400XBikeCaro3.avif"
                    ],
                    [
                        "title" => "Ергономија",
                        "desc" => "Scrambler 400 X се карактеризира со командна возачка позиција со широк и прилагодлив волан, алуминиумски стапки за нозе со гумена подлога за спречување на лизагање од истите. Исто така тенката силуета нуди одличен комфорт но и одличен изглед на самата серија.",
                        "image" => "/images/classics/scrambler400X/scrambler400XBikeCaro4.avif"
                    ],
                    [
                        "title" => "Рамка и Суспензија",
                        "desc" => "Специјализираната Scrambler рамка и суспензија нудат одлична агилност и самодоеверба на сите подлоги.",
                        "image" => "/images/classics/scrambler400X/scrambler400XBikeCaro5.avif"
                    ],
                    [
                        "title" => "Тркала и Пневматици",
                        "desc" => "Одличните пневматици кои ги опколуваат предното 19 инчно и задно 17 инчно тркало нудат одлична тракција на сите подлоги без разлика на временски те прилики.",
                        "image" => "/images/classics/scrambler400X/scrambler400XBikeCaro6.avif"
                    ],
                    [
                        "title" => "Сопирачки",
                        "desc" => "Дво клипните клешти со метални доводи за течност за сопирачки нудат прогресивно и предливи запирање на моторот додека ABS системот ве штити од несакани случаи.",
                        "image" => "/images/classics/scrambler400X/scrambler400XBikeCaro7.avif"
                    ],
                    [
                        "title" => "Технологија",
                        "desc" => "SCrambler 400 X серијата како инструментна плоча нуди аналоген брзиномер и целосен LED дисплеј кои ги прикажува основните информации околу моторот како и степенот на пренос. Системот за пролизгување лесно се деактивира во случаи кога сакате повеќе забава.",
                        "image" => "/images/classics/scrambler400X/scrambler400XBikeCaro8.avif"
                    ],
                    [
                        "title" => "Сигурносни Системи",
                        "desc" => "Srcambler 400 X серијата на себе носи имобилизатор кој го штити вачиот мотор од кражби како и волан кој се заклучува. Сигурносниот чип вграден во клучот обезбедува уште поголема сигурност со што дозволува моторот да биде активиран само со тој клуч.",
                        "image" => "/images/classics/scrambler400X/scrambler400XBikeCaro9.avif"
                    ]
                ],
                "bikePagePromo" => [
                    [
                        "title" => "Икона",
                        "desc" => "Идна легенда, амблем во изработка. Изработен за потполно нова генерација на Triumph возачи.",
                        "image" => "/images/classics/scrambler400X/scrambler400XBikePromo1.avif"
                    ]
                ]
            ],
            [
                "id" => 28,
                "title" => "Speed Twin 900",
                "model" => "speed-twin-900",
                "category" => "classics",
                "subFamilyCategory" => "speed-twin-900",
                "edition" => "900cc",
                "desc" => "Возбудливи перформанси и управување кое инспирира самодоверба, сега со уште повеќе комфорт и стил.",
                "price" => 10690,
                "customizationColors" => [
                    [
                        "colorName" => "Jet Black",
                        "price" => null,
                        "image" => "/images/custom-collors/jetBlack.jpg",
                        "base" => "/images/classics/speedTwin900/speedTwin900Black.png",
                        "reversed" => "/images/classics/speedTwin900/speedTwin900BlackReversed.png"
                    ],
                    [
                        "colorName" => "Carnival Red / Phantom Black",
                        "price" => 200,
                        "image" => "/images/custom-collors/carnivalRedSapphireBlack.jpg",
                        "base" => "/images/classics/speedTwin900/speedTwin900CarnivalRed.png",
                        "reversed" => "/images/classics/speedTwin900/speedTwin900CarnivalRedReversed.png"
                    ],
                    [
                        "colorName" => "Competition green / Phantom Black",
                        "price" => 200,
                        "image" => "/images/custom-collors/competitionGreenPhantomBlack.jpg",
                        "base" => "/images/classics/speedTwin900/speedTwin900Competition.png",
                        "reversed" => "/images/classics/speedTwin900/speedTwin900CompetitionReversed.png"
                    ],
                    [
                        "colorName" => "Phantom Green / Silver Green",
                        "price" => 600,
                        "image" => "/images/custom-collors/phantomGreenSilverGreen.png",
                        "base" => "/images/classics/speedTwin900/speedTwin900StealthGreen.png",
                        "reversed" => "/images/classics/speedTwin900/speedTwin900StealthGreenReversed.png"
                    ]
                ],
                "gallery" => [
                    "modelImage" => [
                        "src" => "/images/classics/speedТwin900Model.png",
                        "alt" => "Speed Twin 900"
                    ],
                    "promoYoutubeVideo" => [
                        "src" => "https://www.youtube.com/embed/30qKRVyb4OM",
                        "alt" => "Speed Twin 900 Youtube Video"
                    ]
                ],
                "shortSpecInfo" => [
                    "info1" => "Легендарна Bonneville ДНК"
                ],
                "subFamilyPromo" => [
                    "title" => "Speed Twin 900",
                    "desc" => "Возбудливи перформанси и управување што инспирира самодоверба, сега со уште поголема удобност и стил Цени од: €10,690.00"
                ],
                "features" => [
                    [
                        "title" => "Возачка Категорија",
                        "desc" => "А2 сет - компитабилен со А2 возачка категорија"
                    ],
                    [
                        "title" => "Возачки Модови",
                        "desc" => "2 - Road & Rain"
                    ],
                    [
                        "title" => "Систем за Пролизгување",
                        "desc" => "Ride-by-wire со автоматски систем за пролизгување"
                    ],
                    [
                        "title" => "Инструментна Плоча",
                        "desc" => "LCD дисплеј со аналоген мерач на брзина"
                    ],
                    [
                        "title" => "Светло",
                        "desc" => "LED задни светла"
                    ],
                    [
                        "title" => "USB",
                        "desc" => "Под Седиште"
                    ],
                    [
                        "title" => "Имобилизатор",
                        "desc" => "Стандард"
                    ],
                    [
                        "title" => "Сервисен Интервал",
                        "desc" => "16,000км / 12 месеци сервисен интервал"
                    ]
                ],
                "bikePageCarousell" => [
                    [
                        "title" => "Дво-Цилиндричен Мотор",
                        "desc" => "Надградуваниот дво-цилиндричен 900cc мотор произведува максимални перфоманси од 80Nm обртен моемент и 65 максимални коњски сили. Отсега истиот мотор спаѓа во Euro 5 категоријата со ниски загадувања и со карактеристичен британски дво-цилиндричен звук.",
                        "image" => "/images/classics/speedTwin900/speedTwin900BikeCaro1.avif"
                    ],
                    [
                        "title" => "Автентична ДНК",
                        "desc" => "Започнувачки од самата силуета па се до дуплите издувни цевки Speed Twin 900 потполно го носи оној Bonneville карактер кој потекнува од 1959 година.",
                        "image" => "/images/classics/speedTwin900/speedTwin900BikeCaro2.avif"
                    ],
                    [
                        "title" => "Луксузни Дизајнерски Детали",
                        "desc" => "Дел од овие детали се новите машински изработени лиени тркала, рамно седиште, нови странични панели и луксузни финиши и бои и големо внимание на детали.",
                        "image" => "/images/classics/speedTwin900/speedTwin900BikeCaro3.avif"
                    ],
                    [
                        "title" => "Комфорт",
                        "desc" => "Комотната и командна возачка позиција на Speed Twin 900 доаѓа како резулатат на ниското седиште (765mm) и одличната ергономија и силуета на моторот.",
                        "image" => "/images/classics/speedTwin900/speedTwin900BikeCaro4.avif"
                    ],
                    [
                        "title" => "Мотор кој инспирира самодоверба",
                        "desc" => "Високо перформантни сопирачки, суспензија и пневматици во комбинација со лесното квачило, технологијата и комфортот го подигаат нивото на самодоверба кај возачите на Speed Twin 900 серијата.",
                        "image" => "/images/classics/speedTwin900/speedTwin900BikeCaro5.avif"
                    ],
                    [
                        "title" => "Сопирачки",
                        "desc" => "Високо перформантни Brembo четири клипни клешти и 310 милиметарски клип оддаваат одлично чувство и контрола кога ги употребуват сопирачките.",
                        "image" => "/images/classics/speedTwin900/speedTwin900BikeCaro6.avif"
                    ],
                    [
                        "title" => "Суспензија",
                        "desc" => "Предната (41мм) вилушка во комплет со задните двојни амортизери (120мм) даваат одлично ниво на комфорт без разлика на теренот по кој возите.",
                        "image" => "/images/classics/speedTwin900/speedTwin900BikeCaro7.avif"
                    ],
                    [
                        "title" => "Технологија",
                        "desc" => "На располагање се два мода на работа. Нормален и мод за дожд. Заедно со системите за пролизгување и системот за асистенција при апликација на гас се грижат за сигурна авантура.",
                        "image" => "/images/classics/speedTwin900/speedTwin900BikeCaro8.avif"
                    ]
                ],
                "bikePagePromo" => [
                    [
                        "title" => "Компатибилен со A2 Возачка Лиценца",
                        "desc" => "Со сетот за деградирање на моторциклот Speed Twin 900 е лесно прилагодлив за возачи А2 возачка лиценца. Истиот може лесно да биде вграден и одстранет во било кој Triumph сервис а ја прави оваа серија на мотори достапна и за возачите почетници.",
                        "image" => "/images/classics/speedTwin900/speedTwin900BikePromo1.avif"
                    ]
                ]
            ],
            [
                "id" => 29,
                "title" => "Bonneville Bobber",
                "model" => "bonneville-bobber",
                "category" => "classics",
                "subFamilyCategory" => "bonneville-bobber",
                "edition" => "classics",
                "price" => 16990,
                "customizationColors" => [
                    [
                        "colorName" => "Jet Black",
                        "price" => null,
                        "image" => "/images/custom-collors/jetBlack.jpg",
                        "base" => "/images/classics/bonnevilleBobber/bonnevilleBobberBlack.png",
                        "reversed" => "/images/classics/bonnevilleBobber/bonnevilleBobberBlackReversed.png"
                    ],
                    [
                        "colorName" => "Red Hopper",
                        "price" => null,
                        "image" => "/images/custom-collors/redHopper.jpg",
                        "base" => "/images/classics/bonnevilleBobber/bonnevilleBobberRedHopper.png",
                        "reversed" => "/images/classics/bonnevilleBobber/bonnevilleBobberRedHopperReversed.png"
                    ],
                    [
                        "colorName" => "Jett Black / Ash Gray",
                        "price" => 400,
                        "image" => "/images/custom-collors/graphiteJetBlack.jpg",
                        "base" => "/images/classics/bonnevilleBobber/bonnevilleBobberBlackGray.png",
                        "reversed" => "/images/classics/bonnevilleBobber/bonnevilleBobberBlackGrayReversed.png"
                    ],
                    [
                        "colorName" => "Chrome Edition / Jet Black",
                        "price" => 600,
                        "image" => "/images/custom-collors/jetBlackChrome.jpg",
                        "base" => "/images/classics/bonnevilleBobber/bonnevilleBobberChrome.png",
                        "reversed" => "/images/classics/bonnevilleBobber/bonnevilleBobberChromeReversed.png"
                    ],
                    [
                        "colorName" => "Phantom Purple / Silver Purple",
                        "price" => 600,
                        "image" => "/images/custom-collors/phantomPurpleSilverPurple.png",
                        "base" => "/images/classics/bonnevilleBobber/bonnevilleBobberPurple.png",
                        "reversed" => "/images/classics/bonnevilleBobber/bonnevilleBobberPurpleReversed.png"
                    ]
                ],
                "gallery" => [
                    "modelImage" => [
                        "src" => "/images/classics/bonnevilleBobber/bonnevilleBobberRedHopper.png",
                        "alt" => "Bonneville Bobber"
                    ],
                    "promoYoutubeVideo" => [
                        "src" => "https://www.youtube.com/embed/hfo-yqQOAjM",
                        "alt" => "Bonneville Bobber"
                    ]
                ],
                "shortSpecInfo" => [
                    "info1" => "Легендарна Bonneville ДНК"
                ],
                "subFamilyPromo" => [
                    "title" => "Bonneville Bobber",
                    "desc" => "Мускулест изглед со одлични перформанси и управување - Bonneville Bobber. Цена од: 16790.00Є"
                ],
                "features" => [
                    [
                        "title" => "Возачки Модови",
                        "desc" => "2 - Road & Rain"
                    ],
                    [
                        "title" => "Систем за Пролизгување",
                        "desc" => "Ride-by-wire со автоматски систем за пролизгување"
                    ],
                    [
                        "title" => "Инструментна Плоча",
                        "desc" => "LCD дисплеј со аналоген мерач на брзина"
                    ],
                    [
                        "title" => "Светло",
                        "desc" => "LED"
                    ],
                    [
                        "title" => "Имобилизатор",
                        "desc" => "Стандард"
                    ],
                    [
                        "title" => "Сервисен Интервал",
                        "desc" => "16,000км / 12 месеци сервисен интервал"
                    ]
                ],
                "bikePageCarousell" => [
                    [
                        "title" => "Мотор од одличен обртен момент",
                        "desc" => "Дво-Цилиндарскиот „In-Line“ 1200cc мотор испорачува одлично забрзување со одличен и возбудлив обртен момент и произведува препознатлив Bobber звук и сето тоа со мали емисии.",
                        "image" => "/images/classics/bonnevilleBobber/bonnevilleBobberBikeCaro1.avif"
                    ],
                    [
                        "title" => "Препознатлив Звук",
                        "desc" => "Иновативниот двоен издувен систем и уникатните двојни филтри за воздух произведуваат препознатлив „Hot-Rod“ звук.",
                        "image" => "/images/classics/bonnevilleBobber/bonnevilleBobberBikeCaro2.avif"
                    ],
                    [
                        "title" => "Автентичност",
                        "desc" => "Со својата прекрасна дизајнерска линија и стил како и жичните тркала, широкиот волан, нискиот профил и црниот реп, Bobber серијата е вистинска модерна икона.",
                        "image" => "/images/classics/bonnevilleBobber/bonnevilleBobberBikeCaro3.avif"
                    ],
                    [
                        "title" => "Перформанси",
                        "desc" => "Во 2021 година, Bobber серијата беше редизајнирана и со тоа беа додадени 12 литарски резервоар, 16 инчно предно тркало со 47мм предна вилушка и со тоа се додаде уште помускулест изглед и командна става.",
                        "image" => "/images/classics/bonnevilleBobber/bonnevilleBobberBikeCaro4.avif"
                    ],
                    [
                        "title" => "Самостојно Седиште",
                        "desc" => "Препознатливото самостојно седиште на Bobber дава одлични линии и уште повеќе комоција. Со можност за прилагодување по ваши преференци и минимална висина од 690mm од земајта како и тенкиот профил секој кој што ќе седна на овој мотор ќе ја почувствува онаа моќ која ја нуди Bobber серијата.",
                        "image" => "/images/classics/bonnevilleBobber/bonnevilleBobberBikeCaro5.avif"
                    ],
                    [
                        "title" => "Стил",
                        "desc" => "Како додаток на одлично изведените финиши на моторот, Bobber серијата со себе го носи оној темен и див изглед. За да се испорача ова дизајнерите , Βοbber го облекоа во црно пескарен финиш на моторот, кардан и менувачот.",
                        "image" => "/images/classics/bonnevilleBobber/bonnevilleBobberBikeCaro6.avif"
                    ],
                    [
                        "title" => "Сопирачки",
                        "desc" => "Новите дупли предни Brembo сопирачки како и задната Nissin сопирачка доаѓаат како стандард на Bobber серијата и со себе го носат најновиот ABS систем за уште повеќе сигурност и контрола кога возите.",
                        "image" => "/images/classics/bonnevilleBobber/bonnevilleBobberBikeCaro7.avif"
                    ],
                    [
                        "title" => "Суспензија",
                        "desc" => "Showa 47mm предна вилушка и сокриениот иновативен monoshock заден систем се грижат за максимален комфорт и перформанси.",
                        "image" => "/images/classics/bonnevilleBobber/bonnevilleBobberBikeCaro8.avif"
                    ],
                    [
                        "title" => "Технологија",
                        "desc" => "На секој возач на располагање му се два мода на работа, систем за пролизгување, ABS, имобилизатор, темпомат, LED дневни светла.",
                        "image" => "/images/classics/bonnevilleBobber/bonnevilleBobberBikeCaro9.avif"
                    ]
                ],
                "bikePagePromo" => [
                    [
                        "title" => "Само ваш - Bonneville Bobber",
                        "desc" => "Од уникатното и прилагодливо седиште па се до трите различни бои и 77 дополнителни оригинални аксесоари, Bobber серијата е изработена за да ја персонализирате по ваш вкус.",
                        "image" => "/images/classics/bonnevilleBobber/bonnevilleBobberBikePromo1.avif"
                    ]
                ],
                "bikePageImageGallery" => [
                    [
                        "alt" => "bonnevilleBobberBikeGalleryCaro1",
                        "src" => "/images/classics/bonnevilleBobber/bonnevilleBobberBikeGalleryCaro1.avif"
                    ]
                ]
            ],
            [
                "id" => 32,
                "title" => "Scrambler 1200 X",
                "model" => "scrambler-1200-x",
                "category" => "classics",
                "subFamilyCategory" => "scrambler-1200",
                "edition" => "classics",
                "price" => 16490,
                "customizationColors" => [
                    [
                        "colorName" => "Saphire Black",
                        "price" => null,
                        "image" => "/images/custom-collors/sapphireBlack.jpg",
                        "base" => "/images/classics/scrambler1200X/scrambler1200XSapphireBlack.png",
                        "reversed" => "/images/classics/scrambler1200X/scrambler1200XSapphireBlackreversed.png",
                    ],
                    [
                        "colorName" => "Ash Gray",
                        "price" => 300,
                        "image" => "/images/custom-collors/ashGrey.jpg",
                        "base" => "/images/classics/scrambler1200X/scrambler1200XSapphireGray.png",
                        "reversed" => "/images/classics/scrambler1200X/scrambler1200XSapphireGrayReversed.png"
                    ],
                    [
                        "colorName" => "Carnival Red",
                        "price" => 300,
                        "image" => "/images/custom-collors/carnivalRed.jpg",
                        "base" => "/images/classics/scrambler1200X/scrambler1200XSapphireRed.png",
                        "reversed" => "/images/classics/scrambler1200X/scrambler1200XSapphireRedReversed.png"
                    ]
                ],
                "gallery" => [
                    "modelImage" => [
                        "src" => "/images/classics/scrambler1200XcMy23Model.png",
                        "alt" => "Scrambler 1200 XC (MY23)"
                    ],
                    "promoYoutubeVideo" => [
                        "src" => "https://www.youtube.com/embed/VGfZx5iHsAk",
                        "alt" => "Scrambler 1200 X"
                    ]
                ],
                "shortSpecInfo" => [
                    "info1" => "1,200cc Bonneville дво-цилинричен мотор",
                    "info2" => "Максимална Сила - 90 PS",
                    "info3" => "Максимален Вртежен Момент - 110 Nm"
                ],
                "subFamilyPromo" => [
                    "title" => "Scrambler 1200 X",
                    "desc" => "Со мала висина на седиштето и одлична ергономија, Scrambler 1200 X нуди самодоверба на патиштата и надвор од нив."
                ],
                "bikePageCarousell" => [
                    [
                        "title" => "Комфортна Возачка Позиција",
                        "desc" => "Со предно тркало од 21 инчи и ниско седиште, 1200 X нуди одлична и командна возачка позиција која инспирира самодоверба за уште повеќе забава при вашите off-road авантури.",
                        "image" => "/images/classics/scrambler1200X/scrambler1200XCBikeCaro1.avif"
                    ],
                    [
                        "title" => "ABS / Систем за Пролизгување",
                        "desc" => "Најновиот оптимизиран ABS систем и системот за пролизгување доаѓаат како стандардна на новиот 1200 Х и нудат уште повисоко ниво на контрола, самодоверба и сигурност во сите временски прилики.",
                        "image" => "/images/classics/scrambler1200X/scrambler1200XCBikeCaro2.avif"
                    ],
                    [
                        "title" => "Аксесоари",
                        "desc" => "Повеќе од 60 оригинални Triumph аксесоари се достапни за персонализирање на вашиот мотор. Од парчиња кои ќе додадат уште малку повеќе стил па се до оригинален багаж.",
                        "image" => "/images/classics/scrambler1200X/scrambler1200XCBikeCaro3.avif"
                    ],
                    [
                        "title" => "Мотор",
                        "desc" => "Дво-цилиндарскиот Bonneville 1200cc мотор нуди многу сила и одлична респонзивност која се карактеризира со силен обртен момент и со предвидливо забрзување.",
                        "image" => "/images/classics/scrambler1200X/scrambler1200XCBikeCaro4.avif"
                    ],
                    [
                        "title" => "Квалитет и Завршница",
                        "desc" => "Одлично изработени, со прекрасни завршници и одлични бои и графици и алуминиумските детали и акценти - тоа се зборовите на многу возачи сопственици на 1200 X серијата.",
                        "image" => "/images/classics/scrambler1200X/scrambler1200XCBikeCaro5.avif"
                    ],
                    [
                        "title" => "Висина на Седиште",
                        "desc" => "Со само 830mm растојание од седиштето до земјиното тло, 1200 Х серијата има 50mm пониско седиште од ХЕ сееријата и нуди одлично ниво на комоција. Дополнително седиште за намалување на висината за уште 25mm е достапно како аксесоар.",
                        "image" => "/images/classics/scrambler1200X/scrambler1200XCBikeCaro6.avif"
                    ],
                    [
                        "title" => "Суспензија",
                        "desc" => "Marzocchi суспензијата која е изработена специјално за Scrambler серијата испорачува високо ниво на комодитет.",
                        "image" => "/images/classics/scrambler1200X/scrambler1200XCBikeCaro7.avif"
                    ],
                    [
                        "title" => "Технологија",
                        "desc" => " На роспалагање на возачите им се 5 мода на работа како и најновите и оптимизирани ABS и систем за пролизгување. За целосно контрола и сигурност мултифункционалниот дисплеј на воланот ги испорачува сите потребни информации за безбедна авантура.",
                        "image" => "/images/classics/scrambler1200X/scrambler1200XCBikeCaro8.avif"
                    ],
                    [
                        "title" => "Вредност",
                        "desc" => "Со високи перформанси и одлична стандардна опрема и лесната одржливост на моторот и долг сервисен интервал, Scrambler 1200 X е правилен избор за секој ентузијаст и одлична вредност да се има во своја сопственост.",
                        "image" => "/images/classics/scrambler1200X/scrambler1200XCBikeCaro9.avif"
                    ]
                ]
            ],
            [
                "id" => 180,
                "title" => "Scrambler 1200 XC",
                "model" => "scrambler-1200-xc",
                "category" => "classics",
                "subFamilyCategory" => "scrambler-1200",
                "edition" => "classics",
                "price" => 16490,
                "customizationColors" => [
                    [
                        "colorName" => "Saphire Black",
                        "price" => null,
                        "image" => "/images/custom-collors/sapphireBlack.jpg",
                        "base" => "/images/classics/scrambler1200XC/scrambler1200XCSapphireBlack.png",
                        "reversed" => "/images/classics/scrambler1200XC/scrambler1200XCSapphireBlackReversed.png",
                    ],
                    [
                        "colorName" => "Matt Khaki Green / Matt Jet Black",
                        "price" => 400,
                        "image" => "/images/custom-collors/mattKhakiGreeenMattJetBlack.jpg",
                        "base" => "/images/classics/scrambler1200XC/scrambler1200XCKhaki.png",
                        "reversed" => "/images/classics/scrambler1200XC/scrambler1200XCKhakiReversed.png",
                    ],
                    [
                        "colorName" => "Carnival Red / Jet Black",
                        "price" => 300,
                        "image" => "/images/custom-collors/carnivalRedSapphireBlack.jpg",
                        "base" => "/images/classics/scrambler1200XC/scrambler1200XCRed.png",
                        "reversed" => "/images/classics/scrambler1200XC/scrambler1200XCRedReversed.png"
                    ]
                ],
                "gallery" => [
                    "modelImage" => [
                        "src" => "/images/classics/scrambler1200XcMy23Model.png",
                        "alt" => "Scrambler 1200 XC (MY23)"
                    ],
                    "promoYoutubeVideo" => [
                        "src" => "https://www.youtube.com/embed/o94-LGnQpc8",
                        "alt" => "Scrambler 1200 XC"
                    ]
                ],
                "shortSpecInfo" => [
                    "info1" => "1,200cc Bonneville дво-цилинричен мотор",
                    "info2" => "Максимална Сила - 90 PS",
                    "info3" => "Максимален Вртежен Момент - 110 Nm"
                ],
                "subFamilyPromo" => [
                    "title" => "Scrambler 1200 XC",
                    "desc" => "Одличните перформанси, можности и стил на Scrambler 1200 серијата но уште по достапна. Со мала висина на седиштето и одлична ергономија, Scrambler 1200 XC нуди самодоверба на патиштата и надвор од нив."
                ],
                "bikePageCarousell" => [
                    [
                        "title" => "1200cc Мотор",
                        "desc" => "1200cc дво-цилиндичниот Bonneville мотор испорачува одличен обртен момент и препознатлив Scrambler звук.",
                        "image" => "/images/classics/scrambler1200XC/scrambler1200XCBikeCaro1.avif"
                    ],
                    [
                        "title" => "Издувен Систем",
                        "desc" => "Издувниот систем на Scrambler 1200 XS се состои од две издувни цевки кои се високо монтирани за уште повеќе стил и уште погласен звук.",
                        "image" => "/images/classics/scrambler1200XC/scrambler1200XCBikeCaro2.avif"
                    ],
                    [
                        "title" => "технологија",
                        "desc" => "Темпомат, „Ride-By-Wire“, Разни модови на работа, ABS и TFT инструментната табла се само дел неколкуте технолошки елементи кои се вградени во SCrambler 1200 XC.",
                        "image" => "/images/classics/scrambler1200XC/scrambler1200XCBikeCaro3.avif"
                    ],
                    [
                        "title" => "Мод на работа",
                        "desc" => "На располагање се 5 модови на работа: Road, Rain, Sport, Off-Road & Rider Cunfigurable.",
                        "image" => "/images/classics/scrambler1200XC/scrambler1200XCBikeCaro4.avif"
                    ],
                    [
                        "title" => "TFT Екран",
                        "desc" => "Лесен за користење и со одличен дисплеј овој систем ги обезбедува сите потребни информации кои ви се потребни како возач.",
                        "image" => "/images/classics/scrambler1200XC/scrambler1200XCBikeCaro5.avif"
                    ],
                    [
                        "title" => "Осветлени Копчиња",
                        "desc" => "Инутитивни и осветлени команди на рачките се присутни на воланот на Scrambler 1200 XC серијата и преку нив можете лесно да ја конфигурирате инструментната табла и да пристапите до сите функции на моторот.",
                        "image" => "/images/classics/scrambler1200XC/scrambler1200XCBikeCaro6.avif"
                    ],
                    [
                        "title" => "Спецификации",
                        "desc" => "Одличните спецификации и опрема од висока технологија овозможуваа одлични all-road можности.",
                        "image" => "/images/classics/scrambler1200XC/scrambler1200XCBikeCaro7.avif"
                    ],
                    [
                        "title" => "Scrambler Рамка",
                        "desc" => "Специјално дизајнираната рамка е дизајнирана за сите екстремни подлоги и екстремни авантури.",
                        "image" => "/images/classics/scrambler1200XC/scrambler1200XCBikeCaro8.avif"
                    ],
                    [
                        "title" => "Суспензија",
                        "desc" => "Одличната Showa суспензија и двојните Ohlins RSU задни амортизери даваат одлично ниво на комоција и контрола.",
                        "image" => "/images/classics/scrambler1200XC/scrambler1200XCBikeCaro9.avif"
                    ],
                    [
                        "title" => "Сопирачки",
                        "desc" => "Одличните Brembo Monobloc М50 предни клешти и диск од 320mm дваат одлични перформанси кога е во прашање запирањето.",
                        "image" => "/images/classics/scrambler1200XC/scrambler1200XCBikeCaro10.avif"
                    ]
                ],
                "bikePagePromo" => [
                    [
                        "title" => "Автентичен Scrambler Стил",
                        "desc" => "Одличен модерно класичен стил со одлични финиши и детали, како малите алуминиумски делови додаваат уште повеќе стил и луксуз на оваа серија.",
                        "image" => "/images/classics/scrambler1200XC/scrambler1200XCBikePromo1.avif"
                    ],
                    [
                        "title" => "All-Road",
                        "desc" => "Scrambler 1200 XC е дизајнирана за користење на секакви подлоги како на асфалтот така и off-road авантури.",
                        "image" => "/images/classics/scrambler1200XC/scrambler1200XCBikePromo1.avif"
                    ]
                ]
            ],
            [
                "id" => 33,
                "title" => "Scrambler 1200 XE",
                "model" => "scrambler-1200-xe-2023",
                "category" => "classics",
                "subFamilyCategory" => "scrambler-1200",
                "edition" => "classics",
                "price" => 17490,
                "customizationColors" => [
                    [
                        "colorName" => "Saphire Black",
                        "price" => null,
                        "image" => "/images/custom-collors/sapphireBlack.jpg",
                        "base" => "/images/classics/scrambler1200XE/scrambler1200XEBlack.png",
                        "reversed" => "/images/classics/scrambler1200XE/scrambler1200XEBlackReversed.png",
                    ],
                    [
                        "colorName" => "Phantom Black / Storm Gray",
                        "price" => 400,
                        "image" => "/images/custom-collors/phantomBlackStormGrey.jpg",
                        "base" => "/images/classics/scrambler1200XE/scrambler1200XEBlackGray.png",
                        "reversed" => "/images/classics/scrambler1200XE/scrambler1200XEBlackGrayReversed.png",
                    ],
                    [
                        "colorName" => "Baja Orange / Phantom Black",
                        "price" => 400,
                        "image" => "/images/custom-collors/bajaOrangePhantomBlack.jpg",
                        "base" => "/images/classics/scrambler1200XE/scrambler1200XEOrange.png",
                        "reversed" => "/images/classics/scrambler1200XE/scrambler1200XEOrangeReversed.png"
                    ]
                ],
                "gallery" => [
                    "modelImage" => [
                        "src" => "/images/classics/scrambler1200XE/scrambler1200XEBlack.png",
                        "alt" => "Scrambler 1200 XE (MY23)"
                    ],
                    "promoYoutubeVideo" => [
                        "src" => "https://www.youtube.com/embed/wBV6E_kE7dc",
                        "alt" => "Scrambler 1200 XE"
                    ]
                ],
                "shortSpecInfo" => [
                    "info1" => "1,200cc Bonneville дво-цилинричен мотор",
                    "info2" => "Максимална јачина - 90 PS и вртежен момент - 110 Nm.",
                    "info3" => "Scrambler наменет за секого."
                ],
                "subFamilyPromo" => [
                    "title" => "Scrambler 1200 XE",
                    "desc" => "Извонредно off-road искуство со одлични перформанси и на патиштата, новиот Scrambler 1200 XE е најдобриот Scrambler."
                ],
                "bikePageCarousell" => [
                    [
                        "title" => "Најдобри Перформанси во Класата",
                        "desc" => "Од одличната суспензија па се до Brembo сопирачките, Scrambler 1200 XE серијата поседува највисоко ниво на спецификации и високо квалитетни компоненти со цел да обезбеди одлична забава на секаков вид подлога.",
                        "image" => "/images/classics/scrambler1200XE/scrambler1200XEBikeCaro1.avif"
                    ],
                    [
                        "title" => "Прилагодлив волан и стапки за нозе",
                        "desc" => "Прилагодливио волан и прилагодливите стапки за носе овозможуваат секој возач да ја пронајде својата перфектна возачка позиција. Без разлика дали се возите низ град или по некоја off-road патека, Scrambler 1200 XE серијата е спремна да даде максимален комфорт левел во секој момент.",
                        "image" => "/images/classics/scrambler1200XE/scrambler1200XEBikeCaro2.avif"
                    ],
                    [
                        "title" => "Мотор",
                        "desc" => "Дво-цилиндарскиот 1200cc Bonneville мотор нуди многу коњски сили со уникатен Scrambler звук и се карактеризира со одлична респонзивност и богат обртен момент на секоја подлога.",
                        "image" => "/images/classics/scrambler1200XE/scrambler1200XEBikeCaro3.avif"
                    ],
                    [
                        "title" => "Издувен Систем / Звук",
                        "desc" => "Ре-дизајнираниот и одлично извајан издувен систем се состои од две високо монтирани издувни цевки обложени со топлинско отпорен материјал и произведува извонреден и уникатен Scrambler звук и стил.",
                        "image" => "/images/classics/scrambler1200XE/scrambler1200XEBikeCaro4.avif"
                    ],
                    [
                        "title" => "Стил",
                        "desc" => "Одличниот Scrambler стил доаѓа како производ од комбинирање на безвременската Scrambler силуета, off-road карактер и прекрасно изведени бои и финиши.",
                        "image" => "/images/classics/scrambler1200XE/scrambler1200XEBikeCaro5.avif"
                    ],
                    [
                        "title" => "Суспензија",
                        "desc" => "Суспензијата на Scrambler 1200 XE серијата доаѓа од Marzocchi и нуди 250mm отпор напред и двојни амортизери назад за целосна контрола и максимално ниво на комоција додека возите.",
                        "image" => "/images/classics/scrambler1200XE/scrambler1200XEBikeCaro6.avif"
                    ],
                    [
                        "title" => "Технологија",
                        "desc" => "Респонзивен систем за гас, ABS и системот за пролизгување се само мал дек од стандардните системи кои доаѓаат со 1200 XE серијата. Бројни други како темпомат, 6 модови на работа од кои две се специјализирани за off-road возење само го дополнуваат овој пакет.",
                        "image" => "/images/classics/scrambler1200XE/scrambler1200XEBikeCaro7.avif"
                    ],
                    [
                        "title" => "Аксесоари",
                        "desc" => "Scrambler 1200 XE е спремен за секаква можна авантура. Со неговата комфортна возачка позиција и рамно седиште спремни сте и за транс-континентални тури. Затоа на располагање ви се и многу оригинални Triumph аксесоари кои ќе ви помогнат при остварување на вашите цели. На располагање се парчиња за подобрување на стилот, нивото на заштита и сигурност како и елементи за багаж.",
                        "image" => "/images/classics/scrambler1200XE/scrambler1200XEBikeCaro8.avif"
                    ],
                    [
                        "title" => "Тркала и Пневматици",
                        "desc" => "Scrambler 1200 XE серијата носи жични тркала парирани со Metzelet Tourance dual-use tubuless пневматици спремни за секако терен. Со дијаметар од 21 инчи, предното тркало овозможува лесно да ги достигнете и терените кои се тешко достапни.",
                        "image" => "/images/classics/scrambler1200XE/scrambler1200XEBikeCaro9.avif"
                    ]
                ]
            ],
            [
                "id" => 34,
                "title" => "Bonneville Speedmaster",
                "model" => "speedmaster-2023",
                "category" => "classics",
                "subFamilyCategory" => "bonneville-speedmaster",
                "edition" => "classics",
                "price" => 16690,
                "customizationColors" => [
                    [
                        "colorName" => "Saphire Black",
                        "price" => null,
                        "image" => "/images/custom-collors/sapphireBlack.jpg",
                        "base" => "/images/classics/speedmaster/speedmasterBlack.png",
                        "reversed" => "/images/classics/speedmaster/speedmasterBlackReversed.png",
                    ],
                    [
                        "colorName" => "Cordovan Red",
                        "price" => 300,
                        "image" => "/images/custom-collors/cordovanRedFull.jpg",
                        "base" => "/images/classics/speedmaster/speedmasterRed.png",
                        "reversed" => "/images/classics/speedmaster/speedmasterRedReversed.png",
                    ],
                    [
                        "colorName" => "Pacific Blue / Silver Ice",
                        "price" => 500,
                        "image" => "/images/custom-collors/pacificBlueSilverIce.jpg",
                        "base" => "/images/classics/speedmaster/speedmasterBlackBlue.png",
                        "reversed" => "/images/classics/speedmaster/speedmasterBlackBlueReversed.png",
                    ],
                    [
                        "colorName" => "Phantom Red / Silver Red",
                        "price" => 900,
                        "image" => "/images/custom-collors/phantomRedSilverRed.png",
                        "base" => "/images/classics/speedmaster/speedmasterPhantomRed.png",
                        "reversed" => "/images/classics/speedmaster/speedmasterPhantomRedReversed.png"
                    ]
                ],
                "gallery" => [
                    "modelImage" => [
                        "src" => "/images/classics/bonnevilleSpeedmasterModel.png",
                        "alt" => "Bonneville Speedmaster"
                    ],
                    "promoYoutubeVideo" => [
                        "src" => "https://www.youtube.com/embed/eKmeKK7DjTc",
                        "alt" => "Bonneville Speedmaster"
                    ]
                ],
                "shortSpecInfo" => [
                    "info1" => "Автентична Bonneville ДНК",
                    "info2" => "1200cc Мотор",
                    "info3" => "Неверојатен Комфорт"
                ],
                "subFamilyPromo" => [
                    "title" => "Bonneville Speedmaster",
                    "desc" => "Класичен „custom“ карактер, комфортна крузерска возачка позиција и високи спецификации."
                ],
                "bikePageCarousell" => [
                    [
                        "title" => "Мотор со одличен Обртен момент",
                        "desc" => "1200cc дво-цилиндичниот Bonneville мотор испорачува одличен обртен момент и предвидлива сила. Истиот е Euro 5 компитабилен.",
                        "image" => "/images/classics/speedmaster/speedmasterBikeCaro1.avif"
                    ],
                    [
                        "title" => "Звук кој се издвојува од другите",
                        "desc" => "Уникатнното и иновативно решение околу филтрите за воздух и издувните цевки ко произведуваат оно богат, длабок и препознатлив Bonneville звук.",
                        "image" => "/images/classics/speedmaster/speedmasterBikeCaro2.avif"
                    ],
                    [
                        "title" => "Пропознатлив Custom Стил",
                        "desc" => "Наведнат волан, предно монтирани стапки за нозе, 16 инчните шичани тркала и луксузните финиши и детали го презентираат оној препознатлив Bonneville британски стил и карактер.",
                        "image" => "/images/classics/speedmaster/speedmasterBikeCaro3.avif"
                    ],
                    [
                        "title" => "Подобрено Седиште",
                        "desc" => "Со 11 милиметри повеќе сунгер и подобра потпора за половината, седиштето на Speedmaster нуди одличен комодотет за возачот и за сопатникот.",
                        "image" => "/images/classics/speedmaster/speedmasterBikeCaro4.avif"
                    ],
                    [
                        "title" => "Подобро Контрола",
                        "desc" => "Одличната агилност, комфорт и управување на Speedmaster е уште малку повеќе подобрено благодарејки на одличната Showa суспензија.",
                        "image" => "/images/classics/speedmaster/speedmasterBikeCaro5.avif"
                    ],
                    [
                        "title" => "Сопирачки",
                        "desc" => "Двојни 310mm предни дискови и дво-клипни Brembo клешти и самостојна Nissin клешта позади се одговорни за одличната сопирачка моќ на Speedmaster моторите. ABS системот доаѓа како стандард со секој мотор.",
                        "image" => "/images/classics/speedmaster/speedmasterBikeCaro6.avif"
                    ],
                    [
                        "title" => "Технологија",
                        "desc" => "ABS, системот за пролизгување, модовите за работа, LED осветлувањето се само некои од технолошките системи кои ви стојат на располагање со секој Speedmaster.",
                        "image" => "/images/classics/speedmaster/speedmasterBikeCaro7.avif"
                    ],
                    [
                        "title" => "Мулти-функционален Дисплеј",
                        "desc" => "Сите претходно наброени сигурносни системи и информации се лесно прикажани на мулти функционалниот дисплеј на Speedmaster. Со истиот лесно се ракува преку команди на рачките и истиот додава уште малку стил на предниот дел од моторот.",
                        "image" => "/images/classics/speedmaster/speedmasterBikeCaro8.avif"
                    ],
                    [
                        "title" => "Препознатливи Speedmaster Карактеристики",
                        "desc" => "Секој детал на моторот допринесува за да се изгради онаа препознатлива Speedmaster силуета и стил. Мотото на овој мотор е да се минимализира користењето на пластични елементи и да се доведе овој класик по модерни спецификации.",
                        "image" => "/images/classics/speedmaster/speedmasterBikeCaro9.avif"
                    ]
                ],
                "bikePagePromo" => [
                    [
                        "title" => "Спремен за Персонализација",
                        "desc" => "На располагање ви стои палета од 79 оригинални Triumph аксесоари и 3 различни бои кои ви овозможуваат максимално персонализирање на вашиот Speedmaster. Достапни се парчиња кои нудат повеќе стил, сигурност како и елементи за багаж.",
                        "image" => "/images/classics/speedmaster/speedmasterBikePromo1.avif"
                    ]
                ],
                "features" => [
                    [
                        "title" => "Систем за Пролизгување",
                        "desc" => "Ride-by-wire со автоматски систем за пролизгување"
                    ],
                    [
                        "title" => "Инструментна Плоча",
                        "desc" => "LCD дисплеј со аналоген мерач на брзина"
                    ],
                    [
                        "title" => "Темпомат",
                        "desc" => "Стандард"
                    ],
                    [
                        "title" => "Светло",
                        "desc" => "LED"
                    ],
                    [
                        "title" => "Имобилизатор",
                        "desc" => "Стандард"
                    ],
                    [
                        "title" => "Сервисен Интервал",
                        "desc" => "16,000км / 12 месеци сервисен интервал"
                    ]
                ],
                "bikePageImageGallery" => [
                    [
                        "alt" => "speedmasterBikeGalleryCaro1",
                        "src" => "/images/classics/speedmaster/speedmasterBikeGalleryCaro1.avif"
                    ]
                ]
            ],
            [
                "id" => 35,
                "title" => "Speed Twin 1200",
                "model" => "speed-twin-1200",
                "category" => "classics",
                "subFamilyCategory" => "speed-twin-1200",
                "edition" => "classics",
                "price" => 14590,
                "customizationColors" => [
                    [
                        "colorName" => "Jet Black",
                        "price" => null,
                        "image" => "/images/custom-collors/jetBlack.jpg",
                        "base" => "/images/classics/speedTwin1200/speedTwin1200Black.png",
                        "reversed" => "/images/classics/speedTwin1200/speedTwin1200BlackReversed.png",
                    ],
                    [
                        "colorName" => "Matt Ironstone / Matt Storm Gray",
                        "price" => 200,
                        "image" => "/images/custom-collors/mattIronstoneMattStormGrey.jpg",
                        "base" => "/images/classics/speedTwin1200/speedTwin1200MattSilver.png",
                        "reversed" => "/images/classics/speedTwin1200/speedTwin1200MattSilverReversed.png",
                    ],
                    [
                        "colorName" => "Carnival Red / Storm Gray",
                        "price" => 200,
                        "image" => "/images/custom-collors/carnivalRedStormGrey.jpg",
                        "base" => "/images/classics/speedTwin1200/speedTwin1200CarnivalRed.png",
                        "reversed" => "/images/classics/speedTwin1200/speedTwin1200CarnivalRedReversed.png",
                    ],
                    [
                        "colorName" => "Phantom Red / Silver Red",
                        "price" => 400,
                        "image" => "/images/custom-collors/phantomRedSilverRed.png",
                        "base" => "/images/classics/speedTwin1200/speedTwin1200PhantomRed.png",
                        "reversed" => "/images/classics/speedTwin1200/speedTwin1200PhantomRedReversed.png"
                    ]
                ],
                "gallery" => [
                    "modelImage" => [
                        "src" => "/images/classics/speedTwin1200Model.png",
                        "alt" => "Speed Twin 1200"
                    ],
                    "promoYoutubeVideo" => [
                        "src" => "https://www.youtube.com/embed/YbdA9MwBu5o",
                        "alt" => "Speed Twin 1200"
                    ]
                ],
                "shortSpecInfo" => [
                    "info1" => "Новата Stealth Edition Серија е Достапна"
                ],
                "subFamilyPromo" => [
                    "title" => "Speed Twin 1200",
                    "desc" => "Новите стандарди во класата на модерни „roadster“ класици - оригиналниот перформантен амблем евелоуираше во уште помеќен мотор."
                ],
                "bikePageCarousell" => [
                    [
                        "title" => "Суспензија",
                        "desc" => "Спремен да испорача неверојатно возачко искуство, Speed Twin 1200 насебе носи 43mm предна Marzocchi вилушка и задни дупли 120мм амортизери чија цврстина се прилагодува за да се добие максимален комфорт.",
                        "image" => "/images/classics/speedTwin1200/speedTwin1200BikeCaro1.avif"
                    ],
                    [
                        "title" => "Сопирачки",
                        "desc" => "За контролирано и сигурно запирање на Speed Twin 1200 се грижат, Brembo M50 сопирачките со двојни 320 милиметарски дискови и најновата генерација ABS систем.",
                        "image" => "/images/classics/speedTwin1200/speedTwin1200BikeCaro2.avif"
                    ],
                    [
                        "title" => "Мотор",
                        "desc" => "Најновите тестирања доведоа до унапредување на моторот во EURO 5 стандарди и пораст на максималната сила од 3 коњски сили со уште повеќе обртен момент при средни револуции на моторот за повеќе возбуда.",
                        "image" => "/images/classics/speedTwin1200/speedTwin1200BikeCaro3.avif"
                    ],
                    [
                        "title" => "Ергономија",
                        "desc" => "Speed Twin 1200 е возбудлив roadster и со себе ја носи онаа roadster и исправена но релаксирана возачка позиција која нуди максимален комфорт и спортски перформанси.",
                        "image" => "/images/classics/speedTwin1200/speedTwin1200BikeCaro4.avif"
                    ],
                    [
                        "title" => "Контрола",
                        "desc" => "Одличната ергономија и роадстер шасија комбинирана со одличната суспензија и пневматици испорачуваат агилност и будат чувства на самодоверба кај возачот на Speed Twin 1200.",
                        "image" => "/images/classics/speedTwin1200/speedTwin1200BikeCaro5.avif"
                    ],
                    [
                        "title" => "Инструментна Плоча",
                        "desc" => "Модерно-класичните инструменти поставени во хоризонтална линија одлично ги прикажуваат сите витални информации преку лесниото за користење мени кој е лесно пристаплив преку командите покрај рачките на воланот на моторот.",
                        "image" => "/images/classics/speedTwin1200/speedTwin1200BikeCaro6.avif"
                    ],
                    [
                        "title" => "Модерни Способности",
                        "desc" => "Напредни возачки програми, систем за пролизгување, ABS, LED осветлувањето и лесното квачило се само дел од стандардните системи и компоненти кои му го олеснуваат животот на возачот.",
                        "image" => "/images/classics/speedTwin1200/speedTwin1200BikeCaro7.avif"
                    ],
                    [
                        "title" => "Возачки Програми",
                        "desc" => "На располагање на возачите се три возачки програми. Секоја од нив си има свои карактеристики и различно ја мапира апликацијата за гас како и системот за пролизгување и ABS.",
                        "image" => "/images/classics/speedTwin1200/speedTwin1200BikeCaro8.avif"
                    ],
                    [
                        "title" => "Издувен Систем",
                        "desc" => "Дизајниран за повеќе перформанси и естетика, челилниот издувен систем го испорачува оној препознатлив „roadster“ звук а со фактот дека издувните цевки се монтирани во нагорен агол оддава и дополнителен стил и карактер.",
                        "image" => "/images/classics/speedTwin1200/speedTwin1200BikeCaro9.avif"
                    ],
                    [
                        "title" => "Гуми и Тркала",
                        "desc" => "Metzeler Racetec RR пневматиците во пар со лесните лиени алуминиумски 12 кракни тркала нудат перфектна комбинација на тракција, стабилност на големи брзини и агилност во секој момент од возењето.",
                        "image" => "/images/classics/speedTwin1200/speedTwin1200BikeCaro10.avif"
                    ]
                ],
                "bikePagePromo" => [
                    [
                        "title" => "Стил и Дизајн",
                        "desc" => "Специјална палета на бои и луксузни финиши во комбинација на луксузни детали го направија најубавиот Speed Twin досега. Перфектно избалансиран со одличен стил.",
                        "image" => "/images/classics/speedTwin1200/speedTwin1200BikePromo1.avif"
                    ]
                ],
                "features" => [
                    [
                        "title" => "Систем за Пролизгување",
                        "desc" => "Ride-by-wire со автоматски систем за пролизгување"
                    ],
                    [
                        "title" => "Возачки Програми",
                        "desc" => "3 - Road, Rain & Sport"
                    ],
                    [
                        "title" => "Светло",
                        "desc" => "LED"
                    ],
                    [
                        "title" => "Имобилизатор",
                        "desc" => "Стандард"
                    ],
                    [
                        "title" => "USB влез",
                        "desc" => "Стандард"
                    ],
                    [
                        "title" => "Сервисен Интервал",
                        "desc" => "16,000км / 12 месеци сервисен интервал"
                    ]
                ]
            ],
            [
                "id" => 36,
                "title" => "Scrambler 900",
                "model" => "scrambler-900",
                "category" => "classics",
                "subFamilyCategory" => "scrambler-900",
                "edition" => "900cc",
                "desc" => "Дрзок off-road карактер, врвна агилност и иконичен стил, со перформанси за забава на секаков терен.",
                "price" => 12290,
                "customizationColors" => [
                    [
                        "colorName" => "Jet Black",
                        "price" => null,
                        "image" => "/images/custom-collors/jetBlack.jpg",
                        "base" => "/images/classics/scrambler900/scrambler900Black.png",
                        "reversed" => "/images/classics/scrambler900/scrambler900BlackReversed.png",
                    ],
                    [
                        "colorName" => "Cosmic Yellow / Graphite",
                        "price" => 200,
                        "image" => "/images/custom-collors/cosmicYellowGraphite.jpg",
                        "base" => "/images/classics/scrambler900/scrambler900Yellow.png",
                        "reversed" => "/images/classics/scrambler900/scrambler900YellowReversed.png",
                    ],
                    [
                        "colorName" => "Matt Khaki",
                        "price" => 200,
                        "image" => "/images/custom-collors/mattKhaki.jpg",
                        "base" => "/images/classics/scrambler900/scrambler900Khaki.png",
                        "reversed" => "/images/classics/scrambler900/scrambler900KhakiReversed.png",
                    ],
                    [
                        "colorName" => "Phantom Orange / Silver Orange",
                        "price" => 600,
                        "image" => "/images/custom-collors/phamtomOrangeSilverOrange.png",
                        "base" => "/images/classics/scrambler900/scrambler900PhantomOrange.png",
                        "reversed" => "/images/classics/scrambler900/scrambler900PhantomOrangeReversed.png"
                    ]
                ],
                "gallery" => [
                    "modelImage" => [
                        "src" => "/images/classics/scrambler900Model.png",
                        "alt" => "Scrambler 900"
                    ],
                    "promoYoutubeVideo" => [
                        "src" => "https://www.youtube.com/embed/wDDvTxWtiks",
                        "alt" => "Scrambler 900"
                    ]
                ],
                "shortSpecInfo" => [
                    "info1" => "Scrambler Стил и Карактер",
                    "info2" => "Bonneville 900cc Мотор"
                ],
                "subFamilyPromo" => [
                    "title" => "Scrambler 900",
                    "desc" => "Пропознатлив стил и off-road карактер со одлични перфоманси и можности за уште поголема off-road забава."
                ],
                "bikePageCarousell" => [
                    [
                        "title" => "Scrambler Стил",
                        "desc" => "Автентичен Triumph Scrambler стил со минимална употреба на пластика и одлична силуета со дизајнерски чисти линии. Финиширано со луксузни бои и шематици и многу внимание на детали.",
                        "image" => "/images/classics/scrambler900/scrambler900BikeCaro1.avif"
                    ],
                    [
                        "title" => "Scrambler 900",
                        "desc" => "Scrambler 900 доаѓа со еден куп мали детали кои ги даваат ушта трошка повеќе стил и карактер. Некои од нив се алуминиумската странична плоча со изгравирано Triumph лого, нов држач за светлото и уште многу други кои ќе ги оставниме на вас да ги откриете.",
                        "image" => "/images/classics/scrambler900/scrambler900BikeCaro2.avif"
                    ],
                    [
                        "title" => "Bonneville 900cc мотор",
                        "desc" => "Возбудливи перформани со максимална сила до 65 коњски сили и максимален обртен момент од 80Nm. EURO 5 компитабилниот Bonneville 900cc мотор нуди одлична сила при целиот обсег на револуции на моторот.",
                        "image" => "/images/classics/scrambler900/scrambler900BikeCaro3.avif"
                    ],
                    [
                        "title" => "Високи Стандарди",
                        "desc" => "„Ride-By-Wire“ технологијата оддава одлично чувство на сигурност и контрола додека возите, додека EURO 5 моторот се грижи и за околината околу вас.",
                        "image" => "/images/classics/scrambler900/scrambler900BikeCaro4.avif"
                    ],
                    [
                        "title" => "Ергономија",
                        "desc" => "Ниското седиште на Scrambler 900 серијата го прави овој мотор пристапен за секого, агилен во сите тесни градски средини и го подига нивото на самодоверба кај возачот.",
                        "image" => "/images/classics/scrambler900/scrambler900BikeCaro5.avif"
                    ],
                    [
                        "title" => "Scrambler Рамка",
                        "desc" => "Уникатната Scrambler рамка, широкиот алуминиумски волан како и стапките за нозе монтирани во средишниот дел од моторот, нудат командна исправена возачка позиција за подобра контрола врз моторот во секоја средина.",
                        "image" => "/images/classics/scrambler900/scrambler900BikeCaro6.avif"
                    ],
                    [
                        "title" => "Суспензија",
                        "desc" => "Вилушката (120мм) нуди одличен комфорт на сите терени, а со нејзиниот сив финиш и црни гумени манжетни го подобрува и самиот изглед на моторот.",
                        "image" => "/images/classics/scrambler900/scrambler900BikeCaro7.avif"
                    ],
                    [
                        "title" => "Тркала",
                        "desc" => "19 инчното предно тркало уште повеќе помага за да се постигне оптималната исправена возачка позиција, додека Metzeler Tourance пневматиците даваат одлична тракција и траат многу подолго од конкуренцијата.",
                        "image" => "/images/classics/scrambler900/scrambler900BikeCaro8.avif"
                    ],
                    [
                        "title" => "Самодоверба",
                        "desc" => "Одличниот Brembo сопирачки систем, „Ride-By-Wire“ технологијата како и лесното квачило уште повеќе ја подобруваат комоцијата и будат самодоверба за уште повеќе авантури.",
                        "image" => "/images/classics/scrambler900/scrambler900BikeCaro9.avif"
                    ],
                    [
                        "title" => "Ниско Седиште",
                        "desc" => "Со минимална висина од 790 милиметри, Scrambler 900 е достапен и комфортен за возачи од секакви димензии.",
                        "image" => "/images/classics/scrambler900/scrambler900BikeCaro10.avif"
                    ],
                    [
                        "title" => "Технологија",
                        "desc" => "ABS системот ве чува на сигурно но и дозволува малку забава, додека системот за пролизгување асистира при губење на тракцијата.",
                        "image" => "/images/classics/scrambler900/scrambler900BikeCaro11.avif"
                    ],
                    [
                        "title" => "Возачки Програми",
                        "desc" => "Изберете помеѓу: Road, Rain и Off-Road програмот. Секоја од овие програми самостојно ги адаптира респонзивноста, ABS и системот за пролизгување за да постигне оптимални резултати според подлогата.",
                        "image" => "/images/classics/scrambler900/scrambler900BikeCaro12.avif"
                    ]
                ],
                "bikePagePromo" => [
                    [
                        "title" => "Оригинални Triumph Аксесоари",
                        "desc" => "Од off-road омагало до парчиња кои ќе го направат вашето секојдневно патување уште полесно. Со повеќе од 120 аксесоари создадени паралелно со моторот, сигурни сме дека ќе најдете перфектно парче за вас.",
                        "image" => "/images/classics/speedmaster/speedmasterBikePromo1.avif"
                    ],
                    [
                        "title" => "Достапен и Забавен",
                        "desc" => "Со можноста за деградирање на моторот во А2 возачка категорија со помош на сетот за прилагодување на вашиот мотор во А2 возачка категорија, Sсrambler 900 е достапен за секого па дури и за најновите возачи.",
                        "image" => "/images/classics/speedmaster/speedmasterBikePromo1.avif"
                    ]
                ],
                "features" => [
                    [
                        "title" => "Мотор",
                        "desc" => "900cc - EURO 5"
                    ],
                    [
                        "title" => "А2 Лиценца",
                        "desc" => "Достапно со А2 сетот"
                    ],
                    [
                        "title" => "Систем за Пролизгување",
                        "desc" => "Ride-by-wire со автоматски систем за пролизгување"
                    ],
                    [
                        "title" => "Возачки Програми",
                        "desc" => "3 - Road, Rain & Off-Road"
                    ],
                    [
                        "title" => "Темпомат",
                        "desc" => "Стандард"
                    ],
                    [
                        "title" => "Светло",
                        "desc" => "LED"
                    ],
                    [
                        "title" => "Имобилизатор и USB влез",
                        "desc" => "Стандард"
                    ],
                    [
                        "title" => "Сервисен Интервал",
                        "desc" => "16,000км / 12 месеци сервисен интервал"
                    ]
                ],
                "bikePageImageGallery" => [
                    [
                        "alt" => "scrambler900BikeGalleyCaro1",
                        "src" => "/images/classics/scrambler900/scrambler900BikeGalleyCaro1.avif"
                    ]
                ]
            ],
            [
                "id" => 37,
                "title" => "Bonneville T100",
                "model" => "t100-2023",
                "category" => "classics",
                "subFamilyCategory" => "bonneville-t100",
                "edition" => "900cc",
                "desc" => "Bonneville T100 - еволуција на иконичен мотор сега уште полесен и посиле.",
                "price" => 11990,
                "customizationColors" => [
                    [
                        "colorName" => "Jet Black",
                        "price" => null,
                        "image" => "/images/custom-collors/jetBlack.jpg",
                        "base" => "/images/classics/bonnevilleT100/t100Black.png",
                        "reversed" => "/images/classics/bonnevilleT100/t100BlackReversed.png",
                    ],
                    [
                        "colorName" => "Carnival Red / Fusion White",
                        "price" => 400,
                        "image" => "/images/custom-collors/carnivalRedWhite.jpg",
                        "base" => "/images/classics/bonnevilleT100/t100RedWhite.png",
                        "reversed" => "/images/classics/bonnevilleT100/t100RedWhiteReversed.png",
                    ],
                    [
                        "colorName" => "Competition green / Ironstone",
                        "price" => 400,
                        "image" => "/images/custom-collors/competitionGreenIronstone.jpg",
                        "base" => "/images/classics/bonnevilleT100/t10CompGreen.png",
                        "reversed" => "/images/classics/bonnevilleT100/t10CompGreenReversed.png",
                    ],
                    [
                        "colorName" => "Cobalt Blue",
                        "price" => 400,
                        "image" => "/images/custom-collors/phantomBlueSilverBlue.png",
                        "base" => "/images/classics/bonnevilleT100/t100CobaltBlue.png",
                        "reversed" => "/images/classics/bonnevilleT100/t100CobaltBlueReversed.png"
                    ]
                ],
                "gallery" => [
                    "modelImage" => [
                        "src" => "/images/classics/bonnevilleT100/t100Black.png",
                        "alt" => "Bonneville T100"
                    ],
                    "promoYoutubeVideo" => [
                        "src" => "https://www.youtube.com/embed/uGT-PKMSML4",
                        "alt" => "T100 Youtube Video"
                    ]
                ],
                "shortSpecInfo" => [
                    "info1" => "Новата Stealth Edition Серија е Достапна"
                ],
                "subFamilyPromo" => [
                    "title" => "Bonneville T100",
                    "desc" => "Со препознатливите линии на легендарната Triumph classics фамилија, Т100 серијата нуди препознатлив стил, одлично управување и одлични перформанси."
                ],
                "bikePageCarousell" => [
                    [
                        "title" => "Одлични Перформанси",
                        "desc" => "Одличниот 900cc линиски дво-цилиндарски мотор е неверојатно лесен и респонзивен и со 10 коњски сили (65PS @ 7,400 RPM) повеќе од својот претходник.",
                        "image" => "/images/classics/bonnevilleT100/t100BikeCaro1.avif"
                    ],
                    [
                        "title" => "Возачко Искуство кои буди Самодоверба",
                        "desc" => "Малата вкупна тежина на моторот и одличната суспензија испорачуваат агилност што значи дека Т100 серијата стана уште полесна за возење и буди чувство на самодоверба уште од првиот допир на возачот со воланот.",
                        "image" => "/images/classics/bonnevilleT100/t100BikeCaro2.avif"
                    ],
                    [
                        "title" => "Одлични Сопирачки",
                        "desc" => "Комбиниран со најновата технологија на ABS систем, Brembo сопирачките испорачуваат одлична сопирачка моќ и оддаваат одлично чувство додека ги аплицирате.",
                        "image" => "/images/classics/bonnevilleT100/t100BikeCaro3.avif"
                    ],
                    [
                        "title" => "Ергономија и Комфорт",
                        "desc" => "Комотното дупло седиште со висина од 790 милиметри испорачува релаксирана возачка позиција додека лесно квачило и интуитивните команди на воланот будат самодоверба и овозможуваат возење без никакви грижи.",
                        "image" => "/images/classics/bonnevilleT100/t100BikeCaro4.avif"
                    ],
                    [
                        "title" => "Тркала и Пневматици",
                        "desc" => "Класични 32 жични тркала во пар со Michelin Road Classic невматиците се одличен избор за сигурна и безгрижна авантура.",
                        "image" => "/images/classics/bonnevilleT100/t100BikeCaro5.avif"
                    ],
                    [
                        "title" => "Вградена технологија",
                        "desc" => "Компакта технологија која е фокусирана на возачот нуди најнов систем ABS и систем за пролизгување без да се вмеша во дизајнот на моторот.",
                        "image" => "/images/classics/bonnevilleT100/t100BikeCaro6.avif"
                    ],
                    [
                        "title" => "Стил и Завршница",
                        "desc" => "Т100 со себе го носи оној автентичен Bonneville стил и тоа во избор од три класични бои. Рачно офарбаните линии на резервоарот и некои црни детали ги мешаат традиционалните елементи во новиот но препознатлив Bonneville стил.",
                        "image" => "/images/classics/bonnevilleT100/t100BikeCaro7.avif"
                    ],
                    [
                        "title" => "Инструменти",
                        "desc" => "Лесни за читање во секакви средини, лесни за користење и корисни во секој момент.",
                        "image" => "/images/classics/bonnevilleT100/t100BikeCaro8.avif"
                    ],
                    [
                        "title" => "Сигурност",
                        "desc" => "LED осветлувањето, Brembo системот за сопирање, ABS и системот за пролизгување се тука за да се чувствувате сигурни и безбедни во секакви услови.",
                        "image" => "/images/classics/bonnevilleT100/t100BikeCaro9.avif"
                    ]
                ],
                "bikePagePromo" => [
                    [
                        "title" => "Супериорна завршница и Квалитет",
                        "desc" => "Богати хром детали, сјајна боја и рачно офарбани детали на препознатливиoт Bonneville резервоар.",
                        "image" => "/images/classics/bonnevilleT100/t100BikePromo1.avif"
                    ],
                    [
                        "title" => "Аксесоари",
                        "desc" => "Палета од 117 оригинални Triumph аксесоари спремни за да го персонализирате вашиот T100. Специјален багаж и парчиња кои ја подобруваат комоцијата, стилот и безбедноста, заштитата дизајнирани перфектно да се вметнат во линијата на Т100.",
                        "image" => "/images/classics/bonnevilleT100/t100BikePromo2.avif"
                    ]
                ],
                "features" => [
                    [
                        "title" => "Систем за Пролизгување",
                        "desc" => "Ride-by-wire со автоматски систем за пролизгување"
                    ],
                    [
                        "title" => "Сопирачки",
                        "desc" => "Brembo напред / Nissin назад"
                    ],
                    [
                        "title" => "Тркала",
                        "desc" => "Жични (32 жици)"
                    ],
                    [
                        "title" => "Инструментна Плоча",
                        "desc" => "LCD дисплеј со аналоген мерач на брзина"
                    ],
                    [
                        "title" => "Светло",
                        "desc" => "LED задно светло"
                    ],
                    [
                        "title" => "USB влез",
                        "desc" => "Под Седиште"
                    ],
                    [
                        "title" => "Имобилизатор",
                        "desc" => "Стандард"
                    ],
                    [
                        "title" => "Сервисен Интервал",
                        "desc" => "16,000км / 12 месеци сервисен интервал"
                    ]
                ],
                "bikePageImageGallery" => [
                    [
                        "alt" => "t120BikeGalleryCaro1",
                        "src" => "/images/classics/bonnevilleT100/t120BikeGalleryCaro1.avif"
                    ]
                ]
            ],
            [
                "id" => 38,
                "title" => "Bonneville T120",
                "model" => "t120-2023",
                "category" => "classics",
                "subFamilyCategory" => "bonneville-t120",
                "edition" => "classics",
                "price" => 14690,
                "customizationColors" => [
                    [
                        "colorName" => "Jet Black",
                        "price" => null,
                        "image" => "/images/custom-collors/jetBlack.jpg",
                        "base" => "/images/classics/bonnevilleT120/bonnevillieT120Black.png",
                        "reversed" => "/images/classics/bonnevilleT120/bonnevillieT120BlackReversed.png",
                    ],
                    [
                        "colorName" => "Cordovan Red / Silver Ice",
                        "price" => 300,
                        "image" => "/images/custom-collors/cordovanRed.jpg",
                        "base" => "/images/classics/bonnevilleT120/bonnevillieT120Red.png",
                        "reversed" => "/images/classics/bonnevilleT120/bonnevillieT120RedReversed.png",
                    ],
                    [
                        "colorName" => "Jet Black / Fusion White",
                        "price" => 300,
                        "image" => "/images/custom-collors/whiteJetBlack.jpg",
                        "base" => "/images/classics/bonnevilleT120/bonnevillieT120WhiteJetBlack.png",
                        "reversed" => "/images/classics/bonnevilleT120/bonnevillieT120WhiteJetBlackReversed.png",
                    ],
                    [
                        "colorName" => "Chrome / Meriden Blue",
                        "price" => 800,
                        "image" => "/images/custom-collors/chromeMeridianBlue.avif",
                        "base" => "/images/classics/bonnevilleT120/t120ChromeEdition-MeridenBlueChrome.avif",
                        "reversed" => "/images/classics/bonnevilleT120/t120ChromeEdition-MeridenBlueChrome.avif",
                    ],
                    [
                        "colorName" => "Phantom Blue / Silver Blue",
                        "price" => 800,
                        "image" => "/images/custom-collors/phantomBlueSilverBlue.png",
                        "base" => "/images/classics/bonnevilleT120/bonnevillieT120PhantomBlue.png",
                        "reversed" => "/images/classics/bonnevilleT120/bonnevillieT120PhantomBlueReversed.png"
                    ]
                ],
                "gallery" => [
                    "modelImage" => [
                        "src" => "/images/classics/bonnevilleT120/bonnevillieT120Red.png",
                        "alt" => "Bonneville T120"
                    ],
                    "promoYoutubeVideo" => [
                        "src" => "https://www.youtube.com/embed/8UnwjQO-RN0",
                        "alt" => "Bonnevile t120"
                    ]
                ],
                "shortSpecInfo" => [
                    "info1" => "Новата Stealth Edition Серија е Достапна"
                ],
                "subFamilyPromo" => [
                    "title" => "Bonneville T120",
                    "desc" => "Оригиналната силуета и стил на легендардниот Bonneville - со луксузен и модерен финиш, унапредени перформанси и препознатлив Bonneville карактер."
                ],
                "bikePageCarousell" => [
                    [
                        "title" => "Хром Детали",
                        "desc" => "Дизајниран и изработен до перфекција, богатиот високо квалитетен хром финиш е аплициран на специјално одбрани делови како издувните цевки со цел да се постигне оној автентичен стил на Bonneville.",
                        "image" => "/images/classics/bonnevilleT120/t120BikeCaro1.avif"
                    ],
                    [
                        "title" => "Дво Цилиндарски - 1200cc K.EC Мотор",
                        "desc" => "Отсега Euro 5 омпитабилен, дво цилиндарскиот линиски мотор, го чува својот карактер, звук а најважно и неговите перформанси но со малку поостра респонзивност.",
                        "image" => "/images/classics/bonnevilleT120/t120BikeCaro2.avif"
                    ],
                    [
                        "title" => "Контрола",
                        "desc" => "Алуминиумските тркала и суспензијата нудат агилност и комфорт а со тоа го подобруваат и забрзувањето на моторот.",
                        "image" => "/images/classics/bonnevilleT120/t120BikeCaro3.avif"
                    ],
                    [
                        "title" => "Технологија",
                        "desc" => "Одлично интегрирана модерна технологија е насекаде околу Т120 серијата на мотори. ABS, системот за пролизгување, „Ride-By-Wire“ системот и двата мода на работа оддаваат чувство на сигурност без да го компромитираат стилот и линијата на моторот.",
                        "image" => "/images/classics/bonnevilleT120/t120BikeCaro4.avif"
                    ],
                    [
                        "title" => "Аналогни Инструменти",
                        "desc" => "Класични, лесни за читање и одлично видливи без разлика на нивото на светлина, овие инструменти ги прикажуваат сите есенцијални информации кои се потребни за една забавна авантура.",
                        "image" => "/images/classics/bonnevilleT120/t120BikeCaro5.avif"
                    ],
                    [
                        "title" => "Сопирачки",
                        "desc" => "Најновата генерација ABS систем заедно со Brembo сопирачките (310mm напред) нудат одлична контрола при сопирање и самодоверба додека возите.",
                        "image" => "/images/classics/bonnevilleT120/t120BikeCaro6.avif"
                    ],
                    [
                        "title" => "Темпомат",
                        "desc" => "Т120 серијата доаѓа со темпомат како стандардна опрема. Истиот е лесен и интуитивен за користење преку команда на воланот и ви овозможува долги патувања со помалку замор.",
                        "image" => "/images/classics/bonnevilleT120/t120BikeCaro7.avif"
                    ],
                    [
                        "title" => "Возачки Модови",
                        "desc" => "Т120 нуди две програми на работа: Road & Rain. Секоја од нив ги персонализа сигурносните системи со цел да обезбеди максимална контрола, стабилност и забава.",
                        "image" => "/images/classics/bonnevilleT120/t120BikeCaro8.avif"
                    ],
                    [
                        "title" => "Рамка и Седиште",
                        "desc" => "Легендарната Bonneville шасија и суспензија оддаваат чувство на леснотија, комодитет и релаксираност додека возите. Заедно со ниската позиција на возење благодарејки на ниското седиште (790mm) Т120 е пофлексибилен од било кога.",
                        "image" => "/images/classics/bonnevilleT120/t120BikeCaro9.avif"
                    ],
                    [
                        "title" => "Практичност и Комфорт",
                        "desc" => "Релаксираната возачка позиција ја прави Т120 серијата перфектен избор за сите ваши дневни патувања и викенд авантури, а со комфортното седиште и далечните дестинации не се тешки за покорување.",
                        "image" => "/images/classics/bonnevilleT120/t120BikeCaro10.avif"
                    ]
                ],
                "bikePagePromo" => [
                    [
                        "title" => "Прекрасни Детали",
                        "desc" => "Рефинирани детали како класичниот беџ на резервоарот како и машинско гравираните вадници во пакет со рачно офарбаниот резервоар во две бои, датираат уште од првиот 1959 Bonneville мотор.",
                        "image" => "/images/classics/bonnevilleT120/t120BikePromo1.avif"
                    ],
                    [
                        "title" => "Аксесоари",
                        "desc" => "Палета од 116 оригинални Triumph аксесоари спремни за да го персонализирате вашиот T120. Специјален багаж и парчиња кои ја подобруваат комоцијата, стилот и безбедноста, заштитата дизајнирани перфектно да се вметнат во линијата на Т100. Секое парче доаѓа со гаранција од две години.",
                        "image" => "/images/classics/bonnevilleT120/t120BikePromo2.avif"
                    ]
                ],
                "features" => [
                    [
                        "title" => "Систем за Пролизгување",
                        "desc" => "Ride-by-wire со автоматски систем за пролизгување"
                    ],
                    [
                        "title" => "Возачки Програми",
                        "desc" => "2 - Road & Rain"
                    ],
                    [
                        "title" => "Сопирачки",
                        "desc" => "Brembo напред / Nissin назад"
                    ],
                    [
                        "title" => "Тркала",
                        "desc" => "Жични (32 жици)"
                    ],
                    [
                        "title" => "Инструментна Плоча",
                        "desc" => "LCD дисплеј со аналоген мерач на брзина"
                    ],
                    [
                        "title" => "Светло",
                        "desc" => "LED"
                    ],
                    [
                        "title" => "USB влез",
                        "desc" => "Под Седиште"
                    ],
                    [
                        "title" => "Имобилизатор",
                        "desc" => "Стандард"
                    ],
                    [
                        "title" => "Темпомат",
                        "desc" => "Стандард"
                    ],
                    [
                        "title" => "Сервисен Интервал",
                        "desc" => "16,000км / 12 месеци сервисен интервал"
                    ]
                ],
                "bikePageImageGallery" => [
                    [
                        "alt" => "t120BikeGalleryCaro1",
                        "src" => "/images/classics/bonnevilleT100/t120BikeGalleryCaro1.avif"
                    ]
                ]
            ],
            [
                "id" => 39,
                "title" => "Bonneville T120 Black",
                "model" => "t120-black-2023",
                "category" => "classics",
                "subFamilyCategory" => "bonneville-t120",
                "edition" => "classics",
                "price" => 14690,
                "customizationColors" => [
                    [
                        "colorName" => "Jet Black",
                        "price" => null,
                        "image" => "/images/custom-collors/jetBlack.jpg",
                        "base" => "/images/classics/bonnevilleT120Black/t120BlackJetBlack.png",
                        "reversed" => "/images/classics/bonnevilleT120Black/t120BlackJetBlackReversed.png",
                    ],
                    [
                        "colorName" => "Graphite / Matt Graphite",
                        "price" => 300,
                        "image" => "/images/custom-collors/graphiteMattGraphite.jpg",
                        "base" => "/images/classics/bonnevilleT120Black/t120Graphite.png",
                        "reversed" => "/images/classics/bonnevilleT120Black/t120GraphiteReversed.png",
                    ],
                    [
                        "colorName" => "Silver Ice / Phantom Black",
                        "price" => 800,
                        "image" => "/images/custom-collors/silverIcePhantomBlack.png",
                        "base" => "/images/classics/bonnevilleT120Black/t120Ice.png",
                        "reversed" => "/images/classics/bonnevilleT120Black/t120IceReversed.png"
                    ]
                ],
                "gallery" => [
                    "modelImage" => [
                        "src" => "/images/classics/bonnevilleT120BlackModel.png",
                        "alt" => "Bonneville T120 Black"
                    ],
                    "promoYoutubeVideo" => [
                        "src" => "https://www.youtube.com/embed/iUb0lNf9t5M",
                        "alt" => "T120 Black PRomo YouTube"
                    ]
                ],
                "shortSpecInfo" => [
                    "info1" => "Новата Stealth Edition Серија е Достапна"
                ],
                "subFamilyPromo" => [
                    "title" => "Bonneville T120 Black",
                    "desc" => "Целокупно подив и потемен карактер. Со истите перформанси како и Т120, Bonneville Black нуди уште поможен стил и карактер."
                ],
                "bikePageCarousell" => [
                    [
                        "title" => "Темен Финиш",
                        "desc" => "Со командна возачка позиција, цврст и темен финиш од моторот па се до црните дупли издувни цевки и класичните жични тркала - темниот и мистериозен Т120 Black и дефиниција за софистициран стил.",
                        "image" => "/images/classics/bonnevilleT120Black/t120BlackBikeCaro1.avif"
                    ],
                    [
                        "title" => "Дво Цилиндарски - 1200cc K.EC Мотор",
                        "desc" => "Отсега Euro 5 омпитабилен, дво цилиндарскиот линиски мотор, го чува својот карактер, звук а најважно и неговите перформанси но со малку поостра респонзивност.",
                        "image" => "/images/classics/bonnevilleT120/t120BlackBikeCaro2.avif"
                    ],
                    [
                        "title" => "Контрола",
                        "desc" => "Алуминиумските тркала и суспензијата нудат агилност и комфорт а со тоа го подобруваат и забрзувањето на моторот.",
                        "image" => "/images/classics/bonnevilleT120/t120BlackBikeCaro3.avif"
                    ],
                    [
                        "title" => "Технологија",
                        "desc" => "Одлично интегрирана модерна технологија е насекаде околу Т120 серијата на мотори. ABS, системот за пролизгување, „Ride-By-Wire“ системот и двата мода на работа оддаваат чувство на сигурност без да го компромитираат стилот и линијата на моторот.",
                        "image" => "/images/classics/bonnevilleT120/t120BlackBikeCaro4.avif"
                    ],
                    [
                        "title" => "Аналогни Инструменти",
                        "desc" => "Класични, лесни за читање и одлично видливи без разлика на нивото на светлина, овие инструменти ги прикажуваат сите есенцијални информации кои се потребни за една забавна авантура.",
                        "image" => "/images/classics/bonnevilleT120/t120BlackBikeCaro5.avif"
                    ],
                    [
                        "title" => "Сопирачки",
                        "desc" => "Најновата генерација ABS систем заедно со Brembo сопирачките (310mm напред) нудат одлична контрола при сопирање и самодоверба додека возите.",
                        "image" => "/images/classics/bonnevilleT120/t120BlackBikeCaro6.avif"
                    ],
                    [
                        "title" => "Темпомат",
                        "desc" => "Т120 серијата доаѓа со темпомат како стандардна опрема. Истиот е лесен и интуитивен за користење преку команда на воланот и ви овозможува долги патувања со помалку замор.",
                        "image" => "/images/classics/bonnevilleT120/t120BlackBikeCaro7.avif"
                    ],
                    [
                        "title" => "Возачки Модови",
                        "desc" => "Т120 нуди две програми на работа: Road & Rain. Секоја од нив ги персонализа сигурносните системи со цел да обезбеди максимална контрола, стабилност и забава.",
                        "image" => "/images/classics/bonnevilleT120/t120BlackBikeCaro8.avif"
                    ],
                    [
                        "title" => "Рамка и Седиште",
                        "desc" => "Легендарната Bonneville шасија и суспензија оддаваат чувство на леснотија, комодитет и релаксираност додека возите. Заедно со ниската позиција на возење благодарејки на ниското седиште (790mm) Т120 е пофлексибилен од било кога.",
                        "image" => "/images/classics/bonnevilleT120/t120BlackBikeCaro9.avif"
                    ],
                    [
                        "title" => "Практичност и Комфорт",
                        "desc" => "Релаксираната возачка позиција ја прави Т120 серијата перфектен избор за сите ваши дневни патувања и викенд авантури, а со комфортното седиште и далечните дестинации не се тешки за покорување.",
                        "image" => "/images/classics/bonnevilleT120/t120BlackBikeCaro10.avif"
                    ]
                ],
                "bikePagePromo" => [
                    [
                        "title" => "Прекрасни Детали",
                        "desc" => "Рефинирани детали како класичниот беџ на резервоарот како и машинско гравираните вадници во пакет со рачно офарбаниот резервоар во две бои, датираат уште од првиот 1959 Bonneville мотор.",
                        "image" => "/images/classics/bonnevilleT120Black/t120BlackBikePromo1.avif"
                    ],
                    [
                        "title" => "Аксесоари",
                        "desc" => "Палета од 116 оригинални Triumph аксесоари спремни за да го персонализирате вашиот T120 Black. Специјален багаж и парчиња кои ја подобруваат комоцијата, стилот и безбедноста, заштитата дизајнирани перфектно да се вметнат во линијата на Т100. Секое парче доаѓа со гаранција од две години.",
                        "image" => "/images/classics/bonnevilleT120Black/t120BlackBikePromo2.avif"
                    ]
                ],
                "features" => [
                    [
                        "title" => "Систем за Пролизгување",
                        "desc" => "Ride-by-wire со автоматски систем за пролизгување"
                    ],
                    [
                        "title" => "Возачки Програми",
                        "desc" => "2 - Road & Rain"
                    ],
                    [
                        "title" => "Сопирачки",
                        "desc" => "Brembo напред / Nissin назад"
                    ],
                    [
                        "title" => "Тркала",
                        "desc" => "Жични (32 жици)"
                    ],
                    [
                        "title" => "Инструментна Плоча",
                        "desc" => "LCD дисплеј со аналоген мерач на брзина"
                    ],
                    [
                        "title" => "Светло",
                        "desc" => "LED"
                    ],
                    [
                        "title" => "USB влез",
                        "desc" => "Под Седиште"
                    ],
                    [
                        "title" => "Имобилизатор",
                        "desc" => "Стандард"
                    ],
                    [
                        "title" => "Темпомат",
                        "desc" => "Стандард"
                    ],
                    [
                        "title" => "Сервисен Интервал",
                        "desc" => "16,000км / 12 месеци сервисен интервал"
                    ]
                ],
                "bikePageImageGallery" => [
                    [
                        "alt" => "t120BlackBikeGalleryCaro1",
                        "src" => "/images/classics/bonnevilleT120Black/t120BlackBikeGalleryCaro1.avif"
                    ]
                ]
            ],
            [
                "id" => 41,
                "title" => "Thruxton RS",
                "model" => "thruxton-rs-2023",
                "category" => "classics",
                "subFamilyCategory" => "thruxton-rs",
                "edition" => "classics",
                "price" => 18490,
                "customizationColors" => [
                    [
                        "colorName" => "Jet Black",
                        "price" => null,
                        "image" => "/images/custom-collors/jetBlack.jpg",
                        "base" => "/images/classics/thruxtonRS/thruxtonRSBlack.png",
                        "reversed" => "/images/classics/thruxtonRS/thruxtonRSBlackReversed.png",
                    ],
                    [
                        "colorName" => "Competition green / Silver Ice",
                        "price" => 200,
                        "image" => "/images/custom-collors/competitionGreenStorGrey.jpg",
                        "base" => "/images/classics/thruxtonRS/thruxtonRSCompetitionGreen.png",
                        "reversed" => "/images/classics/thruxtonRS/thruxtonRSCompetitionGreenReversed.png"
                    ],
                    [
                        "colorName" => "Chrome / Jet Black",
                        "price" => 800,
                        "image" => "/images/custom-collors/chromeJetBlack.jpg",
                        "base" => "/images/classics/thruxtonRS/thruxtonRSBlackSilver.png",
                        "reversed" => "/images/classics/thruxtonRS/thruxtonRSBlackSilverReversed.png",
                    ],
                    [
                        "colorName" => "Jet Black / Sillver Ice",
                        "price" => 400,
                        "image" => "/images/custom-collors/jetBlackSilverIce.jpg",
                        "base" => "/images/classics/thruxtonRS/thruxtonRSJetBlack.png",
                        "reversed" => "/images/classics/thruxtonRS/thruxtonRSJetBlackReversed.png"
                    ]
                ],
                "gallery" => [
                    "modelImage" => [
                        "src" => "/images/classics/thruxtonRsModel.png",
                        "alt" => "Thruxton RS"
                    ]
                ],
                "shortSpecInfo" => [
                    "info1" => "1,200cc Thruxton тунинг мотор",
                    "info2" => "Оригинална Cafe-Racer ДНК",
                    "info3" => "Одлично управување и стил"
                ],
                "subFamilyPromo" => [
                    "title" => "Thruxton RS",
                    "desc" => "Целосниот пакет и квалитет од популарната Triumph Thruxton R серија отсега го лидерски перформанси во класата, со уште помоќен „Cafe-Racer“ стил, управување, одлични финиши и детали."
                ],
                "bikePageCarousell" => [
                    [
                        "title" => "Значително унапреден Thruxton RS Мотор",
                        "desc" => "Надградбите на Thruxton моторот се сосојат од намалување на вкупната тежина, лесната радалица, ново квачило, намалување на вибрациите, поклопец од магнезиум, високо компресивни клипови и унапредени системи за вбризгување на воздух. Сето ова произведе уште поинстанта респонзивност и одлично забрзување.",
                        "image" => "/images/classics/thruxtonRS/thruxtonRSBikeCaro1.avif"
                    ],
                    [
                        "title" => "Повеќе Сила",
                        "desc" => "Со масимална сила од 105 коњски сили при 7500 револуции на моторот, Thruxton RS испорачува 8 коњски сили повеќе од претходната серија и нуди возбудливи „Cafe-Racer“ перформанси.",
                        "image" => "/images/classics/thruxtonRS/thruxtonRSBikeCaro2.avif"
                    ],
                    [
                        "title" => "Максимален Обртен момент при мали брзини",
                        "desc" => "Почнувајки од 700 rpm максималени обртен момент од 112Νm @ 4.250 rpm, Thruxton серијата го испорачува линиски и предвидливо, со што нуди одлично возачко искуство.",
                        "image" => "/images/classics/thruxtonRS/thruxtonRSBikeCaro3.avif"
                    ],
                    [
                        "title" => "Полесен за 6 килограми",
                        "desc" => "Намалување на вкупната тежина се достигна резултат на користење лесни материјали како магнезиум и алуминум а со користење на полесна батерија.",
                        "image" => "/images/classics/thruxtonRS/thruxtonRSBikeCaro4.avif"
                    ],
                    [
                        "title" => "Brembo M50 Сопирачки",
                        "desc" => "Подобрена сопирачка моќ и подобра контрола при запирање е овозможена од Brembo M50 сопирачките со дупли 320mm дискови и Brembo пумпа.",
                        "image" => "/images/classics/thruxtonRS/thruxtonRSBikeCaro5.avif"
                    ],
                    [
                        "title" => "Целосно Прилагодливa Ohlins Суспензија",
                        "desc" => "Thruxton RS серијата на задниот крај носи есклузивна Ohlins суспензија која нуди огромно ниво на комоција но и спортки карактер.",
                        "image" => "/images/classics/thruxtonRS/thruxtonRSBikeCaro6.avif"
                    ],
                    [
                        "title" => "Showa Race Specific Предна Вилушка",
                        "desc" => "Екслузивната високо-перформатна Showa вилушка е специјално тунирана за да обезбедни максимално ниво на тракција. Исто така го надоградува и тркачкиот изглед и стабилност на моторот.",
                        "image" => "/images/classics/thruxtonRS/thruxtonRSBikeCaro7.avif"
                    ],
                    [
                        "title" => "Тркала и Пневматици",
                        "desc" => "Metzeler Racetec RR пневматиците нудат одлично ниво на тракција, прецизност и стабилност при високи брзини. Истите се монтирани на лесни 17 инчни алуминиумски 32 жични тркала.",
                        "image" => "/images/classics/thruxtonRS/thruxtonRSBikeCaro8.avif"
                    ],
                    [
                        "title" => "Напредни Возачки Програми",
                        "desc" => "Thruxton RS нуди три возачки модови - Road,Rain & Sport и истите можат да бидат селектирани преку команди на воланот. Истите ги прилагодуваат сетинзите и респонзивноста на гаста, ABS и системот за пролизгување",
                        "image" => "/images/classics/thruxtonRS/thruxtonRSBikeCaro9.avif"
                    ],
                    [
                        "title" => "Стил",
                        "desc" => "Одлични сосема нови црни детали се додадени насекаде околу Thruxton RS. Некои од нив се: црни странични Thruxton панели, црна Ohlins RSU задна суспензија, темен капак за менувач и црни анодизирани тркала.",
                        "image" => "/images/classics/thruxtonRS/thruxtonRSBikeCaro10.avif"
                    ]
                ],
                "bikePageImageGallery" => [
                    [
                        "alt" => "thruxtonRSBikeGalleryCaro1",
                        "src" => "/images/classics/thruxtonRS/thruxtonRSBikeGalleryCaro1.avif",
                    ],
                    [
                        "alt" => "thruxtonRSBikeGalleryCaro2",
                        "src" => "/images/classics/thruxtonRS/thruxtonRSBikeGalleryCaro2.avif",
                    ],
                    [
                        "alt" => "thruxtonRSBikeGalleryCaro3",
                        "src" => "/images/classics/thruxtonRS/thruxtonRSBikeGalleryCaro3.avif",
                    ],
                    [
                        "alt" => "thruxtonRSBikeGalleryCaro4",
                        "src" => "/images/classics/thruxtonRS/thruxtonRSBikeGalleryCaro4.avif",
                    ],
                    [
                        "alt" => "thruxtonRSBikeGalleryCaro5",
                        "src" => "/images/classics/thruxtonRS/thruxtonRSBikeGalleryCaro5.avif",
                    ],
                    [
                        "alt" => "thruxtonRSBikeGalleryCaro6",
                        "src" => "/images/classics/thruxtonRS/thruxtonRSBikeGalleryCaro7.avif",
                    ],
                    [
                        "alt" => "thruxtonRSBikeGalleryCaro7",
                        "src" => "/images/rocket-3/rocket3GT/rocket3GTBikeGalleryCaro7.avif",
                    ],
                    [
                        "alt" => "thruxtonRSBikeGalleryCaro8",
                        "src" => "/images/classics/thruxtonRS/thruxtonRSBikeGalleryCaro8.avif",
                    ],
                    [
                        "alt" => "thruxtonRSBikeGalleryCaro9",
                        "src" => "/images/classics/thruxtonRS/thruxtonRSBikeGalleryCaro9.avif",
                    ],
                    [
                        "alt" => "thruxtonRSBikeGalleryCaro10",
                        "src" =>  "/images/classics/thruxtonRS/thruxtonRSBikeGalleryCaro10.avif"
                    ]
                ]
            ],
            [
                "id" => 57,
                "title" => "Street Triple 765 MOTO2™ EDITION",
                "model" => "street-triple-moto2-editon-2023",
                "category" => "roadsters",
                "subFamilyCategory" => "street-triple-moto2",
                "edition" => "roadsters",
                "price" => 17490,
                "gallery" => [
                    "modelImage" => [
                        "src" => "/images/roadsters/streetTriple765Moto2ModelImage.avif",
                        "alt" => "Street Triple MOTO 2"
                    ],
                    "promoYoutubeVideo" => [
                        "src" => "https://www.youtube.com/embed/PT4txMuuBBs",
                        "alt" => "Street Triple MOTO 2"
                    ]
                ],
                "customizationColors" => [
                    [
                        "colorName" => "Triumph Racing Yellow",
                        "price" => null,
                        "image" => "/images/custom-collors/triumphRacingYellow.jpg",
                        "base" => "/images/roadsters/moto2/streetTripleMoto2Yellow.png",
                        "reversed" => "/images/roadsters/moto2/streetTripleMoto2YellowReversed.png"
                    ],
                    [
                        "colorName" => "Crystal White",
                        "price" => null,
                        "image" => "/images/custom-collors/crystalWhite.jpg",
                        "base" => "/images/roadsters/moto2/streetTripleMoto2White.png",
                        "reversed" => "/images/roadsters/moto2/streetTripleMoto2WhiteReversed.png"
                    ]
                ],
                "shortSpecInfo" => [
                    "info1" => "765cc Moto2 мотор",
                    "info2" => "Максимална јачина од 130 PS",
                    "info3" => "10000 км сервисен интервал"
                ],
                "subFamilyPromo" => [
                    "title" => "НОВАТА STREET TIRPLE 765 MOTO2™ СЕРИЈА",
                    "desc" => "Најдобриот Street Triple моторцикл кој може да се купи! MOTO2™ серијата ве носи најблиску до Moto2™ моторите без да прави компромиси околу комфортот кога сте на нормалните патишта. Сосема ексклузивен, агилен и со врвно ниво на технологија во себе."
                ],
                "features" => [
                    [
                        "title" => "Мотор",
                        "desc" => "765 Три-Цилиндарски Мотор"
                    ],
                    [
                        "title" => "Сила и обртен Момент",
                        "desc" => "130PS & 80Nm"
                    ],
                    [
                        "title" => "Тежина",
                        "desc" => "188 kg - полн резервоар и други течности"
                    ],
                    [
                        "title" => "Суспензија",
                        "desc" => "Öhlins, NIX30 fork and STX40 piggyback monoshock"
                    ],
                    [
                        "title" => "Сопирачки",
                        "desc" => "Brembo Stylema 310mm двојни дискови"
                    ],
                    [
                        "title" => "Пневматици",
                        "desc" => "Pirelli Diablo Supercorsa V3 Пневматици"
                    ],
                    [
                        "title" => "Електроника",
                        "desc" => "АВЅ, Систем за Пролизгување и Систем за Контрола на Предна Осовина (Подигање)"
                    ],
                    [
                        "title" => "Инструментна Плоча",
                        "desc" => "Мултифункционален TFT екран 5‘"
                    ],
                    [
                        "title" => "Мод на работа",
                        "desc" => "5 програми (Road, Rain, Sport, Track, Rider)"
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
                        "title" => "Најдобри Перформанси во Класата",
                        "desc" => "Инспириран и изработен по Moto2 стандарди со 130 коњски сили и одлично забрзување и респонзивност, оваа серија на мотори и најблиску што можете да дојдете до еден тркачки Moto2 мотор.",
                        "image" => "/images/roadsters/moto2/moto2BikeCaro1.avif"
                    ],
                    [
                        "title" => "Луксузен Moto2 Стил",
                        "desc" => "Ексклузивни карбонски елементи, официјално Moto2 брендирање, уникатен Moto2 стартен екран и уникатна плочка со број на мотор на воланот.",
                        "image" => "/images/roadsters/moto2/moto2BikeCaro2.avif"
                    ],
                    [
                        "title" => "Нов Оптимизиран ABS Систем",
                        "desc" => "Поддржан од IMU системот со приспособливи поставки вградени во секој од петте режими на возење на Street RЅ, новиот ABS систем го наблудува аголот на нагиб на моторот и обезбедува оптимални перформанси при сопирање.",
                        "image" => "/images/roadsters/moto2/moto2BikeCaro3.avif"
                    ],
                    [
                        "title" => "Нов Оптимизиран систем за пролизгување со опција за деактивирање",
                        "desc" => "Овој паметен систем го наблудува аголот на нагиб на моторот и пресметува колку сила е потребно за да се извлечат максимални перформанси во дадениот момент, а притоа и одлична контрола врз моторот.",
                        "image" => "/images/roadsters/moto2/moto2BikeCaro4.avif"
                    ],
                    [
                        "title" => "Суспензија",
                        "desc" => "Висококвалитетната Ohlins суспензија (43mm напред и piggyback назад) обезбедува одличен комфорт и контрола за беспрекорно управување на патот и на патеката.",
                        "image" => "/images/roadsters/moto2/moto2BikeCaro5.avif"
                    ],
                    [
                        "title" => "Сопирачки - Brembo Stylema",
                        "desc" => "Новите Brembo Stylema сопирачки со четири клипни клешти и 310m дискови испорачуваа одлична сопирачка мож а во комбинација со ABS системот и одлична контрола на моторот.",
                        "image" => "/images/roadsters/moto2/moto2BikeCaro6.avif"
                    ],
                    [
                        "title" => "Прецизен и Фокусиран",
                        "desc" => "Тркачко инспирираната Moto2 серија го носи нивото на контрола на еден нов степен. Со повисок заден крај и помал кастер Moto2 серијата е респонзивна и многу агилна.",
                        "image" => "/images/roadsters/moto2/moto2BikeCaro7.avif"
                    ],
                    [
                        "title" => "Пневматици",
                        "desc" => "Високо перформантните Pirelli Supercorsa SP V3 пневматици кои доаѓаата како стандард нудат одлично ниво на тракција и одлична стабилност при високи брзини. Овие пневматици доаѓаат од тркачкиот свет но се оптимизирани и целосно легални за користење на пат.",
                        "image" => "/images/roadsters/moto2/moto2BikeCaro8.avif"
                    ],
                    [
                        "title" => "Full Color - TFT Екран",
                        "desc" => "Со фабрички активиран My Triumph систем за поврзување овој мулти функционален дисплеј е спремен за вашите Bluetooth уреди веднаш.",
                        "image" => "/images/roadsters/moto2/moto2BikeCaro9.avif"
                    ],
                    [
                        "title" => "Комоција и Ергономија",
                        "desc" => "Со висина на седиштето од 836 милиметри (прилагодливо во секој Triumph сервис) и опционалното седиште кој уште повеќе ја намалува висината (за 28mm помалку), Street Triple Мото2 е наменет за возачи од секакви димензии.",
                        "image" => "/images/roadsters/moto2/moto2BikeCaro10.avif"
                    ],
                    [
                        "title" => "Спремен за Патека",
                        "desc" => "Благодарејки на Triumph Shift Assist системот кој овозможува промени на степенот на преносот без употреба на квачило како и на Track програмата за работа и штоперица, Street Triple Мото2 е спремен за возбудлива акција на патеките.",
                        "image" => "/images/roadsters/moto2/moto2BikeCaro11.avif"
                    ],
                    [
                        "title" => "Високи Стандарди",
                        "desc" => "Street Triple Мото2 серијата насебе ја носи најновата технологија која му асистира на возачот во секој момент. Целосната LED расвета со дневни LED светла како и Shift-Assist квачилото во пар со ABS системот и имобилизатор само го потврдуваат фактот дека Street Triple RS доаѓа со најновата опрема за заштита и сигурно но и за гарантирана забава.",
                        "image" => "/images/roadsters/moto2/moto2BikeCaro12.avif"
                    ]
                ],
                "bikePageImageGallery" => [
                    [
                        "alt" => "moto2BikeGalleryCaro1",
                        "src" => "/images/roadsters/moto2/moto2BikeGalleryCaro1.avif",
                    ],
                    [
                        "alt" => "moto2BikeGalleryCaro2",
                        "src" => "/images/roadsters/moto2/moto2BikeGalleryCaro2.avif",
                    ],
                    [
                        "alt" => "moto2BikeGalleryCaro3",
                        "src" => "/images/roadsters/moto2/moto2BikeGalleryCaro3.avif",
                    ],
                    [
                        "alt" => "moto2BikeGalleryCaro4",
                        "src" => "/images/roadsters/moto2/moto2BikeGalleryCaro4.avif",
                    ],
                    [
                        "alt" => "moto2BikeGalleryCaro5",
                        "src" => "/images/roadsters/moto2/moto2BikeGalleryCaro5.avif",
                    ],
                    [
                        "alt" => "moto2BikeGalleryCaro6",
                        "src" => "/images/roadsters/moto2/moto2BikeGalleryCaro6.avif",
                    ],
                    [
                        "alt" => "moto2BikeGalleryCaro7",
                        "src" => "/images/roadsters/moto2/moto2BikeGalleryCaro7.avif",
                    ],
                    [
                        "alt" => "moto2BikeGalleryCaro8",
                        "src" => "/images/roadsters/moto2/moto2BikeGalleryCaro8.avif",
                    ],
                    [
                        "alt" => "moto2BikeGalleryCaro9",
                        "src" => "/images/roadsters/moto2/moto2BikeGalleryCaro9.avif"
                    ]
                ]
            ],
            [
                "id" => 58,
                "title" => "Tiger 900 Rally",
                "model" => "tiger-900-rally",
                "category" => "adventure",
                "subFamilyCategory" => "tiger-900",
                "edition" => "adventure",
                "price" => 14990,
                "gallery" => [
                    "modelImage" => [
                        "src" => "/images/adventure/tiger900Rally/tiger900RallyWhite.png",
                        "alt" => "Tiger 900 Rally"
                    ]
                ],
                "customizationColors" => [
                    [
                        "colorName" => "Pure White",
                        "price" => null,
                        "image" => "/images/custom-collors/pureWhite.jpg",
                        "base" => "/images/adventure/tiger900Rally/tiger900RallyWhite.png",
                        "reversed" => "/images/adventure/tiger900Rally/tiger900RallyWhiteReversed.png"
                    ],
                    [
                        "colorName" => "Sandstorm",
                        "price" => 200,
                        "image" => "/images/custom-collors/sandstorm.jpg",
                        "base" => "/images/adventure/tiger900Rally/tiger900RallySandstorm.png",
                        "reversed" => "/images/adventure/tiger900Rally/tiger900RallySandstormReversed.png"
                    ],
                    [
                        "colorName" => "Matt Khaki",
                        "price" => 200,
                        "image" => "/images/custom-collors/mattKhaki.jpg",
                        "base" => "/images/adventure/tiger900Rally/tiger900RallyKhaki.png",
                        "reversed" => "/images/adventure/tiger900Rally/tiger900RallyKhakiReversed.png"
                    ]
                ],
                "bikePageCarousell" => [
                    [
                        "title" => "7‘ Full-Color TFT Дисплеј",
                        "desc" => "Овој „user-friendly“ 7 инчен TFT екран ги понудува сите функционалност на овој мотор и видливи ги презентира пред својот возач.",
                        "image" => "/images/adventure/tiger900Rally/tiger900RallyBikeCaro1.jpg"
                    ],
                    [
                        "title" => "Премиум Showa Суспензија",
                        "desc" => "Напред: Showa 45mm USD Cartridge вилушка (244mm travel). Назад: Showa gas 230mm.",
                        "image" => "/images/adventure/tiger900Rally/tiger900RallyBikeCaro2.avif"
                    ],
                    [
                        "title" => "Оптимизиран ABS и Систем за Пролизгување",
                        "desc" => "Оптимизираниот систем за контрола на тракцијата за исклучување постојано го пресметува аголот на нагиб на моторот за да обезбеди оптимална брзина на лизгање и контрола на вртежниот момент. Може да се вклучи или исклучи во секој момент.",
                        "image" => "/images/adventure/tiger900Rally/tiger900RallyBikeCaro3.avif"
                    ],
                    [
                        "title" => "Brembo Stylema Сопирачки",
                        "desc" => "Brembo Stylema сопирачките се лесни и компактни и се парирани со високо перформатни клешти.",
                        "image" => "/images/adventure/tiger900Rally/tiger900RallyBikeCaro4.avif"
                    ],
                    [
                        "title" => "Жични Tubuless Тркала",
                        "desc" => "Жичните тркала со жичи монтирани странично се одличен избор за off-road авантури.",
                        "image" => "/images/adventure/tiger900Rally/tiger900RallyBikeCaro5.avif"
                    ],
                    [
                        "title" => "LED - насекаде",
                        "desc" => "Препознатлива LED расвета со LED предно, задно светло и трепкачи.",
                        "image" => "/images/adventure/tiger900Rally/tiger900RallyBikeCaro6.avif"
                    ],
                    [
                        "title" => "Греачи на Рачки",
                        "desc" => "Перфектени за возење во секакви времеснски услови и дистанци. Уживајте во топлината, комоцијата и контролата со овие греачи кои лесно се вклучуваат и исклучуваат со допир на компче на воланот.",
                        "image" => "/images/adventure/tiger900Rally/tiger900RallyBikeCaro7.avif"
                    ],
                    [
                        "title" => "20 литарски резервоар",
                        "desc" => "20 литарскиот резервоар на Tiger 900 Rally дозволува уште повеќе време поминато на моторот отколку на бензиските станици.",
                        "image" => "/images/adventure/tiger900Rally/tiger900RallyBikeCaro8.avif"
                    ],
                    [
                        "title" => "Четири Возачки Програми",
                        "desc" => "Персонализирајте ја агресивноста на гаста, ABS системот и системот за пролизгување по ваши преференци со модифицирање на неколкуте модови на работа на моторот - Rain, Road, Sport & Off-Road.",
                        "image" => "/images/adventure/tiger900Rally/tiger900RallyBikeCaro9.avif"
                    ],
                    [
                        "title" => "Квачило - Assisted Slip",
                        "desc" => "Памаетното квачило ви овозможува лесно, прецизно и брзо менување на степенот на пренос без користење на квачилото.",
                        "image" => "/images/adventure/tiger900Rally/tiger900RallyBikeCaro10.avif"
                    ],
                    [
                        "title" => "Темпомат",
                        "desc" => "Електронскиот темпомат овозможува одмор на вашата дланка и уште повисоко ниво на комфорт и помала потрошувачка.",
                        "image" => "/images/adventure/tiger900Rally/tiger900RallyBikeCaro11.avif"
                    ]
                ],
                "shortSpecInfo" => [
                    "info1" => "660cc Triple Motor",
                    "info2" => "Лидер во категоријата",
                    "info3" => "Прилагодлива 'Showa' суспензија"
                ],
                "subFamilyPromo" => [
                    "title" => "TIGER 900 Rally",
                    "desc" => "Софистициран, со одлични перформанси и способност да ве однесе каде и да посакате. "
                ]
            ],
            [
                "id" => 59,
                "title" => "Tiger 1200 GT",
                "model" => "tiger-1200-gt",
                "category" => "adventure",
                "subFamilyCategory" => "tiger-1200-gt",
                "edition" => "adventure",
                "price" => 20390,
                "gallery" => [
                    "modelImage" => [
                        "src" => "/images/adventure/tiger1200GT/tiger1200GTSnowdoniaWhite.png",
                        "alt" => "Tiger 1200 GT"
                    ],
                    "promoYoutubeVideo" => [
                        "src" => "https://www.youtube.com/embed/QvVCEk4t8IE",
                        "alt" => "Tiger 660 Youtbe Video"
                    ]
                ],
                "customizationColors" => [
                    [
                        "colorName" => "Snowdonia White",
                        "price" => null,
                        "image" => "/images/custom-collors/snowdoniaWhite.jpg",
                        "base" => "/images/adventure/tiger1200GT/tiger1200GTSnowdoniaWhite.png",
                        "reversed" => "/images/adventure/tiger1200GT/tiger1200GTSnowdoniaWhiteReversed.png"
                    ]
                ],
                "shortSpecInfo" => [
                    "info1" => "660cc Triple Motor",
                    "info2" => "Лидер во категоријата",
                    "info3" => "Прилагодлива 'Showa' суспензија"
                ],
                "subFamilyPromo" => [
                    "title" => "TIGER 1200 GT",
                    "desc" => "Стартерот но никако не подценетиот мотор од Tiger 1200 GT серијата. Одличен чекор доколку сакате да навлезете во GT моторите од класата на мотори со голема зафатнина на моторот."
                ]
            ],
            [
                "id" => 60,
                "title" => "Daytona 660",
                "model" => "daytona-660",
                "category" => "sport",
                "subFamilyCategory" => "daytona-660",
                "edition" => "sport",
                "price" => 10790,
                "gallery" => [
                    "modelImage" => [
                        "src" => "/images/sport/daytona660/daytona660SnowdoniaWhite.png",
                        "alt" => "Daytona 660"
                    ],
                    "promoYoutubeVideo" => [
                        "src" => "https://www.youtube.com/embed/PpnixM8wkv4",
                        "alt" => "Daytona 660 Youtube Video"
                    ]
                ],
                "customizationColors" => [
                    [
                        "colorName" => "Satin Granite / Satin Jet Black",
                        "price" => 200,
                        "image" => "/images/custom-collors/satinGraniteSatinJetBlack.png",
                        "base" => "/images/sport/daytona660/daytona660Satin.png",
                        "reversed" => "/images/sport/daytona660/daytona660SatinReversed.png"
                    ],
                    [
                        "colorName" => "Snowdonia White / Sapphire Black",
                        "price" => null,
                        "image" => "/images/custom-collors/snowdoniaWhiteSapphireBlack.pn",
                        "base" => "/images/sport/daytona660/daytona660SnowdoniaWhite.png",
                        "reversed" => "/images/sport/daytona660/daytona660SnowdoniaWhiteReversed.png"
                    ],
                    [
                        "colorName" => "Carnival Red / Saphire Black",
                        "price" => 200,
                        "image" => "/images/custom-collors/carnivalRedSapphireBlack.jpg",
                        "base" => "/images/sport/daytona660/daytona660CarnivalRed.png",
                        "reversed" => "/images/sport/daytona660/daytona660CarnivalRedReversed.png"
                    ]
                ],
                "shortSpecInfo" => [
                    "info1" => "Нов 900cc три-цилиндричен мотор",
                    "info2" => "Високи спецификации за подобро искуство",
                    "info3" => "Врвна технологија фокусирана на возачот"
                ],
                "bikePageCarousell" => [
                    [
                        "title" => "Три-Цилиндрична Моќност",
                        "desc" => "Daytona 660 е подрепена од препознатлив три-цилиндричен мотор со многу карактер, одлични перформанси на низок и висок обртај. Daytona 600 нуди 95bhp @ 11.250 rpm со максимален вртеж до 12.650 rpm. Наспроти тоа 80% од својот вкупен обртен момент од 65Nm го дава од 3,125 rpm. Моќноста на овој мотор се пренесува до подлогата преку брз и софистициран 6 брзински менувач опремен со квачило опремено со лесна полуга кое ви овозможува лесно движење низ градските средини. Daytona 660 е наменета за сите видови за возачи па затоа „Triumph“ ви нуди „A2 Licence“ пакет кој ја намалува моќноста на моторот и го прави компатибилен со A2 возачка лиценца кој притоа може лесно да биде отстранет во секое Triumph претставништво.",
                        "image" => "/images/sport/daytona660/daytona660BikePageCaro1.avif"
                    ],
                    [
                        "title" => "Перфектен Баланс",
                        "desc" => "Опремен со Showa 41mm предна суспензија и Showa задна вилушка со можност за брзо подесување, Daytona 660 нуди агилно и целосно уживање без никаков напор. Лесни 5 кракни алуминиумски тркала обвиени со најновите MIchelin Road 6 гуми ја пренесуваат моќноста на Daytona 660 без никаква мака на подлогата и оддаваат чувство на сигурно во сите временски услови.",
                        "image" => "/images/sport/daytona660/daytona660BikePageCaro2.avif"
                    ],
                    [
                        "title" => "Комфорт & Контрола",
                        "desc" => "Благодарејки одличната позиција на воланот и страничните прагови оптимизирани за комфорт во свиоците, Daytona 660 дава природна возачка позиција која нуди префектен баланс помеѓу самодоверливо и динамично спортско возење. Со висина на седлото од 810мм и тенка каросерија, Daytona 660 инспирира самодоверба и при маневри со мала брзина.",
                        "image" => "/images/sport/daytona660/daytona660BikePageCaro3.avif"
                    ],
                    [
                        "title" => "Оптимизација",
                        "desc" => "Daytona 660 е опремена со технологија која го подобрува искуството во возењето и безбедноста. „Ride-by-wire“ системот за апликација на гас нуди чист и прецизен одговор и исто така овозможува три режими на возење - спорт, пат и дожд. Секоја од овие програми на работа го подесува и нивото на ABS и системот за пролизгување со цел да овозможи оптимална моќност и перформанси.",
                        "image" => "/images/sport/daytona660/daytona660BikePageCaro4.avif"
                    ],
                    [
                        "title" => "Сопирачка Моќ",
                        "desc" => "Моќни четири-клипни предни клешти комбинирани со два 310мм дискови нудат голема сопирачка моќ која паралелно со ABS системот се грижи за безбедно испорачување на максималната сопирачка моќ во секакви услови. Парирано со овој систем е и „Emergency Brake Warning“ системот кој ги активира трепкачите на моторот со цел да ги предупреди другите возачи околу себе во дадени случаи.",
                        "image" => "/images/sport/daytona660/daytona660BikePageCaro5.avif"
                    ],
                    [
                        "title" => "LCD - TFT Дисплеј",
                        "desc" => "Daytona 660 располага со мулти-функционален компактен TFT дисплеј сместен во бело-црн LCD дисплеј. Овој уред ги прикажува сите потребни информации и му овозможува на возачот лесно да ги види истите без разлика на тоа колку е светла неговата околина. Овој уред исто така се парира со „My Triumph“ апликацијата која овозможува „Turn-By-Turn“ навигација и конективност со телефон и музика.",
                        "image" => "/images/sport/daytona660/daytona660BikePageCaro6.avif"
                    ],
                    [
                        "title" => "А2 Лиценца",
                        "desc" => "Daytona 660 e прилагодлива за секого. Новите и млади возачи кои се лимитирани на A2 лиценца за возење исто така ќе можат да уживаат во Daytona 660 со специјалниот „A2 Licence Conversation Kit“ кој ја лимитира моќноста на моторот на 35kW. Истиот е лесно вградлив и лесно се одстранува во било кој Triumph сервис.",
                        "image" => "/images/sport/daytona660/daytona660BikePageCaro7.avif"
                    ],
                    [
                        "title" => "Мали Трошоци за Одржување",
                        "desc" => "Daytona 660 има сервисен интервал од 16,000км и две годишна гаранција без разлика на поминати километри со што ја прави лидер во класата по вредност.",
                        "image" => "/images/sport/daytona660/daytona660BikePageCaro8.avif"
                    ]
                ],
                "subFamilyPromo" => [
                    "title" => "Н0вата DAytona 660",
                    "desc" => "Интуитивна, агилна, спортска серија оптимизирана за секојдневен комфорт но со моќен и возбудлив три-цилиндречен погон. Новата Daytona 660 серија е спремна за секаков предизвик. "
                ],
                "bikePageImageGallery" => [
                    [
                        "alt" => "daytona660BikeGalleryCaro1",
                        "src" => "/images/sport/daytona660/daytona660BikeGalleryCaro1.avif",
                    ],
                    [
                        "alt" => "daytona660BikeGalleryCaro2",
                        "src" => "/images/sport/daytona660/daytona660BikeGalleryCaro2.avif",
                    ],
                    [
                        "alt" => "daytona660BikeGalleryCaro3",
                        "src" => "/images/sport/daytona660/daytona660BikeGalleryCaro3.avif",
                    ],
                    [
                        "alt" => "daytona660BikeGalleryCaro4",
                        "src" => "/images/sport/daytona660/daytona660BikeGalleryCaro4.avif",
                    ],
                    [
                        "alt" => "daytona660BikeGalleryCaro5",
                        "src" => "/images/sport/daytona660/daytona660BikeGalleryCaro5.avif",
                    ],
                    [
                        "alt" => "daytona660BikeGalleryCaro6",
                        "src" => "/images/sport/daytona660/daytona660BikeGalleryCaro6.avif"
                    ]
                ]
            ],
            [
                "id" => 61,
                "title" => "TF 250-X",
                "model" => "tf-250-x",
                "category" => "off-road",
                "subFamilyCategory" => "tf-250-x",
                "edition" => "off-road",
                "price" => 9995,
                "gallery" => [
                    "modelImage" => [
                        "src" => "/images/offRoad/tf250X/tf250xTriumphYellow.png",
                        "alt" => "TF 250-X"
                    ],
                    "promoYoutubeVideo" => [
                        "src" => "https://www.youtube.com/embed/6JzxbL1KAVM",
                        "alt" => "TF 250-X Youtube Video"
                    ]
                ],
                "customizationColors" => [
                    [
                        "colorName" => "Triumph Racing Yellow / Black White",
                        "price" => null,
                        "image" => "/images/custom-collors/blackPureWhite.jpg",
                        "base" => "/images/offRoad/tf250X/tf250xTriumphYellow.png",
                        "reversed" => "/images/offRoad/tf250X/tf250xTriumphYellowReversed.png"
                    ]
                ],
                "shortSpecInfo" => [
                    "info1" => "250cc мотор",
                    "info2" => "Алуминиумска Рамка",
                    "info3" => "Компоненти од Врвна Класа"
                ],
                "bikePageCarousell" => [
                    [
                        "title" => "Фокусирани Перформанси",
                        "desc" => "Новата Triumph 250cc серија полека го раздрмува светот на мотокросот. Со поглед дека на оваа серија се вградени само компоненти и материјали од највисоко ниво како титаниум заклучуваме дека серијата е градена без компромис и е спремна за натрпеварување во највисоките светски класи. Некои од спецификациите се: туниран и стилизиран издувен систем со цел да се испорача повеќе моќ, Brembo хирдаулично квачило кој ви овозможува уште повеќе обртен момент и конзистентно чувство додека возите.",
                        "image" => "/images/offRoad/tf250X/caro1.avif"
                    ],
                    [
                        "title" => "Моќност",
                        "desc" => "TF 250-Х серијата генерира контролиран и предвидлив пренос на силата. Испораката на моќ е линеарна, што обезбедува одлична тракција и контрола, одлично забрзување и максимална брзина без никакви непредвидливи моменти кои ќе го уништат вашето време на патеката. На располагање е и Lаunch Control Модул кој ви овозможува одличен старт при секоја прилика.",
                        "image" => "/images/offRoad/tf250X/caro2.avif"
                    ],
                    [
                        "title" => "Оптимизирање на Перформанси",
                        "desc" => "Напредените Athena модул и Dellorto 44mm тркачка рачка за додавање гас се грижат околу менаџирањето на моторот. TF 250-X серијатае опремена со потполно нов издувен систем со вграден резонатор се со цел за повеќе моќ како и продуцирање на моќен препознатлив звук..",
                        "image" => "/images/offRoad/tf250X/caro3.avif"
                    ],
                    [
                        "title" => "MX Tune PRO App",
                        "desc" => "Покрај многуте дополнителни аксесоари тука е и MX Tune PRO мобилната апликација. Истата вклучува дијагностика и селектирање на различни мапирања за моторот - во живо. Фабрички се додадени 10 дополнителни модула на работа во самата апликација.",
                        "image" => "/images/offRoad/tf250X/caro4.avif"
                    ],
                    [
                        "title" => "Цврстина и Флексибилност",
                        "desc" => "Основата на TF 250-X е заснована на флексибилна но сепак доволно цврста алуминиумска рамка. Низ целата рамка се наоѓаат разни елементи кои овозможуваат дополнително сетапирање на моторот по ваш вкус. Благодарејки на рачно заваруваната алуминиумската рамка како и најквалитетните штрафови TF 250-X се карактеризира и со мала вкупна тежина. ProTaper ACF воланот со ODI Half Waffle рачки е изработен од карбон и алуминиум што дополнително ја намалува вкупната тежина.",
                        "image" => "/images/offRoad/tf250X/caro5.avif"
                    ],
                    [
                        "title" => "Агилност и Контрола",
                        "desc" => "TF 250-X серијата е дизајнирана да постигне перфектен баланс помеѓу тежина, перформанси и флексибилност. Лесната шасија е комбинира прецизност и агилност со цел да се произведе победнички перформанси. Опремена со Pirrelli Scorpion MX32 Mid Soft пневматици оваа серија ќе има одлична тракција на патеката и низ незгодните свиоци.",
                        "image" => "/images/offRoad/tf250X/caro6.avif"
                    ],
                    [
                        "title" => "Премиум Сецификации",
                        "desc" => "TF 250-X серијата со себе носи врвни компоненти како Brembo системот за сопирање и Galfer дискови кои од себе даваат конзистентно чувство кога ќе ги аплицирате истите. Дополнително за подобра контрола тука се и KYB 48mm AOC вилушки изработени од лесен алуминиум. Назад KYB вилушката нуди повеќе опции за оптимизирање на моторот по ваш вкус.",
                        "image" => "/images/offRoad/tf250X/caro7.avif"
                    ],
                    [
                        "title" => "Одличен Старт",
                        "desc" => "TF 250-X серијата е опремена со Holeshot Assist модул кој секогаш ќе ви овозможи перфектен старт. Истиот овозможува да стартувате без квачило со гас до крај и автоматска промена на степенот на брзини се до првиот допи на кочниците..",
                        "image" => "/images/offRoad/tf250X/caro8.avif"
                    ],
                    [
                        "title" => "Изглед кој мами погледи",
                        "desc" => "Офарбан со специјалната Triumph Racing Yellow, Black, White боја TF 250-X серијата секогаш ќе мами погледи и ќе ве издвои вас на подиумот.",
                        "image" => "/images/offRoad/tf250X/caro9.avif"
                    ],
                    [
                        "title" => "Стил и Дизајн",
                        "desc" => "Стилот и дизајнот нема никогаш да бидат пречка за вашите успеси, бидејки оваа серија има тенок и агресивен изглед кој е дизајниран само за максимални перформанси.",
                        "image" => "/images/offRoad/tf250X/caro10.avif"
                    ],
                    [
                        "title" => "Екстра аксесоари од врвен квалитет",
                        "desc" => "За изработка на TF 250-X серијата беа одбрани само највисоко квалитетните брендови. Од Akrapovic па се до Xtrig додатните аксесоари се достапни.",
                        "image" => "/images/offRoad/tf250X/caro11.avif"
                    ]
                ],
                "subFamilyPromo" => [
                    "title" => "НОВАТА TF 250-X СЕРИЈА",
                    "desc" => "Сосема нова тркачка серија дизајнирана за победи на патеката. Дизајнирана како колаборација со најдобрите Triumph MX инжињери и светски шампиони како Рики Карлмајкл ваа серија е спремна за предизниците кои ќе и ги претставите."
                ],
                "bikePageImageGallery" => [
                    [
                        "alt" => "tf250XBikeGalleryCaro1",
                        "src" => "/images/offRoad/tf250X/tf250XBikeGalleryCaro1.avif",
                    ],
                    [
                        "alt" => "tf250XBikeGalleryCaro2",
                        "src" => "/images/offRoad/tf250X/tf250XBikeGalleryCaro2.avif",
                    ],
                    [
                        "alt" => "tf250XBikeGalleryCaro3",
                        "src" => "/images/offRoad/tf250X/tf250XBikeGalleryCaro3.avif",
                    ],
                    [
                        "alt" => "tf250XBikeGalleryCaro4",
                        "src" => "/images/offRoad/tf250X/tf250XBikeGalleryCaro4.avif",
                    ],
                    [
                        "alt" => "tf250XBikeGalleryCaro5",
                        "src" => "/images/offRoad/tf250X/tf250XBikeGalleryCaro5.avif",
                    ],
                    [
                        "alt" => "tf250XBikeGalleryCaro6",
                        "src" => "/images/offRoad/tf250X/tf250XBikeGalleryCaro6.avif"
                    ]
                ]
            ],
            [
                "id" => 62,
                "title" => "Rocket 3 Storm R",
                "model" => "rocket-3-storm-r",
                "category" => "rocket-3",
                "subFamilyCategory" => "rocket-3",
                "edition" => "rocket-3",
                "price" => null,
                "gallery" => [
                    "modelImage" => [
                        "src" => "/images/rocket-3/rocketStormR/rocket3StormRBlack.png",
                        "alt" => "Rocket 3 Storm R"
                    ],
                    "promoYoutubeVideo" => [
                        "src" => "https://www.youtube.com/embed/fzoW0E3hFlc",
                        "alt" => "Rocket 3 Storm R"
                    ]
                ],
                "customizationColors" => [
                    [
                        "colorName" => "Sapphire Black / Granite",
                        "price" => null,
                        "image" => "/images/custom-collors/sapphireBlackGranite.jpg",
                        "base" => "/images/rocket-3/rocketStormR/rocket3StormRBlack.png",
                        "reversed" => "/images/rocket-3/rocketStormR/rocket3StormRBlackReversed.png"
                    ],
                    [
                        "colorName" => "Carnival Red / Saphire Black",
                        "price" => null,
                        "image" => "/images/custom-collors/carnivalRedSapphireBlack.jpg",
                        "base" => "/images/rocket-3/rocketStormR/rocket3StormRRed.png",
                        "reversed" => "/images/rocket-3/rocketStormR/rocket3StormRRedReversed.png"
                    ],
                    [
                        "colorName" => "Satin Pacific Blue / Matt Sapphire Black",
                        "price" => null,
                        "image" => "/images/custom-collors/satinPacificMattSapphireBlack.jpg",
                        "base" => "/images/rocket-3/rocketStormR/rocket3StormRBlue.png",
                        "reversed" => "/images/rocket-3/rocketStormR/rocket3StormRBlueReversed.png"
                    ]
                ],
                "shortSpecInfo" => [
                    "info1" => "Три-цилиндричен Rocket 3 2,500cc мотор ",
                    "info2" => "182hp / 225Nm",
                    "info3" => "16 000 км сервисен интервал"
                ],
                "subFamilyPromo" => [
                    "title" => "Новиот Rocket 3 Storm R",
                    "desc" => "Врвниот мускулест “Roadster“. Со епски пропорции, имресивни перформанси, одлична агилност и извонреден стил. Цени Наскоро."
                ],
                "bikePageInfo" => [
                    "Новиот Rocket 3 Storm R стои сам во своја класа. Со мускулеста сила и рекордно висок левел на вртежен момент, екслпозивниот карактер на Rocket 3 Storm R се парира само со своето неверојатно управување и извонреден финиш изработен со висок квалитет."
                ],
                "bikePageCarousell" => [
                    [
                        "title" => "Мотор",
                        "desc" => "Новиот мотор на Rocket 3 Storm R е еволуција на најголемиот продукциски мотор некогаш произведен. Три-цилиндричниот 2,458cc мотор продуцира со 225Nm вртежен момент и со максимална јачина од 182 коњски сили со одлична респонзивност при секој сетепен на преносот.",
                        "image" => "/images/rocket-3/rocketStormR/rocket3StormRCaro1.avif"
                    ],
                    [
                        "title" => "Тркала и Пневматици",
                        "desc" => "Лесниате 10 кракни тркала кои ги носи новиот Rocket 3 Storm R уште повеќе допринесуваат за одличната агилност како и безпрекорниот стил на моторот.",
                        "image" => "/images/rocket-3/rocketStormR/rocket3StormRCaro2.avif"
                    ],
                    [
                        "title" => "Суспензија и Сопирачки",
                        "desc" => "Високо специфицираната 47мм Showa предна вилушка и задниот monoshock армотизер ги скротуваат имресивните перформанси на моторот со цел да оддадат чувство на контрола и безгрижно искуство. Нивото на самодоверба и контрола врз моторт уште повеќе се зголемува одличниот Brembo Stylema систем за сопирање.",
                        "image" => "/images/rocket-3/rocketStormR/rocket3StormRCaro3.avif"
                    ],
                    [
                        "title" => "Технологија",
                        "desc" => "Од стандардниот ABS систем па се до системот за пролизгување Rocket 3 Storm R располага со најновата технологија и се грижи за вашата сигурност. На располагање ви е повеќе поставки за мапирање на апликацијата на гас како и луксузи како темпомат и слично.",
                        "image" => "/images/rocket-3/rocketStormR/rocket3StormRCaro4.avif"
                    ],
                    [
                        "title" => "Темен Стил",
                        "desc" => "Материјалите кои се дел од Rocket 3 Storm серијата се внимателно одбрани со цел да се испорача еден темен финиш без да се компромитира квалитетот и финишот на моторот. Вниманиетот посветено на деталите е тоа што ја одвојува оваа серија од другите.",
                        "image" => "/images/rocket-3/rocketStormR/rocket3StormRCaro5.avif"
                    ],
                    [
                        "title" => "Спремно за Модификации",
                        "desc" => "Во палетата на оригинални Triumph аксесоари на располагање ви стојат повеќе од 50 парчиња кои ќе ја подобрат ергономијата и нивото на технологија како за возачот така и за сопатникот.",
                        "image" => "/images/rocket-3/rocketStormR/rocket3StormRCaro6.avif"
                    ],
                    [
                        "title" => "Светло",
                        "desc" => "Моќни двојни предни светла со LED дневни светла како и Triumph амблем го красат предниот крај на моторот. Комбинирани со стилизирани трепкачи и интегрирано задно светло, Rocket 3 Storm серијата го добива онаа препознатлива целосно LED Triуmph расвета и стил.",
                        "image" => "/images/rocket-3/rocketStormR/rocket3StormRCaro7.avif"
                    ],
                    [
                        "title" => "Стил",
                        "desc" => "Чиста, мускулеста силуета е она што ги мами погледите да се вперат во Rocket 3 Storm серијата. Ситните детали одлично додаваат уште малку повеќе карактер и уникатен стил на моторот.",
                        "image" => "/images/rocket-3/rocketStormR/rocket3StormRCaro8.avif"
                    ]
                ],
                "bikePageImageGallery" => [
                    [
                        "alt" => "rocket3StormRBikeGalleryCaro1",
                        "src" => "/images/rocket-3/rocketStormR/rocket3StormRBikeGalleryCaro1.avif",
                    ],
                    [
                        "alt" => "rocket3StormRBikeGalleryCaro2",
                        "src" => "/images/rocket-3/rocketStormR/rocket3StormRBikeGalleryCaro2.avif"
                    ]
                ]
            ],
            [
                "id" => 63,
                "title" => "Rocket 3 Storm GT",
                "model" => "rocket-3-storm-gt",
                "category" => "rocket-3",
                "subFamilyCategory" => "rocket-3",
                "edition" => "rocket-3",
                "price" => null,
                "gallery" => [
                    "modelImage" => [
                        "src" => "/images/rocket-3/rocketStormGT/rocket3StormGTRed.png",
                        "alt" => "Rocket 3 Storm GT"
                    ],
                    "promoYoutubeVideo" => [
                        "src" => "https://www.youtube.com/embed/J8mLRRLdQX8",
                        "alt" => "Rocket 3 Storm GT"
                    ]
                ],
                "customizationColors" => [
                    [
                        "colorName" => "Sapphire Black / Carnival Red",
                        "price" => null,
                        "image" => "/images/custom-collors/carnivalRedSapphireBlack.jpg",
                        "base" => "/images/rocket-3/rocketStormGT/rocket3StormGTRed.png",
                        "reversed" => "/images/rocket-3/rocketStormGT/rocket3StormGTRedReversed.png",
                    ],
                    [
                        "colorName" => "Granite / Saphire Black",
                        "price" => null,
                        "image" => "/images/custom-collors/sapphireBlackGranite.jpg",
                        "base" => "/images/rocket-3/rocketStormGT/rocket3StormGTBlack.png",
                        "reversed" => "/images/rocket-3/rocketStormGT/rocket3StormGTBlackReversed.png",
                    ],
                    [
                        "colorName" => "Satin Pacific Blue / Matt Sapphire Black",
                        "price" => null,
                        "image" => "/images/custom-collors/satinPacificMattSapphireBlack.jpg",
                        "base" => "/images/rocket-3/rocketStormGT/rocket3StormGTBlue.png",
                        "reversed" => "/images/rocket-3/rocketStormGT/rocket3StormGTBlueReversed.png"
                    ]
                ],
                "shortSpecInfo" => [
                    "info1" => "Три-цилиндричен Rocket 3 2,500cc мотор ",
                    "info2" => "182hp / 225Nm",
                    "info3" => "16 000 км сервисен интервал"
                ],
                "subFamilyPromo" => [
                    "title" => "Новиот Rocket 3 Storm GT",
                    "desc" => "Одличните перформанси и управување се сплотија со лежерното возење и карактер. Цени Наскоро."
                ],
                "bikePageInfo" => [
                    "Легендата за Rocket 3 серијата продолжува. Муслуеста сила и вртежен момент во комбинација со релаксиран стил и одлично возачко искуство целосно спакувано во извонреден финиш."
                ],
                "bikePageCarousell" => [
                    [
                        "title" => "Мотор",
                        "desc" => "Новиот мотор на Rocket 3 Storm R е еволуција на најголемиот продукциски мотор некогаш произведен. Три-цилиндричниот 2,458cc мотор продуцира со 225Nm вртежен момент и со максимална јачина од 182 коњски сили со одлична респонзивност при секој сетепен на преносот.",
                        "image" => "/images/rocket-3/rocketStormGT/rocket3StormGTCaro1.avif"
                    ],
                    [
                        "title" => "Тркала и Пневматици",
                        "desc" => "Лесниате 10 кракни тркала кои ги носи новиот Rocket 3 Storm R уште повеќе допринесуваат за одличната агилност како и безпрекорниот стил на моторот.",
                        "image" => "/images/rocket-3/rocketStormGT/rocket3StormGTCaro2.avif"
                    ],
                    [
                        "title" => "Суспензија и Сопирачки",
                        "desc" => "Високо специфицираната 47мм Showa предна вилушка и задниот monoshock армотизер ги скротуваат имресивните перформанси на моторот со цел да оддадат чувство на контрола и безгрижно искуство. Нивото на самодоверба и контрола врз моторт уште повеќе се зголемува одличниот Brembo Stylema систем за сопирање.",
                        "image" => "/images/rocket-3/rocketStormGT/rocket3StormGTCaro3.avif"
                    ],
                    [
                        "title" => "Технологија",
                        "desc" => "Од стандардниот ABS систем па се до системот за пролизгување Rocket 3 Storm R располага со најновата технологија и се грижи за вашата сигурност. На располагање ви е повеќе поставки за мапирање на апликацијата на гас како и луксузи како темпомат и слично.",
                        "image" => "/images/rocket-3/rocketStormGT/rocket3StormGTCaro4.avif"
                    ],
                    [
                        "title" => "Темен Стил",
                        "desc" => "Материјалите кои се дел од Rocket 3 Storm серијата се внимателно одбрани со цел да се испорача еден темен финиш без да се компромитира квалитетот и финишот на моторот. Вниманиетот посветено на деталите е тоа што ја одвојува оваа серија од другите.",
                        "image" => "/images/rocket-3/rocketStormGT/rocket3StormGTCaro5.avif"
                    ],
                    [
                        "title" => "Спремно за Модификации",
                        "desc" => "Во палетата на оригинални Triumph аксесоари на располагање ви стојат повеќе од 50 парчиња кои ќе ја подобрат ергономијата и нивото на технологија како за возачот така и за сопатникот.",
                        "image" => "/images/rocket-3/rocketStormGT/rocket3StormGTCaro6.avif"
                    ],
                    [
                        "title" => "Светло",
                        "desc" => "Моќни двојни предни светла со LED дневни светла како и Triumph амблем го красат предниот крај на моторот. Комбинирани со стилизирани трепкачи и интегрирано задно светло, Rocket 3 Storm серијата го добива онаа препознатлива целосно LED Triуmph расвета и стил.",
                        "image" => "/images/rocket-3/rocketStormGT/rocket3StormGTCaro7.avif"
                    ]
                ],
                "bikePageImageGallery" => [
                    [
                        "alt" => "rocket3StormGTBikeGallery1",
                        "src" => "/images/rocket-3/rocketStormGT/rocket3StormGTBikeGallery1.avif",
                    ],
                    [
                        "alt" => "rocket3StormGTBikeGallery2",
                        "src" => "/images/rocket-3/rocketStormGT/rocket3StormGTBikeGallery2.avif",
                    ],
                    [
                        "alt" => "rocket3StormGTBikeGallery3",
                        "src" => "/images/rocket-3/rocketStormGT/rocket3StormGTBikeGallery3.avif"
                    ]
                ]
            ]
        ];


        foreach ($motorcyclesData as $motorcycle) {
            Motorcycle::create($motorcycle);
        }

    }
}
