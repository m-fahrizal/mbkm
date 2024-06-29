<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    @can('admin')
        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center">
            <div class="sidebar-brand-icon">
                <img src="/img/upn.png" alt="" class="logo">
            </div>
            <div class="sidebar-brand-text mx-3">ADMIN</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="/dashboard">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="{{ route('user.index') }}">
                <i class="fas fa-fw fa-users"></i>
                <span>Users</span></a>
        </li>
        <!-- Nav Item - Pra -->
        <li class="nav-item active">
            <a class="nav-link" href="{{ route('prambkm.index') }}">
                <i class="fas fa-fw fa-clipboard-list"></i>
                <span>Data Pra MBKM</span></a>
        </li>
        <!-- Nav Item - Pasca -->
        <li class="nav-item active">
            <a class="nav-link" href="{{ route('pascambkm.index') }}">
                <i class="fas fa-fw fa-clipboard-check"></i>
                <span>Data Pasca MBKM</span></a>
        </li>
        <!-- Nav Item - Lowongan -->
        <li class="nav-item active">
            <a class="nav-link" href="{{ route('lowongan.index') }}">
                <i class="fas fa-fw fa-briefcase"></i>
                <span>Lowongan MBKM</span></a>
        </li>
        <!-- Nav Item - Logbook -->
        <li class="nav-item active">
            <a class="nav-link" href="{{ route('logbook.admin-index') }}">
                <i class="fas fa-fw fa-book"></i>
                <span>Logbook</span></a>
        </li>
        <!-- Nav Item - Seleksi -->
        <li class="nav-item active">
            <a class="nav-link" href="{{ route('daftarmbkm.index') }}">
                <i class="fas fa-user-check"></i>
                <span>Seleksi</span></a>
        </li>
    @endcan

    @can('kaprodi')
        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center">
            <div class="sidebar-brand-icon">
                <img src="/img/upn.png" alt="" class="logo">
            </div>
            <div class="sidebar-brand-text mx-3">KAPRODI</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="/dashboard">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="{{ route('prambkm.index') }}">
                <i class="fas fa-fw fa-clipboard-list"></i>
                <span>Data Pra MBKM</span></a>
        </li>
    @endcan

    @can('pic')
        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center">
            <div class="sidebar-brand-icon">
                <img src="/img/upn.png" alt="" class="logo">
            </div>
            <div class="sidebar-brand-text mx-3">PIC</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="/dashboard">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>
        <!-- Nav Item - Pra -->
        <li class="nav-item active">
            <a class="nav-link" href="{{ route('prambkm.index') }}">
                <i class="fas fa-fw fa-clipboard-list"></i>
                <span>Data Pra MBKM</span></a>
        </li>
        <!-- Nav Item - Pasca -->
        <li class="nav-item active">
            <a class="nav-link" href="{{ route('pascambkm.index') }}">
                <i class="fas fa-fw fa-clipboard-check"></i>
                <span>Data Pasca MBKM</span></a>
        </li>
        <!-- Nav Item - Lowongan -->
        <li class="nav-item active">
            <a class="nav-link" href="{{ route('lowongan.index') }}">
                <i class="fas fa-fw fa-briefcase"></i>
                <span>Lowongan MBKM</span></a>
        </li>
    @endcan

    @can('staff')
        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center">
            <div class="sidebar-brand-icon">
                <img src="/img/upn.png" alt="" class="logo">
            </div>
            <div class="sidebar-brand-text mx-3">STAFF</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="/dashboard">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>
        <!-- Nav Item - Pra -->
        <li class="nav-item active">
            <a class="nav-link" href="{{ route('prambkm.index') }}">
                <i class="fas fa-fw fa-clipboard-list"></i>
                <span>Data Pra MBKM</span></a>
        </li>
        <!-- Nav Item - Pasca -->
        <li class="nav-item active">
            <a class="nav-link" href="{{ route('pascambkm.index') }}">
                <i class="fas fa-fw fa-clipboard-check"></i>
                <span>Data Pasca MBKM</span></a>
        </li>
        <!-- Nav Item - Lowongan -->
        <li class="nav-item active">
            <a class="nav-link" href="{{ route('lowongan.index') }}">
                <i class="fas fa-fw fa-briefcase"></i>
                <span>Lowongan MBKM</span></a>
        </li>
    @endcan

    @can('mitra')
        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center">
            <div class="sidebar-brand-icon">
                <img src="/img/upn.png" alt="" class="logo">
            </div>
            <div class="sidebar-brand-text mx-3">MITRA</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="/dashboard">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>
        <!-- Nav Item - Lowongan -->
        <li class="nav-item active">
            <a class="nav-link" href="{{ route('lowongan.index') }}">
                <i class="fas fa-fw fa-briefcase"></i>
                <span>Lowongan MBKM</span></a>
        </li>
        <!-- Nav Item - Seleksi -->
        <li class="nav-item active">
            <a class="nav-link" href="{{ route('daftarmbkm.index') }}">
                <i class="fas fa-user-check"></i>
                <span>Seleksi</span></a>
        </li>
    @endcan

    @can('dosen')
        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center">
            <div class="sidebar-brand-icon">
                <img src="/img/upn.png" alt="" class="logo">
            </div>
            <div class="sidebar-brand-text mx-3">DOSEN</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="/dashboard">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>
        <!-- Nav Item - Pasca -->
        <li class="nav-item active">
            <a class="nav-link" href="{{ route('pascambkm.index') }}">
                <i class="fas fa-fw fa-clipboard-check"></i>
                <span>Data Pasca MBKM</span></a>
        </li>
        <!-- Nav Item - Logbook -->
        <li class="nav-item active">
            <a class="nav-link" href="{{ route('logbook.admin-index') }}">
                <i class="fas fa-fw fa-book"></i>
                <span>Logbook</span></a>
        </li>
    @endcan

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
