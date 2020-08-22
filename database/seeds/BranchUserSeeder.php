<?php

use Illuminate\Database\Seeder;

class BranchUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('branch_users')->insert([
            'branch_id' => 1,
            'user_id' => 2,
            'company_id' => 2
        ]);
        DB::table('branch_users')->insert([
            'branch_id' => 2,
            'user_id' => 2,
            'company_id' => 2
        ]);
        DB::table('branch_users')->insert([
            'branch_id' => 3,
            'user_id' => 2,
            'company_id' => 2
        ]);
    }
}
