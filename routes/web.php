<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\DetailsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PublicController::class , 'HomePageGameSpotlight'])->name('HomePageGameSpotlight');
Route::get('/ChiSiamo', [PublicController::class , 'ChiSiamo'])->name('ChiSiamo');
Route::get('/Servizi', [PublicController::class , 'Servizi'])->name('Servizi');
Route::get('/Page_Dettaglio/{id}', [DetailsController::class , 'Page_Dettaglio'])->name('Page_Dettaglio');