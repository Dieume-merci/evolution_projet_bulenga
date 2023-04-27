<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Maternite;
use App\Models\Patient;
use App\Models\accouchement;
use App\Models\Mere_information;
use App\Models\Type_accouchement;
use App\Models\Methode;

class MaterniteController extends Controller
{
    public function viewmaternite()
    {
        return view('Home.view_naissance_mere',[
            'objet_maternite'=>Maternite::with("getmaternite")->get(),
        ]);
    }
    public function viewmateriniteself($identifiant)
    {
        $exploration_maternite=Maternite::findOrFail($identifiant);
        $object_maternite=Maternite::with("getmaternite")->get()->find($exploration_maternite->id);
        $information_acouchement=Patient::find($exploration_maternite->patient_id)->get_patent_from_maternite_to_accouchement;
        $information_type_accouchement=Type_accouchement::all();
        $maternite_accouchement=Maternite::with("get_maternite_from_accouchement")->find($identifiant);
        $methodes=Methode::all();
        return view('Home.view_maternite_self',[
            'objet_maternite'=>$object_maternite,
            'objet_mere'=>$information_acouchement,
            'objet_type_accouchement'=>$information_type_accouchement,
            'methodes'=>$methodes,
            'maternite_accouchement'=>$maternite_accouchement
        ]);
    }
    public function viewmaterinite()
    {
        return view('Home.view_maternite');
    }
    public function store(Request $requete){
        $maternite=Maternite::findOrFail($requete->id_maternite);
        $maternite->update([
            'maternite_grossesse_a_terme'=>$requete->maternite_grossesse_a_terme,
            'maternite_statut_serologique_vih'=>$requete->maternite_statut_serologique_vih,
            'maternite_obs'=>$requete->maternite_obs
        ]);
        return (1);
    }
}
// $information_mere->get_patient_from_mere->id