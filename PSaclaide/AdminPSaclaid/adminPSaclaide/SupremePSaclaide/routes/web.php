<?php

use App\Http\Controllers\SupremeController;
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


Route::middleware('auth','verified')->group(function(){

   Route::get('/home',[SupremeController::class,"getUsers"])->name("home");
   Route::post('/ban_user/{id}',[SupremeController::class,"banUser"])->name("ban_user");
   Route::post('/restore_user/{id}',[SupremeController::class,"restoreUser"])->name("restore_user");
});

Route::get('/', function () {
    return view('welcome');
});
