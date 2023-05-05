<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\DataAyah;

class DataAyahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        $pendidikan = ['Tidak Sekolah', 'Putus SD', 'SD Sederajat', 'SMP Sederajat', 'SMA Sederajat', 'D1', 'D2', 'D3', 'S1', 'S2'];
        $pekerjaan = ['Tidak Bekerja', 'Nelayan', 'Petani', 'Peternak', 'PNS/TNI/POLRI', 'Karyawan Swasta', 'Pedagang Kecil', 'Pedangan Besar', 'Wiraswasta', 'Wirausaha', 'Buruh', 'Pensiun'];
        $penghasilan = ['< Rp 500.000', 'Rp 500.000 - Rp 999.999', 'Rp 1.000.000 - Rp 1.999.999', 'Rp 2.000.000 - Rp 4.999.999', 'Rp 5.000.000 - Rp 20.000.000', '> Rp 20.000.000', 'Tidak Berpenghasilan'];
        $berkebutuhan = ['tidak', 'netra', 'rungu', 'grahita ringan', 'grahita sedang', 'daksa ringan', 'daksa sedang', 'laras','wicara', 'tuna jganda', 'hiper aktif', 'cerdas aktif', 'bakat istimewa', 'kesulitan belajar', 'narkoba', 'indigo', 'down sindrome', 'autis'];
        $date = $faker->dateTimeBetween('1970-01-01', '1979-12-31');
        $year = $date->format('Y');

        $data_pribadi = 1;
        for($i=1; $i<=7; $i++){
            for($j=1; $j<=5; $j++){
                DB::table('data_ayah')->insert([
                    'data_pribadi_id' => $data_pribadi,
                    'nama_ayah' => $faker->name,
                    'nik_ayah' => $faker->numberBetween(1000000000000000, 9999999999999999),
                    'tahun_ayah' => $year,
                    'pendidikan_ayah' => $pendidikan[array_rand($pendidikan)],
                    'pekerjaan_ayah' => $pekerjaan[array_rand($pekerjaan)],
                    'penghasilan_ayah' => $penghasilan[array_rand($penghasilan)],
                    'berkebutuhan_khusus_ayah' => $berkebutuhan[array_rand($berkebutuhan)],
                ]);
                $data_pribadi++;
            }
        }
    }
}
