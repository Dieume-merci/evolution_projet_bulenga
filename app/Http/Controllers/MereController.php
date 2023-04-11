<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MereController extends Controller
{
    public function viewmere()
    {
        return view('Home.view_naissance_mere');
    }
}
