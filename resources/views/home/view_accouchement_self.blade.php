@extends('layouts.app-master')

@section('content')
<div class="row card">
    <div class="card-body p-4 rounded">
        <div class="lead">
            <h3><i class="bi bi-people"></i> Accouchement</h3>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <table class="table table-condensed">
                    <thead>
                        <tr>
                            <th>N°</th>
                            <th>N°</th>
                            <th>N°</th>
                            <th>N°</th>
                            <th>N°</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>items</td>
                            <td>items</td>
                            <td>items</td>
                            <td>items</td>
                            <td>items</td>
                        </tr>
                        <tr>
                            <td>items</td>
                            <td>items</td>
                            <td>items</td>
                            <td>items</td>
                            <td>items</td>
                        </tr>
                        <tr>
                            <td>items</td>
                            <td>items</td>
                            <td>items</td>
                            <td>items</td>
                            <td>items</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-lg-4">
                @include('components.sidebar.sous_menu_mere')
            </div>
    </div>
</div>
@endsection
