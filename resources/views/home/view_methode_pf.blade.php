@extends('layouts.app-master')

@section('content')
<div class="row card">
    <div class="card-body p-4 rounded">
        <div class="lead">
            <h3><i class="bi bi-people"> Les Methode de planing Familiale</i></h3>
        </div>
        <div class="row mt-2">
            <div class="container">
                <div class="dn-center">
                    <button class="btn btn-info" data-bs-toggle="modal" data-bs-target="#add_information"><span class="bi bi-plus"></span> Nouvelle Methode</button>
                </div>
                <table class="table table-striped-columns" id="sampleTable">
                    <thead>
                        <tr>
                            <th>N°</th>
                            <th>Designation</th>
                            <th>Date D'enregistrement</th>
                            <th>Supprimer & Modifier.</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($methodes as $item)
                            <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->methode_designation}}</td>
                            <td>{{$item->created_at}}</td>
                                <td><a onclick="shorterror()" href="#" class="btn btn-danger"><span class="bi bi-trash3"></span></a>
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
                <i class="lead"><h3 class="bi bi-people">  Ajouter Une methode de Planification</h3></i>
            </div>
            <div class="modal-body">
            <form action="{{route('inser_methode')}}" method="POST" class="form-group">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-floating">
                                <input type="text" name="methode_designation" class="form-control" placeholder="Entrer une information">
                                <label for="">Ajouter Une Methode de Planification Familiale</label>
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
