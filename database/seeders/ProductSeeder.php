<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $cosplayer = User::where('role', 'cosplayer')->first();
        $cosplayer = User::first();

        Product::create([
            'user_id' => $cosplayer->id,
            'category_id' => Category::where('name', 'Hoodies')->first()->id,
            'name' => 'Cosplay Hoodie',
            'slug' => 'cosplay-hoodie',
            'description' => 'Limited edition cosplay hoodie',
            'price' => 120,
            'stock' => 10,
        ]);
    }
}