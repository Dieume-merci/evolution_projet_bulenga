<?php
namespace App\Http\Controllers;
use App\Models\pf;
use App\Models\patient;
use App\Models\ac_ren;
use App\Models\sous_methode;
use App\Models\methode;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PfController extends Controller
{
        public function viewPlaningFamilial()
        {
            return view('Home.view_planing_familial',[
            'object_patient'=>pf::with("getplaning")->get(),
            ]);
        }
        public function explorationPlaningF(Pf $planing)
        {
           
            $data_methode = ($planing->methode_id) ? Methode::find($planing->methode_id)->methode_designation :null ;
            return view('Home.exploration_planing_familial',[
                'info_planing'=>$planing,
                'info_patient'=>patient::findOrFail($planing->patient_id),
                'info_methode'=>$data_methode,
            ]);
        }
        public function addPlaningF(Pf $planing)
        {
            $data_methode = ($planing->methode_id) ? Methode::find($planing->methode_id)->methode_designation :null ;
            return view('Home.add_planing_familial',[
                'info_planing'=>$planing,
                'methodes'=>methode::all(),
                'sous_methode'=>sous_methode::all(),
                'info_methode'=>$data_methode,
            ]);
        }
        public function store(Request $request){
            $object_planing=pf::findOrFail($request->id_planing);
            $object_ac_en=new ac_ren();
            $object_ac_en->pf_id=$request->id_planing;
            $object_ac_en->ac_ren_designation=$request->ac_ren_designation;
            $object_planing->pf_infecondite=$request->pf_infecondite;
            $object_planing->pf_ist=$request->pf_ist;
            $object_planing->pf_statut_serologique_vih=$request->pf_statut_serologique_vih;
            $object_planing->methode_id=$request->methode_ide;
            $object_planing->pf_obs=$request->pf_obs;
            $object_planing->save();
            $object_ac_en->save();
            return redirect()->back()->with("success","Informations ont été bien mise à jour");
        }
}
