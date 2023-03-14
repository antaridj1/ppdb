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
                'name' => 'Arsitek A',
                'email' => 'arsitek1@gmail.com',
                'password' => bcrypt('12345678'),
                'phone_number'  => '089765456765',
                'isAdmin' => false
            ],
            [
                'name' => 'Arsitek B',
                'email' => 'arsitek2@gmail.com',
                'password' => bcrypt('12345678'),
                'phone_number'  => '089765456765',
                'isAdmin' => false
            ],
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('12345678'),
                'phone_number'  => '089765456765',
                'isAdmin' => true
            ],
           
        ];

        foreach($admins as $admin){
            Admin::create($admin);
        } 
       
    }
}
