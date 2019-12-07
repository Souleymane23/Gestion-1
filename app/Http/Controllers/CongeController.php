<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Conge;

class CongeController extends Controller
{
    public function vuconge()
    {
        $conge = Conge::all();
        return view('Conges.vuconge', compact('conge'));
    }
    public function createconge()
    {
        $congeidmigran= \App\Personne::pluck('matricule','id');
        return view('Conges.createconge',compact('congeidmigran'));
    }
    public function store(Request $request)
    {

        $conge = new \App\Conge();
        $conge->date_debut  = Request('date_debut');
        $conge->date_fin = Request('date_fin');
        $conge->motif  = Request('motif');
        $conge->personne_id= Request('personne_id');
        $conge->save();
        return redirect('/vuconge');

    }

}
