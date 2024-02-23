<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\SubFamAdventure;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(FamAdventureTableSeeder::class);
        $this->call(FamClassicsTableSeeder::class);
        $this->call(FamOffRoadTableSeeder::class);
        $this->call(FamRoadstersTableSeeder::class);
        $this->call(FamRocket3TableSeeder::class);
        $this->call(FamSportTableSeeder::class);
        $this->call(MotorcyclesTableSeeder::class);
        $this->call(PromoTableSeeder::class);
        $this->call(PromoClassicsTableSeeder::class);
        $this->call(PromoOffRoadTableSeeder::class);
        $this->call(PromoRoadstersTableSeeder::class);
        $this->call(PromoSportTableSeeder::class);
        $this->call(SubFamAdventureTableSeeder::class);



    }
}
