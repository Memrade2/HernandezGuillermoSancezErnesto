<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::insert([
            [
                'productName' => 'Zapatos',
                'description' => 'Nike',
                'price' => 160.75,
                'stok' => 100,
                'garanty' => '1 año',
                'seller_id' => 1,
            ],
            [
                'productName' => 'Camisas',
                'description' => 'Nike',
                'price' => 60,
                'stok' => 160,
                'garanty' => '1 año',
                'seller_id' => 2,
            ],
            [
                'productName' => 'Carteras',
                'description' => 'Nike',
                'price' => 10.75,
                'stok' => 200,
                'garanty' => '1 año',
                'seller_id' => 3,
            ],
            [
                'productName' => 'Sandalias',
                'description' => 'Nike',
                'price' => 16.75,
                'stok' => 10,
                'garanty' => '1 año',
                'seller_id' => 4,
            ],
        ]);
    }
}

