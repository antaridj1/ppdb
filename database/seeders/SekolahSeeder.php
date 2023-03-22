<?php

namespace Database\Seeders;

use App\Models\Sekolah;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class SekolahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sekolah')->insert([
            'nama_sekolah' => 'SDN 01 Gianyar',
            'alamat_sekolah' => 'Gianyar',
            'email' => 'sdn01@gmail.com',
            'tlp_sekolah' => '098762635261',
            'password' => Hash::make('password'),
            // 'created_at' => Carbon\Carbon::now(),
        ]);
        DB::table('sekolah')->insert([
            'nama_sekolah' => 'SDN 02 Gianyar',
            'alamat_sekolah' => 'Gianyar',
            'email' => 'sdn02@gmail.com',
            'tlp_sekolah' => '098762635262',
            'password' => Hash::make('password'),
            // 'created_at' => Carbon\Carbon::now(),
        ]);
        DB::table('sekolah')->insert([
            'nama_sekolah' => 'SDN 03 Gianyar',
            'alamat_sekolah' => 'Gianyar',
            'email' => 'sdn03@gmail.com',
            'tlp_sekolah' => '098762635263',
            'password' => Hash::make('password'),
            // 'created_at' => Carbon\Carbon::now(),
        ]);
        DB::table('sekolah')->insert([
            'nama_sekolah' => 'SDN 04 Gianyar',
            'alamat_sekolah' => 'Gianyar',
            'email' => 'sdn04@gmail.com',
            'tlp_sekolah' => '098762635263',
            'password' => Hash::make('password'),
            // 'created_at' => Carbon\Carbon::now(),
        ]);
        DB::table('sekolah')->insert([
            'nama_sekolah' => 'SDN 05 Gianyar',
            'alamat_sekolah' => 'Gianyar',
            'email' => 'sdn05@gmail.com',
            'tlp_sekolah' => '098762635263',
            'password' => Hash::make('password'),
            // 'created_at' => Carbon\Carbon::now(),
        ]);
        DB::table('sekolah')->insert([
            'nama_sekolah' => 'SDN 06 Gianyar',
            'alamat_sekolah' => 'Gianyar',
            'email' => 'sdn06@gmail.com',
            'tlp_sekolah' => '098762635263',
            'password' => Hash::make('password'),
            // 'created_at' => Carbon\Carbon::now(),
        ]);
        DB::table('sekolah')->insert([
            'nama_sekolah' => 'SDN 07 Gianyar',
            'alamat_sekolah' => 'Gianyar',
            'email' => 'sdn07@gmail.com',
            'tlp_sekolah' => '098762635263',
            'password' => Hash::make('password'),
            // 'created_at' => Carbon\Carbon::now(),
        ]);
    }
}
