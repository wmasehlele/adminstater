<?php

use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->insert([
            'name' => 'X Medical Center',
        ]);
        DB::table('companies')->insert([
            'name' => 'Health Care Center',
        ]);
        DB::table('companies')->insert([
            'name' => 'XY Medical Care',
        ]);
        DB::table('companies')->insert([
            'name' => 'Green Medic Clinic',
        ]);
        DB::table('companies')->insert([
            'name' => 'Dr. Shakes Practise',
        ]);        
        DB::table('companies')->insert([
            'name' => 'Dr. Zamo Medical Center',
        ]);                
        DB::table('companies')->insert([
            'name' => 'Pink & Partners Medic',
        ]);                
    }
}
