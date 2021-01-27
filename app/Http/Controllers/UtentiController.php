<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Utente;

class UtentiController extends Controller
{
    public function index(){

        $utenti = Utente::all();
        //dd($utenti);

        return view('lista', compact('utenti'));
    }
}
