<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Annonce;
use App\Models\ACollectif;
use App\Models\AIndividuel;
use App\Models\Departement;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //\App\Models\Departement::factory(5)->create();
        Departement::create([
            'name' => 'Faculté Jean Monnet',
            'picture' => 'facJM.png',
            'number_study_years' => 5
        ]);

        Departement::create([
            'name' => 'Faculté de Médecine',
            'picture' => 'facMédecine.png',
            'number_study_years' => 5
        ]);

        Departement::create([
            'name' => 'Faculté de Pharmacie',
            'picture' => 'facPharmacie.png',
            'number_study_years' => 5
        ]);

        Departement::create([
            'name' => 'Faculté des Sciences d\'Orsay',
            'picture' => 'facSciences.png',
            'number_study_years' => 5
        ]);

        Departement::create([
            'name' => 'Faculté des Sciences du Sport',
            'picture' => 'facJM.png',
            'number_study_years' => 5
        ]);

        Departement::create([
            'name' => 'IUT de Cachan',
            'picture' => 'facMédecine.png',
            'number_study_years' => 5
        ]);

        Departement::create([
            'name' => 'IUT d\'Orsay',
            'picture' => 'facPharmacie.png',
            'number_study_years' => 5
        ]);

        Departement::create([
            'name' => 'IUT de Sceaux',
            'picture' => 'facSciences.png',
            'number_study_years' => 5
        ]);

        Departement::create([
            'name' => 'Observatoire des Sciences de l\'Univers',
            'picture' => 'facJM.png',
            'number_study_years' => 5
        ]);

        Departement::create([
            'name' => 'Polytech Paris-Saclay',
            'picture' => 'facMédecine.png',
            'number_study_years' => 5
        ]);

        Departement::create([
            'name' => 'AgroParisTech',
            'picture' => 'facPharmacie.png',
            'number_study_years' => 5
        ]);

        Departement::create([
            'name' => 'CentraleSupélec',
            'picture' => 'facSciences.png',
            'number_study_years' => 5
        ]);

        Departement::create([
            'name' => 'Ecole Normale Supérieur Paris-Saclay',
            'picture' => 'facJM.png',
            'number_study_years' => 5
        ]);

        Departement::create([
            'name' => 'Institut d\'Optique',
            'picture' => 'facMédecine.png',
            'number_study_years' => 5
        ]);

        Departement::create([
            'name' => 'Institut des Hautes Etudes Scientifiques',
            'picture' => 'facPharmacie.png',
            'number_study_years' => 5
        ]);


        \App\Models\User::factory(10)->create();
        \App\Models\Matiere::factory(5)->create();
        $annonces = \App\Models\Annonce::factory(10)->create();
        \App\Models\SousMatiere::factory(15)->create();

        // créer des données pour la classe Oeuf
        for ($i = 0; $i < 5; $i++) {
            $aCollectif = ACollectif::create([
                'maximum_number_people' => fake()->numberBetween(2, 15),
                'current_number_people' => fake()->numberBetween(0, 15),
                'location' => fake()->word,
                'annonce_id' => $annonces->random()->id
            ]);
        }

        // créer des données pour la classe Lait
        for ($i = 0; $i < 10; $i++) {
            $aIndividuel = AIndividuel::create([
                'annonce_id' => $annonces->random()->id
            ]);
        }

            
    }
}
