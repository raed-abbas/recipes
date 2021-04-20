<?php

namespace App\Http\Controllers;
use App\Models\Recipe;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // la méthode index
    function index()
    {
        $recipes = Recipe::orderBy('date', 'desc')->take(3)->get();
        return view('welcome', ['recettes'=>$recipes]);
    }
}
