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
                'judul' => 'Alur Pendaftaran',
                'pengumuman' => 'Proses pendaftaran peserta didik baru dimulai dengan membuat akun sesuai dengan sekolah yang dituju, kemudian lakukan login.
                Setelah berhasil login, pendaftar memasuki menu Data Peserta Didik untuk melakukan registrasi. Isi data diri yang diperlukan dan upload data.
                Informasi mengenai progres pendaftaran dapat dilihat di halaman Dashboard.'
            ],
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
