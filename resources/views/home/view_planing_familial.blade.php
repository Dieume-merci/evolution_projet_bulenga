@extends('layouts.app-master')

@section('content')
<div class="row card dnp-georgia">
    <div class="card-body p-4 rounded">
        <div class="lead">
            <h3><i class="bi bi-people"> Personne au planing Familial</i></h3>
        </div>
        <div class="row mt-2">
            <div class="container">
                <table class="table ">
                    <thead>
                        <tr>
                            <th>N°</th>
                            <th>Nom Du patient</th>
                            <th>Genre</th>
                            <th>Date d'arrivée</th>
                            <th>Voir Plus</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($object_patient as $item_patient)
                            <tr>
                                <td>{{$item_patient->id}}</td>
                                <td>{{$item_patient->nom}} {{$item_patient->postnom}} {{$item_patient->prenom}}</td>
                                <td>{{$item_patient->sexe}}</td>
                                <td>{{$item_patient->created_at}}</td>
                                <td><a onclick="shorterror()" href="#" class="btn btn-danger"><span class="bi bi-trash3"></span></a>
                                    <a href="{{route('expl_pf',$item_patient->id)}}" class="btn btn-info"><span class="bi bi-info-square"></span></a></td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center">Aucun Element disponible</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
 </div>
@endsection
