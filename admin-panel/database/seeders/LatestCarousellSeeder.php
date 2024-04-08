<?php

namespace Database\Seeders;

use App\Models\LatestCarousell;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LatestCarousellSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $latestCarousellData = [
            [
                "title" => "SCRAMBLER 1200",
                "desc" => "Автентичен Scrambler стил и врвни авантуристички перформанси. Scrambler 1200 е најмоќната Scrambler серија. Најновата верзија е уште подостапна и спремна за секојдневните препреки, викенд прошетки и долги авантури.",
                "url" => "/motorcycles/classics/scrambler-1200",
                "image" => "http://127.0.0.1:8000/storage/latestCarousel/scrambler-1200/images/scrambler1200LatestModelsCarousell.avif"
            ],
            [
                "title" => "TIGER 900",
                "desc" => "Нови Tiger 900 модели инспирирани од Baja Aragon 2022 базирани на Tiger 900 Rally Pro моторите.",
                "url" => "/motorcycles/adventure/tiger-900",
                "image" => "http://127.0.0.1:8000/storage/latestCarousel/tiger-900/images/tiger900AragonLatestModelsCarousell.avif"
            ],
            [
                "title" => "SPEED 400",
                "desc" => "Новата Speed 400 серија во себе ја носи онаа уникатна Triumph - Modern Classic ДНК.",
                "url" => "/motorcycles/classics/speed-400",
                "image" => "http://127.0.0.1:8000/storage/latestCarousel/speed-400/images/speed400LatestModelsCarousell.avif"
            ],
            [
                "title" => "SCRAMBLER 400 X",
                "desc" => "Перфектно избалансиран и флексибилен, новиот Scrambler 400 X е спремна за сите видови на возачи и терени.",
                "url" => "/motorcycles/classics/scrambler-400-x",
                "image" => "http://127.0.0.1:8000/storage/latestCarousel/scrambler-400-x/images/scrambler400XLatestModelsCarousell.avif"
            ]
        ];

        foreach ($latestCarousellData as $latestCarousell){
            LatestCarousell::create($latestCarousell);
        }
    }
}
