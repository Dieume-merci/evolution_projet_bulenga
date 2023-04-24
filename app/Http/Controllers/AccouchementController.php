<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Problemes_nn;
use App\Models\Bebe;
use App\Models\Naiss_vivante;
use App\Models\Soins_interventions_nn;
use App\Models\Mort_ne;
use App\Models\Deces;
use App\Models\Accouchement;
use App\Models\Attestation;
use App\Models\Complications;
use App\Models\Mere;

class AccouchementController extends Controller
{
    public function store(Request $requete_formulaire)
    {
        DB::transaction(function() use ($requete_formulaire){
                // $Mere=Mere::create([
            //     'patient_id'=>$requete_formulaire->patient_id,
            //     'mere_problemesMat'=>$requete_formulaire->mere_problemesMat,
            //     'mere_soins_traitement'=>$requete_formulaire->mere_soins_traitement,
            //     'mere_fer_folate'=>$requete_formulaire->mere_fer_folate,
            //     'mere_vit_a'=>$requete_formulaire->mere_vit_a,
            //     'mere_mild'=>$requete_formulaire->mere_mild,
            //     'mere_arv'=>$requete_formulaire->mere_arv,
            //     'mere_ctx'=>$requete_formulaire->mere_ctx,
            //     'mere_conseiller_pf'=>$requete_formulaire->mere_conseiller_pf,
            //     'mere_methode_pf'=>$requete_formulaire->mere_methode_pf,
            // ]);
            $Attestation=Attestation::create([
                'nom_enfant'=>$requete_formulaire->nom_enfant,
                'postnom_enfant'=>$requete_formulaire->postnom_enfant,
                'prenom_enfant'=>$requete_formulaire->prenom_enfant,
                'genre'=>$requete_formulaire->genre,
                'lieu_de_naissance'=>$requete_formulaire->lieu_de_naissance,
                'date_de_naissance'=>$requete_formulaire->date_de_naissance,
                'nompere'=>$requete_formulaire->nompere,
                'postnom_pere'=>$requete_formulaire->postnom_pere,
                'prenom_pere'=>$requete_formulaire->prenom_pere,
                'telephone_pere'=>1,
                // 'telephone_pere'=>$requete_formulaire->telephone_pere,
                'adresse_pere'=>$requete_formulaire->adresse_pere,
                'nationalite_pere'=>$requete_formulaire->nationalite_pere,
                'lieudenassance_pere'=>$requete_formulaire->lieudenassance_pere,
                'datenaissance_pere'=>$requete_formulaire->datenaissance_pere,
            ]);

            $Bebe=Bebe::create([
                'attestation_id'=>$Attestation->id,
                'bebe_complicationsAlaNaiss'=>$requete_formulaire->bebe_complicationsAlaNaiss,
                'bebe_prc'=>$requete_formulaire->bebe_prc,
                'bebe_arv'=>$requete_formulaire->bebe_arv,
                'bebe_ctx'=>$requete_formulaire->bebe_ctx,
                'bebe_probleme_constate'=>$requete_formulaire->bebe_probleme_constate,
                'bebe_soins_traitement'=>$requete_formulaire->bebe_soins_traitement,
            ]);
            $Accouchement=Accouchement::create([
                'type_accouchement_id'=>$requete_formulaire->type_accouchement_id,
                'user_id'=>$requete_formulaire->user_id,
                'bebe_id'=>$Bebe->id,
                'mere_id'=>1,
                // 'mere_id'=>$Mere->Id,
                'maternite_id'=>1,
                // 'maternite_id'=>$requete_formulaire->maternite_id,
                'accouchement_date_accouchement'=>"2023-04-12 11:42:28",
                // 'accouchement_date_accouchement'=>$requete_formulaire->accouchement_date_accouchement,
            ]);
            
            $problemenn=Problemes_nn::create([
                'accouchement_id'=>$Accouchement->id,
                'problemes_nn_conjonctivite_nn'=>$requete_formulaire->problemes_nn_conjonctivite_nn,
                'problemes_nn_asphyxie_nn'=>$requete_formulaire->problemes_nn_asphyxie_nn,
                'problemes_nn_infection_majeure'=>$requete_formulaire->problemes_nn_infection_majeure,
                'problemes_nn_malformation_cong_visible'=>$requete_formulaire->problemes_nn_malformation_cong_visible,
                'problemes_nn_autres'=>$requete_formulaire->problemes_nn_autres, 
            ]);
            $Naiss_vivante=Naiss_vivante::create([
                'accouchement_id'=>$Accouchement->id,
                'naiss_vivante_designation'=>$requete_formulaire->naiss_vivante_designation,
            ]);
            $Soins_interventions_nn=Soins_interventions_nn::create([
                'accouchement_id'=>$Accouchement->id,
                'soins_interventions_nn_nn_soins_essentiels'=>$requete_formulaire->soins_interventions_nn_nn_soins_essentiels,
                'soins_interventions_nn_nn_allaites_dans_heure'=>$requete_formulaire->soins_interventions_nn_nn_allaites_dans_heure,
                'soins_interventions_nn_ayant_recu_at_ben_iv_im'=>$requete_formulaire->soins_interventions_nn_ayant_recu_at_ben_iv_im,
                'soins_interventions_nn_nn_methode_Kangourou'=>$requete_formulaire->soins_interventions_nn_nn_methode_Kangourou,
                'soins_interventions_nn_nn_prematures'=>$requete_formulaire->soins_interventions_nn_nn_prematures,
                'soins_interventions_nn_nn_beneficiant_reanimation'=>$requete_formulaire->soins_interventions_nn_nn_beneficiant_reanimation,
                'soins_interventions_nn_nvp_au_nn'=>$requete_formulaire->soins_interventions_nn_nvp_au_nn,
            ]);
            $Mort_ne=Mort_ne::create([
                'accouchement_id'=>$Accouchement->id,
                'mort_ne_designation'=>$requete_formulaire->mort_ne_designation,
            ]);
            $Deces=Deces::create([
                'accouchement_id'=>$Accouchement->id,
                'dece_designation'=>$requete_formulaire->dece_designation,
                'dece_age'=>$requete_formulaire->dece_age,
            ]);
            $Complications=Complications::create([
                'accouchement_id'=>$Accouchement->id,
                'complication_designation'=>$requete_formulaire->complication_designation,
                'complication_complications_obstetricales'=>$requete_formulaire->complication_complications_obstetricales,
                
            ]);
        });
        return ($requete_formulaire);

    }
}