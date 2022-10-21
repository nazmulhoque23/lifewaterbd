<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $userData = 
            [
               'name'=>'Admin',
               'email'=>'admin@gmail.com',
                'is_admin'=>'1',
                'mobile_no'=>'01850320559',
               'password'=> bcrypt('12345678'),
            ];
  
        
            User::create($userData);
        
    }
}
