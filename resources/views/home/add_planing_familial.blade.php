@extends('layouts.app-master')
@section('content')
<div class="row card">
    <div class="card-body p-4 rounded">
        <div class="lead">
            <h3><i class="bi bi-people"></i> Planing Familial</h3>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <form action="" class="form-group">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-floating">
                                <input type="text" name="pf_obs" class="form-control" required placeholder="Entrer une donnée">
                                <label for="">pf_obs</label>
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
                                <select required name="methode_designation" class="form-control">
                                    <option value>Selectionner Une Methode</option>
                                    <option>Selectionner Une Methode</option>
                                    <option>Selectionner Une Methode</option>
                                </select>
                                <label for="">Choisir Une Methode de Planification</label>
                            </div>
                            <div class="form-floating mt-2">
                                <select required name="sous_methode_designation" class="form-control">
                                    <option value>Selectionner Une Sous Methode</option>
                                    <option>pilule</option>
                                    <option>autre</option>
                                </select>
                                <label for="">Choisir Une Sous Methode de Planification</label>
                            </div>
                        </div>
                        <div class="form-floating mt-2">
                            <input type="text" name="ac_ren_designation" class="form-control" required placeholder="Entrer une donnée">
                            <label for="">ac_ren_designation</label>
                        </div>
                        <div class="mt-2">
                            <button class="btn btn-success col-lg-12"><span class="bi bi-save2"></span> Enregistrer</button>
                        </div>
                    </div>
                </form>
                </table>
            </div>
            <div class="col-lg-4">
                @include('components.sidebar.menu_paning_familial')
            </div>
    </div>
</div>
@endsection
