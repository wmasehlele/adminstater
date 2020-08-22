<?php

use Illuminate\Database\Seeder;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('role_permissions')->insert([
            'role_id' => 2,
            'permission_id' => 5,
        ]);
        DB::table('role_permissions')->insert([
            'role_id' => 2,
            'permission_id' => 6,
        ]);
        DB::table('role_permissions')->insert([
            'role_id' => 2,
            'permission_id' => 7,
        ]);
        DB::table('role_permissions')->insert([
            'role_id' => 2,
            'permission_id' => 8,
        ]);
        DB::table('role_permissions')->insert([
            'role_id' => 3,
            'permission_id' => 1,
        ]);
        DB::table('role_permissions')->insert([
            'role_id' => 3,
            'permission_id' => 2,
        ]);
        DB::table('role_permissions')->insert([
            'role_id' => 3,
            'permission_id' => 3,
        ]);
        DB::table('role_permissions')->insert([
            'role_id' => 3,
            'permission_id' => 4,
        ]);
    }
}
