@extends('layouts.app-master')

@section('content')
<div class="row card">
    <div class="card-body p-4 rounded">
        <div class="logo-title">
            <i class="logo-title"><h3>Liste de deces</h3></i>
        </div>
        <div class="row mt-5">
            <div class="container">
                <table class="table table-bordered">
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
                            <td><a href="#" class="btn btn-danger"><span class="bi bi-trash3"></span></a>
                                <a href="#" class="btn btn-warning"><span class="bi bi-book"></span></a>
                                <a href="#" class="btn btn-info"><span class="bi bi-info-square"></span></a></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Boss BossBossBossBossBoss</td>
                            <td>12 an(a)</td>
                            <td>25-12-2022</td>
                            <td><a href="#" class="btn btn-danger"><span class="bi bi-trash3"></span></a>
                                <a href="#" class="btn btn-warning"><span class="bi bi-book"></span></a>
                                <a href="#" class="btn btn-info"><span class="bi bi-info-square"></span></a></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Boss</td>
                            <td>12 an(a)</td>
                            <td>25-12-2022</td>
                            <td><a href="#" class="btn btn-danger"><span class="bi bi-trash3"></span></a>
                                <a href="#" class="btn btn-warning"><span class="bi bi-book"></span></a>
                                <a href="#" class="btn btn-info"><span class="bi bi-info-square"></span></a></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Boss</td>
                            <td>12 an(a)</td>
                            <td>25-12-2022</td>
                            <td><a href="#" class="btn btn-danger"><span class="bi bi-trash3"></span></a>
                                <a href="#" class="btn btn-warning"><span class="bi bi-book"></span></a>
                                <a href="#" class="btn btn-info"><span class="bi bi-info-square"></span></a></td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Boss</td>
                            <td>12 an(a)</td>
                            <td>25-12-2022</td>
                            <td><a href="#" class="btn btn-danger"><span class="bi bi-trash3"></span></a>
                                <a href="#" class="btn btn-warning"><span class="bi bi-book"></span></a>
                                <a href="#" class="btn btn-info"><span class="bi bi-info-square"></span></a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
