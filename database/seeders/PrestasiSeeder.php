<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use App\Models\Prestasi;

class PrestasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        $jenis = ['sains', 'seni', 'olah raga', 'lain-lain'];
        $tingkat = ['kecamatan', 'kabupaten', 'provinsi', 'nasional','internasional'];

        $data_pribadi = 1;
        for($i=1; $i<=7; $i++){
            for($j=1; $j<=5; $j++){
                for($k=1; $k<=3; $k++){
                    DB::table('prestasi')->insert([
                        'data_pribadi_id' => $data_pribadi,
                        'nama_prestasi' => $faker->catchPhrase(),
                        'tahun' => 2022,
                        'penyelenggara' => $faker->company(),
                        'jenis_prestasi' => $jenis[array_rand($jenis)],
                        'tingkat' => $tingkat[array_rand($tingkat)],
                    ]);
                }
                $data_pribadi++;
            }
        }
    }
}
