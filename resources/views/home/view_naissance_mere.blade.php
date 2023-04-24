@extends('layouts.app-master')

@section('content')
<div class="row card dnp-georgia">
    <div class="card-body p-4 rounded">
        <div class="lead">
            <h3><i class="bi bi-people">Liste de Patients à la Maternité</i></h3>
        </div>
        <div class="row mt-2">
            <div class="container">
                <table class="table">
                    <thead>
                        <tr>
                            <th>N°</th>
                            <th>Nom Complet</th>
                            <th>Contact</th>
                            <th>Mail</th>
                            <th>Adresse</th>
                            <th>Date D'affectation</th>
                            <th>Voir Plus & Obs.</th>
                        </tr>
                    </thead>
                    <tbody>
                        <i class="dn-hidden">{{$compteur=1}}</i>
                        @forelse ($objet_maternite as $item_objet_maternite)
                        <tr>
                            <td>{{$compteur}}</td>
                            <td>{{$item_objet_maternite->getmaternite->nom}} {{$item_objet_maternite->getmaternite->postnom}} {{$item_objet_maternite->getmaternite->prenom}}</td>
                            <td>{{$item_objet_maternite->getmaternite->phone}}</td>
                            <td><a href="mailto:{{$item_objet_maternite->getmaternite->email}}">mail</a></td>
                            <td>{{$item_objet_maternite->getmaternite->adresse}}</td>
                            <td>le {{$item_objet_maternite->created_at->format("d-m-y à h:i:s")}}</td>
                            <td><button onclick="shorterror()" class="btn btn-danger btn-sm"><span class="bi bi-trash3"></span></button>
                                <a href="{{ route("view_acc",$item_objet_maternite->id)}}" class="btn btn-info btn-sm"><span class="bi bi-info-square"></span></a></td>
                        </tr>
                        <i class="dn-hidden">{{$compteur+=1}}</i>
                        @empty
                            
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
