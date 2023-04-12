@extends('layouts.app-master')

@section('content')
<div class="row card">
    <div class="card-body p-4 rounded">
        <div class="logo-title">
            <i class="logo-title"><h3>Liste de deces</h3></i>
        </div>
        <div class="row mt-5">
            <div class="container">
                <div class="dn-center">
                    {{-- <button class="btn btn-info" data-bs-toggle="modal" data-bs-keyboard="false" data-bs-target="#add_information"><span class="bi bi-plus"></span> Add</button> --}}
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>N°</th>
                            <th>Nom Complet</th>
                            <th>Age</th>
                            <th>Date </th>
                            <th>Voir Plus & Obs.</th>
                            <th>Voir Plus & Obs.</th>
                            <th>Voir Plus & Obs.</th>
                            <th>Voir Plus & Obs.</th>
                            <th>Voir Plus & Obs.</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Boss</td>
                            <td>12 an(a)</td>
                            <td>12 an(a)</td>
                            <td>12 an(a)</td>
                            <td>12 an(a)</td>
                            <td>12 an(a)</td>
                            <td>25-12-2022</td>
                            <td><button class="btn btn-danger btn-sm"><span class="bi bi-trash3"></span></button>
                                <button class="btn btn-warning btn-sm"><span class="bi bi-book"></span></button>
                                <div class="dropup d-inline">
                                    <button href="#" class="btn btn-info btn-sm dropdown-toggle" type="button" id="dorpper" data-bs-toggle="dropdown" aria-expanded="false">
                                        <span class="bi bi-info-square"></span></button>
                                        <ul class="dropdown-menu" aria-label="dorpper">
                                        <li><a href="{{ route("view_acc",1)}}" class="btn btn-link dropdown-item">1. premiere naissance</a></li>
                                            <li><a href="{{ route("view_acc",2)}}" class="btn btn-link dropdown-item">2. deuxiemen</a></li>
                                            <li><a href="{{ route("view_acc",3)}}" class="btn btn-link dropdown-item">3. 3ieme</a></li>
                                            <li><hr class="dropdown-divider"></li>
                                            <li><button class="dropdown-item btn btn-primary" data-bs-toggle="modal" data-bs-keyboard="false" data-bs-target="#add_information">
                                                <span class="bi bi-plus"></span>Ajouter</button></li>
                                        </ul>
                                    </div></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Boss BossBossBossBossBoss</td>
                            <td>12 an(a)</td>
                            <td>12 an(a)</td>
                            <td>12 an(a)</td>
                            <td>12 an(a)</td>
                            <td>12 an(a)</td>
                            <td>25-12-2022</td>
                            <td><button class="btn btn-danger btn-sm"><span class="bi bi-trash3"></span></button>
                                <button class="btn btn-warning btn-sm"><span class="bi bi-book"></span></button>
                                <div class="dropup d-inline">
                                    <button href="#" class="btn btn-info btn-sm dropdown-toggle" type="button" id="dorpper2" data-bs-toggle="dropdown" aria-expanded="false">
                                        <span class="bi bi-info-square"></span></button>
                                        <ul class="dropdown-menu" aria-label="dorpper2">
                                        <li><a href="{{ route("view_acc",1)}}" class="btn btn-link dropdown-item">1. premiere naissance</a></li>
                                            <li><a href="{{ route("view_acc",2)}}" class="btn btn-link dropdown-item">2. deuxiemen</a></li>
                                            <li><a href="{{ route("view_acc",3)}}" class="btn btn-link dropdown-item">3. 3ieme</a></li>
                                            <li><hr class="dropdown-divider"></li>
                                            <li><button class="dropdown-item btn btn-primary" data-bs-toggle="modal" data-bs-keyboard="false" data-bs-target="#add_information">
                                                <span class="bi bi-plus"></span>Ajouter</button></li>
                                        </ul>
                                    </div></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Boss</td>
                            <td>12 an(a)</td>
                            <td>12 an(a)</td>
                            <td>12 an(a)</td>
                            <td>12 an(a)</td>
                            <td>12 an(a)</td>
                            <td>25-12-2022</td>
                            <td><button class="btn btn-danger btn-sm"><span class="bi bi-trash3"></span></button>
                                <button class="btn btn-warning btn-sm"><span class="bi bi-book"></span></button>
                                <div class="dropup d-inline">
                                    <button href="#" class="btn btn-info btn-sm dropdown-toggle" type="button" id="dorpper3" data-bs-toggle="dropdown" aria-expanded="false">
                                        <span class="bi bi-info-square"></span></button>
                                        <ul class="dropdown-menu" aria-label="dorpper3">
                                        <li><a href="{{ route("view_acc",1)}}" class="btn btn-link dropdown-item">1. premiere naissance</a></li>
                                            <li><a href="{{ route("view_acc",2)}}" class="btn btn-link dropdown-item">2. deuxiemen</a></li>
                                            <li><a href="{{ route("view_acc",3)}}" class="btn btn-link dropdown-item">3. 3ieme</a></li>
                                            <li><hr class="dropdown-divider"></li>
                                            <li><button class="dropdown-item btn btn-primary" data-bs-toggle="modal" data-bs-keyboard="false" data-bs-target="#add_information">
                                                <span class="bi bi-plus"></span>Ajouter</button></li>
                                        </ul>
                                    </div></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Boss</td>
                            <td>12 an(a)</td>
                            <td>12 an(a)</td>
                            <td>12 an(a)</td>
                            <td>12 an(a)</td>
                            <td>12 an(a)</td>
                            <td>25-12-2022</td>
                            <td><button class="btn btn-danger btn-sm"><span class="bi bi-trash3"></span></button>
                                <button class="btn btn-warning btn-sm"><span class="bi bi-book"></span></button>
                                <div class="dropup d-inline">
                                    <button href="#" class="btn btn-info btn-sm dropdown-toggle" type="button" id="dorpper4" data-bs-toggle="dropdown" aria-expanded="false">
                                        <span class="bi bi-info-square"></span></button>
                                        <ul class="dropdown-menu" aria-label="dorpper4">
                                        <li><a href="{{ route("view_acc",1)}}" class="btn btn-link dropdown-item">1. premiere naissance</a></li>
                                            <li><a href="{{ route("view_acc",2)}}" class="btn btn-link dropdown-item">2. deuxiemen</a></li>
                                            <li><a href="{{ route("view_acc",3)}}" class="btn btn-link dropdown-item">3. 3ieme</a></li>
                                            <li><hr class="dropdown-divider"></li>
                                            <li><button class="dropdown-item btn btn-primary" data-bs-toggle="modal" data-bs-keyboard="false" data-bs-target="#add_information">
                                                <span class="bi bi-plus"></span>Ajouter</button></li>
                                        </ul>
                                    </div></td>
                        </tr>
                            <td>5</td>
                            <td>Boss</td>
                            <td>12 an(a)</td>
                            <td>12 an(a)</td>
                            <td>12 an(a)</td>
                            <td>12 an(a)</td>
                            <td>12 an(a)</td>
                            <td>25-12-2022</td>
                            <td><button class="btn btn-danger btn-sm"><span class="bi bi-trash3"></span></button>
                                <button class="btn btn-warning btn-sm"><span class="bi bi-book"></span></button>
                                <div class="dropup d-inline">
                                    <button href="#" class="btn btn-info btn-sm dropdown-toggle" type="button" id="dorpper5" data-bs-toggle="dropdown" aria-expanded="false">
                                        <span class="bi bi-info-square"></span></button>
                                        <ul class="dropdown-menu" aria-label="dorpper5">
                                        <li><a href="{{ route("view_acc",1)}}" class="btn btn-link dropdown-item">1. premiere naissance</a></li>
                                            <li><a href="{{ route("view_acc",2)}}" class="btn btn-link dropdown-item">2. deuxiemen</a></li>
                                            <li><a href="{{ route("view_acc",3)}}" class="btn btn-link dropdown-item">3. 3ieme</a></li>
                                            <li><hr class="dropdown-divider"></li>
                                            <li><button class="dropdown-item btn btn-primary" data-bs-toggle="modal"  data-bs-keyboard="false" data-bs-target="#add_information">
                                                <span class="bi bi-plus"></span>Ajouter</button></li>
                                        </ul>
                                    </div></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" data-bs-backdrop="static" id="add_information" aria-hidden="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header logo-title">
                <i class="logo-title"><h3 class="bi bi-people">  Nouvel Accouchement</h3></i>
            </div>
            <div class="modal-body text-center">
                <form action="" class="form-group">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-floating">
                                <input type="text" name="" class="form-control" required value="Centre Bulenga/bloc3" placeholder="Entrer une information">
                                <label for="">Lieu d'Acouchement</label>
                            </div>
                            <div class="form-floating">
                                <input type="text" name="" class="form-control" required value="Centre Bulenga/bloc3" placeholder="Entrer une information">
                                <label for="">Lieu d'Acouchement</label>
                            </div>
                            <div class="form-floating">
                                <input type="text" name="" class="form-control" required value="Centre Bulenga/bloc3" placeholder="Entrer une information">
                                <label for="">Lieu d'Acouchement</label>
                            </div>
                            <div class="form-floating">
                                <input type="text" name="" class="form-control" required value="Centre Bulenga/bloc3" placeholder="Entrer une information">
                                <label for="">Lieu d'Acouchement</label>
                            </div>
                            <div class="form-floating">
                                <input type="text" name="" class="form-control" required value="Centre Bulenga/bloc3" placeholder="Entrer une information">
                                <label for="">Lieu d'Acouchement</label>
                            </div>
                            <div class="form-floating">
                                <input type="text" name="" class="form-control" required value="Centre Bulenga/bloc3" placeholder="Entrer une information">
                                <label for="">Lieu d'Acouchement</label>
                            </div>
                            <div class="form-floating">
                                <input type="text" name="" class="form-control" required value="Centre Bulenga/bloc3" placeholder="Entrer une information">
                                <label for="">Lieu d'Acouchement</label>
                            </div>
                            <div class="form-floating">
                                <input type="text" name="" class="form-control" required value="Centre Bulenga/bloc3" placeholder="Entrer une information">
                                <label for="">Lieu d'Acouchement</label>
                            </div>
                            <div class="form-floating">
                                <input type="text" name="" class="form-control" required value="Centre Bulenga/bloc3" placeholder="Entrer une information">
                                <label for="">Lieu d'Acouchement</label>
                            </div>
                            <div class="form-floating">
                                <input type="text" name="" class="form-control" required value="Centre Bulenga/bloc3" placeholder="Entrer une information">
                                <label for="">Lieu d'Acouchement</label>
                            </div>
                            <div class="form-floating">
                                <input type="text" name="" class="form-control" required value="Centre Bulenga/bloc3" placeholder="Entrer une information">
                                <label for="">Lieu d'Acouchement</label>
                            </div>
                        </div>
                        
                        <div class="col-lg-6">
                            <div class="form-floating">
                                <input type="text" name="" class="form-control" required value="Centre Bulenga/bloc3" placeholder="Entrer une information">
                                <label for="">Lieu d'Acouchement</label>
                            </div>
                            <div class="form-floating">
                                <input type="text" name="" class="form-control" required value="Centre Bulenga/bloc3" placeholder="Entrer une information">
                                <label for="">Lieu d'Acouchement</label>
                            </div>
                            <div class="form-floating">
                                <input type="text" name="" class="form-control" required value="Centre Bulenga/bloc3" placeholder="Entrer une information">
                                <label for="">Lieu d'Acouchement</label>
                            </div>
                            <div class="form-floating">
                                <input type="text" name="" class="form-control" required value="Centre Bulenga/bloc3" placeholder="Entrer une information">
                                <label for="">Lieu d'Acouchement</label>
                            </div>
                            <div class="form-floating">
                                <input type="text" name="" class="form-control" required value="Centre Bulenga/bloc3" placeholder="Entrer une information">
                                <label for="">Lieu d'Acouchement</label>
                            </div>
                            <div class="form-floating">
                                <input type="text" name="" class="form-control" required value="Centre Bulenga/bloc3" placeholder="Entrer une information">
                                <label for="">Lieu d'Acouchement</label>
                            </div>
                            <div class="form-floating">
                                <input type="text" name="" class="form-control" required value="Centre Bulenga/bloc3" placeholder="Entrer une information">
                                <label for="">Lieu d'Acouchement</label>
                            </div>
                            <div class="form-floating">
                                <input type="text" name="" class="form-control" required value="Centre Bulenga/bloc3" placeholder="Entrer une information">
                                <label for="">Lieu d'Acouchement</label>
                            </div>
                            <div class="form-floating">
                                <input type="text" name="" class="form-control" required value="Centre Bulenga/bloc3" placeholder="Entrer une information">
                                <label for="">Lieu d'Acouchement</label>
                            </div>
                            <div class="form-floating">
                                <input type="text" name="" class="form-control" required value="Centre Bulenga/bloc3" placeholder="Entrer une information">
                                <label for="">Lieu d'Acouchement</label>
                            </div>
                            <div class="form-floating">
                                <input type="text" name="" class="form-control" required value="Centre Bulenga/bloc3" placeholder="Entrer une information">
                                <label for="">Lieu d'Acouchement</label>
                            </div>
                        </div>
                        
                        <div class="form-floating mt-2">
                            <input type="datetime-local" name="" class="form-control" placeholder=" Entrer une information">
                            <label for="">Date d'Accouchement</label>
                        </div>
                        <div class="mt-3 logo-title">
                            <button class="btn btn-success">
                                <span class="bi bi-save"> Enregistrer</span>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-danger" data-bs-dismiss="modal"><span class="bi bi-exit"></span> Fermer</button>
            </div>
        </div>
    </div>
</div>
@endsection
