<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Http\Controllers\admin\gereEtudiant\Etudiant;
use App\Models\Enseignants;
use App\Models\Etudiants;
use App\Models\Formations;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       
        $formation=Formations::factory(10)->create();
        $enseignants=Enseignants::factory(10)->create();
        $etudiant=Etudiants::factory(10)->create();
    }
}
