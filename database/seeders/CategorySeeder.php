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
       $categories = [
            ['name' => 'Hoodies', 'slug' => 'hoodies'],
            ['name' => 'T-Shirts', 'slug' => 't-shirts'],
            ['name' => 'Accessories', 'slug' => 'accessories'],
            ['name' => 'Figures', 'slug' => 'figures'],
            ['name' => 'Posters', 'slug' => 'posters'],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
