<?php

use Illuminate\Database\Seeder;

class Users_competencesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('competence_user')->insert([
            'user_id' => 1,
            'competence_id' => 1,
            'value' => 5,
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ]);
        DB::table('competence_user')->insert([
            'user_id' => 1,
            'competence_id' => 2,
            'value' => 5,
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ]);
        DB::table('competence_user')->insert([
            'user_id' => 1,
            'competence_id' => 3,
            'value' => 5,
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ]);
        DB::table('competence_user')->insert([
            'user_id' => 1,
            'competence_id' => 4,
            'value' => 5,
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ]);
        DB::table('competence_user')->insert([
            'user_id' => 1,
            'competence_id' => 5,
            'value' => 5,
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ]);
        
        
    }
}

