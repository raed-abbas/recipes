<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecettesController extends Controller
{
    // La méthode index
    function index()
    {
        return view('recettes');
    }
}
