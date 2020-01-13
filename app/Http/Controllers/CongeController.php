<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Paginattion\Paginator;
use App\Conge;

class CongeController extends Controller
{
    public function vuconge()
    {       
        $conge = Conge::all();
        $conge = Conge::orderBy('created_at','DESC')->paginate(5);
        return view('Conges.vuconge', compact('conge'));
    }

    public function createconge()
    {
        $this->authorize('admin');
        $congeidmigran= \App\Personne::pluck('matricule','id');
        return view('create.personne',compact('congeidmigran'));
    }
    public function store(Request $request)
    {
       $this->authorize('admin');
        $conge = new \App\Conge();
        $conge->date_debut  = Request('date_debut');
        $conge->date_fin = Request('date_fin');
        $conge->motif  = Request('motif');
        $conge->personne_id= Request('personne_id');
        $conge->save();
        return redirect()->route('vuconge')->with(['success' => "Conges cree"]);
    }
    public function editconge($id)
    {
        $this->authorize('admin');
        
        $recupidperso= \App\Personne::pluck('matricule','id');
        $congesudate = \App\Conge::find($id);//on recupere l'employer
        return view('Conges.editconge', compact(['congesudate','recupidperso']));
    }

    public function updateconges (Request $request, $id)
    {
        $this->authorize('admin');
        $congesudate = \App\Conge::find($id);
        if ($congesudate) {
            $congesudate->date_debut = $request->input('date_debut');
            $congesudate->date_fin = $request->input('date_fin');
            $congesudate->motif = $request->input('motif');
            $congesudate->personne_id= $request->input('personne_id');
            $congesudate->save();
        }

        return redirect()->route('vuconge')->with(['success' => "les modifications ont ete bien effectuées"]);
    }
    //partie suppression
    public function destroy($id)
    {
       $this->authorize('admin');
        $supconge = \App\Conge::find($id);
        if($supconge)
            $supconge->delete();
        return redirect()->route('vuconge')->with(['success' => "Suppession reuissi"]);
    }

}
