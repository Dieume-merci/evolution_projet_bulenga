<?php

namespace App\Http\Controllers;
use App\Models\sous_methode;
use App\Models\methode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SousMethodeController extends Controller
{
    public function viewsousmethode()
    {
        return view('Home.view_sous_methode_pf',[
            'sous_methodes_objet'=>DB::table('Methodes')
                            ->join('Sous_methodes','Methodes.id','=','Sous_methodes.methode_id')->get(),
            'methodes'=>methode::all(),
        ]);
    }
    public function store(Request $request){
        $object_cpn=  new Sous_methode();
        $object_cpn->methode_id=$request->methode_ide;
        $object_cpn->sous_methode_designation=$request->methode_designation;
        $object_cpn->save();
        return redirect()->back()->with("success","Information enregistrée");
        
    }
}
