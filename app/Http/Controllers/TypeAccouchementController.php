<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TypeAccouchementController extends Controller
{
    public function addtypeacouchement()
    {
        return view('Home.add_naissance_type_accouchement');
    }
    public function viewtypeacouchement()
    {
        return view('Home.view_naissance_type_accouchement');
    }
}
