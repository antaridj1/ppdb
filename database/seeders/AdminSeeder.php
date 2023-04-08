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
                'email' => 'superadmin@gmail.com',
                'password' => bcrypt('12345678'),
                'tlp_admin'  => '089765456765',
            ],
           
        ];

        foreach($admins as $admin){
            Admin::create($admin);
        } 
       
    }
}
