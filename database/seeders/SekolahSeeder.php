<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SekolahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sekolah::create([
            'nama_sekolah' => 'SDN 01 Gianyar',
                'alamat_sekolah' => 'Gianyar',
                'email'=>'sdn01gianyar@gmail.com',
                'tlp_sekolah' => mt_rand(1000000000, 9999999999),
                'password' => Hash::make('password'),
        ]);
    }
}
