<div class="modal-body text-center">
<form action="{{route("inserer_accouchement")}}" method="POST" class="form-group">
    @csrf
        <div class="row" id="etape_1">
            <div class="col-lg-6">
                <legend>
                    <small><i>Identité de l'Enfant</i><hr width="50%" class="logo-title"></small>
                </legend>
                <input type="hidden" name="maternite_id" value="{{$objet_maternite->id}}">
                <div class="input-group mt-2">
                    <span class="input-group-text">Nom </span>
                    <input type="text" name="nom_enfant" class="form-control" required placeholder="Entrer le nom de l'enfant">
                </div>
                <div class="input-group mt-2">
                    <span class="input-group-text">PostNom</span>
                    <input type="text" name="postnom_enfant" class="form-control" required placeholder="Entrer le postnom de l'enfant">
                </div>
                <div class="input-group mt-2">
                    <span class="input-group-text">Prenom</span>
                    <input type="text" name="prenom_enfant" class="form-control" placeholder="Entrer un prenom de l'enfant">
                </div>
                <div class="input-group mt-2">
                    <span class="input-group-text">Contact</span>
                    <input type="text" name="telephone_pere" minlength="10" maxlength="13" class="form-control" placeholder="Entrer le numero du telephone du pere">
                </div>
                <div class="input-group mt-2">
                    <span class="input-group-text">Civilité</span>
                    <select name="genre" class="form-control" required>
                        <option>Selectionner Une civilité de l'enfant</option>
                        <option value="Feminin">Madame</option>
                        <option value="Masculin">Monsieur</option>
                    </select>
                </div>
                <div class="input-group mt-2">
                    <span class="input-group-text">Né(e) à</span>
                    <input type="text" name="lieu_de_naissance" maxlength="30" class="form-control" required placeholder="Lieu de naissance ">
                    <span class="input-group-text">Le</span>
                    <input type="date" name="date_de_naissance" class="form-control" required>
                </div>
            </div>
            <div class="col-lg-6 dn-justifier">
                <div class="input-group">
                    <span class="input-group-text">Nom du Pere </span>
                    <input type="text" name="nompere" class="form-control" required placeholder="Non du pere">
                </div>
                <div class="input-group mt-2">
                    <span class="input-group-text">PostNom</span>
                    <input type="text" name="postnom_pere" class="form-control" required placeholder="PostNom pere">
                </div>
                <div class="input-group mt-2">
                    <span class="input-group-text">Prenom</span>
                    <input type="text" name="prenom_pere" class="form-control" placeholder="Prenom Pere">
                </div>
                <div class="input-group mt-2">
                    <span class="input-group-text">Adresse</span>
                    <input type="text" name="adresse_pere" class="form-control" placeholder="Adresse du pere">
                </div>
                <div class="input-group mt-2">
                    <span class="input-group-text">Nationalité</span>
                    <input type="text" name="nationalite_pere" class="form-control" placeholder="Nationalité du pere">
                </div>
            </div>
            <div class="input-group mt-2">
                <span class="input-group-text">Né(e) à</span>
                <input type="text" name="lieudenassance_pere" maxlength="30" class="form-control" required placeholder="Lieu de naissance Pere">
                <span class="input-group-text">Le</span>
                <input type="date" name="datenaissance_pere" class="form-control" required>
            </div>
        <div class="btn-group mt-2 dn-left">
            <p onclick="show_step('etape_2')" class="btn-items" id="bouttonright"></p>
        </div>
        </div>
        <div class="row dnh" id="etape_2">
            <div class="col-lg-6">
                <legend> <small><i>état de l'Enfant</i><hr width="50%" class="logo-title"></small></legend>
                <div class="input-group mt-2">
                    <span class="input-group-text">Complication NN</span>
                    <select name="bebe_complicationsAlaNaiss" class="form-control" required>
                        <option>Y-A-t-il une Complication à la naissance ?</option>
                        <option>Non</option>
                        <option>Oui</option>
                    </select>
                </div>
                <div class="input-group mt-2">
                    <span class="input-group-text">PRC</span>
                    <input type="text" name="bebe_prc" class="form-control" required>
                </div>
                <div class="input-group mt-2">
                    <span class="input-group-text">ARV</span>
                    <input type="text" name="bebe_arv" class="form-control" required>
                </div>
                <div class="input-group mt-2">
                    <span class="input-group-text">CTX</span>
                    <input type="text" name="bebe_ctx" class="form-control" required>
                </div>
                <div class="input-group mt-2">
                    <span class="input-group-text">Probleme constaté</span>
                    <input type="text" name="bebe_probleme_constate" class="form-control" required placeholder="quel Est le problemme constaté?">
                </div>
                <div class="input-group mt-2">
                    <span class="input-group-text">Soin et Traitement</span>
                    <input type="text" name="bebe_soins_traitement" class="form-control" required>
                </div>
                <div class="input-group mt-2">
                    <span class="input-group-text">état de l'Enfant</span>
                    <select id="etat_de_l_enfant" onchange="change_show_items()" class="form-control" required>
                        <option>Selectionner une Option ici</option>
                        <option value="deces">Deces</option>
                        <option value="mortne">Mort Né</option>
                        <option value="naissancevivante">Naissance vivante</option>
                    </select>
                </div>
                <div class="input-group mt-2 dnh" id="naissancevivante">
                    <span class="input-group-text">Naissance vivante</span>
                    <select class="form-control" name="naiss_vivante_designation"  required>
                        <option>Selectionner une Option ici</option>
                        <option>Deces</option>
                        <option>Mort Né</option>
                        <option>Naissance vivante</option>
                    </select>
                </div>
                <div class="input-group mt-2 dnh" id="deces">
                    <span class="input-group-text">Deces</span>
                    <select class="form-control" name="dece_designation" required>
                        <option>Selectionner une Option ici</option>
                        <option>Deces</option>
                        <option>Mort Né</option>
                        <option>Naissance vivante</option>
                    </select>
                </div>
                <div class="input-group mt-2 dnh"  id="mortne">
                    <span class="input-group-text">Mort né</span>
                    <select class="form-control" name="mort_ne_designation" required>
                        <option>Selectionner une Option ici</option>
                        <option>Deces</option>
                        <option>Mort Né</option>
                        <option>Naissance vivante</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-6">
                <legend><small><i>Soin & Intervention</i><hr width="50%" class="logo-title"></small></legend>
                <div class="input-group mt-2">
                    <span class="input-group-text">Désignation complication</span>
                    <input type="text" name="complication_designation" class="form-control" required value="Centre Bulenga/bloc3" placeholder="Entrer une information">
                </div>
                <div class="input-group mt-2">
                    <span class="input-group-text">Soins essentiels</span>
                    <input type="text" name="soins_interventions_nn_nn_soins_essentiels" class="form-control" required value="Centre Bulenga/bloc3" placeholder="Entrer une information">
                </div>
                <div class="input-group mt-2">
                    <span class="input-group-text">NN allete dans Une heure</span>
                    <select name="soins_interventions_nn_nn_allaites_dans_heure" class="form-control" required>
                        <option>Est-il parvenu à taiter dans 1 heurs ?</option>
                        <option>Non</option>
                        <option>Oui</option>
                    </select>
                </div>
                <div class="input-group mt-2">
                    <span class="input-group-text">Recu Un atbenivm</span>
                    <select name="soins_interventions_nn_ayant_recu_at_ben_iv_im" class="form-control" required>
                        <option>Y-a-t-il un recu un atbenivm ?</option>
                        <option>Non</option>
                        <option>Oui</option>
                    </select>
                </div>
                <div class="input-group mt-2">
                    <span class="input-group-text">Méthode Kangourou</span>
                    <select name="soins_interventions_nn_nn_methode_Kangourou" class="form-control" required>
                        <option>Avez-vous utilisé la methode Kngourou?</option>
                        <option>Non</option>
                        <option>Oui</option>
                    </select>
                </div>
                <div class="input-group mt-2">
                    <span class="input-group-text">Soins Int. Prema.</span>
                    <select name="soins_interventions_nn_nn_prematures" class="form-control" required>
                        <option>Avez-vous fait les soins d'intervention Prematuré?</option>
                        <option>Non</option>
                        <option>Oui</option>
                    </select>
                </div>
                <div class="input-group mt-2">
                    <span class="input-group-text">Reanimation</span>
                    <select name="soins_interventions_nn_nn_beneficiant_reanimation" class="form-control" required>
                        <option>Naissance beneficiant Reanimation?</option>
                        <option>Non</option>
                        <option>Oui</option>
                    </select>
                </div>
                <div class="input-group mt-2">
                    <span class="input-group-text">NVP</span>
                    <select name="soins_interventions_nn_nvp_au_nn" class="form-control" required>
                        <option>Selectionner Une Option</option>
                        <option>Non</option>
                        <option>Oui</option>
                    </select>
                </div>
            </div>
            <div class="btn-group mt-2 dn-left">
                <p onclick="show_step('etape_1')" class="btn-items" id="bouttonleft"></p>
                <p onclick="show_step('etape_3')" class="btn-items" id="bouttonright"></p>
            </div>
        </div>
        
        <div class="row dnh" id="etape_3">
            <div class="col-lg-6">
                <legend> <small><i>Probleme lié à La mere</i><hr width="50%" class="logo-title"></small></legend>
            <div class="form-floating mt-2">
                <input type="text"  name="mere_problemesMat" class="form-control" required max="100">
                <label>Probleme de maternité identifié</label>
            </div>
            <div class="form-floating mt-2">
                <input type="text"  name="mere_soins_traitement" class="form-control" required max="100">
                <label>Soins/Traitement</label>
            </div>
            <div class="form-floating mt-2">
                <select name="mere_fer_folate" class="form-control" required>
                    <option value>A-t-elle recu le Fer-folate ?</option>
                    <option>Oui</option>
                    <option>Non</option>
                </select>
                <label>Fer-folate</label>
            </div>
            <div class="form-floating mt-2">
                <select name="mere_vit_a" class="form-control" required>
                    <option>A-t-elle recu le vitamine A ?</option>
                    <option>Oui</option>
                    <option>Non</option>
                </select>
                <label>Vitamine A</label>
            </div>
            </div>
            <div class="col-lg-6">
                <div class="form-floating mt-5">
                    <select name="mere_mild" class="form-control" required>
                        <option>A-t-elle recu le MILD ?</option>
                        <option>Oui</option>
                        <option>Non</option>
                    </select>
                    <label>MILD</label>
                </div>
                <div class="form-floating mt-2">
                    <select name="mere_arv" class="form-control" required>
                        <option>A-t-elle recu le ARV ?</option>
                        <option>Oui</option>
                        <option>Non</option>
                    </select>
                    <label>ARV</label>
                </div>
                <div class="form-floating mt-2">
                    <select name="mere_ctx" class="form-control" required>
                        <option>A-t-elle recu le CTX ?</option>
                        <option>Oui</option>
                        <option>Non</option>
                    </select>
                    <label>CTX</label>
                </div>
                <div class="form-floating mt-2">
                    <textarea cols="30" rows="10" name="mere_conseiller_pf" class="form-control" required></textarea>
                    <label>Conseil PF</label>
                </div>
            </div>
            <div class="form-floating mt-2">
                <select name="mere_methode_pf" class="form-control" required>
                    <option value>Selectionner Une methode</option>
                    @foreach ($methodes as $item_methode)
                        <option value="{{$item_methode->id}}">{{$item_methode->methode_designation}}</option>
                    @endforeach
                </select>
                <label for="">Methode de Planification F.</label>
            </div>
            <div class="btn-group dn-left mt-3">
                <p onclick="show_step('etape_2')" class="btn-items" id="bouttonleft"></p>
                <p onclick="show_step('etape_4')" class="btn-items" id="bouttonright"></p>
            </div>
        </div>
        <div class="row dnh" id="etape_4">
            <div class="col-lg-6">
                <legend> <small><i>Probleme A la Naissance</i><hr width="50%" class="logo-title"></small></legend>
            <div class="form-floating mt-2">
                <select name="problemes_nn_conjonctivite_nn" class="form-control" required>
                    <option>Y-a-t-il un probleme de conjonctivité ?</option>
                    <option>Non</option>
                    <option>Oui</option>
                </select>
                <label>Conjoctivité</label>
            </div>
            <div class="form-floating mt-2">
                <select name="problemes_nn_asphyxie_nn" class="form-control" required>
                    <option>Y-a-t-il été Asphyxié ?</option>
                    <option>Non</option>
                    <option>Oui</option>
                </select>
                <label>Asphyxie</label>
            </div>
            <div class="form-floating mt-2">
                <select name="problemes_nn_infection_majeure" class="form-control" required>
                    <option>Y-a-t-il une Infection ?</option>
                    <option>Non</option>
                    <option>Oui</option>
                </select>
                <label>Infection Majeure</label>
            </div>
            </div>
            <div class="col-lg-6">
                <div class="form-floating mt-5">
                    <select name="problemes_nn_malformation_cong_visible" class="form-control" required>
                        <option>Y-a-t-il une Malformation Visible?</option>
                        <option>Non</option>
                        <option>Oui</option>
                    </select>
                    <label>Probleme de Mal Formation</label>
                </div>
                <div class="form-floating mt-2">
                    <input type="text" name="problemes_nn_autres" class="form-control" required placeholder="Entrer une information">
                    <label>Autres Probleme</label>
                </div>
                <div class="form-floating mt-2">
                    <select name="type_accouchement_id" class="form-control" required>
                        <option value>Selectionner le type d'accouchement ?</option>
                        @foreach ($objet_type_accouchement as $item_objet_type_accouchement)
                    <option>{{$item_objet_type_accouchement->type_accouchement_designation}}</option>
                        @endforeach
                    </select>
                    <label>Selectionner Un Type d'accouchement</label>
                </div>
            </div>
            <div class="form-floating mt-2">
                <select name="user_id" class="form-control" required>
                    <option>Selectionner le medecin qui l'a fait accoucher ?</option>
                    <option value="1">papa</option>
                    <option value="2">maman</option>
                </select>
                <label>Medecin Traitant </label>
            </div>
            <div class="form-floating mt-2">
                <input type="date" name="accouchement_date_accouchement" class="form-control" required>
                <label>Date d'Accouchement </label>
            </div>
            <div class="btn-group dn-left mt-3">
                <p onclick="show_step('etape_3')" class="btn-items" id="bouttonleft"></p>
            </div>
            <i class="mt-3">
                <button class="btn btn-success"><span class="bi bi-save2"></span> Enregister</button>
            </i>
        </div>
    </form>
</div>