<?php

namespace Database\Seeders;

use App\Models\MainCarousellItem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MainCarousellItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        MainCarousellItem::create([
            'video' => '/images/home/mainCarousell/tigerCaroVideo.webm',
            'image' => '/images/home/mainCarousell/tigerCaroImage.avif',
            'title' => 'Tiger 900 Серија',
            'desc' => 'Новиот Tiger 900 повторно повторно се искачи на врвот и стана репер за останатите мотори од авантуристички карактер. Откријте го новиот Tiger 900.',
            'link1' => json_encode([
                'url' => '/motorcycles/adventure/tiger-900',
                'text' => 'Погледни ја Серијата',
            ]),
            'link2' => json_encode([
                'url' => '/configure/bike/tiger-900-gt-2024',
                'text' => 'Конфигурации',
            ]),
        ]);
    }
}
