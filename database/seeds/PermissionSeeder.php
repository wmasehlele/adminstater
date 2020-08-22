<?php

use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->insert([
            'name' => 'Dashboard',
            'technical_name' => 'home',
            'icon_title' => 'grid-fill'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Calendar',
            'technical_name' => 'calendar',
            'icon_title' => 'calendar2-event'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Clients',
            'technical_name' => 'clients',
            'icon_title' => 'person-check-fill'       
        ]);
        DB::table('permissions')->insert([
            'name' => 'Reports',
            'technical_name' => 'reports',
            'icon_title' => 'folder-fill'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Users',
            'technical_name' => 'users',
            'icon_title' => 'people-fill'
        ]);   
        DB::table('permissions')->insert([
            'name' => 'Branch Settings',
            'technical_name' => 'branch_settings',
            'icon_title' => 'gear-fill'
        ]);    
        DB::table('permissions')->insert([
            'name' => 'Company Settings',
            'technical_name' => 'company_settings',
            'icon_title' => 'gear-wide-connected'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Payments',
            'technical_name' => 'payments',
            'is_menu_item' => false
        ]);                     
    }
}
