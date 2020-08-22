<?php

use Illuminate\Database\Seeder;

class BranchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('branches')->insert([
            'name' => 'Jhb X Medical Center',
            'company_id' => 1
        ]);
        DB::table('branches')->insert([
            'name' => 'Bbn X Medical Center',
            'company_id' => 1
        ]);
        DB::table('branches')->insert([
            'name' => 'Plk X Medical Center',
            'company_id' => 1
        ]);
        DB::table('branches')->insert([
            'name' => 'East Health Care Center',
            'company_id' => 2
        ]);
        DB::table('branches')->insert([
            'name' => 'South Health Care Center',
            'company_id' => 2
        ]);
        DB::table('branches')->insert([
            'name' => 'North Health Care Center',
            'company_id' => 2
        ]);
    }
}
