@extends('layouts.app-master')

@section('content')
<div class="row card">
    <div class="card-body p-4 rounded">
        <div class="logo-title">
            <i class="logo-title"><h3>Les Methode de planing Familiale</h3></i>
        </div>
        <div class="row mt-5 dnp-georgia">
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
                            <th>Supprimer & Modifier.</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>PILULE</td>
                            <td>PILULE</td>
                            <td><a onclick="shorterror()" href="#" class="btn btn-danger"><span class="bi bi-trash3"></span></a>
                                <a href="#" class="btn btn-warning"><span class="bi bi-book"></span></a>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>ABC</td>
                            <td>PILULE</td>
                            <td><a onclick="shorterror()" href="#" class="btn btn-danger"><span class="bi bi-trash3"></span></a>
                                <a href="#" class="btn btn-warning"><span class="bi bi-book"></span></a>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Boss</td>
                            <td>Boss</td>
                            <td><a onclick="shorterror()" href="#" class="btn btn-danger"><span class="bi bi-trash3"></span></a>
                                <a href="#" class="btn btn-warning"><span class="bi bi-book"></span></a>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Boss</td>
                            <td>Boss</td>
                            <td><a onclick="shorterror()" href="#" class="btn btn-danger"><span class="bi bi-trash3"></span></a>
                                <a href="#" class="btn btn-warning"><span class="bi bi-book"></span></a>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Boss</td>
                            <td>Boss</td>
                            <td><button class="btn btn-danger"><span class="bi bi-trash3"></span></button>
                                <a href="#" class="btn btn-warning"><span class="bi bi-book"></span></a>
                        </tr>
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
                <i class="logo-title"><h3 class="bi bi-people">  Ajouter Une Sous-methode</h3></i>
            </div>
            <div class="modal-body">
                <form action="" class="form-group">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-floating">
                                <input type="text" name="methode_designation" class="form-control" required>
                                <label for="">Ajouter Une Sous Methode de Planification F.</label>
                            </div>
                        </div>
                        <div class="col-lg-12 mt-2">
                            <div class="form-floating">
                                <select name="methode_designation" class="form-control" required>
                                    <option value>Selectionner Une methode</option>
                                    <option>CONDOM</option>
                                    <option>PILULE</option>
                                    <option>Autre</option>
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
