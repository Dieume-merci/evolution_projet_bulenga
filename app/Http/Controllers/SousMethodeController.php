<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SousMethodeController extends Controller
{
    public function addsousmethode()
    {
        return view('Home.add_vih_sous_methode');
    }
    public function viewsousmethode()
    {
        return view('Home.view_vih_sous_methode');
    }
}
