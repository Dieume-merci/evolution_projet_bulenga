@extends('layouts.app-master')

@section('content')
<div class="row card">
    <div class="card-body p-4 rounded">
        <div class="lead">
            <h3><i class="bi bi-people">Les Patients A la Consultation Post Natale</i></h3>
        </div>
        <div class="row">
            <div class="col-lg-9">
                <div class="dn-center">
                    <button class="btn btn-info  btn-sm" data-bs-toggle="modal" data-bs-target="#add_information"><span class="bi bi-plus"></span> Nouvelle Consultation</button>
                </div>
                {{$Traitement_cpn_cpon}}chdd
                <table class="table">
                    {{-- <thead>
                        <tr>
                            <th>Nom Complet: </th>
                        <th>{{$info_patient->nom}} {{$info_patient->postnom}} {{$info_patient->prenom}}</th>
                        </tr>
                        <tr>
                            <th>Genre </th>
                            <th>{{$info_patient->sexe}} </th>
                        </tr>
                        <tr>
                            <th>Adresse </th>
                            <th>{{$info_patient->adresse}} </th>
                        </tr>
                        <tr>
                            <th>Methode </th>
                            <th>{{$info_methode}} </th>
                        </tr>
                        <tr>
                            <th>Fecondité </th>
                            <th>{{$info_planing->pf_infecondite}} </th>
                        </tr>
                        <tr>
                            <th>Infection Sexuellement Transmissible </th>
                            <th>{{$info_planing->pf_ist}} </th>
                        </tr>
                        <tr>
                            <th>Statut Sérologique </th>
                            <th>{{$info_planing->pf_statut_serologique_vih}} </th>
                        </tr>
                        <tr>
                            <th>Date de visite </th>
                            <th>{{$info_planing->created_at}} </th>
                        </tr>
                        <tr>
                            <th>Observation </th>
                            <th>{{$info_planing->pf_obs}} </th>
                        </tr>
                    </thead> --}}
                </table>
            </div> 
            <div class="col-lg-3">
                @include("components.sidebar.menu_cpon")
            </div>               
        </div>
    </div>
</div>
<div class="modal fade" id="add_information">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header logo-title">
                <i class="logo-title"><h3 class="bi bi-people">  Ajouter Un items</h3></i>
            </div>
            <div class="modal-body">
                <form action="" class="form-group">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-floating">
                                <input type="text" name="" class="form-control" placeholder="Entrer une information">
                                <label for="">champ 1</label>
                            </div>
                            <div class="form-floating mt-2">
                                <input type="text" name="" class="form-control" placeholder="Entrer une information">
                                <label for="">champ 2</label>
                            </div>
                            <div class="form-floating mt-2">
                                <input type="text" name="" class="form-control" placeholder="Entrer une information">
                                <label for="">champ 3</label>
                            </div>
                            <div class="form-floating mt-2">
                                <input type="text" name="" class="form-control" placeholder="Entrer une information">
                                <label for="">champ 4</label>
                            </div>
                            <div class="form-floating mt-2">
                                <input type="text" name="" class="form-control" placeholder="Entrer une information">
                                <label for="">champ 5</label>
                            </div>
                            <div class="form-floating mt-2">
                                <input type="text" name="" class="form-control" placeholder="Entrer une information">
                                <label for="">champ 6</label>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-floating">
                                <input type="text" name="" class="form-control" placeholder="Entrer une information">
                                <label for="">champ 7</label>
                            </div>
                            <div class="form-floating mt-2">
                                <input type="text" name="" class="form-control" placeholder="Entrer une information">
                                <label for="">champ 8</label>
                            </div>
                            <div class="form-floating mt-2">
                                <input type="text" name="" class="form-control" placeholder="Entrer une information">
                                <label for="">champ 9</label>
                            </div>
                            <div class="form-floating mt-2">
                                <input type="text" name="" class="form-control" placeholder="Entrer une information">
                                <label for="">champ 10</label>
                            </div>
                            <div class="form-floating mt-2">
                                <input type="text" name="" class="form-control" placeholder="Entrer une information">
                                <label for="">champ 11</label>
                            </div>
                            <div class="form-floating mt-2">
                                <input type="text" name="" class="form-control" placeholder="Entrer une information">
                                <label for="">champ 12</label>
                            </div>
                        </div>
                        <div class="mt-3 logo-title">
                            <button class="btn btn-success">
                                <span class="bi bi-save"> Enregistrer</span>
                            </button>
                        </div>
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