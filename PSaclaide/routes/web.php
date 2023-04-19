<?php

use App\Models\Departement;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AnnonceController;
use App\Http\Controllers\StudentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::middleware('auth','verified','banned_profil')->group(function(){

    Route::get('complete_profil',function(){
        $departements = Departement::All();
        return view ('admin.complete_profil',['departements' => $departements]);
    })->name("profil_complete");

});

Route::middleware('auth','verified')->group(function(){

    Route::get('banned_profil',function(){
       
        return view ('auth.banned');
    })->name("profil_banned");

});



Route::middleware('auth','verified','completed_profil','banned_profil')->group(function(){
   
    Route::get('home',function(){
        return view('admin.home');
    })->name("home");
    
    Route::get('/annonce', [AdminController::class, 'listeAnnonce'])->name('listeAnnonce');
    Route::post('/annonce',   [AnnonceController::class, 'filtreAnnonce'])->name('filtreAnnonce');

    Route::get('/cours/inscrit',[StudentController::class ,'cours_inscrits'])->name('cours_inscrit');
    Route::get('/mesannonces',[AdminController::class,'mesannonces'])->name('mesannonces');
    Route::get('/cours/formateur/detail/{id}',[AdminController::class ,'detail_mes_cours'])->name('details_cours_formateur');
    Route::get('/cours/inscrit/detail/{id}',[StudentController::class ,'detail_cours_inscrits'])->name('details_cours_inscrit');    
    
    Route::get('/newAnnonce', [AdminController::class, 'annonce'])->name('form_annonce');
    Route::get('corbeille',[AdminController::class,'corbeille'])->name('corbeille');
    
    Route::post('/newAnnonce', [AdminController::class, 'createAnnonce'])->name('storeAnnonce'); 
    Route::get('annonce/{id}',[AnnonceController::class, 'details'])->name("details_annonce");

    Route::post('trash_annonce/{id}',[AdminController::class,'trash_annonce'])->name("trash_annonce");
    Route::post('subscribe/{id}',[StudentController::class , 'subscribe'])->name('subscribe');

    
    Route::get('/option',    [AdminController::class, 'option'])->name('option');
    Route::post('/option',   [AdminController::class, 'updatePassword'])->name('modifierPassword');
    Route::post('/optionTeacher',   [AdminController::class, 'newTeacher'])->name('devenirProfesseur');

});

Route::get('/profil',    [AdminController::class, 'profil'])->name('profil');
Route::post('/home',     [AdminController::class, 'updateProfil'])->name('completerProfil');
Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
Route::put('/cours/formateur/detail/{id}', [AnnonceController::class, 'updateAnnonce'])->name('modifierAnnonce');
