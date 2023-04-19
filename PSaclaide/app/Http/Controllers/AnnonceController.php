<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Annonce;
use App\Models\Matiere;
use App\Models\Departement;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;

class AnnonceController extends Controller
{
    public function filtreAnnonce(Request $request){
        $annonces = Annonce::where('isAvailable', 1)->get();
        $departements = Departement::all();
        $matieres = Matiere::all();

        /*$heures = $request->input('horaire');
        if(isset($heures)) {
            $heures = "aaa";
        }
        else{}*/

        /*$ecoles = $request->input('ecole');
        if(isset($ecoles)) {
            $nomEcoles = array();
            for($i = 0; $i < count($ecoles); $i++){
                array_push($nomEcoles, $ecoles[$i]);
            }
            $departementsChoisis = Departement::whereIn('name', $nomEcoles)->get();
            $users = new Collection();
            foreach($departementsChoisis as $departement){
                $users = $users->merge(User::whereHas('departement', function ($query) use ($departement) {
                    $query->where('departement_id', $departement->id);
                })->get());
            }
            $users = $users->whereNotIn('email', [auth()->user()->email]);
            if($users->count() != 0){
                $annoncesFiltres = new Collection();
                foreach($users as $user){
                    $annoncesFiltres->push($annonces->merge(Annonce::whereHas('user', function ($query) use ($user) {
                        $query->where('user_id', $user->id);
                    })->get()));
                }
                $annonces = $annoncesFiltres;
            }
            else{
                $annonces = new Collection();
            }
        }
        else{}
        dd($annonces);*/

        $types = $request->input('type');  
        if(isset($types)) {
            if(count($types) == 1){
                if($types[0] == "Individuel"){
                    $annonces = $annonces->filter(function ($annonce) {
                        return $annonce->isIndividual == 1;
                    });
                }
                else{
                    $annonces = $annonces->filter(function ($annonce) {
                        return $annonce->isIndividual == 0;
                    });
                }
            }
        }
        else{}

      
        return view('admin.annonce',['user' => auth()->user(), 'annonces' => $annonces, 'departements' => $departements, 'matieres' => $matieres]);
    }

    public function details($id)
    {
        $annonce = Annonce::find($id);
        return view('annonce.details',['user' => auth()->user(),'annonce'=>$annonce]);
    }

    public function updateAnnonce(Request $request){
        $id = $request->input('id');
        $annonce = Annonce::find($id);
    
        $annonce->title = $request->input('title');
        $annonce->date = $request->input('date');
        $annonce->heure = $request->input('heure');
        $annonce->location = $request->input('location');
        $annonce->description = $request->input('description');

        $annonce->save();

        $annonces = Annonce::where('user_id', auth()->user()->id)->get();
        return view('annonce.mesannonces',['annonces'=> $annonces ]);
    }

}
