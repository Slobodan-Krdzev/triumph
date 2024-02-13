<?php

namespace Database\Seeders;

use App\Models\FamRocket;
use App\Models\FamRocket3;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FamRocket3TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rocket3Data = [
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
        ];

        FamRocket3::create($rocket3Data);

    }
}
