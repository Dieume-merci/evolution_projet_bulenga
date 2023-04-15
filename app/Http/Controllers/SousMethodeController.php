<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SousMethodeController extends Controller
{
    public function viewsousmethode()
    {
        return view('Home.view_sous_methode_pf');
    }
}
