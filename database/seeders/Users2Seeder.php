<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User2;


class Users2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User2::create([
            'name' => 'Raihan',
            'email' => 'raihan@gamil.com'
        ]);
    }
}
