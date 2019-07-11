<?php

use Illuminate\Database\Seeder;

class Roles_competencesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('role_competence')->insert([
            'competence_id' => 1,
            'role_id' => 1,
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ]);
        DB::table('role_competence')->insert([
            'competence_id' => 2,
            'role_id' => 1,
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ]);
        DB::table('role_competence')->insert([
            'competence_id' => 3,
            'role_id' => 1,
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ]);
        DB::table('role_competence')->insert([
            'competence_id' => 4,
            'role_id' => 1,
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ]);
        DB::table('role_competence')->insert([
            'competence_id' => 5,
            'role_id' => 1,
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ]);
    }
}
