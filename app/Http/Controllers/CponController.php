<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CponController extends Controller
{
    public function addcpon()
    {
        return view('Home.add_visite_cpon');
    }
    public function viewcpon()
    {
        return view('Home.view_visite_cpon');
    }
}
