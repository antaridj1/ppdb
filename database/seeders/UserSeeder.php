<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $users =  [
            [
                'name' => 'User',
                'email' => 'user@gmail.com',
                'password' => bcrypt('12345678'),
                'no_hp'  => '089765456765',
                'sekolah_id' => 1
            ],
           
        ];

        foreach($users as $user){
            User::create($user);
        } 
       
    }
}
