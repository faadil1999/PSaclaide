<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //

    public function annonce()
    {
        return view('admin.annonce_form');
    }

    public function store_annonce(Request $request)
    {

        ///
        $request->validate([

        ]);

    }

}
