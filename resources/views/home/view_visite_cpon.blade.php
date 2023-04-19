@extends('layouts.app-master')

@section('content')
<div class="row card">
    <div class="card-body p-4 rounded">
        <div class="lead">
            <h3><i class="bi bi-people">Les Patientes à la CPoN</i></h3>
        </div>
        <div class="row mt-2">
            <div class="container">
                <table class="table">
                    <thead>
                        <tr>
                            <th>N°</th>
                            <th>Nom</th>
                            <th>Date</th>
                            <th>Voir Plus & Obs.</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($object_cpon as $object_cpon_items)
                            <tr>
                                <td>{{$object_cpon_items->id}}</td>
                                <td>{{$object_cpon_items->nom}} {{$object_cpon_items->postnom}} {{$object_cpon_items->prenom}}</td>
                                <td>{{$object_cpon_items->created_at}}</td>
                                <td><button onclick="shorterror()" class="btn btn-danger"><span class="bi bi-trash3"></span></button>
                                    <a href="{{route("exp_cpon",$object_cpon_items->id)}}" class="btn btn-info"><span class="bi bi-info-square"></span></a></td>
                            </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="text-center"> Aucune Entrée Disponible</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection