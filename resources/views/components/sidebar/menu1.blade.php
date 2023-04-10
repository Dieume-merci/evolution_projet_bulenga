<li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#menu1" data-bs-toggle="collapse" href="#">
        <i class="bi bi-basket2-fill"></i><span>Gestion de Visites</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="menu1" class="nav-content collapse" data-bs-parent="#sidebar-nav1">
        <li><a class="nav-link collapsed" data-bs-target="#sous_menu1_menu1" data-bs-toggle="collapse" href="#">
            <i class="bi bi-circle"></i><span>CPN</span></a></li>
            <ul id="sous_menu1_menu1" class="collapse" data-bs-parent="#sidebar-nav1">
                <li><a href="{{ route('add_cpn')}}"><i class="bi bi-bag-plus"></i><span>add</span></a></li>
                <li><a href="{{ route('view_cpn')}}"><i class="bi bi-eye"></i><span>View</span></a></li>
            </ul>
    </ul>
    <ul id="menu1" class="nav-content collapse" data-bs-parent="#sidebar-nav2">
        <li><a class="nav-link collapsed" data-bs-target="#sous_menu2_menu1" data-bs-toggle="collapse" href="#">
            <i class="bi bi-circle"></i><span>CPON</span></a></li>
            <ul id="sous_menu2_menu1" class="collapse" data-bs-parent="#sidebar-nav2">
                <li><a href="{{ route('add_cpon')}}"><i class="bi bi-bag-plus"></i><span>add</span></a></li>
                <li><a href="{{ route('view_cpon')}}"><i class="bi bi-eye"></i><span>View</span></a></li>
            </ul>
    </ul>
    <ul id="menu1" class="nav-content collapse" data-bs-parent="#sidebar-nav3">
        <li><a class="nav-link collapsed" data-bs-target="#sous_menu3_menu1" data-bs-toggle="collapse" href="#">
            <i class="bi bi-circle"></i><span>CPS</span></a></li>
            <ul id="sous_menu3_menu1" class="collapse" data-bs-parent="#sidebar-nav3">
                <li><a href=""><i class="bi bi-bag-plus"></i><span>add</span></a></li>
                <li><a href=""><i class="bi bi-eye"></i><span>View</span></a></li>
            </ul>
    </ul>
    <a class="nav-link collapsed" data-bs-target="#menu2" data-bs-toggle="collapse" href="#">
        <i class="bi bi-signal"></i><span>Gestion Naissancce</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="menu2" class="nav-content collapse" data-bs-parent="#sidebar-nav4">
        <li><a class="nav-link collapsed" data-bs-target="#sous_menu1_menu2" data-bs-toggle="collapse" href="#">
            <i class="bi bi-circle"></i><span>Accouchement</span></a></li>
            <ul id="sous_menu1_menu2" class="collapse" data-bs-parent="#sidebar-nav4">
                <li><a href="{{ route('add_accouchement')}}"><i class="bi bi-bag-plus"></i><span>add</span></a></li>
                <li><a href="{{ route('view_accouchement')}}"><i class="bi bi-eye"></i><span>View</span></a></li>
            </ul>
    </ul>
    <ul id="menu2" class="nav-content collapse" data-bs-parent="#sidebar-nav5">
        <li><a class="nav-link collapsed" data-bs-target="#sous_menu2_menu2" data-bs-toggle="collapse" href="#">
            <i class="bi bi-circle"></i><span>Deces</span></a></li>
            <ul id="sous_menu2_menu2" class="collapse" data-bs-parent="#sidebar-nav5">
                <li><a href="{{ route('add_deces')}}"><i class="bi bi-plus"></i><span>add</span></a></li>
                <li><a href="{{ route('view_deces')}}"><i class="bi bi-eye"></i><span>View</span></a></li>
            </ul>
    </ul>
    <ul id="menu2" class="nav-content collapse" data-bs-parent="#sidebar-nav5">
        <li><a class="nav-link collapsed" data-bs-target="#sous_menu3_menu2" data-bs-toggle="collapse" href="#">
            <i class="bi bi-circle"></i><span>type Accouchement</span></a></li>
            <ul id="sous_menu3_menu2" class="collapse" data-bs-parent="#sidebar-nav5">
                <li><a href="{{ route('add_type_acouchement')}}"><i class="bi bi-plus"></i><span>add</span></a></li>
                <li><a href="{{ route('view_type_acouchement')}}"><i class="bi bi-eye"></i><span>View</span></a></li>
            </ul>
    </ul>
    <a class="nav-link collapsed" data-bs-target="#menu3" data-bs-toggle="collapse" href="#">
        <i class="bi bi-envelope-heart"></i><span>Gestion VIH</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="menu3" class="nav-content collapse" data-bs-parent="#sidebar-nav4">
        <li><a class="nav-link collapsed" data-bs-target="#sous_menu1_menu3" data-bs-toggle="collapse" href="#">
            <i class="bi bi-circle"></i><span>Depistage</span></a></li>
            <ul id="sous_menu1_menu3" class="collapse" data-bs-parent="#sidebar-nav4">
                <li><a href="{{ route('add_depistage')}}"><i class="bi bi-bag-plus"></i><span>add</span></a></li>
                <li><a href="{{ route('view_depistage')}}"><i class="bi bi-eye"></i><span>View</span></a></li>
            </ul>
    </ul>
    <ul id="menu3" class="nav-content collapse" data-bs-parent="#sidebar-nav5">
        <li><a class="nav-link collapsed" data-bs-target="#sous_menu2_menu3" data-bs-toggle="collapse" href="#">
            <i class="bi bi-circle"></i><span>Methode</span></a></li>
            <ul id="sous_menu2_menu3" class="collapse" data-bs-parent="#sidebar-nav5">
                <li><a href="{{ route('add_methode')}}"><i class="bi bi-plus"></i><span>add</span></a></li>
                <li><a href="{{ route('view_methode')}}"><i class="bi bi-eye"></i><span>View</span></a></li>
            </ul>
    </ul>
    <ul id="menu3" class="nav-content collapse" data-bs-parent="#sidebar-nav5">
        <li><a class="nav-link collapsed" data-bs-target="#sous_menu3_menu3" data-bs-toggle="collapse" href="#">
            <i class="bi bi-circle"></i><span>Sous Methode</span></a></li>
            <ul id="sous_menu3_menu3" class="collapse" data-bs-parent="#sidebar-nav5">
                <li><a href="{{ route('add_sous_methode')}}"><i class="bi bi-plus"></i><span>add</span></a></li>
                <li><a href="{{ route('view_sous_methode')}}"><i class="bi bi-eye"></i><span>View</span></a></li>
            </ul>
    </ul>
</li>
