<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Annonce;
use App\Models\Matiere;
use App\Models\ACollectif;
use App\Models\AIndividuel;
use App\Models\Departement;
use App\Models\SousMatiere;
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

        //Liste des matières
        Matiere::create([
            'name' => 'Mathématiques',
            'image' => 'maths.png'
        ]);

        Matiere::create([
            'name' => 'Physique',
            'image' => 'maths.png'
        ]);

        Matiere::create([
            'name' => 'Chimie',
            'image' => 'maths.png'
        ]);

        Matiere::create([
            'name' => 'Informatique',
            'image' => 'maths.png'
        ]);

        Matiere::create([
            'name' => 'Langues et entreprise',
            'image' => 'maths.png'
        ]);

        Matiere::create([
            'name' => 'Options',
            'image' => 'maths.png'
        ]);

        //Sous matières de Mathématiques
        SousMatiere::create([
            'name' => 'Géométrie',
            'matiere_id' => 1
        ]);

        SousMatiere::create([
            'name' => 'Algèbre',
            'matiere_id' => 1
        ]);

        SousMatiere::create([
            'name' => 'Analyse',
            'matiere_id' => 1
        ]);

        SousMatiere::create([
            'name' => 'Logique',
            'matiere_id' => 1
        ]);

        //Sous matières de Physique
        SousMatiere::create([
            'name' => 'Mécanique',
            'matiere_id' => 2
        ]);

        SousMatiere::create([
            'name' => 'Termochimie',
            'matiere_id' => 2
        ]);

        SousMatiere::create([
            'name' => 'Electromagnétisme',
            'matiere_id' => 2
        ]);

        //Sous matières de Chimie
        SousMatiere::create([
            'name' => 'Analytique',
            'matiere_id' => 3
        ]);

        SousMatiere::create([
            'name' => 'Organique',
            'matiere_id' => 3
        ]);

        SousMatiere::create([
            'name' => 'Physique',
            'matiere_id' => 3
        ]);

        //Sous matières d'Informatique
        SousMatiere::create([
            'name' => 'Génie logiciel',
            'matiere_id' => 4
        ]);

        SousMatiere::create([
            'name' => 'Réseaux',
            'matiere_id' => 4
        ]);

        SousMatiere::create([
            'name' => 'IA',
            'matiere_id' => 4
        ]);

        //Sous matières de Langues et entreprise
        SousMatiere::create([
            'name' => 'Anglais',
            'matiere_id' => 5
        ]);

        SousMatiere::create([
            'name' => 'Communication',
            'matiere_id' => 5
        ]);

        SousMatiere::create([
            'name' => 'Droit',
            'matiere_id' => 5
        ]);

        SousMatiere::create([
            'name' => 'Economie',
            'matiere_id' => 5
        ]);


        /*$annonces = \App\Models\Annonce::factory(10)->create();
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
        }*/

            
    }
}
