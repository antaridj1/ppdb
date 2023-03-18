<?php

namespace Database\Seeders;

use App\Models\Sekolah;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class SekolahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $sekolahs =  [
            [
                'nama_sekolah' => 'SDN 01 Gianyar',
                'alamat_sekolah' => 'Gianyar',
                'email'=>'sdn01gianyar@gmail.com',
                'tlp_sekolah' => mt_rand(1000000000, 9999999999),
                'password' => Hash::make('password'),
            ],
           
        ];

        foreach($sekolahs as $sekolah){
            Sekolah::create($sekolah);
        } 
    }
}
