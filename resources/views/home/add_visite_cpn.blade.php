@extends('layouts.app-master')

@section('content')
<div class="row card">
    <div class="card-body p-4 rounded">
        <div class="logo-title">
            <h3><i class="bi bi-people"></i> Ajouter Un items</h3>
                    <button class="close" data-bs-dismiss="modal">X</button>
        </div>
        <div class="row mt-5">
            <form action="" class="form-group">
                <div class="row">
                    <div class="col-lg-6">
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
                    </div>
                    <div class="col-lg-6">
                        <div class="form-floating">
                            <input type="text" name="" class="form-control" placeholder="Entrer une information">
                            <label for="">champ 7</label>
                        </div>
                        <div class="form-floating mt-2">
                            <input type="text" name="" class="form-control" placeholder="Entrer une information">
                            <label for="">champ 8</label>
                        </div>
                        <div class="form-floating mt-2">
                            <input type="text" name="" class="form-control" placeholder="Entrer une information">
                            <label for="">champ 9</label>
                        </div>
                        <div class="form-floating mt-2">
                            <input type="text" name="" class="form-control" placeholder="Entrer une information">
                            <label for="">champ 10</label>
                        </div>
                        <div class="form-floating mt-2">
                            <input type="text" name="" class="form-control" placeholder="Entrer une information">
                            <label for="">champ 11</label>
                        </div>
                        <div class="form-floating mt-2">
                            <input type="text" name="" class="form-control" placeholder="Entrer une information">
                            <label for="">champ 12</label>
                        </div>
                    </div>
                    <div class="mt-3 logo-title">
                        <button class="btn btn-success btn-lg">
                            <span class="bi bi-send"> Enregistrer</span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
