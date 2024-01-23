<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $quantity = rand(1, 100);
        $price    = rand(1, 100);
        Product::create([
            'name' => 'First Product',
            'price' => $price,
            'quantity' => $quantity,
            'description' => 'Welcome to Sample description for First Product.',
        ]);

        Product::create([
            'name' => 'Second Product',
            'price' => $price,
            'quantity' => $quantity,
            'description' => 'Welcome to Sample description for Second Product.',
        ]);    
    }
}
