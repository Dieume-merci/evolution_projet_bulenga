<aside id="sidebar" class="sidebar">
  <ul class="sidebar-nav" id="sidebar-nav">
    {{-- menu 1 --}}
    <li class="nav-item">
      <a class="nav-link" href="">
        <i class="bi bi-speedometer2"></i>
        <span>Menu 1</span>
      </a>
    </li>
    {{-- component pour menu avec sous menu --}}
    <x-sidebar.menu1 />
    {{-- titre regrouper le menu --}}
    <li class="nav-heading">titre</li>
    {{-- component pour menus --}}
    <x-sidebar.menu2 />
</aside>
