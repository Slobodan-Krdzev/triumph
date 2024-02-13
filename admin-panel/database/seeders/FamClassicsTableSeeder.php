<?php

namespace Database\Seeders;

use App\Models\ClassicsFam;
use App\Models\FamClassics;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FamClassicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $classicsFamData = [
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
            ],
        ];


        FamClassics::create($classicsFamData);

    }
}
