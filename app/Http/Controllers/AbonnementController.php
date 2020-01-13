<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Mail\ AbonnementMail;
use Illuminate\Http\Request;


class AbonnementController extends Controller
{
 public function expired(){
$name = "Souleymane";
$date = "31 - 12 -2019";
Mail::to('ssolobada23@gmail.com')->send(new AbonnementMail($name, $date));
return "Message envoyé";
}
}
