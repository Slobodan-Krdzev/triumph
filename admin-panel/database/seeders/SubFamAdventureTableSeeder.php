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
            'model_name' => 'tiger-900',
            'subFamilyName' => 'tiger-900',
            'title' => 'Нова Tiger 900 Серија',
            'price' => 'Наскоро',
            'url' => '/motorcycles/adventure/tiger-900',
            'heroSlogans' => ["НОВИОТ", "TIGER 900"],
            'youtubeVideo' => 'https://www.youtube.com/embed/-eXK5VwysTA',
            'subFamilyPageInfo' => [
                'service' => [
                    [
                        'title' => 'Сервисен Интервал',
                        'desc' => '10,000 km или 12 месеци'
                    ]
                ],
                'audioSection' => [
                    'title' => 'Уникатни Перформанси и Звук.',
                    'desc' => 'Новиот 900сс три-цилиндричен мотор на Tiger 900 испорачува препознатлив длабок звук и длабок виок, со возбудливи вибрации при средни фреквенции и прекрасни звуци при финиш.',
                    'audio' => '/images/adventure/tiger900/tiger900Sound.mp3'
                ],
            ],
            'engineTransmission' => [
                [
                    'title' => 'Тип на Мотор',
                    'desc' => 'водно ладење, 12 вентили, DOHC, линиски 3-цилиндри'
                ],
                [
                    'title' => 'капацитет',
                    'desc' => '888 cc'
                ],
                [
                    'title' => 'диаметар',
                    'desc' => '78 mm'
                ],
                [
                    'title' => 'рута',
                    'desc' => '61.9 mm'
                ],
                [
                    'title' => 'компресија',
                    'desc' => '11.27:1'
                ],
                [
                    'title' => 'Мах. Коњски Сила',
                    'desc' => '95.2 PS / 93.9 bhp (70 kW) @ 8,750 rpm'
                ],
                [
                    'title' => 'Мах. Обртен Момент',
                    'desc' => '87 Nm @ 7,250 rpm'
                ],
                [
                    'title' => 'Систем за убризгување',
                    'desc' => 'Multipoint sequential electronic fuel injection'
                ],
                [
                    'title' => 'Систем за Издувни гасови',
                    'desc' => '3 во 1 не-раѓосувачки челик'
                ],
                [
                    'title' => 'Финална Трансмисија',
                    'desc' => 'O-ring chain'
                ],
                [
                    'title' => 'Квачило',
                    'desc' => 'Multipoint sequential electronic fuel injection'
                ],
                [
                    'title' => 'Менувачка Кутија',
                    'desc' => '6 брзини'
                ],
            ],
            'frame' => [
                [
                    'title' => 'шасија',
                    'desc' => 'тубуларна челична шасија'
                ],
                [
                    'title' => 'вилушка',
                    'desc' => 'алуминиум'
                ],
                [
                    'title' => 'предно тркало',
                    'desc' => 'Tubeless, 21 x 2.15 in'
                ],
                [
                    'title' => 'задно тркало',
                    'desc' => 'Tubeless, 17 x 4.25 in'
                ],
                [
                    'title' => '"предна гума',
                    'desc' => '90/90-21'
                ],
                [
                    'title' => 'задна гума',
                    'desc' => '150/70R17'
                ],
                [
                    'title' => 'предна суспензија',
                    'desc' => 'Showa превртена 45мм вилушка, мануелно подесување за јачина на одбивање, 240мм опсег на работа'
                ],
                [
                    'title' => 'задна суспензија',
                    'desc' => 'Showa задна вилушка, мануелно подесување за јачина на одбивање, 230мм опсег на работа'
                ],
                [
                    'title' => 'предни сопирачки',
                    'desc' => 'Дупли 320мм дискови, Brembo Stylema 4 piston Monoblock клешти. Преден цилиндар за течност, Оптимизиран ABS систем'
                ],
                [
                    'title' => 'задна сопирачка',
                    'desc' => 'Brembo'
                ],
            ],
            'dimension' => [
                [
                    'title' => 'ширина на волан',
                    'desc' => '935 mm'
                ],
                [
                    'title' => 'висина без ретровизори',
                    'desc' => '1452-1502 mm'
                ],
                [
                    'title' => 'Solar height',
                    'desc' => '860-880 mm'
                ],
                [
                    'title' => 'мегу-осовинско растојание ',
                    'desc' => '1551 mm'
                ],
                [
                    'title' => 'Custer Corner',
                    'desc' => '24.4 º'
                ],
                [
                    'title' => 'Trace',
                    'desc' => '145.8 mm'
                ],
                [
                    'title' => 'Тежина',
                    'desc' => '201 kg'
                ],
                [
                    'title' => 'капацитет на резервоар',
                    'desc' => '20 L'
                ],
            ],
            'fuelConsumption' => [
                [
                    'title' => 'Потрошувачка',
                    'desc' => '5.2l /100km (55.4 MPG)'
                ],
                [
                    'title' => 'CO2 загадување',
                    'desc' => 'Euro 5 Стандарди. (119g /km CO2) измерени според Регулатива 168/2013/EC. Резултатите се добиени во специјални тест средини и се на располагање само за споредба. Вистинските резултат може да варираат врз различни средини.'
                ]
            ],
            'grayCarousell' => [
                [
                    'id' => 'carouselItem1',
                    'title' => 'Инспириран од ARAGÓN',
                    'desc' => 'Креиран како инспирација од доминантниот победнички перформанса на Tiger 900 Rally Pro на Baja Aragon 2022.',
                    'image' => '/images/adventure/tiger900/tiger900GrayCaro1.avif'
                ],
                [
                    'id' => 'carouselItem2',
                    'title' => 'Стандарди',
                    'desc' => 'Лидер во класата по спецификации од почеток до крај, со квалитетни компоненти оптимизирани и за на пат и за “off-road“ средини.',
                    'image' => '/images/adventure/tiger900/tiger900GrayCaro2.avif'
                ],
                [
                    'id' => 'carouselItem3',
                    'title' => 'Технологија',
                    'desc' => 'Најновата технологија фокусирана на возачот понудува комфорт, самодоверба, сигурност и перформанси.',
                    'image' => '/images/adventure/tiger900/tiger900GrayCaro3.avif'
                ],
                [
                    'id' => 'carouselItem4',
                    'title' => 'Сервисен Интервал',
                    'desc' => 'Долгиот сервисен интервал додатно со две годишната гаранција која не истекува по одреден број поминати километри, со сигурност потврдува дека ќе имате безгрижни авантури и мали трошоци за одржување.',
                    'image' => '/images/adventure/tiger900/tiger900GrayCaro4.avif'
                ]

            ],
            'specNumbers' =>
            [
                [
                    'data' => '900',
                    'info' => 'cc Мотор'
                ],
                ['data' => '87', 'info' => 'Nm обртен момент'],
                ['data' => '95', 'info' => 'PS - Максимална Сила'],
                ['data' => '+65', 'info' => 'Аксесоари']
            ],

            'reasonsToDrive' => [
                'banner' => [
                    'image' => '/images/adventure/tiger900/tiger900GrayCaro2.avif'
                ],
                'infoText' => [
                    'title' => 'Tiger 900 - најкомплетниот, флексибилен и динамичен авантуристички мотор со средна зафатнина на моторот.',
                    'desc' => 'Значително полесен од неговиот претходник, со зачудувачки високи спецификации, новиот Tiger 900 поставува нов репер за нај-агилниот, нај-динамичниот нај-способниот мотор од средна зафатнина на пазарот.'
                ],
                'reasons' => [
                    [
                        'title' => 'Возбудливи Авантуристички Опции',
                        'desc' => 'Доколку сакате моќен авантуристички мотр со многу технологија, конфорт и додатоци тогаш Tiger 900 серијата е создадена за вас. Серијата се состои од мотори кои се создадени за секојдненевно користење, авантуриза со “off-road“ дотатоци. Тигар 900 GT. Создаден за максимално урбано уживање, одлично за патувања на долги релации, но и за екскурзии на секое растојание помеѓу, палетата GT има перформанси, опрема и технологија за збогатување на секое возење, со самодоверба и возбуда. Тигар 900 рели. Најнапредните велосипеди со двојна намена што некогаш сме ги направиле. Тие беа дизајнирани за возбудливи авантури надвор од асфалтот, но и за секојдневно возење со апсолутна контрола и удобност. Серијата Tiger 900 Rally поставува нов репер во однос на управувањето, спецификацијата и стилот.',
                        'image' => '/images/adventure/tiger900/tiger900ReasonsImage1.avif'
                    ],
                    [
                        'title' => 'Нов 3-цилиндарски мотор од 900сс',
                        'desc' => 'Новиот 3-цилиндричен мотор од 900 cc има поголема зафатнина, е во согласност со Euro 5 и нуди подобрени перформанси на Tiger 900. Вграден е нов тајминг на палењето за да се обезбеди поживо искуство во возењето на Тигар, со до 9% поголема моќност опсегот на вртежи, како и висока максимална моќност од 95 КС при 8.750 вртежи во минута. и 10% поголем вртежен момент од претходникот Tiger 800. Новиот тајминг на Tiger 900 го подобри карактерот и звукот на моторот, нудејќи поагресивен и привлечен звук со 3 цилиндри и изразито впечатливо татнеж.'
                    ],
                    [
                        'title' => 'Дифинира Нови Стандарди',
                        'desc' => 'Максимална флексибилност и одлично ракување. Новиот Tiger 900 е до 5 килограми полесен. Комбинацијата на новата лесна рамка, новиот полесен мотор, системот за суспензија со високи спецификации и врвните ексклузивни сопирачки на Brembo, нуди големо подобрување во агилноста и способноста на велосипедот, обезбедувајќи одлично управување во сите услови на возење. Центарот на гравитација на Tiger 900 е ревидиран и поместен за 40 mm напред и 20 mm надолу, во споредба со претходниот модел од 800cc. Нуди подобра распределба на тежината меѓу тркалата и подобра рамнотежа при мали брзини, во сите услови на возење, додека го одржува одличното растојание од подлогата карактеристично за моделите Tiger.Подобрена ергономија. Потесниот профил на велосипедот ја подобрува удобноста на возачот, особено при стартување и запирање. Рачките сега се 10 mm поблиску до возачот, обезбедувајќи поудобна исправена положба на возење. Положбата на стапалата е дизајнирана специјално за секој модел на Tiger 900, во зависност од неговата ориентација. Прилагодлива висина на седиштето. Сите модели располагаат со интегриран механизам за прилагодување на висината на седлото во две позиции кој лесно се прилагодува, кој му овозможува на возачот да ја смени висината на седлото за 20 mm до положбата што најмногу му одговара. Tiger 900, Tiger 900 GT и Tiger 900 GT Pro имаат висина на седлото од 810 – 830 mm, Tiger 900 Rally и Tiger 900 Rally Pro имаат висина на седлото од 850 – 870 mm, додека верзијата Tiger 900 GT Low Ride Height има висина од седло 760 - 780 mm.',
                        'image' => '/images/adventure/tiger900/tiger900ReasonsImage2.avif'
                    ],
                    [
                        'Специјално изработени сопирачки и суспензија',
                        'Моделите Tiger 900 и Tiger 900 GT се карактеризираат со специјално дизајниран систем за потпирање на тркалата кој поставува нов репер за целиот авантуристички сегмент со средно поместување.Моделите 900 и GT ја имаат превртената вилушка на Marzocchi од 45 mm, која обезбедува 180 mm патување на тркалата. Кај моделите GT и GT Pro има и рачно прилагодување на амортизацијата за компресија и враќање.Задната суспензија нуди 170 километри патување. Моделот GT има рачно приспособување за предоптоварување и повратно прилагодување.Врвната специфика GT Pro RSU нуди ново електронски прилагодливо поставување на суспензијата, развиено во соработка со Marzocchi.Tiger 900 Rally - За поддршка на одличните теренски перформанси на серијата Tiger 900 Rally, врвните перформанси на суспензијата се обезбедени со конфигурацијата дизајнирана од Showa.И двата модели на Rally се опремени со превртена вилушка од 45 mm со рачно претходно оптоварување, враќање и прилагодување на амортизацијата на компресија, што обезбедува 240 mm патување на тркалата. На задното тркало има гасен шок RSU, кој може да се прилагоди за амортизирање пред оптоварување и враќање. Тој нуди 230 километри патување на задните тркала.Сите модели од новата гама на Tiger 900 имаат сопирачки Brembo Stylema® со врвни спецификации. Овие сопирачки ги вклучуваат највисоките перформанси на Brembo, најлесните и најмалите клешти. Намалениот волумен околу клиповите и влошките го намалува внатрешниот простор што го зафаќаат течностите за сопирачките и обезбедува понепосредна реакција и зголемен проток на воздух околу влошките, помагајќи им на клештите да се ладат побрзо и да работат уште подобро.'
                    ],
                    [
                        'title' => 'Напредна Технологија',
                        'desc' => 'Голем број технолошки иновации се вклучени во новата гама на мотоцикли Tiger 900.Моделите Tiger 900 GT и Rally со средна и висока спецификации располагаат со нов 7“ TFT дисплеј за инструменти во боја кој прикажува сеопфатни информации, како и нови ABS во свијоци и системи за контрола на тракцијата за уште подобро искуство во возењето. Опсегот нуди до шест режими на возење, за целосно прилагодување на преференциите на возачот. Технологијата на сите модели GT и Rally е на многу високо ниво и вклучува целосно LED осветлување, загреани рачки, контрола на патувањето и безбедно складирање на мобилен телефон со приклучок за полнење. Врвната технологија на моделите GT Pro и Rally Pro го вклучува вградениот систем за поврзување My Triumph Bluetooth® кој е стандарден и овозможува управување со телефонски повици, репродукција на музика, навигација чекор по свиок и контрола на камерата GoPro преку прекинувачите. Сите функции се прикажани на TFT екранот. Тука е и системот за помош на менувачот на Triumph, кој овозможува менување на брзините и спуштање без употреба на спојката, како и систем за следење на притисокот во гумите за дополнителна безбедност и удобност. Дополнително, загреаното седиште за возачот и совозачот, како и LED светлата за магла се стандардна опрема.'
                    ],
                    [
                        'title' => 'Нов Агресивен Изглед и Карактер',
                        'desc' => 'Покрај целосно новиот дизајн, новиот ексклузивен костум на Tiger ги рефлектира ревидираните завршетоци и почистите линии што му даваат на Tiger 900 поизразен и доминантен авантуристички изглед, при што секој модел има подобрени детали и карактеристики кои ја подобруваат двојната употреба или неговиот надворешен пат. ориентација.Новиот Tiger 900 ги нагласува своите можности за сите терени, како и неговата мала тежина и агилност, со тесен профил, полесен преден дел, намален целокупен волумен, поагресивно дизајниран резервоар и нова полесна рамка.Серијата GT и Rally се достапни во три ексклузивни бои, со опции Pure White, Sapphire Black и Korosi Red за моделите GT и GT Pro и Pure White, Sapphire Black и Matt Khaki за моделите Rally и Rally Pro. Основниот модел Tiger 900 е достапен во чиста бела боја.',
                        'image' => '/images/adventure/tiger900/tiger900ReasonsImage3.avif'

                    ],
                    [
                        'title' => 'Многу Аксесоари',
                        'desc' => 'Додадете можности за вашата авантура со два комплети за инспирација и повеќе од 65 оригинални додатоци на Triumph дизајнирани да ја подобрат практичноста, удобноста, перформансите и стилот на Tiger 900. Вклучувајќи нова палета на системи за багаж и заштитни додатоци. Комплетот за инспирација Trekker обединува импресивен асортиман на авантуристички багаж и додатоци за патување кои се идеални за палетата Tiger 900 GT, додека комплетот за инспирација Expedition ги подобрува теренските способности на гамата Tiger 900 Rally..'
                    ],
                    [
                        'title' => 'Ниска позиција на седиштето',
                        'desc' => 'Моделот Tiger 900 GT е достапен и во уште попристапна верзија со мала висина на седиштето. Низа меѓусебно поврзани карактеристики на дизајнот, вклучувајќи посебна вилушка, RSU амортизери и специјална конфигурација на подесувањето на суспензијата, овозможија висина на седиштето што е 50 mm пониска од основниот модел Tiger 900. Како и кај сите модели на Tiger 900, оваа верзија има вградено прилагодување на висината на седиштата од 20 mm, што му овозможува на Tiger 900 GT LRH да има висина на седиштето од 760 - 780 mm, во споредба со стандардната висина од 810 - 830 mm.'
                    ],
                    [
                        'title' => 'Додатна - висока спецификација',
                        'desc' => 'Ако барате Tiger 900 со врвни спецификации, ова се дополнителните „Pro“ карактеристики што ќе ви го разнесат умот.Карактеристики на Tiger 900 GT Pro - Новата електронски контролирана единица за задна суспензија му овозможува на возачот да го прилагоди претходното оптоварување и амортизацијата на задната суспензија преку TFT инструментите, со четири поставки за претходно оптоварување (Rider, Rider & Bagage, Rider & Pillion и Rider & Baggage & Pillion). Ова може да се комбинира со девет различни нивоа на амортизација за да се постигне идеална комбинација. Ексклузивно за врвните спецификации Pro е новиот Triumph Shift Assist систем, кој овозможува непречено и удобно менување на брзините без употреба на спојката.Има и петти режим на возење, како и режими за пат, дожд, теренски и спортски стандардни GT. GT Pro располага со исклучително корисна програмабилна програма Rider која му овозможува на возачот фино да го подеси својот велосипед за да одговара на условите. Системот за следење на притисокот во гумите (TPMS) го предупредува возачот ако притисокот во гумите падне под оптималните нивоа и е клучна карактеристика на Tiger 900 GT Pro со врвни спецификации. Дополнително, вградениот систем за поврзување My Triumph е уште една клучна карактеристика што овозможува телефонски повици, GoPro камера и управување со GPS, додека загреаното седиште за возачот и совозачот го максимизира комфорот и осветлените прекинувачи обезбедуваат одличен стил и подобрена контрола.Карактеристики на Tiger 900 Rally Pro – Ексклузивно за моделите Pro со врвни спецификации е новиот Triumph Shift Assist систем, кој обезбедува непречено и удобно менување брзини без употреба на спојката.Додека моделот Rally има четири режими на возење (Road, Rain, Off-Road и Sport), моделот Rally Pro има два дополнителни режими на возење - Rider-Programmable и Off-Road Pro - кои нудат прецизна конфигурација, за уште поекстремни возење надвор од патот и поголеми можности на нечистотија. Системот за следење на притисокот во гумите (TPMS) го предупредува возачот ако притисокот во гумите падне под оптималните нивоа и е клучна карактеристика на Tiger 900 Rally Pro со врвни спецификации. За да ја надополни врвната спецификација на Tiger 900, моделот Rally Pro располага со интегриран систем за поврзување My Triumph, загреани седишта за возачи и совозачи и иновативни прекинувачи со позадинско осветлување за уште поголемо задоволство при возењето..'
                    ],
                ]
            ],
            'accessory' => [
                'banner' => [
                    'image' => '/images/adventure/tiger900/tiger900AccessoriesHeroImage.avif'
                ],
                'infoText' => [
                    'title' => 'Додајте ваш белег врз Speed 400',
                    'desc' => 'На располагање ви е селекција од преку 20 оригинални Triupmh аксесоари за оваа серија на мотори. Аксесоарите кои ќе ги додадете може да бидат додадени на вашиот мотор во фабриката. Aксесоарите се дизајнирани од истиот тим кој го креираше Speed 400 и доаѓаат со две-годишна гаранција.'
                ],
                'accessoryTypes' => [
                    [
                        'title' => 'TREKKER PACK',
                        'desc' => 'Багаж ориентиран за користење на патишта за подолги патувања. Trekker Pack вклучува:.',
                        'itemsList' => [
                            "Централен куфер и Рам за Монтирање",
                            "Странични Куфери и Рамови за Монтирање",
                            "Потпирач за патник за задниот куфер",
                            "Заштита за Резервоар",
                            "Додатно заштитно ветробранско стакло"
                        ]
                    ],
                    [
                        'title' => 'EXPEDITION PACK',
                        'desc' => 'Специјално Дизајниран Багаж за “Off-Road“ Авантури',
                        'itemsList' => [
                            "Странични Куфери и Рамови за Монтирање",
                            "Штитници за вилушки",
                            "Протектор за ладник",
                            "Заштита за резервоар",
                            "Штитник за светло",
                            "Торба со капацитет од 40л"
                        ]
                    ]
                ],
            ],
            'gallery' => [
                'modelImage' => [
                    'src' => '/images/adventure/tiger900GtModel.png',
                    'alt' => 'Tiger 900 Range Model Image'
                ],
                'subFamilyHeroVideo' => [
                    'src' => '/images/adventure/tiger900E1/tiger900HeroVideo.webm',
                    'alt' => 'Tiger 900 Hero Video'
                ],
                'subFamilyTopSectionImage' => [
                    'src' => '/images/adventure/tiger900/tiger900TopSectionImage.avif',
                    'alt' => 'Tiger 900 Range Top-Section Image'
                ],
                'subFamilyTopSectionBGImage' => [
                    'src' => '/images/adventure/tiger900/tiger900TopSectionImageBG.avif',
                    'alt' => 'Tiger 900 Range Top-Section Image'
                ]
            ]
        ];


        $subFamAdventureDataTwo = [
            'model_name' => 'tiger-sport-660',
            'subFamilyName' => 'tiger-sport-660',
            'title' => 'Tiger Sport 660',
            'price' => '9590',
            'url' => '/motorcycles/adventure/tiger-sport-660',
            'heroSlogans' => ['Автентичност', 'Версатилен', '3-цилиндричен'],
            'youtubeVideo' => 'https://www.youtube.com/embed/QvVCEk4t8IE',
            'subFamilyPageInfo' => [
                'topSection' => [
                    'title' => 'АВТЕНТИЧНА ВИТАЛНОСТ НА ТРИ ЦИЛИНДРИ',
                    'desc' => 'Перформансна предност, класно лидерство во моќност, спецификации и удобно возење - сè тоа на одлична вредност',
                    'subtitle' => 'Дизајниран како перфектен секојдневен, градски мотор но и за уживање за време на викенд'
                ],
                'audioSection' => [
                    'audio' => '/images/adventure/tigerSport660/tiger660Audio.mp3',
                    'title' => 'Богато Три-Цилиндрично Грмење',
                    'desc' => 'Звукот е снимен во живо на реален пат.',
                    'logo' => null
                ]
            ],
                    'engineTransmission' => [
                        [
                            'title' => 'Тип на Мотор',
                            'desc' => 'водно ладење, 12 вентили, DOHC, линиски 3-цилиндри, 240° редослед на есклпозии'
                        ],
                        [
                            'title' => 'капацитет',
                            'desc' => '660 cc'
                        ],
                        [
                            'title' => 'диаметар',
                            'desc' => '74.04 mm'
                        ],
                        [
                            'title' => 'рута',
                            'desc' => '51.1 mm'
                        ],
                        [
                            'title' => 'компресија',
                            'desc' => '11.95:1'
                        ],
                        [
                            'title' => 'Мах. Коњски Сила',
                            'desc' => '81 PS / 80 bhp (59.6 kW) @ 10,250 rpm'
                        ],
                        [
                            'title' => 'Мах. Обртен Момент',
                            'desc' => '64 Nm @ 6,250 rpm'
                        ],
                        [
                            'title' => 'Систем за убризгување',
                            'desc' => 'Multipoint sequential electronic fuel injection with electronic throttle control'
                        ],
                        [
                            'title' => 'Систем за Издувни гасови',
                            'desc' => '3 во 1 не-раѓосувачки челик'
                        ],
                        [
                            'title' => 'Финална Трансмисија',
                            'desc' => 'X-ring chain'
                        ],
                        [
                            'title' => 'Квачило',
                            'desc' => 'Wet, multi-plate, slip'
                        ],
                        [
                            'title' => 'Менувачка Кутија',
                            'desc' => '6 брзини'
                        ]
                    ],
                    'frame' => [
                        [
                            'title' => 'шасија',
                            'desc' => 'тубуларна челична шасија'
                        ],
                        [
                            'title' => 'вилушка',
                            'desc' => 'алуминиум'
                        ],
                        [
                            'title' => 'предно тркало',
                            'desc' => '19 x 2.5 die-cast легура '
                        ],
                        [
                            'title' => 'задно тркало',
                            'desc' => '17 x 4.25 die-cast легура '
                        ],
                        [
                            'title' => 'предна гума',
                            'desc' => '100/90-19'
                        ],
                        [
                            'title' => 'задна гума',
                            'desc' => '150/70R17'
                        ],
                        [
                            'title' => 'предна суспензија',
                            'desc' => 'Marzocchi Inverted Fork 45mm'
                        ],
                        [
                            'title' => 'задна суспензија',
                            'desc' => 'Marzocchi задна суспензија со систем за подесување'
                        ],
                        [
                            'title' => 'предни сопирачки',
                            'desc' => 'Dual 320mm дискови, 4-piston monobloc Brembo Stylema calipers. Front radial pump, ABS'
                        ],
                        [
                            'title' => 'задна сопирачка',
                            'desc' => 'Еден 255 mm диск. Brembo single piston floating caliper, ABS'
                        ],
                        [
                            'title' => 'инструментна плочка',
                            'desc' => '5 TFT екран'
                        ]
                    ],
                    'dimension' => [
                        [
                            'title' => 'ширина на волан',
                            'desc' => '830 mm'
                        ],
                        [
                            'title' => 'висина без ретровизори',
                            'desc' => '1410-1460 mm'
                        ],
                        [
                            'title' => 'Solar height',
                            'desc' => '820-840 mm'
                        ],
                        [
                            'title' => 'мегу-осовинско растојание ',
                            'desc' => '1556 mm'
                        ],
                        [
                            'title' => 'Custer Corner',
                            'desc' => '24.6 º'
                        ],
                        [
                            'title' => 'Trace',
                            'desc' => '133.3 mm'
                        ],
                        [
                            'title' => 'Тежина',
                            'desc' => '192 kg'
                        ],
                        [
                            'title' => 'капацитет на резервоар',
                            'desc' => '20 L'
                        ]
                    ],
                    'fuelConsumption' => [
                        [
                            'title' => 'Потрошувачка',
                            'desc' => '5.2l /100km'
                        ],
                        [
                            'title' => 'CO2 загадување',
                            'desc' => 'Euro 5 Стандарди измерени според Регулатива 168/2013/EC. Резултатите се добиени во специјални тест средини и се на располагање само за споредба. Вистинските резултат може да варираат врз различни средини.'
                        ]
                    ],
                    'grayCarousell' => [
                        [
                            'id' => 'carouselItem1',
                            'title' => 'Три-цилиндрични перформанси',
                            'desc' => 'Располага со спортски карактер произведен од три-цилиндричниот мотор со перфектен баланс помеѓу обртен момент при мала апликација на гас и возбудлива моќност при висока апликација на гас.',
                            'image' => '/images/adventure/tigerSport850/tiger850Caro1.avif'
                        ],
                        [
                            'id' => 'carouselItem2',
                            'title' => 'Технологија фокусирана на возачот',
                            'desc' => 'Технологија од врвно ниво, сопирачки и одлична суспензија за подобро секојдневно возење со максимално чувство на самодоверба, перформанси и сигурност.',
                            'image' => '/images/adventure/tigerSport850/tiger850Caro2.avif'
                        ],
                        [
                            'id' => 'carouselItem3',
                            'title' => 'Комбинација помеѓу карактер и перформанси',
                            'desc' => 'Соилуета по која сите се вртат, со агресивни линии и ексклузивни детали .',
                            'image' => '/images/adventure/tigerSport850/tiger850Caro3.avif'
                        ],
                        [
                            'id' => 'carouselItem4',
                            'title' => 'Дизајниран да инспирира самодоверба',
                            'desc' => 'Лесно прилагодлив за сечиј возачки стил, од височината на седиштето, до воланот па се до ерканот, Tiger 850 е спремен да се прилагоди на вас.',
                            'image' => '/images/adventure/tigerSport850/tiger850Caro4.avif'
                        ]
                    ],
                    'specNumbers' => [
                        ['data' => '660', 'info' => 'cc Мотор'],
                        ['data' => '81', 'info' => 'РЅ Коњски сили'],
                        ['data' => '64', 'info' => 'Nm Максимален Обртен Момент'],
                        ['data' => '16,000', 'info' => 'KM СЕРВИСЕН ИНТЕРВАЛ'],
                    ],

            'reasonsToDrive' => [
                'banner' => [
                    'image' => '/images/adventure/tigerSport660/tiger660ReasonsBanner.avif'
                ],
                'infoText' => [
                    'title' => 'Дефиницијата за разноликост е да се биде најдобар во се.',
                    'desc' => 'Време е да се разбудите од досадните соништа со Tiger Sport 660. Ова е најпристапниот мотор од Tiger фамилијата на Triumph и е спремен за секојдневни авантури.Tiger Sport 660 е дизајниран да ги надмине вашите очекувања, од авантуристички тури па се до дневни обврски. Кај нас во Triumph се е во знак на возење, а еве и зошто:'
                ],
                'reasons' => [
                    [
                        'title' => 'Перформанси од Tiger Sport Серијата',
                        'desc' => 'Equipped with the proven 660 three-cylinder engine, it is the lightest and most versatile Tiger yet. Designed to increase rider confidence from the moment you ride it, with an effortless feel on the Tiger 660. Its smooth 6-speed gearbox has been optimized for fun and agility, while the slip and assist clutch provides light engagement that reduces rider fatigue. rider, allowing you to enjoy the bike even more. The 660 delivers usable three-cylinder power with the twist of the wrist. Central to the versatility and exciting performance is the 660cc engine. A three-cylinder Triumph that beats the two-cylinder competition, delivering strong torque from low to high in the rev range, peaking at 64Nm @ 6,250rpm. Power is class-leading and utterly thrilling, peaking at 81PS @ 10,250rpm. It is smooth and linear, sporty and fun, for your daily commute or weekend pleasures.',
                        'image' => '/images/adventure/tigerSport660/tiger660ReasonsListImage1.avif'
                    ],
                    [
                        'title' => 'Перфектна Хармонија Помеѓу Моторциклот и Возачот ',
                        "desc" => 'Harmonizing with Tiger s rhythm comes naturally. It is the ultimate combination of practical performance and top thrills. The Tiger Sport 660 can be limited to an A2 license, opening doors to new adventure experiences, from touring to flexible fun driving. Designed to excite but tamed to build the confidence you need. Whether it is your first bike, your first motorcycle adventure, or a flexible means of transportation you are looking for, the Tiger Sport 660 has the technology and flair to revitalize your riding experience.'
                    ],
                    [
                        "title" => "Инспирира Самодоверба",
                        "desc" => "Riding confidence is at the forefront of the adventure, setting off for a ride knowing that Tiger Sport's rider-focused technology and premium brakes and suspension are there to support you every moment. The upright stance with the lightweight frame and nimble engine make for a nimble and easy feel, without ever being intimidating. Add in the narrow riding position for easy ground contact, the low 835mm seat height and the excellent ergonomics setup and you have a bike with great agility and handling in any riding scenario.",
                        "image" => "/images/adventure/tigerSport660/tiger660ReasonsImage2.avif"
                    ],
                    [
                        "title" => "Направен за Вас",
                        "desc" => "No two riders are the same, so you can personalize your Tiger Sport 660 with a choice of three special colors and graphics and over 40 genuine Triumph accessories. From built-in luggage to a central case that holds 2 helmets, you'll be inspired by the options to suit your adventure. When everyday flexibility is your goal, you shouldn't be left behind. The bike is designed with the rider in mind - make it your own."
                    ],
                    [
                        "title" => "Секој ден, Цел Ден",
                        "desc" => "It's the journey that counts, not the destination, but the Tiger Sport 660 is designed to offer the ultimate in road adventure comfort. Featuring premium Showa 41mm separate function forks, Showa monoshock with remote hydraulically adjustable preload, slip and assist clutch, Road and Rain riding programs and the latest Triumph ABS technology and traction control program deactivation. From top to bottom the Tiger is designed to reduce fatigue and enhance your comfort to continue your adventure, with or without a passenger."
                    ],
                    [
                        "title" => "Максимална искористливост",
                        "desc" => "With its 17-litre fuel tank and top-of-the-line specification, the new Tiger Sport is ready for any adventure. Whether it's your daily commute, epic journeys with friends or maneuvering in tight urban spaces, the ride is anything but boring. The Tiger Sport's lightweight frame, road adventure setup and sporty feel make it the ultimate companion. Ready for the hard work of your daily commute revitalizing your work week but also fully capable of weekend jaunts and touring fun.",
                        "image" => "/images/adventure/tigerSport660/tiger660ReasonsImage3.avif"
                    ],
                    [
                        "title" => "Прекрасна Зделка",
                        "desc" => "The Tiger Sport 660's state-of-the-art technology, high-spec brakes, tires and suspension, confidence-inspiring agile handling, thrilling performance from the three-cylinder engine, unique styling and a very competitive price all combine to make it the perfect sporty choice. mid-range adventure - and the perfect entry point to the Triumph range. A leading service interval of 16,000km (or 12 months) and the lowest required service time in the segment also contribute to incredibly low running costs."
                    ],
                    [
                        "title" => "Уникатен Стил",
                        "desc" => "A new generation Tiger Sport in every way, with all the benefits of Triumph's class-redefining 660cc three-cylinder engine. Strong. Versatile. And with its thoughtful design, it embodies the modern Triumph style and character. The upright and imposing adventure stance, the protective gel and refined ergonomics promise comfort and thrills throughout your ride. All-new Tiger Sport 660 color schemes, class-leading premium finish and over 40 accessories will make the bike an absolute eye-catcher. Unmistakably Triumph, and the new perfectly-rounded mid-range adventure sports bike."
                    ]
                ]
            ],
            "accessory" => [
                "banner" => [
                    "image" => "/images/adventure/tigerSport660/tigerSport660AccesoryHero.avif"
                ],
                "infoText" => [
                    "title" => "Персонализирајте го вашиот Tiger Sport 660"
                ],
                "accessoryTypes" => [
                    [
                        "title" => "Додатоци",
                        "desc" => "Подобрете ја способноста за патување на долги растојанија со целосно интегрирани панталони и средишна покривка од 47 литри со капацитет за две кациги, сите во бојата на велосипедот. Елегантниот дизајн со единствена брава со единствен клуч ќе ги одржува вашите работи суви, заштитени и безбедни. Без разлика дали чувате лаптоп, два шлемови за цело лице или вреќи за спиење, стилскиот багаж ќе додаде практичност и флексибилност во вашиот секојдневен живот. Tiger Sport 660 доаѓа со дискретно интегрирани држачи како стандард, овозможувајќи лесно монтирање на додатоците за обложување, а истовремено задржувајќи го целиот чист стил на Tiger на задната страна кога не се инсталирани табли. Додајте ги целосно водоотпорните внатрешни кеси за да ги заштитите вашите работи од елементите, кои лесно се отстрануваат кога ќе стигнете до вашата дестинација. Други додатоци вклучуваат:",
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
                        'image1' => [
                            "src" => "/images/adventure/tigerSport660/tigerSport660Accessory2.avif",
                            "alt" => "Tiger Sport 660 Safety"
                        ]
                    ],
                    [
                        "title" => "технологија",
                        "desc" => "Задржете се во бојата на мотоциклот Додадете повеќе практичност и интеракција со возачот со единицата My Triumph Connectivity, овозможувајќи навигација чекор-по-сврт, контрола на камерата GoPro, функционалност на телефонот и музиката, сето тоа контролирано преку прекинувачите на рачката и прикажано на TFT екранот. Чувајте ги вашите лични уреди наполнети за секое возење со пригодниот приклучок за полнење USB под седлото и опцијата за приклучок од 12V што се наоѓа на левата страна од кокпитот. Има и Triumph Shift Assist брз менувач за брзи поместувања без спојка додека се одржува позицијата на гасот. Исто така, за поудобно возење во текот на целата година, внатрешните жици на воланот се веќе инсталирани ако изберете да го додадете комплетот за грип со греење. Ова обезбедува три поставки за температура, избрани преку паметно интегрираното копче. Можете исто така да додадете тркалачки LED индикатори и светли LED помошни светла за зголемена видливост и комплетен авантуристички стил (во зависност од земјата) . Системот за следење на притисокот во гумите (TPMS) е исто така одлична безбедносна помош што ќе ве предупреди рано за секое губење на притисокот во гумите. На споредливите пазари, комплетот за конверзија на лиценца А2 со држач за вртење APS и ексклузивно подесување на моторот ќе го ограничи велосипедот на 35 kW. Ова е лесно реверзибилно од дилер на Triumph штом ќе се добие целосното ослободување.",
                        'itemList' => [
                            "Triumph Connectivity ",
                            "USB и 12 волтни влезови за полнење под седиштето",
                            "Triumph Shift Assist",
                            "Интегрирани Греачи на Рачки на Волан",
                            "LED Трапкачи",
                            "LED Дополнителни Светла",
                            "Мониторинг за Притисок На Пневматици",
                            "A2 Fold Limit Ki"
                        ],
                        'image1' => [
                            "src" => "/images/adventure/tigerSport660/tigerSport660Accessory3.avif",
                            "alt" => "Tiger Sport 660 Luggage"
                        ]
                    ],
                    [
                        "title" => "Сигурност",
                        "desc" => "Во зависност од достапноста на локалниот пазар, алармот Triumph Protect+ или тракерот Triumph Track+ може да ги одврати потенцијалните крадци и да помогне во обновувањето доколку се случи незамисливото. Овие безбедносни уреди одобрени од Тачам доаѓаат со луксузни клучеви од брендот Triumph.",
                        'itemsList' => [
                            "Triumph Connectivity ",
                            "USB и 12 волтни влезови за полнење под седиштето",
                            "Triumph Shift Assist",
                            "Интегрирани Греачи на Рачки на Волан",
                            "LED Трапкачи",
                            "LED Дополнителни Светла",
                            "Мониторинг за Притисок На Пневматици",
                            "A2 Fold Limit Ki"
                        ],
                        'image1' => [
                            "src" => "/images/adventure/tigerSport660/tigerSport660Accessory4.avif",
                            "alt" => "Tiger Sport 660 Security"
                        ],
                        'image2' => [
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
                'subFamilyHeroVideo' => [
                    "src" => "/images/adventure/tigerSport660/heroVideo.webm",
                    "alt" => "Tiger Sport 660 Range Hero Image"
                ],
                'subFamilyTopSectionImage' => [
                    "src" => "/images/adventure/tigerSport660/tiger660TopSection.avif",
                    "alt" => "Tiger Sport 660 Range Top-Section Image"
                ],
                'subFamilyTopSectionBGImage' => [
                    "src" => "/images/adventure/tigerSport660/tiger660TopSectionBG.avif",
                    "alt" => "Tiger Sport 660 Range Top-Section Image"
                ]
            ]
        ];


        $subFamAdventureDataThree = [
                'model_name' => 'tiger-1200-gt',
                "subFamilyName" => "tiger-1200-gt",
                "title" => "Tiger 1200 GT",
                "price" => 20990,
                "url" => "/motorcycles/adventure/tiger-1200-gt",
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
                        "desc" => "11.95 =>1"
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
                        "title" => "Solar height",
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
                        "image" => "/images/adventure/tigerSport660/tiger660ReasonsBanner.avif"
                    ],
                    "infoText" => [
                        "title" => "Дефиницијата за разноликост е да се биде најдобар во се.",
                        "desc" => "Време е да се разбудите од досадните соништа со Tiger Sport 660. Ова е најпристапниот мотор од Tiger фамилијата на Triumph и е спремен за секојдневни авантури.Tiger Sport 660 е дизајниран да ги надмине вашите очекувања, од авантуристички тури па се до дневни обврски. Кај нас во Triumph се е во знак на возење, а еве и зошто =>"
                    ],
                    "reasons" => [
                        [
                            "title" => "Перформанси од Tiger Sport Серијата",
                            "desc" => "Equipped with the proven 660 three-cylinder engine, it is the lightest and most versatile Tiger yet. Designed to increase rider confidence from the moment you ride it, with an effortless feel on the Tiger 660. Its smooth 6-speed gearbox has been optimized for fun and agility, while the slip and assist clutch provides light engagement that reduces rider fatigue. rider, allowing you to enjoy the bike even more. The 660 delivers usable three-cylinder power with the twist of the wrist. Central to the versatility and exciting performance is the 660cc engine. A three-cylinder Triumph that beats the two-cylinder competition, delivering strong torque from low to high in the rev range, peaking at 64Nm @ 6,250rpm. Power is class-leading and utterly thrilling, peaking at 81PS @ 10,250rpm. It is smooth and linear, sporty and fun, for your daily commute or weekend pleasures.",
                            "image" => "/images/adventure/tigerSport660/tiger660ReasonsListImage1.avif"
                        ],
                        [
                            "title" => "Перфектна Хармонија Помеѓу Моторциклот и Возачот ",
                            "desc" => "Harmonizing with Tiger's rhythm comes naturally. It is the ultimate combination of practical performance and top thrills. The Tiger Sport 660 can be limited to an A2 license, opening doors to new adventure experiences, from touring to flexible fun driving. Designed to excite but tamed to build the confidence you need. Whether it's your first bike, your first motorcycle adventure, or a flexible means of transportation you're looking for, the Tiger Sport 660 has the technology and flair to revitalize your riding experience."
                        ],
                        [
                            "title" => "Инспирира Самодоверба",
                            "desc" => "Riding confidence is at the forefront of the adventure, setting off for a ride knowing that Tiger Sport's rider-focused technology and premium brakes and suspension are there to support you every moment. The upright stance with the lightweight frame and nimble engine make for a nimble and easy feel, without ever being intimidating. Add in the narrow riding position for easy ground contact, the low 835mm seat height and the excellent ergonomics setup and you have a bike with great agility and handling in any riding scenario.",
                            "image" => "/images/adventure/tigerSport660/tiger660ReasonsImage2.avif"
                        ],
                        [
                            "title" => "Направен за Вас",
                            "desc" => "No two riders are the same, so you can personalize your Tiger Sport 660 with a choice of three special colors and graphics and over 40 genuine Triumph accessories. From built-in luggage to a central case that holds 2 helmets, you'll be inspired by the options to suit your adventure. When everyday flexibility is your goal, you shouldn't be left behind. The bike is designed with the rider in mind - make it your own."
                        ],
                        [
                            "title" => "Секој ден, Цел Ден",
                            "desc" => "It's the journey that counts, not the destination, but the Tiger Sport 660 is designed to offer the ultimate in road adventure comfort. Featuring premium Showa 41mm separate function forks, Showa monoshock with remote hydraulically adjustable preload, slip and assist clutch, Road and Rain riding programs and the latest Triumph ABS technology and traction control program deactivation. From top to bottom the Tiger is designed to reduce fatigue and enhance your comfort to continue your adventure, with or without a passenger."
                        ],
                        [
                            "title" => "Максимална искористливост",
                            "desc" => "With its 17-litre fuel tank and top-of-the-line specification, the new Tiger Sport is ready for any adventure. Whether it's your daily commute, epic journeys with friends or maneuvering in tight urban spaces, the ride is anything but boring. The Tiger Sport's lightweight frame, road adventure setup and sporty feel make it the ultimate companion. Ready for the hard work of your daily commute revitalizing your work week but also fully capable of weekend jaunts and touring fun.",
                            "image" => "/images/adventure/tigerSport660/tiger660ReasonsImage3.avif"
                        ],
                        [
                            "title" => "Прекрасна Зделка",
                            "desc" => "The Tiger Sport 660's state-of-the-art technology, high-spec brakes, tires and suspension, confidence-inspiring agile handling, thrilling performance from the three-cylinder engine, unique styling and a very competitive price all combine to make it the perfect sporty choice. mid-range adventure - and the perfect entry point to the Triumph range. A leading service interval of 16,000km (or 12 months) and the lowest required service time in the segment also contribute to incredibly low running costs."
                        ],
                        [
                            "title" => "Уникатен Стил",
                            "desc" => "A new generation Tiger Sport in every way, with all the benefits of Triumph's class-redefining 660cc three-cylinder engine. Strong. Versatile. And with its thoughtful design, it embodies the modern Triumph style and character. The upright and imposing adventure stance, the protective gel and refined ergonomics promise comfort and thrills throughout your ride. All-new Tiger Sport 660 color schemes, class-leading premium finish and over 40 accessories will make the bike an absolute eye-catcher. Unmistakably Triumph, and the new perfectly-rounded mid-range adventure sports bike."
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
                        "alt" => "Tiger Sport 850 Range Hero Image"
                    ],
                    "subFamilyTopSectionImage" => [
                        "src" => "/images/adventure/tiger1200GT/tiger1200GTTopSection.avif",
                        "alt" => "Tiger Sport 850 Range Top-Section Image"
                    ],
                    "subFamilyTopSectionBGImage" => [
                        "src" => "/images/adventure/tiger1200GT/tiger1200GTTopSectionBG.avif",
                        "alt" => "Tiger Sport 850 Range Top-Section Image"
                    ]
                ]
        ];

        $subFamAdventureDataFour = [
                "model_name" => "Tiger 1200 Rally",
                "subFamilyName" => "tiger-1200-rally",
                "title" => "Tiger 1200 Rally",
                "price" => 21990,
                "url" => "/motorcycles/adventure/tiger-1200-gt",
                "heroSlogans" => ["оживеј", "ја", "авантурата"],
                "subFamilyPageInfo" => [
                    "topSection" => [
                        "title" => "Откриј ја Авантурата",
                        "desc" => "Изграден за секаков пат. Најновиот авантуристички шампион ве води низе светот, низ пустина и совладува планини.",
                        "subtitle" => "Новиот репер за авантури. Нај-возбудливиот нај-способниот, комфортен и версатилен Tiger 1200 мотор досега."
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
                        "desc" => "11.95 =>1"
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
                        "title" => "Solar height",
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
                        "image" => "/images/adventure/tigerSport660/tiger660ReasonsBanner.avif"
                    ],
                    "infoText" => [
                        "title" => "Дефиницијата за разноликост е да се биде најдобар во се.",
                        "desc" => "Време е да се разбудите од досадните соништа со Tiger Sport 660. Ова е најпристапниот мотор од Tiger фамилијата на Triumph и е спремен за секојдневни авантури.Tiger Sport 660 е дизајниран да ги надмине вашите очекувања, од авантуристички тури па се до дневни обврски. Кај нас во Triumph се е во знак на возење, а еве и зошто =>"
                    ],
                    "reasons" => [
                        [
                            "title" => "Перформанси од Tiger Sport Серијата",
                            "desc" => "Equipped with the proven 660 three-cylinder engine, it is the lightest and most versatile Tiger yet. Designed to increase rider confidence from the moment you ride it, with an effortless feel on the Tiger 660. Its smooth 6-speed gearbox has been optimized for fun and agility, while the slip and assist clutch provides light engagement that reduces rider fatigue. rider, allowing you to enjoy the bike even more. The 660 delivers usable three-cylinder power with the twist of the wrist. Central to the versatility and exciting performance is the 660cc engine. A three-cylinder Triumph that beats the two-cylinder competition, delivering strong torque from low to high in the rev range, peaking at 64Nm @ 6,250rpm. Power is class-leading and utterly thrilling, peaking at 81PS @ 10,250rpm. It is smooth and linear, sporty and fun, for your daily commute or weekend pleasures.",
                            "image" => "/images/adventure/tigerSport660/tiger660ReasonsListImage1.avif"
                        ],
                        [
                            "title" => "Перфектна Хармонија Помеѓу Моторциклот и Возачот ",
                            "desc" => "Harmonizing with Tiger's rhythm comes naturally. It is the ultimate combination of practical performance and top thrills. The Tiger Sport 660 can be limited to an A2 license, opening doors to new adventure experiences, from touring to flexible fun driving. Designed to excite but tamed to build the confidence you need. Whether it's your first bike, your first motorcycle adventure, or a flexible means of transportation you're looking for, the Tiger Sport 660 has the technology and flair to revitalize your riding experience."
                        ],
                        [
                            "title" => "Инспирира Самодоверба",
                            "desc" => "Riding confidence is at the forefront of the adventure, setting off for a ride knowing that Tiger Sport's rider-focused technology and premium brakes and suspension are there to support you every moment. The upright stance with the lightweight frame and nimble engine make for a nimble and easy feel, without ever being intimidating. Add in the narrow riding position for easy ground contact, the low 835mm seat height and the excellent ergonomics setup and you have a bike with great agility and handling in any riding scenario.",
                            "image" => "/images/adventure/tigerSport660/tiger660ReasonsImage2.avif"
                        ],
                        [
                            "title" => "Направен за Вас",
                            "desc" => "No two riders are the same, so you can personalize your Tiger Sport 660 with a choice of three special colors and graphics and over 40 genuine Triumph accessories. From built-in luggage to a central case that holds 2 helmets, you'll be inspired by the options to suit your adventure. When everyday flexibility is your goal, you shouldn't be left behind. The bike is designed with the rider in mind - make it your own."
                        ],
                        [
                            "title" => "Секој ден, Цел Ден",
                            "desc" => "It's the journey that counts, not the destination, but the Tiger Sport 660 is designed to offer the ultimate in road adventure comfort. Featuring premium Showa 41mm separate function forks, Showa monoshock with remote hydraulically adjustable preload, slip and assist clutch, Road and Rain riding programs and the latest Triumph ABS technology and traction control program deactivation. From top to bottom the Tiger is designed to reduce fatigue and enhance your comfort to continue your adventure, with or without a passenger."
                        ],
                        [
                            "title" => "Максимална искористливост",
                            "desc" => "With its 17-litre fuel tank and top-of-the-line specification, the new Tiger Sport is ready for any adventure. Whether it's your daily commute, epic journeys with friends or maneuvering in tight urban spaces, the ride is anything but boring. The Tiger Sport's lightweight frame, road adventure setup and sporty feel make it the ultimate companion. Ready for the hard work of your daily commute revitalizing your work week but also fully capable of weekend jaunts and touring fun.",
                            "image" => "/images/adventure/tigerSport660/tiger660ReasonsImage3.avif"
                        ],
                        [
                            "title" => "Прекрасна Зделка",
                            "desc" => "The Tiger Sport 660's state-of-the-art technology, high-spec brakes, tires and suspension, confidence-inspiring agile handling, thrilling performance from the three-cylinder engine, unique styling and a very competitive price all combine to make it the perfect sporty choice. mid-range adventure - and the perfect entry point to the Triumph range. A leading service interval of 16,000km (or 12 months) and the lowest required service time in the segment also contribute to incredibly low running costs."
                        ],
                        [
                            "title" => "Уникатен Стил",
                            "desc" => "A new generation Tiger Sport in every way, with all the benefits of Triumph's class-redefining 660cc three-cylinder engine. Strong. Versatile. And with its thoughtful design, it embodies the modern Triumph style and character. The upright and imposing adventure stance, the protective gel and refined ergonomics promise comfort and thrills throughout your ride. All-new Tiger Sport 660 color schemes, class-leading premium finish and over 40 accessories will make the bike an absolute eye-catcher. Unmistakably Triumph, and the new perfectly-rounded mid-range adventure sports bike."
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

        SubFamAdventure::create($subFamAdventureData);
        SubFamAdventure::create($subFamAdventureDataTwo);
        SubFamAdventure::create($subFamAdventureDataThree);
        SubFamAdventure::create($subFamAdventureDataFour);
    }
}
