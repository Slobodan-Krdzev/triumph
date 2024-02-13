<?php

namespace Database\Seeders;

use App\Models\FamSport;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FamSportTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sportData = [
            "type" => "sport",
            "familyPageBannerDesc" => "Мотори кои ги менуваат правилата за 'Naked Bike'. Препознатливите 3-цилиндрични мотори на Triumph се дизајнирани за моќност, вртежен момент и моментален одговор.",
            "familyPageBannerVideo" => "/images/sport/familyPageBannerVideo.webm",
            "configPageInfo" => [
              "link" => "/configure/families/sport"
            ],
            "configFamilyPageInfo" => [
              "image" => [
                "src" => "/images/sport/configPageBannerImage.jpg",
                "alt" => "Sport Bikes Banner Image"
              ]
            ],
            "youtubeVideo" => "https://www.youtube.com/embed/PpnixM8wkv4",
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
        ];

        FamSport::create($sportData);
    }
}
