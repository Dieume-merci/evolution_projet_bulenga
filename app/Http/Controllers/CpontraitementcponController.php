<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cpon_traitement_cpon;
use App\Models\Traitement_cpon;

class CpontraitementcponController extends Controller
{
    public function store(Request $requete)
    {
        $info_traitement=Traitement_cpon::all();
        $compteur=0;
        foreach($info_traitement as $contenu_parcouru){
            $compteur+=1;
            $champ_du_formulaire='name_field'.$compteur;
            if($requete->$champ_du_formulaire){
                $object_pivot=new Cpon_traitement_cpon;
                $object_pivot->cpon_id=$requete->id_cpon;
                $object_pivot->traitement_cpon_id=$requete->$champ_du_formulaire;
                $object_pivot->save();
            } 
        }
        return redirect()->back()->with("success","Le traitement a été Ajouté");;
    }
}
