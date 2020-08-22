<?php

use Illuminate\Database\Seeder;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_roles')->insert([
            'user_id' => 1,
            'role_id' => 2,
        ]);
        DB::table('user_roles')->insert([
            'user_id' => 2,
            'role_id' => 3,
        ]);
    }
}
