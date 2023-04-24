@extends('layouts.app-master')

@section('content')
<div class="row card dnp-georgia">
    <div class="card-body p-4 rounded">
        <div class="lead">
            <h3><i class="bi bi-people"> Type d'accouchement</i></h3>
        </div>
        <div class="row mt-2">
            <div class="container">
                <div class="dn-center">
                    <button class="btn btn-info" data-bs-toggle="modal" data-bs-target="#add_information"><span class="bi bi-plus"></span> Type d'Accouchement</button>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>N°</th>
                            <th>Designation</th>
                            <th>Date</th>
                            <th>Voir Plus & Obs.</th>
                        </tr>
                    </thead>
                    <tbody>
                        <p class=dn-hidden>{{$compteur=0}}</p>
                        @forelse ($type_d_accouchement as $items_type_d_acoucheent)
                            <tr>
                                <td>{{$compteur+=1}}</td>
                                <td>{{$items_type_d_acoucheent->type_accouchement_designation}}</td>
                                <td> le {{$items_type_d_acoucheent->created_at->format("d-m-Y à H:i:s")}}</td>
                                <td><button class="btn btn-danger"><span class="bi bi-trash3"></span></button>
                                    <a href="#" class="btn btn-warning"><span class="bi bi-book"></span></a>
                            </tr>
                            @empty
                            <tr>
                                <td class="text-center" colspan="4"> Aucune Entrée</td>
                            </tr>
                        @endforelse 
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="add_information">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header logo-title">
                <div class="lead">
                    <h3><i class="logo-title">Ajouter Un type d'Accouchement</i></h3>
                </div>
            </div>
            <div class="modal-body">
                <form action="{{route("inser_typeacouchement")}}" method="POST" class="form-group">
                    @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-floating">
                                    <input type="text" name="type_accouchement_designation" class="form-control" required>
                                    <label for="">Type d'accouchement</label>
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
