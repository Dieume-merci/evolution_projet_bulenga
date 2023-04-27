@extends('layouts.app-master')

@section('content')
<div class="row card dnp-georgia">
    <div class="card-body p-4 rounded">
        <div class="lead">
            <h3><i class="bi bi-people"></i> Visite à la Maternite </h3>
        </div>
        <div class="row">
            <div class="col-lg-9">
                <table class="table table-condensed">
                    <thead>                        
                        <tr>
                            <th>nom Complet</th>
                            <td>{{$objet_maternite->getmaternite->nom}} {{$objet_maternite->getmaternite->postnom}} {{$objet_maternite->getmaternite->prenom}}</td>
                        </tr>
                        <tr>
                            <th>Civilité</th>
                            <td>{{$objet_maternite->getmaternite->sexe}}</td>
                        </tr>
                        <tr>
                            <th>Contact</th>
                            <td>{{$objet_maternite->getmaternite->phone}}</td>
                        </tr>
                        <tr>
                            <th>Adresse mail</th>
                            <td>{{$objet_maternite->getmaternite->email}}</td>
                        </tr>
                        <tr>
                            <th>adresse</th>
                            <td>{{$objet_maternite->getmaternite->adresse}}</td>
                        </tr> 
                        <tr>
                            <th>code</th>
                            <td>{{$objet_maternite->getmaternite->code}}</td>
                        </tr>                       
                        <tr>
                            <th>Grossesse à terme</th>
                            <td>{{$objet_maternite->maternite_grossesse_a_terme}}</td>
                        </tr>
                        <tr>
                            <th>Date d'entree</th>
                            <td>le {{$objet_maternite->created_at->format("d-m-Y à h:i:s")}}</td>
                        </tr> 
                        <tr>
                            <th>Statut serologique VIH</th>
                            <td>{{$objet_maternite->maternite_statut_serologique_vih}}</td>
                        </tr>
                        <tr>
                            <th>Date Sortie</th>
                            <td>{{$objet_maternite->maternite_date_sortie}}</td>
                        </tr> 
                        <tr>
                            <th>Observation</th>
                            <th>{{$objet_maternite->maternite_obs}}</th>
                        </tr>
                    </thead>
                </table>
            </div>
            <div class="col-lg-3">
                @include('components.sidebar.sous_menu_mere')
            </div>
    </div>
</div>
<div class="modal fade dnp-georgia" data-bs-backdrop="static" id="add_information" aria-hidden="false">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header logo-title">
                <h3 class="bi bi-people"><i>  Nouvel Accouchement</i></h3>
            </div>
             @include('components.add_accouchement')
            <div class="modal-footer">
                <button class="btn btn-danger" data-bs-dismiss="modal"><span class="bi bi-exit"></span> Fermer</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade dnp-georgia" data-bs-backdrop="static" id="add_information_maternite" aria-hidden="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header logo-title">
                <h3 class="bi bi-people"><i> Visite A la Maternité</i></h3>
            </div>
             @include('components.add_maternite')
            <div class="modal-footer">
                <button class="btn btn-danger" data-bs-dismiss="modal"><span class="bi bi-exit"></span> Fermer</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade dnp-georgia" data-bs-backdrop="static" id="add_jumeaux_bebe_siamois" aria-hidden="false">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header logo-title">
                <h3 class="bi bi-people"><i> Associer Un Enfant à cet Accouchement</i></h3>
            </div>
                @include('components.associer_enfant_a_accouchement')
            <div class="modal-footer">
                <button class="btn btn-danger" data-bs-dismiss="modal"><span class="bi bi-exit"></span> Fermer</button>
            </div>
        </div>
    </div>
</div>

@endsection
