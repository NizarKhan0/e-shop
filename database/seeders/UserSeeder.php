<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Nizar',
            'email' => 'superadmin@demo.com',
            'password' => Hash::make('password'),
        ]);

        User::create([
            'name' => 'Mizu',
            'email' => 'mizau@demo.com',
            'password' => Hash::make('password'),
        ]);

        // User::factory()->count(5)->create(['role' => 'cosplayer']);
        // User::factory()->count(10)->create(['role' => 'customer']);
    }
}
