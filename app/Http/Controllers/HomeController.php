<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // la méthode index
    function index()
    {
        return view('welcome');
    }
}
