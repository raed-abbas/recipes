<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Recipe;


class RecettesController extends Controller
{
    // La méthode index
    function index()
    {
        $recipes = Recipe::orderBy('created_at', 'DESC')->get();
        return view('recettes', ['recettes' => $recipes]);
    }
    /** Afficher une recette donnée après avoir cliqué sur le lien dans
     * la page d'accueil 
     **/
    function show($recette_id)
    {     
        $recipe = Recipe::find($recette_id);
        $name_author = $recipe ->author->name;
        return view('recette', array(
            'recipe' =>$recipe,
            'name'=>$name_author
        ));
        
    }
     // ******************************************************
    // Créer une recette
    function create()
    {
        return view('recettes.create');
    }
    // Ajouter une recette dans la base de données
    function sotre()
    {
        // ajouter de validation pour les champs de la recette
        request()->validate([
            'title' => 'required',
            'content' => 'required',
            'ingredients' => 'required',
            'url' => 'required',
            'tags' => 'required',
            'status' => 'required'
         ]);
        // créer la recette
        Recipe::create([
            'author_id'=> 2,
            'title' => request('title'),
            'content' => request('content'),
            'ingredients' => request('ingredients'),
            'url' => request('url'),
            'tags' => request('tags'),
            'date' => Carbon::now(),
            'status' => request('status')
        ]);
        return redirect('/admin/recettes');
    }
    // ******************************************************

    // Mettre à jour ajouter une recette dans la base de données
    function edit($id)
    {
        $recette = Recipe::find($id);
        return view('recettes.edit', ['recette' => $recette]);
    }
     // Mettre à jour ajouter une recette dans la base de données
     function update(Recipe $recette)
     {
         request()->validate([
            'title' => 'required',
            'content' => 'required',
            'ingredients' => 'required',
            'url' => 'required',
            'tags' => 'required',
            'status' => 'required'
         ]);
         $recette->update([
            'title' => request('title'),
            'content' => request('content'),
            'ingredients' => request('ingredients'),
            'url' => request('url'),
            'tags' => request('tags'),
            'date' => Carbon::now(),
            'status' => request('status')
         ]);
        return redirect('/admin/recettes');
     }
    // ******************************************************

    // supprimer une recette dans la base de données
    function destroy($id)
    {
        $recette = Recipe::find($id);
        $recette->delete();
        
        return redirect('/admin/recettes');
    }
    // ******************************************************

    // Afficher toutes les recettes
    function showRecettes()
    {
        $recipes = Recipe::all();
        return view('recettes', ['recettes'=>$recipes]);
    }
}
