<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Traitement_cpon;
use App\Models\patient;
use App\Models\cpon;
use Illuminate\Support\Facades\DB;

class CponController extends Controller
{
    public function viewcpon()
    {
        return view('Home.view_visite_cpon',[
            'object_cpon'=>Cpon::with("getpatient")->get(),
            ]);
    }
    public function explocpon(cpon $cpon)
    {
        return view('Home.exploration_visite_cpon',[
                'Traitement_cpn_cpon'=> Cpon::with("gettraitementcpon")->find($cpon->id),
                'information_patient'=>Patient::findOrFail($cpon->patient_id),
                'information_traitement'=>Traitement_cpon::all(),
            ]);
    }
    
}
