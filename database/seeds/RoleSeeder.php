<?php

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name' => 'Super Administrator',
        ]);
        DB::table('roles')->insert([
            'name' => 'Company Administrator',
        ]);
        DB::table('roles')->insert([
            'name' => 'Branch Administrator',
        ]);
        DB::table('roles')->insert([
            'name' => 'Reception',
        ]);
        DB::table('roles')->insert([
            'name' => 'Doctor',
        ]);
        DB::table('roles')->insert([
            'name' => 'Nurse',
        ]);
        DB::table('roles')->insert([
            'name' => 'Staff',
        ]);
    }
}
