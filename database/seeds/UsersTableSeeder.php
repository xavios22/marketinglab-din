<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            
            'name' => 'ricardo',
            'email' => 'ricardo@molengeek.com',
            'password' => bcrypt('adminlab'),
            'role_id' => 1,
            'langues' => 'Espagnol,Français',
            'projet' => 'test test ',
            'exp' => 'Stagaire Web Develeppeur',
            'hobby' => 'guitarre,box',
            'phrase' => 'testdjhdekjhd',   
        ]);
        DB::table('users')->insert([
            
            'name' => 'Xavier',
            'email' => 'xavierpinan@gmail.com',
            'password' => bcrypt('admin'),
            'role_id' => 1,
            'langues' => 'Espagnol,Français',
            'projet' => 'test test ',
            'exp' => 'Stagaire Web Develeppeur',
            'hobby' => 'guitarre,box',
            'phrase' => 'testdjhdekjhd',
            
            
        ]);
        
    }
}

