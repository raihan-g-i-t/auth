<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $arr = array([
                        'name' => 'raihan',
                        'email' => 'raihan@email.com',
                        'password' => '123'
                    ],
                
                    [
                        'name' => 'Apu',
                        'email' => 'apu@email.com',
                        'password' => '123'
                    ]);

        foreach($arr as $user){
            User::insert($user);
        }
    }
}
