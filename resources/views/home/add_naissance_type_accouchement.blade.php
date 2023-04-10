@extends('layouts.app-master')

@section('content')
<div class="row card">
    <div class="card-body p-4 rounded">
        <div class="logo-title">
            <h3><i class="bi bi-people"></i> Ajouter un type d'accouchement </h3>
        </div>
        <div class="row mt-5">
            <form action="">
                <div class="input-group">
                    <div class="form-floating">
                        <input type="text" name="" required class="form-control input-group-addon" placeholder="Entrer une information">
                        <label for="">Designation</label>
                    </div>
                    <button class="btn btn-success btn-lg">
                        <span class="bi bi-save"> Enregistrer</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
