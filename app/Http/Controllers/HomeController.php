<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Personne;
use Illuminate\Paginattion\Paginator;

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
         $persos = Personne::orderBy('created_at','DESC')->paginate(5);
         return view('acceuil', compact('persos'));
     }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index2()
    {
       return view('login');
   }
    public function incription()
    {
        return view('inscription');
    }
    
   public function index()
   {
    return view('home');
   }
}
