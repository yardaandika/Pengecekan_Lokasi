<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon">
            <img class="rounded-circle" src="img/PU.png" width="45px" height="45px" alt="...">
        </div>
        <div class="sidebar-brand-text mx-3">LOKASI PEKERJAAN</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item <?= basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : '' ?>">
        <a class="nav-link" href="index.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Data Lokasi -->
    <li class="nav-item <?= basename($_SERVER['PHP_SELF']) == 'tampil_data.php' ? 'active' : '' ?>">
        <a class="nav-link" href="tampil_data.php">
            <i class="fas fa-fw fa-user-friends"></i>
            <span>Data Lokasi</span>
        </a>
    </li>

    <!-- Nav Item - Tambah Data -->
    <li class="nav-item <?= basename($_SERVER['PHP_SELF']) == 'tambah_data.php' ? 'active' : '' ?>">
        <a class="nav-link" href="tambah_data.php">
            <i class="fas fa-fw fa-user-friends"></i>
            <span>Tambah Data</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->
