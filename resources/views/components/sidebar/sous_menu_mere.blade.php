<div class="lead">
    <i class="bi bi-menu-app"> Menu </i>
</div>
                <div class="content-cell">
                    <label for="consulpn"><span class="bi bi-bookmark-heart"></span> Consultation Pres-natale</label>
                    <div class="dropdown d-inline">
                        <button href="#" id="consulpn" class="btn btn-link btn-sm dropdown-toggle" type="button" id="dorpper0" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="bi bi-info-square"></span></button>
                            <ul class="dropdown-menu" aria-label="dorpper0">
                                <li><a href="{{ route('view_acc_cpn',1)}}" class="btn btn-link dropdown-item">Voir</a></li>
                            </ul>
                        </div>
                </div>
                @empty($objet_maternite->maternite_grossesse_a_terme)
                <div class="content-cell">
                    <label for="maternite"><span class="bi bi-heptagon-fill"></span> Finir Avec la maternité</label>
                    <div class="dropdown d-inline">
                        <button href="#" id="maternite" class="btn btn-link btn-sm dropdown-toggle" type="button" id="dorpper1" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="bi bi-info-square"></span></button>
                            <ul class="dropdown-menu" aria-label="dorpper1">
                            <li><button href="button" class="btn btn-link dropdown-item" data-bs-target="#add_information_maternite" data-bs-toggle="modal">Finalyser</button></li>
                            </ul>
                        </div>
                </div>
                @endempty
                <div class="content-cell">
                    <label for="accouchement"><span class="bi bi-plus-circle"></span> Y associer Un accouchement</label>
                    <div class="dropdown d-inline">
                        <button href="#" id="accouchement" class="btn btn-link btn-sm dropdown-toggle" type="button" id="dorpper1" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="bi bi-info-square"></span></button>
                            <ul class="dropdown-menu" aria-label="dorpper1">
                            <li><button href="button" class="btn btn-link dropdown-item"  data-bs-target="#add_information" data-bs-toggle="modal">Ajouter</button></li>
                            </ul>
                        </div>
                </div>
                <fieldset>
                    <legend>
                        <small>Acc. Associé au Patient <hr></small> 
                    </legend>
                    <p class="dn-hidden">{{$compteur=1}}</p>
                    @empty(!$objet_mere)
                        @foreach ($objet_mere->get_mere_from_accouchement as $item_objet_mere)
                            <div class="mt-2">
                            <a href="{{$item_objet_mere->id}}"><span class="bi bi-eye"></span> {{$compteur}}<sup>e</sup> Accouchement <span class="dn-black">du {{$item_objet_mere->accouchement_date_accouchement}}</span></a>
                            </div>
                            <p class="dn-hidden">{{$compteur+=1}}</p>
                        @endforeach
                    @endempty
                </fieldset>