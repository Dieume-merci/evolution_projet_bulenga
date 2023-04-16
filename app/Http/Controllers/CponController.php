<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CponController extends Controller
{
    public function viewcpon()
    {
        return view('Home.view_visite_cpon');
    }
    public function explocpon()
    {
        return view('Home.exploration_visite_cpon');
    }
}
