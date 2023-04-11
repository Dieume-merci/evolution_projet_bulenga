@extends('layouts.app-master')

@section('content')
<div class="row card">
    <div class="card-body p-4 rounded">
        <div class="lead">
            <h3><i class="bi bi-people"></i> Description sur l'accouchement</h3>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <div class="text-center mt-2">
                    <h3><i>Selectionner Un Element Dans le Menu </i></h3>
                </div>
            </div>
            <div class="col-lg-4">
                @include('components.sidebar.sous_menu_mere')
            </div>
        </div>
    </div>
</div>
@endsection