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
         // Ambil user pertama sebagai cosplayer
        $cosplayer = User::first();

        // Ambil semua categories
        $categories = Category::all();

        if ($categories->isEmpty()) {
            $this->command->error('No categories found! Please run CategorySeeder first.');
            return;
        }

        // Data produk dengan category random
        $products = [
            [
                'name' => 'Cosplay Hoodie - Limited Edition',
                'slug' => 'cosplay-hoodie-limited',
                'description' => 'Limited edition cosplay hoodie with premium quality fabric and unique design.',
                'price' => 120.00,
                'old_price' => 150.00,
                'cost' => 60.00,
                'sku' => 'CP-HOOD-001',
                'barcode' => '1234567890001',
                'qty' => 10,
                'security_stock' => 2,
                'is_visible' => true,
            ],
            [
                'name' => 'Anime Character T-Shirt - Naruto',
                'slug' => 'anime-tshirt-naruto',
                'description' => 'Official Naruto themed t-shirt perfect for cosplay events and casual wear.',
                'price' => 45.90,
                'old_price' => 59.90,
                'cost' => 25.00,
                'sku' => 'CP-TS-002',
                'barcode' => '1234567890002',
                'qty' => 25,
                'security_stock' => 5,
                'is_visible' => true,
            ],
            [
                'name' => 'Cosplay Accessory Set',
                'slug' => 'cosplay-accessory-set',
                'description' => 'Complete set of cosplay accessories including props and jewelry.',
                'price' => 79.90,
                'old_price' => 99.90,
                'cost' => 40.00,
                'sku' => 'CP-ACC-003',
                'barcode' => '1234567890003',
                'qty' => 15,
                'security_stock' => 3,
                'is_visible' => true,
            ],
            [
                'name' => 'Anime Figure - Demon Slayer',
                'slug' => 'anime-figure-demon-slayer',
                'description' => 'High-quality anime figure from Demon Slayer series.',
                'price' => 95.00,
                'old_price' => 125.00,
                'cost' => 48.00,
                'sku' => 'CP-FIG-004',
                'barcode' => '1234567890004',
                'qty' => 20,
                'security_stock' => 4,
                'is_visible' => true,
            ],
            [
                'name' => 'Anime Poster Collection',
                'slug' => 'anime-poster-collection',
                'description' => 'Set of high-quality anime posters featuring various characters.',
                'price' => 35.00,
                'old_price' => 50.00,
                'cost' => 15.00,
                'sku' => 'CP-POST-005',
                'barcode' => '1234567890005',
                'qty' => 30,
                'security_stock' => 6,
                'is_visible' => true,
            ],
            [
                'name' => 'Gaming Cosplay Hoodie - Valorant',
                'slug' => 'gaming-hoodie-valorant',
                'description' => 'Valorant inspired hoodie with official artwork and comfortable fit.',
                'price' => 89.90,
                'old_price' => 119.90,
                'cost' => 45.00,
                'sku' => 'CP-HOOD-006',
                'barcode' => '1234567890006',
                'qty' => 18,
                'security_stock' => 4,
                'is_visible' => true,
            ],
            [
                'name' => 'Cosplay T-Shirt - My Hero Academia',
                'slug' => 'cosplay-tshirt-mha',
                'description' => 'My Hero Academia themed t-shirt featuring your favorite characters.',
                'price' => 42.00,
                'old_price' => 55.00,
                'cost' => 22.00,
                'sku' => 'CP-TS-007',
                'barcode' => '1234567890007',
                'qty' => 35,
                'security_stock' => 7,
                'is_visible' => true,
            ],
            [
                'name' => 'Cosplay Prop Sword',
                'slug' => 'cosplay-prop-sword',
                'description' => 'Safe and realistic cosplay prop sword for conventions.',
                'price' => 65.00,
                'old_price' => 85.00,
                'cost' => 30.00,
                'sku' => 'CP-ACC-008',
                'barcode' => '1234567890008',
                'qty' => 12,
                'security_stock' => 3,
                'is_visible' => true,
            ],
            [
                'name' => 'Limited Edition Figure - One Piece',
                'slug' => 'figure-one-piece',
                'description' => 'Limited edition One Piece character figure with detailed sculpting.',
                'price' => 120.00,
                'old_price' => 150.00,
                'cost' => 60.00,
                'sku' => 'CP-FIG-009',
                'barcode' => '1234567890009',
                'qty' => 8,
                'security_stock' => 2,
                'is_visible' => true,
            ],
            [
                'name' => 'Anime Wall Poster Set',
                'slug' => 'anime-wall-poster-set',
                'description' => 'Set of 3 high-quality anime wall posters for room decoration.',
                'price' => 28.00,
                'old_price' => 40.00,
                'cost' => 12.00,
                'sku' => 'CP-POST-010',
                'barcode' => '1234567890010',
                'qty' => 40,
                'security_stock' => 8,
                'is_visible' => true,
            ]
        ];

        foreach ($products as $productData) {
            // Pilih category random
            $randomCategory = $categories->random();

            Product::create(array_merge($productData, [
                'user_id' => $cosplayer->id,
                'category_id' => $randomCategory->id,
            ]));
        }

        $this->command->info('Products seeded successfully!');
        $this->command->info('Total products: ' . count($products));
        $this->command->info('Cosplayer: ' . $cosplayer->name);
        $this->command->info('Categories used: ' . $categories->pluck('name')->implode(', '));
    }
}
