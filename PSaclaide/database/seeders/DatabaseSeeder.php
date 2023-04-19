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
use Illuminate\Support\Facades\DB;

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
            'name' => 'AgroParisTech',
            'picture' => 'Agro.png',
            'number_study_years' => 5
        ]);

        Departement::create([
            'name' => 'CentraleSupélec',
            'picture' => 'Centrale.png',
            'number_study_years' => 5
        ]);

        Departement::create([
            'name' => 'Ecole Normale Supérieur Paris-Saclay',
            'picture' => 'ENS.png',
            'number_study_years' => 5
        ]);

        Departement::create([
            'name' => 'Faculté Jean Monnet',
            'picture' => 'JeanMonnet.png',
            'number_study_years' => 5
        ]);

        Departement::create([
            'name' => 'Faculté de Médecine',
            'picture' => 'Medecine.png',
            'number_study_years' => 5
        ]);

        Departement::create([
            'name' => 'Faculté de Pharmacie',
            'picture' => 'Pharmacie.png',
            'number_study_years' => 5
        ]);

        Departement::create([
            'name' => 'Faculté des Sciences d\'Orsay',
            'picture' => 'SciencesOrsay.png',
            'number_study_years' => 5
        ]);

        Departement::create([
            'name' => 'Faculté des Sciences du Sport',
            'picture' => 'SciencesSport.png',
            'number_study_years' => 5
        ]);

        Departement::create([
            'name' => 'Institut des Hautes Etudes Scientifiques',
            'picture' => 'IHES.png',
            'number_study_years' => 5
        ]);

        Departement::create([
            'name' => 'Institut d\'Optique',
            'picture' => 'Optique.png',
            'number_study_years' => 5
        ]);

        Departement::create([
            'name' => 'IUT de Cachan',
            'picture' => 'IUTCachan.png',
            'number_study_years' => 5
        ]);

        Departement::create([
            'name' => 'IUT d\'Orsay',
            'picture' => 'IUTOrsay.png',
            'number_study_years' => 5
        ]);

        Departement::create([
            'name' => 'IUT de Sceaux',
            'picture' => 'IUTSceaux.png',
            'number_study_years' => 5
        ]);

        Departement::create([
            'name' => 'Observatoire des Sciences de l\'Univers',
            'picture' => 'SciencesUnivers.png',
            'number_study_years' => 5
        ]);

        Departement::create([
            'name' => 'Polytech Paris-Saclay',
            'picture' => 'PolytechPS.png',
            'number_study_years' => 5
        ]);


        //Liste des matières
        $matieres = [
            'Biologie',
            'Chimie',
            'Économie',
            'Électronique',
            'Génie biomédical',
            'Génie civil',
            'Génie informatique',
            'Génie mécanique',
            'Géosciences',
            'Histoire',
            'Informatique',
            'Langues',
            'Management',
            'Matériaux',
            'Mathématiques',
            'Philosophie',
            'Physique',
            'Psychologie',
            'Sciences de la Terre',
            'Sciences de la vie',
            'Sciences de l\'ingénieur',
            'Sciences de l\'information et de la communication',
            'Sciences économiques et de gestion',
            'Sciences et techniques des activités physiques et sportives',
            'Sciences humaines et sociales',
            'Sociologie'
        ];

        foreach ($matieres as $matiere) {
            Matiere::create(['name' => $matiere]);
        }

        foreach ($matieres as $matiere) {
            $mat = Matiere::where('name', $matiere)->firstOrFail();

            switch ($matiere) {
                case 'Biologie':
                    $sousMatieres = [
                        'Biochimie',
                        'Biologie cellulaire',
                        'Biologie moléculaire',
                        'Botanique',
                        'Écologie',
                        'Génétique',
                        'Microbiologie',
                        'Physiologie',
                        'Zoologie'
                    ];
                    break;

                case 'Chimie':
                    $sousMatieres = [
                        'Chimie analytique',
                        'Chimie bioorganique',
                        'Chimie inorganique',
                        'Chimie organique',
                        'Chimie physique',
                        'Chimie quantique',
                        'Chimie théorique',
                        'Électrochimie',
                        'Matériaux'
                    ];
                    break;

                case 'Économie':
                    $sousMatieres = [
                        'Comptabilité',
                        'Économie d\'entreprise',
                        'Économie des finances',
                        'Économie des ressources humaines',
                        'Économie du développement',
                        'Économie internationale',
                        'Économie monétaire',
                        'Économie publique',
                        'Marketing'
                    ];
                    break;

                case 'Électronique':
                    $sousMatieres = [
                        'Capteurs',
                        'Circuits intégrés',
                        'Électronique analogique',
                        'Électronique de puissance',
                        'Électronique numérique',
                        'Microélectronique',
                        'Nanotechnologie',
                        'Optoélectronique',
                        'Télécommunications'
                    ];
                    break;

                case 'Génie biomédical':
                    $sousMatieres = [
                        'Biomatériaux',
                        'Biomecanique',
                        'Biomédecine',
                        'Imagerie médicale',
                        'Ingénierie tissulaire',
                        'Prothèses',
                        'Réhabilitation',
                        'Systèmes biomédicaux',
                        'Technologies médicales'
                    ];
                    break;
                
                case 'Génie civil':
                    $sousMatieres = [
                        'Béton',
                        'Construction',
                        'Géotechnique',
                        'Mécanique des structures',
                        'Ponts et viaducs',
                        'Routes et aéroports',
                        'Séismes',
                        'Sols et fondations',
                        'Urbanisme'
                    ];
                    break;
    
                case 'Génie informatique':
                    $sousMatieres = [
                        'Algorithmique',
                        'Architecture informatique',
                        'Base de données',
                        'Génie logiciel',
                        'Intelligence artificielle',
                        'Réseaux informatiques',
                        'Sécurité informatique',
                        'Systèmes d\'information',
                        'Web et applications mobiles'
                    ];
                    break;
    
                case 'Génie mécanique':
                    $sousMatieres = [
                        'Aérodynamique',
                        'Automatique',
                        'Conception mécanique',
                        'Dynamique',
                        'Énergétique',
                        'Machines et systèmes',
                        'Matériaux',
                        'Mécanique des fluides',
                        'Thermique'
                    ];
                    break;
    
                case 'Géosciences':
                    $sousMatieres = [
                        'Géochimie',
                        'Géodynamique',
                        'Géologie',
                        'Géophysique',
                        'Hydrologie',
                        'Météorologie',
                        'Océanographie',
                        'Pédologie',
                        'Sismologie'
                    ];
                    break;
    
                case 'Histoire':
                    $sousMatieres = [
                        'Antiquité',
                        'Moyen Âge',
                        'Temps modernes',
                        'Époque contemporaine',
                        'Histoire de l\'art',
                        'Histoire de la pensée',
                        'Histoire des sciences',
                        'Histoire diplomatique',
                        'Histoire économique et sociale'
                    ];
                    break;
    
                case 'Informatique':
                    $sousMatieres = [
                        'Algorithmique',
                        'Base de données',
                        'Développement web',
                        'Intelligence artificielle',
                        'Programmation',
                        'Réseaux informatiques',
                        'Sécurité informatique',
                        'Systèmes d\'exploitation',
                        'Technologies web'
                    ];
                    break;
    
                case 'Langues':
                    $sousMatieres = [
                        'Anglais',
                        'Arabe',
                        'Chinois',
                        'Espagnol',
                        'Français',
                        'Italien',
                        'Japonais',
                        'Russe',
                        'Portugais'
                    ];
                    break;
    
                case 'Management':
                    $sousMatieres = [
                        'Comptabilité',
                        'Entrepreneuriat',
                        'Finance',
                        'Gestion des ressources humaines',
                        'Management de projet',
                        'Marketing',
                        'Organisation',
                        'Stratégie',
                        'Économie',
                        'Éthique des affaires'
                    ];
                    break;

                case 'Matériaux':
                    $sousMatieres = [
                        'Science des matériaux', 
                        'Métallurgie', 
                        'Physique des matériaux',
                        'Génie des matériaux',
                        'Chimie des matériaux',
                        'Polymères et composites',
                        'Nanomatériaux'
                    ];
                    break;

                    

                case 'Mathématiques':
                    $sousMatieres = [
                        'Algèbre',
                        'Analyse',
                        'Combinatoire',
                        'Géométrie',
                        'Logique mathématique',
                        'Probabilités',
                        'Statistiques',
                        'Théorie des nombres',
                        'Topologie'
                    ];
                    break;
    
                case 'Philosophie':
                    $sousMatieres = [
                        'Esthétique',
                        'Éthique',
                        'Histoire de la philosophie',
                        'Logique',
                        'Métaphysique',
                        'Philosophie de la connaissance',
                        'Philosophie de la culture',
                        'Philosophie de la religion',
                        'Philosophie politique'
                    ];
                    break;
    
                case 'Physique':
                    $sousMatieres = [
                        'Astrophysique',
                        'Électromagnétisme',
                        'Matière condensée',
                        'Mécanique',
                        'Physique des particules',
                        'Physique des plasmas',
                        'Physique médicale',
                        'Physique nucléaire',
                        'Thermodynamique'
                    ];
                    break;
    
                case 'Psychologie':
                    $sousMatieres = [
                        'Cognition',
                        'Développement',
                        'Neurosciences',
                        'Psychopathologie',
                        'Psychologie clinique',
                        'Psychologie de l\'enfant',
                        'Psychologie sociale',
                        'Psychologie du travail',
                        'Thérapies'
                    ];
                    break;
    
                case 'Sciences de la Terre':
                    $sousMatieres = [
                        'Géologie',
                        'Géomorphologie',
                        'Hydrologie',
                        'Minéralogie',
                        'Paléontologie',
                        'Pétrographie',
                        'Sédimentologie',
                        'Tectonique',
                        'Vulcanologie'
                    ];
                    break;

                case 'Sciences de la vie':
                    $sousMatieres = [
                        'Biologie cellulaire', 
                        'Biochimie', 
                        'Génétique', 
                        'Microbiologie', 
                        'Biologie moléculaire', 
                        'Neurosciences', 
                        'Physiologie', 
                        'Écologie'
                    ];
                    break;

                case 'Sciences de l\'ingénieur':
                    $sousMatieres = [
                        'Génie mécanique',
                        'Génie électrique',
                        'Génie civil',
                        'Génie chimique',
                        'Génie industriel',
                        'Génie énergétique',
                        'Génie informatique'
                    ];
                    break;

                case 'Sciences de l\'information et de la communication':
                    $sousMatieres = [
                        'Communication d\'entreprise',
                        'Médias et journalisme',
                        'Communication visuelle',
                        'Marketing digital, Relations publiques',
                        'Communication politique',
                        'Publicité',
                        'Design graphique'
                    ];
                    break;

                case 'Sciences économiques et de gestion':
                    $sousMatieres = [
                        'Comptabilité',
                        'Finance',
                        'Marketing',
                        'Management',
                        'Ressources humaines',
                        'Gestion de projet',
                        'Stratégie d\'entreprise',
                        'Économie internationale'
                    ];
                    break;

                case 'Sciences et techniques des activités physiques et sportives':
                    $sousMatieres = [
                        'Entraînement sportif', 
                        'Physiologie de l\'exercice', 
                        'Kinésiologie', 
                        'Biomécanique', 
                        'Sport et santé', 
                        'Sport et psychologie', 
                        'Sport et société', 
                        'Sport et éthique'
                    ];
                    break;
                
                case 'Sciences humaines et sociales':
                    $sousMatieres = [
                        'Psychologie',
                        'Sociologie',
                        'Anthropologie', 
                        'Histoire', 
                        'Géographie', 
                        'Philosophie', 
                        'Linguistique', 
                        'Sciences politiques'
                    ];
                    break;
    
                case 'Sociologie':
                    $sousMatieres = [
                        'Anthropologie',
                        'Criminologie',
                        'Économie',
                        'Environnement',
                        'Genre',
                        'Migrations',
                        'Médias',
                        'Santé',
                        'Travail'
                    ];
                    break;
                
                default:
                    $sousMatieres = [];
                    break;
            }

            foreach ($sousMatieres as $sousMatiere) {
                SousMatiere::create([
                    'name' => $sousMatiere,
                    'matiere_id' => $mat->id
                ]);
            }
        }

        //Sous matières de Mathématiques
        // SousMatiere::create([
        //     'name' => 'Géométrie',
        //     'matiere_id' => 1
        // ]);

        // SousMatiere::create([
        //     'name' => 'Algèbre',
        //     'matiere_id' => 1
        // ]);

        // SousMatiere::create([
        //     'name' => 'Analyse',
        //     'matiere_id' => 1
        // ]);

        // SousMatiere::create([
        //     'name' => 'Logique',
        //     'matiere_id' => 1
        // ]);

        // //Sous matières de Physique
        // SousMatiere::create([
        //     'name' => 'Mécanique',
        //     'matiere_id' => 2
        // ]);

        // SousMatiere::create([
        //     'name' => 'Termochimie',
        //     'matiere_id' => 2
        // ]);

        // SousMatiere::create([
        //     'name' => 'Electromagnétisme',
        //     'matiere_id' => 2
        // ]);

        // //Sous matières de Chimie
        // SousMatiere::create([
        //     'name' => 'Analytique',
        //     'matiere_id' => 3
        // ]);

        // SousMatiere::create([
        //     'name' => 'Organique',
        //     'matiere_id' => 3
        // ]);

        // SousMatiere::create([
        //     'name' => 'Physique',
        //     'matiere_id' => 3
        // ]);

        // //Sous matières d'Informatique
        // SousMatiere::create([
        //     'name' => 'Génie logiciel',
        //     'matiere_id' => 4
        // ]);

        // SousMatiere::create([
        //     'name' => 'Réseaux',
        //     'matiere_id' => 4
        // ]);

        // SousMatiere::create([
        //     'name' => 'IA',
        //     'matiere_id' => 4
        // ]);

        // //Sous matières de Langues et entreprise
        // SousMatiere::create([
        //     'name' => 'Anglais',
        //     'matiere_id' => 5
        // ]);

        // SousMatiere::create([
        //     'name' => 'Communication',
        //     'matiere_id' => 5
        // ]);

        // SousMatiere::create([
        //     'name' => 'Droit',
        //     'matiere_id' => 5
        // ]);

        // SousMatiere::create([
        //     'name' => 'Economie',
        //     'matiere_id' => 5
        // ]);            
    }
}
