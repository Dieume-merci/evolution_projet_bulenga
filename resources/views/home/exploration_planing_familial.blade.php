@extends('layouts.app-master')
@section('content')
<div class="row card">
    <div class="card-body p-4 rounded">
        <div class="lead">
            <h3><i class="bi bi-people"></i> Planing Familial</h3>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <table class="table">
                    <thead>
                        <tr>
                            <th>nom </th>
                            <th>Papa </th>
                        </tr>
                        <tr>
                            <th>nom </th>
                            <th>Papa </th>
                        </tr>
                        <tr>
                            <th>nom </th>
                            <th>Papa </th>
                        </tr>
                        <tr>
                            <th>nom </th>
                            <th>Papa </th>
                        </tr>
                    </thead>
                </table>
            </div>
            <div class="col-lg-4">
                @include('components.sidebar.menu_paning_familial')
            </div>
    </div>
</div>
@endsection
