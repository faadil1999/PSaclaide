<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Annonce;
use App\Models\Matiere;
use App\Models\Formateur;
use App\Models\ACollectif;
use App\Models\AIndividuel;
use App\Models\Departement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //


    public function store_annonce(Request $request)
    {
    
        ///
        $annonce = Annonce::create([
            'title'       => $request->input('title'),
            'description' => $request->input('description'),
            'author'      => $request->email,
            'isIndividual'=> $request->isIndividual,
            'matiere_id'  => $request->matiere, 
            'user_id'     => $request->id
        ]);

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
        
    public function listeAnnonce()
    {

        $user = auth()->user();
       
        return view('admin.annonce',['annonces' => $user->annonces ]);
    }

    public function annonce()
    {
        $matieres = Matiere::All();

        return view('admin.creationAnnonce',['user' => auth()->user(), 'matieres' => $matieres]);
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
                'user_id'     => $user->id
            ]);
    
            if($request->mode == "modeInd"){
                AIndividuel::create([
                    'annonce_id' => $annonce->id
                ]);
                $annonce->update([
                    'isIndividual' => true
                ]);
            }
            else{
                ACollectif::create([
                    'annonce_id' => $annonce->id
                ]);
                $annonce->update([
                    'isIndividual' => false
                ]);
            }
        //}
        
        return view('admin.home',['user' => $user]);
    }

}
