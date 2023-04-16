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
                            <th>Age</th>
                            <th>Date</th>
                            <th>Voir Plus & Obs.</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Boss</td>
                            <td>12 an(a)</td>
                            <td>25-12-2022</td>
                            <td><a onclick="shorterror()" href="#" class="btn btn-danger"><span class="bi bi-trash3"></span></a>
                                <a href="{{route("exp_cpon",1)}}" class="btn btn-info"><span class="bi bi-info-square"></span></a></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Boss BossBossBossBossBoss</td>
                            <td>12 an(a)</td>
                            <td>25-12-2022</td>
                            <td><a onclick="shorterror()" href="#" class="btn btn-danger"><span class="bi bi-trash3"></span></a>
                                <a href="{{route("exp_cpon",1)}}" class="btn btn-info"><span class="bi bi-info-square"></span></a></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Boss</td>
                            <td>12 an(a)</td>
                            <td>25-12-2022</td>
                            <td><a onclick="shorterror()" href="#" class="btn btn-danger"><span class="bi bi-trash3"></span></a>
                                <a href="{{route("exp_cpon",1)}}" class="btn btn-info"><span class="bi bi-info-square"></span></a></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Boss</td>
                            <td>12 an(a)</td>
                            <td>25-12-2022</td>
                            <td><a onclick="shorterror()" href="" class="btn btn-danger"><span class="bi bi-trash3"></span></a>
                                <a href="{{route("exp_cpon",1)}}" class="btn btn-info"><span class="bi bi-info-square"></span></a></td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Boss</td>
                            <td>12 an(a)</td>
                            <td>25-12-2022</td>
                            <td><button onclick="shorterror()" class="btn btn-danger"><span class="bi bi-trash3"></span></button>
                                <a href="{{route("exp_cpon",1)}}" class="btn btn-info"><span class="bi bi-info-square"></span></a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection