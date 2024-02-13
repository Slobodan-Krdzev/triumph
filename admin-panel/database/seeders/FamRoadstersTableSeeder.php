<?php

namespace Database\Seeders;

use App\Models\FamRoadsters;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FamRoadstersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roadsterData = [
            "type" => "roadsters",
            "familyPageBannerDesc" => "Мотори кои ги менуваат правилата за 'Naked Bike'. Препознатливите 3-цилиндрични мотори на Triumph се дизајнирани за моќност, вртежен момент и моментален одговор.",
            "familyPageBannerVideo" => "roadsters/roadsterHeroVideo.webm",
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
        ];


        FamRoadsters::create($roadsterData);

    }
}
