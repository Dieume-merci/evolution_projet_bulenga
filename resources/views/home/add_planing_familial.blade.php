@extends('layouts.app-master')
@section('content')
<div class="row card">
    <div class="card-body p-4 rounded">
        <div class="lead">
            <h3><i class="bi bi-people"></i> Planing Familial</h3>
        </div>
        <div class="row">
            <div class="col-lg-8">
                @empty($info_methode)
            <form action="{{ route("inserer_planing_familial") }}" class="form-group">
                    @csrf
                    <div class="row">
                        <input type="hidden" value="{{$info_planing->id}}" name="id_planing">
                        <div class="col-lg-6">
                            <div class="form-floating">
                                <input type="text" name="ac_ren_designation" class="form-control" required placeholder="Entrer une donnée">
                                <label for="">ac_ren_designation</label>
                            </div>
                            <div class="form-floating mt-2">
                                <input type="text" name="pf_infecondite" class="form-control" required placeholder="Entrer une donnée">
                                <label for="">pf_infecondite</label>
                            </div>
                            <div class="form-floating mt-2">
                                <input type="text" name="pf_ist" class="form-control" required placeholder="Entrer une donnée">
                                <label for="">pf_ist</label>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-floating">
                                <input type="text" name="pf_statut_serologique_vih" class="form-control" required placeholder="Entrer une donnée">
                                <label for="">pf_statut_serologique_vih</label>
                            </div>
                            <div class="form-floating mt-2">
                                <select name="methode_ide" class="form-control" required>
                                    <option value>Selectionner Une methode</option>
                                    @foreach ($methodes as $item_methode)
                                        <option value="{{$item_methode->id}}">{{$item_methode->methode_designation}}</option>
                                    @endforeach
                                </select>
                                <label for="">Choisir Une Methode de Planification</label>
                            </div>
                            <div class="form-floating mt-2">
                                <select name="sous_methode_designation" class="form-control" required>
                                    <option value>Selectionner Une methode</option>
                                    @foreach ($sous_methode as $item_sous_methode)
                                        <option value="{{$item_sous_methode->id}}">{{$item_sous_methode->sous_methode_designation}}</option>
                                    @endforeach
                                </select>
                                <label for="">Choisir Une Sous Methode de Planification</label>
                            </div>
                        </div>
                        <div class="form-floating mt-2">
                            <input type="text" name="pf_obs" class="form-control" required placeholder="Entrer une donnée">
                            <label for="">pf_obs</label>
                        </div>
                        <div class="mt-2">
                            <button class="btn btn-success col-lg-12"><span class="bi bi-save2"></span> Enregistrer</button>
                        </div>
                    </div>
                </form>
            
            @endempty
            </div>
            <div class="col-lg-4">
                @include('components.sidebar.menu_paning_familial')
            </div>
    </div>
</div>
@endsection
