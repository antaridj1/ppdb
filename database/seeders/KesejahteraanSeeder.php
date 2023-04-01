<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class KesejahteraanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        $jenis = ['PKH', 'PIP', 'Kartu Perlindungan Sosial', 'Kartu Kesehatan'];

        $data_pribadi = 1;
        for($i=1; $i<=7; $i++){
            for($j=1; $j<=5; $j++){
                DB::table('kesejahteraan')->insert([
                    'data_pribadi_id' => $data_pribadi,
                    'jenis_kesejahteraan' => $jenis[array_rand($jenis)],
                    'no_kartu' => $faker->numberBetween(1000000000000000, 9999999999999999),
                    'nama_sejahtera' => $faker->name,
                ]);
                $data_pribadi++;
            }
        }
    }
}
