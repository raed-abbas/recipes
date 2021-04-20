<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    // La méthode index de la page contact
    function index()
    {
        return view('contact');
    }
}
