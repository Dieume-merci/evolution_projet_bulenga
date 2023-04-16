<div class="lead">
    <i class="bi bi-menu-app"> Menu </i>
</div>

<div class="content-cell">
    <label for="Planification"><span class="bi bi-puzzle"></span> Planification Familiale</label>
    <div class="dropdown d-inline">
        <button href="#" id="Planification" class="btn btn-link btn-sm dropdown-toggle" type="button" id="dorpper" data-bs-toggle="dropdown" aria-expanded="false">
            <span class="bi bi-info-square"></span></button>
            <ul class="dropdown-menu" aria-label="dorpper">
                <li><a href="{{ route("add_pf",1)}}" class="btn btn-link dropdown-item">Affecter</a></li>
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