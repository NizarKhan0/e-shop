<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $superadmin = Role::firstOrCreate(['name' => 'superadmin', 'guard_name' => 'web']);
        $cosplayer = Role::firstOrCreate(['name' => 'cosplayer', 'guard_name' => 'web']);
        $customer = Role::firstOrCreate(['name' => 'customer', 'guard_name' => 'web']);

        // Superadmin boleh semua (CRUD)
        $superadmin->givePermissionTo(Permission::all());

        // Cosplayer boleh CRUD product jugak
        $cosplayer->givePermissionTo([
            'create-products',
            'view-products',
            'update-products',
            'delete-products',

            'create-categories',
            'view-categories',
            'update-categories',
            'delete-categories',
        ]);
    }
}
