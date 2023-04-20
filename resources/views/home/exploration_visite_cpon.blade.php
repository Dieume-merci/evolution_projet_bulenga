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
                    <button class="btn btn-info  btn-sm" data-bs-toggle="modal" data-bs-target="#add_information"><span class="bi bi-plus"></span> Nouveau(x) traitement(s)</button>
                </div>
                <i class="dn-hidden">{{$compteur=1}}</i>
                <table class="table">
                    <thead>
                        <tr>
                            <td>Nom Complet: </td>
                        <td colspan="2">{{$information_patient->nom}} {{$information_patient->postnom}} {{$information_patient->prenom}}</td>
                        </tr>
                        <tr>
                            <td>Genre </td>
                            <td colspan="2">{{$information_patient->sexe}} </td>
                        </tr>
                        <tr>
                            <td>Adresse </td>
                            <td colspan="2">{{$information_patient->adresse}} </td>
                        </tr>
                        @forelse ($Traitement_cpn_cpon->gettraitementcpon as $item_traitement_cpn_cpon)
                            <tr>
                                <td> {{$compteur}} <sup><u>e</u></sup>Traitement </td>
                                <td>{{$item_traitement_cpn_cpon->traitement_designation}}</td>
                                <td class="dn-margetable"><a class="bi bi-trash btn-lg" onclick="shorterror()"></a></td>
                            </tr>
                            <i class="dn-hidden">{{$compteur+=1}}</i>
                        @empty
                            <tr class="alert alert-danger">
                                <td colspan="3" class="text-center">Aucun Traitement Associé à cette Consultation </td>
                             </tr>
                        @endforelse
                    </thead>
                </table>
            </div> 
            <div class="col-lg-3">
                @include("components.sidebar.menu_cpon")
            </div>               
        </div>
    </div>
</div>
<div class="modal fade"  data-bs-backdrop="static" id="add_information" aria-hidden="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header lead text-center">
                <h3 class="bi bi-people"><i class="logo-title"> Associer Un Traitement à Cette consultation</i></h3>
            </div>
            <div class="modal-body">
            <form action="{{route("inserer_Traitement_pivot")}}" class="form-group" method="POST">
                @csrf
                    <i class="dn-hidden">{{$compteur=0}}</i>
                    <input type="hidden" name="id_cpon" value="{{$Traitement_cpn_cpon->id}}">
                    @foreach ($information_traitement as $item_information_traitement)
                        <i class="dn-hidden">{{$compteur+=1}}</i>
                        <i class="dn-hidden">{{$chapmps_form='name_field'.$compteur}}</i>
                        <div class="row">
                            <div class="col-lg-11 mt-2">
                                <p><u>{{$item_information_traitement->traitement_designation}}</u></p>
                            </div>
                            <div class="col-lg-1 mt-3">
                            <input type="checkbox" name="{{$chapmps_form}}" value="{{$item_information_traitement->id}}" class="input-group-text ">
                            </div>
                        </div>
                    @endforeach
                    <div class="mt-3 logo-title">
                        <button class="btn btn-success">
                            <span class="bi bi-save"> Enregistrer</span>
                        </button>
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