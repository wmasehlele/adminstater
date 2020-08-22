<?php

use Illuminate\Database\Seeder;

class CompanySetupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('company_setups')->insert([
            'background_color' => '#086623',
            'font_color' => '#000000',
            'accent_color' => '#c7ea46',
            'company_id' => 1
        ]);
        DB::table('company_setups')->insert([
            'background_color' => '#602320',
            'font_color' => '#ffffff',
            'accent_color' => '	#dc6900',
            'company_id' => 2
        ]);
    }
}
