<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RecettesController;
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

// route pour la page home
Route::get('/', [HomeController::class, 'index']);


// Les routes pour les recettes
Route::get('/admin/recettes', [RecettesController::class, 'index']);

Route::get('/admin/recettes/create', [RecettesController::class, 'create']);
Route::post('/admin/recettes', [RecettesController::class, 'store']);
// mettre à jour
Route::get('/admin/recettes/{id}/edit', [RecettesController::class, 'edit']);
Route::put('/admin/recettes/{recette}', [RecettesController::class, 'update']);
// ******
Route::delete('/admin/recettes/{id}/delete', [RecettesController::class, 'destroy']);
// ******
// afficher les détails d'une recette
Route::get('/recettes/{id}', [RecettesController::class, 'show']);


// route pour la page Contact
Route::get('/contact', [ContactController::class, 'index']);
Route::post('/addContact', [ContactController::class, 'addContact'])->name('contact.send');
