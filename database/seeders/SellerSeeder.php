<?php

namespace Database\Seeders;

use App\Models\Seller;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SellerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Seller::insert([
            [
                'dui' => '06052985-3',
                'address' => 'Apopa',
                'nit' => '456789-456-78-5',
                'user_id' => 1,
            ],
            [
                'dui' => '06052985-3',
                'address' => 'Santa Tecla',
                'nit' => '456789-456-78-5',
                'user_id' => 2,
            ],
            [
                'dui' => '06052985-3',
                'address' => 'Lourdes',
                'nit' => '456789-456-78-5',
                'user_id' => 3,
            ],
            [
                'dui' => '06052985-3',
                'address' => 'Aguilares',
                'nit' => '456789-456-78-5',
                'user_id' => 4,
            ],
        ]);
    }
}
