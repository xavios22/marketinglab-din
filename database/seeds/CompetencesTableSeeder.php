<?php

use Illuminate\Database\Seeder;
use App\Competence;
class CompetencesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Competence::create([
            'name' => 'Logo',        
        ]);
        Competence::create([
            'name' => 'Video',        
        ]);
        Competence::create([
            'name' => 'Affiche',        
        ]);
        Competence::create([
            'name' => 'Client',        
        ]);
        Competence::create([
            'name' => 'Post',        
        ]);
        
    }
}
