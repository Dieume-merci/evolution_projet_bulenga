<?php

namespace App\Http\Controllers;
use App\Models\sous_methode;
use App\Models\methode;
use Illuminate\Http\Request;

class SousMethodeController extends Controller
{
    public function viewsousmethode()
    {
        return view('Home.view_sous_methode_pf',[
            'sous_methodes'=>Sous_methode::all(),
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
