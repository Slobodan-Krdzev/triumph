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
        $this->call(MotoFamiliesTableSeeder::class);
        $this->call(MotorcyclesTableSeeder::class);
        $this->call(PromoTableSeeder::class);
        $this->call(SubFamAdventureTableSeeder::class);



    }
}
