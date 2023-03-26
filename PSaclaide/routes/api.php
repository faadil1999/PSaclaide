<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\APIMatieres;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::resource('matieres',APIMatieres::class );
Route::post('/store/annonce/',[AdminController::class, 'store_annonce']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
