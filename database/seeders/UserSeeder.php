<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            [
                'name' => 'Memrade2',
                'email' => 'guillermo29andrade@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('123456'),
            ],
            [
                'name' => 'Ernesto',
                'email' => 'memo29andrade@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('123456'),
            ],
            [
                'name' => 'Giovanni',
                'email' => 'andrade@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('123456'),
            ],
            [
                'name' => 'Wilmar',
                'email' => 'prueba@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('123456'),
            ],
        ]);
    }
}
