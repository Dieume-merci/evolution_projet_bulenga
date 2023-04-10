<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MethodeController extends Controller
{
    public function addmethode()
    {
        return view('Home.add_vih_methode');
    }
    public function viewmethode()
    {
        return view('Home.view_vih_methode');
    }
}
