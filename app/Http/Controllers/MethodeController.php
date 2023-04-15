<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MethodeController extends Controller
{
    public function viewmethode()
    {
        return view('Home.view_methode_pf');
    }
}
