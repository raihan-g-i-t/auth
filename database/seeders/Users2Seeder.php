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
        User2::updateOrCreate([
            'name' => 'Raihan2',
            'email' => 'raihan2@gamil.com'
        ]);

        User2::upsert([
            'name' => 'Raihan5',
            'email' => 'raihan5@email.com'
        ],
        ['email'],
    ['email']);
    }
}
