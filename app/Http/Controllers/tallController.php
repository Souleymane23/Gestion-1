<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tally;

class tallController extends Controller
{
   public function viewpointage()
   {
       $pointage= \App\Personne::pluck('matricule','id');
       return view("Pointage.viewpointage",compact('pointage'));
   }
    public function store(Request $request)
    {
        $verifi_ajout = $request->validate(['datejr'=>'required', 'heure_arrive'=>'required','heure_sorti'=>'required']);
        $tally = new \App\tally();
        $tally->datejr = Request('datejr');
        $tally->heure_arrive = Request('heure_arrive');
        $tally->heure_sorti = Request('heure_sorti');
        $tally->absence= Request('absence');
        $tally->motif= Request('motif');
        $tally->personne_id= Request('personne_id');
        $tally->save();
        return redirect()->route('tablpointage')->with(['success' => "l'enregistrement a ete bien effectuée"]);

    }
    public function pointage()
    {
        $pointer = \App\tally::all();
        return view('Pointage.pointage', compact('pointer'));
    }
    public function editpointage()
    {
        $poitas = \App\tally::find($id);//on recupere l'employer
        return view('Pointage.editpointage', compact('poitas'));
    }
    public  function update(Request $request, $id)
    {
        $poita = \App\tally::find($id);
        if($poita){
            $poita->datejr  = $request->input('datejr');
            $poita->heure_arrive    = $request->input('heure_arrive');
            $poita->heure_sorti = $request->input('heure_sorti');
            $poita->absence    = $request->input('absence');
            $poita->motif    = $request->input('motif');
            $poita->save();}
    }
}
