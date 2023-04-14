<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Annonce;
use App\Models\Matiere;
use App\Models\Formateur;
use App\Models\ACollectif;
use App\Models\AIndividuel;
use App\Models\Departement;
use App\Models\SousMatiere;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Actions\Fortify\PasswordValidationRules;

class AdminController extends Controller
{
    use PasswordValidationRules;

    public function toggleStateIndex($id)
    {

        $user = User::find($id);

        return response()->json([
            'state'=>$user->currentState
        ], 200
    );
        
    }

    public function toggleState($id,Request $request)
    {
        
        $user = User::find($id);
        
        $user->update([

            'currentState' => $request->state
        ]);
        return response( 'User state changed');
    }

    public function store_annonce(Request $request)
    {
        
        ///
        $annonce = Annonce::create([
            'title'       => $request->input('title'),
            'description' => $request->input('description'),
            'author'      => $request->email,
            'isIndividual'=> $request->isIndividual,
            'matiere_id'  => $request->matiere, 
            'location'    => $request->location,
            'date'        => $request->date,
            'heure'       => $request->heure, 
            'user_id'    => $request->id
        ]);

      
        $sousmatiere = SousMatiere::find($request->sousMatiere);
        $annonce->sousMatieres()->save($sousmatiere); 

        if($request->input('participant_max') > 1 ){
                ACollectif::create([
                        'annonce_id' => $annonce->id,
                        'maximum_number_people' => $request->input('participant_max'),
                        'formateur_id'=> $request->formateur_id
                ]);
        }
        else{
                AIndividuel::create([
                    'annonce_id' => $annonce->id,
                    'formateur_id'=> $request->formateur_id
                ]);
        }
        // if($request->input('participant_max') != 0 )
        // {
        //     ACollectif::create([
        //         'annonce_id' => $annonce->id,
        //         'maximum_number_people' => $request->input('participant_max'),
        //         'location' => $request->input('location')  
        //     ]);

        // }else
        // {
        //     AIndividuel::create([
        //         'annonce_id' => $annonce->id,
        //         'formateur_id'=> $request->id
        //     ]);

        // }
    }

    public function newTeacher(Request $request)
    {
        $user = User::find(auth()->user()->id); 
        if($request->prof == 'on'){
            $user->update([
                'isTeacher'  => true
            ]);
            Formateur::create([
                'user_id' => $user->id
            ]);
        }

        return view('admin.option', ['user' => $user]);
    }

    public function profil()
    {
        $departements = Departement::All();

        return view('admin.complete_profil',['departements' => $departements]);
    }

    public function updateProfil(Request $request){
        //$user = User::where('email','hugues.martin@universite-paris-saclay.fr')->first();
        $user = User::find(auth()->user()->id); 
        if($request->prof == 'on'){
            $user->update([
                'isTeacher'  => true
            ]);
            Formateur::create([
                'user_id' => $user->id
            ]);
        }
        else{
            $user->update([
                'isTeacher'  => false
            ]);
        }
        $user->update([
            'first_name' => $request->prenom,
            'last_name'  => $request->nomFamille,
            'studyYear'  => $request->anneeEtude,
            'departement_id' => Departement::where('name',$request->departement)->first()->id
        ]);

        return view('admin.home', ['user' =>$user]); 
    }

    public function updatePassword(Request $request){

        $request->validate([
            'old-password' => ['string', function ($attribute, $value, $fail) {
                if (!Hash::check($value, Auth::user()->password)) {
                    $fail('Le mot de passe actuel est incorrect.');
                }
            }],
            'password' => $this->passwordRules()
        ]);

        $user = User::find(auth()->user()->id); 
                
        $user->update([
            'password'  => Hash::make($request->input('password'))
        ]);
        
        return view('admin.option', ['message' => 'Les modifications ont été enregistré !', 'user' => auth()->user()]);
    }
        
    public function listeAnnonce()
    {
        $annonces = Annonce::all();
        $departements = Departement::all();
       
        return view('admin.annonce',['user' => auth()->user(), 'annonces' => $annonces, 'departements' => $departements]);
    }

    public function annonce()
    {
        $matieres = Matiere::All();
        $annonces = Annonce::all();
        $departements = Departement::all();
        
        return view('admin.creationAnnonce',['matieres' => $matieres, 'departements' => $departements]);
    }

    public function createAnnonce(Request $request){
        $user = auth()->user();

        // Erreur car déjà pris à cet horaire
        // (Matiere::where('name', $request->matiere)->get()->first())->id,
        /*$testAnnonce = Annonce::where([
            ['user_id', '=', $user->id],
            ['age', '>', 30]])
            ->get()->first();

        if($testAnnonce != null){*/
            //return redirect()->back()->withErrors(['error' => 'Il y a une erreur dans le formulaire.']);
        //}
        //else{

            // $request->validate([
            //     'title' => 'required|string|max:255',
            //     'description' => 'required|string|max:500',
            //     'author'      => 'required',
            //     'matiere_id'  => 'required', 
            //     'user_id'     
            // ]);

            $annonce = Annonce::create([
                'title'       => $request->input('title'),
                'description' => $request->input('description'),
                'author'      => $user->email,
                'matiere_id'  => $request->matiere, 
                
            ]);
    
            if($request->mode == "modeInd"){
                AIndividuel::create([
                    'annonce_id' => $annonce->id,
                    'formateur_id' => $user->id
                ]);
                $annonce->update([
                    'isIndividual' => true
                ]);
            }
            else{
                ACollectif::create([
                    'annonce_id' => $annonce->id,
                    'formateur_id' => $user->id
                ]);
                $annonce->update([
                    'isIndividual' => false
                ]);
            }

        // Récupérer un utilisateur et un rôle existants
        $annonceSelectionne = Annonce::find($annonce->id);

        // Ajouter la relation dans la table pivot
        $annonceSelectionne->sousMatieres()->attach($request->sousMatiere);

        
        return view('admin.home',['user' => $user]);
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function option()
    {
        return view('admin.option', ['user' => auth()->user()]);
    }
}



