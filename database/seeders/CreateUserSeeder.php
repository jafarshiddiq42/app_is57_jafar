<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CreateUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         $user =[
            //  [
            //      'name'=>'admin',
            //      'email'=>'admin@jafar.com',
            //      'is_admin'=>'1',
            //      'password'=>bcrypt('12345'),
            //  ],
             [
                 'name'=>'admin',
                 'phone'=>'admin1@jafar.com',
                 'checkpin'=>true,
                 'is_admin'=>'1',
                 'password'=>bcrypt('12345'),
             ],
                  
         ];
         foreach ($user as $key => $value) {
            User::create($value);  
          }
    }
}
