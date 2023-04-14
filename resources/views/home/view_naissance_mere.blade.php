@extends('layouts.app-master')

@section('content')
<div class="row card">
    <div class="card-body p-4 rounded">
        <div class="logo-title">
            <i class="logo-title"><h3>Liste de deces</h3></i>
        </div>
        <div class="row mt-5">
            <div class="container">
                <div class="dn-center">
                    {{-- <button class="btn btn-info" data-bs-toggle="modal" data-bs-keyboard="false" data-bs-target="#add_information"><span class="bi bi-plus"></span> Add</button> --}}
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>N°</th>
                            <th>Nom Complet</th>
                            <th>Age</th>
                            <th>Date </th>
                            <th>Voir Plus & Obs.</th>
                            <th>Voir Plus & Obs.</th>
                            <th>Voir Plus & Obs.</th>
                            <th>Voir Plus & Obs.</th>
                            <th>Voir Plus & Obs.</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Boss</td>
                            <td>12 an(a)</td>
                            <td>12 an(a)</td>
                            <td>12 an(a)</td>
                            <td>12 an(a)</td>
                            <td>12 an(a)</td>
                            <td>25-12-2022</td>
                            <td><button class="btn btn-danger btn-sm"><span class="bi bi-trash3"></span></button>
                                <button class="btn btn-warning btn-sm"><span class="bi bi-book"></span></button>
                                <div class="dropup d-inline">
                                    <button href="#" class="btn btn-info btn-sm dropdown-toggle" type="button" id="dorpper" data-bs-toggle="dropdown" aria-expanded="false">
                                        <span class="bi bi-info-square"></span></button>
                                        <ul class="dropdown-menu" aria-label="dorpper">
                                        <li><a href="{{ route("view_acc",1)}}" class="btn btn-link dropdown-item">1. premiere naissance</a></li>
                                            <li><a href="{{ route("view_acc",2)}}" class="btn btn-link dropdown-item">2. deuxiemen</a></li>
                                            <li><a href="{{ route("view_acc",3)}}" class="btn btn-link dropdown-item">3. 3ieme</a></li>
                                            <li><hr class="dropdown-divider"></li>
                                            <li><button class="dropdown-item btn btn-primary" data-bs-toggle="modal" data-bs-keyboard="false" data-bs-target="#add_information">
                                                <span class="bi bi-plus"></span>Ajouter</button></li>
                                        </ul>
                                    </div></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Boss BossBossBossBossBoss</td>
                            <td>12 an(a)</td>
                            <td>12 an(a)</td>
                            <td>12 an(a)</td>
                            <td>12 an(a)</td>
                            <td>12 an(a)</td>
                            <td>25-12-2022</td>
                            <td><button class="btn btn-danger btn-sm"><span class="bi bi-trash3"></span></button>
                                <button class="btn btn-warning btn-sm"><span class="bi bi-book"></span></button>
                                <div class="dropup d-inline">
                                    <button href="#" class="btn btn-info btn-sm dropdown-toggle" type="button" id="dorpper2" data-bs-toggle="dropdown" aria-expanded="false">
                                        <span class="bi bi-info-square"></span></button>
                                        <ul class="dropdown-menu" aria-label="dorpper2">
                                        <li><a href="{{ route("view_acc",1)}}" class="btn btn-link dropdown-item">1. premiere naissance</a></li>
                                            <li><a href="{{ route("view_acc",2)}}" class="btn btn-link dropdown-item">2. deuxiemen</a></li>
                                            <li><a href="{{ route("view_acc",3)}}" class="btn btn-link dropdown-item">3. 3ieme</a></li>
                                            <li><hr class="dropdown-divider"></li>
                                            <li><button class="dropdown-item btn btn-primary" data-bs-toggle="modal" data-bs-keyboard="false" data-bs-target="#add_information">
                                                <span class="bi bi-plus"></span>Ajouter</button></li>
                                        </ul>
                                    </div></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Boss</td>
                            <td>12 an(a)</td>
                            <td>12 an(a)</td>
                            <td>12 an(a)</td>
                            <td>12 an(a)</td>
                            <td>12 an(a)</td>
                            <td>25-12-2022</td>
                            <td><button class="btn btn-danger btn-sm"><span class="bi bi-trash3"></span></button>
                                <button class="btn btn-warning btn-sm"><span class="bi bi-book"></span></button>
                                <div class="dropup d-inline">
                                    <button href="#" class="btn btn-info btn-sm dropdown-toggle" type="button" id="dorpper3" data-bs-toggle="dropdown" aria-expanded="false">
                                        <span class="bi bi-info-square"></span></button>
                                        <ul class="dropdown-menu" aria-label="dorpper3">
                                        <li><a href="{{ route("view_acc",1)}}" class="btn btn-link dropdown-item">1. premiere naissance</a></li>
                                            <li><a href="{{ route("view_acc",2)}}" class="btn btn-link dropdown-item">2. deuxiemen</a></li>
                                            <li><a href="{{ route("view_acc",3)}}" class="btn btn-link dropdown-item">3. 3ieme</a></li>
                                            <li><hr class="dropdown-divider"></li>
                                            <li><button class="dropdown-item btn btn-primary" data-bs-toggle="modal" data-bs-keyboard="false" data-bs-target="#add_information">
                                                <span class="bi bi-plus"></span>Ajouter</button></li>
                                        </ul>
                                    </div></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Boss</td>
                            <td>12 an(a)</td>
                            <td>12 an(a)</td>
                            <td>12 an(a)</td>
                            <td>12 an(a)</td>
                            <td>12 an(a)</td>
                            <td>25-12-2022</td>
                            <td><button class="btn btn-danger btn-sm"><span class="bi bi-trash3"></span></button>
                                <button class="btn btn-warning btn-sm"><span class="bi bi-book"></span></button>
                                <div class="dropup d-inline">
                                    <button href="#" class="btn btn-info btn-sm dropdown-toggle" type="button" id="dorpper4" data-bs-toggle="dropdown" aria-expanded="false">
                                        <span class="bi bi-info-square"></span></button>
                                        <ul class="dropdown-menu" aria-label="dorpper4">
                                        <li><a href="{{ route("view_acc",1)}}" class="btn btn-link dropdown-item">1. premiere naissance</a></li>
                                            <li><a href="{{ route("view_acc",2)}}" class="btn btn-link dropdown-item">2. deuxiemen</a></li>
                                            <li><a href="{{ route("view_acc",3)}}" class="btn btn-link dropdown-item">3. 3ieme</a></li>
                                            <li><hr class="dropdown-divider"></li>
                                            <li><button class="dropdown-item btn btn-primary" data-bs-toggle="modal" data-bs-keyboard="false" data-bs-target="#add_information">
                                                <span class="bi bi-plus"></span>Ajouter</button></li>
                                        </ul>
                                    </div></td>
                        </tr>
                            <td>5</td>
                            <td>Boss</td>
                            <td>12 an(a)</td>
                            <td>12 an(a)</td>
                            <td>12 an(a)</td>
                            <td>12 an(a)</td>
                            <td>12 an(a)</td>
                            <td>25-12-2022</td>
                            <td><button class="btn btn-danger btn-sm"><span class="bi bi-trash3"></span></button>
                                <button class="btn btn-warning btn-sm"><span class="bi bi-book"></span></button>
                                <div class="dropup d-inline">
                                    <button href="#" class="btn btn-info btn-sm dropdown-toggle" type="button" id="dorpper5" data-bs-toggle="dropdown" aria-expanded="false">
                                        <span class="bi bi-info-square"></span></button>
                                        <ul class="dropdown-menu" aria-label="dorpper5">
                                        <li><a href="{{ route("view_acc",1)}}" class="btn btn-link dropdown-item">1. premiere naissance</a></li>
                                            <li><a href="{{ route("view_acc",2)}}" class="btn btn-link dropdown-item">2. deuxiemen</a></li>
                                            <li><a href="{{ route("view_acc",3)}}" class="btn btn-link dropdown-item">3. 3ieme</a></li>
                                            <li><hr class="dropdown-divider"></li>
                                            <li><button class="dropdown-item btn btn-primary" data-bs-toggle="modal"  data-bs-keyboard="false" data-bs-target="#add_information">
                                                <span class="bi bi-plus"></span>Ajouter</button></li>
                                        </ul>
                                    </div></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="modal fade dnp-georgia" data-bs-backdrop="static" id="add_information" aria-hidden="false">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header logo-title">
                <i class="logo-title"><h3 class="bi bi-people">  Nouvel Accouchement</h3></i>
            </div>
            <div class="modal-body text-center">
                <form action="" class="form-group">
                    <div class="row" id="etape_1">
                        <div class="col-lg-6">
                            <legend>
                                <small><i>Identité de l'Enfant</i><hr width="50%" class="logo-title"></small>
                            </legend>
                            <div class="input-group mt-2">
                                <span class="input-group-text">Nom </span>
                                <input type="text" name="nom_enfant" class="form-control" required placeholder="Entrer le nom de l'enfant">
                            </div>
                            <div class="input-group mt-2">
                                <span class="input-group-text">PostNom</span>
                                <input type="text" name="postnom_enfant" class="form-control" required placeholder="Entrer une information">
                            </div>
                            <div class="input-group mt-2">
                                <span class="input-group-text">Prenom</span>
                                <input type="text" name="prenom_enfant" class="form-control" placeholder="Entrer une information">
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
                                    <option>a-t-il une Complication à la naissance ?</option>
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
                                <span class="input-group-text">Naissance vivantet</span>
                                <select class="form-control" required>
                                    <option>Selectionner une Option ici</option>
                                    <option>Deces</option>
                                    <option>Mort Né</option>
                                    <option>Naissance vivante</option>
                                </select>
                            </div>
                            <div class="input-group mt-2 dnh" id="deces">
                                <span class="input-group-text">Deces</span>
                                <select class="form-control" required>
                                    <option>Selectionner une Option ici</option>
                                    <option>Deces</option>
                                    <option>Mort Né</option>
                                    <option>Naissance vivante</option>
                                </select>
                            </div>
                            <div class="input-group mt-2 dnh"  id="mortne">
                                <span class="input-group-text">Mort né</span>
                                <select class="form-control" required>
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
                                <span class="input-group-text">Désignation</span>
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
                                    <option>a-t-il un recu un atbenivm ?</option>
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
                            <legend> <small><i>Probleme A la Naissance</i><hr width="50%" class="logo-title"></small></legend>
                        <div class="input-group mt-2">
                            <span class="input-group-text">Conjoctivité</span>
                            <select name="problemes_nn_conjonctivite_nn" class="form-control" required>
                                <option>a-t-il un probleme de conjonctivité ?</option>
                                <option>Non</option>
                                <option>Oui</option>
                            </select>
                        </div>
                        <div class="input-group mt-2">
                            <span class="input-group-text">Asphyxie</span>
                            <select name="problemes_nn_asphyxie_nn" class="form-control" required>
                                <option>a-t-il été Asphyxié ?</option>
                                <option>Non</option>
                                <option>Oui</option>
                            </select>
                        </div>
                        <div class="input-group mt-2">
                            <span class="input-group-text">Infection</span>
                            <select name="problemes_nn_infection_majeure" class="form-control" required>
                                <option>a-t-il une Infection ?</option>
                                <option>Non</option>
                                <option>Oui</option>
                            </select>
                        </div>
                        <div class="input-group mt-2">
                            <span class="input-group-text">Malformation</span>
                            <select name="problemes_nn_malformation_cong_visible" class="form-control" required>
                                <option>a-t-il une Malformation ?</option>
                                <option>Non</option>
                                <option>Oui</option>
                            </select>
                        </div>
                        <div class="input-group mt-2">
                            <span class="input-group-text">Autres</span>
                            <input type="text" name="problemes_nn_autres" class="form-control" required>
                        </div>
                        </div>
                        <div class="col-lg-6">
                            <legend> <small><i>Acouchement</i><hr width="50%" class="logo-title"></small></legend>
                            <div class="input-group mt-2">
                                <span class="input-group-text">Medecin Acoucheur</span>
                                <select name="user_id" class="form-control" required>
                                    <option>Selectionner Son accoucheur ?</option>
                                    <option value="1">papa</option>
                                    <option value="2">maman</option>
                                </select>
                            </div>
                            <div class="input-group mt-2">
                                <span class="input-group-text">Type d'accouchement</span>
                                <select name="type_accouchement_id" class="form-control" required>
                                    <option>selectionner un type ?</option>
                                    <option value="1">Non</option>
                                    <option value="2">Oui</option>
                                </select>
                            </div>
                            <div class="input-group mt-2">
                                <span class="input-group-text"> Grossesse à T</span>
                                <select name="maternite_grossesse_a_terme" class="form-control" required>
                                    <option>Etait Une grossesse à Terme? ?</option>
                                    <option>Non</option>
                                    <option>Oui</option>
                                </select>
                            </div>
                            <div class="input-group mt-2">
                                <span class="input-group-text">Date d'Entrée</span>
                                <input type="date" name="maternite_date_entree_terme" class="form-control" required>
                            </div>
                            <div class="input-group mt-2">
                                <span class="input-group-text">Statut sérologique VIH</span>
                                <select name="maternite_statut_serologique_vih_terme" class="form-control" required>
                                    <option>Est-t-il Une PVV ?</option>
                                    <option value="Negatif">Non</option>
                                    <option value="Positif">Oui</option>
                                </select>
                            </div>
                        </div>
                        <div class="btn-group dn-left mt-3">
                            <p onclick="show_step('etape_2')" class="btn-items" id="bouttonleft"></p>
                        </div>
                        <i class="mt-3">
                            <button class="btn btn-success"><span class="bi bi-save2"></span> Enregister</button>
                        </i>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-danger" data-bs-dismiss="modal"><span class="bi bi-exit"></span> Fermer</button>
            </div>
        </div>
    </div>
</div>
@endsection
