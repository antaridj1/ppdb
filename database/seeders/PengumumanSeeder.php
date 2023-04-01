<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PengumumanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pengumuman')->insert([
            [
                'judul' => 'Waktu Pendaftaran',
                'pengumuman' => 'Waktu pendaftaran dibuka pada tanggal 12 Agustus 2023 hingga 29 Oktober 2023'
            ],
            [
                'judul' => 'Pengumuman Penerimaan',
                'pengumuman' => 'Waktu penerimaan dibuka pada tanggal 12 Agustus 2023 hingga 29 Oktober 2023'
            ]
        ]);
    }
}
