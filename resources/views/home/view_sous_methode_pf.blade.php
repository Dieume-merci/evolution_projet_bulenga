@extends('layouts.app-master')

@section('content')
<div class="row card">
    <div class="card-body p-4 rounded">
        <div class="lead">
            <h3><i class="bi bi-peace"> Les Methode de planing Familiale</i></h3>
        </div>
        <div class="row mt-2 dnp-georgia">
            <div class="container">
                <div class="dn-center">
                    <button class="btn btn-info" data-bs-toggle="modal" data-bs-target="#add_information"><span class="bi bi-plus"></span> Nouvelle Sous Methode</button>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>N°</th>
                            <th>sous Methode</th>
                            <th>Methode</th>
                            <th>Date d'Enregistrement</th>
                            <th>Supprimer & Modifier.</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($sous_methodes as $item)                            
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->sous_methode_designation}}</td>
                                <td>{{$item->methode_id}}</td>
                                <td>{{$item->created_at}}</td>
                                <td><button class="btn btn-danger"><span class="bi bi-trash3"></span></button>
                                    <a href="#" class="btn btn-warning"><span class="bi bi-book"></span></a>
                            </tr>
                        @endforeach
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
                    <h3><i class="bi bi-people"> Ajouter Une Sous-methode</i></h3>
                </div>
            </div>
            <div class="modal-body">
            <form action="{{route("inser_sousmethode")}}" method="POST" class="form-group">
                @csrf
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-floating">
                                <input type="text" name="methode_designation" class="form-control" required>
                                <label for="">Ajouter Une Sous Methode de Planification F.</label>
                            </div>
                        </div>
                        <div class="col-lg-12 mt-2">
                            <div class="form-floating">
                                <select name="methode_ide" class="form-control" required>
                                    <option value>Selectionner Une methode</option>
                                    @foreach ($methodes as $item_methode)
                                        <option value="{{$item_methode->id}}">{{$item_methode->methode_designation}}</option>
                                    @endforeach
                                </select>
                                <label for="">Affecter à Une Methode de Planification F.</label>
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
