<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccouchementController extends Controller
{
    public function viewacouchement()
    {
        return view('Home.view_accouchement');
    }
    public function viewacouchementself()
    {
        return view('Home.view_accouchement_self');
    }
}
