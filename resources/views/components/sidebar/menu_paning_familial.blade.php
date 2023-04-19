<div class="lead">
    <i class="bi bi-menu-app"> Menu </i>
</div>

<div class="content-cell">
    <label for="Planification"><span class="bi bi-puzzle"></span> Planification Familiale</label>
    <div class="dropdown d-inline">
        <button href="#" id="Planification" class="btn btn-link btn-sm dropdown-toggle" type="button" id="dorpper" data-bs-toggle="dropdown" aria-expanded="false">
            <span class="bi bi-info-square"></span></button>
            <ul class="dropdown-menu" aria-label="dorpper">
                <li><a href="{{ route("add_pf",$info_planing->id)}}" class="btn btn-link dropdown-item">Ajouter</a></li>
            </ul>
        </div>
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
    <div class="content-cell">
        <label for="Maternite"><span class="bi bi-puzzle"></span> Maternité</label>
        <div class="dropdown d-inline">
            <button href="#" id="Maternite" class="btn btn-link btn-sm dropdown-toggle" type="button" id="dorpper" data-bs-toggle="dropdown" aria-expanded="false">
                <span class="bi bi-info-square"></span></button>
                <ul class="dropdown-menu" aria-label="dorpper">
                    <li><a href="{{ route("view_mere")}}" class="btn btn-link dropdown-item">Affecter</a></li>
                </ul>
            </div>
    </div>
    <div class="content-cell">
        <label for="consultation_poste_natale"><span class="bi bi-heptagon-fill"></span> Consultation Poste Natale</label>
        <div class="dropdown d-inline">
            <button href="#" id="consultation_poste_natale" class="btn btn-link btn-sm dropdown-toggle" type="button" id="dorpper1" data-bs-toggle="dropdown" aria-expanded="false">
                <span class="bi bi-info-square"></span></button>
                <ul class="dropdown-menu" aria-label="dorpper1">
                <li><button href="button" class="btn btn-link dropdown-item">Ajouter</button></li>
                    <li><button href="button" class="btn btn-link dropdown-item">Voir</button></li>
                </ul>
            </div>
    </div>