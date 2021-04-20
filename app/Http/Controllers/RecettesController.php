<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;

class RecettesController extends Controller
{
    // La méthode index
    function index()
    {
        return view('recettes');
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
}
