<?php

namespace App\Http\Controllers;

use App\Events\BannUserEvent;
use App\Events\RestoreUserEvent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SupremeController extends Controller
{
    //

   public function getUsers()
   {
        $response =  Http::get('http://127.0.0.1:8000/api/users');

        $users = $response->json()["users"];
     
        
        return view('admin.home',['users'=>$users]);
   }

   public function banUser($id , Request $request)
   {
    
    $response = Http::put("http://127.0.0.1:8000/api/ban_user/".$id);

    $jsonData = $response->json();

    event(new BannUserEvent(str($request->email) , str($request->name)));
      return redirect()->route('home')->with('status','Utilisateur desactivé');

    
   }


   public function restoreUser($id,Request $request)
   {
   

        $response = Http::put("http://127.0.0.1:8000/api/restore_user/".$id);

        $jsonData = $response->json();

        event(new RestoreUserEvent( str($request->email) , str($request->name)));
        return redirect()->route('home')->with('status','Utilisateur à operationel');

   }

}
