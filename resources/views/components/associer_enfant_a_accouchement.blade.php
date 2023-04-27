<div class="modal-body text-center">
    <p id="notification_trois"></p>
    <form class="form-group" id="formulaire_trois"  action="{{ route("inserer_accouchement_jumeau") }}">
        @csrf
            <div class="row" id="etapee_1">
                <legend>
                    <small><i>Identité de l'Enfant</i><hr width="50%" class="logo-title"></small>
                </legend>
                <div class="col-lg-12">
                    <input type="hidden" name="maternite_id" value="{{$objet_maternite->id}}">
                    <div class="form-floating mt-2">
                        <input type="text" name="nom_enfant" class="form-control" placeholder="Entrer le nom de l'enfant">
                        <label>Nom De l'Enfant </label>
                    </div>
                    <div class="form-floating mt-2">
                        <input type="text" name="postnom_enfant" class="form-control" placeholder="Entrer le postnom de l'enfant">
                        <label >PostNom</label>
                    </div>
                    <div class="form-floating mt-2">
                        <input type="text" name="prenom_enfant" class="form-control" placeholder="Entrer un prenom de l'enfant">
                        <label>Prenom</label>
                    </div>
                    <div class="form-floating mt-2">
                        <select name="genre" class="form-control">
                            <option value>Selectionner Une civilité de l'enfant</option>
                            <option value="Feminin">Madame</option>
                            <option value="Masculin">Monsieur</option>
                        </select>
                        <label>Civilité</label>
                    </div>
                    <div class="form-floating mt-2">
                        <input type="date" name="date_de_naissance" class="form-control">
                        <label>Né(e) à</label>
                    </div>
                    <div class="form-floating mt-2">
                        <input type="text" name="lieu_de_naissance" maxlength="30" class="form-control" placeholder="Lieu de naissance ">
                        <label>Lieu de naissance</label>
                    </div>
                </div>
            <div class="btn-group mt-2 dn-left">
                <p onclick="show_stepp('etapee_2')" class="btn-items" id="bouttonright"></p>
            </div>
            </div>
            <div class="row dnh" id="etapee_2">
                <div class="col-lg-6">
                    <legend> <small><i>état de l'Enfant</i><hr width="50%" class="logo-title"></small></legend>
                    <div class="input-group mt-2">
                        <span class="input-group-text">Complication NN</span>
                        <select name="bebe_complicationsAlaNaiss" class="form-control">
                            <option value>Y-A-t-il une Complication à la naissance ?</option>
                            <option>Non</option>
                            <option>Oui</option>
                        </select>
                    </div>
                    <div class="input-group mt-2">
                        <span class="input-group-text">PRC</span>
                        <input type="text" name="bebe_prc" class="form-control">
                    </div>
                    <div class="input-group mt-2">
                        <span class="input-group-text">ARV</span>
                        <input type="text" name="bebe_arv" class="form-control">
                    </div>
                    <div class="input-group mt-2">
                        <span class="input-group-text">CTX</span>
                        <input type="text" name="bebe_ctx" class="form-control">
                    </div>
                    <div class="input-group mt-2">
                        <span class="input-group-text">Probleme constaté</span>
                        <input type="text" name="bebe_probleme_constate" class="form-control" placeholder="quel Est le problemme constaté?">
                    </div>
                    <div class="input-group mt-2">
                        <span class="input-group-text">Soin et Traitement</span>
                        <input type="text" name="bebe_soins_traitement" class="form-control">
                    </div>
                    <div class="input-group mt-2">
                        <span class="input-group-text">état de l'Enfant</span>
                        <select name="etat_de_l_enfant" class="form-control">
                            <option value>Selectionner une Option ici</option>
                            <option value="MORT-NE">Mort Né</option>
                            <option value="NAISSANCE-VIVANTE">Naissance vivante</option>
                        </select>
                    </div>
                    <div class="input-group mt-2">
                        <span class="input-group-text">Description</span>
                        <input type="text"  name="designation" placeholder="mettez Une Une Description" class="form-control">
                    </div>
                </div>
                <div class="col-lg-6">
                    <legend><small><i>Soin & Intervention</i><hr width="50%" class="logo-title"></small></legend>
                    <div class="input-group mt-2">
                        <span class="input-group-text">Désignation complication</span>
                        <input type="text" name="complication_designation" class="form-control" placeholder="Quelle est la designation de la complication">
                    </div>
                    <div class="input-group mt-2">
                        <span class="input-group-text">Soins essentiels</span>
                        <input type="text" name="soins_interventions_nn_nn_soins_essentiels" class="form-control"  placeholder="les soins essentiels">
                    </div>
                    <div class="input-group mt-2">
                        <span class="input-group-text">NN allete dans Une heure</span>
                        <select name="soins_interventions_nn_nn_allaites_dans_heure" class="form-control">
                            <option value>Est-il parvenu à taiter dans 1 heurs ?</option>
                            <option>Non</option>
                            <option>Oui</option>
                        </select>
                    </div>
                    <div class="input-group mt-2">
                        <span class="input-group-text">Recu Un atbenivm</span>
                        <select name="soins_interventions_nn_ayant_recu_at_ben_iv_im" class="form-control">
                            <option value>Y-a-t-il un recu un atbenivm ?</option>
                            <option>Non</option>
                            <option>Oui</option>
                        </select>
                    </div>
                    <div class="input-group mt-2">
                        <span class="input-group-text">Méthode Kangourou</span>
                        <select name="soins_interventions_nn_nn_methode_Kangourou" class="form-control">
                            <option value>Avez-vous utilisé la methode Kngourou?</option>
                            <option>Non</option>
                            <option>Oui</option>
                        </select>
                    </div>
                    <div class="input-group mt-2">
                        <span class="input-group-text">Soins Int. Prema.</span>
                        <select name="soins_interventions_nn_nn_prematures" class="form-control">
                            <option value>Avez-vous fait les soins d'intervention Prematuré?</option>
                            <option>Non</option>
                            <option>Oui</option>
                        </select>
                    </div>
                    <div class="input-group mt-2">
                        <span class="input-group-text">Reanimation</span>
                        <select name="soins_interventions_nn_nn_beneficiant_reanimation" class="form-control">
                            <option value>Naissance beneficiant Reanimation?</option>
                            <option>Non</option>
                            <option>Oui</option>
                        </select>
                    </div>
                    <div class="input-group mt-2">
                        <span class="input-group-text">NVP</span>
                        <select name="soins_interventions_nn_nvp_au_nn" class="form-control">
                            <option value>Selectionner Une Option</option>
                            <option>Non</option>
                            <option>Oui</option>
                        </select>
                    </div>
                </div>
                <div class="btn-group mt-2 dn-left">
                    <p onclick="show_stepp('etapee_1')" class="btn-items" id="bouttonleft"></p>
                    <p onclick="show_stepp('etapee_3')" class="btn-items" id="bouttonright"></p>
                </div>
            </div>
            
            <div class="row dnh" id="etapee_3">
                <div class="col-lg-6">
                    <legend> <small><i>Probleme lié à La mere</i><hr width="50%" class="logo-title"></small></legend>
                <div class="form-floating mt-2">
                    <input type="text"  name="mere_problemesMat" class="form-control" max="100">
                    <label>Probleme de maternité identifié</label>
                </div>
                <div class="form-floating mt-2">
                    <input type="text"  name="mere_soins_traitement" class="form-control" max="100">
                    <label>Soins/Traitement</label>
                </div>
                <div class="form-floating mt-2">
                    <select name="mere_fer_folate" class="form-control">
                        <option value>A-t-elle recu le Fer-folate ?</option>
                        <option>Oui</option>
                        <option>Non</option>
                    </select>
                    <label>Fer-folate</label>
                </div>
                <div class="form-floating mt-2">
                    <select name="mere_vit_a" class="form-control">
                        <option value>A-t-elle recu le vitamine A ?</option>
                        <option>Oui</option>
                        <option>Non</option>
                    </select>
                    <label>Vitamine A</label>
                </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-floating mt-5">
                        <select name="mere_mild" class="form-control">
                            <option value>A-t-elle recu le MILD ?</option>
                            <option>Oui</option>
                            <option>Non</option>
                        </select>
                        <label>MILD</label>
                    </div>
                    <div class="form-floating mt-2">
                        <select name="mere_arv" class="form-control">
                            <option value>A-t-elle recu le ARV ?</option>
                            <option>Oui</option>
                            <option>Non</option>
                        </select>
                        <label>ARV</label>
                    </div>
                    <div class="form-floating mt-2">
                        <select name="mere_ctx" class="form-control">
                            <option value>A-t-elle recu le CTX ?</option>
                            <option>Oui</option>
                            <option>Non</option>
                        </select>
                        <label>CTX</label>
                    </div>
                </div>
                <div class="btn-group dn-left mt-3">
                    <p onclick="show_stepp('etapee_2')" class="btn-items" id="bouttonleft"></p>
                    <p onclick="show_stepp('etapee_4')" class="btn-items" id="bouttonright"></p>
                </div>
            </div>
            <div class="row dnh" id="etapee_4">
                <div class="col-lg-6">
                    <legend> <small><i>Probleme A la Naissance</i><hr width="50%" class="logo-title"></small></legend>
                <div class="form-floating mt-2">
                    <select name="problemes_nn_conjonctivite_nn" class="form-control">
                        <option value>Y-a-t-il un probleme de conjonctivité ?</option>
                        <option>Non</option>
                        <option>Oui</option>
                    </select>
                    <label>Conjoctivité</label>
                </div>
                <div class="form-floating mt-2">
                    <select name="problemes_nn_asphyxie_nn" class="form-control">
                        <option value>Y-a-t-il été Asphyxié ?</option>
                        <option>Non</option>
                        <option>Oui</option>
                    </select>
                    <label>Asphyxie</label>
                </div>
                <div class="form-floating mt-2">
                    <select name="problemes_nn_infection_majeure" class="form-control">
                        <option value>Y-a-t-il une Infection ?</option>
                        <option>Non</option>
                        <option>Oui</option>
                    </select>
                    <label>Infection Majeure</label>
                </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-floating mt-5">
                        <select name="problemes_nn_malformation_cong_visible" class="form-control">
                            <option value>Y-a-t-il une Malformation Visible?</option>
                            <option>Non</option>
                            <option>Oui</option>
                        </select>
                        <label>Probleme de Mal Formation</label>
                    </div>
                    <div class="form-floating mt-2">
                        <input type="text" name="problemes_nn_autres" class="form-control" placeholder="Entrer une information">
                        <label>Autres Probleme</label>
                    </div>
                    <div class="form-floating mt-2">
                        <select name="type_accouchement_id" class="form-control">
                            <option value>Selectionner le type d'accouchement ?</option>
                            @foreach ($objet_type_accouchement as $item_objet_type_accouchement)
                        <option value="{{$item_objet_type_accouchement->id}}">{{$item_objet_type_accouchement->type_accouchement_designation}}</option>
                            @endforeach
                        </select>
                        <label>Selectionner Un Type d'accouchement</label>
                    </div>
                </div>
                <div class="form-floating mt-2">
                    <select name="user_id" class="form-control">
                        <option value>Selectionner le medecin qui l'a fait accoucher ?</option>
                        <option value="1">papa</option>
                        <option value="2">maman</option>
                    </select>
                    <label>Medecin Traitant </label>
                </div>
                <div class="form-floating mt-2">
                    <input type="date" name="accouchement_date_accouchement" class="form-control">
                    <label>Date d'Accouchement </label>
                </div>
                <div class="btn-group dn-left mt-3">
                    <p onclick="show_stepp('etapee_3')" class="btn-items" id="bouttonleft"></p>
                </div>
                <i class="mt-3">
                    <button class="btn btn-success" id="boutton_trois"><span class="bi bi-save2"></span> Enregister</button>
                </i>
            </div>
        </form>
    </div>