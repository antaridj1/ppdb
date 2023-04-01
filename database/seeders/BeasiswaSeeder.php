<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Beasiswa;

class BeasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        $prestasi = ['anak miskin', 'pendidikan', 'unggulan'];
        $keterangan = ['Beasiswa Pendidikan Indonesia (BPI)', 'Beasiswa Bank BRI', 'Beasiswa Bidikmisi', 'Beasiswa Bintang'];
        $data_pribadi = 1;
        for($i=1; $i<=7; $i++){
            for($j=1; $j<=5; $j++){
                for($k=1; $k<=3; $k++){
                    DB::table('beasiswa')->insert([
                        'data_pribadi_id' => $data_pribadi,
                        'jenis_anak_berprestasi' => $prestasi[array_rand($prestasi)],
                        'keterangan' => $keterangan[array_rand($keterangan)],
                        'tahun_mulai' => '2022',
                        'tahun_selesai' => '2023',
                    ]);
                }
                $data_pribadi++;
            }
        }
    }
}
