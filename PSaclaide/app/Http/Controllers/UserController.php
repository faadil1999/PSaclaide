<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function getUsers(){

        $users = User::all();
        return response()->json([
            'users' => $users
        ], 200 );
        // return view('admin.home',['users'=> $users]);
    }

    public function bannUser($id)
    {   
        $user = User::findOrFail($id);

        $user->update([
            'stateUser'=> 0
        ]);

        return response(200);
    }

    public function restorUser($id)
    {

        $user = user::findOrFail($id);
        $user->update([
            'stateUser' => 1
        ]);

        return response(200);
    }
}
