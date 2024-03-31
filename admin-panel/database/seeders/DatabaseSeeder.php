<?php

namespace Database\Seeders;


use App\Models\LatestCarousell;
use App\Models\MainCarousell;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call(FamiliesSeeder::class);
        $this->call(SubFamiliesSeeder::class);
        $this->call(MotorcyclesSeeder::class);
        $this->call(PromosSeeder::class);
        $this->call(MainCarousellSeeder::class);
        $this->call(LatestCarousellSeeder::class);

    }
}
