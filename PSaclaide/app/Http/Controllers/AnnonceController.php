<?php

namespace App\Http\Controllers;

use App\Models\Annonce;
use Illuminate\Http\Request;

class AnnonceController extends Controller
{
    //

    public function details($id)
    {
        $annonce = Annonce::find($id);

        return view('annonce.details',['annonce'=> $annonce]);
    }
}
