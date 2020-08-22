<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(UserRoleSeeder::class);
        $this->call(PermissionSeeder::class);
        $this->call(RolePermissionSeeder::class);
        $this->call(CompanySeeder::class);
        $this->call(CompanySetupSeeder::class);
        $this->call(CompanyUserSeeder::class);
        $this->call(BranchSeeder::class);
        $this->call(BranchUserSeeder::class);
        $this->call(ClientSeeder::class);
    }
}
