<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'William',
            'surname' => 'Johnsons',
            'cellphone' => '07638618888',
            'email' => 'william@email.com',
            'type' => 'company',
            'password' => Hash::make('password'),
        ]);
        DB::table('users')->insert([
            'name' => 'Tsebisho',
            'surname' => 'Phogole',
            'cellphone' => '0743685688',
            'email' => 'tsebisho@email.com',
            'type' => 'branch',
            'password' => Hash::make('password'),
        ]);    
    }
}
