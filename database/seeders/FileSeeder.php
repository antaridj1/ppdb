<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class FileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data_pribadi = 1;
        for($i=1; $i<=7; $i++){
            for($j=1; $j<=5; $j++){
                DB::table('file')->insert([
                    'data_pribadi_id' => $data_pribadi,
                    'file_kk' => 'file/kk/yahu.pdf',
                    'file_akta_kelahiran' => 'file/akta/yahu.pdf',
                    'file_ktp_ortu' => 'file/ktp/yahu.pdf',
                    'file_ijazah_tk' => 'file/ijazah/yahu.pdf'
                ]);
                $data_pribadi++;
            }
        }
    }
}
