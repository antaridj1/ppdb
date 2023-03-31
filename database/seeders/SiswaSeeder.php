<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;


class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $data_pribadi = 1;
        for($i=1; $i<=7; $i++){
            for($j=1; $j<=5; $j++){
                DB::table('siswa')->insert([
                    'data_pribadi_id' => $data_pribadi,
                    'sekolah_id' => $i,
                    'email' => $faker->email,
                    'password' => Hash::make('password'),
                    'no_tlp' => $faker->randomNumber(10, false),
                    'no_hp' => $faker->randomNumber(12, false),
                    'daftar' => 1,
                ]);

                $data_pribadi++;
            }
        }

    }
}
