<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $admins =  [
            [
                'nama_admin' => 'Admin',
                'email' => 'ppdb@gmail.com',
                'password' => bcrypt('password'),
                'tlp_admin'  => '089765456765',
            ],
           
        ];

        foreach($admins as $admin){
            Admin::create($admin);
        } 
       
    }
}
