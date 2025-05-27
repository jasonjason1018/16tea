<ul class="navbar-nav  sidebar sidebar-light accordion" id="accordionSidebar" style="background:#fff5c9;">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center"
       href="/16chaAdmin/member">
        <div class="sidebar-brand-text mx-3">16茶</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->

    <li class="nav-item {{ request()->is('16chaAdmin/member*') ? 'active' : '' }}">
        <a class="nav-link" href="/16chaAdmin/member">
            <i class="fas fa-circle"></i>
            <span>參與人員名單</span>
        </a>
    </li>
    <li class="nav-item {{ request()->is('16chaAdmin/winner*') ? 'active' : '' }}">
        <a class="nav-link" href="/16chaAdmin/winner">
            <i class="fas fa-circle"></i>
            <span>中奬人員名單</span>
        </a>
    </li>
    <li class="nav-item {{ request()->is('16chaAdmin/form*') ? 'active' : '' }}">
        <a class="nav-link" href="/16chaAdmin/form">
            <i class="fas fa-circle"></i>
            <span>抽獎名單</span>
        </a>
    </li>
    <li class="nav-item ">
        <a class="nav-link" href="javascript:void(0)">
            <i class="fas fa-circle"></i>
            <span>數據統計</span>
        </a>
    </li>
</ul>