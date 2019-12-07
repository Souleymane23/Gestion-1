<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class commentsController extends Controller
{
    public function show($id)
    {
    	return view('produit.show', compact("id"));
    }
}
