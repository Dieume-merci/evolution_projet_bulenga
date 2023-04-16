@extends('layouts.app-master')

@section('content')
<div class="row card">
    <div class="card-body p-4 rounded">
        <div class="lead">
            <h3><i class="bi bi-people"> Les Patients A la Consultation Pres Natale</i></h3>
        </div>
        <div class="row">
            <div class="col-lg-9">
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
                            <td><a href="#" class="btn btn-danger"><span class="bi bi-trash3"></span></a></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Boss BossBossBossBossBoss</td>
                            <td>12 an(a)</td>
                            <td>25-12-2022</td>
                            <td><a href="#" class="btn btn-danger"><span class="bi bi-trash3"></span></a></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Boss</td>
                            <td>12 an(a)</td>
                            <td>25-12-2022</td>
                            <td><a href="#" class="btn btn-danger"><span class="bi bi-trash3"></span></a></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Boss</td>
                            <td>12 an(a)</td>
                            <td>25-12-2022</td>
                            <td><a href="#" class="btn btn-danger"><span class="bi bi-trash3"></span></a></td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Boss</td>
                            <td>12 an(a)</td>
                            <td>25-12-2022</td>
                            <td><button class="btn btn-danger"><span class="bi bi-trash3"></span></button></td>
                        </tr>
                    </tbody>
                </table>
            </div> 
            <div class="col-lg-3">
                @include("components.sidebar.menu_cpn")
            </div>               
        </div>
    </div>
</div>
@endsection
