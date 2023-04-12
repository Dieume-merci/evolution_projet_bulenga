@extends('layouts.app-master')

@section('content')
<div class="row card">
    <div class="card-body p-4 rounded">
        <div class="lead">
            <h3><i class="bi bi-people"></i> Ajouter un Nouvel Acouchement</h3>
        </div>
        <div class="row mt-5">
            <div class="col-lg-8">
                <form action="" class="form-group">
                        <div class="form-floating">
                            <input type="text" name="" class="form-control" placeholder="Entrer une information">
                            <label for="">champ 1</label>
                        </div>
                        <div class="form-floating mt-2">
                            <input type="text" name="" class="form-control" placeholder="Entrer une information">
                            <label for="">champ 2</label>
                        </div>
                        <div class="form-floating mt-2">
                            <input type="text" name="" class="form-control" placeholder="Entrer une information">
                            <label for="">champ 3</label>
                        </div>
                        <div class="form-floating mt-2">
                            <input type="text" name="" class="form-control" placeholder="Entrer une information">
                            <label for="">champ 4</label>
                        </div>
                        <div class="form-floating mt-2">
                            <input type="text" name="" class="form-control" placeholder="Entrer une information">
                            <label for="">champ 5</label>
                        </div>
                        <div class="form-floating mt-2">
                            <input type="text" name="" class="form-control" placeholder="Entrer une information">
                            <label for="">champ 6</label>
                        </div>
                    <div class="mt-3 logo-title">
                        <button class="btn btn-success btn-lg">
                            <span class="bi bi-send"> Enregistrer</span>
                        </button>
                    </div>
                </form>
            </div>
            <div class="col-lg-4">
                @include('components.sidebar.sous_menu_mere')
            </div>
        </div>
    </div>
</div>
@endsection
