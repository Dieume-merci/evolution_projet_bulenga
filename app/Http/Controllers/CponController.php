<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Traitement_cpn_cpon;
use App\Models\patient;
use App\Models\cpon;
use Illuminate\Support\Facades\DB;

class CponController extends Controller
{
    public function viewcpon()
    {
        return view('Home.view_visite_cpon',[
            'object_cpon'=>DB::table('cpons')
            ->join('Patients','cpons.patient_id','=','Patients.id')->get(),
            ]);
    }
    public function explocpon(cpon $cpon)
    {
        return view('Home.exploration_visite_cpon',[
                'Traitement_cpn_cpon'=> Traitement_cpn_cpon::find(1),
            ]);
    }
    
}
