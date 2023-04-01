<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\SekolahSeeder;
use Database\Seeders\BeasiswaSeeder;
use Database\Seeders\DataAyahSeeder;
use Database\Seeders\DataIbuSeeder;
use Database\Seeders\DataPeriodikSeeder;
use Database\Seeders\KesejahteraanSeeder;
use Database\Seeders\PrestasiSeeder;
use Database\Seeders\FileSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            AdminSeeder::class,
            SekolahSeeder::class,
            DataPribadiSeeder::class,
            SiswaSeeder::class,
            BeasiswaSeeder::class,
            DataAyahSeeder::class,
            DataIbuSeeder::class,
            DataPeriodikSeeder::class,
            KesejahteraanSeeder::class,
            PrestasiSeeder::class,
            FileSeeder::class,
        ]);
    }
}
