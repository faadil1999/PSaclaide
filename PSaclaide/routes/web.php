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

Route::middleware('auth','verified')->group(function(){

    Route::get('complete_profil',function(){
        $departements = Departement::All();
        return view ('admin.complete_profil',['departements' => $departements]);
    })->name("profil_complete");

});

Route::middleware('auth','verified','completed_profil')->group(function(){
   
    Route::get('home',function(){
        return view('admin.home');
    })->name("home");
    
    Route::get('/annonce', [AdminController::class, 'listeAnnonce'])->name('listeAnnonce');
    Route::get('/cours/inscrit',[StudentController::class ,'cours_inscrits'])->name('cours_inscrit');
    Route::get('/cours/inscrit/{id}',[StudentController::class ,'detail_cours_inscrits'])->name('details_cours_inscrit');
    Route::get('/newAnnonce', [AdminController::class, 'annonce'])->name('form_annonce');
   
    Route::post('/newAnnonce', [AdminController::class, 'createAnnonce'])->name('storeAnnonce'); 
    Route::get('annonce/{id}',[AnnonceController::class, 'details'])->name("details_annonce");

    Route::post('subscribe/{id}',[StudentController::class , 'subscribe'])->name('subscribe');

});

Route::get('/profil',    [AdminController::class, 'profil'])->name('profil');
Route::post('/home',     [AdminController::class, 'updateProfil'])->name('completerProfil');
Route::get('/option',    [AdminController::class, 'option'])->name('option');
Route::post('/option',   [AdminController::class, 'updatePassword'])->name('modifierPassword');
Route::post('/optionTeacher',   [AdminController::class, 'newTeacher'])->name('devenirProfesseur');
Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

