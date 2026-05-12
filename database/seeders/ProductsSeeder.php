<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            [
                'brand' => 'Apple',
                'model' => 'iPhone 15',
                'user_id' => 1,
            ],
            [
                'brand' => 'Samsung',
                'model' => 'Galaxy S24',
                'user_id' => 1,
            ],
            [
                'brand' => 'Sony',
                'model' => 'PlayStation 5',
                'user_id' => 2,
            ],
        ];

        foreach ($products as $productData) {
            Product::create($productData);
        }
    }
}