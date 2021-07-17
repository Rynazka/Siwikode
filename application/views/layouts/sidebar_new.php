<!-- Sidebar -->
<ul class="navbar-nav back-blue text-dark sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="http://localhost/siwikodeazka/wisata">
        <div class="sidebar-brand-icon">
        <img src="<?= base_url('assets/'); ?>pic/logotab.png" alt="Logo Depok" width="50px" haight="50px">
        </div>
        <div class="sidebar-brand-text mx-3">SIWIKODE</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading Administrator -->
    <div class="sidebar-heading">
        Dashboard
    </div>

    <!-- Divider -->
    <!-- <hr class="sidebar-divider"> -->

    <!-- Nav Item - Dashboard -->
    <li class="nav-item tapungu">
        <a class="nav-link" href="http://localhost/siwikodeazka/rekreasi">
            <i class="fas fa-fw fa-tree"></i>
            <span class=""><b>Wisata Rekreasi</b></span></a>
    </li>

    <!-- Divider -->
    <!-- <hr class="sidebar-divider"> -->

    <!-- Nav Item - Dashboard -->
    <li class="nav-item tapungu">
        <a class="nav-link" href="http://localhost/siwikodeazka/kuliner">
            <i class="fas fa-fw fa-utensils"></i>
            <span class=""><b>Wisata Kuliner</b></span></a>
    </li>
    <!-- Heading Administrator -->
    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading Administrator -->
    <div class="sidebar-heading">
        Wisata Baru
    </div>
    <li class="nav-item tapungu">
        <a class="nav-link" href="http://localhost/siwikodeazka/wisata/create">
            <i class="fas fa-fw fa-cog"></i>
            <span class=""><b>Buat Wisata</b></span>
        </a>
    </li>




    <!-- Nav Item - Dashboard -->


    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading Administrator -->
    <div class="sidebar-heading">
        Developer
    </div>

    <!-- Nav Item - Dashboard -->
    <li class="nav-item tapungu">
        <a class="nav-link" href="">
            <i class="fas fa-fw fa-users"></i>
            <span class=""><b>Our Team</b></span></a>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Charts -->
    <li class="nav-item tapungu">
        <a class="nav-link" href="<?= base_url('auth/logout'); ?>" data-toggle="modal" data-target="#logoutModal">
            <i class="fas fa-fw fa-sign-out-alt"></i>
            <span class=""><b>Logout</b></span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->