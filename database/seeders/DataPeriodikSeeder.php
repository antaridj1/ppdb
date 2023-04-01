<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class DataPeriodikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        $jarak = ['Kurang dari 1 Km', 'Lebih dari 1 Km'];

        $data_pribadi = 1;
        for($i=1; $i<=7; $i++){
            for($j=1; $j<=5; $j++){
                DB::table('data_periodik')->insert([
                    'data_pribadi_id' => $data_pribadi,
                    'tinggi_badan' => 135,
                    'berat_badan' => 25,
                    'lingkar_kepala' => 40,
                    'jarak' => $jarak[array_rand($jarak)],
                    'km' => rand(0, 20),
                    'waktu_tempuh' => rand(0, 1).'jam' . rand(0, 59) . 'menit',
                    'jumlah_saudara' => 1
                ]);
                $data_pribadi++;
            }
        }
    }
}
