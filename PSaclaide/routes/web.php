<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AnnonceController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::middleware('auth','verified')->group(function(){
    Route::get('home',function(){
        return view('admin.home');
    });
    Route::get('add_annonce',[AdminController::class , 'annonce'])->name('annonce_form');
});

Route::get('/annonce/{id}', [AnnonceController::class, 'annonce']);