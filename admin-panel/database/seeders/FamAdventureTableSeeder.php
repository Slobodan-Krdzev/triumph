<?php

namespace Database\Seeders;

use App\Models\FamAdventure;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FamAdventureTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $familyData = [
            'type' => "adventure",
            'mainBikeLogoImage' => [
                'url' => 'adventure/mainBikeLogo.png',
                'alt' => 'Adventure Main Bike Logo',
            ],
            'familyPageBannerDesc' => 'The next generation Tiger has arrived. The state-of-the-art adventure bikes with exciting distinctive three-cylinder engines, pioneering progressive technology and equipment, rider ergonomics for ultimate control, and flexible neutral handling. Every Tiger is built with maximum capabilities to take you anywhere in style, comfort and control. The Triumph Tiger is the ultimate adventure series of adventure bikes that allow you to test every moment.',

            'familyPageBannerVideo' => 'adventure/adventureHeroVideo.webm',
            'topSectionInfo' => [
                'image' => [
                    'src' => '/images/adventure/firstSectionImage.avif',
                    'alt' => 'Adventure Bikes',
                ],
                'title' => 'Направен за Авантури',
                'desc1' => 'Секој моторцикл во "Tigеr" фамилијата е роден со вистински дух за авантура.',
                'desc2' => 'Познато по нивното агилно управување, командна позиција на возење, итн.',
            ],
            'configPageInfo' => [
                'desc' => 'Истражете го светот на авантурите, со мотоцикли изградени за секогаш да стигнат до крајот на патот, подготвени да одат каде било и да постигнат сè.',
                'link' => '/configure/families/adventure',
            ],
            'configFamilyPageInfo' => [
                'image' => [
                    'src' => '/images/adventure/configFamilyBanner.avif',
                    'alt' => 'Adventure Bikes Banner'
                ],
                'title' => 'Додајте аксесоари на вашиот мотор',
                'link' => '/configure/bikes'
            ],

        ];

        FamAdventure::create($familyData);
    }
}
