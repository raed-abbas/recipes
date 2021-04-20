<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Carbon\Carbon;

class ContactController extends Controller
{
    // La méthode index de la page contact
    function index()
    {
        $contacts = Contact::all();
        return view('contact', ['contacts'=>$contacts]);
    }
     // cette fucntion envoie les données du fromulaire à DB
     public function addContact(Request $request)
     {
         // Ajouter un contact
         $request ->validate([
             'name' => 'required',
             'email' => 'required|email|unique:contact',
             'message' => 'required'
         ]);
         $now = Carbon::now();
         $details = [
             'name' => $request -> name,
             'email' => $request -> email,
             'message' => $request -> message,
             'date' => $now
         ];
         $contact = Contact::create([
             'name' => $request -> name,
             'email' => $request -> email,
             'message' => $request -> message,
             'date' => $now
         ]);
         if($contact){
             return back()->with('success', 'Le contact a été bien envoyé');
         }else{
             return back()->with('fail', 'Il y a une erreur dans la requête ...!');
         }
     }
}
