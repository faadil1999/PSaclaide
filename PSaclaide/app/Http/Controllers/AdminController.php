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

class AdminController extends Controller
{
    //

    public function store_annonce(Request $request)
    {

        ///
        $request->validate([

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

        return view('annonce',['user' => $user]);
    }

    public function annonce()
    {
        $matieres = Matiere::All();

        $user = auth()->user();

        return view('creationAnnonce',['user' => $user, 'matieres' => $matieres]);
    }

    public function createAnnonce(Request $request){
        $user = auth()->user();
        $annonce = Annonce::create([
            'title'       => $request->input('title'),
            'description' => $request->input('description'),
            'author'      => $user->email,
            'matiere_id'  => (Matiere::where('name', $request->matiere)->get()->first())->id,
            'user_id'     => $user->id
        ]);

        if($request->mode == "modeInd"){
            AIndividuel::create([
                'annonce_id' => $annonce->id
            ]);
        }
        else{
            ACollectif::create([
                'annonce_id' => $annonce->id
            ]);
        }
        return view('admin.home',['user' => $user]);
    }

}
