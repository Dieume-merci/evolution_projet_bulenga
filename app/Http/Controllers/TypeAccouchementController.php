<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\type_accouchement;

class TypeAccouchementController extends Controller
{
    public function addtypeacouchement()
    {
        return view('Home.add_naissance_type_accouchement');
    }
    public function viewtypeacouchement()
    {
        return view('Home.view_naissance_type_accouchement',[
            'type_d_accouchement'=>type_accouchement::all(),
        ]);
    }
    public function store(Request $request){
        $object_type_accoucheent=  new type_accouchement();
        $object_type_accoucheent->type_accouchement_designation=$request->type_accouchement_designation;
        $object_type_accoucheent->save();
        return redirect()->back()->with("success","Information enregistrée");
        
    }
}

