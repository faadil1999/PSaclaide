<?php

namespace App\Http\Controllers;

use App\Models\Annonce;
use Illuminate\Http\Request;

class AnnonceController extends Controller
{
    // public function details($id)
    // {
    //     $annonce = Annonce::find($id);
    //     return view('annonce.details',['user' => auth()->user(),'annonce'=>$annonce]);
    // }

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
        return view('annonce.mes_annonces',['annonces'=> $annonces ]);
    }

}
