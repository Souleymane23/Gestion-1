<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\tally;;

class AjaxController extends Controller
{
   public function pointer()
   {
   	return view('Pointage.pointer');
   }
   public function addpointage()
   {
   	$add = new taill;
   	$add->datejr= Input::get('recipient-date');
   	$add->heure_arrive= Input::get('recipient-time');
   	$add->heure_sorti= Input::get('recipient-timesortie');
   	$add->absence= Input::get('defaultUnchecked');
   	$add->motif= Input::get('message-text');
   	$add->save();
   }
}
