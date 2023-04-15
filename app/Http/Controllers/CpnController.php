<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CpnController extends Controller
{
    public function explorercpn()
    {
        return view('Home.exploration_visite_cpn');
    }
    public function viewcpn()
    {
        return view('Home.view_visite_cpn');
    }
    public function viewcpnacouchement()
    {
        return view('Home.view_cpn_mere');
    }
}