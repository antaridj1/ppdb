<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Faker\Provider\id_ID\Person;
use Illuminate\Support\Facades\DB;


class DataPribadiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for($i=1; $i<=7; $i++){
            for($j=1; $j<=5; $j++){
                $gender = ['Laki-laki', 'Perempuan'];
                $berkebutuhan = ['Tidak', 'Netra', 'Rungu', 'Grahita Ringan', 'Grahita Sedang', 'Daksa Ringan', 'Daksa Sedang', 'Laras','Wicara', 'Tuna Ganda', 'Hiper Aktif', 'Cerdas Aktif', 'Bakat Istimewa', 'Kesulitan Belajar', 'Narkoba', 'Indigo', 'Down Sindrome', 'Autis'];
                $agama = ['Islam', 'Kristen/Protestan', 'Khatolik', 'Hindu', 'Budha', 'Konghucu', 'Kepercayaan kepada Tuhan YME'];
                $tempat_tinggal = ['Bersama orang tua', 'Wali', 'Kos', 'Asrama', 'Panti Asuhan'];
                $transport = ['Jalan kaki', 'Kendaraan pribadi', 'Kendaraan umum', 'Jemputan sekolah', 'Kereta api', 'Ojek', 'Becak', 'Perahu penyebrangan', 'Lainnya'];
                $kip = ['iya', 'tidak'];
                $pip = ['Menerima bantuan serupa', 'Menolak', 'Sudah mampu'];
                DB::table('data_pribadi')->insert([
                    'sekolah_id' => $i,
                    'nama_lengkap' => $faker->name,
                    'gender' => $gender[array_rand($gender)],
                    'nisn' => $faker->numberBetween(1000000000, 9999999999),
                    'nik' => $faker->numberBetween(1000000000000000, 9999999999999999),
                    'kk' => $faker->numberBetween(1000000000000000, 9999999999999999),
                    'tempat_lahir' => 'Denpasar',
                    'tgl_lahir' => $faker->date,
                    'akta_kelahiran' => $faker->numberBetween(1000000000000000, 9999999999999999),
                    'agama' => $agama[array_rand($agama)],
                    'kewarganegaraan' => 'WNI',
                    'negara' => 'Indonesia',
                    'berkebutuhan_khusus' => $berkebutuhan[array_rand($berkebutuhan)],
                    'alamat' => 'Denpasar',
                    'rt' => '001',
                    'rw' => '001',
                    'dusun' => 'Ngijo',
                    'kelurahan' => 'Tasikmadu',
                    'kecamatan' => 'Karanganyar',
                    'kode_pos' => $faker->randomNumber(5, false),
                    'lintang' => $faker->numberBetween(1000000000000000, 9999999999999999),
                    'bujur' => '-' . $faker->numberBetween(1000000000000000, 9999999999999999),
                    'tempat_tinggal' => $tempat_tinggal[array_rand($tempat_tinggal)],
                    'moda_tranportasi' => $transport[array_rand($transport)],
                    'anak_ke' => 1,
                    'kip' => $kip[array_rand($kip)],
                    'menerima_kip' => $kip[array_rand($kip)],
                    'pip' => $pip[array_rand($pip)],
                    'isAccepted' => false,
                    'isVerificated' => false,
                ]);
            }
        }
    }
}
