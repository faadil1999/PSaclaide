<?php

namespace App\Http\Controllers;

use App\Models\Annonce;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    //
    public function subscribe($id)
    {
        
        $annonce = Annonce::findOrFail($id);
        
        if($annonce->isIndividual == 0){
            $annonce->ACollectif->current_number_people;
            if($annonce->ACollectif->current_number_people != $annonce->ACollectif->maximum_number_people)
            {
                $annonce->ACollectif->increment('current_number_people');
                $annonce->students()->save( Auth::user()->student);
            }else
            {
                return redirect()->route('listeAnnonce')->with('error','Il ny a plus de place');
             
            }
        }else{
            if($annonce->AIndividuel->hasStudent()){
                return redirect()->route('listeAnnonce')->with('error','Il ny a plus de place');
                
            }
            else{
                $annonce->students()->save( Auth::user()->student);
                
            }
            
            
        }
        return redirect()->route('listeAnnonce')->with('status','Vous vous etes inscrit avec succès');
    }


    public function cours_inscrits()
    {
        $annonces = Auth::user()->student->annonces;
        return view('annonce.annonce_inscrit',['annonces'=> $annonces ]);
    }


    public function detail_cours_inscrits($id)
    {
        $annonce = Annonce::find($id);
        return view('annonce.details_eleve',['user' => auth()->user(), 'annonce'=>$annonce]);
    }

}
