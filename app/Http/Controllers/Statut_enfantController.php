<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Statut_enfant extends Controller
{
    public function adddeces()
    {
        return view('Home.add_naissance_deces');
    }
    public function viewdeces()
    {
        return view('Home.view_naissance_deces');
    }
}
