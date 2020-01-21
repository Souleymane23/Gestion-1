<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\tally;
use Illuminate\Paginattion\Paginator;
class tallController extends Controller
{
   public function viewpointage()
   {
   	   $this->authorize('admin');
       $pointage= \App\Personne::pluck('matricule','id');
       return view("Pointage.viewpointage",compact('pointage'));
   }
    public function store(Request $request)
    {
    	$this->authorize('admin');
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
        $this->authorize('admin');
        $pointer = tally::orderBy('created_at','DESC')->paginate(5);
        return view('Pointage.pointage',compact('pointer'));
    }

    public  function updatepointage (Request $request, $id)
    {
    	$this->authorize('admin');
        $pointer = \App\tally::find($id);
        if($pointer){
            $pointer->datejr  = $request->input('datejr');
            $pointer->heure_arrive    = $request->input('heure_arrive');
            $pointer->heure_sorti = $request->input('heure_sorti');
            $pointer->absence    = $request->input('absence');
            $pointer->motif    = $request->input('motif');
            $pointer->save();}
        return redirect()->route('tablpointage')->with(['success' => "les modifications ont ete bien effectuées"]);
    }
    public function edit($id)
    {
    	$this->authorize('admin');
        $poita = \App\tally::find($id);//on recupere l'employer
        return view('Pointage.edit', compact('poita'));
    }
    //suppression
    //partie suppression
    public function destroy($id)
    {
    	$this->authorize('admin');
        $suppointage = \App\Personne::find($id);
        if($suppointage)
            $suppointage->delete();
        return redirect()->route('tablpointage')->with(['success' => "Suppession reuissi"]);
    }



}
