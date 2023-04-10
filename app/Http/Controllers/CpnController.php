<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CpnController extends Controller
{
    public function addcpn()
    {
        return view('Home.add_visite_cpn');
    }
    public function viewcpn()
    {
        return view('Home.view_visite_cpn');
    }
}
