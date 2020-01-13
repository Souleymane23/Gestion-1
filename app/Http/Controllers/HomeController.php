<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Paginattion\Paginator;
use  App\Personne;

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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
     public function acceuil()
    {
        $page = Personne::all();
         $page = Personne::orderBy('created_at','DESC')->paginate(5);
        return view('acceuil',compact('page'));
    }
    
}
