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
        
        $annonce->students()->save( Auth::user()->student);

        return redirect()->route('listeAnnonce')->with('status','Vous vous etes inscrit avec succès');
    }
}
