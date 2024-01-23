<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([

            'name' => 'Anklets',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Category::create([

            'name' => 'Bracelets',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Category::create([

            'name' => 'Rings',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Category::create([

            'name' => 'Necklaces',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Category::create([

            'name' => 'Earrings',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
