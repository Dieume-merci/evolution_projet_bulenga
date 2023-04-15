@extends('layouts.app-master')

@section('content')
<div class="row card">
    <div class="card-body p-4 rounded">
        <div class="lead">
            <h3><i class="bi bi-people"></i> les Visites CPN effectuées</h3>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <div class="text-center ">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>N°</th>
                                <th>Date de Visite </th>
                                <th colspan="2">Supprimer ou Voir le Details</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>21-12-1996 </td>
                                <td><a onclick="shorterror()" href="" class="btn btn-danger"><span class="bi bi-trash"></span></a>
                                    <a href="" class="btn btn-info"><span class="bi bi-info-square"></span></a></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>21-12-1996 </td>
                                <td><a onclick="shorterror()" href="" class="btn btn-danger"><span class="bi bi-trash"></span></a>
                                    <a href="" class="btn btn-info"><span class="bi bi-info-square"></span></a></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>21-12-1996 </td>
                                <td><a onclick="shorterror()" href="" class="btn btn-danger"><span class="bi bi-trash"></span></a>
                                    <a href="" class="btn btn-info"><span class="bi bi-info-square"></span></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-lg-4">
                @include('components.sidebar.sous_menu_mere')
            </div>
        </div>
    </div>
</div>
@endsection