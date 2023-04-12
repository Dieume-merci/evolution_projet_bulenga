<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccouchementController extends Controller
{
    public function addacouchement()
    {
        return view('Home.add_naissance_accouchement');
    }
    public function viewacouchement()
    {
        return view('Home.view_accouchement');
    }
}
