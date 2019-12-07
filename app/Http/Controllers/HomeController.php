<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Personne;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }
     public function acceuil()
     {
         $persos = Personne::all();
         return view('acceuil', compact('persos'));
     }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
}
