<?php

namespace App\Http\Controllers;
use App\Models\Methode;
use Illuminate\Http\Request;

class MethodeController extends Controller
{
    public function viewmethode()
    {
        return view('Home.view_methode_pf',[
            'methodes'=>Methode::all()
        ]);
    }
    public function store(Request $request){
        $object_cpn=  new methode();
        $object_cpn->methode_designation=$request->methode_designation;
        $object_cpn->save();
        return redirect()->back()->with("success","Information enregistrée");
        
    }
}
