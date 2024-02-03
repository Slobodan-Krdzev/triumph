<?php

namespace Database\Seeders;

use App\Models\ClassicsFam;
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
            "familyPageBannerVideo" => "adventure/adventureHeroVideo.webm",
            "configPageInfo" => [
                "desc" => "Легендарната 'Bonneville' крвна линија е вградена во нашите модерни класици, со неспоредлива историја на изведби, тркачки успех и културно влијание.",
                "link" => "/configure/families/classics"
            ],
            "configFamilyPageInfo" => [
                "image" => [
                    "src" => "/images/classics/configFamilyBanner.avif",
                    "alt" => "Classic Bikes Banner"
                ],
                "title" => "Додајте аксесоари на вашиот мотор",
                "link" => "/configure/bikes"
            ],
        ];


        ClassicsFam::create($classicsFamData);

    }
}
