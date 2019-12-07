<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackofficesController extends Controller
{
    public function back()
    {
    	return view('backoffice/index');
    }
}
