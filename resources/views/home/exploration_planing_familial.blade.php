@extends('layouts.app-master')
@section('content')
<div class="row card dnp-georgia">
    <div class="card-body p-4 rounded">
        <div class="lead">
            <h3><i class="bi bi-people"></i> Planing Familial</h3>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <table class="table">
                    <thead>
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
                    </thead>
                </table>
            </div>
            <div class="col-lg-4">
                @include('components.sidebar.menu_paning_familial')
            </div>
    </div>
</div>
@endsection
